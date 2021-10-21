@extends('pub_theme::layouts.app')
@section('content')
    @include('pub_theme::layouts.partials.headernav')
    <section id="hero" class="d-flex align-items-center pt-0">
        <div class="container position-relative" {{-- data-aos="fade-up"data-aos-delay="100" --}}>
            <div class="section-title">
                <h2>Negozi</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        @include($view_work.'.side_category')
                    </div>
                    <div class="col-8">
                        {{-- @include($view_work.'.cards') --}}
                        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                            @foreach ($rows as $shop)
                                <div class="col">
                                    <div class="cardmb-4 rounded-3 shadow-sm">
                                        <img class="card-img-top"
                                            src="{{ Panel::get($shop)->imgSrc(['width' => 450, 'height' => 400]) }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $shop->title }}</h5>
                                            <p class="card-text">{!! $shop->subtitle !!}</p>
                                            {{-- <ahref="#"class="btnbtn-primary">Gosomewhere</a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    N {{ $rows->total() }}
@endsection
