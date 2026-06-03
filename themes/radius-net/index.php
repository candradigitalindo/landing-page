<?php get_header(); ?>

<!-- ================================================================
  HERO SECTION
================================================================ -->
<section class="hero" id="home">
  <!-- Looping video background — hardware-decoded, infinite loop -->
  <video class="hero-bg" autoplay loop muted playsinline preload="none" aria-hidden="true"
    poster="<?php echo get_template_directory_uri(); ?>/assets/hero-fallback.jpg">
    <source src="<?php echo get_template_directory_uri(); ?>/assets/hero.webm" type="video/webm">
    <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-vid.mp4" type="video/mp4">
  </video>
  <!-- Corner vignette — fades bottom-right naturally -->
  <div class="hero-corner-fade" aria-hidden="true"></div>

  <div class="container">
    <div class="hero-grid">
      <div class="hero-content fade-up">
        <span class="badge hero-badge"><span class="dot"></span> Platform Manajemen ISP #1 Indonesia</span>
        <h1>Platform Manajemen ISP<br><span class="text-gradient">Lebih Cerdas</span>,<br>Lebih Efisien</h1>
        <p class="hero-desc">
          D Radius adalah platform manajemen ISP terpadu untuk RT/RW Net dan Internet Provider. Selain itu, tagihan, router, dan pelanggan dikelola di satu tempat. Jadi, bisnis Anda berjalan mudah dan cepat.
        </p>
        <div class="hero-actions">
          <a href="https://app.dradius.online/register" class="btn btn-primary btn-lg">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4.5c1.62-1.63 5-2 5-2"></path><path d="M12 15v5s3.03-.55 4.5-2c1.63-1.62 2-5 2-5"></path></svg>
            Mulai Sekarang
          </a>
          <a href="#features" class="btn btn-outline btn-lg">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
            Jelajahi Fitur
          </a>
        </div>
      </div>

      <!-- Dashboard mockup -->
      <div class="hero-visual fade-up">
        <div class="dashboard-mockup">
          <div class="mockup-header">
            <div class="mockup-dots"><span></span><span></span><span></span></div>
            <div class="mockup-title"></div>
          </div>
          <div class="mockup-body">
            <div class="mockup-stats">
              <div class="mockup-stat">
                <div class="mockup-stat-val">248</div>
                <div class="mockup-stat-label">Pelanggan</div>
                <div class="mockup-stat-change">↑ +12 bulan ini</div>
              </div>
              <div class="mockup-stat">
                <div class="mockup-stat-val">Rp 24 jt</div>
                <div class="mockup-stat-label">Revenue</div>
                <div class="mockup-stat-change">↑ +8.4%</div>
              </div>
              <div class="mockup-stat">
                <div class="mockup-stat-val">98.2%</div>
                <div class="mockup-stat-label">Online</div>
                <div class="mockup-stat-change">↑ Normal</div>
              </div>
            </div>
            <div class="mockup-list">
              <div class="mockup-row">
                <div class="mockup-row-name">Budi Santoso</div>
                <span class="mockup-row-status status-active">Aktif</span>
                <div class="mockup-row-pkg">Paket 20 Mbps</div>
              </div>
              <div class="mockup-row">
                <div class="mockup-row-name">Dewi Rahayu</div>
                <span class="mockup-row-status status-expired">Jatuh Tempo</span>
                <div class="mockup-row-pkg">Paket 10 Mbps</div>
              </div>
              <div class="mockup-row">
                <div class="mockup-row-name">Ahmad Fauzi</div>
                <span class="mockup-row-status status-active">Aktif</span>
                <div class="mockup-row-pkg">Paket 50 Mbps</div>
              </div>
              <div class="mockup-row-mini">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                </span>
                <span class="text">WhatsApp: Tagihan terkirim ke 18 pelanggan ✓</span>
              </div>
            </div>
          </div>
        </div>
        <div class="float-card float-card-1">
          <div class="fc-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#4ade80" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <div class="fc-val">Rp 4,2 jt</div>
          <div class="fc-label">Tagihan Hari Ini</div>
          <div class="fc-badge">↑ +23% vs kmrn</div>
        </div>
        <div class="float-card float-card-2">
          <div class="fc-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="#00e5ff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
          </div>
          <div class="fc-val">247/248</div>
          <div class="fc-label">User Online</div>
          <div class="fc-badge">✓ Stabil</div>
        </div>
        <!-- SEO: img representatif platform untuk crawler -->
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/og-image.png"
          alt="D Radius — Dashboard Platform Manajemen ISP Modern: billing otomatis, RADIUS server, dan WhatsApp gateway untuk RT/RW Net dan Internet Provider Indonesia"
          width="1200" height="630"
          loading="lazy"
          class="hero-seo-img"
        />
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  TECH SECTION (Auto-Scrolling Marquee)
================================================================ -->
<section class="tech-section">
  <div class="tech-scroll-container">
    <div class="tech-scroll-track tech-animate">
      <?php 
      $tech_items = [
        ['title' => 'MikroTik RouterOS', 'desc' => 'Full Support API', 'icon' => '<path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line>'],
        ['title' => 'PPPoE / DHCP', 'desc' => 'RFC Standard', 'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>'],
        ['title' => 'WhatsApp Gateway', 'desc' => 'Auto Notification', 'icon' => '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>'],
        ['title' => 'RADIUS RFC 2865', 'desc' => 'Enterprise Auth', 'icon' => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>'],
        ['title' => 'Tripay Payment', 'desc' => 'Automated Billing', 'icon' => '<rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line>'],
        ['title' => 'Midtrans', 'desc' => 'Payment Gateway', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'],
        ['title' => 'Xendit', 'desc' => 'Digital Payment', 'icon' => '<rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line>'],
        ['title' => 'WireGuard VPN', 'desc' => 'Secure Tunnel', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'],
        ['title' => 'GenieACS / CWMP', 'desc' => 'ONT Auto-Config', 'icon' => '<path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path>'],
      ];

      // Duplicate for seamless infinite scroll
      for ($i = 0; $i < 3; $i++) {
        foreach ($tech_items as $item) {
          ?>
          <div class="tech-item">
            <div class="tech-item-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><?php echo $item['icon']; ?></svg>
            </div>
            <div class="tech-item-text">
              <span class="tech-item-title"><?php echo $item['title']; ?></span>
              <span class="tech-item-desc"><?php echo $item['desc']; ?></span>
            </div>
          </div>
          <div class="tech-item-sep"></div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  PRICING SECTION
================================================================ -->
<section class="pricing section" id="harga">
  <div class="container">
    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> Harga & Paket</span>
      <h2 class="section-title">Pilih Paket yang Tepat<br><span class="text-gradient">untuk ISP Anda</span></h2>
      <p class="section-subtitle">Harga kami jelas, tanpa biaya tersembunyi. Bahkan, Anda bisa mulai gratis untuk 20 pelanggan. Lalu, naik paket kapan saja sesuai kebutuhan.</p>
      <div class="pricing-tabs">
        <button class="pricing-tab active">Bulanan</button>
        <button class="pricing-tab">Tahunan <span class="pricing-save">Hemat 20%</span></button>
      </div>
    </div>

    <!-- Termasuk di semua paket -->
    <div class="pricing-base-features fade-up">
      <div class="pbase-item">
        <svg viewBox="0 0 12 10" width="12" height="10" fill="none" stroke="#818cf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>
        RADIUS Server
      </div>
      <div class="pbase-sep"></div>
      <div class="pbase-item">
        <svg viewBox="0 0 12 10" width="12" height="10" fill="none" stroke="#818cf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>
        Billing Otomatis
      </div>
      <div class="pbase-sep"></div>
      <div class="pbase-item">
        <svg viewBox="0 0 12 10" width="12" height="10" fill="none" stroke="#818cf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>
        WhatsApp Gateway
      </div>
      <div class="pbase-sep"></div>
      <div class="pbase-item">
        <svg viewBox="0 0 12 10" width="12" height="10" fill="none" stroke="#818cf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>
        Portal Pelanggan
      </div>
      <div class="pbase-sep"></div>
      <div class="pbase-item">
        <svg viewBox="0 0 12 10" width="12" height="10" fill="none" stroke="#818cf8" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1,5 4,8 11,1"></polyline></svg>
        Support via Tiket
      </div>
    </div>

    <div class="pricing-grid" id="pricing-grid">
      <!-- Rendered dynamically from API via main.js -->
      <div class="plans-skeleton">
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
      </div>
    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  FEATURES SECTION
================================================================ -->
<section class="features section" id="features">
  <div class="container">
    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> Fitur Platform</span>
      <h2 class="section-title">Semua yang Dibutuhkan<br>ISP Modern</h2>
      <p class="section-subtitle">Satu platform untuk semua urusan ISP Anda. Selain itu, tidak perlu banyak aplikasi. Jadi, semua ada di sini, dari teknis sampai keuangan.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card featured fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
        </div>
        <h3>RADIUS Server Terintegrasi</h3>
        <p>Login pelanggan berjalan otomatis dan aman. Selain itu, cocok langsung dengan MikroTik dan router lainnya. Jadi, tidak perlu pengaturan rumit di sisi server.</p>
        <div class="feature-tags">
          <span class="feature-tag">PPPoE</span>
          <span class="feature-tag">DHCP</span>
          <span class="feature-tag">MikroTik</span>
          <span class="feature-tag">RFC 2865</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
        </div>
        <h3>Billing & Invoice Otomatis</h3>
        <p>Tagihan dibuat otomatis setiap bulan. Kemudian, pengingat langsung dikirim ke WhatsApp pelanggan. Selain itu, pelanggan bisa bayar lewat Tripay, Midtrans, atau Xendit.</p>
        <div class="feature-tags">
          <span class="feature-tag">Auto-Invoice</span>
          <span class="feature-tag">Tripay</span>
          <span class="feature-tag">Midtrans</span>
          <span class="feature-tag">Xendit</span>
          <span class="feature-tag">QRIS</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </div>
        <h3>WhatsApp Gateway Bawaan</h3>
        <p>Kirim pesan ke semua pelanggan sekaligus. Bahkan, tidak ada biaya per pesan. Selain itu, sistem menjaga akun WhatsApp Anda agar tidak kena blokir.</p>
        <div class="feature-tags">
          <span class="feature-tag">Broadcast</span>
          <span class="feature-tag">Anti-ban</span>
          <span class="feature-tag">QR Login</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
        </div>
        <h3>Manajemen Router & FTTH</h3>
        <p>Lihat status router secara langsung dari dasbor. Selain itu, Anda juga bisa kelola perangkat fiber optik di sini. Jadi, semua jaringan terpantau dari satu layar.</p>
        <div class="feature-tags">
          <span class="feature-tag">OLT/ONT</span>
          <span class="feature-tag">Live Monitor</span>
          <span class="feature-tag">SNMP</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
        </div>
        <h3>Laporan & Analitik</h3>
        <p>Lihat pendapatan dan jumlah pelanggan aktif setiap saat. Selanjutnya, grafik tumbuhnya bisnis Anda tersaji jelas. Jadi, Anda bisa ambil keputusan lebih cepat.</p>
        <div class="feature-tags">
          <span class="feature-tag">Revenue Report</span>
          <span class="feature-tag">Export Excel</span>
          <span class="feature-tag">Real-time</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <h3>Multi-Reseller & Multi-User</h3>
        <p>Kelola reseller dan hitung komisi secara otomatis. Selain itu, Anda bisa atur hak akses tiap pengguna. Bahkan, data tiap ISP tersimpan terpisah dan aman.</p>
        <div class="feature-tags">
          <span class="feature-tag">Role & Permission</span>
          <span class="feature-tag">Komisi</span>
          <span class="feature-tag">Multi-tenant</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="M2 8h20"></path><path d="M6 12h4"></path><path d="M6 16h8"></path></svg>
        </div>
        <h3>Sistem Tiket & Support</h3>
        <p>Terima laporan masalah dari pelanggan lewat tiket. Kemudian, pantau proses penyelesaiannya dengan mudah. Selain itu, semua riwayat percakapan tersimpan rapi di satu tempat.</p>
        <div class="feature-tags">
          <span class="feature-tag">Tiket Support</span>
          <span class="feature-tag">History Log</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
        </div>
        <h3>Program Referral & Reward</h3>
        <p>Pelanggan ajak teman, mereka dapat hadiah. Misalnya, diskon tagihan atau tambahan saldo gratis. Jadi, bisnis Anda tumbuh tanpa perlu iklan berbayar.</p>
        <div class="feature-tags">
          <span class="feature-tag">Referral Code</span>
          <span class="feature-tag">Loyalty</span>
          <span class="feature-tag">Cashback</span>
        </div>
      </div>

      <div class="feature-card fade-up">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
        </div>
        <h3>Portal Pelanggan</h3>
        <p>Pelanggan bisa cek tagihan dan bayar sendiri lewat portal. Selain itu, mereka bisa lapor masalah tanpa perlu telepon admin. Jadi, tim Anda lebih hemat waktu.</p>
        <div class="feature-tags">
          <span class="feature-tag">Self-Service</span>
          <span class="feature-tag">Mobile-friendly</span>
          <span class="feature-tag">Bayar Online</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  HOW IT WORKS
================================================================ -->
<section class="how-it-works section" id="cara-kerja">
  <div class="container">
    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> Cara Kerja</span>
      <h2 class="section-title">Mulai Kelola ISP dalam 4 Langkah</h2>
      <p class="section-subtitle">ISP Anda bisa langsung jalan dalam hitungan menit. Bahkan, prosesnya mudah dan cepat.</p>
    </div>
    <div class="steps-grid">
      <div class="step fade-up">
        <div class="step-number">1</div>
        <h3>Daftar Akun</h3>
        <p>Daftar gratis tanpa kartu kredit. Selain itu, semua fitur langsung bisa Anda pakai. Cukup untuk 20 pelanggan pertama Anda.</p>
      </div>
      <div class="step fade-up">
        <div class="step-number">2</div>
        <h3>Konfigurasi Router</h3>
        <p>Tambah router MikroTik Anda ke sistem. Lalu, masukkan IP dan kode RADIUS-nya. Selain itu, panduan lengkap sudah tersedia untuk semua tipe router.</p>
      </div>
      <div class="step fade-up">
        <div class="step-number">3</div>
        <h3>Tambah Pelanggan</h3>
        <p>Isi data pelanggan dan pilih paket internet. Kemudian, akun langsung dibuat secara otomatis. Jadi, pelanggan bisa konek tanpa perlu atur router lagi.</p>
      </div>
      <div class="step fade-up">
        <div class="step-number">4</div>
        <h3>Billing Berjalan Otomatis</h3>
        <p>Tagihan dibuat dan dikirim otomatis tiap bulan. Selain itu, pelanggan bayar lewat WhatsApp atau transfer online. Jadi, ISP Anda jalan terus meski Anda sedang tidur.</p>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  API SUBSCRIBE SECTION
================================================================ -->
<section class="api-subscribe section" id="api-langganan">
  <div class="container">

    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> API Subscription</span>
      <h2 class="section-title">Integrasikan Platform ISP Anda<br><span class="text-gradient">dengan REST API Penuh</span></h2>
      <p class="section-subtitle">Lebih dari 50 fitur API siap Anda pakai. Selain itu, kelola pelanggan, tagihan, dan pesan WhatsApp lewat kode. Bahkan, dokumentasi lengkap sudah tersedia untuk developer.</p>
    </div>

    <!-- Integration flow steps -->
    <div class="api-flow">
      <div class="api-flow-step fade-up">
        <div class="afs-num">01</div>
        <div class="afs-card">
          <div class="afs-icon">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
          </div>
          <h4>Cek Paket API</h4>
          <p>Lihat semua paket beserta harga dan batas pelanggan. Bahkan, tidak perlu login untuk mengaksesnya.</p>
          <div class="afs-ep"><span class="ep-m ep-get">GET</span>/api/v1/auth/plans</div>
        </div>
      </div>
      <div class="afs-arrow" aria-hidden="true">
        <svg viewBox="0 0 40 16" width="36" height="16" fill="none"><path d="M0 8 H30 M25 3 L33 8 L25 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="api-flow-step fade-up">
        <div class="afs-num">02</div>
        <div class="afs-card">
          <div class="afs-icon">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          </div>
          <h4>Daftar &amp; Dapatkan Token</h4>
          <p>Daftar akun ISP baru dan langsung dapat token akses. Selain itu, akun aktif seketika dengan paket Gratis.</p>
          <div class="afs-ep"><span class="ep-m ep-post">POST</span>/api/v1/auth/register</div>
        </div>
      </div>
      <div class="afs-arrow" aria-hidden="true">
        <svg viewBox="0 0 40 16" width="36" height="16" fill="none"><path d="M0 8 H30 M25 3 L33 8 L25 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="api-flow-step fade-up">
        <div class="afs-num">03</div>
        <div class="afs-card">
          <div class="afs-icon">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <h4>Upgrade Berlangganan</h4>
          <p>Naik ke paket Professional atau Enterprise. Lalu, bayar lewat Tripay, Midtrans, atau Xendit. Akibatnya, akses API penuh langsung aktif.</p>
          <div class="afs-ep"><span class="ep-m ep-post">POST</span>/api/v1/subscriptions</div>
        </div>
      </div>
      <div class="afs-arrow" aria-hidden="true">
        <svg viewBox="0 0 40 16" width="36" height="16" fill="none"><path d="M0 8 H30 M25 3 L33 8 L25 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="api-flow-step fade-up">
        <div class="afs-num">04</div>
        <div class="afs-card">
          <div class="afs-icon">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
          </div>
          <h4>Mulai Integrasi</h4>
          <p>Sertakan token di setiap permintaan API Anda. Selain itu, dokumentasi lengkap siap dibaca kapan saja.</p>
          <div class="afs-ep"><span class="ep-m ep-auth">AUTH</span>Bearer {token}</div>
        </div>
      </div>
    </div>

    <!-- Interactive code demo -->
    <div class="api-demo-wrap fade-up">

      <!-- Left sidebar: endpoint tabs + access matrix -->
      <div class="api-demo-left">
        <div class="adl-section-label">Pilih Endpoint</div>
        <div class="demo-tab-btns">
          <button class="demo-tab-btn active" data-panel="panel-plans">
            <span class="dtb-method get">GET</span>
            <span class="dtb-path">/auth/plans</span>
            <span class="dtb-scope">Publik</span>
          </button>
          <button class="demo-tab-btn" data-panel="panel-register">
            <span class="dtb-method post">POST</span>
            <span class="dtb-path">/auth/register</span>
            <span class="dtb-scope">Publik</span>
          </button>
          <button class="demo-tab-btn" data-panel="panel-subscribe">
            <span class="dtb-method post">POST</span>
            <span class="dtb-path">/subscriptions</span>
            <span class="dtb-scope">Auth</span>
          </button>
          <button class="demo-tab-btn" data-panel="panel-customers">
            <span class="dtb-method get">GET</span>
            <span class="dtb-path">/customers</span>
            <span class="dtb-scope">Auth</span>
          </button>
        </div>

        <div class="adl-section-label adl-label-mt">Akses API per Paket</div>
        <div class="api-access-table">
          <div class="aat-row">
            <span class="aat-plan">Gratis</span>
            <span class="aat-badge aat-no">✕ Terbatas</span>
          </div>
          <div class="aat-row">
            <span class="aat-plan">Starter</span>
            <span class="aat-badge aat-no">✕ Terbatas</span>
          </div>
          <div class="aat-row">
            <span class="aat-plan">Growth</span>
            <span class="aat-badge aat-partial">≈ Dasar</span>
          </div>
          <div class="aat-row aat-highlight">
            <span class="aat-plan">Professional</span>
            <span class="aat-badge aat-full">✓ Penuh</span>
          </div>
          <div class="aat-row aat-highlight">
            <span class="aat-plan">Enterprise</span>
            <span class="aat-badge aat-full">✓ Penuh</span>
          </div>
        </div>
      </div>

      <!-- Right: terminal code blocks -->
      <div class="api-demo-right">

        <!-- Tab: Cek Paket -->
        <div class="demo-panel-wrap active" id="panel-plans">
          <div class="api-terminal">
            <div class="terminal-bar">
              <div class="term-dots"><span class="td-red"></span><span class="td-yellow"></span><span class="td-green"></span></div>
              <div class="term-title">GET /api/v1/auth/plans</div>
              <div class="term-status ok">200 OK</div>
            </div>
            <div class="terminal-body">
              <button class="copy-btn" data-target="code-plans">⎘ Salin</button>
              <pre id="code-plans"><span class="cmt">// Endpoint publik — tidak perlu autentikasi</span>
<span class="kw">curl</span> <span class="str">"https://api.radiusnet.id/api/v1/auth/plans"</span>

<span class="cmt">// Response 200 OK</span>
{
  <span class="key">"plans"</span>: [
    {
      <span class="key">"id"</span>: <span class="str">"gratis"</span>,
      <span class="key">"name"</span>: <span class="str">"Gratis"</span>,
      <span class="key">"max_customers"</span>: <span class="num">20</span>,
      <span class="key">"price_monthly"</span>: <span class="num">0</span>,
      <span class="key">"features"</span>: [<span class="str">"radius"</span>, <span class="str">"billing"</span>, <span class="str">"whatsapp"</span>]
    },
    {
      <span class="key">"id"</span>: <span class="str">"professional"</span>,
      <span class="key">"name"</span>: <span class="str">"Professional"</span>,
      <span class="key">"max_customers"</span>: <span class="num">1000</span>,
      <span class="key">"price_monthly"</span>: <span class="num">399000</span>,
      <span class="key">"features"</span>: [<span class="str">"radius"</span>, <span class="str">"billing"</span>,
                   <span class="str">"whatsapp"</span>, <span class="str">"full_api"</span>,
                   <span class="str">"reseller"</span>, <span class="str">"ftth"</span>]
    }
  ]
}</pre>
            </div>
          </div>
        </div>

        <!-- Tab: Daftar Akun -->
        <div class="demo-panel-wrap" id="panel-register">
          <div class="api-terminal">
            <div class="terminal-bar">
              <div class="term-dots"><span class="td-red"></span><span class="td-yellow"></span><span class="td-green"></span></div>
              <div class="term-title">POST /api/v1/auth/register</div>
              <div class="term-status ok">201 Created</div>
            </div>
            <div class="terminal-body">
              <button class="copy-btn" data-target="code-register">⎘ Salin</button>
              <pre id="code-register"><span class="kw">curl</span> -X POST <span class="str">"https://api.radiusnet.id/api/v1/auth/register"</span> \
  -H <span class="str">"Content-Type: application/json"</span> \
  -d '{
    <span class="key">"name"</span>:     <span class="str">"Budi Santoso"</span>,
    <span class="key">"email"</span>:    <span class="str">"budi@rtrwnet.id"</span>,
    <span class="key">"password"</span>: <span class="str">"P@ssw0rd!"</span>,
    <span class="key">"company"</span>:  <span class="str">"RT/RW Net Sukamaju"</span>,
    <span class="key">"phone"</span>:    <span class="str">"08123456789"</span>
  }'

<span class="cmt">// Response — token langsung aktif, paket Gratis</span>
{
  <span class="key">"access_token"</span>:  <span class="str">"eyJhbGciOiJSUzI1NiJ9..."</span>,
  <span class="key">"refresh_token"</span>: <span class="str">"eyJhbGciOiJSUzI1NiJ9..."</span>,
  <span class="key">"expires_in"</span>:    <span class="num">900</span>,
  <span class="key">"tenant"</span>: {
    <span class="key">"id"</span>:    <span class="str">"01KXXXXXXXXXXXXX"</span>,
    <span class="key">"slug"</span>:  <span class="str">"rtrw-net-sukamaju"</span>,
    <span class="key">"plan"</span>:  <span class="str">"gratis"</span>
  }
}</pre>
            </div>
          </div>
        </div>

        <!-- Tab: Berlangganan -->
        <div class="demo-panel-wrap" id="panel-subscribe">
          <div class="api-terminal">
            <div class="terminal-bar">
              <div class="term-dots"><span class="td-red"></span><span class="td-yellow"></span><span class="td-green"></span></div>
              <div class="term-title">POST /api/v1/subscriptions</div>
              <div class="term-status ok">200 OK</div>
            </div>
            <div class="terminal-body">
              <button class="copy-btn" data-target="code-subscribe">⎘ Salin</button>
              <pre id="code-subscribe"><span class="cmt">// Upgrade ke paket Professional</span>
<span class="kw">curl</span> -X POST <span class="str">"https://api.radiusnet.id/api/v1/subscriptions"</span> \
  -H <span class="str">"Authorization: Bearer {access_token}"</span> \
  -H <span class="str">"Content-Type: application/json"</span> \
  -d '{
    <span class="key">"plan_id"</span>:        <span class="str">"professional"</span>,
    <span class="key">"payment_method"</span>: <span class="str">"QRIS"</span>,
    <span class="key">"period"</span>:         <span class="str">"monthly"</span>
  }'

<span class="cmt">// Response — link pembayaran via Tripay</span>
{
  <span class="key">"invoice_id"</span>:  <span class="str">"INV-2025-001"</span>,
  <span class="key">"amount"</span>:      <span class="num">399000</span>,
  <span class="key">"pay_url"</span>:     <span class="str">"https://tripay.co.id/pay/..."</span>,
  <span class="key">"qr_code_url"</span>: <span class="str">"https://tripay.co.id/qr/..."</span>,
  <span class="key">"expired_at"</span>:  <span class="str">"2025-12-31T23:59:59Z"</span>,
  <span class="key">"status"</span>:      <span class="str">"pending"</span>
}</pre>
            </div>
          </div>
        </div>

        <!-- Tab: Kelola Pelanggan -->
        <div class="demo-panel-wrap" id="panel-customers">
          <div class="api-terminal">
            <div class="terminal-bar">
              <div class="term-dots"><span class="td-red"></span><span class="td-yellow"></span><span class="td-green"></span></div>
              <div class="term-title">GET /api/v1/customers</div>
              <div class="term-status ok">200 OK</div>
            </div>
            <div class="terminal-body">
              <button class="copy-btn" data-target="code-customers">⎘ Salin</button>
              <pre id="code-customers"><span class="kw">curl</span> \
  <span class="str">"https://api.radiusnet.id/api/v1/customers?page=1&amp;limit=20"</span> \
  -H <span class="str">"Authorization: Bearer {access_token}"</span>

<span class="cmt">// Response</span>
{
  <span class="key">"data"</span>: [
    {
      <span class="key">"id"</span>:         <span class="str">"01KXXXXXXXXXXXXX"</span>,
      <span class="key">"name"</span>:       <span class="str">"Budi Santoso"</span>,
      <span class="key">"username"</span>:   <span class="str">"budi001"</span>,
      <span class="key">"package"</span>:    <span class="str">"Paket 20 Mbps"</span>,
      <span class="key">"status"</span>:     <span class="str">"active"</span>,
      <span class="key">"expires_at"</span>: <span class="str">"2025-12-31"</span>
    }
  ],
  <span class="key">"meta"</span>: { <span class="key">"total"</span>: <span class="num">248</span>, <span class="key">"page"</span>: <span class="num">1</span> }
}</pre>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  TESTIMONIALS
================================================================ -->
<section class="testimonials section" id="testimonial">
  <div class="container">

    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> Testimoni</span>
      <h2 class="section-title">Dipercaya ISP<br><span class="text-gradient">di Seluruh Indonesia</span></h2>
      <p class="section-subtitle">Lebih dari 500 operator ISP dan RT/RW Net pakai D Radius setiap hari.</p>
    </div>


  </div>

  <?php
  $cards = [
    ['i'=>'B','av'=>1,'name'=>'Budi Hartono',  'role'=>'RT/RW Net · Bekasi',      'chip'=>'Billing Otomatis',   'text'=>'Tagihan, pengingat WA, dan router kini satu dasbor. Jadi, ISP saya tetap jalan meski saya sedang tidur.'],
    ['i'=>'S','av'=>2,'name'=>'Sinta Dewi',    'role'=>'ISP Lokal · Surabaya',    'chip'=>'WhatsApp Gateway',   'text'=>'Saat tagihan jatuh tempo, WA langsung terkirim. Pelanggan cepat bayar. Uang masuk lebih lancar dari sebelumnya.'],
    ['i'=>'A','av'=>3,'name'=>'Ahmad Rifai',   'role'=>'ISP FTTH · Bandung',      'chip'=>'FTTH Management',    'text'=>'Setup 3 jam dan langsung live. Selain itu, semua perangkat fiber terpantau dari satu layar. Bahkan, MikroTik langsung konek tanpa ribet.'],
    ['i'=>'R','av'=>4,'name'=>'Rudi Setiawan', 'role'=>'Multi-Reseller · Yogya',  'chip'=>'Multi-Reseller',     'text'=>'Komisi reseller dihitung otomatis tiap bulan. Selain itu, langsung masuk ke laporan keuangan. Jadi, saya hemat berjam-jam kerja setiap bulannya.'],
    ['i'=>'D','av'=>5,'name'=>'Diana Pratiwi', 'role'=>'RT/RW Net · Medan',       'chip'=>'Portal Pelanggan',   'text'=>'Pelanggan cek tagihan dan bayar sendiri lewat portal. Akibatnya, telepon ke admin turun banyak. Jadi, tim kami kini lebih fokus ke hal yang penting.'],
    ['i'=>'H','av'=>6,'name'=>'Hendra Kusuma', 'role'=>'ISP Lokal · Semarang',    'chip'=>'Laporan Real-time',  'text'=>'Grafik pendapatan dan jumlah pelanggan terlihat jelas. Jadi, saya mudah ambil keputusan kapan pun.'],
  ];

  function render_tc($c) {
    $av = $c['av'];
    echo '<div class="tc">';
    echo '<div class="tc-top"><span class="tc-q">&#8220;</span><span class="tc-stars">★★★★★</span></div>';
    echo '<p class="tc-text">'.htmlspecialchars($c['text']).'</p>';
    echo '<div class="tc-sep"></div>';
    echo '<div class="tc-foot">';
    echo '<div class="tc-av tc-av-'.$av.'">'.$c['i'].'</div>';
    echo '<div class="tc-meta"><div class="tc-name">'.htmlspecialchars($c['name']).'</div><div class="tc-role">'.htmlspecialchars($c['role']).'</div></div>';
    echo '<div class="tc-chip">'.htmlspecialchars($c['chip']).'</div>';
    echo '</div></div>';
  }

  echo '<div class="testi-marquee-wrap"><div class="testi-row testi-left">';
  for ($r = 0; $r < 3; $r++) foreach ($cards as $c) render_tc($c);
  echo '</div></div>';
  ?>

</section>

<div class="section-divider"></div>

<!-- ================================================================
  BLOG SECTION
================================================================ -->
<section class="blog-section section" id="blog">
  <div class="container">

    <div class="text-center fade-up">
      <span class="badge"><span class="dot"></span> Blog & Artikel</span>
      <h2 class="section-title">Wawasan untuk<br><span class="text-gradient">Operator ISP Indonesia</span></h2>
      <p class="section-subtitle">Tips, tutorial, dan cerita nyata dari komunitas ISP lokal Indonesia.</p>
    </div>

    <?php
    $blog_q = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);
    if ($blog_q->have_posts()): ?>
    <div class="blog-grid">
      <?php $i = 0; while ($blog_q->have_posts()): $blog_q->the_post();
        get_template_part('template-parts/blog-card', null, ['idx' => $i, 'heading' => 'h3']);
        $i++;
      endwhile; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>

    <div class="text-center fade-up" style="--delay:0.3s;margin-top:40px">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-outline">Lihat Semua Artikel →</a>
    </div>

  </div>
</section>

<div class="section-divider"></div>

<!-- ================================================================
  FAQ SECTION
================================================================ -->
<section class="faq-section section" id="faq">
  <div class="container">

    <!-- Header: judul kiri, CTA kanan -->
    <div class="faq-header fade-up">
      <div>
        <span class="badge"><span class="dot"></span> FAQ</span>
        <h2 class="section-title">Pertanyaan Seputar<br><span class="text-gradient">Platform ISP D Radius</span></h2>
        <p class="section-subtitle section-subtitle--sm">7 jawaban untuk pertanyaan yang paling sering kami terima dari operator ISP.</p>
      </div>
      <div class="faq-cta-box">
        <div class="faq-cta-icon">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </div>
        <p>Tidak menemukan jawaban yang Anda cari?</p>
        <a href="#" class="btn btn-outline btn-sm">Tanya via WhatsApp</a>
      </div>
    </div>

    <div class="faq-list">

      <?php
      $faqs = [
        ['num'=>'01','cat'=>'Harga & Paket','q'=>'Apakah paket Gratis benar-benar gratis selamanya?',
         'quick'=>'Ya — gratis 100% untuk hingga 20 pelanggan, tanpa batas waktu, tanpa kartu kredit.',
         'a'=>'Anda bisa pakai semua fitur utama secara gratis. Misalnya, tagihan otomatis dan pesan WhatsApp sudah termasuk. Selain itu, daftar tidak perlu kartu kredit. Kemudian, naik paket kapan saja saat bisnis berkembang.'],
        ['num'=>'02','cat'=>'Setup & Onboarding','q'=>'Berapa lama proses setup hingga ISP saya bisa beroperasi?',
         'quick'=>'Rata-rata hanya 4 jam dari pendaftaran hingga ISP Anda live.',
         'a'=>'Panduan kami memandu Anda dari awal sampai selesai. Pertama, atur router dan tambah pelanggan. Kemudian, aktifkan tagihan otomatis. Selain itu, tim kami siap bantu lewat tiket jika ada masalah.'],
        ['num'=>'03','cat'=>'Kompatibilitas','q'=>'Router MikroTik seri apa saja yang kompatibel?',
         'quick'=>'Semua MikroTik yang mendukung RADIUS client: RB, hAP, CCR, CRS, CHR (RouterOS ≥ 6.x).',
         'a'=>'Tidak hanya MikroTik. Selain itu, semua router yang mendukung RADIUS bisa langsung terhubung. Jadi, tidak ada batasan merk atau model tertentu.'],
        ['num'=>'04','cat'=>'Keamanan','q'=>'Apakah data pelanggan saya aman?',
         'quick'=>'Enkripsi TLS 1.3, isolasi database per tenant, dan zero data sharing ke pihak ketiga.',
         'a'=>'Semua data Anda terenkripsi dan tersimpan aman. Selain itu, data tiap ISP disimpan terpisah dan tidak bercampur. Jadi, kami tidak pernah menjual atau membagikan data Anda.'],
        ['num'=>'05','cat'=>'Harga & Paket','q'=>'Bisakah saya upgrade atau downgrade paket kapan saja?',
         'quick'=>'Ya — upgrade aktif langsung setelah bayar; downgrade berlaku awal periode berikutnya. Tanpa denda.',
         'a'=>'Ganti paket kapan saja lewat dasbor Anda. Selain itu, tidak ada kontrak dan tidak ada denda. Jadi, sesuaikan paket sesuai besar kecilnya bisnis Anda.'],
        ['num'=>'06','cat'=>'SaaS Cloud','q'=>'Apakah saya perlu server sendiri untuk menggunakan D Radius?',
         'quick'=>'Tidak perlu. D Radius adalah SaaS cloud — cukup router MikroTik yang diarahkan ke RADIUS kami.',
         'a'=>'Tidak perlu pasang software di komputer Anda. Bahkan, semua berjalan di cloud kami. Jadi, cukup arahkan router ke server kami dan selesai.'],
        ['num'=>'07','cat'=>'API Access','q'=>'Paket mana yang mendapat akses API penuh?',
         'quick'=>'Professional & Enterprise mendapat full API access. Growth mendapat API dasar (read-only).',
         'a'=>'Paket Gratis dan Starter hanya bisa lewat dasbor web. Namun, untuk sambungkan sistem Anda lewat API, pilih paket Professional. Mulai dari Rp 399 ribu per bulan.'],
      ];
      foreach ($faqs as $i => $f):
        $delay = $i * 0.05;
      ?>
      <div class="faq-item fade-up" style="--delay:<?php echo $delay; ?>s">
        <div class="faq-q">
          <div class="faq-q-inner">
            <span class="faq-num"><?php echo $f['num']; ?></span>
            <div class="faq-q-body">
              <span class="faq-badge"><?php echo htmlspecialchars($f['cat']); ?></span>
              <span class="faq-q-text"><?php echo htmlspecialchars($f['q']); ?></span>
            </div>
          </div>
          <span class="faq-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">
            <div class="faq-a-content">
              <div class="faq-quick"><?php echo htmlspecialchars($f['quick']); ?></div>
              <p><?php echo htmlspecialchars($f['a']); ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- Schema.org: FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Apakah paket Gratis benar-benar gratis selamanya?",
      "acceptedAnswer": { "@type": "Answer", "text": "Ya — gratis 100% untuk hingga 20 pelanggan, tanpa batas waktu, tanpa kartu kredit. Anda bisa mengakses semua fitur inti termasuk RADIUS server, billing otomatis, dan WhatsApp gateway." }
    },
    {
      "@type": "Question",
      "name": "Berapa lama proses setup hingga ISP saya bisa beroperasi?",
      "acceptedAnswer": { "@type": "Answer", "text": "Rata-rata hanya 4 jam dari pendaftaran hingga ISP Anda live. Panduan step-by-step tersedia untuk konfigurasi MikroTik, input pelanggan pertama, dan setup billing otomatis." }
    },
    {
      "@type": "Question",
      "name": "Router MikroTik seri apa saja yang kompatibel?",
      "acceptedAnswer": { "@type": "Answer", "text": "Semua MikroTik yang mendukung RADIUS client: RB, hAP, CCR, CRS, CHR (RouterOS ≥ 6.x). Ubiquiti EdgeRouter dan perangkat lain yang mendukung standar RFC 2865 juga kompatibel penuh." }
    },
    {
      "@type": "Question",
      "name": "Apakah data pelanggan saya aman?",
      "acceptedAnswer": { "@type": "Answer", "text": "Enkripsi TLS 1.3, isolasi database per tenant, dan zero data sharing ke pihak ketiga. Semua data dienkripsi saat transit dan saat penyimpanan. Setiap ISP memiliki isolasi database penuh." }
    },
    {
      "@type": "Question",
      "name": "Bisakah saya upgrade atau downgrade paket kapan saja?",
      "acceptedAnswer": { "@type": "Answer", "text": "Ya — upgrade aktif langsung setelah bayar; downgrade berlaku awal periode berikutnya. Tidak ada kontrak jangka panjang, tidak ada biaya pembatalan." }
    },
    {
      "@type": "Question",
      "name": "Apakah saya perlu server sendiri untuk menggunakan D Radius?",
      "acceptedAnswer": { "@type": "Answer", "text": "Tidak perlu. D Radius adalah SaaS cloud — cukup router MikroTik yang diarahkan ke RADIUS kami. Tidak ada instalasi software di server lokal yang diperlukan." }
    },
    {
      "@type": "Question",
      "name": "Paket mana yang mendapat akses API penuh?",
      "acceptedAnswer": { "@type": "Answer", "text": "Professional & Enterprise mendapat full API access. Growth mendapat API dasar (read-only). Paket Gratis dan Starter hanya mendukung akses via dashboard web." }
    }
  ]
}
</script>

<?php get_footer(); ?>
