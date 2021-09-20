<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapur Khanza</title>
    <link rel="stylesheet" href="{{ asset('css/outlet1.css') }}">
</head>
<body>
    <section>

        <div class="circle"></div>

        <header>
            <a href="#" class="logo"><img src="logo/outlet1.png" style="width: 100px; height: 100px"></a>

            <!-- <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
            </ul> -->
        </header>

        <div class="content">
            <div class="textBox">
                <h2>Selamat Datang<br>Di <span>Cia Young Tofu</span></h2>
                <p>Tersedia aneka jenis makanan berat, makanan ringan dan snack yang pastinya bikin kamu ketagihan<p>
                <a href="/home">Lihat Menu</a>
            </div>

                <div class="imgBox">
                    <img src="landing/outlet1/img1.png" class="starbucks">
                </div>
        </div>

        <!-- <ul class="thumb">
            <li><img src="thumb1.png" onclick="imgSlider('landing/outlet1/img1.png');changeCircleColor('#017143')"></li>
            <li><img src="thumb2.png" onclick="imgSlider('img2.png');changeCircleColor('#eb7495')"></li>
            <li><img src="thumb3.png" onclick="imgSlider('img3.png');changeCircleColor('#d752b1')"></li>
        </ul> -->

        <!-- <ul class="sci">
            <li><a href="#"><img src="facebook.png"></a></li>
            <li><a href="#"><img src="twitter.png"></a></li>
            <li><a href="#"><img src="instagram.png"></a></li>
        </ul> -->
    </section>

    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src = anything;
        }

        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body>
</html>