<<<<<<< HEAD
      <div class="row icon-boxes">
        {{-- 
        @php
          dddx($this->categories);
        @endphp

        @foreach($this->categories as $category)

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">

                <img src="{{ Theme::asset('pub_theme::img/svg/food.svg') }}">

            <h4 class="title text-center"><a href="">{{ $category->title }}</a></h4>
          </div>
        </div>
        @endforeach
        --}}



        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">

                <img src="{{ Theme::asset('pub_theme::img/svg/food.svg') }}">

            <h4 class="title text-center"><a href="">Cibo</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
                <img src="{{ Theme::asset('pub_theme::img/svg/gifts.svg') }}">
            <h4 class="title text-center">
                <a href="">Regali</a>
            </h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">

                <img src="{{ Theme::asset('pub_theme::img/svg/shopping.svg') }}">

            <h4 class="title text-center"><a href="">Shopping</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">

                <img src="{{ Theme::asset('pub_theme::img/svg/markets.svg') }}">
            <h4 class="title text-center"><a href="">Supermercati</a></h4>
          </div>
        </div>


        {{-- 
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ Theme::asset('pub_theme::img/svg/markets.svg') }}"></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                    </div>
                </div>
                --}}


      </div>
=======
<div class="row icon-boxes">
	@foreach($this->categories as $category)
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
		<div class="icon-box">
			<img src="{{ Theme::asset('pub_theme::img/svg/food.svg') }}">
			<h4 class="title text-center">
        <a href="">{{ $category['post']['title'] }}</a>
      </h4>
		</div>
	</div>
	@endforeach
	{{-- 
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
		<div class="icon-box">
			<img src="{{ Theme::asset('pub_theme::img/svg/food.svg') }}">
			<h4 class="title text-center"><a href="">Cibo</a></h4>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
		<div class="icon-box">
			<img src="{{ Theme::asset('pub_theme::img/svg/gifts.svg') }}">
			<h4 class="title text-center">
				<a href="">Regali</a>
			</h4>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
		<div class="icon-box">
			<img src="{{ Theme::asset('pub_theme::img/svg/shopping.svg') }}">
			<h4 class="title text-center"><a href="">Shopping</a></h4>
		</div>
	</div>
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
		<div class="icon-box">
			<img src="{{ Theme::asset('pub_theme::img/svg/markets.svg') }}">
			<h4 class="title text-center"><a href="">Supermercati</a></h4>
		</div>
	</div>
	--}}
	{{-- 
	<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
		<div class="icon-box">
			<div class="icon">
				<img src="{{ Theme::asset('pub_theme::img/svg/markets.svg') }}">
			</div>
			<h4 class="title"><a href="">Nemo Enim</a></h4>
		</div>
	</div>
	--}}
</div>
>>>>>>> 1a413ee12e2768fdb139b88a72c12ba8b934bce7
