  <div class="header_top_bar_container clearfix">
				<div class="header_top_bar">
					<form class="search" action="{{URL::to('/timkiem')}}" method="get">
					{{ csrf_field()}}
						<input type="text" name="s" placeholder="Tìm Kiếm..."  class="search_input hint">
						<input type="submit" class="search_submit" value="">
					</form>
					<!--<ul class="social_icons dark clearfix">
					<ul class="social_icons colors clearfix">-->
					<ul class="social_icons clearfix">
					<li style="margin-top: 9px;">
						@if(!session()->get('username'))
						<a style="color: #cccccc;" href="{{URL::to('/login')}}" title="đăng nhập">
							Đăng Nhập
						</a>
						@else 
						<a style="color: #2fa1b3;" href="#" title="Liên Hệ">Xin Chào {{session()->get('username')}}</a>
						<a style="color: #cccccc;"  href="{{URL::to('/logout')}}" title="thoát">
						
							Thoát
						</a>
						@if(session()->get('checkUser'))
						<a style="color: #cccccc;"  href="{{URL::to('/admin')}}" title="thoát">admin</a>
						@endif
						@endif
					</li>
						<li>
							<a target="_blank" href="http://facebook.com/TienDat1598" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a target="_blank" href="" class="social_icon twitter" title="twitter">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="mailto:kindkid12@gmail.com" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="" class="social_icon envato" title="envato">
								&nbsp;
							</a>
						</li>
						
					</ul>
				</div>
            </div>
            <div class="header_container">
				<div class="header clearfix">
					<div class="logo">
						<h1><a style="font-family:'Courier New'" href="{{URL::to('/')}}" title="Pressroom"><img style="width: 206px;" src="{{asset('upload/images/BM_2020.png')}}"></a></h1>

					</div>
				</div>
            </div>
            <div class="menu_container clearfix" style='background: #2fa1b3; '>
				<nav>
				<ul class="sf-menu">
					<li class="submenu1 ">
						<a  href="{{URL::to('/')}}" title="Home">
							Trang chủ
						</a>
					</li>
					@foreach($menu as $key => $tl)
                    <li class="submenu ">
						<a href="#" title="Home">
						{{$tl->TenTL}}
						</a>
						<ul>
						<?php $theloaicon = DB::table('loaitin')->where('idTL',$tl->idTL)->get();
                                ?>
                                 @foreach ($theloaicon as $theloaicon)
							<li>
								<a href="{{URL::to('/ttl/'.$theloaicon->idLT)}}" title="{{$theloaicon->Ten}}">
								{{$theloaicon->Ten}}
								</a>
							</li>
							@endforeach
                        </ul>
					</li>
					@endforeach
                    <li class="submenu1 ">
						<a  href="{{URL::to('/contact')}}" title="Liên Hệ">
							Liên Hệ
						</a>
					</li>
					
				</ul>
				</nav>
				<div class="mobile_menu_container">
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="mobile-menu-divider"></div>
					<nav>
					<ul class="mobile-menu">
						<li class="submenu selected">
							<a href="/" title="Home">
								Trang Chủ
							</a>
						</li>
							<ul>
							@foreach($menu as $key => $tl)
								<li>
									<a href="{{URL::to('/')}}" title="{{$tl->TenTL}}">
									{{$tl->TenTL}}
									</a>
									<ul>
									<?php $theloaicon = DB::table('loaitin')->where('idTL',$tl->idTL)->get();
                                ?>
                                 @foreach ($theloaicon as $theloaicon)
										<li>
											<a href="{{URL::to('/ttl/'.$theloaicon->idLT)}}" title="{{$theloaicon->Ten}}">
											{{$theloaicon->Ten}}
											</a>
										</li>
										@endforeach
									</ul>
								</li>
								@endforeach
                            </ul>
							<li class="submenu1 ">
								<a  href="{{URL::to('/contact')}}" title="Liên Hệ">
									Liên Hệ
								</a>
							</li>
					</ul>
					</nav>
				</div>
			</div>