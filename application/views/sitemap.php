<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>monthly</changefreq>
    </url>

    <!-- Sitemap Menu  -->
    <?php foreach($menu as $url) { ?>
    <url>
        <loc><?= base_url().$url->seo_page ?></loc>
        <priority>0.8</priority>
        <changefreq>monthly</changefreq>
    </url>
    <?php } ?>
    <!-- End -->

    <!-- Sitemap Services -->
    <?php foreach ($services as $url): ?>
      <url>
          <loc><?= base_url('our-service/'.$url->services_link) ?></loc>
          <priority>0.6</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->

    <!-- Sitemap News Detail -->
    <?php foreach ($news as $url): ?>
      <url>
        <loc><?= base_url('news/'.$url->news_link) ?></loc>
          <priority>0.5</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->

    <!-- Sitemap Event Detail -->
    <?php foreach ($event as $url): ?>
      <url>
        <loc><?= base_url('event/'.$url->news_link) ?></loc>
          <priority>0.5</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->
</urlset>
