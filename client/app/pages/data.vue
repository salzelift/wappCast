<template>
  <main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex flex-col justify-center items-center text-center px-margin-mobile overflow-hidden py-24">
      <div class="absolute top-1/4 -left-1/4 w-1/2 h-1/2 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
      <div class="absolute bottom-1/4 -right-1/4 w-1/2 h-1/2 bg-secondary/10 blur-[120px] rounded-full pointer-events-none"></div>
      
      <div class="relative z-10 max-w-5xl mx-auto">
        <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero mb-6 tracking-tight leading-tight max-w-4xl mx-auto">
          Fresh, Verified Mobile Data — <span class="text-primary italic">Straight From the Source</span>.
        </h1>
        
        <p class="text-body-lg font-body-lg text-on-surface-variant mb-10 max-w-3xl mx-auto leading-relaxed">
          Our AI data miners hunt the web 24/7, verify every record, and hand you exactly the data you need — by location, industry, or audience. Check the quality yourself before you spend a rupee.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-6">
          <NuxtLink to="/contact" class="btn-gradient px-10 py-5 rounded-full text-on-primary-container font-extrabold text-body-lg shadow-2xl w-full sm:w-auto hover:scale-105 active:scale-95 transition-all text-center">
            Get a Free Sample File
          </NuxtLink>
          <NuxtLink to="/contact" class="px-10 py-5 rounded-full border border-border-subtle glass-card font-bold hover:bg-white/5 transition-colors w-full sm:w-auto text-center">
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
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Bot-09] Initializing target directories scanning...</p>
                <p class="text-primary font-mono"><span class="text-secondary font-mono">✓</span> Found: +91 98123 45678 (Delhi NCR) - Real Estate</p>
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Verify] Pushing number to real-time verification engine...</p>
                <p class="text-primary font-mono"><span class="text-primary font-bold font-mono">[VERIFIED]</span> +91 98123 45678 -> WhatsApp Status: ACTIVE</p>
                <p class="text-on-surface-variant opacity-50 font-mono">[AI-Bot-12] Scanned directory for B2B Retail category...</p>
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
            <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block">Direct Generation</span>
            <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">Not a Reseller. <span class="text-primary">The Source.</span></h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed">
              Most "data providers" buy old lists from someone, who bought them from someone else. 
            </p>
            <p class="text-body-lg font-body-lg text-on-surface leading-relaxed font-semibold">
              We're different. We generate our own data. 
            </p>
            <p class="text-body-md text-on-surface-variant leading-relaxed">
              Our AI systems mine and verify contact data around the clock, so what you get is fresh, traceable, and built to your exact requirements. No recycled databases.
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="glass-card p-8 rounded-2xl hover:border-primary/40 hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black mb-6 group-hover:scale-110 group-hover:bg-primary/20 transition-transform">
                01
              </div>
              <h3 class="text-headline-sm font-bold mb-4 group-hover:text-primary transition-colors">AI Bots Hunt 24/7</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Our data-mining bots scan publicly available sources across the web — business websites, directories, listings, newsletters, forums, and public profiles — gathering contact data shared openly for business outreach.
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
                Mining is only half the job. Every number our bots collect is pushed through our verification engine — filtering out invalid, duplicate, and dead records — so what lands in your file is clean and connectable.
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
                New contacts are added and old ones re-checked on an ongoing basis. This ensures that you are always working with current information, drastically minimizing bounce rates.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="glass-card p-8 rounded-2xl hover:border-primary/40 hover:-translate-y-1 transition-all duration-300 group flex flex-col justify-between">
            <div>
              <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary font-black mb-6 group-hover:scale-110 group-hover:bg-primary/20 transition-transform">
                04
              </div>
              <h3 class="text-headline-sm font-bold mb-4 group-hover:text-primary transition-colors">Shaped to Requirements</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Tell us the location, industry, or audience you want, and we build the dataset around it from this continuously refreshed pool — targeted, verified, and ready to use immediately.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 3 — What's In Every File -->
    <section class="py-24 bg-surface-container-lowest relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-16 max-w-3xl mx-auto">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Data Schema</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">What's In Every File</h2>
          <p class="text-on-surface-variant text-body-lg leading-relaxed">
            Clean, structured, and ready to work with. Custom configurations are available on request.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          <!-- Left: Schema Badges -->
          <div class="lg:col-span-5 space-y-6">
            <h3 class="text-headline-md font-bold mb-2">Standard Data Fields Included:</h3>
            <p class="text-on-surface-variant text-body-md leading-relaxed mb-6">
              Our standard datasets come out-of-the-box with all the essential attributes you need to design personal, contextual campaigns.
            </p>
            <div class="flex flex-wrap gap-3">
              <span class="px-4 py-2.5 rounded-full bg-surface-container border border-white/5 font-semibold text-sm flex items-center gap-2 text-on-surface">
                <span class="material-symbols-outlined text-primary text-[18px]">person</span> Full Name
              </span>
              <span class="px-4 py-2.5 rounded-full bg-primary/10 border border-primary/20 font-semibold text-sm flex items-center gap-2 text-primary">
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
            
            <div class="mt-8 p-6 glass-card rounded-2xl border-primary/20">
              <p class="text-body-md text-on-surface-variant font-medium flex items-start gap-3">
                <span class="material-symbols-outlined text-primary shrink-0 mt-0.5">help_outline</span>
                <span>Need a specific field set? Just ask — we shape the data to your campaign.</span>
              </p>
            </div>
          </div>

          <!-- Right: Visual Spreadsheet Mockup -->
          <div class="lg:col-span-7 relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-2xl blur-xl opacity-75"></div>
            <div class="relative glass-card rounded-2xl overflow-hidden shadow-2xl border border-white/10 bg-background-deep/80">
              <!-- Spreadsheet Header Toolbar -->
              <div class="bg-surface-container px-6 py-3 border-b border-white/10 flex items-center justify-between text-xs text-on-surface-variant font-medium">
                <div class="flex items-center gap-4">
                  <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded bg-primary/20 border border-primary text-primary flex items-center justify-center font-bold text-[8px]">✓</span> Verified_Leads.csv</span>
                  <span class="opacity-40">|</span>
                  <span>Sheet 1 of 1</span>
                </div>
                <span class="text-primary font-bold">100% Verified</span>
              </div>
              <!-- Spreadsheet Grid -->
              <div class="overflow-x-auto no-scrollbar">
                <table class="w-full text-left border-collapse min-w-[600px] text-xs">
                  <thead>
                    <tr class="bg-surface-container-low border-b border-white/5 text-on-surface-variant">
                      <th class="p-3 pl-6 font-bold">Full Name</th>
                      <th class="p-3 font-bold text-primary">Verified Number</th>
                      <th class="p-3 font-bold">Location</th>
                      <th class="p-3 font-bold">Industry</th>
                      <th class="p-3 font-bold">Company Name</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-white/5 text-on-surface/90">
                    <tr>
                      <td class="p-3 pl-6 font-medium">Rahul Sharma</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 98123 45678</td>
                      <td class="p-3 text-on-surface-variant">Delhi NCR</td>
                      <td class="p-3 text-on-surface-variant">Real Estate</td>
                      <td class="p-3 text-on-surface-variant">Sharma Realtors</td>
                    </tr>
                    <tr class="bg-white/1">
                      <td class="p-3 pl-6 font-medium">Priya Patel</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 99234 56789</td>
                      <td class="p-3 text-on-surface-variant">Mumbai</td>
                      <td class="p-3 text-on-surface-variant">Retail &amp; D2C</td>
                      <td class="p-3 text-on-surface-variant">Patel Foods Ltd</td>
                    </tr>
                    <tr>
                      <td class="p-3 pl-6 font-medium">Amit Verma</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 98345 67890</td>
                      <td class="p-3 text-on-surface-variant">Bangalore</td>
                      <td class="p-3 text-on-surface-variant">IT &amp; Tech</td>
                      <td class="p-3 text-on-surface-variant">CloudOps Solutions</td>
                    </tr>
                    <tr class="bg-white/1">
                      <td class="p-3 pl-6 font-medium">Sneha Gupta</td>
                      <td class="p-3 text-primary font-bold flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> +91 98456 78901</td>
                      <td class="p-3 text-on-surface-variant">Hyderabad</td>
                      <td class="p-3 text-on-surface-variant">Healthcare</td>
                      <td class="p-3 text-on-surface-variant">CarePlus Clinics</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 4 — Why Our Data Wins -->
    <section class="py-24 bg-background relative overflow-hidden border-y border-border-subtle/50">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="text-center mb-20">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">The Advantage</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">Why Our Data Wins</h2>
          <p class="text-on-surface-variant text-body-lg max-w-xl mx-auto leading-relaxed">Designed for maximum contactability and performance.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Benefit 1 -->
          <div class="glass-card p-8 rounded-2xl flex gap-6 hover:border-primary/30 transition-all group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-[28px]">data_usage</span>
            </div>
            <div>
              <h3 class="text-headline-sm font-bold mb-3 group-hover:text-primary transition-colors">Freshly Mined, Not Recycled</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Continuously sourced data means you avoid working with old, dead numbers that have been spam-called to death. Higher connect rates guaranteed.
              </p>
            </div>
          </div>

          <!-- Benefit 2 -->
          <div class="glass-card p-8 rounded-2xl flex gap-6 hover:border-primary/30 transition-all group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-[28px]">verified_user</span>
            </div>
            <div>
              <h3 class="text-headline-sm font-bold mb-3 group-hover:text-primary transition-colors">Verified Before Delivery</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                Our verification engine processes the file right before dispatch, cleaning out inactive and duplicate lines so you only pay for usable records.
              </p>
            </div>
          </div>

          <!-- Benefit 3 -->
          <div class="glass-card p-8 rounded-2xl flex gap-6 hover:border-primary/30 transition-all group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-[28px]">visibility</span>
            </div>
            <div>
              <h3 class="text-headline-sm font-bold mb-3 group-hover:text-primary transition-colors">See It Before You Buy</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                We send a free sample file matching your targeting requirements every single time. Quality is never a guessing game; check before spending.
              </p>
            </div>
          </div>

          <!-- Benefit 4 -->
          <div class="glass-card p-8 rounded-2xl flex gap-6 hover:border-primary/30 transition-all group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0 group-hover:scale-110 transition-transform">
              <span class="material-symbols-outlined text-[28px]">price_check</span>
            </div>
            <div>
              <h3 class="text-headline-sm font-bold mb-3 group-hover:text-primary transition-colors">Best Market Pricing, Guaranteed</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed">
                By sourcing and verifying data in-house, we eliminate middlemen and pass the savings directly to you. If you receive a better quote for comparable verified data, we will gladly match or beat it.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 5 — Try Before You Trust Us -->
    <section class="py-24 bg-surface-container-lowest relative overflow-hidden">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="glass-card p-12 lg:p-20 rounded-[40px] text-center border-primary/20 bg-gradient-to-b from-surface-container/60 to-surface-container-low/40 max-w-5xl mx-auto">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Zero Risk Trial</span>
          <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-6 leading-tight">Try Before You Trust Us</h2>
          <p class="text-body-lg mb-10 max-w-2xl mx-auto text-on-surface-variant leading-relaxed">
            Request a free sample file and check it yourself — the fields, the formatting, the accuracy, and the tool. Like what you see? Place your order with confidence. Simple as that.
          </p>
          <div class="flex justify-center">
            <NuxtLink to="/contact" class="btn-gradient px-12 py-5 rounded-2xl font-bold text-on-primary-container text-xl shadow-xl hover:scale-105 transition-all">
              Request Free Sample
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 6 — Best Pricing in the Market. Guaranteed. -->
    <section class="py-24 bg-background relative overflow-hidden border-t border-border-subtle/50">
      <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
          <!-- Left: Copy content -->
          <div class="lg:col-span-7 space-y-6">
            <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block">Unbeatable Rates</span>
            <h2 class="text-headline-lg font-headline-lg leading-tight">Best Pricing in the Market. <span class="text-primary">Guaranteed.</span></h2>
            <p class="text-body-lg font-body-lg text-on-surface-variant leading-relaxed">
              Quality data shouldn't cost a fortune. Because we mine and verify everything in-house, there's no middleman markup inflating your price.
            </p>
            <p class="text-body-md text-on-surface-variant leading-relaxed">
              Get a custom quote based on your volume and targeting — and if you find a better price for comparable verified data anywhere, tell us. We'll beat it.
            </p>
            <div>
              <NuxtLink to="/contact" class="btn-gradient px-10 py-4.5 rounded-xl font-bold text-on-primary-container text-lg shadow-lg hover:scale-105 transition-all inline-block text-center w-full sm:w-auto">
                Get a Custom Quote
              </NuxtLink>
            </div>
          </div>

          <!-- Right: Visual Pricing Guarantee Shield/Stamp -->
          <div class="lg:col-span-5 flex justify-center">
            <div class="glass-card p-10 rounded-3xl border-primary/20 bg-surface-container-low max-w-sm text-center relative overflow-hidden group hover:border-primary/40 transition-all duration-300">
              <div class="absolute -top-12 -right-12 w-24 h-24 bg-primary/10 rounded-full blur-xl"></div>
              <div class="w-20 h-20 rounded-full bg-primary/10 border-2 border-primary/20 flex items-center justify-center text-primary mx-auto mb-6 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-[48px]">verified</span>
              </div>
              <h3 class="text-headline-sm font-bold mb-3">Best Price Guarantee</h3>
              <p class="text-on-surface-variant text-body-md leading-relaxed mb-4">
                We will match or beat any comparable verified dataset quote you receive.
              </p>
              <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary font-bold text-xs">
                100% Match or Beat
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 7 — Who It's For -->
    <section class="py-24 bg-surface-container-lowest border-y border-border-subtle/50">
      <div class="max-w-container-max mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">Target Verticals</span>
          <h2 class="text-headline-lg font-headline-lg mb-6">Who It's For</h2>
          <p class="text-on-surface-variant text-body-lg max-w-2xl mx-auto leading-relaxed">
            Powering high-impact campaigns across multiple channels and departments.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">group_add</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">Lead-Gen Teams</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Fill cold pipelines with pre-verified numbers, maximizing outbound calling and sales outreach rates.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">business</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">Marketing Agencies</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Equip client acquisition programs with targeted demographic contact lists configured to client specifications.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">sms</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">Telecalling &amp; SMS Campaigns</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Dramatically reduce carrier validation errors and dead rates, optimizing daily calling quotas.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">ads_click</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">Custom-Audience Building</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Feed meta algorithms and ad platforms with high-match-rate phone lists to lower acquisition costs.</p>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">troubleshoot</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">Market Research</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Reach specific demographic profiles or industry decision-makers to compile surveys and trends data.</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="glass-card p-8 rounded-2xl border-white/5 hover:border-primary/30 transition-all flex gap-5 items-start">
            <span class="material-symbols-outlined text-primary text-[28px] mt-1 shrink-0">contact_phone</span>
            <div>
              <h4 class="font-bold text-body-lg text-on-surface mb-2">B2B Sales Outreach</h4>
              <p class="text-on-surface-variant text-body-md leading-relaxed">Equip sales representatives with complete company profiles, emails, and direct phone lines to schedule meetings.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 8 — FAQ Section -->
    <section class="py-24 bg-background">
      <div class="max-w-4xl mx-auto px-margin-mobile">
        <div class="text-center mb-16">
          <span class="text-primary font-bold tracking-widest uppercase text-label-sm font-label-sm block mb-4">FAQ Guide</span>
          <h2 class="text-headline-lg font-headline-lg mb-4 text-on-surface">Frequently Asked Questions</h2>
          <p class="text-on-surface-variant font-body-md">Everything you need to know about our data sourcing and verification.</p>
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

// Production-grade SEO setup for B2B/B2C Mobile Data page
useSeoMeta({
  title: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  ogTitle: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  description: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  ogDescription: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  ogImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQ1jHJvMrJZ5CXhGmvDKB_tGAPwY3hJDABr6IlSvN51K-Y-FDzJGekA0_7ywC847Nfo44gh-yczBT7jRDZT_JVQHHeRnmQE-YAueOnzXi7zHIXa0qzwFTgL56-dYMc5dJZWT_6IGBocThC94_JQzZ3FZPqDXQ6A9boPtwB7dh3BYs_mw6_na6IQimQA9rBbpLcvExDwq2nVHUlj0TfccDdEBdsirC_Zw7wQ2SnHmoSHNJdLgdZfnZrMXCAYOurGUXDvEY3ArorE2gc',
  ogUrl: 'https://wappcast.com/data',
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Fresh, Verified Mobile Data & Lead Generation Lists | wappCAST',
  twitterDescription: 'Acquire pre-verified B2B and B2C mobile datasets mined directly by AI. Filter by industry, location, and audience. Request a free sample file today.',
  twitterImage: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQ1jHJvMrJZ5CXhGmvDKB_tGAPwY3hJDABr6IlSvN51K-Y-FDzJGekA0_7ywC847Nfo44gh-yczBT7jRDZT_JVQHHeRnmQE-YAueOnzXi7zHIXa0qzwFTgL56-dYMc5dJZWT_6IGBocThC94_JQzZ3FZPqDXQ6A9boPtwB7dh3BYs_mw6_na6IQimQA9rBbpLcvExDwq2nVHUlj0TfccDdEBdsirC_Zw7wQ2SnHmoSHNJdLgdZfnZrMXCAYOurGUXDvEY3ArorE2gc',
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
    answer: "We're a primary source. Our AI bots continuously mine publicly available contact data — from business websites, directories, public listings, newsletters, forums, social media, and public profiles where it's been shared to be contacted — and run every record through our own verification engine."
  },
  {
    question: "How fresh is the data?",
    answer: "Our systems run 24/7, so datasets are continuously refreshed rather than sitting in a vault going stale. Every dataset is checked right before delivery to ensure freshness."
  },
  {
    question: "How do you make sure it's accurate?",
    answer: "Every mined record passes through automated verification before it reaches you, and our systems re-check data on an ongoing basis. That's why we're confident enough to hand you a free sample to inspect before you ever pay."
  },
  {
    question: "Can I get data for a specific city or industry?",
    answer: "Yes. We build datasets to your exact requirements — by location (country, state, city), industry category, business size, audience type, and custom fields."
  },
  {
    question: "Can I see the data before paying?",
    answer: "Absolutely. Every customer gets a free sample file to check quality, fields, and formatting before committing to any order."
  },
  {
    question: "Is your pricing really the cheapest?",
    answer: "We offer a best-price guarantee. Since we mine and verify everything in-house with no reseller markups, our overhead is low. Send us a comparable verified quote, and we will match or beat it."
  },
  {
    question: "What format do I get the file in?",
    answer: "Your data will be delivered in clean, well-structured CSV or Excel files that are ready to import into your CRM, sales engagement platform, dialer, or marketing tools for immediate use."
  }
]
</script>
