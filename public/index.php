<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="shortcut icon" href="favicon.png">
    <title>祈杰のMeting-API - 支持解析网易云VIP</title>
    
<script charset="UTF-8" id="LA_COLLECT" src="//sdk.51.la/js-sdk-pro.min.js"></script>
<script>LA.init({id:"KpwwGI5rN8XPOSwV",ck:"KpwwGI5rN8XPOSwV",autoTrack:true,hashMode:true})</script>

</head>

<body>
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
    
    <?php
    // 读取API调用统计信息
    $stats_file = __DIR__ . '/../cache/stats.json';
    $total_calls = 0;
    $today_calls = 0;
    
    if (file_exists($stats_file)) {
        $stats_data = json_decode(file_get_contents($stats_file), true);
        if ($stats_data) {
            $total_calls = isset($stats_data['total_calls']) ? $stats_data['total_calls'] : 0;
            $today_calls = isset($stats_data['today_calls']) ? $stats_data['today_calls'] : 0;
            
            // 检查是否是新的一天
            if (isset($stats_data['last_call_date']) && $stats_data['last_call_date'] != date('Y-m-d')) {
                $today_calls = 0;
            }
        }
    }
    ?>
    
    <div style="background-color: #f0f8ff; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-size: 14px; width: 300px;">
        <h4 style="margin: 0 0 5px 0;">API调用统计</h4>
        <p style="margin: 3px 0;">累计调用: <strong><?php echo $total_calls; ?></strong></p>
        <p style="margin: 3px 0;">今日调用: <strong><?php echo $today_calls; ?></strong></p>
    </div>
    
    <br/>
    <br/>
    
    ©️2025 <a href="https://qijieya.cn" target="_blank">祈杰</a> All rights reserved.

</body>

</html>