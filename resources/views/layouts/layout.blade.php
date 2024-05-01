<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ich habe Links zur Iconbibliothek hinzugefügt -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Dieser Import ist für Tailwind erforderlich -->
    @vite('resources/css/app.css')
    
    <title>WerbeWolke</title>
</head>

<body>

<!-- Navbar -->
<div class="w-screen h-screen">
     <nav class="container mx-auto md:flex md:items-center md:justify-between uppercase font-bold">
        <div class="flex justify-between items-center">
            <a href="/index" class="cursor-pointer text-pink-600">                
                <img src="/img/logo.png" alt="logo">lorem ipsum                
            </a>           

            <span class="text-3xl cursor-pointer md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul class="hidden flex flex-col md:flex md:flex-row items-center md:py-0 py-16 transition-all ease-in duration-500">
            <li class="mx-4 my-6">
                <a href="/" class="text-xl text-pink-500 hover:text-black duration-500">Startseite</a>
            </li>
            <div class="group md:relative flex flex-col">
                <li class="mx-4 my-6">
                    <a href="/überuns" class="text-xl text-pink-500 hover:text-black duration-500">über uns</a>
                </li>
                <li class="mx-4 my-6 top-8 md:absolute md:hidden md:group-hover:flex md:bg-gray-200">
                    <a href="/kontakt" class="text-xl text-pink-600 hover:text-black duration-500 p-1">kontakt</a>
                </li>
            </div>
        </ul>
    </nav>

    <!-- Layout -->

    @yield("content") 
</div>
   

    


    <!-- Ich habe eine Javascript-Funktion geschrieben, um die Icons verschwinden und wieder auftauchen zu lassen, wenn die Navigationsleiste responsive ist -->
    <script>
        function Menu(e) {
            let list = document.querySelector('ul');

            e.name === "menu" ? 
                (e.name = "close", list.classList.remove('hidden')) : 
                ( e.name = "menu" , list.classList.add('hidden'))
        }
    </script>
</body>
</html>