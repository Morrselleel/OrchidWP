@include('OWPfront.htmlheader');


<body>

    <!--Navbar-->

    @include('OWPfront.nav');






    <div class="container-fluid" style="height: 124px;">

    </div>

    <!--static Wedding picture-->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('OWPfront/Images/12.jpg')}}" class="d-block w-100" alt="img"
                    style="filter: brightness(80%);">
                <div class="container-fluid" style="position: absolute; bottom: 150px;">

                    <div>
                        <h1 class="static-font-style" id="c1" style="text-align: center;opacity: 0;">Wedding Packages</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Wedding Packages-->


<div class="container-fluid" id="cont" style="opacity: 0;">

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6" style="padding: 50px;">

                <h1 class="font-style2" style="font-size: 30px;margin-bottom: 30px;">Our Special Wedding package
                    includes</h1>
                <h5 class="font-style2" style="font-weight: lighter; padding: 10px;">We are specialized in creating your
                    dream wedding in a way that exceeds your expectations yet holds your individuality and preferences.
                    Your wedding package includes dinning set menu, service and entertainment as follows:</h5>
                <hr>
                <ul style="list-style-type:none">
                    <li style="padding: 10px;">- Lorem ipsum dolor sit amet consectetur</li>
                    <li style="padding: 10px;">- adipisicing elit. Recusandae possimus </li>
                    <li style="padding: 10px;">- cumque odit praesentium harum sapiente</li>
                    <li style="padding: 10px;">- sint! Eos, accusantium minus. Iste,</li>
                    <li style="padding: 10px;">- odio natus. Porro nulla corrupti</li>
                    <li style="padding: 10px;">- aspernatur quam inventore quod. Quod.</li>
                </ul>
            </div>

            <div class="col-md-6" style="margin-top: 85px; padding: 50px;">

                <table class="table-style">
                    <thead>
                        <tr>
                            <td>
                                <h1 class="font-style2" style="color: rgb(64, 163, 224);">Guests</h1>
                            </td>
                            <td>
                                <h1 class="font-style2" style="color:  rgb(64, 163, 224);">Package</h1>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3 class="font-style2">100</h3>
                            </td>
                            <td>
                                <h3 class="font-style2">15000 LE</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3 class="font-style2">150</h3>
                            </td>
                            <td>
                                <h3 class="font-style2">20000 LE</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3 class="font-style2">200</h3>
                            </td>
                            <td>
                                <h3 class="font-style2">25000 LE</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3 class="font-style2">250</h3>
                            </td>
                            <td>
                                <h3 class="font-style2">30000 LE</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3 class="font-style2">300</h3>
                            </td>
                            <td>
                                <h3 class="font-style2">35000 LE</h3>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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


</body>

</html>