@extends('frontend.layout')

@section('content')
        <div class="main-container">
      <section id="hero">
        <div class="hero-left">
          <h1 class="hero-name">Selamat Datang di</h1>
          <h1 class="hero-title"><span>Bilik Becakap</span></h1>
          <p>
            Bilik Becakap merupakan platform belajar yang mewadahi komunikasi sebagai sarana belajar khususnya bagi masyarakat
            lokal
            serta pelestarian bahasa daerah Melayu Belitung Timur.
          </p>
          <a href="#services"><button class="start-button">Mulai</button></a>
          <a href="./about.html"><button class="detail-button">Selengkapnya</button></a>
        </div>
      
      
        <div class="hero-right">
          <img src="{{ asset('FE-BB/images/orang-laptop.png')}}" alt="Person Standing" />
        </div>
      
      </section>
    </div>

    <!-- Services -->
    <section id="services">
      <div class="services main-container">
        <h3 class="pre-title">Feature</h3>
        <h1 class="section-title services-title">Specialized In</h1>

        <div class="grid-3">
          <div class="service">
            <div class="service-icon">
              <img src="{{ asset('FE-BB/images/fitur/penerjemah.png')}}" alt="penerjemah">
            </div>
            <h1>Penerjemah</h1>
            <p>
            Ayo Terjemahkan kalimat dan kata bahasa Indonesia ke bahasa Melayu Senyubuk!
            </p>
            <a href="./penerjemah.html"><button class="fitur-button">Lebih Lanjut</button></a>
          </div>

          <div class="service">
            <div class="service-icon">
              <img src="{{ asset('FE-BB/images/fitur/kamus.png')}}" alt="penerjemah">
            </div>
            <h1>Kamus</h1>
            <p>
            Temukan kata yang belum kamu ketahui serta artinya di Kamus Bahasa Melayu Senyubuk!
            </p>
            <a href="./kamus.html"><button class="fitur-button">Lebih Lanjut</button></a>
          </div>

          <div class="service">
            <div class="service-icon">
              <img src="{{ asset('FE-BB/images/fitur/pembelajaran.png')}}" alt="penerjemah">
            </div>
            <h1>Pembelajaran</h1>
            <p>
            Nikmati pembelajaran dan tuangkan ekspresimu untuk belajar serta lestarikan budaya!
            </p>
            <a href="./pembelajaran.html"><button class="fitur-button">Lebih Lanjut</button></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services -->

    <!-- Desa Senyubuk -->
    <section id="skills">
      <div class="skills main-container">
        <h1 class="section-title">Desa Senyubuk</h1>

        <div class="skills-grid">
          <div class="skills-left">
            <div class="education">
              <div class="education-info">
                <p>Desa Senyubuk adalah salah satu desa di Kecamatan Kelapa Kampit, Kabupaten Belitung Timur, Provinsi Kepulauan Bangka
                Belitung. Desa ini terletak di pesisir pantai timur Pulau Belitung, sekitar 35 kilometer dari ibu kota kabupaten,
                Manggar. Desa Wisata Geologi Senyubuk Namsalu atau bisa disingkat Dewi Gesena, yaitu Desa Wisata yang memiliki potensi
                wisata alam, buatan, dan budaya. Wisata alam yang termasuk yaitu, Nam Salu dan Stoven sedangkan Buatannya, yaitu Pusat
                Informasi Geologi Pulau Belitong dan wisata budayanya yaitu menampilkan atraksi dari nepes (proses pemisahan tanah pasir
                ke biji timah), makan bedulang yang diiringi musik begambus, dan tari-tarian misal tari selamat datang.</p>
              </div>
            </div>
          </div>

          <div class="skills-right">
           <img src="{{ asset('FE-BB/images/namsalu.jpeg')}}" alt="namsalau">
          </div>
        </div>
      </div>
    </section>
    <!-- End Desa Senyubuk  -->

    <!-- Geografis Senyubu-->
    <section id="geografis">
      <div class="geografis-img">
        <img src="{{ asset('FE-BB/images/geografis.png')}}" alt="geografis">
      </div>
    </section>
    <!-- End Geografis Senyubu-->

    <!-- Blog -->
    <section id="blogs">
      <div class="portfolios main-container">
        <h3 class="pre-title">Our Blog</h3>
        <h1 class="section-title">Seputar Desa Senyubuk</h1>

        <div class="grid-3">
          <!-- Blog -->
        @foreach ($blogs->take(3) as $blog)
          <div class="portfolio">
            <div class="blog-cover">
              <a href="{{ route('blog.show', $blog->slug) }}"><img src={{ Storage::url($blog->thumbnail) }} alt="{{ ($blog->title) }}"> </a>
            </div>
            <div class="blog-info">
              <div class="blog-title">
                <h2><a class="judul" href="{{ route('blog.show', $blog->slug) }}">{{ ($blog->title) }}</a></h2>
              </div>
              <div class="calendar-wrapper">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                      stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
                  </g>
                </svg>
                <h4>{{ ($blog->tanggal) }}</h4>
              </div>
              <p>
              {{ ($blog->detail) }}<a class="blog-detail" href="{{ route('blog.show', $blog->slug) }}"><b>Baca Selengkapnya</b></a>
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Portfolios -->

    <!-- Galeri -->
    <section id="galeries">
      <h3 class="pre-title">Our Gallery</h3>
      <h1 class="section-title">Galeri Desa Senyubuk</h1>
      <div class="slider" style="--width: 1000; --height: 560">
        @foreach ($galeris as $galeri)
          <img src="{{ Storage::url($galeri->image)}}" alt="{{ $galeri->title }}">  
        @endforeach
        
      </div>

    </section>
@endsection