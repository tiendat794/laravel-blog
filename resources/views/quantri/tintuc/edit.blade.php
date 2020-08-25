@extends('quantri.layoutquantri')
@section('pagetitle', 'SỬA TIN') 
@section('main')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

<form action="{{ route('tintuc.update', $row->idTin) }}"  method="post" enctype="multipart/form-data">
{{ csrf_field()}}
{!! method_field('patch') !!}
<div class="col-9 mg-l-30">
  <div class="d-flex flex-column">
    <div class="form-group mg-b-20">
      <input name="TieuDe" placeholder="Nhập tiêu đề tin" value="{{$row->TieuDe}}" class="form-control" required>
    </div>
    <div class="form-group mg-b-20">
      <textarea name="TomTat" placeholder="Nhập tóm tắt tin" value="" class="form-control" > {{$row->TomTat}}</textarea>
    </div>
  </div>
  
  <div class="form-group mg-b-20">
    <input name="urlHinh" class="form-control" type="file" placeholder="Nhập địa chỉ hình" required  >
  </div>
  <div class="d-flex justify-content-around">  
  <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="AnHien"  @if ($row->AnHien === 1)  checked @endif type="radio" type="radio" value="1" checked>
            <span>Hiện</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="AnHien" @if ($row->AnHien === 1)  checked @endif type="radio" type="radio" value="0" >
            <span>Ẩn</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio"  @if ($row->lang === "vi")  checked @endif type="radio"  value="vi" checked>
            <span>Tiếng Việt</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="lang"  @if ($row->lang === "en")  checked @endif type="radio" type="radio" value="en" >
            <span>English</span>
        </label>
    </div>
    
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="TinNoiBat" @if ($row->TinNoiBat === 1)  checked @endif  type="radio" value="1" checked>
            <span>Nổi Bật</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="TinNoiBat" @if ($row->TinNoiBat === 0)  checked @endif type="radio" value="0" >
            <span>Bình Thường</span>
        </label>
    </div>
    </div>
      <div class="d-flex justify-content-around">
        <div class="d-flex form-group mg-b-20 wd-350">
        <span class="input-group-addon"><i class="icon ion-calendar tx-16 1h-0 op-6"></i></span>
        <input type="text" name="Ngay" value="{{$row->Ngay}}" class="form-control fc-datepicker" placeholder="Nhập ngày đưa tin">
        <script src="{{ asset('lib') }}/jquery-ui/jquery-ui.js"></script>
        <script src="{{ asset('lib') }}/select2/js/select2.min.js"></script>
        <script>
          $(function(){
              $('.fc-datepicker').datepicker({
                  showOtherMonths: true,
                  selectOtherMonths: true,
                  dateFormat: 'dd/mm/yy'
              });
          });
        </script>
        </div>
        
        <div class="d-flex form-group mg-b-20 wd-350">
          <input class="form-control" value="{{$row->tags}}" type="text" name="tags" placeholder="nhập tag">
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="d-flex form-group  wd-350">
            <select name ="idTL" class="form-control">
                
                @foreach($kq as $key => $row1)
      <option value='{{$row1->idTL}}'>{{$row1->TenTL}}</option>
      @endforeach
            </select>
        </div>
        <div class="d-flex form-group  wd-350">
            <select name ="idLT" class="form-control">
            @foreach($kq2 as $key => $row1)
      <option value='{{$row1->idLT}}'>{{$row1->Ten}}</option>
      @endforeach
            </select>
        </div>
      </div>
    <div class="form-group mg-b-20">
    <textarea id ="editor" name="Content" rows="3"placeholder="Nhập nội dung  của tin" class="form-control">{{$row->Content}}</textarea>
    
</div>

  <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>

</form>
<script src=" {{ asset('lib') }}/highlightjs/highlight.pack.js"></script>
    <script src=" {{ asset('lib') }}/medium-editor/medium-editor.js"></script>
    <script src=" {{ asset('lib') }}/summernote/summernote-bs4.min.js"></script>
    <link href=" {{ asset('lib') }}/highlightjs/github.css" rel="stylesheet">
    <link href=" {{ asset('lib') }}/summernote/summernote-bs4.css" rel="stylesheet">
    <script>
      $(function(){
        // Summernote editor
        $('#editor').summernote({
          height: 250,
        })
      });
    </script>
@endsection

