<!-- Architecture & Herd / XAMPP Independence Section -->
<section id="architecture" class="py-24 bg-white border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

      <!-- Left Column: The Architectural Narrative -->
      <div class="lg:col-span-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-xs font-bold text-blue-700 uppercase tracking-wider mb-4">
          <span>Resilient Storage Architecture</span>
        </div>

        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-6">
          Never Lose Your PHP Runtimes or Databases Again.
        </h2>

        <p class="text-slate-600 text-base leading-relaxed mb-6">
          Traditional dev tools store executables inside their own application directories. 
          When you update or uninstall them, <strong class="text-slate-800">your PHP configurations, extensions, and MySQL databases get wiped out</strong> without warning.
        </p>

        <p class="text-slate-600 text-base leading-relaxed mb-8">
          C-Script LocalHost Panel stores all isolated binaries and persistent data inside your Windows user profile:
        </p>

        <!-- Feature Points -->
        <div class="space-y-4 mb-8">
          <div class="flex items-start gap-3.5">
            <div class="w-6 h-6 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</div>
            <div>
              <h4 class="text-sm font-bold text-slate-900">Zero Administrator Elevation Prompts</h4>
              <p class="text-xs text-slate-500 mt-0.5">Windows standard user permissions allow PHP, NGINX, and MariaDB to write logs, configure vhosts, and create databases without intrusive UAC popups.</p>
            </div>
          </div>

          <div class="flex items-start gap-3.5">
            <div class="w-6 h-6 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</div>
            <div>
              <h4 class="text-sm font-bold text-slate-900">Immunity to Third-Party Uninstallers</h4>
              <p class="text-xs text-slate-500 mt-0.5">Uninstalling or updating C-Script, Laravel Herd, or XAMPP will never touch your isolated databases or custom php.ini configurations.</p>
            </div>
          </div>

          <div class="flex items-start gap-3.5">
            <div class="w-6 h-6 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</div>
            <div>
              <h4 class="text-sm font-bold text-slate-900">100% Offline Portability</h4>
              <p class="text-xs text-slate-500 mt-0.5">Pre-bundled runtimes allow instant installation on air-gapped systems or offline development without waiting for slow downloads.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Directory Map -->
      <div class="lg:col-span-6">
        <div class="card-dark-terminal p-6 shadow-2xl relative">
          <div class="flex items-center justify-between pb-4 border-b border-slate-800 text-xs font-mono text-slate-400 mb-4">
            <div class="flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
              <span class="text-slate-200 font-semibold">%APPDATA%\c-script-localhost\</span>
            </div>
            <span class="text-[11px] text-indigo-400">Isolated Architecture</span>
          </div>

          <!-- Interactive Tree View -->
          <div class="font-mono text-xs sm:text-[13px] text-slate-300 space-y-1.5 leading-relaxed selection:bg-indigo-600">
            <div class="text-indigo-400">C:\Users\&lt;Username&gt;\AppData\Roaming\c-script-localhost\</div>
            <div class="pl-4 text-slate-400">├── <span class="text-emerald-400 font-bold">php\</span> <span class="text-slate-500">(Independent Runtimes)</span></div>
            <div class="pl-8 text-slate-300">├── <span class="text-white">php84\</span> <span class="text-slate-500">(php.exe, custom php.ini, ext\*)</span></div>
            <div class="pl-8 text-slate-300">├── <span class="text-white">php83\</span> <span class="text-slate-500">(Official NTS Binaries)</span></div>
            <div class="pl-8 text-slate-300">└── <span class="text-white">php82\</span> <span class="text-slate-500">(Legacy Runtime)</span></div>
            <div class="pl-4 text-slate-400">├── <span class="text-cyan-400 font-bold">nginx\</span> <span class="text-slate-500">(Standalone Web Server)</span></div>
            <div class="pl-8 text-slate-300">├── <span class="text-white">conf\vhosts\</span> <span class="text-slate-500">(*.test Automated Configs)</span></div>
            <div class="pl-8 text-slate-300">└── <span class="text-white">nginx.exe</span> <span class="text-slate-500">(Reverse Proxy on Port 80/443)</span></div>
            <div class="pl-4 text-slate-400">├── <span class="text-amber-400 font-bold">mysql\</span> <span class="text-slate-500">(MariaDB 11.4 LTS)</span></div>
            <div class="pl-8 text-slate-300">├── <span class="text-white">data\</span> <span class="text-slate-500">(Protected Databases &amp; InnoDB)</span></div>
            <div class="pl-8 text-slate-300">└── <span class="text-white">bin\mysqld.exe</span> <span class="text-slate-500">(Port 3306)</span></div>
            <div class="pl-4 text-slate-400">├── <span class="text-purple-400 font-bold">ssl\</span> <span class="text-slate-500">(*.test Wildcard Certificates)</span></div>
            <div class="pl-4 text-slate-400">└── <span class="text-rose-400 font-bold">bin\</span> <span class="text-slate-500">(Cloudflare Quick Tunnel Client)</span></div>
          </div>

          <div class="mt-6 pt-4 border-t border-slate-800 text-[11px] text-slate-400 flex items-center justify-between">
            <span>Clean Uninstaller Guarantee</span>
            <span class="text-emerald-400 font-medium">✓ User Databases Always Preserved</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
