<?php
    /*
    Plugin Name: Meta Box Example Plugin
    Plugin URI: http://example.com/wordpress-plugins/my-plugin
    Description: A plugin to create meta boxes in WordPress
    Version: 1.0
    Author: Brad Williams
    Author URI: http://wrox.com
    License: GPLv2
    */

    add_action( 'add_meta_boxes', 'boj_mbe_create' );

    function boj_mbe_create() {
        // 创建元数据框
        add_meta_box( 'boj-meta', 'My Custom Meta Box', 'boj_mbe_function', 'post', 'normal', 'high' );
    }
	
    function boj_mbe_function( $post ) {
        // 获取元数据的值如果存在
        $boj_mbe_name = get_post_meta( $post->ID, '_boj_mbe_name', true );
        $boj_mbe_costume = get_post_meta( $post->ID, '_boj_mbe_costume', true );

        echo '请填写下面的信息: ';
        ?>
        <p>Name: <input type="text" name="boj_mbe_name" value="
            <?php echo esc_attr( $boj_mbe_name ); ?>" /></p>
        <p>Costume:
            <select name="boj_mbe_costume">
                <option value="vampire" <?php selected( $boj_mbe_costume, 'vampire' ); ?>
                    >Vampire
                </option>
                <option value="zombie" <?php selected( $boj_mbe_costume, 'zombie' ); ?>
                    >Zombie 
                </option>
                <option value="smurf" <?php selected( $boj_mbe_costume, 'smurf' ); ?>
                    >Smurf
                </option>
            </select>
            </p>
            <?php
    }
	
    // 用钩子来保存元数据
    add_action( 'save_post', 'boj_mbe_save_meta' );

    function boj_mbe_save_meta( $post_id ) {
        // 验证元数据存在
        if ( isset( $_POST['boj_mbe_name'] ) ) {
            // 保存元数据
            update_post_meta( $post_id, '_boj_mbe_name',
                strip_tags( $_POST['boj_mbe_name'] ) );
            update_post_meta( $post_id, '_boj_mbe_costume',
                strip_tags( $_POST['boj_mbe_costume'] ) );
        }
    }
?>