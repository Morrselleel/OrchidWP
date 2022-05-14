window.onload = function () {
  document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault();
    
    // these IDs from the previous steps
    emailjs.send("service_rjbbpa7", "template_5xeiv7x", {
      
      from_name: document.getElementById('phone').value,
      message: document.getElementById('message').value,
      reply_to: document.getElementById('email').value

    }).then(function () {
      console.log('SUCCESS!');
      document.getElementById('email').value = ''
      document.getElementById('message').value = ''
      document.getElementById('phone').value = ''
      alert('Thank you your email was sent successfully.')
    }, function (error) {
      console.log('FAILED...', error);
    });
  });
}



$(document).ready(function () {

 /* var x =1;

  setInterval(function(){
    $('#btn' + (x++)).click();
  },700)*/
 

  
  $('#cont').animate({ opacity: "100%" }, 2000);

  $('.col-md-5').animate({ opacity: "100%" }, 2000);
  $('.col-md-6').animate({ opacity: "100%" }, 2000);


  $('#animBtn').mouseenter(function(){

    console.log('dfsdfsd')
    $(this).removeClass('noBtnShadow')
    $(this).addClass('btnShadow')
    $(this).animate({bottom:"5px"},300)

  });

  $('#animBtn').mouseleave(function(){

    
    $(this).removeClass('btnShadow')
    $(this).addClass('noBtnShadow')
    $(this).animate({bottom:"0"},300)

  })


  $('#navbarNav').show(1000); 
  $('#map').animate({ opacity: "100%" }, 1000);
  $('#c1').animate({ opacity: "100%" }, 1000);

    
    for (var i = 1; i < 24; i++) {

        $('#galCol' + i).delay(700).delay(i * 100).animate({ opacity: "100%" }, 500);

      }


      if( document.getElementById('cont').getBoundingClientRect().bottom > 0){


      }



      $(window).scroll(function(){

        $('html,body').scrollTop(function(){

          
      

        });

      });

});

//, lng: 
let map;

function initMap() {
  const myLatLng = { lat: 29.989767454368916, lng: 31.335921479789867 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "OrchidWP",
  });

}

window.initMap = initMap;
