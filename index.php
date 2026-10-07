<?php
/**
 * C-Script LocalHost Panel — World-Class Landing Page
 * Modern, High-Performance Local Development Environment for PHP, NGINX & MySQL on Windows
 *
 * Designed in the HitPay SaaS aesthetic: clean, minimal, human-crafted with precision.
 * Author: Chamika Sandeepa
 * Version: 1.2.1
 */

$appConfig = [
    'name' => 'C-Script LocalHost Panel',
    'version' => '1.2.1',
    'tagline' => 'Modern, High-Performance Local Development Suite for Windows',
    'description' => 'Run multi-version PHP (8.1 – 8.5), automated NGINX virtual hosts with wildcard SSL, portable MariaDB, Smart Developer Directory Indexing, and instant Cloudflare public sharing. 100% offline, zero UAC elevation loops.',
    'siteUrl' => 'https://c-script.opik.net/',
    'githubUrl' => 'https://github.com/CHAMI-csr/c-script-localhost-panel',
    'releaseDate' => 'October 2026',
    'currentYear' => date('Y'),
    'downloadSize' => '184 MB',
    'supportedWindows' => 'Windows 10 (1903+) & Windows 11 (64-bit)'
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?php echo htmlspecialchars($appConfig['name']); ?> — <?php echo htmlspecialchars($appConfig['tagline']); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($appConfig['description']); ?>">
  <meta name="keywords" content="c-script localhost panel, windows php panel, nginx windows, local development, mariadb windows, laravel windows, herd alternative, xampp alternative, laragon alternative, wildcard ssl test domain">
  <meta name="author" content="Chamika Sandeepa">
  <link rel="canonical" href="https://c-script.opik.net/">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://c-script.opik.net/">
  <meta property="og:title" content="<?php echo htmlspecialchars($appConfig['name']); ?> — v<?php echo htmlspecialchars($appConfig['version']); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($appConfig['description']); ?>">
  <meta property="og:image" content="https://c-script.opik.net/assets/images/logo.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://c-script.opik.net/">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($appConfig['name']); ?> — v<?php echo htmlspecialchars($appConfig['version']); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($appConfig['description']); ?>">
  <meta name="twitter:image" content="https://c-script.opik.net/assets/images/logo.png">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="apple-touch-icon" href="assets/images/logo.png">

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#EEF2FF',
              100: '#E0E7FF',
              500: '#6366F1',
              600: '#4F46E5',
              700: '#4338CA',
              900: '#312E81',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          }
        }
      }
    }
  </script>

  <!-- Custom Stylesheet -->
  <?php $assetVersion = file_exists(__DIR__ . '/assets/js/main.js') ? filemtime(__DIR__ . '/assets/js/main.js') : time(); ?>
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo $assetVersion; ?>">
</head>
<body class="bg-white text-slate-900 antialiased selection:bg-indigo-600 selection:text-white">

  <!-- Header & Navbar -->
  <?php require_once __DIR__ . '/includes/navbar.php'; ?>

  <!-- Main Content -->
  <main>
    <!-- 1. Hero Section -->
    <?php require_once __DIR__ . '/includes/hero.php'; ?>

    <!-- 2. Marketing Video Showcase Section -->
    <?php require_once __DIR__ . '/includes/video-showcase.php'; ?>

    <!-- 3. Bento Grid Features -->
    <?php require_once __DIR__ . '/includes/features.php'; ?>

    <!-- 4. Interactive HitPay-Style Architecture Tour -->
    <?php require_once __DIR__ . '/includes/interactive-demo.php'; ?>

    <!-- 5. Resilient Storage & AppData Architecture -->
    <?php require_once __DIR__ . '/includes/architecture.php'; ?>

    <!-- 6. Direct Comparison Matrix -->
    <?php require_once __DIR__ . '/includes/comparison.php'; ?>

    <!-- 7. Downloads & OS Availability (Windows, macOS, Linux) -->
    <?php require_once __DIR__ . '/includes/downloads.php'; ?>

    <!-- 8. Frequently Asked Questions -->
    <?php require_once __DIR__ . '/includes/faq.php'; ?>
  </main>

  <!-- Footer -->
  <?php require_once __DIR__ . '/includes/footer.php'; ?>

  <!-- Client JavaScript Interactions -->
  <script src="assets/js/main.js?v=<?php echo $assetVersion; ?>"></script>
</body>
</html>
