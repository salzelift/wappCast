<template>
  <section class="py-24 relative overflow-hidden bg-surface-container-lowest/10 border-y border-border-subtle/30" id="sandbox">
    <!-- Grid Background -->
    <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16 max-w-3xl mx-auto">
        <span class="inline-block bg-primary/10 text-on-primary-container dark:text-primary px-4 py-1.5 rounded-full font-label-sm uppercase tracking-wider mb-4 border border-primary/20">
          Try It Yourself
        </span>
        <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">
          Experience the Power of <span class="text-primary italic">wappCAST Bots</span>
        </h2>
        <p class="text-on-surface-variant text-body-lg">
          Select an industry, click buttons in the simulated WhatsApp chat on the right, and watch the logic tree execute in real-time on the left.
        </p>
      </div>

      <!-- Industry Selectors -->
      <div class="flex flex-wrap justify-center gap-3 mb-12">
        <button 
          v-for="ind in industries" 
          :key="ind.id"
          @click="selectIndustry(ind.id)"
          class="px-5 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center gap-2 border cursor-pointer"
          :class="activeIndustryId === ind.id 
            ? 'bg-primary/20 border-primary text-primary shadow-lg shadow-primary/10 scale-105' 
            : 'glass-card border-border-subtle text-on-surface-variant hover:text-on-surface hover:border-primary/30'"
        >
          <span>{{ ind.emoji }}</span>
          <span>{{ ind.name }}</span>
        </button>
      </div>

      <!-- Sandbox Workspace -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Left Pane: The Flow Graph (5 Columns) -->
        <div class="lg:col-span-5 flex flex-col justify-center glass-card p-6 md:p-8 rounded-3xl border border-border-subtle relative overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-br from-primary/2 to-secondary/2 pointer-events-none"></div>
          <div class="relative z-10 space-y-6">
            <div class="flex justify-between items-center mb-2 border-b border-border-subtle/50 pb-4">
              <span class="font-bold text-xs uppercase tracking-wider text-on-surface-variant flex items-center gap-1.5">
                <span class="material-symbols-outlined text-xs">account_tree</span> Active Flow Graph
              </span>
              <span class="px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-[10px] font-bold border border-primary/20 animate-pulse">
                Live Execution
              </span>
            </div>

            <!-- Flow Nodes -->
            <div class="space-y-4 relative">
              <!-- Node Connection line helper -->
              <div class="absolute left-6 top-6 bottom-6 w-[2px] bg-border-subtle/30 z-0"></div>

              <div 
                v-for="(node, idx) in activeFlow.nodes" 
                :key="node.id"
                class="relative z-10 flex gap-4 items-start transition-all duration-500"
                :class="{ 'opacity-40 scale-95': activeNodeId !== node.id && activeNodeId !== null }"
              >
                <!-- Icon/Step Indicator -->
                <div 
                  class="w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-500 shrink-0 border"
                  :class="activeNodeId === node.id
                    ? 'bg-primary text-on-primary border-primary shadow-[0_0_20px_rgba(16,185,129,0.4)] scale-110'
                    : 'bg-surface-container border-border-subtle text-on-surface-variant'"
                >
                  <span class="material-symbols-outlined text-xl">{{ node.icon }}</span>
                </div>
                <!-- Node Text Details -->
                <div 
                  class="flex-grow p-4.5 rounded-2xl transition-all duration-500 border"
                  :class="activeNodeId === node.id
                    ? 'bg-primary/5 border-primary shadow-[0_4px_20px_rgba(16,185,129,0.06)]'
                    : 'glass-card border-border-subtle'"
                >
                  <span class="text-[9px] uppercase tracking-widest font-extrabold text-primary block mb-1">
                    Node 0{{ idx + 1 }} // {{ node.type }}
                  </span>
                  <h4 class="font-bold text-sm text-on-surface mb-1">{{ node.title }}</h4>
                  <p class="text-xs text-on-surface-variant leading-relaxed">{{ node.desc }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Pane: The Phone Simulator (7 Columns) -->
        <div class="lg:col-span-7 flex flex-col justify-center items-center">
          <div class="w-full max-w-[380px] bg-[#0b141a] border-[8px] border-[#202c33] rounded-[48px] shadow-2xl relative overflow-hidden flex flex-col aspect-[9/18] relative">
            <!-- Phone Notch/Speaker bar -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-[#202c33] rounded-b-2xl z-30 flex items-center justify-center">
              <div class="w-10 h-1 bg-black/40 rounded-full"></div>
            </div>

            <!-- Chat Header -->
            <div class="bg-[#202c33] pt-8 pb-3 px-4 flex items-center gap-2.5 z-20 shadow-md">
              <div class="w-9 h-9 rounded-full bg-primary/20 text-primary flex items-center justify-center border border-primary/20 shadow shrink-0">
                <span class="material-symbols-outlined text-lg">smart_toy</span>
              </div>
              <div class="text-left flex-grow">
                <h4 class="font-bold text-xs text-white leading-tight">wappCAST Assistant</h4>
                <p class="text-[9px] text-primary font-semibold flex items-center gap-1">
                  <span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span> Online
                </p>
              </div>
              <div class="flex items-center gap-3 text-white/70">
                <span class="material-symbols-outlined text-lg cursor-pointer hover:text-white">videocam</span>
                <span class="material-symbols-outlined text-lg cursor-pointer hover:text-white">call</span>
              </div>
            </div>

            <!-- Messages Window -->
            <div ref="chatContainer" class="flex-grow p-4 overflow-y-auto space-y-3 bg-[#0b141a] bg-grid-pattern opacity-95 flex flex-col relative pt-5 scroll-smooth max-h-[440px]">
              <!-- Start watermark -->
              <div class="text-center mb-4">
                <span class="bg-[#182229] text-white/50 text-[9px] px-2.5 py-1 rounded-md uppercase font-semibold tracking-wider">
                  Today
                </span>
              </div>

              <!-- Message Stream -->
              <div 
                v-for="msg in messages" 
                :key="msg.id"
                class="flex flex-col max-w-[85%] animate-slide-up"
                :class="msg.sender === 'user' ? 'self-end items-end' : 'self-start items-start'"
              >
                <!-- Text Bubble -->
                <div 
                  class="p-3 rounded-2xl text-xs relative leading-relaxed shadow-md"
                  :class="msg.sender === 'user'
                    ? 'bg-[#005c4b] text-white rounded-tr-none'
                    : 'bg-[#202c33] text-white/90 rounded-tl-none'"
                >
                  <p class="whitespace-pre-line">{{ msg.text }}</p>
                  <!-- Time & check status -->
                  <div class="text-[8px] text-white/40 mt-1 flex justify-end gap-1 items-center leading-none">
                    <span>{{ msg.time }}</span>
                    <span v-if="msg.sender === 'user'" class="material-symbols-outlined text-[10px] text-primary">done_all</span>
                  </div>
                </div>

                <!-- Interactive Buttons attached below message -->
                <div v-if="msg.buttons && msg.buttons.length > 0 && !msg.clicked" class="mt-2 flex flex-col gap-1.5 w-full">
                  <button 
                    v-for="btn in msg.buttons" 
                    :key="btn.label"
                    @click="handleButtonClick(btn, msg.id)"
                    class="w-full py-2.5 px-4 bg-[#202c33] border border-[#2a3942] hover:bg-[#2a3942] hover:border-primary/40 text-primary font-bold text-xs rounded-xl transition-all duration-200 cursor-pointer shadow-sm active:scale-98 text-center"
                  >
                    {{ btn.label }}
                  </button>
                </div>
              </div>

              <!-- Typing Indicator -->
              <div v-if="isTyping" class="self-start bg-[#202c33] p-3 rounded-2xl rounded-tl-none text-white/70 text-xs flex items-center gap-1 animate-pulse">
                <span>Bot typing</span>
                <span class="flex gap-0.5 items-center justify-center">
                  <span class="w-1 h-1 bg-white/70 rounded-full animate-bounce delay-75"></span>
                  <span class="w-1 h-1 bg-white/70 rounded-full animate-bounce delay-150"></span>
                  <span class="w-1 h-1 bg-white/70 rounded-full animate-bounce delay-225"></span>
                </span>
              </div>
            </div>

            <!-- Footer / Chat input mockup -->
            <div class="bg-[#1f2c34] p-3 flex items-center gap-2 border-t border-white/5 z-20 absolute bottom-[0.5px] w-full">
              <div class="flex-grow bg-[#2a3942] rounded-full px-4 py-2 text-xs text-white/40 flex items-center justify-between">
                <span>Select options in chat above...</span>
                <span class="material-symbols-outlined text-lg text-white/50 cursor-not-allowed">sentiment_satisfied</span>
              </div>
              <div class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center shadow cursor-not-allowed">
                <span class="material-symbols-outlined text-sm">mic</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, watch, nextTick, onMounted } from 'vue'

// Synthesize audio beep/sound dynamically using Web Audio API (Wow factor!)
const playSound = (type) => {
  try {
    const AudioContext = window.AudioContext || window.webkitAudioContext
    if (!AudioContext) return
    const ctx = new AudioContext()
    const osc = ctx.createOscillator()
    const gain = ctx.createGain()
    osc.connect(gain)
    gain.connect(ctx.destination)
    
    if (type === 'sent') {
      // Light click high tone
      osc.type = 'sine'
      osc.frequency.setValueAtTime(650, ctx.currentTime)
      gain.gain.setValueAtTime(0.04, ctx.currentTime)
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.08)
      osc.start()
      osc.stop(ctx.currentTime + 0.08)
    } else if (type === 'received') {
      // Soft WhatsApp double beep
      osc.type = 'triangle'
      osc.frequency.setValueAtTime(880, ctx.currentTime)
      gain.gain.setValueAtTime(0.05, ctx.currentTime)
      gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.12)
      osc.start()
      osc.stop(ctx.currentTime + 0.12)
      
      setTimeout(() => {
        const osc2 = ctx.createOscillator()
        const gain2 = ctx.createGain()
        osc2.connect(gain2)
        gain2.connect(ctx.destination)
        osc2.type = 'triangle'
        osc2.frequency.setValueAtTime(1046, ctx.currentTime)
        gain2.gain.setValueAtTime(0.05, ctx.currentTime)
        gain2.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.15)
        osc2.start()
        osc2.stop(ctx.currentTime + 0.15)
      }, 70)
    }
  } catch (e) {
    // Ignore context blocked errors
  }
}

const activeIndustryId = ref('ecommerce')
const activeNodeId = ref('trigger')
const isTyping = ref(false)
const chatContainer = ref(null)

const messages = ref([])

const industries = [
  { id: 'ecommerce', name: 'E-Commerce', emoji: '' },
  { id: 'realestate', name: 'Real Estate', emoji: '' },
  { id: 'healthcare', name: 'Healthcare', emoji: '' },
  { id: 'education', name: 'Education', emoji: '' }
]

// Flow configurations
const flows = {
  ecommerce: {
    nodes: [
      { id: 'trigger', type: 'Trigger', icon: 'bolt', title: 'Customer Opt-In', desc: 'Triggered when customer clicks a Meta Ad button or messages.' },
      { id: 'welcome', type: 'Interactive Menu', icon: 'menu_book', title: 'Welcome & Options', desc: 'Sends custom interactive buttons to navigate options.' },
      { id: 'catalog', type: 'Dynamic Catalog', icon: 'shopping_bag', title: 'Fetch & Display Products', desc: 'Loads inventory dynamically and displays catalog list.' },
      { id: 'conversion', type: 'Conversion Node', icon: 'credit_card', title: 'Cart Checkout & ROI Lock', desc: 'Completes checkout and attributes purchase revenue in CRM.' }
    ],
    initialMessages: [
      { id: 'msg1', sender: 'user', text: 'Hi, I want to check my order status.', time: '12:00 PM' },
      { 
        id: 'msg2', 
        sender: 'bot', 
        text: 'Hi there! Welcome to ShopperShop. 🛍️ I can help you today. What would you like to do?', 
        time: '12:00 PM',
        clicked: false,
        node: 'welcome',
        buttons: [
          { label: '📦 Track My Order', nextId: 'track_order', node: 'welcome' },
          { label: '🌟 View Summer Catalog', nextId: 'view_catalog', node: 'catalog' }
        ]
      }
    ],
    branches: {
      track_order: {
        text: '📦 Order #948271 is currently in transit! It has left our warehouse and is expected to be delivered by tomorrow, 4:00 PM.\n\nTracking link: https://wapp.run/tr/948271.',
        node: 'welcome',
        buttons: [
          { label: '🌟 View Catalog', nextId: 'view_catalog', node: 'catalog' }
        ]
      },
      view_catalog: {
        text: 'Here is our latest Summer Collection! 🌟\n\n1. Eco Cotton Tee - $29\n2. Bamboo Casual Shorts - $39\n3. Linen Comfort Shirt - $49\n\nWhich would you like to purchase?',
        node: 'catalog',
        buttons: [
          { label: '🛒 Buy Eco Cotton Tee ($29)', nextId: 'buy_now', node: 'conversion' },
          { label: '📦 Track My Order', nextId: 'track_order', node: 'welcome' }
        ]
      },
      buy_now: {
        text: 'Awesome choice! 🎉 I have created your cart containing: Eco Cotton Tee ($29).\n\nClick below to securely complete your payment inside WhatsApp:\n👉 https://wapp.run/pay/eco-tee-29',
        node: 'conversion',
        buttons: []
      }
    }
  },
  realestate: {
    nodes: [
      { id: 'trigger', type: 'Trigger', icon: 'bolt', title: 'Location Inquiry', desc: 'User scans yard QR code or triggers site search alert.' },
      { id: 'welcome', type: 'Data Collection', icon: 'apartment', title: 'Preferred Configuration', desc: 'Captures filter options (BHK config) to database.' },
      { id: 'catalog', type: 'Filter Logic', icon: 'monetization_on', title: 'Budget Fitment Check', desc: 'Screens affordability parameters automatically.' },
      { id: 'conversion', type: 'Lead Handover', icon: 'date_range', title: 'Site Visit Booking', desc: 'Books tour schedule slot and routes hot lead to sales agents.' }
    ],
    initialMessages: [
      { id: 'msg1', sender: 'user', text: 'Hi, looking for properties in Bangalore.', time: '12:00 PM' },
      { 
        id: 'msg2', 
        sender: 'bot', 
        text: 'Welcome to Prime Homes! 🏠 Let\'s find your dream home. What is your preferred configuration?', 
        time: '12:00 PM',
        clicked: false,
        node: 'welcome',
        buttons: [
          { label: '🏢 2 BHK Apartment', nextId: 'budget_check', node: 'welcome' },
          { label: '🏡 3 BHK Apartment', nextId: 'budget_check', node: 'welcome' },
          { label: '🏰 Luxury Villa', nextId: 'villa_check', node: 'catalog' }
        ]
      }
    ],
    branches: {
      budget_check: {
        text: 'Got it! What is your budget range?',
        node: 'catalog',
        buttons: [
          { label: '₹1.2 - 1.5 Cr', nextId: 'show_properties', node: 'conversion' },
          { label: '₹1.5 - 2.0 Cr', nextId: 'show_properties', node: 'conversion' }
        ]
      },
      villa_check: {
        text: 'Excellent preference! Luxury Villas start at ₹4.5 Cr. Would you like us to show you available listings in Prime Hills?',
        node: 'catalog',
        buttons: [
          { label: 'Yes, show listings', nextId: 'show_properties', node: 'conversion' }
        ]
      },
      show_properties: {
        text: 'Here is our top listing matching your search:\n\n🏡 **Prime Woods, Sarjapur**\n💰 Price: ₹1.65 Cr\n📐 Size: 1850 sq ft\n🏊 Amenities: Pool, Gym, Club House\n\nWould you like to book a site visit for tomorrow?',
        node: 'conversion',
        buttons: [
          { label: '📅 Book Site Visit Tomorrow', nextId: 'visit_confirmed', node: 'conversion' },
          { label: '📞 Request Call Back', nextId: 'callback_confirmed', node: 'conversion' }
        ]
      },
      visit_confirmed: {
        text: 'All set! 📅 Your site visit has been scheduled for tomorrow at 11:00 AM. A Prime Homes executive will reach out shortly with the location coordinate pin.',
        node: 'conversion',
        buttons: []
      },
      callback_confirmed: {
        text: 'Sure thing! 📞 A sales agent will call you in the next 15 minutes. Thank you!',
        node: 'conversion',
        buttons: []
      }
    }
  },
  healthcare: {
    nodes: [
      { id: 'trigger', type: 'Trigger', icon: 'bolt', title: 'Consultation Request', desc: 'Triggered from web booking portal fallback or QR code.' },
      { id: 'welcome', type: 'Department Routing', icon: 'medical_services', title: 'Department Selector', desc: 'Routes users based on clinical specialist required.' },
      { id: 'catalog', type: 'Calendar Integration', icon: 'calendar_month', title: 'Doctor Slot Matching', desc: 'Checks live calendars and fetches vacant slots.' },
      { id: 'conversion', type: 'Appointment Locked', icon: 'event_available', title: 'Slot Lock & SMS Confirmation', desc: 'Locks slot in database and forwards clinical directions.' }
    ],
    initialMessages: [
      { id: 'msg1', sender: 'user', text: 'I need to book a doctor consultation.', time: '12:00 PM' },
      { 
        id: 'msg2', 
        sender: 'bot', 
        text: 'Welcome to Care Clinic! 🩺 Let\'s book your appointment. Which specialist do you need today?', 
        time: '12:00 PM',
        clicked: false,
        node: 'welcome',
        buttons: [
          { label: '🩺 General Physician', nextId: 'select_physician', node: 'catalog' },
          { label: '✨ Dermatologist', nextId: 'select_derm', node: 'catalog' }
        ]
      }
    ],
    branches: {
      select_physician: {
        text: 'We have Dr. Anita Nair (General Physician) available. Select a slot:',
        node: 'catalog',
        buttons: [
          { label: 'Monday 10:00 AM', nextId: 'confirm_appt', node: 'conversion' },
          { label: 'Monday 11:30 AM', nextId: 'confirm_appt', node: 'conversion' }
        ]
      },
      select_derm: {
        text: 'We have Dr. Sarah Shah (Dermatologist) available. Select a slot:',
        node: 'catalog',
        buttons: [
          { label: 'Tuesday 02:30 PM', nextId: 'confirm_appt', node: 'conversion' },
          { label: 'Thursday 11:15 AM', nextId: 'confirm_appt', node: 'conversion' }
        ]
      },
      confirm_appt: {
        text: 'Appointment confirmed! 🎉\n\n📅 Date: Selected slot\n⏰ Time: Scheduled time\n📍 Location: Clinic Room 304\n\nA confirmation token and clinic directions have been synced to your profile. Please arrive 10 minutes prior.',
        node: 'conversion',
        buttons: []
      }
    }
  },
  education: {
    nodes: [
      { id: 'trigger', type: 'Trigger', icon: 'bolt', title: 'Bootcamp Application', desc: 'Triggers from enrollment links in educational email campaigns.' },
      { id: 'welcome', type: 'Audience Segment', icon: 'school', title: 'Experience Level Check', desc: 'Qualifies user skill depth for proper curriculum routing.' },
      { id: 'catalog', type: 'Validation Logic', icon: 'timer', title: 'Commitment Check', desc: 'Confirms program capacity variables.' },
      { id: 'conversion', type: 'Scholarship Offer', icon: 'workspace_premium', title: 'Incentive Deliverable', desc: 'Awards coupon discount tags and schedules advisor calls.' }
    ],
    initialMessages: [
      { id: 'msg1', sender: 'user', text: 'Hi, interested in the Data Science Bootcamp.', time: '12:00 PM' },
      { 
        id: 'msg2', 
        sender: 'bot', 
        text: 'Awesome choice! 📊 Our next cohort starts soon. To see if you qualify for our 20% scholarship, what is your experience level?', 
        time: '12:00 PM',
        clicked: false,
        node: 'welcome',
        buttons: [
          { label: '🎓 Student / Beginner', nextId: 'commit_check', node: 'welcome' },
          { label: '💼 Working Professional', nextId: 'commit_check', node: 'welcome' }
        ]
      }
    ],
    branches: {
      commit_check: {
        text: 'Perfect! Are you able to commit at least 15 hours per week for live classes and assignment submissions?',
        node: 'catalog',
        buttons: [
          { label: 'Yes, absolutely!', nextId: 'grant_scholarship', node: 'conversion' },
          { label: 'Not sure, tell me more', nextId: 'info_details', node: 'catalog' }
        ]
      },
      info_details: {
        text: 'No problem! The program includes 6 hours of live instruction and 9 hours of self-paced projects weekly. Mentors are available daily to assist.\n\nReady to proceed?',
        node: 'catalog',
        buttons: [
          { label: 'Yes, I can commit!', nextId: 'grant_scholarship', node: 'conversion' }
        ]
      },
      grant_scholarship: {
        text: 'Congratulations! 🎉 You qualify for our 20% Early-Bird Scholarship.\n\nYour scholarship code is: **DS2026**.\n\nWould you like to schedule a 10-minute advisor call to complete your enrollment?',
        node: 'conversion',
        buttons: [
          { label: '📅 Book Advisor Call', nextId: 'call_booked', node: 'conversion' }
        ]
      },
      call_booked: {
        text: 'Awesome! 📅 We have booked your advisor call. A mentor will reach out on this number tomorrow at your preferred time. See you soon!',
        node: 'conversion',
        buttons: []
      }
    }
  }
}

const activeFlow = ref(flows[activeIndustryId.value])

const selectIndustry = (id) => {
  playSound('sent')
  activeIndustryId.value = id
  activeFlow.value = flows[id]
  activeNodeId.value = 'trigger'
  // Clone initial messages
  messages.value = JSON.parse(JSON.stringify(flows[id].initialMessages))
  scrollToBottom()
}

const handleButtonClick = (btn, parentMessageId) => {
  // Play sound
  playSound('sent')
  
  // Mark parent message buttons as clicked
  const parentMsg = messages.value.find(m => m.id === parentMessageId)
  if (parentMsg) parentMsg.clicked = true

  // Push user reply
  messages.value.push({
    id: `user_${Date.now()}`,
    sender: 'user',
    text: btn.label,
    time: getCurrentTime()
  })

  activeNodeId.value = btn.node
  scrollToBottom()

  // Simulate typing indicator
  isTyping.value = true
  
  setTimeout(() => {
    isTyping.value = false
    playSound('received')
    
    const branch = activeFlow.value.branches[btn.nextId]
    if (branch) {
      messages.value.push({
        id: `bot_${Date.now()}`,
        sender: 'bot',
        text: branch.text,
        time: getCurrentTime(),
        clicked: false,
        node: branch.node,
        buttons: branch.buttons
      })
      activeNodeId.value = branch.node
    }
    scrollToBottom()
  }, 1000)
}

const getCurrentTime = () => {
  const now = new Date()
  let hours = now.getHours()
  const minutes = now.getMinutes().toString().padStart(2, '0')
  const ampm = hours >= 12 ? 'PM' : 'AM'
  hours = hours % 12
  hours = hours ? hours : 12
  return `${hours}:${minutes} ${ampm}`
}

const scrollToBottom = () => {
  nextTick(() => {
    if (chatContainer.value) {
      chatContainer.value.scrollTop = chatContainer.value.scrollHeight
    }
  })
}

// Watch messages and update scroll position
watch(messages, () => {
  scrollToBottom()
}, { deep: true })

onMounted(() => {
  // Initialize messages
  messages.value = JSON.parse(JSON.stringify(activeFlow.value.initialMessages))
})
</script>

<style scoped>
.animate-slide-up {
  animation: slideUp 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(16px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
