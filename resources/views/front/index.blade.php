<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
            <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
          
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body">
      
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="" style="background: linear-gradient(90deg, #edf7fc, #dcf0fa, #b9e2f5, #84cdee, #50b8e7);">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                 <b><span class="d-block d-lg-none"> {{ $about->judul }} </span> </b>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <b> <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul> </b>
                <a class="nav-link position-justify ms-auto" href="{{ route('login')}}" style="margin-right: 20px">
                    <img src="{{asset('img')}}\shield.png" alt="Description of the image" style="max-height:30px">
                </a>
            </div>
        </nav>
        
        <!-- Page Content-->
        <div class="container-fluid p-0  " >
           
            <!-- About-->
            <section class="resume-section " id="about">
                <div class="resume-section-content d-flex justify-content-around">
                    <img class="foto rounded-5" src="{{asset('img')."/".get_meta_value('_foto')}}" alt="" />
                    <img class="cloud position-absolute bottom-0 start-0" src="{{asset('img')}}\cloud2.png" style="margin-left:80px">
                    <img class="cloud position-absolute top-0 start-0" src="{{asset('img')}}\hearth.png" style="margin-left:350px; max-width:50px;margin-top:170px">
                    <img class="cloud position-absolute top-0 start-0" src="{{asset('img')}}\hearth.png" style="margin-left:410px; max-width:50px;margin-top:170px">
                    <img class="cloud position-absolute top-0 start-0" src="{{asset('img')}}\hearth1.png" style="margin-left:470px; max-width:50px;margin-top:170px">
                  <div class="pagerkiri">
                        <h1 class="mb-0">
                            {!!set_about_nama($about->judul)!!}
                        </h1>
                        <div class="subheading mb-5">
                            {{get_meta_value('_kota')}} .  {{get_meta_value('_provinsi')}} .  {{get_meta_value('_nohp')}} .
                            <a class="biru" href="mailto: {{get_meta_value('_email')}}"> {{get_meta_value('_email')}}</a>
                        </div>
                        <p class="lead mb-5">{!! $about->isi !!}</p>
                    <br>
                        <div class="social-icons">
                            <a class="social-icon" href="{{get_meta_value('_linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-icon" href="{{get_meta_value('_github')}}"><i class="fab fa-github"></i></a>
                            <a class="social-icon" href="{{get_meta_value('_tiktok')}}"><i class="fab fa-tiktok"></i></a>
                            <a class="social-icon" href="{{get_meta_value('_ytube')}}"><i class="fab fa-youtube"></i></a>
                            <a class="social-icon" href="{{get_meta_value('_insta')}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section roundededge" id="skills" style="background: linear-gradient(270deg, #edf7fc, #dcf0fa, #b9e2f5, #84cdee, #50b8e7);">
                <div class="resume-section-content" style="transform: translateX(100px)">
                    <img class="cloud position-absolute top-100 start-100 translate-middle" src="{{asset('img')}}\land2.png" style="margin-left:-270px; max-width:500px;margin-top:300px">
                    <img class="cloud position-absolute top-100 start-100 translate-middle" src="{{asset('img')}}\castle.png" style="margin-left:-270px; max-width:500px;margin-top:80px">
                    <img class="position-absolute top-100 start-50 " src="{{asset('img')}}\land3.png" style="margin-left:-300px; max-width:500px;margin-top:265px; ">
                    <img class="position-absolute top-100 start-50 " src="{{asset('img')}}\lucky.png" style="margin-left:-200px; max-width:50px;margin-top:105px; ">
                    <img class="position-absolute top-100 start-50 " src="{{asset('img')}}\mario.png" style="margin-left:-150px; max-width:50px;margin-top:190px; ">
                    <img class="position-absolute top-100 start-50 " src="{{asset('img')}}\lucky.png" style="margin-left:-30px; max-width:50px;margin-top:105px; ">
                    <img class="position-absolute top-100 start-50 " src="{{asset('img')}}\lucky.png" style="margin-left:-115px; max-width:50px;margin-top:05px; ">
                    
                    <h2 class="mb-5 " style="color: rgb(22, 22, 22)">Skills</h2>
                    <div class="subheading mb-3 " style="color: rgb(22, 22, 22)" >Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">   
                 @foreach (explode(', ',get_meta_value('_language')) as $item)
                  
                    <li class="list-inline-item"><i class="devicon-{{strtolower($item)}}-plain"></i> </li>
                        
                 @endforeach
                            
                </ul>
                    <div class="subheading mb-3" style="color: rgb(22, 22, 22)">Workflow</div>
                    
                    <ul class="fa-ul mb-0">
                        {!! get_meta_value('_workflow')!!}
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
               
                <div class="resume-section-content" style="transform: translatey(0px)">
                    <img class="cloud position-absolute top-50 start-0 translate-middle-y" src="{{asset('img')}}\loding.png" style="margin-left:-170px; max-width:500px;margin-top:350px">
                    <img class="cloud position-absolute top-50 start-0 translate-middle-y" src="{{asset('img')}}\snorlax.png" style="margin-left: 170px; max-width:100px;margin-top:250px; ">
                    <img class="cloud position-absolute top-50 start-0 translate-middle-y" src="{{asset('img')}}\pokemon.png" style="margin-left:-170px; max-width:150px;margin-top:100px; ">
                    <img class="position-absolute top-0 start-50 translate-middle-x" src="{{asset('img')}}\mew.png" style="margin-left:220px ;max-width:100px; margin-top:-70px;">
                    <img class="position-absolute top-0 start-50 translate-middle-x" src="{{asset('img')}}\gameboy.png" style="margin-left:300px ;max-width:100px; margin-top:-150px;">
                    <img class="position-absolute top-0 start-50 translate-middle-x" src="{{asset('img')}}\mew2.png" style="margin-left:400px ;max-width:150px; margin-top:-250px;">
                    <h2 class="mb-5">{{$interest->judul}}</h2>
                    <p>{!!$interest->isi!!}</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                
                <div class="resume-section-content"  style="transform: translatey(0px)">
                    <img class="cloud position-absolute top-100 start-100 translate-middle" src="{{asset('img')}}\pipe.png" style="margin-left:-270px; max-width:500px;margin-top:300px">
                    <img class="position-absolute top-0 start-50 translate-middle-x" src="{{asset('img')}}\star.png" style="margin-left:120px ;max-width:100px; margin-top:-250px;">
                    <img class="position-absolute top-0 start-50 translate-middle-x" src="{{asset('img')}}\star.png" style="margin-left:520px ;max-width:100px; margin-top:-350px;">
                    <img class="cloud position-absolute top-100 start-100 translate-middle" src="{{asset('img')}}\trophy.png" style="margin-left:-570px; max-width:200px;margin-top:300px">
                    <img class="cloud position-absolute top-100 start-100 translate-middle" src="{{asset('img')}}\cloud3.png" style="margin-left:-570px; max-width:400px;margin-top:500px">
                    <h2 class="mb-5">{{$award->judul}}</h2>
                    {!!set_list_award($award->isi)!!}
                </div>
            
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front')}}/js/scripts.js"></script>
    </body>
</html>
