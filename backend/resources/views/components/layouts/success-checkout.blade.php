<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomads &mdash; {{ $title }}</title>
    {{ $prependStyle ?? '' }}
    <x-styles.style />
    {{ $addOnStyle ?? '' }}
</head>

<body>
    <!-- Navbar -->
    <x-navbars.app-navbar-alternative />
    
    {{ $slot }}

    {{ $prependScript ?? '' }}
    <x-scripts.script />
    {{ $addOnScript ?? '' }}
</body>

</html>