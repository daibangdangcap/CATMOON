<style>
    .bg_footer {
        background-image: url('/bg_images/bg_footer.png');
        width: 100%;
        height: 180px;
        background-repeat: no-repeat;
        background-position: top center;
        z-index: 2;
        width: 100%;
        color: white;
        margin: 0;
        border: solid red 0.5px;
    }
    .bg_footer h3{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: lighter;
    }
    .left-content{
        width: 30%;
        height: fit-content;
        display: flex;
        padding: 30px 0 0 45px;
        float: left;
    }
    ul{
        list-style-type: none;
        margin-top: 0px;
        padding: 0;
        display: block;
        height: fit-content;
    }
    li{
        padding: 10px 0px 15px 15px;
        cursor: pointer;
        font-size: 12px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .icon{
        width: 8%;
        height: auto;
    }
</style>
<div class="bg_footer">
    <div class="left-content">
        <h3>CÁC DỊCH VỤ</h3>
        <ul>
            <li>COFFEE</li>
            <li>Cửa hàng cho mèo</li>
            <li>Nhận nuôi</li>
        </ul>
    </div>
    <div class="left-content">
    <h3>FOR MORE INFORMATION</h3>
        <ul>
            <li>GIỚI THIỆU</li>
            <li>TIN TỨC</li>
            <li>CHÍNH SÁCH VÀ ĐIỀU KHOẢN</li>
        </ul>
    </div>
    <div class="left-content">
    <h3>LIÊN LẠC VỚI CHÚNG TÔI QUA</h3>
        <ul>
            <li><img src="/icons/phone.png" class="icon"> (+84) 123 456 789</li>
            <li><img src="/icons/gmail.png" class="icon"> catmoon@gmail.com</li>
            <li><img src="/icons/facebook.png" class="icon"> www.facebook.com/catmoonvn</li>
        </ul>
    </div>
</div>
