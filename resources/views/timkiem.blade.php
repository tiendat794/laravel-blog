@section('title') 
Tìm kiếm {{$search}}
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
								Tìm kiếm
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
							{{$search}}
							</li>
						</ul>
					</div>
</div>
 <div class="row">
								<h4 class="box_header">Kết quả tìm kiếm cho '{{$search}}' ({{$countSearch}})</h4>
								<form method="get" action="{{URL::to('/timkiem')}}" class="search_form page_margin_top">
                                {{ csrf_field()}}
                                    <input class="text_input" name="s" type="text" value="{{$search}}" placeholder="Search...">
									<input type="hidden" name="page" value="search">
									<input type="submit" value="Tìm Kiếm...." class="more active margin_top_10">
								</form>
 </div>
 <div class="row">
								<ul class="blog big">
									@foreach($timkiem1 as $key => $timkiem)
									<li class="post">
										<a href="{{ route('chitiettin',['id' =>$timkiem->idTin,'TieuDe' => Str::slug($timkiem->TieuDe)]) }}" title="{{$timkiem->TieuDe}}">
											<img src="{{$timkiem->urlHinh}}" alt='img'>
										</a>
										<div class="post_content">
											<h2 class="with_number">
												<a href="{{ route('chitiettin',['id' =>$timkiem->idTin,'TieuDe' => Str::slug($timkiem->TieuDe)]) }}" title="{{$timkiem->TieuDe}}">{{$timkiem->TieuDe}}</a>
											</h2>
											<ul class="post_details">
												<li class="category"><a href="{{URL::to('/ttl/'.$timkiem->idLT)}}" title="{{$timkiem->Ten}}">{{$timkiem->Ten}}</a></li>
												<li class="date">
												{{$timkiem->Ngay}} 
												</li>
											</ul>
											<p>{{$timkiem->TomTat}}</p>
											<a class="read_more" href="{{ route('chitiettin',['id' =>$timkiem->idTin,'TieuDe' => Str::slug($timkiem->TieuDe)]) }}" title="Read more"><span class="arrow"></span><span>Đọc Thêm</span></a>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
                            {{$timkiem1->links()}}
@endsection 