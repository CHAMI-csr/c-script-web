<!-- Navigation Bar -->
<header class="sticky top-0 z-50 backdrop-blur-md bg-white/90 border-b border-slate-200/80 transition-all">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-18">
      
      <!-- Logo & Brand -->
      <a href="#hero" class="flex items-center gap-3 group focus:outline-none">
        <div class="w-10 h-10 rounded-xl overflow-hidden shadow-md shadow-indigo-500/10 border border-slate-200 group-hover:scale-105 transition-transform duration-200">
          <img src="assets/images/logo.png" alt="C-Script LocalHost Panel" class="w-full h-full object-cover">
        </div>
        <div class="flex flex-col">
          <div class="flex items-center gap-2">
            <span class="font-extrabold text-base tracking-tight text-slate-900 group-hover:text-indigo-600 transition-colors">
              C-Script
            </span>
            <span class="text-xs font-semibold text-slate-500 bg-slate-100 border border-slate-200/80 px-2 py-0.5 rounded-full">
              v1.1.5
            </span>
          </div>
          <span class="text-[11px] font-medium text-slate-500 tracking-tight -mt-0.5">
            LocalHost Panel
          </span>
        </div>
      </a>

      <!-- Desktop Nav Links -->
      <nav class="hidden md:flex items-center gap-1 lg:gap-2">
        <a href="#features" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors">
          Features
        </a>
        <a href="#video-showcase" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors flex items-center gap-1.5">
          <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
          Video Demo
        </a>
        <a href="#interactive-demo" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors">
          Interactive Tour
        </a>
        <a href="#architecture" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors">
          Architecture
        </a>
        <a href="#comparison" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors">
          Compare
        </a>
        <a href="#faq" class="px-3 py-2 text-sm font-semibold text-slate-600 hover:text-slate-900 hover:bg-slate-100/70 rounded-lg transition-colors">
          FAQ
        </a>
      </nav>

      <!-- Right CTAs -->
      <div class="hidden sm:flex items-center gap-3">
        <a href="https://github.com/CHAMI-csr/c-script-localhost-panel" target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center gap-2 px-3.5 py-2 text-xs font-semibold text-slate-700 bg-white hover:bg-slate-50 border border-slate-200 rounded-lg shadow-sm hover:border-slate-300 transition-all">
          <svg class="w-4 h-4 text-slate-800" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
          </svg>
          <span>GitHub</span>
        </a>

        <a href="#downloads" class="btn-primary-modern inline-flex items-center gap-2 px-4 py-2 text-xs font-bold rounded-lg transition-all">
          <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-13.051-1.849"/>
          </svg>
          <span>Download v1.1.5</span>
        </a>
      </div>

      <!-- Mobile Hamburger Button -->
      <div class="flex items-center sm:hidden">
        <button id="mobile-menu-btn" class="p-2 text-slate-600 hover:text-slate-900 rounded-lg hover:bg-slate-100 focus:outline-none" aria-label="Toggle navigation">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Dropdown Menu -->
  <div id="mobile-menu" class="hidden sm:hidden border-t border-slate-200 bg-white/95 px-4 pt-3 pb-6 space-y-2 shadow-xl">
    <a href="#features" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg">Features</a>
    <a href="#video-showcase" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg flex items-center gap-2">
      <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
      Video Showcase
    </a>
    <a href="#interactive-demo" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg">Interactive Tour</a>
    <a href="#architecture" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg">Architecture</a>
    <a href="#comparison" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg">Compare</a>
    <a href="#faq" class="block px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 rounded-lg">FAQ</a>
    <div class="pt-3 flex flex-col gap-2">
      <a href="#downloads" class="btn-primary-modern flex items-center justify-center gap-2 w-full py-2.5 text-sm font-bold rounded-lg text-center">
        Download for Windows (v1.1.5)
      </a>
      <a href="https://github.com/CHAMI-csr/c-script-localhost-panel" target="_blank" class="flex items-center justify-center gap-2 w-full py-2 text-sm font-medium text-slate-700 border border-slate-200 rounded-lg text-center hover:bg-slate-50">
        Star on GitHub
      </a>
    </div>
  </div>
</header>
