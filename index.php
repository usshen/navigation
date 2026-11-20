<?php
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_POST["q"]);
if (empty($q)) {
}else{
  if ($t==""){
    echo'<script>window.location.href="https://cn.bing.com/search?q='.$q.'";</script>';
  }else{
    //默认谷歌
    echo'<script>window.location.href="https://www.google.com/search?q='.$q.'";</script>';
  }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="referrer" content="no-referrer" />
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="icon/f.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="icon/f.png" />
  <meta name="msapplication-TileImage" content="icon/f.png" />
  <link rel="shortcut icon" href="icon/f.png"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <title>简单搜索</title>
  <link href="style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <link href="wea.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://at.alicdn.com/t/font_3112961_m9r321ea4oe.js"></script>
  <script src="sou.js?t=<?php echo date("ymdhi"); ?>"></script>
  <script src="wea.js?t=<?php echo date("ymdhi"); ?>"></script>
<style>
</style>
</head>

<body>
    <div id="menu"><i></i></div>
    <div class="list closed">
        <ul>
          <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shipin"></use></svg> 视频媒体</li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youtube"></use>
</svg> Youtube</a></li>
            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-tengxunshipin"></use></svg>腾讯视频</a></li>
            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youku1"></use></svg>优酷</a></li>
            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-aiqiyishipin2"></use></svg>爱奇艺</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bilibili2"></use></svg>哔哩哔哩</a></li>
          <!------> 
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youxiang"></use></svg> 邮箱</li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gmail2"></use></svg>Gmail</a></li>
            <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-LiveHotmailyouxiang"></use></svg>Hotmail</a></li>
            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyiyouxiang_24"></use></svg>网易邮箱</a></li>
            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-alimailaliyouxiang"></use></svg>阿里邮箱</a></li>
            <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> 搜索引擎</li>
            <li><a rel="nofollow" href="https://www.google.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-google1"></use></svg>Google</a></li>
            <li><a rel="nofollow" href="https://duckduckgo.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-duckduckgo1"></use></svg>DuckGo</a></li>
            <li><a rel="nofollow" href="https://www.bing.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-Bing1"></use></svg>Bing</a></li>
            <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gongju-"></use></svg> 工具</li>
            <li><a rel="nofollow" href="https://browserleaks.com/ip" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ipaddress"></use></svg>IP查询</a></li>
            <li><a rel="nofollow" href="https://translate.google.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-googletranslate"></use></svg>谷歌翻译</a></li>
			<li><a rel="nofollow" href="https://www.weiyun.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-tengxunweiyun"></use></svg>微云</a></li>
            <li><a rel="nofollow" href="https://www.base64encode.org/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-base64"></use></svg>Base64</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-PRIVATENETWORK"></use></svg>Ping.pe</a></li>
            <li><a rel="nofollow" href="https://ippure.com/en/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-weibiaoti-_huabanfuben-copy-copy-copy-copy"></use></svg>IP CHECK</a></li>
            <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ziyuan1"></use></svg> 开发</li>
            <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-w3school1"></use></svg>W3school</a></li>
            <li><a rel="nofollow" href="https://github.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-GitHub1"></use></svg>Github</a></li>
            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-cloudflare"></use></svg>C. flare</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="con">
            <!--div class="shlogo" style="background: url(icon/hanabi.jpg) no-repeat center/cover;"></div-->
            <div class="sou">
                <form action="" method="post" target="_self">
                   <?php 
                   if ($t==""){
                     echo'<div class="lg" style="background: url(icon/Bing.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=g\';"></div>';
                   }else{
                    
                     echo'<div class="lg" style="background: url(icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';"></div>';
                   }

                    ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
                    <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
                </form>
                <div id="word"></div>
                <!--ul>
                    <li data-s="baidu" target="_blank"><i style="background-image: url(icon/baidu.svg);"></i>必应一下</li>
                    <li data-s="google" target="_blank"><i style="background-image: url(icon/g.svg);"></i>谷歌一下</li>
                </ul-->
            </div>
        </div>
        <div class="foot">© 2016-<?php echo date("Y") ?> by <a href="https://www.aboy.ga/">LHH</a> . All rights reserved.</div>
    </div>
<!--
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-05-19
版权所有，请勿删除
-->
</body>
</html>