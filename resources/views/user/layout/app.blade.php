<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no, user-scalable=no">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/imgs/theme/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('admin/dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #loader {
            position: fixed;
            z-index: 99999999999999999999999;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: white !important;
            display: flex;
        }

        /* Apply the spinning animation to the icon */
        #loader .text-center img {
            animation: spin 1s infinite linear;
        }

        .spin {
            animation: spin 1s infinite linear;
        }

        /* Thin scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            /* Width of the scrollbar */
            height: 8px;
            /* Height of the scrollbar for horizontal scrollbar */
        }

        /* Track (the background of the scrollbar) */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Color of the scrollbar track */
        }

        /* Handle (the draggable part of the scrollbar) */
        ::-webkit-scrollbar-thumb {
            background: #888;
            /* Color of the scrollbar handle */
            border-radius: 4px;
            /* Rounded corners of the scrollbar handle */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Color of the scrollbar handle on hover */
        }
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        .badge-primary[href]:focus,
        .badge-primary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #0062cc
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        .badge-secondary[href]:focus,
        .badge-secondary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #545b62
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        .badge-success[href]:focus,
        .badge-success[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1e7e34
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        .badge-info[href]:focus,
        .badge-info[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #117a8b
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        .badge-warning[href]:focus,
        .badge-warning[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #d39e00
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        .badge-danger[href]:focus,
        .badge-danger[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #bd2130
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        .badge-light[href]:focus,
        .badge-light[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #dae0e5
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        .badge-dark[href]:focus,
        .badge-dark[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1d2124
        }
    </style>
</head>


<body style="position: relative">
    <div id="loader" class="justify-content-center align-items-center bg-white" style="height: 100vh;">
        <div class="text-center">
            <div class="">
                <!-- Use the correct class for Font Awesome spinner icon -->
                <img src="{{ asset('user/assets/imgs/spin.png') }}" height="40px" alt="">
                <p>Loading...</p>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                        English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img
                                                    src="{{ asset('user/assets/imgs/theme/flag-fr.png') }}"
                                                    alt="">Français</a></li>
                                        <li><a href="#"><img
                                                    src="{{ asset('user/assets/imgs/theme/flag-dt.png') }}"
                                                    alt="">Deutsch</a></li>
                                        <li><a href="#"><img
                                                    src="{{ asset('user/assets/imgs/theme/flag-ru.png') }}"
                                                    alt="">Pусский</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                @php
                                    $events = App\Models\Event::select('name')->get();
                                @endphp
                                @if ($events->count() > 0)
                                    <ul>
                                        @foreach ($events as $event)
                                            <li>{{ $event->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul>
                                        <li>Welcome to our website! Enjoy our products.</li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if (!auth()->user())
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info header-info-right">
                                <ul>
                                    <li><i class="fi-rs-key"></i><a href="{{ route('loginPage') }}">Log In </a> / <a
                                            href="{{ route('registerPage') }}">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-3 align-end">
                            <ul class="d-flex align-items-center">
                                @php
                                    $words = explode(' ', Auth::user()->name);
                                    $firstName = $words[0];
                                @endphp
                                <p>{{ $firstName }}</p>
                                <img class="rounded" src="{{ asset('user/assets/imgs/banner/brand-1.png') }}"
                                    width="30" height="30" alt="">
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ route('home') }}"><img src="{{ asset('user/assets/imgs/logo/logo.png') }}"
                                alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('user-search-bar')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media"
                                            src="{{ asset('user/assets/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                @if (Auth::user())
                                    <livewire:user.cart-dropdown />
                                @else
                                    <div class="header-action-icon-2">
                                        <a href="{{ route('cart.list') }}">
                                            <img class="svgInject" alt="Surfside Media"
                                                src="{{ asset('user/assets/imgs/theme/icons/icon-cart.svg') }}">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('user/assets/imgs/logo/logo.png') }}"
                                alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's
                                            Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Dresses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Blouses & Shirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Hoodies & Sweatshirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Women's Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suits & Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Bodysuits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Tanks & Camis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Coats & Jackets</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Bottoms</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Leggings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Skirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Shorts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Jeans</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Pants & Capris</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Bikini Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cover-Ups</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Swimwear</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('user/assets/imgs/banner/menu-banner-2.jpg') }}"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('user/assets/imgs/banner/menu-banner-3.jpg') }}"
                                                            alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's
                                            Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Jackets & Coats</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Down Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Parkas</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Faux Leather Coats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Trench</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wool & Blends</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vests & Waistcoats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Leather Coats</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Suits & Blazers</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suit Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suit Pants</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vests</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Tailor-made Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cover-Ups</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('user/assets/imgs/banner/menu-banner-4.jpg') }}"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i>
                                            Cellphones</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cellphones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">iPhones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Refurbished Phones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Mobile Phone</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Mobile Phone Parts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Phone Bags & Cases</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Communication Equipments</a>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Walkie Talkie</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Screen Protectors</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wire Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wireless Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Car Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Power Bank</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Armbands</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Dust Plug</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Signal Boosters</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('user/assets/imgs/banner/menu-banner-5.jpg') }}"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('user/assets/imgs/banner/menu-banner-6.jpg') }}"
                                                            alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                            Office</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer
                                            Electronics</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry &
                                            Accessories</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a>
                                    </li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a>
                                    </li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother &
                                            Kids</a></li>
                                    <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a>
                                    </li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty,
                                                    Health</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and
                                                    Shoes</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer
                                                    Electronics</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles
                                                    & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="{{ request()->is('/') ? 'active' : '' }}"
                                            href="{{ route('home') }}">Home </a></li>
                                    <li><a class="{{ request()->is('about') ? 'active' : '' }}"
                                            href="{{ route('about') }}">About</a></li>
                                    <li><a class="{{ request()->is('shop') ? 'active' : '' }}"
                                            href="{{ route('shop') }}">Shop</a></li>
                                    <livewire:user.category-dropdown />
                                    <li><a class="{{ request()->is('blog') ? 'active' : '' }}"
                                            href="{{ route('blog') }}">Blog </a></li>
                                    <li><a class="{{ request()->is('contact') ? 'active' : '' }}"
                                            href="{{ route('contact') }}">Contact</a></li>
                                    <li><a class="" href="#">My Account<i
                                                class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="#">Categories</a></li>
                                            <li><a href="#">Coupons</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Customers</a></li>
                                            @if (Auth::user())
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-sm" type="submit">Log Out</button>
                                                </form>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+1) 0000-000-000 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Surfside Media"
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="cart.html">
                                    <img alt="Surfside Media"
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('user/assets/imgs/shop/thumbnail-3.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media"
                                                        src="{{ asset('user/assets/imgs/shop/thumbnail-4.jpg') }}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart.html">View cart</a>
                                            <a href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{ asset('user/assets/imgs/logo/logo.png') }}"
                            alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                </li>
                                <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                        Office</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="index.html">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="shop.html">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                    Collections</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Dresses</a></li>
                                            <li><a href="product-details.html">Blouses & Shirts</a></li>
                                            <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="product-details.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Jackets</a></li>
                                            <li><a href="product-details.html">Casual Faux Leather</a></li>
                                            <li><a href="product-details.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Gaming Laptops</a></li>
                                            <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                            <li><a href="product-details.html">Tablets</a></li>
                                            <li><a href="product-details.html">Laptop Accessories</a></li>
                                            <li><a href="product-details.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="blog.html">Blog</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="login.html">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="register.html">Sign Up</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+1) 0000-000-000 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('user/assets/imgs/theme/icons/icon-facebook.svg') }}"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('user/assets/imgs/theme/icons/icon-twitter.svg') }}"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('user/assets/imgs/theme/icons/icon-instagram.svg') }}"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('user/assets/imgs/theme/icons/icon-pinterest.svg') }}"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('user/assets/imgs/theme/icons/icon-youtube.svg') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <main class="main">
        @yield('content')
    </main>

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email"
                                    src="{{ asset('user/assets/imgs/theme/icons/icon-email.svg') }}" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first
                                        shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small"
                                placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="index.html"><img src="{{ asset('user/assets/imgs/logo/logo.png') }}"
                                        alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>562 Wellington Road
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+1 0000-000-000
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@surfsidemedia.in
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-facebook.svg') }}"
                                        alt=""></a>
                                <a href="#"><img
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-twitter.svg') }}"
                                        alt=""></a>
                                <a href="#"><img
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-instagram.svg') }}"
                                        alt=""></a>
                                <a href="#"><img
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                        alt=""></a>
                                <a href="#"><img
                                        src="{{ asset('user/assets/imgs/theme/icons/icon-youtube.svg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">From App Store or Google Play</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                            src="{{ asset('user/assets/imgs/theme/app-store.jpg') }}"
                                            alt=""></a>
                                    <a href="#" class="hover-up"><img
                                            src="{{ asset('user/assets/imgs/theme/google-play.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated"
                                    src="{{ asset('user/assets/imgs/theme/payment-method.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms &
                            Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vendor JS-->
    <script src="{{ asset('user/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('admin/dist/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js?v=3.3') }}"></script>
    <script src="{{ asset('user/assets/js/shop.js?v=3.3') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js"
        integrity="sha512-BjVoLC9Qjuh4uR64WRzkwGnbJ+05UxQZphP2n7TJE/b0D/onZ/vkhKTWpelfV6+8sLtQTUqvZQbvvGnzRZniTQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admin/dist/assets/js/custom-jquery.js') }}"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    {{-- <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('b97a081bcbb2095e5b82', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script> --}}
    <script>
        window.addEventListener("load", function() {
            document.getElementById("loader").style.display = "none"; // Hide the loader
        });
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    @yield('myScript')
</body>

</html>
