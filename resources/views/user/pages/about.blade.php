@extends('layouts.app')

@section('title', 'About Gold Berries - Our Story & Mission')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="about-hero">
    <div class="container">
        <div class="section-header">
            <h1 class="hero-title">About Gold Berries</h1>
            <p class="hero-subtitle">Transforming payroll management with innovative technology since 2015</p>
        </div>
    </div>
</section>

<!-- ============================================ COMPANY STORY ============================================ -->
<section class="company-story">
    <div class="container">
        <div class="story-grid">
            <div class="story-content" data-animation="slideInLeft">
                <h2>Our Journey</h2>
                <p>Gold Berries was founded with a single vision: to make payroll management simple, accurate, and accessible to organizations of all sizes.</p>
                
                <p>What started as a small team of passionate developers has grown into a trusted platform serving over 5,000 companies worldwide. We've stayed committed to our core values: innovation, reliability, and customer success.</p>
                
                <p>Today, we're proud to be one of the leading payroll management platforms, trusted by enterprises, SMBs, and startups across multiple industries.</p>
                
                <div class="story-stats">
                    <div class="stat">
                        <h3>5000+</h3>
                        <p>Companies</p>
                    </div>
                    <div class="stat">
                        <h3>50k+</h3>
                        <p>Active Users</p>
                    </div>
                    <div class="stat">
                        <h3>$2B+</h3>
                        <p>Payroll Processed</p>
                    </div>
                    <div class="stat">
                        <h3>99.9%</h3>
                        <p>Uptime SLA</p>
                    </div>
                </div>
            </div>
            
            <div class="story-visual" data-animation="slideInRight">
                <div class="timeline-visual">
                    <div class="timeline-item">
                        <span class="year">2015</span>
                        <p>Founded Gold Berries</p>
                    </div>
                    <div class="timeline-item">
                        <span class="year">2017</span>
                        <p>1000 customers milestone</p>
                    </div>
                    <div class="timeline-item">
                        <span class="year">2019</span>
                        <p>Series A Funding</p>
                    </div>
                    <div class="timeline-item">
                        <span class="year">2021</span>
                        <p>Global expansion</p>
                    </div>
                    <div class="timeline-item">
                        <span class="year">2023</span>
                        <p>5000+ customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ MISSION & VALUES ============================================ -->
<section class="mission-section">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-card" data-animation="slideInLeft">
                <h3>Our Mission</h3>
                <p>To empower organizations with intelligent, reliable, and user-friendly payroll solutions that save time, reduce errors, and drive business growth.</p>
            </div>
            
            <div class="mission-card" data-animation="slideInUp">
                <h3>Our Vision</h3>
                <p>To become the global leader in payroll management technology, trusted by organizations for accuracy, innovation, and customer success.</p>
            </div>
            
            <div class="mission-card" data-animation="slideInRight">
                <h3>Our Values</h3>
                <ul>
                    <li>🎯 Customer-First Approach</li>
                    <li>🚀 Continuous Innovation</li>
                    <li>🔒 Security & Trust</li>
                    <li>🌱 Sustainable Growth</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ TEAM SECTION ============================================ -->
<section class="team-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Leadership Team</h2>
            <p class="section-subtitle">Experienced leaders driving innovation in payroll technology</p>
        </div>

        <div class="team-grid">
            <div class="team-member" data-animation="fadeInUp">
                <div class="member-avatar">👔</div>
                <h4>CEO & Co-Founder</h4>
                <p>15+ years in fintech and payroll solutions</p>
            </div>
            <div class="team-member" data-animation="fadeInUp">
                <div class="member-avatar">💻</div>
                <h4>CTO & Co-Founder</h4>
                <p>Expert in cloud architecture and AI</p>
            </div>
            <div class="team-member" data-animation="fadeInUp">
                <div class="member-avatar">📊</div>
                <h4>CFO</h4>
                <p>Financial strategy and business growth</p>
            </div>
            <div class="team-member" data-animation="fadeInUp">
                <div class="member-avatar">🎯</div>
                <h4>VP Product</h4>
                <p>Product innovation and customer success</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ WHY CHOOSE US ============================================ -->
<section class="why-us-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Gold Berries?</h2>
            <p class="section-subtitle">What sets us apart from the competition</p>
        </div>

        <div class="why-grid">
            <div class="why-item" data-animation="slideInLeft">
                <span class="why-icon">⚡</span>
                <h4>Speed & Efficiency</h4>
                <p>Process payroll in minutes, not hours. Our automated system handles everything from calculations to compliance.</p>
            </div>
            <div class="why-item" data-animation="slideInUp">
                <span class="why-icon">🎯</span>
                <h4>100% Accuracy</h4>
                <p>Advanced algorithms ensure error-free payroll processing with built-in compliance checks.</p>
            </div>
            <div class="why-item" data-animation="slideInRight">
                <span class="why-icon">🔒</span>
                <h4>Maximum Security</h4>
                <p>Bank-level encryption and SOC 2 compliance protect your sensitive employee data.</p>
            </div>
            <div class="why-item" data-animation="slideInLeft">
                <span class="why-icon">🌍</span>
                <h4>Global Reach</h4>
                <p>Support for multiple countries, currencies, and tax regulations in one platform.</p>
            </div>
            <div class="why-item" data-animation="slideInUp">
                <span class="why-icon">💬</span>
                <h4>24/7 Support</h4>
                <p>Dedicated support team available round-the-clock to assist you.</p>
            </div>
            <div class="why-item" data-animation="slideInRight">
                <span class="why-icon">📈</span>
                <h4>Scalable</h4>
                <p>From 10 to 10,000 employees, Gold Berries grows with your business.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="about-cta">
    <div class="container">
        <h2>Join Thousands of Happy Customers</h2>
        <p>Experience the Gold Berries difference today</p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Started</a>
            <a href="{{ route('product') }}" class="btn btn-secondary btn-lg">Explore Features</a>
        </div>
    </div>
</section>

<style>
/* About Page Styles */
.about-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 100px 0;
    text-align: center;
}

.story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    margin-top: 50px;
}

.story-content h2 {
    font-size: 36px;
    color: #D4AF37;
    margin-bottom: 20px;
}

.story-content p {
    color: #b0b0b0;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.story-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 30px;
}

.story-stats .stat {
    background: rgba(212, 175, 55, 0.1);
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.story-stats .stat h3 {
    font-size: 28px;
    color: #D4AF37;
    margin-bottom: 5px;
}

.story-stats .stat p {
    color: #b0b0b0;
    margin: 0;
}

.timeline-visual {
    position: relative;
}

.timeline-visual::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(180deg, #D4AF37, rgba(212, 175, 55, 0.2));
}

.timeline-item {
    padding-left: 30px;
    margin-bottom: 25px;
    position: relative;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -9px;
    top: 8px;
    width: 16px;
    height: 16px;
    background: #D4AF37;
    border-radius: 50%;
    border: 3px solid rgba(11, 28, 44, 0.8);
}

.timeline-item .year {
    color: #D4AF37;
    font-weight: 700;
    font-size: 16px;
}

.timeline-item p {
    color: #b0b0b0;
    margin: 5px 0 0 0;
}

.company-story {
    padding: 100px 0;
}

.mission-section {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.mission-card {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    transition: all 0.3s ease;
}

.mission-card:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
}

.mission-card h3 {
    color: #D4AF37;
    font-size: 22px;
    margin-bottom: 15px;
}

.mission-card p {
    color: #b0b0b0;
    line-height: 1.7;
}

.mission-card ul {
    list-style: none;
    margin: 0;
}

.mission-card li {
    color: #b0b0b0;
    padding: 8px 0;
    font-size: 15px;
}

.team-section {
    padding: 100px 0;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.team-member {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    transition: all 0.3s ease;
}

.team-member:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
}

.member-avatar {
    font-size: 60px;
    margin-bottom: 15px;
}

.team-member h4 {
    color: #D4AF37;
    font-size: 18px;
    margin-bottom: 10px;
}

.team-member p {
    color: #b0b0b0;
    font-size: 14px;
}

.why-us-section {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.why-item {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    transition: all 0.3s ease;
}

.why-item:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
}

.why-icon {
    font-size: 48px;
    display: block;
    margin-bottom: 15px;
}

.why-item h4 {
    color: #D4AF37;
    font-size: 20px;
    margin-bottom: 12px;
}

.why-item p {
    color: #b0b0b0;
    line-height: 1.7;
}

.about-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.about-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.about-cta p {
    font-size: 18px;
    color: #b0b0b0;
    margin-bottom: 30px;
}

.cta-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 1024px) {
    .story-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .about-hero {
        padding: 80px 0;
    }
    
    .story-stats {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
}
</style>

@endsection
