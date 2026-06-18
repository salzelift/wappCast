<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex flex-col justify-center items-center text-center px-margin-mobile overflow-hidden py-24">
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="relative z-10 max-w-5xl mx-auto">
        <h1 class="font-display-hero text-display-hero mb-6 tracking-tight leading-tight md:block hidden animate-hero-title-desktop">
          #1 Ban-Proof WhatsApp API for <span class="text-primary italic">Customer Acquisition and Engagement</span> 🏆
        </h1>
        <h1 class="font-display-hero-mobile text-display-hero-mobile mb-6 tracking-tight leading-tight md:hidden animate-hero-title-mobile">
          #1 Ban-Proof WhatsApp API 🏆
        </h1>
        <p class="text-body-lg font-body-lg text-on-surface-variant mb-10 max-w-3xl mx-auto animate-hero-desc">
          Reach your customers on the app they use every day. Launch WhatsApp campaigns in minutes and watch your numbers move.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16 animate-hero-cta">
          <NuxtLink to="/contact" class="btn-gradient px-10 py-5 rounded-full text-on-primary-container font-extrabold text-body-lg font-body-lg w-full sm:w-auto shadow-2xl">
            Book a Demo
          </NuxtLink>
          <div class="text-on-surface-variant font-label-sm text-label-sm flex items-center gap-2">
            <span class="material-symbols-outlined text-[16px]">lock_reset</span> No Credit Card Needed
          </div>
        </div>
        
        <!-- Dashboard Preview -->
        <div class="mt-8 relative group max-w-4xl mx-auto animate-hero-preview">
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
    <section class="py-16 border-y border-border-subtle/50 bg-surface-container-lowest/50 relative trusted-by-section">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <p class="text-center text-label-sm font-label-sm text-on-surface-variant uppercase tracking-widest mb-10 opacity-70">Trusted by Businesses Worldwide</p>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-x-8 gap-y-12 items-center just">
          <!-- Booksy -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/booksy.png" class="h-8 w-auto object-contain" alt="Booksy" />
          </div>
          <!-- Lybrate -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/lybrae.png" class="h-8 w-auto object-contain" alt="Lybrate" />
          </div>
          <!-- Wipro -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/wipro.png" class="h-9 w-auto object-contain" alt="Wipro" />
          </div>
          <!-- FoxyMoron -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/foxyMoron.png" class="h-9 w-auto object-contain" alt="FoxyMoron" />
          </div>
          <!-- GroupM -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/groupm.png" class="h-8 w-auto object-contain" alt="GroupM" />
          </div>
          <!-- CGBOT -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/cgBot.png" class="h-9 w-auto object-contain" alt="CGBOT" />
          </div>
          <!-- BKT Tires -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/BKTTyres.png" class="h-8 w-auto object-contain" alt="BKT Tires" />
          </div>
          <!-- Luminous -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/luminous.png" class="h-8 w-auto object-contain" alt="Luminous" />
          </div>
          <!-- Join -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/join.png" class="h-8 w-auto object-contain" alt="Join" />
          </div>
          <!-- Vivion -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/vivion.png" class="h-9 w-auto object-contain" alt="Vivion" />
          </div>
          <!-- Amura -->
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/amura.png" class="h-9 w-auto object-contain" alt="Amura" />
          </div>
          <div class="brand-logo-card reveal-on-scroll flex items-center justify-center transition-all duration-300 hover:scale-110 opacity-70 hover:opacity-100">
            <img src="/companies/ascenty.png" class="h-9 w-auto object-contain" alt="Ascenty" />
          </div>
        </div>
      </div>
    </section>

    <!-- Revenue Flow Diagram Section -->
    <div class="reveal-on-scroll">
      <RevenueFlowDiagram />
    </div>

    <!-- Why WhatsApp Section -->
    <section class="py-section-padding bg-background relative overflow-hidden why-section">
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-glow-emerald blur-[120px] opacity-20 pointer-events-none"></div>
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg mb-4">Why <span class="text-primary">WhatsApp?</span></h2>
          <p class="text-on-surface-variant text-body-lg max-w-2xl mx-auto">The world's most popular messaging app is now your most powerful business tool.</p>
        </div>

        <!-- Row 1: Key Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          <!-- Open Rate -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center justify-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">mail</span>
            </div>
            <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">98%</div>
            <p class="text-on-surface font-semibold text-body-md uppercase tracking-wider">Open Rate</p>
          </div>
          <!-- Click Rate -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center justify-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">ads_click</span>
            </div>
            <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">45-60%</div>
            <p class="text-on-surface font-semibold text-body-md uppercase tracking-wider">Click Rate</p>
          </div>
          <!-- Active Users -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center justify-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">groups</span>
            </div>
            <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">2.6B+</div>
            <p class="text-on-surface font-semibold text-body-md uppercase tracking-wider">Active Users</p>
          </div>
          <!-- Engagement Rate -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center justify-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">trending_up</span>
            </div>
            <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">70%</div>
            <p class="text-on-surface font-semibold text-body-md uppercase tracking-wider">Engagement Rate</p>
          </div>
        </div>

        <!-- Row 2: Core Feature Metrics -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          <!-- Instant Customer Reach -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">bolt</span>
            </div>
            <h4 class="text-body-lg font-bold text-on-surface mb-2">Instant Customer Reach</h4>
            <p class="text-on-surface-variant text-body-md leading-relaxed">Reach customers directly on WhatsApp where messages get seen.</p>
          </div>
          <!-- Real-Time Conversations -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">chat</span>
            </div>
            <h4 class="text-body-lg font-bold text-on-surface mb-2">Real-Time Conversations</h4>
            <p class="text-on-surface-variant text-body-md leading-relaxed">Build stronger relationships through two-way communication.</p>
          </div>
          <!-- Higher Conversions -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">bar_chart</span>
            </div>
            <h4 class="text-body-lg font-bold text-on-surface mb-2">Higher Conversions</h4>
            <p class="text-on-surface-variant text-body-md leading-relaxed">Convert more leads with personalized messaging and automation.</p>
          </div>
          <!-- Trusted & Secure -->
          <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center border-primary/10 hover:border-primary/40 transition-all duration-300 hover:scale-[1.02] reveal-on-scroll">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined text-2xl">verified_user</span>
            </div>
            <h4 class="text-body-lg font-bold text-on-surface mb-2">Trusted & Secure</h4>
            <p class="text-on-surface-variant text-body-md leading-relaxed">Communicate through Meta's official business messaging ecosystem.</p>
          </div>
        </div>

        <!-- Row 3: Visual Feature Showcases Set 1 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          <!-- Connect Instantly -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="w-24 h-32 bg-surface-container border border-border-subtle/50 rounded-t-lg shadow-lg relative p-2 overflow-hidden flex flex-col">
                <div class="h-1 bg-surface-container-highest rounded-full w-8 mx-auto mb-2"></div>
                <div class="h-2.5 w-12 bg-surface-container-high rounded-r rounded-bl mb-1.5"></div>
                <div class="h-2.5 w-10 bg-primary/20 rounded-l rounded-br mb-1.5 ml-auto"></div>
                <div class="h-2.5 w-14 bg-surface-container-high rounded-r rounded-bl mb-1.5"></div>
                <div class="h-2.5 w-12 bg-primary rounded-l rounded-br ml-auto"></div>
              </div>
              <div class="absolute left-4 top-10 w-8 h-8 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-lg">
                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.517 2.266 2.27 3.507 5.289 3.507 8.491-.005 6.66-5.342 11.997-11.953 11.997-2.005-.001-3.973-.504-5.714-1.463L0 24zm6.59-13.43c-.157-.352-.323-.36-.472-.366-.123-.005-.262-.005-.4-.005-.14 0-.367.052-.559.262-.193.21-.735.719-.735 1.754s.75 2.034.855 2.176c.105.14 1.474 2.25 3.572 3.156.499.215.887.344 1.192.441.502.159.959.137 1.32.083.403-.06 1.23-.503 1.405-.989.175-.486.175-.903.123-.989-.052-.087-.193-.137-.403-.242-.21-.105-1.23-.607-1.42-.677-.19-.07-.328-.105-.467.105-.14.21-.54.677-.662.815-.123.137-.245.154-.455.05-.21-.105-.888-.327-1.693-1.045-.625-.558-1.048-1.248-1.17-1.458-.123-.21-.013-.323.092-.427.095-.095.21-.242.315-.363.105-.121.14-.206.21-.343.07-.137.035-.257-.018-.363-.053-.105-.472-1.139-.648-1.558z"/></svg>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Connect Instantly</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Start conversations that build real connections.</p>
            </div>
          </div>
          <!-- Capture & Engage Leads -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="relative flex items-center justify-center w-full h-full">
                <!-- U-Magnet SVG -->
                <svg class="w-14 h-14 text-primary drop-shadow-[0_0_12px_rgba(16,185,129,0.3)] transform -rotate-45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 10V6C4 4.89543 4.89543 4 6 4H8C9.10457 4 10 4.89543 10 6V10M14 10V6C14 4.89543 14.89543 4 16 4H18C19.1046 4 20 4.89543 20 6V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M4 10C4 14.4183 7.58172 18 12 18C16.4183 18 20 14.4183 20 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  <path d="M4 5V7H10V5M14 5V7H20V5" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <div class="absolute top-4 right-8 w-6 h-6 rounded-full bg-primary/20 border border-primary/40 flex items-center justify-center text-[10px] text-primary font-bold">👤</div>
                <div class="absolute bottom-6 left-8 w-6 h-6 rounded-full bg-secondary/20 border border-secondary/40 flex items-center justify-center text-[10px] text-secondary font-bold">👤</div>
                <div class="absolute top-12 left-10 w-5 h-5 rounded-full bg-tertiary/20 border border-tertiary/40 flex items-center justify-center text-[9px] text-tertiary font-bold">👤</div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Capture & Engage Leads</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Attract, engage and qualify leads in real-time.</p>
            </div>
          </div>
          <!-- Drive More Conversions -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
              <div class="relative w-32 h-20 flex items-end">
                <svg class="absolute inset-0 w-full h-full text-primary overflow-visible" viewBox="0 0 100 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 45 Q 25 35, 50 40 T 96 12" stroke="currentColor" stroke-width="3" stroke-linecap="round" fill="none" class="drop-shadow-[0_0_8px_rgba(16,185,129,0.4)] animate-chart-line"/>
                  <circle cx="96" cy="12" r="4" fill="currentColor" class="animate-chart-circle"/>
                </svg>
                <div class="absolute -top-6 right-0 glass-card px-2 py-0.5 rounded border border-primary/30 flex items-center gap-1 shadow-lg text-[10px] font-bold text-on-surface animate-bounce">
                  <span class="material-symbols-outlined text-[10px] text-primary">payments</span>
                  <span>$ Earned</span>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Drive More Conversions</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Nurture leads and close deals faster with personalized conversations.</p>
            </div>
          </div>
          <!-- Team Inbox -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="w-36 h-24 bg-surface-container border border-border-subtle/50 rounded-lg shadow-md overflow-hidden flex">
                <div class="w-1/3 border-r border-border-subtle/50 bg-surface-container p-1 space-y-1">
                  <div class="h-1.5 bg-primary/20 rounded w-full"></div>
                  <div class="h-1.5 bg-surface-container-high rounded w-3/4"></div>
                  <div class="h-1.5 bg-surface-container-high rounded w-5/6"></div>
                </div>
                <div class="flex-1 p-2 flex flex-col justify-between">
                  <div class="space-y-1">
                    <div class="flex items-center gap-1">
                      <span class="w-1.5 h-1.5 rounded-full bg-[#25D366]"></span>
                      <div class="h-1.5 bg-surface-container-highest rounded w-8"></div>
                    </div>
                    <div class="h-1 bg-surface-container-high rounded w-full"></div>
                    <div class="h-1 bg-surface-container-high rounded w-4/5"></div>
                  </div>
                  <div class="flex -space-x-1.5 justify-end">
                    <div class="w-4 h-4 rounded-full bg-primary text-on-primary text-[6px] font-bold border border-surface-container-low flex items-center justify-center">JD</div>
                    <div class="w-4 h-4 rounded-full bg-secondary text-on-secondary text-[6px] font-bold border border-surface-container-low flex items-center justify-center">AM</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Team Inbox</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Collaborate with your team and manage chats seamlessly.</p>
            </div>
          </div>
        </div>

        <!-- Row 4: Visual Feature Showcases Set 2 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Automate Workflows -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="relative w-36 h-20 flex items-center justify-between px-2">
                <svg class="absolute inset-0 w-full h-full text-border-subtle" viewBox="0 0 100 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 25 H80" stroke="currentColor" stroke-width="2" stroke-dasharray="4"/>
                </svg>
                <div class="z-10 w-9 h-9 rounded-lg bg-surface-container border border-border-subtle/50 flex items-center justify-center text-secondary shadow-sm">
                  <span class="material-symbols-outlined text-lg">bolt</span>
                </div>
                <div class="z-10 w-9 h-9 rounded-lg bg-primary/20 border border-primary/40 flex items-center justify-center text-primary shadow-lg animate-pulse">
                  <span class="material-symbols-outlined text-lg">smart_toy</span>
                </div>
                <div class="z-10 w-9 h-9 rounded-lg bg-surface-container border border-border-subtle/50 flex items-center justify-center text-primary shadow-sm">
                  <span class="material-symbols-outlined text-lg">check_circle</span>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Automate Workflows</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Save time with smart automations and chat flows.</p>
            </div>
          </div>
          <!-- Broadcast Campaigns -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="relative flex items-center justify-center">
                <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary drop-shadow-[0_0_8px_rgba(16,185,129,0.2)]">
                  <span class="material-symbols-outlined text-2xl">campaign</span>
                </div>
                <div class="absolute -top-3 -right-2 w-4 h-4 rounded-full bg-secondary flex items-center justify-center shadow animate-bounce">
                  <span class="material-symbols-outlined text-[8px] text-white">chat</span>
                </div>
                <div class="absolute top-5 -right-5 w-4 h-4 rounded-full bg-primary flex items-center justify-center shadow animate-pulse">
                  <span class="material-symbols-outlined text-[8px] text-white">send</span>
                </div>
                <div class="absolute -bottom-2 right-1 w-3.5 h-3.5 rounded-full bg-surface-container-highest flex items-center justify-center shadow">
                  <span class="material-symbols-outlined text-[8px] text-primary">mail</span>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Broadcast Campaigns</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Send updates and offers to thousands in seconds.</p>
            </div>
          </div>
          <!-- Track & Measure -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="w-32 h-20 bg-surface-container border border-border-subtle/50 rounded-lg shadow-md p-2 flex justify-between gap-2">
                <div class="w-1/2 flex items-center justify-center">
                  <svg class="w-12 h-12 transform -rotate-90" viewBox="0 0 32 32">
                    <circle r="16" cx="16" cy="16" fill="transparent" stroke="#2d3449" stroke-width="32" />
                    <circle r="16" cx="16" cy="16" fill="transparent" stroke="#10b981" stroke-width="32" stroke-dasharray="75 100" />
                    <circle r="16" cx="16" cy="16" fill="transparent" stroke="#059669" stroke-width="32" stroke-dasharray="25 100" stroke-dashoffset="-75" />
                  </svg>
                </div>
                <div class="flex-1 flex flex-col justify-center gap-1.5">
                  <div class="h-1.5 bg-primary/30 rounded w-full"></div>
                  <div class="h-1.5 bg-secondary/30 rounded w-4/5"></div>
                  <div class="h-1.5 bg-surface-container-highest rounded w-3/5"></div>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Track & Measure</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Get actionable insights and measure performance that matters.</p>
            </div>
          </div>
          <!-- Verified & Reliable -->
          <div class="glass-card p-5 rounded-2xl flex flex-col justify-between min-h-[380px] h-full border-primary/10 hover:border-primary/40 transition-all duration-300 group reveal-on-scroll">
            <div class="w-full h-40 bg-surface-container-low rounded-xl border border-border-subtle/30 overflow-hidden relative flex items-center justify-center">
              <div class="relative flex items-center justify-center">
                <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary drop-shadow-[0_0_10px_rgba(16,185,129,0.3)]">
                  <span class="material-symbols-outlined text-3xl">verified_user</span>
                </div>
                <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-secondary border-2 border-surface flex items-center justify-center text-white shadow">
                  <span class="material-symbols-outlined text-[12px] font-bold">check</span>
                </div>
              </div>
            </div>
            <div class="mt-4 flex flex-col flex-grow text-left">
              <h4 class="text-body-lg font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">Verified & Reliable</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Build trust with your customers using official WhatsApp Business API.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Sandbox Section -->
    <div class="reveal-on-scroll">
      <InteractiveChatbotSandbox />
    </div>

    <section class="py-section-padding bg-surface-container-lowest stats-section">
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
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center stat-card reveal-on-scroll">
              <div class="text-[40px] font-extrabold text-primary mb-2">98%</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Open Rate</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center stat-card reveal-on-scroll">
              <div class="text-[40px] font-extrabold text-primary mb-2">45%</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Click Rate</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center stat-card reveal-on-scroll">
              <div class="text-[40px] font-extrabold text-primary mb-2">3X</div>
              <p class="text-label-sm font-label-sm text-on-surface-variant uppercase">ROI Growth</p>
            </div>
            <div class="glass-card p-6 rounded-2xl flex flex-col items-center text-center stat-card reveal-on-scroll">
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
            Connect your marketing channels and automate lead engagement in real time. wappCAST supports seamless real-time data transfers across your entire stack.
          </p>
        </div>
        
        <div class="reveal-on-scroll">
          <IntegrationsHub />
        </div>

        <div class="flex justify-center mt-16">
          <NuxtLink to="/contact" class="btn-gradient px-12 py-5 rounded-full text-on-primary-container font-extrabold text-body-lg shadow-xl">Book a Demo</NuxtLink>
        </div>
      </div>
    </section>

    <!-- Everything You Need Section -->
    <section class="py-section-padding bg-surface-container-lowest relative overflow-hidden features-section" id="features">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Complete CRM Platform</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">Everything You <span class="italic text-primary">Need</span> in One Platform</h2>
          <p class="text-on-surface-variant max-w-2xl mx-auto font-body-md text-body-md">Powerful features designed specifically for WhatsApp Business automation.</p>
        </div>
        <div class="w-full flex flex-col gap-4">
          <!-- Featured Card -->
          <div class="col-span-12 md:col-span-8 glass-card rounded-xl p-8 flex flex-col justify-between min-h-[300px] hover:border-primary/40 transition-all group feature-card reveal-on-scroll">
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
          <div class="col-span-12 md:col-span-4 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group feature-card reveal-on-scroll">
            <div class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined">verified_user</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-2">Ban-Proof</h3>
            <p class="text-on-surface-variant font-body-md text-body-md">Every message goes out on Meta's official API. No risky workarounds.</p>
          </div>
          <!-- Small Card 2 -->
          <div class="col-span-12 md:col-span-4 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group feature-card reveal-on-scroll">
            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined">data_thresholding</span>
            </div>
            <h3 class="text-headline-md font-headline-md mb-2">Real-Time Data</h3>
            <p class="text-on-surface-variant font-body-md text-body-md">Track delivery, reads, and replies live from your command center.</p>
          </div>
          <!-- Small Card 3 -->
          <div class="col-span-12 md:col-span-8 glass-card rounded-xl p-8 hover:border-primary/40 transition-all group relative overflow-hidden feature-card reveal-on-scroll">
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



    <!-- Testimonials Section -->
    <section class="py-section-padding bg-surface-container-lowest">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <h2 class="text-headline-lg font-headline-lg">Customers <span class="text-primary italic">Love</span> Us</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"Since implementing wappCAST, outreach has reached a new level. WhatsApp has enabled faster conversations, stronger customer relationships, and consistently better business outcomes."</p>
            <div class="mt-8 flex items-center gap-4">
              <img src="/companies/amardeep.png" alt="Amandeep Sahota" class="w-10 h-10 rounded-full object-cover border border-primary/20 shadow-md" />
              <div>
                <h4 class="font-bold text-body-md">Amandeep Sahota</h4>
                <p class="text-label-sm text-on-surface-variant">Media Buyer</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all border-primary/30 bg-primary/5">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"wappCAST transformed how we reach customers. WhatsApp turned out to be our best acquisition channel, backed by an awesome support team."</p>
            <div class="mt-8 flex items-center gap-4">
              <img src="/companies/siti.png" alt="Siti Hajar" class="w-10 h-10 rounded-full object-cover border border-primary/20 shadow-md" />
              <div>
                <h4 class="font-bold text-body-md">Siti Hajar</h4>
                <p class="text-label-sm text-on-surface-variant">Growth Lead</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"We were burning ROI on ads until we found wappCAST. Now we get consistent leads, a stronger pipeline, and great data to back it up. Highly recommended."</p>
            <div class="mt-8 flex items-center gap-4">
              <img src="/companies/ashok.png" alt="Ashok Rakshit" class="w-10 h-10 rounded-full object-cover border border-primary/20 shadow-md" />
              <div>
                <h4 class="font-bold text-body-md">Ashok Rakshit</h4>
                <p class="text-label-sm text-on-surface-variant">Campaign Strategist, APAC</p>
              </div>
            </div>
          </div>
          <div class="glass-card p-6 rounded-xl min-h-[250px] flex flex-col justify-between hover:border-primary/30 transition-all">
            <p class="text-body-md italic text-on-surface-variant leading-relaxed">"With over 15 years in sales, I've watched outreach channels evolve firsthand—and WhatsApp is one of the most effective today. I'm consistently seeing reply rates around 90%, and combined with their high-quality data and excellent support, the results have been outstanding. Highly recommended."</p>
            <div class="mt-8 flex items-center gap-4">
              <img src="/companies/marc.png" alt="Marc Lynam" class="w-10 h-10 rounded-full object-cover border border-primary/20 shadow-md" />
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
    <section class="py-section-padding bg-gradient-to-b from-background to-surface-container-low">
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
    question: "Do you provide support during setup?",
    answer: "Absolutely. We provide comprehensive documentation and human support to help you get your API approved and your first campaign launched."
  },
  {
    question: "How is data safety handled?",
    answer: "Your data is encrypted and stored securely. We adhere to enterprise-grade security protocols to ensure your customer data remains private and compliant with data protection laws."
  }
]
</script>

<style scoped>
@keyframes draw-chart-line {
  from {
    stroke-dashoffset: 120;
  }
  to {
    stroke-dashoffset: 0;
  }
}

@keyframes pop-circle {
  from {
    transform: scale(0);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.animate-chart-line {
  stroke-dasharray: 120;
  stroke-dashoffset: 120;
  animation: draw-chart-line 2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

.animate-chart-circle {
  transform-box: fill-box;
  transform-origin: center;
  animation: pop-circle 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) 1.6s both;
}

.group:hover .animate-chart-line {
  filter: drop-shadow(0 0 12px rgba(16, 185, 129, 0.8));
  transition: filter 0.3s ease;
}

.group:hover .animate-chart-circle {
  transform: scale(1.5);
  transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}
</style>

