<h4 class="box_header page_margin_top_section">Bài Viết Mới Nhất</h4>
    <div class="row">
        <ul class="blog big">
        @foreach($ganday as $key => $ganday)
            <li class="post">
                <a href="{{ route('chitiettin',['id' =>$ganday->idTin,'TieuDe' => Str::slug($ganday->TieuDe)]) }}" title="{{$ganday->TieuDe}}">
                    <img src='{{$ganday->urlHinh}}' alt='img'>
                </a>
                <div class="post_content">
                    <h2 class="with_number">
                        <a href="{{ route('chitiettin',['id' =>$ganday->idTin,'TieuDe' => Str::slug($ganday->TieuDe)]) }}" title="{{$ganday->TieuDe}}">{{$ganday->TieuDe}}</a>
                    </h2>
                    <ul class="post_details">
                        <li class="category"><a href="{{URL::to('/ttl/'.$ganday->idLT)}}" title="{{$ganday->Ten}}">{{$ganday->Ten}}</a></li>
                        <li class="date">
                        {{$ganday->Ngay}}
                        </li>
                    </ul>
                    <p>{{$ganday->TomTat}}</p>
                    <a class="read_more" href="{{ route('chitiettin',['id' =>$ganday->idTin,'TieuDe' => Str::slug($ganday->TieuDe)]) }}" title="Read more"><span class="arrow"></span><span>Đọc Thêm</span></a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
<div class="row page_margin_top_section">
								<h4 class="box_header">Thiên Nhiên</h4>
								<ul class="blog medium">
                                    @foreach($ThienNhien as $key => $Web)
									<li class="post">
										<a href="{{ route('chitiettin',['id' =>$Web->idTin,'TieuDe' => Str::slug($Web->TieuDe)]) }}" title="{{$Web->TieuDe}}">
											<span class="icon gallery"></span>
											<img src='{{$Web->urlHinh}}' alt='img'>
										</a>
										<h5><a href="{{ route('chitiettin',['id' =>$Web->idTin,'TieuDe' => Str::slug($Web->TieuDe)]) }}" title="{{$Web->TieuDe}}">{{$Web->TieuDe}}</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="{{URL::to('/ttl/'.$Web->idLT)}}" title="{{$Web->Ten}}">{{$Web->Ten}}</a></li>
											<li class="date">
                                            {{$Web->Ngay}}
											</li>
										</ul>
                                    </li>
                                    @endforeach
								</ul>
                            </div>
                            
                            <h4 class="box_header page_margin_top_section">Pháp Luật</h4>
							<div class="row">
								<ul class="blog big">
                                @foreach($PhapLuat1 as $key => $PhapLuat)
									<li class="post">
										<a href="{{ route('chitiettin',['id' =>$PhapLuat->idTin,'TieuDe' => Str::slug($PhapLuat->TieuDe)]) }}" title="{{$PhapLuat->TieuDe}}">
											<img src='{{$PhapLuat->urlHinh}}' alt='img'>
										</a>
										<div class="post_content">
											<h2 class="with_number">
												<a href="{{ route('chitiettin',['id' =>$PhapLuat->idTin,'TieuDe' => Str::slug($PhapLuat->TieuDe)]) }}" title="{{$PhapLuat->TieuDe}}">{{$PhapLuat->TieuDe}}</a>
												
											</h2>
											<ul class="post_details">
												<li class="category"><a href="{{URL::to('/ttl/'.$PhapLuat->idLT)}}" title="{{$PhapLuat->Ten}}">{{$PhapLuat->Ten}}</a></li>
												<li class="date">
                                                {{$PhapLuat->Ngay}}
												</li>
											</ul>
											<p>{{$PhapLuat->TomTat}}</p>
											<a class="read_more" href="{{ route('chitiettin',['id' =>$PhapLuat->idTin,'TieuDe' => Str::slug($PhapLuat->TieuDe)]) }}" title="Read more"><span class="arrow"></span><span>Đọc Thêm</span></a>
										</div>
                                    </li>
                                    @endforeach
								</ul>
                            </div>
                            {{$PhapLuat1->links()}}
                            