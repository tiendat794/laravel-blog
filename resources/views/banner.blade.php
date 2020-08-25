<div class="caroufredsel_wrapper caroufredsel_wrapper_small_slider">
								<ul class="small_slider id-small_slider">
                                    @foreach($TinNoiBat as $key => $NoiBat)
									<li class="slide">
										<a href="{{ route('chitiettin',['id' =>$NoiBat->idTin,'TieuDe' => Str::slug($NoiBat->TieuDe)]) }}" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='{{$NoiBat->urlHinh}}' alt='img'>
										</a>
										<div class="slider_content_box">
											<ul class="post_details simple">
												<li class="category"><a href="{{URL::to('/ttl/'.$NoiBat->idLT)}}" title="{{$NoiBat->Ten}}">{{$NoiBat->Ten}}</a></li>
												<li class="date">
                                                {{$NoiBat->Ngay}}
												</li>
											</ul>
											<h2><a href="{{ route('chitiettin',['id' =>$NoiBat->idTin,'TieuDe' => Str::slug($NoiBat->TieuDe)]) }}" title="{$NoiBat->TieuDe}}">{{$NoiBat->TieuDe}}</a></h2>
											<p class="clearfix">{{$NoiBat->TomTat}}</p>
										</div>
                                    </li>
                                    @endforeach
								</ul>
							</div>