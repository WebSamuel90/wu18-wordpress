<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">WU18</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

          <?php foreach(get_pages(['sort_column' => 'menu_order']) as $page):?>

            <li class="nav-item active<?php if (is_page($page)) { echo 'active'; } ?>">
              <a class="nav-link" href="<?php echo get_permalink($page);?>"><span class="sr-only">(current)</span>
                <?php echo $page->post_title; ?>
              </a>
            </li>
          <?php endforeach;?>
      </ul>
    </div>
  </nav>
  <div class="container">
