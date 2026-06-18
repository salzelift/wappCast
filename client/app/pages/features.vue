<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
      <!-- Background Blurs -->
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>
      
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10 text-center">
        <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero mb-6 text-gradient max-w-4xl mx-auto leading-tight">
          Turn WhatsApp Into a Sales Machine That Never Sleeps
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto mb-10 leading-relaxed">
          Scale your outreach, automate customer conversations, capture every lead, collect payments seamlessly, and manage your entire customer journey—all from one powerful dashboard.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-16">
          <NuxtLink to="/contact" class="btn-gradient px-10 py-4.5 rounded-xl font-bold text-on-primary-container text-lg shadow-lg shadow-primary/20 transition-all w-full sm:w-auto text-center">
            Book a Demo
          </NuxtLink>
          <div class="flex items-center gap-2 text-on-surface-variant">
            <span class="material-symbols-outlined text-sm">lock_reset</span>
            <span class="text-label-sm font-label-sm">No Credit Card Needed</span>
          </div>
        </div>
        
        <!-- Dashboard Preview -->
        <div class="relative group max-w-5xl mx-auto">
          <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-3xl blur-2xl group-hover:blur-3xl transition duration-500 opacity-75"></div>
          <div class="relative glass-card rounded-3xl p-2 overflow-hidden shadow-2xl">
            <img alt="wappCAST Dashboard Overview" class="w-full h-auto rounded-2xl shadow-xl" src="/companies/features_dashboard.png" />
          </div>
        </div>
      </div>
    </section>

    <!-- Features Grid Section -->
    <section class="py-24 bg-surface-container-lowest border-y border-subtle">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-20">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Core Engine Capabilities</span>
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4">Enterprise-Grade Features</h2>
          <p class="text-on-surface-variant max-w-xl mx-auto font-body-lg text-body-lg">Engineered for reliability, speed, and massive scale.</p>
        </div>
        
        <!-- Grid Container with defined columns and gaps -->
        <div class="grid grid-cols-12 gap-8">
          <!-- Card 1: Official WhatsApp Business API -->
          <div class="col-span-12 md:col-span-7 glass-card p-8 md:p-10 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-8 text-primary transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[30px]">api</span>
            </div>
            <h3 class="font-headline-lg text-2xl md:text-3xl mb-4 text-on-surface group-hover:text-primary transition-colors">Official WhatsApp Business API</h3>
            <p class="text-on-surface-variant font-body-md text-body-md mb-8 leading-relaxed flex-grow">
              Experience uncompromising safety with Meta verified BSP status. We provide green-tick assistance and dedicated support to keep your brand active and compliant.
            </p>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-t border-white/5 pt-6 mb-8">
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> Verified Meta BSP</li>
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> Green-tick assistance</li>
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> Live quality rating</li>
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> No personal numbers required</li>
            </ul>
            <div class="h-48 md:h-56 lg:h-64 rounded-2xl overflow-hidden border border-white/10 mt-auto">
              <img alt="Official Meta WhatsApp API" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition-all duration-500" src="/pricing_dashboard_mockup.png" />
            </div>
          </div>

          <!-- Card 2: Real-Time Dashboard -->
          <div class="col-span-12 md:col-span-5 glass-card p-8 md:p-10 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center mb-8 text-primary transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[30px]">insights</span>
            </div>
            <h3 class="font-headline-lg text-2xl md:text-3xl mb-4 text-on-surface group-hover:text-primary transition-colors">Real-Time Dashboard</h3>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 leading-relaxed">
              Track message delivery, reads, and responses instantly. Make data-driven decisions using live performance charts.
            </p>
            <ul class="space-y-3 mb-6">
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> Track delivery, read &amp; reply rates</li>
              <li class="flex items-center gap-3 text-body-md text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[20px]">check_circle</span> Visual performance charts</li>
            </ul>
            <div class="h-48 md:h-56 lg:h-64 rounded-2xl overflow-hidden border border-white/10 mt-auto">
              <img alt="Dashboard Analytics Preview" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition-all duration-500" src="/features_dashboard_preview.png" />
            </div>
          </div>

          <!-- Card 3: User & Wallet Management -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">account_balance_wallet</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">User &amp; Wallet Management</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Manage team access controls and control messaging credits from a centralized balance ledger.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Add unlimited team users</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Centralized wallet top-ups</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Balance buffer alerts</li>
            </ul>
          </div>

          <!-- Card 4: Smart Address Book -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">contacts</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Smart Address Book</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Organize, tag, and segment your contacts database for hyper-targeted broadcast campaigns.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Bulk CSV imports</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Dynamic audience segments</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Custom contact tags</li>
            </ul>
          </div>

          <!-- Card 5: Campaign Manager -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">campaign</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Campaign Manager</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Schedule broadcasts to thousands of users, manage message templates, and analyze campaign ROI.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Broadcast in clicks</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Campaign scheduling</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Meta template approval</li>
            </ul>
          </div>

          <!-- Card 6: WhatsApp Suite -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">chat_bubble</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">WhatsApp Suite</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Unlock the full power of WhatsApp Business via official APIs built to handle massive message volumes.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> High-speed broadcast</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Official API sandbox</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Multi-device stability</li>
            </ul>
          </div>

          <!-- Card 7: Commerce Engine -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">shopping_bag</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Commerce Engine</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Showcase and sell your products directly inside WhatsApp chats using custom digital catalogs.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Interactive product catalogs</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Cart checkout links</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Collection management</li>
            </ul>
          </div>

          <!-- Card 8: Team Inbox -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">inbox</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Team Inbox</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Equip your sales and customer support agents with a shared multi-agent conversation view.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Multi-agent chat panel</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Smart agent routing</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Internal team notes</li>
            </ul>
          </div>

          <!-- Card 9: RCS Messaging -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">forum</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">RCS Messaging</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Deliver rich conversational experiences using interactive native RCS chats with verified brand badges.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Rich media cards</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Custom action buttons</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Scale fallback options</li>
            </ul>
          </div>

          <!-- Card 10: Automation & Flow Builder -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">account_tree</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Automation &amp; Flow Builder</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Design interactive, no-code chat flows to qualify leads and answer FAQs 24/7 without developer help.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Drag-and-drop builder</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Lead-qualification bots</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Out-of-office triggers</li>
            </ul>
          </div>

          <!-- Card 11: Developer-Friendly API -->
          <div class="col-span-12 md:col-span-4 glass-card p-8 rounded-3xl group hover:border-primary/40 hover:-translate-y-1 hover:shadow-2xl hover:shadow-primary/5 transition-all duration-300 flex flex-col bg-gradient-to-br from-surface-container/60 to-surface-container-low/40">
            <div class="w-14 h-14 rounded-full bg-primary/10 border border-primary/20 flex items-center justify-center text-primary mb-6 transition-all duration-300 group-hover:bg-primary/20 group-hover:scale-110 group-hover:shadow-[0_0_15px_rgba(16,185,129,0.3)] shrink-0">
              <span class="material-symbols-outlined text-[28px]">code</span>
            </div>
            <h4 class="text-headline-md font-bold mb-4 text-on-surface group-hover:text-primary transition-colors">Developer-Friendly API</h4>
            <p class="text-on-surface-variant font-body-md text-body-md mb-6 flex-grow leading-relaxed">
              Integrate WhatsApp notifications into your apps and workflows with clean developer documentation.
            </p>
            <ul class="space-y-3 border-t border-white/5 pt-4">
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Documented REST APIs</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Dynamic Webhook listeners</li>
              <li class="flex items-center gap-2 text-sm text-on-surface-variant/90"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Sandbox environments</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-background">
      <div class="max-w-4xl mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">FAQ Guide</span>
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-4 text-on-surface">Frequently Asked Questions</h2>
          <p class="text-on-surface-variant font-body-md">Everything you need to know about scaling with wappCAST.</p>
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

    <!-- CTA Section -->
    <section class="py-24 bg-background relative overflow-hidden">
      <div class="absolute inset-0 bg-primary/5 blur-[120px] rounded-full translate-x-1/2 pointer-events-none"></div>
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="glass-card p-12 lg:p-20 rounded-[40px] text-center border-primary/20 bg-gradient-to-b from-surface-container/60 to-surface-container-low/40">
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-8 leading-tight">Ready to transform your sales strategy?</h2>
          <p class="text-body-lg mb-12 max-w-2xl mx-auto text-on-surface-variant leading-relaxed">Join 5,000+ businesses growing their revenue with our official WhatsApp API engine.</p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <NuxtLink to="/contact" class="btn-gradient px-12 py-5 rounded-2xl font-bold text-on-primary-container text-xl shadow-xl w-full sm:w-auto text-center hover:scale-105 transition-all">
              Book Your Demo Now
            </NuxtLink>
            <NuxtLink to="/pricing" class="px-12 py-5 border border-border-subtle rounded-2xl font-bold hover:bg-white/5 w-full sm:w-auto transition-all text-center">
              View Pricing
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<script setup>
import { ref } from 'vue'

const activeFaqIdx = ref(null)

const toggleFaq = (idx) => {
  if (activeFaqIdx.value === idx) {
    activeFaqIdx.value = null
  } else {
    activeFaqIdx.value = idx
  }
}

// Production-grade SEO setup for features page
useSeoMeta({
  title: 'Enterprise WhatsApp Marketing & CRM Features | wappCAST',
  ogTitle: 'Enterprise WhatsApp Marketing & CRM Features | wappCAST',
  description: 'Explore wappCAST\'s official WhatsApp Business API features. Visual no-code flow builder, shared team inbox, smart address book, campaign scheduler, and real-time analytics.',
  ogDescription: 'Explore wappCAST\'s official WhatsApp Business API features. Visual no-code flow builder, shared team inbox, smart address book, campaign scheduler, and real-time analytics.',
  ogImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQ1jHJvMrJZ5CXhGmvDKB_tGAPwY3hJDABr6IlSvN51K-Y-FDzJGekA0_7ywC847Nfo44gh-yczBT7jRDZT_JVQHHeRnmQE-YAueOnzXi7zHIXa0qzwFTgL56-dYMc5dJZWT_6IGBocThC94_JQzZ3FZPqDXQ6A9boPtwB7dh3BYs_mw6_na6IQimQA9rBbpLcvExDwq2nVHUlj0TfccDdEBdsirC_Zw7wQ2SnHmoSHNJdLgdZfnZrMXCAYOurGUXDvEY3ArorE2gc',
  ogUrl: 'https://wappcast.com/features',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Enterprise WhatsApp Marketing & CRM Features | wappCAST',
  twitterDescription: 'Explore wappCAST\'s official WhatsApp Business API features. Visual no-code flow builder, shared team inbox, smart address book, campaign scheduler, and real-time analytics.',
  twitterImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQ1jHJvMrJZ5CXhGmvDKB_tGAPwY3hJDABr6IlSvN51K-Y-FDzJGekA0_7ywC847Nfo44gh-yczBT7jRDZT_JVQHHeRnmQE-YAueOnzXi7zHIXa0qzwFTgL56-dYMc5dJZWT_6IGBocThC94_JQzZ3FZPqDXQ6A9boPtwB7dh3BYs_mw6_na6IQimQA9rBbpLcvExDwq2nVHUlj0TfccDdEBdsirC_Zw7wQ2SnHmoSHNJdLgdZfnZrMXCAYOurGUXDvEY3ArorE2gc',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/features' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'Enterprise WhatsApp Marketing & CRM Features | wappCAST',
    description: 'Explore wappCAST\'s official WhatsApp Business API features. Visual no-code flow builder, shared team inbox, smart address book, campaign scheduler, and real-time analytics.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'Enterprise WhatsApp Marketing Features',
  description: 'Explore wappCAST\'s official WhatsApp Business API features including visual flow builders, shared inbox, and analytics.',
  theme: '#10b981',
  colorMode: 'dark'
})

const faqs = [
  {
    question: "Why should I use wappCAST instead of the regular WhatsApp App?",
    answer: "While the regular app is for individual use, wappCAST connects to the Official Business API, allowing for multi-agent support, bulk broadcasting, automated flows, and enterprise-grade security that the standard app cannot provide."
  },
  {
    question: "Do I need technical skills to use the Flow Builder?",
    answer: "Not at all. Our builder is 100% no-code and drag-and-drop. If you can draw a flowchart, you can build a WhatsApp automation."
  },
  {
    question: "Will my number get banned using wappCAST?",
    answer: "Since we use the Official WhatsApp Business API, your risk is significantly lower than using unofficial scrapers. We also provide best-practice guidance and automated compliance checks to keep your account safe."
  },
  {
    question: "What kind of support do you provide?",
    answer: "We provide 24/7 technical support, dedicated account managers for enterprise clients, and full assistance with the Meta verification and green-tick application process."
  },
  {
    question: "Can I integrate wappCAST with my CRM?",
    answer: "Yes, wappCAST offers robust APIs and webhooks that allow seamless integration with popular CRMs like HubSpot, Salesforce, and custom-built stacks."
  },
  {
    question: "Is there a limit on the number of broadcasts?",
    answer: "Limits are determined by Meta's messaging tier system (Tier 1 to Tier 4). We help you scale your messaging capacity by maintaining a high quality rating."
  },
  {
    question: "Does wappCAST support international numbers?",
    answer: "Absolutely. You can reach customers globally using any valid phone number registered through the Official WhatsApp API."
  },
  {
    question: "How secure is my customer data?",
    answer: "We use bank-level encryption and follow strict data privacy regulations (GDPR compliant) to ensure your data and your customers' data remain private and secure."
  },
  {
    question: "Can I manage multiple WhatsApp numbers from one account?",
    answer: "Yes, our Enterprise plans allow you to manage multiple numbers and business profiles from a single unified dashboard."
  },
  {
    question: "What happens if I exceed my wallet balance?",
    answer: "We offer \"Balance Buffer\" notifications and automated top-up features to ensure your campaigns never stop due to a low balance."
  },
  {
    question: "How long does the Meta Verification take?",
    answer: "Usually, business verification takes 2-7 business days. Our team assists you throughout the process to ensure all documents are correct for faster approval."
  },
  {
    question: "Can I trial the platform before committing?",
    answer: "Yes! You can book a live demo or start a trial period to explore all features and build your first automation without any upfront commitment."
  }
]
</script>
