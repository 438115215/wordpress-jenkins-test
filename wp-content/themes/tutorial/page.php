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
             <?php link_pages('<strong>Pages:</strong>', '', 'number'); ?>
             <?php edit_post_link('Edit', '', ''); ?>
        </div>
        
        </div>
    </div>
    <?php endwhile; ?>

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