import tailwindcss from "@tailwindcss/vite";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: true },
  modules: ['@nuxtjs/seo'],
  css: ["./app/assets/css/main.css"],
  
  site: {
    url: 'https://wappcast.com',
    name: 'wappCAST',
    description: 'Official Meta WhatsApp API solutions for high-growth businesses. Secure, compliant, and powerful WhatsApp broadcasting and CRM.',
    defaultLocale: 'en'
  },

  sitemap: {
    strictNuxtContentPaths: true
  },

  robots: {
    disallow: ['/admin', '/api']
  },

  app: {
    head: {
      title: 'wappCAST | Official Meta WhatsApp API Solutions',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' }
      ],
      script: [
        {
          children: `
            (function() {
              const theme = localStorage.getItem('theme') || 'light';
              if (theme === 'dark') {
                document.documentElement.classList.add('dark');
              } else {
                document.documentElement.classList.remove('dark');
              }
            })();
          `,
          type: 'text/javascript'
        }
      ],
      link: [
        { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
        { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: '' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap' },
        { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap' }
      ]
    }
  },
  vite: {
    plugins: [
      tailwindcss()
    ]
  }
})
