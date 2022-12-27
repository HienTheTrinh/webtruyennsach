@extends('../layout')
@section('content')
@section('slide')
@include('pages.slide')
@endsection
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  @php
  $i = 0;
  @endphp
  @foreach($danhmuc as $key => $tab_danhmuc)
  @php
  $i++;
  @endphp
  <form>
      @csrf
  <li class="nav-item {{$i==1 ? 'active' : ''}}">
    <a data-danhmuc_id="{{$tab_danhmuc->id}}" class="nav-link tabs_danhmuc" data-toggle="tab" href="#{{$tab_danhmuc->slug_danhmuc}}">{{$tab_danhmuc->tendanhmuc}}</a>
  </li>
  </form>

  @endforeach

</ul>

<div id="tab_danhmuctruyen"></div>
<style type="text/css">
  a.kytu {
    font-weight: bold;
    padding: 5px 13px;
    /* margin: 7px 0; */
    color: black;
    font-size: 15px;
    background: burlywood;
    cursor: pointer;
}
</style>
<h3 class="title_truyen">MỚI CẬP NHẬT</h3>

            <div class="album py-2 bg-light">

            <div class="container">



             <div class="row">
            @foreach($truyen as $key => $value)
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                <div class="card-body">
                	<h5>{{$value->tentruyen}}</h5>
                  <p class="card-text">
                       @php
                              $tomtat = substr($value->tomtat, 0,50);
                            @endphp
                            {{$tomtat.'....'}}
                    </p>
                     @foreach($value->thuocnhieudanhmuctruyen as $thuocdanh)
                             
                        <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span></a>
                        @endforeach

                        @foreach($value->thuocnhieutheloaitruyen as $thuocloai)
                             
                        <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-info">{{$thuocloai->tentheloai}}</span></a>
                        @endforeach
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                      <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>44848</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
           
       
       @endforeach
           
          </div>
           <a class="btn btn-success" href="">Xem tất cả</a>
        </div>
    
</div>

          
@endsection      