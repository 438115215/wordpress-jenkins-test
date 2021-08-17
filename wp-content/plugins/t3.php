<?php
    /*
    Plugin Name: RSS Dashboard Widget Example Plugin
    Plugin URI: http://example.com/wordpress-plugins/my-plugin
    Description: A plugin to create dashboard widgets in WordPress
    Version: 1.0
    Author: Brad Williams
    Author URI: http://wrox.com
    License: GPLv2
    */
	
    add_action( 'wp_dashboard_setup', 'boj_dashboard_example_widgets' );

    function boj_dashboard_example_widgets() {
        // 创建一个自定义的控制板小工具
        wp_add_dashboard_widget( 
            'dashboard_custom_feed',
            'My Plugin Information',
            'boj_dashboard_example_display',
            'boj_dashboard_example_setup'
        );
    }
	
    function boj_dashoboard_example_display() {
        // 加载小工具选项
        $boj_option = get_option( 'boj_dashboard_widget_rss ');
        
        // 如果选项为空，则设置默认值
        $boj_rss_feed = ( $boj_option ) ? $boj_option : 'https://wordpress.org/news/feed/';
        
        // 获得 RSS 源并显示
        echo '<div class="rss-widget">';
        
        wp_widget_rss_output( array(
            'url' => $boj_rss_feed,
            'title' => 'RSS Feed News',
            'items' => 2,
            'show_summary' => 1,
            'show_author' => 0,
            'show_date' => 1
        ) );
        
        echo '</div>';
    }
	
     function boj_dashboard_example_setup() {
        // 在保持前检查选项是否设置
        if ( isset( $_POST['boj_rss_feed'] ) ) {
            // 从表单获得选项的值
           $boj_rss_feed = esc_url_raw( $_POST['boj_rss_feed'] );
           
           // 作为选项保存
           update_option( 'boj_dashboard_widget_rss', $boj_rss_feed );
        }
        
        // 如果有保存的 feed 加载
        $boj_rss_feed = get_option( 'boj_dashboard_widget_rss ');
        ?>
        <label for="feed">
            Rss Feed URL: <input type="text" name="boj_rss_feed" id="boj_rss_feed"
                value="<?php echo esc_url( $boj_rss_feed ); ?>" size="50" />
        </label>
        <?php
    }
?>