<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Result</title>
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
<h1>POST通信してみる（結果）</h1>
<p><?php echo nl2br(e($msg)); ?></p>
<?php $__currentLoopData = $texts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>This is user <?php echo e($user); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\xampp\scrapingapp\resources\views/result.blade.php ENDPATH**/ ?>