<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-section-padding overflow-hidden">
      <!-- Glow Gradients -->
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>

      <div class="max-w-container-max mx-auto px-gutter relative z-10 text-center">
        <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero mb-6 tracking-tight">
          Simple, Transparent Pricing for <span class="gradient-text">Growing Businesses</span>
        </h1>
        <h2 class="font-headline-md text-headline-sm text-secondary font-bold mb-3">
          Stop Paying ₹50,000–₹2,00,000+ Every Year for the Same Features
        </h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto mb-6">
          The Smarter Alternative to WATI, AiSensy, Interakt &amp; Gallabox
        </p>
        <p class="font-body-md text-body-md text-on-surface-variant/70 max-w-4xl mx-auto mb-10">
          Why spend lakhs every year when you can get everything you need in one powerful platform for a fraction of the cost?
          wappCAST gives you WhatsApp API, automation, broadcasting, CRM, chatbot, team inbox, analytics, APIs, and AI automation — all under one affordable plan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <NuxtLink to="/demo" target="_blank" class="btn-primary font-body-lg text-body-lg text-on-primary font-bold px-10 py-4 rounded-xl w-full sm:w-auto text-center shadow-lg shadow-primary/20">
            Book a Demo | No Credit Card Needed
          </NuxtLink>
          <div class="flex items-center gap-2 text-on-surface-variant/60">
            <span class="material-symbols-outlined">schedule</span>
            <span class="font-body-md text-body-md">15-min live walkthrough</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Pricing Card Section -->
    <section class="py-section-padding bg-surface-container-low/50 relative" id="pricing">
      <div class="max-w-container-max mx-auto px-gutter">
        <div class="max-w-6xl mx-auto">
          <div class="glass-card rounded-3xl p-8 md:p-12 border-2 border-primary/30 relative overflow-hidden">
            <div class="absolute top-0 right-0 bg-primary text-on-primary font-bold px-6 py-2 rounded-bl-2xl">
              BEST VALUE
            </div>
            
            <div class="grid lg:grid-cols-12 gap-12 items-center">
              <!-- Left Column: Pricing Details and Checklist -->
              <div class="lg:col-span-7 space-y-8">
                <div>
                  <h3 class="text-secondary font-bold font-label-sm uppercase mb-2 tracking-widest">wappCAST Platform</h3>
                  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">
                    Everything You Need. One Affordable Platform.
                  </h2>
                  <div class="flex flex-wrap items-baseline gap-4 mb-4">
                    <span class="text-on-surface-variant line-through text-headline-md opacity-50">
                      {{ currency === 'INR' ? '₹24,499' : '$299' }}
                    </span>
                    <span class="text-on-surface font-bold text-headline-lg">
                      {{ currency === 'INR' ? '₹14,499' : '$179' }}
                    </span>
                    <span class="text-on-surface-variant font-body-md">/ Year</span>
                  </div>
                  <div class="flex items-center gap-3 text-secondary font-label-sm font-semibold mb-6">
                    <span>Single License</span> • <span>No Feature Restrictions</span> • <span>No Hidden Costs</span>
                  </div>
                  <p class="text-body-md text-primary font-medium flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">celebration</span> Start Today &amp; Scale Your Business on WhatsApp
                  </p>
                </div>

                <div class="border-t border-subtle pt-6">
                  <h4 class="font-headline-sm text-body-lg font-bold mb-4 text-on-surface">What's Included:</h4>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Unlimited Contacts &amp; Audience Management</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Unlimited Broadcasting &amp; Campaigns</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Unlimited Team Members (Seats)</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">No-Code Chatbot &amp; Flow Builder</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">AI Automation &amp; Smart Auto-Replies</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Team Inbox with Smart Routing</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Campaign Scheduler &amp; Drip Campaigns</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">CRM Integrations &amp; Webhooks</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Lead Capture from Click-to-WhatsApp Ads</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Rich Media Messaging with Tracking</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Campaign Analytics &amp; Reporting</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">API Access &amp; Developer Tools</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Free WhatsApp Setup &amp; Onboarding</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Official WhatsApp Business API</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">Green Tick Verification Assistance</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                      <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span>
                      <span class="font-body-md text-on-surface-variant">High-Volume Broadcasting &amp; Retargeting</span>
                    </div>
                  </div>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row gap-4 items-center">
                  <NuxtLink to="/demo" target="_blank" class="btn-primary font-body-lg text-body-lg text-on-primary font-bold px-8 py-4 rounded-xl text-center w-full sm:w-auto">
                    Get Started with Business Plan
                  </NuxtLink>
                  <span class="text-on-surface-variant/60 font-label-sm">Secure Activation • Meta Compliant</span>
                </div>
              </div>

              <!-- Right Column: Visual Dashboard Mockup (Gap Filling Image) -->
              <div class="lg:col-span-5 relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-2xl blur-xl group-hover:blur-2xl transition duration-500 opacity-75"></div>
                <div class="relative glass-card rounded-2xl overflow-hidden border border-white/10 shadow-2xl aspect-square">
                  <img src="/pricing_dashboard_mockup.png" alt="wappCAST WhatsApp API Dashboard Mockup" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-section-padding">
      <div class="max-w-container-max mx-auto px-gutter">
        <div class="text-center mb-16">
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4">Compare Before You Buy</h2>
          <p class="font-body-lg text-on-surface-variant">We beat every major player in price, features, and limits.</p>
        </div>
        <div class="overflow-x-auto rounded-3xl border border-subtle glass-card">
          <table class="w-full text-left border-collapse min-w-[1000px]">
            <thead>
              <tr class="border-b border-subtle bg-surface-container">
                <th class="p-6 font-headline-sm text-body-lg font-bold">Feature</th>
                <th class="p-6 font-headline-sm text-body-lg font-bold text-primary bg-primary/5">wappCAST</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">AiSensy</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">WATI</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">Interakt</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">Gallabox</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-subtle">
              <tr>
                <td class="p-6 font-body-md font-bold">Annual Cost*</td>
                <td class="p-6 font-body-md font-bold text-primary bg-primary/5">
                  {{ currency === 'INR' ? '₹14,499' : '$179' }}
                </td>
                <td class="p-6 font-body-md text-on-surface-variant">₹80,000+</td>
                <td class="p-6 font-body-md text-on-surface-variant">₹85,000+</td>
                <td class="p-6 font-body-md text-on-surface-variant">₹48,000+</td>
                <td class="p-6 font-body-md text-on-surface-variant">₹2,12,000+</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">No-code chat-flow builder</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Team inbox with role-based routing</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Official WhatsApp API + green tick</td>
                <td class="p-6 bg-primary/5 text-primary font-bold flex items-center gap-1">
                  <span class="material-symbols-outlined">check</span> Free assist
                </td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid per country</td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">API &amp; webhooks</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">CRM &amp; contact management</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Unlimited team seats</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">5 free, then paid</td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid add-on</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">6, then paid</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Unlimited automation flows</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Advanced bot paid</td>
                <td class="p-6 text-on-surface-variant font-body-md">Capped by plan</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">AI automation without add-on fees</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Add-on / capped</td>
                <td class="p-6 text-on-surface-variant font-body-md">Credit-capped</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Zero template markup</td>
                <td class="p-6 bg-primary/5 text-primary"><span class="material-symbols-outlined">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-error-red"><span class="material-symbols-outlined">close</span> (~20%)</td>
                <td class="p-6 text-error-red"><span class="material-symbols-outlined">close</span> (~25%)</td>
                <td class="p-6 font-body-md text-on-surface-variant">Varies</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Lifetime License Section (Reseller/Agency) -->
    <section class="py-section-padding bg-surface-container-highest relative">
      <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="glass-card rounded-3xl p-8 md:p-16 border-t border-primary/20">
          <div class="max-w-4xl">
            <span class="inline-block bg-secondary/20 text-secondary px-4 py-1 rounded-full font-label-sm mb-6">AGENCY &amp; CONSULTANT SPECIAL</span>
            <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">
              Need Unlimited Everything?
            </h2>
            <h3 class="text-secondary font-bold text-headline-sm mb-6">
              Lifetime license for your own use and for reselling to clients.
            </h3>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">
              Built for freelancers, agencies, consultants, SaaS companies, and digital marketing professionals.
            </p>
            <NuxtLink to="/contact" class="bg-secondary text-on-secondary font-bold font-body-lg px-12 py-4 rounded-xl hover:shadow-[0_0_30px_rgba(69,223,164,0.3)] transition-all text-center inline-block">
              Contact Us →
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24">
      <div class="max-w-3xl mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Pricing FAQ</span>
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">Frequently Asked Questions</h2>
          <p class="font-body-lg text-on-surface-variant">Everything you need to know about wappCAST pricing and structure.</p>
        </div>
        
        <div class="space-y-4">
          <!-- FAQ Items -->
          <div v-for="(faq, idx) in pricingFaqs" :key="idx" class="glass-card rounded-2xl overflow-hidden border border-border-subtle/50 transition-all duration-300 hover:border-primary/30">
            <button 
              @click="toggleFaq(idx)"
              class="w-full p-6 text-left flex justify-between items-center hover:bg-white/5 transition-colors cursor-pointer focus:outline-none"
            >
              <span class="font-body-lg font-bold text-on-surface">{{ faq.question }}</span>
              <span 
                class="material-symbols-outlined text-primary transition-transform duration-300" 
                :class="{ 'rotate-180': activeFaqIdx === idx }"
              >
                expand_more
              </span>
            </button>
            <div class="faq-grid-transition" :class="{ 'open': activeFaqIdx === idx }">
              <div class="overflow-hidden">
                <div class="p-6 pt-0 text-on-surface-variant font-body-md border-t border-border-subtle/50 bg-white/2 leading-relaxed">
                  {{ faq.answer }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref } from 'vue'
import { useState } from '#app'

const currency = useState('currency')
const activeFaqIdx = ref(null)

const toggleFaq = (idx) => {
  if (activeFaqIdx.value === idx) {
    activeFaqIdx.value = null
  } else {
    activeFaqIdx.value = idx
  }
}

// SEO Meta Config
useSeoMeta({
  title: 'Simple & Transparent Pricing Plans | wappCAST',
  ogTitle: 'Simple & Transparent Pricing Plans | wappCAST',
  description: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  ogDescription: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  ogImage: 'https://wappcast.com/pricing_dashboard_mockup.png',
  ogUrl: 'https://wappcast.com/pricing',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Simple & Transparent Pricing Plans | wappCAST',
  twitterDescription: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  twitterImage: 'https://wappcast.com/pricing_dashboard_mockup.png',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/pricing' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'Simple & Transparent Pricing Plans | wappCAST',
    description: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'wappCAST Pricing Plans',
  description: 'Smarter WhatsApp API solutions starting at just ₹14,499/year. Zero markup fees, unlimited broadcasts.',
  theme: '#10b981',
  colorMode: 'dark'
})

const pricingFaqs = [
  {
    question: "Is ₹14,499 the total yearly cost?",
    answer: "Yes. Your wappCAST subscription costs only ₹14,499 per year. WhatsApp conversation charges from Meta are billed separately based on usage."
  },
  {
    question: "Are there any restrictions on contacts?",
    answer: "No. You can manage unlimited contacts and audience lists."
  },
  {
    question: "Can I send unlimited broadcasts?",
    answer: "Yes. There are no platform-imposed limits on broadcasting."
  },
  {
    question: "Can multiple team members use the platform?",
    answer: "Yes. The Business Plan includes unlimited team seats."
  },
  {
    question: "Is WhatsApp API included?",
    answer: "Yes. The platform is built for the Official WhatsApp Business API."
  },
  {
    question: "Do you help with WhatsApp onboarding?",
    answer: "Absolutely. Our team assists with setup, verification, and onboarding."
  },
  {
    question: "Can you help me get the Green Tick?",
    answer: "Yes. We guide eligible businesses through the Green Tick verification process."
  },
  {
    question: "Can I sell the platform to my own clients?",
    answer: "Yes. The Lifetime License is designed specifically for agencies and resellers."
  },
  {
    question: "Is technical support included?",
    answer: "Yes, onboarding and ongoing platform support are included."
  }
]
</script>
