<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <style>
      body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
      }

      .container {
        text-align: center;
        max-width: 600px;
        margin: auto;
      }

      h1 {
        font-size: 36px;
        color: #333;
      }

      p {
        font-size: 18px;
        color: #666;
      }

      a {
        color: cornflowerblue;
      }
    </style>
  </head>
  <body <?php body_class(); ?>>

    <div class="container">
      <p>There is intentionally no content visible here, because this WordPress installation is API-only. <a href="<?php echo admin_url(); ?>">Log in</a> to manage content.</p>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
