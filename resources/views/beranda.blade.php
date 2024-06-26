

@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bimo Property</title>


        <!-- Style -->
        
        <link rel="stylesheet" href="/css/beranda.css" >
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/progressbar_barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animated-headline.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <!-- Mobile Menu -->
    {{-- <div class="col-12">
        <div class="mobile_menu d-block d-lg-none"></div>
    </div>
</div>
</div>
<!-- Header End -->
</header>

<main class="py-4">
@yield('content')
</main>

</div> --}}


                
                <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->

                    {{-- <img src="/IMG/Logo_Bimo_Property.png" alt="" class="img-nav">
                    <li><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li><a class="nav-link" href="/beli">Beli</a></li>
                    <li><a class="nav-link" href="/rental">Rental</a></li>
                    <li><a class="nav-link" href="/jual">Jual</a></li>
                    <li><a class="nav-link" href="/cariagen">Cari Agen</a></li>
                    <li><a class="nav-link" href="/berita">Berita</a></li>
                    <li><a class="nav-link" href="/award">Award</a></li>
                    <li><a class="nav-link" href="/faq">FAQ</a></li>
                    <!-- <button type="login" class="btn1 ">Login</button>
                    <button type="sign up" class="btn2 ">Sign Up</button> -->
                </ul>

                <div class="nav-profile" style="align-items:center ">
                        <img src="/assets/img/profile_1.jpg" alt="" class="profile-pic"> 
                        <li><a href="/profile" class="hover-link" > Admin </a></li> 

                <div class="nav-profile">
                        <img src=" /IMG/profile_1.jpg" alt="" class="profile-pic"> 
                        <li><a href="/profile" class="hover-link" > Tripoli </a></li> --}}



                
                
                     
                    
                 
                    
                    {{-- <button class="btn-secondary">Sign Up</button>
                    <button class="btn-primary">Login</button> --}}
                

                
                 {{-- class="bi bi-list mobile-nav-toggle"></i>  --}}


    <body>
    <div class="container">
        <div class="welcome">
            <div class="row">
                <div class="welcome-kiri">
                    <ul>
                        <h1>Temukan</h1> 
                        <h2>Aset Properti yang Nyaman</h2>
                        <h1>Untuk Ditinggali</h1>
                        <button type="sign up" class="btn-primary">Lihat property</button>
                    </ul>
                </div>
                <div class="welcome-kanan">
                    <div class="header">

                        <img src="/assets/img/user profile/profile_1.jpg" alt="">

                        <img src=" /IMG/profile_1.jpg" alt="">

                        <h3>Ulasan Terbaik</h3>
                    </div>
                    <div class="content">
                        <p>Saya terkesan dengan keberagaman properti yang ditawarkan di sini. Sistem pencarian yang canggih ...</p>
                    </div>
                    <div class="bawah   ">
                        <i class="fas fa-star"></i> 
                        <p>4.8</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="description">

    

            <img src=" /IMG/rumah_1.jpg" alt="">
            <div class="img-description">
        
            </div>
        </div>
        <div class="fitur-deskripsi">

            <h2>Fitur-fitur di Bimo Property akan membawa pengalaman baru dalam menjelajahi dunia properti</h2>
            <p>Selamat datang di Bimo Property, di mana fitur-fitur inovatif mengubah cara Anda menjelajahi pasar properti</p>
            <div class="row-fitur-deskripsi">
                <div class="card-beli-rumah">
                    <div class="col-lg-4 col-md-6 fitur-beli-rumah">
                        <i class="fas fa-home"></i> 
                        <h1>Beli Rumah </h1>
                        <p>Nikmati pengalaman belanja yang lancar dengan fitur pencarian yang canggih dan deskripsi properti yang mendalam.</p>
                        <button>Lihat detail</button>
                    </div>
                </div> 
                <div class="card-cari-agen">
                    <div class="col-lg-4 col-md-6 fitur-cari-agen">
                    <i class="fas fa-user"></i> 
                        <h1>Cari Agen</h1>
                        <p>Temukan agen properti terpercaya dengan cepat dan mudah melalui sistem pencarian kami yang canggih.</p>
                        <button>Lihat detail</button>
                    </div>
                </div> 
                <div class="card-janji-temu">
                    <div class="col-lg-4 col-md-6 fitur-cari-agen">
                        <i class="fas fa-calendar"></i> 
                        <h1>Janji Temu</h1>
                        <p>Temukan pengalaman mengesankan dalam menemukan properti impian Anda melalui janji temu dengan agen </p>
                        <button>Lihat detail</button>
                    </div>
                </div> 
            </div>
        </div>
        <div class="rekomendasi">
            <div class="header">
                <div class="content">
                    <h2>Rekomendasi Untukmu</h2>
                    <p>Daftar rekomendasi aset properti sesuai dengan preferensimu</p>
                </div>
                <button class="btn-secondary">Lihat semua aset properti</button>
            </div>
            <div class="row-rekomendasi">
                <div class="card-1">
                    <img src="IMG/rumah_1.jpg" alt="">
                    <h1>Reka Residence</h1>
                    <p>Bojongsoang, Bandung, Jawa Barat</p>
                </div> 
                <div class="card-2">
                    <img src="IMG/rumah_1.jpg" alt="">
                    <h1>Tamara Residence</h1>
                    <p>Buah Batu, Bandung, Jawa Barat</p>
                </div> 
                <div class="card-3">
                    <img src="IMG/rumah_1.jpg" alt="">
                    <h1>Classy Residence</h1>
                    <p>Dago, Bandung, Jawa Barat</p>
                </div> 
                <div class="card-3">
                    <img src="IMG/rumah_1.jpg" alt="">
                    <h1>Harry Residence</h1>
                    <p>Kopo, Bandung, Jawa Barat</p>
                </div> 
            </div>
        </div>
        <div class="rekomendasi">
            <div class="header">
                <div class="content">
                    <h2>Inspirasi Desain Interior Rumah</h2>
                    <p>Daftar nspirasi Desain Interiosesuai dengan preferensimu</p>
                </div>
                <button class="btn-secondary">Lihat semua aset properti</button>
            </div>
            <div class="row-rekomendasi">
                <div class="card-1">
                    <img src=" /IMG/inspirasi1.jpeg" alt="">
                    <h1>Minimalis Design</h1>
                    <p>Desain ini cenderung mengurangi bentuk artistik atas dasar pertimbangan logika dan kesederhanaan. </p>
                </div> 
                <div class="card-2">
                    <img src=" /IMG/inspirasi2.jpeg" alt="">
                    <h1>Bohemian Design</h1>
                    <p>Desain ini adalah pilihan fesyen dan gaya hidup yang bercirikan esensinya yang tidak konvensional dan berjiwa bebas.</p>
                </div> 
                <div class="card-3">
                    <img src=" /IMG/inspirasi3.jpeg" alt="">
                    <h1>Elegant Design</h1>
                    <p>Desain ini yang menekankan pada kesederhanaan, keanggunan, dan kemewahan</p>
                </div> 
                <div class="card-3">
                    <img src="  /IMG/inspirasi4.jpeg" alt="">
                    <h1>Classic Residence</h1>
                    <p>Desain yang terinspirasi dari era Eropa kuno yang mencerminkan kemewahan, elegansi, dan keindahan. </p>
                </div> 
            </div>
        </div>
        <div class="visi-misi">

            <img src="/assets/img/rumah/rumah_1.jpg" alt="">

            <img src="  /IMG/rumah_1.jpg" alt="">

            <div class="content">
                <h4>|<span>Visi dan Misi</span>|</h4>
                <h2>Jual Beli Properti Dengan Cara yang Mudah</h2>
                <h5>Temukan cara mudah untuk menjual dan membeli properti impian Anda! Dengan platform kami, nikmati pengalaman jual beli properti yang simpel, cepat, dan transparan. Segera mulai jelajahi dan realisasikan impian hunian Anda dengan mudah melalui layanan kami</h5>
                <div class="visi">
                    <i class="fas fa-home"></i>
                    <div class="paragraph">
                        <h3>Visi Kami</h3>
                        <p>Menjadi platform terkemuka yang menyediakan pengalaman jual beli properti yang inovatif, transparan, dan terpercaya</p>
                    </div> 
                </div>
                <div class="misi">
                    <i class="fas fa-building"></i>
                    <div class="paragraph">
                        <h3>Misi Kami</h3>
                        <p>Memberikan akses yang mudah dan cepat kepada pelanggan untuk menjelajahi dan membeli atau menjual properti sesuai kebutuhan mereka.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="keunggulan">
            <div class="header">
                <h4>Keunggulan</h4>
                <h2>Mengapa Bimo Property?</h2>
                <p>Bimo Property merupakan platform real estate yang mumpuni dan andal</p>
            </div>
            <div class="row-keunggulan">
                <div class="card-1">
                    <i class="fas fa-bolt"></i>
                    <h1>Akses yang Luas </h1>
                    <p>Dengan ribuan daftar properti yang tersedia di berbagai lokasi, pengguna dapat menjelajahi opsi-opsi yang sesuai dengan kebutuhan mereka tanpa batasan geografis. </p>
                </div> 
                <div class="card-2">
                    <i class="fas fa-search"></i>
                    <h1>Kemudahan Pencarian</h1>
                    <p>Dengan sistem pencarian canggih kami, Anda dapat menyaring properti berdasarkan berbagai kriteria seperti lokasi, tipe properti, harga, dan fitur tambahan lainnya.</p>
                </div> 
                <div class="card-3">
                    <i class="fas fa-info"></i>
                    <h1>Transparansi Informasi</h1>
                    <p>Semua informasi terkait properti, seperti deskripsi, gambar, lokasi, dan detail lainnya, disajikan secara jelas dan akurat, membantu pengguna dalam membuat keputusan</p>
                </div> 
            </div>
        </div>

    </div>
    </body>

        <div class="ulasan-pengguna">
            <h2>Ulasan Pengguna</h2>
            <h5>Ulasan dari para pengguna website Bimo Property</h5>
            <h3>Website ini memberikan pengalaman belanja properti yang menyenangkan dan informatif. Informasi yang disediakan sangat lengkap, termasuk foto-foto berkualitas tinggi dan deskripsi yang detail tentang setiap properti.</h3>
            <img src="  /IMG/profile_2.jpg" alt="">
            <h4>Dirga Siahaan</h4>
            <p>Pencari Rumah</p>
            <br/>
            <br/>
            <a href="{{ route('ulasan.index') }}">Lihat ulasan lainnya</a>
        </div>
    </div>
    </body>

    
    <center>
    <div class="Frame67" style="width: 1220px; height: 475px; padding-left: 226px; padding-right: 226px; padding-top: 96px; padding-bottom: 96px; background: #3B7C0F; border-radius: 20px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 68px; display: inline-flex; margin-bottom: 50px">
        <div class="Frame66" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 19px; display: flex">
            <div class="Heading" style="width: 768px; text-align: center; color: #FBFBFB; font-size: 36px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Ayo berikan ulasanmu sekarang juga</div>
            <div class="SupportingText" style="width: 768px; text-align: center; color: #FBFBFB; font-size: 18px; font-family: Poppins; font-weight: 400; line-height: 28px; word-wrap: break-word">Setiap pendapat Anda memiliki kekuatan untuk membantu calon pembeli dalam membuat keputusan yang tepat.</div>
        </div>
        <div class="Frame65" style="padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: white; border-radius: 12px; justify-content: flex-start; align-items: center; gap: 99px; display: inline-flex">
            <div class="SupportingText" style="width: 225px; color: #5C5E61; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Ulasanmu..</div>
            <div class="Button" style="padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; background: #4BA30D; border-radius: 8px; justify-content: center; align-items: center; gap: 8px; display: flex">
             <button type="submit" style="color: white; font-size: 20px; font-family: Poppins; font-weight: 600; word-wrap: break-word; border: none; background: none; cursor: pointer;" onclick="window.location.href='{{route('ulasan.create')}}'">Berikan ulasan</button>
        </div>
            </div>
        </div>
    </div>
</center>
    
</html>
@endsection
