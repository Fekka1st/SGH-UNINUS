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
            background: linear-gradient(to right, #28a745, #007bff); /* Gradient green to blue */
        }
        .navbar a {
            color: white;
        }
        .navbar .dropdown-menu {
            background-color: #28a745;
        }
        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1506784983877-766d2c3a2b3e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGdyZWVuJTIwZ3JlZW5ob3VzZXxlbnwwfHx8fDE2OTc4MjQ1ODU&ixlib=rb-4.0.3&q=80&w=1080');
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section .overlay {
            background-color: rgba(0, 105, 217, 0.6); /* Overlay biru gelap */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .hero-text h1 {
            font-size: 3rem;
            z-index: 2;
            position: relative;
        }
        .hero-text p {
            font-size: 1.2rem;
            z-index: 2;
            position: relative;
        }
        .btn-custom {
            background-color: white;
            color: #28a745;
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #28a745;
            color: white;
        }
        .features-section {
            background: linear-gradient(to right, #e9ecef, #cce5ff); /* Light gray to light blue */
            padding: 60px 0;
        }
        .features-section h2 {
            margin-bottom: 40px;
        }
        .testimonials-section {
            background: linear-gradient(to right, #f8f9fa, #e2e3e5); /* Light gray */
            padding: 60px 0;
        }
        .testimonials-section h2 {
            margin-bottom: 40px;
        }
        footer {
            background-color: #0069d9; /* Dark blue */
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #28a745; /* Change color on hover */
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
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#hydroponic">Hydroponic Systems</a></li>
                            <li><a class="dropdown-item" href="#aeroponic">Aeroponic Systems</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#monitoring">Monitoring Solutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#monitoring">Monitoring</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-custom" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section position-relative">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-text">
                    <h1>Efficient and Automated Greenhouse Control</h1>
                    <p>Manage your hydroponic and aeroponic systems easily with our smart solution. Monitor, control, and optimize plant growth with real-time data.</p>
                    <a href="#features" class="btn btn-custom">Learn More</a>
                    <a href="https://www.youtube.com/watch?v=eQSNKrigiOM" class="btn btn-light">Watch Video</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDIwfHxlbnwwfHx8fDE2OTc4MjQ1OTQ&ixlib=rb-4.0.3&q=80&w=1080" alt="Greenhouse Dashboard" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container text-center">
            <h2>Features of Our System</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Hydroponic Systems</h3>
                    <p>Discover the benefits of growing plants in a soil-less environment.</p>
                </div>
                <div class="col-md-4">
                    <h3>Aeroponic Systems</h3>
                    <p>Learn about our innovative aeroponic technology for enhanced growth.</p>
                </div>
                <div class="col-md-4">
                    <h3>Data Monitoring</h3>
                    <p>Real-time monitoring to ensure optimal conditions for your plants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="video" class="text-center">
        <div class="container">
            <h2>Watch Our Overview</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eQSNKrigiOM" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="your-server-side-script.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Smart Greenhouse. All rights reserved.</p>
            <p><a href="#home">Back to Top</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
