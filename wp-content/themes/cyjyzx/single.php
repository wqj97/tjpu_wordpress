<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="天津工业大学创业就业中心">
    <meta name="keyword" content="创业,就业,创业就业,创业就业中心,天津工业大学,天津工业大学创业就业中心">
    <title><?php if (is_home()) {
            bloginfo('name');
            echo " - ";
            bloginfo('description');
        } elseif (is_category()) {
            single_cat_title();
            echo " - ";
            bloginfo('name');
        } elseif (is_single() || is_page()) {
            single_post_title();
        } elseif (is_search()) {
            echo "搜索结果";
            echo " - ";
            bloginfo('name');
        } elseif (is_404()) {
            echo '页面未找到!';
        } else {
            wp_title('', true);
        } ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/job-list.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="icon" href="/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章"
          href="<?php echo get_bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论"
          href="<?php bloginfo('comments_rss2_url'); ?>"/>
    <link rel="author" content="天津蓝缘信息科技">
    <?php wp_head(); ?>
</head>
<?php flush(); ?>
<body style="padding-top:100px;background: #F5F7F9">
<?php
global $current_user,$post;
//print_r($post);
?>
<header>
    <ul style="width:100%;position:relative;">
        <a href="">
            <li><img src="/favicon.ico" alt="" width="75px"></li>
        </a>
        <li <?php if (is_home()) {
            echo 'class="current"';
        } ?>><a title="<?php bloginfo('name'); ?>" href="<?php echo get_option('home'); ?>/">主页</a></li>
        <?
        foreach (get_categories() as $key => $val) {
//            print_r($val);
            echo "<li><a href='category/" . $val->category_nicename . "'>" . $val->name . "</a></li>";
        }
        ?>
        <div style="position:absolute;right:0px;">
            <li class="">
                <? wp_loginout(); ?>
            </li>
            <li class="">
                <? wp_register(); ?>
            </li>
        </div>
    </ul>
</header>
<!--中间内容开始-->
<div class="container job-list">
    <div class="col-md-3 col-left">
        <?php
        comments_template()
        ?>
    </div>
    <div class="col-md-9 col-search">
        <div class="searcher">
            <form action="/" method="get">
                <input type="text" name="key" value="" placeholder="搜索公司、职位或文章" class="search">
                <input type="hidden" name="city">
                <input type="submit" name="search" value="搜索" class="btn fr">
            </form>
        </div>
    </div>
    <div class="col-md-9 right-card">
        <div class="card-profile">
            <h1><? echo $post->post_title ?></h1>
        </div>
    </div>
    <div class=" col-md-9 msg-content">
        <div class="content-container">
            <!--职位-->
            <?php
            echo $post->post_content;
            ?>
        </div>
        <!--底部-->
        <div class="content-bottom">
            <!--老板简介-->
            <div class="msg-box">
                <?php
                $author = get_user_meta($post->post_author);
                echo get_avatar(get_the_author_meta('ID'));
                ?>
                <div>
                    <p class="msg-name"><?php echo $author["nickname"][0]."<span>管理员</span>" ?></p>
                    <p class="msg-zx"><span>在线</span></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>