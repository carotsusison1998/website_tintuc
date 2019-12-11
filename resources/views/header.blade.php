<!-- Header -->
<header>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<div class="topbar">
			<div class="content-topbar container h-100">
				<div class="left-topbar">
					<span class="left-topbar-item flex-wr-s-c">
						<span>
							Việt Nam, VN
						</span>

						<img class="m-b-1 m-rl-8" src="../public/giaodien/../public/giaodien/images/icons/icon-night.png" alt="IMG">

						<span>
							HN 58° CT 56°
						</span>
					</span>

					<a href="#" class="left-topbar-item">
						About
					</a>

					<a href="#" class="left-topbar-item">
						Contact
					</a>

					<a href="#" class="left-topbar-item">
						Sing up
					</a>

					<a href="#" class="left-topbar-item">
						Log in
					</a>
				</div>

				<div class="right-topbar">
					<a href="#">
						<span class="fab fa-facebook-f"></span>
					</a>

					<a href="#">
						<span class="fab fa-twitter"></span>
					</a>

					<a href="#">
						<span class="fab fa-google-plus"></span>
					</a>

					<a href="#">
						<span class="fab fa-instagram"></span>
					</a>

					<a href="#">
						<span class="fab fa-youtube"></span>
					</a>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="../public/giaodien/../public/giaodien/images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li class="left-topbar">
					<span class="left-topbar-item flex-wr-s-c">
						<span>
							Việt Nam, VN
						</span>

						<img class="m-b-1 m-rl-8" src="../public/giaodien/images/icons/icon-night.png" alt="IMG">

						<span>
							HN 58° CT 56°
						</span>
					</span>
				</li>

				<li class="left-topbar">
					<a href="#" class="left-topbar-item">
						About
					</a>

					<a href="#" class="left-topbar-item">
						Contact
					</a>

					<a href="#" class="left-topbar-item">
						Sing up
					</a>

					<a href="#" class="left-topbar-item">
						Log in
					</a>
				</li>

				<li class="right-topbar">
					<a href="#">
						<span class="fab fa-facebook-f"></span>
					</a>

					<a href="#">
						<span class="fab fa-twitter"></span>
					</a>

					<a href="#">
						<span class="fab fa-google-plus"></span>
					</a>

					<a href="#">
						<span class="fab fa-instagram"></span>
					</a>

					<a href="#">
						<span class="fab fa-youtube"></span>
					</a>
				</li>
			</ul>
			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage v1</a></li>
						<li><a href="home-02.html">Homepage v2</a></li>
						<li><a href="home-03.html">Homepage v3</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				@foreach($menu2 as $value)
				<li>
					<a href="category-01.html">{{$value['Ten']}}</a>
				</li>
				@endforeach


				<li>
					<a href="#">Features</a>
					<ul class="sub-menu-m">
						<li><a href="category-01.html">Category Page v1</a></li>
						<li><a href="category-02.html">Category Page v2</a></li>
						<li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
						<li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
						<li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
						<li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
						<li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
			</ul>
		</div>
		
		<!--  -->
		<div class="wrap-logo container">
			<!-- Logo desktop -->		
			<div class="logo">
				<a href="index.html"><img src="../public/giaodien/images/icons/logo-01.png" alt="LOGO"></a>
			</div>	

			<!-- Banner -->
			<div class="banner-header">
				<a href="#"><img src="../public/giaodien/images/banner-01.jpg" alt="IMG"></a>
			</div>
		</div>	
		
		<!--  -->
		<div class="wrap-main-nav">
			<div class="main-nav">
				<!-- Menu desktop -->
				<nav class="menu-desktop">
					<a class="logo-stick" href="index.html">
						<img src="../public/giaodien/images/icons/logo-01.png" alt="LOGO">
					</a>

					<ul class="main-menu">
						<li class="main-menu-active">
							<a href="index.html">Home</a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage v1</a></li>
								<li><a href="home-02.html">Homepage v2</a></li>
								<li><a href="home-03.html">Homepage v3</a></li>
							</ul>
						</li>
						@foreach($menu as $value)
						<li class="mega-menu-item">
							<a href="category-01.html">{{$value['Ten']}}</a>
							<div class="sub-mega-menu">
								<div class="tab-content">
									<div class="tab-pane show active" id="news-0" role="tabpanel">
										<div class="row">
											<?php 
											$loai = DB::table('loaitin')->where('idTheLoai', $value['id'])->get();
											?>
											@foreach($loai as $values)
											<div class="col-3">
												<!-- Item post -->	
												<div>
													<div class="p-t-10">
														<h5 class="p-b-5">
															<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																{{$values->Ten}}
															</a>
														</h5>

														<span class="cl8">
															<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																<?php 
																$tintuc = DB::table('tintuc')->where('idLoaiTin', $values->id)->get();
																$data = count($tintuc);

																?>
															</a>
															{{($data)}} Tin Tức
															<span class="f1-s-3 m-rl-3">
																-
															</span>

															<span class="f1-s-3">
																<?php
																date_default_timezone_set('Asia/Ho_Chi_Minh');
																$date = date('d-m-Y', time());
																?>
																{{$date}}
															</span>
														</span>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</li>
						@endforeach
						<li>
							<a href="#">All</a>
							<ul class="sub-menu">
								@foreach($menu2 as $value)
								<li><a href="category-01.html">{{$value['Ten']}}</a></li>
								@endforeach
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>	
	</div>
</header>