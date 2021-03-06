<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

		<!--<link rel="stylesheet" href="assets/css/admin.css" />-->
		<!--<link rel="stylesheet" href="assets/css/amazeui.flat.min.css" />-->
		<!--<link rel="stylesheet" href="assets/css/app.css" />-->
		<!--<link rel="stylesheet" href="assets/css/amazeui.css" />-->
		<link rel="stylesheet" href="style/student_main/css/first.css" />

        <base href="<?=base_url()?>">
		<script type="text/javascript" src="style/student_main/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="style/student_main/assets/js/amazeui.min.js"></script>
		<!--<script type="text/javascript" src="assets/js/amazeui.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/amazeui.legacy.min.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/amazeui.widgets.helper.min.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/app.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/handlebars.min.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/polyfill/rem.min.js"></script>-->
		<!--<script type="text/javascript" src="assets/js/polyfill/respond.min.js"></script>-->
		<title>首页</title>

	</head>
<style >
html {
	font-family: Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif;
	margin: 0;
	padding: 0;
	text-decoration: none;
}
body {
	color: #ffffff;
	background: url(http://138.128.207.99/education/style/student_main/img/03.jpg) no-repeat center;
	background-size: 100% 100%;
	min-height: 768px;
}
body,
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
code,
form,
fieldset,
legend,
input,
textarea,
p,
blockquote,
th,
td {
	margin: 0;
	padding: 0;
}
img {
	border: 0px;
}
.wx_show {
	background: rgba(250, 250, 250, .05);
	height: 120px;
	margin: 1px 5px 7px 4px;
}
#touxiang {
	float: left;
	width: 90px;
	height: 120px;
}
#wx_name {
	float: left;
	margin: 40px 5px;
	background: rgba(250, 250, 250, .25);
	height: 30px;
	max-width: 100%;
	border-radius: 3px;
}
label {
	padding: 5px 5px;
	font-size: 1.3rem;
}
.abc {
	margin: 20px 10px;
	width: 70px;
	height: 70px;
	border-radius: 50%;
	border: 1px solid transparent;
}
@media only screen and (min-width: 641px) {
	.abc {
		width: 48px;
		height: 48px
	}
}
ul {
	list-style: none outside none;
	margin-top: 15px;
	/*background: rgba(250,250,250,.10);*/
}
a {
	color: #ffffff;
	text-decoration: none;
}
#cate10 {
	clear: both;
}
#cate10 .catemenu {
	overflow: hidden;
	background-color: transparent;
	border-radius: 4px;
	margin: 7px 5px 0 4px;
}
#cate10 .catemenu ul {
	width: 100%;
	overflow: hidden;
}
#cate10 .catemenu li {
	display: list-item;
	text-align: -webkit-match-parent;
}
#cate10 .catemenu li {
	width: 33.3%;
	float: left;
	font-size: 130%;
	border-top: 0;
}
#cate10 .catemenu li:nth-child(n+13) a {
	padding: 10px 5px;
	color: #FEFFFE;
}
#cate10 .catemenu li:nth-child(n+13) img {
	display: none
}
#cate10 .catemenu a {
	display: block;
	border-radius: 3px;
	margin: 0 0 3px 3px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	padding: 20px 5px 10px;
	height: 100%;
	text-align: center;
}
#cate10 .catemenu img {
	width: 55px;
	height: 55px;
	display: block;
	margin: 0 auto;
	position: relative;
	top: -5px;
	vertical-align: middle;
	border-radius: 3px;
}
.am-btn {
	display: inline-block;
	margin-bottom: 0;
	/*padding: 0.625em 1em;*/

	vertical-align: middle;
	font-size: 1.6rem;
	font-weight: normal;
	line-height: 1.2;
	text-align: center;
	white-space: nowrap;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 0;
	cursor: pointer;
	outline: 0;
	-webkit-appearance: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-transition: background-color 300ms ease-out, border-color 300ms ease-out;
	transition: background-color 300ms ease-out, border-color 300ms ease-out;
}
.am-btn:focus,
.am-btn:active:focus {
	outline: thin dotted;
	outline: 1px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}
.am-btn:hover,
.am-btn:focus {
	color: #444444;
	text-decoration: none;
}
.am-btn:active,
.am-btn.am-active {
	background-image: none;
	-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.15);
	box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.15);
}
.am-btn-primary {} .am-btn-primary:hover,
.am-btn-primary:focus {
	background: rgba(250, 250, 250, .1);
}
.am-btn-primary:active {
	background: rgba(250, 250, 250, .25);
}
.am-offcanvas {
	display: none;
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1090;
	background: rgba(0, 0, 0, 0.15);
}
.am-offcanvas.am-active {
	display: block;
}
.am-offcanvas-bar {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	z-index: 1091;
	width: 180px;
	max-width: 100%;
	background: #333333;
	overflow-y: auto;
	/* scrollable */

	-webkit-overflow-scrolling: touch;
	/* scrollable */

	-webkit-transition: -webkit-transform 0.3s ease-in-out;
	transition: transform 0.3s ease-in-out;
	-webkit-transform: translateX(-100%);
	-ms-transform: translateX(-100%);
	transform: translateX(-100%);
}
.am-offcanvas-bar:after {
	content: "";
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	width: 1px;
}
.am-offcanvas.am-active .am-offcanvas-bar.am-offcanvas-bar-active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0);
}
.am-offcanvas-content {
	text-align: center;
	font-family: arial;
	margin-top: 10px;
	color: #FEFFFE;
}
.am-offcanvas-content a {
	color: #ccc;
	text-align: center;
}
.bbk p {
	margin: 30px 10px;
	width: 80%;
}
</style>

	<body>

		<div class="wx_show">
			<div id="touxiang">
				<a href="javascript:void(0);" class="am-btn am-btn-primary" data-am-offcanvas="{target: '#doc-oc-demo2', effect: 'push'}">
					<img src="<?php echo $user_image;?>" alt="" class="abc" width="48" height="48">
				</a>
			</div>
			<div id="wx_name">
            <label id="stu_open_id"><?php echo $user_stu_name;?></label>
			</div>
		</div>

		<!-- 侧边栏内容 -->
		<div id="doc-oc-demo2" class="am-offcanvas">
			<div class="am-offcanvas-bar">
				<div class="am-offcanvas-content">
					<h1>个人中心</h1>
					<div class="bbk">
						<a href="../private/myself.html"><p>基本信息>></p></a>
						<a href="http://138.128.207.99/education/personal_credits/"><p>个人积分</p></a>
						<a href="../private/collect.html"><p>个人收藏>></p></a>
						<a href="../private/cl_detail.html"><p>课程信息>></p></a>
						<a href="../private/advice.html"><p>意见反馈>></p></a>
						<a href="../private/about.html"><p>关于我们>></p></a>
					</div>
				</div>
			</div>
		</div>

		<div id="cate10">
			<div class="catemenu">
				<ul>
					<li>
                    <a href="<?php if($user_power == 1)echo "http://138.128.207.99/education/myproject/main/a_study.html";else echo "http://138.128.207.99/education/myproject/teachers/a-student.html";?>">
							<img src="style/student_main/img/1.png">教务管理</a>
					</li>
					<li>
                    <a href=<?php echo "index.php/notice/index/".$open_id;?>>
							<img src="style/student_main/img/8.png">课后作业</a>
					</li>
					<li>
						<a href="http://138.128.207.99/education/myproject/tcassessment/">
							<img src="style/student_main/img/6.png">教学评价</a>
					</li>
					<li>
                    <a href=<?php echo "index.php/communication/small_wechat/student_index/".$open_id;?>>
<img src="style/student_main/img/3.png">小组讨论</a>
					</li>
					<li>
                    <a href=<?php echo "index.php/attend/attendent/index?openid=".$open_id;?>>
							<img src="style/student_main/img/4.png">考勤签到</a>
					</li>
					<li>
                    <a href=<?php echo "index.php/notice/index/".$open_id;?>>
							<img src="style/student_main/img/7.png">教务通知</a>
					</li>
					<li>
						<a href="http://138.128.207.99/education/res_share/flase_index.html">
							<img src="style/student_main/img/9.png">学习资源</a>
					</li>
					<li>
                    <a href=<?php echo "index.php/communication/comm/index?openid=".$open_id;?>>
							<img src="style/student_main/img/5.png">交流分享</a>
					</li>
					<li>
						<a href="http://www.lib.gdpu.edu.cn/opac/weixin/account/service/index">
							<img src="style/student_main/img/2.png">微图书馆</a>
					</li>

				</ul>
			</div>
		</div>

	</body>

</html>
