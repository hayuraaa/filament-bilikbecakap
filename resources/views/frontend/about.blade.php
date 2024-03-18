@extends('frontend.layout')

@section('content')
        <section id="about">
        <div class="skills main-container">
            <div class="title-ha">
                <img src="{{ asset('FE-BB/images/sub/tentang-bilik.png')}}" alt="sub2">
            </div>
    
            <div class="skills-grid">
                <div class="skills-left">
                    <div class="education">
                        <div class="about-info">
                            <p>Bilik Becakap hadir didorong dari permasalahan dan keresahan yang ada di Desa Senyubuk ialah tidak adanya arsip atau
                            pendataan bahasa daerah di Desa Senyubuk sendiri sehingga timbul kecemasan dari masyarakat dan pemerintah setempat akan
                            hilangnya identitas bahasa daerah Senyubuk. Fitur-fitur yang disediakan dalam Bilik Bercakap yaitu penerjemah, konten
                            informasi desa, dan video pembelajaran beserta modul pembelajaran bahasa melayu belitung.</p>

                            <p>Bilik Becakap diambil dari bahasa Melayu yang artinya ruang untuk berkomunikasi, yang mana sesuai harapan kami agar
                            website Bilik Becakap dapat menjadi wadah untuk komunitas atau kelompok masyarakat yang ingin mendalami pembelajaran
                            bahasa daerah Melayu Belitung melalui layanan dan fitur yang kami sediakan.</p>

                            <p>
                                Bilik Becakap hadir di dalam program Kemah Budaya Kaum Muda (KBKM) 2023 sebagai ruang inkubator yang mewadahi inisiatif
                                kaum muda dalam menciptakan aplikasi dan prakarya serta menjadi jembatan yang mempertemukan antara gagasan dengan
                                eksperimentasi di bidang STEAM (Science, Technology, Engineering, Art, Mathematics). KBKM mendorong para peserta agar
                                karyanya dapat terus berlanjut dan berdampak luas sehingga mampu menjadi solusi untuk permasalahan sosial di tengah
                                masyarakat. Peserta yang berasal dari latar belakang yang beragam menjadikan KBKM sebagai ruang kerja bersama dengan
                                corak gotong-royong untuk mendorong pemajuan kebudayaan.
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="about-feature">
                    <img src="{{ asset('FE-BB/images/about.png')}}" alt="about">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="skills main-container">
            <div class="skills-grid">
                <div class="skills-left">
                    <div class="education">
                        <div class="visimisi-info">
                            <p>
                                <b>Visi :</b> "Menjadi portal unggulan dalam menjembatani pemahaman, apresiasi, dan komunikasi antara bahasa Indonesia dan bahasa
                                Belitung, serta menjadi sumber daya utama untuk memperkaya pengetahuan budaya Belitung.”
                            </p>
                            <ol>
                            
                                <li><b>Misi :</b></li>
                                <li> <b>Terjemahan yang Berkualitas:</b> Membangun dan memelihara kamus bahasa Belitung yang komprehensif dan menggali kekayaan linguistik dari bahasa ini untuk generasi masa depan. Memberikan terjemahan yang akurat dan berkualitas tinggi dari bahasa Indonesia ke bahasa
                                Belitung untuk memudahkan komunikasi antara dua budaya.</li>
                                <li> <b>Pendokumentasian Bahasa Belitung:</b> Membangun dan memelihara kamus bahasa Belitung yang komprehensif dan menggali kekayaan
                                linguistik dari bahasa ini untuk generasi masa depan.</li>
                                <li> <b>Infografis yang Mendidik:</b> Membuat infografis yang informatif dan menarik tentang Belitung, termasuk geografi, sejarah,
                                 budaya, dan destinasi wisata, untuk memperluas pengetahuan tentang daerah ini.</li>
                                <li> <b>Pendukung Pendidikan: </b> Menyediakan sumber daya yang berguna bagi pendidik, peneliti, dan pelajar untuk memahami dan
                                    mempelajari bahasa dan budaya Belitung.</li>
                                <li> <b>Kemudahan Akses:</b> Memastikan website mudah diakses oleh semua orang yang ingin memahami dan berkomunikasi dalam bahasa
                                Belitung.</li>
                                <li> <b>Privasi dan Keamanan:</b> Menyediakan lingkungan yang aman dan menghormati privasi pengguna dalam penggunaan website.</li>
                                <li> <b>Kontinuitas Pengembangan:</b> Melakukan pemeliharaan berkala untuk memastikan bahwa website tetap relevan, up-to-date, dan
                                memberikan nilai tambah yang berkelanjutan.</li>
                                <li> <b>Kemitraan Budaya: </b>Membangun kemitraan dengan komunitas lokal dan kelompok budaya Belitung untuk mendukung dan
                                mempromosikan warisan budaya mereka.</li>
                            </ol>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

        <section class="team">
            <div class="center">
                <h1>Our Team</h1>
            </div>
        
            <div class="team-content">
                @foreach ($teams as $team)
                <div class="box">
                    <img src="{{ Storage::url($team->photo) }}">
                    <h3>{{ ($team->nama) }}</h3>
                    <h5>{{ ($team->position) }}</h5>
                    <div class="icons">
                        <a href="{{ ($team->linkedin) }}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="{{ ($team->instagram) }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection