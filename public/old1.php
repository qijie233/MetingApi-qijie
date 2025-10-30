<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="shortcut icon" href="favicon.png">
    <title>祈杰のMeting-API</title>
    
<script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
<script>LA.init({id:"KpwwGI5rN8XPOSwV",ck:"KpwwGI5rN8XPOSwV",autoTrack:true,hashMode:true})</script>

</head>

<body>
    <?php
    // 禁止空Referer访问的核心代码
    $allowedEmptyReferer = false; // 是否允许空Referer访问
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    
    // 检查是否直接访问（无Referer）且不允许空Referer
    if (!$allowedEmptyReferer && empty($referer)) {
        http_response_code(403); // 返回403禁止访问
        die('
            <h2>访问被拒绝</h2>
            <p>本站禁止直接访问，请通过来源页面跳转访问。</p>
            <p>技术原因：空Referer请求已被屏蔽。</p>
            <p>本站仍然可以解析网易云VIP歌曲。</p>
            <p>本站仍然公开MetingAPI的使用，具体用法请查看<a href="https://qijieya.cn/archives/service#metingapi" target="_blank">这里</a></p>
            <br>
            <p>©️2025 <a href="https://qijieya.cn" target="_blank">祈杰</a> All rights reserved.</p>
        ');
    }
    ?>
    
    <h2>参数说明</h2>
    server: 数据源
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;netease 网易云音乐(默认)<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tencent QQ音乐<br />
    <br />
    本站支持解析网易云VIP歌曲欢迎各位随时调用哦（网易云音乐人喵）
    <br />
    <br />
    <br />
    <br />
    type: 类型<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name 歌曲名<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;artist 歌手<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;url 链接<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pic 封面<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lrc 歌词<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;song 单曲<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playlist 歌单<br /><br />
    id: 类型ID（封面ID/单曲ID/歌单ID）<br />
    <br />
    GitHub：<a href="https://github.com/injahow/meting-api" target="_blank">meting-api</a>，此API基于 <a href="https://github.com/metowolf/Meting" target="_blank">Meting</a> 构建。<br /><br />
    例如：<a href="<?php echo API_URI ?>?type=url&id=1969519579" target="_blank"><?php echo API_URI ?>?type=url&id=1969519579</a><br />
    <a href="<?php echo API_URI ?>?type=url&id=416892104" target="_blank" style="padding-left:48px"><?php echo API_URI ?>?type=url&id=416892104</a><br />
    <a href="<?php echo API_URI ?>?type=song&id=591321" target="_blank" style="padding-left:48px"><?php echo API_URI ?>?type=song&id=591321</a><br />
    <a href="<?php echo API_URI ?>?type=playlist&id=2619366284" target="_blank" style="padding-left:48px"><?php echo API_URI ?>?type=playlist&id=2619366284</a><br /><br />
    


   <br/> 
   <br/>
   <br/>
   <br/>
©️2025 <a href="https://qijieya.cn" target="_blank">祈杰</a> All rights reserved.

</body>

</html>