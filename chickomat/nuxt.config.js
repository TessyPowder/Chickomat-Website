
export default {
  mode: 'spa',
  head: {
    title: "Chickomat Projekt Jugend Forscht",
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
			{ name: 'google-site-verification', content: '' },
      { hid: 'description', name: 'description', content: 'Informationen und Bilder zum Jugend Forscht Projekt Chickomat. Von Jonathan Treffler, Janik Atzenbeck, Christoph Greger.' },
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
			{ rel: "preload", href: "/fonts/POLYA.woff2", as: "font", type: "font/woff2", crossorigin: ""},
    ],
		script: [
				{
					src: "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js",
					type: "text/javascript"
				},
				{
					src: "https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js",
					type: "text/javascript"
				},
				{
					src: "https://cdn.jsdelivr.net/npm/mobile-detect@1.4.3/mobile-detect.min.js",
					type: "text/javascript"
				},
				{
					src: "https://cdn.jsdelivr.net/npm/sweetalert2@8",
					type: "text/javascript"
				},
				{
					src: "https://www.googletagmanager.com/gtag/js?id=",
					type: "text/javascript"
				},
		],
  },
  loading: { color: '#fff' },
	css: [
		"css/global.css"
	],
  plugins: [
  ],
	buildModules: [
    '@aceforth/nuxt-optimized-images',
  ],
  optimizedImages: {
    optimizeImages: true
  },
  modules: [
    '@nuxtjs/pwa',
  ],
  build: {
    extend (config, ctx) {
    }
  }
}
