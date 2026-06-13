<template>
  <footer class="bg-surface-container-lowest dark:bg-background-deep py-section-padding px-margin-mobile border-t border-subtle">
    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-4 gap-gutter">
      <!-- Column 1 -->
      <div class="col-span-1 md:col-span-1 space-y-6">
        <div class="text-headline-md font-headline-md font-bold text-on-surface">wappCAST</div>
        <p class="text-on-surface-variant text-body-md font-body-md">
          Official Meta API solutions for high-growth businesses. Secure, compliant, and powerful.
        </p>
        <div class="flex gap-4">
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="#" aria-label="Website">
            <span class="material-symbols-outlined">public</span>
          </a>
          <a class="w-10 h-10 rounded-full glass-card flex items-center justify-center hover:text-primary transition-colors" href="#" aria-label="Email">
            <span class="material-symbols-outlined">alternate_email</span>
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
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/data">Data</NuxtLink></li>
        </ul>
      </div>
      
      <!-- Column 3 -->
      <div>
        <h4 class="font-bold mb-6 text-on-surface">Company</h4>
        <ul class="space-y-4">
          <li><NuxtLink class="text-on-surface-variant hover:text-primary transition-colors font-body-md" to="/blog">Blog</NuxtLink></li>
          <li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Privacy Policy</a></li>
          <li><a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Terms of Service</a></li>
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
