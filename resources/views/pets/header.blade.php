<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurShield - Your Pet's Happiness, Our Priority</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="nav-brand">
                
                <h1 class="logo"><a href="/">FurShield<span class="paw-print">.</span></a></h1>
            </div>
            <nav class="nav-menu d-none d-md-block">
                <ul class="nav-list">
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="/services" class="nav-link">Services</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link">About</a></li>
                    <li><a href="/blog" class="nav-link">Blog</a></li>
                    <li><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="nav-actions d-none d-md-flex">
                <button class="search-btn" id="searchBtn">
                    <i class="fas fa-search"></i>
                </button>
                <a class="login-btn" href="/login">Login</a>
                <a class="login-btn" href="/register">Register</a>
                
            </div>
            <button class="mobile-menu-toggle d-inline-flex d-md-none ms-auto" id="mobileMenuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
    <div class="mobile-menu" id="mobileMenu">
        <button class="close-mobile-menu" id="closeMobileMenu">
            <i class="fas fa-times"></i>
        </button>
        <div class="mobile-menu-content">
            <ul class="mobile-nav-list">
            <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="/services" class="nav-link">Services</a></li>
                    <li><a href="/shop" class="nav-link">Shop</a></li>
                    <li><a href="/about" class="nav-link">About</a></li>
                    <li><a href="/blog" class="nav-link">Blog</a></li>
                    <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="mobile-menu-actions">
                <button class="btn btn-outline" id="mobileSearchBtn">
                    <i class="fas fa-search"></i> Search
                </button>
                <a class="login-btn" id="loginBtn" href="/login">Login</a>
            </div>
        </div>
    </div>
