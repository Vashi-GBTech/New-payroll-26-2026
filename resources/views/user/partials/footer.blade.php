<footer class="footer" style="border-top: none !important;">
    <style>
        .footer-link {
            color: #8b9bb4 !important;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            font-size: 0.95rem;
        }
        .footer-link:hover {
            color: var(--color-gold) !important;
            transform: translateX(6px);
        }
        .social-link {
            color: #64748b !important;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .social-link:hover {
            color: var(--color-gold) !important;
            transform: translateY(-2px);
        }
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 4rem;
            justify-content: space-between;
            border-bottom: none !important; /* overrides landing.css */
        }
        .footer-section h4 {
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            font-size: 0.9rem;
            letter-spacing: 0.1em;
        }
        .footer-section ul {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 0;
            list-style: none;
        }
    </style>
    <div class="footer-content">
<<<<<<< HEAD
        <div class="footer-section footer-brand" style="flex: 2; min-width: 250px; padding-right: 2rem;">
            <div class="footer-logo" style="margin-bottom: 24px;">
                <img src="/assets/frontend/images/GBtechlogo.jpg" alt="Gold Berries Logo" class="footer-logo-img" style="height: 55px; width: auto; border-radius: 8px; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.15);">
            </div>
            <p class="footer-text" style="line-height: 1.8; color: #a0aab5; font-size: 0.95rem;">Enterprise payroll management solutions for modern organizations. Built to automate complex financial workflows with cutting-edge intelligence.</p>
=======
        <div class="footer-logo footer-brand">
            <div class="footer-logo">
                <img src="/assets/frontend/images/GBtechlogo.jpg" alt="Gold Berries Logo" class="footer-logo-img" style="height: 60px; width: auto;">
            </div>
            <p class="footer-text">Enterprise payroll management solutions.</p>
>>>>>>> 7b2c0fa (change footer by abhishek)
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>PRODUCT</h4>
            <ul>
                <li><a href="{{ route('product') }}" class="footer-link">Product Features</a></li>
                <li><a href="{{ route('features') }}" class="footer-link">All Features</a></li>
                <li><a href="#integrations" class="footer-link">Integrations</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>COMPANY</h4>
            <ul>
                <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                <li><a href="#blog" class="footer-link">Blog</a></li>
                <li><a href="#careers" class="footer-link">Careers</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>RESOURCES</h4>
            <ul>
                <li><a href="#docs" class="footer-link">Documentation</a></li>
                <li><a href="#help" class="footer-link">Help Center</a></li>
                <li><a href="#community" class="footer-link">Community</a></li>
                <li><a href="#status" class="footer-link">System Status</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>LEGAL</h4>
            <ul>
                <li><a href="#privacy" class="footer-link">Privacy Policy</a></li>
                <li><a href="#terms" class="footer-link">Terms of Service</a></li>
                <li><a href="#security" class="footer-link">Security</a></li>
                <li><a href="#compliance" class="footer-link">Compliance</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom" style="padding-top: 1.5rem; margin-top: 1.5rem; border-top: 1px solid rgba(212, 175, 55, 0.15); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 1rem; width: 100%; max-width: 1400px; margin-left: auto; margin-right: auto;">
        <p style="color: #64748b; margin: 0; text-align: center;">&copy; 2026 Gold Berries Technology. All rights reserved.</p>
        <div class="footer-socials" style="gap: 1.5rem; display: flex; justify-content: center;">
            <a href="#linkedin" class="social-link">LinkedIn</a>
            <a href="#twitter" class="social-link">Twitter</a>
            <a href="#facebook" class="social-link">Facebook</a>
        </div>
    </div>
</footer>
