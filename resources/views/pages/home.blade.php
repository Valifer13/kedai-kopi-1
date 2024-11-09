@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Slide -->
<section id="main-slider" data-background="assets/img/demo/slides/01.webp" class="">
    <div class="section-slogan">
        <img src="assets/img/logo.png" alt="">
        <h2>Keistimewaan di Setiap Tegukan</h2>
        <h3>Fine Life + Coffee</h3>
    </div>
    <span class="scoll-down">Scroll Down</span>
</section>
<!-- End Slide -->

<!-- Section Special Offers -->
<section id="special-offers" class="padd-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="offer-left">
                    <span class="section-suptitle">Dari Menu</span>
                    <h2 class="section-title">Tawaran Spesial</h2>
                    <div class="offer-item">
                        <img src="assets/img/demo/menu/coffee/espresso.webp" alt="espresso_coffee"
                            class="img-responsive">
                        <div>
                            <h3>Kopi Espresso</h3>
                            <p>
                                Kopi hitam pekat dengan rasa kuat, disajikan dalam cangkir kecil.
                            </p>
                        </div>
                        <span class="offer-price">30K</span>
                    </div>
                    <div class="offer-item">
                        <img src="assets/img/demo/menu/coffee/americano.webp" alt="americano_coffee"
                            class="img-responsive">
                        <div>
                            <h3>Kopi Americano</h3>
                            <p>
                                Espresso yang ditambahkan air panas, menghasilkan kopi hitam dengan rasa lebih ringan.
                            </p>
                        </div>
                        <span class="offer-price">35K</span>
                    </div>
                    <div class="offer-item">
                        <img src="assets/img/demo/menu/coffee/cappuccino.webp" alt="cappuccino_coffee"
                            class="img-responsive">
                        <div>
                            <h3>Kopi Cappuccino</h3>
                            <p>
                                Espresso dengan campuran susu panas dan busa susu di atasnya, memiliki tekstur lembut.
                            </p>
                        </div>
                        <span class="offer-price">45K</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-sm hidden-xs">
                <div class="offer-right">
                    <img src="assets/img/demo/offers/window_menu.webp" alt="" class="img-responsive">
                    <a href="/menu">
                        Jelajahi
                        <span>menu kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Special Offers -->

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

<!-- Section Delas -->
<section id="delas" class="padd-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span class="section-suptitle text-center">Penawaran Hari Ini</span>
                <h2 class="section-title sep-type-2 text-center">
                    Menu Spesial Hari Ini
                </h2>
                <div class="delas-carousel">
                    @foreach ($menu['coffee'] as $item)
                    <div class="delas-item">
                        <img src="assets/img/demo/menu/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}" class=""
                            height="300" max-width="100%">
                        <h4>{{ $item['name'] }}</h4>
                        <p>
                            {{ $item['description'] }}
                        </p>
                        <span>Hanya {{ $item['price'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Delas -->

<!-- Section Restaurant Menu -->
<section id="restaurant-menu" class="padd-100">
    <span class="section-suptitle text-center">Coffee Lover</span>
    <h2 class="section-title sep-type-2 text-center">
        Pilihan ada di tanganmu
    </h2>

    <div class="container">
        <div class="row">
            <ul class="restaurant-filter">
                <li><a href="" class="current" data-filter="">Semua menu</a></li>
                <li><a href="" data-filter="coffee">coffee</a></li>
                <li><a href="" data-filter="non-coffee">non-coffee</a></li>
                <li><a href="" data-filter="light-dish">light-dish</a></li>
                <li><a href="" data-filter="dessert">dessert</a></li>
            </ul>
            <div class="restaurant-list">
                <div class="grid-sizer col-sm-6 col-md-4"></div>
                @foreach ($menu['coffee'] as $item)
                <div class="col-sm-6 col-md-4 grid-item" data-filter="coffee">
                    <div>
                        <a href="menu.php" target="_blank" style="height:250px;"><img
                                src="assets/img/demo/menu/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"></a>
                        <span>Hanya {{ $item['price'] }}</span>
                        <h3>{{ $item['name'] }}</h3>
                    </div>
                </div>
                @endforeach
                @foreach ($menu['non_coffee'] as $item)
                <div class="col-sm-6 col-md-4 grid-item" data-filter="non-coffee">
                    <div>
                        <a href="menu.php" target="_blank" style="height:250px;"><img
                                src="assets/img/demo/menu/non-coffee/{{ $item['image'] }}"
                                alt="{{ $item['name'] }}"></a>
                        <span>Hanya {{ $item['price'] }}</span>
                        <h3>{{ $item['name'] }}</h3>
                    </div>
                </div>
                @endforeach
                @foreach ($menu['light_dish'] as $item)
                <div class="col-sm-6 col-md-4 grid-item" data-filter="light-dish">
                    <div>
                        <a href="menu.php" target="_blank" style="height:250px;"><img
                                src="assets/img/demo/menu/light-dish/{{ $item['image'] }}"
                                alt="{{ $item['name'] }}"></a>
                        <span>Hanya {{ $item['price'] }}</span>
                        <h3>{{ $item['name'] }}</h3>
                    </div>
                </div>
                @endforeach
                @foreach ($menu['dessert'] as $item)
                <div class="col-sm-6 col-md-4 grid-item" data-filter="dessert">
                    <div>
                        <a href="menu.php" target="_blank" style="height:250px;"><img
                                src="assets/img/demo/menu/dessert/{{ $item['image'] }}" alt="{{ $item['name'] }}"></a>
                        <span>Hanya {{ $item['price'] }}</span>
                        <h3>{{ $item['name'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Section Restaurant Menu -->

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

<!-- Section Vision -->
<section id="vision" data-background="assets/img/demo/bg/06.jpg" class="parallax-window padd-100">
    <h2 class="sr-only">Vision</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="vision-item">
                    <span class="count">291</span>
                    <p>Menu Terbaik</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vision-item">
                    <span class="count">710</span>
                    <p>Penghargaan</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vision-item">
                    <span class="count">163</span>
                    <p>Koki</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vision-item last-item">
                    <span class="count">212</span>
                    <p>Kustomer Harian</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Vision -->
@endsection