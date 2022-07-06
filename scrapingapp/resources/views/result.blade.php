<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Result</title>

    <!-- Tailwind　使用-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="antialiased flex flex-col min-h-screen">
    <div class="top bg-red-200 font-semibold flex justify-end" align="right">
        <a href="https://twitter.com/home" target="_blank"><img src="{{ asset('tw.png')}}"></a>
        <a href="https://ja-jp.facebook.com/" target="_blank"><img src="{{ asset('fb.png')}}"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="{{ asset('ins.png')}}"></a>
        <a href="" ><img src="{{ asset('li.png')}}"></a>
    </div>


    <div class="font-mono" align="right">この指定では文章の位置を調整します。これは右寄りの指定です。</div>
    <div class="bg-red-300 font-semibold  text-white text-3xl font-mono" align="center">
        <a href="http://127.0.0.1:8000/scraping/home">TOP</a>
        <a href="http://127.0.0.1:8000/scraping/add">SCRAPING</a>
        <a href="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdHPPqCGhJmX4_PkTiKuksdVx5HXhYnCaHV6hV--Ohc95MZnQ/formResponse">CONTACT</a>
        <a href="http://127.0.0.1:8000/scraping/contact">MAIL</a>
    </div>
    <div class="mt-3 border-solid border-2 border-red-200 ..."></div>

    <div class="m-4 text-xl" align="center"><p>{!! nl2br(e($msg)) !!}</p></div>
    <div class="m-4 font-semibold text-xl" align="center"><h1>検索結果</h1></div>
    @foreach($scraping_result as $results)
        @foreach($results as $test)
        <div class="m-4 text-xl" align="center">
            <p>{{ $test['alt'] }}</p>
            <a href={{ $test['url'] }} target="_blank"><img src="{{ $test['src'] }}"></a>
        </div>
        @endforeach
    @endforeach
</body>
</html>