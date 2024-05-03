<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Iconbibliothek -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Dieser Import ist für Tailwind erforderlich -->
    @vite('resources/css/app.css')
    
    <title>Laravel & Tailwind</title>
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