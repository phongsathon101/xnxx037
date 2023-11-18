<?php session_start();
include 'include/config.php';

$sql_mem = "SELECT * FROM `users` where `FACEBOOK_ID`='" . $_SESSION['fbid'] . "'";
$result_mem = $server->query($sql_mem);
$row = $result_mem->fetch_assoc();

$expire = $row['EXPIRE'];
$date_now = date('Y-m-d');

$counter_file = "counter.txt";
$count        = file_get_contents($counter_file);
$counter      = file_put_contents($counter_file, $count + 1);

if(!isset($_SESSION['fb_access_token'])){
    header('Location: login');
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
		<?php include 'menu.php' ?>
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
		
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="sood" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>สูตรสแกนสล็อต 2022</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>เราคือผู้ให้บริการ แฮกสูตรสล็อต 2022 เปิดให้ใช้งานฟรีเท่านั้น ย้ำว่าฟรี ทางเราไม่มีการจัดจำหน่ายสูตรสล็อตใดๆทั้งสิ้น</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".pgslot" class="filter">PG</a></li>
							<li><a href="javascript:;" data-filter=".slotxo" class="filter">SLOTXO</a></li>
							<li><a href="javascript:;" data-filter=".redtiger" class="filter">RED TIGER</a></li>
							<li><a href="javascript:;" data-filter=".joker" class="filter">JOKER</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="project-wrapper">
			
				<figure class="mix work-item pgslot">
					<img src="https://pgslotx.online/wp-content/uploads/2021/10/PG-slot-1-3.jpg" alt="">
					<figcaption class="overlay">
					<?php if($expire <= $date_now){ ?>
						<a title="Write Your Image Caption Here" href="#sood" onclick="Swal.fire({ icon: 'error', title: 'แจ้งเตือน !', text: 'เวลาใช้งานของคุณหมดอายุแล้ว กรุณาติดต่อแอดมิน', })"><i class="fa fa-eye fa-lg"></i></a>
						<?php }else{ ?>
						<a title="Write Your Image Caption Here" href="pgslot"><i class="fa fa-eye fa-lg"></i></a>
						<?php } ?>
						<h4>สูตรสล็อต PG</h4>
						<p>สูตรแฮกสล็อต</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item slotxo">
					<img src="https://spookslot.com/wp-content/uploads/2021/05/slotxo_opt.jpg" alt="">
					<figcaption class="overlay">
					<?php if($expire <= $date_now){ ?>
						<a title="Write Your Image Caption Here" href="#sood" onclick="Swal.fire({ icon: 'error', title: 'แจ้งเตือน !', text: 'เวลาใช้งานของคุณหมดอายุแล้ว กรุณาติดต่อแอดมิน', })"><i class="fa fa-eye fa-lg"></i></a>
						<?php }else{ ?>
						<a title="Write Your Image Caption Here" href="slotxo"><i class="fa fa-eye fa-lg"></i></a>
						<?php } ?>
						<h4>สูตรสล็อต SLOTXO</h4>
						<p>สูตรแฮกสล็อต</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item redtiger">
					<img src="https://cdn.dribbble.com/users/727041/screenshots/5153928/media/4823a4718b56c5a82a555912215e22fc.jpg?compress=1&resize=400x300" alt="">
					<figcaption class="overlay">
					<?php if($expire <= $date_now){ ?>
						<a title="Write Your Image Caption Here" href="#sood" onclick="Swal.fire({ icon: 'error', title: 'แจ้งเตือน !', text: 'เวลาใช้งานของคุณหมดอายุแล้ว กรุณาติดต่อแอดมิน', })"><i class="fa fa-eye fa-lg"></i></a>
						<?php }else{ ?>
						<a title="Write Your Image Caption Here" href="redtiger"><i class="fa fa-eye fa-lg"></i></a>
						<?php } ?>
						<h4>สูตรสล็อต REDTIGER</h4>
						<p>สูตรแฮกสล็อต</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item joker">
					<img src="https://cdn.dribbble.com/users/6337035/screenshots/14539278/joker.jpg" alt="">
					<figcaption class="overlay">
					<?php if($expire <= $date_now){ ?>
						<a title="Write Your Image Caption Here" href="#sood" onclick="Swal.fire({ icon: 'error', title: 'แจ้งเตือน !', text: 'เวลาใช้งานของคุณหมดอายุแล้ว กรุณาติดต่อแอดมิน', })"><i class="fa fa-eye fa-lg"></i></a>
						<?php }else{ ?>
						<a title="Write Your Image Caption Here" href="joker"><i class="fa fa-eye fa-lg"></i></a>
						<?php } ?>
						<h4>สูตรสล็อต JOKER</h4>
						<p>สูตรแฮกสล็อต</p>
					</figcaption>
				</figure>
				
			</div>
		

		</section>
		
        <!--
        End Our Works
        ==================================== -->
		
        <!--
        Meet Our Team
        ==================================== -->		
		
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
								<h5>ข้อมูลการติดต่อ </h5>
								<p>ติดตามรายละเอียดต่างๆ ด้านล่าง</p>
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
								<h5>ข้อมูลการติดต่อ </h5>
								<p>ติดตามรายละเอียดต่างๆ ด้านล่าง</p>
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
								<h5>ข้อมูลการติดต่อ </h5>
								<p>ติดตามรายละเอียดต่างๆ ด้านล่าง</p>
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
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>ข้อมูลเว็บไซต์</h2>
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
								<i class="fa fa-eye fa-3x"></i>
								<strong data-to="<?=$count ?>"><?=$count ?></strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>การเข้าชมเว็บไซต์ </p>
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
    </body>
</html>
