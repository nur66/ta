<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Mapbox token -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Css Native -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}"> <!-- Tak berjalan seperti ini -->


    <title>Pandora</title>
</head>
<body>
<!-- Navbar -->
    <!-- nav.navbar.navbar-expand-lg.bg-dark.navbar-dark -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <!-- a.navbar-brand -->
            <a href="" class="navbar-brand"><span class="text-warning">Pandora Food Market</span></a>

            <!-- button.navbar-toogler -->
            <!-- data-bs-toogle untuk menciutkan -->
            <!-- data-bs-target untuk beralih -->
            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
            >
            <!-- hamburger icon -->
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- .collapse.navbar-collapse -->
            <div class="collapse navbar-collapse" id="navmenu"> <!-- target -->
                <!-- ul.navbar-nav -->
                <!-- agar tulisannya dikanan maka tambahkan ms-auto -->
                <ul class="navbar-nav ms-auto">
                    <!-- li.nav-item -->
                    <li class="nav-item">
                        <!-- a.nav-link -->
                        <a href="#promo" class="nav-link">Promo Apa?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimoni" class="nav-link">Kata Mereka</a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::user())
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ url('/login') }}" class="nav-link">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- End Navbar -->

<!-- Showcase -->
<!-- section.bg-dark.text-light.p-5.text-center -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
<!-- p-lg-0 agar pada saat ukuran large dia tidak memiliki padding -->
<!-- p-5 untuk membuat padding disemua sisi menjadi 5px -->
<!-- text-sm-start jika di kecilkan maka tulisan/text diawali dari depan -->
    <div class="container">
        <div class="d-sm-flex align-item-center justify-content-between">
        <!-- align-item-center justify-content-between untuk objek nya menjadi center selalu -->
            <!-- div diatas akan memanggil class flexbox sehingga nantinya mempunyai 2 item -->

            <!-- flexbox untuk tidak diaktifkan pada layar yang sangat kecil, misalnya layar hp, jadi apa yang harus kita lakukan? -->
            <!-- kita bisa tambahkan sm pada class d-flex diatas menjadi d-sm-flex -->
            <!-- sehingga sekarang untuk ukuran mobile dia tidak akan flex -->
            <div>
                <h1>Welcome to <span class="text-warning">Pandora Food Market</span></h1>
                <p class="lead my-4">
                <!-- Memperbesar tulisan dengan class lead dan membuat margin atau jarak ke atas dan kebawah-->
                Pandora Food Market adalah tempat tongkrongan seperti foodcourt modern karena lebih dikonsepkan seperti sebuah café tetapi dengan tempat duduk terbuka layaknya foodcourt.
                </p>
                <!-- data-bs-modal untuk membuat modal -->
                <button 
                class="btn btn-primary btn-lg" 
                data-bs-toggle="modal"
                data-bs-target="#enroll">Apa Pendapatmu?</button>
            </div>
            
            <!-- karena gambarnya yang besar maka akan kita ikat agar tetap berada didalam container dengan img-fluid dan kita juga bisa mengaturnya dengan menggunakan w-50 misal, sehingga 50% dr ukurannya -->
            <img src="gambar/pandora.jpg" class="img-fluid w-50 d-none d-sm-block mb-4">
            <!-- class d-none maka gambar akan hilang, kemudian d-sm-block maka pada ukuran sm gambar akan hilang -->
        </div>
    </div>
</section>

<!-- Newsletter -->
<!-- <section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb md-0">Cari Outlet Disini</h3>

            <div class="input-group">
                <input 
                type="text" class="form-control" 
                placeholder="Masukan Nama Outlet" 
                aria-label="Recipient's username" 
                aria-describedby="button-addon2"
                >
                <button class="btn btn-dark" 
                type="button" 
                id="button-addon2"
                >Button</button>
            </div>
        </div>
    </div>
</section> -->
<div class="container pt-4" id="outlet">
    <div class="row">
        <div class="container-fluid d-flex">
            <div class="col-6">
                <div>
                    <h5><span class="text-warning">Pandora </span>Food Market</h5>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <div class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Cari Outlet Disini" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Outlet -->
<section class="pt-5 pb-4">
    <div class="container">
    
        <div class="row">
        @foreach($tokos as $toko)
            <div class="col g-3">
                <div class="card bg-white text-light" style="width:230px; height:350px; box-shadow: 2px 2px 2px rgba(0,0,0,0.8); padding:10px; border:1px solid grey;">
                    <div class="row">
                        <div class="col">
                            <a href=""><img src="{{ asset('gambar/logo') }}/{{ $toko->gambar }}" class="m-2 pb-2" style="width:200px; height:200px;"></a>
                        </div>
                        <a href="/landing1" class="btn btn-white btn-md mx-auto m-0 p-0" style="width:200px; line-height: 0.5em"><p class="fw-bolder">{{ $toko->namaToko }}</p></a>
                        <a href="/landing1" class="btn btn-white btn-md mx-auto m-0 p-0" style="width:200px; line-height: 0.1em"><p class="text-secondary">{{ $toko->keterangan }}</p></a>
                        <!-- jelasin ?   ini sama dengan /outlet/{id} -->
                        <a href="{{ url('/outlet') }}/{{ $toko->id }}" class="btn btn-warning btn-md mx-auto mt-3" style="width:120px; border-radius: 0.6em;">Pilih Outlet</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!-- End Outlet -->


<!-- Promo Section -->
<section class="p-5" id="promo">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="gambar/promo/promo1.png" class="img-fluid w-30">
            </div>
            <div class="col-md p-5">
                <h2 style="color:orange;">Dimsum Mentai & Dimsum Mozarella</h2>
                <p class="lead">
                    Dimsum Mentai hanya Rp.66.000 aja gaes berbeda tipis dengan Dimsum Mozarella yang bahkan lebih hemat, hanya Rp.62.000 aja, diskon hingga 17%. Kapan lagi bisa nyicipin Dimsum dengan hanrga terjangkau, buruan raih diskonnya di <span class="fw-bolder" id="promoMenarik">Dimsum PJS Batam</span>
                </p>
                <p>
                    Makanan ini punya berbagai isian yang lezat dan variasi rasa yang berbeda.
                </p>
                <a href="#" class="btn btn-warning mt-3">
                    <i class="bi bi-chevron-right">Read More</i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="p-5 bg-dark text-light" id="learn">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
            <div class="col-md p-5">
                <h2 class="text-warning">Sate Ati Ampela Telur</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit iste dolores et itaque maiores facere.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora distinctio commodi blanditiis explicabo eos in iure accusantium nostrum corporis autem quisquam itaque ex exercitationem nobis eum expedita, numquam sit dolore.
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i>Read More
                </a>
            </div>
            <!-- gambarnya di sebelah kanan nantinya -->
            <div class="col-md">
                <img src="gambar/promo/promo2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Question Accordion -->
<section class="p-5" id="questions">
    <div class="container">
        <h2 class="text-center mb-4 text-primary">Tanya tanya Pandora</h2>

        <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-one" >
                <!-- Sesuai dengan target dan id -->
                    Dimana Sih Pandora?
                </button>
                </h2>
                <!-- Sesuai dengan target dan id -->
                <div id="pertanyaan-one" 
                class="accordion-collapse collapse" 
                aria-labelledby="flush-headingOne" 
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium beatae doloremque ex iusto iure consectetur sed soluta, eveniet inventore aliquid perferendis a architecto et labore totam ratione voluptatem esse quidem temporibus dolorum ipsum facilis similique harum? Quos voluptates sunt mollitia veniam laborum, beatae vitae magnam ex repellat aperiam nemo distinctio!
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-two">
                Apakah di Pandora Ada Banyak Jenis Menu?
                </button>
                </h2>
                <div id="pertanyaan-two" 
                class="accordion-collapse collapse" 
                aria-labelledby="flush-headingOne" 
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium beatae doloremque ex iusto iure consectetur sed soluta, eveniet inventore aliquid perferendis a architecto et labore totam ratione voluptatem esse quidem temporibus dolorum ipsum facilis similique harum? Quos voluptates sunt mollitia veniam laborum, beatae vitae magnam ex repellat aperiam nemo distinctio!
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-three">
                    Mahal Gak Ya Makan disana?
                </button>
                </h2>
                <div id="pertanyaan-three" 
                class="accordion-collapse collapse" 
                aria-labelledby="flush-headingOne" 
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium beatae doloremque ex iusto iure consectetur sed soluta, eveniet inventore aliquid perferendis a architecto et labore totam ratione voluptatem esse quidem temporibus dolorum ipsum facilis similique harum? Quos voluptates sunt mollitia veniam laborum, beatae vitae magnam ex repellat aperiam nemo distinctio!
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-four">
                    Kalo nongkrong bareng teman enak gak ya?
                </button>
                </h2>
                <div id="pertanyaan-four" 
                class="accordion-collapse collapse" 
                aria-labelledby="flush-headingOne" 
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium beatae doloremque ex iusto iure consectetur sed soluta, eveniet inventore aliquid perferendis a architecto et labore totam ratione voluptatem esse quidem temporibus dolorum ipsum facilis similique harum? Quos voluptates sunt mollitia veniam laborum, beatae vitae magnam ex repellat aperiam nemo distinctio!
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-five">
                    Bareng keluarga enak juga?
                </button>
                </h2>
                <div id="pertanyaan-five" 
                class="accordion-collapse collapse" 
                aria-labelledby="flush-headingOne" 
                data-bs-parent="#accordionFlushExample">

                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium beatae doloremque ex iusto iure consectetur sed soluta, eveniet inventore aliquid perferendis a architecto et labore totam ratione voluptatem esse quidem temporibus dolorum ipsum facilis similique harum? Quos voluptates sunt mollitia veniam laborum, beatae vitae magnam ex repellat aperiam nemo distinctio!
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section id="testimoni" class="p-5 bg-primary">
    <div class="container">
        <h2 class="text-center text-white">Testimoni</h2>

        <p class="lead text-center text-white mb-5">
            Tanggapan Mereka Tentang Pandora
        </p>
        <div class="row g-3">
            <!-- card Testimoni-->
            <div class="col-md-3 col-lg-3">
                @foreach($testimoni as $testi)
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="{{ asset('gambar/testimoni') }}/{{ $testi->foto }}" class="rounded-circle mb-3" style="width:150px; height:150px; object-fit: cover; object-position:center;">
                        <h3 class="card-title mb-3">{{ $testi->nama }}</h3>
                        <p>{{ $testi->pendapat }}</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Contact & Map -->
<section class="p-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md">
                <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location</span> Batam Center
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Admin 1 Phone</span> 081261518980
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Admin 2 Phone</span> 081253535563
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enroll Email</span> nuriswanto66@gmail.com
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Pandora Email</span> lisamufia23@gmail.com
                    </li>
                </ul>
            </div>

            <div class="col-md">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Pandora Food Market By Nur Iswanto</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5"></a>
        <i class="bi bi-arrow-up-circle h1"></i>
    </div>
</footer>

<!-- Modal -->

    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="testimoni" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimoni">Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- modal -->
            <form action="{{ url('/testimoni') }}" method="post" enctype="multipart/form-data" >
            @csrf
                <div class="modal-body">
                    <!-- tambahan manual -->
                    <p class="lead">Gimana Sih Menurutmu Pelayanan Pandora?</p>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="first-name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="pendapat" class="col-form-label">Pendapat Kamu</label>
                            <textarea class="form-control" name="pendapat" id="pendapat" rows="3"></textarea>
                        </div>
                </div>

                <div class="modal-footer">
                    <input type="reset" value="Reset" class="btn btn-secondary" data-bs-dismiss="modal"> &nbsp;
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
                
            </div>
        </div>
    </div>

    <!-- Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Map Token -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

    <!-- Native JS -->
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibnVyaXN3YW50byIsImEiOiJja3FyZm8xa20weDE1MnhvMTFjdWVmdXhzIn0.8mrNp6ZWmy0SArPRutW-xA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    });
    </script>
</body>
</html>

<!-- 
    Class Bootstrap

    layout -> breakpoint = mengetahui ukuran sm, md, lg, xl, xxl 
    Customize -> Color = mengetahui class warna
    forms -> input group 
    component -> accordion
    component -> modal -> live demo

    rounded-circle  = membuat menjadi linkaran
    list-group-flush = membuat list ul menjadi rata
    fw-bold = membuat tulisan tebal


    -- Modal Button --
    <button 
        class="btn btn-primary btn-lg" 
        data-bs-toggle="modal"
        data-bs-target="#enroll">Start the Enrollment
    </button>

    

-->