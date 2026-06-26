<style>
    /* Reset & Base Variables */
    :root {
        --primary-color: #4f46e5; /* Modern Indigo */
        --primary-hover: #4338ca;
        --text-color: #334155;
        --text-light: #64748b;
        --bg-color: #ffffff;
        --transition-speed: 0.3s;
    }

    /* Navbar General Styles */
    .navbar {
        background-color: var(--bg-color);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px 20px;
    }

    /* Logo styling */
    .nav-logo {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary-color);
        text-decoration: none;
        letter-spacing: -0.5px;
    }

    /* Navigation Menu Links */
    .nav-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 30px;
    }

    .nav-link {
        color: var(--text-color);
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        transition: color var(--transition-speed) ease;
    }

    .nav-link:hover, .nav-link.active {
        color: var(--primary-color);
    }

    /* Call To Action Button */
    .nav-btn {
        background-color: var(--primary-color);
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        transition: background-color var(--transition-speed) ease;
    }

    .nav-btn:hover {
        background-color: var(--primary-hover);
    }

    .mobile-cta {
        display: none; /* Hidden on desktop */
    }

    /* Hamburger Menu Button */
    .menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 24px;
        height: 18px;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 0;
    }

    .menu-toggle .bar {
        height: 3px;
        width: 100%;
        background-color: var(--text-color);
        border-radius: 2px;
        transition: all var(--transition-speed) ease;
    }

    /* Responsive Breakdown (Mobile & Tablet Layouts) */
    @media (max-width: 768px) {
        .nav-menu {
            position: absolute;
            top: 64px; /* Adjust based on navbar height */
            left: -100%;
            flex-direction: column;
            background-color: var(--bg-color);
            width: 100%;
            text-align: center;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
            transition: left var(--transition-speed) ease;
            padding: 20px 0;
            gap: 20px;
        }

        /* Slide menu in when active */
        .nav-menu.active {
            left: 0;
        }

        .nav-actions {
            display: none; /* Hide standard desktop CTA button */
        }

        .mobile-cta {
            display: block;
            margin-top: 10px;
        }

        .menu-toggle {
            display: flex; /* Show burger menu icon */
        }

        /* Hamburger Animation Transforms to 'X' */
        .menu-toggle.active .bar:nth-child(1) {
            transform: translateY(7.5px) rotate(45deg);
        }

        .menu-toggle.active .bar:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active .bar:nth-child(3) {
            transform: translateY(-7.5px) rotate(-45deg);
        }
    }
</style>

<nav class="navbar">
    <div class="nav-container">
        <a href="{{ url('/') }}" class="nav-logo">MyProject</a>

        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Features</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item mobile-cta">
                <a href="#" class="nav-btn">Get Started</a>
            </li>
        </ul>

        <div>
            <a href="{{ url('/signup') }}"class="nav-btn">Signup</a>
        </div>
        <div class="nav-actions">
            <a href="#" class="nav-btn">Get Started</a>
        </div>

        <button class="menu-toggle" id="mobile-menu-btn" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const navMenu = document.getElementById('nav-menu');

        // Toggle mobile responsive menu open/closed
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu if a user clicks an inner link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                menuBtn.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    });
</script>
