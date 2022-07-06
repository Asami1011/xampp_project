<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Tailwind　使用-->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
        <div class="bg-white-100">
            <header class="bg-gray-800">
                <div class="bg-red-200 font-semibold flex justify-end" align="right">
                    <a href="https://twitter.com/home" target="_blank"><img src="{{ asset('tw.png')}}"></a>
                    <a href="https://ja-jp.facebook.com/" target="_blank"><img src="{{ asset('fb.png')}}"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('ins.png')}}"></a>
                    <a href="" ><img src="{{ asset('li.png')}}"></a>
                </div>

                <div class="bg-red-200 font-semibold text-white text-2xl font-mono md:flex md:justify-around" align="center">
                        <div class="block px-8 py-2 my-4 hover:bg-red-300 rounded"><a href="http://127.0.0.1:8000/scraping/home">TOP</a></div>
                        <div class="block px-8 py-2 my-4 hover:bg-red-300 rounded"><a href="http://127.0.0.1:8000/scraping/add">SCRAPING</a></div>
                        <div class="block px-8 py-2 my-4 hover:bg-red-300 rounded"><a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdHPPqCGhJmX4_PkTiKuksdVx5HXhYnCaHV6hV--Ohc95MZnQ/formResponse">CONTACT</a></div>
                        <div class="block px-8 py-2 my-4 hover:bg-red-300 rounded"><a href="http://127.0.0.1:8000/scraping/contact">MAIL</a></div>
                </div>

                <div class="border-solid border-2 border-white-200 ..."></div>
            </header>
            
            <main class="p-3">
                <div align="center"><img src="{{ asset('koujityuu.png')}}"></div>
                <p>HELLO</p>
            </main>
        
            <footer class="absolute inset-x-0 bottom-0 h-8 bg-gray-800 text-gray-400 text-center">
                &copy; Riripig
            </footer>
        </div>





        <div class="border-solid border-1 border-indigo-500 ..."></div>

        
    </body>
</html>
