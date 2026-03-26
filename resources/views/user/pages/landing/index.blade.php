@extends('user.layouts.app')

@section('title', 'Gold Berries - Modern Payroll Management System | Enterprise Solutions')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="hero-section" id="home" style="margin-top: 0rem !important;">
    <div class="background-elements">
        <div class="grid-pattern"></div>
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <span class="tagline">ENTERPRISE-GRADE PAYROLL PLATFORM</span>
            <h1 class="hero-title">
                Simplify Payroll with <span class="highlight">Intelligent Automation</span>
            </h1>
            <p class="hero-subtitle">
                Enterprise-ready payroll automation with intelligent compliance, real-time analytics, and seamless integrations. Trusted by 5000+ companies worldwide.
            </p>
            
            <div class="hero-buttons">
                <button class="btn btn-primary">Start Free Trial</button>
                <button class="btn btn-secondary">View Demo</button>
            </div>

            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Companies</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Years in Industry</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ STATS SECTION ============================================ -->
<section class="stats-section" style="margin-top: 5rem !important;">
    <div class="stats-container">
        <div class="section-header">
            <h2 class="section-title">Why Choose Payroll Pro?</h2>
            <p class="section-subtitle">Trusted by organizations worldwide for reliability and efficiency</p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="stat-box-number">40+</div>
                <p class="stat-box-label">Hours Saved Monthly</p>
                <p class="stat-box-desc">Automate payroll processing and HR tasks</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="stat-box-number">99.9%</div>
                <p class="stat-box-label">Accuracy Rate</p>
                <p class="stat-box-desc">Zero compliance errors with our system</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <div class="stat-box-number">5000+</div>
                <p class="stat-box-label">Companies Trust Us</p>
                <p class="stat-box-desc">From startups to enterprises globally</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <div class="stat-box-number">35%</div>
                <p class="stat-box-label">Cost Reduction</p>
                <p class="stat-box-desc">Lower operational expenses significantly</p>
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
        </div>
    </div>
</section>

<!-- ============================================ PRODUCT TABS SECTION ============================================ -->
<section class="product-section" id="product">
    <div class="product-container">
        <div class="section-header">
            <h2 class="section-title">Our Platform</h2>
            <p class="section-subtitle">Everything you need to manage HR and payroll efficiently</p>
        </div>

        <div class="tab-buttons">
            <button class="tab-btn active" data-tab="payroll">Payroll</button>
            <button class="tab-btn" data-tab="hr">HR Management</button>
            <button class="tab-btn" data-tab="reports">Reports</button>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="payroll">
                <h3>Complete Payroll Processing</h3>
                <p>Streamline your entire payroll cycle from employee data management to final settlement. Our intelligent system handles complex calculations, tax implications, and compliance requirements automatically.</p>
                <ul class="feature-list">
                    <li>Bulk payroll processing</li>
                    <li>Multi-currency support</li>
                    <li>Automated compliance</li>
                    <li>Real-time calculations</li>
                </ul>
            </div>
            <div class="tab-pane" id="hr">
                <h3>Integrated HR Management</h3>
                <p>Manage your entire employee lifecycle from recruitment to retirement. Track performance, manage benefits, and maintain employee records all in one centralized platform.</p>
                <ul class="feature-list">
                    <li>Employee database</li>
                    <li>Performance tracking</li>
                    <li>Benefits management</li>
                    <li>Document management</li>
                </ul>
            </div>
            <div class="tab-pane" id="reports">
                <h3>Advanced Reporting & Analytics</h3>
                <p>Gain deep insights into your payroll data with comprehensive reports and real-time dashboards. Make data-driven decisions to optimize your workforce.</p>
                <ul class="feature-list">
                    <li>Custom report builder</li>
                    <li>Real-time dashboards</li>
                    <li>Compliance reports</li>
                    <li>Data export options</li>
                </ul>
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

<!-- ============================================ HOW IT WORKS SECTION ============================================ -->
<section class="workflow-section" id="workflow">
    <div class="workflow-container">
        <div class="section-header">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Simple, streamlined process to manage payroll efficiently</p>
        </div>

        <div class="workflow-zigzag">
            <!-- Step 1: Left Content, Right Image -->
            <div class="workflow-step workflow-step-left">
                <div class="step-content">
                    <div class="step-number">01</div>
                    <div class="step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M16 11h6"></path>
                            <path d="M16 15h6"></path>
                        </svg>
                    </div>
                    <h3>Add Employees</h3>
                    <p>Import your entire workforce data or manually add employees one by one. Supports bulk upload from CSV, Excel, or integrate with your HRIS system.</p>
                    <ul class="step-features">
                        <li>Bulk import from CSV/Excel</li>
                        <li>HRIS integrations available</li>
                        <li>Custom field support</li>
                    </ul>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="30" width="320" height="240" rx="8" fill="rgba(212, 175, 55, 0.1)" stroke="rgba(212, 175, 55, 0.3)" stroke-width="2"/>
                        <rect x="60" y="50" width="280" height="40" rx="4" fill="rgba(212, 175, 55, 0.2)" stroke="rgba(212, 175, 55, 0.4)" stroke-width="1"/>
                        <circle cx="80" cy="100" r="12" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="100" y="93" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="100" y="105" width="100" height="5" rx="2.5" fill="rgba(212, 175, 55, 0.15)"/>
                        <circle cx="80" cy="160" r="12" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="100" y="153" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="100" y="165" width="100" height="5" rx="2.5" fill="rgba(212, 175, 55, 0.15)"/>
                        <circle cx="80" cy="220" r="12" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="100" y="213" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="100" y="225" width="100" height="5" rx="2.5" fill="rgba(212, 175, 55, 0.15)"/>
                    </svg>
                </div>
            </div>

            <!-- Connecting Line -->
            <div class="step-connector"></div>

            <!-- Step 2: Right Content, Left Image -->
            <div class="workflow-step workflow-step-right">
                <div class="step-visual">
                    <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="40" width="320" height="220" rx="8" fill="rgba(212, 175, 55, 0.1)" stroke="rgba(212, 175, 55, 0.3)" stroke-width="2"/>
                        <rect x="60" y="60" width="30" height="30" rx="4" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="110" y="60" width="200" height="8" rx="4" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="110" y="75" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.15)"/>
                        <rect x="60" y="110" width="30" height="30" rx="4" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="110" y="110" width="200" height="8" rx="4" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="110" y="125" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.15)"/>
                        <rect x="60" y="160" width="30" height="30" rx="4" fill="rgba(212, 175, 55, 0.3)"/>
                        <rect x="110" y="160" width="200" height="8" rx="4" fill="rgba(212, 175, 55, 0.2)"/>
                        <rect x="110" y="175" width="150" height="6" rx="3" fill="rgba(212, 175, 55, 0.15)"/>
                        <line x1="60" y1="95" x2="60" y2="105" stroke="rgba(212, 175, 55, 0.2)" stroke-width="2"/>
                        <line x1="60" y1="145" x2="60" y2="155" stroke="rgba(212, 175, 55, 0.2)" stroke-width="2"/>
                    </svg>
                </div>
                <div class="step-content">
                    <div class="step-number">02</div>
                    <div class="step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Track Attendance</h3>
                    <p>Monitor real-time attendance with multiple integration options including biometric devices, mobile apps, and manual marking with comprehensive leave management.</p>
                    <ul class="step-features">
                        <li>Biometric device integration</li>
                        <li>Mobile app tracking</li>
                        <li>Automated leave management</li>
                    </ul>
                </div>
            </div>

            <!-- Connecting Line -->
            <div class="step-connector"></div>

            <!-- Step 3: Left Content, Right Image -->
            <div class="workflow-step workflow-step-left">
                <div class="step-content">
                    <div class="step-number">03</div>
                    <div class="step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3>Process Payroll</h3>
                    <p>Execute payroll calculations with advanced formulas, statutory deductions, and tax compliance. All computations are automated with full audit trails for complete transparency.</p>
                    <ul class="step-features">
                        <li>Automated salary calculations</li>
                        <li>Tax compliance built-in</li>
                        <li>Statutory deductions handling</li>
                    </ul>
                </div>
                <div class="step-visual">
                    <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="50" y="50" width="300" height="200" rx="8" fill="rgba(212, 175, 55, 0.1)" stroke="rgba(212, 175, 55, 0.3)" stroke-width="2"/>
                        <line x1="70" y1="80" x2="330" y2="80" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="100" x2="330" y2="100" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="120" x2="330" y2="120" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="140" x2="330" y2="140" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="160" x2="330" y2="160" stroke="rgba(212, 175, 55, 0.3)" stroke-width="2"/>
                        <circle cx="100" cy="160" r="20" fill="rgba(212, 175, 55, 0.2)"/>
                        <text x="100" y="165" text-anchor="middle" font-size="20" fill="rgba(212, 175, 55, 0.6)" font-weight="bold">$</text>
                        <line x1="70" y1="180" x2="330" y2="180" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="200" x2="330" y2="200" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                    </svg>
                </div>
            </div>

            <!-- Connecting Line -->
            <div class="step-connector"></div>

            <!-- Step 4: Right Content, Left Image -->
            <div class="workflow-step workflow-step-right">
                <div class="step-visual">
                    <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="40" width="320" height="220" rx="8" fill="rgba(212, 175, 55, 0.1)" stroke="rgba(212, 175, 55, 0.3)" stroke-width="2"/>
                        <rect x="60" y="60" width="280" height="20" rx="4" fill="rgba(212, 175, 55, 0.2)"/>
                        <circle cx="80" cy="110" r="8" fill="rgba(212, 175, 55, 0.3)"/>
                        <circle cx="140" cy="110" r="8" fill="rgba(212, 175, 55, 0.3)"/>
                        <circle cx="200" cy="110" r="8" fill="rgba(212, 175, 55, 0.3)"/>
                        <circle cx="260" cy="110" r="8" fill="rgba(212, 175, 55, 0.3)"/>
                        <line x1="60" y1="140" x2="340" y2="140" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <rect x="60" y="155" width="90" height="60" rx="4" fill="rgba(212, 175, 55, 0.15)"/>
                        <line x1="70" y1="170" x2="140" y2="170" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="180" x2="140" y2="180" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="70" y1="190" x2="140" y2="190" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <rect x="165" y="155" width="90" height="60" rx="4" fill="rgba(212, 175, 55, 0.15)"/>
                        <line x1="175" y1="170" x2="245" y2="170" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="175" y1="180" x2="245" y2="180" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <line x1="175" y1="190" x2="245" y2="190" stroke="rgba(212, 175, 55, 0.2)" stroke-width="1"/>
                        <rect x="270" y="155" width="70" height="60" rx="4" fill="rgba(212, 175, 55, 0.15)"/>
                    </svg>
                </div>
                <div class="step-content">
                    <div class="step-number">04</div>
                    <div class="step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="11" x2="12" y2="17"></line>
                            <line x1="9" y1="14" x2="15" y2="14"></line>
                        </svg>
                    </div>
                    <h3>Generate Reports</h3>
                    <p>Create comprehensive compliance reports and generate payslips. Deliver documents instantly to employees via email or access them through the self-service portal.</p>
                    <ul class="step-features">
                        <li>Pre-built compliance reports</li>
                        <li>Instant payslip generation</li>
                        <li>Employee self-service portal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ PRICING SECTION ============================================ -->
<section class="pricing-section" id="pricing">
    <div class="pricing-container">
        <div class="section-header">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <p class="section-subtitle">Choose the plan that works for your organization</p>
        </div>

        <div class="pricing-toggle">
            <span class="toggle-label">Monthly</span>
            <label class="toggle-switch">
                <input type="checkbox" id="pricing-toggle">
                <span class="slider"></span>
            </label>
            <span class="toggle-label">Yearly <span class="save-badge">Save 20%</span></span>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount" data-monthly="299" data-yearly="2990">299</span>
                    <span class="period">/month</span>
                </div>
                <p class="pricing-desc">Perfect for small teams</p>
                <ul class="pricing-features">
                    <li>Up to 50 employees</li>
                    <li>Basic payroll processing</li>
                    <li>Attendance tracking</li>
                    <li>Email support</li>
                </ul>
                <button class="btn btn-secondary">Get Started</button>
            </div>

            <div class="pricing-card recommended">
                <span class="badge-recommended">Recommended</span>
                <h3>Professional</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount" data-monthly="599" data-yearly="5990">599</span>
                    <span class="period">/month</span>
                </div>
                <p class="pricing-desc">For growing businesses</p>
                <ul class="pricing-features">
                    <li>Up to 500 employees</li>
                    <li>Advanced payroll processing</li>
                    <li>Leave management</li>
                    <li>Reports & analytics</li>
                    <li>Priority support</li>
                </ul>
                <button class="btn btn-primary">Start Free Trial</button>
            </div>

            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount" data-monthly="1299" data-yearly="12990">1299</span>
                    <span class="period">/month</span>
                </div>
                <p class="pricing-desc">For large organizations</p>
                <ul class="pricing-features">
                    <li>Unlimited employees</li>
                    <li>Custom integrations</li>
                    <li>Dedicated account manager</li>
                    <li>Advanced security</li>
                    <li>24/7 phone support</li>
                </ul>
                <button class="btn btn-secondary">Contact Sales</button>
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
<section class="final-cta-section">
    <div class="final-cta-container">
        <h2>Transform Your Payroll Today</h2>
        <p>Join thousands of businesses automating their payroll and HR operations</p>
        <button class="btn btn-primary btn-large">Start Your Free Trial Now</button>
        <p class="cta-note">No credit card required • 30-day free trial • Cancel anytime</p>
    </div>
</section>

@endsection
