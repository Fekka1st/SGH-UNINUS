<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Greenhouse System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
        .hero-section {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .hero-section img {
            max-width: 80%;
            height: auto;
        }
        .hero-text h1 {
            font-size: 3rem;
        }
        .hero-text p {
            font-size: 1.2rem;
        }
        .btn-custom {
            background-color: white;
            color: #007bff;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: bold;
        }
        section {
            padding: 60px 0;
        }
        footer {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Smart Greenhouse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Greenhouse</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-custom" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-text">
                    <h1>Efficient and Automated Greenhouse Control</h1>
                    <p>Manage your hydroponic and aeroponic systems easily with our smart solution. Monitor, control, and optimize plant growth with real-time data.</p>
                    <a href="#" class="btn btn-custom">Learn More</a>
                    <a href="#" class="btn btn-light">Watch Video</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/dashboard-example.png') }}" alt="Greenhouse Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="text-center">
        <div class="container">
            <h2>Key Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/feature-1.png') }}" alt="Feature 1" class="img-fluid mb-3">
                    <h4>Real-time Monitoring</h4>
                    <p>Track your greenhouse environment in real-time with detailed metrics and analytics.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/feature-2.png') }}" alt="Feature 2" class="img-fluid mb-3">
                    <h4>Automated Control</h4>
                    <p>Automate the management of temperature, humidity, and watering schedules effortlessly.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/feature-3.png') }}" alt="Feature 3" class="img-fluid mb-3">
                    <h4>Remote Access</h4>
                    <p>Access and control your greenhouse systems from anywhere with a simple app.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-light text-center">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"The Smart Greenhouse system has revolutionized the way we manage our crops. It's efficient and easy to use."</p>
                        <footer class="blockquote-footer">John Doe, Farmer</footer>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"Our greenhouse operations have never been smoother thanks to the automation and real-time data this system provides."</p>
                        <footer class="blockquote-footer">Jane Smith, Greenhouse Owner</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="text-center">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How does the Smart Greenhouse system work?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The Smart Greenhouse system uses sensors to collect data about your greenhouse environment and automates essential functions like watering and climate control based on that data.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can I control the system remotely?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, you can access and control your greenhouse systems remotely using our mobile app.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to learn more about our products, feel free to reach out!</p>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control mb-3" placeholder="Your Email">
                    </div>
                </div>
                <textarea class="form-control mb-3" rows="5" placeholder="Your Message"></textarea>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Smart Greenhouse. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
