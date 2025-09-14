@include('header');


    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're here to help you and your pets</p>
        </div>
    </section>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <div class="hero-text">
                    <h2>Get in Touch</h2>
                    <p>Have questions about our services? Need help with your pet's care? Our team of experts is here to assist you every step of the way. Reach out to us through any of the channels below.</p>
                    <div class="quick-stats">
                        <div class="quick-stat">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>24/7 Support</h4>
                                <p>Always here for you</p>
                            </div>
                        </div>
                        <div class="quick-stat">
                            <i class="fas fa-reply"></i>
                            <div>
                                <h4>Quick Response</h4>
                                <p>Within 2 hours</p>
                            </div>
                        </div>
                        <div class="quick-stat">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Expert Team</h4>
                                <p>Certified professionals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&h=400&fit=crop" alt="Contact Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods -->
    <section class="contact-methods">
        <div class="container">
            <h2>Ways to Reach Us</h2>
            <div class="methods-grid">
                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Phone Support</h3>
                    <p>Speak directly with our customer service team</p>
                    <div class="contact-info">
                        <strong>General Inquiries</strong>
                        <p>+1 (555) 123-4567</p>
                        <small>Mon-Fri: 8AM-6PM EST</small>
                    </div>
                    <div class="contact-info">
                        <strong>Emergency Line</strong>
                        <p>+1 (555) 123-HELP</p>
                        <small>24/7 Emergency Support</small>
                    </div>
                    <button class="btn btn-primary" onclick="callSupport()">Call Now</button>
                </div>

                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Support</h3>
                    <p>Send us a detailed message and we'll get back to you</p>
                    <div class="contact-info">
                        <strong>General Support</strong>
                        <p>support@furshield.com</p>
                        <small>Response within 2 hours</small>
                    </div>
                    <div class="contact-info">
                        <strong>Emergency Support</strong>
                        <p>emergency@furshield.com</p>
                        <small>24/7 Emergency Response</small>
                    </div>
                    <button class="btn btn-primary" onclick="openEmailClient()">Send Email</button>
                </div>

                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <p>Chat with our support team in real-time</p>
                    <div class="contact-info">
                        <strong>Available</strong>
                        <p>Mon-Fri: 9AM-8PM EST</p>
                        <small>Sat-Sun: 10AM-6PM EST</small>
                    </div>
                    <div class="contact-info">
                        <strong>Average Wait</strong>
                        <p>Less than 2 minutes</p>
                        <small>Quick and helpful responses</small>
                    </div>
                    <button class="btn btn-primary" onclick="startLiveChat()">Start Chat</button>
                </div>

                <div class="contact-method">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Our Office</h3>
                    <p>Come see us in person at our headquarters</p>
                    <div class="contact-info">
                        <strong>Address</strong>
                        <p>123 Pet Care Street<br>Animal City, AC 12345</p>
                        <small>Free parking available</small>
                    </div>
                    <div class="contact-info">
                        <strong>Office Hours</strong>
                        <p>Mon-Fri: 9AM-5PM EST</p>
                        <small>By appointment only</small>
                    </div>
                    <button class="btn btn-primary" onclick="getDirections()">Get Directions</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-content">
                <div class="form-text">
                    <h2>Send us a Message</h2>
                    <p>Have a specific question or need detailed assistance? Fill out the form below and our team will get back to you as soon as possible.</p>
                    
                    <div class="form-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Detailed response within 2 hours</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Follow-up to ensure satisfaction</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Expert advice from our team</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="service">Service Question</option>
                                <option value="technical">Technical Support</option>
                                <option value="billing">Billing Question</option>
                                <option value="emergency">Emergency</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="petType">Pet Type (if applicable)</label>
                            <select id="petType" name="petType">
                                <option value="">Select pet type</option>
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                                <option value="bird">Bird</option>
                                <option value="rabbit">Rabbit</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" placeholder="Please provide as much detail as possible..." required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for pet care tips and updates
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How quickly do you respond to inquiries?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We typically respond to all inquiries within 2 hours during business hours (8AM-6PM EST, Monday-Friday). For emergency inquiries, we respond within 30 minutes, 24/7.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of pets do you support?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We support all types of pets including dogs, cats, birds, rabbits, and other small animals. Our network includes specialists for exotic pets as well.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you offer emergency services?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we have a 24/7 emergency hotline and can connect you with emergency veterinary services in your area immediately.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How can I become a partner veterinarian?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We welcome qualified veterinarians to join our network. Please contact our partnership team at partners@furshield.com for more information.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is there a mobile app available?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our mobile app is available for both iOS and Android devices. You can download it from the App Store or Google Play Store.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What payment methods do you accept?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We accept all major credit cards, PayPal, Apple Pay, Google Pay, and bank transfers. All payments are processed securely.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Find Us</h2>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Our Location</h3>
                    <p>123 Pet Care Street, Animal City, AC 12345</p>
                    <p>Phone: +1 (555) 123-4567</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9024884141945!2d67.0193700812211!3d24.86717978808916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6b1566c46f%3A0x65318f4eb62c7aa8!2sAptech%20Computer%20Education%20Garden%20Center!5e0!3m2!1sen!2s!4v1757605289038!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <button class="btn btn-primary" onclick="openInMaps()">Open in Maps</button>
                </div>
            </div>
        </div>
    </section>

@include('footer');