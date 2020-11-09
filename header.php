<?php
$data_wf_page = '5f8ff1350c8bf9d52314b5e2'; // для главной страницы

switch (true) {
    case is_page_template('page-rates-internet.php'):
        $data_wf_page = '5f92aa81716e437d4c5bf250';
        break;
    case is_page_template('page-rates-internet-business.php'):
        $data_wf_page = '5f92aa81716e437d4c5bf250';
        break;
    case is_page_template('page-rates-tv.php'):
        $data_wf_page = '5f93b85bf00d8b568faea7ae';
        break;
    case is_page_template('page-rates-tv-business.php'):
        $data_wf_page = '5f93b85bf00d8b568faea7ae';
        break;
    case is_page_template('page-business.php'):
        $data_wf_page = '5f942ed6eefd7d1de8923b6b';
        break;
    case is_page_template('page-devices.php'):
        $data_wf_page = '5f954887ce23b4d03bf28186';
        break;
    default:
        $data_wf_page = '5f8ff1350c8bf9d52314b5e2';
}
?>
<!DOCTYPE html>
<html data-wf-page="<?php echo $data_wf_page; ?>" data-wf-site="5f8ff1350c8bf990c114b5e1" lang="ru">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="<?= is_singular() ? get_the_excerpt() : "RNet подключает быстрый Интернет и Цифровое Телевидение HD качества, лучшие цены для дома и офиса, круглосуточная поддержка абонентов.Подключение к интернету жилых домов и организаций, цифровое телевидение, IP-телефония и др. услуги."; ?>" name="description">
        <meta content="Rnet - <?= is_single() ? get_the_title() : get_bloginfo('description'); ?>" property="og:title">
        <meta content="<?= is_singular() ? get_the_excerpt() : "RNet подключает быстрый Интернет и Цифровое Телевидение HD качества, лучшие цены для дома и офиса, круглосуточная поддержка абонентов.Подключение к интернету жилых домов и организаций, цифровое телевидение, IP-телефония и др. услуги."; ?>" property="og:description">
        <meta content="Rnet - <?= is_single() ? get_the_title() : get_bloginfo('description'); ?>" property="twitter:title">
        <meta content="<?= is_singular() ? get_the_excerpt() : "RNet подключает быстрый Интернет и Цифровое Телевидение HD качества, лучшие цены для дома и офиса, круглосуточная поддержка абонентов.Подключение к интернету жилых домов и организаций, цифровое телевидение, IP-телефония и др. услуги."; ?>" property="twitter:description">
        <meta property="og:type" content="website">

        <?php
            $imgURL = !is_singular()  ? get_template_directory_uri() . "/assets/images/meta.png" :  get_the_post_thumbnail_url();
            $imgTYPE = !is_singular() ? "png" :  "jpeg";
        ?>
        <meta property="og:image" content="<?= $imgURL; ?>" />
        <meta property="og:image:secure_url" content="<?= $imgURL; ?>" />
        <meta property="og:image:type" content="image/<?= $imgTYPE;?>" />

        <meta content="summary_large_image" name="twitter:card">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title><?= get_bloginfo(); ?> - <?= is_singular() ? get_the_title() : get_bloginfo('description'); ?></title>

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

        <link href="<?= get_bloginfo('template_url'); ?>/assets/images/5f8ff3790b2014ca07e73fea_favicon32.svg" rel="shortcut icon" type="image/x-icon">
        <link href="<?= get_bloginfo('template_url'); ?>/assets/images/5f8ff37bb6fe117e9d49ccd6_favicon256.svg" rel="apple-touch-icon">
        <meta name="author" content="Rnet">

        <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
    </head>
    <body class="body">
