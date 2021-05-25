@extends('front.layouts.default',['title' => 'CONTACTS'])

@section('content')

<!-- main-area -->
<main>
	<!-- breadcrumb-area -->
	<section class="breadcrumb-area d-flex align-items-center" data-background="img/bg/breadcrumb_bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-wrap text-center">
						<h2>Nous contactez</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
								<li class="breadcrumb-item active" aria-current="page">Nous contactez</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-area-end -->
	<!-- contact-area -->
	<section class="contact-area pt-120 pb-120">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6">
					<div class="contact-wrap">
						<div class="section-title s-section-title white-title contact-title mb-25">
							<span>informations</span>
							<h2>Office Information</h2>
						</div>
						<div class="contact-info-list">
							<ul>
								<li>
									<h5>Notre localisation</h5>
									<span>Côte d'Ivoire Abidjan, Cocody</span>
								</li>
								<li>
									<h5>Contacts</h5>
									<span>(+225) 0151 8586 27</span>
									<span>(+225) 0778 9974 63</span>
								</li>
								<li>
									<h5>email service client</h5>
									<span><a href="#" class="__cf_email__" data-cfemail="">devapps.officiel@gmail.com</a></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-lg-6">
					<div class="section-title s-section-title mb-40">
						<span>IONIC MODELS</span>
						<h2>Soumettez-nous vos préocupations</h2>
					</div>
					<div class="contact-form">
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Nom*">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Adresse email*">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Contact*">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Objet*">
								</div>
							</div>
							<textarea name="message" id="message" placeholder="Message"></textarea>
							<button class="btn">Envoyer</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact-area-end -->
</main>
<!-- main-area-end -->
@endsection