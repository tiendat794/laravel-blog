<div class="row page_margin_top">
								<div class="tabs no_scroll margin_top_10 clearfix">
									<ul class="tabs_navigation clearfix">
										<li>
											<a href="#most-recent" title="Most Recent">
												Gần Đây Nhất
											</a>
											<span></span>
										</li>
										<li>
											<a href="#most-read" title="Most Read">
												Đọc Nhiều Nhất
											</a>
											<span></span>
										</li>
										<li>
											<a href="#most-viewed" title="Most Viewed">
												Xem Nhiều Nhất
											</a>
											<span></span>
										</li> 
									</ul>
									<div id="most-recent">
										<div class="horizontal_carousel_container page_margin_top">
											<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                                @foreach($ganday as $key => $value)
                                            <li class="post">
													<a href="{{ route('chitiettin',['id' =>$value->idTin,'TieuDe' => Str::slug($value->TieuDe)]) }}" title="High Altitudes May Aid Weight Control">
														<img src='{{$value->urlHinh}}' alt='img'>
													</a>
													<h5><a href="{{ route('chitiettin',['id' =>$value->idTin,'TieuDe' => Str::slug($value->TieuDe)]) }}" title="High Altitudes May Aid Weight Control">{{$value->TieuDe}}</a></h5>
													<ul class="post_details simple">
														<li class="category"><a href="{{URL::to('/ttl/'.$value->idLT)}}" title="HEALTH">{{$value->Ten}}</a></li>
														<li class="date">
                                                        {{$value->Ngay}}
														</li>
													</ul>
                                                </li>
                                                @endforeach
											</ul>
										</div>
									</div>
									<div id="most-read">
										<div class="horizontal_carousel_container page_margin_top">
											<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                                @foreach($DocNhieuNhat as $key => $DocNhieu)
                                                <li class="post">
													<a href="{{ route('chitiettin',['id' =>$DocNhieu->idTin,'TieuDe' => Str::slug($DocNhieu->TieuDe)]) }}" title="{{$DocNhieu->urlHinh}}">
														<img src='{{$DocNhieu->urlHinh}}' alt='img'>
													</a>
													<h5><a href="{{ route('chitiettin',['id' =>$DocNhieu->idTin,'TieuDe' => Str::slug($DocNhieu->TieuDe)]) }}" title="{{$DocNhieu->TieuDe}}">{{$DocNhieu->TieuDe}}</a></h5>
													<ul class="post_details simple">
														<li class="category"><a href="{{URL::to('/ttl/'.$DocNhieu->idLT)}}" title="{{$DocNhieu->Ten}}">{{$DocNhieu->Ten}}</a></li>
														<li class="date">
                                                        {{$DocNhieu->Ngay}}
														</li>
													</ul>
                                                </li>
                                                @endforeach
											</ul>
										</div>
									</div>
									<div id="most-viewed">
										<div class="horizontal_carousel_container page_margin_top">
											<ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                            @foreach($XemNhieuNhat as $key => $XemNhieu)
                                                <li class="post">
													<a href="{{ route('chitiettin',['id' =>$XemNhieu->idTin,'TieuDe' => Str::slug($XemNhieu->TieuDe)]) }}" title="Escape From Planet Earth: The Movie">
														<img src='{{$XemNhieu->urlHinh}}' alt='img'>
													</a>
													<h5><a href="{{ route('chitiettin',['id' =>$XemNhieu->idTin,'TieuDe' => Str::slug($XemNhieu->TieuDe)]) }}" title="{{$XemNhieu->TieuDe}}">{{$XemNhieu->TieuDe}}</a></h5>
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
							</div>