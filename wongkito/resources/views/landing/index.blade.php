<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WongKito</title>
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css"/>

    <!-- jQuery -->
    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!-- lightslider css-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightslider.css">
    
    <script type="text/javascript" src="{{ asset('assets') }}/js/floating-wpp.min.js"></script>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

     <!-- Feather Icons -->
     <script src="https://unpkg.com/feather-icons"></script>

     <!-- favicon -->
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/floating-wpp.min.css">

  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <!-- light slider js -->
    <script src="{{ asset('assets') }}/js/lightslider.js"></script>

  </head>
<body>

    <!-- Navbar Start -->
   <nav class="navbar"data-aos="fade-down">
        <a href="#" class="navbar-logo">Wong<span>Kito</span></a>

        <div class="navbar-nav">
         <a href="#home">Home</a>
         <a href="#superiority">Superiority</a>
         <a href="#menu">Our Menu</a>
         <a href="#contact">Contact us</a>
        </div>

        <div class="navbar-extra">
            <a href="https://wa.link/9udmxm" class="chat">Whatsapp Chat</a>
            <a href="#"id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    
        
    <!-- Hero Section -->

    <section class="hero" id="home">
    
       <main class="content">
        <h1 data-aos="fade-right" data-aos-duration = "10000">Your Best Brunch</h1>
        <p data-aos="fade-down">Pempek is a traditional food that comes from Palembang, <br> South Sumatra Province<br></p>
        </p>
        <a href="https://wa.link/9udmxm" class="cta"data-aos="fade-up">Order Now</a>
       </main>
       
    </section>

    <!-- Superiorty Section  -->
     <section id="superiority" class="superiority">

    <div class="title_superiority" data-aos="zoom-in"" >
       <h2>Why WongKito ? <span> We're Qualified </span></h2>
    </div>

 <div class="row"data-aos="fade-down">
    <div class="icons-card" data-aos="zoom-in"  >
        <img src="{{ asset('assets/images/like.png') }}" alt="Delicious" class="icons-card-img">
        <h3 class="icons-card-title">Delicious</h3>
        <p class="icons-card-desc">we use quality fish so the aroma and taste is very Delicious</p>
    </div>
    <div class="icons-card" data-aos="zoom-in"  >
        <img src="{{ asset('assets/images/costumer.png') }}" alt="Delicious" class="icons-card-img">
        <h3 class="icons-card-title">Satisfied Customer</h3>
        <p class="icons-card-desc"> Served over millions of happy customers</p>
    </div>
    <div class="icons-card" data-aos="zoom-in" >
        <img src="{{ asset('assets/images/fast-delivery.png') }}" alt="Delicious" class="icons-card-img">
        <h3 class="icons-card-title">Fast Delivery</h3>
        <p class="icons-card-desc">We always deliver orders on time</p>
    </div>
 </div>
 <div class="row"data-aos="fade-down">
     <div class="icons-card" data-aos="zoom-in"  >
        <img src="{{ asset('assets/images/phone-call.png') }}" alt="Delicious" class="icons-card-img">
        <h3 class="icons-card-title">Friendly Crew </h3>
        <p class="icons-card-desc">We love to  brighten your day by serving the best Brunch</p>
    </div>
    <div class="icons-card" data-aos="zoom-in"  >
        <img src="{{ asset('assets/images/pay.png') }}" alt="Delicious" class="icons-card-img">
        <h3 class="icons-card-title">Low-priced</h3>
        <p class="icons-card-desc">Not only does it taste good, the price is affordable</p>
    </div>
    </div>
    </section>
    
    <!-- Menu Section -->
    <section id="menu" class="menu">
        <div class="card-menu-title">
          <h4 data-aos="zoom-in"data-aos-duration="10000" >Our Menu<span>Pick Your Favourite</span></h4>
        </div>
  
        <ul id="autoWidth" class="cs-hidden">
          <li class="item-a">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/adaan.png') }}" alt="adaan"">
                <div class="overlay">
                  <a href=" https://wa.link/xuqykx" class="buy-btn">Buy Now </a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek adaan</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li>

          <li class="item-b">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/lenjer2.png') }}" alt="">
                <div class="overlay">
                  <a href="https://wa.link/um2itg" class="buy-btn">Buy Now</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek lenjer</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li> 

          <li class="item-c">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/kapal2.png') }}" alt="">
                <div class="overlay">
                  <a href="https://wa.link/ky0fwn" class="buy-btn">Buy Now</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek kapal selem</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li>

          <li class="item-d">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/kriting2.png') }}" alt="">
                <div class="overlay">
                  <a href="https://wa.link/4x33oc" class="buy-btn">Buy Now</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek kriting</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li>

          <li class="item-e">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/kulit2.png') }}" alt="">
                <div class="overlay">
                  <a href="https://wa.link/b6eyg9" class="buy-btn">Buy Now</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek kulit</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li>

          <li class="item-f">
            <div class="box">
              <div class="slide-img">
                <img src="{{ asset('assets/images/pastel2.png') }}" alt="">
                <div class="overlay">
                  <a href="https://wa.link/nhuhod" class="buy-btn">Buy Now</a>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="">Pempek pastel</a><span>WongKito</span>
                </div>
                <a href="" class="price">25.000</a>
              </div>
            </div>
          </li>
        </ul> 
    </section>
    
    <!-- Contact Us -->
    <section id="contact" class="contact">
        <h4 data-aos="fade-down"data-aos-duration="10000" >Contact<span>Us</span></h4>
         <p class="desc-contact" data-aos="zoom-in"data-aos-duration="10000">give us suggestions and criticism below</p>

        <div class="row" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127155.19152018463!2d119.28745684335937!3d-5.1679081000000044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d0d07f7f187%3A0xcb81e40b49a35302!2sPempek%20Leany!5e0!3m2!1sid!2sid!4v1691302551314!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen="" loading="lazy" class="map"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

          <form  method="POST" action="{{route ('SimpanCustomer')}}" id="myForm">
            @csrf
            <div class="input-group">
              <i class="fa-solid fa-user"></i>
               <label for="customername"></label>
              <input type="text" placeholder="Enter your Name" id="customername" name="name">
            </div>

            <div class="input-group">
              <i class="fa-solid fa-envelope"></i>
              <label for="customeremail"></label>
              <input type="email" placeholder="Email" id="customeremail" name="email">
            </div>

            <div class="input-group">
              <i class="fa-solid fa-phone"></i>
              <label for="customernumber"></label>
                <input type="number" placeholder="Number" id="customernumber" name="number">
            </div>

            <div class="input-group">
              <i class="fa-solid fa-message"></i>
              <label for="customermessage"></label>
              <input type="text" placeholder="Message" id="customermessage" name="message">
            </div>
            
            <button type="submit" class="btn" id="submitBtn">Send</button>
            
          </form>
        </div>
    </section>
     <div id="myDiv"></div>

    <!-- Footer -->
    <footer>
      <div class="social">
        <a href="https://www.facebook.com/yuliana.nadiyah?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-lg"></i></a>
        <a href="https://www.instagram.com/_wongkito20/"><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a href="https://wa.link/nhuhod"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
        <a href=""><i class="fa-brands fa-twitter fa-lg"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#superiority">Superiority</a>
        <a href="#menu">Our Menu</a>
        <a href="#contact">Contact us</a>
      </div>

      <div class="credit">
        <p>Created by <a href="https://github.com/Nurulfauziyah">nurulfauziyah</a>. | &copy; 2023.</p>
      </div>
    </footer>

       <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper JS -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>

   <!-- Feather Icons -->
    <script>
        feather.replace()
      </script>

<!-- AOS -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1500,
      });
    </script>

    <script type="text/javascript">
  $(function () {
$('#myDiv').floatingWhatsApp({
    phone: '6285331082983',
    popupMessage: 'Hello, how can we help you?',
    message: "I'd like to order a pempek",
    showPopup: true
});
  });
</script>
<!-- SweetAlert Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
   document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('myForm').addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
               title: "ThankYouu!",
  text: "we will read the message you sent",
  icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
</script>

      <!-- my Java Script -->
    <script src="{{ asset('assets') }}/js/script.js "></script>  
     <!-- my Java Script -->
    <script src="{{ asset('assets') }}/js/search.js "></script>  
    
</body>
</html>