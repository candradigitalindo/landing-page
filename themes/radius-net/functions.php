<?php
function radius_net_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
    add_image_size('blog-card', 760, 428, true);   // 16:9 @2x untuk card grid
    add_image_size('blog-hero', 1200, 630, true);  // OG-style untuk single post
}
add_action('after_setup_theme', 'radius_net_setup');

function radius_net_scripts() {
    // Google Fonts dimuat async di header.php agar tidak render-blocking
    wp_enqueue_style('radius-net-main', get_template_directory_uri() . '/assets/main.css', [], '2.6.1');
    wp_enqueue_script('radius-net-main', get_template_directory_uri() . '/assets/main.js', [], '2.6.1', true);
}
add_action('wp_enqueue_scripts', 'radius_net_scripts');

// Tambahkan defer pada main.js
add_filter('script_loader_tag', function($tag, $handle) {
    if ($handle === 'radius-net-main') {
        return str_replace('<script ', '<script defer ', $tag);
    }
    return $tag;
}, 10, 2);

// Hapus favicon bawaan WordPress agar tidak override favicon tema
remove_action('wp_head', 'wp_site_icon', 99);

// Hapus canonical bawaan WordPress — canonical dikelola manual di header.php
remove_action('wp_head', 'rel_canonical');

// ================================================================
// BLOG HELPERS
// ================================================================

function dradius_read_time($post_id = null) {
    $content = get_post_field('post_content', $post_id ?: get_the_ID());
    $words   = str_word_count(strip_tags($content));
    return max(1, ceil($words / 200)) . ' menit baca';
}

function dradius_cat_class($slug) {
    $map = [
        'tutorial'   => 'blog-cat--tutorial',
        'bisnis-isp' => 'blog-cat--bisnis',
        'tips-trik'  => 'blog-cat--tips',
    ];
    return $map[$slug] ?? 'blog-cat--tutorial';
}

function dradius_cat_icon($slug) {
    $icons = [
        'tutorial'   => '<svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>',
        'bisnis-isp' => '<svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
        'tips-trik'  => '<svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="6"/><path d="M12 6a6 6 0 0 1 0 12"/><path d="M12 18v4"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/><path d="M9 21h6"/></svg>',
    ];
    return $icons[$slug] ?? $icons['tutorial'];
}

// Buat kategori + halaman Blog + sample posts saat pertama kali tema diload
function dradius_setup_blog() {
    // Kategori default
    $cats = [
        ['Tutorial',   'tutorial'],
        ['Bisnis ISP', 'bisnis-isp'],
        ['Tips & Trik','tips-trik'],
    ];
    foreach ($cats as [$name, $slug]) {
        if (!term_exists($slug, 'category')) {
            wp_insert_term($name, 'category', ['slug' => $slug]);
        }
    }

    // Halaman Blog (template page-blog.php otomatis dipakai karena slug = blog)
    if (!get_page_by_path('blog')) {
        wp_insert_post([
            'post_title'  => 'Blog',
            'post_name'   => 'blog',
            'post_status' => 'publish',
            'post_type'   => 'page',
        ]);
    }

    // Sample posts (hanya sekali)
    if (get_option('dradius_sample_posts_v1')) return;

    $author = get_users(['role' => 'administrator', 'number' => 1])[0]->ID ?? 1;

    $posts = [
        [
            'title'    => 'Cara Setting MikroTik PPPoE untuk ISP Pemula',
            'cat'      => 'tutorial',
            'excerpt'  => 'Panduan lengkap konfigurasi MikroTik PPPoE dari nol. Cocok untuk ISP RT/RW Net yang baru memulai dan ingin langsung konek ke RADIUS server.',
            'content'  => '<h2>Apa itu PPPoE?</h2>
<p>PPPoE (Point-to-Point Protocol over Ethernet) adalah protokol yang digunakan ISP untuk mengautentikasi pelanggan sebelum memberikan akses internet. Setiap pelanggan login dengan username dan password yang diperiksa oleh RADIUS server.</p>
<h2>Persiapan Sebelum Konfigurasi</h2>
<p>Sebelum mulai, pastikan Anda sudah memiliki:</p>
<ul>
<li>Router MikroTik (versi RouterOS 6.x atau 7.x)</li>
<li>Akses ke dasbor D Radius sebagai admin</li>
<li>IP address RADIUS server dari D Radius</li>
<li>RADIUS secret yang tersimpan di menu Pengaturan</li>
</ul>
<h2>Langkah 1: Tambahkan RADIUS Server di MikroTik</h2>
<p>Buka Winbox atau WebFig, lalu masuk ke menu <strong>RADIUS</strong>. Klik tombol <strong>+</strong> untuk menambah server baru. Isi kolom berikut:</p>
<ul>
<li><strong>Service:</strong> ppp</li>
<li><strong>Address:</strong> IP RADIUS dari D Radius</li>
<li><strong>Secret:</strong> RADIUS secret Anda</li>
<li><strong>Authentication Port:</strong> 1812</li>
<li><strong>Accounting Port:</strong> 1813</li>
</ul>
<h2>Langkah 2: Buat PPPoE Server</h2>
<p>Masuk ke menu <strong>PPP > PPPoE Servers</strong>. Klik <strong>+</strong> dan isi interface (biasanya ether1 atau bridge). Pastikan opsi <strong>Use RADIUS</strong> dicentang agar autentikasi dilakukan ke server D Radius.</p>
<h2>Langkah 3: Aktifkan Pelanggan di D Radius</h2>
<p>Login ke dasbor D Radius, buka menu <strong>Pelanggan</strong>, lalu tambahkan pelanggan baru. Isi username PPPoE dan password. Setelah disimpan, pelanggan bisa langsung konek menggunakan kredensial tersebut.</p>
<h2>Troubleshooting Umum</h2>
<p>Jika pelanggan tidak bisa konek, cek hal berikut: pastikan firewall tidak memblokir port 1812/1813, verifikasi RADIUS secret sama di kedua sisi, dan periksa log di D Radius untuk melihat pesan error autentikasi.</p>',
        ],
        [
            'title'   => 'Billing Otomatis: Hemat 10 Jam Kerja per Bulan',
            'cat'     => 'bisnis-isp',
            'excerpt' => 'Cerita nyata dari operator ISP di Surabaya yang berhasil menghilangkan tagihan manual dan meningkatkan pembayaran tepat waktu hingga 40%.',
            'content' => '<h2>Masalah yang Sering Dialami ISP Lokal</h2>
<p>Sebelum menggunakan billing otomatis, banyak operator ISP menghabiskan 2–3 jam setiap tanggal 1 hanya untuk membuat tagihan manual di spreadsheet. Belum lagi waktu untuk kirim pesan pengingat satu per satu ke pelanggan via WhatsApp.</p>
<blockquote><p>"Dulu saya sampai lembur setiap awal bulan. Sekarang tagihan sudah jalan sendiri waktu saya tidur." — Budi, operator ISP RT/RW Net Bekasi</p></blockquote>
<h2>Cara Kerja Billing Otomatis D Radius</h2>
<p>Sistem billing D Radius bekerja berdasarkan profil billing yang Anda atur. Ada dua model:</p>
<ul>
<li><strong>Model Cycle:</strong> Semua pelanggan dalam satu profil mendapat tagihan di tanggal yang sama setiap bulan.</li>
<li><strong>Model Fixed:</strong> Tanggal tagihan mengikuti tanggal bergabung tiap pelanggan.</li>
</ul>
<h2>Notifikasi WhatsApp Otomatis</h2>
<p>D Radius mengirim pesan WhatsApp otomatis di H-7, H-3, dan hari jatuh tempo. Pelanggan yang belum bayar juga mendapat notifikasi setelah jatuh tempo. Hasilnya, tingkat pembayaran tepat waktu meningkat signifikan.</p>
<h2>Isolir Otomatis</h2>
<p>Jika pelanggan tidak bayar melewati batas yang Anda atur, sistem otomatis memutus akses internet mereka via RADIUS. Tidak perlu lagi kontak manual ke pelanggan atau konfigurasi ulang router.</p>
<h2>Berapa Waktu yang Bisa Dihemat?</h2>
<p>Rata-rata operator ISP dengan 100–300 pelanggan menghemat 8–12 jam kerja per bulan setelah mengaktifkan billing otomatis D Radius. Waktu itu bisa dialihkan untuk akuisisi pelanggan baru atau meningkatkan kualitas jaringan.</p>',
        ],
        [
            'title'   => '5 Kesalahan ISP Lokal yang Bikin Pelanggan Kabur',
            'cat'     => 'tips-trik',
            'excerpt' => 'Dari respons support yang lambat sampai billing tidak transparan — ini kesalahan paling umum operator ISP lokal dan cara menghindarinya sekarang.',
            'content' => '<p>Persaingan ISP lokal semakin ketat. Pelanggan sekarang lebih mudah pindah ke provider lain jika merasa tidak puas. Berikut lima kesalahan yang paling sering ditemui dan cara memperbaikinya.</p>
<h2>1. Respons Support Terlalu Lambat</h2>
<p>Pelanggan yang internetnya mati ingin solusi dalam hitungan menit, bukan jam. Jika laporan gangguan hanya diterima via telepon dan dicatat manual, antrian mudah menumpuk. Gunakan sistem tiket seperti di D Radius agar setiap laporan tercatat dan bisa dipantau.</p>
<h2>2. Tagihan Tidak Transparan</h2>
<p>Pelanggan frustasi ketika tidak tahu mengapa tagihan bulan ini berbeda dari bulan lalu. Invoice yang jelas — lengkap dengan nama paket, periode, dan breakdown biaya — membangun kepercayaan. D Radius menghasilkan invoice PDF otomatis untuk setiap tagihan.</p>
<h2>3. Tidak Ada Notifikasi Jatuh Tempo</h2>
<p>Banyak pelanggan lupa bayar bukan karena tidak mau, tapi karena tidak ada pengingat. Kirim notifikasi WhatsApp H-7, H-3, dan hari-H. Tingkat pembayaran tepat waktu bisa naik 30–40% hanya dari langkah ini.</p>
<h2>4. Proses Pembayaran Susah</h2>
<p>Jika pelanggan hanya bisa bayar lewat transfer bank dan harus konfirmasi manual, banyak yang akan menunda. Aktifkan payment gateway seperti QRIS, GoPay, atau Virtual Account agar pelanggan bisa bayar kapan saja dari mana saja.</p>
<h2>5. Tidak Ada Portal Pelanggan</h2>
<p>Pelanggan modern ingin bisa cek tagihan, lihat riwayat pembayaran, dan lapor gangguan sendiri — tanpa perlu telepon admin. Portal pelanggan D Radius memberikan semua itu dalam satu halaman yang mobile-friendly.</p>
<h2>Mulai Perbaiki Sekarang</h2>
<p>Tidak perlu memperbaiki semua sekaligus. Mulai dari notifikasi otomatis — itu yang paling cepat berdampak. Kemudian aktifkan payment gateway, lalu portal pelanggan. Perubahan kecil ini bisa menurunkan churn rate secara signifikan.</p>',
        ],
    ];

    foreach ($posts as $data) {
        $cat_id = get_term_by('slug', $data['cat'], 'category')->term_id ?? 1;
        wp_insert_post([
            'post_title'    => $data['title'],
            'post_excerpt'  => $data['excerpt'],
            'post_content'  => $data['content'],
            'post_status'   => 'publish',
            'post_author'   => $author,
            'post_category' => [$cat_id],
        ]);
    }

    update_option('dradius_sample_posts_v1', 1);
}
add_action('init', 'dradius_setup_blog');
