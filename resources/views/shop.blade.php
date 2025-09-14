@include('header')
<!-- Page Header -->
<section class="page-header">
        <div class="container">
            <h1>Pet Products Store</h1>
            <p>Premium quality products for your beloved pets</p>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="product-categories">
        <div class="container">
            <div class="categories-grid">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1589924691995-400dc9ecc119?w=400&h=300&fit=crop" alt="Pet Food">
                    <div class="category-overlay">
                        <h3>Pet Food</h3>
                        <p>Premium nutrition for all life stages</p>
                        <a href="#food" class="btn btn-outline">Shop Food</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop" alt="Grooming">
                    <div class="category-overlay">
                        <h3>Grooming</h3>
                        <p>Keep your pets clean and healthy</p>
                        <a href="#grooming" class="btn btn-outline">Shop Grooming</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400&h=300&fit=crop" alt="Toys">
                    <div class="category-overlay">
                        <h3>Toys & Accessories</h3>
                        <p>Fun and interactive toys for playtime</p>
                        <a href="#toys" class="btn btn-outline">Shop Toys</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=300&fit=crop" alt="Health">
                    <div class="category-overlay">
                        <h3>Health & Wellness</h3>
                        <p>Supplements and health products</p>
                        <a href="#health" class="btn btn-outline">Shop Health</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Filters -->
    <section class="product-filters-section">
        <div class="container">
            <div class="filters-header">
                <h2>Browse Products</h2>
                <div class="filter-controls">
                    <div class="search-box">
                        <input type="text" id="productSearch" placeholder="Search products...">
                        <button type="button" id="searchButton">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="sort-dropdown">
                        <select id="sortProducts">
                            <option value="featured">Featured</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="rating">Customer Rating</option>
                            <option value="newest">Newest First</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="product-filters">
                <button class="filter-btn active" data-category="all">All Products</button>
                <button class="filter-btn" data-category="food">Food & Treats</button>
                <button class="filter-btn" data-category="grooming">Grooming</button>
                <button class="filter-btn" data-category="toys">Toys & Accessories</button>
                <button class="filter-btn" data-category="health">Health & Wellness</button>
                <button class="filter-btn" data-category="beds">Beds & Furniture</button>
                <button class="filter-btn" data-category="travel">Travel & Carriers</button>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products-section">
        <div class="container">
            <div class="products-grid" id="productsGrid">
                <!-- Products will be dynamically loaded -->
            </div>
            <div class="load-more-section">
                <button class="btn btn-outline" id="loadMoreBtn">Load More Products</button>
            </div>
        </div>
    </section>

    <!-- Featured Brands -->
    <section class="featured-brands">
        <div class="container">
            <h2>Trusted Brands</h2>
            <div class="brands-grid">
                <div class="brand-card">
                    <img src="https://images.unsplash.com/photo-1589924691995-400dc9ecc119?w=200&h=100&fit=crop" alt="Brand 1">
                    <h4>Premium Pet</h4>
                </div>
                <div class="brand-card">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=200&h=100&fit=crop" alt="Brand 2">
                    <h4>Healthy Paws</h4>
                </div>
                <div class="brand-card">
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=200&h=100&fit=crop" alt="Brand 3">
                    <h4>Pet Care Plus</h4>
                </div>
                <div class="brand-card">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=200&h=100&fit=crop" alt="Brand 4">
                    <h4>Vet Recommended</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Shopping Cart Sidebar -->
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h3>Shopping Cart</h3>
            <button class="close-cart" id="closeCart">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="cart-items" id="cartItems">
            <p class="empty-cart">Your cart is empty</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <strong>Total: $<span id="cartTotal">0.00</span></strong>
            </div>
            <button class="btn btn-primary checkout-btn">Proceed to Checkout</button>
        </div>
    </div>

    <!-- Cart Toggle Button -->
    <button class="cart-toggle" id="cartToggle">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-count" id="cartCount">0</span>
    </button>

    @include('footer')