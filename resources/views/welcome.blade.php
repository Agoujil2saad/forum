@extends('layouts.master_1')

@section('styles')
<link href='https://fonts.googleapis.com/css?family=Vollkorn|Lato:400,700' rel='stylesheet' type='text/css'>

{{-- 3d_folding_panel --}}
<link rel="stylesheet" href="3d_folding_panel/css/style.css"> <!-- Resource style -->
<link rel="stylesheet" href="3d_folding_panel/css/reset.css"> <!-- Resource style -->
<script src="3d_folding_panel/js/modernizr.js"></script> <!-- Modernizr -->
{{-- hero slider --}}
<link rel="stylesheet" href="hero_slider/css/style.css"> <!-- Resource style -->
{{-- clipped_svg_slider --}}
<link rel="stylesheet" href="clipped_svg_slider/css/style.css"> <!-- Resource style -->
{{-- counter down --}}
<link rel="stylesheet" href="counter_down/css/style.css">
@endsection

@section('content')
<div class="row" style="padding-top:0px;">

    <section class="cd-hero">
        <ul class="cd-hero-slider autoplay">
            <li class="selected">
                <div class="cd-full-width">
                    <h2 style="font-weight: 900;">1er Forum de dialogue et de l’investissement Africain </h2>
    
                </div> <!-- .cd-full-width -->
            </li>

            <li>
                <div class="cd-half-width">
                    <h2>
                       Le groupe BALLET LIZIBA 
                       Barbara Kallem (USA) 
                       Hatim Idar
                       Attika Ammar ...
                   </h2>
                   <p>
                    Des concerts publics ceux qui avaient envie de sonorités africaines étaient bien servis. Mariage inimaginable entre couleurs folkloriques et musique moderne.
                </p>
            </div> <!-- .cd-half-width -->

            <div class="cd-half-width cd-img-container">
                <img src="hero_slider/sliders/slider1.jpg" alt="tech 1">
            </div> <!-- .cd-half-width.cd-img-container -->
        </li>

        <li>
            <div class="cd-half-width cd-img-container">
                <img src="images/slider/slider2.jpg" alt="tech 2">
            </div> <!-- .cd-half-width.cd-img-container -->

            <div class="cd-half-width">
                <h2>Lancement du projet de L’académie panafricain</h2>
                <p>@lang('lang.slide5')</p>
            </div> <!-- .cd-half-width -->

        </li>

        <li class="cd-bg-video">
            <div class="cd-full-width">
                <h2></h2>
                <p></p>
            </div> <!-- .cd-full-width -->

            <div class="cd-bg-video-wrapper" data-video="hero_slider/assets/video/video">
                <!-- video element will be loaded using jQuery -->
            </div> <!-- .cd-bg-video-wrapper -->
        </li>

        <li>
            <div class="cd-full-width">
                <h2>DINER GALA</h2>
                <p>Au programme de ce forum, un dîner gala était organisé à l’hôtel Dalya.
                Étaient conviés à ce dîner, outre des hommes d’affaires, des représentants de grandes entreprises.</p>

            </div> <!-- .cd-full-width -->
        </li>
    </ul> <!-- .cd-hero-slider -->

    <div class="cd-slider-nav">
        <nav>
            <span class="cd-marker item-1"></span>

            <ul>
                <li class="selected"><a href="#0"><i class=" circle icon"></i></a></li>
                <li><a href="#0"><i class=" circle icon"></i></a></li>
                <li><a href="#0"><i class=" circle icon"></i></a></li>
                <li><a href="#0"><i class=" circle icon"></i></a></li>
                <li><a href="#0"><i class=" circle icon"></i></a></li>
            </ul>
        </nav> 
    </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->
</div>

<div class="row" style="padding: 0">
    <main class="cd-main">
        <ul class="cd-gallery">
            <li class="cd-item">
                <a href="3d_folding_panel/item-1.html" class="dark-text">
                    <div>
                        <h2><i class="time icon"></i> Date et Lieu</h2>
                        <b>SAVOIR PLUS</b>
                    </div>
                </a>
            </li>

            <li class="cd-item">
                <a href="3d_folding_panel/item-2.html" class="dark-text">
                    <div>
                        <h2> <i class="info icon"></i>Thème</h2>
                        <b>SAVOIR PLUS</b>
                    </div>
                </a>
            </li>
        </ul> <!-- .cd-gallery -->
    </main> <!-- .cd-main -->

    <div class="cd-folding-panel">

        <div class="fold-left"></div> <!-- this is the left fold -->
        
        <div class="fold-right"></div> <!-- this is the right fold -->
        
        <div class="cd-fold-content">
            <!-- content will be loaded using javascript -->
        </div>

        <a class="cd-close" href="#0"></a>
    </div> <!-- .cd-folding-panel -->
</div>

<div class="row">
    <div class="column">

        <div class="ui divider"></div>
        <h1 class="ui green header">Forum du Dialogue et de l’Investissement Africain en quelque chiffre </h1>
        <div class="ui inverted four statistics" style="background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%); padding: 3em 0;
        ">
        <div class="statistic">
            <div class="value">
              3
          </div>
          <div class="label">
             Million de Dirham
         </div>
     </div>
     <div class="statistic">
        <div class="text value">
            50000
        </div>
        <div class="label">
          visiteurs
      </div>
  </div>
  <div class="statistic">
   <div class="value">
    <i class="users icon"></i>  700 +
</div>
<div class="label">
  Participants
</div>
</div>
<div class="statistic">
    <div class="value">
      <i class=" trophy icon"></i>
      42
  </div>
  <div class="label">
      Trophées distribuées
  </div>
</div>  
</div>

</div>
</div>




<div class="row">


    <div class="cd-svg-clipped-slider" data-selected="M780,0H20C8.954,0,0,8.954,0,20v760c0,11.046,8.954,20,20,20h760c11.046,0,20-8.954,20-20V20
    C800,8.954,791.046,0,780,0z" data-lateral="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851
    c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648
    C801.401,404.544,801.401,395.456,795.796,389.851z">

    <h1 class=" ui green  large header dividing">Animations et Festivités</h1>

    <div class="gallery-wrapper">
        <ul class="gallery">
            <li class="left">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-1">
                                <path id="cd-morphing-path-1" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-1)" xlink:href="images/mini_slider_1/slider1.jpg"></image>
                        <use xlink:href="#cd-morphing-path-1" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li class="selected">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-2">
                                <path id="cd-morphing-path-2" d="M780,0H20C8.954,0,0,8.954,0,20v760c0,11.046,8.954,20,20,20h760c11.046,0,20-8.954,20-20V20 C800,8.954,791.046,0,780,0z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-2)" xlink:href="/images/mini_slider_1/slider2.jpg"></image>
                        <use xlink:href="#cd-morphing-path-2" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li class="right">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-3">
                                <path id="cd-morphing-path-3" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-3)" xlink:href="/images/mini_slider_1/slider3.jpg"></image>
                        <use xlink:href="#cd-morphing-path-3" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-4">
                                <path id="cd-morphing-path-4" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-4)" xlink:href="/images/mini_slider_1/slider4.jpg"></image>
                        <use xlink:href="#cd-morphing-path-4" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-5">
                                <path id="cd-morphing-path-5" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-5)" xlink:href="/images/mini_slider_1/slider5.jpg"></image>
                        <use xlink:href="#cd-morphing-path-5" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-6">
                                <path id="cd-morphing-path-6" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-6)" xlink:href="/images/mini_slider_1/slider6.jpg"></image>
                        <use xlink:href="#cd-morphing-path-6" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-7">
                                <path id="cd-morphing-path-7" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-7)" xlink:href="/images/mini_slider_1/slider7.jpg"></image>
                        <use xlink:href="#cd-morphing-path-7" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-8">
                                <path id="cd-morphing-path-8" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-8)" xlink:href="/images/mini_slider_1/slider8.jpg"></image>
                        <use xlink:href="#cd-morphing-path-8" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>
        </ul>

        <nav>
            <ul class="navigation">
                <li><a href="#0" class="prev">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </nav>
    </div> <!-- .gallery-wrapper -->

    <ul class="caption">
        <li class="left"></li>
        <li class="selected"></li>
        <li class="right"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>

    </ul>
</div> <!-- .cd-svg-clipped-slider -->
</div>


<div class="row">
    <div class="cd-svg-clipped-slider" data-selected="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400
    c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z" data-lateral="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441
    C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760
    c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z">

    <h1 class=" ui green  large header dividing">Conférences</h1>

    <div class="gallery-wrapper">
        <ul class="gallery">
            <li class="left">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-1">
                                <path id="cd-morphing-path-1" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-1)" xlink:href="images/mini_slider_2/slider1.jpg"></image>
                        <use xlink:href="#cd-morphing-path-1" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li class="selected">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-2">
                                <path id="cd-morphing-path-2" d="M800,0c-60,0-348.815,0-400,0C348.816,0,43.667,0,0,0c0,40.667,0,348.815,0,400c0,51.185,0,335,0,400 c75,0,348.815,0,399.999,0C451.184,800,734,800,800,800c0-67,0-348.815,0-399.999C800,348.816,800,62,800,0z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-2)" xlink:href="images/mini_slider_2/slider2.jpg"></image>
                        <use xlink:href="#cd-morphing-path-2" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

            <li class="right">
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id="cd-image-3">
                                <path id="cd-morphing-path-3" d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path="url(#cd-image-3)" xlink:href="images/mini_slider_2/slider3.jpg"></image>
                        <use xlink:href="#cd-morphing-path-3" class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>

           
            @for ($i = 4; $i < 12; $i++)
            <li>
                <div class="svg-wrapper">
                    <svg viewBox="0 0 800 800">
                        <title>Animated SVG</title>
                        <defs>
                            <clipPath id={{"cd-image-".$i}}>
                                <path id={{"#cd-morphing-path-".$i}} d="M654.559,145.441C584.264,75.148,492.133,40,400,40S215.736,75.148,145.441,145.441 C75.148,215.736,40,307.867,40,400s35.148,184.264,105.441,254.559C215.736,724.852,307.867,760,399.999,760 c92.133,0,184.265-35.148,254.559-105.441C724.852,584.264,760,492.133,760,400.001C760,307.869,724.852,215.736,654.559,145.441z"/>
                            </clipPath>
                        </defs>

                        <image height='800px' width="800px" clip-path={{"url(#cd-image-".$i.")"}} xlink:href={{"images/mini_slider_2/slider".$i.".jpg"}}></image>
                        <use xlink:href={{"#cd-morphing-path-".$i}} class="cover-layer" />
                    </svg>
                </div> <!-- .svg-wrapper -->
            </li>
            @endfor
        </ul>

        <nav>
            <ul class="navigation">
                <li><a href="#0" class="prev">Prev</a></li>
                <li><a href="#0" class="next">Next</a></li>
            </ul>
        </nav>
    </div> <!-- .gallery-wrapper -->

    <ul class="caption">
        <li class="left"></li>
        <li class="selected"></li>
        <li class="right"></li>
        <li></li>
        <li></li>
    </ul>
</div> <!-- .cd-svg-clipped-slider -->
</div>

<div class="row">   
    <h1 class="ui green large header dividing">
        Le deuxième Forum du Dialogue et de l’Investissement Africain  
    </h1>


    <div class="wrapper">

    <h3 class="ui green small header">
        Ouverture dans:
    </h3>
        <time id="count-down" datetime="2017-05-06T00:00:00"></time>
   </div>
</div>


<div class="row" style="padding: 4em 0;">
    <center>
        <div class="ui green large dividing header" id="partenaires">
            <i class="money green icon"></i>
            @lang('lang.spons')
        </div>
    </center>
</div>
<div class="row" style="padding: 2em 0;">
    <div class="nine wide column">
        <div class="ui inverted green segment">
            <h1 style="padding:2em 0;text-align:center;">
                <i class='inverted large handshake icon'></i>
                <br>
                Devenir Partenaire
            </h1>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="hero_slider/js/main.js"></script> <!-- Resource jQuery -->
{{-- 3d_folding_panel --}}
<script src="3d_folding_panel/js/main.js"></script> <!-- Resource jQuery -->
{{-- clipped_svg_slider --}}
<script src="clipped_svg_slider/js/snap.svg-min.js"></script>
<script src="clipped_svg_slider/js/main.js"></script> <!-- Resource jQuery -->
{{-- counter_down --}}
<script  src="counter_down/js/index.js"></script>
@endsection
