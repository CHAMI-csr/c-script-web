/**
 * C-Script LocalHost Panel — World-Class Landing Page Client Script
 * Crafted with human attention to detail, micro-interactions, and high responsiveness.
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initFeatureTabs();
  initVideoPlayer();
  initCopyButtons();
  initFaqAccordion();
  initPlatformNotificationModal();
  initSmoothScroll();
});

/* --------------------------------------------------------------------------
   1. Toast Notification System
   -------------------------------------------------------------------------- */
function showToast(message, type = 'info') {
  let toast = document.getElementById('toast-notification');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'toast-notification';
    document.body.appendChild(toast);
  }

  let icon = '⚡';
  if (type === 'success') icon = '✓';
  if (type === 'warn') icon = '⏳';
  if (type === 'copy') icon = '📋';

  toast.innerHTML = `<span style="font-size:16px;">${icon}</span> <span>${message}</span>`;
  toast.classList.add('show');

  setTimeout(() => {
    toast.classList.remove('show');
  }, 3500);
}

/* --------------------------------------------------------------------------
   2. Mobile Menu Toggle
   -------------------------------------------------------------------------- */
function initMobileMenu() {
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  if (!btn || !menu) return;

  btn.addEventListener('click', () => {
    const isHidden = menu.classList.contains('hidden');
    if (isHidden) {
      menu.classList.remove('hidden');
      btn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      `;
    } else {
      menu.classList.add('hidden');
      btn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      `;
    }
  });

  // Close mobile menu on link click
  const links = menu.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', () => {
      menu.classList.add('hidden');
      btn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      `;
    });
  });
}

/* --------------------------------------------------------------------------
   3. Interactive Feature Tabs (HitPay Style Showcase)
   -------------------------------------------------------------------------- */
const FEATURE_DATA = {
  php: {
    title: 'Multi-Version PHP Engine (8.1 – 8.5)',
    subtitle: 'Zero restart hassle. Switch versions per-project or globally in 200 milliseconds.',
    badge: '1-Click Engine',
    details: [
      'Instant toggle between PHP 8.1, 8.2, 8.3, 8.4, and 8.5.',
      'Pre-enabled development extensions: curl, mysqli, pdo_mysql, mbstring, openssl, gd, zip, fileinfo, exif.',
      'Auto-tuned for high limits: 128M upload max filesize, 512M memory limit, 300s execution time.',
      'Herd & XAMPP Independence: Runtimes stored safely in %APPDATA% — never deleted when uninstalling third-party apps.'
    ],
    codePreview: `<?php
// C-Script LocalHost Panel — PHP Runtime Check
echo "Current PHP Version: " . PHP_VERSION . "\\n";
echo "Loaded Configuration: " . php_ini_loaded_file() . "\\n";
echo "Active Extensions: " . implode(', ', ['curl', 'mysqli', 'pdo_mysql', 'mbstring', 'openssl']);
?>`,
    terminalTitle: 'c-script-runtime • php -v',
    terminalOutput: `PHP 8.4.26 (cli) (built: Feb 2026 14:10:22) (NTS Visual C++ 2022 x64)
Copyright (c) The PHP Group
Zend Engine v4.4.26, with Zend OPcache v8.4.26
⚡ Active Server: http://cms.test -> NGINX Reverse Proxy -> Port 8000`
  },
  nginx: {
    title: 'Standalone NGINX & Automated Wildcard SSL',
    subtitle: 'Clean .test domains without clumsy port numbers (:8000). Full HTTPS out of the box.',
    badge: 'Zero Port Clutter',
    details: [
      'Automated virtual host generation: drop a folder into your projects and http://project.test is created immediately.',
      'Built-in wildcard SSL certificates (*.test) with pre-trusted local Certificate Authority.',
      'Zero browser security warnings on Chrome, Edge, and Firefox.',
      'High-performance reverse proxy that routes requests dynamically to PHP and Node backends.'
    ],
    codePreview: `# Automated C-Script NGINX Virtual Host
server {
    listen 80;
    listen 443 ssl http2;
    server_name myproject.test *.myproject.test;
    root "C:/Users/Developer/Projects/myproject";

    ssl_certificate "C:/Users/.../AppData/Roaming/c-script-localhost/ssl/wildcard.test.crt";
    ssl_certificate_key "C:/Users/.../AppData/Roaming/c-script-localhost/ssl/wildcard.test.key";

    location / {
        proxy_pass http://127.0.0.1:8000;
        proxy_set_header Host $host;
    }
}`,
    terminalTitle: 'nginx -t && nginx -s reload',
    terminalOutput: `nginx: the configuration file C:/Users/.../nginx/conf/nginx.conf syntax is ok
nginx: configuration file C:/Users/.../nginx/conf/nginx.conf test is successful
🔒 SSL Certificate: *.test valid until 2036 (Local Root CA Trusted)
🌐 Proxy Route: https://myproject.test -> 127.0.0.1:8000`
  },
  database: {
    title: 'MySQL & MariaDB Database Studio + Visual ER Diagrams',
    subtitle: 'Native MySQL detector and 1-click portable MariaDB 11.4 LTS server.',
    badge: 'Database Studio',
    details: [
      'Detects running Windows MySQL services (port 3306) or starts isolated portable MariaDB with zero setup.',
      'Visual table manager: create tables, edit rows, drop columns, and manage foreign key constraints.',
      'Interactive Entity-Relationship (ER) Diagram visualizer generated directly from database schemas.',
      '1-Click Laravel 11 migration generator: turn any live SQL table into production-ready PHP migrations.'
    ],
    codePreview: `<?php
// Auto-generated Laravel 11 Migration from C-Script Studio
use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->decimal('total_amount', 10, 2);
            $table->string('status', 32)->default('pending');
            $table->timestamps();
        });
    }
};`,
    terminalTitle: 'mariadb-studio • status',
    terminalOutput: `Connection: 127.0.0.1:3306 (user: root)
Server: MariaDB 11.4.5-MariaDB (Portable Standalone)
Uptime: 2 hours 45 mins | Databases: 8 | Active Connections: 3
✨ Visual ER Diagram generated for schema 'ecommerce_db'`
  },
  tunnel: {
    title: 'Instant Public Sharing (Cloudflare Tunnel)',
    subtitle: 'Share your local development site with clients or test on mobile in 3 seconds.',
    badge: 'Free & Secure',
    details: [
      'Zero port-forwarding or router configuration needed.',
      'Zero account or token required — powered by secure Cloudflare Quick Tunnels.',
      'Generates unique public HTTPS link (e.g. https://my-site.trycloudflare.com).',
      'Test webhook integrations (Stripe, PayPal, HitPay) directly on your local machine.'
    ],
    codePreview: `# Cloudflare Tunnel Live Status
Site: http://cms.test
Local Port: 8000
Public HTTPS URL: https://cms-preview-9821.trycloudflare.com

Incoming Requests:
[200 OK] GET /api/v1/checkout (Client IP: 142.250.190.46)
[200 OK] POST /webhooks/hitpay (Payload: 2.4 KB verified)
[200 OK] GET /assets/app.css`,
    terminalTitle: 'cloudflared • tunnel active',
    terminalOutput: `+------------------------------------------------------------------------------------+
|  Your quick tunnel has been created! Visit it at (SSL):                            |
|  https://c-script-demo-preview.trycloudflare.com                                   |
+------------------------------------------------------------------------------------+
Ready for connections from mobile devices, clients, and remote webhooks.`
  },
  mail: {
    title: 'Local SMTP Mail Catcher & Email Inspector',
    subtitle: 'Catch all outgoing emails from PHP mail() and SMTP on port 1025. Zero accidental spam.',
    badge: 'Local Mailbox',
    details: [
      'Built-in lightweight SMTP server listening on 127.0.0.1:1025.',
      'Catches emails instantly from WordPress, Laravel mailers, Symfony, and raw mail().',
      'Live email viewer: inspect HTML rendering, plain text, headers, MIME types, and attachments.',
      '1-Click clear or export emails as .eml files for debugging.'
    ],
    codePreview: `// Laravel config/mail.php
'smtp' => [
    'transport' => 'smtp',
    'host' => '127.0.0.1',
    'port' => 1025,
    'encryption' => null,
    'username' => null,
    'password' => null,
],

// PHP native test
mail('user@example.com', 'Welcome to C-Script!', 'Your local test email has arrived.');`,
    terminalTitle: 'mailcatcher • port 1025',
    terminalOutput: `[SMTP:1025] 📥 New message received from: noreply@myproject.test
Recipient: customer@gmail.com
Subject: Order #10492 Confirmation
Format: HTML (with embedded CSS) + Plain Text fallback
Size: 14.2 KB | Attachments: invoice_10492.pdf`
  },
  ports: {
    title: 'Port Scanner & Process Conflict Killer',
    subtitle: 'Never struggle with "Port 80 is already in use by IIS or Skype" again.',
    badge: 'Conflict Resolver',
    details: [
      'Live scanner reveals exactly which process PID is occupying ports 80, 443, 3306, and 8000-9000.',
      '1-Click safe termination of conflicting background services or orphaned processes.',
      'Dedicated Windows Service permission granter for seamless local management.',
      'Prevents port collisions before starting NGINX or MariaDB.'
    ],
    codePreview: `# Active Ports & Conflict Detection
Port 80   : [OCCUPIED] PID: 4128 (World Wide Web Publishing Service) -> [Resolve]
Port 443  : [FREE] Ready for NGINX Wildcard SSL
Port 3306 : [OCCUPIED] PID: 7812 (C-Script MariaDB 11.4) -> [Active]
Port 1025 : [OCCUPIED] PID: 9024 (C-Script Localhost MailCatcher) -> [Active]
Port 8000 : [OCCUPIED] PID: 1140 (PHP 8.4 Built-in Server: cms)`,
    terminalTitle: 'c-script-ports • diagnostic',
    terminalOutput: `⚡ Port 80 conflict detected with IIS / HTTP.sys
Action Taken: Stopped conflicting service in 0.4s
Port 80 is now cleanly assigned to C-Script NGINX Web Server. All .test domains operational.`
  }
};

function initFeatureTabs() {
  const tabs = document.querySelectorAll('.tab-pill');
  if (!tabs.length) return;

  const titleEl = document.getElementById('feature-tab-title');
  const subtitleEl = document.getElementById('feature-tab-subtitle');
  const badgeEl = document.getElementById('feature-tab-badge');
  const listEl = document.getElementById('feature-tab-list');
  const codeEl = document.getElementById('feature-tab-code');
  const termTitleEl = document.getElementById('feature-tab-term-title');
  const termOutEl = document.getElementById('feature-tab-term-output');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const key = tab.dataset.feature;
      if (!key || !FEATURE_DATA[key]) return;

      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const data = FEATURE_DATA[key];
      if (titleEl) titleEl.innerText = data.title;
      if (subtitleEl) subtitleEl.innerText = data.subtitle;
      if (badgeEl) badgeEl.innerText = data.badge;

      if (listEl) {
        listEl.innerHTML = data.details.map(d => `
          <li class="flex items-start gap-3">
            <span class="w-5 h-5 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">✓</span>
            <span class="text-slate-600 text-sm leading-relaxed">${d}</span>
          </li>
        `).join('');
      }

      if (codeEl) codeEl.innerText = data.codePreview;
      if (termTitleEl) termTitleEl.innerText = data.terminalTitle;
      if (termOutEl) termOutEl.innerText = data.terminalOutput;
    });
  });
}

/* --------------------------------------------------------------------------
   4. Marketing Video Showcase Player
   -------------------------------------------------------------------------- */
function initVideoPlayer() {
  const video = document.getElementById('c-script-marketing-video');
  const playOverlay = document.getElementById('video-play-overlay');
  const muteBtn = document.getElementById('video-toggle-mute');
  const fsBtn = document.getElementById('video-toggle-fullscreen');

  if (!video) return;

  if (playOverlay) {
    playOverlay.addEventListener('click', () => {
      if (video.paused) {
        video.play();
        playOverlay.classList.add('hidden');
      } else {
        video.pause();
        playOverlay.classList.remove('hidden');
      }
    });
  }

  video.addEventListener('click', () => {
    if (video.paused) {
      video.play();
      if (playOverlay) playOverlay.classList.add('hidden');
    } else {
      video.pause();
      if (playOverlay) playOverlay.classList.remove('hidden');
    }
  });

  video.addEventListener('ended', () => {
    if (playOverlay) playOverlay.classList.remove('hidden');
  });

  if (muteBtn) {
    muteBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      video.muted = !video.muted;
      muteBtn.innerText = video.muted ? '🔇 Unmute' : '🔊 Mute';
      showToast(video.muted ? 'Video Muted' : 'Audio Enabled', 'info');
    });
  }

  if (fsBtn) {
    fsBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      if (video.requestFullscreen) {
        video.requestFullscreen();
      } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
      }
    });
  }
}

/* --------------------------------------------------------------------------
   5. Copy Command Box & Download Handlers
   -------------------------------------------------------------------------- */
function initCopyButtons() {
  const copyButtons = document.querySelectorAll('.btn-copy-command');
  copyButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const textToCopy = btn.dataset.copyText || btn.previousElementSibling?.innerText;
      if (!textToCopy) return;

      navigator.clipboard.writeText(textToCopy).then(() => {
        const origText = btn.innerHTML;
        btn.innerHTML = `
          <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="text-emerald-400 font-semibold">Copied!</span>
        `;
        showToast('Command copied to clipboard!', 'copy');

        setTimeout(() => {
          btn.innerHTML = origText;
        }, 2200);
      }).catch(() => {
        showToast('Could not copy text.', 'warn');
      });
    });
  });
}

/* --------------------------------------------------------------------------
   6. FAQ Accordion
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');
    const content = item.querySelector('.faq-content');
    const icon = item.querySelector('.faq-icon');

    if (!trigger || !content) return;

    trigger.addEventListener('click', () => {
      const isOpen = !content.classList.contains('hidden');

      // Close all other FAQs
      faqItems.forEach(other => {
        if (other !== item) {
          other.querySelector('.faq-content')?.classList.add('hidden');
          const otherIcon = other.querySelector('.faq-icon');
          if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
        }
      });

      if (isOpen) {
        content.classList.add('hidden');
        if (icon) icon.style.transform = 'rotate(0deg)';
      } else {
        content.classList.remove('hidden');
        if (icon) icon.style.transform = 'rotate(180deg)';
      }
    });
  });
}

/* --------------------------------------------------------------------------
   7. Platform "Coming Soon" Modal (macOS & Linux)
   -------------------------------------------------------------------------- */
function initPlatformNotificationModal() {
  const modal = document.getElementById('notify-modal');
  const closeBtn = document.getElementById('close-modal-btn');
  const osTargetSpan = document.getElementById('modal-os-name');
  const form = document.getElementById('notify-form');

  const comingSoonBtns = document.querySelectorAll('.btn-coming-soon');
  comingSoonBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const os = btn.dataset.os || 'your platform';
      if (osTargetSpan) osTargetSpan.innerText = os;
      if (modal) modal.classList.remove('hidden');
    });
  });

  if (closeBtn && modal) {
    closeBtn.addEventListener('click', () => {
      modal.classList.add('hidden');
    });
  }

  if (modal) {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) modal.classList.add('hidden');
    });
  }

  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const emailInput = form.querySelector('input[type="email"]');
      const email = emailInput ? emailInput.value : '';
      if (!email) return;

      if (modal) modal.classList.add('hidden');
      showToast(`Thank you! We'll notify ${email} the moment this build goes live!`, 'success');
      form.reset();
    });
  }
}

/* --------------------------------------------------------------------------
   8. Smooth Anchor Scrolling
   -------------------------------------------------------------------------- */
function initSmoothScroll() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href').substring(1);
      if (!targetId) return;
      const target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
}
