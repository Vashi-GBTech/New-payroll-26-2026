<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gold Berries - Advanced Payroll Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <script>
        // Initialize on DOM load
        document.addEventListener('DOMContentLoaded', function() {
            
            // ============================================
            // INTERSECTION OBSERVER - SCROLL ANIMATIONS
            // ============================================
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = entry.target.dataset.animation || 'fadeInUp 0.8s ease-out forwards';
                        entry.target.style.opacity = '1';
                    }
                });
            }, observerOptions);
            
            // Observe elements with data-animation attribute
            document.querySelectorAll('[data-animation]').forEach(el => {
                el.style.opacity = '0';
                observer.observe(el);
            });
            
            // Observe feature boxes, cards, and sections
            document.querySelectorAll('.feature-box, .feature-card, .pricing-card, .why-card, .testimonial-card, .timeline-step, .logo-item').forEach((el, index) => {
                el.style.animation = `none`;
                el.style.opacity = '0';
                el.style.animationDelay = `${index * 0.1}s`;
                observer.observe(el);
                el.addEventListener('mouseenter', function() {
                    this.style.animation = `none`;
                    void this.offsetWidth;
                    this.style.animation = `glow 0.6s ease-out`;
                });
            });
            
            // ============================================
            // COUNTER ANIMATION - STATS
            // ============================================
            function animateCounter(element, target, duration = 2000) {
                let current = 0;
                const increment = target / (duration / 16);
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        element.textContent = target;
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(current) + (element.textContent.includes('+') ? '+' : '');
                    }
                }, 16);
            }
            
            // Animate stats when hero section is visible
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                        entry.target.classList.add('animated');
                        document.querySelectorAll('.stat-number').forEach(stat => {
                            const text = stat.textContent;
                            const number = parseInt(text.replace(/\D/g, ''));
                            if (!isNaN(number)) {
                                animateCounter(stat, number, 2000);
                            }
                        });
                    }
                });
            }, { threshold: 0.5 });
            
            const heroStats = document.querySelector('.hero-stats');
            if (heroStats) statsObserver.observe(heroStats);
            
            // ============================================
            // NAVBAR SCROLL EFFECT - ENHANCED
            // ============================================
            let lastScroll = 0;
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar-header');
                const currentScroll = window.scrollY;
                
                if (currentScroll > 50) {
                    navbar.classList.add('scrolled');
                    // Add subtle parallax to navbar
                    navbar.style.transform = `translateY(${Math.min(currentScroll * 0.02, 10)}px)`;
                } else {
                    navbar.classList.remove('scrolled');
                    navbar.style.transform = 'translateY(0)';
                }
                
                lastScroll = currentScroll;
            });

            // ============================================
            // PARALLAX EFFECT
            // ============================================
            window.addEventListener('scroll', function() {
                const blobs = document.querySelectorAll('.blob');
                const scrollVelocity = window.scrollY;
                
                blobs.forEach((blob, index) => {
                    const offset = scrollVelocity * (0.3 + index * 0.1);
                    blob.style.transform = `translateY(${offset}px)`;
                });
            });

            // ============================================
            // DROPDOWN TOGGLE FOR MOBILE
            // ============================================
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const dropdown = this.nextElementSibling;
                    dropdown.classList.toggle('active');
                });
            });

            // ============================================
            // TAB SWITCHING - PRODUCT SECTION
            // ============================================
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabName = this.getAttribute('data-tab');
                    
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.style.animation = 'none';
                    });
                    tabPanes.forEach(pane => {
                        pane.classList.remove('active');
                        pane.style.animation = 'none';
                    });
                    
                    this.classList.add('active');
                    this.style.animation = 'bounceIn 0.5s ease-out';
                    
                    const activePane = document.getElementById(tabName);
                    if (activePane) {
                        activePane.classList.add('active');
                        activePane.style.animation = 'fadeInScale 0.6s ease-out';
                    }
                });
            });

            // ============================================
            // PRICING TOGGLE - MONTHLY/YEARLY
            // ============================================
            const pricingToggle = document.getElementById('pricing-toggle');
            if (pricingToggle) {
                pricingToggle.addEventListener('change', function() {
                    const priceAmounts = document.querySelectorAll('.amount');
                    
                    priceAmounts.forEach(amount => {
                        amount.style.animation = 'none';
                        void amount.offsetWidth;
                        amount.style.animation = 'scaleIn 0.4s ease-out';
                        
                        if (this.checked) {
                            const yearly = amount.getAttribute('data-yearly');
                            amount.textContent = yearly;
                        } else {
                            const monthly = amount.getAttribute('data-monthly');
                            amount.textContent = monthly;
                        }
                    });
                    
                    document.querySelectorAll('.period').forEach(label => {
                        if (this.checked) {
                            label.textContent = '/year';
                        } else {
                            label.textContent = '/month';
                        }
                    });
                });
            }

            // ============================================
            // FAQ ACCORDION - EXPAND/COLLAPSE
            // ============================================
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const faqItem = this.parentElement;
                    const isActive = faqItem.classList.contains('active');
                    
                    document.querySelectorAll('.faq-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    
                    if (!isActive) {
                        faqItem.classList.add('active');
                        faqItem.style.animation = 'slideInFromBottom 0.4s ease-out';
                    }
                });
            });

            // ============================================
            // TESTIMONIALS CAROUSEL - AUTO ROTATE
            // ============================================
            let currentSlide = 0;
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            const carouselDots = document.querySelectorAll('.dot');
            
            if (testimonialCards.length > 0) {
                setInterval(function() {
                    currentSlide = (currentSlide + 1) % testimonialCards.length;
                    updateTestimonialCarousel();
                }, 5000);
                
                carouselDots.forEach(dot => {
                    dot.addEventListener('click', function() {
                        currentSlide = parseInt(this.getAttribute('data-slide'));
                        updateTestimonialCarousel();
                    });
                });
                
                function updateTestimonialCarousel() {
                    testimonialCards.forEach((card, index) => {
                        card.classList.remove('active');
                        if (index === currentSlide) {
                            card.classList.add('active');
                            card.style.animation = 'fadeInScale 0.8s ease-out';
                        }
                    });
                    carouselDots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentSlide);
                    });
                }
            }

            // ============================================
            // SMOOTH SCROLL FOR NAVIGATION LINKS
            // ============================================
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && document.querySelector(href)) {
                        e.preventDefault();
                        document.querySelector(href).scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // ============================================
            // BUTTON HOVER RIPPLE EFFECT
            // ============================================
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('rippled')) {
                        this.classList.add('rippled');
                        this.style.animation = 'none';
                        void this.offsetWidth;
                        this.style.animation = 'glow 0.6s ease-out';
                        
                        setTimeout(() => {
                            this.classList.remove('rippled');
                        }, 600);
                    }
                });
            });

            // ============================================
            // SECTION PROGRESSIVE REVEAL
            // ============================================
            document.querySelectorAll('section').forEach((section, index) => {
                section.style.opacity = '1';
            });
        });
    </script>
</body>
</html>
