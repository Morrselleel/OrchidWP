@include('OWPfront.htmlheader');


<body>

    <!--Navbar-->
    @include('OWPfront.nav');





    <div class="container-fluid" style="height: 224px;">

    </div>

    <!--map-->

    <div class="container-fluid map2 "  id="map"></div>





    <!-- About Us-->


    <div class="container" style="margin-top: 150px;margin-bottom: 50px; opacity: 0 ;" id="cont">


        <h3 class="font-style2" style="margin-bottom: 50px;">Contact Us</h3>

        <div class="row">

            <div class="col-md-6">

                <h5 class="font-style2" style="margin-bottom: 20px;">Address:</h5>


                <h5 class="font-style2" style="margin-bottom: 40px; font-weight: normal;">Khalid Ebn El Walid, El Mokattam, Cairo Governorate.</h5>


                <h5 class="font-style2" style="margin-bottom: 20px;">Mobile:</h5>
                <h5 class="font-style2" style="margin-bottom: 40px; font-weight: normal;">01009063362.</h5>


                <h5 class="font-style2" style="margin-bottom: 20px;">Email:</h5>
                <h5 class="font-style2" style="margin-bottom: 40px; font-weight: normal;">email@gmail.com</h5>

            </div>

            <div class="col-md-6">

                <form  id="contact-form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> <h5 class="font-style2">Email:</h5></label>
                        <input type="email" name="user_email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSub1" class="form-label"><h5 class="font-style2">Contact Number:</h5></label>
                        <input type="number" class="form-control" id="phone">
                    </div>
                    <!--<div class="mb-3">
                        <label for="exampleInputSub1" class="form-label"><h5 class="font-style2">Subject:</h5></label>
                        <input type="text" class="form-control" id="exampleInputSub1">
                    </div>-->
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label"><h5 class="font-style2">Message:</h5></label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Send">Submit</button>
                </form>


            </div>
        </div>
    </div>





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