<?php get_header()?>
<div id="container">
    <!-- have_posts()检查博客是否有日志 -->
<?php if(have_posts()) : ?>
    <!-- the_post()调用具体日志显示 -->
    <?php while(have_posts()) : the_post(); ?>
    <div class="post">
    <!-- the_permalink() 是用来调用每篇日志地址的 PHP 函数，the_title()显示日志名 -->
    <h2><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!-- the_content() 函数调用了 日志的内容 -->
        <div class="entry">
             <?php the_content(); ?>
             <p class="postmetadata">
             <?php _e('Filed under:'); ?> <?php the_category(',') ?> <?php _e('by'); ?>
             <?php the_author(); ?><br />
             <!-- 当弹出留言的功能激活的话，comments_popup_link() 调用一个弹出的留言窗口，
             如果没有激活，comments_popup_link() 则只是简单的显示留言列表。 -->
             <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
             <!-- edit_post_link() 只是简单显示一个可以用来编辑当前日志的编辑链接，
             这样就可以让我们不必去管理界面搜寻该日志就能直接编辑。 -->
             <?php edit_post_link('Edit', ' | ', ''); ?>
            </p>
            </div>
        
        </div>
    </div>
    <?php endwhile; ?>
    <div class="navigation">
    <?php posts_nav_link('in between','befor','after'); ?>
    </div>
    <?php else : ?>

<div class=”post”>
<h2><?php _e('Not Found'); ?></h2>
</div>
<?php endif; ?>
</div>

<?php get_sidebar()?>
<?php get_footer()?>
</body>
</html>