<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GapEd Registration</title>

    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
  </head>
  <body>
    <!--top scroll btn-->
    <div class="go-top-btn">
      <img src="{{ asset('images/up-arrow (1).png') }}" alt="" />
    </div>
    <!--akhir top scroll btn-->

    <header class="header">
      <div class="cont-logo">
        <a href="#sec-home" class="logo"> <img src="{{ asset('images/gaped.png') }}" alt="" width="30%"/> </a>
      </div>

      <!--navbar-->
      <input type="checkbox" id="check" />
      <label for="check" class="icons">
        <i class="bx bx-menu" id="menu-icon"></i>
        <i class="bx bx-x" id="close-icon"></i>
      </label>

      <nav class="navbar">
        <a href="#">Home</a>
        <a href="#sec-tentang">About Us</a>
        <a href="#">Program Kami</a>
        <a href="#belajar">Formula Belajar</a>
        <a href="#sec-testimoni">Testimoni</a>
      </nav>
    </header>
    <!--akhir navbar-->

 <!--Home-->
<div class="home">
  <div class="gaped">
     <p class="p-gaped">Lembaga Bimbingan Belajar</p>
     <h1>Gap<span style="color: #029afa;">Ed</span> </h1>
     <p>Gaped adalah lembaga bimbingan belajar yang berdedikasi untuk memberikan dukungan pendidikan khusus bagi siswa yang sedang menjalani gap year. Gap year merupakan fase berharga dalam kehidupan siswa, dan Gaped hadir untuk membantu mereka memanfaatkan waktu ini secara maksimal. </p>
     </div>
       
   <div class="img-gap">
<img src="{{ asset('images/page.png') }}" alt="" width="27%">
   </div>
    

    <!--tombol-->
    <div class="raw-tombol">
      <div class="col-tombol">
        <button>Hubungi Kami</button>
      </div>
      <div class="col-tombol">
        <a href="{{ route('form') }}" target="_blank"><button>Daftar Sekarang</button>
      </div></a>
    </div>

    <!--akhir tombol-->

</div>
 <!--Akhir Home-->
     

    <!--about us-->
    <section class="tentang" id="sec-tentang">
      <h2>About Us</h2>

      <h3>Lembaga Bimbingan Belajar GapEd</h3>

      <p>
        Gaped adalah lembaga pendidikan yang berkomitmen untuk membantu siswa gap year mencapai potensi penuh mereka. Kami memahami bahwa setiap siswa memiliki perjalanan pendidikan yang unik dan berbeda. Kami hadir untuk memberikan bimbingan dan dukungan khusus yang sesuai dengan kebutuhan siswa yang memutuskan untuk menjalani gap year sebelum melanjutkan studi mereka.Di Gaped, kami percaya bahwa gap year adalah waktu berharga untuk refleksi, pertumbuhan, dan eksplorasi. Kami berdedikasi untuk membantu siswa memanfaatkan sepenuhnya pengalaman gap year mereka dan siap mendukung mereka dalam mengejar tujuan pendidikan mereka.
      </p>

      <div class="medsos-tentang">
        <a href=""><img src="{{ asset('images/instagram.png') }}" alt="instagram" width="30px" /></a>
        <a href=""><img src="{{ asset('images/twitter.png') }}" alt="X" width="30px" /></a>
        <a href=""><img src="{{ asset('images/tiktok.png') }}" alt="tiktok" width="30px" /></a>
        <a href=""><img src="{{ asset('images/facebook.png') }}" alt="facebook" width="30px" /></a>
      </div>
    </section>
    <!--akhir about us-->

    <!--Formula Belajar-->
    <section class="formula" id="belajar">
      <h1> Formula 3B Bantu Kamu Mencapai Target Akademikmu!</h1>
    <div class="container">
      <div class="belajar">
        <h2>Belajar</h2>
        <p>GapEd bantu kamu untuk memahami teori dan konsepnya setiap belajar di kelas. Kalau masih bingung, ada Tutorial Service Time (TST) untuk belajar tambahan diluar KBM.</p>
      </div>
      <div class="berlatih">
        <h2>Berlatih</h2>
        <p>Sel-sel otakmu perlu dilatih untuk mengerjakan soal-soal dengan tingkat kesulitan yang setara dengan ujianmu. Untuk itu, ada Buku Sakti dan Empati yang siap membantu.</p>
      </div>
      <div class="bertanding">
        <h2>Bertanding</h2>
        <p>Setelah berlatih, saatnya menguji sudah seberapa jauh progres belajarmu dengan TOBK (Try Out Berbasis Komputer), Racing Soal, dan Battle.</p>
      </div>
    </div>
    </section>
    

    <!--Formula Belajar-->


<!-- Program Kami -->
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / </div>
    <img src="{{ asset('images/slide1.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Program Keunggulan Lembaga Bimbingan Belajar GapEd</h1>
      <p>
        Kami berkomitmen untuk memberikan pengalaman pembelajaran yang berdaya dan terintegrasi, mempersiapkan para siswa tidak hanya untuk ujian SBMPTN, tetapi juga untuk kesuksesan jangka panjang dalam karir dan kehidupan mereka.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 8</div>
    <img src="{{ asset('images/slide2.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Kurikulum Terpadu yang Inovatif</h1>
      <p>
        Menawarkan kurikulum terpadu yang inovatif, mencakup pembelajaran akademis yang mendalam, pelatihan keterampilan berpikir kritis, dan pengembangan kepribadian holistik.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 8</div>
    <img src="{{ asset('images/slide3.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Penggunaan Teknologi Terkini dalam Pembelajaran</h1>
      <p>
        Memanfaatkan teknologi terkini dalam proses pembelajaran, menyediakan akses ke berbagai sumber daya online, bank soal digital, dan platform interaktif.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="{{ asset('images/slide4.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Pelatihan Keterampilan Pribadi dan Sosial</h1>
      <p>
        Menyediakan sesi pelatihan keterampilan pribadi dan sosial yang bertujuan untuk meningkatkan kepercayaan diri, kemampuan komunikasi efektif, kepemimpinan, dan kerja tim.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="{{ asset('images/slide5.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Bimbingan Psikologis dan Manajemen Stres</h1>
      <p>
        Menyediakan layanan bimbingan psikologis dan manajemen stres untuk membantu para siswa mengelola tekanan dan kecemasan terkait persiapan ujian.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="{{ asset('images/slide6.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Simulasi Ujian dan Latihan Berkala</h1>
      <p>
        Menyelenggarakan simulasi ujian dan latihan berkala untuk membiasakan para siswa dengan format dan tipe pertanyaan yang mungkin muncul dalam ujian SBMPTN.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="{{ asset('images/slide7.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Program Pengembangan Karir dan Rencana Studi</h1>
      <p>
        Menyediakan program pengembangan karir dan rencana studi untuk membantu para siswa merencanakan langkah-langkah setelah lulus ujian SBMPTN.
      </p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="{{ asset('images/slide8.jpg') }}" style="width:100%">
    <div class="text">
      <h1>Kegiatan Ekstrakurikuler dan Pelayanan Masyarakat</h1>
      <p>
        Mendorong partisipasi dalam kegiatan ekstrakurikuler dan pelayanan masyarakat untuk mengembangkan keterampilan kepemimpinan, kerjasama, dan kepedulian sosial.
    </div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
</div>

<!--
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
</script>
 -->
<!-- Akhir Program Kami -->

    <!--Halaman Testimoni-->
    <section id="sec-testimoni">
      <div class="testimoni">
        <div class="inner">
          <h1>Testimoni</h1>
          <div class="border"></div>

          <div class="row">
            <div class="col">
              <div class="isitesti">
                <img src="{{ asset('images/makruf.jpg') }}" alt="" />
                <div class="name">Makruf</div>
                <p>"GapEd benar-benar membantu saya untuk sukses masuk kuliah impian. Dengan dukungan dari para pengajar yang berkompeten, saya merasa lebih siap dan yakin dalam menghadapi ujian masuk perguruan tinggi. Terima kasih, GapEd!"</p>
              </div>
            </div>
            <div class="col">
              <div class="isitesti">
                <img src="{{ asset('images/20230415134934__MG_0381.JPG') }}" alt="" />
                <div class="name">Dani</div>
                <p>"GapEd adalah penyelamat sejati bagi saya. Berkat bantuan mereka, saya berhasil masuk ke universitas impian saya. Mereka memberikan dukungan dan panduan yang tak ternilai harganya. Terima kasih atas segala bantuan dan dorongannya!"</p>
              </div>
            </div>
            <div class="col">
              <div class="isitesti">
                <img src="{{ asset('images/20230415142158__MG_0434.JPG') }}" alt="" />
                <div class="name">Talhah</div>
                <p>"GapEd benar-benar membantu saya dalam persiapan masuk kuliah. Dengan dukungan dari para pengajar yang kompeten, saya merasa siap menghadapi ujian masuk universitas. Terima kasih, GapEd!"</p>
              </div>
            </div>
            <div class="col">
              <div class="isitesti">
                <img src="{{ asset('images/foto orang ganteng.png.png') }}" alt="" />
                <div class="name">ilham nur</div>
                <p>"GapEd benar-benar membantu saya dalam persiapan masuk kuliah. Dengan dukungan dari para pengajar yang kompeten, saya merasa bisa dan siap menghadapi ujian ujian yang akan saya lalui . Terima kasih, GapEd!"</p>
          </div>
        </div>
      </div>
    </section>
    <!--Akhir Halaman Testimoni-->


    <!--Footer-->

<footer>
  <div class="grid-foot">
    <div class="grid-item logo-foot">
      <img src="{{ asset('images/gaped.png') }}" alt="" width="20%">
      <p>Bimbingan Belajar Terbaik Buat Kamu Yang <em>Gapyear</em></p>
    </div>
    <div class="grid-item kontak">
      <div class="flex-kontak">
        <h4>Hubungi Kami</h4>
      <a href=""><img src="{{ asset('images/call.png') }}" alt="" width="20px">
      0811-2222-3333-4444
      </a>
      <a href=""><img src="{{ asset('images/email.png') }}" alt="" width="20px">
      gaped@gmail.com
      </a>
      <a href=""><img src="{{ asset('images/whatsapp.png') }}" alt="" width="20px">
      0888-9999-1010-1111
      </a>
      <a href=""><img src="{{ asset('images/line.png') }}" alt="" width="20px">
      gaped
      </a>
      </div>
          
    
      


    </div>
    <div class="grid-item follow">
 <div class="flex-follow">
  <h4>Ikuti Kami</h4>
        <a href="">
          <img src="{{ asset('images/instagram-putih.png') }}" alt="" width="30px">
        </a>
        <a href="">
          <img src="{{ asset('images/facebook-putih.png') }}" alt="" width="30px">
        </a>
        <a href="">
          <img src="{{ asset('images/tiktok-putih.png') }}" alt="" width="30px">
        </a>
        <a href="">
          <img src="{{ asset('images/twitter-putih.pn') }}g" alt="" width="30px">
        </a>
        
 </div>
        
      
    </div>
    <div class="grid-item lokasi">
      <h4>Lokasi</h4>
      <div class="flex-lokasi">
        
      <a href="#">
        <img src="{{ asset('images/location.png') }}" alt="" width="20px">
        Bubutan, Surabaya Pusat
      </a>
      <a href="#">
        <img src="{{ asset('images/location.png') }}" alt="" width="20px">
        Ketintang, Surabaya Selatan
      </a>
      <a href="#">
        <img src="{{ asset('images/location.png') }}" alt="" width="20px">
        Semampir, Surabaya Utara
      </a>
      </div>
      
    </div>
    <div class="grid-item copyright">
      <p>© Copyright 2023, Gaped. All Rights Reserved <br>Author : Team 12B 2022 </p>
      
    </div>
  </div>


   
  
</footer>

    <!--Akhir Footer-->
    <script src="{{ asset('JS/script.js') }}"></script>
  </body>
</html>