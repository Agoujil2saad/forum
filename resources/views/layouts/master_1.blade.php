<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Forum du Dialogue et de l’Investissement Africain</title>
  <link rel="shortcut icon"  href="images/logo_forum_GxL_icon.ico" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    @yield('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
  <style>
  #pusher{
    visibility: visible;
    padding: 20px;
  }
  #navigation_menu{
    display: none;
    visibility: hidden;
  }
  #logo_left
  {
    display: none;
  }
  @media only screen and (min-width: 860px) {
    #navigation_menu{
      display: flex;
      visibility: visible;
    }
    #pusher{
      display: none;
      visibility:hidden;
    }
    #logo_left{
      display: flex;
    }
  }
</style>
</head>
<body style="background-image: url(images/papier.png);">
  <div class="ui  centered grid" id="app">
    @include('partials.header_1')
    @yield('content')
  </div>

  @yield('videos')

  @include('partials.footer_1')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="{{ asset('js/semantic.min.js') }}"></script>

  <script>
    $( ".ui.checkbox" ).checkbox();
    // $('.ui.dropdown').dropdown();
   $('.dropdown')
  .dropdown({
    action: 'nothing'
  });

  $('.ui.rating')
  .rating('disable')
;
    $("#pusher").click(()=>{
      $('.ui.sidebar')
      .sidebar('toggle')
      ;
    });
  </script>
  <script>
    (function( $ ) { "use strict";   
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1500);
              return false;
            }
          }
        });
      });   
    }(jQuery));
  </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
 <script>
    AOS.init();
  </script>
  @yield('scripts')
</body>
</html>