@extends('frontend.layout')

@section('content')
    
        <section id="pembelajaran">
        <div class="pembelajaran tmain-container">
            <div class="judul-modul">
                <h1>{{ $pembelajaran->{'judul-modul'} }}</h1>
            </div>
            <div class="pembelajaran-info">
                <p>{!!$pembelajaran->{'kontent-modul'}!!}
                </p>

                <!-- <embed src="/pdf/modul1.pdf" width="100%" height="600" frameborder="0" scrolling="no"></embed> -->

                <!-- <div id="viewer" style="width: 100%; height: 1000px;"></div>
                <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
                <script>
                    const config = {
                        documentId: '640c4074-ce8f-49ae-91db-88d2de0cfe17',
                        darkMode: true,
                    };
                    CloudPDF(config, document.getElementById('viewer')).then((instance) => {

                    });
                </script> -->
                <iframe id="viewer" style="width: 100%; height: 600px;" src="{{ Storage::url($pembelajaran->pdf) }}" frameborder="0" allowfullscreen></iframe>
                <iframe id="viewer" style="width: 100%; height: 600px;" src="{{ ($pembelajaran->viedo) }}" frameborder="0" allowfullscreen></iframe>

            </div>
        </div>

    </section>

@endsection