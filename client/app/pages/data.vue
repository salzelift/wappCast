<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[80vh] flex flex-col justify-center items-center text-center px-margin-mobile overflow-hidden py-24">
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>
      
      <div class="relative z-10 max-w-5xl mx-auto">
        <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero mb-6 tracking-tight leading-tight max-w-4xl mx-auto">
          Fresh, Verified Mobile Data — <span class="gradient-text">Straight From the Source</span>.
        </h1>
        
        <p class="text-body-lg font-body-lg text-on-surface-variant mb-10 max-w-3xl mx-auto leading-relaxed">
          Our AI data miners hunt the web 24/7, verify every record, and hand you exactly the data you need — by location, industry, or audience. Check the quality yourself before you spend a rupee.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-6">
          <NuxtLink to="/contact" target="_blank" class="btn-primary px-10 py-5 rounded-full text-on-primary font-extrabold text-body-lg shadow-2xl w-full sm:w-auto hover:scale-105 active:scale-95 transition-all text-center">
            Get a Free Sample File
          </NuxtLink>
          <NuxtLink to="/contact" target="_blank" class="px-10 py-5 rounded-full border border-border-subtle glass-card font-bold hover:bg-white/5 transition-colors w-full sm:w-auto text-center">
            Talk to Our Data Team
          </NuxtLink>
        </div>
        
        <div class="text-on-surface-variant font-label-sm text-label-sm flex items-center justify-center gap-2 opacity-80">
          <span class="material-symbols-outlined text-[16px] text-primary">done</span> No commitment. See the data first.
        </div>
      </div>
    </section>

    <!-- SECTION 1 — Not a Reseller. The Source. -->
    <section class="py-24 border-t border-border-subtle/50 bg-surface-container-lowest/50 relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
          <!-- Left Visual: AI Console Mockup -->
          <div class="lg:col-span-6 order-2 lg:order-1 relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-2xl blur-xl group-hover:blur-2xl transition duration-500 opacity-75"></div>
            <div class="relative glass-card rounded-2xl p-6 overflow-hidden shadow-2xl font-mono text-[13px] leading-relaxed text-primary/80 border border-white/10 bg-black/40 min-h-[280px] flex flex-col justify-between">
              <div class="flex items-center justify-between border-b border-white/10 pb-4 mb-4">
                <div class="flex items-center gap-2">
                  <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                  <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                  <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                </div>
                <span class="text-label-sm font-label-sm text-on-surface-variant font-sans uppercase tracking-widest opacity-60">AI Miner Active (24/7)</span>
              </div>
              <div class="space-y-2 flex-grow overflow-hidden font-mono">
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Bot-09] Scan protocol active...</p>
                <p class="text-primary font-mono"><span class="text-secondary font-mono">✓</span> Found: +91 98123 45678 (Delhi NCR) - Real Estate</p>
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Verify] Pushing number to real-time verification engine...</p>
                <p class="text-primary font-mono"><span class="text-primary font-bold font-mono">[VERIFIED]</span> +91 98123 45678 -> WhatsApp Status: ACTIVE</p>
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Bot-12] Crawled B2B Retail directory category...</p>
                <p class="text-primary font-mono"><span class="text-secondary font-mono">✓</span> Found: +91 99234 56789 (Mumbai) - Retail - Fresh</p>
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Refresh] Checking latency for 100 inactive slots...</p>
                <p class="text-secondary font-mono">[COMPLETED] Verification Batch #8142 -> 98.4% Clean Rate</p>
              </div>
              <div class="border-t border-white/5 pt-4 mt-4 flex items-center justify-between font-sans text-xs text-on-surface-variant">
                <span>Verification rate: 100%</span>
                <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> Live Stream</span>
              </div>
            </div>
          </div>

          <!-- Right Content -->
          <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
            <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block">Direct Sourcing</span>
            <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">Not a Reseller. <span class="text-primary">The Source.</span></h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed">
              Most "data providers" buy old lists from someone who bought them from someone else.
            </p>
            <p class="text-body-lg font-body-lg text-on-surface leading-relaxed font-semibold">
              We're different. We generate our own data.
            </p>
            <p class="text-body-md text-on-surface-variant leading-relaxed">
              Our AI systems mine and verify contact data around the clock, so what you get is fresh, traceable, and built to your requirements.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 2 — How Our AI Finds & Verifies Your Data -->
    <section class="py-24 bg-background relative overflow-hidden border-b border-border-subtle/50">
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-glow-emerald blur-[120px] opacity-10 pointer-events-none"></div>
      
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-20">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Pipeline Protocol</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">How Our AI Finds &amp; Verifies Your Data</h2>
          <p class="text-on-surface-variant text-body-lg max-w-2xl mx-auto leading-relaxed">
            Our data is mined fresh, every single day, by AI built to do one job: find real contacts.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Step 1 -->
          <div class="glass-card p-8 rounded-2xl hover:border-primary/40 hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black mb-6 group-hover:scale-110 group-hover:bg-primary/20 transition-transform">
                01
              </div>
              <h3 class="text-headline-sm font-bold mb-4 group-hover:text-primary transition-colors">Our AI Bots Hunt 24/7</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Around the clock, our data-mining bots scan publicly available sources across the web — business websites, directories, public listings, newsletters, forums, social media, and public profiles — gathering contact data that's been shared openly for B2B communication.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="glass-card p-8 rounded-2xl hover:border-primary/40 hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black mb-6 group-hover:scale-110 group-hover:bg-primary/20 transition-transform">
                02
              </div>
              <h3 class="text-headline-sm font-bold mb-4 group-hover:text-primary transition-colors">Everything Gets Verified</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Mining is only half the job. Every number our bots collect is pushed through our verification engine — filtering out invalid, duplicate, and dead records — so what lands in your file is clean and connectable, not noise.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="glass-card p-8 rounded-2xl hover:border-primary/40 hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black mb-6 group-hover:scale-110 group-hover:bg-primary/20 transition-transform">
                03
              </div>
              <h3 class="text-headline-sm font-bold mb-4 group-hover:text-primary transition-colors">Continuously Refreshed</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                New contacts are added and old ones re-checked on an ongoing basis, so you're always working with current information.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3 — Built Around What You Actually Need -->
    <section class="py-24 bg-surface-container-lowest relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16 max-w-3xl mx-auto">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Tailored Filters</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">Built Around What You Actually Need</h2>
          <p class="text-on-surface-variant text-body-lg leading-relaxed">
            Clean, structured, and ready to work with. Typical fields include:
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          <!-- Left: Schema Badges -->
          <div class="lg:col-span-6 space-y-8">
            <div class="flex flex-wrap gap-3">
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-primary text-[18px]">person</span> Full Name
              </span>
              <span class="px-4 py-2.5 rounded-full bg-primary/10 border border-primary/20 font-semibold text-sm flex items-center gap-2 text-on-primary-container dark:text-primary">
                <span class="material-symbols-outlined text-[18px]">verified_user</span> Verified Number
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">location_on</span> Location
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">domain</span> Industry
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">corporate_fare</span> Company Name
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">language</span> Website
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">share</span> Social Links
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">groups</span> Employee Size
              </span>
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-[18px]">payments</span> Revenue
              </span>
            </div>
            
            <div class="space-y-4">
              <p class="text-body-lg text-on-surface font-bold">
                You define the audience. We deliver the data. Simple.
              </p>
              <NuxtLink to="/demo" target="_blank" class="btn-primary px-8 py-4 rounded-xl font-bold inline-block text-center shadow-lg shadow-primary/20">
                Get a Free Sample File
              </NuxtLink>
            </div>
          </div>

          <!-- Right: Visual Spreadsheet Mockup -->
          <div class="lg:col-span-6 relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-2xl blur-xl opacity-75"></div>
            <div class="relative glass-card rounded-2xl overflow-hidden shadow-2xl border border-white/10 bg-background-deep/80">
              <!-- Spreadsheet Header Toolbar -->
              <div class="bg-surface-container px-6 py-3 border-b border-white/10 flex items-center justify-between text-xs text-on-surface-variant font-medium">
                <div class="flex items-center gap-4">
                  <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded bg-primary/20 border border-primary text-primary flex items-center justify-center font-bold text-[8px]">✓</span> custom_outreach_list.csv</span>
                </div>
                <span class="text-primary font-bold">90%+ Connect Rate</span>
              </div>
              <!-- Spreadsheet Grid -->
              <div class="overflow-x-auto no-scrollbar">
                <table class="w-full text-left border-collapse min-w-[500px] text-xs">
                  <thead>
                    <tr class="bg-surface-container-low border-b border-white/5 text-on-surface-variant">
                      <th class="p-3 pl-6 font-bold">Full Name</th>
                      <th class="p-3 font-bold text-primary">Verified Number</th>
                      <th class="p-3 font-bold">Location</th>
                      <th class="p-3 font-bold">Industry</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-white/5 text-on-surface/90">
                    <tr>
                      <td class="p-3 pl-6 font-medium">Rahul Sharma</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 98123 45678</td>
                      <td class="p-3 text-on-surface-variant">Delhi NCR</td>
                      <td class="p-3 text-on-surface-variant">Real Estate</td>
                    </tr>
                    <tr class="bg-white/1">
                      <td class="p-3 pl-6 font-medium">Priya Patel</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 99234 56789</td>
                      <td class="p-3 text-on-surface-variant">Mumbai</td>
                      <td class="p-3 text-on-surface-variant">Retail &amp; D2C</td>
                    </tr>
                    <tr>
                      <td class="p-3 pl-6 font-medium">Amit Verma</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 98345 67890</td>
                      <td class="p-3 text-on-surface-variant">Bangalore</td>
                      <td class="p-3 text-on-surface-variant">IT &amp; Tech</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4 — Verified Mobile Numbers That Actually Connect -->
    <section class="py-24 bg-background relative overflow-hidden border-t border-border-subtle/50">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
          <!-- Left Content -->
          <div class="lg:col-span-7 space-y-6">
            <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block">Guaranteed Reach</span>
            <h2 class="text-headline-lg font-headline-lg leading-tight text-on-surface">
              Verified Mobile Numbers That Actually Connect
            </h2>
            <h3 class="text-secondary font-bold text-headline-sm">
              Bad numbers kill campaigns before they start. Ours don't.
            </h3>
            <p class="text-body-lg text-on-surface-variant leading-relaxed">
              Every mobile number in your file is verified to 90%+ accuracy — so your dialers connect, your message lands, and your team spends time talking.
            </p>
            <div class="space-y-3 pt-4">
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-primary font-bold text-xl">✔</span> 90%+ verified mobile accuracy
              </div>
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-primary font-bold text-xl">✔</span> More conversations
              </div>
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-primary font-bold text-xl">✔</span> Clean, ready to contact
              </div>
            </div>
          </div>

          <!-- Right Shield Card -->
          <div class="lg:col-span-5 flex justify-center">
            <div class="glass-card p-10 rounded-3xl border-primary/20 bg-surface-container-low max-w-sm text-center relative overflow-hidden group hover:border-primary/40 transition-all duration-300">
              <div class="absolute -top-12 -right-12 w-24 h-24 bg-primary/10 rounded-full blur-xl"></div>
              <div class="w-20 h-20 rounded-full bg-primary/10 border-2 border-primary/20 flex items-center justify-center text-primary mx-auto mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-[48px]">check_circle</span>
              </div>
              <h3 class="text-headline-sm font-bold mb-3">90%+ Accuracy</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed mb-4">
                We remove dead numbers, bots, and inactive routing paths automatically.
              </p>
              <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-on-primary-container dark:text-primary font-bold text-xs">
                Outbound Optimized
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5 — 100M+ to Draw From. Your Slice, Built to Order. -->
    <section class="py-24 bg-surface-container-low relative overflow-hidden border-t border-border-subtle/50">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
          <!-- Left Visual: Global Map Illustration -->
          <div class="lg:col-span-5 flex justify-center order-2 lg:order-1">
            <div class="glass-card p-8 rounded-3xl border-secondary/20 max-w-sm text-center relative overflow-hidden group hover:border-secondary/40 transition-all duration-300">
              <span class="material-symbols-outlined text-secondary text-5xl mb-4">language</span>
              <h3 class="text-headline-sm font-bold mb-3">Global Pool</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed mb-4">
                Target any industry, geo-location, job function, or business demographic.
              </p>
              <div class="inline-block px-4 py-1.5 rounded-full bg-secondary/10 border border-secondary/20 text-secondary font-bold text-xs">
                100M+ B2B Contacts
              </div>
            </div>
          </div>

          <!-- Right Content -->
          <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
            <span class="text-secondary font-bold tracking-widest uppercase text-label-sm font-label-sm block">Precision Targeting</span>
            <h2 class="text-headline-lg font-headline-lg leading-tight text-on-surface">
              100M+ to Draw From. Your Slice, Built to Order.
            </h2>
            <h3 class="text-secondary font-bold text-headline-sm">
              You don't need 100 million contacts. You need the few thousand that fit your campaign.
            </h3>
            <p class="text-body-lg text-on-surface-variant leading-relaxed">
              We hold a pool of 100M+ verified decision-makers worldwide — and from it, we carve out exactly the audience you're targeting. The right titles, the right industries, the right markets. Nothing you can't use.
            </p>
            
            <div class="space-y-3 pt-4">
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-secondary font-bold text-xl">✔</span> 100M+ decision-makers to source from
              </div>
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-secondary font-bold text-xl">✔</span> A custom file built to your exact target — not the whole database
              </div>
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-secondary font-bold text-xl">✔</span> Reach the people who sign off, not the gatekeepers
              </div>
              <div class="flex items-center gap-3 text-body-md font-semibold text-on-surface">
                <span class="text-secondary font-bold text-xl">✔</span> Tuned for cold prospecting and unmatched reply rates
              </div>
            </div>
            
            <p class="text-body-md font-bold text-on-surface pt-4">
              This is the difference between buying a giant list and getting the right list.
            </p>
            
            <div>
              <NuxtLink to="/contact" target="_blank" class="bg-secondary text-on-secondary px-8 py-4 rounded-xl font-bold inline-block text-center shadow-lg shadow-secondary/20 hover:scale-105 active:scale-95 transition-transform">
                Talk to Our Data Team
              </NuxtLink>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6 — Why Our Data Wins -->
    <section class="py-24 bg-background border-t border-border-subtle/50 relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Competitor Edge</span>
          <h2 class="text-headline-lg font-headline-lg text-on-surface">Why Our Data Wins</h2>
        </div>

        <div class="overflow-x-auto rounded-3xl border border-subtle glass-card">
          <table class="w-full text-left border-collapse min-w-[700px]">
            <thead>
              <tr class="border-b border-subtle bg-surface-container">
                <th class="p-6 font-headline-sm text-body-lg font-bold text-primary">What you get</th>
                <th class="p-6 font-headline-sm text-body-lg font-bold text-on-surface">Why it matters</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-subtle font-body-md text-body-md">
              <tr class="hover:bg-white/2 transition-colors">
                <td class="p-6 font-bold text-on-surface">Freshly mined, daily</td>
                <td class="p-6 text-on-surface-variant">No recycled, resold lists</td>
              </tr>
              <tr class="hover:bg-white/2 transition-colors">
                <td class="p-6 font-bold text-on-surface">90%+ verified mobiles</td>
                <td class="p-6 text-on-surface-variant">Your dialers connect</td>
              </tr>
              <tr class="hover:bg-white/2 transition-colors">
                <td class="p-6 font-bold text-on-surface">100M+ pool to source from</td>
                <td class="p-6 text-on-surface-variant">Your exact audience, carved out</td>
              </tr>
              <tr class="hover:bg-white/2 transition-colors">
                <td class="p-6 font-bold text-on-surface">Built to your filters</td>
                <td class="p-6 text-on-surface-variant">You buy your slice, not the whole list</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- CLOSING CTA -->
    <section class="py-24 bg-surface-container-lowest/50 border-t border-border-subtle/50 relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="glass-card p-12 lg:p-20 rounded-[40px] text-center border-primary/20 bg-gradient-to-b from-surface-container/60 to-surface-container-low/40 max-w-5xl mx-auto">
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-6 leading-tight text-on-surface">
            Ready to See the Data Before You Spend a Rupee?
          </h2>
          <p class="text-body-lg mb-10 max-w-2xl mx-auto text-on-surface-variant leading-relaxed">
            Get a free sample file built to your target audience. Check the quality yourself — then decide.
          </p>
          <div class="flex flex-col gap-4 justify-center items-center">
            <NuxtLink to="/demo" target="_blank" class="btn-primary px-12 py-5 rounded-2xl font-bold text-on-primary text-xl shadow-xl hover:scale-105 transition-all">
              Get a Free Sample File
            </NuxtLink>
            <p class="text-on-surface-variant font-label-sm text-label-sm opacity-85">
              No commitment. See the data first.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- DATA FAQs -->
    <section class="py-24 bg-background">
      <div class="max-w-4xl mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Data FAQ</span>
          <h2 class="text-headline-lg font-headline-lg mb-4 text-on-surface">Frequently Asked Questions</h2>
          <p class="text-on-surface-variant font-body-md">Everything you need to know about our data sourcing, legalities, and quality controls.</p>
        </div>

        <div class="space-y-4 mb-16">
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

        <!-- Under FAQ CTA -->
        <div class="text-center p-8 glass-card border-secondary/20 rounded-3xl max-w-2xl mx-auto">
          <h3 class="font-headline-sm font-bold text-on-surface mb-2">Have Custom Sourcing Requirements?</h3>
          <p class="text-on-surface-variant text-body-md mb-6">Talk to our team to build files tailored to specific titles, segments, or locations.</p>
          <NuxtLink to="/contact" target="_blank" class="bg-secondary text-on-secondary px-8 py-3.5 rounded-xl font-bold inline-block hover:scale-105 transition-transform shadow-lg shadow-secondary/15">
            Talk to Our Data Team
          </NuxtLink>
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

// B2B Mobile Data page dynamic SEO
useSeoMeta({
  title: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  ogTitle: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  description: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  ogDescription: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  ogImage: 'https://wappcast.com/pricing_dashboard_mockup.png',
  ogUrl: 'https://wappcast.com/data',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  twitterDescription: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  twitterImage: 'https://wappcast.com/pricing_dashboard_mockup.png',
  robots: 'index, follow'
})

useHead({
  link: [
    { rel: 'canonical', href: 'https://wappcast.com/data' }
  ]
})

// Schema.org Structured Data
useSchemaOrg([
  defineWebPage({
    name: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
    description: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.'
  })
])

// Open Graph Social Preview Image
defineOgImageComponent('NuxtSeo', {
  title: 'Verified Mobile Data Lists',
  description: 'AI-mined & pre-verified contact list services for high-growth campaigns.',
  theme: '#10b981',
  colorMode: 'dark'
})

const faqs = [
  {
    question: "Where does your data come from?",
    answer: "We generate it ourselves. Our AI bots continuously mine publicly available sources across the web — business sites, directories, public listings, and profiles — then push every record through our verification engine. We don't buy or resell old lists."
  },
  {
    question: "How accurate are the mobile numbers?",
    answer: "Mobile numbers are verified to 90%+ accuracy. We filter out invalid, duplicate, and dead records before anything reaches your file, so your dialers and SMS actually connect."
  },
  {
    question: "How many contacts can I reach?",
    answer: "We source from a pool of 100M+ verified decision-makers globally — but you don't buy all of it. We build you a custom file matched to your exact target audience, so you only pay for the contacts that fit your campaign."
  },
  {
    question: "Can I get data for a specific audience?",
    answer: "Yes. Tell us your target — by location, industry, job title, seniority, or company size — and we build the file to match. You only get the audience and fields you actually need."
  },
  {
    question: "Is the data fresh or recycled?",
    answer: "Fresh. Records are mined daily and existing ones are re-checked on an ongoing basis, so you're always working with current data — not a list that's been passed around for years."
  },
  {
    question: "Can I see the data before I buy?",
    answer: "Absolutely. Request a free sample file built to your target audience, check the quality yourself, and decide from there. No commitment."
  },
  {
    question: "Is your data legal to use for outreach?",
    answer: "Our data is gathered from publicly available sources intended for business and marketing communication. You're responsible for using it in line with the laws and consent rules that apply in your target markets. If you have specific compliance requirements, talk to our data team and we'll help you scope the right approach."
  }
]
</script>
