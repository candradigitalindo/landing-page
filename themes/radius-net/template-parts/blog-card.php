<?php
/**
 * Template part: blog card
 * $args['idx']      int  — posisi card dalam loop (0-based), dipakai untuk loading attr
 * $args['heading']  str  — 'h2' atau 'h3' (default h3)
 */
$idx     = $args['idx']     ?? 0;
$heading = $args['heading'] ?? 'h3';

$cats      = get_the_category();
$cat       = $cats[0] ?? null;
$cat_slug  = $cat ? $cat->slug  : 'tutorial';
$cat_class = dradius_cat_class($cat_slug);
$cat_name  = $cat ? esc_html($cat->name) : 'Artikel';

$delay     = $idx > 0 ? ' style="--delay:' . ($idx * 0.1) . 's"' : '';
$img_load  = $idx === 0 ? 'eager' : 'lazy';
$permalink = get_the_permalink();
$excerpt   = esc_html(wp_trim_words(
    get_the_excerpt() ?: strip_tags(get_the_content()), 18, '...'
));
?>
<article class="blog-card fade-up"<?php echo $delay; ?>
  itemscope itemtype="https://schema.org/BlogPosting">

  <meta itemprop="datePublished"  content="<?php echo get_the_date('Y-m-d'); ?>">
  <meta itemprop="dateModified"   content="<?php echo get_the_modified_date('Y-m-d'); ?>">
  <meta itemprop="author"         content="<?php echo esc_attr(get_the_author()); ?>">

  <!-- Gambar featured + badge kategori -->
  <figure class="blog-card-img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
    <a href="<?php echo esc_url($permalink); ?>" tabindex="-1" aria-hidden="true">
      <?php if (has_post_thumbnail()): ?>
        <?php echo get_the_post_thumbnail(null, 'blog-card', [
            'alt'           => esc_attr(get_the_title()),
            'loading'       => $img_load,
            'decoding'      => 'async',
            'itemprop'      => 'url',
        ]); ?>
      <?php else: ?>
        <div class="blog-card-placeholder blog-placeholder--<?php echo esc_attr($cat_slug); ?>">
          <div class="blog-placeholder-icon"><?php echo dradius_cat_icon($cat_slug); ?></div>
        </div>
      <?php endif; ?>
    </a>
    <span class="blog-cat <?php echo esc_attr($cat_class); ?>"><?php echo $cat_name; ?></span>
  </figure>

  <!-- Konten card -->
  <div class="blog-card-body">

    <<?php echo $heading; ?> class="blog-card-title" itemprop="headline">
      <a href="<?php echo esc_url($permalink); ?>" rel="bookmark"><?php the_title(); ?></a>
    </<?php echo $heading; ?>>

    <p class="blog-card-excerpt" itemprop="description"><?php echo $excerpt; ?></p>

    <footer class="blog-card-footer">
      <div class="blog-card-meta">
        <div class="blog-avatar" aria-hidden="true">
          <?php echo esc_html(mb_strtoupper(mb_substr(get_the_author(), 0, 1))); ?>
        </div>
        <div>
          <div class="blog-author"><?php the_author(); ?></div>
          <time class="blog-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
            <?php echo get_the_date('j M Y'); ?>
          </time>
        </div>
      </div>
      <span class="blog-read-time"><?php echo esc_html(dradius_read_time()); ?></span>
    </footer>

  </div><!-- .blog-card-body -->

</article>
