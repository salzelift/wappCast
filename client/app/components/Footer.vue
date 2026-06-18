<template>
  <footer class="bg-surface-container-lowest dark:bg-background-deep py-section-padding px-margin-mobile border-t border-subtle">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <!-- Column 1 -->
      <div class="col-span-1 md:col-span-1 space-y-6">
        <div class="text-headline-md font-headline-md font-bold text-on-surface">wappCAST</div>
        <p class="text-on-surface-variant text-body-md font-body-md">
          Official Meta API solutions for high-growth businesses. Secure, compliant, and powerful.
        </p>
        <div class="flex flex-wrap gap-3">
          <NuxtLink class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" to="/" aria-label="Website">
            <span class="material-symbols-outlined text-[20px]">public</span>
          </NuxtLink>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="mailto:info@wappcast.com" aria-label="Email">
            <span class="material-symbols-outlined text-[20px]">alternate_email</span>
          </a>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="https://www.linkedin.com/company/wappcast/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
          </a>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="https://www.instagram.com/wappcast" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6m12.4 2.25a.75.75 0 1 1-.75.75.75.75 0 0 1 .75-.75M12 7a5 5 0 1 1-5 5 5 5 0 0 1 5-5m0 2a3 3 0 1 0 3 3 3 3 0 0 0-3-3z"/>
            </svg>
          </a>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="https://www.facebook.com/wappcast" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.2 2.23.2v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7c4.78-.75 8.44-4.9 8.44-9.9c0-5.53-4.5-10.02-10-10.02z"/>
            </svg>
          </a>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="https://www.youtube.com/@wappcast" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.108C19.524 3.545 12 3.545 12 3.545s-7.525 0-9.387.51A3.003 3.003 0 0 0 .502 6.163C0 8.07 0 12 0 12s0 3.93.502 5.837a3.003 3.003 0 0 0 2.11 2.108c1.862.51 9.387.51 9.387.51s7.525 0 9.387-.51a3.003 3.003 0 0 0 2.11-2.108C24 15.93 24 12 24 12s0-3.93-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Column 2 -->
      <div>
        <h4 class="font-bold mb-6 text-on-surface">Product</h4>
        <ul class="space-y-4">
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/">Home</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/features">Features</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/pricing">Pricing</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/reseller">Reseller</NuxtLink></li>
        </ul>
      </div>
      
      <!-- Column 3 -->
      <div>
        <h4 class="font-bold mb-6 text-on-surface">Company</h4>
        <ul class="space-y-4">
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/blog">Blog</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/privacy">Privacy Policy</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/terms">Terms of Service</NuxtLink></li>
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/data">Data</NuxtLink></li>
        </ul>
      </div>
      
      <!-- Column 4 -->
      <div>
        <h4 class="font-bold mb-6 text-on-surface">Accepted Payments</h4>
        <div class="flex flex-wrap gap-2 opacity-70 mb-6">
          <span class="px-2 py-1 border border-subtle rounded text-[10px] uppercase font-bold">Visa</span>
          <span class="px-2 py-1 border border-subtle rounded text-[10px] uppercase font-bold">Mastercard</span>
          <span class="px-2 py-1 border border-subtle rounded text-[10px] uppercase font-bold">Paypal</span>
          <span class="px-2 py-1 border border-subtle rounded text-[10px] uppercase font-bold">RazorPay</span>
          <span class="px-2 py-1 border border-subtle rounded text-[10px] uppercase font-bold">UPI</span>
        </div>
        <p class="text-label-sm font-label-sm text-on-surface-variant italic">Made with Love in India ❤️</p>
      </div>
    </div>
    <div class="max-w-container-max mx-auto mt-16 pt-8 border-t border-subtle text-center text-label-sm font-label-sm text-on-surface-variant">
      © 2026 wappCAST. Official Meta API Solutions. All Rights Reserved.
    </div>
  </footer>
</template>
