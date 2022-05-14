@include('OWPfront.htmlheader');


<body>

    <!--Navbar-->
    @include('OWPfront.nav');






    <div class="container-fluid"  style="height: 124px;">

    </div>

<!--static Wedding picture-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('OWPfront/Images/12.jpg')}}" class="d-block w-100" alt="img" style="filter: brightness(80%);">
        <div class="container-fluid" style="position: absolute; bottom: 150px;" >

            <div>
                <h1 class="static-font-style" id="c1" style="text-align: center;opacity: 0;">Events Planning</h1>
            </div>
        </div>
      </div>
    </div>
  </div>



    
<!-- Events Packages-->


    <div class="container-fluid" style="text-align: center;margin-top: 50px;opacity: 0;" id="cont">

                <h3 id="cont" class="font-style2" style="font-weight: lighter; padding: 50px; ">Orchid Wedding Planner offers a wide range of other services remarkably presented including Day Use for groups, corporate meetings and events, kids activities, schools and nurseries trips and birthdays.</h3>
            </div>

            


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


    <script>
        
        $(document).ready(function () {

                
    $('.col-md-5').delay(1000).animate({opacity:"100%"},2000);
    $('.col-md-6').delay(1000).animate({opacity:"100%"},2000);
    

$('#navbarNav').show(1000);
$('#c1').animate({opacity:"100%"},1000);



});

    </script>
</body>

</html>


















