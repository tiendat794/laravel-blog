

<table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">idLT</th>
                  <th class="wd-15p">Tên Loại Tin</th>
                  <th class="wd-15p">Thuộc Thể Loại</th>
                  <th class="wd-20p">Thứ Tự</th>
                  <th class="wd-15p">Ẩn Hiện</th>
                  <th class="wd-10p">Ngôn Ngữ</th>
                  <th class="wd-25p">Hiện Menu</th>
                  <th class="wd-25p">Chỉnh</th>
                  <th class="wd-25p">Xóa</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($ds as $row)
                <tr>
                  <td>{{$row->idLT}}</td>
                  <td>{{$row->Ten}}</td>
                  <td>{{$row->theloai->TenTL}}</td>
                  <td>{{$row->ThuTu}}</td>
                  <td>{{$row->AnHien ? "Đang Hiện" : "Đang Ẩn"}}</td>
                  <td>{{$row->lang=='vi' ? "Tiếng Việt" : "English"}}</td>
                  <td>{{$row->HienMenu==1? "Hiện Trên Menu" : "Ẩn Trên Menu"}}</td>
                  <td>
                    <a href="{{route('loaitin.edit',$row->idLT)}}" class="btn btn-primary">Sửa</a>
                  </td>
                  <td>
                    <form action="{{ route('loaitin.destroy', $row->idLT) }}" method="post">
                    {{ csrf_field()}}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger" type="submit">Xóa</button>
                    </form>
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>