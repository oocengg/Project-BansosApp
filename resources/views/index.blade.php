@extends('layouts.master')

@section('container')
<div id="container">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Sistem Aplikasi Bantuan Sosial dengan <span>BansosApp</span></h1>
                        <h2>Platform Bantuan Sosial Untuk Menjangkau Masyarakat Lebih Luas, Adil, dan Terarah.</h2>
                        <div class="text-center text-lg-start">
                            <a href="{{ route ('pengajuanGuest') }}" class="btn-get-started scrollto">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                    </div>
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>PRA SYARAT</h3>
                        <p>Apa saja Prasyarat untuk menerima Bantuan Sosial dari Platform BansosApp ?</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-building-house"></i></div>
                            <h4 class="title"><a href="">DOMISILI NEGARA INDONESIA</a></h4>
                            <p class="description">Merupakan Warga Negara Indonesia dengan KTP WNI dan menetap di
                                Wilayah Negara Indonesia</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">BUKAN KELUARGA DENGAN BANTUAN PKH, BPNT, BLT</a></h4>
                            <p class="description">Bantuan ini bukan diperuntukkan untuk keluarga yang telah mendapat
                                bantuan PKH dan atau BPNT dan atau BLT dari Kementerian Sosial</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">BUKAN KELUARGA YANG TELAH MENDAPATKAN BANTUAN DARI
                                    KABUPATEN/KOTA</a></h4>
                            <p class="description">Bantuan Sosial dari BansosApp untuk keluarga yang belum mendapatkan
                                bantuan dari Pemerintah Setempat.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Dokumen</h2>
                    <p>Dokumen Pendukung</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="bx bx-receipt" style="color: #ffbb2c;"></i>
                            <h3><a href="">Kartu Keluarga</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="bx bx-user-pin" style="color: #5578ff;"></i>
                            <h3><a href="">Kartu Tanda Penduduk</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-copy-alt" style="color: #e80368;"></i>
                            <h3><a href="">Surat Keterangan Tidak Mampu</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="bx bx-credit-card-front" style="color: #e361ff;"></i>
                            <h3><a href="">Kartu Domisili</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Apa itu Bantuan Sosial (Bansos) ?</h3>
                        <p>
                            Bantuan sosial (bansos) diberikan kepada masyarakat yang mengalami risiko sosial. Bansos
                            dapat diberikan dalam bentuk uang maupun barang.
                        </p>
                        <br>
                        <p>
                            Ketentuan mengenai bansos diatur dalam UU Nomor 14 Tahun 2019 tentang Pekerja Sosial.
                            Peraturan ini mengubah UU Nomor 11 Tahun 2009 tentang Kesejahteraan Sosial.
                            Menurut UU tersebut, bantuan sosial merupakan bantuan berupa uang, barang, atau jasa kepada
                            individu, keluarga, kelompok atau masyarakat miskin, tidak mampu,
                            dan/atau rentan terhadap risiko sosial. Pengertian ini juga dijelaskan dalam Perpres Nomor
                            63 Tahun 2017 tentang Penyaluran Bantuan Sosial Secara Non Tunai.
                        </p>
                        <br>
                        <p>
                            Pengelolaan bansos diatur dalam Peraturan Menteri Dalam Negeri Republik Indonesia
                            (Permendagri) Nomor 77 Tahun 2020. Aturan ini mencabut Permendagri Nomor 99 Tahun 2019
                            tentang Perubahan Kelima atas Peraturan Menteri Dalam Negeri Nomor 32 Tahun 2011
                            tentang Pedoman Pemberian Hibah dan Bantuan Sosial yang Bersumber dari Anggaran Pendapatan
                            dan Belanja Daerah.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="assets/img/details-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Tujuan Pemberian Bansos</h3>
                        <p class="fst-italic">
                            Selaras dengan namanya, pemberian bansos bertujuan untuk mengatasi hal-hal yang berkaitan
                            dengan risiko sosial. Berikut enam tujuan bansos :
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Rehabilitasi Sosial
                            </li>
                            <li><i class="bi bi-check"></i> Perlindungan Sosial
                            </li>
                            <li><i class="bi bi-check"></i> Pemberdayaan Sosial
                            </li>
                            <li><i class="bi bi-check"></i> Jaminan Sosial
                            </li>
                            <li><i class="bi bi-check"></i> Penanggulangan Kemiskinan
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="assets/img/details-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5" data-aos="fade-up">
                        <h3>Jenis Bansos</h3>
                        <p>Secara umum, bansos dibedakan menjadi tiga jenis. Antara lain sebagai berikut :</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Bantuan Sosial Berupa Uang
                            </li>
                            <p>
                                Bantuan sosial berupa uang diberikan secara langsung kepada penerima seperti beasiswa
                                bagi anak miskin, yayasan pengelola yatim piatu, nelayan miskin,
                                masyarakat lanjut usia, terlantar, cacat berat dan tunjangan kesehatan putra putri
                                pahlawan yang tidak mampu.
                                Bantuan jenis ini dapat diberikan secaraa tunai maupun non tunai.
                            </p>
                            <li><i class="bi bi-check"></i> Bantuan Sosial Berupa Barang
                            </li>
                            <p>
                                Bantuan sosial berupa barang adalah barang yang diberikan secara langsung kepada
                                penerima seperti bantuan kendaraan operasional untuk sekolah luar
                                biasa swasta dan masyarakat tidak mampu, bantuan perahu untuk nelayan miskin, bantuan
                                makanan/pakaian kepada yatim piatu/tuna sosial,
                                ternak bagi kelompok masyarakat kurang mampu
                            </p>
                            <li><i class="bi bi-check"></i> Bantuan Sosial Berupa Jasa
                            </li>
                            <p>
                                Bantuan sosial berupa jasa disalurkan sesuai dengan ketentuan peraturan
                                perundang-undangan. Contoh bantuan berupa jasa adalah pemberian pelatihan untuk
                                penerima bantuan dari satuan kerja (pemberi bansos).
                            </p>
                        </ul>

                    </div>
                </div>
        </section><!-- End Details Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Tim Kami</p>
                </div>
                <div class="row justify-content-center align-items-center" data-aos="fade-left">
                    <div class="col-lg-2 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Annisa Fitri <br> Yuliandra</h4>
                                <span>2041720123</span>
                                <div class="social">
                                    <span>Database Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Muh. Fauzi Ramadhan Nugraha</h4>
                                <span>2041720022</span>
                                <div class="social">
                                    <span>Programmer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="assets/img/team/team-5.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Nadhifa Lutfiah Mahmudah</h4>
                                <span>2041720082</span>
                                <div class="social">
                                    <span>Technical Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Komang Gede Narariya Suputra</h4>
                                <span>2041720225</span>
                                <div class="social">
                                    <span>Sistem Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Jasmin Salsabila <br> Arifah</h4>
                                <span>2041720097</span>
                                <div class="social">
                                    <span>UI/UX Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
                                Diperuntukkan untuk siapa saja bantuan sosial (bansos) yang ada di BansosApp ini?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Bantuan sosial App, atau biasa disebut sebagai Aplikasi Bantuan Sosial ini
                                    diperuntukkan untuk warga negara Indonesia yang berdomisili asli di Indonesia
                                    dan belum mendapatkan bantuan sosial lainnya dari pemerintah.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                                Berapa lama proses pencairan dana bantuan?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Bantuan BansosApp akan dicairkan setelah data dari penerima Bansos di tempat lain
                                    sudah final dan
                                    dicairkan sehingga bantuan sosial dari BansosApp bisa
                                    lebih tepat sasaran kepada masyarakat yang berkebutuhan dan belum tercover oleh
                                    bantuan sosial manapun.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
                                Saya baru saja di PHK karena Covid-19, apakah saya bisa mendaftar sebagai penerima
                                bantuan ini?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda masuk dalam kategori masyarakat yang berhak untuk mendaftarkan diri dalam
                                    program Prakerja.
                                    Anda akan mendapatkan pengembangan kompetensi berupa bantuan biaya yang ditujukan
                                    untuk pencari kerja,
                                    pekerja ter-PHK atau pekerja yang membutuhkan peningkatan kompetensi. Silahkan anda
                                    mendatarkan diri ke Web Prakerja.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
                                Hasil dari donasi akan di transfer ke rekening siapa?
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Setiap donasi akan di transfer ke rekening masing masing pengguna, hingga masa
                                    pendaftaran Anda berakhir maka dalam waktu yang
                                    telah ditentukan, pihak kami transfer dana tersebut ke rekening yang bersangkutan.
                                    Anda bisa juga membuat request pencairan dana sebelum masa kampanye berakhir.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Soekarno Hatta No 09. Malang 65141</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>tim4bansosapp@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 812 3456 7890</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <h3>Bansos App.</h3>
                        <p>
                            BansosApp Memiliki cermin yang mengartikan bahwa Masyarakat Indonesia memiliki komitmen yang
                            kuat terhadap nilai-nilai kebajikan.
                            Kita hidup diciptakan untuk saling tolong-menolong dan saling toleransi satu sama lain.
                        </p>
                        <ul>
                            <li>
                                Cepat <i class="bi bi-check"></i>
                            </li>
                            <li>
                                Terarah <i class="bi bi-check"></i>
                            </li>
                            <li>
                                Aman <i class="bi bi-check"></i>
                            </li>
                            <li>
                                Terpercaya <i class="bi bi-check"></i>
                            </li>
                        </ul>
                        <p class="fst-italic">
                            "Sebaik-baiknya manusia adalah yang paling bermanfaat bagi orang lain dan yang membantu
                            orang dalam kesusahan."
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
</div>

<!-- END container -->
@endsection