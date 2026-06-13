<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex flex-col justify-center items-center text-center px-margin-mobile overflow-hidden py-24">
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="relative z-10 max-w-5xl mx-auto">
        <h1 class="font-display-hero text-display-hero mb-6 tracking-tight leading-tight md:block hidden">
          #1 Ban-Proof WhatsApp API for <span class="text-primary italic">Customer Acquisition and Engagement</span> 🏆
        </h1>
        <h1 class="font-display-hero-mobile text-display-hero-mobile mb-6 tracking-tight leading-tight md:hidden">
          #1 Ban-Proof WhatsApp API 🏆
        </h1>
        <p class="text-body-lg font-body-lg text-on-surface-variant mb-10 max-w-3xl mx-auto">
          Reach your customers on the app they use every day. Launch WhatsApp campaigns in minutes and watch your numbers move.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
          <NuxtLink to="/contact" class="btn-gradient px-10 py-5 rounded-full text-on-primary-container font-extrabold text-body-lg font-body-lg w-full sm:w-auto shadow-2xl">
            Book a Demo
          </NuxtLink>
          <div class="text-on-surface-variant font-label-sm text-label-sm flex items-center gap-2">
            <span class="material-symbols-outlined text-[16px]">lock_reset</span> No Credit Card Needed
          </div>
        </div>
        
        <!-- Dashboard Preview -->
        <div class="mt-8 relative group max-w-4xl mx-auto">
          <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-2xl blur-xl group-hover:blur-2xl transition duration-500 opacity-75"></div>
          <div class="relative glass-card rounded-2xl p-2 overflow-hidden shadow-2xl">
            <iframe 
              class="w-full aspect-video rounded-xl" 
              src="https://www.youtube.com/embed/npl7TwHie40" 
              title="wappCAST Dashboard Preview" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              referrerpolicy="strict-origin-when-cross-origin" 
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Trusted By Section -->
    <section class="py-12 border-y border-border-subtle/50 bg-surface-container-lowest/50 overflow-hidden relative">
      <!-- Edge Masking Gradients -->
      <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-background via-background/40 to-transparent z-10 pointer-events-none"></div>
      <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-background via-background/40 to-transparent z-10 pointer-events-none"></div>
      
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <p class="text-center text-label-sm font-label-sm text-on-surface-variant uppercase tracking-widest mb-8 opacity-70">Trusted by Businesses Worldwide</p>
        
        <div class="relative w-full overflow-hidden">
          <div class="animate-marquee-ltr flex items-center gap-16 whitespace-nowrap">
            <!-- First Set -->
            <div class="flex items-center gap-16 shrink-0">
              <!-- Booksy -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/Booksy-logo-black.svg" class="h-7 w-auto brightness-0 invert" alt="Booksy" />
              </div>
              <!-- Lybrate -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 145 32" class="h-7 w-auto fill-current text-on-surface">
                  <text x="0" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="22" letter-spacing="-0.5px">lybra</text>
                  <circle cx="90" cy="15" r="9" fill="#d9381e" />
                  <path d="M90 10v10M85 15h10" stroke="#fff" stroke-width="2.5" stroke-linecap="round" />
                  <text x="106" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="22" letter-spacing="-0.5px">e</text>
                </svg>
              </div>
              <!-- Wipro -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Wipro_Primary_Logo_Color_RGB.svg" class="h-8 w-auto filter drop-shadow-[0_0_1px_rgba(255,255,255,0.4)]" alt="Wipro" />
              </div>
              <!-- FoxyMoron -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/FoxyMoron.png" class="h-8 w-auto" alt="FoxyMoron" />
              </div>
              <!-- GroupM -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/GroupM-Logo.svg" class="h-7 w-auto" alt="GroupM" />
              </div>
              <!-- CGBOT -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 90 75" class="h-14 w-auto fill-current text-on-surface">
                  <line x1="32" y1="20" x2="24" y2="10" stroke="#7f8c8d" stroke-width="3.5" stroke-linecap="round" />
                  <circle cx="24" cy="10" r="3.5" fill="#e67e22" />
                  <line x1="58" y1="20" x2="66" y2="10" stroke="#7f8c8d" stroke-width="3.5" stroke-linecap="round" />
                  <circle cx="66" cy="10" r="3.5" fill="#e67e22" />
                  <rect x="20" y="18" width="42" height="34" rx="8" fill="#7f8c8d" />
                  <rect x="25" y="23" width="32" height="20" rx="5" fill="#ffffff" />
                  <circle cx="34" cy="31" r="4.5" fill="#34495e" />
                  <circle cx="34" cy="31" r="1.5" fill="#fff" />
                  <circle cx="48" cy="31" r="4.5" fill="#34495e" />
                  <circle cx="48" cy="31" r="1.5" fill="#fff" />
                  <path d="M32 37 Q41 43 50 37" stroke="#34495e" stroke-width="2.5" fill="none" stroke-linecap="round" />
                  <text x="41" y="66" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="12" fill="#e67e22" text-anchor="middle" letter-spacing="1px">CGBOT</text>
                </svg>
              </div>
              <!-- BKT Tires -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 110 32" class="h-8 w-auto">
                  <text x="0" y="22" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="24" font-style="italic" fill="#00bd85" letter-spacing="-1px">BKT</text>
                  <line x1="0" y1="26" x2="62" y2="26" stroke="#00bd85" stroke-width="1.5" />
                  <text x="10" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="8" font-style="italic" fill="#00bd85" letter-spacing="1.2px">TIRES</text>
                </svg>
              </div>
              <!-- Luminous -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 150 30" class="h-7 w-auto">
                  <text x="0" y="23" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="20" fill="#0056b3" letter-spacing="0.5px">LUMINOUS</text>
                </svg>
              </div>
              <!-- Join -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 90 30" class="h-7 w-auto fill-current text-on-surface">
                  <text x="0" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="24" letter-spacing="-0.5px">JOIN</text>
                  <circle cx="63" cy="4" r="3.5" fill="#4edea3" />
                </svg>
              </div>
              <!-- Vivion -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 70 70" class="h-14 w-auto">
                  <circle cx="35" cy="24" r="18" stroke="#be2edd" stroke-width="2" fill="none" />
                  <path d="M26 15 L35 32 L44 15" stroke="#be2edd" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                  <path d="M29 15 L35 27" stroke="#e056fd" stroke-width="2.5" stroke-linecap="round" fill="none" />
                  <text x="35" y="58" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="12" fill="#dae2fd" text-anchor="middle" letter-spacing="0.5px">vivioN</text>
                </svg>
              </div>
              <!-- Amura -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 70 70" class="h-14 w-auto">
                  <rect x="17" y="5" width="36" height="36" rx="6" fill="#7cb342" />
                  <text x="35" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="26" fill="#fff" text-anchor="middle">a</text>
                  <text x="35" y="58" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="12" fill="#dae2fd" text-anchor="middle" letter-spacing="0.5px">amura</text>
                </svg>
              </div>
            </div>

            <!-- Duplicate Set for Seamless Looping -->
            <div class="flex items-center gap-16 shrink-0">
              <!-- Booksy -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/Booksy-logo-black.svg" class="h-7 w-auto brightness-0 invert" alt="Booksy" />
              </div>
              <!-- Lybrate -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 145 32" class="h-7 w-auto fill-current text-on-surface">
                  <text x="0" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="22" letter-spacing="-0.5px">lybra</text>
                  <circle cx="90" cy="15" r="9" fill="#d9381e" />
                  <path d="M90 10v10M85 15h10" stroke="#fff" stroke-width="2.5" stroke-linecap="round" />
                  <text x="106" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="22" letter-spacing="-0.5px">e</text>
                </svg>
              </div>
              <!-- Wipro -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Wipro_Primary_Logo_Color_RGB.svg" class="h-8 w-auto filter drop-shadow-[0_0_1px_rgba(255,255,255,0.4)]" alt="Wipro" />
              </div>
              <!-- FoxyMoron -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/FoxyMoron.png" class="h-8 w-auto" alt="FoxyMoron" />
              </div>
              <!-- GroupM -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/GroupM-Logo.svg" class="h-7 w-auto" alt="GroupM" />
              </div>
              <!-- CGBOT -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 90 75" class="h-14 w-auto fill-current text-on-surface">
                  <line x1="32" y1="20" x2="24" y2="10" stroke="#7f8c8d" stroke-width="3.5" stroke-linecap="round" />
                  <circle cx="24" cy="10" r="3.5" fill="#e67e22" />
                  <line x1="58" y1="20" x2="66" y2="10" stroke="#7f8c8d" stroke-width="3.5" stroke-linecap="round" />
                  <circle cx="66" cy="10" r="3.5" fill="#e67e22" />
                  <rect x="20" y="18" width="42" height="34" rx="8" fill="#7f8c8d" />
                  <rect x="25" y="23" width="32" height="20" rx="5" fill="#ffffff" />
                  <circle cx="34" cy="31" r="4.5" fill="#34495e" />
                  <circle cx="34" cy="31" r="1.5" fill="#fff" />
                  <circle cx="48" cy="31" r="4.5" fill="#34495e" />
                  <circle cx="48" cy="31" r="1.5" fill="#fff" />
                  <path d="M32 37 Q41 43 50 37" stroke="#34495e" stroke-width="2.5" fill="none" stroke-linecap="round" />
                  <text x="41" y="66" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="12" fill="#e67e22" text-anchor="middle" letter-spacing="1px">CGBOT</text>
                </svg>
              </div>
              <!-- BKT Tires -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 110 32" class="h-8 w-auto">
                  <text x="0" y="22" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="24" font-style="italic" fill="#00bd85" letter-spacing="-1px">BKT</text>
                  <line x1="0" y1="26" x2="62" y2="26" stroke="#00bd85" stroke-width="1.5" />
                  <text x="10" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="8" font-style="italic" fill="#00bd85" letter-spacing="1.2px">TIRES</text>
                </svg>
              </div>
              <!-- Luminous -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 150 30" class="h-7 w-auto">
                  <text x="0" y="23" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="20" fill="#0056b3" letter-spacing="0.5px">LUMINOUS</text>
                </svg>
              </div>
              <!-- Join -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 90 30" class="h-7 w-auto fill-current text-on-surface">
                  <text x="0" y="24" font-family="'Plus Jakarta Sans', sans-serif" font-weight="900" font-size="24" letter-spacing="-0.5px">JOIN</text>
                  <circle cx="63" cy="4" r="3.5" fill="#4edea3" />
                </svg>
              </div>
              <!-- Vivion -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 70 70" class="h-14 w-auto">
                  <circle cx="35" cy="24" r="18" stroke="#be2edd" stroke-width="2" fill="none" />
                  <path d="M26 15 L35 32 L44 15" stroke="#be2edd" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                  <path d="M29 15 L35 27" stroke="#e056fd" stroke-width="2.5" stroke-linecap="round" fill="none" />
                  <text x="35" y="58" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="12" fill="#dae2fd" text-anchor="middle" letter-spacing="0.5px">vivioN</text>
                </svg>
              </div>
              <!-- Amura -->
              <div class="flex items-center justify-center shrink-0 transition-all duration-300 hover:scale-105 opacity-60 hover:opacity-100 filter grayscale hover:grayscale-0">
                <svg viewBox="0 0 70 70" class="h-14 w-auto">
                  <rect x="17" y="5" width="36" height="36" rx="6" fill="#7cb342" />
                  <text x="35" y="32" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="26" fill="#fff" text-anchor="middle">a</text>
                  <text x="35" y="58" font-family="'Plus Jakarta Sans', sans-serif" font-weight="700" font-size="12" fill="#dae2fd" text-anchor="middle" letter-spacing="0.5px">amura</text>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why WhatsApp Section -->
    <section class="py-section-padding bg-background relative overflow-hidden">
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-glow-emerald blur-[120px] opacity-20 pointer-events-none"></div>
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg mb-4">Why <span class="text-primary">WhatsApp?</span></h2>
          <p class="text-on-surface-variant text-body-lg max-w-2xl mx-auto">The world's most popular messaging app is now your most powerful business tool.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="glass-card p-8 rounded-2xl border-primary/20 hover:border-primary/40 transition-all group">
            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:shadow-[0_0_20px_rgba(78,222,163,0.3)] transition-all">
              <span class="material-symbols-outlined text-[32px]">visibility</span>
            </div>
            <h3 class="text-headline-md font-bold mb-4">98% Open Rates</h3>
            <p class="text-on-surface-variant text-body-md">Stop getting buried in spam folders. Meet your customers where they are already active.</p>
          </div>
          <div class="glass-card p-8 rounded-2xl border-primary/20 hover:border-primary/40 transition-all group">
            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:shadow-[0_0_20px_rgba(78,222,163,0.3)] transition-all">
              <span class="material-symbols-outlined text-[32px]">bolt</span>
            </div>
            <h3 class="text-headline-md font-bold mb-4">Instant Replies</h3>
            <p class="text-on-surface-variant text-body-md">Replies come in minutes, not days. Conversations feel personal and low-friction.</p>
          </div>
          <div class="glass-card p-8 rounded-2xl border-primary/20 hover:border-primary/40 transition-all group">
            <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:shadow-[0_0_20px_rgba(78,222,163,0.3)] transition-all">
              <span class="material-symbols-outlined text-[32px]">favorite</span>
            </div>
            <h3 class="text-headline-md font-bold mb-4">Personal Connection</h3>
            <p class="text-on-surface-variant text-body-md">Build trust by engaging in the same space people talk to their friends and family.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-section-padding bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
          <div>
            <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">People actually <span class="text-primary italic">open</span> WhatsApp</h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant mb-8">
              Stop getting buried in spam folders. Meet your customers where they are already active.
            </p>
            <div class="space-y-6">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
                  <span class="material-symbols-outlined">visibility</span>
                </div>
                <div>
                  <h4 class="text-body-lg font-bold">98% Open Rates</h4>
                  <p class="text-on-surface-variant">Compared to just 15-20% on email, WhatsApp ensures your message gets seen.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
                  <span class="material-symbols-outlined">chat</span>
                </div>
                <div>
                  <h4 class="text-body-lg font-bold">Instant Replies</h4>
                  <p class="text-on-surface-variant">Replies come in minutes, not days. Conversations feel personal and low-friction.</p>
                </div>
              </div>
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
                  <span class="material-symbols-outlined">person</span>
                </div>
                <div>
                  <h4 class="text-body-lg font-bold">Personal Connection</h4>
                  <p class="text-on-surface-variant">Build trust by engaging in the same space people talk to their friends and family.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-10">
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="text-[40px] font-extrabold text-primary mb-2">98%</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Open Rate</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="text-[40px] font-extrabold text-primary mb-2">45%</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Click Rate</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="text-[40px] font-extrabold text-primary mb-2">3X</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">ROI Growth</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center">
              <div class="text-[40px] font-extrabold text-primary mb-2">2min</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Avg Response</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Revenue Generation Machine Section -->
    <section class="py-section-padding bg-background overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-16 max-w-4xl mx-auto">
          <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">Turn WhatsApp Into Your <span class="text-primary">Revenue Generation Machine</span></h2>
          <p class="text-body-lg font-body-lg text-on-surface-variant mb-12">
            Connect your marketing channels and automate lead engagement in real time. For example, when a new lead is generated from Meta Ads, instantly send a personalized WhatsApp message and route the conversation to your sales team - ensuring faster responses and higher conversion rates.
          </p>
          <div class="relative group max-w-5xl mx-auto mb-16">
            <div class="absolute -inset-4 bg-primary/5 blur-3xl rounded-full opacity-50"></div>
            <img alt="Revenue Generation Machine Visualization" class="relative z-10 w-full rounded-2xl shadow-2xl border border-white/10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAohtLdjc0C-aozFLJt5HJK9dgSamqglwMBJ8Mt1_oGvONlUvsZvHk0SJRUOUu5264QWVKfjiKLL7OmbKwqvo4Tw14-5TX2X2AbEIgwOxFzSZwBHjHx6BFGxdHt74fy8GeexCBkvq4sIIcC2zY9jlzkzp31LCICl_o-oHbMypKLDE-V7Z8czEcA9wigPBAzHCeBWaUgy_2mXoOaIE4siYQn9pE_52sLd9cxC7bolByiDR3Uos-qoB9ZO7uIitb8etwB-QmkQnUqYHpt"/>
          </div>
        </div>
        <div class="flex justify-center">
          <NuxtLink to="/contact" class="btn-gradient px-12 py-5 rounded-full text-on-primary-container font-extrabold text-body-lg shadow-xl">Book a Demo</NuxtLink>
        </div>
      </div>
    </section>

    <!-- Everything You Need Section -->
    <section class="py-section-padding bg-surface-container-lowest relative overflow-hidden" id="features">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Complete CRM Platform</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">Everything You <span class="italic text-primary">Need</span> in One Platform</h2>
          <p class="text-on-surface-variant max-w-2xl mx-auto font-body-md text-body-md">Powerful features designed specifically for WhatsApp Business automation.</p>
        </div>
        <div class="w-full flex flex-col gap-4">
          <!-- Featured Card -->
          <div class="col-span-12 md:col-span-8 glass-card rounded-xl p-8 flex flex-col justify-between min-h-[300px] hover:border-primary/40 transition-all group">
            <div>
              <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">auto_awesome</span>
              </div>
              <h3 class="text-headline-md font-headline-md mb-4">Turn WhatsApp Into a Sales Machine</h3>
              <p class="text-on-surface-variant font-body-md text-body-md max-w-lg">Scale your outreach, automate conversations, collect payments, and manage your entire journey from one dashboard.</p>
            </div>
            <div class="mt-10 flex gap-4 overflow-x-auto no-scrollbar pb-2">
              <span class="px-4 py-2 rounded-full bg-surface-container text-label-sm font-label-sm whitespace-nowrap">Official Meta API</span>
              <span class="px-4 py-2 rounded-full bg-surface-container text-label-sm font-label-sm whitespace-nowrap">No-Code Chatbots</span>
              <span class="px-4 py-2 rounded-full bg-surface-container text-label-sm font-label-sm whitespace-nowrap">Team Inbox</span>
            </div>
          </div>
          <!-- Small Card 1 -->
          <div class="col-span-12 md:col-span-4 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group">
            <div class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined">verified_user</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-2">Ban-Proof</h3>
            <p class="text-on-surface-variant font-body-md text-body-md">Every message goes out on Meta's official API. No risky workarounds.</p>
          </div>
          <!-- Small Card 2 -->
          <div class="col-span-12 md:col-span-4 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group">
            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined">data_thresholding</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-2">Real-Time Data</h3>
            <p class="text-on-surface-variant font-body-md text-body-md">Track delivery, reads, and replies live from your command center.</p>
          </div>
          <!-- Small Card 3 -->
          <div class="col-span-12 md:col-span-8 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group relative overflow-hidden">
            <div class="relative z-10">
              <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">hub</span>
              </div>
              <h3 class="text-headline-md font-headline-md mb-2">Connect Your Full Stack</h3>
              <p class="text-on-surface-variant font-body-md text-body-md max-w-md">Integrate with CRMs, Meta Ads, and your website seamlessly via our developer-friendly API.</p>
            </div>
            <div class="absolute right-0 bottom-0 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-[200px]">api</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-section-padding bg-background" id="pricing">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg mb-6">Simple, Transparent Pricing</h2>
          <p class="text-on-surface-variant font-body-md text-body-md">Stop paying lakhs for the same features. Choose the plan that scales with you.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter max-w-5xl mx-auto">
          <!-- Business Plan -->
          <div class="glass-card rounded-2xl p-10 relative flex flex-col border-primary/20 bg-surface-container-low shadow-2xl">
            <div class="absolute top-0 right-10 -translate-y-1/2 bg-primary text-on-primary-container px-4 py-1 rounded-full text-label-sm font-label-sm font-bold">SAVING 88%</div>
            <h3 class="text-headline-md font-headline-md mb-2">Business Plan</h3>
            <div class="mb-6">
              <span class="text-on-surface-variant line-through text-body-md">
                {{ currency === 'INR' ? '₹ 14,999' : '$ 180' }}
              </span>
              <div class="flex items-baseline gap-2">
                <span class="text-[48px] font-extrabold text-primary">
                  {{ currency === 'INR' ? '₹9,999' : '$120' }}
                </span>
                <span class="text-on-surface-variant font-label-sm">/ Year</span>
              </div>
            </div>
            <ul class="space-y-4 mb-10 flex-grow">
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-primary">check_circle</span> Unlimited Broadcasting
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-primary">check_circle</span> Unlimited Team Members
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-primary">check_circle</span> No-Code Flow Builder
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-primary">check_circle</span> CRM Integrations
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-primary">check_circle</span> Official Meta API
              </li>
            </ul>
            <NuxtLink to="/contact" class="btn-gradient w-full py-4 rounded-xl text-on-primary-container font-bold text-center block">Book a Demo</NuxtLink>
          </div>
          <!-- Reseller Plan -->
          <div class="glass-card rounded-2xl p-10 relative flex flex-col border-secondary/20 hover:border-secondary/40 transition-all">
            <h3 class="text-headline-md font-headline-md mb-2">Lifetime License</h3>
            <div class="mb-6">
              <span class="text-on-surface-variant line-through text-body-md">
                {{ currency === 'INR' ? '₹ 24,999' : '$ 299' }}
              </span>
              <div class="flex items-baseline gap-2">
                <span class="text-[48px] font-extrabold text-secondary">
                  {{ currency === 'INR' ? '₹14,999' : '$179' }}
                </span>
                <span class="text-on-surface-variant font-label-sm">One-Time</span>
              </div>
            </div>
            <p class="text-on-surface-variant mb-6 text-body-md">Perfect for Agencies &amp; Resellers. Add unlimited clients and keep 100% revenue.</p>
            <ul class="space-y-4 mb-10 flex-grow">
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-secondary">check_circle</span> No wappCAST Branding
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-secondary">check_circle</span> Multi-Client Management
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-secondary">check_circle</span> Agency Dashboard
              </li>
              <li class="flex items-center gap-3 text-body-md font-body-md">
                <span class="material-symbols-outlined text-secondary">check_circle</span> White-Label Options
              </li>
            </ul>
            <NuxtLink to="/contact" class="w-full py-4 rounded-xl border border-secondary text-secondary font-bold text-center hover:bg-secondary/10 transition-colors block">Become a Partner</NuxtLink>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-section-padding bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg">Customers <span class="text-primary italic">Love</span> Us</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"The data tracking on wappCAST is amazing. We can see exactly who is engaging with our messages in real-time."</p>
            <div class="mt-8 flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">AS</div>
              <div>
                <h4 class="font-bold text-body-md">Amandeep Sahota</h4>
                <p class="text-label-sm text-on-surface-variant">Marketing Director</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all border-primary/30 bg-primary/5">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"wappCAST transformed how we reach customers. WhatsApp turned out to be our best acquisition channel."</p>
            <div class="mt-8 flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">SH</div>
              <div>
                <h4 class="font-bold text-body-md">Siti Hajar</h4>
                <p class="text-label-sm text-on-surface-variant">Growth Lead</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"We were burning ROI on ads until we found wappCAST. Now we get consistent leads and great data."</p>
            <div class="mt-8 flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">AR</div>
              <div>
                <h4 class="font-bold text-body-md">Ashok Rakshit</h4>
                <p class="text-label-sm text-on-surface-variant">Campaign Strategist</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"Reply rates around 90%. Combined with high-quality data, the results have been outstanding."</p>
            <div class="mt-8 flex items-center gap-4">
              <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">ML</div>
              <div>
                <h4 class="font-bold text-body-md">Marc Lynam</h4>
                <p class="text-label-sm text-on-surface-variant">Founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-section-padding bg-background" id="faq">
      <div class="max-w-4xl mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg mb-4">Frequently Asked Questions</h2>
          <p class="text-on-surface-variant font-body-md">Everything you need to know about wappCAST.</p>
        </div>
        <div class="space-y-4">
          <div v-for="(faq, i) in faqs" :key="i" class="glass-card rounded-2xl overflow-hidden border border-border-subtle/50 transition-all duration-300 hover:border-primary/30">
            <button @click="toggleFaq(i)" class="w-full flex justify-between items-center p-6 text-left cursor-pointer transition-colors hover:bg-white/5 focus:outline-none">
              <span class="font-bold text-body-lg text-on-surface">{{ faq.question }}</span>
              <span class="material-symbols-outlined text-primary transition-transform duration-300" :class="{ 'rotate-180': activeFaqIdx === i }">expand_more</span>
            </button>
            <div class="faq-grid-transition" :class="{ 'open': activeFaqIdx === i }">
              <div class="overflow-hidden">
                <div class="p-6 pt-0 text-on-surface-variant border-t border-border-subtle/50 text-body-md leading-relaxed bg-white/2">
                  {{ faq.answer }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="py-section-padding bg-gradient-to-b from-background to-surface-container-lowest">
      <div class="max-w-4xl mx-auto px-margin-mobile text-center">
        <h2 class="text-headline-lg font-headline-lg mb-8">Ready to Turn WhatsApp Into a Revenue Machine?</h2>
        <p class="text-body-lg font-body-lg text-on-surface-variant mb-12">Join 500+ businesses scaling their outreach on the world's most popular messaging app.</p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
          <NuxtLink to="/contact" class="btn-gradient px-12 py-5 rounded-full text-on-primary-container font-extrabold text-headline-md font-headline-md shadow-2xl cursor-pointer">
            Book My Free Demo
          </NuxtLink>
          <NuxtLink to="/pricing" class="cursor-pointer">
            <button class="px-12 py-5 text-center rounded-full border border-subtle glass-card font-bold hover:bg-white/5 transition-colors">
              See Pricing
            </button>
          </NuxtLink>
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

// Production-grade SEO setup for home page
useSeoMeta({
  title: '#1 Ban-Proof WhatsApp API for Customer Acquisition & Engagement | wappCAST',
  ogTitle: '#1 Ban-Proof WhatsApp API for Customer Acquisition & Engagement | wappCAST',
  description: 'Scale customer engagement & acquisition with wappCAST. Official Meta Cloud API partner with no markup fees, visual chatbot builders, and shared support inbox.',
  ogDescription: 'Scale customer engagement & acquisition with wappCAST. Official Meta Cloud API partner with no markup fees, visual chatbot builders, and shared support inbox.',
  ogImage: 'https://lh3.googleusercontent.com/aida/AP1WRLvav-Dvx6smDjPBZT5PuaxS4oDVDTLqhdlRBiplZuh-CBe48BnJrE0C0Bxhfj4yMIdQ0eC4GZEdnNzRUsUTpyk3DnP0_Ptl7JOuy_Z6Rsp4OgTZQdUGIiDmARWnQveGSZkV3fCaX32nlhChyksCUnMycX3fRljzY3xOpoZ7n2GBoklya7Try7tacjaushF-AYAw1Fpw07uGzU9CZAchMly9IonMwXGPWDB_MQdzIzC9AdtOUbTJ_s7iPGXT',
  ogUrl: 'https://wappcast.com/',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: '#1 Ban-Proof WhatsApp API for Customer Acquisition & Engagement | wappCAST',
  twitterDescription: 'Scale customer engagement & acquisition with wappCAST. Official Meta Cloud API partner with no markup fees, visual chatbot builders, and shared support inbox.',
  twitterImage: 'https://lh3.googleusercontent.com/aida/AP1WRLvav-Dvx6smDjPBZT5PuaxS4oDVDTLqhdlRBiplZuh-CBe48BnJrE0C0Bxhfj4yMIdQ0eC4GZEdnNzRUsUTpyk3DnP0_Ptl7JOuy_Z6Rsp4OgTZQdUGIiDmARWnQveGSZkV3fCaX32nlhChyksCUnMycX3fRljzY3xOpoZ7n2GBoklya7Try7tacjaushF-AYAw1Fpw07uGzU9CZAchMly9IonMwXGPWDB_MQdzIzC9AdtOUbTJ_s7iPGXT',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebSite({
    name: 'wappCAST',
    url: 'https://wappcast.com',
    description: 'Official Meta WhatsApp API solutions for customer acquisition and engagement.'
  }),
  defineWebPage({
    name: '#1 Ban-Proof WhatsApp API for Customer Acquisition & Engagement | wappCAST',
    description: 'Scale customer engagement & acquisition with wappCAST. Official Meta Cloud API partner with no markup fees, visual chatbot builders, and shared support inbox.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'wappCAST | Official Meta WhatsApp API Solution',
  description: 'Scale customer engagement & acquisition with wappCAST. Official Meta Cloud API partner with no markup fees.',
  theme: '#10b981',
  colorMode: 'dark'
})

const faqs = [
  {
    question: "Why should I use wappCAST instead of other platforms?",
    answer: "wappCAST provides a robust, official Meta API solution with zero markup charges on messages. We offer unlimited broadcasting and team members at a fraction of the cost of competitors like Wati or Interakt."
  },
  {
    question: "Do I need technical skills to use it?",
    answer: "No technical skills are required. Our platform features a no-code drag-and-drop flow builder and a user-friendly dashboard designed for marketers and business owners."
  },
  {
    question: "What kind of businesses is wappCAST for?",
    answer: "It's ideal for high-growth businesses, agencies, and resellers across retail, real estate, healthcare, and education sectors looking to scale customer engagement."
  },
  {
    question: "Will my WhatsApp number get banned?",
    answer: "By using the official Meta Cloud API, you adhere to WhatsApp's policies. As long as you follow best practices and don't spam, your account remains safe and ban-proof."
  },
  {
    question: "Can I broadcast to thousands of people?",
    answer: "Yes, you can send unlimited broadcasts to your customer list. You only pay for the conversation charges set by Meta, with no additional markup from us."
  },
  {
    question: "How does the shared team inbox work?",
    answer: "Multiple agents can log in simultaneously to manage customer queries from a single WhatsApp number. You can assign conversations and track agent performance."
  },
  {
    question: "Can I automate my entire sales process?",
    answer: "Yes! You can set up chatbots to handle FAQs, qualify leads, and even process bookings or payments directly within WhatsApp."
  },
  {
    question: "What are the pricing plans?",
    answer: "We offer a Business Plan at ₹9,999/year and a Lifetime Agency License for ₹14,999 (one-time). Both include unlimited team members and no markup fees."
  },
  {
    question: "Do you provide support during setup?",
    answer: "Absolutely. We provide comprehensive documentation and human support to help you get your API approved and your first campaign launched."
  },
  {
    question: "How is data safety handled?",
    answer: "Your data is encrypted and stored securely. We adhere to enterprise-grade security protocols to ensure your customer data remains private and compliant with data protection laws."
  },
  {
    question: "Is there a refund policy?",
    answer: "We offer a 7-day money-back guarantee if you're not satisfied with the platform, provided you haven't violated our terms of service."
  }
]
</script>
