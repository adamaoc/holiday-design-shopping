<?php

  include('core/init.php');
  $HDstore = new EcwidProductApi('2557029');

  // Pull in Categories for dynamic categories pages
  $cats = $HDstore->get_all_categories();

  // Pull in products for dynamic product pages
  $products = $HDstore->get_all_products();

  header('Content-type: application/xml');
 
  $output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
  $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
  echo $output;

?>


  <url>
    <loc>http://holiday-design.com/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>http://holiday-design.com/about/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.5</priority>
  </url>
  <url>
    <loc>http://holiday-design.com/contact/</loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.5</priority>
  </url>

  <?php 
    foreach ($cats as $category) {
      $catname = strtolower($category['name']);
      $catname = preg_replace("/[\s_]/", "-", $catname);
      ?>
        <url>
          <loc>http://holiday-design.com/store/category/<?php echo $catname; ?>/</loc>
          <lastmod><?php echo date('Y-m-d'); ?></lastmod>
          <changefreq>weekly</changefreq>
          <priority>1</priority>
        </url>
      <?php
    }
  ?>

  <?php 
    foreach ($products as $product) {
      $prodURL = explode(".com", $product['url']);
      $prodURL = $prodURL[1];
      ?>
        <url>
          <loc>http://holiday-design.com/store<?php echo $prodURL; ?></loc>
          <lastmod><?php echo date('Y-m-d'); ?></lastmod>
          <changefreq>weekly</changefreq>
          <priority>1</priority>
        </url>
      <?php
    }
  ?>

</urlset>
