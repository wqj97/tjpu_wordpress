<?php
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
?>
<br>
<div class="left-msg">
    <p class="job-name"><? echo $post->post_title ?></p>
    <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
</div>
<p class="local-time"></p>
<?php
$comments = get_comments('post_id=' . $post->ID);
foreach ($comments as $commentKey => $commentVal) {
    echo "<section class=\"talkbox\" style=\"display: block\"><div class=\"box-head\">";
    echo get_avatar($commentVal->user_ID);
    echo "</div><p><i class=\"jiantou\"></i>";
    echo $commentVal->comment_content;
    echo "</p></section>";
}
?>
<div class="handin">
    <form id="comment_form" action="/wp-comments-post.php" method="post">
        <textarea name="comment" id="comment" placeholder="快对创业就业中心说点什么" cols="30" rows="4"></textarea>
        <input type="hidden" name="comment_post_ID" value="7" id="comment_post_ID">
        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
        <p class="error"></p>
        <input type="submit" class="bt-submit" value="发送">
    </form>
</div>
