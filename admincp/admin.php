<?php   session_start();   ?>
<?php
include("../config.php");
$t_query = mysql_query("SELECT * FROM servers") or die (mysql_error());
$t_query2 = mysql_query("SELECT * FROM comds") or die (mysql_error());
while( $rows = mysql_fetch_array($t_query) ){
$allservers = $allservers + 1;
}
while( $rows2 = mysql_fetch_array($t_query2) ){
$allcomds = $allcomds + 1;
}
if ( $allservers == ""){
$allservers = 0;	
}
if ( $allcomds == ""){
$allcomds = 0;	
}
?>
<?php 
if (isset($_SESSION['admin_session']) ) {
	
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body dir="rtl">
	<div id="wrapper">
		<div id="content">
			<div class="c1">
				<div class="controls">
					<nav class="links">
						<ul>
							<li><a href="#"><span class="ico1">ico</span>الرسائل <span class="num">0</span></a></li>
							<li><a href="#tab-6"><span class="ico2">ico</span>التعليقات<span class="num"><?php echo $allcomds; ?></span></a></li>
							<li><a href="#"><span class="ico3">ico</span>الطلبات<span class="num"><?php echo $allservers; ?></span></a></li>
						</ul>
					</nav>
					<div class="profile-box">
						<span class="profile">
							<a href="#" class="section">
								<img class="image" src="images/img1.png" alt="image description" width="26" height="26" />
								<span class="text-box">
									مرحباً
									<strong class="name"><?php echo $_SESSION['admin_session'] ?></strong>
								</span>
							</a>
							<a href="#" class="opener">opener</a>
						</span>
						<a href="logout.php" class="btn-on">On</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-2" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم2</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-3" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم3</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-4" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم4</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم5</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-6" class="tab">
						<article>
							<div class="text-section">
								<h1>التعليقات</h1>
								<p>هنا تعرض التعليقات</p>
                                <br>
                                <?php
								while( $rows2 = mysql_fetch_array($t_query2) ){
echo $rows2["username"];
echo '<br>';
echo $rows2["msg"];
echo '<br>';
}
								?>
                                <iframe src="comds.php" frameborder="0" height="500" width="500"></iframe>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-7" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم7</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
					<div id="tab-8" class="tab">
						<article>
							<div class="text-section">
								<h1>لوحة التحكم8</h1>
								<p>هذا مثال بسيط على بعض الخصائص</p>
							</div>
							<ul class="states">
								<li class="error"><span class="errorICO">error</span>خطأ : هذا هو شكل رسائل الخطأ في هذا القالب.</li>
								<li class="warning"><span class="warningICO">warning</span>تنبيه: وهنا أنت ترى رسالة تنبيه تجذب الإنتباه.</li>
								<li class="succes"><span class="successICO">Success</span>نجاح : و هنا رسالة تفيد بأن العملية تمت بنجاح.</li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</div>
		<aside id="sidebar">
			<strong class="logo"><a href="#">lg</a></strong>
			<ul class="tabset buttons">
				<li class="active">
					<a href="#tab-1" class="ico1"><span>Dashboard</span><em></em></a>
					<span class="tooltip"><span>لوحة التحكم</span></span>
				</li>
				<li>
					<a href="#tab-2" class="ico2"><span>Gallery</span><em></em></a>
					<span class="tooltip"><span>المعرض</span></span>
				</li>
				<li>
					<a href="#tab-3" class="ico3"><span>Pages</span><em></em></a>
					<span class="tooltip"><span>الصفحات</span></span>
				</li>
				<li>
					<a href="#tab-4" class="ico4"><span>Widgets</span><em></em></a>
					<span class="tooltip"><span>عناصر الواجهه</span></span>
				</li>
				<li>
					<a href="#tab-5" class="ico5"><span>Archive</span><em></em></a>
					<span class="tooltip"><span>الطلبات</span></span>
				</li>
				<li>
					<a href="#tab-6" class="ico6">
						<span>Comments</span><em></em>
					</a>
					<span class="num"><?php echo $allcomds; ?></span>
					<span class="tooltip"><span>التعليقات</span></span>
				</li>
				<li>
					<a href="#tab-7" class="ico7"><span>Plug-in</span><em></em></a>
					<span class="tooltip"><span>الفواتير</span></span>
				</li>
				<li>
					<a href="#tab-8" class="ico8"><span>Settings</span><em></em></a>
					<span class="tooltip"><span>الإعدادات</span></span>
				</li>
			</ul>
			<span class="shadow"></span>
		</aside>
	</div>
</body>
<!-- Arabic language by www.templaty.com -->
</html>
<?php
}else{
	include("login.php");
}
?>