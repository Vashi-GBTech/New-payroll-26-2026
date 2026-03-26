@extends('user.layouts.app')

@section('title', 'Our Product - Gold Berries Payroll')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="product-hero">
    <div class="container">
        <div class="hero-content" data-animation="slideInLeft">
            <span class="section-badge">OUR PRODUCT</span>
            <h1 class="hero-title">Payroll Management<br><span class="accent">Redefined</span></h1>
            <p class="hero-subtitle">Complete payroll automation platform designed for modern enterprises. Handle everything from salary processing to compliance with a single integrated solution.</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Started Today</a>
                <a href="{{ route('landing') }}#features" class="btn btn-secondary btn-lg">View Features</a>
            </div>
            <div class="product-hero-stats">
                <div class="stat">
                    <h3>99.9%</h3>
                    <p>Uptime SLA</p>
                </div>
                <div class="stat">
                    <h3>500+</h3>
                    <p>Integrations</p>
                </div>
                <div class="stat">
                    <h3>50k+</h3>
                    <p>Active Users</p>
                </div>
            </div>
        </div>
        <div class="hero-visual" data-animation="slideInRight">
            <div class="blob blob-1"></div>
            <div class="blob blob-2"></div>
            <div class="product-demo-card">
                <div class="demo-header">
                    <span class="demo-dot"></span>
                    <span class="demo-dot"></span>
                    <span class="demo-dot"></span>
                </div>
                <div class="demo-content">
                    <h4>Employee Payroll</h4>
                    <p>Advanced salary configuration</p>
                    <div class="demo-bar" style="width: 85%;"></div>
                    <p style="font-size: 12px; color: #D4AF37; margin-top: 8px;">Successfully processed</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CORE FEATURES SECTION ============================================ -->
<section class="core-features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Core Features</h2>
            <p class="section-subtitle">Everything you need to manage payroll efficiently</p>
        </div>
        
        <div class="features-grid-advanced">
            <!-- Feature 1 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">⚙️</span>
                </div>
                <h3>Payroll Automation</h3>
                <p>Automatically calculate salaries, deductions, and taxes. Set up recurring payroll cycles with zero manual effort.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Multi-currency support</li>
                        <li>✓ Dynamic tax calculation</li>
                        <li>✓ Batch processing</li>
                        <li>✓ Compliance-ready</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">👥</span>
                </div>
                <h3>Employee Management</h3>
                <p>Create comprehensive employee records with all required information. Track employment history and contracts.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Digital employee profiles</li>
                        <li>✓ Document storage</li>
                        <li>✓ Role-based access</li>
                        <li>✓ Bulk import/export</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">📊</span>
                </div>
                <h3>Advanced Analytics</h3>
                <p>Real-time insights into payroll metrics, labor costs, and workforce trends with interactive dashboards.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Custom reports</li>
                        <li>✓ Real-time dashboards</li>
                        <li>✓ Cost analysis</li>
                        <li>✓ Predictive insights</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">🔒</span>
                </div>
                <h3>Security & Compliance</h3>
                <p>Industry-leading security with encrypted data, role-based access, and full audit trails for compliance.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Bank-grade encryption</li>
                        <li>✓ SOC 2 certified</li>
                        <li>✓ Audit logs</li>
                        <li>✓ GDPR compliant</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">🎯</span>
                </div>
                <h3>Attendance Tracking</h3>
                <p>Integrated attendance and time tracking with biometric support and automated leave management.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Biometric integration</li>
                        <li>✓ Mobile clock-in/out</li>
                        <li>✓ Shift management</li>
                        <li>✓ Overtime calculation</li>
                    </ul>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" data-animation="fadeInUp">
                <div class="feature-icon-box">
                    <span class="feature-icon">📄</span>
                </div>
                <h3>Payslip Generation</h3>
                <p>Automated, professional payslips with complete salary breakdown, tax details, and net pay calculation.</p>
                <div class="feature-details">
                    <ul>
                        <li>✓ Branded payslips</li>
                        <li>✓ Digital delivery</li>
                        <li>✓ Multi-language</li>
                        <li>✓ Archive & access</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ INTEGRATION ECOSYSTEM ============================================ -->
<section class="integrations-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Integrations & Ecosystem</h2>
            <p class="section-subtitle">Connect with 500+ applications and services</p>
        </div>
        
        <div class="integrations-grid">
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">💼</div>
                <h4>Accounting Software</h4>
                <p>QuickBooks, Xero, SAP, NetSuite</p>
            </div>
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">🏦</div>
                <h4>Banking</h4>
                <p>Direct deposit, bank feeds, transfers</p>
            </div>
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">📱</div>
                <h4>HR Systems</h4>
                <p>Workday, BambooHR, ADP</p>
            </div>
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">☁️</div>
                <h4>Cloud Services</h4>
                <p>Google Workspace, Microsoft 365, Slack</p>
            </div>
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">🔐</div>
                <h4>Security</h4>
                <p>SSO, OAuth, Two-factor authentication</p>
            </div>
            <div class="integration-card" data-animation="scaleIn">
                <div class="integration-icon">📊</div>
                <h4>Analytics</h4>
                <p>Tableau, Power BI, Looker</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ USE CASE SCENARIOS ============================================ -->
<section class="use-cases">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Perfect For Every Organization</h2>
            <p class="section-subtitle">See how different organizations benefit from Payroll Pro</p>
        </div>

        <div class="use-case-carousel">
            <!-- Use Case 1 -->
            <div class="use-case-card" data-animation="slideInLeft">
                <div class="use-case-header">
                    <h3>Startups & SMBs</h3>
                    <span class="use-case-badge">Growing Companies</span>
                </div>
                <div class="use-case-content">
                    <p><strong>Challenge:</strong> Manual payroll processes consuming hours of time</p>
                    <p><strong>Solution:</strong> Automated payroll with zero complexity</p>
                    <div class="use-case-benefits">
                        <p>✓ Save 10+ hours per payroll cycle</p>
                        <p>✓ Reduce payroll errors by 99%</p>
                        <p>✓ Scale automatically as you grow</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary">Learn More</a>
            </div>

            <!-- Use Case 2 -->
            <div class="use-case-card" data-animation="slideInRight">
                <div class="use-case-header">
                    <h3>Enterprise Organizations</h3>
                    <span class="use-case-badge">Large Teams</span>
                </div>
                <div class="use-case-content">
                    <p><strong>Challenge:</strong> Complex payroll with multiple locations and regulations</p>
                    <p><strong>Solution:</strong> Enterprise-grade compliance and customization</p>
                    <div class="use-case-benefits">
                        <p>✓ Multi-location coordination</p>
                        <p>✓ Regulatory compliance</p>
                        <p>✓ Advanced reporting & analytics</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary">Learn More</a>
            </div>

            <!-- Use Case 3 -->
            <div class="use-case-card" data-animation="slideInLeft">
                <div class="use-case-header">
                    <h3>Service Providers</h3>
                    <span class="use-case-badge">Agencies & Consultants</span>
                </div>
                <div class="use-case-content">
                    <p><strong>Challenge:</strong> Managing contractors and flexible workforce</p>
                    <p><strong>Solution:</strong> Flexible payroll for every employment type</p>
                    <div class="use-case-benefits">
                        <p>✓ Contractor management</p>
                        <p>✓ Flexible scheduling</p>
                        <p>✓ Multiple contract types</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ IMPLEMENTATION TIMELINE ============================================ -->
<section class="implementation-timeline">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Implementation</h2>
            <p class="section-subtitle">Go live in days, not months</p>
        </div>

        <div class="timeline">
            <div class="timeline-item" data-animation="slideInLeft">
                <div class="timeline-icon">📋</div>
                <h4>Week 1: Setup & Configuration</h4>
                <p>We guide you through system configuration, employee data import, and initial setup.</p>
            </div>
            <div class="timeline-item" data-animation="slideInLeft">
                <div class="timeline-icon">🔧</div>
                <h4>Week 2: Integration & Testing</h4>
                <p>Connect your accounting, banking, and HR systems. Run test payroll cycles.</p>
            </div>
            <div class="timeline-item" data-animation="slideInLeft">
                <div class="timeline-icon">👥</div>
                <h4>Week 3: Training & Go-Live</h4>
                <p>Team training sessions and full production launch with dedicated support.</p>
            </div>
            <div class="timeline-item" data-animation="slideInLeft">
                <div class="timeline-icon">🚀</div>
                <h4>Ongoing: Success & Growth</h4>
                <p>Continuous optimization, updates, and support as your business grows.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="product-cta">
    <div class="container">
        <h2>Ready to Transform Your Payroll?</h2>
        <p>Join thousands of companies using Payroll Pro for smarter, faster payroll management.</p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Started</a>
            <a href="javascript:void(0)" class="btn btn-secondary btn-lg">Schedule Demo</a>
        </div>
    </div>
</section>

<style>
/* Product Page Specific Styles */
.product-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 120px 0;
    position: relative;
    overflow: hidden;
}

.product-hero .container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.section-badge {
    display: inline-block;
    padding: 8px 16px;
    background: rgba(212, 175, 55, 0.2);
    color: #D4AF37;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.product-hero-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
}

.product-hero-stats .stat {
    text-align: center;
}

.product-hero-stats .stat h3 {
    font-size: 28px;
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 5px;
}

.product-hero-stats .stat p {
    color: #b0b0b0;
    font-size: 14px;
}

.hero-visual {
    position: relative;
    height: 400px;
}

.product-demo-card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.8), rgba(7, 21, 33, 0.9));
    border: 1px solid rgba(212, 175, 55, 0.3);
    border-radius: 12px;
    padding: 20px;
    width: 90%;
    max-width: 300px;
    backdrop-filter: blur(10px);
    animation: float 6s ease-in-out infinite;
}

.demo-header {
    display: flex;
    gap: 8px;
    margin-bottom: 15px;
}

.demo-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(212, 175, 55, 0.4);
}

.demo-dot:nth-child(1) { background: #4CAF50; }
.demo-dot:nth-child(2) { background: #FFC107; }
.demo-dot:nth-child(3) { background: #F44236; }

.demo-content h4 {
    color: #D4AF37;
    font-size: 16px;
    margin-bottom: 5px;
}

.demo-content p {
    color: #b0b0b0;
    font-size: 13px;
    margin-bottom: 12px;
}

.demo-bar {
    height: 6px;
    background: rgba(212, 175, 55, 0.2);
    border-radius: 3px;
    overflow: hidden;
}

.demo-bar::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, #D4AF37, #e8c556);
    animation: slideRight 2s ease-out;
}

@keyframes slideRight {
    from { width: 0; }
}

.core-features {
    padding: 100px 0;
}

.features-grid-advanced {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.feature-item {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-10px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 20px 40px rgba(212, 175, 55, 0.15);
}

.feature-icon-box {
    width: 70px;
    height: 70px;
    background: rgba(212, 175, 55, 0.1);
    border: 2px solid rgba(212, 175, 55, 0.3);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.feature-icon {
    font-size: 40px;
}

.feature-item h3 {
    font-size: 20px;
    color: #D4AF37;
    margin-bottom: 12px;
    font-weight: 700;
}

.feature-item p {
    color: #b0b0b0;
    margin-bottom: 16px;
    line-height: 1.6;
}

.feature-details ul {
    list-style: none;
}

.feature-details li {
    color: #999999;
    font-size: 14px;
    margin-bottom: 8px;
    padding-left: 20px;
    position: relative;
}

.feature-details li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #4CAF50;
    font-weight: bold;
}

.integrations-section {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.integrations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    margin-top: 50px;
}

.integration-card {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    transition: all 0.3s ease;
}

.integration-card:hover {
    transform: scale(1.05);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.2);
}

.integration-icon {
    font-size: 50px;
    margin-bottom: 15px;
}

.integration-card h4 {
    color: #D4AF37;
    font-size: 18px;
    margin-bottom: 8px;
}

.integration-card p {
    color: #b0b0b0;
    font-size: 14px;
}

.use-cases {
    padding: 100px 0;
}

.use-case-carousel {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.use-case-card {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    transition: all 0.3s ease;
}

.use-case-card:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 20px 40px rgba(212, 175, 55, 0.15);
}

.use-case-header {
    border-bottom: 2px solid rgba(212, 175, 55, 0.2);
    padding-bottom: 15px;
    margin-bottom: 20px;
}

.use-case-header h3 {
    color: #D4AF37;
    font-size: 22px;
    margin-bottom: 10px;
}

.use-case-badge {
    display: inline-block;
    padding: 5px 12px;
    background: rgba(212, 175, 55, 0.2);
    color: #D4AF37;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
}

.use-case-content {
    margin-bottom: 20px;
    color: #b0b0b0;
    line-height: 1.8;
}

.use-case-content p {
    margin-bottom: 12px;
    font-size: 14px;
}

.use-case-content strong {
    color: #D4AF37;
}

.use-case-benefits p {
    margin: 8px 0;
    padding-left: 20px;
    position: relative;
}

.use-case-benefits p::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #4CAF50;
}

.implementation-timeline {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.timeline-item {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
    text-align: center;
}

.timeline-icon {
    font-size: 50px;
    margin-bottom: 15px;
}

.timeline-item h4 {
    color: #D4AF37;
    font-size: 18px;
    margin-bottom: 12px;
}

.timeline-item p {
    color: #b0b0b0;
    font-size: 14px;
    line-height: 1.6;
}

.product-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.product-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.product-cta p {
    font-size: 18px;
    color: #b0b0b0;
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 1024px) {
    .product-hero .container {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .hero-visual {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .product-hero {
        padding: 80px 0;
    }
    
    .product-hero-stats {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
    
    .use-case-carousel {
        grid-template-columns: 1fr;
    }
    
    .timeline {
        grid-template-columns: 1fr;
    }
}
</style>

@endsection
