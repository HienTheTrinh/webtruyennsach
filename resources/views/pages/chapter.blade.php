@extends('../layout')



@section('content')



<nav aria-label="breadcrumb">

  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>

    <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>

    <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>

    <li class="breadcrumb-item"><a href="{{url('xem-chapter/'.$chapter->slug_chapter)}}">{{$chapter->truyen->tentruyen}}</a></li>

    <li class="breadcrumb-item active" aria-current="page">{{$chapter->tieude}}</li>

  </ol>

</nav>



<div class="row">

	<div class="col-md-7">
				<div  class="form-group">

		<h1>{{$chapter->truyen->tentruyen}}</h1>


		<h4>Chương hiện tại : {{$chapter->tieude}}</h4>
		<div class="facebook-like">
      
    <div style="display: none; width: 920.004px; height: 37.9873px; float: none;"></div>
    
<span class="tip hidden">Share để ủng hộ NetTruyen</span>
<div data-share="true" data-show-faces="true" data-action="like" data-layout="button_count" data-href="http://www.nettruyenvip.com/truyen-tranh/kich-truong-cua-takemichi/chap-1/438891" class="fb-like fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=745819368841087&amp;container_width=0&amp;href=http%3A%2F%2Fwww.nettruyenvip.com%2Ftruyen-tranh%2Fkich-truong-cua-takemichi%2Fchap-1%2F438891&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="f2c034fb40b9eec" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=745819368841087&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2b5ecce7e61b5c%26domain%3Dwww.nettruyenvip.com%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fwww.nettruyenvip.com%252Ff1d58572c0017b%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.nettruyenvip.com%2Ftruyen-tranh%2Fkich-truong-cua-takemichi%2Fchap-1%2F438891&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div>
</div><a rel="nofollow" href="javascript:void(0)" class="error btn btn-warning"><i class="fa fa-exclamation-triangle"></i> Báo lỗi</a>
<div class="alert alert-info mrb10 hidden-xs hidden-sm">

<i class="fa fa-info-circle"></i> <em>Sử dụng tập trước (←) hoặc tập sau (→) để chuyển chapter</em>
</div>
<div class="chapter-nav" style="z-index: auto; position: static; top: auto;">

                                 <!--  <label for="exampleInputEmail1">Chọn chương</label> -->




                            </div>
                            <a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled' : ''}}" href="{{url('xem-chapter/'.$previous_chapter)}}"> <-</a>
<a class="home" href="{{url('/')}}" title="Trang chủ"><i class="fa fa-home"></i></a>

<a class="home backward" href="http://www.nettruyenvip.com/truyen-tranh/kich-truong-cua-takemichi-20830#nt_listchapter" title="Kịch Trường Của Takemichi"><i class="fa fa-list"></i></a>

<a href="#" class="prev a_prev disabled"><i class="fa fa-angle-left"></i></a>
<select name="ctl00$mainContent$ddlSelectChapter" id="ctl00_mainContent_ddlSelectChapter" class="select-chapter">

                                    @foreach($all_chapter as $key => $chap)

                                    <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>

                                    @endforeach

</select>
<a class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled' : ''}} "   href="{{url('xem-chapter/'.$next_chapter)}}"> -></a>
 <button class="btn btn-danger btn-thich_truyen"><i class="fa fa-heart" aria-hidden="true"></i> Thích truyện</button></li>
</div>
<div style="display: none; width: 920.004px; height: 34.1219px; float: none;">
	
</div>
</div>
</div>
		<div class="col-md-5">



            <style type="text/css">

              .isDisabled {

                color: currentColor;

                 pointer-events: none;

                opacity: 0.5;

                text-decoration: none;

              }

            .noidungchuong {
          padding: 20px;
          background: #fff;
          color:#000;
       /*   line-height: 40px !important;
          font-size: 25px !important;
          font-family: "Palatino Linotype","Arial","Times New Roman",sans-serif !important;*/
      }
      .reading .reading-control {
    background: none repeat scroll 0 0 #f6f7f8;
    margin-bottom: 10px;
    overflow: hidden;
    padding: 10px;
    text-align: center;
         }

            </style>


          	<!-- 	<div  class="form-group">



                                  <label for="exampleInputEmail1">Chọn chương</label>



                                   <p> <a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled' : ''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Tập Trước <-</a></p>




                                  <select name="select-chapter" class="custom-select select-chapter">

                                    @foreach($all_chapter as $key => $chap)

                                    <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>

                                    @endforeach

                                  </select>



                                   <p class="mt-4"><a class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled' : ''}} "   href="{{url('xem-chapter/'.$next_chapter)}}">-></a></p>

                                  </div>
 -->


                            </div>

                

                  <div class="noidungchuong">

                  {!! $chapter->noidung !!}	



                       



                  </div>




                   <h3>Lưu và chia sẻ truyện :  </h3>

                         <div class="fb-share-button" data-href="" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                         
                          <div class="row">
                            <div class="col-md-12"> <div data-width="100%" class="fb-comments" data-href="" data-width="" data-numposts="10"></div></div>
                          </div>

                         



	</div>



</div>



@endsection