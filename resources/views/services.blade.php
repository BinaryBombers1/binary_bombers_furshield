@include('header');

<!-- Page Header -->
<section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive pet care solutions tailored to your needs</p>
        </div>
    </section>

    <!-- Services Hero -->
    <section class="services-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h2>Expert Pet Care Services</h2>
                    <p>From routine check-ups to emergency care, our network of certified veterinarians and specialists are here to provide the best care for your beloved pets.</p>
                    <div class="service-stats">
                        <div class="stat-item">
                            <h3>500+</h3>
                            <p>Certified Vets</p>
                        </div>
                        <div class="stat-item">
                            <h3>24/7</h3>
                            <p>Emergency Care</p>
                        </div>
                        <div class="stat-item">
                            <h3>100+</h3>
                            <p>Cities Covered</p>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=400&fit=crop" alt="Veterinary Care">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="main-services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Veterinary Consultations</h3>
                    <p>Book appointments with experienced veterinarians for routine check-ups, vaccinations, and health assessments.</p>
                    <ul class="service-features">
                        <li>General Health Check-ups</li>
                        <li>Vaccination Programs</li>
                        <li>Dental Care</li>
                        <li>Senior Pet Care</li>
                        <li>Emergency Consultations</li>
                    </ul>
                    <div class="service-price">Starting from $50</div>
                    <button class="btn btn-primary" onclick="bookAppointment('veterinary')">Book Now</button>
                </div>

                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Pet Adoption Services</h3>
                    <p>Find your perfect companion through our network of trusted animal shelters and rescue organizations.</p>
                    <ul class="service-features">
                        <li>Pre-screened Adoptable Pets</li>
                        <li>Adoption Counseling</li>
                        <li>Health Guarantees</li>
                        <li>Post-adoption Support</li>
                        <li>Foster Care Programs</li>
                    </ul>
                    <div class="service-price">Adoption fees vary</div>
                    <button class="btn btn-primary" onclick="viewAdoptablePets()">Browse Pets</button>
                </div>

                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Health Tracking & Records</h3>
                    <p>Keep track of your pet's health with our comprehensive digital health records and reminder system.</p>
                    <ul class="service-features">
                        <li>Digital Health Records</li>
                        <li>Vaccination Reminders</li>
                        <li>Medication Tracking</li>
                        <li>Health Timeline</li>
                        <li>Vet Report Storage</li>
                    </ul>
                    <div class="service-price">Free with registration</div>
                    <button class="btn btn-primary" onclick="startHealthTracking()">Get Started</button>
                </div>

                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Grooming Services</h3>
                    <p>Professional grooming services to keep your pets clean, healthy, and looking their best.</p>
                    <ul class="service-features">
                        <li>Bathing & Drying</li>
                        <li>Nail Trimming</li>
                        <li>Ear Cleaning</li>
                        <li>Coat Styling</li>
                        <li>Flea Treatment</li>
                    </ul>
                    <div class="service-price">Starting from $30</div>
                    <button class="btn btn-primary" onclick="bookGrooming()">Book Grooming</button>
                </div>

                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Pet Training Programs</h3>
                    <p>Professional training programs to help your pets learn good behavior and strengthen your bond.</p>
                    <ul class="service-features">
                        <li>Basic Obedience Training</li>
                        <li>House Training</li>
                        <li>Behavioral Consultation</li>
                        <li>Puppy Classes</li>
                        <li>Advanced Training</li>
                    </ul>
                    <div class="service-price">Starting from $75</div>
                    <button class="btn btn-primary" onclick="bookTraining()">Enroll Now</button>
                </div>

                <div class="service-card-large">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Pet Sitting & Boarding</h3>
                    <p>Safe and comfortable boarding options when you need to travel or are away from home.</p>
                    <ul class="service-features">
                        <li>Overnight Boarding</li>
                        <li>Daily Pet Sitting</li>
                        <li>Dog Walking</li>
                        <li>Medication Administration</li>
                        <li>Playtime & Exercise</li>
                    </ul>
                    <div class="service-price">Starting from $25/day</div>
                    <button class="btn btn-primary" onclick="bookBoarding()">Book Service</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Services -->
    <section class="emergency-services">
        <div class="container">
            <div class="emergency-content">
                <div class="emergency-info">
                    <h2>24/7 Emergency Care</h2>
                    <p>When your pet needs urgent medical attention, our emergency veterinary services are available around the clock.</p>
                    <div class="emergency-features">
                        <div class="emergency-feature">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Emergency Hotline</h4>
                                <p>Call our 24/7 emergency line for immediate assistance</p>
                            </div>
                        </div>
                        <div class="emergency-feature">
                            <i class="fas fa-ambulance"></i>
                            <div>
                                <h4>Emergency Transport</h4>
                                <p>We provide emergency transport services to get your pet to care quickly</p>
                            </div>
                        </div>
                        <div class="emergency-feature">
                            <i class="fas fa-hospital"></i>
                            <div>
                                <h4>Emergency Clinics</h4>
                                <p>Network of emergency veterinary clinics across the city</p>
                            </div>
                        </div>
                    </div>
                    <div class="emergency-contact">
                        <a href="tel:+15551234567" class="btn btn-emergency">
                            <i class="fas fa-phone"></i>
                            Call Emergency: (555) 123-4567
                        </a>
                    </div>
                </div>
                <div class="emergency-image">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=600&h=400&fit=crop" alt="Emergency Veterinary Care">
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2>How Our Services Work</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Choose Your Service</h3>
                    <p>Browse our comprehensive list of services and select what your pet needs.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Book Appointment</h3>
                    <p>Schedule your appointment online or call us to find the best time slot.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Get Care</h3>
                    <p>Visit our certified professionals and receive the best care for your pet.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Track Progress</h3>
                    <p>Monitor your pet's health and receive follow-up care recommendations.</p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')