<?php
require('header.php');
require('setting.php');
?>
        <main id="content-outer">
            <div class="layout_page" id="content-inner">
                <div class="aside_content" id="aside_content">
                    <div class="card-widget card-info">
                        <div class="card-content">
                            <div class="card-info-avatar is-center">
                                <img class="avatar-img"
                                    src="https://cdn.jsdelivr.net/gh/laoxuai/assert/images/20200125221102.png"
                                    alt="avatar">
                                <div class="author-info__name">赵雨堃</div>
                                <div class="author-info__description">班级：计科2001 学号：20851009</div>
                            </div>
                        </div>
                    </div>

                    <div class="card-widget card-announcement">
                        <div class="card-content">
                            <div class="item-headline">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                <span>一言</span>
                            </div>
                            <div id="hitokoto"></div>
                        </div>
                    </div>
                    <div class="card-widget card-announcement">
                        <div class="card-content">
                            <div class="item-headline">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>今日诗词</span>
                            </div>
                            <div id="jinrishici-sentence"></div>
                        </div>
                    </div>
                    <div class="card-widget card-announcement">
                        <div class="card-content">
                            <div class="item-headline">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                <span>网站信息</span>
                            </div>
                            <p>网站版本：<?php echo $VERSION; ?></p>
                            <p>更新日期：<?php echo $TIME; ?></p>
                        </div>
                    </div>
                    <div class="card-widget card-announcement">
                        <div class="card-content">
                            <div class="item-headline">
                                <i class="fa fa-level-up" aria-hidden="true"></i>
                                <span>另外一个页面</span>
                            </div>
                            <button class="mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripper" onclick="window.location.href='others.php'" type="button">点击前往</button>
                        </div>
                    </div>
                </div>
                <article id="page">
                    <div class="article-container">
                        <h2>音乐</h2>
						<div>
                        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=1448800048&auto=1&height=66"></iframe>
                        </div>
						<hr>
						
                        <h2>技能</h2>
                        <div class="skillbox">
                            <div class="skillbar">
                                <div class="skillbar-title"
                                    style="background: linear-gradient(to right, #FF0066 0%, #FF00CC 100%); width: 10%">
                                    <span>Java</span>
                                </div>
                                <div class="skill-bar-percent">10%</div>
                            </div>
                            <div class="skillbar">
                                <div class="skillbar-title"
                                    style="background: linear-gradient(to right, #9900FF 0%, #CC66FF 100%); width: 30%">
                                    <span>前端</span>
                                </div>
                                <div class="skill-bar-percent">30%</div>
                            </div>
                            <div class="skillbar">
                                <div class="skillbar-title"
                                    style="background: linear-gradient(to right, #4CAF50 0%, #81C784 100%); width: 50%">
                                    <span>C++</span>
                                </div>
                                <div class="skill-bar-percent">50%</div>
                            </div>
                            <div class="skillbar">
                                <div class="skillbar-title"
                                    style="background: linear-gradient(to right, #FFEB3B 0%, #FFF176 100%); width: 45%">
                                    <span>数据结构与算法</span>
                                </div>
                                <div class="skill-bar-percent">45%</div>
                            </div>
                        </div>
            <hr>
            						<h2>声明</h2>
            						<div class="annonce">
            							<p>本网站已上传至服务器，可以<a href="http://personal.xyinno.tech">从这里访问。</a>(http://personal.xyinno.tech)</p>
            							<div class="warring" style="font-weight: bold; color:red;">
	            							<p>由于本页面有php元素，如果本地没安装运行环境将会显示不正确。请直接访问网站。</p>
            							</div>
            							<hr>
            							<div class="author">
            								<p>
            									本网站由赵雨堃（YTSakura）进行制作，采用MDUI等WEBUI进行设计，网站语言采用HTML、PHP、JS等。
            								</p>
                            <p>本站仅制作了前端，所有后端均未制作。</p>
            							</div>
            						</div>
                    </div>
                </article>
            </div>
        </main>
        <?php
        require('footer.php');
        ?>