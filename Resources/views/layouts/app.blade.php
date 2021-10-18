<!DOCTYPE html>
<html lang="en">

  @include('pub_theme::layouts.partials.htmlheader')

  <body>
    

    @yield('content')


    {{--  
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    --}}
    @include('pub_theme::layouts.partials.scripts')
</body>

</html>