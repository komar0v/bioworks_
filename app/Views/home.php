<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url('home_assets') ?>/images/logo_icon.png">
	<title>Bio Works</title>
	<link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700|Fira+Sans:600" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('home_assets') ?>/css/style.css">
	<script src="https://unpkg.com/animejs@2.2.0/anime.min.js"></script>
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
	<div class="body-wrap boxed-container">
		<header class="site-header">
			<div class="header-shape header-shape-1">
				<svg width="337" height="222" viewBox="0 0 337 222" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient x1="50%" y1="55.434%" x2="50%" y2="0%" id="header-shape-1">
							<stop stop-color="#E0E1FE" stop-opacity="0" offset="0%" />
							<stop stop-color="#E0E1FE" offset="100%" />
						</linearGradient>
					</defs>
					<path d="M1103.21 0H1440v400h-400c145.927-118.557 166.997-251.89 63.21-400z" transform="translate(-1103)" fill="url(#header-shape-1)" fill-rule="evenodd" />
				</svg>
			</div>
			<div class="header-shape header-shape-2">
				<svg width="128" height="128" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" style="overflow:visible">
					<defs>
						<linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="header-shape-2">
							<stop stop-color="#FF3058" offset="0%" />
							<stop stop-color="#FF6381" offset="100%" />
						</linearGradient>
					</defs>
					<circle class="anime-element fadeup-animation" cx="64" cy="64" r="64" fill="url(#header-shape-2)" fill-rule="evenodd" />
				</svg>
			</div>
			<div class="container">
				<div class="site-header-inner">
					<div class="brand header-brand">
						<h1 class="m-0">
							<a href="#">
								<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
									<title>Bio Works</title>
									<defs>
										<linearGradient x1="114.674%" y1="39.507%" x2="-52.998%" y2="39.507%" id="logo-a">
											<stop stop-color="#8D92FA" offset="0%" />
											<stop stop-color="#8D92FA" stop-opacity="0" offset="100%" />
										</linearGradient>
										<linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="logo-b">
											<stop stop-color="#FF3058" offset="0%" />
											<stop stop-color="#FF6381" offset="100%" />
										</linearGradient>
										<linearGradient x1="32.716%" y1="-20.176%" x2="32.716%" y2="148.747%" id="logo-c">
											<stop stop-color="#FF97AA" offset="0%" />
											<stop stop-color="#FF97AA" stop-opacity="0" offset="100%" />
										</linearGradient>
									</defs>
									<g fill="none" fill-rule="evenodd">
										<path d="M31.12 7.482C28.327 19.146 19.147 28.326 7.483 31.121A12.04 12.04 0 0 1 .88 24.518C3.674 12.854 12.854 3.674 24.518.879a12.04 12.04 0 0 1 6.603 6.603z" fill="#312ECA" />
										<path d="M28.874 3.922l-24.91 24.99a12.026 12.026 0 0 1-3.085-4.394C3.674 12.854 12.854 3.674 24.518.879a12.025 12.025 0 0 1 4.356 3.043z" fill="url(#logo-a)" />
										<g opacity=".88">
											<path d="M31.12 24.518a12.04 12.04 0 0 1-6.602 6.603C12.854 28.326 3.674 19.146.879 7.482A12.04 12.04 0 0 1 7.482.88c11.664 2.795 20.844 11.975 23.639 23.639z" fill="url(#logo-b)" />
											<path d="M24.518 31.12C12.854 28.327 3.674 19.147.879 7.483A12.015 12.015 0 0 1 3.46 3.57L28.47 28.5a12.016 12.016 0 0 1-3.951 2.62z" fill="url(#logo-c)" />
										</g>
									</g>
								</svg>
							</a>
						</h1>
					</div>
				</div>
			</div>
		</header>

		<main>
			<section class="hero">
				<div class="container">
					<div class="hero-inner">
						<div class="hero-copy">
							<h1 class="hero-title mt-0">Bio Works</h1>
							<p class="hero-paragraph">Aplikasi evaluasi mata pelajaran Biologi. Dikembangkan oleh ..</p>
							<div class="hero-form field field-grouped">
								<div class="control control-expanded">
									<a class="button button-primary button-block" href="<?= base_url('Credentials')?>">Login</a>
								</div>
								
							</div>
						</div>
						<div class="hero-illustration">
							<div class="hero-shape hero-shape-1">
								<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" style="overflow:visible">
									<circle class="anime-element fadeup-animation" cx="20" cy="20" r="20" fill="#FFD8CD" fill-rule="evenodd" />
								</svg>
							</div>
							<div class="hero-shape hero-shape-2">
								<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg" style="overflow:visible">
									<circle class="anime-element fadeup-animation" cx="44" cy="44" r="44" fill="#FFD2DA" fill-rule="evenodd" />
								</svg>
							</div>
							<div class="hero-main-shape">
								<svg width="940" height="647" viewBox="0 0 940 647" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow:visible">
									<defs>
										<linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="hero-illustration-a">
											<stop stop-color="#261FB6" offset="0%" />
											<stop stop-color="#4950F6" offset="100%" />
										</linearGradient>
										<linearGradient x1="89.764%" y1="16.809%" x2="11.987%" y2="82.178%" id="hero-illustration-b">
											<stop stop-color="#FC8464" offset="0%" />
											<stop stop-color="#FB5C32" offset="100%" />
										</linearGradient>
										<linearGradient x1="100%" y1="23.096%" x2="4.439%" y2="96.586%" id="hero-illustration-c">
											<stop stop-color="#1ADAB7" offset="0%" />
											<stop stop-color="#55EBD0" offset="100%" />
										</linearGradient>
										<filter x="-13%" y="-150%" width="126.1%" height="400%" filterUnits="objectBoundingBox" id="hero-illustration-d">
											<feGaussianBlur stdDeviation="32" in="SourceGraphic" />
										</filter>
										<linearGradient x1="0%" y1="100%" x2="46.694%" y2="42.915%" id="hero-illustration-f">
											<stop stop-color="#EEF1FA" offset="0%" />
											<stop stop-color="#FFF" offset="100%" />
										</linearGradient>
										<rect id="hero-illustration-e" width="800" height="450" rx="4" />
										<linearGradient x1="100%" y1="-12.816%" x2="0%" y2="-12.816%" id="hero-illustration-g">
											<stop stop-color="#D2DAF0" stop-opacity="0" offset="0%" />
											<stop stop-color="#D2DAF0" offset="50.045%" />
											<stop stop-color="#D2DAF0" stop-opacity="0" offset="100%" />
										</linearGradient>
										<linearGradient x1="116.514%" y1="-21.201%" x2="0%" y2="100%" id="hero-illustration-h">
											<stop stop-color="#55EBD0" offset="0%" />
											<stop stop-color="#4950F6" offset="100%" />
										</linearGradient>
										<path id="hero-illustration-j" d="M0 0h308v288H0z" />
										<filter x="-15.6%" y="-12.5%" width="139%" height="141.7%" filterUnits="objectBoundingBox" id="hero-illustration-i">
											<feOffset dx="12" dy="24" in="SourceAlpha" result="shadowOffsetOuter1" />
											<feGaussianBlur stdDeviation="16" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
											<feColorMatrix values="0 0 0 0 0.0666666667 0 0 0 0 0.062745098 0 0 0 0 0.243137255 0 0 0 0.08 0" in="shadowBlurOuter1" />
										</filter>
										<circle id="hero-illustration-k" cx="16" cy="16" r="16" />
										<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="hero-illustration-m">
											<stop stop-color="#C6FDF3" offset="0%" />
											<stop stop-color="#C6FDF3" stop-opacity="0" offset="100%" />
										</linearGradient>
										<linearGradient x1="2.875%" y1="89.028%" x2="99.412%" y2="6.885%" id="hero-illustration-n">
											<stop stop-color="#83F0DD" offset="0%" />
											<stop stop-color="#1ADAB7" offset="50.924%" />
											<stop stop-color="#55EBD0" offset="100%" />
										</linearGradient>
										<linearGradient x1="50%" y1="1.569%" x2="50%" y2="97.315%" id="hero-illustration-o">
											<stop stop-color="#FF97AA" offset="0%" />
											<stop stop-color="#FF6381" offset="100%" />
										</linearGradient>
										<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="hero-illustration-p">
											<stop stop-color="#FCAC96" offset="0%" />
											<stop stop-color="#FC8464" offset="100%" />
										</linearGradient>
										<circle id="hero-illustration-r" cx="28" cy="28" r="28" />
										<filter x="-85.7%" y="-64.3%" width="314.3%" height="314.3%" filterUnits="objectBoundingBox" id="hero-illustration-q">
											<feOffset dx="12" dy="24" in="SourceAlpha" result="shadowOffsetOuter1" />
											<feGaussianBlur stdDeviation="16" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
											<feColorMatrix values="0 0 0 0 0.0666666667 0 0 0 0 0.062745098 0 0 0 0 0.243137255 0 0 0 0.08 0" in="shadowBlurOuter1" />
										</filter>
										<circle id="hero-illustration-t" cx="36" cy="36" r="36" />
										<filter x="-66.7%" y="-50%" width="266.7%" height="266.7%" filterUnits="objectBoundingBox" id="hero-illustration-s">
											<feOffset dx="12" dy="24" in="SourceAlpha" result="shadowOffsetOuter1" />
											<feGaussianBlur stdDeviation="16" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
											<feColorMatrix values="0 0 0 0 0.0666666667 0 0 0 0 0.062745098 0 0 0 0 0.243137255 0 0 0 0.08 0" in="shadowBlurOuter1" />
										</filter>
										<circle id="hero-illustration-v" cx="28" cy="28" r="28" />
										<filter x="-85.7%" y="-64.3%" width="314.3%" height="314.3%" filterUnits="objectBoundingBox" id="hero-illustration-u">
											<feOffset dx="12" dy="24" in="SourceAlpha" result="shadowOffsetOuter1" />
											<feGaussianBlur stdDeviation="16" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
											<feColorMatrix values="0 0 0 0 0.0666666667 0 0 0 0 0.062745098 0 0 0 0 0.243137255 0 0 0 0.08 0" in="shadowBlurOuter1" />
										</filter>
										<circle id="hero-illustration-x" cx="24" cy="24" r="24" />
										<filter x="-100%" y="-75%" width="350%" height="350%" filterUnits="objectBoundingBox" id="hero-illustration-w">
											<feOffset dx="12" dy="24" in="SourceAlpha" result="shadowOffsetOuter1" />
											<feGaussianBlur stdDeviation="16" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
											<feColorMatrix values="0 0 0 0 0.0666666667 0 0 0 0 0.062745098 0 0 0 0 0.243137255 0 0 0 0.08 0" in="shadowBlurOuter1" />
										</filter>
									</defs>
									<g fill="none" fill-rule="evenodd">
										<path class="anime-element stroke-animation" d="M600,300 C600,465.685425 465.685425,600 300,600 C134.314575,600 1.3749042e-14,465.685425 3.60373576e-15,300 C-6.54157051e-15,134.314575 134.314575,-1.29473326e-14 300,-2.30926389e-14 C465.685425,-3.32379452e-14 600,134.314575 600,300 Z" fill="url(#hero-illustration-a)" stroke="#4950F6" />
										<g transform="translate(435 518)">
											<circle class="anime-element fadeup-animation" fill="url(#hero-illustration-b)" cx="106" cy="32" r="32" />
											<circle class="anime-element fadeup-animation" fill="url(#hero-illustration-c)" cx="12" cy="117" r="12" />
										</g>
										<g class="anime-element fadeleft-animation">
											<g transform="translate(103 75)">
												<path fill-opacity=".24" fill="#11103E" filter="url(#hero-illustration-d)" d="M32 410h736v64H32z" />
												<use fill="url(#hero-illustration-f)" xlink:href="#hero-illustration-e" />
											</g>
											<g transform="translate(123 87)">
												<circle fill="#D2DAF0" cx="4" cy="4" r="4" />
												<circle fill="#D2DAF0" cx="20" cy="4" r="4" />
												<circle fill="#D2DAF0" cx="36" cy="4" r="4" />
												<path fill-opacity=".56" fill="#FFF" d="M736 2h24v4h-24z" />
												<path fill="url(#hero-illustration-g)" d="M27 20h706v2H27z" />
											</g>
											<g transform="translate(396 157)">
												<image href="<?= base_url('home_assets') ?>/images/Chameleonshutterstock309755390.png" height="200" width="200" />
											</g>

											<g transform="translate(330 215)">
												<image href="<?= base_url('home_assets') ?>/images/dna_img.png" height="400" width="400" />
											</g>

											
										</g>
										<g class="anime-element fadeleft-animation">
											<g transform="translate(106 135)">
												<image href="<?= base_url('home_assets') ?>/images/biology_text.png" height="350" width="350" />
											</g>
										</g>
									</g>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="features section">
				<div class="container">
					<div class="features-inner section-inner">
						<div class="features-header text-center">
							<div class="container-sm">
								<h2 class="section-title mt-0">Cara Baru</h2>
								<p class="section-paragraph">Menggunakan teknologi sebagai media belajar</p>
							</div>
						</div>
						<div class="features-wrap">
							<div class="feature text-center is-revealing">
								<div class="feature-inner">
									<div class="feature-icon" style="background:#FFD2DA;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
											<g fill="none" fill-rule="nonzero">
												<path d="M43 47v7a13 13 0 0 0 13-13v-7c-7.18 0-13 5.82-13 13z" fill="#79DE3F" />
												<path d="M32 41v4a9 9 0 0 0 9 9v-4a9 9 0 0 0-9-9z" fill="#79DE3F" />
											</g>
										</svg>
									</div>
									<h4 class="feature-title h3-mobile mb-8">Ramah Lingkungan</h4>
									<p class="text-sm">Mengurangi penggunaan kertas</p>
								</div>
							</div>
							<div class="feature text-center is-revealing">
								<div class="feature-inner">
									<div class="feature-icon" style="background:#FFD8CD;">
										<svg width="88" height="88" xmlns="http://www.w3.org/2000/svg">
											<g fill="none" fill-rule="nonzero">
												<path d="M54 56h-9a2 2 0 0 1-2-2V43a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2zm-9-13v10h9V43h-9z" fill="#2FD5EC" />
												<path d="M41 50h-7V34h14v5h2v-5a2 2 0 0 0-2-2H34a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h7v-4z" fill="#4950F6" />
											</g>
										</svg>
									</div>
									<h4 class="feature-title h3-mobile mb-8">Powerful</h4>
									<p class="text-sm">Dapat digunakan di berbagai perangkat</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- <section class="testimonials section">
				<div class="testimonials-shape testimonials-shape-1">
					<svg width="280" height="280" viewBox="0 0 280 280" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient x1="100%" y1="0%" x2="0%" y2="100%" id="testimonials-shape-1">
								<stop stop-color="#261FB6" offset="0%" />
								<stop stop-color="#4950F6" offset="100%" />
							</linearGradient>
						</defs>
						<circle cx="140" cy="685" r="140" transform="translate(0 -545)" fill="url(#testimonials-shape-1)" fill-rule="evenodd" />
					</svg>
				</div>
				<div class="testimonials-shape testimonials-shape-2">
					<svg width="125" height="107" viewBox="0 0 125 107" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<circle fill="#C6FDF3" cx="48" cy="59" r="48" />
							<path d="M58.536 39.713c0-6.884 1.72-14.007 5.163-21.368 3.443-7.36 8.167-13.458 14.173-18.292l11.645 7.91c-3.589 4.98-6.262 10.016-8.02 15.106S78.86 33.598 78.86 39.384v13.623H58.536V39.713z" fill="#55EBD0" />
							<path d="M93.252 39.713c0-6.884 1.722-14.007 5.164-21.368 3.442-7.36 8.166-13.458 14.172-18.292l11.646 7.91c-3.589 4.98-6.262 10.016-8.02 15.106s-2.637 10.529-2.637 16.315v13.623H93.252V39.713z" fill="#1ADAB7" />
						</g>
					</svg>
				</div>
				<div class="testimonials-shape testimonials-shape-3">
					<svg width="48" height="48" viewBox="0 0 48 48" mlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="testimonials-shape-3">
								<stop stop-color="#FF3058" offset="0%" />
								<stop stop-color="#FF6381" offset="100%" />
							</linearGradient>
						</defs>
						<circle cx="24" cy="434" r="24" transform="translate(0 -410)" fill="url(#testimonials-shape-3)" fill-rule="evenodd" />
					</svg>
				</div>

			</section> -->

			<section class="newsletter section text-light">
				<div class="container-sm">
					<div class="newsletter-inner section-inner">
						<div class="newsletter-header text-center">
							<h2 class="section-title mt-0">Made With 💗</h2>
							<p class="section-paragraph">lorem lorem</p>
						</div>

					</div>
				</div>
			</section>
		</main>

		<footer class="site-footer">
			<div class="container">
				<div class="site-footer-inner has-top-divider">
					<div class="brand footer-brand">
						<a href="#">
							<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
								<title>Bio Works</title>
								<defs>
									<linearGradient x1="114.674%" y1="39.507%" x2="-52.998%" y2="39.507%" id="logo-footer-a">
										<stop stop-color="#8D92FA" offset="0%" />
										<stop stop-color="#8D92FA" stop-opacity="0" offset="100%" />
									</linearGradient>
									<linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="logo-footer-b">
										<stop stop-color="#FF3058" offset="0%" />
										<stop stop-color="#FF6381" offset="100%" />
									</linearGradient>
									<linearGradient x1="32.716%" y1="-20.176%" x2="32.716%" y2="148.747%" id="logo-footer-c">
										<stop stop-color="#FF97AA" offset="0%" />
										<stop stop-color="#FF97AA" stop-opacity="0" offset="100%" />
									</linearGradient>
								</defs>
								<g fill="none" fill-rule="evenodd">
									<path d="M31.12 7.482C28.327 19.146 19.147 28.326 7.483 31.121A12.04 12.04 0 0 1 .88 24.518C3.674 12.854 12.854 3.674 24.518.879a12.04 12.04 0 0 1 6.603 6.603z" fill="#312ECA" />
									<path d="M28.874 3.922l-24.91 24.99a12.026 12.026 0 0 1-3.085-4.394C3.674 12.854 12.854 3.674 24.518.879a12.025 12.025 0 0 1 4.356 3.043z" fill="url(#logo-footer-a)" />
									<g opacity=".88">
										<path d="M31.12 24.518a12.04 12.04 0 0 1-6.602 6.603C12.854 28.326 3.674 19.146.879 7.482A12.04 12.04 0 0 1 7.482.88c11.664 2.795 20.844 11.975 23.639 23.639z" fill="url(#logo-footer-b)" />
										<path d="M24.518 31.12C12.854 28.327 3.674 19.147.879 7.483A12.015 12.015 0 0 1 3.46 3.57L28.47 28.5a12.016 12.016 0 0 1-3.951 2.62z" fill="url(#logo-footer-c)" />
									</g>
								</g>
							</svg>
						</a>
					</div>
					<ul class="footer-links list-reset">
						<li>
							<a href="#">Contact</a>
						</li>
						<li>
							<a href="#">About us</a>
						</li>
						<li>
							<a href="#">FAQ's</a>
						</li>
						<li>
							<a href="#">Support</a>
						</li>
					</ul>
					<ul class="footer-social-links list-reset">
						<li>
							<a href="#">
								<span class="screen-reader-text">Facebook</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="screen-reader-text">Twitter</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="screen-reader-text">Google</span>
								<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF" />
								</svg>
							</a>
						</li>
					</ul>
					<div class="footer-copyright">&copy; 2021 Bio Works | All Rights Reserved</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="<?= base_url('home_assets') ?>/js/main.min.js"></script>
</body>

</html>