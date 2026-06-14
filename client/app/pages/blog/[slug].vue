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
              {{ post.category }}
            </span>
            <span class="text-on-surface-variant font-label-sm text-label-sm italic">
              {{ post.date }} • {{ post.readTime }}
            </span>
          </div>
          <h1 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface leading-tight mb-8">
            {{ post.title }}
          </h1>
        </div>
      </div>
      <div class="relative w-full aspect-[21/9] rounded-3xl overflow-hidden border border-subtle group">
        <img :alt="post.title" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" :src="post.image"/>
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent opacity-60"></div>
      </div>
    </header>

    <!-- Post Content Section -->
    <article class="max-w-container-max mx-auto px-margin-mobile pb-section-padding">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter relative">
        <!-- Social Share Column (Desktop) -->
        <aside class="hidden lg:block lg:col-span-1">
          <div class="sticky top-32 flex flex-col items-center gap-6">
            <button class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all cursor-pointer">
              <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">share</span>
            </button>
            <button class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all cursor-pointer">
              <span class="material-symbols-outlined">link</span>
            </button>
          </div>
        </aside>

        <!-- Body Text Content -->
        <div class="lg:col-span-8 prose prose-invert max-w-none">
          <div v-html="post.content"></div>
          
          <!-- Tags -->
          <div class="flex flex-wrap gap-2 pt-8 border-t border-subtle mt-12">
            <span class="text-label-sm font-label-sm text-on-surface-variant">Tags:</span>
            <a v-for="tag in post.tags" :key="tag" class="px-3 py-1 glass-card rounded-lg text-label-sm font-label-sm hover:text-primary transition-colors" href="#">
              {{ tag }}
            </a>
          </div>
        </div>

        <!-- Author Sidebar (Desktop) -->
        <aside class="lg:col-span-3">
          <div class="sticky top-32 space-y-gutter">
            <!-- Newsletter Signup -->
            <div class="glass-card rounded-2xl p-6 border-primary/20 relative overflow-hidden">
              <div class="absolute -right-10 -top-10 w-24 h-24 bg-primary/20 blur-3xl"></div>
              <h4 class="font-headline-md text-body-lg font-bold mb-4">Subscribe to Insights</h4>
              <p class="text-label-sm font-label-sm text-on-surface-variant mb-4">Get the latest on WhatsApp marketing and Meta API updates.</p>
              <form class="space-y-3" @submit.prevent="subscribe">
                <input 
                  v-model="email"
                  class="w-full bg-background border border-subtle rounded-xl px-4 py-3 text-label-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-on-surface" 
                  placeholder="Email address" 
                  required
                  type="email"
                />
                <button class="w-full bg-primary text-on-primary py-3 rounded-xl font-label-sm text-label-sm hover:shadow-glow-emerald transition-all cursor-pointer">
                  {{ isSubscribed ? 'Joined!' : 'Join List' }}
                </button>
              </form>
            </div>
            
            <!-- Author Card -->
            <div class="glass-card rounded-2xl p-6">
              <h4 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-widest mb-4">Author</h4>
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full overflow-hidden border border-primary/30">
                  <img :alt="post.author.name" class="w-full h-full object-cover" :src="post.author.avatar"/>
                </div>
                <div>
                  <p class="text-body-md font-bold text-on-surface">{{ post.author.name }}</p>
                  <p class="text-label-sm text-on-surface-variant">{{ post.author.role }}</p>
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
                <img :alt="related.title" class="w-full h-full object-cover transition-transform group-hover:scale-105" :src="related.image"/>
                <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/5 transition-colors"></div>
              </div>
              <span class="text-label-sm font-label-sm text-primary mb-2 block uppercase tracking-wider">{{ related.category }}</span>
              <h3 class="font-body-lg text-body-lg font-bold group-hover:text-primary transition-colors leading-tight mb-2 text-on-surface">
                {{ related.title }}
              </h3>
              <p class="text-label-sm font-label-sm text-on-surface-variant line-clamp-2">{{ related.excerpt }}</p>
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const email = ref('')
const isSubscribed = ref(false)

const subscribe = () => {
  isSubscribed.value = true
  setTimeout(() => {
    email.value = ''
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
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuCikwuipb4tcY_c7NHAwPgVtPx2MhR4O5mtElbALZ6nM-pNwpAMVlEnXOtvA6G8XP9pJj7U3gpRfSFrkL9nKcDIoy1E9PZO7T1CfBUIUOO9wwmApHk20mmUdECqRYtVz4zpc8S8xfW5QAjraquycO5f0rkSEH2lin5eLKPkvKTnFLem_5MBK3-tqXgClikXMG9BevpK-60Mc1oAZZgA3CllK2keaOcEnEPvwBIjYBDBN1CCy5wQwv6myS5EHmbW52AxFjgYcC3AOzAY",
    tags: ["WhatsApp API", "Marketing Strategy", "Automation"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        In the rapidly evolving world of business communication, WhatsApp has emerged as the undisputed leader. With open rates crossing 98%, it’s where your customers are. But as businesses flock to the platform, a critical choice emerges: do you use unofficial workarounds or the Official Meta API?
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">The Danger of "Gray" Solutions</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        Many businesses start with automation tools that use the personal or business app version. While tempting for their low initial cost, these "gray" solutions carry massive risks. From sudden number bans to lack of encryption and limited scale, you're building your house on sand.
      </p>
      <div class="glass-card rounded-2xl p-8 my-10 border-l-4 border-l-primary">
        <h4 class="font-bold text-primary mb-2">💡 Pro Tip</h4>
        <p class="font-body-md text-body-md italic text-on-surface">
          "Meta's official API is built specifically for businesses to scale. It offers a 99.9% uptime guarantee and provides the only 'Green Tick' verified business badge path."
        </p>
      </div>
      <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Why wappCAST Chooses Official</h3>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        At wappCAST, we’ve built our entire infrastructure around the official Meta Business Solution Provider (BSP) framework. This ensures:
      </p>
      <ul class="list-disc pl-6 space-y-4 mb-8 text-on-surface-variant">
        <li><strong>Infinite Scalability:</strong> Send messages to thousands of customers without worrying about per-account limits.</li>
        <li><strong>Advanced Automation:</strong> Build complex interactive flows with list messages, buttons, and catalogs.</li>
        <li><strong>Enhanced Security:</strong> End-to-end encryption and compliance with global data protection laws.</li>
      </ul>
      <figure class="my-10">
        <div class="rounded-2xl overflow-hidden border border-subtle aspect-video">
          <img alt="Data Analytics" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDjt-199O5-P0CfHcHOw-cGA7ESEcMS5gqAJwoHFdY6fdVOAZPeaDFHluMPgo0SYhzHgGIOy_qhv5IEw9MqMs4ivmCAeEzvu_U4cz5JyOIoyA7psDezNLCrSBXXvGJCnIVNd8rrMvO81weOM1fRcKXkWJ9HBxxSWaD_kuqi9aK--U_Aj9u6JyE-WcvRDLQh4RlgaBuIpU8vJPCXqbA5iQ1cQ_T-70Fd_f7wOlmMkWV0A3Yim8SnmPcf74PaXV7OKfzOoRIGDDez7f3"/>
        </div>
        <figcaption class="text-center text-label-sm font-label-sm text-on-surface-variant mt-4">Analyzing performance metrics through the official wappCAST dashboard.</figcaption>
      </figure>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">Final Thoughts</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-12">
        Choosing the right infrastructure isn’t just a technical decision—it’s a strategic business one. If your goal is to create meaningful, long-term customer relationships, the official path is the only sustainable route.
      </p>
    `
  },
  {
    title: "Building a Sales Machine on WhatsApp: A Complete Guide",
    slug: "building-sales-machine-whatsapp",
    category: "Automation",
    date: "Oct 18, 2024",
    readTime: "8 min read",
    excerpt: "From lead generation to final checkout, discover how to automate your entire sales funnel within WhatsApp. No code required, just smart conversation flows.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDe1ExVtULCGNUlfB6SFkd5EIIOTyTuIZkeKHKTKZ1hZUnFqHVJBGZp7_PXAgDf80jOGPim_BMpSlb8AbnLpEF8p40H-t5u4mSfe7Y_Zc7zTQFx-LbKii6YtuD0uRObMv6HKk-0BKt5qr7asB0qlZ_B6shF1POxKV3l8sLY6ICvUyTvJr_HP56HM1EG9e-Tu2XBp00Q2zEf74yOeZq4Mm0tGioWpr37VOL370dFTQhCL6jlbJkP8l781RtaRLKxhXSDf-yMZxVcWIVl",
    tags: ["Sales Funnel", "Automation", "CRM"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        WhatsApp is no longer just a support tool. Today, leading brands are converting it into a full-scale acquisition channel. Learn how to map out a sales funnel that capture leads, replies instantly, and converts chats to checking out.
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">Why traditional sales funnels fail</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        Typical landing pages lose 80% of their mobile traffic due to slow load times and confusing form fills. A WhatsApp workflow cuts through this friction. Clicking an ad launches a chat instantly, where templates qualify leads.
      </p>
      <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Designing Your Customer Flow</h3>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        A high-converting flow follows three core stages:
      </p>
      <ul class="list-disc pl-6 space-y-4 mb-8 text-on-surface-variant">
        <li><strong>Instant Greeting:</strong> A personalized template offering a discount or instant scheduling.</li>
        <li><strong>Interactive Qualification:</strong> Button choices that route the lead based on interest.</li>
        <li><strong>Payment Integration:</strong> Providing links to catalogs and order confirmation.</li>
      </ul>
    `
  },
  {
    title: "Zero Missed Leads: How Real Estate Firms Scale with wappCAST",
    slug: "zero-missed-leads-real-estate",
    category: "Case Study",
    date: "Oct 12, 2024",
    readTime: "6 min read",
    excerpt: "See how our unified team inbox helped a leading real estate agency manage 5,000+ monthly inquiries without missing a single potential buyer.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDHNxiB9EbYf-lpIskrrA4xUotAKMmgVSTzEUsuM4yS6iTKGvhrS3N7g1xJo05jX4zOZQE78LuKUooNuuIhmuxAzH4Bcl1ezT4UKALG6AniznQvhZ1ZSXzlAQ17AodCDn9oUukJq8EqKYMjUIcIQ_IHQGcOIfJHYkJ6eorKLQk1DpdfG-BPJ-0qapCnRZUpZa-mVJeSc0SvbVqnwTkH7lNnCJ4K1m35dkfrknRyvz7rxGjL9BgMC65TTAHr3kVFPAfu3Yh8zxbRvhWT",
    tags: ["Real Estate", "Case Study", "Smart Inbox"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        Real estate sales are highly time-sensitive. A delay of 30 minutes in responding can mean losing a high-value buyer. This case study details how wappCAST's shared inbox resolved this bottleneck.
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">The Challenge: Fragmented Inboxes</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        Brokers were managing chats on individual numbers. Leads were lost, responses were delayed, and manager visibility was zero.
      </p>
      <h3 class="font-headline-md text-headline-md text-on-surface mb-4">The Solution: Unified Meta API Hub</h3>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        By connecting a single number to wappCAST:
      </p>
      <ul class="list-disc pl-6 space-y-4 mb-8 text-on-surface-variant">
        <li><strong>Automatic Routing:</strong> Multi-agent system assigns leads dynamically based on location.</li>
        <li><strong>Instant Response:</strong> Automated Flow greeds leads immediately with listings catalogs.</li>
        <li><strong>Analytics:</strong> Managers track response times and deal updates live.</li>
      </ul>
    `
  },
  {
    title: "Mastering Webhooks: Real-time Integration with wappCAST",
    slug: "mastering-webhooks-real-time-integration",
    category: "Developer",
    date: "Sep 28, 2024",
    readTime: "10 min read",
    excerpt: "A technical deep dive for developers on how to sync your CRM and external databases with WhatsApp messaging events seamlessly.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuDp6-Kpuhw_Jf1WjykotvbvlJjMVhPM9ZLAjzZr9wl6CJ-dF-zRM-YeUzMA7_iLAMzD0uhjbFcTvsIk1l9wTX1kviEd9LqwD8Jf6ohZQttHWF0hlaSk1913xlthFaRiybAVn9pBu7FoI2y_-BHjX0QIidszOdLzR0qiIEU8MdMFqcH-xODYUkC6T8SyyLrYLutQDhfYY22uvHZM2i_Qe_FpIURtzvFH9_at374n_enEUXSmPDQsEqsvD5sbfjuW1HatBNZzMvIhkYET",
    tags: ["Developer", "Webhooks", "API"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        Webhooks are the bridge between your CRM database and real-time user activity. Here is a guide on how to integrate wappCAST webhooks with your stack.
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">Configuring Webhook Listeners</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        When a customer messages you, wappCAST posts a JSON payload to your server. We walk through registering headers, authenticating tokens, and parsing message payloads.
      </p>
    `
  },
  {
    title: "Ban-Proof Your Marketing: The Official API Advantage",
    slug: "ban-proof-your-marketing-official-api",
    category: "Compliance",
    date: "Sep 15, 2024",
    readTime: "4 min read",
    excerpt: "Why unofficial workarounds get you banned and how the Meta-approved Business API protects your number and brand reputation.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuBV5Nvut7Dz2tp_qmCwjSUxdrM5Nr8e21cwC2BZaIFxDK6nWxeK8IJAtGoXXzVTr7tpuIqhmjQumzBu-Hqblp3sfw0OYXEItnDKbqksFZLH_go5zRvkVzlg5cXWSqL33jXZpwfboBnEdH8eeQCe6pkmkrIHV-NJmRsI7srNnYYOipHzjFY6cGZ2-kJX_Ep2x19loflKK5I84mukfdCJKVsEHZ8UL2O55-X9IgwTlcOeCh-0bhIozH8xb0TZ9L-zNeJuNeVWtLZfAwiG",
    tags: ["Compliance", "Meta Policies", "Safety"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        WhatsApp has strict spam prevention mechanisms. Unofficial automation extensions get banned within hours. In this guide, learn how the Official Cloud API guarantees safety.
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">How WhatsApp Detects Scrapers</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        Learn about browser footprints, high message velocity detection, and reporting flags. The Meta Business API completely avoids this by validating and approving templates beforehand.
      </p>
    `
  },
  {
    title: "Transforming WhatsApp into a Shoppable Experience",
    slug: "transforming-whatsapp-shoppable-experience",
    category: "Ecommerce",
    date: "Sep 02, 2024",
    readTime: "7 min read",
    excerpt: "How to set up catalogs, manage orders, and collect payments without ever leaving the chat interface. The future of mobile commerce.",
    image: "https://lh3.googleusercontent.com/aida-public/AB6AXuCRONGQRCVZwunwmT6HRI_UwgD7uqv6Kds7SyLKAPyKKS5fCEvKPnpt-4RqcILssdylJonqFKf5Y30XrAgtNT1Tq4JzH5h1XrzEkP3Vi6PuzSP3tQjR1SOydE3QLJI1cgvj4pzAQrP9DXnGctFcjjf4hFQIXUQRS1jlnZDFZC8H41cTchEORSbxSvm5hzBW7cye242-bDOC4fZjz2g-LfciE9ANYOdryuDvfEr34TVD5AusJt4hG8MSeMHjXQqFYeWwvPS30fMJ5Fax",
    tags: ["Ecommerce", "WhatsApp Commerce", "Catalogs"],
    author: {
      name: "Amandeep Sahota",
      role: "Media Strategy Lead",
      avatar: "https://lh3.googleusercontent.com/aida-public/AB6AXuDyl8YIkugJJyHpBBbg83iOK6Ra4k18mtMV0iU-gxqsN4TagTqEge9pc_pVOrlkDwBfiRrfQSHh8A2F9c9kXTYXfLAcXbfGTWua9ptjCssyvL6gcBmsDLKWJLBBzmcZAJJ-MQu6Y26fSi6Y06tXKGmPMu3qg4ku2AT5eDSJp3Hct24kAruycX_BTPkBrGZPWLLrK7oTDwZfTgvvDXJJFzyNDAufntuYWlSHgQTc5aTlApcFq0GGae8jaNdRxOcQFQw3vzG-tngDKzmN"
    },
    content: `
      <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 leading-relaxed">
        Customers don't want to navigate away from the chat to browse products. By building WhatsApp catalogs, you allow users to add items to their cart and complete payments directly in-app.
      </p>
      <h2 class="font-headline-md text-headline-md text-primary mb-6">Integrating Shopify & wappCAST</h2>
      <p class="font-body-md text-body-md text-on-surface-variant mb-6">
        Sync inventory catalog and display products dynamically using auto-responses. Customer orders are parsed and sent directly to your e-commerce store dashboard.
      </p>
    `
  }
]

// Fetch current post based on route params slug
const post = computed(() => {
  return posts.find(p => p.slug === route.params.slug) || posts[0]
})

// Fetch three related posts (excluding the current one)
const relatedPosts = computed(() => {
  return posts.filter(p => p.slug !== post.value.slug).slice(0, 3)
})

// Dynamic SEO setup for blog details page
useSeoMeta({
  title: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  ogTitle: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  description: () => post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  ogDescription: () => post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  ogImage: () => post.value?.image || 'https://wappcast.com/logo.png',
  ogUrl: () => `https://wappcast.com/blog/${post.value?.slug}`,
  ogType: 'article',
  twitterCard: 'summary_large_image',
  twitterTitle: () => `${post.value?.title || 'Blog Insights'} | wappCAST`,
  twitterDescription: () => post.value?.excerpt || 'WhatsApp Marketing API Insights.',
  twitterImage: () => post.value?.image || 'https://wappcast.com/logo.png',
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
    description: () => post.value?.excerpt || 'WhatsApp Marketing API Insights.',
    image: () => post.value?.image || 'https://wappcast.com/logo.png',
    datePublished: () => post.value?.date || '2024-10-24',
    author: [
      {
        name: () => post.value?.author?.name || 'wappCAST Writer'
      }
    ]
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: () => post.value?.title || 'wappCAST Insights',
  description: () => post.value?.excerpt || 'Strategies and compliance guides for official WhatsApp Business API marketing.',
  theme: '#10b981',
  colorMode: 'dark'
})
</script>
