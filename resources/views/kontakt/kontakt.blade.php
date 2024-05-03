<!-- Kontakt -->

@extends('layouts.layout')

@section('content')

<div class="container mx-auto bg">
    <div class="flex flex-col items-center justify-center p-2">
            <div class="text-center mt-6">
                <h2 class="text-l md:text-2xl capitalize my-4">kontakt</h2>
                <p class="text-xl md:text-4xl uppercase font-bold text-pink-600 my-4">wir sind für sie da.</p>                
            </div>

            

            <form method="POST" enctype="multipart/form-data" class="flex flex-col justify-center w-full md:w-2/3">
                @csrf
                <p class="w-full text-left my-4 text-2xl">Kontaktformular</p>
                <div class="flex flex-col md:flex-row w-full md:my-4">                    
                    <div class="flex flex-col w-full md:w-2/3">
                        <input
                        type="text"
                        name="vorname"                                               
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="">Vorname*</label>
                        <input
                        type="email"
                        name="email"                        
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="">E-Mail*</label>  
                    </div>
                    <div class="flex flex-col w-full md:w-2/3 mx-2 md:mx-6">
                        <input
                        type="text"
                        name="nachname"             
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="">Nachname*</label>
                        <input
                        type="text"
                        name="telefon"                        
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="">Telefon</label>
                    </div>
                </div>

                <div class="w-full my-2 ">
                    <p class="my-4">* Pflichtfelder</p>
                    <input type="checkbox" name="absenden" value="absenden">
                    <label for="absenden" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione veritatis, natus accusamus non quam officiis deserunt facilis quae deleniti neque.</label><br>

                    <button type="submit" class="uppercase font-bold text-pink-600 bg-gray-100 w-fit px-6 py-3 my-8 flex items-center rounded-md cursor-pointer">
                         absenden
                    </button> 
                </div>

            </form>
    </div>
</div>
@endsection