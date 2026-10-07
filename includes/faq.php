<!-- Frequently Asked Questions (FAQ) Section -->
<section id="faq" class="py-24 bg-slate-50/50 border-b border-slate-200">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-2xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200/80 border border-slate-300 text-xs font-bold text-slate-700 uppercase tracking-wider mb-4">
        <span>Common Questions</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        Frequently Asked Questions.
      </h2>
      <p class="text-base text-slate-600 leading-relaxed">
        Everything you need to know about C-Script LocalHost Panel, permissions, and architecture.
      </p>
    </div>

    <!-- FAQ Accordion List -->
    <div class="space-y-4">

      <!-- Question 1 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            Do I need Administrator (UAC) permissions to run C-Script LocalHost Panel?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            <strong>No!</strong> C-Script LocalHost Panel is specifically engineered to run in standard user space without requiring continuous Windows UAC Administrator elevation. All runtime data, NGINX logs, virtual hosts, and MySQL databases are stored within <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded text-slate-800">%APPDATA%\c-script-localhost</code>. Administrator privileges are only requested when binding to protected Windows ports or managing Windows system services.
          </p>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            Why won't uninstalling Laravel Herd or XAMPP delete my PHP runtimes?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            Tools like Laravel Herd store their PHP binaries directly inside their own install folders. When Herd is uninstalled, Windows deletes all of Herd's folders, wiping out your PHP runtimes and causing broken <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">auto_prepend_file</code> errors. 
          </p>
          <p class="mt-2">
            C-Script LocalHost Panel isolates its PHP versions into an independent standalone folder in your user AppData. We also provide a 1-click migration and automated self-repair engine that cleans out orphaned third-party paths so your stack remains 100% resilient.
          </p>
        </div>
      </div>

      <!-- Question 3 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            Can I run multiple PHP projects on different PHP versions simultaneously?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            <strong>Yes.</strong> You can assign a specific PHP version (e.g. PHP 8.1 for a legacy Symfony project and PHP 8.4 for a fresh Laravel 11 app) per site. The NGINX reverse proxy dynamically routes incoming requests on <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">*.test</code> domains to the respective PHP worker port without collisions.
          </p>
        </div>
      </div>

      <!-- Question 4: Smart Directory Indexing -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            What happens if my project folder doesn't have an index.php file?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            In v1.2.0, you'll never encounter a 403 Forbidden error or blank page! C-Script includes built-in <strong>Smart Developer Directory Indexing (Autoindex)</strong>. When <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">index.php</code> or <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">index.html</code> is missing, C-Script provides an instant, modern file explorer with path breadcrumbs, live search filtering, and 1-click execution for standalone PHP, HTML, and JS scripts.
          </p>
        </div>
      </div>

      <!-- Question 5 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            How does the Cloudflare Public Tunnel work without an account?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            C-Script leverages Cloudflare's official Quick Tunnels protocol. When you click "Share to Web", a temporary, encrypted outbound HTTPS tunnel is established with Cloudflare's edge network, providing you with a secure <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">https://&lt;random&gt;.trycloudflare.com</code> link. You don't need a domain, account, or credit card.
          </p>
        </div>
      </div>

      <!-- Question 6 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            Can I use my existing Windows MySQL installation instead of MariaDB?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            <strong>Absolutely.</strong> C-Script automatically detects any existing MySQL service (such as <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded">MySQL80</code> or custom MySQL running on port 3306). You can seamlessly connect to it via the built-in Database Studio. If you don't have MySQL installed, you can launch the bundled portable MariaDB with a single click.
          </p>
        </div>
      </div>

      <!-- Question 7 -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            When are the macOS and Linux versions launching?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            macOS (Universal binary for Apple Silicon M-series &amp; Intel) and Linux (.deb and AppImage) are actively being developed for release in late 2026. You can click <strong>"Notify Me"</strong> in the downloads section to receive an email as soon as private alpha builds are ready for testing.
          </p>
        </div>
      </div>

      <!-- Question 8: SmartScreen / Windows Warning -->
      <div class="faq-item card-saas p-6 border border-slate-200 cursor-pointer">
        <div class="faq-trigger flex items-center justify-between gap-4">
          <h3 class="text-base font-bold text-slate-900">
            Why does Windows Defender SmartScreen say "Unrecognized App" during install?
          </h3>
          <span class="faq-icon text-slate-400 font-bold text-lg transition-transform duration-200">
            ↓
          </span>
        </div>
        <div class="faq-content hidden mt-4 pt-4 border-t border-slate-100 text-sm text-slate-600 leading-relaxed">
          <p>
            This is standard Windows behavior for newly compiled open-source binaries that don't yet have high cloud download reputation. Because C-Script interacts with developer system networking (binding ports 80/443 and updating the local <code class="font-mono text-xs bg-slate-100 px-1.5 py-0.5 rounded text-slate-800">hosts</code> file for test domains), SmartScreen flags it until enough global downloads accumulate.
          </p>
          <p class="mt-2">
            The installer is <strong>100% clean, safe, and open-source</strong>. To proceed, simply click <strong>"More info"</strong> and then select <strong>"Run anyway"</strong>.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
