<template>
  <main class="pt-32 pb-section-padding">
    <!-- Hero Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile mb-16 text-center">
      <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full border border-primary/30 bg-primary/10 text-on-primary-container dark:text-primary mb-6">
        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">verified</span>
        <span class="text-label-sm font-label-sm">OFFICIAL META API BLOG</span>
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
            v-for="cat in categories" 
            :key="cat"
            @click="selectedCategory = cat"
            class="px-5 py-2 rounded-full font-semibold text-label-sm transition-all cursor-pointer"
            :class="selectedCategory === cat ? 'bg-primary text-on-primary-container' : 'border border-subtle hover:border-primary/50 text-on-surface-variant hover:text-on-surface'"
          >
            {{ cat }}
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
              :src="post.image"
            />
            <div class="absolute top-4 left-4">
              <span class="bg-primary/20 backdrop-blur-md text-primary px-3 py-1 rounded-lg text-[12px] font-bold border border-primary/30 uppercase">
                {{ post.category }}
              </span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col">
            <div class="flex items-center gap-2 text-on-surface-variant text-label-sm font-label-sm mb-3">
              <span class="material-symbols-outlined text-[16px]">calendar_today</span>
              <span>{{ post.date }}</span>
              <span class="mx-1">•</span>
              <span class="material-symbols-outlined text-[16px]">schedule</span>
              <span>{{ post.readTime }}</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-4 text-on-surface leading-tight group-hover:text-primary transition-colors">
              {{ post.title }}
            </h3>
            <p class="text-body-md font-body-md text-on-surface-variant mb-6 line-clamp-3">
              {{ post.excerpt }}
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
      <div v-if="filteredPosts.length > 0" class="mt-16 flex items-center justify-center gap-2">
        <button class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer">
          <span class="material-symbols-outlined">chevron_left</span>
        </button>
        <button class="w-10 h-10 rounded-lg bg-primary text-on-primary-container font-bold cursor-pointer">1</button>
        <button class="w-10 h-10 rounded-lg border border-subtle text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer">2</button>
        <button class="w-10 h-10 rounded-lg border border-subtle text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer">3</button>
        <span class="text-on-surface-variant mx-2">...</span>
        <button class="w-10 h-10 rounded-lg border border-subtle text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer">8</button>
        <button class="w-10 h-10 rounded-lg border border-subtle flex items-center justify-center text-on-surface-variant hover:border-primary hover:text-primary transition-all cursor-pointer">
          <span class="material-symbols-outlined">chevron_right</span>
        </button>
      </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="max-w-container-max mx-auto px-margin-mobile mt-section-padding">
      <div class="relative rounded-3xl overflow-hidden glass-card p-12 text-center border-primary/20">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
        <div class="relative z-10 max-w-2xl mx-auto">
          <h2 class="text-headline-lg font-headline-lg mb-4">Never Miss a Strategy</h2>
          <p class="text-body-lg font-body-lg text-on-surface-variant mb-8">Join 5,000+ marketers receiving weekly WhatsApp growth hacks and API updates directly in their inbox.</p>
          <form class="flex flex-col sm:flex-row gap-3" @submit.prevent="subscribeNewsletter">
            <input 
              v-model="emailAddress"
              class="flex-grow bg-surface-container-lowest border border-subtle rounded-xl px-6 py-4 outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all text-on-surface" 
              placeholder="Enter your email" 
              required
              type="email"
            />
            <button class="bg-primary text-on-primary-container font-bold px-8 py-4 rounded-xl shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all cursor-pointer" type="submit">
              {{ isSubscribed ? 'Subscribed!' : 'Subscribe Now' }}
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref, computed } from 'vue'

const searchQuery = ref('')
const selectedCategory = ref('All')
const emailAddress = ref('')
const isSubscribed = ref(false)

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

const categories = ['All', 'Automation', 'Meta API', 'Marketing', 'Productivity', 'Case Study', 'Developer', 'Compliance', 'Ecommerce']

const subscribeNewsletter = () => {
  isSubscribed.value = true
  setTimeout(() => {
    emailAddress.value = ''
    isSubscribed.value = false
  }, 3000)
}

const posts = [
  {
    title: "How the Official WhatsApp API Can 10x Your Reply Rates",
    slug: "how-whatsapp-api-can-10x-reply-rates",
    category: "Meta API",
    date: "Oct 24, 2024",
    readTime: "5 min read",
    excerpt: "Stop getting lost in cluttered email inboxes. Learn how businesses are achieving 98% open rates and instant customer engagement using wappCAST's official Meta solutions.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY"
  },
  {
    title: "Building a Sales Machine on WhatsApp: A Complete Guide",
    slug: "building-sales-machine-whatsapp",
    category: "Automation",
    date: "Oct 18, 2024",
    readTime: "8 min read",
    excerpt: "From lead generation to final checkout, discover how to automate your entire sales funnel within WhatsApp. No code required, just smart conversation flows.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDe1ExVtULCGNUlfB6SFkd5EIIOTyTuIZkeKHKTKZ1hZUnFqHVJBGZp7_PXAgDf80jOGPim_BMpSlb8AbnLpEF8p40H-t5u4mSfe7Y_Zc7zTQFx-LbKii6YtuD0uRObMv6HKk-0BKt5qr7asB0qlZ_B6shF1POxKV3l8sLY6ICvUyTvJr_HP56HM1EG9e-Tu2XBp00Q2zEf74yOeZq4Mm0tGioWpr37VOL370dFTQhCL6jlbJkP8l781RtaRLKxhXSDf-yMZxVcWIVl"
  },
  {
    title: "Zero Missed Leads: How Real Estate Firms Scale with wappCAST",
    slug: "zero-missed-leads-real-estate",
    category: "Case Study",
    date: "Oct 12, 2024",
    readTime: "6 min read",
    excerpt: "See how our unified team inbox helped a leading real estate agency manage 5,000+ monthly inquiries without missing a single potential buyer.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDHNxiB9EbYf-lpIskrrA4xUotAKMmgVSTzEUsuM4yS6iTKGvhrS3N7g1xJo05jX4zOZQE78LuKUooNuuIhmuxAzH4Bcl1ezT4UKALG6AniznQvhZ1ZSXzlAQ17AodCDn9oUukJq8EqKYMjUIcIQ_IHQGcOIfJHYkJ6eorKLQk1DpdfG-BPJ-0qapCnRZUpZa-mVJeSc0SvbVqnwTkH7lNnCJ4K1m35dkfrknRyvz7rxGjL9BgMC65TTAHr3kVFPAfu3Yh8zxbRvhWT"
  },
  {
    title: "Mastering Webhooks: Real-time Integration with wappCAST",
    slug: "mastering-webhooks-real-time-integration",
    category: "Developer",
    date: "Sep 28, 2024",
    readTime: "10 min read",
    excerpt: "A technical deep dive for developers on how to sync your CRM and external databases with WhatsApp messaging events seamlessly.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDp6-Kpuhw_Jf1WjykotvbvlJjMVhPM9ZLAjzZr9wl6CJ-dF-zRM-YeUzMA7_iLAMzD0uhjbFcTvsIk1l9wTX1kviEd9LqwD8Jf6ohZQttHWF0hlaSk1913xlthFaRiybAVn9pBu7FoI2y_-BHjX0QIidszOdLzR0qiIEU8MdMFqcH-xODYUkC6T8SyyLrYLutQDhfYY22uvHZM2i_Qe_FpIURtzvFH9_at374n_enEUXSmPDQsEqsvD5sbfjuW1HatBNZzMvIhkYET"
  },
  {
    title: "Ban-Proof Your Marketing: The Official API Advantage",
    slug: "ban-proof-your-marketing-official-api",
    category: "Compliance",
    date: "Sep 15, 2024",
    readTime: "4 min read",
    excerpt: "Why unofficial workarounds get you banned and how the Meta-approved Business API protects your number and brand reputation.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuBV5Nvut7Dz2tp_qmCwjSUxdrM5Nr8e21cwC2BZaIFxDK6nWxeK8IJAtGoXXzVTr7tpuIqhmjQumzBu-Hqblp3sfw0OYXEItnDKbqksFZLH_go5zRvkVzlg5cXWSqL33jXZpwfboBnEdH8eeQCe6pkmkrIHV-NJmRsI7srNnYYOipHzjFY6cGZ2-kJX_Ep2x19loflKK5I84mukfdCJKVsEHZ8UL2O55-X9IgwTlcOeCh-0bhIozH8xb0TZ9L-zNeJuNeVWtLZfAwiG"
  },
  {
    title: "Transforming WhatsApp into a Shoppable Experience",
    slug: "transforming-whatsapp-shoppable-experience",
    category: "Ecommerce",
    date: "Sep 02, 2024",
    readTime: "7 min read",
    excerpt: "How to set up catalogs, manage orders, and collect payments without ever leaving the chat interface. The future of mobile commerce.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuCRONGQRCVZwunwmT6HRI_UwgD7uqv6Kds7SyLKAPyKKS5fCEvKPnpt-4RqcILssdylJonqFKf5Y30XrAgtNT1Tq4JzH5h1XrzEkP3Vi6PuzSP3tQjR1SOydE3QLJI1cgvj4pzAQrP9DXnGctFcjjf4hFQIXUQRS1jlnZDFZC8H41cTchEORSbxSvm5hzBW7cye242-bDOC4fZjz2g-LfciE9ANYOdryuDvfEr34TVD5AusJt4hG8MSeMHjXQqFYeWwvPS30fMJ5Fax"
  }
]

const filteredPosts = computed(() => {
  return posts.filter(post => {
    const matchesSearch = post.title.toLowerCase().includes(searchQuery.value.toLowerCase()) || 
                          post.excerpt.toLowerCase().includes(searchQuery.value.toLowerCase())
    const matchesCategory = selectedCategory.value === 'All' || post.category === selectedCategory.value
    return matchesSearch && matchesCategory
  })
})
</script>
