<?php
	include 'templates/parts/header.php';
?>
<html>
    <head>
        <title>Custom Slider</title>
    </head>
    <body>
       <center><h1>Cars/bagnole(québécois)</h1></center>
       <center><p>Un site pour les VRAIS mecs<p></center>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
            </div>

            <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
            <img class="slide-img" src="./templates/assets/img/image1.png">

            <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
            <img class="slide-img" src="./templates/assets/img/image2.png">

            <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
            <img class="slide-img" src="./templates/assets/img/image3.png">
        </div>
        <main>
            <!-- Additional images -->
            <div class="additional-images">
                <img class = "bagnole" src="./templates/assets/img/car1.jpg" alt="Image 4">
                <img class = "bagnole" src="./templates/assets/img/car2.jpg" alt="Image 5">
                <img class = "bagnole" src="./templates/assets/img/car3.jpg" alt="Image 6">
            </div>
        </main>
    </body>
</html>
<?php
	include 'templates/parts/footer.php'
?>