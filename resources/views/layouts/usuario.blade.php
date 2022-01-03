<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title></title>

    <?php $versao = "v=1.1"; ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <meta author="Mangue Tecnologia">

    <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="/img/favicon/apple-icon-57x57.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="/img/favicon/apple-icon-60x60.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="/img/favicon/apple-icon-72x72.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="/img/favicon/apple-icon-76x76.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="/img/favicon/apple-icon-114x114.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="/img/favicon/apple-icon-120x120.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="/img/favicon/apple-icon-144x144.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="/img/favicon/apple-icon-152x152.png?<?= $versao; ?>">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/img/favicon/apple-icon-180x180.png?<?= $versao; ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png?<?= $versao; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png?<?= $versao; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png?<?= $versao; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png?<?= $versao; ?>">

    <!--<link rel="manifest" href="/manifest.json?<?= $versao; ?>">-->

    <meta name="msapplication-TileColor" content="">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png?<?= $versao; ?>">
    <meta name="theme-color" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <base href="<?= $base_url; ?>">
    <link rel="canonical" href="<?= $base_url; ?>">

    <meta property="og:type" content="website">

    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="/css/base.css?<?= $versao; ?>">
    <link rel="stylesheet" href="/css/app.css?<?= $versao; ?>">
    <link rel="stylesheet" href="/css/sistema.css?<?= $versao; ?>">

</head>

<body>

    <div class="preloader"></div>

    <div class="sistema">

        @yield('content')

    </div>

    <div class="overlay"></div>
    
    <script src="/js/jquery.min.js?<?= $versao; ?>" ></script>
    <script src="/js/plugins/jquery.validate.js?<?= $versao; ?>" ></script>
    <script src="/js/plugins/jquery.mask.js?<?= $versao; ?>"></script>

    <script src="/js/system.js?<?= $versao; ?>"></script>
        
</body>
</html>