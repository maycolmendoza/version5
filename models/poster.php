<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0&appId=262632362191543&autoLogAppEvents=1" nonce="3oklABjF"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="./utils/css/poster.css" />
<section class="section wow fadeInUp p-4" id="forms" data-wow-duration=".5s" style="margin-right: 5px;margin-bottom: 2px;padding:2px;margin-left: 5px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  mb-5 mb-lg-0">
            <article class="row mb-5">
					<div class="col-12">
          <div class="col-12 mx-auto">
          <iframe src="http://localhost:63434/" width="100%" height="1200px" frameborder="0" style="background-color: none;"></iframe>
          </div>
          </div>
            </article>
            </div>
            <aside class="col-lg-4">
                <!-- categories -->
                <div class="widget wow fadeInLeft p-4"  data-wow-duration=".5s">
                    <h5 class="widget-title" ><span><?php echo date('d F Y');?> 
</span>,<span id="MyClockDisplay" class="clock" onload="showTime()"></span>
</h5>
                    <hr class="sep-2" />
                    <script>
                        $(document).ready(function() {
                            navigator.geolocation.getCurrentPosition(success, error);
                            function success(pos) {
                                var lat = pos.coords.latitude;
                                var long = pos.coords.longitude;
                                weather(lat, long);
                            }
                            function error() {
                                console.log("There was an error");
                            }
                            function weather(lat, long) {
                                var URL = `https://fcc-weather-api.glitch.me/api/current?lat=${lat}&lon=${long}`;
                                $.getJSON(URL, function(data) {
                                    display(data);
                                });
                            }
                            function display(data) {
                                var city = data.name.toUpperCase();
                                var temp =
                                    Math.round(data.main.temp_max) +
                                    "&deg; C | " +
                                    Math.round(Math.round(data.main.temp_max) * 1.8 + 32) +
                                    "&deg; F";
                                var desc = data.weather[0].description;
                                var date = new Date();

                                var months = [
                                    "January",
                                    "February",
                                    "March",
                                    "April",
                                    "May",
                                    "June",
                                    "July",
                                    "August",
                                    "September",
                                    "October",
                                    "November",
                                    "December"
                                ];
                                var weekday = new Array(7);
                                weekday[0] = "Sunday";
                                weekday[1] = "Monday";
                                weekday[2] = "Tuesday";
                                weekday[3] = "Wednesday";
                                weekday[4] = "Thursday";
                                weekday[5] = "Friday";
                                weekday[6] = "Saturday";

                                var font_color;
                                var bg_color;
                                if (Math.round(data.main.temp_max) > 25) {
                                    font_color = "#d36326";
                                    bg_color = "#f3f5d2";
                                } else {
                                    font_color = "#44c3de";
                                    bg_color = "#eff3f9";
                                }

                                if (data.weather[0].main == "Sunny" || data.weather[0].main == "sunny") {
                                    $(".weathercon").html(
                                        "<i class='fas fa-sun' style='color: #ffb703;'></i>"
                                    );
                                } else {
                                    $(".weathercon").html(
                                        "<i class='fas fa-cloud' style='color: #f4a261;'></i>"
                                    );
                                }
                                var minutes =
                                    date.getMinutes() < 11 ? "0" + date.getMinutes() : date.getMinutes();
                                var date =
                                    weekday[date.getDay()].toUpperCase() +
                                    " | " +
                                    months[date.getMonth()].toUpperCase().substring(0, 3) +
                                    " " +
                                    date.getDate() +
                                    " | " +
                                    date.getHours() +
                                    ":" +
                                    minutes;
                                $(".location").html(city);
                                $(".temp").html(temp);
                                $(".date").html(date);
                                $(".box").css("background", bg_color);
                                $(".location").css("color", font_color);
                                $(".temp").css("color", font_color);
                            }
                        });
                    </script>
                    <!-- partial:index.partial.html -->
          <div class="box text-center">
            <div class="card-block box">
              <div class="weathercon"></div>
              <div class="diagonalpath card xld">
              <h4 class="card-title"><h2 class="location">Active su Ubicación </h2>  </h4>
              <h6 class="temp card-subtitle"></h6>
              <p class="date card-link text-center"></p>
            </div>
            </div>
          </div>
                    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                    <!------------->
                </div>
                <!-- latest post -->
                <div class="widget wow fadeInLeft p-4"  data-wow-duration=".5s" >
                    <h5 class="widget-title"><span>Facebook</span></h5>
                    <hr class="sep-2" />
                    <!-- post-item -->
                    <ul class="list-unstyled widget-list">
                        <li class="media widget-post align-items-center">
                            <div class="media-body">
    <!--facebook-->
    <div class="fb-page" style=" border-radius: 5px !important;"  data-href="https://www.facebook.com/InaigemPeru" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/InaigemPeru" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/InaigemPeru">Instituto Nacional de Investigación en Glaciares y Ecosistemas de Montaña</a></blockquote></div>
    <!--fin facebook--->
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<style>
  .diagonalpath{
    clip-path: polygon(0% 0%, 56.7% 14.5%, 100% 27.3%, 100% 85%, 100% 100%, 0% 100%, 0% 85%, 0% 15%);
    background-color: #fff !important;
 
  }
  .xld{

    margin: 0px !important;
    padding: 4px;
    margin-bottom: 4px !important;
  }
  .weathercon{
    text-align: right !important;
    margin: 4px !important;
    padding: 4px;
    margin-bottom: 4px !important;
    font-size: clamp(15px,25px,18px);

  }
  h6 .temp{
    color: #0067C0 !important;
  }
  h4 .date{
    color: #0067C0 !important;
  }
  .box{
    border-radius: 10px !important;
  }
    hr.sep-2 {
    border: 3px !important; 
    height: 3px !important;
    background-color: #0067C0;
}
iframe>#facebookrss {
    overflow-y: hidden;
    overflow-x: hidden;
    overflow:hidden;
  }
  iframe{
 
    overflow-y: hidden;
    overflow-x: hidden;
    overflow:hidden;
  }
  h2.location{
    font-size: clamp(15px,30px,18px) !important;
  }

.widget {

    margin-bottom: 40px;
}

.mb-10 {
  margin-bottom: 10px !important;
}

.mb-20 {
  margin-bottom: 20px !important;
}

.mb-30 {
  margin-bottom: 30px !important;
}

.mb-40 {
  margin-bottom: 40px !important;
}

.mb-50 {
  margin-bottom: 50px !important;
}

.mb-60 {
  margin-bottom: 60px !important;
}

.mb-70 {
  margin-bottom: 70px !important;
}

.mb-80 {
  margin-bottom: 80px !important;
}

.mb-90 {
  margin-bottom: 90px !important;
}

.mb-100 {
  margin-bottom: 100px !important;
}

.content * {
  word-break: break-word;
  overflow-wrap: break-word;
}
.content img {
  max-width: 100%;
}
.content h1,
.content h2,
.content h3,
.content h4,
.content h5,
.content h6 {
  font-weight: 500;
}
.content strong {
  font-weight: 600;
}
.content a {
  color: #696c6d;
  border-bottom: 1px dotted #ddd;
}
.content a:hover {
  color: #ce8460;
}
.content ol,
.content ul {
  padding-left: 20px;
}
.content ol li,
.content ul li {
  margin-bottom: 10px;
}
.content ul {
  padding-left: 0;
  margin-bottom: 20px;
  list-style-type: none;
}
.content ul li {
  padding-left: 20px;
  position: relative;
}
.content ul li::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  border-radius: 50%;
  background: #ce8460;
  left: 3px;
  top: 8px;
}
.content table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  border: 1px solid #ddd;
}
.content table td,
.content table th {
  padding: 0.75rem;
  vertical-align: top;
  margin-bottom: 0;
}
.content tr:not(:last-child) {
  border-bottom: 1px solid #ddd;
}
.content th {
  font-weight: 500;
}
.content thead {
  background: #f0f0f0;
  margin-bottom: 0;
}
.content thead tr {
  border-bottom: 1px solid #ddd;
}
.content tbody {
  background: #fdfdfd;
  margin-bottom: 0;
}
.content .notices {
  margin: 2rem 0;
  position: relative;
  overflow: hidden;
}
.content .notices p {
  padding: 10px;
  margin-bottom: 0;
}
.content .notices p::before {
  position: absolute;
  top: 2px;
  color: #fff;
  font-family: "themify";
  font-weight: 900;
  content: "\e717";
  left: 10px;
}
.content .notices.note p {
  border-top: 30px solid #6ab0de;
  background: #f0f0f0;
}
.content .notices.note p::after {
  content: "Note";
  position: absolute;
  top: 2px;
  color: #fff;
  left: 2rem;
}
.content .notices.tip p {
  border-top: 30px solid #78C578;
  background: #f0f0f0;
}
.content .notices.tip p::after {
  content: "Tip";
  position: absolute;
  top: 2px;
  color: #fff;
  left: 2rem;
}
.content .notices.info p {
  border-top: 30px solid #F0B37E;
  background: #f0f0f0;
}
.content .notices.info p::after {
  content: "Info";
  position: absolute;
  top: 2px;
  color: #fff;
  left: 2rem;
}
.content .notices.warning p {
  border-top: 30px solid #E06F6C;
  background: #f0f0f0;
}
.content .notices.warning p::after {
  content: "Warning";
  position: absolute;
  top: 2px;
  color: #fff;
  left: 2rem;
}
.content blockquote {
  font-size: 20px !important;
  color: #696c6d;
  padding: 20px 40px;
  border-left: 2px solid #ce8460;
  margin: 40px 0;
  font-weight: bold;
  background: #f0f0f0;
}
.content blockquote p {
  margin-bottom: 0 !important;
}
.content pre {
  display: block;
  padding: 9.5px;
  margin: 10px 0px 10px;
  white-space: pre-wrap;
}
.content code {
  margin-bottom: 0 !important;
  font-size: 100%;
}

.code-tabs {
  border: 1px solid #ddd;
  overflow: hidden;
  margin-bottom: 20px;
}
.code-tabs .nav-tabs {
  margin-bottom: 0;
}
.code-tabs .nav-tabs .nav-item {
  padding-left: 0;
  border-right: 1px solid #ddd;
}
.code-tabs .nav-tabs .nav-item .nav-link {
  text-decoration: none;
  font-weight: 500;
  border: 0;
}
.code-tabs .nav-tabs .nav-item::before {
  display: none;
}
.code-tabs .nav-tabs .nav-item.active {
  background: #ce8460;
}
.code-tabs .nav-tabs .nav-item.active .nav-link {
  color: #fff;
}
.code-tabs .tab-content {
  padding: 20px 15px;
}

.title-bordered {
  border: 1px solid #ddd;
  border-radius: 40px;
  padding: 2px;
}
.title-bordered h1,
.title-bordered h2,
.title-bordered h3,
.title-bordered h4,
.title-bordered h5,
.title-bordered h6 {
  background: #f0f0f0;
  padding: 10px 25px;
  margin-bottom: 0;
  border-radius: inherit;
  display: inline-block;
}

.form-group label {
  font-size: 13px;
  color: #1c1d1f;
}
.form-group .form-control {
  border-color: #ddd;
}
.form-group .form-control:focus {
  outline: 0;
  box-shadow: none;
  border-color: #ce8460;
}
.form-group textarea.form-control {
  height: 120px;
}

.widget {
 
  margin-bottom: 40px;
}
.widget-title {
  position: relative;
  margin-bottom: 15px;
}
.widget-title span {
 
  position: relative;
  padding-right: 5px;
  z-index: 1;
}
.widget-title::before {
  position: absolute;
  content: "";
  right: 0;
  height: 1px;
  width: 100%;

  top: 50%;
}
.widget-search {
  position: relative;
}
.widget-search input {
  border: 0;
  border-bottom: 1px dotted #ddd;
  width: 100%;
  height: 40px;
}
.widget-search input:focus {
  outline: 0;
}
.widget-search input::-moz-placeholder {
  font-size: 90%;
}
.widget-search input::placeholder {
  font-size: 90%;
}
.widget-search button {
  height: 30px;
  width: 30px;
  line-height: 30px;
  display: inline-block;
  padding: 0;
  background: #f0f0f0;
  color: #1c1d1f;
  text-align: center;
  border-radius: 50%;
  position: absolute;
  right: 0;
  top: 5px;
  border: 0;
  font-size: 12px;
}
.widget-list li {
  padding: 5px 0;
}
.widget-list li:not(:last-child) {
  border-bottom: 1px dotted #ddd;
}
.widget-list li a {
  color: #1c1d1f;
}
.widget-list li a:hover {
  color: #ce8460;
}
.widget-list-inline li {
  margin-bottom: 10px;
}
.widget-list-inline li a {
  padding: 2px 10px;
  border: 1px solid #ddd;
  border-radius: 40px;
  display: block;
  color: #696c6d;
}
.widget-list-inline li a:hover {
  border-color: #ce8460;
  background: #ce8460;
  color: #fff;
}
.widget-post {
  padding: 15px 0 !important;
}
.widget-post img {
  height: 60px;
  width: 60px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
}



.widget-title {
    position: relative;
    margin-bottom: 15px;
    font-family: flama-bold !important;
    font-size: clamp(18px,25px,20px);
    color: #0067C0;
}

.widget-title span {

    position: relative;
    padding-right: 5px;
    z-index: 1;
    font-family: flama-bold !important;
}

.widget-title::before {
    position: absolute;
    content: "";
    right: 0;
    height: 1px;
    width: 100%;

    top: 50%;
}

.widget-search {
    position: relative;
}

.widget-search input {
    border: 0;
    border-bottom: 1px dotted #ddd;
    width: 100%;
    height: 40px;
}

.widget-search input:focus {
    outline: 0;
}

.widget-search input::-moz-placeholder {
    font-size: 90%;
}

.widget-search input::placeholder {
    font-size: 90%;
}

.widget-search button {
    height: 30px;
    width: 30px;
    line-height: 30px;
    display: inline-block;
    padding: 0;
    background: #f0f0f0;
    color: #1c1d1f;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    right: 0;
    top: 5px;
    border: 0;
    font-size: 12px;
}

.widget-list li {
    padding: 5px 0;
}

.widget-list li:not(:last-child) {
    border-bottom: 1px dotted #ddd;
}

.widget-list li a {
    color: #1c1d1f;
}

.widget-list li a:hover {
    color: #ce8460;
}

.widget-list-inline li {
    margin-bottom: 10px;
}

.widget-list-inline li a {
    padding: 2px 10px;
    border: 1px solid #ddd;
    border-radius: 40px;
    display: block;
    color: #696c6d;
}

.widget-list-inline li a:hover {
    border-color: #ce8460;
    background: #ce8460;
    color: #fff;
}

.widget-post {
    padding: 15px 0 !important;
}

.widget-post img {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
}


hr.sep-2 {
    border: 0; 
    height: 1px; 
    background-color: #0067C0;
}
hr{
    border: 0; 
    height: 1px; 
    background-color: #0067C0 !important;
}
/*fin seccion 3*/



.dot
{
    position: absolute;
    width: 16px;
    height: 16px;
    top: 12px;
    rigth: 5px;

    background: #000;
    border-radius: 50%;
    transform: translateX(0);
    animation: dot 2.8s infinite;
}
@keyframes dot
{
50%
    {
    transform: translateX(96px);
    }
}
.main {
margin-top: 50px;
}
.weather-panel {
background-color:#F6FAFF;
background-size: cover;
border-radius: 20px;
box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 0.33);
color: #0067C0;
overflow: hidden;
position: relative;
}
.weather-panel small {
color: inherit;
font-size: clamp(15px,30px,18px);
}
.weather-panel ul.forecast > li {
border-top: 1px solid #fff;
}
.weather-panel .temperature > span {
font-size: clamp(20px,30px,25px);
}
.temp{
   font-size: clamp(15px,30px,18px);
}
.wave {
opacity: 0.3;
position: absolute;
top: 120%;
right: 50%;
background: #E8E9EA;
width: 300px;
height: 300px;
margin-left: -250px;
margin-top: -250px;
transform-origin: 50% 48%;
border-radius: 43%;
animation: drift 3000ms infinite linear;
z-index: 1;
}

.wave.-three {
animation: drift 5000ms infinite linear;
z-index: 2 !important;
opacity: 0.2;
}

.wave.-two {
animation: drift 7000ms infinite linear;
opacity: 0.1;
z-index: 3 !important;
}

@keyframes drift {
from {
transform: rotate(0deg);
}
from {
transform: rotate(360deg);
}
}


</style>