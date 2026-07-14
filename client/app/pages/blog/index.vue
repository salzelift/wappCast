<template>
  <main class="pt-32 pb-section-padding">
    <!-- Hero Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile mb-16 text-center">
      <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full border border-primary/30 bg-primary/10 text-on-primary-container dark:text-primary mb-6">
        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">verified</span>
        <span class="text-label-sm font-label-sm">OFFICIAL META API RESOURCES</span>
      </div>
      <h1 class="text-display-hero-mobile md:text-display-hero font-display-hero mb-6 tracking-tight">
        Insights for <span class="text-primary">WhatsApp</span> Growth
      </h1>
      <p class="text-body-lg font-body-lg text-on-surface-variant max-w-2xl mx-auto">
        Strategies, updates, and deep dives into the world of official WhatsApp Business API automation and customer engagement.
      </p>
    </section>

    <!-- Filters & Search -->
    <section class="max-w-container-max mx-auto px-margin-mobile mb-12">
      <div class="glass-card rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center justify-between">
        <!-- Search Bar -->
        <div class="relative w-full md:w-96">
          <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
          <input 
            v-model="searchQuery"
            class="w-full bg-surface-container-lowest border border-subtle rounded-xl py-3 pl-12 pr-4 focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-body-md font-body-md transition-all text-on-surface" 
            placeholder="Search articles..." 
            type="text"
          />
        </div>
        <!-- Categories -->
        <div class="flex flex-wrap items-center gap-3">
          <button 
            @click="selectedCategory = null"
            class="px-5 py-2 rounded-full font-semibold text-label-sm transition-all cursor-pointer"
            :class="!selectedCategory ? 'bg-primary text-on-primary-container' : 'border border-subtle hover:border-primary/50 text-on-surface-variant hover:text-on-surface'"
          >
            All
          </button>
          <button 
            v-for="cat in categoriesList" 
            :key="cat.id"
            @click="selectedCategory = cat"
            class="px-5 py-2 rounded-full font-semibold text-label-sm transition-all cursor-pointer"
            :class="selectedCategory && selectedCategory.id === cat.id ? 'bg-primary text-on-primary-container' : 'border border-subtle hover:border-primary/50 text-on-surface-variant hover:text-on-surface'"
          >
            {{ cat.name }}
          </button>
        </div>
      </div>
    </section>

    <!-- Blog Grid -->
    <section class="max-w-container-max mx-auto px-margin-mobile">
      <div v-if="filteredPosts.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
        <article 
          v-for="post in filteredPosts" 
          :key="post.slug" 
          class="glass-card rounded-2xl overflow-hidden group glow-hover transition-all flex flex-col"
        >
          <div class="aspect-video relative overflow-hidden">
            <img 
              :alt="post.title" 
              class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
              :src="getImageUrl(post.image_url)"
              referrerpolicy="no-referrer"
              @error="(e) => e.target.src = TEMPLATE_IMAGE"
            />
            <div class="absolute top-4 left-4">
              <span class="bg-primary/20 backdrop-blur-md text-primary px-3 py-1 rounded-lg text-[12px] font-bold border border-primary/30 uppercase">
                {{ categoriesMap[post.category_id] || 'General' }}
              </span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col">
            <div class="flex items-center gap-2 text-on-surface-variant text-label-sm font-label-sm mb-3">
              <span class="material-symbols-outlined text-[16px]">calendar_today</span>
              <span>{{ formatDate(post.created_at) }}</span>
              <span class="mx-1">•</span>
              <span class="material-symbols-outlined text-[16px]">schedule</span>
              <span>{{ getReadTime(post.time_to_read) }}</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-4 text-on-surface leading-tight group-hover:text-primary transition-colors">
              {{ post.title }}
            </h3>
            <p class="text-body-md font-body-md text-on-surface-variant mb-6 line-clamp-3">
              {{ post.description }}
            </p>
            <div class="mt-auto">
              <NuxtLink :to="`/blog/${post.slug}`" class="inline-flex items-center gap-2 text-primary font-bold group/link">
                Read More 
                <span class="material-symbols-outlined text-[18px] transition-transform group-hover/link:translate-x-1">arrow_forward</span>
              </NuxtLink>
            </div>
          </div>
        </article>
      </div>

      <!-- No Results State -->
      <div v-else class="text-center py-20">
        <span class="material-symbols-outlined text-[64px] text-on-surface-variant mb-4">search_off</span>
        <h3 class="text-headline-md font-headline-md text-on-surface mb-2">No articles found</h3>
        <p class="text-on-surface-variant">Try adjusting your keywords or category filters.</p>
      </div>

      <!-- Pagination -->
      <div v-if="totalPages > 1 && filteredPosts.length > 0" class="mt-16 flex items-center justify-center gap-2">
        <button 
          :disabled="currentPage === 1"
          @click="currentPage > 1 && (currentPage--)"
          class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer disabled:opacity-30 disabled:cursor-not-allowed"
        >
          <span class="material-symbols-outlined">chevron_left</span>
        </button>
        
        <template v-for="(page, idx) in displayedPages" :key="idx">
          <span v-if="page === '...'" class="text-on-surface-variant mx-2">...</span>
          <button 
            v-else
            @click="currentPage = page"
            class="w-10 h-10 rounded-lg font-bold cursor-pointer transition-all"
            :class="currentPage === page ? 'bg-primary text-on-primary-container' : 'border border-subtle text-on-surface-variant hover:border-primary hover:text-primary'"
          >
            {{ page }}
          </button>
        </template>
        
        <button 
          :disabled="currentPage === totalPages"
          @click="currentPage < totalPages && (currentPage++)"
          class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer disabled:opacity-30 disabled:cursor-not-allowed"
        >
          <span class="material-symbols-outlined">chevron_right</span>
        </button>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref, computed, watch } from 'vue'
import { useRoute, useRouter } from 'vue-router'

const route = useRoute()
const router = useRouter()

// Fetch categories from Backend
const { data: categoriesResponse } = await useFetch('/api/categories')
const categoriesList = computed(() => categoriesResponse.value?.data || [])

// Match URL category query on load
const initialCategory = categoriesList.value.find(c => c.slug === route.query.category) || null
const selectedCategory = ref(initialCategory)
const searchQuery = ref(route.query.search || '')
const currentPage = ref(Number(route.query.page) || 1)

// Sync URL query params with state changes (Back/Forward browser buttons support)
watch(() => route.query, (newQuery) => {
  searchQuery.value = newQuery.search || ''
  currentPage.value = Number(newQuery.page) || 1
  
  if (newQuery.category) {
    const match = categoriesList.value.find(c => c.slug === newQuery.category)
    selectedCategory.value = match || null
  } else {
    selectedCategory.value = null
  }
}, { deep: true })

// Push state changes to route query parameters
watch([selectedCategory, currentPage, searchQuery], () => {
  const nextQuery = {}
  
  if (selectedCategory.value) {
    nextQuery.category = selectedCategory.value.slug
  }
  
  if (currentPage.value > 1) {
    nextQuery.page = String(currentPage.value)
  }
  
  if (searchQuery.value) {
    nextQuery.search = searchQuery.value
  }
  
  // Compare to avoid infinite routing updates
  const hasChanged = 
    nextQuery.category !== route.query.category ||
    nextQuery.page !== (route.query.page || undefined) ||
    nextQuery.search !== (route.query.search || undefined)
    
  if (hasChanged) {
    router.push({
      path: route.path,
      query: nextQuery
    })
  }
})

// Map category IDs to names for O(1) lookups in template
const categoriesMap = computed(() => {
  const map = {}
  categoriesList.value.forEach(c => {
    map[c.id] = c.name
  })
  return map
})

// Build computed Fetch URL and Parameters based on selection
const fetchUrl = computed(() => {
  if (selectedCategory.value) {
    return `/api/categories/${selectedCategory.value.slug}`
  }
  return `/api/blogs`
})

const fetchParams = computed(() => {
  const params = {
    page: currentPage.value
  }
  if (searchQuery.value) {
    params.search = searchQuery.value
  }
  return params
})

// Reactively fetch blogs
const { data: blogsResponse } = await useFetch(fetchUrl, {
  query: fetchParams,
  watch: [fetchUrl, fetchParams]
})

// Reset current page when category filter or search input changes
watch([selectedCategory, searchQuery], () => {
  currentPage.value = 1
})

// Determine root arrays and pagination metadata depending on category selection
const posts = computed(() => {
  if (!blogsResponse.value) return []
  if (selectedCategory.value) {
    return blogsResponse.value.blogs?.data || []
  }
  return blogsResponse.value.data || []
})

const paginationMeta = computed(() => {
  if (!blogsResponse.value) return null
  if (selectedCategory.value) {
    return blogsResponse.value.blogs
  }
  return blogsResponse.value.meta
})

// Client-side search fallback when inside a selected category (backend does not filter categories by search query)
const filteredPosts = computed(() => {
  const allPosts = posts.value
  if (!selectedCategory.value || !searchQuery.value) {
    return allPosts
  }
  const query = searchQuery.value.toLowerCase()
  return allPosts.filter(p => 
    (p.title && p.title.toLowerCase().includes(query)) ||
    (p.description && p.description.toLowerCase().includes(query))
  )
})

// Pagination logic
const totalPages = computed(() => paginationMeta.value?.last_page || 1)

const displayedPages = computed(() => {
  const current = currentPage.value
  const last = totalPages.value
  const delta = 2
  const range = []
  const rangeWithDots = []
  let l
  
  for (let i = 1; i <= last; i++) {
    if (i === 1 || i === last || (i >= current - delta && i <= current + delta)) {
      range.push(i)
    }
  }
  
  for (const i of range) {
    if (l) {
      if (i - l === 2) {
        rangeWithDots.push(l + 1)
      } else if (i - l > 2) {
        rangeWithDots.push('...')
      }
    }
    rangeWithDots.push(i)
    l = i
  }
  
  return rangeWithDots
})

const TEMPLATE_IMAGE = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY'

// Helper: Format image URLs
const getImageUrl = (url) => {
  if (!url) return TEMPLATE_IMAGE
  
  let processedUrl = url
  if (processedUrl.startsWith('http://') || processedUrl.startsWith('https://')) {
    if (
      processedUrl.includes('localhost') || 
      processedUrl.includes('127.0.0.1') || 
      processedUrl.includes('206.189.131.166')
    ) {
      const storageIdx = processedUrl.indexOf('/storage/')
      if (storageIdx !== -1) {
        return processedUrl.substring(storageIdx)
      }
    }
    return processedUrl
  }
  return `/storage/${processedUrl}`
}

// Helper: Format date
const formatDate = (dateStr) => {
  if (!dateStr) return ''
  const date = new Date(dateStr)
  return date.toLocaleDateString('en-US', {
    month: 'short',
    day: 'numeric',
    year: 'numeric'
  })
}

// Helper: Format read time
const getReadTime = (time) => {
  if (!time) return '5 min read'
  if (time > 100) return '5 min read'
  return `${time} min read`
}

// Production-grade SEO setup for blog listing page
useSeoMeta({
  title: 'Official Meta WhatsApp API Blog & Marketing Insights | wappCAST',
  ogTitle: 'Official Meta WhatsApp API Blog & Marketing Insights | wappCAST',
  description: 'Get the latest strategies, guides, and updates on WhatsApp marketing, no-code chat automations, and Meta API integration from wappCAST\'s official insights blog.',
  ogDescription: 'Get the latest strategies, guides, and updates on WhatsApp marketing, no-code chat automations, and Meta API integration from wappCAST\'s official insights blog.',
  ogImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY',
  ogUrl: 'https://wappcast.com/blog',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Official Meta WhatsApp API Blog & Marketing Insights | wappCAST',
  twitterDescription: 'Get the latest strategies, guides, and updates on WhatsApp marketing, no-code chat automations, and Meta API integration from wappCAST\'s official insights blog.',
  twitterImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/blog' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'Official Meta WhatsApp API Blog & Marketing Insights | wappCAST',
    description: 'Get the latest strategies, guides, and updates on WhatsApp marketing, no-code chat automations, and Meta API integration from wappCAST\'s official insights blog.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'wappCAST Blog & Insights',
  description: 'Strategies, case studies, and compliance guides for official WhatsApp Business API marketing.',
  theme: '#10b981',
  colorMode: 'dark'
})
</script>