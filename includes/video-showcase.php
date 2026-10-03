<!-- Video Showcase Section -->
<section id="video-showcase" class="py-20 bg-slate-50/70 border-y border-slate-200/80 relative overflow-hidden">
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-xs font-bold text-blue-700 uppercase tracking-wider mb-4">
        <span>Product Walkthrough</span>
      </div>
      <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight-title text-slate-900 mb-4">
        See C-Script LocalHost Panel in Action.
      </h2>
      <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
        Watch how effortlessly you can launch local projects, toggle PHP engines, visualize MySQL schemas, and share live client previews with a single click.
      </p>
    </div>

    <!-- Video Desktop Frame Container -->
    <div class="max-w-5xl mx-auto relative">

      <!-- Floating Glassmorphic Badges -->
      <div class="hidden lg:flex items-center gap-3 absolute -top-5 -left-6 z-20 glass-badge px-4 py-2.5 shadow-lg">
        <span class="status-pulse-green"></span>
        <div class="text-xs">
          <span class="font-bold text-slate-900">PHP 8.4 Active</span>
          <span class="text-slate-500">• 0.2s Hot Switch</span>
        </div>
      </div>

      <div class="hidden lg:flex items-center gap-3 absolute -bottom-5 -right-6 z-20 glass-badge px-4 py-2.5 shadow-lg">
        <div class="w-2.5 h-2.5 rounded-full bg-blue-500"></div>
        <div class="text-xs">
          <span class="font-bold text-slate-900">Cloudflare Tunnel</span>
          <span class="text-slate-500">• Public HTTPS Live</span>
        </div>
      </div>

      <div class="video-frame-container group">
        
        <!-- App Title Bar -->
        <div class="bg-slate-900/90 border-b border-slate-800 px-4 py-3 flex items-center justify-between">
          <div class="window-dots">
            <span class="window-dot dot-red"></span>
            <span class="window-dot dot-yellow"></span>
            <span class="window-dot dot-green"></span>
          </div>

          <div class="flex items-center gap-2 text-xs font-mono text-slate-400">
            <svg class="w-3.5 h-3.5 text-indigo-400" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
            <span>C-Script LocalHost Panel — Product Demonstration</span>
          </div>

          <!-- Video Custom Controls (Mute Only) -->
          <div class="flex items-center gap-2">
            <button id="video-toggle-mute" 
                    type="button"
                    onclick="toggleVideoSound(event)"
                    class="group flex items-center gap-1.5 text-xs font-medium px-2.5 py-1 rounded bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700/70 transition-colors cursor-pointer select-none"
                    title="Toggle Audio">
              <span id="mute-icon" class="flex items-center">
                <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                </svg>
              </span>
              <span id="mute-text">Unmute</span>
            </button>
          </div>
        </div>

        <!-- Video Player Element -->
        <div class="relative w-full aspect-video bg-black flex items-center justify-center overflow-hidden">
          
          <video id="c-script-marketing-video"
                 class="w-full h-full object-cover cursor-pointer select-none"
                 autoplay
                 loop
                 muted
                 playsinline
                 preload="auto"
                 onclick="toggleVideoSound(event)">
            <source src="C-Script_LocalHost_Marketing_Video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

          <!-- Floating Glassmorphic Mute/Unmute Badge -->
          <button id="video-floating-mute-btn"
                  type="button"
                  onclick="toggleVideoSound(event)"
                  class="absolute bottom-4 right-4 z-30 flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/90 hover:bg-slate-950 backdrop-blur-md border border-white/20 text-white text-xs font-semibold shadow-2xl hover:scale-105 active:scale-95 transition-all duration-200 cursor-pointer select-none"
                  title="Toggle Audio">
            <span id="floating-mute-icon" class="flex items-center">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
              </svg>
            </span>
            <span id="floating-mute-text">Sound Off</span>
          </button>

        </div>

        <script>
        (function() {
          const iconMutedSvg = '<svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" /></svg>';
          const iconUnmutedSvg = '<svg class="w-3.5 h-3.5 text-indigo-400 group-hover:text-indigo-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" /></svg>';
          const floatMutedSvg = '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" /></svg>';
          const floatUnmutedSvg = '<svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" /></svg>';

          window.updateVideoMuteUI = function(isMuted) {
            const muteIcon = document.getElementById('mute-icon');
            const muteText = document.getElementById('mute-text');
            const floatBtn = document.getElementById('video-floating-mute-btn');
            const floatIcon = document.getElementById('floating-mute-icon');
            const floatText = document.getElementById('floating-mute-text');

            if (muteIcon) muteIcon.innerHTML = isMuted ? iconMutedSvg : iconUnmutedSvg;
            if (muteText) muteText.textContent = isMuted ? 'Unmute' : 'Mute';

            if (floatIcon) floatIcon.innerHTML = isMuted ? floatMutedSvg : floatUnmutedSvg;
            if (floatText) floatText.textContent = isMuted ? 'Sound Off' : 'Sound On';

            if (floatBtn) {
              if (isMuted) {
                floatBtn.classList.remove('border-emerald-500/50', 'text-emerald-300');
                floatBtn.classList.add('border-white/20', 'text-white');
              } else {
                floatBtn.classList.remove('border-white/20', 'text-white');
                floatBtn.classList.add('border-emerald-500/50', 'text-emerald-300');
              }
            }
          };

          window.toggleVideoSound = function(e) {
            if (e) {
              if (e.preventDefault) e.preventDefault();
              if (e.stopPropagation) e.stopPropagation();
            }
            const video = document.getElementById('c-script-marketing-video');
            if (!video) return;

            video.muted = !video.muted;
            if (!video.muted) {
              video.volume = 1.0;
            }
            if (video.paused) {
              video.play().catch(function() {});
            }
            if (window.updateVideoMuteUI) {
              window.updateVideoMuteUI(video.muted);
            }
            if (typeof showToast === 'function') {
              showToast(video.muted ? 'Audio Muted' : 'Audio Enabled 🔊', 'info');
            }
          };
        })();
        </script>

        <!-- App Bottom Status Bar -->
        <div class="bg-slate-950 px-4 py-2 border-t border-slate-800/80 flex flex-wrap items-center justify-between text-[11px] font-mono text-slate-400">
          <div class="flex items-center gap-4">
            <span class="flex items-center gap-1.5 text-emerald-400">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> NGINX: Active (Port 80/443)
            </span>
            <span class="flex items-center gap-1.5 text-blue-400">
              <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> MySQL: 127.0.0.1:3306
            </span>
            <span class="flex items-center gap-1.5 text-purple-400">
              <span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> MailCatcher: Port 1025
            </span>
          </div>

          <div class="text-slate-500 hidden sm:block">
            Press <kbd class="px-1.5 py-0.5 bg-slate-800 text-slate-300 rounded text-[10px]">Ctrl + K</kbd> for Command Palette
          </div>
        </div>

      </div>

      <!-- Feature Highlight Badges Under Video -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8">
        
        <div class="bg-white p-4 rounded-xl border border-slate-200/90 shadow-sm flex items-start gap-3">
          <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-sm shrink-0">1</div>
          <div>
            <h4 class="text-xs font-bold text-slate-900">Zero Port Configuration</h4>
            <p class="text-[12px] text-slate-500 mt-0.5">Automated vhosts for clean <code class="font-mono text-slate-700">http://sitename.test</code> domains.</p>
          </div>
        </div>

        <div class="bg-white p-4 rounded-xl border border-slate-200/90 shadow-sm flex items-start gap-3">
          <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-sm shrink-0">2</div>
          <div>
            <h4 class="text-xs font-bold text-slate-900">1-Click Multi-PHP Switch</h4>
            <p class="text-[12px] text-slate-500 mt-0.5">Switch between PHP 8.1, 8.2, 8.3, 8.4, and 8.5 with no reboot.</p>
          </div>
        </div>

        <div class="bg-white p-4 rounded-xl border border-slate-200/90 shadow-sm flex items-start gap-3">
          <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-sm shrink-0">3</div>
          <div>
            <h4 class="text-xs font-bold text-slate-900">Cloudflare Web Sharing</h4>
            <p class="text-[12px] text-slate-500 mt-0.5">Share live local sites via secure HTTPS URL in under 3 seconds.</p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>
