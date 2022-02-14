<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  
	<!-- My CSS -->
    <link rel="stylesheet" href="/css/main.css">
	  <link rel="stylesheet" href="/css/loop.css">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	  
	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/Starter/favicon.ico" type="image/x-icon">
	  
	<!-- AOS CSS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	  
	<!-- JQuery LightSlider CSS -->
    <link rel="stylesheet" href="/css/lightslider.css">
    
    <!-- Social media share script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    
	<!-- JQuery LightSlider Script -->
    <script src="/Js/Jquery.js"></script>
    <script src="/Js/lightslider.js"></script>
	<script type="text/javascript" src="/Js/script.js"></script>

    

    <title>Miarao </title>
  </head>

  <body>

    @include('partial.navbar')

    <div>
        @yield('container')
    </div>
	  
	  <!-- Footer -->
	  <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="foot-item">
                  <img src="/img/Starter/Logo-Navi.svg" alt="" >
                    <p>
                        &copy; 2022 Miarao. All rights Reserved
                    </p>
                  </div>
                </div>
            </div>
        </div>
        </footer>

     <!-- AOS Animation JS -->
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            once: true,
        });
        </script>
	  
	  <!-- Navbar Scroll Sticky Top JS -->
	  <script>
          window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle('sticky', window.scrollY > 1)
        });
        </script>
	  
	  <!-- Search Bar JS -->
	 <script>
          $(document).ready(function(){
            $(".searchbar").click(function(event){
              event.stopPropagation();
              $(".icon").addClass("active");
              $("input[type='text']").addClass("active");
            });
            $(document).click(function (e) {
              $(".icon").removeClass("active");
              $("input[type='text']").removeClass('active');
          });
          });
        </script>

  </body>
</html>