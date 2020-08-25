<div class="column column_1_3">
							<h4 class="box_header">Đề Xuất</h4>
							<ul class="blog small_margin clearfix">
							@foreach($dexuat as $key => $dexuat)
								<li class="post post1">
									<a href="{{ route('chitiettin',['id' =>$dexuat->idTin,'TieuDe' => Str::slug($dexuat->TieuDe)]) }}" title="{{$dexuat->TieuDe}}">
										<span class="icon gallery"></span>
										<img src="{{asset($dexuat->urlHinh)}}"alt='img'>
									</a>
									<div class="post_content">
										<h5>
											<a href="{{ route('chitiettin',['id' =>$dexuat->idTin,'TieuDe' => Str::slug($dexuat->TieuDe)]) }}" title="{{$dexuat->TieuDe}}">{{$dexuat->TieuDe}}</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="{{URL::to('/ttl/'.$dexuat->idLT)}}" title="{{$dexuat->Ten}}">{{$dexuat->Ten}}</a></li>
											<li class="date">
											{{$dexuat->Ngay}}
											</li>
										</ul>
									</div>
								</li>
								@endforeach
							</ul>
							<h4 class="box_header page_margin_top_section">Bài Viết Mới Nhất</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									@foreach( $ganday as $key =>  $ganday)
									<li class="post post1">
										<a href="{{ route('chitiettin',['id' =>$ganday->idTin,'TieuDe' => Str::slug($ganday->TieuDe)]) }}" title="{{$ganday->TieuDe}}">
											<span class="icon small gallery"></span>
											<img src='{{asset($ganday->urlHinh)}}' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="{{ route('chitiettin',['id' =>$ganday->idTin,'TieuDe' => Str::slug($ganday->TieuDe)]) }}" title="{{$ganday->TieuDe}}">{{$ganday->TieuDe}}</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="{{URL::to('/ttl/'.$ganday->idLT)}}" title="{{$ganday->Ten}}">{{$ganday->Ten}}</a></li>
												<li class="date">
												{{$ganday->Ngay}}
												</li>
											</ul>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
							<h4 class="box_header page_margin_top_section">Thể Loại</h4>
							<ul class="taxonomies columns clearfix page_margin_top">
								@foreach($menu as $key => $theloai)
								<li>
									<a href="{{URL::to('/ttl/'.$theloai->idLT)}}" title="{{$theloai->Ten}}">{{$theloai->Ten}}</a>
								</li>
								@endforeach
							</ul>
							<h4 class="box_header page_margin_top_section">Tags</h4>
							<ul class="taxonomies clearfix page_margin_top">
								@foreach($tags as $key => $tags)
								<li>
									<a href="#" title="Business">{{$tags->TenTag}}</a>
								</li>
								@endforeach
							</ul>
						</div>
        </div>