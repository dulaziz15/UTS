<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url ('bahan/css1/style.css') }}>
    <!-- <link rel="stylesheet" href={{ url ('bahan/css1/style2.css') }}> -->
    @include('components.css')
    <title>Document</title>
</head>
<body>
    @include('components.navbar')
    @yield('content')
    @include('components.script')
</body>
    @include('components.footer')
</html>