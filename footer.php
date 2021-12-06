<?php
require('setting.php');
?>
<footer id="footer">
            <div id="footer-wrap">
                <div class="copyright">&copy;2021 - <?php echo date("Y"); ?> BY YTSakura <a href="http://beian.miit.gov.cn">京ICP备20031765号</a></div>
                <div class="friendly">
                <p style="color:gray">友情连接 <a class="friendly" href="https://animemangafan.cn/">AMF动漫协会</a></p>
              </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.fancybox@2.1.5/source/jquery.fancybox.js"></script>
    <script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/instant.page@3.0.0/instantpage.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.2.0/lazysizes.min.js" async></script>
    <!-- mdui -->
    <script src="./js/mdui.esm.js"></script>
    <script src="./js/mdui.js"></script>
    <script src="./js/mdui.min.js"></script>
    <!-- aplayer、meting -->
    <!-- require APlayer -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
    <!-- require MetingJS -->
    <script src="https://cdn.jsdelivr.net/npm/meting@2/dist/Meting.min.js"></script>

    <!-- nplayer -->
    <script src="https://unpkg.com/nplayer@latest/dist/index.min.js"></script>

    <!--   一言、今日诗词   -->
    <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
    <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>

    <!-- 看板娘 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget@latest/autoload.js"></script>

    <!--鼠标点击效果-->
    <script src="https://cdn.jsdelivr.net/gh/TRHX/CDN-for-itrhx.com@3.0.8/js/maodian.js"></script>

    <script type="text/javascript">
        console.clear();
        console.log("%c 有朋自远方来, 不亦说乎.", "background:#24272A; color:#ffffff", "");
				console.log("%c Author: %c", "background:#24272A; color:#ffffff", "", "YTSakura");
        console.log("%c 版本号: %c", "background:#24272A; color:#ffffff", "", "<?php echo $VERSION; ?>");
        console.log("%c 更新日期: %c", "background:#24272A; color:#ffffff", "", "<?php echo $TIME; ?>");


        (function ($) {
            $.fn.snow = function (options) {
                var $flake = $('<div id="snowbox" />').css({ 'position': 'absolute', 'z-index': '9999', 'top': '-50px' }).html('&#10052;'),
                    documentHeight = $(document).height(),
                    documentWidth = $(document).width(),
                    defaults = {
                        minSize: 10,
                        maxSize: 20,
                        newOn: 1000,
                        flakeColor: "#AFDAEF" /* 雪花颜色 */
                    },
                    options = $.extend({}, defaults, options);
                var interval = setInterval(function () {
                    var startPositionLeft = Math.random() * documentWidth - 100,
                        startOpacity = 0.5 + Math.random(),
                        sizeFlake = options.minSize + Math.random() * options.maxSize,
                        endPositionTop = documentHeight - 200,
                        endPositionLeft = startPositionLeft - 500 + Math.random() * 500,
                        durationFall = documentHeight * 10 + Math.random() * 5000;
                    $flake.clone().appendTo('body').css({
                        left: startPositionLeft,
                        opacity: startOpacity,
                        'font-size': sizeFlake,
                        color: options.flakeColor
                    }).animate({
                        top: endPositionTop,
                        left: endPositionLeft,
                        opacity: 0.2
                    }, durationFall, 'linear', function () {
                        $(this).remove()
                    });
                }, options.newOn);
            };
        })(jQuery);
        $(function () {
            $.fn.snow({
                minSize: 5, /* 定义雪花最小尺寸 */
                maxSize: 50,/* 定义雪花最大尺寸 */
                newOn: 500  /* 定义密集程度，数字越小越密集 */
            });
        });

        // 浏览器搞笑标题
        var OriginTitle = document.title;
        var titleTime;
        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                // $('[rel="icon"]').attr('href', "/funny.ico");
                document.title = '╭(°A°`)╮ 页面崩溃啦 ~';
                clearTimeout(titleTime);
            }
            else {
                $('[rel="icon"]').attr('href', "/favicon.ico");
                document.title = '(ฅ>ω<*ฅ) 噫又好啦 ~' + OriginTitle;
                titleTime = setTimeout(function () {
                    document.title = OriginTitle;
                }, 2000);
            }
        });
    </script>
</body>

</html>