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
                <h1 class="static-font-style" id="c1" style="text-align: center;opacity: 0;">About Us</h1>
            </div>
        </div>
      </div>
    </div>
  </div>



    
<!-- About Us-->


    <div class="container" style="margin-top: 50px;opacity: 0;" id="cont">


        <h1 class="font-style2" style="margin-bottom: 50px;">About Us</h1>

        <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">Orchid Wedding Planner, gathers the privacy of the villa with the 5 stars hotel management quality thanks to:</h5>

        <ul>
            <li> 
                <h5 class="font-style2" style="margin-bottom: 40px; font-weight: normal;">The hospitality management system applied by more than 60 qualified full time employees, all dedicated to your event and work only for you.</h5>
            </li>
            <li> 
                <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">Event Catering is easily prepared and elegantly presented in our buffet tent.</h5>
            </li>
            <li> 
                <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">We are always there to assist you with passion and creativity to individualize your event. We cover all wedding decoration items including the setup, center pieces, entrance, garden & pool decoration, flower arrangements & lighting.</h5>
            </li>
            <li> 
                <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">We offer the perfect blend of indoor & outdoor spaces gathering the benefits of both types. An elegant tent alongside an artistically landscaped garden that gives your guests the opportunity to go in & out as they please.</h5>
            </li>
            <li> 
                <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">
                    We guarantee a gorgeous wedding, corporate event or a special occasion, in the morning the middle of the day or by night, enjoying the brightness of the sun and the day time sparkle, or delighting the moon light. </h5>
            </li>
        </ul>

        <h5 class="font-style2" style="margin-bottom: 40px;font-weight: normal;">Orchid Wedding Planner is a one stand shop gathering all what you need for a remarkable wedding. We look forward to assist you creating and living your fairytale wedding.</h5>

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


















