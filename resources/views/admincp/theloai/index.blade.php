@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê thể loại</div>

                <div style="margin: auto;" class="card-body">
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

                                <th scope="col">Thể loại</th>

                                <th scope="col">Mô tả</th>

                                <th scope="col">Slug thể loại</th>

                                <!-- <th scope="col">Tóm tắt</th> -->



                                <th scope="col">Kích hoạt</th>
                                <!-- <th scope="col">Ngày tạo</th> -->




                                <th scope="col">Quản lý</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($list_theloai as $key => $theloai)

                            <tr>

                                <th scope="row">{{$key}}</th>

                                <td>{{$theloai->tentheloai}}</td>

                                <td>{{$theloai->mota}}</td>

                                <td>{{$theloai->slug_theloai}}</td>



                                <td>

                                    @if($theloai->kichhoat==0)

                                    <span class="text text-success">Kích hoạt</span>

                                    @else

                                    <span class="text text-danger">Không Kích hoạt</span>

                                    @endif



                                </td>
                                <td>{{$theloai->created_at}} </td>



                                <td>

                                    <a href="{{route('theloai.edit',[$theloai->id])}}" class="btn btn-primary ">Edit</a>



                                    <form action="{{route('theloai.destroy',[$theloai->id])}}" method="POST">

                                        @method('DELETE')

                                        @csrf

                                        <button onclick="return confirm('Bạn muốn xóa thể loại này không?');" class="btn btn-danger">Delete</button>



                                    </form>

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection