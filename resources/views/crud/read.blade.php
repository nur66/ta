@extends('layouts.app')

@section('content')
<div class="container-fluid pt-3">

    <div class="row">

    <!-- Kolom 1 -->
    <div class="col-9">
        <!-- cards -->
        <div class="card mb-3">
            <img src="gambar/logo-small.png" class="card-img-top p-2" style="width: 150px; height:150px">
            <div class="card-body">
            <h2 class="card-title">Pandora Food Market</h2>
            
            <form action="{{ url('crud/read') }}" method="get">
                <div class="d-flex justify-content-between">
                <a href="{{ url('/create') }}" class="tombol btn btn-warning">Tambah</a>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/home') }}" class="btn btn-warning">Refresh</a>&nbsp;
                    <input type="text" name="cari" id="" class="form-control" placeholder="SEARCH" style="width:300px;">
                </div>
                </div>
            </form>
            <br>
            <table class="table">
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Toko</th>
                    <th>Aksi</th>
                </tr>

                @foreach($menu as $item) <!-- $menu diambil dari Pandora controller class read -->
                <tr>
                    <td><img src="{{ asset('/gambar') }}/{{ $item->gambar }}" alt="" width="100px" height="100px"></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->id_toko }}</td>
                    <td>
                        <a href="{{ url('/edit') }}/{{ $item->id }}" class="btn btn-success">Update</a> &nbsp; 
                        <a href="{{ url('/delete') }}/{{ $item->id }}/{{ $item->foto }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        <!--sampai sini sudah dapat id nya -->
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
        <!-- endcards -->
    </div>

    <!-- Kolom 2 -->
    <div class="col-3 bg-light">
        <div class="pt-4 d-flex">
            <img src="gambar/logo-small.png" class="rounded float-start" style="width: 70px; height: 70px">
            <h3 class="pl-3">Pandora Food Market</h3>
        </div>
        <section class="pt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fw-bolder"><strong>Profile</strong></h5>
                    <!-- Sub Judul Menu dan Harga -->

                    <!-- Garis -->
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Garis -->

                    <div class="row pt-3">
                        <div class="col-6">
                            <p class="fw-bolder"><b>Owner :</b></p>
                        </div>
                        <div class="col-6">
                            <p class="float-end fw-bolder">Terence & Patrick</p>
                        </div>
                    </div>

                    <!-- Isi menu dan harga -->
                    <div class="row">
                        <div class="col-6">
                            <p class><b>Alamat :</b></p>
                        </div>
                        <div class="col-6">
                            <p class="float-end">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p class><b>Jam :</b></p>
                        </div>
                        <div class="col-6">
                            <p class="float-end"> Kamis	17.00–01.00
                                                    Jumat	17.00–01.00
                                                    Sabtu	17.00–02.00
                                                    Minggu	17.00–02.00
                                                    Senin	17.00–01.00
                                                    Selasa	17.00–01.00
                                                    Rabu	17.00–01.00
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p class><b>Telepon :</b></p>
                        </div>
                        <div class="col-6">
                            <p class="float-end">0822-8562-2266</p>
                        </div>
                    </div>

                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <h5 class="card-title pt-5"><b>History</b></h5>
                            <!-- Sub Judul Menu dan Harga -->

                            <!-- Garis -->
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- End Garis -->

                            <p class="pt-2" style="text-align:justify;">Pandora Food Market adalah tempat tongkrongan seperti foodcourt modern
                                                    karena lebih dikonsepkan seperti sebuah café tetapi dengan tempat duduk terbuka
                                                    layaknya foodcourt. Pandora Food Market terletak di Kawasan Batam Centre
                                                    tepatnya di depan Kampus Politeknik Negri Batam dan bersebelahan dengan Mcd
                                                    Batam Centre. Pemilik Pandora Food Market bernama Terence dan Patrick
                                                    menjalankan Pandora Food Market sejak tahun 2017 sampai sekarang. <br><br>
                                                    Pandora Food Market buka pada jam 5 sore dan tutup jam 1 malam setiap
                                                    harinya, di mana ada live band dan live soccer yang menemani pengunjung setia
                                                    Pandora Food Market. Selain itu, untuk promosi saat ini setiap pembelian 50ribu
                                                    rupiah akan mendapatkan 1 kupon lucky draw yang diundi setiap minggunya. <br><br> Pandora Food Market juga sudah bekerja sama dengan Go-Food untuk setiap
                                                    transaksi online dan sudah terdaftar untuk semua outlet yang ada di Pandora Food
                                                    Market. Adapun outlet yang ada saat ini yaitu:
                                                    <br>
                                                    <br>
                                                    1. Dapur Khanza;
                                                    <br>
                                                    2. Mui-Mui Gorengan;
                                                    <br>
                                                    3. Geprek -A3-;
                                                    <br>
                                                    4. An Ugly Bowl;
                                                    <br>
                                                    5. Mr. Yang Potato
                                                    <br>
                                                    6. Dim Sum PJS;
                                                    <br>
                                                    7. Cipa Cipud;
                                                    <br>
                                                    8. Tasty;
                                                    <br>
                                                    9. Mie Jay Chou;
                                                    <br>
                                                    10. Martabak Manis Bangka;
                                                    <br>
                                                    11. Mie Jay Chou
                                                    <br>
                                                    12. serta outlet minuman Pandora Food Market sendiri
                                                    <br>
                                                    <br>
                                                    Pandora Food Market menggunakan kontainer bekas yang disulap menjadi
                                                    gerai kuliner. Jejeran kontainer bekas yang telah direnovasi tersebut menjadi
                                                    keunikan lain karena memiliki tema yang berbeda dengan foodcourt atau café lain di
                                                    Kota Batam. 
                            </p>
                        </div>
                    </div>

                    <a href="https://nur66.github.io/#" class="btn btn-light btn btn-outline-success btn-sm d-grid">Hak Cipta</a>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
</div>
@endsection

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->


