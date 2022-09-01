<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Page</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script defer src="app.js"></script>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  

</head>

<body>

<?php
  include "./components/Nav.php";

?>

  <div class="w-screen h-screen overflow-x-hidden scroll-smooth">
    
    <div class="w-screen h-screen snap-y snap-mandatory overflow-scroll scroll-smooth">
      <div id="headerhero" class="w-screen h-screen snap-start bg-yellow-500  flex items-center justify-center z-0">
        <div class="relative ease-in duration-500">
          <img src="images/hotel.jpg" class="w-screen h-screen" />
          <div class="absolute top-1/4 ml-24">
            <h1 class="animate left-animate text-7xl text-white logo-font font-extrabold">
              Something special <br> about the hotel
            </h1>

            <p
              class="animate left-animate animate__delay-05s w-1/3 break-words text-white mt-5 logo-font font-extralight">
              Vestibulum ante ipsum primis
              in faucibus orci luctus et ultrices posuere cubilia curae; Nam eu justo quam. Fusce ut ipsum
              scelerisque, gravida mauris eget, facilisis felis. Curabitur tempus urna sit amet dignissim
              varius. Vivamus non augue quis ipsum molestie ornare ut quis dui. Phasellus justo quam, iaculis
              at risus ac, fermentum pretium quam. Curabitur posuere ante ipsum.</p>
            <div class="h-8"></div>
            <a href="index.php#test"
              class="px-6 py-2 border border-white bg-transparent logo-font text-white hover:bg-white hover:text-black">Login</a>

            <div class="relative mt-64 w-screen flex items-center justify-end">

              <div class="animate-bounce w-12 h-12 mr-44 text-white">
              <img class="w-full h-full" src="https://img.icons8.com/glyph-neue/64/ffffff/circled-chevron-down.png"/>

              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="infosection" class="w-screen h-screen snap-center">
        <div class="w-full h-screen flex flex-row-reverse">
          <div class="w-1/3 h-full flex items-center justify-center">
            <img src="images/image1.jpg" alt="" class="w-full h-full animate left-animate animate__delay-1s" />
          </div>
          <div class="w-2/3 h-full flex">
            <div class="mt-44 ml-10">
              <h1 class="text-5xl font-bold ">Some info</h1>
              <p id="sample" class="w-2/3  my-1 break-words mt-5 animate right-animate">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <p class="w-2/3  break-words mt-5 animate right-animate animate__delay-500ms">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <div class="h-8"></div>
              <a href="login.php"
                class="px-6 py-2 border border-black bg-transparent logo-font  hover:bg-black hover:text-white">Login</a>
            </div>
          </div>
        </div>
      </div>


      <div id="infosection" class="w-screen h-screen snap-start bg-gray-900 text-white">
        <div class="w-full h-full flex flex-row-reverse">
          <div class="w-1/3 h-full flex items-center justify-center">
            <img src="images/image1.jpg" alt="" class="w-full h-full animate topleft-animate animate__delay-1s" />
          </div>
          <div class="w-2/3 h-full flex">
            <div class="mt-44 ml-10">
              <h1 class="text-5xl font-bold ">Some info</h1>
              <p id="sample" class="w-2/3  my-1 break-words mt-5 animate right-animate">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <p class="w-2/3  break-words mt-5 animate right-animate animate__delay-500ms">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <div class="h-8"></div>
              <a href="login.php"
                class="px-6 py-2 border border-black bg-transparent logo-font  hover:bg-black hover:text-white">Login</a>
            </div>
          </div>
        </div>
      </div>

      

      <div id="infosection" class="w-screen h-screen snap-start">
        <div class="w-full h-full flex flex-row-reverse">
          <div class="w-1/3 h-full flex items-center justify-center">
            <img src="images/image1.jpg" alt="" class="w-full h-full animate left-animate animate__delay-1s" />
          </div>
          <div class="w-2/3 h-full flex">
            <div class="mt-44 ml-10">
              <h1 class="text-5xl font-bold ">Some info</h1>
              <p id="sample" class="w-2/3  my-1 break-words mt-5 animate right-animate">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <p class="w-2/3  break-words mt-5 animate right-animate animate__delay-500ms">Vestibulum vehicula
                mauris at scelerisque bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Pellentesque eu elit elit. Suspendisse imperdiet ultricies ullamcorper. Etiam
                consectetur sem lectus, eu vehicula risus rhoncus ut. Donec convallis iaculis elit ut vehicula. Sed eget
                urna mollis, scelerisque erat semper, dignissim lorem. Quisque consectetur imperdiet mi, id blandit
                augue. Aenean semper, massa in consequat bibendum, arcu massa faucibus turpis, quis porttitor velit erat
                sed ligula. Pellentesque tincidunt est in sapien malesuada, quis pretium ipsum ullamcorper. In hac
                habitasse platea dictumst. Integer malesuada eu tortor et lobortis. Vivamus vitae leo ac ante auctor
                placerat eu in ligula. Fusce ligula libero, tristique a laoreet eget, sagittis non purus. Nulla aliquet
                ante sed sapien pellentesque egestas.</p>
              <div class="h-8"></div>
              <a href="login.php"
                class="px-6 py-2 border border-black bg-transparent logo-font  hover:bg-black hover:text-white">Login</a>
            </div>
          </div>
        </div>
      </div>

      <div id="test" class="relative flex w-screen h-screen snap-start overflow-x-hidden z-0">
      <div class="relative flex h-screen w-screen bg-black">
        <img class="h-full w-full" src="images/image2.jpg" alt="" />
        <div class="absolute text-white mt-24 ml-24">
            <h1 class="mt-10 text-7xl text-white logo-font font-semibold">Something here</h1>
            <p class="w-1/3 font-extralight mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra vitae justo quis imperdiet. Duis sit amet varius leo, eu venenatis ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce vitae nisl molestie, lobortis mi nec, imperdiet turpis. Vestibulum ultrices fermentum elit nec iaculis. Suspendisse potenti. Aenean rhoncus lorem a eros rhoncus, in sagittis nulla rutrum. Nam vel vehicula nisi. Morbi venenatis vehicula consequat. Suspendisse convallis eros ac massa viverra vestibulum. Praesent ut ante magna. Morbi sem purus, ornare a egestas congue, vehicula sed leo. Morbi semper tristique ultrices. Nulla molestie dignissim lacinia.</p>
        </div>
      </div>
    </div>

  </div>
</body>

</html>

<script>

  const elements = document.querySelectorAll(".animate");
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if((entry.target.className +"").indexOf("left-animate") > -1){
          animateCSS(entry.target, 'fadeInLeft');
        }
        if((entry.target.className +"").indexOf("right-animate") > -1){
          animateCSS(entry.target, 'fadeInRight');
        }
        if((entry.target.className +"").indexOf("topleft-animate") > -1){
          animateCSS(entry.target, 'fadeInTopLeft');
        }
        if((entry.target.className +"").indexOf("flipx-animate") > -1){
          animateCSS(entry.target, 'flipInX');
        }
      }
    });
  });
  elements.forEach((item) => {
    observer.observe(item);
  });

</script>
