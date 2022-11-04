<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url ('bahan/css1/navbar_validation.css') }}>
    <link rel="stylesheet" href={{ url ('bahan/css1/style2.css') }}>
    @include('components.css')
    <title>Document</title>
</head>
<body>
    @include('components.navbar_validation')
    @yield('content')
    @include('components.script')
    @include('components.script_validation')
</body>
    @include('components.footer')
</html>