
<table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">id Ý kiến</th>
                  <th class="wd-15p">TieuDe</th>
                  <th class="wd-20p">Ngày</th>
                  <th class="wd-15p">Nội Dung</th>
                  <th class="wd-10p">Email</th>
                  <th class="wd-25p">Họ Tên</th>
                  <th class="wd-25p">Ẩn Hiện</th>
                  <th class="wd-25p">Xóa</th>
                </tr>
              </thead>
              
              <tbody>
                  @foreach($ds as $row)
                <tr>
                  <td>{{$row->idYKien}}</td>
                  <td>@if(isset($row->TinWithYkien->TieuDe) && $row->TinWithYkien->TieuDe != null) {{substr($row->TinWithYkien->TieuDe,0,25)}} @endif</td>
                  <td>{{$row->Ngay}}</td>
                  <td><?php $Catchuoi = substr($row->NoiDung, 0, 20); echo $Catchuoi."..."  ?></td>
                  <td>{{$row->Email}}</td>
                  <td>{{$row->HoTen}}</td>
                  <td>{{$row->AnHien ? "Đang Hiện" : "Đang Ẩn"}}</td>
                  <td>
                    <form action="{{ route('ykien.destroy', $row->idYKien) }}" method="post">
                    {{ csrf_field()}}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger" type="submit">Xóa</button>
                    </form>
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>