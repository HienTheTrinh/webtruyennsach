@extends('layouts.app')



@section('content')



@include('layouts.nav')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Cập nhật thể loại </div>


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



                    <form method="POST" action="{{route('theloai.update',[$theloai->id])}}" enctype='multipart/form-data'>
                        @method('PUT')

                        @csrf

                        <div class="form-group">

                            <label for="exampleInputEmail1">Thể loại</label>

                            <input type="text" class="form-control" value="{{$theloai->tentheloai}}" onkeyup="ChangeToSlug();" name="tentheloai" id="slug" aria-describedby="emailHelp" placeholder="Tên thể loại">



                        </div>
                        <!-- <div class="form-group">

                            <label for="exampleInputEmail1">Lượt xem</label>

                            <input type="text" class="form-control" value="{{$theloai->views}}" name="views" aria-describedby="emailHelp" placeholder="Lượt xem">



                        </div> -->





                        <div class="form-group">

                            <label for="exampleInputEmail1">Slug thể loại</label>

                            <input type="text" class="form-control" value="{{$theloai->slug_theloai}}" name="slug_theloai" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug theloai...">



                        </div>

                        <!-- <div class="form-group">

                            <label for="exampleInputEmail1">Tóm tắt sách</label>

                            <textarea name="tomtat" class="form-control" rows="5" style="resize: none">{{$theloai->tomtat}}</textarea>



                        </div> -->
                        <!-- <div class="form-group">

                            <label for="exampleInputEmail1">Nội dung sách</label>

                            <textarea name="noidung" id="ckeditor_theloai" class="form-control" rows="5" style="resize: none">{{$theloai->noidung}}</textarea>



                        </div> -->



                        <div class="form-group">

                            <label for="exampleInputEmail1">Mô tả</label>

                            <textarea name="mota" id="ckeditor_theloai" class="form-control" rows="5" style="resize: none">{{$theloai->mota}}</textarea>


                        </div>

                        <div class="form-group">

                            <label for="exampleInputEmail1">Kích hoạt</label>

                            <select name="kichhoat" class="custom-select">

                                @if($theloai->kichhoat==0)

                                <option selected value="0">Kích hoạt</option>

                                <option value="1">Không kích hoạt</option>

                                @else

                                <option value="0">Kích hoạt</option>

                                <option selected value="1">Không kích hoạt</option>

                                @endif

                            </select>

                        </div>



                        <button type="submit" name="capnhattheloai" class="btn btn-primary">Cập nhật thể loại</button>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection