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

    <!-- <style>
        body::before {
        display: block;
        content: '';
        height: 50px;
        }

        #map{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
    </style> -->


    <title>Pandora</title>
</head>
<body>
<!-- Navbar -->
    <!-- nav.navbar.navbar-expand-lg.bg-dark.navbar-dark -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <!-- a.navbar-brand -->
            <a href="#" class="navbar-brand">Pandora Food Market</a>

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
                        <a href="#learn" class="nav-link">Promo Apa?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Outlet Kita</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructors" class="nav-link">Testimoni Cuy</a>
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
                    We focus on teaching our students the fundamentals of the latest and greatest technologies to prepare them for their first dev role
                </p>
                <!-- data-bs-modal untuk membuat modal -->
                <button 
                class="btn btn-primary btn-lg" 
                data-bs-toggle="modal"
                data-bs-target="#enroll">Ayo Lihat Promo Menarik Gaes</button>
            </div>
            
            <!-- karena gambarnya yang besar maka akan kita ikat agar tetap berada didalam container dengan img-fluid dan kita juga bisa mengaturnya dengan menggunakan w-50 misal, sehingga 50% dr ukurannya -->
            <img src="gambar/showcase.svg" class="img-fluid w-50 d-none d-sm-block">
            <!-- class d-none maka gambar akan hilang, kemudian d-sm-block maka pada ukuran sm gambar akan hilang -->
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="bg-primary text-light p-5">
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
</section>

<!-- Boxes -->
<section class="p-5">
    <!-- kita akan menggunakan grid untuk itu kita hanya perlu menggunakan class of row -->
    <div class="container">
        <div class="row text-center g-4">
        <!-- text-center membuat tulisan menjadi di tengah -->
        <!-- g-4 apabila ukurab diperkecil maka dia akan memiliki gape dari setiap card nantinya -->
            <div class="col-md">
            <!-- col-md jika dia medium kebawah maka dia akan menjadi kolom sejajar kebawah -->
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-laptop"></i> -->
                            <img src="gambar/logo/logo1.png" class="img-thumbnail"  alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Dapur Khanza
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="outlet/dapur-khanza.blade.php" class="btn btn-primary">Lihat Menu</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md">
                <div class="card bg-secondary text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-person-square"></i> -->
                            <img src="gambar/logo/logo2.png" class="img-thumbnail" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Burger Dude
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo3.png" class="img-thumbnail" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Geprek 3A
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Learn Section -->
<section class="p-5" id="learn">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="gambar/fundamentals.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
                <h2>Learn The Fundamentals</h2>
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
        </div>
    </div>
</section>

<section class="p-5 bg-dark text-light" id="learn">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
            <div class="col-md p-5">
                <h2>Learn React</h2>
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
                <img src="gambar/react.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Question Accordion -->
<section class="p-5" id="questions">
    <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Question</h2>

        <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pertanyaan-one" >
                <!-- Sesuai dengan target dan id -->
                    Where Exactly Are You Located?
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
                    How much doest it cost to attend
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
                    What do I need to know?
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
                    How do I sign up?
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
                    Do You help me find a job?
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

<!-- Instructors -->
<section id="instructors" class="p-5 bg-primary">
    <div class="container">
        <h2 class="text-center text-white">Our Instructors</h2>

        <p class="lead text-center text-white mb-5">
            Our instructor all have 5+ years working as a web developer in the industry
        </p>
        <div class="row g-4">
            <!-- card 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="http://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, et quisquam nisi deserunt repellendus natus.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="http://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Jane Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, et quisquam nisi deserunt repellendus natus.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="http://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Steve Smith</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, et quisquam nisi deserunt repellendus natus.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <!-- card 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="http://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Sara Smith</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, et quisquam nisi deserunt repellendus natus.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
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
                        <span class="fw-bold">Enroll Phone</span> 081261518980
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Student Phone</span> 081253535563
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enroll Email</span> nuriswanto66@gmail.com
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Student Email</span> lisamufia23@gmail.com
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
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- tambahan manual -->
            <p class="lead">Fill out this form and we will get back to you</p>
            <form>
                <div class="mb-3">
                    <label for="first-name" class="col-form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name">
                </div>
                <div class="mb-3">
                    <label for="last-name" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name">
                </div>
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="col-form-label">Phone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
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

<section class="p-2" id="outlet">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo10.jpg" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo4.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo4.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-2" id="outlet">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo3.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo5.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo6.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-2" id="outlet">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo7.jpg" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo8.png" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <!-- h1 untuk memperbesar icon -->
                            <!-- <i class="bi bi-people"></i> -->
                            <img src="gambar/logo/logo9.jpg" class="img-thumbnail" style="width:300px; height:300px" alt="">
                            <!-- i.bi.bi-laptop -->
                        </div>
                        <h3 class="card-title mb-3">
                            Cia Young Tofu
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem recusandae ipsam neque autem doloribus suscipit!
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- card -->

<!-- <div class="col-4">
                        <div class="card" style="width: 15rem;">
                            <img src="gambar/outlet/dapurKhanza/Menu/Baby Cumi.png" class="card-img-top" style="width:238px; height:200px">
                            <div class="card">
                                <h5 class="card-title">Baby Cumi</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text float-start pl-2">15K</p>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-warning btn-sm float-end mb-2 mr-2 text-white fw-bold">Pilih</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->