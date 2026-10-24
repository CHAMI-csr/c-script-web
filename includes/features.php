<!-- Bento Grid & Core Capabilities -->
<section id="features" class="py-24 bg-slate-50/50 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-xs font-bold text-emerald-700 uppercase tracking-wider mb-4">
        <span>Engineered for Windows</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        Built by Windows Developers, for Windows Developers.
      </h2>
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
        Stop fighting with WSL2 RAM spikes, broken virtual host paths, and conflicting port 80 services. 
        C-Script gives you an ultra-lean, native environment that starts in a split second.
      </p>
    </div>

    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1: Multi-Version PHP (Span 2 on lg) -->
      <div class="card-saas p-8 lg:col-span-2 flex flex-col justify-between relative overflow-hidden group">
        <div>
          <div class="w-12 h-12 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-indigo-600 uppercase">Independent Runtimes</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Multi-Version PHP Engine with 1-Click Official Downloader
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-6">
            Easily toggle between PHP 8.1, 8.2, 8.3, 8.4, and 8.5. Need a version not currently on your system? 
            Download official, security-verified NTS binaries from <code class="text-xs bg-slate-100 px-1.5 py-0.5 rounded text-slate-800">windows.php.net</code> directly in the panel.
          </p>
        </div>

        <!-- Visual Pill Badges -->
        <div class="flex flex-wrap items-center gap-2 pt-4 border-t border-slate-100">
          <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 font-mono text-xs font-semibold">PHP 8.5 (Upcoming)</span>
          <span class="px-2.5 py-1 rounded-md bg-indigo-600 text-white font-mono text-xs font-semibold">PHP 8.4 (Default)</span>
          <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 font-mono text-xs font-semibold">PHP 8.3 (Stable)</span>
          <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 font-mono text-xs font-semibold">PHP 8.2 (LTS)</span>
          <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 font-mono text-xs font-semibold">PHP 8.1 (Legacy)</span>
        </div>
      </div>

      <!-- Card 2: Smart Developer Directory Indexing -->
      <div class="card-saas p-8 flex flex-col justify-between border border-emerald-300/70 bg-gradient-to-b from-emerald-50/20 via-white to-white relative overflow-hidden group">
        <div class="absolute top-4 right-4">
          <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
            <span>v1.2+ Core</span>
          </span>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-emerald-600 uppercase">Rapid File Exploration</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Smart Directory Indexing (Autoindex)
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            No <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">index.php</code>? No 403 Forbidden! Native AppData <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">autoindexRouter.php</code> renders a fast directory explorer with 1-click PHP execution, breadcrumbs, and live search.
          </p>
        </div>
        <div class="text-xs font-medium text-emerald-700 flex items-center gap-1.5 pt-4 border-t border-slate-100">
          <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <span>Click-to-run scripts • Traversal protected</span>
        </div>
      </div>

      <!-- Card 3: Zero Port Clutter NGINX & Live Sidebar Status -->
      <div class="card-saas p-8 flex flex-col justify-between border-2 border-blue-400/40 bg-gradient-to-b from-blue-50/20 via-white to-white relative overflow-hidden">
        <div class="absolute top-4 right-4">
          <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-blue-100 text-blue-800 border border-blue-200">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
            <span>Updated v1.2.5</span>
          </span>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-blue-600 uppercase">Auto-Start &amp; Live Status</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Clean .test Domains, Wildcard SSL &amp; NGINX Status Pill
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Starting any site automatically launches NGINX, syncs your Windows <code class="text-xs bg-slate-100 px-1.5 py-0.5 rounded text-slate-800">hosts</code> file, and binds wildcard SSL certificates. Monitor live state via the sidebar status pill (<code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-emerald-700">NGINX: 80</code>).
          </p>
        </div>
        <div class="text-xs font-medium text-emerald-600 flex items-center gap-1.5 pt-4 border-t border-slate-100">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span>Auto-starts on site launch • Pre-trusted Root CA</span>
        </div>
      </div>

      <!-- Card 4: Cloudflare Public Tunnel -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-cyan-50 border border-cyan-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-cyan-600 uppercase">Zero Port Forwarding</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Instant Cloudflare Public Sharing
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Need to test webhooks from Stripe or show work to a client? Click "Share to Web" and receive an instant public HTTPS URL via Cloudflare Quick Tunnels. No router setup, no ngrok token required.
          </p>
        </div>
        <div class="text-xs font-mono text-slate-500 bg-slate-50 p-2.5 rounded-lg border border-slate-200">
          https://*.trycloudflare.com
        </div>
      </div>

      <!-- Card 5: Seamless 1-Click Auto Updates & What's New Hub (New in v1.2.5) -->
      <div class="card-saas p-8 flex flex-col justify-between border-2 border-indigo-400/40 bg-gradient-to-b from-indigo-50/20 via-white to-white relative overflow-hidden group">
        <div class="absolute top-4 right-4">
          <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-indigo-100 text-indigo-800 border border-indigo-200">
            <span class="w-1.5 h-1.5 rounded-full bg-indigo-600 animate-pulse"></span>
            <span>New in v1.2.5</span>
          </span>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-indigo-600 uppercase">Frictionless Upgrades</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Seamless 1-Click Auto-Updates &amp; "What's New" Hub
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Download and install updates in the background with one click — engineered to bypass unsigned certificate blocks cleanly while keeping your <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">%APPDATA%</code> sites and databases untouched.
          </p>
        </div>
        <div class="text-xs font-medium text-indigo-700 flex items-center gap-1.5 pt-4 border-t border-slate-100">
          <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
          <span>1-Click Background Updater • Post-Update Release Modal</span>
        </div>
      </div>

      <!-- Card 6: Database Studio & ER Visualizer (Span 2 on lg) -->
      <div class="card-saas p-8 lg:col-span-2 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-amber-600 uppercase">Database Intelligence</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            MariaDB 11.4 LTS Studio + Visual ER Diagram Visualizer
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-6">
            Includes a built-in portable MariaDB 11.4 server and auto-detects existing MySQL 8.x services on port 3306. 
            Inspect tables, run raw queries, render interactive Entity-Relationship (ER) diagrams with foreign key links, and export schemas directly to Laravel 11 migration files.
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4 border-t border-slate-100 text-xs font-medium text-slate-700">
          <div class="flex items-center gap-2">
            <span class="text-emerald-500 font-bold">✓</span> Visual Table Editor
          </div>
          <div class="flex items-center gap-2">
            <span class="text-emerald-500 font-bold">✓</span> SQL Query Runner
          </div>
          <div class="flex items-center gap-2">
            <span class="text-emerald-500 font-bold">✓</span> Interactive ER Diagram
          </div>
          <div class="flex items-center gap-2">
            <span class="text-emerald-500 font-bold">✓</span> Laravel Migration Export
          </div>
        </div>
      </div>

      <!-- Card 7: Local Mail Catcher -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-purple-600 uppercase">Safe Testing</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Local SMTP Mail Catcher (Port 1025)
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Catches all outgoing email dispatched from PHP <code class="text-xs bg-slate-100 px-1 rounded">mail()</code> and SMTP. 
            Inspect HTML previews, plain text, headers, and attachments inside the panel without sending spam to real email accounts.
          </p>
        </div>
        <div class="text-xs font-medium text-purple-700 bg-purple-50 px-3 py-1.5 rounded-lg border border-purple-100">
          Auto-configured for WordPress &amp; Laravel
        </div>
      </div>

      <!-- Card 8: Laravel 11 Auto-Routing & Smart Folder Naming (New in v1.2.5) -->
      <div class="card-saas p-8 flex flex-col justify-between border-2 border-emerald-400/50 bg-gradient-to-b from-emerald-50/25 via-white to-white relative overflow-hidden">
        <div class="absolute top-4 right-4">
          <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-200">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
            <span>New in v1.2.5</span>
          </span>
        </div>
        <div>
          <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-emerald-600 uppercase">Zero-Config Frameworks</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Laravel 11 Auto-Routing &amp; Smart Folder Naming
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Automatically detects <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">public/</code> document roots, binds <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">server.php</code> &amp; Laravel 11 <code class="text-xs bg-slate-100 px-1 py-0.5 rounded text-slate-800">handleRequest()</code>, and auto-populates your Site Name when browsing any project folder.
          </p>
        </div>
        <div class="text-xs font-medium text-emerald-700 flex items-center gap-1.5 pt-4 border-t border-slate-100">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span>Auto folder-to-domain • Full manual override</span>
        </div>
      </div>

      <!-- Card 9: Port Scope & Conflict Killer -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-rose-600 uppercase">Smart Port Scope</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Port Conflict Killer &amp; Strict Port Reservation
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Filter between <em>App &amp; Web Services</em> and <em>All System Ports</em> to release port 80/443/3306 in one click. Stopped site ports remain strictly reserved so new sites never collide.
          </p>
        </div>
        <div class="text-xs font-medium text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-100">
          Auto next-free-port allocation &amp; Port 80 guard
        </div>
      </div>

      <!-- Card 10: Command Palette -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center mb-6 shadow-sm">
            <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </div>
          <span class="text-xs font-bold tracking-wider text-slate-700 uppercase">Power-User Workflow</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Keyboard-First Command Palette (<kbd class="px-2 py-0.5 bg-slate-100 border border-slate-300 rounded text-xs font-mono text-slate-700 font-bold">Ctrl + K</kbd>)
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Never reach for your mouse. Press <kbd class="px-1.5 py-0.5 bg-slate-100 border border-slate-200 rounded text-xs font-mono">Ctrl + K</kbd> to jump between sites, restart NGINX, toggle PHP versions, open terminal in project directory, or edit <code class="text-xs bg-slate-100 px-1 rounded">php.ini</code> in VS Code.
          </p>
        </div>
        <div class="flex items-center gap-3 text-xs text-slate-500 font-mono pt-4 border-t border-slate-100">
          <span>Themes: Dark, Dracula, Nord, Monokai</span>
        </div>
      </div>

    </div>

  </div>
</section>
