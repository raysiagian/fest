<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Festival Literasi Balige | {{ $tittle }}</title>

@include('layouts.landingpage.stylesheet');
-->
  </head>

<body>
    
@include('layouts.landingpage.navbar');




  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <img autoplay muted loop id="bg-images"
          source src="assets/images/20220327171519_IMG_7421.jpg"  />
      

      <div class="image-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                    @yield('container')
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  
  <!-- ***** Main Banner Area End ***** -->
@yield('section1')

@yield('container2')

  <section >

  </section>
<div>
  @yield('container4')
</div>
    @include('layouts.landingpage.footer')
    
    @include('layouts.landingpage.javascript')

</body>
</html>