@extends('layouts.app')

@section('title', 'Features - Gold Berries Payroll'

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="features-hero">
    <div class="container">
        <div class="section-header">
            <h1 class="hero-title">Powerful Features for Every Need</h1>
            <p class="hero-subtitle">Explore our comprehensive suite of tools designed to simplify payroll management.</p>
        </div>
    </div>
</section>

<!-- ============================================ FEATURES SHOWCASE ============================================ -->
<section class="features-showcase">
    <div class="container">
        
        <!-- Feature 1: Payroll Automation -->
        <div class="feature-showcase-item" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Intelligent Payroll Automation</h3>
                <p>Eliminate manual calculations with our advanced payroll engine. Automatically process salaries, deductions, and taxes with complete accuracy.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">⚡</span>
                        <h5>Real-time Calculations</h5>
                        <p>Instant salary computation with all components</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">🔄</span>
                        <h5>Multi-currency Support</h5>
                        <p>Handle payroll in any currency with live rates</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">📋</span>
                        <h5>Dynamic Tax Calculation</h5>
                        <p>Automatic tax compliance for all jurisdictions</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">Learn More</a>
            </div>
            <div class="showcase-visual">
                <div class="feature-card-demo">
                    <div class="demo-title">Salary Computation</div>
                    <div class="demo-item">
                        <span>Basic Salary</span>
                        <span class="value">$5,000</span>
                    </div>
                    <div class="demo-item">
                        <span>Allowances</span>
                        <span class="value">+$1,200</span>
                    </div>
                    <div class="demo-item">
                        <span>Tax Deduction</span>
                        <span class="value">-$930</span>
                    </div>
                    <div class="demo-item final">
                        <span>Net Salary</span>
                        <span class="value">$5,270</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Attendance & Time Tracking -->
        <div class="feature-showcase-item reverse" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Advanced Attendance Tracking</h3>
                <p>Track employee attendance with precision using multiple methods from biometric integration to mobile apps.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">👁️</span>
                        <h5>Biometric Integration</h5>
                        <p>Seamless biometric device connectivity</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">📱</span>
                        <h5>Mobile Clock In/Out</h5>
                        <p>Track time from anywhere with GPS</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">⏱️</span>
                        <h5>Overtime Calculation</h5>
                        <p>Automatic overtime and shift calculations</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
            </div>
            <div class="showcase-visual">
                <div class="attendance-chart">
                    <div class="chart-title">Weekly Attendance</div>
                    <div class="chart-bars">
                        <div class="bar-item">
                            <div class="bar" style="height: 95%;"></div>
                            <span>Mon</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 100%;"></div>
                            <span>Tue</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 80%;"></div>
                            <span>Wed</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 100%;"></div>
                            <span>Thu</span>
                        </div>
                        <div class="bar-item">
                            <div class="bar" style="height: 90%;"></div>
                            <span>Fri</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 3: Leave Management -->
        <div class="feature-showcase-item" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Comprehensive Leave Management</h3>
                <p>Simplify leave requests, approvals, and tracking with customizable leave policies and workflows.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">📅</span>
                        <h5>Custom Leave Types</h5>
                        <p>Create unlimited leave categories</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">✅</span>
                        <h5>Workflow Approvals</h5>
                        <p>Multi-level approval chains</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">📊</span>
                        <h5>Balance Tracking</h5>
                        <p>Real-time leave balance updates</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">Explore</a>
            </div>
            <div class="showcase-visual">
                <div class="leave-calendar">
                    <div class="calendar-title">Leave Calendar</div>
                    <div class="leave-items">
                        <div class="leave-item">
                            <span class="leave-type annual">Annual Leave</span>
                            <span class="leave-days">15 days</span>
                        </div>
                        <div class="leave-item">
                            <span class="leave-type sick">Sick Leave</span>
                            <span class="leave-days">10 days</span>
                        </div>
                        <div class="leave-item">
                            <span class="leave-type personal">Personal Leave</span>
                            <span class="leave-days">5 days</span>
                        </div>
                        <div class="leave-item">
                            <span class="leave-type unpaid">Unpaid Leave</span>
                            <span class="leave-days">3 days</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 4: Analytics & Reporting -->
        <div class="feature-showcase-item reverse" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Advanced Analytics & Reporting</h3>
                <p>Make data-driven decisions with comprehensive dashboards, custom reports, and real-time insights.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">📊</span>
                        <h5>Interactive Dashboards</h5>
                        <p>Real-time payroll metrics and KPIs</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">🎯</span>
                        <h5>Custom Reports</h5>
                        <p>Build reports tailored to your needs</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">📈</span>
                        <h5>Predictive Analytics</h5>
                        <p>Forecast trends and costs</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">See Demo</a>
            </div>
            <div class="showcase-visual">
                <div class="analytics-preview">
                    <div class="metric-box">
                        <div class="metric-label">Total Payroll</div>
                        <div class="metric-value">$250,000</div>
                        <div class="metric-change up">↑ 12% from last month</div>
                    </div>
                    <div class="metric-box">
                        <div class="metric-label">Avg. Salary</div>
                        <div class="metric-value">$4,200</div>
                        <div class="metric-change">Across 60 employees</div>
                    </div>
                    <div class="metric-box">
                        <div class="metric-label">Processing Time</div>
                        <div class="metric-value">2 hours</div>
                        <div class="metric-change">Saved 85% time</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 5: Compliance & Security -->
        <div class="feature-showcase-item" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Enterprise-Grade Security</h3>
                <p>Bank-level encryption, compliance automation, and comprehensive audit trails ensure complete data protection.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">🔒</span>
                        <h5>Bank-Grade Encryption</h5>
                        <p>256-bit SSL encryption for all data</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">✓</span>
                        <h5>Compliance Ready</h5>
                        <p>SOC 2, GDPR, and tax compliance</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">🔍</span>
                        <h5>Audit Logs</h5>
                        <p>Complete tracking of all changes</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">Security Info</a>
            </div>
            <div class="showcase-visual">
                <div class="security-badges">
                    <div class="badge-item soc2">
                        <div class="badge-icon">🏆</div>
                        <div class="badge-text">SOC 2<br>Certified</div>
                    </div>
                    <div class="badge-item gdpr">
                        <div class="badge-icon">📜</div>
                        <div class="badge-text">GDPR<br>Compliant</div>
                    </div>
                    <div class="badge-item iso">
                        <div class="badge-icon">✓</div>
                        <div class="badge-text">ISO<br>27001</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 6: Integration Ecosystem -->
        <div class="feature-showcase-item reverse" data-animation="fadeInUp">
            <div class="showcase-content">
                <h3>Seamless Integrations</h3>
                <p>Connect with 500+ applications including accounting software, banks, and HR systems for seamless workflows.</p>
                
                <div class="feature-highlights">
                    <div class="highlight">
                        <span class="highlight-icon">🔗</span>
                        <h5>Pre-built Integrations</h5>
                        <p>QuickBooks, Xero, Workday, and more</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">⚙️</span>
                        <h5>REST API</h5>
                        <p>Build custom integrations easily</p>
                    </div>
                    <div class="highlight">
                        <span class="highlight-icon">📲</span>
                        <h5>Webhooks</h5>
                        <p>Real-time event notifications</p>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn btn-primary">API Docs</a>
            </div>
            <div class="showcase-visual">
                <div class="integration-network">
                    <div class="network-center">Payroll Pro</div>
                    <div class="network-item accounting">Accounting</div>
                    <div class="network-item banking">Banking</div>
                    <div class="network-item hr">HR & Talent</div>
                    <div class="network-item communication">Communication</div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================ COMPARISON TABLE ============================================ -->
<section class="features-comparison">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why Payroll Pro is Different</h2>
            <p class="section-subtitle">See how we compare to traditional payroll solutions</p>
        </div>

        <div class="comparison-cards">
            <div class="comparison-item" data-animation="slideInLeft">
                <h4>Traditional Payroll</h4>
                <ul class="negatives">
                    <li>❌ Manual data entry</li>
                    <li>❌ Error-prone calculations</li>
                    <li>❌ High operational costs</li>
                    <li>❌ Limited reporting</li>
                    <li>❌ Poor scalability</li>
                </ul>
            </div>

            <div class="comparison-divider">
                <span class="vs">VS</span>
            </div>

            <div class="comparison-item highlight" data-animation="slideInRight">
                <h4>Payroll Pro</h4>
                <ul class="positives">
                    <li>✓ Fully automated</li>
                    <li>✓ 99.9% accuracy</li>
                    <li>✓ Minimal costs</li>
                    <li>✓ Advanced analytics</li>
                    <li>✓ Scales with growth</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="features-cta">
    <div class="container">
        <h2>Experience the Power of Our Platform</h2>
        <p>Get access to all features with a free 14-day trial</p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Start Free Trial</a>
            <a href="javascript:void(0)" class="btn btn-secondary btn-lg">Request Demo</a>
        </div>
    </div>
</section>

<style>
/* Features Page Styles */
.features-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 100px 0;
    text-align: center;
}

.features-showcase {
    padding: 100px 0;
}

.feature-showcase-item {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    margin-bottom: 100px;
}

.feature-showcase-item.reverse {
    grid-template-columns: 1fr 1fr;
    direction: rtl;
}

.feature-showcase-item.reverse > * {
    direction: ltr;
}

.showcase-content h3 {
    font-size: 32px;
    color: #D4AF37;
    margin-bottom: 15px;
    line-height: 1.4;
}

.showcase-content p {
    font-size: 16px;
    color: #b0b0b0;
    margin-bottom: 30px;
    line-height: 1.7;
}

.feature-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.highlight {
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    transition: all 0.3s ease;
}

.highlight:hover {
    border-color: rgba(212, 175, 55, 0.5);
    background: rgba(212, 175, 55, 0.1);
}

.highlight-icon {
    font-size: 32px;
    display: block;
    margin-bottom: 10px;
}

.highlight h5 {
    color: #D4AF37;
    font-size: 16px;
    margin-bottom: 8px;
}

.highlight p {
    color: #999999;
    font-size: 13px;
    margin: 0;
}

/* Feature Demos */
.feature-card-demo {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.3);
    border-radius: 12px;
    padding: 25px;
    animation: float 6s ease-in-out infinite;
}

.demo-title {
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 16px;
}

.demo-item {
    display: flex;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid rgba(212, 175, 55, 0.1);
    color: #b0b0b0;
}

.demo-item.final {
    border-bottom: none;
    border-top: 2px solid rgba(212, 175, 55, 0.3);
    padding-top: 15px;
    margin-top: 10px;
    font-weight: 700;
    color: #D4AF37;
}

.demo-item .value {
    color: #D4AF37;
    font-weight: 600;
}

.attendance-chart,
.leave-calendar,
.analytics-preview,
.security-badges,
.integration-network {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.3);
    border-radius: 12px;
    padding: 30px;
    animation: float 6s ease-in-out infinite;
}

.chart-title,
.calendar-title {
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 20px;
}

.chart-bars {
    display: flex;
    gap: 15px;
    align-items: flex-end;
    height: 150px;
}

.bar-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.bar {
    width: 100%;
    background: linear-gradient(135deg, #D4AF37, #e8c556);
    border-radius: 6px;
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
}

.bar-item span {
    color: #999999;
    font-size: 12px;
    font-weight: 600;
}

.leave-items {
    display: grid;
    gap: 12px;
}

.leave-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background: rgba(212, 175, 55, 0.05);
    border-radius: 8px;
    border-left: 4px solid;
}

.leave-type {
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
    color: white;
}

.leave-type.annual {
    background: #4CAF50;
}

.leave-type.sick {
    background: #2196F3;
}

.leave-type.personal {
    background: #FFC107;
}

.leave-type.unpaid {
    background: #999999;
}

.leave-days {
    color: #D4AF37;
    font-weight: 700;
}

.metric-box {
    background: rgba(212, 175, 55, 0.05);
    padding: 20px;
    border-radius: 8px;
    border: 1px solid rgba(212, 175, 55, 0.2);
    margin-bottom: 15px;
}

.metric-label {
    color: #999999;
    font-size: 13px;
    margin-bottom: 8px;
    font-weight: 600;
}

.metric-value {
    font-size: 28px;
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 5px;
}

.metric-change {
    color: #666666;
    font-size: 12px;
}

.metric-change.up {
    color: #4CAF50;
}

.security-badges {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.badge-item {
    text-align: center;
    padding: 25px;
    background: rgba(212, 175, 55, 0.05);
    border-radius: 8px;
    border: 2px solid rgba(212, 175, 55, 0.2);
    flex: 1;
}

.badge-icon {
    font-size: 48px;
    margin-bottom: 12px;
}

.badge-text {
    color: #D4AF37;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.4;
}

.integration-network {
    position: relative;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.network-center {
    position: absolute;
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #D4AF37, #e8c556);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0B1C2C;
    font-weight: 700;
    font-size: 12px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
}

.network-item {
    position: absolute;
    width: 80px;
    padding: 12px;
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.3);
    border-radius: 6px;
    text-align: center;
    color: #D4AF37;
    font-weight: 600;
    font-size: 12px;
}

.network-item.accounting { top: 10px; left: 50%; transform: translateX(-50%); }
.network-item.banking { bottom: 10px; left: 10px; }
.network-item.hr { bottom: 10px; right: 10px; }
.network-item.communication { top: 50%; right: 10px; transform: translateY(-50%); }

.features-comparison {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.comparison-cards {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    gap: 30px;
    align-items: center;
    max-width: 900px;
    margin: 50px auto 0;
}

.comparison-item {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 30px;
}

.comparison-item.highlight {
    border-color: rgba(212, 175, 55, 0.5);
    background: rgba(212, 175, 55, 0.05);
    transform: scale(1.05);
}

.comparison-item h4 {
    color: #D4AF37;
    font-size: 22px;
    margin-bottom: 20px;
}

.comparison-item ul {
    list-style: none;
}

.comparison-item li {
    padding: 10px 0;
    color: #b0b0b0;
    font-size: 14px;
}

.comparison-item.highlight li {
    color: #D4AF37;
    font-weight: 600;
}

.comparison-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 200px;
}

.vs {
    padding: 15px 20px;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.05));
    border: 2px solid rgba(212, 175, 55, 0.3);
    border-radius: 8px;
    color: #D4AF37;
    font-weight: 700;
}

.features-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.features-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.features-cta p {
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

.cta-buttons .btn {
    min-width: 200px;
}

/* Responsive */
@media (max-width: 1024px) {
    .feature-showcase-item {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-showcase-item.reverse {
        direction: ltr;
    }
    
    .feature-showcase-item.reverse > * {
        direction: ltr;
    }
    
    .feature-highlights {
        grid-template-columns: 1fr;
    }
    
    .comparison-cards {
        grid-template-columns: 1fr;
    }
    
    .comparison-divider {
        min-height: auto;
        margin: 20px 0;
    }
    
    .comparison-item.highlight {
        transform: scale(1);
    }
}

@media (max-width: 768px) {
    .features-hero {
        padding: 80px 0;
    }
    
    .showcase-content h3 {
        font-size: 24px;
    }
    
    .security-badges {
        flex-direction: column;
        gap: 15px;
    }
    
    .integration-network {
        height: 350px;
    }
    
    .network-item {
        position: relative;
        top: auto !important;
        right: auto !important;
        left: auto !important;
        bottom: auto !important;
        transform: none !important;
        margin-bottom: 10px;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
}
</style>

@endsection
