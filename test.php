<?php
    // 加载 WordPress 环境
    // define( 'WP_DEBUG', true ); / * 要 debug 模式 取消注释。*/
    require_once( './wp-load.php' );
    // require_once( './wp-admin/admin.php' ); /* 要 is_admin() 取消注释 */
    
    echo "<pre>";print_r($wpdb);echo"</pre>";

    $get = $wpdb->get_results(" SELECT * FROM ".$wpdb->prefix."posts WHERE post_type='post' AND post_status='publish' ");
    echo "<pre>";print_r($get);echo"</pre>";
?>
