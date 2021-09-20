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
        </header>

        <div class="content">
            <div class="textBox">
                <h2>Selamat Datang<br>Di <span>Dapur Khanza</span></h2>
                <p>Tersedia aneka jenis makanan berat, makanan ringan dan snack yang pastinya bikin kamu ketagihan<p>
                <a href="{{ url('/menu') }}">Lihat Menu</a>
            </div>

                <div class="imgBox">
                    <img src="landing/outlet1/img1.png" class="starbucks">
                </div>
        </div>
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