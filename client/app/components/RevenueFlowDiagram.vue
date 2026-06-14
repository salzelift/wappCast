<template>
  <section class="py-24 relative overflow-hidden bg-surface-container-lowest/30 dark:bg-background/20 border-y border-border-subtle/40">
    <!-- Grid Background -->
    <div class="absolute inset-0 bg-grid-pattern opacity-60 pointer-events-none"></div>
    
    <!-- Background Glows -->
    <div class="absolute top-1/4 -left-1/4 w-96 h-96 bg-primary/10 blur-[100px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-1/4 -right-1/4 w-96 h-96 bg-secondary/10 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-container-max mx-auto px-margin-mobile relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16 max-w-3xl mx-auto">
        <span class="inline-block bg-primary/10 text-on-primary-container dark:text-primary px-4 py-1.5 rounded-full font-label-sm uppercase tracking-wider mb-4 border border-primary/20">
          Visualizing the Conversion Engine
        </span>
        <h2 class="text-headline-lg font-headline-lg mb-6 leading-tight">
          Multiply Your Revenue with <span class="text-primary italic">Automated Conversions</span> ⚡
        </h2>
        <p class="text-on-surface-variant text-body-lg">
          See how leads from any channel flow into wappCAST, qualify themselves via AI chatbots, and auto-nurture until the deal is won. Click any stage to explore details.
        </p>
      </div>

      <!-- Flow Diagram Container -->
      <div class="glass-card rounded-3xl p-6 md:p-8 border border-border-subtle relative overflow-hidden md:block hidden">
        <!-- SVG Canvas (Coordinate system 0 0 1100 950) -->
        <svg class="w-full h-auto aspect-[1100/950] select-none" viewBox="0 0 1100 950" xmlns="http://www.w3.org/2000/svg">
          <!-- Definitions for gradients -->
          <defs>
            <linearGradient id="rainbow-grad" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" stop-color="#4edea3" />
              <stop offset="50%" stop-color="#10b981" />
              <stop offset="100%" stop-color="#059669" />
            </linearGradient>
            <linearGradient id="split-won" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#10b981" />
              <stop offset="100%" stop-color="#00bd85" />
            </linearGradient>
            <linearGradient id="split-lost" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#ef4444" />
              <stop offset="100%" stop-color="#b91c1c" />
            </linearGradient>
          </defs>

          <!-- Top Channels to Lead Capture Funnel (Curved bezier connection lines) -->
          <path d="M 130 100 C 130 130, 550 120, 550 160" stroke="var(--color-primary)" stroke-width="2.5" fill="none" opacity="0.6" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 350 100 C 350 130, 550 120, 550 160" stroke="var(--color-primary)" stroke-width="2.5" fill="none" opacity="0.6" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 570 100 L 570 160" stroke="var(--color-primary)" stroke-width="2.5" fill="none" opacity="0.6" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 790 100 C 790 130, 590 120, 590 160" stroke="var(--color-primary)" stroke-width="2.5" fill="none" opacity="0.6" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 1010 100 C 1010 130, 590 120, 590 160" stroke="var(--color-primary)" stroke-width="2.5" fill="none" opacity="0.6" stroke-dasharray="6,4" class="flow-line" />

          <!-- Funnel to wappCAST Automation -->
          <path d="M 570 220 L 570 290" stroke="url(#rainbow-grad)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="flow-line-fast" />

          <!-- wappCAST Hub to Channels (Branch Out) -->
          <path d="M 570 370 C 570 410, 130 400, 130 440" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 570 370 C 570 410, 340 400, 340 440" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 570 370 C 570 410, 550 410, 550 440" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 570 370 C 570 410, 760 400, 760 440" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 570 370 C 570 410, 970 400, 970 440" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />

          <!-- Branch Out back to Auto Qualify Lead (Branch In) -->
          <path d="M 130 530 C 130 570, 550 560, 550 600" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 340 530 C 340 570, 550 560, 550 600" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 550 530 L 550 600" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 760 530 C 760 570, 550 560, 550 600" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 970 530 C 970 570, 550 560, 550 600" stroke="var(--color-primary)" stroke-width="2" fill="none" stroke-dasharray="6,4" class="flow-line" />

          <!-- Qualify to Auto Nurture -->
          <path d="M 550 650 L 550 710" stroke="url(#rainbow-grad)" stroke-width="3" fill="none" stroke-dasharray="8,4" class="flow-line-fast" />

          <!-- Nurture Split (Won / Long Nurture) -->
          <path d="M 550 800 C 550 830, 350 830, 350 860" stroke="url(#split-won)" stroke-width="3" fill="none" stroke-dasharray="6,4" class="flow-line" />
          <path d="M 550 800 C 550 830, 750 830, 750 860" stroke="url(#split-lost)" stroke-width="2.5" fill="none" stroke-dasharray="6,4" class="flow-line" />

          <!-- ROW 1: CHANNELS (Y = 30) -->
          <foreignObject x="50" y="30" width="160" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-2 flex items-center gap-2 border border-border-subtle shadow-sm hover:scale-105 transition-all cursor-pointer h-full" @click="selectNode(channels[0].name, channels[0].desc)">
              <div class="w-8 h-8 rounded-full flex items-center justify-center text-white shrink-0" :style="{ backgroundColor: channels[0].color }">
                <span class="material-symbols-outlined text-[16px]">{{ channels[0].icon }}</span>
              </div>
              <span class="font-bold text-[10px] uppercase tracking-wider text-on-surface leading-tight">{{ channels[0].name }}</span>
            </div>
          </foreignObject>

          <foreignObject x="270" y="30" width="160" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-2 flex items-center gap-2 border border-border-subtle shadow-sm hover:scale-105 transition-all cursor-pointer h-full" @click="selectNode(channels[1].name, channels[1].desc)">
              <div class="w-8 h-8 rounded-full flex items-center justify-center text-white shrink-0" :style="{ backgroundColor: channels[1].color }">
                <span class="material-symbols-outlined text-[16px]">{{ channels[1].icon }}</span>
              </div>
              <span class="font-bold text-[10px] uppercase tracking-wider text-on-surface leading-tight">{{ channels[1].name }}</span>
            </div>
          </foreignObject>

          <foreignObject x="490" y="30" width="160" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-2 flex items-center gap-2 border border-border-subtle shadow-sm hover:scale-105 transition-all cursor-pointer h-full" @click="selectNode(channels[2].name, channels[2].desc)">
              <div class="w-8 h-8 rounded-full flex items-center justify-center text-white shrink-0" :style="{ backgroundColor: channels[2].color }">
                <span class="material-symbols-outlined text-[16px]">{{ channels[2].icon }}</span>
              </div>
              <span class="font-bold text-[10px] uppercase tracking-wider text-on-surface leading-tight">{{ channels[2].name }}</span>
            </div>
          </foreignObject>

          <foreignObject x="710" y="30" width="160" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-2 flex items-center gap-2 border border-border-subtle shadow-sm hover:scale-105 transition-all cursor-pointer h-full" @click="selectNode(channels[3].name, channels[3].desc)">
              <div class="w-8 h-8 rounded-full flex items-center justify-center text-white shrink-0" :style="{ backgroundColor: channels[3].color }">
                <span class="material-symbols-outlined text-[16px]">{{ channels[3].icon }}</span>
              </div>
              <span class="font-bold text-[10px] uppercase tracking-wider text-on-surface leading-tight">{{ channels[3].name }}</span>
            </div>
          </foreignObject>

          <foreignObject x="930" y="30" width="160" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-2 flex items-center gap-2 border border-border-subtle shadow-sm hover:scale-105 transition-all cursor-pointer h-full" @click="selectNode(channels[4].name, channels[4].desc)">
              <div class="w-8 h-8 rounded-full flex items-center justify-center text-white shrink-0" :style="{ backgroundColor: channels[4].color }">
                <span class="material-symbols-outlined text-[16px]">{{ channels[4].icon }}</span>
              </div>
              <span class="font-bold text-[10px] uppercase tracking-wider text-on-surface leading-tight">{{ channels[4].name }}</span>
            </div>
          </foreignObject>

          <!-- ROW 2: FUNNEL (Y = 160) -->
          <foreignObject x="410" y="160" width="320" height="60">
            <div xmlns="http://www.w3.org/1999/xhtml" class="bg-gradient-to-r from-primary/30 to-secondary/30 border border-primary/40 text-on-surface rounded-lg flex items-center justify-center font-bold tracking-widest shadow-lg hover:scale-105 transition-transform cursor-pointer h-full text-xs"
                 style="clip-path: polygon(5% 0%, 95% 0%, 80% 100%, 20% 100%)"
                 @click="selectNode('Lead Capture', 'Instantly pulls customer numbers and tags from incoming ad clicks, forms, or messages. No drop-offs.')">
              <span class="flex items-center gap-2"><span class="material-symbols-outlined text-primary">filter_alt</span> LEAD CAPTURE FUNNEL</span>
            </div>
          </foreignObject>

          <!-- ROW 3: wappCAST CORE ENGINE (Y = 290) -->
          <foreignObject x="430" y="290" width="280" height="80">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card border-2 border-primary rounded-2xl px-6 py-3 flex items-center gap-3 shadow-xl hover:scale-105 transition-all bg-background/95 cursor-pointer h-full"
                 @click="selectNode('wappCAST Engine', 'The secure Meta Cloud API automation backend. Validates inputs, manages active streams, and scales template broadcasts without getting your number banned.')">
              <img src="/wappCAST-logo.png" alt="wappCAST" class="h-7 w-auto dark:brightness-100 brightness-0 transition-all shrink-0" />
              <div class="text-left leading-tight">
                <h4 class="font-extrabold text-xs uppercase tracking-wide text-primary">wappCAST API</h4>
                <p class="text-[9px] text-on-surface-variant font-semibold">Core Cloud Automation</p>
              </div>
            </div>
          </foreignObject>

          <!-- ROW 4: BRANCHED MODULES (Y = 440) -->
          <foreignObject x="40" y="440" width="180" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-3 flex flex-col items-center justify-center gap-1 border border-border-subtle shadow-md hover:border-primary/40 hover:scale-105 transition-all cursor-pointer h-full text-center"
                 @click="selectNode(branches[0].name, branches[0].desc)">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-0.5">
                <span class="material-symbols-outlined text-[18px]">{{ branches[0].icon }}</span>
              </div>
              <h4 class="font-bold text-[10px] text-on-surface leading-none">{{ branches[0].name }}</h4>
              <p class="text-[8px] text-on-surface-variant leading-tight mt-0.5">{{ branches[0].sub }}</p>
            </div>
          </foreignObject>

          <foreignObject x="250" y="440" width="180" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-3 flex flex-col items-center justify-center gap-1 border border-border-subtle shadow-md hover:border-primary/40 hover:scale-105 transition-all cursor-pointer h-full text-center"
                 @click="selectNode(branches[1].name, branches[1].desc)">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-0.5">
                <span class="material-symbols-outlined text-[18px]">{{ branches[1].icon }}</span>
              </div>
              <h4 class="font-bold text-[10px] text-on-surface leading-none">{{ branches[1].name }}</h4>
              <p class="text-[8px] text-on-surface-variant leading-tight mt-0.5">{{ branches[1].sub }}</p>
            </div>
          </foreignObject>

          <foreignObject x="460" y="440" width="180" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-3 flex flex-col items-center justify-center gap-1 border border-border-subtle shadow-md hover:border-primary/40 hover:scale-105 transition-all cursor-pointer h-full text-center"
                 @click="selectNode(branches[2].name, branches[2].desc)">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-0.5">
                <span class="material-symbols-outlined text-[18px]">{{ branches[2].icon }}</span>
              </div>
              <h4 class="font-bold text-[10px] text-on-surface leading-none">{{ branches[2].name }}</h4>
              <p class="text-[8px] text-on-surface-variant leading-tight mt-0.5">{{ branches[2].sub }}</p>
            </div>
          </foreignObject>

          <foreignObject x="670" y="440" width="180" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-3 flex flex-col items-center justify-center gap-1 border border-border-subtle shadow-md hover:border-primary/40 hover:scale-105 transition-all cursor-pointer h-full text-center"
                 @click="selectNode(branches[3].name, branches[3].desc)">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-0.5">
                <span class="material-symbols-outlined text-[18px]">{{ branches[3].icon }}</span>
              </div>
              <h4 class="font-bold text-[10px] text-on-surface leading-none">{{ branches[3].name }}</h4>
              <p class="text-[8px] text-on-surface-variant leading-tight mt-0.5">{{ branches[3].sub }}</p>
            </div>
          </foreignObject>

          <foreignObject x="880" y="440" width="180" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card rounded-xl p-3 flex flex-col items-center justify-center gap-1 border border-border-subtle shadow-md hover:border-primary/40 hover:scale-105 transition-all cursor-pointer h-full text-center"
                 @click="selectNode(branches[4].name, branches[4].desc)">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-0.5">
                <span class="material-symbols-outlined text-[18px]">{{ branches[4].icon }}</span>
              </div>
              <h4 class="font-bold text-[10px] text-on-surface leading-none">{{ branches[4].name }}</h4>
              <p class="text-[8px] text-on-surface-variant leading-tight mt-0.5">{{ branches[4].sub }}</p>
            </div>
          </foreignObject>

          <!-- ROW 5: AUTO QUALIFY (Y = 600) -->
          <foreignObject x="420" y="600" width="260" height="50">
            <div xmlns="http://www.w3.org/1999/xhtml" class="w-full h-full bg-gradient-to-r from-secondary/30 to-primary/30 border border-secondary/30 text-on-surface rounded-lg flex items-center justify-center font-bold text-[10px] uppercase tracking-widest shadow-md hover:scale-105 transition-transform cursor-pointer"
                 style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%)"
                 @click="selectNode('Auto-Qualify Lead', 'The chatbot checks intent, fetches previous CRM data, asks qualification questions, and tags hot leads instantly so your sales reps only talk to warm buyers.')">
              <span class="flex items-center gap-2"><span class="material-symbols-outlined text-secondary text-[16px]">verified</span> AUTO QUALIFY LEAD</span>
            </div>
          </foreignObject>

          <!-- ROW 6: AUTO NURTURE DAYS (Y = 710) -->
          <foreignObject x="370" y="710" width="360" height="90">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card border border-border-subtle rounded-2xl p-3 flex flex-col items-center justify-center gap-2 shadow-md hover:border-primary/30 transition-colors cursor-pointer h-full"
                 @click="selectNode('Auto-Nurture Campaign', 'If they do not buy immediately, wappCAST drops them into automated WhatsApp sequences over 7 days. These have a 98% open rate, keeping your brand top-of-mind.')">
              <span class="text-[9px] uppercase tracking-wider text-on-surface-variant font-bold leading-none">Auto Nurture Sequence</span>
              <div class="flex items-center gap-3">
                <div v-for="day in nurtureDays" :key="day" class="flex flex-col items-center gap-0.5">
                  <div class="w-7 h-7 rounded-full bg-secondary/10 text-secondary border border-secondary/20 flex items-center justify-center text-[9px] font-bold">
                    {{ day.split(' ')[1] }}
                  </div>
                  <span class="text-[7px] text-on-surface-variant/80 uppercase font-bold leading-none">Day</span>
                </div>
              </div>
            </div>
          </foreignObject>

          <!-- ROW 7: THE SPLIT RESULT OUTCOMES (Y = 860) -->
          <foreignObject x="250" y="860" width="200" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card border border-primary/30 bg-primary/5 rounded-xl p-2 flex items-center gap-2.5 shadow-lg hover:scale-105 transition-transform cursor-pointer h-full"
                 @click="selectNode('Lead Won', 'Direct webhook pushes the data to Google Sheets, Zoho CRM, or Slack. The deal is closed automatically or passed to your closing team.')">
              <div class="w-8 h-8 rounded-full bg-primary/20 text-primary flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[16px]">thumb_up</span>
              </div>
              <div class="text-left leading-tight">
                <h4 class="font-extrabold text-[10px] uppercase tracking-wide text-primary">Positive Result</h4>
                <p class="text-[8px] text-on-surface-variant font-medium">Lead Won &amp; CRM Sync</p>
              </div>
            </div>
          </foreignObject>

          <foreignObject x="650" y="860" width="200" height="70">
            <div xmlns="http://www.w3.org/1999/xhtml" class="glass-card border border-error/30 bg-error/5 rounded-xl p-2 flex items-center gap-2.5 shadow-lg hover:scale-105 transition-transform cursor-pointer h-full"
                 @click="selectNode('Long-term Retargeting', 'Leads that do not convert are added to low-frequency retargeting broadcast lists (e.g. monthly festival offers) to maximize ultimate ROI.')">
              <div class="w-8 h-8 rounded-full bg-error/25 text-error-red flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[16px]">sync</span>
              </div>
              <div class="text-left leading-tight">
                <h4 class="font-extrabold text-[10px] uppercase tracking-wide text-error-red">Negative Result</h4>
                <p class="text-[8px] text-on-surface-variant font-medium">Long-term Nurturing</p>
              </div>
            </div>
          </foreignObject>
        </svg>

        <!-- Floating Explanation Modal inside the card -->
        <div v-if="explanation" class="absolute bottom-6 left-6 right-6 glass-card border-primary/30 rounded-2xl p-5 shadow-2xl z-20 flex justify-between items-start animate-fade-in bg-surface/95 backdrop-blur-md">
          <div class="space-y-1">
            <h4 class="font-extrabold text-sm text-primary uppercase tracking-wide flex items-center gap-2">
              <span class="material-symbols-outlined text-[16px]">info</span> {{ explanation.title }}
            </h4>
            <p class="text-xs text-on-surface leading-relaxed max-w-4xl">{{ explanation.text }}</p>
          </div>
          <button @click="explanation = null" class="text-on-surface-variant hover:text-on-surface transition-colors cursor-pointer focus:outline-none">
            <span class="material-symbols-outlined text-[18px]">close</span>
          </button>
        </div>
      </div>

      <!-- Mobile Fallback: Flow list -->
      <div class="md:hidden flex flex-col gap-6 relative z-10">
        <div v-for="(step, idx) in mobileSteps" :key="step.title" class="glass-card p-6 rounded-2xl border border-border-subtle relative">
          <!-- Step indicator -->
          <div class="absolute -top-3 left-6 bg-primary text-on-primary-container px-3 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider">
            Stage 0{{ idx + 1 }}
          </div>
          <div class="flex items-center gap-3 mb-3 mt-1">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
              <span class="material-symbols-outlined">{{ step.icon }}</span>
            </div>
            <h3 class="font-bold text-body-lg text-on-surface">{{ step.title }}</h3>
          </div>
          <p class="text-on-surface-variant text-body-md leading-relaxed">{{ step.desc }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const explanation = ref({
  title: 'Lead Capturing Engine',
  text: 'Click on any block or card in the diagram to inspect how wappCAST captures, automation-qualifies, and nurtures your prospects into paying customers.'
})

const selectNode = (title, text) => {
  explanation.value = { title, text }
}

const channels = [
  { name: 'Meta Ads', icon: 'ads_click', color: '#1877f2', desc: 'Direct-to-WhatsApp Click Ads. Users click an ad on Facebook/Instagram and instantly open a chat with prefilled text.' },
  { name: 'Instagram DM', icon: 'share', color: '#e1306c', desc: 'Auto-reply to Instagram comments and DMs, encouraging users to get coupon codes directly sent to their WhatsApp.' },
  { name: 'Web Widget', icon: 'chat', color: '#f57c00', desc: 'Sleek chat bubble widget on your site. Captures phone numbers and names, and bridges the user straight into WhatsApp.' },
  { name: 'WhatsApp QR', icon: 'qr_code', color: '#25d366', desc: 'Place physical QR codes in retail outlets, packaging, or brochures. Scanning starts a conversation instantly.' },
  { name: 'Email Links', icon: 'mail', color: '#d32f2f', desc: 'Add CTA buttons inside your marketing emails that route readers to a customized WhatsApp flow in one tap.' }
]

const branches = [
  { name: 'AI Assistant', sub: '24/7 Agent Replies', icon: 'smart_toy', desc: 'Leverage LLM integrations that read query intent, query your databases, and answer questions like a human sales assistant.' },
  { name: 'Shared Team Inbox', sub: 'Multi-Agent Routing', icon: 'group', desc: 'Route chats to sales or support agents automatically. Supports custom roles, tags, and conversation ownership.' },
  { name: 'No-Code Chatbots', sub: 'Interactive Flows', icon: 'alt_route', desc: 'Drag-and-drop conversational paths. Present users with list menus, buttons, and capture variables dynamically.' },
  { name: 'Broadcasting', sub: 'Unlimited Mass Campaigns', icon: 'campaign', desc: 'Broadcast mass campaigns to unlimited contact list. Bypasses filters using official APIs, maintaining a 98% open rate.' },
  { name: 'API Integrations', sub: 'Real-Time Sync', icon: 'hub', desc: 'Trigger WhatsApp notifications automatically on order creation, cart abandonment, or invoice payments via REST APIs.' }
]

const nurtureDays = ['Day 01', 'Day 03', 'Day 05', 'Day 07']

const mobileSteps = [
  { title: 'Multi-Channel Entry', icon: 'input', desc: 'Leads from Facebook/Instagram Ads, Web Chat widgets, physical packaging QR codes, or emails trigger the flow.' },
  { title: 'wappCAST Central Processing', icon: 'memory', desc: 'Official Meta Cloud API captures the numbers and starts a chat session instantly, mapping user data into the system.' },
  { title: 'Interactive Chatbot & AI Assistance', icon: 'smart_toy', desc: 'Automated triggers offer interactive menu buttons or engage with LLM AI models to answer immediate questions.' },
  { title: 'Smart Nurture Drips (Day 1-7)', icon: 'schedule', desc: 'Prospects who do not complete the purchase are sent automated follow-ups over the course of a week to maximize conversion rates.' },
  { title: 'Final CRM Sync & Result Routing', icon: 'sync_alt', desc: 'Converted leads are pushed to sheets or CRMs, and inactive leads are filed under long-term retargeting lists.' }
]
</script>

<style scoped>
.flow-line {
  stroke-dasharray: 8, 4;
  animation: flow-dash 15s linear infinite;
}

.flow-line-fast {
  stroke-dasharray: 8, 4;
  animation: flow-dash 6s linear infinite;
}

@keyframes flow-dash {
  to {
    stroke-dashoffset: -1000;
  }
}

.animate-fade-in {
  animation: fadeIn 0.3s ease-out forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Light Mode Overrides for logos */
.light-logo {
  filter: brightness(0);
}
.dark .light-logo {
  filter: brightness(1);
}
</style>
