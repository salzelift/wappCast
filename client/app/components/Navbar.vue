<template>
  <header class="fixed top-0 left-0 w-full z-50 px-4 pt-4 flex flex-col items-center pointer-events-none">
    <!-- Floating Navbar Pill -->
    <nav class="w-full max-w-container-max glass-card rounded-full px-6 h-16 flex justify-between items-center shadow-xl border border-white/10 pointer-events-auto transition-all duration-300 bg-background/80 backdrop-blur-xl" :class="{ 'shadow-2xl border-primary/20 bg-background-deep/90 h-14 mt-1': isScrolled }">
      <!-- Logo -->
      <div class="flex items-center gap-10">
        <NuxtLink to="/" class="flex items-center hover:opacity-85 transition-opacity">
          <img src="/wappCAST-logo.png" alt="wappCAST" class="h-8 w-auto object-contain" />
        </NuxtLink>
        
        <!-- Desktop Nav Links -->
        <div class="hidden md:flex items-center gap-6">
          <NuxtLink 
            to="/" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path === '/' ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Home
          </NuxtLink>
          <NuxtLink 
            to="/features" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path === '/features' ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Features
          </NuxtLink>
          <NuxtLink 
            to="/pricing" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path === '/pricing' ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Pricing
          </NuxtLink>
          <NuxtLink 
            to="/reseller" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path === '/reseller' ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Reseller
          </NuxtLink>
          <NuxtLink 
            to="/data" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path === '/data' ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Data
          </NuxtLink>
          <NuxtLink 
            to="/resources" 
            class="transition-colors duration-200 font-semibold text-sm transition-all"
            :class="[route.path.startsWith('/resources') ? 'text-primary -translate-y-1 scale-110 font-bold' : 'text-on-surface-variant hover:text-primary']"
          >
            Resources
          </NuxtLink>
        </div>
      </div>

      <!-- Right Actions -->
      <div class="flex items-center gap-4">
        <!-- Currency Selector -->
        <div class="flex items-center bg-surface-container rounded-full px-1.5 py-1 gap-1">
          <button 
            @click="currency = 'INR'"
            class="px-2.5 py-0.5 text-[12px] font-bold rounded-full transition-all cursor-pointer"
            :class="currency === 'INR' ? 'bg-primary text-on-primary-container' : 'text-on-surface-variant hover:text-on-surface'"
          >
            INR
          </button>
          <button 
            @click="currency = 'USD'"
            class="px-2.5 py-0.5 text-[12px] font-bold rounded-full transition-all cursor-pointer"
            :class="currency === 'USD' ? 'bg-primary text-on-primary-container' : 'text-on-surface-variant hover:text-on-surface'"
          >
            USD
          </button>
        </div>

        <!-- Theme Toggle -->
        <button 
          @click="toggleTheme" 
          class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer"
          aria-label="Toggle Theme"
        >
          <span class="material-symbols-outlined text-[20px]">
            {{ isDark ? 'light_mode' : 'dark_mode' }}
          </span>
        </button>

        <div class="h-6 w-px bg-border-subtle mx-1 hidden md:block"></div>

        <!-- CTA Buttons -->
        <NuxtLink to="https://app.wappcast.com/" class="hidden md:block text-primary font-bold hover:opacity-80 transition-opacity px-3 py-1.5 text-sm">
          Login
        </NuxtLink>
        <NuxtLink to="/contact" class="btn-gradient px-5 py-2 rounded-full text-on-primary-container font-extrabold text-sm shadow-md shadow-primary/20 hover:scale-105 active:scale-95 transition-all">
          Contact Us
        </NuxtLink>

        <!-- Mobile Menu Toggle Button -->
        <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="md:hidden text-on-surface focus:outline-none cursor-pointer flex items-center justify-center" aria-label="Toggle menu">
          <span class="material-symbols-outlined text-[28px]">{{ isMobileMenuOpen ? 'close' : 'menu' }}</span>
        </button>
      </div>
    </nav>

    <!-- Mobile Nav Dropdown (Floating Pill underneath) -->
    <div v-if="isMobileMenuOpen" class="md:hidden mt-3 w-full max-w-container-max glass-card rounded-2xl p-6 space-y-4 pointer-events-auto border border-white/10 shadow-2xl bg-background/95 backdrop-blur-xl transition-all duration-300">
      <NuxtLink 
        to="/" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Home
      </NuxtLink>
      <NuxtLink 
        to="/features" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Features
      </NuxtLink>
      <NuxtLink 
        to="/pricing" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Pricing
      </NuxtLink>
      <NuxtLink 
        to="/reseller" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Reseller
      </NuxtLink>
      <NuxtLink 
        to="/data" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Data
      </NuxtLink>
      <NuxtLink 
        to="/resources" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-on-surface hover:text-primary transition-colors border-b border-white/5"
      >
        Resources
      </NuxtLink>
      <NuxtLink 
        to="http://app.wappcast.com/" 
        @click="isMobileMenuOpen = false"
        class="block py-2 font-semibold text-sm text-primary font-bold hover:text-primary/80 transition-colors"
      >
        Login
      </NuxtLink>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const isMobileMenuOpen = ref(false)
const isScrolled = ref(false)

// Global Currency State shared between components
const currency = useState('currency', () => 'INR')

// Global Theme State
const isDark = useState('theme', () => false)

const toggleTheme = () => {
  isDark.value = !isDark.value
  if (isDark.value) {
    document.documentElement.classList.add('dark')
    localStorage.setItem('theme', 'dark')
  } else {
    document.documentElement.classList.remove('dark')
    localStorage.setItem('theme', 'light')
  }
}

const handleScroll = () => {
  isScrolled.value = window.scrollY > 20
}

onMounted(() => {
  isDark.value = document.documentElement.classList.contains('dark')
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>
