<body>
<div class="footer_container">
				<div class="footer clearfix">
					<div class="row">
						<div class="column column_1_3">
							<h3 class="box_header">Giới Thiệu Về Báo Mới</h3>
							<p class="padding_top_bottom_25">Baomoi là một website tổng hợp thông tin tiếng Việt hoàn toàn được điều khiển tự động bởi máy tính. Mỗi ngày gần 6500 tin tức từ gần 200 nguồn chính thức của các báo điện tử và trang tin điện tử Việt Nam được Baomoi tự động tổng hợp, phân loại, phát hiện các bài đăng lại, nhóm các bài viết liên quan và hiển thị theo sở thích đọc tin của từng độc giả.</p>
							<div class="row">
								<div class="column column_1_2">
									<h5>Công ty TNHH báo chí</h5>
									<p>
										12 Tô ký<br>
										Quận 12,<br>
										Tp.Hồ Chí Minh
									</p>
								</div>
								<div class="column column_1_2">
									<h5>Số Điện Thoại &amp; Fax</h5>
									<p>
									Số Điện Thoại:<br> 0378-416-794<br>
										Fax: 0916-193-822
									</p>
								</div>
							</div>
							<h4 class="box_header page_margin_top">Hãy liên lạc với chúng tôi</h4>
							<ul class="social_icons dark page_margin_top clearfix">
								<li>
									<a target="_blank" title="" href="http://facebook.com/Tiendat1598" class="social_icon facebook">
										&nbsp;
									</a>
								</li>
								<li>
									<a target="_blank" title="" href="https://twitter.com/TienDat1598" class="social_icon twitter">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="mailto:kindkid12@gmail.com" class="social_icon mail">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon skype">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="	" class="social_icon envato">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon instagram">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon pinterest">
										&nbsp;
									</a>
								</li>
							</ul>
						</div>
						<div class="column column_1_3">
							<h3 class="box_header">Xã Hội</h3>
							<div class="horizontal_carousel_container big page_margin_top">
								<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								@foreach($XaHoi as $key => $XaHoi)	
								<li class="post">
										<a href="{{ route('chitiettin',['id' =>$XaHoi->idTin,'TieuDe' => Str::slug($XaHoi->TieuDe)]) }}" title="{{$XaHoi->TieuDe}}">
											<span class="icon gallery"></span>
											<img src="{{asset($XaHoi->urlHinh)}}" alt='img'>
										</a>
										<h5 class="with_number">
											<a href="{{ route('chitiettin',['id' =>$XaHoi->idTin,'TieuDe' => Str::slug($XaHoi->TieuDe)]) }}" title="{{$XaHoi->TieuDe}}">{{$XaHoi->TieuDe}}</a>
											
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="{{URL::to('/ttl/'.$XaHoi->idLT)}}" title="SPORTS">{{$XaHoi->Ten}}</a></li>
											<li class="date">
											{{$XaHoi->Ngay}}
											</li>
										</ul>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<h3 class="box_header">Xem Nhiều</h3>
							<div class="horizontal_carousel_container big page_margin_top">
								<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								@foreach($XemNhieuNhat as $key => $XemNhieu)
								<li class="post">
										<a href="{{ route('chitiettin',['id' =>$XemNhieu->idTin,'TieuDe' => Str::slug($XemNhieu->TieuDe)]) }}" title="{{$XemNhieu->TieuDe}}">
											<span class="icon gallery"></span>
											<img src="{{asset($XemNhieu->urlHinh)}}" alt='img'>
										</a>
										<h5 class="with_number">
											<a href="{{ route('chitiettin',['id' =>$XemNhieu->idTin,'TieuDe' => Str::slug($XemNhieu->TieuDe)]) }}" title="{{$XemNhieu->TieuDe}}">{{$XemNhieu->TieuDe}}</a>
											
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="{{URL::to('/ttl/'.$XemNhieu->idLT)}}" title="{{$XemNhieu->Ten}}">{{$XemNhieu->Ten}}</a></li>
											<li class="date">
											{{$XemNhieu->Ngay}}
											</li>
										</ul>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="row page_margin_top_section">
						<div class="column column_3_4">
							<ul class="footer_menu">
							@foreach($menu as $key => $tl)
								<li>
									<h4><a href="{{URL::to('/ttl/'.$tl->idLT)}}" title="{{$tl->Ten}}">{{$tl->Ten}}</a></h4>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="column column_1_4">
							<a class="scroll_top" href="#top" title="Scroll to top">Lên Đầu</a>
						</div>
					</div>
					<div class="row copyright_row">
						<div class="column column_2_3">
							© Copyright <a href="http://facebook.com/tiendat1598" title="QuanticaLabs" target="_blank">Trần Tiến Đạt - Ps08824</a> 
						</div>
						<div class="column column_1_3">
						</div>
					</div>
				</div>
			</div>


<div class="background_overlay"></div>
    
    
		
        <script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.ba-bbq.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery-ui-1.11.1.custom.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.transit.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.sliderControl.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.timeago.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.hint.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.qtip.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.blockUI.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/odometer.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="/assets/gmap3.js?body=1" type="text/javascript"></script>
        </body>
</html>