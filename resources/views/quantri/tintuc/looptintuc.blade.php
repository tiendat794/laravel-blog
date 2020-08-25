
<table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">idTin</th>
                  <th class="wd-15p">Tiêu Đề</th>
                  <th class="wd-25p">Tóm Tắt</th>
                  <th class="wd-15p">Ẩn Hiện</th>
                  <th class="wd-10p">Ngôn Ngữ</th>
                  <th class="wd-25p">Tags</th>
                  <th class="wd-25p">lượt xem</th>
                  <th class="wd-25p">Tin Nổi Bật</th>
                  <th class="wd-25p">Chỉnh</th>
                  <th class="wd-25p">Xóa</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($ds as $row)
                <tr>
                  <td>{{$row->idTin}}</td>
                  <td><?php $Catchuoi = substr($row->TieuDe, 0, 20); echo $Catchuoi."..."  ?></td>
                  <td style="width:150px ;"><?php $Catchuoi = substr($row->TomTat, 0, 20); echo $Catchuoi."..."  ?></td>
                  <td>{{$row->AnHien ? "Đang Hiện" : "Đang Ẩn"}}</td>
                  <td>{{$row->lang=='vi' ? "Tiếng Việt" : "English"}}</td>
                  <td>{{$row->tags}}</td>
                  <td>{{$row->SoLanXem}}</td>
                  <td>{{$row->TinNoiBat==0 ? "Không Nổi Bật" : "Nổi Bật"}}</td>
                  <td>
                    <a href="{{route('tintuc.edit',$row->idTin)}}" class="btn btn-primary">Sửa</a>
                  </td>
                  <td>
                    <form action="{{ route('tintuc.destroy', $row->idTin) }}" method="post">
                    {{ csrf_field()}}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger" type="submit">Xóa</button>
                    </form>
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>