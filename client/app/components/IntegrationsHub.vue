<template>
  <section class="py-24 bg-surface-container-lowest dark:bg-background-deep relative overflow-hidden border-b border-border-subtle/40">
    <!-- Grid Blueprint Background -->
    <div class="absolute inset-0 bg-grid-pattern opacity-40 pointer-events-none"></div>

    <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16 max-w-3xl mx-auto">
        <span class="inline-block bg-secondary/10 text-secondary dark:text-secondary-container px-4 py-1.5 rounded-full font-label-sm uppercase tracking-wider mb-4 border border-secondary/20">
          Seamless API Hub
        </span>
        <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">
          Automate Anything with <span class="text-secondary">2,000+ Integrations</span> 🔗
        </h2>
        <p class="text-on-surface-variant text-body-lg">
          Connect your marketing stacks, ecommerce systems, payments, and databases. Fetch triggers instantly and route automated follow-ups without manual coding.
        </p>
      </div>

      <!-- Desktop Blueprint Canvas -->
      <div class="glass-card rounded-3xl p-6 border border-border-subtle relative md:block hidden overflow-hidden bg-background/50">
        <!-- SVG Canvas (Coordinate space 0 0 1000 600) -->
        <svg class="w-full h-auto aspect-[1000/600] select-none" viewBox="0 0 1000 600" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="gradient-to-hub" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#4edea3" stop-opacity="0.1" />
              <stop offset="100%" stop-color="#10b981" stop-opacity="0.8" />
            </linearGradient>
            <linearGradient id="gradient-from-hub" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#10b981" stop-opacity="0.8" />
              <stop offset="100%" stop-color="#059669" stop-opacity="0.1" />
            </linearGradient>
          </defs>

          <!-- Left Triggers to Center Hub Paths -->
          <path 
            v-for="(item, idx) in leftApps" 
            :key="'path-left-' + idx"
            :id="'path-left-' + idx"
            :d="getLeftCurve(idx)"
            stroke="url(#gradient-to-hub)"
            stroke-width="1.5"
            fill="none"
          />

          <!-- Right Actions to Center Hub Paths -->
          <path 
            v-for="(item, idx) in rightApps" 
            :key="'path-right-' + idx"
            :id="'path-right-' + idx"
            :d="getRightCurve(idx)"
            stroke="url(#gradient-from-hub)"
            stroke-width="1.5"
            fill="none"
          />

          <!-- Flowing Particles (Left to Hub) -->
          <circle 
            v-for="(item, idx) in leftApps" 
            :key="'dot-left-' + idx"
            r="3" 
            fill="#4edea3" 
            class="filter drop-shadow-[0_0_4px_rgba(78,222,163,0.8)]"
          >
            <animateMotion 
              :dur="2.5 + (idx * 0.4) + 's'" 
              repeatCount="indefinite"
            >
              <mpath :href="'#path-left-' + idx" />
            </animateMotion>
          </circle>

          <!-- Flowing Particles (Hub to Right) -->
          <circle 
            v-for="(item, idx) in rightApps" 
            :key="'dot-right-' + idx"
            r="3" 
            fill="#00bd85" 
            class="filter drop-shadow-[0_0_4px_rgba(0,189,133,0.8)]"
          >
            <animateMotion 
              :dur="2.2 + (idx * 0.5) + 's'" 
              repeatCount="indefinite"
            >
              <mpath :href="'#path-right-' + idx" />
            </animateMotion>
          </circle>

          <!-- LEFT COLUMN: Source Triggers (X = 30) -->
          <foreignObject v-for="(app, idx) in leftApps" :key="'left-' + app.name"
                         x="30" :y="30 + idx * 90" width="220" height="54">
            <div xmlns="http://www.w3.org/1999/xhtml" 
                 class="glass-card flex items-center gap-3 px-3 py-2 rounded-xl border border-border-subtle/85 shadow-sm hover:scale-105 hover:border-primary/30 transition-all cursor-pointer bg-background/95 h-full"
                 @mouseenter="activeApp = app"
                 @mouseleave="activeApp = null">
              <div class="w-7 h-7 rounded-lg bg-surface-container flex items-center justify-center p-1 shadow-inner shrink-0 overflow-hidden">
                <div v-if="app.logoSvg" v-html="app.logoSvg" class="w-5 h-5 flex items-center justify-center shrink-0"></div>
                <img v-else-if="app.logo" :src="app.logo" :alt="app.name" class="w-5 h-5 object-contain" />
                <span v-else class="material-symbols-outlined text-[16px] text-primary">{{ app.icon }}</span>
              </div>
              <div class="text-left leading-tight">
                <h4 class="font-extrabold text-[10px] text-on-surface leading-tight">{{ app.name }}</h4>
                <p class="text-[7px] text-on-surface-variant font-bold tracking-wide uppercase mt-0.5">{{ app.trigger }}</p>
              </div>
            </div>
          </foreignObject>

          <!-- CENTER COLUMN: wappCAST Hub (X = 440, Y = 240) -->
          <foreignObject x="440" y="240" width="120" height="120">
            <div xmlns="http://www.w3.org/1999/xhtml" class="w-full h-full relative flex items-center justify-center">
              <!-- Pulsing outer waves -->
              <div class="absolute inset-0 bg-primary/20 rounded-full animate-ping opacity-25"></div>
              <div class="absolute inset-2 bg-secondary/15 rounded-full animate-pulse-slow"></div>
              
              <!-- Hub content card -->
              <div class="relative w-20 h-20 rounded-full bg-gradient-to-tr from-primary to-secondary p-0.5 flex items-center justify-center shadow-2xl scale-110 hover:scale-125 transition-transform cursor-pointer">
                <div class="w-full h-full rounded-full bg-surface-container flex items-center justify-center">
                  <img src="/wappCAST-logo.png" alt="wappCAST Hub" class="h-5 w-auto object-contain dark:brightness-100 brightness-0" />
                </div>
              </div>
            </div>
          </foreignObject>

          <!-- RIGHT COLUMN: Action Destinations (X = 750) -->
          <foreignObject v-for="(app, idx) in rightApps" :key="'right-' + app.name"
                         x="750" :y="30 + idx * 90" width="220" height="54">
            <div xmlns="http://www.w3.org/1999/xhtml" 
                 class="glass-card flex items-center gap-3 px-3 py-2 rounded-xl border border-border-subtle/85 shadow-sm hover:scale-105 hover:border-secondary/30 transition-all cursor-pointer bg-background/95 h-full"
                 @mouseenter="activeApp = app"
                 @mouseleave="activeApp = null">
              <div class="w-7 h-7 rounded-lg bg-surface-container flex items-center justify-center p-1 shadow-inner shrink-0 overflow-hidden">
                <div v-if="app.logoSvg" v-html="app.logoSvg" class="w-5 h-5 flex items-center justify-center shrink-0"></div>
                <img v-else-if="app.logo" :src="app.logo" :alt="app.name" class="w-5 h-5 object-contain" />
                <span v-else class="material-symbols-outlined text-[16px] text-secondary">{{ app.icon }}</span>
              </div>
              <div class="text-left leading-tight">
                <h4 class="font-extrabold text-[10px] text-on-surface leading-tight">{{ app.name }}</h4>
                <p class="text-[7px] text-on-surface-variant font-bold tracking-wide uppercase mt-0.5">{{ app.action }}</p>
              </div>
            </div>
          </foreignObject>
        </svg>

        <!-- Floating integration details panel -->
        <div class="mt-8 pt-4 border-t border-border-subtle/50 text-center min-h-[40px] flex items-center justify-center">
          <p class="text-xs transition-opacity duration-300" :class="activeApp ? 'text-primary font-bold opacity-100' : 'text-on-surface-variant opacity-75'">
            {{ activeApp ? `${activeApp.name}: ${activeApp.detail}` : 'Hover over any application to view how the automation integrates!' }}
          </p>
        </div>
      </div>

      <!-- Mobile Layout -->
      <div class="md:hidden flex flex-col gap-8 items-center relative z-10">
        <!-- Input Grid -->
        <div class="w-full">
          <h3 class="text-center text-label-sm font-label-sm uppercase tracking-wider text-primary mb-4 font-bold">Input Triggers</h3>
          <div class="grid grid-cols-2 gap-3">
            <div v-for="app in leftApps" :key="app.name" class="glass-card p-4 rounded-xl border border-border-subtle flex items-center gap-3">
              <div v-if="app.logoSvg" v-html="app.logoSvg" class="w-5 h-5 flex items-center justify-center shrink-0"></div>
              <img v-else-if="app.logo" :src="app.logo" :alt="app.name" class="w-5 h-5 object-contain shrink-0" />
              <span v-else class="material-symbols-outlined text-[20px] text-primary shrink-0">{{ app.icon }}</span>
              <span class="font-bold text-xs text-on-surface">{{ app.name }}</span>
            </div>
          </div>
        </div>

        <!-- Pulse Icon Divider -->
        <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-primary to-secondary p-0.5 flex items-center justify-center shadow-lg relative">
          <div class="absolute inset-0 bg-primary/20 rounded-full animate-ping opacity-30"></div>
          <div class="w-full h-full rounded-full bg-surface flex items-center justify-center">
            <span class="material-symbols-outlined text-primary text-[24px]">swap_vert</span>
          </div>
        </div>

        <!-- Output Grid -->
        <div class="w-full">
          <h3 class="text-center text-label-sm font-label-sm uppercase tracking-wider text-secondary mb-4 font-bold">Output Actions</h3>
          <div class="grid grid-cols-2 gap-3">
            <div v-for="app in rightApps" :key="app.name" class="glass-card p-4 rounded-xl border border-border-subtle flex items-center gap-3">
              <div v-if="app.logoSvg" v-html="app.logoSvg" class="w-5 h-5 flex items-center justify-center shrink-0"></div>
              <img v-else-if="app.logo" :src="app.logo" :alt="app.name" class="w-5 h-5 object-contain shrink-0" />
              <span v-else class="material-symbols-outlined text-[20px] text-secondary shrink-0">{{ app.icon }}</span>
              <span class="font-bold text-xs text-on-surface">{{ app.name }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const activeApp = ref(null)

const leftApps = [
  { 
    name: 'WooCommerce', 
    icon: 'shopping_bag', 
    logo: 'https://upload.wikimedia.org/wikipedia/commons/2/2a/WooCommerce_logo.svg', 
    logoSvg: '<svg class="w-5 h-5 fill-[#96588A]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm6.208-9.458h-2.18l-1.12 3.195H11.59l-.916-2.607-.917 2.607H6.257l-1.12-3.195H2.957v-1.168h2.645l.93 2.65 1.05-2.986h2.29l1.05 2.986 1.05-2.986h2.29l1.05 2.986.93-2.65h2.645v1.168h-.79z"/></svg>',
    trigger: 'New Order placed', 
    detail: 'Triggers instant order verification, bills pdf, and tracking details to client WhatsApp.' 
  },
  { name: 'Shopify Store', icon: 'storefront', logo: 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Shopify_logo_2018.svg', trigger: 'Cart Abandoned', detail: 'Tracks abandoned items and triggers recovery discounts to WhatsApp within 15 minutes.' },
  { name: 'Meta Ads', icon: 'ads_click', logo: 'https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg', trigger: 'Lead Form filled', detail: 'Pulls contact info from Facebook Leads and starts an auto-qualification chat sequence instantly.' },
  { 
    name: 'Razorpay Gateway', 
    icon: 'credit_card', 
    logo: 'https://upload.wikimedia.org/wikipedia/commons/b/b5/Razorpay_logo.svg', 
    logoSvg: '<svg class="w-5 h-5 fill-[#0F80EC]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 2H8L2 14h7l-2 8 15-12h-8L20 2z"/></svg>',
    trigger: 'Payment Received', 
    detail: 'Verifies transaction status and pushes interactive invoice receipt to customer on WhatsApp.' 
  },
  { 
    name: 'Google Forms', 
    icon: 'description', 
    logo: 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_Forms_2020_Logo.svg', 
    logoSvg: '<svg class="w-5 h-5 fill-[#7248B9]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 14H7v-2h10v2zm0-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>',
    trigger: 'Response submitted', 
    detail: 'Maps form entries, triggers confirmation, and books meeting dates automatically.' 
  },
  { name: 'Custom API', icon: 'settings_ethernet', logo: '', trigger: 'JSON Webhook', detail: 'Connects internal servers and ERP databases, sending custom variables in real time.' }
]

const rightApps = [
  { name: 'Google Sheets', icon: 'table_view', logo: 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Google_Sheets_2020_Logo.svg', action: 'Append Lead details', detail: 'Records user profiles, replies, and status tags into standard spreadsheet rows live.' },
  { 
    name: 'Zoho Forms', 
    icon: 'hub', 
    logo: 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Zoho_logo.svg', 
    logoSvg: '<svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="9" height="9" rx="1.5" fill="#E2231A"/><rect x="13" y="2" width="9" height="9" rx="1.5" fill="#0091CD"/><rect x="2" y="13" width="9" height="9" rx="1.5" fill="#F4B218"/><rect x="13" y="13" width="9" height="9" rx="1.5" fill="#4DB748"/></svg>',
    action: 'Sync Form responses', 
    detail: 'Connects forms data and routes immediate automated WhatsApp updates to respondents.' 
  },
  { 
    name: 'ActiveCampaign', 
    icon: 'campaign', 
    logo: 'https://upload.wikimedia.org/wikipedia/commons/1/1a/ActiveCampaign_logo.svg', 
    logoSvg: '<svg class="w-5 h-5 fill-[#356AFB]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2zm-1.5 5.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm4.5 9h-6v-1.5h1.5v-3.5H9v-1.5h3v5h1.5v1.5z"/></svg>',
    action: 'Sync Newsletter tag', 
    detail: 'Updates drip campaigns and email list status depending on WhatsApp conversation intent.' 
  },
  { name: 'HubSpot', icon: 'account_tree', logo: 'https://upload.wikimedia.org/wikipedia/commons/3/3f/HubSpot_Logo.svg', action: 'Update Pipeline Card', detail: 'Updates deals and routes pipeline updates as the user completes interactive chatbot steps.' },
  { name: 'Slack Workspace', icon: 'notifications_active', logo: 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Slack_icon_2019.svg', action: 'Notify Team inbox', detail: 'Alerts sales channels immediately when a hot lead requests manual human agent support.' },
  { name: 'Gmail Service', icon: 'alternate_email', logo: 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg', action: 'Send Email report', detail: 'Sends summary reports of templates clicked and daily campaign open rates.' }
]

// Curve mathematics for SVG
// Left coordinates: X = 250, Y = [57, 147, 237, 327, 417, 507]
// Center hub coordinates: X = 500, Y = 300
// Right coordinates: X = 750, Y = [57, 147, 237, 327, 417, 507]
const getLeftCurve = (idx) => {
  const yStart = 57 + idx * 90
  return `M 250 ${yStart} C 340 ${yStart}, 380 300, 440 300`
}

const getRightCurve = (idx) => {
  const yEnd = 57 + idx * 90
  return `M 560 300 C 620 300, 660 ${yEnd}, 750 ${yEnd}`
}
</script>

<style scoped>
.animate-pulse-slow {
  animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.15;
    transform: scale(1);
  }
  50% {
    opacity: 0.35;
    transform: scale(1.1);
  }
}
</style>
