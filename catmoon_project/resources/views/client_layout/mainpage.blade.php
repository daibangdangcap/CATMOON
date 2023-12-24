<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html, body {
        height: fit-content;
        margin: 0;
    }
    body::-webkit-scrollbar{
        display: none;
        overflow: hidden;
    }
</style>
<body>
    @include('client_layout.header')
    @yield('content')
    @include('client_layout.footer')
</body>
</html>
