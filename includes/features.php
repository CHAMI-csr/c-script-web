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
          <div class="w-12 h-12 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            🐘
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

      <!-- Card 2: Zero Port Clutter NGINX -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            🌐
          </div>
          <span class="text-xs font-bold tracking-wider text-blue-600 uppercase">Automated VHosts</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Clean .test Domains &amp; Wildcard SSL
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Browse projects at <code class="text-xs bg-slate-100 px-1.5 py-0.5 rounded text-slate-800">https://myproject.test</code> without typing ugly port numbers. NGINX auto-provisions reverse proxies and binds wildcard certificates with zero browser security warnings.
          </p>
        </div>
        <div class="text-xs font-medium text-emerald-600 flex items-center gap-1.5 pt-4 border-t border-slate-100">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span>Pre-trusted Windows Root CA Certificate</span>
        </div>
      </div>

      <!-- Card 3: Cloudflare Public Tunnel -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-cyan-50 border border-cyan-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            🚀
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

      <!-- Card 4: Database Studio & ER Visualizer (Span 2 on lg) -->
      <div class="card-saas p-8 lg:col-span-2 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            🗄️
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

      <!-- Card 5: Local Mail Catcher -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            📬
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

      <!-- Card 6: Port Conflict Killer -->
      <div class="card-saas p-8 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center text-2xl mb-6 shadow-sm">
            🔍
          </div>
          <span class="text-xs font-bold tracking-wider text-rose-600 uppercase">Zero Port Conflicts</span>
          <h3 class="text-xl font-bold text-slate-900 mt-1 mb-3">
            Port Scanner &amp; 1-Click PID Terminator
          </h3>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Identify which background service is holding onto port 80, 443, or 3306 (IIS, Skype, Apache, or orphaned node processes) and safely release the port in one click.
          </p>
        </div>
        <div class="text-xs font-medium text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-100">
          No more netstat -ano manual debugging
        </div>
      </div>

      <!-- Card 7: Command Palette (Span 2 on lg) -->
      <div class="card-saas p-8 lg:col-span-2 flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-2xl mb-6 shadow-sm">
            ⚡
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
