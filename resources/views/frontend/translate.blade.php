@extends('frontend.layout')

@section('content')
        <section id="penerjemah">
        <div class="penerjemah main-container">
            <div class="penerjemah-right">
                <img src="{{ asset('FE-BB/images/penerjemah.png')}}" alt="penerjemah">
            </div>

            <div class="penerjemah-left">
                <form action="https://formspree.io/f/xeqwdykj" method="POST" class="penerjemah-form">
                    <div>
                        <label for="senyubukText">Masukkan Teks Melayu Belitung:</label>
                        <textarea name="message" id="senyubuktext" cols="25" rows="5"></textarea>
                    </div>
                    <div class="switch-container">
                        <a href="#"><button class="switch-button">
                            <svg viewBox="0 0 64 64" id="Switch">
                                <path
                                    d="m54.895 51.707 9.105-9v-1.414l-9.105-9-1.466 1.414L60.669 41H9v2h51.669l-7.24 7.293zM9.188 12.293l-9.188 9v1.414l9.188 9 1.508-1.414L3.497 23H55v-2H3.497l7.199-7.293"
                                    fill="#54B0AF" class="color000000 svgShape" stroke-width="4"></path>
                            </svg>
                        </button>
                        </a>
                    </div>
                    <div>
                        <label for="indonesiaText">Hasil Terjemahan Bahasa Indonesia:</label>
                        <textarea name="message" id="indonesiatext" cols="25" rows="5"></textarea>
                    </div>
                    <div>
                        <a href="#">
                        <button class="btn-submit">Terjemahkan</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection