<?php get_header(); ?>

<main class="page-content">
  <div class="container">

    <!-- Header -->
    <div class="text-center fade-up page-header">
      <span class="badge"><span class="dot"></span> Blog & Artikel</span>
      <h1 class="section-title">Wawasan untuk<br><span class="text-gradient">Operator ISP Indonesia</span></h1>
      <p class="section-subtitle">Tips, tutorial, dan cerita nyata dari komunitas ISP lokal Indonesia.</p>
    </div>

    <!-- Category filter -->
    <?php
    $blog_cats = get_categories(['hide_empty' => true, 'include' => array_map(fn($s) => get_term_by('slug', $s, 'category')->term_id ?? 0, ['tutorial','bisnis-isp','tips-trik'])]);
    $current_cat = get_query_var('cat') ?: 0;
    ?>
    <div class="blog-filter fade-up">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="blog-filter-btn<?php echo !$current_cat ? ' active' : ''; ?>">Semua</a>
      <?php foreach ($blog_cats as $bc): if (!$bc->term_id) continue; ?>
      <a href="<?php echo esc_url(add_query_arg('cat', $bc->term_id, home_url('/blog/'))); ?>"
         class="blog-filter-btn blog-cat <?php echo esc_attr(dradius_cat_class($bc->slug)); ?><?php echo $current_cat == $bc->term_id ? ' active' : ''; ?>">
        <?php echo esc_html($bc->name); ?>
      </a>
      <?php endforeach; ?>
    </div>

    <?php
    $paged = get_query_var('paged') ?: 1;
    $args  = [
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged,
    ];
    if ($current_cat) $args['cat'] = $current_cat;

    $blog_q = new WP_Query($args);
    if ($blog_q->have_posts()): ?>

    <div class="blog-grid blog-grid--wide">
      <?php $i = 0; while ($blog_q->have_posts()): $blog_q->the_post();
        $cats      = get_the_category();
        $cat       = $cats[0] ?? null;
        $cat_class = $cat ? dradius_cat_class($cat->slug) : 'blog-cat--tutorial';
        $cat_name  = $cat ? esc_html($cat->name) : 'Artikel';
        $d_attr    = $i > 0 ? ' style="--delay:' . min($i * 0.05, 0.3) . 's"' : '';
        $i++;
      ?>
      <article class="blog-card fade-up"<?php echo $d_attr; ?>>
        <div class="blog-card-top">
          <span class="blog-cat <?php echo esc_attr($cat_class); ?>"><?php echo $cat_name; ?></span>
          <span class="blog-read-time"><?php echo esc_html(dradius_read_time()); ?></span>
        </div>
        <h2 class="blog-card-title"><?php the_title(); ?></h2>
        <p class="blog-card-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: strip_tags(get_the_content()), 22, '...')); ?></p>
        <div class="blog-card-footer">
          <div class="blog-card-meta">
            <div class="blog-avatar"><?php echo esc_html(mb_strtoupper(mb_substr(get_the_author(), 0, 1))); ?></div>
            <div>
              <div class="blog-author"><?php the_author(); ?></div>
              <div class="blog-date"><?php echo get_the_date('j M Y'); ?></div>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="blog-card-link">Baca →</a>
        </div>
      </article>
      <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <?php if ($blog_q->max_num_pages > 1): ?>
    <div class="blog-pagination fade-up">
      <?php
      echo paginate_links([
          'base'      => add_query_arg('paged', '%#%', home_url('/blog/')),
          'format'    => '',
          'current'   => $paged,
          'total'     => $blog_q->max_num_pages,
          'prev_text' => '← Sebelumnya',
          'next_text' => 'Berikutnya →',
      ]);
      ?>
    </div>
    <?php endif;
    wp_reset_postdata();

    else: ?>
    <div class="text-center" style="padding:80px 0;color:var(--text-muted)">
      <p>Belum ada artikel. Tambahkan posting pertama di dasbor WordPress.</p>
    </div>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
