@include('header');
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="paw-prints">
                        <i class="fas fa-paw paw-icon"></i>
                        <i class="fas fa-paw paw-icon"></i>
                    </div>
                    <div class="hero-badge">Best Pet Care Service Company</div>
                    <h1 class="hero-title">Your Pet's Happiness,<br>Our Priority.</h1>
                    <p class="hero-description">We care for your pets, loving them like family. We are the trusted platform connecting pet owners with veterinarians and animal shelters.</p>
                    <div class="hero-buttons">
                        <a href="services.html" class="btn btn-primary">Get Started</a>
                        <a href="about.html" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="pet-image-container">
                        <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=500&h=600&fit=crop" alt="Happy Dog" class="main-pet-image">
                        <div class="background-circle"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pet Gallery Sidebar -->
        <div class="pet-gallery">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=100&h=100&fit=crop" alt="Dog" class="gallery-pet">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?w=100&h=100&fit=crop" alt="Cat" class="gallery-pet">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16" alt="Dog" class="gallery-pet">
            </div>
            <button class="scroll-up-btn" id="scrollUpBtn">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="services-preview">
        <div class="container">
            <div class="section-header">
                <h2>Our Amazing Services</h2>
                <p>Comprehensive pet care solutions for every need</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Veterinary Care</h3>
                    <p>Book appointments with certified veterinarians and track your pet's health records.</p>
                    <a href="services.html" class="btn btn-outline">Explore Services</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Pet Adoption</h3>
                    <p>Find your perfect companion through our network of trusted animal shelters.</p>
                    <a href="services.html" class="btn btn-outline">Adopt Today</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Pet Products</h3>
                    <p>Shop for premium pet food, toys, grooming supplies, and health products.</p>
                    <a href="products.html" class="btn btn-outline">Shop Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Health Tracking</h3>
                    <p>Monitor vaccinations, medications, and health milestones with our tracking system.</p>
                    <a href="services.html" class="btn btn-outline">Track Health</a>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Featured Products Section
    <section class="products-preview">
        <div class="container">
            <div class="section-header">
                <h2>Featured Products</h2>
                <p>Quality pet care products for your beloved companions</p>
            </div>
            <div class="products-grid-preview">
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1589924691995-400dc9ecc119?w=300&h=200&fit=crop" alt="Premium Dog Food" class="product-image">
                    <div class="product-info">
                        <div class="product-category">Food</div>
                        <h3 class="product-name">Premium Dog Food</h3>
                        <div class="product-price">$29.99</div>
                        <div class="product-rating">
                            <div class="stars">★★★★☆</div>
                            <span class="rating-text">(4.5) 128 reviews</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop" alt="Cat Grooming Brush" class="product-image">
                    <div class="product-info">
                        <div class="product-category">Grooming</div>
                        <h3 class="product-name">Cat Grooming Brush</h3>
                        <div class="product-price">$15.99</div>
                        <div class="product-rating">
                            <div class="stars">★★★★☆</div>
                            <span class="rating-text">(4.2) 89 reviews</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=300&h=200&fit=crop" alt="Interactive Dog Toy" class="product-image">
                    <div class="product-info">
                        <div class="product-category">Toys</div>
                        <h3 class="product-name">Interactive Dog Toy</h3>
                        <div class="product-price">$22.50</div>
                        <div class="product-rating">
                            <div class="stars">★★★★★</div>
                            <span class="rating-text">(4.7) 156 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/products" class="btn btn-primary">View All Products</a>
            </div>
        </div>
    </section> -->

    <!-- About Preview Section -->
    <section class="about-preview">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About FurShield</h2>
                    <p>FurShield is a comprehensive platform designed to simplify pet care management for pet owners, veterinarians, and animal shelters. We believe that every pet deserves the best care, and we're here to make that happen.</p>
                    <div class="stats">
                        <div class="stat">
                            <h3>10,000+</h3>
                            <p>Happy Pets</p>
                        </div>
                        <div class="stat">
                            <h3>500+</h3>
                            <p>Veterinarians</p>
                        </div>
                        <div class="stat">
                            <h3>100+</h3>
                            <p>Animal Shelters</p>
                        </div>
                    </div>
                    <a href="about.html" class="btn btn-primary">Learn More About Us</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=600&h=400&fit=crop" alt="Happy pets" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Preview Section -->
    <section class="blog-preview">
        <div class="container">
            <div class="section-header">
                <h2>Latest Pet Care Tips</h2>
                <p>Expert advice and tips for your furry friends</p>
            </div>
            <div class="blog-grid">
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=250&fit=crop" alt="Pet Health" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">Dec 15, 2024</span>
                            <span class="blog-category">Health</span>
                        </div>
                        <h3 class="blog-title">10 Essential Health Tips for Your Dog</h3>
                        <p class="blog-excerpt">Learn the most important health tips to keep your dog happy and healthy throughout their life.</p>
                        <a href="blog.html" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop" alt="Pet Grooming" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">Dec 12, 2024</span>
                            <span class="blog-category">Grooming</span>
                        </div>
                        <h3 class="blog-title">Professional Grooming Tips for Cats</h3>
                        <p class="blog-excerpt">Discover professional grooming techniques to keep your cat's coat healthy and beautiful.</p>
                        <a href="blog.html" class="read-more">Read More</a>
                    </div>
                </article>
                <article class="blog-card">
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=250&fit=crop" alt="Pet Training" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">Dec 10, 2024</span>
                            <span class="blog-category">Training</span>
                        </div>
                        <h3 class="blog-title">Positive Reinforcement Training Methods</h3>
                        <p class="blog-excerpt">Effective training methods that strengthen the bond between you and your pet.</p>
                        <a href="blog.html" class="read-more">Read More</a>
                    </div>
                </article>
            </div>
            <div class="text-center">
                <a href="blog.html" class="btn btn-primary">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Contact Preview Section -->
    <section class="contact-preview">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>We're here to help you and your pets</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Visit Us</h4>
                            <p>123 Pet Care Street<br>Animal City, AC 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Call Us</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email Us</h4>
                            <p>info@furshield.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-cta">
                    <h3>Ready to Get Started?</h3>
                    <p>Join thousands of pet owners who trust FurShield for their pet care needs.</p>
                    <a href="contact.html" class="btn btn-primary">Contact Us Now</a>
                </div>
            </div>
        </div>
    </section>

    @include('footer')