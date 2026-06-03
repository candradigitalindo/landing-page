<?php get_header(); ?>

<main class="page-content">
  <div class="container container--narrow">

    <?php if (have_posts()): while (have_posts()): the_post();
      $cats      = get_the_category();
      $cat       = $cats[0] ?? null;
      $cat_class = $cat ? dradius_cat_class($cat->slug) : 'blog-cat--tutorial';
      $cat_name  = $cat ? $cat->name : 'Artikel';
    ?>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
      <span class="breadcrumb-sep">›</span>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      <span class="breadcrumb-sep">›</span>
      <span><?php the_title(); ?></span>
    </nav>

    <article class="single-post fade-up">

      <!-- Category + read time -->
      <div class="single-post-meta">
        <span class="blog-cat <?php echo esc_attr($cat_class); ?>"><?php echo esc_html($cat_name); ?></span>
        <span class="blog-read-time"><?php echo esc_html(dradius_read_time()); ?></span>
      </div>

      <!-- Title -->
      <h1 class="single-post-title"><?php the_title(); ?></h1>

      <!-- Author & date -->
      <div class="single-post-byline">
        <div class="blog-avatar"><?php echo esc_html(mb_strtoupper(mb_substr(get_the_author(), 0, 1))); ?></div>
        <div>
          <div class="blog-author"><?php the_author(); ?></div>
          <div class="blog-date"><?php echo get_the_date('j F Y'); ?></div>
        </div>
      </div>

      <!-- Featured image -->
      <?php if (has_post_thumbnail()): ?>
      <figure class="single-post-hero" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <?php echo get_the_post_thumbnail(null, 'blog-hero', [
            'alt'      => esc_attr(get_the_title()),
            'loading'  => 'eager',
            'fetchpriority' => 'high',
            'itemprop' => 'url',
        ]); ?>
      </figure>
      <?php endif; ?>

      <!-- Content -->
      <div class="single-post-content">
        <?php the_content(); ?>
      </div>

    </article>

    <!-- Back to blog -->
    <div class="single-post-back fade-up">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-outline">← Kembali ke Blog</a>
    </div>

    <?php endwhile; endif; ?>

  </div>
</main>

<?php get_footer(); ?>
