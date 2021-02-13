<!doctype html>
<html lang="en">
<head>
  <title>Covid &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="asfrontand/fonts/icomoon/style.css">

  <link rel="stylesheet" href="asfrontand/css/bootstrap.min.css">
  <link rel="stylesheet" href="asfrontand/css/jquery-ui.css">
  <link rel="stylesheet" href="asfrontand/css/owl.carousel.min.css">
  <link rel="stylesheet" href="asfrontand/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="asfrontand/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="asfrontand/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="asfrontand/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="asfrontand/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="asfrontand/fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="asfrontand/css/aos.css">

  <link rel="stylesheet" href="asfrontand/css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.html" class="mb-0">Covid-19<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="prevention.html" class="nav-link">Pencegahan</a>
                  <ul class="dropdown">
                    <li><a href="#" class="nav-link">Tinggal di rumah</a></li>
                    <li><a href="#" class="nav-link">Pertahankan jarak sosial</a></li>
                    <li><a href="#" class="nav-link">Kenakan masker wajah</a></li>
                    <li><a href="#" class="nav-link">Cuci tanganmu</a></li>
                    <li class="has-children">
                      <a href="#">Tautan Lainnya</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#" class="nav-link">Gejala</a></li>
                <li><a href="about.html" class="nav-link">Tentang</a></li>


                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="contact.html" class="nav-link">Kontak</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>

    

    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">Covid-19 Kesadaran</span>
            <h1 class="heading mb-3">Tetap Aman. Tinggal Dirumah.</h1>
            <p class="mb-5">"Kamu tidak bisa menghentikan matahari terbenam, tetapi kamu pasti bisa menghentikan virus corona. Di rumah saja."</p>
            <p class="mb-4"><a href="#" class="btn btn-primary">Bagaimana mencegahnya</a></p>



          </div>
          <div class="col-lg-6">
            <figure class="illustration">
              <img src="asfrontand/images/illustration.png" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->
    
    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Statistik virus Corona</h2>
            <p></p>
          </div>
        </div>

        <div class="row"> 
          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">{{ $positif }}</strong>
              <span class="label">Positif</span>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">{{ $meninggal }}</strong>
              <span class="label">Meninggal</span>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number">{{ $sembuh }}</strong>
              <span class="label">Sembuh</span>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
              <strong class="d-block number"><?php echo $getglobal['value']; ?></strong>
              <span class="label">Global</span>
            </div>
          </div>

        </div>
      </div>
    </div>

{{--  --}}
    {{-- TABLE KASUS LOCAL --}}
    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
                <h2 class="section-heading">Data Kasus Indonesia Berdasarkan Provinsi</h2>
            </div>

            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                <table class="table table-bordered table-string mb-0" with="100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>No</center></th>
                            <th scope="col"><center>Provinsi</center></th>
                            <th scope="col"><center>Jumlah Positif</center></th>
                            <th scope="col"><center>Jumlah Meninggal</center></th>
                            <th scope="col"><center>Jumlah Sembuh</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;    
                        @endphp

                    @foreach ($lokal as $data)
                    <tr>
                        <th scope="row"><center>{{$no++}}</center>
                        <td><center>{{$data->nama_provinsi}}</center></td>
                        <td><center>{{number_format($data->jumlah_positif)}}</center></td>
                        <td><center>{{number_format($data->jumlah_meninggal)}}</center></td>
                        <td><center>{{number_format($data->jumlah_sembuh)}}</center></td>
                        </th>
                    </tr>   
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

{{--  --}}
     <!-- ======== Table  Global ======= -->
    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
                <h2 class="section-heading">Data Kasus Global</h2>
            </div>

        <div class="row content" data-aos="fade-up">
              
            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

              <table class="table table-bordered table-striped mb-0 " width="100%">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Negara</center></th>
                    <th scope="col"><center>Jumlah Positif</center></th>
                    <th scope="col"><center>Jumlah Sembuh</center></th>
                    <th scope="col"><center>Jumlah Meninggal</center></th>
                  </tr>
                </thead>
              <tbody>
              @php
                $no = 1;
              @endphp

                @foreach($globall as $data)
                    <tr>
                      <td> <?php echo $no++ ?></td>
                      <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                      <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                      <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                      <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
          </div>
        </div>



{{--  --}}

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <figure class="img-play-vid">
              <img src="asfrontand/images/hero_2.jpg" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="text">Tonton Videonya</span>
                <a href="https://www.youtube.com/watch?v=OPeuzQYRzAM" data-fancybox class="btn-play">
                  <span class="icon-play"></span>
                </a>
              </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="mb-4 section-heading">Apa itu Coronavirus?</h2>
            <p></p>
            <ul class="list-check list-unstyled mb-5">
              <li>Wortel Lorem ipsum</li>
              <li>Consectetur adipisicing elit</li>
              <li>Karenanya rasa sakit</li>
            </ul>
            <p><a href=" ## " class="btn btn-primary">Belajarlah lagi</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-protection"></span>
            </div>
            <div>
              <h3>Perlindungan</h3>
              <span class="d-block"></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-patient"></span>
            </div>
            <div>
              <h3>Pencegahan</h3>
              <span class="d-block"> </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-hand-sanitizer"></span>
            </div>
            <div>
              <h3>Perawatan</h3>
              <span class="d-block"></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-virus"></span>
            </div>
            <div>
              <h3>Gejala</h3>
              <span class="d-block">.</span>
            </div>
          </div>
        </div>
      </div>
    </div>






{{--  --}}

    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="row">
              <div class="col-6 col-lg-6 mt-lg-5">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-stay-at-home"></span>
                  </div>
                  <div class="body">
                    <h3>Tinggal di rumah</h3>
                    <p>Meredam Penyebaran Virus Corona SARS-CoV-2
                        Physical distancing dengan cara di rumah saja merupakan himbauan yang bertujuan untuk menekan risiko penyebaran virus corona penyebab COVID-19. Hal itu dikarenakan virus corona bisa menular dengan droplets yang tak disadari bisa dikeluarkan orang lain di sekitar.
                    </p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-patient"></span>
                  </div>
                  <div class="body">
                    <h3>Kenakan masker wajah</h3>
                    <p>
                        yaitu masker bedah dan masker N95. Masker bedah dapat dijadikan pilihan untuk mencegah penularan virus Corona pada anak karena dilengkapi lapisan antiair yang dapat menghalau percikan air liur. Selain itu, masker ini juga lebih nyaman untuk dipakai.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-6 col-lg-6">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-social-distancing"></span>
                  </div>
                  <div class="body">
                    <h3>Pertahankan jarak sosial</h3>
                    <p>
                         jarak 3 sampai 6 kaki dari satu sama lain ini disebut sebagai zona pernapasan. Jadi, jika Anda berdiri dalam jarak 3 sampai 6 kaki dari saya, Anda mungkin menghirup sebagian dari apa yang saya hembuskan. Dan tentu saja jika saya memiliki virus,
                          apa yang saya hembuskan secara mikroskopis mengandung virus." Kata Dr. William Schaffner.
                    </p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-hand-washing"></span>
                  </div>
                  <div class="body">
                    <h3>Cuci tanganmu</h3>
                    <p>
                        Mencuci tangan dengan sabun adalah salah satu tindakan sanitasi dengan membersihkan tangan dan jari jemari menggunakan air dan sabun oleh manusia untuk menjadi bersih dan memutuskan mata rantai kuman. Mencuci tangan dengan sabun (CTPS) dikenal juga sebagai salah satu upaya pencegahan penyakit.
                    </p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          {{-- GEJALA MENCENGAH --}}
          <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">Bagaimana Mencegah Corona virus?</h2>
            <p>Gunakan masker.Selamatkan nyawa.</p>
            <p class="mb-4"></p>

            <ul class="list-check list-unstyled mb-5">
              <li>Cuci tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan alkohol.</li>
              <li>Jika demam, batuk, atau kesulitan bernapas, segera cari bantuan medis.</li>
              <li>Kenakan masker jika pembatasan fisik tidak dimungkinkan.</li>
            </ul>

            <p><a href="#" class="btn btn-primary">Baca lebih lanjut tentang pencegahan</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">Apa yang perlu Anda lakukan</span>
            <h2 class="mb-4 section-heading">Bagaimana Melindungi Diri Anda</h2>
            <p>Jangan sampai kita dibuat sakit supaya mensyukuri kesehatan dan keselamatan. Bersyukur itu sebuah bentuk perlindungan.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>Kamu seharusnya melakukan</h3>
                <ul class="list-unstyled check">
                  <li>Tinggal di rumah</li>
                  <li>Pakai Masker setiap anda keluar rumah</li>
                  <li>Gunakan Sanitizer</li>
                  <li>Disinfeksi rumah Anda</li>
                  <li>Cuci tanganmu</li>
                  <li>Menerapkan physical distancing dan isolasi mandiri</li>
                  <li>Menjaga daya tahan tumbuh</li>
                </ul>
              </div>

              <div class="col-lg-6 dont ">
                <h3>Anda harus menghindari</h3>
                <ul class="list-unstyled cross">
                  <li>Hindari orang yang terinfeksi</li>
                  <li>Hindari binatang</li>
                  <li>Hindari berjabat tangan</li>
                  <li>Hindari permukaan yang terinfeksi</li>
                  <li>Jangan sentuh wajahmu</li>
                  <li>Hindari orang-orang yang berkumpulan/keramaian</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="asfrontand/images/protect.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading" class="gejala">Gejala Corona Virus</h2>
            <p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. 
                Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa perlu dirawat di rumah sakit.

            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="asfrontand/images/symptom_high-fever.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Demam tinggi</h3>
                <p> Menurut dr Erlina Burhan SpP(K) MSc PhD dari Kelompok Kerja (Pokja) Infeksi Pengurus Pusat Perhimpunan Dokter Paru Indonesia,  sejak awal wabah virus corona, gejala yang paling umum dan banyak pasien alami, mencapai 98%, ialah demam tinggi di atas 38,5 derajat Celsius.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="asfrontand/images/symptom_cough.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Batuk kering & Pilek</h3>
                <p> Batuk yang dimaksudkan dalam kategori kemungkinan terinfeksi virus corona adalah batuk yang terlampau sering dalam sejam. Umumnya, batuk kering dan terjadi terus-menerus, secara lebih dari tiga kali 24 jam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="asfrontand/images/symptom_sore-troath.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Sakit tenggorokan</h3>
                <p>Persoalan sakit tenggorokan umumnya bisa siapa saja rasakan dan kapan saja. Ahli gizi Dr dr Tan Shot Yen MHum menyebutkan, jika Anda mengalami sakit tenggorokan hanya di pagi hari, bisa jadi keluhan itu hanyalah sesaat saja.
                    Hal itu bisa terjadi, saat selama Anda tidur dan terlalu banyak menghirup udara tanpa disadari juga membuat tenggorokan Anda kering di pagi hari.
                    Namun, jika mengalami keluhan tenggorokan kering yang terus-menerus selama beberapa hari, Anda juga perlu mewaspadai ini. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="asfrontand/images/symptom_headache.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3> Berkurang indera pengecap</h3>
                <p>Gangguan fungsi pernapasan tidak hanya terlihat dari berkurangnya indera penciuman. Erlina menyebutkan, indera pengecap pada lidah yang berkurang juga harus masyarakat curigai sebagai ada gangguan fungsi tubuh Anda, yang bisa jadi akibat infeksi virus corona.
                        Perhatikan diri sendiri, jika merasa tidak bisa atau berkurang kemampuan memilah rasa makanan yang Anda makan dan tidak hanya sesekali saja, ini patut Anda curigai sebagai infeksi Covid-19.
                        Berkurangnya indera penciuman dan pengecap ini juga ahli Inggris katakan sebagai gejala potensial yang bisa muncul tanpa ada gejala lainnya.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="note row">

              <div class="col-lg-8 mb-4 mb-lg-0"><strong>Tetap di rumah dan hubungi dokter Anda:</strong>
                 Segera cari bantuan medis jika Anda mengalami gejala serius. Selalu hubungi dokter atau fasilitas kesehatan yang ingin Anda tuju sebelum mengunjunginya.
                </div>
              <div class="col-lg-4 text-lg-right">
                <a href="https://bansos.pikobar.jabarprov.go.id" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Saluran bantuan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Berita &amp; Artikel</h2>
            <p>Berita Terkini Tentang Covid-19 Di Dunia dan Dalam Negeri</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">11 Feb, 2021</span>
                <img src="asfrontand/images/china.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="https://www.kompas.com/global/read/2021/02/11/184058970/china-sebut-covid-19-di-wuhan-berasal-dari-kepala-babi-yang-diimpor?page=all"
                >China Sebut Covid-19 di Wuhan Berasal dari Kepala Babi yang Diimpor</a></h3>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">13 Feb, 2021</span>
                <img src="asfrontand/images/vak.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="https://www.kompas.com/tren/read/2020/12/20/150200065/sebanyak-1-6-juta-orang-di-dunia-telah-disuntik-vaksin-covid-19?page=all"
                >Sebanyak 1,6 Juta Orang di Dunia Telah Disuntik Vaksin Covid-19</a></h3>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-entry">
              <a href="#" class="thumb">
                <span class="date">12 Feb, 2021</span>
                <img src="asfrontand/images/99.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="post-meta text-center">
                <a href="">
                  <span class="icon-user"></span>
                  <span>Admin</span>
                </a>
                <a href="#">
                  <span class="icon-comment"></span>
                  <span>3 Comments</span>
                </a>
              </div>
              <h3><a href="https://nasional.kompas.com/read/2021/02/12/06355041/update-99-persen-wilayah-indonesia-terpapar-covid-19-vaksinasi-untuk?page=all">
                  99 Persen Wilayah Indonesia Terpapar Covid-19.</a></h3>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">Tentang</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
            <div class="my-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">tautan langsung</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Gejala</a></li>
                  <li><a href="#">Pencegahan</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Tentang virus Corona</a></li>
                  <li><a href="#">Hubungi kami</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Tautan Bermanfaat</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Tenaga kesehatan</a></li>
                  <li><a href="#">LGU Facilities</a></li>
                  <li><a href="#">Lindungi Keluarga Anda</a></li>
                  <li><a href="#">Kesehatan Dunia</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Sumber daya</h2>
                <ul class="list-unstyled">
                  <li><a href="#">WHO Website</a></li>
                  <li><a href="#">CDC Website</a></li>
                  <li><a href="#">Gov Website</a></li>
                  <li><a href="#">DOH Website</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div> <!-- .site-wrap -->

  <script src="asfrontand/js/jquery-3.3.1.min.js"></script>
  <script src="asfrontand/js/jquery-ui.js"></script>
  <script src="asfrontand/js/popper.min.js"></script>
  <script src="asfrontand/js/bootstrap.min.js"></script>
  <script src="asfrontand/js/owl.carousel.min.js"></script>
  <script src="asfrontand/js/jquery.countdown.min.js"></script>
  <script src="asfrontand/js/jquery.easing.1.3.js"></script>
  <script src="asfrontand/js/aos.js"></script>
  <script src="asfrontand/js/jquery.fancybox.min.js"></script>
  <script src="asfrontand/js/jquery.sticky.js"></script>
  <script src="asfrontand/js/isotope.pkgd.min.js"></script>


  <script src="asfrontand/js/main.js"></script>


</body>
</html>