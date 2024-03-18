
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/responsive.css')}}" />
    <title>Kamus - Bilik Becakap</title>
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/datatablesnet.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/datatables.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="{{ asset('FE-BB/images/logo.svg')}}" type="image/x-icon">


</head>
<body>
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="/"><img src="{{ asset('FE-BB/images/logo.png')}}" alt="Bilik Becakap Logo"></a>
                </div>
    
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/kamus">Kamus</a></li>
                        <li><a href="/translate">Penerjemah</a></li>
                        <li><a href="./pembelajaran.html">Pembelajaran</a></li>
                        <li><a href="./blog">Blog</a></li>
                        <li><a href="./about">About Us</a></li>
                    </ul>
                </nav>
    
                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- =======  Data-Table  = Start  ========================== -->
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered dt-responsive break-spaces" style="width:100%">
                        <thead class="table-primary">
                            <tr>
                                <th>Bahasa Indonesia</th>
                                <th>Melayu Belitung</th>
                                <th>Audio</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($kamuses as $kamus)
                            <tr>
                                    <td>{{ $kamus->{'bahasa melayu'} }}</td>
                                    <td>{{ $kamus->{'bahasa indonesia'} }}</td>
                                <td>
                                    <audio controls>
                                        <source src="{{ Storage::url($kamus->audio)}}" type="audio/mpeg">
                                    </audio>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- =======  Data-Table  = End  ===================== -->
        <!-- Fomter -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <img src="{{ asset('FE-BB/images/logo-2.png')}}" alt="logo-2">
                        <ul>
                            <p>Platform pelestarian bahasa daerah Melayu Desa Senyubuk dengan berbagai fitur sebagai kebudayaan
                                daerah.</p>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Feature</h4>
                        <ul>
                            <li><a href="./kamus.html">Kamus</a></li>
                            <li><a href="./penerjemah.html">Penerjemah</a></li>
                            <li><a href="./pembelajaran.html">Pembelajaran</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./about.html">About Us</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Hubungi Kami</h4>
                        <p>
                            Senyubuk, Kec. Kelapa Kampit, Kabupaten Belitung Timur, Kepulauan Bangka Belitung 33571
                        </p>
        
                        <p>
                            admin@bilikbercakap.com
                        </p>
                        <p>
                            kbkmsenyubuk@gmail.com
                        </p>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="social-links">
                            <img src="{{ asset('FE-BB/images/logo-footer/kemendikbud.png')}}" alt="lofo-footer">
                            <img src="{{ asset('FE-BB/images/logo-footer/kbkm.png')}}">
                            <img src="{{ asset('FE-BB/images/logo-footer/kampusmerdeka.png')}}">
                            <img src="{{ asset('FE-BB/images/logo-footer/beltim.png')}}" alt="lofo-footer4">  
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


    <script src="{{ asset('FE-BB/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                lengthChange: false,
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>
</html>