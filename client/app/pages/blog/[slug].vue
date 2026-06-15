<template>
  <main class="pt-24" v-if="post">
    <!-- Breadcrumbs -->
    <div class="max-w-container-max mx-auto px-margin-mobile mb-8">
      <nav class="flex items-center gap-2 text-label-sm font-label-sm text-on-surface-variant">
        <NuxtLink class="hover:text-primary" to="/">Home</NuxtLink>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <NuxtLink class="hover:text-primary" to="/blog">Blog</NuxtLink>
        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
        <span class="text-on-surface line-clamp-1">{{ post.title }}</span>
      </nav>
    </div>

    <!-- Hero Section -->
    <header class="max-w-container-max mx-auto px-margin-mobile mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
        <div class="lg:col-span-8">
          <div class="mb-6 flex items-center gap-4">
            <span class="px-3 py-1 bg-primary/10 text-on-primary-container dark:text-primary border border-primary/20 rounded-full text-label-sm font-label-sm uppercase tracking-wider">
              {{ post.category?.name || categoriesMap[post.category_id] || 'General' }}
            </span>
            <span class="text-on-surface-variant font-label-sm text-label-sm italic">
              {{ formatDate(post.created_at) }} • {{ getReadTime(post.time_to_read) }}
            </span>
          </div>
          <h1 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface leading-tight mb-8">
            {{ post.title }}
          </h1>
        </div>
      </div>
      <div class="relative w-full aspect-[21/9] rounded-3xl overflow-hidden border border-subtle group">
        <img :alt="post.title" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" :src="getImageUrl(post.image_url)" @error="(e) => e.target.src = TEMPLATE_IMAGE"/>
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-60"></div>
      </div>
    </header>

    <!-- Post Content Section -->
    <article class="max-w-container-max mx-auto px-margin-mobile pb-section-padding">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter relative">
        <!-- Social Share Column (Desktop) -->
        <aside class="hidden lg:block lg:col-span-1">
          <div class="sticky top-32 flex flex-col items-center gap-6">
            <button 
              @click="sharePost"
              class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all cursor-pointer"
              title="Share Article"
            >
              <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">share</span>
            </button>
            <button 
              @click="copyLink"
              class="w-12 h-12 rounded-full glass-card flex items-center justify-center transition-all cursor-pointer"
              :class="copied ? 'text-primary border-primary/50' : 'text-on-surface-variant hover:text-primary hover:border-primary/40'"
              title="Copy Link"
            >
              <span class="material-symbols-outlined">{{ copied ? 'check' : 'link' }}</span>
            </button>
          </div>
        </aside>

        <!-- Body Text Content -->
        <div class="lg:col-span-8 prose prose-lg max-w-none
            prose-headings:font-bold
            prose-headings:text-gray-900
            prose-p:text-gray-700
            prose-p:leading-8
            prose-a:text-blue-600
            prose-img:rounded-xl
            prose-pre:bg-gray-900">
          <div v-html="post.content"></div>
          
          <!-- Tags -->
          <div class="flex flex-wrap gap-2 pt-8 border-t border-subtle mt-12">
            <span class="text-label-sm font-label-sm text-on-surface-variant">Tags:</span>
            <span v-for="tag in post.tags" :key="tag" class="px-3 py-1 glass-card rounded-lg text-label-sm font-label-sm text-on-surface-variant">
              {{ tag }}
            </span>
          </div>
        </div>

        <!-- Author Sidebar (Desktop) -->
        <aside class="lg:col-span-3">
          <div class="sticky top-32 space-y-gutter">
            <!-- Author Card -->
            <div class="glass-card rounded-2xl p-6">
              <h4 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-widest mb-4">Author</h4>
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full overflow-hidden border border-primary/30">
                  <img :alt="postAuthor.name" class="w-full h-full object-cover" :src="postAuthor.avatar"/>
                </div>
                <div>
                  <p class="text-body-md font-bold text-on-surface">{{ postAuthor.name }}</p>
                  <p class="text-label-sm text-on-surface-variant">{{ postAuthor.role }}</p>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </article>

    <!-- Related Insights Section -->
    <section class="bg-surface-dim py-section-padding border-t border-subtle">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="flex items-center justify-between mb-10">
          <h2 class="font-headline-md text-headline-md text-on-surface">Related Insights</h2>
          <NuxtLink class="text-primary hover:underline font-label-sm text-label-sm flex items-center gap-2" to="/blog">
            View All Posts <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </NuxtLink>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
          <div v-for="related in relatedPosts" :key="related.slug" class="group cursor-pointer">
            <NuxtLink :to="`/blog/${related.slug}`">
              <div class="aspect-video rounded-2xl overflow-hidden mb-4 border border-subtle relative">
                <img :alt="related.title" class="w-full h-full object-cover transition-transform group-hover:scale-105" :src="getImageUrl(related.image_url)" @error="(e) => e.target.src = TEMPLATE_IMAGE"/>
                <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/5 transition-colors"></div>
              </div>
              <span class="text-label-sm font-label-sm text-primary mb-2 block uppercase tracking-wider">
                {{ categoriesMap[related.category_id] || 'General' }}
              </span>
              <h3 class="font-body-lg text-body-lg font-bold group-hover:text-primary transition-colors leading-tight mb-2 text-on-surface">
                {{ related.title }}
              </h3>
              <p class="text-label-sm font-label-sm text-on-surface-variant line-clamp-2">{{ related.description }}</p>
            </NuxtLink>
          </div>
        </div>

        <!-- Related Blogs Pagination -->
        <div v-if="relatedTotalPages > 1" class="mt-12 flex items-center justify-center gap-2">
          <button 
            :disabled="relatedPage === 1"
            @click="relatedPage > 1 && (relatedPage--)"
            class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer disabled:opacity-30 disabled:cursor-not-allowed"
          >
            <span class="material-symbols-outlined">chevron_left</span>
          </button>
          
          <template v-for="(page, idx) in displayedRelatedPages" :key="idx">
            <span v-if="page === '...'" class="text-on-surface-variant mx-2">...</span>
            <button 
              v-else
              @click="relatedPage = page"
              class="w-10 h-10 rounded-lg font-bold cursor-pointer transition-all"
              :class="relatedPage === page ? 'bg-primary text-on-primary-container' : 'border border-subtle text-on-surface-variant hover:border-primary hover:text-primary'"
            >
              {{ page }}
            </button>
          </template>
          
          <button 
            :disabled="relatedPage === relatedTotalPages"
            @click="relatedPage < relatedTotalPages && (relatedPage++)"
            class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer disabled:opacity-30 disabled:cursor-not-allowed"
          >
            <span class="material-symbols-outlined">chevron_right</span>
          </button>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const relatedPage = ref(1)
const copied = ref(false)

const copyLink = () => {
  if (import.meta.client || process.client) {
    navigator.clipboard.writeText(window.location.href)
      .then(() => {
        copied.value = true
        setTimeout(() => {
          copied.value = false
        }, 2000)
      })
      .catch(err => {
        console.error('Failed to copy text: ', err)
      })
  }
}

const sharePost = async () => {
  if ((import.meta.client || process.client) && navigator.share) {
    try {
      await navigator.share({
        title: post.value?.title || 'wappCAST Blog',
        text: post.value?.description || post.value?.excerpt || '',
        url: window.location.href
      })
    } catch (err) {
      if (err.name !== 'AbortError') {
        console.error('Error sharing:', err)
      }
    }
  } else {
    copyLink()
  }
}

// Fetch single blog post from Backend reactively watching page query
const { data: apiResponse } = await useFetch(() => `http://localhost:8000/api/blogs/${route.params.slug}`, {
  query: computed(() => ({ page: relatedPage.value })),
  watch: [relatedPage]
})
const post = computed(() => apiResponse.value?.blog || apiResponse.value?.data?.blog)

// Fetch related blogs from Backend
const relatedPosts = computed(() => {
  const relatedObj = apiResponse.value?.relatedBlogs || apiResponse.value?.data?.relatedBlogs
  return relatedObj?.data || []
})

const relatedMeta = computed(() => {
  return apiResponse.value?.relatedBlogs || apiResponse.value?.data?.relatedBlogs
})

const relatedTotalPages = computed(() => relatedMeta.value?.last_page || 1)

const displayedRelatedPages = computed(() => {
  const current = relatedPage.value
  const last = relatedTotalPages.value
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

// Fetch categories from Backend
const { data: categoriesResponse } = await useFetch('http://localhost:8000/api/categories')
const categoriesList = computed(() => categoriesResponse.value?.data || [])

// Map category IDs to names for O(1) lookups in template
const categoriesMap = computed(() => {
  const map = {}
  categoriesList.value.forEach(c => {
    map[c.id] = c.name
  })
  return map
})

// Fallback Author detail if backend doesn't provide
const postAuthor = computed(() => {
  return post.value?.author || {
    name: "wappCAST & Owners",
    role: "Founders & Editorial Team",
    avatar: "/wappCAST-logo.png"
  }
})

const TEMPLATE_IMAGE = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY'

// Helper: Format image URLs
const getImageUrl = (url) => {
  if (!url) return TEMPLATE_IMAGE
  if (url.startsWith('http://') || url.startsWith('https://')) {
    return url
  }
  return `http://localhost:8000/storage/${url}`
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

// Dynamic SEO setup for blog details page
useSeoMeta({
  title: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  ogTitle: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  description: () => post.value?.description || post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  ogDescription: () => post.value?.description || post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  ogImage: () => getImageUrl(post.value?.image_url),
  ogUrl: () => `https://wappcast.com/blog/${post.value?.slug}`,
  ogType: 'article',
  twitterCard: 'summary_large_image',
  twitterTitle: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  twitterDescription: () => post.value?.description || post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  twitterImage: () => getImageUrl(post.value?.image_url),
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: () => `https://wappcast.com/blog/${post.value?.slug || ''}` }
  ]
})

// Dynamic Schema.org Structured Data
useSchemaOrg([
  defineArticle({
    headline: () => post.value?.title || 'Blog Insights',
    description: () => post.value?.description || post.value?.excerpt || 'WhatsApp Marketing API Insights.',
    image: () => getImageUrl(post.value?.image_url),
    datePublished: () => post.value?.created_at || '2024-10-24',
    author: [
      {
        name: () => postAuthor.value.name
      }
    ]
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: () => post.value?.title || 'wappCAST Insights',
  description: () => post.value?.description || post.value?.excerpt || 'Strategies and compliance guides for official WhatsApp Business API marketing.',
  theme: '#10b981',
  colorMode: 'dark'
})
</script>
