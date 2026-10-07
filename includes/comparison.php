<!-- Comparison Matrix Section -->
<section id="comparison" class="py-24 bg-slate-50/50 border-b border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-16">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200/80 border border-slate-300 text-xs font-bold text-slate-700 uppercase tracking-wider mb-4">
        <span>Direct Comparison</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        Why Windows Developers Are Switching to C-Script.
      </h2>
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
        See how C-Script compares against legacy stacks and heavy containerized setups.
      </p>
    </div>

    <!-- Comparison Table Card -->
    <div class="card-saas overflow-hidden shadow-xl border border-slate-200">
      <div class="overflow-x-auto">
        <table class="w-full text-left comparison-table text-sm">
          <thead>
            <tr class="bg-slate-100/80 text-xs font-bold uppercase tracking-wider text-slate-600 border-b border-slate-200">
              <th class="py-4 px-6">Capability</th>
              <th class="py-4 px-6 text-indigo-700 bg-indigo-50/60 font-extrabold">C-Script LocalHost</th>
              <th class="py-4 px-6 text-slate-700">XAMPP / WAMP</th>
              <th class="py-4 px-6 text-slate-700">Laragon</th>
              <th class="py-4 px-6 text-slate-700">Docker Desktop</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200 text-slate-700">

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Cold Boot Time</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">&lt; 1 Second</td>
              <td class="py-4 px-6 text-slate-500">8 – 12 Seconds</td>
              <td class="py-4 px-6 text-slate-500">4 – 6 Seconds</td>
              <td class="py-4 px-6 text-rose-500">45 – 90 Seconds</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Idle RAM Footprint</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">~45 MB</td>
              <td class="py-4 px-6 text-slate-500">~180 MB</td>
              <td class="py-4 px-6 text-slate-500">~140 MB</td>
              <td class="py-4 px-6 text-rose-500">4.5 GB – 6.0 GB (WSL2)</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Multi-PHP Version Switcher</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">1-Click Instant (8.1 – 8.5)</td>
              <td class="py-4 px-6 text-rose-500">Manual zip extraction</td>
              <td class="py-4 px-6 text-slate-500">Requires App Restart</td>
              <td class="py-4 px-6 text-slate-500">Rebuild Dockerfile</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Local Wildcard SSL (*.test)</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Automatic &amp; Pre-trusted</td>
              <td class="py-4 px-6 text-rose-500">Manual openssl.exe config</td>
              <td class="py-4 px-6 text-slate-500">Self-signed browser warnings</td>
              <td class="py-4 px-6 text-slate-500">Manual mkcert setup</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">
                Developer Directory Indexing
                <span class="ml-1.5 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">New v1.2</span>
              </td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Modern UI with 1-Click Run &amp; Search</td>
              <td class="py-4 px-6 text-rose-500">1990s Apache table or 403</td>
              <td class="py-4 px-6 text-slate-500">Plain listing or 403</td>
              <td class="py-4 px-6 text-slate-500">Manual container config</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Instant Public Client Sharing</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Built-in Cloudflare Tunnel</td>
              <td class="py-4 px-6 text-rose-500">None</td>
              <td class="py-4 px-6 text-rose-500">None</td>
              <td class="py-4 px-6 text-slate-500">Manual ngrok / Localtunnel</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Local SMTP Mail Catcher</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Built-in Web Inbox (Port 1025)</td>
              <td class="py-4 px-6 text-rose-500">Fake sendmail only</td>
              <td class="py-4 px-6 text-slate-500">MailHog (Separate install)</td>
              <td class="py-4 px-6 text-slate-500">Extra Mailpit container</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Windows UAC / Elevation</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Zero Admin Prompts</td>
              <td class="py-4 px-6 text-rose-500">Frequent UAC prompts</td>
              <td class="py-4 px-6 text-slate-500">Occasional UAC prompts</td>
              <td class="py-4 px-6 text-slate-500">Hyper-V / Admin rights</td>
            </tr>

            <tr>
              <td class="font-semibold text-slate-900 py-4 px-6">Visual ER Diagrams &amp; Migrations</td>
              <td class="bg-indigo-50/30 font-bold text-emerald-600 py-4 px-6">Included (with Laravel 11 export)</td>
              <td class="py-4 px-6 text-rose-500">None (phpMyAdmin only)</td>
              <td class="py-4 px-6 text-rose-500">None (HeidiSQL only)</td>
              <td class="py-4 px-6 text-rose-500">Requires separate DBeaver</td>
            </tr>

          </tbody>
        </table>
      </div>

      <div class="p-6 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
        <span class="text-xs text-slate-600">
          Ready to experience frictionless local development on Windows?
        </span>
        <a href="#downloads" class="btn-accent-modern text-xs font-bold px-5 py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all">
          Download C-Script v<?php echo htmlspecialchars($appConfig['version']); ?> (Free)
        </a>
      </div>
    </div>

  </div>
</section>
