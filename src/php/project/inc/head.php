<?php include($_SERVER["DOCUMENT_ROOT"].'/src/php-framework/functions.php'); ?>
<?php include('settings.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php theme_get_meta_title('Home Page'); ?>
    <meta name="description" content="Some Description Here">
    <!-- Include Fonts -->
    <?php theme_get_google_fonts(); ?>
    <!-- Favicon -->
    <?php theme_get_favicon('../dist/images/favicon.png'); ?>
    <!-- Include CSS -->
    <?php include('style.php'); ?>
</head>
<body class="<?php theme_body_class(); ?>">