<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */

/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

/* button */
.btn {
  border: none;
  color: white;
  padding: 5px 10px;
  /* font-size: 16px; */
  cursor: pointer;
  border-radius: 6px;
}
.default {background-color: #e7e7e7; color: black;} Gray 
.default:hover {background: #ddd;}

</style>

</style>
<body class="w3-black">


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Create</span></h1>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey" id="about">
    <div class="w3-panel w3-light-white w3-margin-top"></div>

    <div class="w3-container w3-border w3-large w3-margin">
    <div style="width: 900px;" class="w3-container w3-padding-32 w3-black">
        <form method="POST" action="/posts">
            @csrf

            <div class="mb-4 ">
                <label class="w3-large" for="title">Title : </label>
                <input class="w3-border w3-large w3-input" id="title" name="title">
            </div><br>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content : </label>
                <textarea class="w3-border w3-large w3-input" id="content" name="content"></textarea>
            </div><br>

            <div class="mb-4 w3-container w3-center">
                <button class="btn default w3-green">Create</button>
                <a href="/posts" class="w3-margin">Cancel</a>
            </div>

            
        </form>

    </div>
    </div>

  

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
