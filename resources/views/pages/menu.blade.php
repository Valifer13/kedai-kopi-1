@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<x-page-header title="Menu Kami" />

<!-- Section Coffee Menu -->
<section id="coffee-menu" class="padd-100">
	<span class="section-suptitle text-center">Coffee Lover</span>
	<h2 class="section-title sep-type-2 text-center">Coffee Menu</h2>
	<p class="section-resume">
		Seluruh kumpulan menu kopi dari kami yang kami kumpulkan dengan berbagai rasa unik di dalamnya.
	</p>
	<div class="container menu-list-container">
		<div class="row">
			<div class="menu-carousel vertical-carousel">
				<div class="menu-item">
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['coffee'], 0, 3)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['coffee'], 3, 3)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
				<div class="menu-item">
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['coffee'], 6, 1)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['coffee'], 7, 1)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Coffee Menu -->

<!-- Section Non-Coffee -->
<section id="non-coffee" class="padd-100 dark-bg">
	<span class="section-suptitle text-center">Coffee Lover</span>
	<h2 class="section-title sep-type-2 text-center">Non-Coffee</h2>
	<p class="section-resume">
		Selain kopi kami juga menyediakan minuman non-coffee yang bisa menambah selera Anda!
	</p>
	<div class="container">
		<div class="row">
			<div class="menu-carousel vertical-carousel">
				<div class="menu-item">
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['non_coffee'], 0, 3)

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/non_coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['non_coffee'], 3, 6)

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/non_coffee/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Non-Coffee -->

<!-- Section Light Dish -->
<section id="light-dish" class="padd-100">
	<span class="section-suptitle text-center">Coffee Lover</span>
	<h2 class="section-title sep-type-2 text-center">Light Dish</h2>
	<p class="section-resume">
		Kami juga menyediakan makanan ringan yang cocok untuk dinikmati bersama secangkir kopimu!
	</p>
	<div class="container">
		<div class="row">
			<div class="menu-carousel vertical-carousel">
				<div class="menu-item">
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['light_dish'], 0, 3)

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/light_dish/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['light_dish'], 3, 3);

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/light_dish/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
				<div class="menu-item">
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['light_dish'], 6, 1)

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/light_dish/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php

						$subset = array_slice($menu['light_dish'], 7, 1);

						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/offers/light_dish/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Light Dish -->

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

<!-- Section Offer -->
<section id="menu-offer" class="padd-100">
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
<!-- End Section Offer -->

<!-- Section Dessert -->
<section id="deserts" class="padd-100 gray-bg">
	<span class="section-suptitle text-center">Coffee Lover</span>
	<h2 class="section-title sep-type-2 text-center">Deserts</h2>
	<p class="section-resume">
		Kami juga menyediakan makanan yang cocok untuk sebagai hidangan penutup.
	</p>
	<div class="container">
		<div class="row">
			<div class="menu-carousel vertical-carousel">
				<div class="menu-item">
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['dessert'], 0, 3)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/menu/dessert/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
					<div class="col-md-6">
						@php
						$subset = array_slice($menu['dessert'], 3, 3)
						@endphp
						@foreach ($subset as $item)
						<div class="offer-item">
							<img src="assets/img/demo/menu/dessert/{{ $item['image'] }}" alt="{{ $item['name'] }}"
								class="img-responsive">
							<div>
								<h3>{{ $item['name'] }}</h3>
								<p>
									{{ $item['description'] }}
								</p>
							</div>
							<span class="offer-price">{{ $item['price'] }}</span>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Dessert -->

<!-- Section List Menu -->
<section id="list-menu" class="padd-100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="section-title">
					Coffee Menu
				</h4>
				@foreach ($menu['coffee'] as $item)
				<div class="drink-item">
					<span>{{ $item['name'] }}</span>
					<p>{{ $item['price'] }}</p>
				</div>
				@endforeach
			</div>
			<div class="col-md-6">
				<h4 class="section-title">
					Light Dish Menu
				</h4>
				@foreach ($menu['light_dish'] as $item)
				<div class="drink-item">
					<span>{{ $item['name'] }}</span>
					<p>{{ $item['price'] }}</p>
				</div>
				@endforeach
			</div>
			<div class="col-md-6">
				<h4 class="section-title">
					Non-Coffee Menu
				</h4>
				@foreach ($menu['non_coffee'] as $item)
				<div class="drink-item">
					<span>{{ $item['name'] }}</span>
					<p>{{ $item['price'] }}</p>
				</div>
				@endforeach
			</div>
			<div class="col-md-6">
				<h4 class="section-title">
					Dessert Menu
				</h4>
				@foreach ($menu['dessert'] as $item)
				<div class="drink-item">
					<span>{{ $item['name'] }}</span>
					<p>{{ $item['price'] }}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="text-center" style="margin-top: 2rem;">
		<a href="" class="btn-food text-center">Download Menu</a>
	</div>
</section>
<!-- End Section List Menu -->

<!-- Section From The Menu -->
<section id="from-menu" class="padd-100 no-padd-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="f-menu-list">
					@foreach ($menu['special_menu'] as $item)
					<div class="f-menu-item">
						<div class="item-left">
							<img src="assets/img/demo/events/{{ $item['image'] }}" alt="{{ $item['name'] }}">
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