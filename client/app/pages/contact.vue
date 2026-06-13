<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <header class="relative pt-10 pb-10 px-4 md:px-20 max-w-container-max mx-auto overflow-hidden">
      <div class="text-center md:text-left max-w-3xl">
        <h1 class="font-display-hero-mobile md:font-display-hero text-display-hero-mobile md:text-display-hero mb-6 text-on-surface">
          Let's Talk <span class="text-primary">WhatsApp.</span>
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">
          Questions, demos, partnerships, or just figuring out if Wappcast fits your business — we're here for it. Reach out however works best for you, and a real person will get back to you fast.
        </p>
      </div>
    </header>

    <!-- Main Content Section -->
    <section class="py-section-padding px-4 md:px-20 max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 relative">
      <!-- Contact Form Card -->
      <div class="glass-card rounded-2xl p-8 md:p-12 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="relative z-10">
          <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">Send Us a Message</h2>
          <p class="font-body-md text-body-md text-on-surface-variant mb-10">
            Tell us what you need and we'll take it from there. Whether you're ready to start, want a demo, or just have a question — drop us a line below.
          </p>
          <form class="space-y-6" @submit.prevent="submitForm">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="space-y-2">
                <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Name</label>
                <input 
                  v-model="form.name"
                  class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                  placeholder="John Doe" 
                  required 
                  type="text"
                />
              </div>
              <div class="space-y-2">
                <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Email</label>
                <input 
                  v-model="form.email"
                  class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                  placeholder="john@company.com" 
                  required 
                  type="email"
                />
              </div>
            </div>
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Phone</label>
              <input 
                v-model="form.phone"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="+91 00000 00000" 
                type="tel"
              />
            </div>
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Message</label>
              <textarea 
                v-model="form.message"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="How can we help you?" 
                required 
                rows="4"
              ></textarea>
            </div>
            
            <button 
              v-if="status !== 'success'"
              class="w-full bg-gradient-primary text-on-primary font-bold py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-95 transition-transform text-lg flex items-center justify-center gap-2 cursor-pointer"
              :class="{ 'opacity-80 pointer-events-none': status === 'sending' }"
              type="submit"
            >
              <span v-if="status === 'sending'" class="material-symbols-outlined animate-spin">sync</span>
              {{ status === 'sending' ? 'Sending...' : 'Send Message' }}
            </button>

            <div 
              v-if="status === 'success'" 
              class="mt-4 p-4 rounded-lg bg-primary/10 border border-primary/20 text-primary text-center"
            >
              Thank you for your submission. One of our team members will reach out to you shortly. We typically respond within one business day.
            </div>
          </form>
        </div>
      </div>
      
      <!-- Direct Contact Info -->
      <div class="space-y-12">
        <div>
          <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">Reach Us Directly</h2>
          <p class="font-body-md text-body-md text-on-surface-variant mb-8">
            Prefer to skip the form? Here's every way to find us.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Email -->
            <div class="glass-card p-6 rounded-xl group hover:border-primary/50 transition-colors">
              <span class="material-symbols-outlined text-primary text-3xl mb-4">mail</span>
              <h4 class="font-headline-md text-xl mb-2 text-on-surface">Email</h4>
              <a class="text-on-surface-variant hover:text-primary transition-colors" href="mailto:info@wappcast.com">info@wappcast.com</a>
            </div>
            <!-- Phone -->
            <div class="glass-card p-6 rounded-xl group hover:border-primary/50 transition-colors">
              <span class="material-symbols-outlined text-primary text-3xl mb-4">call</span>
              <h4 class="font-headline-md text-xl mb-2 text-on-surface">Phone</h4>
              <p class="text-on-surface-variant">+91 9101988301</p>
            </div>
            <!-- WhatsApp -->
            <div class="glass-card p-6 rounded-xl group hover:border-primary/50 transition-colors md:col-span-2">
              <div class="flex items-center justify-between">
                <div>
                  <h4 class="font-headline-md text-xl mb-2 text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">chat</span> WhatsApp
                  </h4>
                  <p class="text-on-surface-variant mb-4">Get instant support on the app you love.</p>
                  <a href="https://wa.me/919101988301" target="_blank" rel="noopener" class="bg-secondary text-on-secondary px-6 py-2 rounded-full font-bold inline-flex items-center gap-2 hover:opacity-90 active:scale-95 transition-all cursor-pointer">
                    <span class="material-symbols-outlined">forum</span> Chat Now
                  </a>
                </div>
                <div class="hidden sm:block">
                  <img alt="QR Code" class="w-24 h-24 rounded-lg border border-border-subtle p-1 bg-white opacity-80" data-alt="A clean, minimalist QR code displayed on a high-end smartphone screen held by a professional in a dark office environment. The lighting is moody and focused, with soft emerald green accents highlighting the device edges. The background shows a blurry technological dashboard with data streams, reflecting the wappCAST brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuARDlBTBWOAkE-vuqH--mFmekKTNSEoKBLqU6rPkPoPzswcn4ahWUNNkmrQr-UIIBqWYNFPL2yl4OrYvlnDL-1RdR5AeJVv8w6RK_t5HMyEUcWLRWGt-wEGKz12O60sfPOFL_V7mLeqh_9z-huDwj7sPKhM-Nkg7S37aTTpyIyc39T1ptwuT27GURzh0MiWbJWa36-h9jZumegDN7UfMH3RW44VwFOGxb4DxxuWU5-x86Ghr8GUsL2LLzVSAkAj_hsGua8S6x222cX_"/>
                </div>
              </div>
            </div>
            <!-- Address -->
            <div class="glass-card p-6 rounded-xl md:col-span-2 group hover:border-primary/50 transition-colors">
              <span class="material-symbols-outlined text-primary text-3xl mb-4">location_on</span>
              <h4 class="font-headline-md text-xl mb-2 text-on-surface">Head Office</h4>
              <p class="text-on-surface-variant">Level 7, Tech Park One, Bannerghatta Main Road, Bengaluru, Karnataka 560076, India</p>
            </div>
          </div>
        </div>
        
        <!-- Embedded Map placeholder -->
        <div class="w-full h-48 rounded-2xl overflow-hidden glass-card">
          <div class="w-full h-full grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100" data-location="Bengaluru, India">
            <img alt="Map Location" class="w-full h-full object-cover" data-alt="A cinematic night-time view of a high-tech business district in a metropolitan city like Bengaluru. The urban architecture is modern with sleek glass skyscrapers glowing with inner office lights and exterior neon accents. The scene is shot from a high angle, capturing the geometric patterns of the city streets and the technological buzz of the environment. The atmosphere is sophisticated and global." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcqDnHVIEZcTXEaI1d7I-_THPOmhzyyqtJKkeyhTiiyTn7nGDrUGqqGLbxyODLAsi1uaZgYkqNFAv-3nBiplxEFP1UDhJGp3kuRSXuG7iyVmB37fwgVD4b0FbK7Kky95hI_hdk2kfKD79zFukz3o5KvwHB_5z9NqH9sABnkohTxFG1t9tYG0R_btBpDLkt0CJroy0DNbPeMX8CY3ar7ZA9uP0ojxfS1fbVQzcc9mRpnNaXB3rkGYMhjzBHmm-wcBioiu0XMNXhAy7P"/>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-section-padding px-4 md:px-20 max-w-container-max mx-auto bg-surface-container-lowest/50 rounded-[40px] mb-20">
      <div class="text-center mb-16">
        <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-4">Got Questions? We've Got Answers.</h2>
        <p class="text-on-surface-variant max-w-2xl mx-auto">Everything you need to know about wappCAST and how we help you scale your business communications.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- FAQ Items -->
        <div v-for="(faq, idx) in contactFaqs" :key="idx" class="glass-card rounded-2xl overflow-hidden border border-border-subtle/50 transition-all duration-300 hover:border-primary/30 relative group">
          <button 
            @click="toggleFaq(idx)"
            class="w-full p-6 flex items-center justify-between font-bold text-lg text-left text-on-surface cursor-pointer focus:outline-none hover:bg-white/5 transition-colors"
          >
            <span>{{ faq.question }}</span>
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
    </section>

    <!-- Closing Callout -->
    <div class="py-20 px-4 text-center max-w-4xl mx-auto border-t border-border-subtle">
      <p class="font-headline-md text-headline-md text-on-surface mb-6 italic">
        "However you reach out, you'll get a straight answer from someone who actually knows the product. No bots running in circles, no runaround. Let's get you sorted."
      </p>
      <div class="flex items-center justify-center gap-4">
        <img alt="Founder" class="w-12 h-12 rounded-full border-2 border-primary object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9oC_cw3w5ldNLAHXZsIFvp-RMQ5zaqlLDQV3cUs0Kl_VTe3KQLhbEZz76zK2liXvAGQ3mz3I-L8sI_UgDjxiYssDjDN1wRMSB0cqj-ej4e3gKgSoHm2KRV-pwGdn6g2fiVNyTIzgEUAXw7_pbkjL7GGWvLDJ_5NMyLriI6Hf2zH7Lr8hNHB1yZGagBmc6ma58yw05tJ3BJDbTDFTY17gU35sJHfkcsP2Q7-rGf877Ur4NslAZT5MBi4gI6ouVFq9mT0XQ6it-imLl"/>
        <div class="text-left">
          <p class="font-bold text-on-surface">Anish Kumar</p>
          <p class="text-on-surface-variant text-sm">Founder, wappCAST</p>
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { ref, reactive } from 'vue'

const status = ref('idle')
const activeFaqIdx = ref(null)

const form = reactive({
  name: '',
  email: '',
  phone: '',
  message: ''
})

// Production-grade SEO setup for contact page
useSeoMeta({
  title: 'Contact Official Meta API Support | wappCAST',
  ogTitle: 'Contact Official Meta API Support | wappCAST',
  description: 'Get in touch with wappCAST support. Book a live platform walkthrough demo, inquire about custom enterprise integrations, or join our reseller program.',
  ogDescription: 'Get in touch with wappCAST support. Book a live platform walkthrough demo, inquire about custom enterprise integrations, or join our reseller program.',
  ogImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuARDlBTBWOAkE-vuqH--mFmekKTNSEoKBLqU6rPkPoPzswcn4ahWUNNkmrQr-UIIBqWYNFPL2yl4OrYvlnDL-1RdR5AeJVv8w6RK_t5HMyEUcWLRWGt-wEGKz12O60sfPOFL_V7mLeqh_9z-huDwj7sPKhM-Nkg7S37aTTpyIyc39T1ptwuT27GURzh0MiWbJWa36-h9jZumegDN7UfMH3RW44VwFOGxb4DxxuWU5-x86Ghr8GUsL2LLzVSAkAj_hsGua8S6x222cX_',
  ogUrl: 'https://wappcast.com/contact',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Contact Official Meta API Support | wappCAST',
  twitterDescription: 'Get in touch with wappCAST support. Book a live platform walkthrough demo, inquire about custom enterprise integrations, or join our reseller program.',
  twitterImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuARDlBTBWOAkE-vuqH--mFmekKTNSEoKBLqU6rPkPoPzswcn4ahWUNNkmrQr-UIIBqWYNFPL2yl4OrYvlnDL-1RdR5AeJVv8w6RK_t5HMyEUcWLRWGt-wEGKz12O60sfPOFL_V7mLeqh_9z-huDwj7sPKhM-Nkg7S37aTTpyIyc39T1ptwuT27GURzh0MiWbJWa36-h9jZumegDN7UfMH3RW44VwFOGxb4DxxuWU5-x86Ghr8GUsL2LLzVSAkAj_hsGua8S6x222cX_',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/contact' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'Contact Official Meta API Support | wappCAST',
    description: 'Get in touch with wappCAST support. Book a live platform walkthrough demo, inquire about custom enterprise integrations, or join our reseller program.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'Contact wappCAST Support',
  description: 'Reach out to support, book a live walkthrough demo, or inquire about our WhatsApp Partner program.',
  theme: '#10b981',
  colorMode: 'dark'
})

const toggleFaq = (idx) => {
  if (activeFaqIdx.value === idx) {
    activeFaqIdx.value = null
  } else {
    activeFaqIdx.value = idx
  }
}

const submitForm = async() => {
  status.value = 'sending'
  const resp = await $fetch('http://localhost:8000/api/contacts', {
    method: 'POST',
    body: form,
    headers: {
      'Content-Type': 'application/json'
    }
  })
  if(resp.success){
    status.value = 'success'
    form.name = ''
    form.email = ''
    form.phone = ''
    form.message = ''
  }else{
    status.value='idle'
  }
}

const contactFaqs = [
  {
    question: "Why use wappCAST instead of standard WhatsApp?",
    answer: "wappCAST provides official Meta API access, allowing for multiple logins, automated broadcasting without banning risks, and deep CRM integration that personal WhatsApp cannot handle."
  },
  {
    question: "Do I need technical skills to set it up?",
    answer: "No. Our platform is designed with a no-code interface. While API experts can go deep, most users manage their entire communication strategy through our visual dashboard."
  },
  {
    question: "Which business types can use wappCAST?",
    answer: "From retail and healthcare to finance and education, any business looking for official, scalable customer engagement on WhatsApp can leverage our tools."
  },
  {
    question: "Will my number get banned?",
    answer: "Because we use the Official WhatsApp Business API, your risk of banning is drastically reduced compared to unofficial automation tools, provided you follow Meta's messaging policies."
  },
  {
    question: "Are there broadcast limits?",
    answer: "Limits are determined by your Meta-verified tier. We help you scale from Tier 1 (1k users/day) to Tier 4 (unlimited) as you maintain high quality ratings."
  },
  {
    question: "Can I handle incoming replies?",
    answer: "Absolutely. Our Smart Inbox allows multiple team members to reply to customer queries in real-time from a single centralized dashboard."
  },
  {
    question: "Does it support automation?",
    answer: "Yes, with our visual Flow Builder, you can create automated response sequences, chatbots, and trigger-based notifications without any coding."
  },
  {
    question: "How does the pricing work?",
    answer: "Pricing consists of a monthly platform fee plus Meta's official conversation charges. We provide transparent billing with no hidden markups."
  },
  {
    question: "What kind of support do you offer?",
    answer: "All clients get access to email and documentation support. Enterprise clients receive a dedicated account manager and 24/7 priority technical support."
  },
  {
    question: "Can I track my message performance?",
    answer: "Yes. Our analytics dashboard shows delivery rates, read rates, and conversion metrics in real-time, helping you optimize your campaigns."
  },
  {
    question: "Is my data safe?",
    answer: "We are GDPR compliant and use enterprise-grade encryption. As an Official Meta Partner, we adhere to the strictest data security standards globally."
  },
  {
    question: "Do you offer trials?",
    answer: "Yes, we offer a 7-day trial of our platform so you can explore the features and build your first automation flow before committing."
  },
  {
    question: "What is your refund policy?",
    answer: "We offer a pro-rated refund policy within the first 14 days if you're not satisfied with the platform. Conditions apply based on usage."
  }
]
</script>
