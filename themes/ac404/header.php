<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>
    <?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title('');?>
  </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96559774-18"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-96559774-18');
    </script> -->

  <?php wp_head();?>

</head>

<body>
  <?php include "inc/nav.php";?>