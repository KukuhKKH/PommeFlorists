<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('assets/css/prj2.css') }}">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <title>Pomme Florists</title>
   <style>
      .menu_content {
         background-image: url("{{ asset('assets/img/bunga.jpg') }}");
         background-repeat: no-repeat;
         background-position: top center;
         margin: 5px;
         height: 480px;
      }

      .menu_content2 {
         background-image: url("{{ asset('assets/img/bucket.jpg') }}");
         background-repeat: no-repeat;
         background-position: top center;
         margin: 5px;
         height: 480px;
      }

      .menu_content3 {
         background-image: url("{{ asset('assets/img/kering.jpg') }}");
         background-repeat: no-repeat;
         background-position: top center;
         margin: 5px;
         height: 480px;
      }

      .menu_content4 {
         background-image: url("{{ asset('assets/img/papan.jpg') }}");
         background-repeat: no-repeat;
         background-position: top center;
         margin: 4px;
         height: 480px;

      }
   </style>
</head>

<body>
   <div id="art-page-background-middle-texture">
      <div id="art-main">
         <div class="cleared reset-box"></div>
         <div class="art-box art-sheet">
            <div class="art-box-body art-sheet-body">
               {{-- Header --}}
               <div class="art-header">
                  <div class="art-headerobject"></div>
                  <div class="art-logo">
                     <h1 class="art-logo-name">
                        <a href="#">POMME FLORIS</a>
                     </h1>
                     <h2 class="art-logo-text">Tersedia Berbagai Jenis Bunga</h2>
                  </div>
               </div>
               {{-- End Header --}}
               <div class="cleared reset-box"></div>
               {{-- Navbar --}}
               @include('partials.navbar')
               {{-- End Navbar --}}
               <div class="cleared reset-box"></div>
               {{-- Layout --}}
               <div id="carouselExampleControls" class="carousel slide mt-2" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ asset('assets/img/img1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('assets/img/img2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('assets/img/img3.jpg') }}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
               {{-- End Layout --}}
               <div class="cleared"></div>
               {{-- Footer --}}
               <div class="art-footer">
                  <div class="art-footer-body">
                     <div class="art-footer-text">
                        <p>POMME FLORISTS</p>
                        <div class="cleared"></div>
                        <p class="art-page-footer"></p>
                     </div>
                     <div class="cleared"></div>
                  </div>
               </div>
               {{-- End Footer --}}
               <div class="cleared"></div>
            </div>
         </div>
         <div class="cleared"></div>
      </div>
   </div>
   <script src="{{ asset('js/app.js') }}"></script>
   <script>
      $('.carousel').carousel()
   </script>
</body>

</html>