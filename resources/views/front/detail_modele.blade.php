@extends('front.layouts.default',['title' => 'DETAILS'])

@section('content')


<!-- main-area -->
<main>
	<!-- breadcrumb-area -->
	<section class="breadcrumb-area d-flex align-items-center" data-background="img/bg/breadcrumb_bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb-wrap text-center">
						<h2>Vendor Product Details</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('welcome') }}">Accueil</a></li>
								<li class="breadcrumb-item active" aria-current="page">Détails</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-area-end -->
	<!-- product-details-area -->
	<section class="product-details gray-bg pt-120 pb-120">
		<div class="container">
			<div class="t-product-wrap">
				<div class="row">
					<div class="col-lg-8">
						<div class="product-details-wrap">
							<div class="product-details-thumb">
								<img src="img/product/product_details_img.jpg" alt="img">
							</div>
							<div class="product-details-tab">
								<ul class="nav product-tab" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link btn active" id="item-details-tab" data-toggle="tab" href="#item-details" role="tab" aria-controls="item-details" aria-selected="true">Infos details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link btn" id="product-reviews-tab" data-toggle="tab" href="#product-reviews" role="tab" aria-controls="product-reviews" aria-selected="false">Commentaires</a>
									</li>
								</ul>
								<div class="tab-content product-tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="item-details" role="tabpanel" aria-labelledby="item-details-tab">
										<div class="product-details-content">
											<h3>Marktplus - Engineering WordPress Theme</h3>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
												by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
											Lorem Ipsum, you need to be sure there isn't anything embarrassing hidde.</p>
											<div class="product-details-features">
												<h4>Features Marktplus</h4>
												<p>Alteration in some form, by injected humour, or domised words which.</p>
												<ul>
													<li>Full WooCommerce integration</li>
													<li>Compatible Browsers – IE9+, Chrome, Safari, Opera, Firefox</li>
													<li>All settings defined via customization API</li>
													<li>Files Included – php, html, JS, css</li>
													<li>Compatible with – Elementor</li>
												</ul>
											</div>
											<p class="product-details-note">Please Note : All images are only for demo preview and NOT included in purchase files.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="product-reviews" role="tabpanel" aria-labelledby="product-reviews-tab">
										<div class="item-comment-wrap">
											<div class="item-single-comment">
												<ul>
													<li>
														<div class="item-comment-avatar">
															<a href="#"><img src="img/product/item_comment_avatar01.jpg" alt="img"></a>
														</div>
														<div class="item-comment-content">
															<h5><a href="#">Theme Builder</a></h5>
															<span>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															</span>
															<small>2 days ago</small>
															<p>There are many variations of passages of available, but the majority have suffered alteration humour.</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item-single-comment">
												<ul>
													<li>
														<div class="item-comment-avatar">
															<a href="#"><img src="img/product/item_comment_avatar02.jpg" alt="img"></a>
														</div>
														<div class="item-comment-content">
															<h5><a href="#">Worls Theme</a></h5>
															<span>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															</span>
															<small>3 days ago</small>
															<p>There are many variations of passages of available, but the majority have suffered alteration humour.</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item-single-comment">
												<ul>
													<li>
														<div class="item-comment-avatar">
															<a href="#"><img src="img/product/item_comment_avatar03.jpg" alt="img"></a>
														</div>
														<div class="item-comment-content">
															<h5><a href="#">Theme Builder</a></h5>
															<span>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															</span>
															<small>4 days ago</small>
															<p>There are many variations of passages of available, but the majority have suffered alteration humour.</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item-single-comment">
												<ul>
													<li>
														<div class="item-comment-avatar">
															<a href="#"><img src="img/product/item_comment_avatar04.jpg" alt="img"></a>
														</div>
														<div class="item-comment-content">
															<h5><a href="#">Cloud Themes</a></h5>
															<span>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															</span>
															<small>5 days ago</small>
															<p>There are many variations of passages of available, but the majority have suffered alteration humour.</p>
														</div>
													</li>
												</ul>
											</div>
											<div class="item-comment-box">
												<h3>Ecrire un commentaire</h3>
												<div class="item-comment-form">
													<form action="#">
														<textarea name="message" id="message" placeholder="Votre avis*"></textarea>
														<div class="row">
															<div class="col-sm-6">
																<input type="text" placeholder="Votre nom">
															</div>
															<div class="col-sm-6">
																<input type="email" placeholder="Votre email*">
															</div>
														</div>
														<button class="btn">Envoyer</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<aside class="vendor-profile-sidebar item-details-sidebar">
							<h5 class="vendor-wrap-title">DETAILS DE TELECHARGEMENT</h5>
							<div class="item-sidebar-action text-center">
								<div class="item-price-count mb-25">
									<h4><s>$29.00</s></h4>
									<h4>$19.00</h4>
								</div>
								<div class="item-sidebar-btn mb-25">
									<a href="#" class="btn">Achetez-maintenant</a>
									<a href="#" class="btn item-prev-btn">Démo en ligne</a>
								</div>
							</div>
							<div class="vendor-info-wrap text-center">
								<div class="vendor-thumb mb-10">
									<a href="#"><img src="img/product/vendor_profile_img.png" alt="img"></a>
								</div>
								<div class="vendor-info mb-25">
									<h4>Concepteur</h4>
									<span>Devapps</span>
								</div>
							</div>
							<div class="sidebar-item-info">
								<h5 class="vendor-sidebar-title text-center">Informations de l'achat</h5>
								<ul>
									<li>Prix<span>$39.00</span></li>
									<li>Réalisation<span>19 Aôut 2020</span></li>
									<li>Modification<span>15 Septembre 2021</span></li>
									<li>Categories<span>Login & register</span></li>
								</ul>
							</div>
							<div class="product-sidebar-tag">
								<h5 class="vendor-sidebar-title text-center">Tags</h5>
								<ul>
									<li><a href="#">News</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Who</a></li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product-details-area-end -->
</main>
<!-- main-area-end -->

@endsection