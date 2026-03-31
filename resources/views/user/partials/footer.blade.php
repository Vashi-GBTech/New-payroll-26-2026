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
        <div class="footer-logo footer-brand">
            <div class="footer-logo">
                <img src="/assets/frontend/images/GBtechlogo.jpg" alt="Gold Berries Logo" class="footer-logo-img" style="height: 60px; width: auto;">
            </div>
            <p class="footer-text">{{ __('Enterprise payroll management solutions.')}}</p>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>PRODUCT</h4>
            <ul>
                <li><a href="{{ route('product') }}" class="footer-link">{{ __('Product Features')}}</a></li>
                <li><a href="{{ route('features') }}" class="footer-link">{{ __('All Features')}}</a></li>
                <li><a href="#integrations" class="footer-link">{{ __('Integrations')}}</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>COMPANY</h4>
            <ul>
                <li><a href="{{ route('about') }}" class="footer-link">{{ __('About Us')}}</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">{{ __('Contact')}}</a></li>
                <li><a href="#blog" class="footer-link">{{ __('Blog')}}</a></li>
                <li><a href="#careers" class="footer-link">{{ __('Careers')}}</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>RESOURCES</h4>
            <ul>
                <li><a href="#docs" class="footer-link">{{ __('Documentation')}}</a></li>
                <li><a href="#help" class="footer-link">{{ __('Help Center')}}</a></li>
                <li><a href="#community" class="footer-link">{{ __('Community')}}</a></li>
                <li><a href="#status" class="footer-link">{{ __('System Status')}}</a></li>
            </ul>
        </div>
        <div class="footer-section" style="flex: 1; min-width: 140px;">
            <h4>LEGAL</h4>
            <ul>
                <li><a href="#privacy" class="footer-link">{{ __('Privacy Policy')}}</a></li>
                <li><a href="#terms" class="footer-link">{{ __('Terms of Service')}}</a></li>
                <li><a href="#security" class="footer-link">{{ __('Security')}}</a></li>
                <li><a href="#compliance" class="footer-link">{{ __('Compliance')}}</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom" style="padding-top: 1.5rem; margin-top: 1.5rem; border-top: 1px solid rgba(212, 175, 55, 0.15); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 1rem; width: 100%; max-width: 1400px; margin-left: auto; margin-right: auto;">
        <p style="color: #64748b; margin: 0; text-align: center;">&copy; {{ __('2026 Gold Berries Technology. All rights reserved.')}}</p>
        <div class="footer-socials" style="gap: 1.5rem; display: flex; justify-content: center;">
            <a href="#linkedin" class="social-link">{{ __('LinkedIn')}}</a>
            <a href="#twitter" class="social-link">{{ __('Twitter')}}</a>
            <a href="#facebook" class="social-link">{{ __('Facebook')}}</a>
        </div>
    </div>
</footer>
