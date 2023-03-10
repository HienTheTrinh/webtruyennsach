@extends('layouts.app')



@section('content')



@include('layouts.nav')

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-8">

      <div class="card">

        <div class="card-header">Thêm truyện</div>

        @if ($errors->any())

        <div class="alert alert-danger">

          <ul>

            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

          </ul>

        </div>

        @endif

        <div class="card-body">

          @if (session('status'))

          <div class="alert alert-success" role="alert">

            {{ session('status') }}

          </div>

          @endif



          <form method="POST" action="{{route('truyen.store')}}" enctype='multipart/form-data'>

            @csrf

            <div class="form-group">

              <label for="exampleInputEmail1">Tên truyện</label>

              <input type="text" class="form-control" value="{{old('tentruyen')}}" onkeyup="ChangeToSlug();" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện">



            </div>

            <div class="form-group">

              <label for="exampleInputEmail1">Tác giả</label>

              <input type="text" class="form-control" value="{{old('tacgia')}}" name="tacgia" aria-describedby="emailHelp" placeholder="Tác giả">



            </div>

            <div class="form-group">

              <label for="exampleInputEmail1">Slug truyện</label>

              <input type="text" class="form-control" value="{{old('slug_truyen')}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">



            </div>

            <div class="form-group">

              <label for="exampleInputEmail1">Tóm tắt truyện</label>

              <textarea name="tomtat" id="ckeditor_truyen" class="form-control" rows="5" style="resize: none"></textarea>



            </div>
            <label for="exampleInputEmail1">Danh mục truyện</label>
            @foreach($danhmuc as $key => $muc)
            <div class="form-check">

              <input class="form-check-input" name="danhmuc[]" type="checkbox" id="danhmuc_{{$muc->id}}" value="{{$muc->id}}">
              <label class="form-check-label" for="danhmuc_{{$muc->id}}">{{$muc->tendanhmuc}}</label>

            </div>
            @endforeach

            <label for="exampleInputEmail1">Thể loại</label>
            @foreach($theloai as $key => $the)
            <div class="form-check">

              <input class="form-check-input" name="theloai[]" type="checkbox" id="theloai_{{$the->id}}" value="{{$the->id}}">
              <label class="form-check-label" for="theloai_{{$the->id}}">{{$the->tentheloai}}</label>

            </div>
            @endforeach
            </select>
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Hình ảnh truyện</label>

          <input type="file" class="form-control-file" name="hinhanh">



        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Kích hoạt</label>

          <select name="kichhoat" class="custom-select">

            <option value="0">Kích hoạt</option>

            <option value="1">Không kích hoạt</option>

          </select>

        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Hoàn thiện</label>

          <select name="hoanthien" class="custom-select">

            <option value="0">Rồi</option>

            <option value="1">Chưa</option>

          </select>

        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Truyện nổi bật/hot</label>

          <select name="truyennoibat" class="custom-select">

            <option value="0">Truyện mới</option>

            <option value="1">Truyện nổi bật</option>

            <option value="2">Truyện xem nhiều</option>

          </select>

        </div>

        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>

        </form>



      </div>

    </div>

  </div>

</div>

</div>

@endsection