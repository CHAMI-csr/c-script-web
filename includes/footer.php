<!-- Footer Section -->
<footer class="bg-white border-t border-slate-200 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-slate-200/80">
      
      <!-- Brand & Mission Column -->
      <div class="md:col-span-5 flex flex-col justify-between">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <div class="w-9 h-9 rounded-xl overflow-hidden shadow-sm border border-slate-200">
              <img src="assets/images/logo.png" alt="C-Script LocalHost Panel" class="w-full h-full object-cover">
            </div>
            <span class="font-extrabold text-base tracking-tight text-slate-900">
              C-Script LocalHost Panel
            </span>
            <span class="text-[11px] font-semibold text-slate-500 bg-slate-100 border border-slate-200 px-2 py-0.5 rounded-full">
              v<?php echo htmlspecialchars($appConfig['version']); ?>
            </span>
          </div>

          <p class="text-sm text-slate-600 leading-relaxed max-w-sm mb-6">
            A fast, lightweight, all-in-one local development environment for Windows developers. 
            Automated NGINX, multi-version PHP, MariaDB, and local wildcard SSL without WSL2 or Docker bloat.
          </p>
        </div>

        <div class="text-xs text-slate-500">
          Designed &amp; developed by <a href="https://github.com/CHAMI-csr" target="_blank" class="font-semibold text-slate-800 hover:text-indigo-600 transition-colors">Chamika Sandeepa</a>.
        </div>
      </div>

      <!-- Quick Navigation -->
      <div class="md:col-span-2 col-span-6">
        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Product</h4>
        <ul class="space-y-2.5 text-sm text-slate-600">
          <li><a href="#features" class="hover:text-slate-900 transition-colors">Features</a></li>
          <li><a href="#video-showcase" class="hover:text-slate-900 transition-colors flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Video Demo</a></li>
          <li><a href="#interactive-demo" class="hover:text-slate-900 transition-colors">Interactive Tour</a></li>
          <li><a href="#architecture" class="hover:text-slate-900 transition-colors">Architecture</a></li>
          <li><a href="#comparison" class="hover:text-slate-900 transition-colors">Comparison</a></li>
        </ul>
      </div>

      <!-- Operating Systems -->
      <div class="md:col-span-2 col-span-6">
        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Platforms</h4>
        <ul class="space-y-2.5 text-sm text-slate-600">
          <li>
            <a href="#downloads" class="text-indigo-600 font-semibold hover:underline flex items-center gap-1">
              <span>Windows (x64)</span>
              <span class="text-[10px] bg-emerald-100 text-emerald-800 px-1.5 py-0.2 rounded font-bold">Live</span>
            </a>
          </li>
          <li>
            <button class="btn-coming-soon text-slate-500 hover:text-slate-800 transition-colors text-left flex items-center gap-1" data-os="macOS">
              <span>macOS</span>
              <span class="text-[10px] bg-purple-100 text-purple-800 px-1.5 py-0.2 rounded font-semibold">Soon</span>
            </button>
          </li>
          <li>
            <button class="btn-coming-soon text-slate-500 hover:text-slate-800 transition-colors text-left flex items-center gap-1" data-os="Linux">
              <span>Linux (.deb)</span>
              <span class="text-[10px] bg-amber-100 text-amber-900 px-1.5 py-0.2 rounded font-semibold">Soon</span>
            </button>
          </li>
        </ul>
      </div>

      <!-- Community & Resources -->
      <div class="md:col-span-3">
        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-4">Community</h4>
        <ul class="space-y-2.5 text-sm text-slate-600 mb-6">
          <li>
            <a href="https://github.com/CHAMI-csr/c-script-localhost-panel" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors flex items-center gap-2">
              <svg class="w-4 h-4 text-slate-700" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
              </svg>
              <span>GitHub Repository</span>
            </a>
          </li>
          <li>
            <a href="https://github.com/CHAMI-csr/c-script-localhost-panel/issues" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">
              Issue Tracker &amp; Feedback
            </a>
          </li>
          <li>
            <a href="https://github.com/CHAMI-csr/c-script-localhost-panel/releases" target="_blank" rel="noopener noreferrer" class="hover:text-slate-900 transition-colors">
              Release Notes (v<?php echo htmlspecialchars($appConfig['version']); ?>)
            </a>
          </li>
        </ul>

        <div class="p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-500">
          Protected under <strong>Proprietary Terms</strong>. Free to use for development. Unauthorized copying, modification, or redistribution is strictly prohibited.
        </div>
      </div>

    </div>

    <!-- Copyright & Disclaimer -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
      <div>
        &copy; <?php echo date('Y'); ?> C-Script LocalHost Panel. All rights reserved.
      </div>
      <div class="flex items-center gap-6">
        <a href="#hero" class="hover:text-slate-800 transition-colors">Back to top ↑</a>
      </div>
    </div>

  </div>
</footer>

<!-- Global Toast Notification Container -->
<div id="toast-notification"></div>
