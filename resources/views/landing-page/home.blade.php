@extends('layouts/main')

@section('main')
<div class="container-xxl py-5 pt-5px">
    <div class="container">
        <div class="row g-4">
            @foreach ($apps as $app)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="{{ $app["link"] }}" target="_blank">
                    <i class="{{ $app["icon"] }}"></i>
                    <h6 class="mb-3">{{ $app["name"] }}</h6>
                </a>
            </div>
            @endforeach

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="request1">

                    <a class="cat-item rounded p-4">
                        <i class="icon1 fa fa-3x fa-solid fa-flask-vial text-primary mb-4"></i> 
                        <div class="nav-bar">
                            <button class="humburger1">  
                                <div class="bar">
                                </div>
                            </button>
                        </div>                             
                        <h6 class="hsix2 mb-3">IP & Lab</h6>
                    </a>
                </div> 
            </div>

            <div class="sub-item1 col-lg-3 col-sm-6 wow fadeInUp"style="display:none;">                                    
                <a class="cat-item rounded p-4" href="https://regist.genme.id/" target="_blank">
                    <i class="fa fa-3x fa-sharp fa-solid fa-dna text-primary mb-4"></i>
                    <h6 class="mb-3">Nutrigenme</h6>
                </a>
            </div>
            <div class="sub-item2 col-lg-3 col-sm-6 wow fadeInUp"style="display:none;">                                    
                <a class="cat-item rounded p-4" href="http://10.125.64.211/kalgen-system/login" target="_blank">
                    <i class="fa fa-3x fa-solid fa-house-circle-check text-primary mb-4"></i>
                    <h6 class="mb-3">Home Service</h6>
                </a>
            </div>          
            <div class="sub-item3 col-lg-3 col-sm-6 wow fadeInUp"style="display:none;">                                    
                <a class="cat-item rounded p-4" href="http://10.125.64.211/internal-kalgen/login" target="_blank">
                    <i class="fa fa-3x fa-sharp fa-solid fa-map-marked-alt text-primary mb-4"></i>
                    <h6 class="mb-3">Kunjungan LA</h6>
                </a>
            </div>
            <div class="sub-item4 col-lg-3 col-sm-6 wow fadeInUp"style="display:none;">                                    
                <a class="cat-item rounded p-4" href="http://10.125.64.211/internal-kalgen/login" target="_blank">
                    <i class="fa fa-3x fas fa-syringe text-primary mb-4"></i>
                    <h6 class="mb-3">Spotmas</h6>
                </a>
            </div>     
            <div class="sub-item5 col-lg-3 col-sm-6 wow fadeInUp"style="display:none;" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="http://10.125.64.211/kalgen-system/login" target="_blank">
                    <i class="fa fa-3x fa-sharp fa-solid fa-sun text-primary mb-4"></i>
                    <h6 class="mb-3">Omega-Sinarmas</h6>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="request2">

                    <a class="cat-item rounded p-4">
                        <i class="icon2 fa fa-3x fa-solid fa-vial text-primary mb-4"></i> 
                        <div class="nav-bar">
                            <button class="humburger2">  
                                <div class="bar">
                                </div>
                            </button>
                        </div>                             
                        <h6 class="hsix2 mb-3">Request Sample</h6>
                    </a>
                </div> 
            </div>
            <div class="sub-item6 col-lg-3 col-sm-6 wow fadeInUp" style="display: none;">                                    
                <a class="cat-item rounded p-4" href="https://kalgenlab.co.id/" target="_blank">
                    <i class="fa fa-3x fa-solid fa-truck-fast text-primary mb-4"></i>
                    <h6 class="mb-3">Admin Logistic</h6>
                </a>
            </div>
            <div class="sub-item7 col-lg-3 col-sm-6 wow fadeInUp" style="display: none;">                                    
                <a class="cat-item rounded p-4" href="https://kalgenlab.co.id/" target="_blank">
                    <i class="fa fa-3x fa-sharp fa-solid fa-headset text-primary mb-4"></i>
                    <h6 class="mb-3">CR</h6>
                </a>
            </div>          
            <div class="sub-item8 col-lg-3 col-sm-6 wow fadeInUp" style="display: none;">                                    
                <a class="cat-item rounded p-4" href="https://kalgenlab.co.id/" target="_blank">
                    <i class="fa fa-3x fa-sharp fa-solid fa-pen-to-square text-primary mb-4"></i>
                    <h6 class="mb-3">IP</h6>
                </a>
            </div>  

        </div>

    </div>


</div>
<!-- Services End -->

</div>

</div>
<form action="/logout" method="POST">
    @csrf
    <button type="submit" class="logout"><i class="bi bi-box-arrow-right"> Logout</i></button>
</form>  
        <div class="copyright">
            &copy; <a class="border-bottom" href="">2024 KalgenInnolab</a>, All Right Reserved. 
        </div>



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<!--Change icon-->

<script>
//date-time
 function updateClock() {
     var now = new Date();
            
     var hours = now.getHours();
     var minutes = now.getMinutes();
     var seconds = now.getSeconds();
            
     var ampm = hours >= 12 ? 'PM' : 'AM';
            
     // Convert to 12-hour format
     hours = hours % 12;
     hours = hours ? hours : 12; // 0 should be displayed as 12
            
     hours = hours < 10 ? '0' + hours : hours;
     minutes = minutes < 10 ? '0' + minutes : minutes;
     seconds = seconds < 10 ? '0' + seconds : seconds;
            
     var timeString = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
     document.getElementById('clock').innerHTML = timeString;
            
     var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
     var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            
     var dayOfWeek = daysOfWeek[now.getDay()];
     var month = months[now.getMonth()];
     var dayOfMonth = now.getDate();
     var year = now.getFullYear();
            
     var dateString = dayOfWeek + ', ' + dayOfMonth + ' ' + month + ' ' + year;
     document.getElementById('date').innerHTML = dateString;
 }
            
 // Update the clock every second
 setInterval(updateClock, 1000);
            
 // Initial call to display the clock when the page loads
 updateClock();
</script>
<script>
//IP & LAB Dropdown
$(document).ready(function () {

    $(".request1").on("click", function(){
        //toogle 
        $(".request1").show('slow');
        $(".sub-item1").toggle('slow');
        $(".sub-item2").toggle('slow');
        $(".sub-item3").toggle('slow');
        $(".sub-item4").toggle('slow');
        $(".sub-item5").toggle('slow');
    });

});
</script>
<script>
//Request Sample dropdown
$(document).ready(function () {

    $(".request2").on("click", function(){
        //toogle 
        $(".request2").show('slow');
        $(".sub-item6").toggle('slow');
        $(".sub-item7").toggle('slow');
        $(".sub-item8").toggle('slow');
    });

});
</script> 



<script> 
// Script for the first hamburger menu
const menuBtn1 = document.querySelector(".request1");
const menuList1 = document.querySelector(".humburger1");

menuBtn1.addEventListener("click", function () {
menuBtn1.classList.toggle("is-active");
menuList1.classList.toggle("is-active");
});

menuList1.addEventListener("click", () => {
menuList1.classList.toggle("is-active");
});



// Script for the second hamburger menu
const menuBtn2 = document.querySelector(".request2");
const menuList2 = document.querySelector(".humburger2");

menuBtn2.addEventListener("click", function () {
menuBtn2.classList.toggle("is-active");
menuList2.classList.toggle("is-active");
});

menuList2.addEventListener("click", () => {
menuList2.classList.toggle("is-active");
});
</script>

<script>
// Script for the first hamburger menu
const menuBtn3 = document.querySelector(".humburger1");
const menuList3 = document.querySelector(".bar");

menuBtn3.addEventListener("click", function () {
menuBtn3.classList.toggle("is-active");
menuList3.classList.toggle("is-active");
});

menuList3.addEventListener("click", () => {
menuList3.classList.toggle("is-active");
});



// Script for the second hamburger menu
const menuBtn4 = document.querySelector(".humburger2");
const menuList4 = document.querySelector(".bar");

menuBtn4.addEventListener("click", function () {
menuBtn4.classList.toggle("is-active");
menuList4.classList.toggle("is-active");
});

menuList4.addEventListener("click", () => {
menuList4.classList.toggle("is-active");
});
</script>
@endsection
