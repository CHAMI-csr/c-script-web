<!-- Downloads & OS Availability Hub -->
<section id="downloads" class="py-24 bg-white border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-200 text-xs font-bold text-indigo-700 uppercase tracking-wider mb-4">
        <span>Get C-Script LocalHost Panel</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        Download for Your Operating System.
      </h2>
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
        Free to download and use. Copyright &copy; 2026 C.S. Ranasinha. All Rights Reserved. Windows is available for instant download today. 
        macOS and Linux builds are in active development.
      </p>
    </div>

    <!-- 3-Platform Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">

      <!-- Platform 1: Windows (Active / Available Now) -->
      <div class="card-saas p-8 border-2 border-indigo-500/80 shadow-2xl relative flex flex-col justify-between rounded-2xl bg-gradient-to-b from-indigo-50/20 via-white to-white">
        
        <!-- Top Popular Pill -->
        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-3.5 py-1 rounded-full bg-indigo-600 text-white text-[11px] font-bold tracking-wide uppercase shadow-md">
          Recommended for Windows
        </div>

        <div>
          <!-- Icon & Header -->
          <div class="flex items-center justify-between mb-6">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 shadow-sm">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-13.051-1.849"/>
              </svg>
            </div>
            <div class="text-right">
              <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                <span>Active v<?php echo htmlspecialchars($appConfig['version']); ?></span>
              </span>
              <div class="text-[11px] text-slate-500 mt-1">Windows 10 / 11 (64-bit)</div>
            </div>
          </div>

          <h3 class="text-2xl font-bold text-slate-900 mb-2">Windows</h3>
          <p class="text-slate-600 text-xs leading-relaxed mb-6">
            Complete bundled installer with NGINX, multi-PHP engines, MariaDB, and local SSL.
          </p>

          <div class="space-y-2.5 mb-8">
            <div class="flex items-center gap-2 text-xs text-slate-700">
              <span class="text-emerald-500 font-bold">✓</span> Windows 10 (1903+) &amp; Windows 11
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-700">
              <span class="text-emerald-500 font-bold">✓</span> Zero UAC elevation required
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-700">
              <span class="text-emerald-500 font-bold">✓</span> Pre-bundled offline runtime (~184 MB)
            </div>
            <div class="flex items-center gap-2 text-xs text-indigo-700 font-medium">
              <span class="text-indigo-600 font-bold">✨</span> New in v<?php echo htmlspecialchars($appConfig['version']); ?>: Dropdown safeguards &amp; App Update changelog
            </div>
          </div>
        </div>

        <div>
          <!-- Direct Download CTA -->
          <a href="https://github.com/CHAMI-csr/c-script-localhost-panel/releases/download/v<?php echo htmlspecialchars($appConfig['version']); ?>/C-Script-LocalHost-Panel-Setup-<?php echo htmlspecialchars($appConfig['version']); ?>.exe"
             class="btn-primary-modern flex items-center justify-center gap-2.5 w-full py-3.5 rounded-xl text-xs font-bold text-center shadow-lg hover:shadow-xl mb-3 transition-all"
             onclick="showToast('Starting download of C-Script LocalHost Panel Setup <?php echo htmlspecialchars($appConfig['version']); ?>.exe...', 'success')">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            <span>Download Setup (.exe) — 184 MB</span>
          </a>

          <!-- Portable Download Link -->
          <div class="text-center">
            <a href="https://github.com/CHAMI-csr/c-script-localhost-panel/releases/download/v<?php echo htmlspecialchars($appConfig['version']); ?>/C-Script-LocalHost-Panel-<?php echo htmlspecialchars($appConfig['version']); ?>.exe"
               class="text-[11px] font-semibold text-indigo-600 hover:text-indigo-800 transition-colors"
               onclick="showToast('Starting download of C-Script Portable Executable v<?php echo htmlspecialchars($appConfig['version']); ?>...', 'success')">
              Or download Portable Standalone (.exe) →
            </a>
          </div>
        </div>

      </div>

      <!-- Platform 2: macOS (Coming Soon) -->
      <div class="card-saas p-8 border border-slate-200 relative flex flex-col justify-between rounded-2xl bg-white hover:border-purple-300 transition-colors">
        
        <div>
          <!-- Icon & Header -->
          <div class="flex items-center justify-between mb-6">
            <div class="w-14 h-14 rounded-2xl bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-700 shadow-sm">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.37c.62-.75 1.04-1.8 0.92-2.85-.9.04-2 .6-2.65 1.35-.58.67-.99 1.74-.88 2.76 1.01.08 2-.51 2.61-1.26z"/>
              </svg>
            </div>
            <div class="text-right">
              <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-purple-100 text-purple-900">
                <span>⏳ Coming Soon</span>
              </span>
              <div class="text-[11px] text-slate-500 mt-1">Apple Silicon &amp; Intel</div>
            </div>
          </div>

          <h3 class="text-2xl font-bold text-slate-900 mb-2">macOS</h3>
          <p class="text-slate-600 text-xs leading-relaxed mb-6">
            Native universal binary optimized for Apple Silicon (M1/M2/M3/M4) with Homebrew integration.
          </p>

          <div class="space-y-2.5 mb-8">
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-purple-600 font-bold">•</span> macOS Sonoma &amp; Sequoia ready
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-purple-600 font-bold">•</span> Native Apple Menu Bar tray icon
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-purple-600 font-bold">•</span> Native Dnsmasq for *.test resolution
            </div>
          </div>
        </div>

        <div>
          <button class="btn-coming-soon flex items-center justify-center gap-2 w-full py-3.5 rounded-xl text-xs font-bold text-purple-900 bg-purple-50 hover:bg-purple-100 border border-purple-200 transition-colors"
                  data-os="macOS">
            <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
            <span>Notify Me for macOS</span>
          </button>
          <div class="text-[11px] text-slate-400 text-center mt-2.5">
            Target Release: Q4 2026
          </div>
        </div>

      </div>

      <!-- Platform 3: Linux (Coming Soon) -->
      <div class="card-saas p-8 border border-slate-200 relative flex flex-col justify-between rounded-2xl bg-white hover:border-amber-300 transition-colors">
        
        <div>
          <!-- Icon & Header -->
          <div class="flex items-center justify-between mb-6">
            <div class="w-14 h-14 rounded-2xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-800 shadow-sm">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.002 0c-2.46 0-4.135 1.547-4.135 3.824 0 .97.356 2.378.718 3.551-.157.086-.312.18-.465.281-1.088.723-1.789 1.83-2.072 3.293-.058.298-.088.608-.088.922 0 1.258.468 2.404 1.242 3.275-.023.18-.035.363-.035.549 0 2.502 2.128 4.531 4.75 4.531.066 0 .131-.002.197-.006 1.077 1.63 2.923 2.78 5.093 3.486 1.336.435 2.851.694 4.417.694.464 0 .921-.023 1.371-.067-1.127-.797-2.091-1.802-2.824-2.951 1.706-.525 3.125-1.56 4.02-2.934.331-.508.572-1.07.707-1.666.07-.31.107-.633.107-.965 0-1.428-.62-2.71-1.609-3.585-.143-.127-.294-.244-.453-.35.342-1.164.678-2.553.678-3.504C23.674 1.547 21.999 0 19.539 0c-1.391 0-2.443.498-3.768 1.488C14.446.498 13.393 0 12.002 0z"/>
              </svg>
            </div>
            <div class="text-right">
              <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-950">
                <span>⏳ Coming Soon</span>
              </span>
              <div class="text-[11px] text-slate-500 mt-1">.deb &amp; AppImage</div>
            </div>
          </div>

          <h3 class="text-2xl font-bold text-slate-900 mb-2">Linux</h3>
          <p class="text-slate-600 text-xs leading-relaxed mb-6">
            Lightweight build with systemd integration for Ubuntu, Debian, Fedora, and Arch Linux.
          </p>

          <div class="space-y-2.5 mb-8">
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-amber-700 font-bold">•</span> AppImage &amp; .deb distribution
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-amber-700 font-bold">•</span> Systemd user-level service control
            </div>
            <div class="flex items-center gap-2 text-xs text-slate-600">
              <span class="text-amber-700 font-bold">•</span> CLI companion tool (<code class="font-mono text-[11px]">c-script</code>)
            </div>
          </div>
        </div>

        <div>
          <button class="btn-coming-soon flex items-center justify-center gap-2 w-full py-3.5 rounded-xl text-xs font-bold text-amber-950 bg-amber-50 hover:bg-amber-100 border border-amber-200 transition-colors"
                  data-os="Linux">
            <svg class="w-4 h-4 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
            <span>Notify Me for Linux</span>
          </button>
          <div class="text-[11px] text-slate-400 text-center mt-2.5">
            Target Release: Q4 2026
          </div>
        </div>

      </div>

    </div>

    <!-- GitHub Open Source Callout -->
    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8 max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-6">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-white border border-slate-200 flex items-center justify-center shadow-sm shrink-0">
          <svg class="w-6 h-6 text-slate-900" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
          </svg>
        </div>
        <div>
          <h4 class="text-sm font-bold text-slate-900">Official GitHub Repository</h4>
          <p class="text-xs text-slate-500 mt-0.5">Explore release notes, star the project, or report issues directly on GitHub.</p>
        </div>
      </div>

      <a href="https://github.com/CHAMI-csr/c-script-localhost-panel" target="_blank" rel="noopener noreferrer"
         class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs font-bold text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 shadow-sm transition-all shrink-0">
        <span>Star on GitHub</span>
        <span class="text-slate-400">★</span>
      </a>
    </div>

  </div>
</section>

<!-- Early Access Notification Modal -->
<div id="notify-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-950/60 backdrop-blur-sm p-4">
  <div class="bg-white rounded-2xl max-w-md w-full p-6 sm:p-8 shadow-2xl border border-slate-200 relative animate-in fade-in zoom-in-95 duration-200">
    <button id="close-modal-btn" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 p-1.5 rounded-lg hover:bg-slate-100 transition-colors">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <div class="w-12 h-12 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-xl text-indigo-600 mb-4">
      🔔
    </div>

    <h3 class="text-xl font-bold text-slate-900 mb-2">
      Get Notified for <span id="modal-os-name">this platform</span>
    </h3>
    <p class="text-slate-600 text-xs leading-relaxed mb-6">
      Leave your email address and we'll send you an invitation the moment the public alpha or stable build is released. No spam, ever.
    </p>

    <form id="notify-form" class="space-y-4">
      <div>
        <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address</label>
        <input type="email" required placeholder="developer@example.com"
               class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <button type="submit" class="btn-primary-modern w-full py-3 rounded-xl text-xs font-bold text-center">
        Join Early Access Notification List
      </button>
    </form>
  </div>
</div>
