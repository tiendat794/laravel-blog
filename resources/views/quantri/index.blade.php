@extends('quantri.layoutquantri')
@section('pagetitle', 'Thống Kê') 
@section('main')

      <div class="kt-pagebody">

        <div class="row row-sm">
          <div class="col-lg-8">
            <div class="row row-sm">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success">Thể loại</h6>
                    <h2 class="tx-lato tx-inverse">{{$countTheLoai}} Thể Loại</h2>
                    <p class="tx-12"><span class="tx-success">2.5%</span> change from yesterday</p>
                  </div><!-- card-body -->
                  <div id="rs1" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Loại Tin</h6>
                    <h2 class="tx-lato tx-inverse">{{$countLoaiTin}} Loại Tin</h2>
                    <p class="tx-12"><span class="tx-success">5%</span> Thay đổi ngày hôm nay</p>
                  </div><!-- card-body -->
                  <div id="rs2" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
            </div><!-- row -->
            <div class="row row-sm">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success">Tin</h6>
                    <h2 class="tx-lato tx-inverse">{{$countTinTuc}} Tin</h2>
                    <p class="tx-12"><span class="tx-success">3%</span> Thay đổi ngày hôm nay</p>
                  </div><!-- card-body -->
                  <div id="rs1" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body pd-b-0">
                    <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Người Dùng</h6>
                    <h2 class="tx-lato tx-inverse">{{$countUser}} Người Dùng</h2>
                    <p class="tx-12"><span class="tx-success">8%</span> Thay đổi ngày hôm nay</p>
                  </div><!-- card-body -->
                  <div id="rs2" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-6 -->
            </div><!-- row -->

           

          </div><!-- col-8 -->
          <div class="col-lg-4">
            <div class="card pd-40 tx-center">
              <div class="d-flex justify-content-center mg-b-30">
                <img src="../img/icon1.svg" class="wd-100" alt="">
              </div>
              <h6 class="tx-md-20 tx-inverse mg-b-20">Quản lý tài liệu</h6>
             
              <a href="" class="btn btn-default btn-block">Bắt Đầu</a>
            </div><!-- card -->


            <div class="card card-body pd-20 mg-t-20">
              <h6 class="card-body-title tx-12 tx-spacing-1">Kết nối với chúng tôi</h6>
              <p>Chỉ cần chọn bất kỳ tài khoản xã hội có sẵn của bạn để bắt đầu.</p>
              <div class="tx-20">
                <a href="" class="tx-primary mg-r-5"><i class="fa fa-facebook"></i></a>
                <a href="" class="tx-info mg-r-5"><i class="fa fa-twitter"></i></a>
                <a href="" class="tx-danger mg-r-5"><i class="fa fa-google-plus"></i></a>
                <a href="" class="tx-danger mg-r-5"><i class="fa fa-pinterest"></i></a>
                <a href="" class="tx-inverse mg-r-5"><i class="fa fa-github"></i></a>
                <a href="" class="tx-pink mg-r-5"><i class="fa fa-instagram"></i></a>
              </div>
            </div><!-- card -->

          </div><!-- col-4 -->
        </div><!-- row -->
      </div><!-- kt-pagebody -->
      
      <div class="kt-footer">
        <span>Tạo Bởi : Trần Tiến Đạt - PS08824</span>
      </div>
    @endsection