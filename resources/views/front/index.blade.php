@extends('front.layouts.default',['title' => 'ACCUEIL'])

@section('content')

<!-- main-area -->
<main>
    <!-- slider-area -->
    <section class="slider-area s-slider-bg" data-background="img/slider/slider_bg02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="slider-content s-slider-content text-center mb-45">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s"><span>Let's Start.</span> Marketplace for Ionic Framework Themes</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">New model on the Marketplace.Your dream application mobile download!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="s-slider-search-form wow fadeInUp" data-wow-delay="0.6s">
                        <form action="#">
                            <input type="text" placeholder="Rechercher un modèle ici...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->
    <div class="area-bg-wrap">
        <!-- features-items -->
        <section class="features-items-area pt-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-55">
                            <h2>Bénéficiez des meilleurs modèles d'applications mobiles</h2>
                            <p>Quand le design, l'esthétique et la beauté font un vous assistez à des merveilles</p>
                        </div>
                    </div>
                </div>
                <div class="product-thumb-wrap">
                    <div class="row text-center justify-content-center">
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb01.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb02.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb03.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb04.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb05.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb06.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb07.jpg" alt="img"></a>
                        </div>
                        <div class="single-product-thumb">
                            <a href="#"><img src="img/thumb/product_thumb08.jpg" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-items-end -->
        <!-- product-area -->
        <section class="product-area product-bg pt-85 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="section-title text-center mb-30">
                            <h2>Nos templates sont réalisés sur mesure pour vos besoins</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 text-center">
                        <div class="product-menu s-product-menu mb-60">
                            <button class="active" data-filter="*">Login-register</button>
                            <button class="" data-filter=".cat-one">Banque</button>
                            <button class="" data-filter=".cat-two">eCommerce</button>
                            <button class="" data-filter=".cat-three">FastFood</button>
                            <button class="" data-filter=".cat-four">Jeux vidéo</button>
                            <button class="" data-filter=".cat-five">Musique</button>
                        </div>
                    </div>
                </div>
                <div class="row product-active">
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-three cat-five">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img01.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="{{ route('detailsPage') }}" class="btn"><i class="far fa-eye"></i>Achetez</a>
                                <a href="{{ route('detailsPage') }}" class="btn"><i class="far fa-eye"></i>Démo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="{{ route('detailsPage') }}">Login & register - Thème</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-three">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img02.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Achetez maintenant</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Démo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-five">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img03.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Achetez maintenant</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Démo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-four">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img04.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Achetez maintenant</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Démo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-four">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img05.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-three">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img06.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-five">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img07.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-four">
                        <div class="single-product s-single-product mb-30">
                            <div class="product-img">
                                <a href="#"><img src="img/product/s_product_img08.jpg" alt="img"></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                            </div>
                            <div class="product-overlay">
                                <h5><a href="#">Beyond - Theme</a></h5>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-btn text-center mt-30">
                            <a href="#" class="btn">Plus de modèles</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->
    </div>
    <!-- knowledge-area -->
    <section class="knowledge-area pt-120 pb-120 fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 knowledge-left-p pl-95">
                    <div class="knowledge-title mb-15">
                        <span>COLLAB+</span>
                        <h2>Vous êtes freelancers, trouvez des missions sur collab+</h2>
                    </div>
                    <div class="knowledge-content">
                        <p>La plateforme de networking et de freelancing collab+ propose des missions freelance à ses utilisateurs. Entreprise et particulier cette offre est pour vous</p>
                        <a href="#" class="btn">Voir plus<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="knowledge-img text-center">
                        <img src="img/images/knowledge_img02.jpg" alt="img" class="wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/images/knowledge_img01.jpg" alt="img" class="wow fadeInLeft" data-wow-delay="0.2s">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- knowledge-area-end -->
    <!-- services-area -->
    <section class="services-area services-bg pt-115 pb-70" data-background="img/bg/services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title white-title text-center mb-55">
                        <h2>Service client, quels que soient vos besoins</h2>
                        <p>L'avis client est un avis sur un produit ou un service</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="single-services mb-50">
                        <div class="services-icon mb-30">
                            <img src="img/icon/services_icon01.png" alt="img">
                        </div>
                        <div class="services-content">
                            <h4>Service client</h4>
                            <p>Vous avez un souci, ou une suggestion, laissez nous un message notre service client en tiendra compte.</p>
                            <a href="#" class="btn">Nous contactez<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="single-services mb-50">
                        <div class="services-icon mb-30">
                            <img src="img/icon/services_icon02.png" alt="img">
                        </div>
                        <div class="services-content">
                            <h4>Assistance ionic 5</h4>
                            <p>Tu souhaites être accompagné sur un projet particulier, nous vous apportons notre aide dans tout le processus.</p>
                            <a href="#" class="btn">Nous contactez<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="single-services mb-50">
                        <div class="services-icon mb-30">
                            <img src="img/icon/services_icon03.png" alt="img">
                        </div>
                        <div class="services-content">
                            <h4>Réduisez vos recherches</h4>
                            <p>Tu as un modèle d'application que tu souhaites réalisé, notre equipe est disponible pour vous accompagnez.</p>
                            <a href="#" class="btn">Nous contactez<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.8s">
                    <div class="single-services mb-50">
                        <div class="services-icon mb-30">
                            <img src="img/icon/services_icon04.png" alt="img">
                        </div>
                        <div class="services-content">
                            <h4>Vendez vos modèles ionic</h4>
                            <p>Vous êtes dévéloppeur, designer, concevez vos applications et vendez les sur notre plateforme.</p>
                            <a href="#" class="btn">Nous contactez<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- pricing-area -->
    <section class="pricing-area pt-115 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h2>Plans d'abonnement pour les modèles ionic 5</h2>
                        <p>Abonnez-vous maintenant pour télécharger gratuitement les différents modèles</p>
                    </div>
                </div>
            </div>
            <div class="pricing-wrap pl-80 pr-80">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing text-center mb-30">
                            <div class="pricing-head mb-30">
                                <div class="pricing-icon mb-15">
                                    <img src="img/icon/pricing_icon01.png" alt="img">
                                </div>
                                <h5>Abonnement basic</h5>
                                <span>Free plan</span>
                                <p>Abonnez-vous aux meilleurs plans</p>
                                <div class="price-count">
                                    <h4>License basic</h4>
                                </div>
                            </div>
                            <div class="pricing-list mb-30">
                                <ul>
                                    <li>Choose any single theme</li>
                                    <li>5 WordPress Theme</li>
                                    <li>1 year to support & updates</li>
                                    <li>20% Future Purchases</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#" class="btn">Abonnez-vous maintenant<i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing active text-center mb-30">
                            <div class="pricing-head mb-30">
                                <div class="pricing-icon mb-15">
                                    <img src="img/icon/pricing_icon02.png" alt="img">
                                </div>
                                <h5>Abonnement business</h5>
                                <span>monthly</span>
                                <p>Subscribe Best Plans</p>
                                <div class="price-count">
                                    <h4>Yearly License <span>- $119</span></h4>
                                </div>
                            </div>
                            <div class="pricing-list mb-30">
                                <ul>
                                    <li>Choose any single theme</li>
                                    <li>5 WordPress Theme</li>
                                    <li>1 year to support & updates</li>
                                    <li>20% Future Purchases</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#" class="btn">Abonnez-vous maintenant<i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing text-center mb-30">
                            <div class="pricing-head mb-30">
                                <div class="pricing-icon mb-15">
                                    <img src="img/icon/pricing_icon03.png" alt="img">
                                </div>
                                <h5>Abonnement illimité</h5>
                                <span>Yearly plan</span>
                                <p>Subscribe Best Plans</p>
                                <div class="price-count">
                                    <h4>Yearly License <span>- $219</span></h4>
                                </div>
                            </div>
                            <div class="pricing-list mb-30">
                                <ul>
                                    <li>Choose any single theme</li>
                                    <li>5 WordPress Theme</li>
                                    <li>1 year to support & updates</li>
                                    <li>20% Future Purchases</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="#" class="btn">Abonnez-vous maintenant<i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->
    <!-- testimonial-area -->
    <section class="testimonial gray-bg pt-115 pb-70">
        <div class="element-wrapper primary-bg pb-120 pt-115">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 col-lg-6" data-aos="fade-right">
                            <div class="section-title mb-35">
                                <h2>Abonnez-vous à notre newsletter</h2>
                                <p>Soyez alerté sur les  nouveaux modèles d'applications IONIC</p>
                            </div>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Veuillez saisir votre adresse email">
                                    <button class="btn">ENVOYER</button>
                                </form>
                                <p>Pour un suivie personnel contactez-nous sur <a href="#">Whatsapp</a></p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6" data-aos="fade-left">
                            <div class="newsletter-img text-center text-lg-right">
                                <img src="img/images/newsletter_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
</main>
<!-- main-area-end -->

@endsection