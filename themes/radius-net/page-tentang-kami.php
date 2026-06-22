<?php get_header(); ?>

<main class="page-content">
  <div class="container container--narrow">

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
      <span class="breadcrumb-sep">›</span>
      <span>Tentang Kami</span>
    </nav>

    <!-- Header -->
    <div class="fade-up page-header">
      <span class="badge"><span class="dot"></span> Tentang D Radius</span>
      <h1 class="section-title">Siapa Kami dan<br><span class="text-gradient">Mengapa D Radius</span></h1>
      <p class="section-subtitle section-subtitle--lg">
        D Radius lahir dari kebutuhan nyata operator ISP di Indonesia. Kami membangun platform ini agar bisnis internet rakyat bisa tumbuh tanpa hambatan teknis.
      </p>
    </div>

    <!-- Story -->
    <section class="about-section fade-up page-section">
      <h2 class="page-h2">Cerita di Balik D Radius</h2>
      <p>D Radius berdiri untuk satu tujuan sederhana. Kami ingin setiap ISP lokal di Indonesia bisa bersaing dengan layanan yang profesional dan efisien. Selain itu, kami percaya bahwa teknologi manajemen jaringan seharusnya mudah dipakai oleh semua orang, bukan hanya perusahaan besar.</p>
      <p>Platform kami dibangun oleh tim yang berpengalaman di bidang jaringan, RADIUS, dan pengembangan software. Jadi, setiap fitur yang ada di D Radius berasal dari pengalaman langsung di lapangan. Misalnya, billing otomatis, notifikasi WhatsApp, dan manajemen MikroTik semuanya dirancang untuk menjawab masalah nyata operator ISP Indonesia.</p>
    </section>

    <!-- Values grid -->
    <section class="fade-up page-section">
      <h2 class="page-h2 page-h2--mb-lg">Nilai yang Kami Pegang</h2>
      <div class="values-grid">

        <div class="feature-card feature-card--p">
          <div class="feature-icon feature-icon--mb">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
          </div>
          <h3 class="card-title">Fokus pada Pengguna</h3>
          <p class="card-desc">Setiap fitur kami rancang berdasarkan masukan langsung dari operator ISP. Jadi, platform ini benar-benar untuk kebutuhan Anda.</p>
        </div>

        <div class="feature-card feature-card--p">
          <div class="feature-icon feature-icon--mb">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          </div>
          <h3 class="card-title">Keamanan Data</h3>
          <p class="card-desc">Data Anda aman dan terenkripsi. Selain itu, data tiap ISP disimpan terpisah sehingga tidak bercampur dengan tenant lain.</p>
        </div>

        <div class="feature-card feature-card--p">
          <div class="feature-icon feature-icon--mb">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <h3 class="card-title">Harga Transparan</h3>
          <p class="card-desc">Tidak ada biaya tersembunyi. Mulai gratis, lalu bayar sesuai kebutuhan. Anda bebas naik atau turun paket kapan saja.</p>
        </div>

        <div class="feature-card feature-card--p">
          <div class="feature-icon feature-icon--mb">
            <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          </div>
          <h3 class="card-title">Support Responsif</h3>
          <p class="card-desc">Tim kami siap membantu lewat tiket support. Bahkan, masalah teknis pun kami tangani dengan cepat dan tuntas.</p>
        </div>

      </div>
    </section>

    <!-- Stats -->
    <section class="stats-grid fade-up page-section">
      <div>
        <div class="stat-value">500+</div>
        <div class="stat-label">ISP Aktif</div>
      </div>
      <div>
        <div class="stat-value">50.000+</div>
        <div class="stat-label">Pelanggan Dikelola</div>
      </div>
      <div>
        <div class="stat-value">99,9%</div>
        <div class="stat-label">Uptime Layanan</div>
      </div>
      <div>
        <div class="stat-value">34+</div>
        <div class="stat-label">Provinsi di Indonesia</div>
      </div>
    </section>

    <!-- CTA -->
    <section class="page-cta fade-up">
      <h2 class="page-cta__title">Siap Bergabung Bersama Kami?</h2>
      <p class="page-cta__desc">Mulai gratis hari ini dan rasakan kemudahan mengelola ISP Anda.</p>
      <div class="btn-group">
        <a href="https://app.dradius.net/register" class="btn btn-primary btn-lg">Daftar Gratis</a>
        <a href="<?php echo esc_url(home_url('/kontak/')); ?>" class="btn btn-outline btn-lg">Hubungi Kami</a>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>
