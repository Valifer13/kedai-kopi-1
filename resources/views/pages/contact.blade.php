@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<x-page-header title="Kontak Kami" />

<!-- Section Contact -->
<section id="contact-detail" class=" padd-100">
	<h2 class="section-title sep-type-2 text-center">Detail Kontak</h2>
	<p class="section-resume">
		Kami menerima reservasi untuk rombongan hingga 8 orang. Untuk rombongan 10 orang atau lebih, silahkan hubungi kami di<br />
		<span>(+62) 831 1958 7745</span> atau email kami di <a href="">info@redsystem.id</a>.
	</p>
	<div id="maps"></div>
	<div class="container padd-bottom-100 padd-top-120">
		<div class="row">
			<div class="col-sm-4">
				<div class="item-contact">
					<i class="fa fa-phone"></i>
					<b>Phone</b>
					<p>+62 831 1958 7745</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item-contact">
					<i class="fa fa-map-marker"></i>
					<b>Address</b>
					<p>
                    Jl. Ratna No 68 G, Tonja, Denpasar Utara, Denpasar - Bali . 80239
					</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item-contact">
					<i class="fa fa-envelope"></i>
					<b>Email</b>
					<p>
						<a href="">info@redsystem.id</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<span class="section-suptitle text-center">Isi Pertanyaan</span>
	<h2 class="section-title sep-type-2 text-center">Ada Pertanyaan?</h2>
	<p class="section-resume">
        Jika kau memiliki pertanyaan langsung hubungi kami dan kami akan dengan cepat menanggapi Anda!
	</p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-reservation" id="form-contact">
					<form action="php/mail.php.html" method="post">
						<div class="column">
							<span>
								<input type="text" name="name" placeholder="Nama" class="required-field">
							</span>
							<span>
								<input type="text" name="email" placeholder="Alamat Email" class="required-field">
							</span>
						</div>
						<div class="column">
							<span>
								<input type="text" name="sujet" placeholder="Subjek" class="required-field">
							</span>
							<span>
								<input type="text" name="phone" placeholder="Telepone Anda" class="required-field">
							</span>
						</div>
						<div class="column">
							<textarea name="message" placeholder="Pesan" class="required-field"></textarea>
						</div>
						<p class="text-center padd-top-30">
							<button type="submit" class="btn-food">Kirim</button>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Section Contact -->
@endsection
