@section('title') 
{{$TenLT}}
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
							<li>
								{{$TenLT}}
							</li>
						</ul>
					</div>
</div>
				<div class="page_layout clearfix">
							<div class="row">
								<ul class="blog big">
									@foreach($listtin as $key => $listtin1)
									<li class="post">
										<a href="{{ route('chitiettin',['id' =>$listtin1->idTin,'TieuDe' => Str::slug($listtin1->TieuDe)]) }}" title="{{$listtin1->TieuDe}}">
											<img src="../{{$listtin1->urlHinh}}" alt='img'>
										</a>
										<div class="post_content">
											<h2 class="with_number">
												<a href="{{ route('chitiettin',['id' =>$listtin1->idTin,'TieuDe' => Str::slug($listtin1->TieuDe)]) }}" title="{{$listtin1->TieuDe}}">{{$listtin1->TieuDe}}</a>
											</h2>
											<ul class="post_details">
												<li class="category"><a href="{{URL::to('/ttl/'.$idLT)}}" title="{{$TenLT}}">{{$TenLT}}</a></li>
												<li class="date">
												{{$listtin1->Ngay}} 
												</li>
											</ul>
											<p>{{$listtin1->TomTat}}</p>
											<a class="read_more" href="{{ route('chitiettin',['id' =>$listtin1->idTin,'TieuDe' => Str::slug($listtin1->TieuDe)]) }}" title="Read more"><span class="arrow"></span><span>Đọc Thêm</span></a>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
					</div>
					{{$listtin->links()}}
@endsection