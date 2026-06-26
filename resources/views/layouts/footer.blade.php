<style>
    /* Reset & Design Tokens */
    :root {
        --footer-bg: #0f172a;       /* Deep Slate Blue / Dark Background */
        --footer-text: #94a3b8;     /* Light Muted Gray Text */
        --footer-heading: #f8fafc;  /* Bright Off-White for Headings */
        --footer-accent: #6366f1;   /* Vibrant Indigo Accent */
        --footer-accent-hover: #4f46e5;
        --footer-border: #1e293b;   /* Subtle divider border */
        --footer-speed: 0.3s;
    }

    .footer {
        background-color: var(--footer-bg);
        color: var(--footer-text);
        padding: 60px 20px 20px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: auto; /* Pushes footer to bottom if body uses flexbox */
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        gap: 40px;
    }

    /* Core Column Sizing */
    .footer-col {
        flex: 1;
        min-width: 200px;
    }

    .brand-col {
        flex: 1.5; /* Gives the brand section a bit more room */
    }

    .newsletter-col {
        flex: 1.5;
    }

    /* Logo & Typography */
    .footer-logo {
        font-size: 24px;
        font-weight: 700;
        color: var(--footer-heading);
        text-decoration: none;
        display: inline-block;
        margin-bottom: 15px;
    }

    .footer-about {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .footer-heading {
        color: var(--footer-heading);
        font-size: 16px;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Navigation Links */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: var(--footer-text);
        text-decoration: none;
        font-size: 15px;
        transition: color var(--footer-speed) ease;
    }

    .footer-links a:hover {
        color: var(--footer-accent);
    }

    /* Social Icons Minimal Setup */
    .footer-socials {
        display: flex;
        gap: 15px;
    }

    .footer-socials a {
        color: var(--footer-text);
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        width: 35px;
        height: 35px;
        border: 1px solid var(--footer-border);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all var(--footer-speed) ease;
    }

    .footer-socials a:hover {
        background-color: var(--footer-accent);
        color: #ffffff;
        border-color: var(--footer-accent);
    }

    /* Newsletter Form Layout */
    .newsletter-text {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .footer-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-input {
        background-color: var(--footer-border);
        border: 1px solid var(--footer-border);
        padding: 12px;
        border-radius: 6px;
        color: #ffffff;
        font-size: 14px;
        outline: none;
        transition: border-color var(--footer-speed) ease;
    }

    .footer-input:focus {
        border-color: var(--footer-accent);
    }

    .footer-form-btn {
        background-color: var(--footer-accent);
        color: #ffffff;
        border: none;
        padding: 12px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: background-color var(--footer-speed) ease;
    }

    .footer-form-btn:hover {
        background-color: var(--footer-accent-hover);
    }

    /* Bottom Section Rules */
    .footer-bottom {
        border-top: 1px solid var(--footer-border);
        margin-top: 50px;
        padding-top: 25px;
        text-align: center;
        font-size: 14px;
    }

    /* Mobile Adaptations */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            gap: 30px;
        }

        .footer-col {
            min-width: 100%;
        }

        .footer-form {
            flex-direction: row;
        }

        .footer-input {
            flex: 1;
        }
    }

    @media (max-width: 480px) {
        .footer-form {
            flex-direction: column;
        }
    }
</style>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-col brand-col">
            <a href="{{ url('/') }}" class="footer-logo">MyProject</a>
            <p class="footer-about">
                Building modern web solutions with speed, simplicity, and reliability. Crafting unique digital experiences for businesses worldwide.
            </p>
            <div class="footer-socials">
                <a href="#" aria-label="Twitter">X</a>
                <a href="#" aria-label="GitHub">GH</a>
                <a href="#" aria-label="LinkedIn">LN</a>
            </div>
        </div>

        <div class="footer-col">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Pricing</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3 class="footer-heading">Resources</h3>
            <ul class="footer-links">
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>

        <div class="footer-col newsletter-col">
            <h3 class="footer-heading">Stay Updated</h3>
            <p class="newsletter-text">Subscribe to our newsletter to get our latest updates and news.</p>
            <form class="footer-form" onsubmit="event.preventDefault(); alert('Subscribed!');">
                <input type="email" placeholder="Enter your email" required class="footer-input" aria-label="Email address">
                <button type="submit" class="footer-form-btn">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <span id="copyright-year"></span> MyProject. All rights reserved.</p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Keeps the copyright year accurate and dynamically updated
        const yearSpan = document.getElementById('copyright-year');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    });
</script>
