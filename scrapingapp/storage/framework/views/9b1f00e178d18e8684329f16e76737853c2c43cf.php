<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Scraping</title>
<!-- Tailwind　使用-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="top bg-red-200 font-semibold flex justify-end" align="right">
        <a href="https://twitter.com/home" target="_blank"><img src="<?php echo e(asset('tw.png')); ?>"></a>
        <a href="https://ja-jp.facebook.com/" target="_blank"><img src="<?php echo e(asset('fb.png')); ?>"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo e(asset('ins.png')); ?>"></a>
        <a href="" ><img src="<?php echo e(asset('li.png')); ?>"></a>
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
        <p><?php echo e($msg); ?></p>
        <?php echo e($key); ?>

        <form action="<?php echo e(url('./scraping/result')); ?>" method="GET">
            <?php echo e(csrf_field()); ?>

            <div><textarea placeholder="キーを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..."rows="3" name="key"></textarea></div>
            <div><textarea placeholder="メッセージを入力してください。" class="shadow border py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-500 rounded ..." rows="6" name="message"></textarea></div>
            <div><input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="add" value="スタート！"></div>
        </form>
    </div>
 
</body>
</html>
<?php /**PATH C:\xampp\scrapingapp\resources\views/add.blade.php ENDPATH**/ ?>