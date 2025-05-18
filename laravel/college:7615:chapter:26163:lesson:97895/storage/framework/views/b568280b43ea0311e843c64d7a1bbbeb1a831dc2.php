<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo e(__('general.title')); ?> </title>

    <!-- Fonts -->
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Vazir', sans-serif !important;
            direction: rtl;
        }

        .text-center {
            text-align: center;
        }

        .container {
            margin: 0 auto;
            min-height: 100vh;
            max-width: 1000px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
        }
        .header {
            display: flex;
            height: 100px;
            padding: 0 20px;
            align-items: center;
            background: lightpink;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
        }
        .main {
            flex: 1;
            padding: 0 20px;
            background: snow;
        }
        .aside {
            width: 260px;
            padding: 0 20px;
            background: papayawhip;
        }
        .footer {
            display: flex;
            height: 50px;
            align-items: center;
            justify-content: center;
            background: lightsteelblue;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="header">
        <h1>
            <?php echo e(__('general.title')); ?>

        </h1>
    </header>
    <div class="content">
        <main class="main">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            </p>
        </main>
        <aside class="aside">
            <h3>
                <?php echo e(__('general.greeting', ['name' => 'ali'])); ?>

            </h3>
        </aside>
    </div>
    <footer class="footer">
        <?php echo e(__('general.title')); ?>

    </footer>
</div>
</body>
</html>

<?php /**PATH /home/abolfazl/Download/initial_project_97895/resources/views/index.blade.php ENDPATH**/ ?>