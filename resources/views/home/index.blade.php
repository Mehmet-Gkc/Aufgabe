<!-- Startseite -->

@extends('layouts.layout')

@section('content')

<style>
    .main {   
        max-width:1200px;
    }
</style>

<div class="container mx-auto ">
    <div class="flex flex-col items-center justify-center p-2">
        <div class="flex flex-col justify-center items-center">
            <div class="text-center mt-6">
                <h2 class="text-l md:text-2xl capitalize my-4">schauen und stauen</h2>
                <p class="text-xl md:text-4xl uppercase font-bold text-pink-600 my-4">willkommen auf dieser seite.</p>                
            </div>

            <!-- Slider -->
            <div class="main">
                <div class="slider slider-for">
                    <div><img src="/img/sliderfoto1.png" alt="sliderfoto1" class="mt-8"></div>
                    <div><img src="/img/sliderfoto2.png" alt="sliderfoto2" class="mt-8"></div>
                    <div><img src="/img/sliderfoto3.jpg" alt="sliderfoto3" class="mt-8"></div>
                    <div><img src="/img/sliderfoto4.jpg" alt="sliderfoto4" class="mt-8"></div>
                    <div><img src="/img/sliderfoto5.jpg" alt="sliderfoto5" class="mt-8"></div>                 
                </div>
                <div class="slider slider-nav ">                  
                    <div><img src="img/kleinfoto1.png" alt="kleinfoto1" class="kleinfoto"></div>
                    <div><img src="img/kleinfoto2.png" alt="kleinfoto2" class="kleinfoto"></div>
                    <div><img src="img/kleinfoto3.jpg" alt="kleinfoto3" class="kleinfoto"></div>
                    <div><img src="img/kleinfoto4.jpg" alt="kleinfoto4" class="kleinfoto"></div>
                    <div><img src="img/kleinfoto5.jpg" alt="kleinfoto5" class="kleinfoto"></div>
                </div>           
            </div>

            <div class="w-1/2 p-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil officiis rerum corporis quas ea aliquid ad atque dolorum quam, molestias excepturi voluptatum mollitia provident dolorem odit! Nostrum, ipsum in nobis accusamus quae consequuntur accusantium voluptates ad pariatur cum, voluptatibus, eos sint. Voluptates incidunt nisi, amet earum commodi quod nostrum iste?</p>        
            </div>
        </div> 
    </div> 
    
    {{-- Unser Team --}}
    <div class="container text-center">
      <div class="mt-6">
          <h2 class="font-team text-xl md:text-4xl my-4">Unser Team</h2>       
      </div>

      <!-- Wir haben die Daten, die wir als "mitarbeiters" von der HomeController.php Seite gesendet haben, hier verwendet -->
      <div class="flex flex-col md:flex-row justify-center text-center">
          <div class="p-4">
              <img src="img/foto2.png" alt="" class="">
              <span class="text-lg md:text-2xl uppercase font-bold text-pink-600">{{ $mitarbeiters[0]['vorname'] }}</span>
              <span class="text-lg md:text-2xl uppercase font-bold text-pink-600">{{ $mitarbeiters[0]['nachname'] }}</span>
              <p>{{ $mitarbeiters[0]['email'] }}</p>  
          </div>
          
           <div class="p-4">
              <img src="img/foto3.png" alt="" >
              <span class="text-lg md:text-2xl uppercase font-bold text-pink-600">{{ $mitarbeiters[1]['vorname'] }}</span>
              <span class="text-lg md:text-2xl uppercase font-bold text-pink-600">{{ $mitarbeiters[1]['nachname'] }}</span>
              <p>{{ $mitarbeiters[1]['email'] }}</p>  
          </div>        
      </div>

      <div class="mb-4">
        <a href="/überuns" class="text-xl uppercase font-bold text-pink-500 bg-gray-200 hover:text-black duration-500 m-4 px-4">über uns</a>    
      </div>

  </div>
  
</div>
 
<!-- JQuery-JavaScript-Code für Slider -->
<script>
   $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
    responsive: [   
        {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
@endsection