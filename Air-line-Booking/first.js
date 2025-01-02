

function store() {
    let output1 = `
    <div class="show">
        <section class="mega">
        
            <ul class="m">
            <h2>BOOK</h2>
                <li><a href="search.html">Search Flight</a></li>
                <li><a href="cargo.html">Fare Look</a></li>
                <li><a href="#">Corporate Travel</a></li>
                <li><a href="#">Group Booking</a></li>
                <li><a href="#">Special Offer</a></li>
            </ul>
            <ul class="m2">
                <li><a href="#">Gift Card</a></li>
                <li><a href="#">Travel Insurance</a></li>
                <li><a href="#">Cargo</a></li>
            </ul>
        </section>
        <section class="mega2">
        
            <ul class="m3">
            <h2>MANGE</h2>
                <li><a href="search.html">Check In Online</a></li>
                <li><a href="cargo.html">Manage Booking</a></li>
                <li><a href="#">Seat Selection & Upgradation</a></li>
                <li><a href="#">Request Refund</a></li>
            </ul>
            <ul class="m4">
                <li><a href="#">Flight Status</a></li>
                <li><a href="#">Track Your Bag</a></li>
                <li><a href="#">Fog Care</a></li>
            </ul>
        </section>
    </div>`;
    document.getElementById('nave').innerHTML = output1;
}
function closenav() {
    document.getElementById('nave').innerHTML = '';
}
function topclose(){
    let h=window.event.clientY;
    if(h<20){
        document.getElementById('nave').innerHTML='';  

    }
}
function store1(){
    let output2 = `
    <div class="show1">
        <section class="mega1">
        
            <ul class="m1">
            <h2>WHERE WE FLY </h2>
                <li><a href="search.html">ROUTE MAP</a></li>
                <li><a href="cargo.html">NONSTOP INTERNATIONAL FLIGHT</a></li>
                <li><a href="#">POPULAR FLIGHTS</a></li>
                <li><a href="#">PARTNER AIRLINES</a></li>
                <li><a href="#">SPECIAL OFFER</a></li>
            </ul>
            <img src="city2.jpeg" style="height:250px;width:250px">
            <img src="city2.jpeg" style="height:250px;width:250px">
        </section>
        <section class="mega2">
        
        </section>
    </div>`;
    document.getElementById('nave').innerHTML = output2;
}
function closenav() {
    document.getElementById('nave').innerHTML = '';
}
function topclose(){
    let h=window.event.clientY;
    if(h<20){
        document.getElementById('nave').innerHTML='';  

    }
}
function store1(){
    let output2 = `
    <div class="show1">
        <section class="mega1">
        
            <ul class="m1">
            <h2>WHERE WE FLY </h2>
                <li><a href="search.html">BAG</a></li>
                <li><a href="cargo.html">NONSTOP INTERNATIONAL FLIGHT</a></li>
                <li><a href="#">POPULAR FLIGHTS</a></li>
                <li><a href="#">PARTNER AIRLINES</a></li>
                <li><a href="#">SPECIAL OFFER</a></li>
            </ul>
            <img src="city2.jpeg" style="height:250px;width:250px">
            <img src="city2.jpeg" style="height:250px;width:250px">
        </section>
        <section class="mega2">
        
        </section>
    </div>`;
    document.getElementById('nave').innerHTML = output2;
}
function closenav() {
    document.getElementById('nave').innerHTML = '';
}
function topclose(){
    let h=window.event.clientY;
    if(h<20){
        document.getElementById('nave').innerHTML='';  

    }
}
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) { slideIndex = 1 } 
    if (n < 1) { slideIndex = slides.length } 
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex - 1].style.display = "block"; 
}
setInterval(function() {
    plusSlides(1);
}, 2000); 
