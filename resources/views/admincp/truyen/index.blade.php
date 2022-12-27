@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Liệt kê danh sách truyện') }}</div>

        <div class="card-body">
          <div id="thongbao"></div>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <table class="table table-striped table-responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên truyện</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Slug truyện</th>
                <th scope="col">Tóm tắt</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Kích hoạt</th>
                <th scope="col">Ngay tao</th>
                <th scope="col">Hoàn thiện</th>

                <th scope="col">Nổi bật</th>

                <th scope="col">Quản lý</th>
              </tr>
            </thead>

            <tbody>
              @foreach($list_truyen as $key => $truyen)
              <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$truyen->tentruyen}}</td>
                <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="250" width="180"></td>
                <td>{{$truyen->slug_truyen}}</td>
                <td>{{$truyen->tomtat}}</td>
                <td>{{$truyen->danhmuctruyen->tendanhmuc}}</td>
                <td>{{$truyen->theloai->tentheloai}}</td>
                <td>
                  @if($truyen->kichhoat==0)
                  <span class="text text-success">Kich Hoat </span>
                  @else
                  <span class="text text-danger">Không kích hoạt</span>
                  @endif
                </td>
                <td>{{$truyen->created_at}} </td>
                <td>

                  @if($truyen->hoanthien==0)

                  <span class="text text-success">Rồi</span>

                  @else

                  <span class="text text-danger">Chưa</span>

                  @endif



                </td>
                <td width="25%">

                  @if($truyen->truyen_noibat==0)
                  <form>
                    @csrf
                    <select name="truyennoibat" data-truyen_id="{{$truyen->id}}" class="custom-select truyennoibat">



                      <option selected value="0">Truyện mới</option>

                      <option value="1">Truyện nổi bật</option>

                      <option value="2">Truyện xem nhiều</option>



                    </select>
                  </form>

                  @elseif($truyen->truyen_noibat==1)
                  <form>
                    @csrf
                    <select name="truyennoibat" data-truyen_id="{{$truyen->id}}" class="custom-select truyennoibat">



                      <option value="0">Truyện mới</option>

                      <option selected value="1">Truyện nổi bật</option>

                      <option value="2">Truyện xem nhiều</option>



                    </select>
                  </form>
                  @else
                  <form>
                    @csrf
                    <select name="truyennoibat" data-truyen_id="{{$truyen->id}}" class="custom-select truyennoibat">



                      <option value="0">Truyện mới</option>

                      <option value="1">Truyện nổi bật</option>

                      <option selected value="2">Truyện xem nhiều</option>



                    </select>
                  </form>
                  @endif



                </td>


                <td>
                  <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-primary">Edit
                  </a>
                  <form action="{{route('truyen.destroy',[ $truyen->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn chắc chắn muốn xóa?');" class="btn btn-danger">
                      Delete
                    </button>
                </td>
              </tr>
              @endforeach


            </tbody>

          </table>
          <footer class="panel-footer">
            <div class="row">

              <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
              </div>
              <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                  {!!$list_truyen->links()!!}
                </ul>
              </div>
            </div>
          </footer>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection