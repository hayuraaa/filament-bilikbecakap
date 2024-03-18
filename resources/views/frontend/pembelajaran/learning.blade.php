@extends('frontend.layout')

@section('content')

    @foreach ($pembelajarans as $pembelajaran)
    <section id="pembelajaran">
        <div class="pembelajaran tmain-container">
            <div class="pembelajaran-grid">
                <div class="grid-sampul">
                    <img src="{{ Storage::url($pembelajaran->sampul) }}" alt="modul-1">
                </div>
                <div class="grid-keterangan">
                    <div class="title-pembelajaran">
                        <p class="judul-pembelajaran">{{ $pembelajaran->{'judul-modul'} }}</p>
                        <p class="keterangan-pembelajaran">{{ $pembelajaran->{'penjelasan-modul'} }}</p>
                    </div>
                    <a href="{{ route('pembelajaran.modul', $pembelajaran->slug) }}"><button class="pembelajaran-btn">Pelajari Lebih Lanjut</button></a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    
@endsection