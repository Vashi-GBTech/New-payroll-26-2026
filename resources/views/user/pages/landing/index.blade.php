@extends('user.layouts.app')

@section('title', 'Gold Berries - Modern Payroll Management System | Enterprise Solutions')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="hero-section" id="home" style="padding-top: 40px !important; min-height: auto; padding-bottom: 60px;">
    <div class="background-elements">
        <div class="grid-pattern"></div>
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <div class="hero-container">
        <div class="hero-layout" style="gap: 80px;">
            <div class="hero-content" style="padding-right: 30px; margin-left: -60px;">
                <div style="display: flex; align-items: center; margin-bottom: 24px;">
                    <span class="tagline" style="margin-bottom: 0; text-indent: 0.1em; text-align: center; display: inline-flex; justify-content: center; align-items: center;">ENTERPRISE-GRADE PAYROLL PLATFORM</span>
                </div>
                <h1 class="hero-title">
                    Simplify Payroll with <span class="highlight">Intelligent Automation</span>
                </h1>
                <p class="hero-subtitle">
                    Enterprise-ready payroll automation with intelligent compliance, real-time analytics, and seamless integrations. Trusted by 5,000+ companies worldwide.
                </p>
                
                <div class="hero-buttons">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-glow">Start Free Trial <span>→</span></a>
                    <button class="btn btn-outline">View Demo Video</button>
                </div>
            </div>

            <div class="hero-visual-side" style="position: relative;">
                <img src="/assets/frontend/images/Payroll.png" alt="Payroll Dashboard" style="width: 100%; max-width: none; height: auto; border-radius: 16px; box-shadow: 0 25px 50px rgba(0,0,0,0.5);">
            </div>
        </div>
    </div>
</section>


<!-- ============================================ FEATURES SECTION ============================================ -->
<section class="features-section" id="features">
    <div class="features-container">
        <div class="section-header">
            <h2 class="section-title">Core Payroll Modules</h2>
            <p class="section-subtitle">Advanced features designed for every aspect of payroll management</p>
        </div>

        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="1"></circle>
                        <path d="M12 1v6m0 6v6"></path>
                        <path d="M4.22 4.22l4.24 4.24m5.08 5.08l4.24 4.24"></path>
                        <path d="M1 12h6m6 0h6"></path>
                        <path d="M4.22 19.78l4.24-4.24m5.08-5.08l4.24-4.24"></path>
                    </svg>
                </div>
                <h3>Salary Management</h3>
                <p>Automated salary calculations with customizable rules and variable components</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                        <path d="M7 10h3v4H7zm4 0h3v4h-3z"></path>
                    </svg>
                </div>
                <h3>Leave Management</h3>
                <p>Complete leave policy automation with approval workflows</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                        <path d="M12 6v6l4 2"></path>
                    </svg>
                </div>
                <h3>Attendance Tracking</h3>
                <p>Real-time attendance monitoring with biometric and mobile integration</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h3>Employee Self-Service</h3>
                <p>Employees access payslips, leave balance, and personal records anytime</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="12" y1="11" x2="12" y2="17"></line>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                </div>
                <h3>Payslip Generation</h3>
                <p>Instant payslip creation with customizable templates and digital delivery</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="12 1 3 7 3 17 12 23 21 17 21 7 12 1"></polyline>
                        <line x1="12" y1="12" x2="12" y2="23"></line>
                        <line x1="3 10" x2="21 10"></line>
                    </svg>
                </div>
                <h3>Tax Calculation</h3>
                <p>Compliance with local tax regulations and automatic deduction calculations</p>
            </div>
        </div>
    </div>
</section>

<style>
    .pane-visual {
        transform: scale(1.12);
        transform-origin: center;
        transition: transform 0.4s ease;
        position: relative;
    }
    .pane-visual .mockup-img {
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        width: 100%;
        height: auto;
        display: block;
    }
    @media (max-width: 992px) {
        .pane-visual {
            transform: scale(1);
        }
    }
</style>
<section class="product-section" id="product">
    <div class="product-container">
        <div class="section-header">
            <h2 class="section-title">Our Platform</h2>
            <p class="section-subtitle">Everything you need to manage HR and payroll efficiently in one centralized hub</p>
        </div>

        <div class="tab-navigation">
            <button class="tab-btn active" data-tab="payroll">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"></path></svg>
                Payroll
            </button>
            <button class="tab-btn" data-tab="hr">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"></path></svg>
                HR Management
            </button>
            <button class="tab-btn" data-tab="reports">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 118 2.83M22 12A10 10 0 0012 2v10z"></path></svg>
                Reports
            </button>
        </div>

        <div class="tab-content">
            <!-- Payroll Tab -->
            <div class="tab-pane active" id="payroll">
                <div class="pane-info">
                    <h3>Complete <span class="highlight">Payroll</span> Processing</h3>
                    <p>Streamline your entire payroll cycle from employee data management to final settlement. Our intelligent system handles complex calculations, tax implications, and compliance requirements automatically.</p>
                    
                    <div class="pane-features">
                        <div class="pane-feature-card">
                            <h4><span>⚡</span> Bulk Processing</h4>
                            <p>Handle thousands of employees in minutes with our high-speed engine.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>🌍</span> Multi-currency</h4>
                            <p>Support for global teams with automated exchange rate handling.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>🛡️</span> Compliance</h4>
                            <p>Built-in statutory rules updated automatically in real-time.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>📱</span> SSAE 18</h4>
                            <p>Enterprise-grade security and audit logging for every transaction.</p>
                        </div>
                    </div>
                </div>
                <div class="pane-visual">
                    <span class="visual-badge">Automation Active</span>
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1000&auto=format&fit=crop" alt="Payroll Preview" class="mockup-img">
                </div>
            </div>

            <!-- HR Tab -->
            <div class="tab-pane" id="hr">
                <div class="pane-info">
                    <h3>Integrated <span class="highlight">HR</span> Management</h3>
                    <p>Manage your entire employee lifecycle from recruitment to retirement. Track performance, manage benefits, and maintain employee records all in one centralized platform.</p>
                    
                    <div class="pane-features">
                        <div class="pane-feature-card">
                            <h4><span>👤</span> Employee Database</h4>
                            <p>Centralized 360-degree view of your entire workforce.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>📈</span> Performance</h4>
                            <p>Define KPIs and track development with automated reviews.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>🎁</span> Benefits</h4>
                            <p>Flexible benefit management and enrollment portals.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>📂</span> Documents</h4>
                            <p>Secure digital storage for all employee contracts and IDs.</p>
                        </div>
                    </div>
                </div>
                <div class="pane-visual">
                    <span class="visual-badge">Unified Hub</span>
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" alt="HR Preview" class="mockup-img">
                </div>
            </div>

            <!-- Reports Tab -->
            <div class="tab-pane" id="reports">
                <div class="pane-info">
                    <h3>Advanced <span class="highlight">Analytics</span> & BI</h3>
                    <p>Gain deep insights into your payroll data with comprehensive reports and real-time dashboards. Make data-driven decisions to optimize your workforce.</p>
                    
                    <div class="pane-features">
                        <div class="pane-feature-card">
                            <h4><span>📊</span> Custom Builder</h4>
                            <p>Create tailored reports with our drag-and-drop interface.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>🕒</span> Real-time</h4>
                            <p>Dynamic dashboards that update as transactions occur.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>📎</span> Export Formats</h4>
                            <p>Direct export to PDF, Excel, or integration via JSON API.</p>
                        </div>
                        <div class="pane-feature-card">
                            <h4><span>🔍</span> Predictive</h4>
                            <p>AI-powered forecasting for future staffing and costs.</p>
                        </div>
                    </div>
                </div>
                <div class="pane-visual">
                    <span class="visual-badge">BI Dashboard</span>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" alt="Analytics Preview" class="mockup-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ WHY CHOOSE US SECTION ============================================ -->
<section class="why-section" id="why">
    <div class="why-container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Payroll Pro?</h2>
            <p class="section-subtitle">Industry-leading solution trusted by thousands</p>
        </div>

        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                    </svg>
                </div>
                <h3>Automation</h3>
                <p>Eliminate manual errors and save <span class="gradient-accent">40+ hours</span> every payroll cycle with intelligent automation.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <h3>Accuracy</h3>
                <p><span class="gradient-accent">99.9% accuracy</span> with built-in validation and compliance checks for every transaction.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h3>Security</h3>
                <p>Bank-level encryption and compliance with GDPR, SOC 2, and international standards.</p>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                    </svg>
                </div>
                <h3>Scalability</h3>
                <p>Grow from 10 to <span class="gradient-accent">10,000+ employees</span> without changing your systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ TESTIMONIALS SECTION ============================================ -->
<section class="testimonials-section" id="testimonials">
    <div class="testimonials-container">
        <div class="section-header">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle">Join thousands of satisfied businesses</p>
        </div>

        <div class="testimonials-carousel">
            <div class="testimonial-card active">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"Payroll Pro has transformed how we manage our HR operations. The automation has saved us countless hours every month."</p>
                <div class="testimonial-author">
                    <div class="author-info">
                        <p class="author-name">Sarah Johnson</p>
                        <p class="author-role">HR Manager, TechStartup Inc</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"The system is intuitive, reliable, and our employees love the self-service portal. Highly recommended for any growing company."</p>
                <div class="testimonial-author">
                    <div class="author-info">
                        <p class="author-name">Michael Chen</p>
                        <p class="author-role">Operations Director, Global Solutions</p>
                    </div> 
                </div>
            </div>
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-text">"Customer support is exceptional. They helped us implement a complex payroll structure in no time. Truly impressive service."</p>
                <div class="testimonial-author">
                    <div class="author-info">
                        <p class="author-name">Emma Rodriguez</p>
                        <p class="author-role">Finance Head, Enterprise Corp</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </div>
</section>

<!-- ============================================ FAQ SECTION ============================================ -->
<section class="faq-section" id="faq">
    <div class="faq-container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question">
                    <span>What payment methods do you accept?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We accept all major credit cards, bank transfers, and digital payment methods. Enterprise clients can arrange custom billing terms.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Is data security guaranteed?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we use bank-level encryption (256-bit SSL), comply with GDPR, SOC 2, and ISO 27001. All data is backed up daily with disaster recovery protocols.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Can I import existing employee data?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! We support CSV, Excel, and direct API integrations. Our team can assist with data migration at no extra cost.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What support is available?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We offer email support for all plans, priority support for Professional, and 24/7 phone support for Enterprise customers. Plus, comprehensive documentation and video tutorials.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Do you offer a free trial?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes! We offer a 30-day free trial of the Professional plan with no credit card required. Full access to all features.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Can I cancel anytime?</span>
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Of course. You can cancel your subscription anytime without penalties or long-term contracts. All data export options available.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ FINAL CTA SECTION ============================================ -->
<style>
    .final-cta-section {
        background: var(--bg-primary) !important;
        border-top: none !important;
    }
    .final-cta-section::before {
        display: none !important;
    }
</style>
<section class="final-cta-section">
    <div class="final-cta-container">
        <h2>Transform Your Payroll Today</h2>
        <p>Join thousands of businesses automating their payroll and HR operations</p>
        <div style="margin: 1rem 0;"></div>
        <a href="{{ route('login') }}" class="btn btn-primary btn-large">Start Your Free Trial Now</a>
        <p class="cta-note">No credit card required • 30-day free trial • Cancel anytime</p>
    </div>
</section>

@endsection
