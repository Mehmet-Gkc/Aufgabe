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

            <div class="flex justify-center m-4 text-center">
                <div class="p-4">
                    <img src="img/foto2.png" alt="" class="">
                    <p class="text-lg md:text-2xl uppercase font-bold text-pink-600">monika petersen</p>
                    <p>monikapetersen@loremipsum.de</p>
                </div>
                
                <div class="p-4">
                    <img src="img/foto3.png" alt="" >
                    <p class="text-lg md:text-2xl uppercase font-bold text-pink-600">leon knirsch</p>
                    <p>leonknirsch@loremipsum.de</p>
                </div>                
            </div>
        </div> 
    </div>    
</div>
@endsection