<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova - Elevate Your Workflow</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            background: linear-gradient(135deg, #1d3557, #457b9d);
            color: #f1faee;
            overflow-x: hidden;
        }

        header {
            background: rgba(29, 53, 87, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 24px;
            font-weight: 800;
            color: #a8dadc;
            animation: fadeIn 1s ease-in-out;
        }

        nav a {
            margin: 0 15px;
            color: #f1faee;
            text-decoration: none;
            font-weight: 600;
            position: relative;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #a8dadc;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #a8dadc;
            transition: width 0.3s ease-in-out;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 150px 20px;
            background: linear-gradient(135deg, #457b9d, #1d3557);
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
            position: relative;
            animation: slideIn 1s ease-in-out;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #f1faee;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #e0e0e0;
            animation: fadeIn 2s ease-in-out;
        }

        .hero .cta-button {
            background: #e63946;
            color: white;
            padding: 15px 40px;
            font-size: 18px;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
            animation: bounceIn 1.5s ease-in-out;
        }

        .hero .cta-button:hover {
            background: #f77f91;
            transform: scale(1.1);
        }

        /* Interactive Bubbles Section */
        .bubbles-section {
            margin: 100px auto;
            text-align: center;
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            color: white;
            font-weight: 600;
            text-align: center;
            backdrop-filter: blur(5px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s, background 0.3s;
        }

        .bubble:hover {
            transform: scale(1.3);
            background: rgba(255, 255, 255, 0.2);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-30px);
            }
        }

        /* Bubble Positions */
        .bubble:nth-child(1) { top: 30%; left: 10%; animation-delay: 0s; }
        .bubble:nth-child(2) { top: 50%; left: 25%; animation-delay: 2s; }
        .bubble:nth-child(3) { top: 20%; left: 50%; animation-delay: 4s; }
        .bubble:nth-child(4) { top: 60%; left: 75%; animation-delay: 1s; }
        .bubble:nth-child(5) { top: 10%; left: 85%; animation-delay: 3s; }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 100px auto;
            padding: 0 20px;
        }

        .feature-card {
            background: #f1faee;
            color: #1d3557;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .feature-card p {
            color: #457b9d;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px 0;
            background: #1d3557;
            color: #a8dadc;
            font-size: 14px;
        }

        footer a {
            color: #f1faee;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #a8dadc;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Nova</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Elevate Your Workflow</h2>
        <p>Discover smarter solutions, streamline your projects, and unlock productivity like never before.</p>
        <a href="#features" class="cta-button">Get Started</a>
    </section>

    <section class="bubbles-section">
        <div class="bubble" title="AI-Powered Tools">AI Tools</div>
        <div class="bubble" title="Real-Time Collaboration">Collaboration</div>
        <div class="bubble" title="Advanced Analytics">Analytics</div>
        <div class="bubble" title="Seamless Integration">Integration</div>
        <div class="bubble" title="Smart Debugging">Debugging</div>
    </section>

    <section id="features" class="features">
        <div class="feature-card">
            <h3>AI-Powered Tools</h3>
            <p>Enhance your efficiency with advanced AI integrations for every task.</p>
        </div>
        <div class="feature-card">
            <h3>Real-Time Collaboration</h3>
            <p>Work seamlessly with your team, no matter where you are.</p>
        </div>
        <div class="feature-card">
            <h3>Analytics Dashboard</h3>
            <p>Gain insights into your projects and make data-driven decisions.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Nova. All Rights Reserved. <a href="#contact">Contact Us</a></p>
    </footer>
</body>
</html>
