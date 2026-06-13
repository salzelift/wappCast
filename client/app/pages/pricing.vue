<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-section-padding overflow-hidden">
      <div class="max-w-container-max mx-auto px-gutter relative z-10 text-center">
        <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero mb-6 tracking-tight">
          Simple, Transparent Pricing for <span class="gradient-text">Growing Businesses</span>
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto mb-6">
          Stop Paying ₹50,000–₹2,00,000+ Every Year for the Same Features. The Smarter Alternative to WATI, AiSensy, Interakt &amp; Gallabox.
        </p>
        <p class="font-body-md text-body-md text-on-surface-variant/70 max-w-4xl mx-auto mb-10">
          Why spend lakhs every year when you can get everything you need in one powerful platform for a fraction of the cost? wappCAST gives you WhatsApp API, automation, broadcasting, CRM, chatbot, team inbox, analytics, APIs, and AI automation — all under one affordable plan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          <NuxtLink to="/contact" class="btn-primary font-body-lg text-body-lg text-on-primary font-bold px-10 py-4 rounded-xl w-full sm:w-auto text-center shadow-lg shadow-primary/20">
            Book a Demo (No Credit Card Needed)
          </NuxtLink>
          <div class="flex items-center gap-2 text-on-surface-variant/60">
            <span class="material-symbols-outlined">schedule</span>
            <span class="font-body-md text-body-md">15-min walkthrough</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Pricing Card -->
    <section class="py-section-padding bg-surface-container-low/50 relative" id="pricing">
      <div class="max-w-container-max mx-auto px-gutter">
        <div class="max-w-5xl mx-auto">
          <div class="glass-card rounded-3xl p-8 md:p-12 border-2 border-primary/30 relative overflow-hidden">
            <div class="absolute top-0 right-0 bg-primary text-on-primary font-bold px-6 py-2 rounded-bl-2xl">
              BEST VALUE
            </div>
            <div class="grid md:grid-cols-2 gap-12">
              <div>
                <h2 class="font-headline-lg text-headline-md mb-2">Business Plan</h2>
                <p class="text-secondary font-bold font-label-sm uppercase mb-6 tracking-widest">Save 88% Compared to Competitors</p>
                <div class="flex items-baseline gap-4 mb-8">
                  <span class="text-on-surface-variant line-through text-headline-md opacity-50">
                    {{ currency === 'INR' ? '₹14,999' : '$180' }}
                  </span>
                  <span class="text-white font-bold text-headline-lg">
                    {{ currency === 'INR' ? '₹9,999' : '$120' }}
                  </span>
                  <span class="text-on-surface-variant font-body-md">/ Year</span>
                </div>
                <div class="space-y-4 mb-8">
                  <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-primary rounded-full"></div>
                    <span class="font-body-md text-body-md">Single License</span>
                  </div>
                  <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-primary rounded-full"></div>
                    <span class="font-body-md text-body-md">No Feature Restrictions</span>
                  </div>
                  <div class="flex items-center gap-3">
                    <div class="w-2 h-2 bg-primary rounded-full"></div>
                    <span class="font-body-md text-body-md">No Hidden Costs</span>
                  </div>
                </div>
                <NuxtLink to="/contact" class="btn-primary w-full font-body-lg text-body-lg text-on-primary font-bold py-4 rounded-xl mb-4 text-center block">
                  Get Started Now
                </NuxtLink>
                <p class="text-center text-on-surface-variant/60 font-label-sm">Secure Payment. Instant Access.</p>
              </div>
              <div class="space-y-4">
                <h3 class="font-headline-sm text-body-lg font-bold mb-4">What's Included:</h3>
                <div class="grid grid-cols-1 gap-y-2">
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Official WhatsApp Business API</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Unlimited Contacts &amp; Management</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Unlimited Broadcasting &amp; Campaigns</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Unlimited Team Members (Seats)</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Unlimited Multi-Level Flows</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">No-Code Chatbot Builder</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">AI Automation &amp; Smart Replies</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Shared Team Inbox &amp; Mobile App</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Smart Contact Routing</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Campaign Scheduler &amp; Drip Messaging</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Full CRM Integrations (Zoho, Hubspot, etc.)</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Webhooks &amp; API Access</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Developer Tools &amp; Documentation</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Detailed Analytics &amp; Reports</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Green Tick Verification Assist</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Dedicated Success Manager</span></div>
                  <div class="flex items-start gap-3"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span><span class="font-body-md text-body-md">Zero Per-Message Platform Markup</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Comparison Table -->
    <section class="py-section-padding">
      <div class="max-w-container-max mx-auto px-gutter">
        <div class="text-center mb-16">
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4">Compare Before You Buy</h2>
          <p class="font-body-lg text-on-surface-variant">We beat every major player in price and flexibility.</p>
        </div>
        <div class="overflow-x-auto rounded-3xl border border-subtle glass-card">
          <table class="w-full text-left border-collapse min-w-[1000px]">
            <thead>
              <tr class="border-b border-subtle bg-surface-container">
                <th class="p-6 font-headline-sm text-body-lg font-bold">Feature</th>
                <th class="p-6 font-headline-sm text-body-lg font-bold text-primary comparison-col-wappcast">wappCAST</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">AiSensy</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">WATI</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">Interakt</th>
                <th class="p-6 font-body-md text-body-md text-on-surface-variant/80">Gallabox</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-subtle">
              <tr>
                <td class="p-6 font-body-md font-bold">Annual Cost</td>
                <td class="p-6 font-body-md font-bold text-primary comparison-col-wappcast">
                  {{ currency === 'INR' ? '₹9,999' : '$120' }}
                </td>
                <td class="p-6 font-body-md text-on-surface-variant">
                  {{ currency === 'INR' ? '₹80,000+' : '$960+' }}
                </td>
                <td class="p-6 font-body-md text-on-surface-variant">
                  {{ currency === 'INR' ? '₹85,000+' : '$1020+' }}
                </td>
                <td class="p-6 font-body-md text-on-surface-variant">
                  {{ currency === 'INR' ? '₹48,000+' : '$575+' }}
                </td>
                <td class="p-6 font-body-md text-on-surface-variant">
                  {{ currency === 'INR' ? '₹2,12,000+' : '$2540+' }}
                </td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">No-code builder</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Team inbox</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Green tick</td>
                <td class="p-6 comparison-col-wappcast text-primary font-bold">✓ Free Assist</td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid extra</td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">API &amp; webhooks</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Limited</td>
                <td class="p-6 text-on-surface-variant font-body-md">Limited</td>
                <td class="p-6 text-on-surface-variant font-body-md">Advanced only</td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">CRM</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6"><span class="material-symbols-outlined text-primary">check</span></td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Unlimited seats</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">5 free, then paid</td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid add-on</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">6, then paid</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Unlimited flows</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Credit-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
                <td class="p-6 text-on-surface-variant font-body-md">Plan-based</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">AI automation</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid add-on</td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid add-on</td>
                <td class="p-6 text-on-surface-variant font-body-md">Basic</td>
                <td class="p-6 text-on-surface-variant font-body-md">Paid add-on</td>
              </tr>
              <tr>
                <td class="p-6 font-body-md">Zero template markup</td>
                <td class="p-6 comparison-col-wappcast"><span class="material-symbols-outlined text-primary">check</span></td>
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

    <!-- Lifetime License Section -->
    <section class="py-section-padding bg-surface-container-highest relative">
      <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="glass-card rounded-3xl p-8 md:p-16 border-t border-primary/20">
          <div class="max-w-4xl">
            <span class="inline-block bg-secondary/20 text-secondary px-4 py-1 rounded-full font-label-sm mb-6">AGENCY &amp; CONSULTANT SPECIAL</span>
            <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-6">Need Unlimited Everything? <span class="text-secondary">Lifetime License</span> for Personal Use &amp; Reselling</h2>
            <div class="flex items-baseline gap-4 mb-8">
              <span class="text-on-surface-variant line-through text-headline-md opacity-50">
                {{ currency === 'INR' ? '₹24,999' : '$299' }}
              </span>
              <span class="text-white font-bold text-headline-lg">
                {{ currency === 'INR' ? '₹14,999' : '$179' }}
              </span>
              <span class="text-secondary font-body-lg">One-Time Payment</span>
            </div>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">
              Perfect for freelancers, agencies, consultants, SaaS companies, resellers, and digital marketing professionals. Pay Once. Use Forever.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4 mb-12">
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">star</span><span class="font-body-md">No wappCAST Branding</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">groups</span><span class="font-body-md">Reseller Capability Included</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">add_business</span><span class="font-body-md">Add Unlimited Clients</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">hub</span><span class="font-body-md">Agency Dashboard</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">payments</span><span class="font-body-md">Keep 100% of Your Revenue</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">update_disabled</span><span class="font-body-md">No Recurring Annual Fee</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">speed</span><span class="font-body-md">High Velocity Broadcasts</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">security</span><span class="font-body-md">Dedicated Infrastructure</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">api</span><span class="font-body-md">Advanced Webhook Controls</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">construction</span><span class="font-body-md">Custom Workflow Hooks</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">contact_support</span><span class="font-body-md">Priority 24/7 Support</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">school</span><span class="font-body-md">Marketing Training Material</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">badge</span><span class="font-body-md">White-Label Client Reports</span></div>
              <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">auto_mode</span><span class="font-body-md">Automated Billing Assist</span></div>
            </div>
            <NuxtLink to="/contact" class="bg-secondary text-on-secondary font-bold font-body-lg px-12 py-4 rounded-xl hover:shadow-[0_0_30px_rgba(69,223,164,0.3)] transition-all text-center inline-block">
              Claim Lifetime Access
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
          <p class="font-body-lg text-on-surface-variant">Everything you need to know about wappCAST pricing.</p>
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

// Production-grade SEO setup for pricing page
useSeoMeta({
  title: 'Simple & Transparent Pricing Plans | wappCAST',
  ogTitle: 'Simple & Transparent Pricing Plans | wappCAST',
  description: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  ogDescription: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  ogImage: 'https://lh3.googleusercontent.com/aida/AP1WRLvBm6HYqeC9TQ7OuzyJrYLxmVJY7kKuSgaj1fM-ElKpd2y0DsbT-eKviLtFqyWUM3b1IXB1TXyH4blMeGvurxSa45-M8iiwOIaemuz4kGVgJZgzktw0jfAcG6Y1Q9n2UyeFTucq0I8wTXAupJDMX7mQKy1Ug7pYk36Jukf6VTc5Tlym3ZyxIA2GPY4OuyVyXyNZ4wRxGpjwcPGr8DD5M0hf40ScRCx2V-o8TRreZt-XC0dFGPsfH0pM_DTe',
  ogUrl: 'https://wappcast.com/pricing',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Simple & Transparent Pricing Plans | wappCAST',
  twitterDescription: 'Find the perfect WhatsApp Business API plan for your brand. Save up to 88% compared to WATI, AiSensy, and Interakt. No hidden markup fees.',
  twitterImage: 'https://lh3.googleusercontent.com/aida/AP1WRLvBm6HYqeC9TQ7OuzyJrYLxmVJY7kKuSgaj1fM-ElKpd2y0DsbT-eKviLtFqyWUM3b1IXB1TXyH4blMeGvurxSa45-M8iiwOIaemuz4kGVgJZgzktw0jfAcG6Y1Q9n2UyeFTucq0I8wTXAupJDMX7mQKy1Ug7pYk36Jukf6VTc5Tlym3ZyxIA2GPY4OuyVyXyNZ4wRxGpjwcPGr8DD5M0hf40ScRCx2V-o8TRreZt-XC0dFGPsfH0pM_DTe',
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
  description: 'Smarter WhatsApp API solutions starting at just ₹9,999/year. Zero markup fees, unlimited broadcasts.',
  theme: '#10b981',
  colorMode: 'dark'
})

const pricingFaqs = [
  {
    question: "Is the listed price the total yearly cost?",
    answer: "Yes, the platform fee covers your full access to the wappCAST platform. There are no additional per-user or hidden feature fees from our side."
  },
  {
    question: "Are there restrictions on contacts or broadcasts?",
    answer: "No. wappCAST provides unlimited contact management and unlimited broadcasting. You only pay for the Meta conversation charges which go directly to WhatsApp."
  },
  {
    question: "Is the WhatsApp API included?",
    answer: "Yes, we provide full access to the Official WhatsApp Business API. We assist you through the entire onboarding process."
  },
  {
    question: "How does the Lifetime Reseller License work?",
    answer: "The lifetime license is a one-time payment that gives you agency capabilities. You can add your own clients, remove our branding, and charge them whatever you like. You keep 100% of the revenue you generate."
  },
  {
    question: "What are Meta conversation charges?",
    answer: "These are fees charged by Meta per conversation (24-hour window). wappCAST does not add any markup on these. You pay exactly what Meta charges."
  },
  {
    question: "Can I integrate with my existing CRM?",
    answer: "Absolutely. We support direct integrations with major CRMs like Zoho, HubSpot, and Salesforce, and offer webhooks/APIs for custom systems."
  },
  {
    question: "Do you help with the Green Tick verification?",
    answer: "Yes, we provide free assistance and guidance for the Green Tick application process. While Meta makes the final decision, we ensure your application follows all best practices."
  },
  {
    question: "Is there a mobile app for the team inbox?",
    answer: "Yes, wappCAST offers a mobile application so your support and sales teams can respond to messages on the go."
  },
  {
    question: "How many team members can I add?",
    answer: "You can add unlimited team members (seats) at no extra cost. We don't believe in charging you more just because your team is growing."
  },
  {
    question: "Is there a setup fee?",
    answer: "Zero. We do not charge any setup or onboarding fees. Your subscription covers everything you need to get started."
  },
  {
    question: "What kind of support do you provide?",
    answer: "We provide comprehensive support via WhatsApp, email, and live Zoom calls for technical setup and strategy."
  }
]
</script>
