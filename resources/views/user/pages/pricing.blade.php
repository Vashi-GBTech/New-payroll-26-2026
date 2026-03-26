@extends('user.layouts.app')

@section('title', 'Pricing Plans - Gold Berries')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="pricing-hero">
    <div class="container">
        <div class="section-header">
            <h1 class="hero-title">Transparent, Scalable Pricing</h1>
            <p class="hero-subtitle">Find the perfect plan for your organization. No hidden fees, no surprises.</p>
            
            <div class="pricing-toggle-wrapper">
                <label class="toggle-label">Monthly</label>
                <input type="checkbox" id="pricing-toggle" class="pricing-toggle">
                <label class="toggle-label">Yearly (Save 20%)</label>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ PRICING PLANS ============================================ -->
<section class="pricing-plans">
    <div class="container">
        <!-- Starter Plan -->
        <div class="pricing-card" data-animation="slideInLeft">
            <div class="pricing-badge">STARTER</div>
            <h3 class="plan-name">Starter</h3>
            <p class="plan-description">Perfect for small teams and startups</p>
            
            <div class="pricing-amount">
                <span class="currency">$</span>
                <span class="amount" data-monthly="99" data-yearly="950">99</span>
                <span class="period">/month</span>
            </div>
            <p class="plan-subtext">Up to 50 employees</p>
            
            <a href="{{ route('contact') }}" class="btn btn-primary btn-block">Get Started</a>
            
            <div class="divider"></div>
            
            <ul class="features-checklist">
                <li><span class="icon">✓</span> Up to 50 employees</li>
                <li><span class="icon">✓</span> Basic payroll automation</li>
                <li><span class="icon">✓</span> Attendance tracking</li>
                <li><span class="icon">✓</span> Digital payslips</li>
                <li><span class="icon">✓</span> Standard reports</li>
                <li><span class="icon">✓</span> Email support</li>
                <li class="unavailable"><span class="icon">✗</span> Advanced analytics</li>
                <li class="unavailable"><span class="icon">✗</span> API access</li>
                <li class="unavailable"><span class="icon">✗</span> Phone support</li>
            </ul>
        </div>

        <!-- Professional Plan (Recommended) -->
        <div class="pricing-card professional-plan" data-animation="scaleIn">
            <div class="recommended-badge">RECOMMENDED</div>
            <div class="pricing-badge">PROFESSIONAL</div>
            <h3 class="plan-name">Professional</h3>
            <p class="plan-description">For growing companies</p>
            
            <div class="pricing-amount">
                <span class="currency">$</span>
                <span class="amount" data-monthly="299" data-yearly="2870">299</span>
                <span class="period">/month</span>
            </div>
            <p class="plan-subtext">Up to 500 employees</p>
            
            <a href="{{ route('contact') }}" class="btn btn-primary btn-block">Start Free Trial</a>
            
            <div class="divider"></div>
            
            <ul class="features-checklist">
                <li><span class="icon">✓</span> Up to 500 employees</li>
                <li><span class="icon">✓</span> Advanced payroll automation</li>
                <li><span class="icon">✓</span> Biometric integration</li>
                <li><span class="icon">✓</span> Leave management</li>
                <li><span class="icon">✓</span> Custom reports</li>
                <li><span class="icon">✓</span> Priority email support</li>
                <li><span class="icon">✓</span> Advanced analytics</li>
                <li><span class="icon">✓</span> Limited API access</li>
                <li class="unavailable"><span class="icon">✗</span> Phone support</li>
            </ul>
            
            <div class="plan-highlight">Most Popular Choice</div>
        </div>

        <!-- Enterprise Plan -->
        <div class="pricing-card" data-animation="slideInRight">
            <div class="pricing-badge">ENTERPRISE</div>
            <h3 class="plan-name">Enterprise</h3>
            <p class="plan-description">For large organizations</p>
            
            <div class="pricing-amount">
                <span class="currency">Custom</span>
            </div>
            <p class="plan-subtext">Unlimited employees</p>
            
            <a href="{{ route('contact') }}" class="btn btn-secondary btn-block">Contact Sales</a>
            
            <div class="divider"></div>
            
            <ul class="features-checklist">
                <li><span class="icon">✓</span> Unlimited employees</li>
                <li><span class="icon">✓</span> Custom workflows</li>
                <li><span class="icon">✓</span> Multi-location support</li>
                <li><span class="icon">✓</span> Advanced compliance</li>
                <li><span class="icon">✓</span> Unlimited custom reports</li>
                <li><span class="icon">✓</span> Dedicated account manager</li>
                <li><span class="icon">✓</span> Full API access</li>
                <li><span class="icon">✓</span> Phone & chat support</li>
                <li><span class="icon">✓</span> Custom integrations</li>
            </ul>
        </div>
    </div>
</section>

<!-- ============================================ DETAILED FEATURES COMPARISON ============================================ -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Detailed Feature Comparison</h2>
            <p class="section-subtitle">See exactly what's included in each plan</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Starter</th>
                        <th>Professional</th>
                        <th>Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="category-row">
                        <td colspan="4">Core Features</td>
                    </tr>
                    <tr>
                        <td>Employees</td>
                        <td><span class="badge">50</span></td>
                        <td><span class="badge">500</span></td>
                        <td><span class="badge">Unlimited</span></td>
                    </tr>
                    <tr>
                        <td>Payroll Cycles</td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Tax Calculation</td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Salary Components</td>
                        <td>5</td>
                        <td>25</td>
                        <td>Unlimited</td>
                    </tr>

                    <tr class="category-row">
                        <td colspan="4">Attendance & Leaves</td>
                    </tr>
                    <tr>
                        <td>Attendance Tracking</td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Biometric Integration</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Leave Management</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Mobile App</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>

                    <tr class="category-row">
                        <td colspan="4">Analytics & Reporting</td>
                    </tr>
                    <tr>
                        <td>Standard Reports</td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Custom Reports</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Advanced Analytics</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Predictive Insights</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>

                    <tr class="category-row">
                        <td colspan="4">Integrations & API</td>
                    </tr>
                    <tr>
                        <td>Pre-built Integrations</td>
                        <td>10</td>
                        <td>50</td>
                        <td>500+</td>
                    </tr>
                    <tr>
                        <td>API Access</td>
                        <td><span class="cross">✗</span></td>
                        <td>Limited</td>
                        <td><span class="check">✓</span> Full</td>
                    </tr>
                    <tr>
                        <td>Webhook Support</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>

                    <tr class="category-row">
                        <td colspan="4">Support & Security</td>
                    </tr>
                    <tr>
                        <td>Email Support</td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Phone Support</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Dedicated Account Manager</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>Security Audits</td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="cross">✗</span></td>
                        <td><span class="check">✓</span></td>
                    </tr>
                    <tr>
                        <td>SLA Guarantee</td>
                        <td>99.5%</td>
                        <td>99.9%</td>
                        <td>99.99%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============================================ ADD-ONS & EXTRAS ============================================ -->
<section class="addons-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Premium Add-ons</h2>
            <p class="section-subtitle">Customize your plan with additional features</p>
        </div>

        <div class="addons-grid">
            <div class="addon-card" data-animation="slideInUp">
                <h4>Advanced Security</h4>
                <p class="addon-price">$50/month</p>
                <p>Additional security layer, SSO, and advanced audit logs</p>
                <button class="btn btn-secondary">Add to Plan</button>
            </div>
            <div class="addon-card" data-animation="slideInUp">
                <h4>Custom Development</h4>
                <p class="addon-price">Custom</p>
                <p>Bespoke features and integrations tailored to your needs</p>
                <button class="btn btn-secondary">Inquire</button>
            </div>
            <div class="addon-card" data-animation="slideInUp">
                <h4>Training & Onboarding</h4>
                <p class="addon-price">$500</p>
                <p>Comprehensive team training and implementation support</p>
                <button class="btn btn-secondary">Add to Plan</button>
            </div>
            <div class="addon-card" data-animation="slideInUp">
                <h4>Data Migration</h4>
                <p class="addon-price">$1000</p>
                <p>Complete data migration from your legacy system</p>
                <button class="btn btn-secondary">Add to Plan</button>
            </div>
            <div class="addon-card" data-animation="slideInUp">
                <h4>White Label Solution</h4>
                <p class="addon-price">$200/month</p>
                <p>Customize branding and domain for enterprise use</p>
                <button class="btn btn-secondary">Inquire</button>
            </div>
            <div class="addon-card" data-animation="slideInUp">
                <h4>Priority Support</h4>
                <p class="addon-price">$100/month</p>
                <p>24/7 priority support with dedicated engineer</p>
                <button class="btn btn-secondary">Add to Plan</button>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ FAQ SECTION ============================================ -->
<section class="pricing-faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about our pricing</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Can I change plans anytime?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! You can upgrade or downgrade your plan anytime. Changes take effect immediately, and we'll adjust your billing accordingly.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Do you offer a free trial?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! All plans come with a 14-day free trial. No credit card required to get started.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>What payment methods do you accept?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We accept all major credit cards, bank transfers, and purchase orders for enterprise customers.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Is there a setup fee?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>No setup fees! We include basic setup and configuration with all plans. Advanced customization is available as an add-on.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>What happens if I exceed my employee limit?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Simply upgrade to the next plan or contact us for a custom arrangement. We'll pro-rate any charges.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Do you offer annual discounts?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! Annual subscribers save 20% on all plans. For Enterprise, we offer custom pricing based on your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="pricing-cta">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Join thousands of companies simplifying their payroll management</p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Start Free Trial</a>
            <a href="javascript:void(0)" class="btn btn-secondary btn-lg">Schedule a Demo</a>
        </div>
    </div>
</section>

<style>
/* Pricing Page Styles */
.pricing-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 100px 0;
    text-align: center;
}

.pricing-toggle-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.toggle-label {
    font-weight: 600;
    color: #b0b0b0;
}

.pricing-toggle {
    appearance: none;
    width: 60px;
    height: 30px;
    background: rgba(212, 175, 55, 0.2);
    border-radius: 15px;
    cursor: pointer;
    border: 2px solid rgba(212, 175, 55, 0.4);
    transition: all 0.3s ease;
    position: relative;
}

.pricing-toggle::after {
    content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    background: #D4AF37;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: all 0.3s ease;
}

.pricing-toggle:checked {
    background: rgba(212, 175, 55, 0.3);
}

.pricing-toggle:checked::after {
    left: 34px;
}

.pricing-plans {
    padding: 100px 0;
}

.pricing-plans .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.pricing-card {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 40px;
    position: relative;
    transition: all 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-10px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 20px 40px rgba(212, 175, 55, 0.15);
}

.pricing-card.professional-plan {
    transform: scale(1.05);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 20px 50px rgba(212, 175, 55, 0.2);
}

.pricing-badge {
    display: inline-block;
    padding: 6px 14px;
    background: rgba(212, 175, 55, 0.2);
    color: #D4AF37;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.recommended-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    padding: 6px 18px;
    background: linear-gradient(135deg, #D4AF37, #e8c556);
    color: #0B1C2C;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
}

.plan-name {
    font-size: 24px;
    color: #D4AF37;
    margin-bottom: 8px;
    font-weight: 700;
}

.plan-description {
    color: #b0b0b0;
    font-size: 14px;
    margin-bottom: 25px;
}

.pricing-amount {
    margin: 30px 0;
}

.currency {
    font-size: 18px;
    color: #D4AF37;
}

.amount {
    font-size: 48px;
    color: #D4AF37;
    font-weight: 700;
}

.period {
    color: #b0b0b0;
    font-size: 16px;
}

.plan-subtext {
    color: #999999;
    font-size: 13px;
    margin-bottom: 25px;
}

.divider {
    width: 100%;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.3), transparent);
    margin: 25px 0;
}

.features-checklist {
    list-style: none;
    margin-bottom: 25px;
}

.features-checklist li {
    padding: 10px 0;
    color: #b0b0b0;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.features-checklist .icon {
    color: #4CAF50;
    font-weight: bold;
}

.features-checklist li.unavailable {
    color: #666666;
}

.features-checklist li.unavailable .icon {
    color: #666666;
}

.plan-highlight {
    text-align: center;
    color: #D4AF37;
    font-size: 13px;
    font-weight: 600;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid rgba(212, 175, 55, 0.2);
}

.comparison-section {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.comparison-table-wrapper {
    overflow-x: auto;
    margin-top: 40px;
}

.comparison-table {
    width: 100%;
    border-collapse: collapse;
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(212, 175, 55, 0.2);
}

.comparison-table thead {
    background: rgba(212, 175, 55, 0.1);
}

.comparison-table th {
    padding: 20px;
    color: #D4AF37;
    font-weight: 700;
    text-align: left;
    border-bottom: 2px solid rgba(212, 175, 55, 0.2);
}

.comparison-table td {
    padding: 16px 20px;
    color: #b0b0b0;
    border-bottom: 1px solid rgba(212, 175, 55, 0.1);
}

.comparison-table tr:hover {
    background: rgba(212, 175, 55, 0.05);
}

.comparison-table .category-row {
    background: rgba(212, 175, 55, 0.1);
    font-weight: 700;
    color: #D4AF37;
}

.comparison-table .category-row:hover {
    background: rgba(212, 175, 55, 0.1);
}

.comparison-table .check {
    color: #4CAF50;
    font-weight: bold;
    font-size: 18px;
}

.comparison-table .cross {
    color: #999999;
    font-size: 18px;
}

.comparison-table .badge {
    display: inline-block;
    padding: 4px 8px;
    background: rgba(212, 175, 55, 0.2);
    color: #D4AF37;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
}

.addons-section {
    padding: 100px 0;
}

.addons-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 50px;
}

.addon-card {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    transition: all 0.3s ease;
}

.addon-card:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
}

.addon-card h4 {
    color: #D4AF37;
    font-size: 18px;
    margin-bottom: 12px;
}

.addon-price {
    font-size: 24px;
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 10px;
}

.addon-card p {
    color: #b0b0b0;
    font-size: 14px;
    margin-bottom: 15px;
    line-height: 1.6;
}

.pricing-faq {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.faq-container {
    max-width: 800px;
    margin: 50px auto 0;
}

.faq-item {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    margin-bottom: 15px;
    overflow: hidden;
}

.faq-question {
    padding: 20px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease;
    background: rgba(212, 175, 55, 0.05);
}

.faq-question:hover {
    background: rgba(212, 175, 55, 0.1);
}

.faq-question h4 {
    color: #D4AF37;
    font-size: 16px;
    margin: 0;
}

.faq-icon {
    color: #D4AF37;
    font-size: 24px;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-icon {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 20px;
    color: #b0b0b0;
    border-top: 1px solid rgba(212, 175, 55, 0.15);
    display: none;
    max-height: 0;
    overflow: hidden;
    animation: slideDown 0.3s ease;
}

.faq-item.active .faq-answer {
    display: block;
    max-height: 500px;
}

@keyframes slideDown {
    from {
        max-height: 0;
        opacity: 0;
    }
    to {
        max-height: 500px;
        opacity: 1;
    }
}

.pricing-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.pricing-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.pricing-cta p {
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
    .pricing-card.professional-plan {
        transform: scale(1);
    }
    
    .pricing-plans .container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .pricing-hero {
        padding: 80px 0;
    }
    
    .pricing-toggle-wrapper {
        flex-direction: column;
        gap: 15px;
    }
    
    .comparison-table {
        font-size: 12px;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 12px;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
}
</style>

<script>
// Add FAQ accordion functionality
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', function() {
        const faqItem = this.parentElement;
        faqItem.classList.toggle('active');
    });
});
</script>

@endsection
