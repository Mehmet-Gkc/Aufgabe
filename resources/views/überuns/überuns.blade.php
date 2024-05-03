<!-- Überuns -->

@extends('layouts.layout')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-col items-center justify-center px-4">
        <div class="flex flex-col justify-center items-center ">
            <div class="text-center mt-6">
                <h2 class="text-l md:text-2xl my-4">Über uns</h2>
                <p class="text-xl md:text-4xl uppercase font-bold text-pink-600 my-4">zusammen als team.</p>                
                <p class="w-1/2 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil officiis rerum corporis quas ea aliquid ad atque dolorum quam, molestias excepturi voluptatum mollitia provident dolorem odit! Nostrum.</p>        
            </div>

            <!-- Wir haben die Daten, die wir als "mitarbeiters" von der HomeController.php Seite gesendet haben, hier verwendet -->
            <div class="flex justify-center m-4 text-center">
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
        </div> 
    </div>    
</div>
@endsection