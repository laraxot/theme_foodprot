@extends('pub_theme::layouts.app')
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Food Proto</h1>
          <h2>Tema prototito</h2>
        </div>
      </div>

      @livewire('shop::search_address_category')


    </div>
  </section>



@endsection