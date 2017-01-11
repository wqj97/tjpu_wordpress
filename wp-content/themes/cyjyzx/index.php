<?php
get_header();
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
?>
    <div class="banner">
        <div>
            天津工业大学创业就业中心
        </div>
        <div>
            <button>校企合作</button>
        </div>
    </div>
    <div class="container index">
        <div class="col-md-12 list-card">

            <div class="col-md-4" >
                <div class="index-title">
                    <? echo get_categories()[0]->name; ?>
                    <a class="pull-right index-more" href="category/<? echo get_categories()[0]->category_nicename ?>">more</a>
                </div>
                <?php
                $CAT_post = get_posts(["posts_per_page" => 1, 'category' => get_categories()[0]->cat_ID]);
                $CAT_post = $CAT_post[0];
                ?>
                <div class="index-text">
                    <div class="index-text-image">
                        <a href="<? echo $CAT_post->guid ?>">
                            <?php echo get_the_post_thumbnail($CAT_post->ID) ?>
                        </a>
                    </div>
                    <div class="index-text-tittle">
                        <a href="#"><? echo $CAT_post->post_title ?></a>
                    </div>
                    <div class="tittle-view">
                        <a href="<? echo $CAT_post->guid ?>">查看详情</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="index-title">
                    <? echo get_categories()[1]->name ?>
                    <a class="pull-right index-more" href="category/<? echo get_categories()[1]->category_nicename ?>">more</a>
                </div>
                <?php
                $CAT_post = get_posts(["posts_per_page" => 1, 'category' => get_categories()[1]->cat_ID]);
                $CAT_post = $CAT_post[0];
                ?>
                <div class="index-text">
                    <div class="index-text-image">
                        <a href="<? echo $CAT_post->guid ?>">
                            <?php echo get_the_post_thumbnail($CAT_post->ID) ?>
                        </a>
                    </div>
                    <div class="index-text-tittle">
                        <a href="#"><? echo $CAT_post->post_title ?></a>
                    </div>
                    <div class="tittle-view">
                        <a href="<? echo $CAT_post->guid ?>">查看详情</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="index-title">
                    <? echo get_categories()[2]->name ?>
                    <a class="pull-right index-more" href="category/<? echo get_categories()[2]->category_nicename ?>">more</a>
                </div>
                <?php
                $CAT_post = get_posts(["posts_per_page" => 1, 'category' => get_categories()[2]->cat_ID]);
                $CAT_post = $CAT_post[0];
                ?>
                <div class="index-text">
                    <div class="index-text-image">
                        <a href="<? echo $CAT_post->guid ?>">
                            <?php echo get_the_post_thumbnail($CAT_post->ID) ?>
                        </a>
                    </div>
                    <div class="index-text-tittle">
                        <a href="#"><? echo $CAT_post->post_title ?></a>
                    </div>
                    <div class="tittle-view">
                        <a href="<? echo $CAT_post->guid ?>">查看详情</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 list-news" style="margin: 20px 0px;">
            <ul>
                <?php
                foreach (get_posts(['numberposts' => 6]) as $key => $val) {
                    echo "<li><div class=\"col-md-5\"><div class=\"li-img\"><a href=\"$val->guid\">" . get_the_post_thumbnail($val->ID) . "</a></div></div><div class=\"col-md-7\">
                <div class=\"li-text\"><div class=\"li-text-tittle\"><a href=\"$val->guid\">$val->post_title</a></div><div class=\"li-text-summary\"><p>";
                    echo mb_substr($val->post_content, 0, 80);
                    echo "</p></div><div class=\"li-text-author\"><span>$val->post_date</span></div></div></div></li>";
                }
                ?>
            </ul>
            <!--加载更多按钮--><a href="#">
                <div class="col-md-12 load-more">
                    浏览更多
                </div>
            </a>
        </div>

    </div>

<?php get_footer(); ?>