<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    
    <title>WerbeWolke</title>
</head>

<body class="bg-cyan-400">
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between uppercase font-bold">
        <div class="flex  justify-between items-center">
            <span class="text-2xl cursor-pointer">
                LOGO
            </span>

            <span class="text-3xl cursor-pointer md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 ">
            <li class="mx-4 my-6 md_my-0">
                <a href="/" class="text-xl text-pink-500 hover:text-black duration-500">Startseite</a>
            </li>
            <li class="mx-4  my-6 md_my-0">
                <a href="/kontakt" class="text-xl text-pink-500 hover:text-black duration-500">kontakt</a>
            </li>
        </ul>

    </nav>
    @yield("content") 

    <script>
        function Menu(e) {
            let list = document.querySelector('ul');

            e.name === "menu" ? 
                (e.name = "close", list.classList.add('top-[80px]') , list.classList.add('opacity-100')) : 
                ( e.name = "menu" , list.classList.remove('top-[80px]') , list.classList.remove('opacity-100'))
        }
    </script>
</body>
</html>