<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__('Laravel')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->
        <?php echo \Livewire\Livewire::styles(); ?>

       

    </head>
    <body class="antialiased">

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hello-world',['name'=>'Titan'])->html();
} elseif ($_instance->childHasBeenRendered('pq8VJ6V')) {
    $componentId = $_instance->getRenderedChildComponentId('pq8VJ6V');
    $componentTag = $_instance->getRenderedChildComponentTagName('pq8VJ6V');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pq8VJ6V');
} else {
    $response = \Livewire\Livewire::mount('hello-world',['name'=>'Titan']);
    $html = $response->html();
    $_instance->logRenderedChild('pq8VJ6V', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\saas\resources\views/home.blade.php ENDPATH**/ ?>