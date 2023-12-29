<style>
    .bg_header {
        background-image: url('/bg_images/bg_header.png');
        width: 100%;
        height: 174px;
        background-repeat: no-repeat;
        background-position: top center;
        z-index: 3;
        display:block;
        position: sticky;
        top:0%;
    }
    .top-nav{
        width: 100%;
        display: flex;
    }
    .logo {
        height: fit-content;
        width: 20%;
        margin-left: 2px;
        margin-top: 2px;
    }
    .left-nav{
        padding-left: 48px;
        padding-top: 50px;
        width: 70%;
    }

    .right-nav{
        width: 20%;
        display: flex;
        color:white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        padding: 60px 30px 30px;
    }

    .right-nav a{
        font-size: 20px;
    }

    .left-nav .search-box{
        padding: 10px;
        border-radius: 10px;
        overflow: hidden;
        width: 90%;
    }

    .nav{
        overflow: hidden;
        width: fit-content;
        z-index: 2;
    }
    .nav ul{
        list-style-type: none;
        padding: 0;
        display: flex;
    }
    .nav li{
        padding: 10px 68px 15px;
        cursor: pointer;
    }
    .nav li:hover{
        background-color: white;
    }
    .nav ul li a {
    display: block;
    color: #C6C6C6;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    font-weight: lighter;
    font-family: sans-serif;
    letter-spacing: 3px;
}
</style>
<header class="bg_header">
    <div class="top-nav">
        <img src="/bg_images/logo.png" class="logo"/>
        <div class="left-nav">
            <input type="text" placeholder="Tìm kiếm..." class="search-box">
        </div>
        <div class="right-nav">
            <a style="margin-left: 30px;">Đăng nhập</h>
            <a style="margin-left: 30px;">Đăng ký</a>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a style="color: #C6C6C6;" href="{{ route('mainpage') }}">GIỚI THIỆU</a></li>
            <li><a style="color: #C6C6C6;">TIN TỨC</a></li>
            <li><a style="color: #C6C6C6;">COFFEE</a></li>
            <li><a style="color: #C6C6C6;" href="{{ route('product-category') }}">CỬA HÀNG CHO MÈO</a></li>
            <li><a style="color: #C6C6C6;">NHẬN NUÔI</a></li>
            <li><a style="color: #C6C6C6;">LIÊN HỆ</a></li>
        </ul>
    </div>
</header>
