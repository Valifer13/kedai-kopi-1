@extends('layouts.app')

@section('title', 'Reservation Page')

@section('content')
<x-page-header title="Reservasi" />

<!-- Section Select Table -->
<section id="select-table" class="padd-100">
    <span class="section-suptitle text-center">Table Available</span>
    <h2 class="section-title sep-type-2 text-center">Select Your Table</h2>
    <p class="section-resume">
        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
        lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
    </p>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="carousel-table">
                    <div class="table-page">
                        @php
                        $pola_meja = [1, 2, 3, 2, 1];

                        function jenis_meja($nomor_meja, $pola_meja) {
                            $index = ($nomor_meja - 1) % count($pola_meja);
                            return $pola_meja[$index];
                        }
                        @endphp
                        
                        @for ($i = 1; $i < 16; $i++)
                            @php
                                $jenis = jenis_meja($i, $pola_meja);
                                $imgpath = $jenis == 1
                                            ? "assets/img/demo/reservation/table_8.png"
                                            : ($jenis == 2 ? "assets/img/demo/reservation/table_1.png" : "assets/img/demo/reservation/table_6.png");
                                $table_state = rand(0, 1);
                            @endphp
                        
                            <div class="item {{ $table_state == 0 ? '' : 'reserved' }}">
                                <span>{{ $i }}</span>
                                <p>Dipesan</p>
                                <img src="{{ $imgpath }}" alt="">
                            </div>
                        @endfor
                    </div>
                    <div class="table-page">
                        @for ($i = 16; $i < 31; $i++)
                            @php
                                $jenis = jenis_meja($i, $pola_meja);
                                $imgpath = $jenis == 1
                                            ? "assets/img/demo/reservation/table_8.png"
                                            : ($jenis == 2 ? "assets/img/demo/reservation/table_1.png" : "assets/img/demo/reservation/table_6.png");
                                $table_state = rand(0, 1);
                            @endphp
                        
                            <div class="item {{ $table_state == 0 ? '' : 'reserved' }}">
                                <span>{{ $i }}</span>
                                <p>Dipesan</p>
                                <img src="{{ $imgpath }}" alt="">
                            </div>
                        @endfor
                    </div>
                    <div class="table-page">
                        @for ($i = 31; $i < 46; $i++)
                            @php
                                $jenis = jenis_meja($i, $pola_meja);
                                $imgpath = $jenis == 1
                                            ? "assets/img/demo/reservation/table_8.png"
                                            : ($jenis == 2 ? "assets/img/demo/reservation/table_1.png" : "assets/img/demo/reservation/table_6.png");
                                $table_state = rand(0, 1);
                            @endphp
                        
                            <div class="item {{ $table_state == 0 ? '' : 'reserved' }}">
                                <span>{{ $i }}</span>
                                <p>Dipesan</p>
                                <img src="{{ $imgpath }}" alt="">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Select Table -->

<!-- Section Reservation -->
<section id="reservation" data-background="assets/img/demo/bg/01.jpg" class="parallax-window">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="form-reservation padd-100">
                    <span class="section-suptitle">
                        Meja Anda
                    </span>
                    <h2 class="section-title white-font">
                        Reservasi Sekarang!
                    </h2>
                    <form action="#" method="post">
                        <div class="column">
                            <span>
                                <input type="text" name="name" placeholder="Nama">
                            </span>
                            <span>
                                <input type="text" name="contact_number" placeholder="Nomor Kontak">
                            </span>
                        </div>
                        <div class="column">
                            <span>
                                <input type="text" name="email" placeholder="Alamat Email">
                            </span>
                            <span>
                                <input type="text" name="num_person" placeholder="Jumlah Orang">
                            </span>
                        </div>
                        <div class="column">
                            <span>
                                <input type="text" name="book_date" placeholder="Tanggal Pemesanan">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <span>
                                <input type="text" name="your_time" placeholder="Waktu Anda">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="column">
                            <textarea name="message" placeholder="Pesan Permintaan"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit">Pesan Sekarang</button>
                            <input type="hidden" class="num_table" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Reservation -->

<!-- Section Event -->
<section id="events" class="padd-100">
    <span class="section-suptitle text-center">
        Special Menu
    </span>
    <h2 class="section-title sep-type-2 text-center">
        Event Mendatang
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12  no-padd">
                <ul class="event-carousel">
                    @foreach ($menu['special_menu'] as $item)
                    <li class="event-item">
                        <img src="assets/img/demo/menu/event/{{ $item['image'] }}" alt="{{ $item['name'] }}" class=""
                            width="100%" height="250">
                        <div>
                            <h3>{{ $item['name'] }}</h3>
                            <span>{{ $item['event'] }}</span>
                            <p>
                                {{ $item['description'] }}
                            </p>
                            <a href="#">Baca lebih</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Section Events -->

<!-- Section Testimonials -->
<section id="testimonials" class="padd-100 parallax-window" data-background="assets/img/demo/bg/03.jpg">
    <span class="section-suptitle text-center">
        Coffee Lover
    </span>
    <h2 class="section-title white-font sep-type-2 text-center">
        Ulasan Balik Kustomer
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 no-padd">
                <ul class="testimonial-list">
                    @foreach ($menu['testimonials'] as $item)
                    <li>
                        <div>
                            <p>
                                {{ $item['message'] }}
                            </p>
                            <span>{{ $item['name'] }}</span>
                        </div>
                        <img src="assets/img/demo/testimonials/{{ $item['image'] }}" alt="{{ $item['name'] }}"
                            class="img-responsive">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Section Testimonials -->

<!-- Section From The Menu -->
<section id="from-menu" class="padd-100">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="f-menu-list">
					@foreach ($menu['dessert'] as $item)
					<div class="f-menu-item">
						<div class="item-left">
							<img src="assets/img/demo/offers/dessert/{{ $item['image'] }}" alt="{{ $item['name'] }}">
						</div>
						<div class="item-right">
							<span class="section-suptitle">Coffee Lover</span>
							<h3 class="section-title">
								Special Menu Event
							</h3>
							<span class="price">Hanya {{ $item['price'] }}</span>
							<h4>{{ $item['name'] }}</h4>
							<p>
								{{ $item['description'] }}
							</p>
							<a href="">Lihat Lebih</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section End From The Menu -->
@endsection