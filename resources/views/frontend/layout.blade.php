<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('FE-BB/styles/responsive.css')}}" />
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Bilik Becakap</title>
    <link rel="icon" href="{{ asset('FE-BB/images/logo.svg')}}" type="image/x-icon">
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="main-container">
        <div class="nav">
          <div class="logo">
            <a href="./index.html"><img src="{{ asset('FE-BB/images/logo.png')}}" alt="Bilik Becakap Logo"></a>
          </div>

          <nav class="navbar">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/kamus">Kamus</a></li>
              <li><a href="/penerjemah.html">Penerjemah</a></li>
              <li><a href="/pembelajaran.html">Pembelajaran</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/about.html">About Us</a></li>
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
    <!-- End Header -->


    <!-- End Galeri -->

    <!-- Contact --
    <section id="contact">
      <div class="contact main-container">
        <div class="contact-left">
          <form
            action="https://formspree.io/f/xeqwdykj"
            method="POST"
            class="contact-form"
          >
            <div>
              <input type="text" placeholder="Name" name="name" />
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="Message"
              ></textarea>
            </div>
            <div>
              <button class="btn-submit">Send Message</button>
            </div>
          </form>
        </div>

        <div class="contact-right">
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Address</h4>
              <p>3424 Layman Avenue, Fayetteville, NC</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Phone</h4>
              <p>(501) 414-1541</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Email</h4>
              <p>dummyemail@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    End Contact -->

    @yield('content')

    <!-- Fomter -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <img src="{{ asset('FE-BB/images/logo-2.png')}}" alt="logo-2">
            <ul>
            <p>Platform pelestarian bahasa daerah Melayu Desa Senyubuk dengan berbagai fitur sebagai kebudayaan daerah.</p>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Feature</h4>
            <ul>
              <li><a href="./kamus.html">Kamus</a></li>
              <li><a href="./penerjemah.html">Penerjemah</a></li>
              <li><a href="./pembelajaran.html">Pembelajaran</a></li>
              <li><a href="./blog">Blog</a></li>
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
    <div class="copyright">
      <div class="col-12 text-center"> 
        <p>
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          Bilik Becakap
        </p>
      </div>
    </div>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('FE-BB/js/main.js')}}"></script>
  </body>
</html>
