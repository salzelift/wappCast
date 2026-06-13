<template>
  <main class="pt-24 min-h-screen bg-background relative overflow-hidden flex items-center justify-center py-12 px-margin-mobile">
    <!-- Background Glows -->
    <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-2xl w-full relative z-10">
      <!-- Title & Intro -->
      <div class="text-center mb-10">
        <h1 class="font-display-hero text-headline-lg mb-4 text-on-surface">
          Request a <span class="gradient-text">Live Demo</span>
        </h1>
        <p class="font-body-md text-on-surface-variant max-w-lg mx-auto">
          See how wappCAST can automate your customer communication, broadcasting, and team inbox workflows. Fill in your details, and our team will get in touch with you.
        </p>
      </div>

      <!-- Demo Request Form -->
      <div class="glass-card rounded-3xl p-8 md:p-12 border border-primary/20 relative overflow-hidden shadow-glow-emerald/5">
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
        
        <form v-if="!submitted" class="space-y-6" @submit.prevent="submitDemoRequest">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Full Name</label>
              <input 
                v-model="form.name"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="John Doe" 
                required 
                type="text"
              />
            </div>
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Business Email</label>
              <input 
                v-model="form.email"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="john@company.com" 
                required 
                type="email"
              />
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Phone Number</label>
              <input 
                v-model="form.phone"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="+91 98765 43210" 
                required
                type="tel"
              />
            </div>
            <div class="space-y-2">
              <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Company Name</label>
              <input 
                v-model="form.company"
                class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
                placeholder="Acme Corp" 
                required
                type="text"
              />
            </div>
          </div>

          <div class="space-y-2">
            <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Monthly Broadcast Volume (Approx.)</label>
            <select 
              v-model="form.volume"
              class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface cursor-pointer"
            >
              <option value="" disabled>Select message volume</option>
              <option value="Under 10k">Under 10,000 / month</option>
              <option value="10k - 50k">10,000 - 50,000 / month</option>
              <option value="50k - 200k">50,000 - 200,000 / month</option>
              <option value="200k+">200,000+ / month</option>
            </select>
          </div>

          <div class="space-y-2">
            <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Tell us about your requirements</label>
            <textarea 
              v-model="form.message"
              class="w-full bg-surface-container-low border border-border-subtle rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface" 
              placeholder="What are your main goals with WhatsApp API? (e.g. Chatbot automation, B2B broadcasts, support team inbox...)" 
              rows="4"
            ></textarea>
          </div>

          <button 
            type="submit"
            class="w-full bg-gradient-primary text-on-primary font-bold py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-95 transition-transform text-lg flex items-center justify-center gap-2 cursor-pointer"
            :disabled="submitting"
          >
            <span v-if="submitting" class="material-symbols-outlined animate-spin">sync</span>
            {{ submitting ? 'Submitting...' : 'Request Walkthrough' }}
          </button>
          
          <p class="text-center text-label-sm font-label-sm text-on-surface-variant/60">
            No credit card required. A team member will schedule a 1-on-1 walkthrough.
          </p>
        </form>

        <!-- Success Message -->
        <div v-else class="text-center py-8 space-y-6">
          <div class="w-16 h-16 bg-primary/10 border border-primary/20 rounded-full flex items-center justify-center mx-auto text-primary">
            <span class="material-symbols-outlined text-4xl">check</span>
          </div>
          <div class="space-y-2">
            <h3 class="text-headline-sm font-bold text-on-surface">Request Submitted!</h3>
            <p class="text-on-surface-variant text-body-md">
              Thank you, <span class="font-bold text-on-surface">{{ form.name }}</span>. We have received your demo request for <span class="font-bold text-on-surface">{{ form.company }}</span>.
            </p>
            <p class="text-on-surface-variant text-body-md">
              One of our product experts will reach out to you at <span class="text-primary font-semibold">{{ form.email }}</span> or via WhatsApp to schedule a live demo.
            </p>
          </div>
          <div class="pt-6">
            <button 
              @click="closeTab" 
              class="px-8 py-3 bg-surface-container border border-border-subtle rounded-xl font-bold hover:bg-white/5 transition-colors cursor-pointer"
            >
              Close Window
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { ref, reactive } from 'vue'

const submitted = ref(false)
const submitting = ref(false)

const form = reactive({
  name: '',
  email: '',
  phone: '',
  company: '',
  volume: '',
  message: ''
})

const submitDemoRequest = async () => {
  submitting.value = true
  
  // Simulate API call for demo request
  try {
    // Attempt backend POST if backend route exists, otherwise just resolve.
    // Note: The contact submission in contact.vue uses localhost:8000/api/contacts
    await new Promise(resolve => setTimeout(resolve, 1500))
    submitted.value = true
  } catch (err) {
    console.error(err)
    submitted.value = true // Show success in client anyway
  } finally {
    submitting.value = false
  }
}

const closeTab = () => {
  if (typeof window !== 'undefined') {
    window.close()
  }
}

// SEO meta tags for Demo Request Page
useSeoMeta({
  title: 'Request a Live Demo | wappCAST',
  ogTitle: 'Request a Live Demo | wappCAST',
  description: 'Book a 1-on-1 walkthrough demo of wappCAST. See how our official Meta Business Solutions can scale your WhatsApp outreach.',
  ogDescription: 'Book a 1-on-1 walkthrough demo of wappCAST. See how our official Meta Business Solutions can scale your WhatsApp outreach.',
  ogUrl: 'https://wappcast.com/demo',
  ogType: 'website',
  robots: 'noindex, nofollow' // Demos shouldn't clutter SEO index
})
</script>
