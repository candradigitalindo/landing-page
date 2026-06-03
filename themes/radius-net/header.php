<?php
// SEO per halaman — title 50-60 karakter, description 145-158 karakter
$seo = [
  'title'       => 'D Radius: Software ISP Terpadu | Billing Otomatis & RADIUS',
  'description' => 'Kelola ISP lebih mudah dengan D Radius. Billing otomatis, RADIUS server, dan WhatsApp gateway dalam satu platform. Gratis hingga 20 pelanggan — coba sekarang.',
  'canonical'   => home_url('/'),
  'og_title'    => 'D Radius — Kelola ISP Lebih Cerdas & Efisien',
  'og_desc'     => 'Billing otomatis, RADIUS server, dan WhatsApp gateway dalam satu platform ISP. Mulai gratis untuk 20 pelanggan, upgrade kapan saja.',
];

if ( is_page('tentang-kami') ) {
  $seo = [
    'title'       => 'Tentang D Radius | Platform Manajemen ISP Indonesia',
    'description' => 'D Radius adalah platform ISP modern untuk RT/RW Net dan ISP lokal Indonesia. Dibuat tim berpengalaman di jaringan dan billing. 500+ ISP aktif di seluruh Indonesia.',
    'canonical'   => home_url('/tentang-kami/'),
    'og_title'    => 'Tentang D Radius — Platform ISP Modern Indonesia',
    'og_desc'     => 'Kenali tim dan misi di balik D Radius. Platform manajemen ISP terpercaya dengan 500+ operator aktif di 34+ provinsi di Indonesia.',
  ];
} elseif ( is_page('kontak') ) {
  $seo = [
    'title'       => 'Kontak & Support D Radius | WA, Email & Tiket',
    'description' => 'Hubungi tim D Radius lewat WhatsApp, email, atau tiket support. Jam layanan Senin–Jumat 08.00–17.00 WIB. Siap bantu masalah teknis dan billing ISP Anda.',
    'canonical'   => home_url('/kontak/'),
    'og_title'    => 'Hubungi Tim D Radius — Support ISP Siap Membantu',
    'og_desc'     => 'Ada pertanyaan teknis atau billing? Hubungi tim D Radius lewat WhatsApp +62 851-2139-8354 atau email support@dradius.online.',
  ];
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G7RHJB4HW6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-G7RHJB4HW6');
  </script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo esc_html($seo['title']); ?></title>
  <meta name="description" content="<?php echo esc_attr($seo['description']); ?>">
  <meta name="keywords" content="manajemen isp, radius server indonesia, billing pppoe otomatis, rtrw net, mikrotik management, whatsapp gateway isp">
  <meta name="author" content="D Radius Team">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo esc_url($seo['canonical']); ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url($seo['canonical']); ?>">
  <meta property="og:title" content="<?php echo esc_attr($seo['og_title']); ?>">
  <meta property="og:description" content="<?php echo esc_attr($seo['og_desc']); ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/og-image.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo esc_attr($seo['og_title']); ?>">
  <meta property="og:locale" content="id_ID">
  <meta property="og:site_name" content="D Radius">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_attr($seo['og_title']); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr($seo['og_desc']); ?>">
  <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/og-image.png">
  <meta name="twitter:image:alt" content="<?php echo esc_attr($seo['title']); ?>">

  <!-- Hreflang — satu bahasa, self-reference + x-default -->
  <link rel="alternate" hreflang="id" href="<?php echo esc_url($seo['canonical']); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($seo['canonical']); ?>">

  <!-- Schema.org: Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "D Radius",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "logo": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon.svg",
    "description": "Platform manajemen ISP modern untuk RT/RW Net dan Internet Provider Indonesia",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "Customer Service",
      "telephone": "+6285121398354",
      "availableLanguage": "Indonesian",
      "areaServed": "ID"
    }
  }
  </script>

  <!-- Schema.org: WebSite -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "name": "D Radius",
    "description": "Platform Manajemen ISP Modern Indonesia",
    "inLanguage": "id-ID"
  }
  </script>

  <!-- Schema.org: LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "D Radius",
    "alternateName": "D Radius ISP Management",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "logo": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon.svg",
    "image": "<?php echo esc_url(get_template_directory_uri()); ?>/assets/og-image.png",
    "description": "Platform manajemen ISP terpadu untuk RT/RW Net dan Internet Provider Indonesia. Billing otomatis, RADIUS server, WhatsApp gateway, dan manajemen MikroTik dalam satu platform.",
    "telephone": "+6285121398354",
    "email": "support@dradius.online",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "ID",
      "addressRegion": "Indonesia"
    },
    "areaServed": {
      "@type": "Country",
      "name": "Indonesia"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "08:00",
        "closes": "13:00"
      }
    ],
    "priceRange": "Rp 0 – Rp 999.000/bulan",
    "currenciesAccepted": "IDR",
    "paymentAccepted": "QRIS, Transfer Bank, Virtual Account, GoPay, OVO, Dana, ShopeePay",
    "knowsLanguage": "id-ID",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Paket Langganan D Radius",
      "itemListElement": [
        {
          "@type": "Offer",
          "name": "Paket Gratis",
          "price": "0",
          "priceCurrency": "IDR",
          "description": "Gratis hingga 20 pelanggan, semua fitur dasar"
        },
        {
          "@type": "Offer",
          "name": "Paket Professional",
          "price": "399000",
          "priceCurrency": "IDR",
          "description": "Hingga 500 pelanggan, akses API penuh, multi-reseller"
        },
        {
          "@type": "Offer",
          "name": "Paket Enterprise",
          "price": "999000",
          "priceCurrency": "IDR",
          "description": "Pelanggan tidak terbatas, dedicated support, white-label"
        }
      ]
    },
    "sameAs": [
      "https://app.dradius.online"
    ]
  }
  </script>

  <meta name="theme-color" content="#060a20">
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.svg">
  <link rel="alternate icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.svg">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="//fonts.googleapis.com">

  <!-- Preload CSS kritis agar browser fetch lebih awal -->
  <link rel="preload" as="style" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/main.css?v=2.6.1">

  <!-- Preload LCP image (poster video hero) -->
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-fallback.jpg" fetchpriority="high">

  <!-- Google Fonts async — tidak render-blocking -->
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"></noscript>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Global animated background -->
<div class="bg-canvas" aria-hidden="true">
  <span class="strand"></span><span class="strand"></span>
  <span class="strand"></span><span class="strand"></span>
</div>

<!-- ================================================================
  NAVBAR
================================================================ -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Menu utama">
  <div class="container">
    <div class="navbar-inner">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="D Radius - Beranda">
        <div class="logo-icon">
          <svg viewBox="0 0 48 48" width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="24" cy="24" r="22" stroke="#00e5ff" stroke-width="1.5" fill="rgba(0,229,255,0.06)"/>
            <path d="M24 8 L24 40" stroke="#00e5ff" stroke-width="1.5"/>
            <path d="M24 14 L16 20" stroke="#00e5ff" stroke-width="1"/>
            <path d="M24 14 L32 20" stroke="#00e5ff" stroke-width="1"/>
            <circle cx="24" cy="10" r="2" fill="#00e5ff"/>
            <circle cx="24" cy="10" r="5" stroke="rgba(0,229,255,0.4)" fill="none" class="signal-wave"/>
            <circle cx="24" cy="10" r="8" stroke="rgba(0,229,255,0.2)" fill="none" class="signal-wave delay"/>
            <path d="M12 32 Q24 26 36 32" stroke="rgba(124,77,255,0.5)" stroke-width="1" fill="none"/>
            <path d="M8 36 Q24 28 40 36" stroke="rgba(124,77,255,0.25)" stroke-width="1" fill="none"/>
          </svg>
        </div>
        <span class="logo-text-wrap">
          <span class="logo-name">D RADIUS</span>
          <span class="logo-tag">ISP Management Platform</span>
        </span>
      </a>

      <!-- Desktop nav links — urutan sesuai halaman -->
      <div class="nav-links">
        <a href="#harga">Harga</a>
        <a href="#features">Fitur</a>
        <a href="#cara-kerja">Cara Kerja</a>
        <a href="#api-langganan">API</a>
        <a href="#faq">FAQ</a>
        <a href="#blog">Blog</a>
        <a href="<?php echo esc_url(home_url('/tentang-kami/')); ?>">Tentang</a>
        <a href="<?php echo esc_url(home_url('/kontak/')); ?>">Kontak</a>
      </div>

      <!-- Desktop CTA -->
      <div class="nav-cta">
        <a href="https://app.dradius.online/login" class="btn btn-ghost">Masuk</a>
        <a href="https://app.dradius.online/register" class="btn btn-primary nav-cta-main">
          Daftar Gratis
          <svg viewBox="0 0 16 16" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="8" x2="13" y2="8"></line><polyline points="9 4 13 8 9 12"></polyline></svg>
        </a>
      </div>

      <!-- Hamburger -->
      <button class="hamburger" id="hamburger" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-nav">
        <span></span><span></span><span></span>
      </button>

    </div>
  </div>
</nav>

<!-- Mobile nav overlay -->
<div class="nav-overlay" id="nav-overlay" aria-hidden="true"></div>

<!-- Mobile nav drawer -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Menu mobile" aria-hidden="true">
  <div class="mobile-nav-header">
    <span class="logo-name mobile-nav-logo">D RADIUS</span>
    <button class="mobile-close" id="mobile-close" aria-label="Tutup menu">
      <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>
  <div class="mobile-nav-links">
    <a href="#harga" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
      Harga &amp; Paket
    </a>
    <a href="#features" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
      Fitur Platform
    </a>
    <a href="#cara-kerja" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
      Cara Kerja
    </a>
    <a href="#api-langganan" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
      API &amp; Integrasi
    </a>
    <a href="#faq" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
      FAQ
    </a>
    <a href="#blog" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
      Blog
    </a>
    <a href="<?php echo esc_url(home_url('/tentang-kami/')); ?>" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
      Tentang Kami
    </a>
    <a href="<?php echo esc_url(home_url('/kontak/')); ?>" class="mobile-link">
      <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
      Kontak
    </a>
  </div>
  <div class="mobile-nav-footer">
    <a href="https://app.dradius.online/login" class="btn btn-outline">Masuk</a>
    <a href="https://app.dradius.online/register" class="btn btn-primary">Daftar Gratis →</a>
  </div>
</nav>
