<!-- Kontakt -->

@extends('layouts.layout')

@section('content')

<div class="container mx-auto bg">
    <div class="flex flex-col items-center justify-center p-2">
            <div class="text-center mt-6">
                <h2 class="text-l md:text-2xl capitalize my-4">kontakt</h2>
                <p class="text-xl md:text-4xl uppercase font-bold text-pink-600 my-4">wir sind für sie da.</p>                
            </div>    
            
            {{-- Succes message --}}
            @if (session()->has('success'))
                <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500" dark:text-gray-500>
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-sm font-medium ml-3">Success!.</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                    <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </div>
                </div>              
            @endif

            {{-- Form --}}
            <form action="{{ route('kontakt.send') }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center w-full md:w-2/3">
                @csrf
                <p class="w-full text-left my-4 text-2xl">Kontaktformular</p>
                <div class="flex flex-col md:flex-row w-full md:my-4">                    
                    <div class="flex flex-col w-full md:w-2/3">
                        <input
                        type="text"
                        name="vorname"  
                        id="vorname"                                             
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="vorname" class="mb-4 md:mb-6">Vorname*</label>                      

                        <input
                        type="email"
                        name="email"
                        id="email"                      
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="email" class="mb-4">E-Mail*</label>                         
                    </div>

                    <div class="flex flex-col w-full md:w-2/3 md:mx-2 md:mx-6">
                        <input
                        type="text"
                        name="nachname"
                        id="nachname"           
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="nachname" class="mb-4 md:mb-6">Nachname*</label>                      
                        
                        <input
                        type="text"
                        name="telefon"
                        id="telefon"                 
                        class="p-2 bg-gray-100 border-2 rounded-md focus:outline-none"
                        />
                        <label for="telefon" class="mb-4">Telefon</label>                        
                    </div>
                </div>

            {{-- E-Mail Validation, Errorhändler --}}

            @error('vorname')
                <h3 class="text-red-500 text-2xl">Fehler:</h3>
                <span class="text-red-500"> - Bitte gib deinen Vornamen an.</span>
            @enderror

            @error('nachname')
                <span class="text-red-500"> - Bitte gib deinen Nachnamen an</span>
            @enderror

            @error('email')
                <span class="text-red-500"> - Bitte gib deine E-Mail an</span>
            @enderror

            @error('is_active')
                <span class="text-red-500"> - Bitte akzeptiere die Datenschutzbestimmungen. </span>
            @enderror            


                <div class="w-full my-2 ">
                    <p class="my-4">* Pflichtfelder</p>                   
                    <input type="checkbox" name="is_active" id="is_active" required value="1" {{ old('is_active', 0) == 1 ? 'checked' : '' }}>

                    <label for="is_active" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione veritatis, natus accusamus non quam officiis deserunt facilis quae deleniti neque.</label><br>

                    <button type="submit" class="uppercase font-bold text-pink-600 bg-gray-100 w-fit px-6 py-3 my-8 flex items-center rounded-md cursor-pointer">
                         absenden
                    </button> 
                </div>                 

            </form>
    </div>
</div>
@endsection