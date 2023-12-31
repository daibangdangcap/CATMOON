@extends('client_layout.mainpage')
@section('content')
<style>
    .taskbar{
        width: 100%;
        display: flex;
    }
    .taskbar-area{
        width: 30%;
        transform: translateX(-85.5%);
        transition: transform 0.5s ease;
    }
    .taskbar-area:hover{
        transform: translateX(0%);
    }
    .taskbar_cate{
        width: 100%;
        position: relative;
    }

    .taskbar-area ul{
        color: white;
        font-weight: bold;
        font-family:serif;
        list-style-type: none;
        padding: 0;
        display: flex;
        position:absolute;
        z-index: 2;
        margin-top: 0.4%;
    }

    .taskbar-area ul li{
        padding: 15px 30px 0px 30px;
        margin: 0 0 0 15px;
        cursor: pointer;
        font-size: 15px;
    }

    .right-taskbar{
        position: absolute;
        right: 30px;
    }

    .right-taskbar .search-box{
        width: 120px;
        margin-top: 20px;
        padding: 5px 10px 5px 10px;
        border-radius: 30px;
        border-style: none;
        box-shadow: 0pt 0pt 1pt 0.25pt black;
        font-size: 15px;
        transition: width 0.5s ease;
        margin-right: 20px;
    }
    .right-taskbar .search-box:focus{
        width: 200px;
    }

    .right-taskbar .btn-cart{
        font-size: 15px;
        color: white;
        letter-spacing: 1px;
        font-family: Arial, Helvetica, sans-serif;
        padding: 10px 20px 10px 20px;
        background-color: #6527BE;
        border-radius: 5px;
        border-style: none;
        box-shadow: 0pt 0pt 1pt 0.25pt black;
    }
    .product-list{
        display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px 20px 20px 20px;
    }
</style>
<div class="taskbar">
<div class="taskbar-area">
<ul>
        <li><a>Quần áo</a></li>
        <li><a>Phụ kiện</a></li>
        <li><a>Thời trang</a></li>
    </ul>
    <img src="/bg_images/product_category/taskbar_cate.png" class="taskbar_cate">
</div>
<div class="right-taskbar">
    <input type="text" placeholder='Tìm kiếm...' class="search-box">
    <button class="btn-cart">Giỏ hàng <svg style="margin-bottom:-5px" xmlns="http://www.w3.org/2000/svg" height="20" width="22" viewBox="0 0 576 512"><path fill="#ffffff" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></button>
</div>
</div>
@if(request()->route()->uri()=='product-category')
<div class="product-list">
    <x-product_item/>
    <x-product_item/>
</div>
@endif
@yield('detail')
@endsection
