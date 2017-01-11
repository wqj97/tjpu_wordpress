<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="天津工业大学创业就业中心">
    <meta name="keyword" content="创业,就业,创业就业,创业就业中心,天津工业大学,天津工业大学创业就业中心">
    <title><?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <link rel="author" content="天津蓝缘信息科技">
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body style="padding-top:100px;background: #F5F7F9">

<header>
    <ul style="width:100%;position:relative;">
        <a href="">
            <li><img src="/favicon.ico" alt="" width="75px"></li>
        </a>
        <li <?php if (is_home()) { echo 'class="current"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">主页</a></li>
        <?
        foreach (get_categories() as $key => $val){
//            print_r($val);
            echo "<li><a href='category/".$val->category_nicename."'>".$val->name."</a></li>";
        }
        ?>
        <div style="position:absolute;right:0px;">
            <li class="">
                <?wp_loginout();?>
            </li>
            <li class="">
                <?wp_register();?>
            </li>
        </div>
    </ul>
</header>
