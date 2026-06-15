import { defineSitemapEventHandler } from '#imports'

interface BlogItem {
  slug: string
  updated_at?: string
}

interface ApiResponse {
  data: BlogItem[]
  meta?: {
    last_page?: number
  }
}

export default defineSitemapEventHandler(async () => {
  const urls: { loc: string; lastmod?: string }[] = []
  try {
    // Fetch page 1 first to determine how many pages we need to fetch
    const firstPageResponse = await $fetch<ApiResponse>('http://localhost:8000/api/blogs?page=1')
    
    if (firstPageResponse?.data && Array.isArray(firstPageResponse.data)) {
      // Map URLs from the first page
      for (const blog of firstPageResponse.data) {
        if (blog.slug) {
          urls.push({
            loc: `/blog/${blog.slug}`,
            lastmod: blog.updated_at
          })
        }
      }

      // Determine last page from meta pagination
      const lastPage = firstPageResponse.meta?.last_page || 1

      // Fetch the rest of the pages in parallel (with safe catch handlers)
      const fetchPromises = []
      for (let page = 2; page <= lastPage; page++) {
        fetchPromises.push(
          $fetch<ApiResponse>(`http://localhost:8000/api/blogs?page=${page}`)
            .then((res) => {
              if (res?.data && Array.isArray(res.data)) {
                for (const blog of res.data) {
                  if (blog.slug) {
                    urls.push({
                      loc: `/blog/${blog.slug}`,
                      lastmod: blog.updated_at
                    })
                  }
                }
              }
            })
            .catch(err => {
              console.error(`[Sitemap] Failed to fetch page ${page}:`, err)
            })
        )
      }

      // Wait for all remaining pages to be fetched
      await Promise.all(fetchPromises)
    }
  } catch (error) {
    console.error('[Sitemap] Failed to fetch blogs for sitemap dynamic URLs:', error)
  }

  // Deduplicate and return URLs
  const uniqueUrlsMap = new Map<string, { loc: string; lastmod?: string }>()
  for (const item of urls) {
    uniqueUrlsMap.set(item.loc, item)
  }
  return Array.from(uniqueUrlsMap.values())
})
