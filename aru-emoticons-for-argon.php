<?php
/**
 * ARU EMOTICONS for Argon
 *
 * Plugin Name: ARU EMOTICONS for Argon
 * Description: 为 Argon 主题添加aru表情包
 * Version:     1.0
 * Author:      OriLight
 * Author URI:  https://orilight.top/
 * Text Domain: aru-emoticons-for-argon
 *
 */

function add_aru_emoticons($emotionList){
    $StickersCDN = 'https://p4.amarea.cn/public';
    array_push(
        $emotionList,
        array(
            'groupname' => 'ARU', 
            'list' => array(
                array('type' => 'sticker', 'code' => 'aru-0000', 'src' => $StickersCDN . '/stickers/aru/s/0000.png'),
                array('type' => 'sticker', 'code' => 'aru-0010', 'src' => $StickersCDN . '/stickers/aru/s/0010.png'),
                array('type' => 'sticker', 'code' => 'aru-0040', 'src' => $StickersCDN . '/stickers/aru/s/0040.png'),
                array('type' => 'sticker', 'code' => 'aru-0080', 'src' => $StickersCDN . '/stickers/aru/s/0080.png'),
                array('type' => 'sticker', 'code' => 'aru-0090', 'src' => $StickersCDN . '/stickers/aru/s/0090.png'),
                array('type' => 'sticker', 'code' => 'aru-0120', 'src' => $StickersCDN . '/stickers/aru/s/0120.png'),
                array('type' => 'sticker', 'code' => 'aru-0170', 'src' => $StickersCDN . '/stickers/aru/s/0170.png'),
                array('type' => 'sticker', 'code' => 'aru-0171', 'src' => $StickersCDN . '/stickers/aru/s/0171.png'),
                array('type' => 'sticker', 'code' => 'aru-0180', 'src' => $StickersCDN . '/stickers/aru/s/0180.png'),
                array('type' => 'sticker', 'code' => 'aru-0190', 'src' => $StickersCDN . '/stickers/aru/s/0190.png'),
                array('type' => 'sticker', 'code' => 'aru-0380', 'src' => $StickersCDN . '/stickers/aru/s/0380.png'),
                array('type' => 'sticker', 'code' => 'aru-0390', 'src' => $StickersCDN . '/stickers/aru/s/0390.png'),
                array('type' => 'sticker', 'code' => 'aru-0391', 'src' => $StickersCDN . '/stickers/aru/s/0391.png'),
                array('type' => 'sticker', 'code' => 'aru-0450', 'src' => $StickersCDN . '/stickers/aru/s/0450.png'),
                array('type' => 'sticker', 'code' => 'aru-0470', 'src' => $StickersCDN . '/stickers/aru/s/0470.png'),
                array('type' => 'sticker', 'code' => 'aru-0560', 'src' => $StickersCDN . '/stickers/aru/s/0560.png'),
                array('type' => 'sticker', 'code' => 'aru-2101', 'src' => $StickersCDN . '/stickers/aru/s/2101.png'),
                array('type' => 'sticker', 'code' => 'aru-2140', 'src' => $StickersCDN . '/stickers/aru/s/2140.png'),
                array('type' => 'sticker', 'code' => 'aru-2152', 'src' => $StickersCDN . '/stickers/aru/s/2152.png'),
                array('type' => 'sticker', 'code' => 'aru-3030', 'src' => $StickersCDN . '/stickers/aru/s/3030.png'),
                array('type' => 'sticker', 'code' => 'aru-3040', 'src' => $StickersCDN . '/stickers/aru/s/3040.png'),
                array('type' => 'sticker', 'code' => 'aru-6091', 'src' => $StickersCDN . '/stickers/aru/s/6091.png'),
                array('type' => 'sticker', 'code' => 'aru-6500', 'src' => $StickersCDN . '/stickers/aru/s/6500.png'),
                array('type' => 'sticker', 'code' => 'aru-8001', 'src' => $StickersCDN . '/stickers/aru/s/8001.png')
            )
        )
    );
    return $emotionList;
}
add_filter('argon_emotion_list' , 'add_aru_emoticons');
?>