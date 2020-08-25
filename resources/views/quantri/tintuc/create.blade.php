@extends('quantri.layoutquantri')
@section('pagetitle', 'THÊM  Tin Mới') 
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

<form action="{{ route('tintuc.store') }}"  enctype="multipart/form-data" method="post">
{{ csrf_field()}}
<div class="col-9 mg-l-30">
  <div class="d-flex flex-column">
    <div class="form-group mg-b-20">
      <input name="TieuDe" placeholder="Nhập tiêu đề tin" class="form-control" required>
    </div>
    <div class="form-group mg-b-20">
      <textarea name="TomTat" placeholder="Nhập tóm tắt tin"class="form-control" > </textarea>
    </div>
  </div>
  
  <div class="form-group mg-b-20">
    <input name="urlHinh" class="form-control"  required type="file" >
  </div>
  <div class="d-flex justify-content-around">  
  <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="1" checked>
            <span>Hiện</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="AnHien" type="radio" value="0" >
            <span>Ẩn</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio" value="vi" checked>
            <span>Tiếng Việt</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="lang" type="radio" value="en" >
            <span>English</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="TinNoiBat" type="radio" value="1" checked>
            <span>Nổi Bật</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="TinNoiBat" type="radio" value="0" >
            <span>Bình Thường</span>
        </label>
    </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="d-flex form-group mg-b-20 wd-350">
        <span class="input-group-addon"><i class="icon ion-calendar tx-16 1h-0 op-6"></i></span>
        <input type="text" name="Ngay" class="form-control fc-datepicker" placeholder="Nhập ngày đưa tin">
        <script src="{{ asset('lib') }}/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('lib') }}/select2/js/select2.min.js"></script>
<script>
   $(function(){
       $('.fc-datepicker').datepicker({
           showOtherMonths: true,
           selectOtherMonths: true,
           dateFormat: 'dd/mm/yy'
       });
   })
</script>
        </div>
        <div class="d-flex form-group mg-b-20 wd-350">
          <input class="form-control" type="text" name="tags" placeholder="nhập tag">
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="d-flex form-group  wd-350">
            <select name ="idTL" class="form-control">
                <option value="0"> Chọn Thể loại</option>
                @foreach($kq as $key => $row)
      <option value='{{$row->idTL}}'>{{$row->TenTL}}</option>
      @endforeach
            </select>
        </div>
        <div class="d-flex form-group  wd-350">
            <select name ="idLT" class="form-control">
            <option value="0"> Chọn loại tin</option>
            @foreach($kq2 as $key => $row)
      <option value='{{$row->idLT}}'>{{$row->Ten}}</option>
      @endforeach
            </select>
        </div>
      </div>
    
    <div class="form-group mg-b-20">
    <textarea id ="Content"name="Content" rows="3" placeholder="Nhập nội dung  của tin" class="form-control"></textarea>
    <script src=" {{ asset('lib') }}/highlightjs/highlight.pack.js"></script>
    <script src=" {{ asset('lib') }}/medium-editor/medium-editor.js"></script>
    <script src=" {{ asset('lib') }}/summernote/summernote-bs4.min.js"></script>
    <link href=" {{ asset('lib') }}/highlightjs/github.css" rel="stylesheet">
    <link href=" {{ asset('lib') }}/summernote/summernote-bs4.css" rel="stylesheet">
    <script>
      $(function(){
        // Summernote editor
        $('#Content').summernote({
          height: 250,
        })
      });
    </script>
</div>
  <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>

</form>
@endsection
