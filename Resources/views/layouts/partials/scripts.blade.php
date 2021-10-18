    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- Vendor JS Files -->

  <script src="{{Theme::asset('pub_theme::vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  {{--  
  <script src="{{Theme::asset('pub_theme::vendor/aos/aos.js')}}"></script>
  <script src="{{Theme::asset('pub_theme::vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{Theme::asset('pub_theme::vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{Theme::asset('pub_theme::vendor/php-email-form/validate.js')}}"></script>
  <script src="{{Theme::asset('pub_theme::vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{Theme::asset('pub_theme::vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{Theme::asset('pub_theme::js/main.js')}}"></script>
  --}}
{!! Theme::showScripts(false) !!}

@livewireScripts

@stack('scripts')