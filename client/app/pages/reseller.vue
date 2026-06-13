<template>
  <main class="pt-24 overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative min-h-[921px] flex items-center px-gutter py-section-padding">
      <div class="max-w-container-max mx-auto w-full relative z-10 grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
          <h1 class="font-display-hero text-display-hero md:text-display-hero leading-tight">
            Your Own Platform.<br/>
            <span class="gradient-text">Your Brand.</span><br/>
            Your Customers.
          </h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
            Get a fully branded dashboard, onboard your own clients, set your own prices, and keep the margins. We power the engine — you own the relationship.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
            <NuxtLink to="/contact" class="bg-gradient-to-r from-primary to-secondary text-on-primary px-8 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-primary/20 transition-all active:scale-95 text-center">
              Become a Partner
            </NuxtLink>
            <div class="flex flex-col">
              <span class="text-on-surface-variant font-label-sm text-label-sm italic">No setup fees. No tech headaches.</span>
              <span class="text-on-surface-variant font-label-sm text-label-sm">Just your brand on a platform that's ready to sell.</span>
            </div>
          </div>
        </div>
        
        <div class="hidden lg:block relative">
          <div class="absolute -inset-4 bg-primary/10 blur-3xl rounded-full"></div>
          <div class="glass-card rounded-[2rem] p-8 border border-white/10 shadow-2xl relative overflow-hidden group">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-transparent"></div>
            <img alt="Tech Dashboard Interface" class="rounded-xl mb-6 opacity-80 group-hover:opacity-100 transition-opacity duration-500" data-alt="A high-fidelity software dashboard interface displayed on a sleek modern computer monitor. The UI features dark mode aesthetics with glowing emerald green accents and data visualization charts. The surrounding environment is a professional, high-tech workspace with soft blue and green ambient lighting, creating an atmosphere of technological precision and enterprise authority." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2qlnIoFbk_b2dceyEdYamv69TxQg9Zi4t4Fy-dQmvEuI2FL3vuo5_erpGz5lAghzA57ZfuE7Q9nn7TaCWyP_ENClPrL4mfLOQJXwcQbUYWoh-_lpXSWTrE3L5sp2u5LaPvUPe_B9LBDTHGGFuhy2LtxP3ULAzvNI6Z-5JA9yRHolU-BorBWEkJqXI4zZR9Mi1g2xUygglG2BeBwiFx38GeSm_QJ0BFsfPzhQrl5yH-mwu0ervy5VYZeQUla_pU0XDA3NOIoboJroA"/>
            <div class="flex items-center justify-between mb-4">
              <div class="h-4 w-32 bg-surface-container rounded-full overflow-hidden">
                <div class="h-full bg-primary w-2/3"></div>
              </div>
              <div class="flex -space-x-2">
                <div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-primary-container"></div>
                <div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-secondary-container"></div>
                <div class="w-8 h-8 rounded-full border-2 border-surface-dim bg-tertiary-container"></div>
              </div>
            </div>
            <div class="space-y-3">
              <div class="h-3 w-full bg-surface-container/50 rounded-full"></div>
              <div class="h-3 w-5/6 bg-surface-container/50 rounded-full"></div>
              <div class="h-3 w-4/6 bg-surface-container/50 rounded-full"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Resell Section -->
    <section class="px-gutter py-section-padding bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <div class="order-2 lg:order-1 relative h-[400px] rounded-3xl overflow-hidden glass-card">
            <!-- Dynamic ambient background -->
            <div class="absolute inset-0 bg-gradient-to-tr from-primary/10 via-secondary/10 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-surface-dim to-transparent opacity-60"></div>
            <div class="absolute bottom-8 left-8 p-6 glass-card rounded-2xl border-primary/20 max-w-[300px]">
              <p class="font-headline-md text-primary mb-2">100%</p>
              <p class="text-on-surface-variant text-body-md">White-label capability for your brand identity.</p>
            </div>
          </div>
          <div class="order-1 lg:order-2 space-y-6">
            <h2 class="font-headline-lg text-headline-lg">WHY RESELL?</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
              You already have the clients. The trust. The market. We give you the product — fully built, fully compliant, ready to launch under your name. No development. No infrastructure. No Meta paperwork battles. You sell. You scale. We handle everything running underneath.
            </p>
            <NuxtLink to="/contact" class="inline-flex items-center gap-2 border border-primary text-primary px-8 py-4 rounded-xl font-bold hover:bg-primary/10 transition-all glow-hover text-center">
              Talk to Us
              <span class="material-symbols-outlined">arrow_forward</span>
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Bento Grid -->
    <section class="px-gutter py-section-padding">
      <div class="max-w-container-max mx-auto space-y-16">
        <div class="text-center space-y-4">
          <h2 class="font-headline-lg text-headline-lg">Everything you need to <span class="text-primary">Dominate</span></h2>
          <p class="text-on-surface-variant max-w-2xl mx-auto">Focus on the sale. We've automated the complex technical layers of the Meta Business ecosystem.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Feature 1: Onboarding -->
          <div class="glass-card p-8 rounded-3xl glow-hover transition-all space-y-6 relative group border-white/5">
            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary">
              <span class="material-symbols-outlined text-3xl">person_add</span>
            </div>
            <div class="space-y-3">
              <h3 class="font-headline-md text-headline-md">Add Customers Instantly</h3>
              <p class="text-on-surface-variant">Onboarding takes minutes, not meetings. Setup client accounts, numbers, and templates yourself without touching code.</p>
            </div>
            <ul class="space-y-3 text-on-surface-variant font-body-md">
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                One-click client creation
              </li>
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                Dedicated customer logins
              </li>
            </ul>
          </div>
          <!-- Feature 2: Pricing -->
          <div class="glass-card p-8 rounded-3xl glow-hover transition-all space-y-6 relative group border-white/5 lg:mt-8">
            <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary">
              <span class="material-symbols-outlined text-3xl">payments</span>
            </div>
            <div class="space-y-3">
              <h3 class="font-headline-md text-headline-md">Charge Your Own Way</h3>
              <p class="text-on-surface-variant">This is your business. You set the price, mark up however you want, and bill on your own cycles.</p>
            </div>
            <ul class="space-y-3 text-on-surface-variant font-body-md">
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-sm">check_circle</span>
                100% margin retention
              </li>
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-sm">check_circle</span>
                Custom volume pricing
              </li>
            </ul>
          </div>
          <!-- Feature 3: Control -->
          <div class="glass-card p-8 rounded-3xl glow-hover transition-all space-y-6 relative group border-white/5 lg:mt-16">
            <div class="w-14 h-14 rounded-2xl bg-tertiary/10 flex items-center justify-center text-tertiary">
              <span class="material-symbols-outlined text-3xl">settings_input_component</span>
            </div>
            <div class="space-y-3">
              <h3 class="font-headline-md text-headline-md">Full Control</h3>
              <p class="text-on-surface-variant">Manage your whole operation from one dashboard. See usage, top up credits, and manage roles easily.</p>
            </div>
            <ul class="space-y-3 text-on-surface-variant font-body-md">
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-tertiary text-sm">check_circle</span>
                Real-time usage tracking
              </li>
              <li class="flex items-center gap-2">
                <span class="material-symbols-outlined text-tertiary text-sm">check_circle</span>
                Granular permissions
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Selling is Easy Section -->
    <section class="px-gutter py-section-padding bg-surface-container-high overflow-hidden relative">
      <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/5 blur-3xl rounded-full translate-x-1/2"></div>
      <div class="max-w-container-max mx-auto grid lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
          <h2 class="font-headline-lg text-headline-lg">Selling is the <span class="text-primary">Easy Part</span></h2>
          <p class="text-on-surface-variant text-body-lg">
            We've already built the hard stuff so you can focus on closing. You're not just reselling a tool — you're running a platform that businesses already want.
          </p>
          <div class="grid sm:grid-cols-2 gap-6">
            <div class="p-6 glass-card rounded-2xl border-white/5 space-y-2">
              <span class="material-symbols-outlined text-primary">verified_user</span>
              <h4 class="font-bold">Official API</h4>
              <p class="text-sm text-on-surface-variant">Clean, safe, and Meta-compliant infrastructure.</p>
            </div>
            <div class="p-6 glass-card rounded-2xl border-white/5 space-y-2">
              <span class="material-symbols-outlined text-primary">support_agent</span>
              <h4 class="font-bold">Expert Support</h4>
              <p class="text-sm text-on-surface-variant">Technical backing when you need a hand.</p>
            </div>
          </div>
          <NuxtLink to="/contact" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-bold hover:scale-105 transition-all text-center inline-block">
            Start as a Reseller
          </NuxtLink>
        </div>
        <div class="relative">
          <div class="aspect-square rounded-[3rem] bg-surface overflow-hidden border border-white/10 shadow-inner flex items-center justify-center p-8">
            <div class="w-full h-full bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl flex items-center justify-center">
              <span class="material-symbols-outlined text-[120px] text-primary animate-pulse">hub</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="px-margin-mobile py-24">
      <div class="max-w-3xl mx-auto space-y-12">
        <div class="text-center">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Partner FAQ</span>
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4">Reseller Partner FAQs</h2>
          <p class="text-on-surface-variant font-body-md">Everything you need to know about starting your white-label business.</p>
        </div>
        <div class="space-y-4">
          <!-- FAQ Items -->
          <div v-for="(faq, idx) in resellerFaqs" :key="idx" class="glass-card rounded-2xl overflow-hidden border border-border-subtle/50 transition-all duration-300 hover:border-primary/30">
            <button 
              @click="toggleFaq(idx)"
              class="w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition-colors cursor-pointer focus:outline-none"
            >
              <span class="font-bold text-on-surface text-body-lg">{{ faq.question }}</span>
              <span 
                class="material-symbols-outlined text-primary transition-transform duration-300"
                :class="{ 'rotate-180': activeFaqIdx === idx }"
              >
                expand_more
              </span>
            </button>
            <div class="faq-grid-transition" :class="{ 'open': activeFaqIdx === idx }">
              <div class="overflow-hidden">
                <div class="p-6 pt-0 text-on-surface-variant leading-relaxed border-t border-border-subtle/50 bg-white/2 font-body-md">
                  {{ faq.answer }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Final CTA Section -->
    <section class="px-gutter py-section-padding">
      <div class="max-w-container-max mx-auto">
        <div class="relative rounded-[3rem] overflow-hidden bg-surface-container-highest p-12 lg:p-24 text-center space-y-8">
          <div class="absolute inset-0 opacity-20 bg-gradient-to-tr from-primary/10 via-secondary/10 to-transparent"></div>
          <div class="relative z-10 space-y-6 max-w-3xl mx-auto">
            <h2 class="font-headline-lg text-headline-lg">Ready to build your own<br/>WhatsApp business?</h2>
            <p class="text-on-surface-variant text-body-lg">
              Tell us a little about you, and we'll set you up with everything you need to launch under your brand. We'll get back to you fast. No pressure, no commitment — just a conversation.
            </p>
            <div class="pt-4">
              <NuxtLink to="/contact" class="bg-primary text-on-primary px-12 py-5 rounded-2xl font-bold text-xl hover:scale-105 shadow-2xl shadow-primary/20 transition-all text-center inline-block">
                Contact Us
              </NuxtLink>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref } from 'vue'

const activeFaqIdx = ref(null)

const toggleFaq = (idx) => {
  if (activeFaqIdx.value === idx) {
    activeFaqIdx.value = null
  } else {
    activeFaqIdx.value = idx
  }
}

// Production-grade SEO setup for reseller page
useSeoMeta({
  title: 'White-Label WhatsApp API Reseller Partner Program | wappCAST',
  ogTitle: 'White-Label WhatsApp API Reseller Partner Program | wappCAST',
  description: 'Launch your own SaaS brand. Build a white-label WhatsApp Business API reseller platform. Set your own pricing, own your client relations, and keep 100% margin.',
  ogDescription: 'Launch your own SaaS brand. Build a white-label WhatsApp Business API reseller platform. Set your own pricing, own your client relations, and keep 100% margin.',
  ogImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2qlnIoFbk_b2dceyEdYamv69TxQg9Zi4t4Fy-dQmvEuI2FL3vuo5_erpGz5lAghzA57ZfuE7Q9nn7TaCWyP_ENClPrL4mfLOQJXwcQbUYWoh-_lpXSWTrE3L5sp2u5LaPvUPe_B9LBDTHGGFuhy2LtxP3ULAzvNI6Z-5JA9yRHolU-BorBWEkJqXI4zZR9Mi1g2xUygglG2BeBwiFx38GeSm_QJ0BFsfPzhQrl5yH-mwu0ervy5VYZeQUla_pU0XDA3NOIoboJroA',
  ogUrl: 'https://wappcast.com/reseller',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'White-Label WhatsApp API Reseller Partner Program | wappCAST',
  twitterDescription: 'Launch your own SaaS brand. Build a white-label WhatsApp Business API reseller platform. Set your own pricing, own your client relations, and keep 100% margin.',
  twitterImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2qlnIoFbk_b2dceyEdYamv69TxQg9Zi4t4Fy-dQmvEuI2FL3vuo5_erpGz5lAghzA57ZfuE7Q9nn7TaCWyP_ENClPrL4mfLOQJXwcQbUYWoh-_lpXSWTrE3L5sp2u5LaPvUPe_B9LBDTHGGFuhy2LtxP3ULAzvNI6Z-5JA9yRHolU-BorBWEkJqXI4zZR9Mi1g2xUygglG2BeBwiFx38GeSm_QJ0BFsfPzhQrl5yH-mwu0ervy5VYZeQUla_pU0XDA3NOIoboJroA',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/reseller' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'White-Label WhatsApp API Reseller Partner Program | wappCAST',
    description: 'Launch your own SaaS brand. Build a white-label WhatsApp Business API reseller platform. Set your own pricing, own your client relations, and keep 100% margin.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'WhatsApp Reseller Partner Program',
  description: 'Launch your own white-labeled WhatsApp Business API platform. Set your own subscription rates and keep 100% of your margins.',
  theme: '#10b981',
  colorMode: 'dark'
})

const resellerFaqs = [
  {
    question: "What is the wappCAST Reseller Program?",
    answer: "Our program allows you to sell the WhatsApp Business API under your own brand. You get a white-label dashboard where you can manage your own clients, set your own pricing, and keep 100% of the margins."
  },
  {
    question: "Is the platform really white-labeled?",
    answer: "Yes. You can use your own logo, domain, and brand colors. Your clients will only see your brand, never wappCAST."
  },
  {
    question: "How do I set pricing for my clients?",
    answer: "You have total freedom. You buy credits or plans from us at partner rates and charge your clients whatever price you choose. You handle your own billing and payments."
  },
  {
    question: "Do I need technical skills to run this?",
    answer: "No. We handle all the infrastructure, Meta API updates, and server maintenance. You focus on sales and client management via our intuitive dashboard."
  },
  {
    question: "What support do you provide to partners?",
    answer: "We provide dedicated technical support, documentation, and training to ensure you can onboard and support your clients effectively."
  },
  {
    question: "Can I migrate existing clients to the platform?",
    answer: "Yes, we can help you migrate existing WhatsApp Business accounts from other providers to your new white-labeled dashboard."
  },
  {
    question: "How many clients can I add?",
    answer: "There are no limits. Whether you have 5 clients or 5,000, our infrastructure scales automatically to handle your growth."
  },
  {
    question: "What currencies can I bill in?",
    answer: "You manage your own billing system, so you can charge your clients in any currency that your local payment processor supports."
  },
  {
    question: "What about Meta's conversation fees?",
    answer: "We pass through the official Meta fees. You can choose to pass these directly to your clients or bundle them into your own subscription packages with a markup."
  },
  {
    question: "How do I get started?",
    answer: "Simply click the \"Contact Us\" button, fill in the form with your details, and our partner manager will reach out to schedule a demo and discuss onboarding."
  }
]
</script>
