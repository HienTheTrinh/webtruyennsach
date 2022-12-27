@extends('../layout')
@section('content')
<!-- @section('slide')
@include('pages.slide')
@endsection -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
     <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
    @foreach($truyen->thuocnhieudanhmuctruyen as $key => $breadcrumb_danh)
     <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$breadcrumb_danh->slug_danhmuc)}}">{{$breadcrumb_danh->tendanhmuc}}</a></li>
    @endforeach

    <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
  </ol>
</nav>
<div class="row">
	<div class="col-md-9">
		<div class="row">
			 
		   <div class="col-md-5">
			 <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
		</div>
	<div class="col-md-7">	
	<style type="text/css">

          .infotruyen{

            list-style: none;
            padding: 0;

          }
          ul.mucluctruyen li a {
              color: #000;
              font-size: 16px;
          }
          .tomtat-truyen {
              padding: 0;
              margin: 20px 0;
              line-height: 31px;
              font-size: 17px;
              box-shadow: 2px 2px 3px #ddd;
          }
        </style>
		<ul class="infotruyen" >

<!-- <-------truyenyeuthich------>
    
     
      <h1 > {{$truyen->tentruyen}}</h1>
      <li class="author row">
<p class="name col-xs-4">
<i class="fa fa-user"></i> Tác giả                  :
</p>
<p class="col-xs-8"></p>{{$truyen->tacgia}}
</li >
		
  <li class="author row">    
<p class="name col-xs-4">
  @if ($truyen->hoanthien==0)
<i class="fa fa-rss"></i>Đã hoàn thành 
@else
<i class="fa fa-rss"></i>Đang cập nhật 

</p>

</li>
@endif

		
<li class="kind row">
<p class="name col-xs-4">
<i class="fa fa-list-ul">
</i> Danh mục truyện :
</p>
 @foreach($truyen->thuocnhieudanhmuctruyen as $thuocdanh)
<p class="col-xs-8"> 
</p> <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span></a>
                        @endforeach
</li>   

<li class="kind row">
<p class="name col-xs-4">
<i class="fa fa-tags">
</i> Thể loại :
</p>
<p class="col-xs-8"></p> @foreach($truyen->thuocnhieutheloaitruyen as $thuocloai)
                             
                        <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-info">{{$thuocloai->tentheloai}}</span></a>
                    
                  
 @endforeach
</li>
    
			
			<li class="row">
<p class="name col-xs-4">
<i class="fa fa-eye">
</i> Lượt xem      :
</p>
 
<p class="col-xs-8">{{$truyen->views}}</p>

</li>
<div class="row rating">
<div class="col-xs-6">
<div class="star" data-id="20830" data-rating="4.3" data-allowrating="true" style="cursor: pointer;"><img src="http://st.nettruyenvip.com/Data/Sites/1/skins/comic/images/star-on.png" alt="1" title="bad">&nbsp;<img src="http://st.nettruyenvip.com/Data/Sites/1/skins/comic/images/star-on.png" alt="2" title="poor">&nbsp;<img src="http://st.nettruyenvip.com/Data/Sites/1/skins/comic/images/star-on.png" alt="3" title="regular">&nbsp;<img src="http://st.nettruyenvip.com/Data/Sites/1/skins/comic/images/star-on.png" alt="4" title="good">&nbsp;<img src="http://st.nettruyenvip.com/Data/Sites/1/skins/comic/images/star-half.png" alt="5" title="gorgeous"><input type="hidden" name="score" value="4.3"></div>
</div>
<div class="col-xs-6 lazy-module" data-type="facebook" style="overflow:hidden">
<div data-share="true" data-show-faces="true" data-action="like" data-layout="button_count" class="fb-like fb_iframe_widget fb_iframe_widget_fluid" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=745819368841087&amp;container_width=0&amp;href=http%3A%2F%2Fwww.nettruyenvip.com%2Ftruyen-tranh%2Fkich-truong-cua-takemichi-20830&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" data-href="http://www.nettruyenvip.com/truyen-tranh/kich-truong-cua-takemichi-20830"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="f3cc33970dbec14" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=745819368841087&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2397428df43e6c%26domain%3Dwww.nettruyenvip.com%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fwww.nettruyenvip.com%252Ff27398fa832dff8%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.nettruyenvip.com%2Ftruyen-tranh%2Fkich-truong-cua-takemichi-20830&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div>
</div>
</div>
			<li><a class="xemmucluc" style="cursor: pointer;">Xem mục lục</a></li>

      @if($chapter_dau)
			<li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-success">Đọc từ đầu</a>
       <button class="btn btn-danger btn-thich_truyen"><i class="fa fa-heart" aria-hidden="true"></i> Thích truyện</button></li>
      <li><a href="{{url('xem-chapter/'.$chapter_moinhat->slug_chapter)}}" class="btn btn-success mt-2     ">Đọc tập mới nhất</a></li>
      @else
      <li><a class="btn btn-danger">Hiện tại chưa có chương để đọc </li>
        @endif
</ul>


	</div>
	  
</div>
<!-- <div class="col-md-12">
  <p>{!! $truyen->tomtat !!}</p>
	</div> -->
    <div class="col-md-12 tomtat-truyen">


  <i class="fa fa-file-text-o">
</i> Nội dung
      <p>{!! $truyen->tomtat !!}</p>

    </div>

	<hr>
<div class="fb-comments" data-href="http://localhost:8028/laravel_sachtruyen/xem-truyen/attack-on-titan" data-width="100%" data-numposts="15"></div>


<div class="list-chapter" id="nt_listchapter">
<h2 class="list-title clearfix">
<i class="fa fa-list">
</i> Danh sách chương
  <style type="text/css">
      ul.mucluctruyen {
          -moz-column-count: 3;
          -moz-column-gap: 20px;
          -webkit-column-count: 3;
          -webkit-column-gap: 20px;
          column-count: 3;
          column-gap: 20px;
      }
    </style>
	<ul class="mucluctruyen">
    @php
    $mucluc=count($chapter);
    @endphp
  @if($mucluc>0)
    @foreach($chapter as $key => $chap)
		<li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
		@endforeach
@else
<li>Hiện tại đang cập nhật</li>
@endif
	</ul>
  <a class="hidden view-more" href="#">
<i class="fa fa-plus">
</i>Xem thêm </a>
</h2>

</div>





	<h4 class="title_truyen">Truyện cùng danh mục</h4>

           
          
               <div class="row">
                 @foreach($cungdanhmuc as $key => $value)
                 <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                <div class="card-body">
                  <h5>{{$value->tentruyen}}</h5>
                   <p class="card-text">
                       @php
                              $tomtat = substr($value->tomtat, 0,150);
                            @endphp
                            {{$tomtat.'....'}}
                    </p>
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
<footer class="footer">
<div class="container">
<div class="row">
<div class="col-sm-4 copyright" itemscope="" itemtype="http://schema.org/Organization">

</div>
<div class="col-sm-8">
<div class="Module Module-55"><div class="ModuleContent"><div class="link-footer">

</div></div></div>
</div>
</div>
</div>
</footer>

            </div>

</div>

 

	<div class="col-md-3">
    <style type="text/css">
      .col-md-7.sidebar a {
          /* padding: 0; */
          font-size: 15px;
          text-decoration: none;
          color: #000;
      }
      .col-md-7.sidebar {
          padding: 0;
      }
      .card-header{
        background: darkgray !important;
      }
      .footer {
    color: #aaa;
    background-color: #222;
    font-size: 13px;
    padding-top: 15px;
    padding-bottom: 15px;

       
       }
       .container, .container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}


    </style>

    <h3 class="card-header">Truyện nổi bật</h3>
    @foreach($truyennoibat as $key => $noibat)
    <div class="row mt-2">

      

        <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$noibat->hinhanh)}}" alt="{{$noibat->tentruyen}}"></div>
        
        <div class="col-md-7 sidebar" >
          <a href="{{url('xem-truyen/'.$noibat->slug_truyen)}}">
          <p>{{$noibat->tentruyen}}</p>

          <p><i class="fas fa-eye"></i>{{$noibat->views}}</p>
            </a>
        </div>
      

        



    </div>

    @endforeach

    <h3 class="card-header">Truyện xem nhiều</h3>
    @foreach($truyenxemnhieu as $key => $xemnhieu)
    <div class="row mt-2">

      

        <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$xemnhieu->hinhanh)}}" alt="{{$xemnhieu->tentruyen}}"></div>
        
        <div class="col-md-7 sidebar" >
          <a href="{{url('xem-truyen/'.$xemnhieu->slug_truyen)}}">
          <p>{{$xemnhieu->tentruyen}}</p>

          <p><i class="fas fa-eye"></i>{{$xemnhieu->views}}</p>
            </a>
        </div>
      

        



    </div>

    @endforeach
               <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
              <input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
              <input type="hidden" value="{{$truyen->id}}" class="wishlist_id">

                <h3  class="card-header" class="title_truyen">Truyện yêu thích</h3>
           <div id="yeuthich"></div>
              </div>

            
            <hr>
    <style type="text/css">
            .tagcloud05 ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }
      .tagcloud05 ul li {
        display: inline-block;
        margin: 0 0 .3em 1em;
        padding: 0;
      }
      .tagcloud05 ul li a {
        position: relative;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        padding: 0 1em;
        background-color: #3498db;
        border-radius: 0 3px 3px 0;
        color: #fff;
        font-size: 13px;
        text-decoration: none;
        -webkit-transition: .2s;
        transition: .2s;
      }
      .tagcloud05 ul li a::before {
        position: absolute;
        top: 0;
        left: -15px;
        content: '';
        width: 0;
        height: 0;
        border-color: transparent #3498db transparent transparent;
        border-style: solid;
        border-width: 15px 15px 15px 0;
        -webkit-transition: .2s;
        transition: .2s;
      }
      .tagcloud05 ul li a::after {
        position: absolute;
        top: 50%;
        left: 0;
        z-index: 2;
        display: block;
        content: '';
        width: 6px;
        height: 6px;
        margin-top: -3px;
        background-color: #fff;
        border-radius: 100%;
      }
      .tagcloud05 ul li span {
        display: block;
        max-width: 100px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
      }
      .tagcloud05 ul li a:hover {
        background-color: #555;
        color: #fff;
      }
      .tagcloud05 ul li a:hover::before {
        border-right-color: #555;
      }


    </style>
   

</div>

@endsection      