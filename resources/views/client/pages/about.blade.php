
@extends('client.layout.layout')

@section('title','About')

@section('about','active')


@section('style')
@endsection


@section('content')

   <!-- Section: inner-header -->
	<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
		<div class="container pt-90 pb-90">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title text-white">About</h2>
						<nav role="navigation" class="breadcrumb-trail breadcrumbs">
							<div class="breadcrumbs">
								<span class="trail-item trail-begin">
									<a href="#"><span>Home</span></a>
								</span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="trail-item"><a href="#"><span>Pages</span></a></span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="trail-item trail-end active">About</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: About -->
	<section class="bg-img-no-repeat bg-img-right" data-tm-bg-img="images/bg/bg-shape-bconsul2.png">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12 col-lg-6 col-md-12">
						<img src="images/about/ac3.png" class="attachment-full" alt=""/>
					</div>
					<div class="col-xl-6 col-lg-6">
						<h2 class="font-size-54">Repair Services For Your Computer.</h2>
						<ul class="list-unstyled mb-20">
							<li class="text-theme-colored1"><i class="fa fa-check-circle text-theme-colored1 mr-10"></i> Lorem Ipsum is not simply random text exercitation</li>
							<li class="text-theme-colored1"><i class="fa fa-check-circle text-theme-colored1 mr-10"></i> If you are going to use a passage aute irure dolor</li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis ostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo in consequat. Duis aute irure dolor in reprehenderit.</p>
						<img src="images/signature01.png" class="mr-30" alt=""/>
						<div class="box-hover-effect play-video-button tm-sc tm-sc-video-popup tm-sc-video-popup-button-with-text-right">
							<div class="effect-wrapper d-flex align-items-center">
								<div class="thumb">
									<img class="" src="images/play-button/s8.png" alt="Image">
								</div>
								<h5 class="video-button-text">Take a Video Tour</h5>
								<a class="hover-link" data-lightbox-gallery="youtube-video" href="http://www.youtube.com/watch?v=hNQFjqDvPhA" title="Take a Video Tour"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

	<!-- Section: How We Works -->
	<section class="layer-overlay overlay-theme-colored2-9 section-typo-light text-center" data-tm-bg-img="images/bg/as02.jpg">
		<div class="container pt-90 pb-90">
			<div class="section-title">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center mb-60">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style3-bordered-line">
								<div class="title-wrapper">
									<h2 class="title"> <span class="">How</span> <span class="text-theme-colored1">We</span> <span class="">Work</span></h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
										<p>Get Your Project Done In just 4 Steps! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content mt-30">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-working-steps working-steps-horizontal working-steps-items-four">
							<div class="working-steps-bg-holder"></div>
							<div class="working-steps-inner clearfix">
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-left">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w1.jpg')}}" alt="Image"></div>
												<div class="tag">A</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Damage Device</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-up">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w2.jpg')}}" alt="Image"></div>
												<div class="tag">B</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Handover</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-down working-steps-item-highlighted">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w3.jpg')}}" alt="Image"></div>
												<div class="tag">C</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Fast Fixing</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing pulvinar</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tm-sc tm-sc-working-steps-item tm-animation move-right working-steps-push-right">
									<div class="working-steps-item-inner">
										<div class="image-holder-wrapper">
											<div class="image-holder">
												<div class="image-holder-inner"> <img src="{{asset('public/client/images/photos/w4.jpg')}}" alt="Image"></div>
												<div class="tag">D</div>
											</div>
										</div>
										<div class="content-holder">
											<div class="title-holder">
												<h5 class="title">Delivery</h5>
											</div>
											<div class="text-holder">
												<p>Lorem ipsum dolor sit amet adipiscing elit</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

	<!-- Section: Service -->
	<section class="bg-img-no-repeat" data-tm-bg-img="{{asset('public/client/images/bg/bg-shape-bconsul1.png')}}">
		<div class="container pt-90">
			<div class="section-title">
				<div class="row justify-content-md-center">
					<div class="col-md-8">
						<div class="text-center mb-60">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center line-bottom-style4-attached-double-lines1">
								<div class="title-wrapper">
									<h2 class="title"> <span class="">Our </span> <span class="text-theme-colored1">Service</span> Areas</h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
									<p>Explore Our Completed Services! Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus leoconsectetur luctus nec.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/1.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Laptop Repair</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/2.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Computer Repair</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/3.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Data Recovery</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-lg-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/4.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Phone Unlock</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-lg-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/5.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Mobile Repair</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="services-block mb-lg-50">
							<div class="inner-box">
								<div class="thumb">
									<img src="{{asset('public/client/images/service/6.jpg')}}" alt=""/>
								</div>
								<div class="content">
									<h4><a href="#">Hardware Update</a></h4>
									<p>Leverage agile frameworks to provide a robust synopsis for high level overviews.</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

	<!-- Start  Divider -->
	<section class="bg-theme-colored2">
		<div class="container pt-60 pb-60">
			<div class="section-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="tm-sc tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center clients-animation-zoom">
							<div class="owl-carousel owl-theme tm-owl-carousel-6col" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0" data-laptop="2">
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
								<div class="item"> <a target="_blank" href="#"> <img src='{{asset('public/client/images/phones/apple.jpg')}}' alt='Image' /> </a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Divider -->

@endsection


@section('modal')
@endsection


@section('javascript')


  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
