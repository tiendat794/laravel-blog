
<table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">id</th>
                  <th class="wd-15p">Tên </th>
                  <th class="wd-20p">Email</th>
                  <th class="wd-15p">Địa Chỉ</th>
                  <th class="wd-10p">Quyền</th>
                  <th class="wd-25p">Xóa</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($ds as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->diachi}}</td>
                  <td>@if($row->idgroup==1) 
                <a href="{{route('updateIdgroup',[$row->id,0])}}" class="btn btn-primary">admin</a>
                  @else
                  <a href="{{route('updateIdgroup',[$row->id,1])}}" class="btn btn-primary">user</a>
                  @endif
                  </td>
                  <td>
                    <form action="{{ route('user.destroy', $row->id) }}" method="post">
                    {{ csrf_field()}}
                    {!! method_field('delete') !!}
                    <button class="btn btn-danger" type="submit">Xóa</button>
                    </form>
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>