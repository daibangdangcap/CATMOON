@extends('client.shopping.products.product-category')
<style>
    .product-detail{
        display: flex;
        margin-bottom: 30px;
        margin-top: 30px;
        position: relative;
    }
    .detail_product_image{
        width: 350px;
        height: 400px;
        border: solid red;
        margin-left: 100px;
        border-radius: 10px;
        border: solid black 0.5pt;
        background-color: white;
    }
    .information{
        display: block;
        margin-left: 30px;
    }
    .information h3{
        font-weight: bold;
    }
    .information .btn-cart{
        display: flex;
        position: absolute;
        bottom: 0px;
    }
    .btn-addCart{
        background-color: #8C46FF;
        font-size: 25px;
        color: whitesmoke;
        font-weight: bold;
        padding: 5px 20px 5px 20px;
        border-radius: 5px;
        border-style: none;
        margin-right: 50px;
        box-shadow: 0 1pt 2pt 0pt rgb(172, 172, 172, 0.8);
    }
    .btn-buyCart{
        background-color: whitesmoke;
        font-size: 25px;
        color: #8C46FF;
        font-weight: bold;
        padding: 5px 20px 5px 20px;
        border-radius: 5px;
        border-style: none;
        box-shadow: 0 1pt 2pt 0pt rgb(172, 172, 172, 0.8);
    }
</style>
@section('detail')
    <div class="product-detail">
        <img src="/bg_images/logo.png" class="detail_product_image">
        <div class="information">
            <h2>Pate cho mèo vị nước sốt cá ngừ WHISKA</h2>
            <p>Thương hiệu: WISHKA</p>
            <h4>Gía bán: 150.000đ</h4>
            <h3>Số lượng: 150</h3>
            <div class="btn-cart">
                <button class="btn-addCart">Thêm vào giỏ hàng <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#fcfcfc" d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></button>
                <button class="btn-buyCart">Mua hàng <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path fill="#8c46ff" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></button>
            </div>
        </div>
    </div>
@endsection
