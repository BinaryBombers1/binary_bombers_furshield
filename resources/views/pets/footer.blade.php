<!-- Footer -->
<footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>FurShield</h3>
                    <p>Your pet's happiness is our priority. Join our community of pet lovers today.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Veterinary Care</a></li>
                        <li><a href="#">Pet Adoption</a></li>
                        <li><a href="#">Health Tracking</a></li>
                        <li><a href="#">Product Store</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Pet Care Street</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@furshield.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 FurShield. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Login to FurShield</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" name="password" required>
                </div>
                <div class="form-group">
                    <label for="userType">User Type</label>
                    <select id="userType" name="userType" required>
                        <option value="">Select User Type</option>
                        <option value="pet-owner">Pet Owner</option>
                        <option value="veterinarian">Veterinarian</option>
                        <option value="shelter">Animal Shelter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p>Don't have an account? <a href="#" id="showRegister">Register here</a></p>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <span class="close" id="closeRegisterModal">&times;</span>
            <h2>Register with FurShield</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="registerName">Full Name</label>
                    <input type="text" id="registerName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="registerPhone">Phone Number</label>
                    <input type="tel" id="registerPhone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="registerAddress">Address</label>
                    <textarea id="registerAddress" name="address" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="registerUserType">User Type</label>
                    <select id="registerUserType" name="userType" required>
                        <option value="">Select User Type</option>
                        <option value="pet-owner">Pet Owner</option>
                        <option value="veterinarian">Veterinarian</option>
                        <option value="shelter">Animal Shelter</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <p>Already have an account? <a href="#" id="showLogin">Login here</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>
