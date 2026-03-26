@extends('user.layouts.app')

@section('title', 'Contact Gold Berries - Get In Touch')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="contact-hero">
    <div class="container">
        <div class="section-header">
            <h1 class="hero-title">Get In Touch</h1>
            <p class="hero-subtitle">We'd love to hear from you. Let's talk about how we can help your business.</p>
        </div>
    </div>
</section>

<!-- ============================================ CONTACT SECTION ============================================ -->
<section class="contact-section">
    <div class="container contact-grid">
        <!-- Contact Info -->
        <div class="contact-info" data-animation="slideInLeft">
            <h2>Contact Information</h2>
            <p>Reach out to our team for any inquiries, support requests, or partnership opportunities.</p>

            <div class="info-items">
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div>
                        <h4>Address</h4>
                        <p>123 Tech Street<br>San Francisco, CA 94105</p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon">📞</span>
                    <div>
                        <h4>Phone</h4>
                        <p>+1 (555) 123-4567<br>+1 (555) 123-4568</p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon">✉️</span>
                    <div>
                        <h4>Email</h4>
                        <p>support@goldberries.com<br>sales@goldberries.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon">🕐</span>
                    <div>
                        <h4>Business Hours</h4>
                        <p>Monday - Friday: 9 AM - 6 PM<br>Saturday: 10 AM - 4 PM (PST)</p>
                    </div>
                </div>
            </div>

            <div class="social-links">
                <h4>Follow Us</h4>
                <div class="social-buttons">
                    <a href="#linkedin" class="social-btn">LinkedIn</a>
                    <a href="#twitter" class="social-btn">Twitter</a>
                    <a href="#facebook" class="social-btn">Facebook</a>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form" data-animation="slideInRight">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and we'll get back to you as soon as possible.</p>

            <form id="contactForm" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Full Name *</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email Address *</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 (555) 123-4567">
                </div>

                <div class="form-group">
                    <label for="company" class="form-label">Company Name</label>
                    <input type="text" id="company" name="company" class="form-control" placeholder="Your Company">
                </div>

                <div class="form-group">
                    <label for="subject" class="form-label">Subject *</label>
                    <select id="subject" name="subject" class="form-control" required>
                        <option value="">Select a subject</option>
                        <option value="sales">Sales Inquiry</option>
                        <option value="support">Customer Support</option>
                        <option value="partnership">Partnership</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Message *</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Tell us how we can help..." required></textarea>
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the privacy policy and terms of service</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                <p class="form-note">We'll respond within 24 hours</p>
            </form>

            <div id="successMessage" class="alert alert-success" style="display: none;">
                ✓ Message sent successfully! We'll be in touch soon.
            </div>
        </div>
    </div>
</section>

<!-- ============================================ FAQs ============================================ -->
<section class="contact-faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find quick answers to common questions</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h4>What is your response time?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>We aim to respond to all inquiries within 24 business hours. For urgent support, please call our phone line.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Do you offer phone support?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes! Phone support is available during business hours. Enterprise customers have access to 24/7 phone support.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Can I request a demo?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! We offer free personalized demos. Select "Demo Request" in the contact form or call us to schedule.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h4>Do you have a partnership program?</h4>
                    <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we have rewarding partnership programs. Email partnerships@goldberries.com to learn more.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="contact-cta">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Start your free trial today, no credit card required</p>
        <a href="#" class="btn btn-primary btn-lg">Start Free Trial</a>
    </div>
</section>

<style>
/* Contact Page Styles */
.contact-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 100px 0;
    text-align: center;
}

.contact-section {
    padding: 100px 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

.contact-info h2,
.contact-form h2 {
    font-size: 28px;
    color: #D4AF37;
    margin-bottom: 12px;
}

.contact-info p,
.contact-form p {
    color: #b0b0b0;
    margin-bottom: 30px;
}

.info-items {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-bottom: 40px;
}

.info-item {
    display: flex;
    gap: 15px;
}

.info-icon {
    font-size: 32px;
    flex-shrink: 0;
}

.info-item h4 {
    color: #D4AF37;
    font-size: 16px;
    margin-bottom: 5px;
}

.info-item p {
    color: #b0b0b0;
    margin: 0;
    font-size: 14px;
}

.social-links h4 {
    color: #D4AF37;
    margin-bottom: 15px;
    font-size: 16px;
}

.social-buttons {
    display: flex;
    gap: 12px;
}

.social-btn {
    padding: 10px 16px;
    background: rgba(212, 175, 55, 0.1);
    border: 1px solid rgba(212, 175, 55, 0.3);
    color: #D4AF37;
    text-decoration: none;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.social-btn:hover {
    background: rgba(212, 175, 55, 0.2);
    transform: translateY(-2px);
}

.contact-form {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 35px;
}

.form {
    margin-top: 25px;
}

.form-note {
    text-align: center;
    color: #999999;
    font-size: 13px;
    margin-top: 12px;
}

.form-control {
    background: rgba(7, 21, 33, 0.8);
}

.form-control:focus {
    background: rgba(7, 21, 33, 0.95);
}

select.form-control {
    cursor: pointer;
}

.checkbox-wrapper {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 25px;
}

.checkbox-wrapper input {
    margin-top: 4px;
}

.checkbox-wrapper label {
    color: #b0b0b0;
    font-size: 14px;
    line-height: 1.5;
}

.successMessage {
    background: rgba(76, 175, 80, 0.1);
    border: 1px solid #4CAF50;
    color: #4CAF50;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.contact-faq {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.faq-container {
    max-width: 900px;
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
}

.faq-item.active .faq-answer {
    display: block;
    max-height: 500px;
}

.contact-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.contact-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.contact-cta p {
    font-size: 18px;
    color: #b0b0b0;
    margin-bottom: 30px;
}

/* Responsive */
@media (max-width: 1024px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .contact-hero {
        padding: 80px 0;
    }
    
    .contact-section {
        padding: 60px 0;
    }
}
</style>

<script>
// Contact Form Handling
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Show success message
    document.getElementById('successMessage').style.display = 'block';
    
    // Reset form
    this.reset();
    
    // Hide success message after 5 seconds
    setTimeout(() => {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);
});

// FAQ Accordion
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', function() {
        const faqItem = this.parentElement;
        faqItem.classList.toggle('active');
    });
});
</script>

@endsection
