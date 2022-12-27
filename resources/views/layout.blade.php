<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kho truyện</title>

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <style type="text/css">
         
          h5{
            font-weight: bold;
            line-height: 25px;
          }
           .switch_color{
            background: #181818;
            color: #fff;
          }
          .switch_color_light{
            background: #181818 !important;
            color:#000;
          }
          .noidung_color {
            color:#000;
          }
        </style>
 </head>
        <body>
<div class="container">
	<!-- <--------menu--------> 
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0;margin-bottom: 10px;">

  <a class="navbar-brand" href="#">Truyendep.com</a>
   <style type="text/css">
                ul.navbar-nav.mr-auto li a {
                  font-size: 20px;
              }
              .card.mb-3.box-shadow img {
                          height: 250px;
                          border: 3px solid #000;
                          padding: 5px;
                      }
                      .item h5 {
                  margin: 10px 0;
              }
              </style>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/')}}"><i class="fa fa-home "></i>Trang chủ <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
     <a class="nav-link" href="{{url('/doc-sach')}}"><i class="fas fa-book"></i>Sách <span class="sr-only"></span></a>
    </li>
       <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-list-ul" aria-hidden="true"></i> Danh mục truyện
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                      @foreach($danhmuc as $key => $danh)
                       <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}"><i class="fa fa-list-ul" aria-hidden="true"></i> {{$danh->tendanhmuc}}</a>
                      @endforeach
                    </div>
                  </li>
       <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-tags" aria-hidden="true"></i> Thể loại
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                      @foreach($theloai as $key => $the)
                      <a class="dropdown-item" href="{{url('the-loai/'.$the->slug_theloai)}}"><i class="fa fa-tags" aria-hidden="true"></i> {{$the->tentheloai}}</a>
                      @endforeach
                    </div>
                  </li>
    </ul>
    
</nav>
 <div class="row">
              <div class="col-md-12">
                
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <!-- <div class="addthis_inline_share_toolbox"></div> -->
             
              <form autocomplete="off" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}" method="POST">
                @csrf
                  <input class="form-control mr-sm-2" id="keywords" type="search" name="tukhoa" placeholder="Tìm kiếm tác giả,truyện...." aria-label="Search">
                  <div id="search_ajax"></div>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>

                 <!--  -->
                    <select class="custom-select mr-sm-2" id="switch_color">
                      
                      <option value="xam">Xám</option>
                      <option value="den">Đen</option>
                    
                    </select>

                    

                   
                </form>
              </div>
            </div>

<!-- <----------Slide-----------> 
@yield('slide')

<!-- <----------animemoi-----------> 
@yield('content')
   
   
<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

</div>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=379979810673305&autoLogAppEvents=1" nonce="uBGlkvRG"></script>

<!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

     
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!--   <----truyenyeuithich---> 
<script type="text/javascript">
      
        $(document).on('click','.xemsachnhanh',function(){

            var sach_id = $(this).attr('id');
            var _token = $('input[name="_token"]').val();
                     $.ajax({
                url:"{{url('/xemsachnhanh')}}",
                method:"POST",
                dataType:"JSON",
                data:{sach_id:sach_id,_token:_token},
                success:function(data){
                    $('#tieude_sach').html(data.tieude_sach);
                    $('#noidung_sach').html(data.noidung_sach);
                }
            }); 
        });
    </script>
<script type="text/javascript">
      show_wishlist();
      function show_wishlist(){
          if(localStorage.getItem('wishlist_truyen')!=null){

             var data = JSON.parse(localStorage.getItem('wishlist_truyen'));

             data.reverse();

             for(i=0;i<data.length;i++){

                var title = data[i].title;
                var img = data[i].img;
                var id = data[i].id;
                var url = data[i].url;

                $('#yeuthich').append(` 

                  <div class="row mt-2">
                    <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="`+img+`" alt="`+title+`"></div>
                    
                    <div class="col-md-7 sidebar">
                      <a href="`+url+`">
                      <p>`+title+`</p>
                      </a>
                    </div>

                </div>
                 `);
            }

          }
      }
      $('.btn-thich_truyen').click(function(){
        $('.fa.fa-heart').css('color','#fac');
        const id = $('.wishlist_id').val();
        const title = $('.wishlist_title').val();
        const img = $('.card-img-top').attr('src');
        const url = $('.wishlist_url').val();
       
        const item = {
          'id': id,
          'title': title,
          'img': img,
          'url': url
        }
        if(localStorage.getItem('wishlist_truyen')==null){
           localStorage.setItem('wishlist_truyen', '[]');
        }
        var old_data = JSON.parse(localStorage.getItem('wishlist_truyen'));
        var matches = $.grep(old_data, function(obj){
            return obj.id == id;
        })
        if(matches.length){
            alert('Truyện đã có trong danh sách yêu thích');
        }else{
            if(old_data.length<=5){
              old_data.push(item);
             
              
              
            }else{
              alert('Đã đạt tới giới hạn lưu truyện yêu thích.');
            }
            $('#yeuthich').append(`

                        <div class="row mt-2">
                          <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="`+img+`" alt="`+title+`"></div>
                          
                          <div class="col-md-7 sidebar">
                            <a  href="`+url+`">
                            <p style="color:blue">`+title+`</p>
                            </a>
                          </div>

                </div>
              `);
             
            localStorage.setItem('wishlist_truyen', JSON.stringify(old_data));
            alert('Đã lưu vào danh sách truyện yêu thích.');
            
        }
         localStorage.setItem('wishlist_truyen', JSON.stringify(old_data));
       
        

       
      });
   </script>

  <script type="text/javascript">
      $('#keywords').keyup(function(){
          var keywords = $(this).val();

            if(keywords != '')
              {
               var _token = $('input[name="_token"]').val();

               $.ajax({
                url:"{{url('/timkiem-ajax')}}",
                method:"POST",
                data:{keywords:keywords, _token:_token},
                success:function(data){
                 $('#search_ajax').fadeIn();  
                  $('#search_ajax').html(data);
                }
               });

              }else{

                $('#search_ajax').fadeOut();  
              }
          });

          $(document).on('click', '.li_timkiem_ajax', function(){  
              $('#keywords').val($(this).text());  
              $('#search_ajax').fadeOut();  
          }); 
      </script>    
       </script>
    <script type="text/javascript">
      $(document).ready(function(){

         if(localStorage.getItem('switch_color')!==null){
            const data = localStorage.getItem('switch_color');
            const data_obj = JSON.parse(data);
            $(document.body).addClass(data_obj.class_1);
            $('.album').addClass(data_obj.class_2);
            $('.card-body').addClass(data_obj.class_1);
            $('ul.mucluctruyen > li > a').css('color','#fff');
            $('.sidebar > a').css('color','#fff');
           
            $("select option[value='den']").attr("selected", "selected");

          }
        })
      $("#switch_color").change(function(){
           $(document.body).toggleClass('switch_color');
           $('.album').toggleClass('switch_color_light');
            $('.card-body').toggleClass('switch_color');
             $('.noidungchuong').addClass('noidung_color');
             
               $('ul.mucluctruyen > li > a').css('color','#fff');
                $('.sidebar > a').css('color','#fff');

           if($(this).val() == 'den'){

               var item = {
                  'class_1':'switch_color',
                  'class_2':'switch_color_light'
                 
                }   
              localStorage.setItem('switch_color', JSON.stringify(item));

            }else if($(this).val() == 'xam'){
              
              localStorage.removeItem('switch_color');
              $('ul.mucluctruyen > li > a').css('color','#000');
               $('.sidebar > a').css('color','#000');
                 

             
            }      
          
          
      });

    </script> 
<script type="text/javascript">

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dot:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
 <script type="text/javascript">
         $('.select-chapter').on('change',function(){

            $('.waiting').text('Đang chuyển chương vui lòng chờ xíu....');
           
            var url = $(this).val();


            if(url){


              window.location = url;
              
            }
            return false;
         });

         current_chapter();

         function current_chapter(){
            var url  = window.location.href; 

            $('.select-chapter').find('option[value="'+url+'"]').attr("selected",true);
         }
       </script>


    </body>
</html>

