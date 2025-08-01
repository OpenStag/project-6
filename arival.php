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
        .main-header {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 34px 40px 0 40px;
    z-index: 10;
    background: transparent;
  }
  
  .logo {
    font-family: 'Irish Grover', cursive;
    font-size: 36px;
    line-height: 44px;
    color: var(--primary);
    letter-spacing: 1px;
    user-select: none;
    outline: none;
  }
  
  .main-nav ul {
    display: flex;
    gap: 40px;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .main-nav .nav-link {
    font-family: 'Inter', Arial, sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 29px;
    color: var(--text);
    text-decoration: none;
    position: relative;
    padding: 0 4px;
    transition: color var(--transition);
  }
  
  .main-nav .nav-link.active,
  .main-nav .nav-link:focus {
    color: var(--active-link);
  }
  
  .main-nav .nav-link.active::after {
    content: "";
    display: block;
    width: 100%;
    height: 3px;
    background: var(--active-link);
    border-radius: 2px;
    position: absolute;
    left: 0;
    bottom: -6px;
  }
  
  .header-icons {
    display: flex;
    align-items: center;
    gap: 18px;
  }
  
  .icon-btn {
    background: none;
    border: none;
    cursor: pointer;
    position: relative;
    padding: 0;
    margin: 0 2px;
    display: flex;
    align-items: center;
    transition: filter var(--transition);
  }
  
  .icon-btn:focus {
    outline: 2px solid var(--active-link);
    outline-offset: 2px;
  }
  
  .cart-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    background: linear-gradient(0deg, rgba(0, 89, 179, 0.74), #d9d9d9);
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    border: 2px solid #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  
  .avatar {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 1px solid #000;
    object-fit: cover;
    background: #eee;
  }
  
  .dark-toggle svg {
    filter: grayscale(0.7);
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
        <header class="main-header">
    <div class="logo" tabindex="0">Kicks Corner</div>
    <nav class="main-nav" aria-label="Main navigation">
      <ul>
        <li><a href="./arival.php" class="nav-link active" aria-current="page">New Arrivals</a></li>
        <li><a href="./Men.html" class="nav-link">Men</a></li>
        <li><a href="./Women.html" class="nav-link">Women</a></li>
        <li><a href="./Sports.html" class="nav-link">Sports</a></li>
        <li><a href="./aboutUs.html" class="nav-link">About Us</a></li>
      </ul>
    </nav>
    <div class="header-icons">
      <button class="icon-btn" aria-label="Cart">
        <span class="cart-badge" id="cart-badge">0</span>
        <!-- Cart SVG -->
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" aria-hidden="true"><path d="M10 29a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm13 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM7 7h22l-2.5 12.5a2 2 0 0 1-2 1.5H11.5a2 2 0 0 1-2-1.5L7 7zm0 0L5 3H2" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <button class="icon-btn" aria-label="Favorites">
        <!-- Heart SVG -->
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" aria-hidden="true"><path d="M16.5 29s-10-6.5-10-13.5A6.5 6.5 0 0 1 16.5 9a6.5 6.5 0 0 1 10 6.5C26.5 22.5 16.5 29 16.5 29z" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <button class="icon-btn" aria-label="Profile">
        <img src="profile.png" alt="User avatar" class="avatar">
      </button>
      <button class="icon-btn dark-toggle" id="dark-toggle" aria-label="Toggle dark mode">
        <!-- Moon SVG -->
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true"><path d="M14 2a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1zm0 22a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1zm10-10a1 1 0 0 1 1 1h2a1 1 0 1 1 0-2h-2a1 1 0 0 1-1 1zm-20 0a1 1 0 0 1 1 1H3a1 1 0 1 1 0-2h2a1 1 0 0 1 1 1zm14.95-7.07a1 1 0 0 1 1.41 0l1.42 1.42a1 1 0 1 1-1.41 1.41l-1.42-1.42a1 1 0 0 1 0-1.41zm-11.31 0a1 1 0 0 1 0 1.41L4.22 7.76a1 1 0 1 1-1.41-1.41l1.42-1.42a1 1 0 0 1 1.41 0zm11.31 14.14a1 1 0 0 1 0 1.41l-1.42 1.42a1 1 0 1 1-1.41-1.41l1.42-1.42a1 1 0 0 1 1.41 0zm-11.31 0a1 1 0 0 1 1.41 0l1.42 1.42a1 1 0 1 1-1.41 1.41l-1.42-1.42a1 1 0 0 1 0-1.41z" fill="#222"/></svg>
      </button>
    </div>
  </header>
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