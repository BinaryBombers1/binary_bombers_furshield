@include('header');
<!-- Page Header -->
<section class="page-header">
        <div class="container">
            <h1>Pet Care Blog</h1>
            <p>Expert advice, tips, and insights for pet owners</p>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="featured-article">
        <div class="container">
            <div class="featured-content">
                <div class="featured-image">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=600&h=400&fit=crop" alt="Featured Article">
                    <div class="featured-badge">Featured</div>
                </div>
                <div class="featured-text">
                    <div class="article-meta">
                        <span class="article-date">December 20, 2024</span>
                        <span class="article-category">Health & Wellness</span>
                    </div>
                    <h2>Winter Pet Care: Keeping Your Furry Friends Safe and Warm</h2>
                    <p>As temperatures drop, it's crucial to adjust your pet care routine to ensure your furry friends stay healthy and comfortable throughout the winter months. Learn essential tips for winter pet care...</p>
                    <div class="article-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=50&h=50&fit=crop" alt="Dr. Emily Rodriguez">
                        <div>
                            <h4>Dr. Emily Rodriguez</h4>
                            <p>Head of Veterinary Services</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Read Full Article</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Categories -->
    <section class="blog-categories">
        <div class="container">
            <h2>Browse by Category</h2>
            <div class="categories-filter">
                <button class="category-btn active" data-category="all">All Articles</button>
                <button class="category-btn" data-category="health">Health & Wellness</button>
                <button class="category-btn" data-category="training">Training & Behavior</button>
                <button class="category-btn" data-category="nutrition">Nutrition</button>
                <button class="category-btn" data-category="grooming">Grooming</button>
                <button class="category-btn" data-category="adoption">Adoption</button>
                <button class="category-btn" data-category="lifestyle">Lifestyle</button>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="blog-grid-section">
        <div class="container">
            <div class="blog-grid" id="blogGrid">
                <!-- Articles will be dynamically loaded -->
            </div>
            <div class="load-more-section">
                <button class="btn btn-outline" id="loadMoreArticles">Load More Articles</button>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="newsletter-signup">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2>Stay Updated</h2>
                    <p>Subscribe to our newsletter for the latest pet care tips, health advice, and exclusive offers.</p>
                </div>
                <div class="newsletter-form">
                    <form id="newsletterForm">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Contributors -->
    <section class="expert-contributors">
        <div class="container">
            <h2>Our Expert Contributors</h2>
            <div class="experts-grid">
                <div class="expert-card">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=200&h=200&fit=crop" alt="Dr. Emily Rodriguez">
                    <h3>Dr. Emily Rodriguez</h3>
                    <p>Veterinarian</p>
                    <p>15+ years experience in preventive medicine and emergency care</p>
                </div>
                <div class="expert-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop" alt="Dr. Sarah Johnson">
                    <h3>Dr. Sarah Johnson</h3>
                    <p>Animal Behaviorist</p>
                    <p>Specialist in pet training and behavioral modification</p>
                </div>
                <div class="expert-card">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop" alt="Dr. Michael Chen">
                    <h3>Dr. Michael Chen</h3>
                    <p>Nutritionist</p>
                    <p>Expert in pet nutrition and dietary health</p>
                </div>
                <div class="expert-card">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop" alt="Lisa Thompson">
                    <h3>Lisa Thompson</h3>
                    <p>Grooming Specialist</p>
                    <p>Professional groomer with 10+ years of experience</p>
                </div>
            </div>
        </div>
    </section>

@include('footer');