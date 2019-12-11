@extends('master')
@section('content')
<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">
			<div class="col-md-6 p-rl-1 p-b-2">
				<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(../public/giaodien/images/post-01.jpg);">
					<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

					<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
						<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
							<?php 
							$a = DB::table('loaitin')->where('id', $first['idLoaiTin'])->first();
							
							?>
							{{$a->Ten}} 
						</a>

						<h3 class="how1-child2 m-t-14 m-b-10">
							<a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
								{{$first['TieuDe']}}
							</a>
						</h3>

						<span class="how1-child2">
							<span class="f1-s-4 cl11">
								<?php 
								$b = DB::table('theloai')->where('id', $a->idTheLoai)->first();
								?>
								{{$b->Ten}}
							</span>

							<span class="f1-s-3 cl11 m-rl-3">
								-
							</span>

							<span class="f1-s-3 cl11">
								{{$first['created_at']}}
							</span>
						</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 p-rl-1">
				<div class="row m-rl--1">
					<div class="col-12 p-rl-1 p-b-2">
						<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(../public/giaodien/images/post-02.jpg);">
							<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

							<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
								<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
									<?php 
									$a = DB::table('loaitin')->where('id', $abc->idLoaiTin)->first();

									?>
									{{$a->Ten}} 
								</a>

								<h3 class="how1-child2 m-t-14">
									<a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
										{{$abc->TieuDe}}
									</a>
								</h3>
							</div>
						</div>
					</div>
					@foreach($cba as $value)
					<div class="col-sm-6 p-rl-1 p-b-2">
						<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(../public/giaodien/images/post-03.jpg);">
							<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

							<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
								<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
									<?php 
									$a = DB::table('loaitin')->where('id', $value->idLoaiTin)->first();

									?>
									{{$a->Ten}} 
								</a>

								<h3 class="how1-child2 m-t-14">
									<a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
										{{$value->TieuDe}}
									</a>
								</h3>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Post -->
<section class="bg0 p-t-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<div class="p-b-20">
					<!-- Entertainment -->
					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
							<!-- Brand tab -->
							<h3 class="f1-m-2 cl12 tab01-title">
								{{$t['Ten']}}
							</h3>

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
								</li>

								@foreach($type as $value)
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">{{$value['Ten']}}</a>
								</li>
								@endforeach
								<li class="nav-item-more dropdown dis-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-ellipsis-h"></i>
									</a>

									<ul class="dropdown-menu">

									</ul>
								</li>
							</ul>

							<!--  -->
							<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>


						<!-- Tab panes -->
						<div class="tab-content p-t-35">
							<!-- - -->
							<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh11.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Noo Phước Thịnh, Đông Nhi “cháy” cùng hơn 10.000 fan – dấu thăng cho hành trình 20 năm của Highlands Coffee
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										@foreach($tintuc as $value)	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh4.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														{{$value['TieuDe']}}
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?php 
															$u = DB::table('loaitin')->where('id', $value->idLoaiTin)->first();
														 ?>
														{{$u->Ten}}
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab1-2" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh12.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Tỷ phú Phạm Nhật Vượng còn lại gì sau khi buông 2 mảng “gà đẻ trứng vàng”?
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-08.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Celebrity
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-06.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-07.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Game
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab1-3" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-08.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														American live music lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-07.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Celebrity
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-06.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-05.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Game
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab1-4" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-06.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														American live music lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-09.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Celebrity
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-07.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-08.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Game
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab1-5" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-07.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														American live music lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-08.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Celebrity
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-06.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Music
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-09.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Game
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Business -->
					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
							<!-- Brand tab -->
							<h3 class="f1-m-2 cl13 tab01-title">
								Business
							</h3>

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab2-1" role="tab">All</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab2-2" role="tab">Finance</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab2-3" role="tab">Money & Markets</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab2-4" role="tab">Small Business</a>
								</li>

								<li class="nav-item-more dropdown dis-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-ellipsis-h"></i>
									</a>

									<ul class="dropdown-menu">

									</ul>
								</li>
							</ul>

							<!--  -->
							<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>


						<!-- Tab panes -->
						<div class="tab-content p-t-35">
							<!-- - -->
							<div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-10.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Bitcoin lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Finance
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh8.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														J&T Express miễn phí vận chuyển cho đơn hàng từ 99k
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Small Business
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh10.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Chấn động rò rỉ thông tin ngân hàng, làm sao để bảo vệ bản thân?
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Economy
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/hinh9.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Lương 15.000 USD, vẫn khát nhân sự ngành công nghệ, số hoá
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Money & Markets
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab2-2" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-13.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Bitcoin lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Finance
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-12.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Small Business
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-11.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Economy
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-10.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Money & Markets
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab2-3" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-11.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Bitcoin lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Finance
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-12.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Small Business
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-13.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Economy
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-10.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Money & Markets
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab2-4" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-12.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														Bitcoin lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Finance
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-13.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Small Business
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-10.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Economy
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-11.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Money & Markets
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Travel -->
					<div class="tab01 p-b-20">
						<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
							<!-- Brand tab -->
							<h3 class="f1-m-2 cl14 tab01-title">
								Travel
							</h3>

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3-2" role="tab">Hotels</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3-3" role="tab">Flight</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3-4" role="tab">Beachs</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3-5" role="tab">Culture</a>
								</li>

								<li class="nav-item-more dropdown dis-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="fa fa-ellipsis-h"></i>
									</a>

									<ul class="dropdown-menu">

									</ul>
								</li>
							</ul>

							<!--  -->
							<a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
								View all
								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
							</a>
						</div>


						<!-- Tab panes -->
						<div class="tab-content p-t-35">
							<!-- - -->
							<div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-14.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														You wish lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Hotels
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-15.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Beachs
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-16.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Flight
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-17.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Culture
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab3-2" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-15.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														You wish lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Hotels
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-16.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Beachs
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-17.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Flight
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-18.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Culture
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab3-3" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-16.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														You wish lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Hotels
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-17.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Beachs
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-18.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Flight
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-14.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Culture
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab3-4" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-17.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														You wish lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Hotels
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-18.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Beachs
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-14.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Flight
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-15.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Culture
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- - -->
							<div class="tab-pane fade" id="tab3-5" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="m-b-30">
											<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-18.jpg" alt="IMG">
											</a>

											<div class="p-t-20">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
														You wish lorem ipsum dolor sit amet consectetur 
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														Hotels
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 18
													</span>
												</span>
											</div>
										</div>
									</div>

									<div class="col-sm-6 p-r-25 p-r-15-sr991">
										<!-- Item post -->	
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-17.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Beachs
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 17
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-16.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Flight
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 16
													</span>
												</span>
											</div>
										</div>

										<!-- Item post -->
										<div class="flex-wr-sb-s m-b-30">
											<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
												<img src="../public/giaodien/images/post-15.jpg" alt="IMG">
											</a>

											<div class="size-w-2">
												<h5 class="p-b-5">
													<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
														Donec metus orci, malesuada et lectus vitae
													</a>
												</h5>

												<span class="cl8">
													<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														Culture
													</a>

													<span class="f1-s-3 m-rl-3">
														-
													</span>

													<span class="f1-s-3">
														Feb 12
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-10 col-lg-4">
				<div class="p-l-10 p-rl-0-sr991 p-b-20">
					<!--  -->
					<div>
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Most Popular
							</h3>
						</div>

						<ul class="p-t-35">
							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									1
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit
								</a>
							</li>

							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									2
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Proin velit consectetur non neque
								</a>
							</li>

							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									3
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
								</a>
							</li>

							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									4
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Proin velit justo consectetur non neque elementum
								</a>
							</li>

							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
									5
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									Proin velit consectetur non neque
								</a>
							</li>
						</ul>
					</div>

					<!--  -->
					<div class="flex-c-s p-t-8">
						<a href="#">
							<img class="max-w-full" src="../public/giaodien/images/banner-02.jpg" alt="IMG">
						</a>
					</div>

					<!--  -->
					<div class="p-t-50">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Stay Connected
							</h3>
						</div>

						<ul class="p-t-35">
							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
									<span class="fab fa-facebook-f"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										6879 Fans
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Like
									</a>
								</div>
							</li>

							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
									<span class="fab fa-twitter"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										568 Followers
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Follow
									</a>
								</div>
							</li>

							<li class="flex-wr-sb-c p-b-20">
								<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
									<span class="fab fa-youtube"></span>
								</a>

								<div class="size-w-3 flex-wr-sb-c">
									<span class="f1-s-8 cl3 p-r-20">
										5039 Subscribers
									</span>

									<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
										Subscribe
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection