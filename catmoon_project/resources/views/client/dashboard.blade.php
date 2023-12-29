@extends('client_layout.mainpage')

@section('title', 'Home')

@section('content')
<style>
    .slider-image {
        display: flexbox;
        text-align: center;
    }

    .img-mainpage {
        width: 100%;
        height: 500px;
        z-index: -1;
    }

    .shadow-div {
        width: 100%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay {
        z-index: 1;
        position: absolute;
        width: 100%;
        height: 500px;
        background-color: #000;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .shadow-div:hover .shadow-button {
        opacity: 1;
    }

    .shadow-div:hover .overlay {
        opacity: 0.7;
    }

    .shadow-button {
        border-radius: 10px;
        z-index: 2;
        position: absolute;
        padding: 10px 70px 10px 70px;
        color: black;
        background-color: white;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        border: none;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        letter-spacing: 1px;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div id="carouselExample" class="carousel slide">
    <div class="carousel-indicators" style="z-index: 1;">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner slider-image">
        <div class="carousel-item active">
            <img src="/slider_images/slider1.png" class="slider-image">
        </div>
        <div class="carousel-item">
            <img src="/slider_images/slider2.png" class="slider-image">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="shadow-div">
    <button class="shadow-button">COFFEE</button>
    <div class="overlay"></div>
    <img src="/bg_images/mainpage/bg_coffee.png" class="img-mainpage">
</div>
<div class="shadow-div">
    <button class="shadow-button">SHOPPING</button>
    <div class="overlay"></div>
    <img src="/bg_images/mainpage/bg_shopping.png" class="img-mainpage">
</div>
<div class="shadow-div">
    <button class="shadow-button">ADOPT</button>
    <div class="overlay"></div>
    <img src="/bg_images/mainpage/bg_adopt.png" class="img-mainpage">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
