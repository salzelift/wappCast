<template>
  <div class="fixed bottom-6 right-6 z-50 font-sans">
    <!-- Chat Window Popover -->
    <Transition
      enter-active-class="transition duration-300 ease-out"
      enter-from-class="transform scale-95 opacity-0 translate-y-10"
      enter-to-class="transform scale-100 opacity-100 translate-y-0"
      leave-active-class="transition duration-200 ease-in"
      leave-from-class="transform scale-100 opacity-100 translate-y-0"
      leave-to-class="transform scale-95 opacity-0 translate-y-10"
    >
      <div 
        v-if="isOpen" 
        class="glass-card mb-4 w-[360px] max-w-[calc(100vw-32px)] rounded-2xl shadow-2xl border border-border-subtle overflow-hidden flex flex-col"
      >
        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-600 to-teal-600 p-4 text-white flex items-center justify-between shadow-md">
          <div class="flex items-center gap-3">
            <div class="relative">
              <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center font-bold text-lg border border-white/20">
                WC
              </div>
              <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-400 border-2 border-emerald-600 rounded-full animate-pulse"></span>
            </div>
            <div>
              <h4 class="font-bold text-sm leading-tight text-white">wappCAST Support</h4>
              <p class="text-[11px] text-emerald-100 flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-300"></span>
                Active and online
              </p>
            </div>
          </div>
          <button 
            @click="toggleWidget"
            class="text-white/80 hover:text-white hover:bg-white/10 p-1.5 rounded-full transition-colors cursor-pointer"
            aria-label="Close chat window"
          >
            <span class="material-symbols-outlined text-[20px]">close</span>
          </button>
        </div>

        <!-- Chat Area -->
        <div class="p-5 max-h-[300px] overflow-y-auto bg-surface-container-low flex flex-col gap-4">
          <!-- Welcome Message -->
          <div class="flex flex-col gap-1 max-w-[85%] self-start bg-white dark:bg-surface-container-high p-3 rounded-2xl rounded-tl-none shadow-sm text-on-surface border border-border-subtle">
            <p class="text-[13px] leading-relaxed">
              Hey there! 👋 Welcome to wappCAST.
            </p>
            <p class="text-[13px] leading-relaxed">
              Need official WhatsApp API access, broadcasting features, or custom CRM integrations? Let us know how we can help!
            </p>
            <span class="text-[10px] text-on-surface-variant/70 self-end mt-1">
              Just now
            </span>
          </div>

          <!-- Quick Actions / Suggestion Chips -->
          <div class="flex flex-wrap gap-2 mt-2">
            <button 
              v-for="chip in quickChips" 
              :key="chip.label"
              @click="selectChip(chip.text)"
              class="text-[11px] font-semibold bg-white dark:bg-surface-container-highest hover:bg-emerald-50 dark:hover:bg-emerald-950/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 rounded-full px-3 py-1.5 transition-colors cursor-pointer active:scale-95"
            >
              {{ chip.label }}
            </button>
          </div>
        </div>

        <!-- Input Area / Form -->
        <form @submit.prevent="sendMessage" class="p-3 border-t border-border-subtle bg-white dark:bg-surface-container-lowest flex items-center gap-2">
          <input 
            v-model="message"
            ref="inputRef"
            type="text"
            placeholder="Type a message..."
            class="flex-grow bg-surface-container-low dark:bg-surface-container-high border border-border-subtle rounded-xl px-4 py-2.5 text-xs text-on-surface focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-all placeholder-on-surface-variant/50"
            required
          />
          <button 
            type="submit"
            class="bg-emerald-600 hover:bg-emerald-500 text-white p-2.5 rounded-xl shadow-lg hover:shadow-emerald-600/20 transition-all active:scale-95 cursor-pointer flex items-center justify-center"
            aria-label="Send WhatsApp message"
          >
            <span class="material-symbols-outlined text-[18px]">send</span>
          </button>
        </form>
      </div>
    </Transition>

    <!-- Floating Action Button -->
    <button 
      @click="toggleWidget"
      class="w-14 h-14 rounded-full bg-[#25D366] hover:bg-[#20ba59] text-white flex items-center justify-center shadow-lg shadow-emerald-500/20 hover:shadow-emerald-500/40 transition-all hover:scale-105 active:scale-95 cursor-pointer relative group"
      :aria-label="isOpen ? 'Close chat' : 'Open WhatsApp chat'"
    >
      <!-- Subtle Pulsing Border -->
      <span class="absolute inset-0 rounded-full bg-[#25D366]/40 animate-ping -z-10 group-hover:animate-none"></span>
      
      <!-- Unread Badge Indicator -->
      <span v-if="!isOpen && hasUnread" class="absolute -top-0.5 -right-0.5 w-3.5 h-3.5 bg-red-500 border border-white rounded-full flex items-center justify-center text-[8px] font-bold text-white shadow-sm">
        1
      </span>

      <!-- SVG WhatsApp Logo -->
      <svg 
        class="w-7 h-7 fill-current" 
        viewBox="0 0 24 24" 
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.458 5.704 1.459h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
      </svg>
    </button>
  </div>
</template>

<script setup>
import { ref, nextTick, onMounted, onUnmounted } from 'vue'

const isOpen = ref(false)
const hasUnread = ref(true)
const message = ref('')
const inputRef = ref(null)

const quickChips = [
  { label: '🚀 Schedule Demo', text: 'Hi wappCAST, I would like to schedule a platform demo.' },
  { label: '💰 API Pricing', text: 'Hello, what are your WhatsApp API pricing tiers?' },
  { label: '🔧 Developer Support', text: 'Hey, I need help setting up custom webhooks / APIs.' }
]

const toggleWidget = () => {
  isOpen.value = !isOpen.value
  if (isOpen.value) {
    hasUnread.value = false
    // Focus the input field on open
    nextTick(() => {
      inputRef.value?.focus()
    })
  }
}

const selectChip = (text) => {
  message.value = text
  nextTick(() => {
    inputRef.value?.focus()
  })
}

const sendMessage = () => {
  if (!message.value.trim()) return
  
  // Official phone number
  const phoneNumber = '919101988301'
  const encodedText = encodeURIComponent(message.value.trim())
  const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedText}`
  
  // Open WhatsApp in new tab
  window.open(whatsappUrl, '_blank', 'noopener,noreferrer')
  
  // Reset widget state
  message.value = ''
  isOpen.value = false
}

// Close on escape key
const handleKeyDown = (e) => {
  if (e.key === 'Escape' && isOpen.value) {
    isOpen.value = false
  }
}

onMounted(() => {
  window.addEventListener('keydown', handleKeyDown)
})

onUnmounted(() => {
  window.removeEventListener('keydown', handleKeyDown)
})
</script>
