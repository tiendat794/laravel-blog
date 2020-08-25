<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -  @yield('pagetitle')</title>
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Quản trị website </title>

    <!-- vendor css -->
    <link href="{{ asset('lib') }}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('lib') }}/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/rickshaw/rickshaw.min.css" rel="stylesheet">
    <script src="{{ asset('lib') }}/jquery/jquery.js"></script>
    <!-- Katniss CSS -->
    <link rel="stylesheet" href="{{ asset('style') }}/katniss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('lib') }}/datatables/jquery.dataTables.js"></script>
    <link href="{{ asset('lib') }}/datatables/jquery.dataTables.css" rel="stylesheet">
    <!-- <script>
          $(function(){
            $('#datatable1').DataTable({
              responsive: true,
              pageLength:20,                     
            });
          });
    </script> -->
  </head>

  <body>


    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
    <?=View::make('quantri.menu')?>
      <!-- input-group -->
    </div><!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    <div class="kt-sideleft">
      <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
          <a href="" class="nav-link with-sub">
            <i class="icon ion-ios-gear-outline"></i>
            <span>Thể Loại</span>
          </a>
          <ul class="nav-sub">
            <li class="nav-item"><a href="{{route('theloai.index')}}" class="nav-link">Danh Sách Thể Loại</a></li>
            <li class="nav-item"><a href="{{route('theloai.create')}}" class="nav-link">Thêm Thể Loại</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub">
            <i class="icon ion-ios-filing-outline"></i>
            <span>Loại Tin</span>
          </a>
          <ul class="nav-sub">
            <li class="nav-item"><a href="{{route('loaitin.index')}}" class="nav-link">Danh Sách Loại Tin</a></li>
            <li class="nav-item"><a href="{{route('loaitin.create')}}" class="nav-link">Thêm Loại Tin</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub">
            <i class="icon ion-ios-analytics-outline"></i>
            <span>Tin</span>
          </a>
          <ul class="nav-sub">
            <li class="nav-item"><a href="{{route('tintuc.index')}}" class="nav-link">Danh Sách Tin</a></li>
            <li class="nav-item"><a href="{{route('tintuc.create')}}" class="nav-link">Thêm Tin</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub">
            <i class="icon ion-ios-analytics-outline"></i>
            <span>Ý Kiến</span>
          </a>
          <ul class="nav-sub">
            <li class="nav-item"><a href="{{route('ykien.index')}}" class="nav-link">Danh sách ý kiến</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub">
            <i class="icon ion-ios-analytics-outline"></i>
            <span>Người Dùng</span>
          </a>
          <ul class="nav-sub">
            <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">Danh sách người dùng</a></li>
          </ul>
        </li><!-- nav-item -->
       
        
      </ul>
    </div><!-- kt-sideleft -->

    <!-- ##### HEAD PANEL ##### -->
    <div class="kt-headpanel">
      <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
      </div><!-- kt-headpanel-left -->

      <div class="kt-headpanel-right">
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down"></span> 
            @if(session()->get('username'))
             Xin Chào {{session()->get('username')}}<i class="fa fa-angle-down mg-l-3"></i></span>
            @endif
            </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="{{ route('logout') }}"><i class="icon ion-power"></i> Thoát</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- kt-headpanel-right -->
    </div><!-- kt-headpanel -->
    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{URL::to('/admin')}}">Báo Mới</a>
        <span class="breadcrumb-item active">Thống kê</span>
      </nav>
    </div><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
    <div class="col-sm-12">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>
      <div class="kt-pagetitle">
        <h5>@yield('pagetitle')</h5>
      </div><!-- kt-pagetitle -->
      <div class="kt-pagebody">
      @yield('main')
      </div>
    </div><!-- kt-mainpanel -->

   
    <script src="{{ asset('lib') }}/popper.js/popper.js"></script>
    <script src="{{ asset('lib') }}/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('lib') }}/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('lib') }}/moment/moment.js"></script>
    <script src="{{ asset('lib') }}/d3/d3.js"></script>
    <script src="{{ asset('lib') }}/rickshaw/rickshaw.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="{{ asset('lib') }}/gmaps/gmaps.js"></script>
    <script src="{{ asset('lib') }}/chart.js/Chart.js"></script>

    <script src="{{ asset('js') }}/katniss.js"></script>
    <script src="{{ asset('js') }}/ResizeSensor.js"></script>
    <script src="{{ asset('js') }}/dashboard.js"></script>
    <script>
      $(function(){
        $('#datatable1').DataTable({
          responsive: true,     
          pageLength:10,       
          language: {
            searchPlaceholder: 'Tìm kiếm...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            paginate: {previous: " < ", next:" > " },
            lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
            zeroRecords: "Không tìm thấy",
            info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
            infoEmpty: "Không có dòng nào",
            infoFiltered: "(Lọc trong _MAX_ tin)",
          }
        });
      });
</script>

  </body>
</html>
