<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicks Corner - Premium Sneakers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #000000;
            --secondary: #ff6b6b;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark);
        }
        
        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
            padding: 0.5rem 0;
        }
        
        nav ul li a:hover {
            color: var(--secondary);
        }
        
        .cta-button {
            background-color: var(--primary);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .cta-button:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }
        
        /* Full-Screen Hero Section */
        .hero {
            height: 100vh;
            min-height: 600px;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url('https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 5%;
            position: relative;
        }
        
        .hero-content {
            max-width: 800px;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            letter-spacing: -1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .tagline {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .hero-button {
            background-color: var(--secondary);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .hero-button:hover {
            background-color: white;
            color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Features Section */
        .features-section {
            padding: 5rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2rem;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--secondary);
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .feature {
            flex: 1;
            min-width: 250px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        
        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature i {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        .feature h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .order-button {
            display: block;
            margin: 3rem auto 0;
            padding: 1rem 3rem;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .order-button:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255,107,107,0.3);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 5%;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            margin: 0 1.5rem;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
        }
        
        .social-icons {
            margin: 2rem 0;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 1rem;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--secondary);
        }
        
        .copyright {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 1rem;
                position: relative;
            }
            
            .logo {
                margin-bottom: 1rem;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 0.5rem;
            }
            
            .hero {
                min-height: 500px;
                padding-top: 100px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .tagline {
                font-size: 1.2rem;
            }
            
            .features {
                flex-direction: column;
            }
        }
    </style>
</head>
<script src="assets/js/navbar.js"></script>
<body>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>NOLAN RYAN CUSTOM NIKE AIR FORCE 1</h1>
                <p class="tagline">Light on your feet. Heavy on the game.</p>
                <button class="hero-button">Shop Now</button>
            </div>
        </section>

        <section class="features-section">
            <h2 class="section-title">Place Order</h2>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-feather-alt"></i>
                    <h3>Lightweight</h3>
                    <p>Peak performance on the court and daily style.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-shoe-prints"></i>
                    <h3>Ankle Support</h3>
                    <p>Cushioned, ergonomic design supports dynamic movements.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-wind"></i>
                    <h3>Breathable</h3>
                    <p>Breathable materials keep your feet cool all day long.</p>
                </div>
            </div>
            
            <button class="order-button">Add to Cart - $149.99</button>
        </section>
    </main>

    <footer>
        <div class="footer-links">
            <a href="#">About</a>
            <a href="#">Support</a>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
        </div>
        
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
        
        <div class="copyright">
            ©2025 KicksCorner. All rights reserved.
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart animation
            const orderButton = document.querySelector('.order-button');
            if (orderButton) {
                orderButton.addEventListener('click', function() {
                    // Animation effect
                    this.innerHTML = '<i class="fas fa-check"></i> Added to Cart!';
                    this.style.backgroundColor = '#4CAF50';
                    
                    // Reset after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = 'Add to Cart - $149.99';
                        this.style.backgroundColor = '';
                    }, 2000);
                });
            }
            
            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>