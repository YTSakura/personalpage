<?php
require('setting.php');
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5">
    <title>赵雨堃-计科2001</title>
    <meta name="description" content="WEB大作业,个人主页 也许...">
    <meta name="keywords" content="个人主页, web大作业,css,html">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/mdui.css">
    <link rel="stylesheet" href="./css/mdui.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.fancybox@2.1.5/source/jquery.fancybox.css">
    <script type="text/javascript">
        if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?
            alert('朋友，上古浏览器不支持呢~');
        }
        function fun() {
        	alert('没啥用的，我没写后端');
        }
    </script>
    </style>
    <?php
    if($COMMEMORATION == 'true'){
		?>
    <style> 
    html { 
        -webkit-filter: grayscale(100%); 
        -moz-filter: grayscale(100%); 
        -ms-filter: grayscale(100%); 
        -o-filter: grayscale(100%); 
        filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);  
        _filter:none; 
    } 
		</style> 
		<?php
	}
	?>
</head>
<body>
    <div id="body-wrap">
        <nav class="not_index_bg" id="nav" style="background-image:url(https://api.ixiaowai.cn/api/api.php)">
            <div id="page_site-info">
                <div id="site-title">
                    <span class="blogtitle"></span>
                    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
                    <script>
                        var typed = new Typed(".blogtitle", {
                            strings: ["人如果不付出牺牲就无法得到任何东西，如果要得到什么，就要付出同等的代价，这就是等价交换的原则。","能哭的地方除了厕所还有爸爸的怀里。","真相不止一个，有多少人见证过就有多少真相，如果不相信历史的话，就亲眼看世界吧。","我的手里拿着刀，就无法抱着你。我把刀放下，就无法保护你。","总有一天我会让这里座无虚席","不存在无法治疗的伤。无法治疗的伤不是伤而应该被称为死。","笑是对身边的事物感到一瞬间的幸福而表现出来的东西。","如果努力也不一定成功，那么为什么还要努力呢？"],
                            startDelay: 300,
                            typeSpeed: 80,
                            loop: true,
                            backSpeed: 50,
                            showCursor: true,
                        });
                    </script>
                </div>
            </div>
        </nav>