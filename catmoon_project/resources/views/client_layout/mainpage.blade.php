<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    body {
        height: fit-content;
        margin: 0;
        background-color: #F8F8F8;
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
