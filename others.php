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
                                <span>你要想回去的话这里可以</span>
                            </div>
                            <button class="mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripper" onclick="window.location.href='index.php'" type="button">返回主页</button>
                        </div>
                    </div>
                </div>
                <article id="page">
                    <div class="article-container">
                        <h2>表格</h2>
											<div class="mdui-table-fluid">
  										<table class="mdui-table mdui-table-hoverable">
    										<thead>
      									<tr>
        									<th>#</th>
        									<th>First Name</th>
        									<th>Last Name</th>
        									<th>Username</th>
      										</tr>
    										</thead>
    										<tbody>
      									<tr>
        									<td>1</td>
        									<td>NAME1</td>
        									<td>NEME1</td>
        									<td>@ADMIN</td>
      									</tr>
      									<tr>
       										<td>2</td>
        									<td>NAME1</td>
        									<td>NEME1</td>
        									<td>@ADMIN</td>
      									</tr>
      									<tr>
        									<td>3</td>
        									<td>NAME1</td>
        									<td>NEME1</td>
        									<td>@ADMIN</td>
      									</tr>
    									</tbody>
  									</table>
										</div>
						<hr>
										<div class="forms">
											<h2>表单</h2>
											<form action="#" method="post" name="forms">
												<div class="mdui-textfield mdui-textfield-floating-label">
  												<i class="mdui-icon material-icons">account_circle</i>
  												<label class="mdui-textfield-label">User name</label>
  												<input class="mdui-textfield-input" type="text"/>
												</div>
												<div class="mdui-textfield mdui-textfield-floating-label">
													<i class="mdui-icon material-icons">email</i>
  												<label class="mdui-textfield-label">Email</label>
  												<input class="mdui-textfield-input" type="email"/>
												</div>
												<div class="mdui-textfield mdui-textfield-floating-label">
													<i class="mdui-icon material-icons">lock</i>
													<label class="mdui-textfield-label">Password</label>
													<input class="mdui-textfield-input" type="password" />
												</div>
												<br>
												<button class="mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripper" onclick="fun()">提交</button>
											</form>
										</div>
						<hr>
										<div class="table">
											<h2>列表</h2>
											<ul class="mdui-list">
											  <li class="mdui-list-item mdui-list-item mdui-ripple">
												<div class="mdui-list-item-avatar">
													<img src="https://cdn.jsdelivr.net/gh/laoxuai/assert/images/20200125221102.png"/>
												</div>
												<div class="mdui-list-item-content">
													<div class="mdui-list-item-title">列表1</div>
													<div class="mdui-list-item-text mdui-list-item-one-line">
														<span class="mdui-text-color-theme-text">name:</span> - 仅仅是个列表而已
													</div>
												</div>
											</li>
											<li class="mdui-divider-inset mdui-m-y-0"></li>
											<li class="mdui-list-item mdui-ripple">
												<div class="mdui-list-item-avatar">
													<img src="https://cdn.jsdelivr.net/gh/laoxuai/assert/images/20200125221102.png"/>
												</div>
												<div class="mdui-list-item-content">
													<div class="mdui-list-item-title">列表2</div>
													<div class="mdui-list-item-text mdui-list-item-one-line">
														<span class="mdui-text-color-theme-text">name:</span> - 仅仅是个列表而已
													</div>
												</div>
											</li>
											<li class="mdui-divider-inset mdui-m-y-0"></li>
											<li class="mdui-list-item mdui-ripple">
												<div class="mdui-list-item-avatar">
													<img src="https://cdn.jsdelivr.net/gh/laoxuai/assert/images/20200125221102.png"/>
												</div>
												<div class="mdui-list-item-content">
													<div class="mdui-list-item-title">列表3</div>
													<div class="mdui-list-item-text mdui-list-item-one-line">
														<span class="mdui-text-color-theme-text">name:</span> - 仅仅是个列表而已
													</div>
												</div>
											</li>
										</ul>
										</div>
						<hr>
										<div class="img">
											<h2>图片</h2>
											<div class="lightbox">
												
												<a rel="lightbox" href="https://api.ixiaowai.cn/api/api.php" title="img1">
  												<img class="mdui-img-fluid" src="https://api.ixiaowai.cn/api/api.php" /> 
												</a>
												<h3>↑banner的图片在这里↑</h3>
												<hr>
												<img class="mdui-img-fluid" src="https://www.dmoe.cc/random.php" />
											</div>
										</div>
                    </div>
                </article>
            </div>
        </main>
        <?php
        require('footer.php');
        ?>