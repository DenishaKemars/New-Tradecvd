<?php require_once 'config/init.php';
require_once 'config/apiconfig.php';
$res = $DB->getpagemetadata(1);

//  print_r($res); exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag Start -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?php echo htmlspecialchars($res[0]['metakeywords'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="author" content="Trade CVD" />
    <meta name="robots" content="index,follow" />
    <meta name="description" content="<?php echo htmlspecialchars($res[0]['metadescription'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($res[0]['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($config->getWeburl(), ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($res[0]['metadescription'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($config->getImageurl() . 'images/ogiseo.png', ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php echo htmlspecialchars($config->getImageurl() . 'images/gems.png', ENT_QUOTES, 'UTF-8'); ?>" />
    <!-- Meta Tag End -->

    <!--title-->
    <title><?php echo htmlspecialchars($res[0]['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?></title>

    
    <!-- CSS Start -->
    <?php include('css.php'); ?>
    
    <!-- CSS End -->
    <script src="assets/js/vendor/jquery.min.js"></script>
</head>

<body class="home-page max-w-2560px">
    <div class="page-wrapper">
        <!-- Header Start -->
        <?php include('header.php'); ?>
        <!-- Header End -->

        <div class="main" id="web-content">
            <?php include('home.php'); ?>
        </div>

        <!-- Footer Start -->
        <?php include('footer.php'); ?>
        <!-- Footer End -->

        <!-- JS Start -->
       <!--  <?php //include('js.php'); ?> -->
        <!-- JS End -->
    </div>
    
</body>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "tradecvd.com",
  "alternateName": "Trade CVD",
  "url": "https://tradecvd.com/"
}
</script>

</html>