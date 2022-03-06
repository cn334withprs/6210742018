<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
/* button */
.btn {
  border: none;
  color: white;
  padding: 10px 10px;
  /* font-size: 16px; */
  cursor: pointer;
  border-radius: 6px;
}
.default {background-color: #e7e7e7; color: black;} Gray 
.default:hover {background: #ddd;}

</style>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/images/me.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Phitsinee W.</h1>
    <h4>Software Engineer.</h4>
    <img src="/images/me4.jpg" alt="phitsinee" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Phitsinee Wangthornklarng</h2>
    <hr style="width:500px" class="w3-opacity">

    <div class="w3-panel w3-light-white w3-margin-top">
    <span style="font-size:70px;line-height:0.6em;opacity:0.5">❝</span>
    <p class="w3-xlarge" style="margin-top:-20px"><i>Extremely motivated to constantly develop my skills, 
        learn something new and grow professionally. I am interested in learning more about software 
        testing.</i></p>
  </div>

    <!-- Education -->
    <h3 class="w3-padding-24 w3-text-light-grey">Education</h3>
    <h5><i class="w3-text-white"></i>THAMMASAT UNIVERSITY</h5>
    <h5><i class="w3-text-white"></i>3rd year student of Software Engineering</h5>
    
    <!-- My skills -->
    <h3 class="w3-padding-24 w3-text-light-grey">Skills</h3>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Programming languages such as Python, HTML, Java, JavaScript, CSS, PHP, SQL. </h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Object oriented analysis and design and Software pattern</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Basic knowledge of Computer Server Configuration.</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>React Native Application Development </h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Web Application Development</h5>

    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">Experience</h3>  
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Provided relevant information in detail including schedule and all features of the event.</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>The ability to searching and collecting data for document.</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>The ability to work under pressure and multi-task.</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Exceptional communication skills.</h5>
    <h5><i class="fa fa-circle fa-fw w3-text-grey w3-small w3-margin-right"></i>Responded with politeness and good etiquette to everyone</h5><br>

    <h3 class="w3-padding-24 w3-text-light-grey">Activities</h3> 
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <!-- <h1 class="text-4xl font-bold mb-4">My Blog</h1> -->

        @foreach($posts as $post)
            <article class="mb-2">
                <h4><a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->title }}</a></h4>
                <p class="text-md text-gray-600">{{ $post->content }}</p><br>

                <!-- <hr class="mt-2"> -->
            </article>
        @endforeach

        <button class="btn default"><a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Activities</a></button>

    </div>
  


</div>


  <!-- Contact Section -->
  <div class="w3-padding-24 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <h5><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> 78/135 Baan Fah Piyarom Village, Bueng Kham Phroi, 
Lam Luk Ka,Phathum Thani 12510</h5>
      <h5><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 093-791-5954</h5>
      <h5><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: phitsinee.wan@gmail.com</h5>
      <h5><i class="fa fa-facebook-official fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Ryu Phitsinee</h5>
      <h5><i class="fa fa-instagram fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>ryugew.tk</h5>
    </div><br>

    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
