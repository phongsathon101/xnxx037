<?php session_start();
include 'include/config.php';

$sql_mem = "SELECT * FROM `users` where `FACEBOOK_ID`='" . $_SESSION['fbid'] . "'";
$result_mem = $server->query($sql_mem);
$row = $result_mem->fetch_assoc();

$expire = $row['EXPIRE'];
$date_now = date('Y-m-d');


if(!isset($_SESSION['fb_access_token'])){
    header('Location: login');
}

$action = $_GET['action'];

if(!isset($action)){
	header('Location: home');
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
		<?php include 'header.php' ?>
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->

		<header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="home#body">
						<h1 id="logo">
							<?=$row['NAME']; ?>
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="./home#body">หน้าแรก</a></li>
                        <li><a href="#features">เกี่ยวกับ</a></li>
                        <li><a href="#sood">สูตรสล็อต</a></li>
                        <li><a href="#team">ทีมพัฒนา</a></li>
                        <li><a href="#footer">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(https://www.globalsign.com/application/files/8615/8756/0680/Hacking_mobile_devices.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">สูตรแฮก<span> สล็อต</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">เปิดให้บริการแล้ววันนี้</span> ใช้งานฟรี.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">พัฒนาโดยแฮกเกอร์</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(https://cdn3.vectorstock.com/i/1000x1000/68/37/binary-computer-code-background-vector-8876837.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">สูตรแฮก<span> สล็อต</span>!</h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">เปิดให้บริการแล้ววันนี้</span> ใช้งานฟรี.</h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">พัฒนาโดยแฮกเกอร์</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Our Works
        ==================================== -->
		<?php if($action=="pgslot"){ ?>
		<section id="sood" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>สูตร PG SLOT</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>โปรแกรมสแกนสล็อตค่าย PG</p>
					</div>
					
				</div>
			</div>
			
			
			<div class="row contianer" align="center">
							<div class="col-md-12">
							<?php
// $load_json = file_get_contents('./slotfree/output_json/renderslotxo.json');
$load_json = file_get_contents('./data/slot1/output_json/renderpgslot.json');
$d         = json_decode($load_json, true);
$arr       = array();
foreach ($d["data"] as $row):
?>

<?php $percent = $row["percent"];
if ($percent >= 91) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "pulse animated infinite";
} elseif ($percent > 90) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "";
} elseif ($percent > 80) {
    $color = "info";
    $sta   = "";
    $heart   = "";
} elseif ($percent > 70) {
    $color = "warning";
    $sta   = "";
    $heart   = "";
  } elseif ($percent > 60) {
    $color = "dark";
    $sta   = "";
    $heart   = "";
} else {
    $color = "danger";
    $sta   = "";
    $heart   = "";
}
?>
								<div class="col-md-3">
								<img src="<?php echo $row["img"]; ?>" class="<?php echo $heart; ?>" style="width:200px;border-radius: 15px;border: 2px solid black;" alt="">
								<div><strong class="text-dark"><?php echo $row["name"]; ?></strong></div>
									<div class="progress" style="width:200px">
									<div  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class=<?php echo '"progress-bar-' . $color . ' progress-bar"' ?> style=<?php echo '"width:' . $percent . '%"' ?>><?php echo $percent . ' %' ?>
                                  </div>
										<!-- <div class="progress-bar-success progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div> -->
									</div>
								</div>
								<?php
							endforeach; ?>
							</div>
				</div>
		

		</section>
		<?php }elseif($action=="slotxo"){ ?>
			<section id="sood" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>สูตรสล็อต SLOTXO</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>โปรแกรมสแกนสล็อตค่าย SLOTXO</p>
					</div>
					
				</div>
			</div>
				<div class="row contianer" align="center">
							<div class="col-md-12">
							<?php
// $load_json = file_get_contents('./slotfree/output_json/renderslotxo.json');
$load_json = file_get_contents('./data/slot1/output_json/renderslotxo.json');
$d         = json_decode($load_json, true);
$arr       = array();
foreach ($d["data"] as $row):
?>

<?php $percent = $row["percent"];
if ($percent >= 91) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "pulse animated infinite";
} elseif ($percent > 90) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "";
} elseif ($percent > 80) {
    $color = "info";
    $sta   = "";
    $heart   = "";
} elseif ($percent > 70) {
    $color = "warning";
    $sta   = "";
    $heart   = "";
  } elseif ($percent > 60) {
    $color = "dark";
    $sta   = "";
    $heart   = "";
} else {
    $color = "danger";
    $sta   = "";
    $heart   = "";
}
?>
								<div class="col-md-3">
								<img src="<?php echo $row["img"]; ?>" class="<?php echo $heart; ?>" style="width:200px;border-radius: 15px;border: 2px solid black;" alt="">
								<div><strong class="text-dark"><?php echo $row["name"]; ?></strong></div>
									<div class="progress" style="width:200px">
									<div  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class=<?php echo '"progress-bar-' . $color . ' progress-bar"' ?> style=<?php echo '"width:' . $percent . '%"' ?>><?php echo $percent . ' %' ?>
                                  </div>
										<!-- <div class="progress-bar-success progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div> -->
									</div>
								</div>
								<?php
							endforeach; ?>
							</div>
				</div>
		

		</section>
		<?php }elseif($action=="redtiger"){  ?>
			<section id="sood" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>สูตรสล็อต REDTIGER</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>โปรแกรมสแกนสล็อตค่าย REDTIGER</p>
					</div>
					
				</div>
			</div>
			
			
			<div class="row contianer" align="center">
							<div class="col-md-12">
							<?php
// $load_json = file_get_contents('./slotfree/output_json/renderslotxo.json');
$load_json = file_get_contents('./data/slot1/output_json/renderredtiger.json');
$d         = json_decode($load_json, true);
$arr       = array();
foreach ($d["data"] as $row):
?>

<?php $percent = $row["percent"];
if ($percent >= 91) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "pulse animated infinite";
} elseif ($percent > 90) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "";
} elseif ($percent > 80) {
    $color = "info";
    $sta   = "";
    $heart   = "";
} elseif ($percent > 70) {
    $color = "warning";
    $sta   = "";
    $heart   = "";
  } elseif ($percent > 60) {
    $color = "dark";
    $sta   = "";
    $heart   = "";
} else {
    $color = "danger";
    $sta   = "";
    $heart   = "";
}
?>
								<div class="col-md-3">
								<img src="<?php echo $row["img"]; ?>" class="<?php echo $heart; ?>" style="width:200px;border-radius: 15px;border: 2px solid black;" alt="">
								<div><strong class="text-dark"><?php echo $row["name"]; ?></strong></div>
									<div class="progress" style="width:200px">
									<div  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class=<?php echo '"progress-bar-' . $color . ' progress-bar"' ?> style=<?php echo '"width:' . $percent . '%"' ?>><?php echo $percent . ' %' ?>
                                  </div>
										<!-- <div class="progress-bar-success progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div> -->
									</div>
								</div>
								<?php
							endforeach; ?>
							</div>
				</div>
		

		</section>
		<?php }elseif($action=="joker"){  ?>
			<section id="sood" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>สูตรสล็อต JOKER</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>โปรแกรมสแกนสล็อตค่าย JOKER</p>
					</div>
					
				</div>
			</div>
			
			
			<div class="row contianer" align="center">
							<div class="col-md-12">
							<?php
// $load_json = file_get_contents('./slotfree/output_json/renderslotxo.json');
$load_json = file_get_contents('./data/slot1/output_json/renderjoker.json');
$d         = json_decode($load_json, true);
$arr       = array();
foreach ($d["data"] as $row):
?>

<?php $percent = $row["percent"];
if ($percent >= 91) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "pulse animated infinite";
} elseif ($percent > 90) {
    $color = "success";
    $sta   = "animated infinite tada";
    $heart   = "";
} elseif ($percent > 80) {
    $color = "info";
    $sta   = "";
    $heart   = "";
} elseif ($percent > 70) {
    $color = "warning";
    $sta   = "";
    $heart   = "";
  } elseif ($percent > 60) {
    $color = "dark";
    $sta   = "";
    $heart   = "";
} else {
    $color = "danger";
    $sta   = "";
    $heart   = "";
}
?>
								<div class="col-md-3">
								<img src="<?php echo $row["img"]; ?>" class="<?php echo $heart; ?>" style="width:200px;border-radius: 15px;border: 2px solid black;" alt="">
								<div><strong class="text-dark"><?php echo $row["name"]; ?></strong></div>
									<div class="progress" style="width:200px">
									<div  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class=<?php echo '"progress-bar-' . $color . ' progress-bar"' ?> style=<?php echo '"width:' . $percent . '%"' ?>><?php echo $percent . ' %' ?>
                                  </div>
										<!-- <div class="progress-bar-success progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div> -->
									</div>
								</div>
								<?php
							endforeach; ?>
							</div>
				</div>
		

		</section>
		<?php }else{ ?>
			<script>
				document.location.href="home";
			</script>
			<?php } ?>
        <!--
        End Our Works
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>เกี่ยวกับเรา</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-info-circle fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>เราคือผู้ใช้บริการ "สูตรสล็อต"</h3>
								<p>สูตรสล็อต โปรแกรมช่วยเล่นที่สามารถ สแกนสล็อต ค้นหาการออกผลรางวัลโบนัสแจ็คพอตเกมสล็อต ได้ครบทุกเกมทุกค่าย เพียงเข้าเล่นเกมสล็อตจากทางเข้าที่เราแนะนำ ซึ่งเป็นผู้ให้บริการ สล็อตเว็บตรง ไม่ผ่านเอเย่นต์ และใช้งาน สูตรสแกนสล็อต จากเรา</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>สูตรสล็อตแจกฟรี</h3>
								<p>สูตรสล็อตฟรีทุกค่าย ก็สามารถเริ่มต้นใช้งาน สูตรสล็อตคำนวณด้วยระบบ AI 2021 จากทางเราไปใช้งานได้ทันที เริ่มต้นเล่นเกมสล็อตที่ชื่นชอบ พร้อมรับลิ้งค์สมัคร เว็บสล็อตแตกง่าย 2021 ทำกำไรจากการเล่นไปกับเรา ทีมงาน สูตรสล็อตแตกง่าย ผ่านการทดสอบว่าใช้งานได้จริง มีความแม่นยำสูงถึง 99%</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>บริการตลอด 24 ชั่วโมง</h3>
								<p>ยังมีระบบป้องกันความปลอดภัยที่ทันสมัย ปลอดภัย 100 % มีความมั่นคงทางการเงินสูง มาพร้อมกับทีมงานคุณภาพที่คอยดูแลทุกท่านตลอด 24 ชั่วโมง</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>

		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>ทีมผู้พัฒนาโปรแกรมสูตร</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>ทีมผู้พัฒนาโปรแกรมสูตรสแกนสล็อตแฮกเกอร์ โปรแกรมที่ถูกพัฒนาโดย ชาวต่างชาติ</p>
					</div>

					<!-- single member -->
					<div class="team-member col-md-1 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">

					</div>
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="img/team/member-1.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>จอห์น ฟิล์มเมอร์ โด</h4>
						<span>ผู้พัฒนาโปรแกรมคำนวณ</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/member-2.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>มาร์ติน ลี</h4>
						<span>หัวหน้าผู้ดูแลระบบ</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/member-3.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>voluptatem quia voluptas </h5>
								<p>sit aspernatur aut odit aut fugit,</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>สตีฟ ฟอร์คิน</h4>
						<span>ผู้ออกแบบและพัฒนาเว็บไซต์</span>
					</figure>
					<!-- end single member -->
					
					<!-- single member -->
					<!-- <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">

					</figure> -->
					<!-- end single member -->
					
				</div>
			</div>
		</section>
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Some Fun Facts</h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>
						
						<!-- first count item -->
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-user fa-3x"></i>
								<strong data-to="<?=$memberall ?>">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>สมาชิกทั้งหมด</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="120">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>สมาชิกที่ใช้งานอยู่</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-heart fa-3x"></i>
								<strong data-to="1596">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>ความพึงพอใจลูกค้า </p>
							</div>
						</div>
						<!-- end first count item -->
				
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		
		
		<?php include 'footer.php' ?>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js?time=<?=time();?>"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
<?php if($expire <= $date_now){ ?>
	<script>
Swal.fire({
	icon: 'warning',
	title: 'แจ้งเตือน !',
	text: 'เวลาใช้งานของคุณหมดอายุแล้ว',
}).then((result) => {
	document.location.href="home";
});
setInterval(() => {
	window.location.href = "home";
}, 3000);
</script>
<?php }	?>
    </body>
</html>

