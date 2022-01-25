<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	 <link rel="shortcut icon" href="/img/Starter/favicon.ico" type="image/x-icon">
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/lightslider.css">
    
    <!-- Social media share script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    

    <script src="/Js/Jquery.js"></script>
    <script src="/Js/lightslider.js"></script>

    

    <title>Miarao | {{ $title }}</title>
  </head>

  <body>

    @include('partial.navbar')

    <div>
        @yield('container')
    </div>
	  
	  <footer id="footer" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="foot-item">
                  <img src="/img/Starter/Logo-Navi.svg" alt="" >
                    <p>
                        Copyright &copy; 2022 Miarao. All rights Reserved
                    </p>
                  </div>
                </div>
            </div>
        </div>
        </footer>

    <script type="text/javascript" src="/Js/script.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            once: true,
        });
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  </body>
</html>