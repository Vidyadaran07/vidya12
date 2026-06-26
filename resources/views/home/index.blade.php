@extends('layouts.app')

@section('content')
<style>
    /* Hero Section Styling */
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        padding: 60px 0;
    }

    .hero-content {
        flex: 1;
    }

    .hero-badge {
        display: inline-block;
        background-color: #e0e7ff;
        color: #4f46e5;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .hero-title {
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        color: #0f172a;
        margin-bottom: 20px;
    }

    .hero-description {
        font-size: 18px;
        color: #64748b;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
    }

    .btn-primary {
        background-color: #4f46e5;
        color: white;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #4338ca;
    }

    .btn-secondary {
        background-color: transparent;
        color: #0f172a;
        border: 1px solid #cbd5e1;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #f1f5f9;
        border-color: #94a3b8;
    }

    .hero-image-container {
        flex: 1;
        height: 350px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Features Section Styling */
    .features-section {
        padding: 60px 0;
        border-top: 1px solid #e2e8f0;
    }

    .section-header {
        text-align: center;
        max-width: 600px;
        margin: 0 auto 50px auto;
    }

    .section-header h2 {
        font-size: 32px;
        color: #0f172a;
        margin-bottom: 15px;
    }

    .features-grid {
        display: flex;
        gap: 30px;
        justify-content: space-between;
    }

    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        flex: 1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        border-color: #4f46e5;
    }

    .feature-icon {
        font-size: 32px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .feature-card h3 {
        font-size: 20px;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .feature-card p {
        color: #64748b;
        font-size: 15px;
        line-height: 1.6;
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-section {
            flex-direction: column;
            text-align: center;
            padding: 40px 0;
        }

        .hero-title {
            font-size: 36px;
        }

        .hero-buttons {
            justify-content: center;
        }

        .hero-image-container {
            width: 100%;
            height: 250px;
        }

        .features-grid {
            flex-direction: column;
            gap: 20px;
        }
    }
</style>

<div class="homepage-wrapper">

    <section class="hero-section">
        <div class="hero-content">
            <span class="hero-badge">Smart Property Management</span>
            <h1 class="hero-title">The Ultimate Real Estate CRM for Professionals</h1>
            <p class="hero-description">
                Close more deals, track client property pipelines, and automate your lead follow-ups all from a single dashboard. Designed for modern real estate agents and brokerages.
            </p>
            <div class="hero-buttons">
                <a href="#" class="btn-primary">Start Free Trial</a>
                <a href="#" class="btn-secondary">Request Demo</a>
                <a href="{{ url('/signup') }}" class="btn-secondary">Register</a>
            </div>
        </div>
        <div class="hero-image-container">
            <img src="{{ asset('hero-sample.png') }}" alt="Real Estate CRM Illustration" class="hero-image">
        </div>
    </section>

    <section class="features-section">
        <div class="section-header">
            <h2>Grow Your Property Sales</h2>
            <p style="color: #64748b;">Discover the robust tools integrated directly inside your estate dashboard.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🏠</span>
                <h3>Lead & Property Match</h3>
                <p>Instantly match new buyer preferences with active properties using our automated matching engine.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">📊</span>
                <h3>Sales Pipeline Analytics</h3>
                <p>Track your commissions, agent performance, and pending deals with interactive real-time visual reports.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">✉️</span>
                <h3>Automated Follow-ups</h3>
                <p>Send personalized property listing email newsletters and SMS notifications to active buyers.</p>
            </div>
        </div>
    </section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Homepage component context initialization completed.');

        // Example feature card interactivity hook
        const cards = document.querySelectorAll('.feature-card');
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                console.log(`Feature card element selection recorded at index position: ${index + 1}`);
            });
        });
    });
</script>
@endsection
