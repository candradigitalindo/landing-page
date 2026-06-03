<?php get_header(); ?>

<main class="page-content">
  <div class="container container--narrow">

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
      <span class="breadcrumb-sep">›</span>
      <span>Kontak</span>
    </nav>

    <!-- Header -->
    <div class="fade-up page-header">
      <span class="badge"><span class="dot"></span> Hubungi Kami</span>
      <h1 class="section-title">Kontak &amp;<br><span class="text-gradient">Tim Support</span></h1>
      <p class="section-subtitle section-subtitle--md">
        Ada pertanyaan tentang produk, tagihan, atau butuh bantuan teknis? Tim kami siap membantu Anda.
      </p>
    </div>

    <!-- Contact cards -->
    <div class="contact-grid fade-up">

      <!-- WhatsApp -->
      <div class="feature-card feature-card--p-lg">
        <div class="feature-icon feature-icon--mb-lg">
          <svg viewBox="0 0 24 24" width="26" height="26" stroke="#4ade80" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </div>
        <h3 class="card-title">WhatsApp Support</h3>
        <p class="card-desc--mb">Chat langsung dengan tim kami. Respons cepat di jam kerja.</p>
        <a href="https://wa.me/6285121398354" target="_blank" rel="noopener" class="btn btn-outline btn-xs">
          +62 851-2139-8354
        </a>
      </div>

      <!-- Email -->
      <div class="feature-card feature-card--p-lg">
        <div class="feature-icon feature-icon--mb-lg">
          <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        </div>
        <h3 class="card-title">Email Support</h3>
        <p class="card-desc--mb">Kirim pertanyaan detail lewat email. Kami balas dalam 1x24 jam.</p>
        <a href="mailto:support@dradius.online" class="btn btn-outline btn-xs">
          support@dradius.online
        </a>
      </div>

      <!-- Tiket -->
      <div class="feature-card feature-card--p-lg">
        <div class="feature-icon feature-icon--mb-lg">
          <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="M2 8h20"></path><path d="M6 12h4"></path><path d="M6 16h8"></path></svg>
        </div>
        <h3 class="card-title">Tiket Support</h3>
        <p class="card-desc--mb">Buka tiket dari dalam dasbor untuk masalah teknis atau billing.</p>
        <a href="https://app.dradius.online/login" class="btn btn-outline btn-xs">
          Buka Dasbor
        </a>
      </div>

    </div>

    <!-- FAQ teaser -->
    <section class="info-box fade-up page-section">
      <h2 class="page-h2--sm">Sebelum Menghubungi Kami</h2>
      <p class="card-desc">Mungkin jawaban yang Anda cari sudah ada di halaman FAQ kami. Selain itu, banyak pertanyaan umum sudah terjawab di sana.</p>
      <a href="<?php echo esc_url(home_url('/#faq')); ?>" class="btn btn-outline btn-sm info-box-cta">Lihat FAQ →</a>
    </section>

    <!-- Hours & location -->
    <section class="info-grid fade-up">

      <div class="feature-card feature-card--p-lg">
        <h3 class="card-title--lg">Jam Layanan</h3>
        <div class="hours-list">
          <div class="hours-row"><span>Senin – Jumat</span><span class="hours-value">08.00 – 17.00 WIB</span></div>
          <div class="hours-row"><span>Sabtu</span><span class="hours-value">08.00 – 13.00 WIB</span></div>
          <div class="hours-row"><span>Minggu &amp; Libur</span><span>Tutup</span></div>
        </div>
        <p class="hours-note">Di luar jam layanan? Tiket tetap diterima dan dibalas keesokan harinya.</p>
      </div>

      <div class="feature-card feature-card--p-lg">
        <h3 class="card-title--lg">Informasi Perusahaan</h3>
        <div class="company-info">
          <p><strong>D Radius</strong></p>
          <p>Platform Manajemen ISP Modern</p>
          <p>Indonesia</p>
          <p>
            <a href="mailto:support@dradius.online">support@dradius.online</a>
          </p>
        </div>
      </div>

    </section>

  </div>
</main>

<?php get_footer(); ?>
