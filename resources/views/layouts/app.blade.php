<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Celebrations 24</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/masterslider.css" />
     
    <!-- Master Slider Skin -->
    <link href="/css/style.css" rel='stylesheet' type='text/css'>
    <link href="/css/style1.css" rel='stylesheet' type='text/css'>
      
    <!-- MasterSlider Template Style -->
    <link href='/css/ms-partialview.css' rel='stylesheet' type='text/css'>

    </head>
    <body>
    <header>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="..." class="img-responsive"> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Tampa's <span> <i class="fa fa-angle-down" aria-hidden="true"></i> </span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Tampa's Best 5 STAR Rated DJ's and MC's <span> <i class="fa fa-angle-down" aria-hidden="true"></i> </span> </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>

                <li><a href="#"> Tampa's Best Up Lighting </a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li> <a href="#" class="btn btn-default book_now_btn"> Book Now </a> </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>   
      </header>
        <div id="app">
             @yield('content')
        </div>
 <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="foot_logo space20">
                <img src="img/logo.png" alt="..." class="img-responsive center-block">

                <p class="text-center"> © 2012-2017 Celebrations24 </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="foot_logo">
                <ul>
                  <li> <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                </ul>
              </div>
            </div>

            <div class="col-md-2">
              <div class="foot_logo">
                <h4> Contact us at: </h4>

                <div class="phone_email">
                  <h4> 727-289-1684 </h4>
                  <a href="#"> dave@celebrations24.com </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <script src="/js/app.js"></script>
    <script src="/js/jquery.easing.min.js"></script>

<!-- Master Slider -->
<script src="/js/masterslider.min.js"></script>

<!-- Template js -->
<script src="/js/masterslider.partialview.dev.js"></script>



<script type="text/javascript">   
  
  
    var slider = new MasterSlider();
    slider.setup('masterslider' , {
      width:760,
      height:400,
      space:10,
      loop:true,
      view:'prtialwave',
      bullets:true
    });

    slider.control('bullets' , {autohide:false  , dir:"h", align:"bottom"});

    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    });

    

  </script>
    </body>
</html>
