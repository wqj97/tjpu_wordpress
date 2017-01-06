# [![WordPress](wp-admin/images/wordpress-logo.png)](https://wordpress.org/)
## V1.0
基于wordpress4.7

优美的个人信息发布平台

# 最低系统需求

*   [PHP](http://php.net/) **5.2.4**或更高版本。
*   [MySQL](http://www.mysql.com/) **5.0**或更高版本。

## 系统推荐

*   [PHP](https://secure.php.net/) **7**或更高版本。
*   [MySQL](https://www.mysql.com/) **5.6**或更高版本.
*   启用[mod_rewrite](http://httpd.apache.org/docs/2.2/mod/mod_rewrite.html)这一Apache模块。
*   [HTTPS](https://wordpress.org/news/2016/12/moving-toward-ssl/)支持。


# 安装：著名的五分钟安装

1.  将WordPress压缩包解压至一个空文件夹，并上传它。
2.  在浏览器中访问<span class="file">[wp-admin/install.php](wp-admin/install.php)</span>。它将帮助您把数据库连接信息写入到`wp-config.php`文件中。
1.  如果上述方法无效，也没关系，这很正常。请用文本编辑器（如写字板）手动打开`wp-config-sample.php`文件，填入数据库信息。
2.  将文件另存为`wp-config.php`并上传。
3.  在浏览器中访问<span class="file">[wp-admin/install.php](wp-admin/install.php)</span>。
3.  在配置文件就绪之后，WordPress会自动尝试建立数据库表。若发生错误，请检查`wp-config.php`文件中填写的信息是否准确，然后再试。若问题依然存在，请访问[中文支持论坛](http://zh-cn.forums.wordpress.org/ "WordPress支持论坛")寻求帮助。
4.  **若您不设置密码，请牢记生成的随机密码。**若您不输入用户名，用户名将是`admin`。
5.  完成后，安装向导会带您到[登录页面](wp-login.php)。用刚刚设置的用户名和密码登录。若您使用随机密码，在登录后可以按照页面提示修改密码。


# 最后

*   对WordPress有任何建议、想法、评论或发现了bug，请加入[中文支持论坛](http://zh-cn.forums.wordpress.org/)。
*   WordPress准备了完善的插件<abbr title="应用编程接口">API</abbr>接口方便您进行扩展开发。作为开发人员，如果你有兴趣了解并加以利用，请参阅[Codex上的插件文档](http://codex.wordpress.org/Plugin_API)。请尽量不要更改核心代码。

# 分享精神

WordPress没有数百万的市场运作资金，也没有名人赞助。不过我们有更棒的支持，那就是您！如果您喜欢WordPress，请将它介绍给自己的朋友，或者帮助他人安装一个WordPress，又或者写一篇赞扬我们的文章。

WordPress是对Michel V.创建的[b2/cafélog](http://cafelog.com/)的官方后续版本。[WordPress开发团队](http://wordpress.org/about/)将b2/cafélog发展成如今的WordPress。如果您愿意支持我们的工作，欢迎您对WordPress进行[捐赠](http://wordpress.org/donate/)。

# 许可证

WordPress基于<abbr title="GNU通用公共许可证">GPL</abbr>第二版或（根据您选择的）以后版本发布。详见[license.txt](license)（英文）。