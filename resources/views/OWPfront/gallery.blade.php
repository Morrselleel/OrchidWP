<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orchid Wedding Planner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="{{asset('OWPfront/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('OWPfront/css/home.css')}}">

</head>


<style type="text/css">
  .item {
    transition: .5s ease-in-out;
  }

  .item:hover {
    filter: brightness(80%);
  }
</style>


<body>

  <!--Navbar-->

  @include('OWPfront.nav');






  <div class="container-fluid" style="height: 224px;"></div>


  <!--gallery-->

   <div class="container-fluid" id="cont">

    <div class="row mt-4">

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol1" style="opacity:0;">

        <a href="{{asset('OWPfront/Images/a1.jpg')}}" class="fancybox" data-fancybox="gallery1" id="thmb">
          <img src="{{asset('OWPfront/Images/a1.jpg')}}" width="100%" height="100%" id="img0" style="object-fit: cover;border-radius: 10px;"> 
         </a>
      </div>

       <div class="item col-sm-6 col-md-4 mb-3" id="galCol2" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a2.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a2.jpg')}}" id="img1" width="100%" height="100%" style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol3" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a3.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a3.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      
      <div class="item col-sm-6 col-md-4 mb-3" id="galCol4" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a4.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a4.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol5" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a5.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a5.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol6" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a6.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a6.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol7" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a7.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a7.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol8" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a8.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a8.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol9" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a9.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a9.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol10" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a10.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a10.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol11" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a11.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a11.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol12" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a12.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a12.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol13" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a13.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a13.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol14" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a14.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a14.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol15" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a15.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a15.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol16" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a16.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a16.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol17" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a17.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a17.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol18" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a18.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a18.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol19" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a19.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a19.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol20" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a20.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a20.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>

      <div class="item col-sm-6 col-md-4 mb-3" id="galCol21" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a21.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a21.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>
      <div class="item col-sm-6 col-md-4 mb-3" id="galCol22" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a22.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a22.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>
      <div class="item col-sm-6 col-md-4 mb-3" id="galCol23" style="opacity: 0;">
        <a href="{{asset('OWPfront/Images/a23.jpg')}}" class="fancybox" data-fancybox="gallery1">
          <img src="{{asset('OWPfront/Images/a23.jpg')}}" width="100%" height="100%"
            style="object-fit: cover;border-radius: 10px;">
        </a>
      </div>
      
        </div>

  </div>

  <!--animbtn-->

  @include('OWPfront.animationbutton');        
    
  

<!--footer-->


    <div class="container-fluid footer" >

    
                <div class="container" style="height:100px;margin-left:170px;margin-top:50px;display: flex;justify-content: center;align-content:center">

                
                <div class=" linkBtn">
                    <a href="https://www.facebook.com" target="_blank" class="bi bi-facebook" style="color:black"></a>
                </div>

                <div class=" linkBtn">
                    <a href="https://www.instagram.com" target="_blank" class="bi bi-instagram" style="color:black"></a>
                </div>

                <div class="linkBtn">
                    <a href="https://www.whatsapp.com" target="_blank" class="bi bi-whatsapp" style="color:black"></a>
                </div>
            </div>
    </div>

  @include('OWPfront.scriptsrc');

</body>

</html>