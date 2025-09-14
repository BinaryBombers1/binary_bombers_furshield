// FurShield JavaScript Functionality

// Sample product data
const products = [
    {
        id: 1,
        name: "Premium Dog Food",
        category: "food",
        price: 29.99,
        image: "https://images.unsplash.com/photo-1589924691995-400dc9ecc119?w=300&h=200&fit=crop",
        rating: 4.5,
        reviews: 128
    },
    {
        id: 2,
        name: "Cat Grooming Brush",
        category: "grooming",
        price: 15.99,
        image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop",
        rating: 4.2,
        reviews: 89
    },
    {
        id: 3,
        name: "Interactive Dog Toy",
        category: "toys",
        price: 22.50,
        image: "https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=300&h=200&fit=crop",
        rating: 4.7,
        reviews: 156
    },
    {
        id: 4,
        name: "Pet Vitamins",
        category: "health",
        price: 18.75,
        image: "https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=300&h=200&fit=crop",
        rating: 4.3,
        reviews: 67
    },
    {
        id: 5,
        name: "Cat Litter Box",
        category: "grooming",
        price: 45.00,
        image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop",
        rating: 4.1,
        reviews: 94
    },
    {
        id: 6,
        name: "Dog Training Treats",
        category: "food",
        price: 12.99,
        image: "https://images.unsplash.com/photo-1589924691995-400dc9ecc119?w=300&h=200&fit=crop",
        rating: 4.6,
        reviews: 203
    }
];

// DOM Elements
const loginModal = document.getElementById('loginModal');
const registerModal = document.getElementById('registerModal');
const loginBtn = document.getElementById('loginBtn');
const contactBtn = document.getElementById('contactBtn');
const closeModal = document.getElementById('closeModal');
const closeRegisterModal = document.getElementById('closeRegisterModal');
const showRegister = document.getElementById('showRegister');
const showLogin = document.getElementById('showLogin');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const contactForm = document.getElementById('contactForm');
const productsGrid = document.getElementById('productsGrid');
const filterBtns = document.querySelectorAll('.filter-btn');
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const navMenu = document.querySelector('.nav-menu');
const scrollUpBtn = document.getElementById('scrollUpBtn');
let siteSearchPanel;

// Modal Functions
function openModal(modal) {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModalFunc(modal) {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Event Listeners for Modals
if (loginBtn) loginBtn.addEventListener('click', () => openModal(loginModal));
// Contact button removed from header
if (closeModal) closeModal.addEventListener('click', () => closeModalFunc(loginModal));
if (closeRegisterModal) closeRegisterModal.addEventListener('click', () => closeModalFunc(registerModal));

if (showRegister) {
    showRegister.addEventListener('click', (e) => {
        e.preventDefault();
        closeModalFunc(loginModal);
        openModal(registerModal);
    });
}

if (showLogin) {
    showLogin.addEventListener('click', (e) => {
        e.preventDefault();
        closeModalFunc(registerModal);
        openModal(loginModal);
    });
}

// Close modal when clicking outside
window.addEventListener('click', (e) => {
    if (e.target === loginModal) closeModalFunc(loginModal);
    if (e.target === registerModal) closeModalFunc(registerModal);
});

// Form Submissions
if (loginForm) loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(loginForm);
    const userType = formData.get('userType');
    
    // Simulate login
    alert(`Login successful as ${userType}! Redirecting to dashboard...`);
    closeModalFunc(loginModal);
    
    // Redirect based on user type
    switch(userType) {
        case 'pet-owner':
            window.location.href = 'dashboard.html?type=pet-owner';
            break;
        case 'veterinarian':
            window.location.href = 'dashboard.html?type=veterinarian';
            break;
        case 'shelter':
            window.location.href = 'dashboard.html?type=shelter';
            break;
    }
});

if (registerForm) registerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(registerForm);
    const userType = formData.get('userType');
    
    // Simulate registration
    alert(`Registration successful as ${userType}! Please login to continue.`);
    closeModalFunc(registerModal);
    openModal(loginModal);
});

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thank you for your message! We will get back to you soon.');
        contactForm.reset();
    });
}

// Product Filtering
function renderProducts(categoryOrList = 'all') {
    if (!productsGrid) return;
    const filteredProducts = Array.isArray(categoryOrList)
        ? categoryOrList
        : (categoryOrList === 'all' ? products : products.filter(product => product.category === categoryOrList));

    productsGrid.innerHTML = (filteredProducts || []).map(product => `
        <div class="product-card" data-category="${product.category}">
            <img src="${product.image}" alt="${product.name}" class="product-image">
            <div class="product-info">
                <div class="product-category">${product.category}</div>
                <h3 class="product-name">${product.name}</h3>
                <div class="product-price">$${product.price}</div>
                <div class="product-rating">
                    <div class="stars">
                        ${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}
                    </div>
                    <span class="rating-text">(${product.rating}) ${product.reviews} reviews</span>
                </div>
                <button class="add-to-cart" onclick="addToCart(${product.id})">
                    Add to Cart
                </button>
            </div>
        </div>
    `).join('');
}

// Filter Button Events
if (filterBtns && filterBtns.length) {
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const category = btn.getAttribute('data-category');
            renderProducts(category);
        });
    });
}

// Add to Cart Function
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        alert(`${product.name} added to cart!`);
        // Here you would typically update cart state and UI
    }
}

// Mobile Menu Toggle - Initialize when DOM is loaded
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeMobileMenu = document.getElementById('closeMobileMenu');

    if (mobileMenuToggle && mobileMenu && mobileMenuOverlay && closeMobileMenu) {
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        mobileMenuOverlay.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Mobile menu button event listeners
        const mobileSearchBtn = document.getElementById('mobileSearchBtn');
        const mobileContactBtn = document.getElementById('mobileContactBtn');
        const mobileLoginBtn = document.getElementById('mobileLoginBtn');
        const searchBtn = document.getElementById('searchBtn');
        const contactBtn = document.getElementById('contactBtn');
        const loginBtn = document.getElementById('loginBtn');

        if (mobileSearchBtn && searchBtn) {
            mobileSearchBtn.addEventListener('click', () => {
                searchBtn.click();
                closeMobileMenuFunc();
            });
        }

        if (mobileContactBtn && contactBtn) {
            mobileContactBtn.addEventListener('click', () => {
                contactBtn.click();
                closeMobileMenuFunc();
            });
        }

        if (mobileLoginBtn && loginBtn) {
            mobileLoginBtn.addEventListener('click', () => {
                loginBtn.click();
                closeMobileMenuFunc();
            });
        }

        function closeMobileMenuFunc() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
}

// Scroll Up Button
if (scrollUpBtn) {
    scrollUpBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Show/hide scroll up button based on scroll position
window.addEventListener('scroll', () => {
    if (!scrollUpBtn) return;
    if (window.pageYOffset > 300) {
        scrollUpBtn.style.display = 'flex';
    } else {
        scrollUpBtn.style.display = 'none';
    }
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Hero Button Actions
const getStartedBtn = document.getElementById('getStartedBtn');
if (getStartedBtn) {
    getStartedBtn.addEventListener('click', () => {
        openModal(registerModal);
    });
}

const learnMoreBtn = document.getElementById('learnMoreBtn');
if (learnMoreBtn) {
    learnMoreBtn.addEventListener('click', () => {
        const aboutSection = document.getElementById('about');
        if (aboutSection) {
            aboutSection.scrollIntoView({ behavior: 'smooth' });
        }
    });
}

// Search Functionality
const headerSearchBtn = document.getElementById('searchBtn');
if (headerSearchBtn) headerSearchBtn.addEventListener('click', () => toggleSiteSearch());

function ensureSiteSearchPanel() {
    if (siteSearchPanel) return siteSearchPanel;
    siteSearchPanel = document.createElement('div');
    siteSearchPanel.className = 'site-search-panel';
    siteSearchPanel.innerHTML = `
        <div class="site-search-row">
            <input type="text" id="siteSearchInput" placeholder="Search products..." />
            <select id="siteSortSelect">
                <option value="featured">Sort: Featured</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Customer Rating</option>
                <option value="newest">Newest First</option>
            </select>
            <button class="btn btn-primary" id="siteSearchGo">Search</button>
        </div>
    `;
    document.body.appendChild(siteSearchPanel);

    document.getElementById('siteSearchGo').addEventListener('click', applySiteSearch);
    document.getElementById('siteSearchInput').addEventListener('keypress', (e) => {
        if (e.key === 'Enter') applySiteSearch();
    });
    return siteSearchPanel;
}

function toggleSiteSearch() {
    const panel = ensureSiteSearchPanel();
    panel.classList.toggle('active');
}

function applySiteSearch() {
    const term = (document.getElementById('siteSearchInput').value || '').trim();
    const sort = document.getElementById('siteSortSelect').value;
    const isProductsPage = !!document.getElementById('productsGrid');

    if (isProductsPage) {
        // Use existing extended/products arrays when present
        const source = (typeof extendedProducts !== 'undefined') ? extendedProducts : (typeof products !== 'undefined' ? products : []);
        let results = source.filter(p => !term || p.name.toLowerCase().includes(term.toLowerCase()) || p.category.toLowerCase().includes(term.toLowerCase()));

        switch (sort) {
            case 'price-low':
                results = results.sort((a,b) => a.price - b.price);
                break;
            case 'price-high':
                results = results.sort((a,b) => b.price - a.price);
                break;
            case 'rating':
                results = results.sort((a,b) => (b.rating||0) - (a.rating||0));
                break;
            case 'newest':
                results = results.sort((a,b) => (b.id||0) - (a.id||0));
                break;
            default:
                break;
        }

        if (typeof renderProducts === 'function') {
            renderProducts(results);
        }
        siteSearchPanel.classList.remove('active');
        const productsSection = document.getElementById('products') || document.querySelector('.products-section');
        if (productsSection) productsSection.scrollIntoView({ behavior: 'smooth' });
    } else {
        const url = new URL(window.location.origin + '/products.html');
        if (term) url.searchParams.set('q', term);
        if (sort && sort !== 'featured') url.searchParams.set('sort', sort);
        window.location.href = url.toString();
    }
}

// Initialize the page
document.addEventListener('DOMContentLoaded', () => {
    // Initialize mobile menu
    initMobileMenu();
    
    // Render initial products if products page
    if (typeof renderProducts === 'function' && productsGrid) {
        renderProducts();
    }
    
    // Add scroll event for header background
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.pageYOffset > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = '#fff';
            header.style.backdropFilter = 'none';
        }
    });
    
    // Add animation classes when elements come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe service cards and product cards
    document.querySelectorAll('.service-card, .product-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Initialize dashboard if on dashboard page
    if (document.body.classList.contains('dashboard-body')) {
        initDashboard();
    }
});

// Pet Gallery Scroll Functionality
const petGallery = document.querySelector('.pet-gallery');
let currentIndex = 0;
const galleryImages = [
    "https://images.unsplash.com/photo-1552053831-71594a27632d?w=100&h=100&fit=crop",
    "https://images.unsplash.com/photo-1574158622682-e40e69881006?w=100&h=100&fit=crop",
    "https://images.unsplash.com/photo-1547407139-3c921a71905c?w=100&h=100&fit=crop",
    "https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=100&h=100&fit=crop",
    "https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=100&h=100&fit=crop"
];

function updatePetGallery() {
    const galleryItems = document.querySelectorAll('.gallery-pet');
    galleryItems.forEach((item, index) => {
        const newIndex = (currentIndex + index) % galleryImages.length;
        item.src = galleryImages[newIndex];
    });
}

// Auto-scroll pet gallery
setInterval(() => {
    currentIndex = (currentIndex + 1) % galleryImages.length;
    updatePetGallery();
}, 3000);

// Initialize pet gallery
updatePetGallery();

// ------------------ Dashboard (UI Only) ------------------
function initDashboard() {
    const params = new URLSearchParams(window.location.search);
    const type = params.get('type') || 'pet-owner';
    const dashNav = document.getElementById('dashNav');
    const dashContent = document.getElementById('dashContent');
    const roleMap = {
        'admin': 'Admin',
        'pet-owner': 'Pet Owner',
        'veterinarian': 'Veterinarian',
        'shelter': 'Animal Shelter'
    };
    const userRole = roleMap[type] || 'Pet Owner';
    const nameEl = document.getElementById('dashUserName');
    const roleEl = document.getElementById('dashUserRole');
    if (nameEl) nameEl.textContent = 'Alex Johnson';
    if (roleEl) roleEl.textContent = userRole;

    if (!dashNav || !dashContent) return;
    
    // Build navigation per role
    const links = getNavLinksForRole(type);
    dashNav.innerHTML = links.map(l => `<a href="#" data-route="${l.route}"><i class="${l.icon}"></i><span>${l.label}</span></a>`).join('');

    // Route handling
    function render(route) {
        dashNav.querySelectorAll('a').forEach(a => a.classList.toggle('active', a.getAttribute('data-route') === route));
        switch (type) {
            case 'admin':
                renderAdmin(route, dashContent);
                break;
            case 'veterinarian':
                renderVet(route, dashContent);
                break;
            case 'shelter':
                renderShelter(route, dashContent);
                break;
            default:
                renderOwner(route, dashContent);
        }
    }

    dashNav.addEventListener('click', (e) => {
        const a = e.target.closest('a[data-route]');
        if (!a) return;
        e.preventDefault();
        render(a.getAttribute('data-route'));
    });

    // initial route
    render(links[0].route);
}

function getNavLinksForRole(type) {
    if (type === 'admin') {
        return [
            { route: 'overview', label: 'Overview', icon: 'fas fa-chart-line' },
            { route: 'users', label: 'Users', icon: 'fas fa-users' },
            { route: 'content', label: 'Content', icon: 'far fa-file-alt' },
            { route: 'catalog', label: 'Products', icon: 'fas fa-box' },
            { route: 'settings', label: 'Settings', icon: 'fas fa-gear' }
        ];
    }
    if (type === 'veterinarian') {
        return [
            { route: 'appointments', label: 'Appointments', icon: 'far fa-calendar-check' },
            { route: 'patients', label: 'Patients', icon: 'fas fa-paw' },
            { route: 'notes', label: 'Treatments', icon: 'fas fa-notes-medical' },
            { route: 'availability', label: 'Availability', icon: 'far fa-clock' }
        ];
    }
    if (type === 'shelter') {
        return [
            { route: 'adoptable', label: 'Adoptable Pets', icon: 'fas fa-dog' },
            { route: 'care', label: 'Care Logs', icon: 'fas fa-clipboard-list' },
            { route: 'adopters', label: 'Adopters', icon: 'far fa-envelope' }
        ];
    }
    // pet-owner default
    return [
        { route: 'pets', label: 'My Pets', icon: 'fas fa-paw' },
        { route: 'health', label: 'Health Records', icon: 'fas fa-heartbeat' },
        { route: 'documents', label: 'Documents', icon: 'far fa-folder-open' },
        { route: 'insurance', label: 'Insurance', icon: 'far fa-file-shield' },
        { route: 'products', label: 'Shop', icon: 'fas fa-shopping-cart' },
        { route: 'care', label: 'Care Library', icon: 'fas fa-book-open' },
        { route: 'appointments', label: 'Appointments', icon: 'far fa-calendar-alt' }
    ];
}

// --------- Renderers: Pet Owner ---------
function renderOwner(route, root) {
    switch(route) {
        case 'pets':
            root.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>My Pets</h2>
                    <div>
                        <button class="btn btn-primary me-2">Add Pet</button>
                        <button class="btn btn-secondary">Import Gallery</button>
                    </div>
                </div>
                <div class="tabs" id="petTabs">
                    <button class="tab-btn active" data-pet="Bella">Bella</button>
                    <button class="tab-btn" data-pet="Max">Max</button>
                    <button class="tab-btn" data-pet="Luna">Luna</button>
                </div>
                <div class="grid-cards">
                    <div class="card">
                        <h3>Profile</h3>
                        <p>Name: Bella</p>
                        <p>Species: Dog • Breed: Golden Retriever</p>
                        <p>Age: 3y 2m</p>
                        <div class="mt-2">
                            <button class="btn btn-secondary btn-sm">Edit</button>
                            <button class="btn btn-secondary btn-sm">Delete</button>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Gallery</h3>
                        <div class="gallery-grid">
                            <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=200&h=200&fit=crop">
                            <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=200&h=200&fit=crop">
                            <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?w=200&h=200&fit=crop">
                            <img src="https://images.unsplash.com/photo-1547407139-3c921a71905c?w=200&h=200&fit=crop">
                        </div>
                        <div class="mt-2"><button class="btn btn-secondary btn-sm">Manage Images</button></div>
                    </div>
                    <div class="card">
                        <h3>Quick Actions</h3>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">Add Vaccination</button>
                            <button class="btn btn-primary">Log Treatment</button>
                            <button class="btn btn-primary">Book Vet</button>
                        </div>
                    </div>
                </div>`;
            wireTabs();
            break;
        case 'health':
            root.innerHTML = `
                <h2 class="mb-3">Health Records</h2>
                <div class="grid-cards">
                    <div class="card">
                        <h3>Vaccinations</h3>
                        <table class="table">
                            <thead><tr><th>Date</th><th>Vaccine</th><th>Clinic</th><th></th></tr></thead>
                            <tbody>
                                <tr><td>2024-11-10</td><td>Rabies</td><td>PawCare</td><td><a href="#">Edit</a></td></tr>
                                <tr><td>2024-05-08</td><td>DHPP</td><td>PawCare</td><td><a href="#">Edit</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <h3>Timeline</h3>
                        <div class="timeline">
                            <div class="timeline-item"><strong>2025-01-22</strong> • Annual checkup completed</div>
                            <div class="timeline-item"><strong>2024-11-10</strong> • Rabies vaccine</div>
                            <div class="timeline-item"><strong>2024-08-02</strong> • Treated for allergy</div>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Allergies & Conditions</h3>
                        <ul>
                            <li>Peanut allergy (mild)</li>
                            <li>Seasonal dermatitis</li>
                        </ul>
                    </div>
                </div>`;
            break;
        case 'documents':
            root.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Documents</h2>
                    <div><button class="btn btn-primary">Upload</button></div>
                </div>
                <div class="grid-cards">
                    <div class="card"><h3>Vet Certificates</h3><div class="empty-state">No files yet</div></div>
                    <div class="card"><h3>X-rays</h3><div class="empty-state">No files yet</div></div>
                    <div class="card"><h3>Lab Reports</h3><div class="empty-state">No files yet</div></div>
                </div>`;
            break;
        case 'insurance':
            root.innerHTML = `
                <h2 class="mb-3">Insurance</h2>
                <div class="grid-cards">
                    <div class="card">
                        <h3>Active Policy</h3>
                        <p>Provider: PetShield</p>
                        <p>Policy #: PS-93842</p>
                        <p>Status: Active</p>
                        <button class="btn btn-secondary btn-sm">Manage</button>
                    </div>
                    <div class="card">
                        <h3>Claims</h3>
                        <table class="table">
                            <thead><tr><th>Date</th><th>Reason</th><th>Status</th></tr></thead>
                            <tbody>
                                <tr><td>2025-01-12</td><td>Allergy Treatment</td><td>Under Review</td></tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary btn-sm">Submit Claim</button>
                    </div>
                </div>`;
            break;
        case 'products':
            root.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Shop</h2>
                    <a class="btn btn-primary" href="products.html">Go to Store</a>
                </div>
                <div class="grid-cards">
                    <div class="card"><h3>Food</h3><p>Browse top food brands.</p></div>
                    <div class="card"><h3>Grooming</h3><p>Care & hygiene products.</p></div>
                    <div class="card"><h3>Toys</h3><p>Interactive toys for play.</p></div>
                </div>`;
            break;
        case 'care':
            root.innerHTML = `
                <h2 class="mb-2">Care Library</h2>
                <div class="grid-cards">
                    <div class="card"><h3>Feeding</h3><p>Articles & videos</p></div>
                    <div class="card"><h3>Hygiene</h3><p>Guides & FAQs</p></div>
                    <div class="card"><h3>Exercise</h3><p>Routines & tips</p></div>
                    <div class="card"><h3>Training</h3><p>Positive reinforcement</p></div>
                </div>`;
            break;
        case 'appointments':
            root.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Appointments</h2>
                    <button class="btn btn-primary">Book Appointment</button>
                </div>
                <div class="card">
                    <h3>Suggested Vets</h3>
                    <table class="table">
                        <thead><tr><th>Name</th><th>Specialty</th><th>Distance</th><th></th></tr></thead>
                        <tbody>
                            <tr><td>Dr. Smith</td><td>Dermatology</td><td>2.1 km</td><td><button class="btn btn-secondary btn-sm">Request</button></td></tr>
                            <tr><td>Dr. Patel</td><td>General</td><td>3.6 km</td><td><button class="btn btn-secondary btn-sm">Request</button></td></tr>
                        </tbody>
                    </table>
                </div>`;
            break;
        default:
            root.innerHTML = '<div class="empty-state">Select a section</div>';
    }
}

function wireTabs() {
    const tabs = document.querySelectorAll('.tab-btn');
    tabs.forEach(t => t.addEventListener('click', () => {
        tabs.forEach(x => x.classList.remove('active'));
        t.classList.add('active');
        // UI-only switch; in real app we would re-render details for selected pet
    }));
}

// --------- Renderers: Veterinarian ---------
function renderVet(route, root) {
    switch(route) {
        case 'appointments':
            root.innerHTML = `
                <h2 class="mb-3">Upcoming Appointments</h2>
                <table class="table">
                    <thead><tr><th>Date</th><th>Time</th><th>Owner</th><th>Pet</th><th>Reason</th><th></th></tr></thead>
                    <tbody>
                        <tr><td>2025-09-15</td><td>10:30</td><td>Alex J.</td><td>Bella</td><td>Allergy</td><td>
                            <button class="btn btn-secondary btn-sm">Approve</button>
                            <button class="btn btn-secondary btn-sm">Reschedule</button>
                        </td></tr>
                    </tbody>
                </table>`;
            break;
        case 'patients':
            root.innerHTML = `
                <h2 class="mb-3">Patients</h2>
                <div class="grid-cards">
                    <div class="card"><h3>Bella</h3><p>Golden Retriever • 3y</p><a href="#">View Medical History</a></div>
                    <div class="card"><h3>Max</h3><p>Tabby Cat • 2y</p><a href="#">View Medical History</a></div>
                </div>`;
            break;
        case 'notes':
            root.innerHTML = `
                <h2 class="mb-3">Treatment Notes</h2>
                <div class="grid-cards">
                    <div class="card">
                        <h3>Structured Note</h3>
                        <p><strong>Symptoms:</strong> Itching, redness</p>
                        <p><strong>Past Treatments:</strong> Antihistamines</p>
                        <p><strong>Lab Results:</strong> IgE elevated</p>
                        <p><strong>Prescription:</strong> Apoquel 5mg</p>
                        <div class="mt-2"><button class="btn btn-secondary btn-sm">Add New</button></div>
                    </div>
                </div>`;
            break;
        case 'availability':
            root.innerHTML = `
                <h2 class="mb-3">Availability</h2>
                <div class="card">
                    <table class="table">
                        <thead><tr><th>Day</th><th>Slots</th><th></th></tr></thead>
                        <tbody>
                            <tr><td>Mon</td><td>10:00-13:00, 15:00-18:00</td><td><a href="#">Edit</a></td></tr>
                            <tr><td>Tue</td><td>09:00-12:00</td><td><a href="#">Edit</a></td></tr>
                        </tbody>
                    </table>
                </div>`;
            break;
        default:
            root.innerHTML = '<div class="empty-state">Select a section</div>';
    }
}

// --------- Renderers: Shelter ---------
function renderShelter(route, root) {
    switch(route) {
        case 'adoptable':
            root.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Adoptable Pets</h2>
                    <button class="btn btn-primary">Add Listing</button>
                </div>
                <div class="grid-cards">
                    <div class="card"><h3>Rocky</h3><p>Mixed • 1y</p><p>Status: Available</p></div>
                    <div class="card"><h3>Mia</h3><p>Siamese • 2y</p><p>Status: Available</p></div>
                </div>`;
            break;
        case 'care':
            root.innerHTML = `
                <h2 class="mb-3">Care Logs</h2>
                <table class="table">
                    <thead><tr><th>Pet</th><th>Feeding</th><th>Grooming</th><th>Medical</th><th>Updated</th></tr></thead>
                    <tbody>
                        <tr><td>Rocky</td><td>08:00, 18:00</td><td>Bath 09/10</td><td>Deworm 08/30</td><td>Today</td></tr>
                    </tbody>
                </table>`;
            break;
        case 'adopters':
            root.innerHTML = `
                <h2 class="mb-3">Adopter Inquiries</h2>
                <table class="table">
                    <thead><tr><th>Name</th><th>Pet</th><th>Message</th><th>Contact</th><th>Status</th></tr></thead>
                    <tbody>
                        <tr><td>Sarah K.</td><td>Mia</td><td>Interested in adopting</td><td>sarah@example.com</td><td>
                            <button class="btn btn-secondary btn-sm">Reply</button>
                            <button class="btn btn-secondary btn-sm">Finalize</button>
                        </td></tr>
                    </tbody>
                </table>`;
            break;
        default:
            root.innerHTML = '<div class="empty-state">Select a section</div>';
    }
}

// --------- Renderers: Admin ---------
function renderAdmin(route, root) {
    switch(route) {
        case 'overview':
            root.innerHTML = `
                <h2 class="mb-3">Platform Overview</h2>
                <div class="grid-cards">
                    <div class="card"><h3>Total Users</h3><p>4,238</p></div>
                    <div class="card"><h3>Pets Tracked</h3><p>2,980</p></div>
                    <div class="card"><h3>Vets</h3><p>512</p></div>
                    <div class="card"><h3>Shelters</h3><p>124</p></div>
                </div>`;
            break;
        case 'users':
            root.innerHTML = `
                <h2 class="mb-3">Users</h2>
                <table class="table">
                    <thead><tr><th>Name</th><th>Email</th><th>Role</th><th></th></tr></thead>
                    <tbody>
                        <tr><td>Alex Johnson</td><td>alex@example.com</td><td>Pet Owner</td><td><a href="#">Edit</a></td></tr>
                        <tr><td>Dr. Smith</td><td>smith@example.com</td><td>Veterinarian</td><td><a href="#">Edit</a></td></tr>
                    </tbody>
                </table>`;
            break;
        case 'content':
            root.innerHTML = `
                <h2 class="mb-3">Content Management</h2>
                <div class="grid-cards">
                    <div class="card"><h3>Care Articles</h3><button class="btn btn-primary btn-sm">New Article</button></div>
                    <div class="card"><h3>FAQs</h3><button class="btn btn-primary btn-sm">New FAQ</button></div>
                    <div class="card"><h3>Videos</h3><button class="btn btn-primary btn-sm">New Video</button></div>
                </div>`;
            break;
        case 'catalog':
            root.innerHTML = `
                <h2 class="mb-3">Product Catalog</h2>
                <table class="table">
                    <thead><tr><th>Name</th><th>Category</th><th>Price</th><th></th></tr></thead>
                    <tbody>
                        <tr><td>Premium Dog Food</td><td>Food</td><td>$29.99</td><td><a href="#">Edit</a></td></tr>
                        <tr><td>Cat Grooming Brush</td><td>Grooming</td><td>$15.99</td><td><a href="#">Edit</a></td></tr>
                    </tbody>
                </table>`;
            break;
        case 'settings':
            root.innerHTML = `
                <h2 class="mb-3">Settings</h2>
                <div class="grid-cards">
                    <div class="card"><h3>General</h3><p>Branding, emails</p></div>
                    <div class="card"><h3>Security</h3><p>Roles & permissions</p></div>
                    <div class="card"><h3>Integrations</h3><p>Payments (disabled), notifications</p></div>
                </div>`;
            break;
        default:
            root.innerHTML = '<div class="empty-state">Select a section</div>';
    }
}
