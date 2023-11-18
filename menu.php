
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
						<h1 id="logo" style="margin-top:5px; margin-left:10px">
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
                        <!-- <li><a href="logout" class="btn btn-danger btn-sm">Logout</a></li> -->
                    </ul>
                    <a href="logout" class="btn btn-danger btn-sm" style="margin-top:12px">Logout</a>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>