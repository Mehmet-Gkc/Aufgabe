@extends('layouts.layout')

@section('content')

<style>
    .main {
    font-family:Arial;
    max-width:1200px;
    display:block;
    margin:0 auto;
    }
   
    .action{
    display:block;
    margin:100px auto;
    width:100%;
    text-align:center;
    }
    .action a {
    display:inline-block;
    padding:5px 10px; 
    background:#f30;
    color:#fff;
    text-decoration:none;
    }
    .action a:hover{
    background:#000;
    }
</style>

<div class="container mx-auto ">
    <div class="flex flex-col items-center justify-center p-2">
        <div class="flex flex-col justify-center items-center">
            <div class="text-center mt-6">
                <h2 class="text-l md:text-2xl capitalize my-4">schauen und stauen</h2>
                <p class="text-xl md:text-4xl uppercase font-bold text-pink-600 my-4">willkommen auf dieser seite.</p>                
            </div>
            
            <div class="main">
                <div class="slider slider-for">
                    <div><img src="/img/sliderfoto1.png" alt="foto1" class="mt-8"></div>
                    <div><img src="/img/sliderfoto2.png" alt="foto1" class="mt-8"></div>
                    <div><img src="/img/sliderfoto3.jpg" alt="foto1" class="mt-8"></div>
                    <div><img src="/img/sliderfoto4.jpg" alt="foto1" class="mt-8"></div>
                    <div><img src="/img/sliderfoto5.jpg" alt="foto1" class="mt-8"></div>
                </div>
                <div class="slider slider-nav">
                    <div><img src="img/kleinfoto1.png" alt=""></div>
                    <div><img src="img/kleinfoto2.png" alt=""></div>
                    <div><img src="img/kleinfoto3.jpg" alt=""></div>
                    <div><img src="img/kleinfoto4.jpg" alt=""></div>
                    <div><img src="img/kleinfoto5.jpg" alt=""></div>
                </div>
                <div class="action">
                    <a href="#" data-slide="3">go to slide 3</a>
                    <a href="#" data-slide="4">go to slide 4</a>
                    <a href="#" data-slide="5">go to slide 5</a>
                </div>
            </div>

            <div class="w-1/2 p-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil officiis rerum corporis quas ea aliquid ad atque dolorum quam, molestias excepturi voluptatum mollitia provident dolorem odit! Nostrum, ipsum in nobis accusamus quae consequuntur accusantium voluptates ad pariatur cum, voluptatibus, eos sint. Voluptates incidunt nisi, amet earum commodi quod nostrum iste?</p>        
            </div>
        </div> 
    </div>    
</div>
 
<script>
     $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
</script>
@endsection