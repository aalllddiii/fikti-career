<?php
require('../include/head.php')
?>

<?php
require('../include/navbar.php')
?>

<main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="speakers-details">
        <div class="container">
            <div class="section-header">
                <h2>Competition</h2>
                <!-- <p>“Become an SEO and SEM Specialist”</p> -->
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="../../assets/img/event/uxdes.png" alt="Speaker 1" class="img-fluid">
                </div>

                <div class="col-md-8 my-auto">
                    <div class="details">

                        <h2>UX Design</h2>

                        <p>Kompetisi UX Design adalah kompetisi desain interaksi produk yang berorientasi pada kenyamanan dan kemudahan bagi pengguna.
                        </p>
                        <div class="row">
                            <div class="col-md-5 mb-5">
                                <p>Narahubung 1: Raisa Azka Nafilah
                                    <br> <i class="bi bi-whatsapp"></i> 085778157111
                                    <br> <i class="bi bi-line"></i> raisazka28
                                </p>
                                <p>Narahubung 2: Muhammad Isa
                                    <br> <i class="bi bi-whatsapp"></i> 085156984781
                                    <br> <i class="bi bi-line"></i> mcngb25
                                </p>

                                <br>
                                <a href="<?= $compe ?>" class="btn btn-dark">Daftar</a>
                                <a href="../../doc/CTF.pdf" class="btn btn-dark a1" download><i class="bi bi-download"></i> Rulebook</a>
                            </div>
                            <div class="col-md-7 text-center">
                                <div class="card text-center" data-tilt data-tilt-scale="1.1">
                                    <h3>Total Hadiah Senilai</h3>
                                    <h1>Jutaan Rupiah</h1>
                                    <h3>+ E-Certificate</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="benefit" class="mb-5">
        <div class="container">
            <!-- <div class="section-header">
          <h2>Benefits</h2>
        </div> -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <!-- <i class="bi bi-calendar-event"></i> -->
                        <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
                        </lord-icon>
                        <!-- <img src="../../assets/img/icon/45-clock-time-outline.gif" width="65"> -->
                        <h4 class="card-title mt-2">Waktu Pelaksanaan</h4>
                        <p>19 Mei - 27 Mei 2022 </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <!-- <i class="bi bi-broadcast"></i> -->
                        <lord-icon src="https://cdn.lordicon.com/tclnsjgx.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
                        </lord-icon>
                        <h4 class="card-title mt-2">Tempat</h4>
                        <p>Zoom Cloud Meetings</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../assets/img/icon/759-ticket-coupon-outline.svg" width="65">
                        <!-- <i class="bi bi-ticket-detailed"></i> -->
                        <h4 class="card-title mt-2">Biaya Pendaftaran</h4>
                        <p>Rp. 80,000.00 / Tim</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hanya garis  -->

    <!-- <div class="container">
        <hr>
        <hr>
    </div> -->

    <section id="timeline" class="py-5">
        <div class="container">

            <!-- <div class="content"> -->
            <div class="section-header">
                <!-- <h2>Competition</h2> -->
                <h2>
                    <center>Competition Timeline</center>
                </h2>
                <!-- <p>“Become an SEO and SEM Specialist”</p> -->
            </div>
            <!-- </div> -->
            <div class="timeline">
                <div class="containers left">
                    <i class="fa fa-code-fork" aria-hidden="true"></i>
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/uukerzzv.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Pendaftaran</h2>
                        <p>10 April - 12 Mei 2022</p>
                    </div>
                </div>
                <div class="containers right">
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/jqeuwnmb.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Batas Submit Proposal dan Poster</h2>
                        <p>14 Mei 2022</p>
                    </div>
                </div>
                <div class="containers left">
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/ssdupzsv.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Pengumuman Finalis</h2>
                        <p>18 Mei 2022</p>
                    </div>
                </div>
                <div class="containers right">
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Technical Meeting</h2>
                        <p>19 Mei 2022</p>
                    </div>
                </div>
                <div class="containers left">
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Babak Final</h2>
                        <p>27 Mei 2022</p>
                    </div>
                </div>
                <div class="containers right">
                    <div class="content">
                        <lord-icon src="https://cdn.lordicon.com/uuxlmlza.json" trigger="loop" colors="primary:#37516c,secondary:#fd5286" style="width:75px;height:75px">
                        </lord-icon>
                        <h2>Pengumuman Pemenang</h2>
                        <p>04 Juni 2022</p>

                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center justify-content-center">
                <div class="col-8 detailz">

                    <a href="<?= $compe ?>" class="btn btn-light mb-5">DAFTAR</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

        <div class="container" data-aos="fade-up">

            <div class="section-header" style="margin-bottom: 40px;">
                <h2>F.A.Q </h2>
                <!-- <p>Pertanyaan Seputar Kompetisi TechnoFair 9.0 </p> -->
            </div>

            <div class="row justify-content-center mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-9">

                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                                Bagaimana cara mendaftarkan diri dalam kompetisi UX Design TechnoFair 9.0?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Peserta telah mengikuti prosedur pendaftaran pada website resmi TechnoFair 9.0 (www.technofair.id) dan melengkapi data pendaftaran dengan benar. Peserta yang tidak memenuhi persyaratan pendaftaran sampai waktu yang ditentukan akan dinyatakan gugur.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                                Apakah setiap peserta harus melengkapi data pribadi secara terpisah?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Pengunggahan data diwakilkan oleh ketua tim dengan melampirkan foto/scan Kartu Tanda Mahasiswa/Kartu Tanda Pelajar yang masih aktif yang diunggah pada dashboard tim pada website TechnoFair 9.0 (www.technofair.id).
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                                Bagaimana apabila pendaftar tidak memiliki KTM (Kartu Tanda Mahasiswa) atau Kartu Pelajar?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dapat digantikan dengan Kartu Rencana Studi (untuk mahasiswa) atau Surat Keterangan resmi dari Perguruan Tinggi/Instansi/Sekolah terkait.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
                                Bagaimana sistem kompetisi UX Design?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Pada kompetisi ini terdapat 2 babak, babak penyisihan berupa pengumpulan proposal dan poster dan babak final berupa presentasi yang diselenggarakan melalui media Zoom cloud meetings.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">
                                Apakah karya yang pernah diikutsertakan dalam kompetisi lain dapat diikutsertakan kembali?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Tidak, karya yang pernah diikuti dalam kompetisi lain tidak boleh diikutsertakan. Jika ketahuan maka peserta akan <b>didiskualifikasi</b>.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
                                Bolehkah seorang peserta terdaftar lebih dari 1 kali pada kompetisi lainnya dalam TechnoFair 9.0?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Boleh, akan tetapi setiap peserta hanya dapat menjadi ketua tim pada maksimal 1 cabang kompetisi. Apabila seseorang terdaftar pada 2 tim atau lebih masuk ke babak final, kemudian jadwal kompetisi kedua tim bersamaan, maka panitia tidak bertanggung jawab untuk mengubah jadwal kompetisi.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">
                                Apakah dosen pembimbing itu harus dari perguruan tinggi yang sama?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, dosen pembimbing dan peserta harus dari perguruan tinggi yang sama.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">
                                Bolehkah mendaftar jika kelompok saya hanya terdiri dari 2 orang peserta?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Boleh, dalam 1 tim diperbolehkan kurang dari 3 peserta dengan maksimal 3
                                    peserta. Akan tetapi, tidak diperbolehkan lebih dari 3 orang peserta.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">
                                Bagaimana saya bisa mendapatkan template proposal dan logo?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Template proposal dan logo dapat diunduh pada website TechnoFair 9.0 (www.technofair.id) setelah login.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq10" class="collapsed question">
                                Siapa saja yang bisa daftar dalam kompetisi ini?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq10" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kompetisi ini dikhususkan untuk mahasiswa aktif perguruan tinggi negeri/swasta.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq11" class="collapsed question">
                                Bolehkah tim saya mendaftar jika berasal dari jenjang pendidikan berbeda (seperti D3 dan S1 dalam 1 tim) maupun dari jurusan yang berbeda?
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq11" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Boleh asalkan peserta tidak berbeda Universitas/Perguruan Tinggi/Sekolah.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </section>
    <!-- End  F.A.Q Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php
require('../include/footer.php')
?>