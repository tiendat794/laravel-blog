@section('title') 
{{$tin->TieuDe}}
@endsection
@extends("home")
@section("content")
<div class="page_header clearfix ">
					<div class="page_header_left">
						<ul class="bread_crumb" style="font-weight:700">
							<li>
								<a title="Home" href="{{URL::to('/')}}">
									Home
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li >
							{{$tin->Ten}}
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li >
							{{$tin->TieuDe}}
							</li>
						</ul>
					</div>
</div>
							<div class="row">
                               
								<div class="post single">
									<h1 class="post_title">{{$tin->TieuDe}}</h1>
									<ul class="post_details clearfix">
										<li class="detail category"> <a href="{{URL::to('/ttl/'.$tin->idLT)}}" title="{{$tin->Ten}}">{{$tin->Ten}}</a></li>
										<li class="detail date">{{$tin->Ngay}}</li>
										<li class="detail author">Viết bởi <a href="#" title="Tiến Đạt">Tiến Đạt</a></li>
										<li class="detail views">{{$tin->SoLanXem}} lượt xem</li>
									</ul>
									<a href="{{ route('chitiettin',['id' =>$tin->idTin,'TieuDe' => Str::slug($tin->TieuDe)]) }}" class="post_image page_margin_top prettyPhoto" title="{{$tin->TieuDe}}">
										<img src='../../{{$tin->urlHinh}}' alt='img'>
									</a>
									<div class="post_content page_margin_top_section clearfix">
										<div class="content_box">
											<h2 class="excerpt">{{$tin->TomTat}}</h2>
											<div class="text noidungtin">
												{!!$tin->Content!!}
												<a title="{{count($comment1)}} bình luận" href="post.html" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>{{count($comment1)}} bình luận</span></a>
											</div>
										</div>
										<div class="author_box animated_element">
											<div class="author">
												<a title="Anna Shubina" href="author.html" class="thumb">
													<img alt="img" src="../../images/samples/Team_100x100/image_02.jpg">
												</a>
												<div class="details">
													<h5><a title="Anna Shubina" href="author.html">Tiến Đạt</a></h5>
													<h6>Tác Giả</h6>
													<a href="#" class="more highlight margin_top_15">Trang Cá Nhân</a>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <!-- comment -->


							<div class="row page_margin_top">
								<div class="share_box clearfix">
								<div class="fb-like" data-href="https://facebook.com/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
								<div id="fb-root"></div>
							<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=609859929441764&autoLogAppEvents=1"></script>
								</div>
								
							</div>
							<div class="row page_margin_top">
								<ul class="taxonomies tags left clearfix">
                                    @foreach($tags as $key => $value)
									<li>
										<a href="#" title="{{$value}}">{{$value}}</a>
                                    </li>
                                    @endforeach
								</ul>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">Bài Viết Liên Quan</h4>
								<div class="horizontal_carousel_container page_margin_top">
									<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                                        @foreach( $TinLienQuan as $key =>  $TinLienQuan)
                                    <li class="post">
											<a href="{{ route('chitiettin',['id' =>$TinLienQuan->idTin,'TieuDe' => Str::slug($TinLienQuan->TieuDe)]) }}" title="{{$TinLienQuan->TieuDe}}">
												<img src='../../{{$TinLienQuan->urlHinh}}' alt='img'>
											</a>
											<h5><a href="{{ route('chitiettin',['id' =>$TinLienQuan->idTin,'TieuDe' => Str::slug($TinLienQuan->TieuDe)]) }}" title="{{$TinLienQuan->TieuDe}}">{{$TinLienQuan->TieuDe}}</a></h5>
											<ul class="post_details simple">
												<li class="category"><a href="{{URL::to('/ttl/'.$TinLienQuan->idLT)}}" title="{{$TinLienQuan->Ten}}">{{$TinLienQuan->Ten}}</a></li>
												<li class="date">
                                                {{$TinLienQuan->Ngay}}
												</li>
											</ul>
                                        </li>
                                        @endforeach
									</ul>
								</div>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">Bình Luận</h4>
								<form class="comment_form margin_top_15" id="comment_form" method="post" action="{{ route('guiykien',['id' =>$tin->idTin,'TieuDe' => Str::slug($tin->TieuDe)]) }}">
                                {{ csrf_field() }}
									<fieldset class="column column_1_3">
										<input class="text_input" name="name" type="text" value="Tên *" placeholder="Your Name *">
									</fieldset>
									<fieldset class="column column_1_3">
										<input class="text_input" name="email" type="text" value="Email *" placeholder="Your Email *">
									</fieldset>
									<fieldset>
										<textarea name="message" placeholder="Comment *">Nội Dung *</textarea>
									</fieldset>
									<fieldset>
										<input type="submit" value="Gửi Bình Luận" class="more active">
										<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
									</fieldset>
								</form>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">Bình Luận</h4>
								<ul id="comments_list"> 
                                    @foreach($comment as $key => $bl)
									<li class="comment clearfix" id="comment-1">
										<div class="comment_author_avatar">
											&nbsp;
										</div>
										<div class="comment_details">
											<div class="posted_by clearfix">
												<h5><a class="author" href="#" title="{{$bl->HoTen}}">{{$bl->HoTen}}</a></h5>
												<abbr title="{{$bl->Ngay}}" class="timeago">{{$bl->Ngay}}</abbr>
											</div>
											<p>
                                            {{$bl->NoiDung}}
											</p>
											<a class="read_more" href="#comment_form" title="Reply">
											</a>
										</div>
                                    </li>
                                    @endforeach
							</div>
				{{$comment->links()}}
@endsection