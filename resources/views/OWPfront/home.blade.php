@include('OWPfront.htmlheader');

<body>

    <!--Navbar-->

    @include('OWPfront.nav');



    <!--Slide-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" id="btn1" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" id="btn2" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" id="btn3" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" id="btn4" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>

        </div>


        <div class="carousel-inner ">
            <div class="carousel-item active" style="position: relative;">
                <img src="{{asset('OWPfront/Images/1.jpg')}}" class="d-block w-100" alt="image 1"
                    style=" filter: brightness(80%);">
                <div class="carousel-caption d-none d-md-block " id="c1" style="opacity: 0%;">
                    <h1 class="slide-font-style">Special Vibes!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('OWPfront/Images/2.png')}}" class="d-block w-100" alt="image 2"
                    style=" filter: brightness(80%);">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-font-style">Special Times!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('OWPfront/Images/3.jpeg')}}" class="d-block w-100" alt="image 3"
                    style=" filter: brightness(80%);">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-font-style">Special Place!</h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('OWPfront/Images/4.jpg')}}" class="d-block w-100" alt="image 3"
                    style=" filter: brightness(80%);">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slide-font-style">For a Special Day</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!--Grid 1-->

    <div class="container" style="margin-top: 150px; margin-bottom: 150px;">
        <div class="row">
            <div class=" col-sm-12 col-md-5" style="opacity:0 ;">
                <h1 class="font-style2" style="font-size: 25px;" id="txt1">Orchid Wedding Planner since 2019</h1><br>
                <h4 class="font-style2" style="margin-bottom: 40px; font-size: 20px;">We are known for</h4>
                <h6 class="font-style2"
                    style="margin-bottom: 40px; font-weight:lighter; max-width: 500px; font-size: 15px;"> A full service
                    venue that gathers the privacy of the villa with the 5 stars hotel management quality thanks to: The
                    hospitality management system applied by more than 60 qualified full time employees, all dedicated
                    to your event and work only for you.</h6>
                <h6 class="font-style2" style="margin-bottom: 40px; font-size: 20px;">We offers the best Indoor &
                    Outdoor event deals</h6>

                <div class="container"
                    style=" padding: 0; margin-bottom: 100px;margin-top: 100px; display: flex; justify-content:right; align-items:flex-start;">

                    <div class="container" id="animBtn"
                        style="position: relative; border: 1px solid rgba(252,176,69,1);width: fit-content; padding: 0; display: flex;  justify-content:right; align-items:flex-end;">

                        <div class="container"
                            style=" margin:5px; width: fit-content;padding: 0 ; display: flex; justify-content:center; align-items:center;">
                            <a href="{{ url('/contact-us') }}" class="btnn btnn1 font-style2">
                                <h5>Learn More</h5>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-12 col-md-1" style="height:110px"></div>
            <div class="col-sm-12 col-md-6" style="opacity: 0;">

                <img src="{{asset('OWPfront/Images/a23.jpg')}}"
                    style="margin-top: 0px; box-shadow: 1px 1px 80px 15px black; border-radius: 20px; "
                    class="d-block w-100" alt="image 2">

            </div>
        </div>
    </div>


    <!--card view-->


    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-4">

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('OWPfront/Images/10.jpg')}}" alt="Avatar"
                                style="border-radius: 10px;width:400px;height: 400px; object-fit: cover;">

                            <div class="card-dark-layer">
                                <p class="card-front-text card-font-style ">Weddings</p>
                            </div>
                        </div>
                        <div class="flip-card-back">

                            <p class="card-back-text backcard-font-style">We are specialized in creating your dream
                                wedding in a way that exceeds your expectations yet holds your individuality and
                                preference</p>


                            <div class="container"
                                style=" padding: 0; margin-bottom: 0px;margin-top: 200px; display: flex; justify-content:right; align-items:flex-start;">

                                <div class="container" id="animBtn"
                                    style="position: relative; border: 1px solid rgba(252,176,69,1);width: fit-content; padding: 0; display: flex;  justify-content:right; align-items:flex-end;">

                                    <div class="container"
                                        style=" margin:5px; width: fit-content;padding: 0 ; display: flex; justify-content:center; align-items:center;">
                                        <a href="{{ url('/wedding-packages') }}"
                                            class="btnn btnncard btnn1 font-style2">
                                            <h5>Learn More</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3">

                <div style="width: 10px;"></div>
            </div>

            <div class="col-sm-12 col-md-4">


                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{asset('OWPfront/Images/11.jpg')}}" alt="Avatar"
                                style="border-radius: 10px;width:400px;height: 400px; object-fit: cover;">

                            <div class="card-dark-layer">
                                <p class="card-front-text card-font-style ">Events</p>
                            </div>
                        </div>
                        <div class="flip-card-back">

                            <p class="card-back-text backcard-font-style">A full team of wedding planners together with
                                the manager of the place herself assist you and guide you through all the wedding
                                details.</p>



                            <div class="container"
                                style=" padding: 0; margin-bottom: 0px;margin-top: 200px; display: flex; justify-content:right; align-items:flex-start;">

                                <div class="container" id="animBtn" style="position: relative; border: 1px solid rgba(252,176,69,1);
                        width: fit-content; padding: 0; display: flex;  
                        justify-content:right; align-items:flex-end;">

                                    <div class="container"
                                        style=" margin:5px; width: fit-content;padding: 0 ; display: flex; justify-content:center; align-items:center;">
                                        <a href="{{ url('/events-packages') }}" class="btnn btnncard btnn1 font-style2">
                                            <h5>Learn More</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->


    <div class="container-fluid footer">

        <div class="row">


            <div class="col-md-6">
                <!--map-->
                <div class="container-fluid map" id="map"></div>
            </div>


            <div class="col-md-3">


                <div class="row" style="padding: 30px;">
                    <div class="col-md-1">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="col-md-5">
                        <h6 style="width:400px">Khalid Ebn El Walid, El Mokattam, Cairo Governorate</h6>
                    </div>
                </div>



                <div class="row" style="padding: 30px;">
                    <div class="col-md-1">
                        <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <div class="col-md-2">
                        <h6 style="width:400px">01009063362</h6>
                    </div>
                </div>

                <div class="container" style="width:700px;margin-top:25px;margin-left:-65px;display: flex;justify-content: center;align-content:center">

                
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
                           </div>


          





        </div>

    </div>


    @include('OWPfront.scriptsrc');

</body>

</html>