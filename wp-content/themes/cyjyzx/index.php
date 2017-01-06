<?php
get_header();
?>
<div class="banner">
    <div>
        BOSS直聘新闻和数据实时跟踪
    </div>
    <div>
        <button>媒体合作</button>
    </div>
</div>
<div class="container index">
    <div class="col-md-12 list-card">

        <div class="col-md-4">
            <div class="index-title">
                <? echo get_categories()[0]->name ?>
                <a class="pull-right index-more" href="category/<? echo get_categories()[0]->category_nicename ?>">more</a>
            </div>
            <div class="index-text">
                <div class="index-text-image">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/2-1.jpg" alt="">
                    </a>
                </div>
                <div class="index-text-tittle">
                    <a href="#">2016年应届生就业竞争力报告：专业与技能篇</a>
                </div>
                <div class="tittle-view">
                    <a href="#">查看详情</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="index-title">
                <? echo get_categories()[1]->name ?>
                <a class="pull-right index-more" href="category/<? echo get_categories()[1]->category_nicename ?>">more</a>
            </div>
            <div class="index-text">
                <div class="index-text-image">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/123-2.jpg" alt="">
                    </a>
                </div>
                <div class="index-text-tittle">
                    <a href="#">职场人士如何利用业余时间实现自我提升</a>
                </div>
                <div class="tittle-view">
                    <a href="#">查看详情</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="index-title">
                <? echo get_categories()[2]->name ?>
                <a class="pull-right index-more" href="category/<? echo get_categories()[2]->category_nicename ?>">more</a>
            </div>
            <div class="index-text">
                <div class="index-text-image">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/123-3.jpg" alt="">
                    </a>
                </div>
                <div class="index-text-tittle">
                    <a href="#">2016年应届生就业竞争力报告：专业与技能篇</a>
                </div>
                <div class="tittle-view">
                    <a href="#">查看详情</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 list-news" style="margin: 20px 0px;">
        <ul>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-1.jpg"></a>
                        <a href="#">
                            <button>数据报告</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">2016年应届生就业竞争力报告：专业与技能篇</a>
                        </div>
                        <div class="li-text-summary">
                            <p>2016年应届生求职季正不断深入,
                                实体经济的下行与新一代大学生求职偏好的“进化”，令今年的校招市场呈现出一些不同的景象。移动互联网招聘平台BOSS直聘近日发布的《2016年应届生就业</p>
                        </div>
                        <div class="li-text-author">
                            常濛、谢晨
                            <em>·</em>
                            <span>2016-12-05</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-2.jpg"></a>
                        <a href="#">
                            <button>公司动态</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">BOSS直聘启动“攻薪季”招聘周，撮合优质大厂与实力牛人</a>
                        </div>
                        <div class="li-text-summary">
                            <p>导语：1KB=1024B1MB=1024KB1GB=1024MB1TB=1024GB...
                                简单的字节如细胞一样构建了我们丰富多样的互联网世界，也给人力资源领域带来了全新、高效的数字化招聘机会。在1

                            </p>
                        </div>
                        <div class="li-text-author">
                            PR Team
                            <em>·</em>
                            <span>2016-12-22</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-3.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">职场人士如何利用业余时间实现自我提升</a>
                        </div>
                        <div class="li-text-summary">
                            <p>本文来源于知乎，经授权发布，作者：Cher
                                Deo职场是个靠实力说话的地方，不想被淘汰，就必须想办法持续提升自己的能力，要学会如何做事，如何搞定客户，如何与同事相处，如何拍领导马屁，如何教导下属……这</p>
                        </div>
                        <div class="li-text-author">
                            Cher Deo
                            <em>·</em>
                            <span>2016-10-10</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-4.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">做好这七步，分分钟化解同事间冲突</a>
                        </div>
                        <div class="li-text-summary">
                            <p>原标题：7 Emergency Steps For Ending Team Conflict原作者：John
                                Rampton翻译自：www.fastcompany.com前不久，和朋友赵小四聊天，他吐</p>
                        </div>
                        <div class="li-text-author">
                            John
                            <em>·</em>
                            <span>2016-10-08</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-5.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">社会即将分层，你将会在第几层？</a>
                        </div>
                        <div class="li-text-summary">
                            <p>
                                来源：缓缓说（ID：huanhuanshuo520）这不是鸡汤，也不是砒霜，只是从纷繁复杂的现状中，抓住背后的暗潮涌动，分析我们将面对的未来：社会即将分层，你将会在第几层？一、你的下一代将被迫逃离家乡</p>
                        </div>
                        <div class="li-text-author">
                            缓缓君
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-6.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">张一鸣：我遇到的优秀年轻人的5个特质</a>
                        </div>
                        <div class="li-text-summary">
                            <p>2016年应届生求职季正不断深入,
                                实体经济的下行与新一代大学生求职偏好的“进化”，令今年的校招市场呈现出一些不同的景象。移动互联网招聘平台BOSS直聘近日发布的《2016年应届生就业</p>
                        </div>
                        <div class="li-text-author">
                            张一鸣
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-7.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">哈佛大学最新研究，这几招杀死你的拖延症！</a>
                        </div>
                        <div class="li-text-summary">
                            <p>翻译自：https://medium.com原文：How to Hack Your Brain to Destroy Procrastination, According to
                                Harvard Res</p>
                        </div>
                        <div class="li-text-author">
                            Elle Kapla
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-8.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">如果忙到这五件事都做不了，那你的生活早已偏离了航向</a>
                        </div>
                        <div class="li-text-summary">
                            <p>翻译自：https://medium.com/原文：If You’re Too Busy For These 5 Things: Your Life Is More
                                Off-Course Than Y</p>
                        </div>
                        <div class="li-text-author">
                            Benjamin
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-9.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">如果面试时HR跟你详谈甚欢，注意了！可能这是坑！</a>
                        </div>
                        <div class="li-text-summary">
                            <p>翻译自：http://www.fastcompany.com原文：Two Big Reasons Why Work "Culture" Is Overrated作者：BARRY
                                S. SALTZMAN</p>
                        </div>
                        <div class="li-text-author">
                            BARRY
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="col-md-5">
                    <div class="li-img">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/2-10.jpg"></a>
                        <a href="#">
                            <button>干货文章</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="li-text">
                        <div class="li-text-tittle">
                            <a href="#">面试时HR一定会问的5大问题和你需要的一个对策！</a>
                        </div>
                        <div class="li-text-summary">
                            <p>翻译自：http://www.fastcompany.com原标题：5 curveball interview questions to ask final round job
                                candidates适</p>
                        </div>
                        <div class="li-text-author">
                            外网
                            <em>·</em>
                            <span>2016-09-29</span>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!--加载更多按钮--><a href="#">
        <div class="col-md-12 load-more">
            浏览更多
        </div>
    </a>
    </div>

</div>

<?php get_footer(); ?>