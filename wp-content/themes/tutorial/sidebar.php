<div class="sidebar">

<li id="search">
<?php include(TEMPLATEPATH . '/searchform.php'); ?>
</li>
<li id="search">
    <h2><?php _e('Calendar');?></h2>
    <?php get_calendar();?>
</li>
    <ul>
        <!-- wp_list_pages显示页面可配置层数 -->
        <?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>'); ?>
        <li>
            <!-- _e打印 -->
            <h2><?php _e('Categories')?></h2>
            <!-- wp_list_cats显示页面 -->
            <ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul>
        </li>
        <li>
            <h2><?php _e('Archives')?></h2>
            <ul>
            <!-- wp_get_arhives() 这个 PHP 函数，并用了 type 这个参数以及 monthly 作为它的值，这样就按月调用存档链接列表 -->
                <?php wp_get_archives('type=monthly')?>
            </ul>
        </li>
        <?php get_links_list(); ?>
        <li><h2><?php _e('Meta');?></h2>
            <ul>
                 <!-- wp_register() 如果你没有登陆，
                它显示注册（Register）链接，如果登录了，它显示的是 站点管理（Site Admin）的链接。 -->
                <?php wp_register();?>
                <!-- wp_loginout() 不会产生列表元素标签，所以需要我们手工输入列表元素标签，
                当你没有登录的时候，得到的是 登录（Login） 的链接，当已经登录的时候，得到的是登出（Logout）链接。 -->
                <li><?php wp_loginout()?></li>
                <?php wp_meta();?>
            </ul>
        </li>
    </ul>
    
</div>