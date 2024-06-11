<link rel="stylesheet" href="../Styles/styles.css">
<body>
    
<?php
        require_once("header.php")
    ?>



        <section class="sectionHome" id="home">
          <div class="videoContainer">
            <div class="video">
              <video src="../Videos/Porche911.mp4" autoplay muted loop></video>
            </div>
          </div>
            <div class="videoTextContainer">
                <div class="items">
                    <div class="item">
                        <h4 class="subTitle">Explore the new 911</h4>
                        <h1 class="title">The one and always</h1>
                        <div class="description">
                            <p>Lorem ipsum dolor, sit amet 
                            consectetur adipisicing elit. Nobis, doloremque?</p>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aspernatur obcaecati placeat delectus fugit modi impedit 
                            nemo aperiam nobis, at vero. Lorem, ipsum dolor.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Ad, iusto.
                            </p>
                        </div>
                        <div class="buttons">
                            <a class="button1" href="#">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="sectionAbout" id="about">
  <div class="aboutContainer">
      <div class="texts">
        <h4 class="subtitle">Inspired by the sense of freedom</h4>
        <h1 class="title">Master craftsmanship</h1>
        <p>Lorem ipsum dolor sit amet consectetur elit. 
          Accusantium minus reiciendis laborum rerum a, 
          voluptatem itaque ducimus molestias.</p>
      </div>
  </div>
</section>




<section class="sectionSlideshow">
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="../Images/porscheColorInterior2.jpg" style="width:100%">
    <div class="text">Carrrr</div>
  </div>
  <div class="mySlides fade">
    <img src="../Images/porscheColorInteriorRight.webp" style="width:100%">
    <div class="text">Car?</div>
  </div>
  <div class="mySlides fade">
    
    <img src="../Images/porscheInterior.jpg" style="width:100%">
    <div class="text">Carr woo</div>
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</section>




<section class="sectionServices" id="services">
  <div class="container">
    <div class="items">
      <div class="item">
        <div class="list">
          <h1 class="title active">Purchse</h1>
          <h1 class="title">Finance</h1>
          <h1 class="title">Service</h1>
          
        </div>
        <div class="list-p">
          <p>Vehicles</p>
          <p>Accessories</p>
          <p>Lifesryle collection</p>
          <p>Digital Extras</p>
          <p>Classics</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section products" id="products">
  <div class="container">
    <div class="heading">
      <h1 class="title">
        Our Vehicles
      </h1>
    </div>
    <div class="items">
      <div class="item">
        <h1 class="carTitle">
          Car Model yes
        </h1>
        <p class="price">
          Starting at 50$
        </p>
        <p class="subtitle">
          GroundBreaking
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior2.jpg" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          Wow car model
        </h1>
        <p class="price">
          Starting at 60$
        </p>
        <p class="subtitle">
          Amazing
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInteriorRight.webp" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          Another car model
        </h1>
        <p class="price">
          Starting at 70$
        </p>
        <p class="subtitle">
          Maqnificent
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior.jfif" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          So many models
        </h1>
        <p class="price">
          Starting at 80$
        </p>
        <p class="subtitle">
          Resourceful
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior2.jpg" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          Car model
        </h1>
        <p class="price">
          Starting at 50$
        </p>
        <p class="subtitle">
          GroundBreaking
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior2.jpg" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          Model car
        </h1>
        <p class="price">
          Starting at 60$
        </p>
        <p class="subtitle">
          Amazing
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInteriorRight.webp" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          A model
        </h1>
        <p class="price">
          Starting at 70$
        </p>
        <p class="subtitle">
          Maqnificent
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior.jfif" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
      <div class="item">
        <h1 class="carTitle">
          911
        </h1>
        <p class="price">
          Starting at 80$
        </p>
        <p class="subtitle">
          Resourceful
        </p>
        <div class="carImage">
          <img src="../Images/porscheColorInterior2.jpg" alt="">
        </div>
        <div class="viewButton">View modle</div>
      </div>
    </div>

    <div class="moreButton"> Load more</div>

  </div>
</section>

<section class="socials" id="socials">
  <div class="container">
    <div class="heading">
      <h1 class="title">Follow Us!</h1>
    </div>
    <div class="items">
      <a href="" class="icon">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="icon">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a href="" class="icon">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="icon">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="" class="icon">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="icon">
        <i class="fab fa-tiktok"></i>
      </a>
    </div>
  </div>
</section>

<?php 
      require_once("footer.php")
    ?>


</body>
<script src="../Scripts/script.js"></script>
</html>