<?php
/*
 *ARU EMOTICONS for Argon
 *
 * Plugin Name: ARU EMOTICONS for Argon
 * Plugin URI: https://github.com/OriLight152/ARU-EMOTICONS-for-Argon
 * Description: 为 Argon 主题添加aru表情包
 * Version:     1.2
 * Author:      OriLight
 * Author URI:  https://orilight.top/
 * Text Domain: aru-emoticons-for-argon
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if (get_option('aru_options_cdn') == ''){
    update_option('aru_options_cdn',stripcslashes('[jsDelivr]'));
}

function aru_options_submenu(){
    add_submenu_page('options-general.php', 'ARU表情包设置', 'ARU EMOTICONS', 'manage_options', 'aru_emoticons_for_argon', 'aru_options');
}

function aru_options(){
    if(isset($_POST['submit'])){
        update_option('aru_options_cdn',stripcslashes($_POST['aru_stickers_cdn']));
        echo '<div class="updated"><p>设置已更新</p></div>';
    }
    $CStickersCDN = get_option('aru_options_cdn');
    echo '<h1>ARU EMOTICONS for Argon</h1>';
    echo '<h2>CDN设置</h2>';
    echo '<p>[local] - 从本地加载表情资源</p>';
    echo '<p>[jsDelivr] - 从jsDelivr加载表情资源</p>';
    echo '<p>也可直接填写CDN地址，如 https://static.amarea.cn/ (需带/)</p>';
    echo '<form action="" method="post" id="aru_stickers_cdn_form">';
    echo '<p><input type="text" id="aru_stickers_cdn" name="aru_stickers_cdn" value="' . $CStickersCDN . '" /></p>';
    echo '<p><input type="submit" name="submit" value="保存设置" /></p>';
    echo '</form>';
}


add_action('admin_menu', 'aru_options_submenu');


function add_aru_emoticons($emotionList){

    $SLocal = plugin_dir_path(__FILE__);
    $SjsDelivr = 'https://cdn.jsdelivr.net/gh/OriLight152/ARU-EMOTICONS-for-Argon/';
    $SDefault = 'https://static.amarea.cn/';

    switch (get_option('aru_options_cdn')) {
        case '[local]':
            $StickersCDN = $SLocal;
            break;
        
        case '[jsDelivr]':
            $StickersCDN = $SjsDelivr;
            break;

        case '[default]':
            $StickersCDN = $SDefault;
            break;

        default:
            $StickersCDN = get_option('aru_options_cdn');
            break;
    }
    
    array_push(
        $emotionList,
        array(
            'groupname' => 'ARU', 
            'list' => array(
                array('type' => 'sticker', 'code' => 'aru-0000', 'src' => $StickersCDN . 'stickers/aru/s/0000.png'),
                array('type' => 'sticker', 'code' => 'aru-0010', 'src' => $StickersCDN . 'stickers/aru/s/0010.png'),
                array('type' => 'sticker', 'code' => 'aru-0040', 'src' => $StickersCDN . 'stickers/aru/s/0040.png'),
                array('type' => 'sticker', 'code' => 'aru-0080', 'src' => $StickersCDN . 'stickers/aru/s/0080.png'),
                array('type' => 'sticker', 'code' => 'aru-0090', 'src' => $StickersCDN . 'stickers/aru/s/0090.png'),
                array('type' => 'sticker', 'code' => 'aru-0120', 'src' => $StickersCDN . 'stickers/aru/s/0120.png'),
                array('type' => 'sticker', 'code' => 'aru-0170', 'src' => $StickersCDN . 'stickers/aru/s/0170.png'),
                array('type' => 'sticker', 'code' => 'aru-0171', 'src' => $StickersCDN . 'stickers/aru/s/0171.png'),
                array('type' => 'sticker', 'code' => 'aru-0180', 'src' => $StickersCDN . 'stickers/aru/s/0180.png'),
                array('type' => 'sticker', 'code' => 'aru-0190', 'src' => $StickersCDN . 'stickers/aru/s/0190.png'),
                array('type' => 'sticker', 'code' => 'aru-0380', 'src' => $StickersCDN . 'stickers/aru/s/0380.png'),
                array('type' => 'sticker', 'code' => 'aru-0390', 'src' => $StickersCDN . 'stickers/aru/s/0390.png'),
                array('type' => 'sticker', 'code' => 'aru-0391', 'src' => $StickersCDN . 'stickers/aru/s/0391.png'),
                array('type' => 'sticker', 'code' => 'aru-0450', 'src' => $StickersCDN . 'stickers/aru/s/0450.png'),
                array('type' => 'sticker', 'code' => 'aru-0470', 'src' => $StickersCDN . 'stickers/aru/s/0470.png'),
                array('type' => 'sticker', 'code' => 'aru-0560', 'src' => $StickersCDN . 'stickers/aru/s/0560.png'),
                array('type' => 'sticker', 'code' => 'aru-2101', 'src' => $StickersCDN . 'stickers/aru/s/2101.png'),
                array('type' => 'sticker', 'code' => 'aru-2140', 'src' => $StickersCDN . 'stickers/aru/s/2140.png'),
                array('type' => 'sticker', 'code' => 'aru-2152', 'src' => $StickersCDN . 'stickers/aru/s/2152.png'),
                array('type' => 'sticker', 'code' => 'aru-3030', 'src' => $StickersCDN . 'stickers/aru/s/3030.png'),
                array('type' => 'sticker', 'code' => 'aru-3040', 'src' => $StickersCDN . 'stickers/aru/s/3040.png'),
                array('type' => 'sticker', 'code' => 'aru-6091', 'src' => $StickersCDN . 'stickers/aru/s/6091.png'),
                array('type' => 'sticker', 'code' => 'aru-6500', 'src' => $StickersCDN . 'stickers/aru/s/6500.png'),
                array('type' => 'sticker', 'code' => 'aru-8001', 'src' => $StickersCDN . 'stickers/aru/s/8001.png')
            )
        )
    );
    return $emotionList;
}
add_filter('argon_emotion_list' , 'add_aru_emoticons');
?>