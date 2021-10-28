<meta charset="UTF-8">
<?php
$page_title = 'Welcome to '.SITE_TITLE;

$keywords = (isset ( $meta_keyword) && $meta_keyword) ? $meta_keyword : SITE_KEYWORDS;
$meta = (isset ( $meta_description ) && $meta_description) ? $meta_description  : SITE_META;
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title><?php echo $page_title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $meta ?>">
<meta name="author" content="TheFoxLab">

<!-- Social: Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@thefoxlabweb">
<meta name="twitter:creator" content="TheFoxLab">
<meta name="twitter:title" content="<?php echo $page_title ?>">
<meta name="twitter:description" content="<?php echo $meta ?>">
<meta name="twitter:image:src" content="<?php echo base_url().SOCIAL_IMG_SRC; ?>">


<!-- Social: Facebook / Open Graph -->
<meta property="og:url" content="<?php echo base_url(); ?>">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo $page_title ?>">
<meta property="og:image" content="<?php echo base_url().SOCIAL_IMG_SRC; ?>"/>
<meta property="og:description" content="<?php echo $meta ?>">
<meta property="og:site_name" content="TheFoxLab">
<meta property="article:author" content="<?php echo FACEBOOK_LINK ?>">
<meta property="article:publisher" content="<?php echo FACEBOOK_LINK ?>">


<!-- Social: Google+ / Schema.org  -->
<link rel="author" href="<?php echo LINKEDIN_LINK ?>">
<link rel="publisher" href="<?php echo LINKEDIN_LINK ?>">
<meta itemprop="name" content="<?php echo $page_title ?>">
<meta itemprop="description" content="<?php echo $meta ?>">
<meta itemprop="image" content="<?php echo base_url().SOCIAL_IMG_SRC; ?>">