<!-- Interactive Demo / HitPay Style Tabbed Feature Tour -->
<section id="interactive-demo" class="py-24 bg-white border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-14">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-200 text-xs font-bold text-indigo-700 uppercase tracking-wider mb-4">
        <span>Interactive Architecture Tour</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        Everything You Need for Serious Local Web Development.
      </h2>
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
        Click through the developer engines below to preview how C-Script coordinates PHP, NGINX, MySQL, SSL, and Cloudflare in one unified workspace.
      </p>
    </div>

    <!-- Segmented Tab Navigation Bar (HitPay Pill Style) -->
    <div class="flex items-center justify-start lg:justify-center gap-2 overflow-x-auto pb-4 mb-10 scrollbar-none">
      <button class="tab-pill active px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold shrink-0 cursor-pointer" data-feature="php">
        🐘 Multi-Version PHP
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer flex items-center gap-1.5" data-feature="autoindex">
        <span>📂 Smart Autoindex</span>
        <span class="text-[10px] font-bold bg-emerald-100 text-emerald-800 px-1.5 py-0.2 rounded-full">New</span>
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer" data-feature="nginx">
        🌐 NGINX &amp; Wildcard SSL
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer" data-feature="database">
        🗄️ MariaDB &amp; ER Diagrams
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer" data-feature="tunnel">
        🚀 Cloudflare Public Tunnel
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer" data-feature="mail">
        📬 SMTP Mail Catcher
      </button>
      <button class="tab-pill px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold text-slate-600 shrink-0 cursor-pointer" data-feature="ports">
        🔍 Port Conflict Killer
      </button>
    </div>

    <!-- Interactive Display Card -->
    <div class="card-saas p-6 sm:p-10 border border-slate-200 shadow-xl rounded-2xl bg-gradient-to-b from-white to-slate-50/50">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Column: Details & Key Bullet Points -->
        <div class="lg:col-span-5 flex flex-col justify-between">
          <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-indigo-50 border border-indigo-100 text-xs font-bold text-indigo-700 mb-4" id="feature-tab-badge">
              1-Click Engine
            </div>
            
            <h3 class="text-2xl font-bold text-slate-900 tracking-tight mb-2" id="feature-tab-title">
              Multi-Version PHP Engine (8.1 – 8.5)
            </h3>
            
            <p class="text-sm text-slate-600 leading-relaxed mb-6" id="feature-tab-subtitle">
              Zero restart hassle. Switch versions per-project or globally in 200 milliseconds.
            </p>

            <ul class="space-y-3 mb-8" id="feature-tab-list">
              <li class="flex items-start gap-3">
                <span class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span class="text-slate-600 text-sm leading-relaxed">Instant toggle between PHP 8.1, 8.2, 8.3, 8.4, and 8.5.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span class="text-slate-600 text-sm leading-relaxed">Pre-enabled development extensions: curl, mysqli, pdo_mysql, mbstring, openssl, gd, zip, fileinfo, exif.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span class="text-slate-600 text-sm leading-relaxed">Auto-tuned for high limits: 128M upload max filesize, 512M memory limit, 300s execution time.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
                <span class="text-slate-600 text-sm leading-relaxed">Herd &amp; XAMPP Independence: Runtimes stored safely in %APPDATA% — never deleted when uninstalling third-party apps.</span>
              </li>
            </ul>
          </div>

          <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
            <span class="text-xs text-slate-500 font-mono">Engine Latency: &lt; 0.2s</span>
            <a href="#downloads" class="text-xs font-bold text-indigo-600 hover:text-indigo-800 transition-colors flex items-center gap-1">
              <span>Try it in C-Script Panel</span>
              <span>→</span>
            </a>
          </div>
        </div>

        <!-- Right Column: Code & Terminal Live Previews -->
        <div class="lg:col-span-7 space-y-4">
          
          <!-- Code Preview Box -->
          <div class="card-dark-terminal overflow-hidden shadow-2xl">
            <div class="bg-slate-900 px-4 py-2.5 border-b border-slate-800 flex items-center justify-between">
              <div class="flex items-center gap-2">
                <div class="window-dots">
                  <span class="window-dot dot-red"></span>
                  <span class="window-dot dot-yellow"></span>
                  <span class="window-dot dot-green"></span>
                </div>
                <span class="text-xs font-mono text-slate-400 pl-2">preview.php</span>
              </div>
              <span class="text-[11px] font-mono text-indigo-400 font-semibold">PHP 8.4 NTS x64</span>
            </div>

            <div class="p-4 sm:p-5 font-mono text-xs sm:text-[13px] text-slate-300 leading-relaxed overflow-x-auto whitespace-pre selection:bg-indigo-600 selection:text-white" id="feature-tab-code">&lt;?php
// C-Script LocalHost Panel — PHP Runtime Check
echo "Current PHP Version: " . PHP_VERSION . "\n";
echo "Loaded Configuration: " . php_ini_loaded_file() . "\n";
echo "Active Extensions: " . implode(', ', ['curl', 'mysqli', 'pdo_mysql', 'mbstring', 'openssl']);
?&gt;</div>
          </div>

          <!-- Terminal Output Simulation Box -->
          <div class="card-dark-terminal overflow-hidden border border-slate-800/80">
            <div class="bg-slate-950 px-4 py-2 border-b border-slate-800/80 flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span class="text-emerald-400 font-mono text-xs">●</span>
                <span class="text-xs font-mono text-slate-400" id="feature-tab-term-title">c-script-runtime • php -v</span>
              </div>
              <span class="text-[10px] font-mono text-slate-500">Live Diagnostic</span>
            </div>

            <div class="p-4 font-mono text-xs text-emerald-400 bg-black/60 leading-relaxed overflow-x-auto whitespace-pre" id="feature-tab-term-output">PHP 8.4.26 (cli) (built: Feb 2026 14:10:22) (NTS Visual C++ 2022 x64)
Copyright (c) The PHP Group
Zend Engine v4.4.26, with Zend OPcache v8.4.26
⚡ Active Server: http://cms.test -> NGINX Reverse Proxy -> Port 8000</div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>
