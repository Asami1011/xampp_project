<!DOCTYPE html>
<html lang="ja">
<head>
<<<<<<< HEAD
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scraping</title>

    <!-- Tailwind　使用-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="antialiased flex flex-col min-h-screen">
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
        
        <main class="p-3 flex-grow">
            <div class="m-4 font-semibold text-xl" align="center"><h1>Amazon検索ページ</h1></div>
            <div class="space-y-6 text-xl"align="center">
                <p>{{$txt1}}</p>
                {{ $txt2 }}
                <form action="{{ url('./scraping/result')}}" method="GET">
                    {{ csrf_field() }}
                    @csrf
                    <div><textarea placeholder="キーワードを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..."rows="3" name="keyword"></textarea></div>
                    <div class="m-4"><textarea placeholder="メッセージを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..." rows="6" name="message"></textarea></div>
                    <div><input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="add" value="スタート！"></div>
                </form>
            </div>
        </main>
    
        <footer class="absolute inset-x-0 bottom-0 h-8 bg-gray-800 text-gray-400 text-center">
            &copy; Riripig
        </footer>
    </div>
=======
<meta charset="utf-8">
<title>Scraping</title>
<!-- Tailwind　使用-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="top bg-red-200 font-semibold flex justify-end" align="right">
        <a href="https://twitter.com/home" target="_blank"><img src="{{ asset('tw.png')}}"></a>
        <a href="https://ja-jp.facebook.com/" target="_blank"><img src="{{ asset('fb.png')}}"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('ins.png')}}"></a>
        <a href="" ><img src="{{ asset('li.png')}}"></a>
    </div>
    <div class="border-solid border-2 border-indigo-600 ..."></div>
    <div align="right">この指定では文章の位置を調整します。これは右寄りの指定です。</div>
    <div class="menu font-semibold text-3xl" align="center">
        <a href="http://127.0.0.1:8000/scraping/home">TOP</a>
        <a href="http://127.0.0.1:8000/scraping/add">SCRAPING</a>
        <a href=""></a>
        <a href=""></a>
    </div>
    <div align="center">
        <h1>POST通信してみる（フォーム）</h1>
        <p>{{$msg}}</p>
        {{ $key }}
        <form action="{{ url('./scraping/result')}}" method="GET">
            {{ csrf_field() }}
            <div><textarea placeholder="キーを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..."rows="3" name="key"></textarea></div>
            <div><textarea placeholder="メッセージを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..." rows="6" name="message"></textarea></div>
            <div><input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="add" value="スタート！"></div>
        </form>
    </div>
 
>>>>>>> 16205f472fba316f52bcbca9bbae09209d3a04b9
</body>
</html>
