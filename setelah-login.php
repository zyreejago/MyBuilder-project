<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Coba Buat Website</title>
    <link rel="stylesheet" href="setelah.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font -->
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700;1,800;1,900&display=swap");
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My<span>Builder</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex gap-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan MyBuilder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tukangkami">Tukang MyBuilder</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="swiper.php">Ciptakan Pekerjaan</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- hero section -->
    <section id="hero-section">
        <div class="container">
            <div class="row">
                <h1 class="text-white">
                    <b>
                        Bersama, Kita Ciptakan <br />
                        Jutaan Pekerjaan untuk Tukang</b>
                </h1>
                <p class="text-white text-center oppacity-75">
                    Pesan tukang terkualifikasi dengan mudah lewat aplikasi My Builder
                </p>
                <div class="d-flex gap-3 mt-2 mt-lg-4"></div>
            </div>
        </div>
    </section>
    <!-- About Section -->


    <!-- Values Product-->
    <section id="layanan" class="layanan">
        <h2>Layanan My<span>Builder</span></h2>
    </section>
    <section id="values-product">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row flex-lg-column">
                        <img src="https://png.pngtree.com/png-clipart/20190118/ourlarge/pngtree-cartoon-hand-painted-character-hand-account-png-image_459844.jpg"
                            class="col-4 rounded-4" />
                    </div>
                    <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0" data-aos="fade-right"
                        data-aos-duration="2000">
                        <h5 class="mt-lg-3"><b>Untuk konsumen</b></h5>
                        <div class="p-mt-lg-2">
                            My Builder menyediakan solusi perbaikan rumah agar Anda dan
                            keluarga dapat hidup nyaman
                        </div>
                        <div class="d-flex gap-3 mt-2 mt-lg-4">
                            <a href="#popup" class="btn bg-orange text-orange rounded-pill px-4 shadow">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row-reverse flex-md-row flex-lg-column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFjUzVEJHkdLO1ZIPZ6BXCuERpdnVyN14Zl6Vhw6aRex61e_E24IpvfGtRqaqYTfofDk&usqp=CAU"
                            class="col-4 rounded-4" />
                    </div>
                    <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0" data-aos="fade-up"
                        data-aos-duration="2000" data-aos-delay="300">
                        <h5 class="mt-lg-3"><b>Untuk Perusahaan</b></h5>
                        <div class="p-mt-lg-2">
                            My Builder memperbaiki, memelihara kantor dan cabang sehingga
                            bisnis Anda dapat berjalan lancar
                        </div>
                        <div class="d-flex gap-3 mt-2 mt-lg-4">
                            <a href="#popup2"
                                class="btn bg-orange text-orange rounded-pill px-4 shadow">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row flex-lg-column">
                        <img src="https://png.pngtree.com/png-clipart/20210224/ourlarge/pngtree-construction-worker-holding-a-brick-clipart-png-image_2945563.jpg"
                            class="col-4 rounded-4" />
                    </div>
                    <div class="d-flex flex-column col-8 ms-3 ms-lg-0 detail mt-3 mt-md-0" data-aos="fade-left"
                        data-aos-duration="2000" data-aos-delay="500">
                        <h5 class="mt-lg-3"><b>Untuk Tukang Builder</b></h5>
                        <div class="p-mt-lg-2">
                            My Builder menciptakan peluang kerja yang berkesinambungan
                            sehingga Anda dapat menjadi tukang yang profesional dan
                            menyejahterakan keluarga.
                        </div>
                        <div class="d-flex gap-3 mt-2 mt-lg-4">
                            <a href="#popup12"
                                class="btn bg-orange text-orange rounded-pill px-4 shadow">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- popuppp -->
    <div class="popup" id="popup">
        <div class="popup-content rounded-4">
            <div class="popup-img">
                <img src="https://png.pngtree.com/png-clipart/20190118/ourlarge/pngtree-cartoon-hand-painted-character-hand-account-png-image_459844.jpg"
                    alt="" />
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFjUzVEJHkdLO1ZIPZ6BXCuERpdnVyN14Zl6Vhw6aRex61e_E24IpvfGtRqaqYTfofDk&usqp=CAU"
                    alt="" />
                <img src="https://png.pngtree.com/png-clipart/20210224/ourlarge/pngtree-construction-worker-holding-a-brick-clipart-png-image_2945563.jpg"
                    alt="" />
                <a href="#layanan" class="popup-close">&times;</a>
            </div>
            <div class="popup-header">
                <h1>Untuk Konsumen</h1>
                <h2>Pesan Layanan tukang,tukang datang ke lokasi,Transaksi yang mudah di aplikasi</h2>
            </div>
            <div class="popup-text">
                <p> Membangun dan Merenovasi rumah </p>
                <p> Menentukan desain rumah diinginkan</p>
            </div>

            <a href="" class="btn btn-popup"></a>
        </div>
    </div>
    <!-- popup2 -->
    <div class="popup" id="popup2">
        <div class="popup-content rounded-4">
            <div class="popup-img">
                <img src="https://png.pngtree.com/png-clipart/20190118/ourlarge/pngtree-cartoon-hand-painted-character-hand-account-png-image_459844.jpg"
                    alt="" />
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFjUzVEJHkdLO1ZIPZ6BXCuERpdnVyN14Zl6Vhw6aRex61e_E24IpvfGtRqaqYTfofDk&usqp=CAU"
                    alt="" />
                <img src="https://png.pngtree.com/png-clipart/20210224/ourlarge/pngtree-construction-worker-holding-a-brick-clipart-png-image_2945563.jpg"
                    alt="" />
                <a href="#layanan" class="popup-close">&times;</a>
            </div>
            <div class="popup-header">
                <h1>Untuk Perusahaan</h1>
                <h2>maintenance bangunan bisnis seperti kantor dan toko</h2>
            </div>
            <div class="popup-text">
                <p>Kontrol Penuh</p>
                <p>Proses operasi cepat</p>
                <p>Transparansi harga
                </p>
            </div>

            <a href="" class="btn btn-popup"></a>
        </div>
    </div>
    <!-- popup12 -->
    <div class="popup" id="popup12">
        <div class="popup-content rounded-4">
            <div class="popup-img">
                <img src="https://png.pngtree.com/png-clipart/20190118/ourlarge/pngtree-cartoon-hand-painted-character-hand-account-png-image_459844.jpg"
                    alt="" />
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFjUzVEJHkdLO1ZIPZ6BXCuERpdnVyN14Zl6Vhw6aRex61e_E24IpvfGtRqaqYTfofDk&usqp=CAU"
                    alt="" />
                <img src="https://png.pngtree.com/png-clipart/20210224/ourlarge/pngtree-construction-worker-holding-a-brick-clipart-png-image_2945563.jpg"
                    alt="" />
                <a href="#layanan" class="popup-close">&times;</a>
            </div>
            <div class="popup-header">
                <h1>Untuk Builder</h1>
                <h2>keuntungan menjadi anggota MyBuilder</h2>
            </div>
            <div class="popup-text">
                <p>Penghasilan lebih terjamin</p>
                <p>Mendapatkan sertifikasi kemampuan</p>
                <p>Relasi yang luas</p>
                <p>Asuransi yang Terjamin</p>

            </div>

            <a href="" class="btn btn-popup"></a>
        </div>
    </div>
    <!-- gelombang -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff8c00" fill-opacity="1"
            d="M0,64L20,96C40,128,80,192,120,213.3C160,235,200,213,240,186.7C280,160,320,128,360,122.7C400,117,440,139,480,154.7C520,171,560,181,600,202.7C640,224,680,256,720,229.3C760,203,800,117,840,101.3C880,85,920,139,960,170.7C1000,203,1040,213,1080,218.7C1120,224,1160,224,1200,197.3C1240,171,1280,117,1320,117.3C1360,117,1400,171,1420,197.3L1440,224L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
        </path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff8c00" fill-opacity="1"
            d="M0,224L20,234.7C40,245,80,267,120,277.3C160,288,200,288,240,250.7C280,213,320,139,360,101.3C400,64,440,64,480,101.3C520,139,560,213,600,229.3C640,245,680,203,720,181.3C760,160,800,160,840,170.7C880,181,920,203,960,229.3C1000,256,1040,288,1080,293.3C1120,299,1160,277,1200,266.7C1240,256,1280,256,1320,240C1360,224,1400,192,1420,176L1440,160L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z">
        </path>
    </svg>
    <!-- Tukang kami -->
    </section>
    <section id="tukangkami" class="tukangkami">
        <h2>Tukang My<span>Builder</span></h2>
    </section>

    <!-- my tukang -->

    <main class="table">
        <section class="table__body">
            <table id="myTable">
                <input type="text" id="filter" class="form-control form-control-lg shadow-none"
                    placeholder="Cari tukang yang tersedia..." style="margin-bottom: 8px;">
                <thead>
                    <tr>
                        <th>Id <span class="icon-arrow"></span></th>
                        <th>Tukang <span class="icon-arrow"></span></th>
                        <th>Tipe <span class="icon-arrow"></span></th>
                        <th>Nomor HP <span class="icon-arrow"></span></th>
                        <th>Status <span class="icon-arrow"></span></th>
                        <th>Gaji <span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td><img src="img/user3.jpg" alt="" />GITAHADI</td>
                        <td>Borongan</td>
                        <td>083045886689</td>
                        <td>
                            <a href="profiletukang/profile.html">
                                <p class="status delivered">Tersedia</p>
                            </a>
                        </td>
                        <td><strong> Rp. 500.000/m2 </strong></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td><img src="img/user3.jpg" alt="" />REZZY</td>
                        <td>Borongan</td>
                        <td>082345608678</td>
                        <td>
                            <p class="status cancelled">Istirahat</p>
                        </td>
                        <td><strong>Rp.550.000/m2</strong></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td><img src="img/user3.jpg" alt="" /> BUDI</td>
                        <td>Harian</td>
                        <td>0812345987657</td>
                        <td>
                            <p class="status shipped">Disewa</p>
                        </td>
                        <td><strong>Rp.100.000/Hari</strong></td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td><img src="img/user3.jpg" alt="" /> WILI</td>
                        <td>Harian</td>
                        <td>081435697890</td>
                        <td>
                            <a href="profiletukang/profile1.html">
                                <p class="status delivered">Tersedia</p>
                            </a>
                        </td>
                        <td><strong>Rp.110.000/Hari</strong></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td><img src="img/user3.jpg" alt="" />HANDI</td>
                        <td>Harian</td>
                        <td>08168698688</td>
                        <td>
                            <a href="nota.php">
                                <p class="status delivered">Tersedia</p>
                            </a>
                        </td>
                        <td><strong>Rp.100.000/Hari</strong></td>
                    </tr>
                    <tr>
                        <td>006</td>
                        <td><img src="img/user3.jpg" alt="" /> AWE</td>
                        <td>Borongan</td>
                        <td>08565387579</td>
                        <td>
                            <p class="status cancelled">Istirahat</p>
                        </td>
                        <td><strong>Rp.495.000/m2</strong></td>
                    </tr>
                    <tr>
                        <td>007</td>
                        <td><img src="img/user1.jpg" alt="" /> MEYKA</td>
                        <td>Harian</td>
                        <td>084564898678</td>
                        <td>
                            <a href="nota.php">
                                <p class="status delivered">Tersedia</p>
                            </a>
                        </td>
                        <td><strong>Rp.100.000/Hari</strong></td>
                    </tr>
                    <tr>
                        <td>008</td>
                        <td><img src="img/user3.jpg" alt="" /> BATOX</td>
                        <td>Harian</td>
                        <td>0843234097809</td>
                        <td>
                            <p class="status cancelled">Istirahat</p>
                        </td>
                        <td><strong>Rp.105.000/Hari</strong></td>
                    </tr>
                    <tr>
                        <td>009</td>
                        <td><img src="img/user3.jpg" alt="" /> WIN</td>
                        <td>Borongan</td>
                        <td>08567858987</td>
                        <td>
                            <p class="status cancelled">Istirahat</p>
                        </td>
                        <td><strong>Rp.500.000/m2</strong></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <!-- my tukang -->

    <!-- footer start -->
    <footer>
        <div class="links">
            <a href="#">Beranda</a>
            <a href="swiper.php">Ciptakan Pekerjaan</a>
            <a href="#tukangkami">Tukang MyBuilder</a>
            <a href="#layanan">Layanan MyBuilder</a>
            <div class="credit">
                <p>Created by <a href="">MyBuilder</a> | &copy; 2023</p>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="script.js"></script>
</body>

</html>