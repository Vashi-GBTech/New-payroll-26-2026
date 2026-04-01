@extends('user.layouts.app')

@section('title', 'About Gold Berries Payroll | Modern Payroll Solutions')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="hero-section" style="min-height: 65vh; display: flex; align-items: center; justify-content: center; padding: 60px 20px;">
    <div class="background-elements">
        <div class="grid-pattern"></div>
        <div class="blob blob-1"></div>
    </div>

    <div style="text-align: center; max-width: 1000px; position: relative; z-index: 10; width: 100%;">
        <div style="display: inline-block; padding: 8px 24px; background: rgba(212, 175, 55, 0.1); border: 1px solid rgba(212, 175, 55, 0.3); border-radius: 50px; margin-bottom: 30px;">
            <span style="color: var(--color-gold); font-size: 0.75rem; letter-spacing: 3px; font-weight: 600; text-transform: uppercase;">About Gold Berries</span>
        </div>

        <h1 class="hero-title" style="font-size: 3.8rem; line-height: 1.2; margin-bottom: 30px; font-weight: 700;">
            <span class="highlight">Simplifying Payroll for Modern Enterprises</span>
        </h1>
        
        <p class="hero-subtitle" style="font-size: 1.25rem; line-height: 1.8; opacity: 0.9; max-width: 800px; margin: 0 auto; color: var(--text-secondary);">
            A trusted partner for over 5,000 companies. We make payroll management simple, secure, and intelligent.
        </p>
    </div>
</section>

<!-- ============================================ STATS SECTION ============================================ -->
<section style="padding: 100px 0; background: transparent; position: relative; z-index: 5;">
    <div class="features-container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.5rem; color: var(--color-gold); margin-bottom: 15px; font-weight: 700;">Why Trust Us</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Industry-leading metrics that prove our commitment to excellence</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <!-- Card 1 -->
            <div style="background: rgba(212, 175, 55, 0.08); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 16px; padding: 50px 40px; text-align: center; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; overflow: visible; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.2)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 15px;">5,000+</div>
                    <div style="color: var(--text-secondary); font-size: 1rem; font-weight: 500;">Active Clients</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div style="background: rgba(212, 175, 55, 0.08); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 16px; padding: 50px 40px; text-align: center; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; overflow: visible; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.1s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.2)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 15px;">10+</div>
                    <div style="color: var(--text-secondary); font-size: 1rem; font-weight: 500;">Years Experience</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div style="background: rgba(212, 175, 55, 0.08); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 16px; padding: 50px 40px; text-align: center; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; overflow: visible; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.2s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.2)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 15px;">99.9%</div>
                    <div style="color: var(--text-secondary); font-size: 1rem; font-weight: 500;">System Uptime</div>
                </div>
            </div>

            <!-- Card 4 -->
            <div style="background: rgba(212, 175, 55, 0.08); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 16px; padding: 50px 40px; text-align: center; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; overflow: visible; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.2)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 15px;">24/7</div>
                    <div style="color: var(--text-secondary); font-size: 1rem; font-weight: 500;">Expert Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ WHO WE ARE ============================================ -->
<section style="padding: 80px 0; position: relative;">
    <div class="features-container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
            <!-- Left Content -->
            <div>
                <h2 style="font-size: 3.2rem; line-height: 1.2; margin-bottom: 40px; color: var(--color-gold); font-weight: 700;">
                    Who We Are
                </h2>
                
                <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(212, 175, 55, 0.02)); border-left: 4px solid var(--color-gold); border-radius: 8px; padding: 30px; margin-bottom: 30px;">
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin: 0;">
                        Gold Berries is a leading payroll management platform designed for enterprise clients. Since 2014, we've been helping companies of all sizes streamline their payroll operations with cutting-edge technology and exceptional support.
                    </p>
                </div>

                <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.01)); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 12px; padding: 30px;">
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-secondary); margin: 0;">
                        <strong style="color: var(--color-gold); display: block; margin-bottom: 15px;">Our Mission</strong>
                        Make payroll management effortless so your team can focus on what matters most—growing your business.
                    </p>
                </div>
            </div>

            <!-- Right Visual Element -->
            <div style="position: relative;">
                <div style="position: relative; z-index: 2;">
                    <!-- Main Card -->
                    <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.05)); border: 2px solid rgba(212, 175, 55, 0.25); border-radius: 20px; padding: 50px 40px; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(60px);"></div>
                        
                        <div style="position: relative; z-index: 2;">
                            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div style="width: 50px; height: 50px; background: var(--color-gold); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">📅</div>
                                <div>
                                    <div style="font-size: 1.4rem; font-weight: 700; color: var(--color-white);">Founded 2014</div>
                                    <div style="color: var(--text-secondary); font-size: 0.9rem;">A Decade of Trust</div>
                                </div>
                            </div>

                            <div style="border-top: 1px solid rgba(212, 175, 55, 0.2); padding-top: 25px; margin-top: 25px;">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                                    <div style="width: 40px; height: 40px; background: rgba(212, 175, 55, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">✓</div>
                                    <div>
                                        <div style="font-size: 0.95rem; color: var(--color-white); font-weight: 600;">Enterprise Security</div>
                                        <div style="color: var(--text-secondary); font-size: 0.85rem;">ISO 27001 Certified</div>
                                    </div>
                                </div>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 40px; height: 40px; background: rgba(212, 175, 55, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">⚡</div>
                                    <div>
                                        <div style="font-size: 0.95rem; color: var(--color-white); font-weight: 600;">Global Coverage</div>
                                        <div style="color: var(--text-secondary); font-size: 0.85rem;">80+ Countries Compliant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge -->
                <div style="position: absolute; bottom: -20px; right: 20px; background: var(--color-gold); color: #000; padding: 20px 30px; border-radius: 16px; font-weight: 700; z-index: 3; box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);">
                    Trusted by<br><span style="font-size: 1.8rem;">5,000+</span> Companies
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ OUR VALUES ============================================ -->
<section style="padding: 120px 0;">
    <div class="features-container">
        <h2 style="text-align: center; font-size: 3.2rem; color: var(--color-gold); margin-bottom: 80px; font-weight: 700;">Our Core Values</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 40px;">
            <!-- Card 1 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; text-align: center; position: relative; overflow: visible; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.15)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.5rem; margin-bottom: 25px;">🔒</div>
                    <h4 style="color: var(--color-gold); font-size: 1.4rem; margin-bottom: 15px; font-weight: 700;">Security</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin: 0;">Your data is protected with military-grade encryption and compliance standards.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; text-align: center; position: relative; overflow: visible; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.1s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.15)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.5rem; margin-bottom: 25px;">✓</div>
                    <h4 style="color: var(--color-gold); font-size: 1.4rem; margin-bottom: 15px; font-weight: 700;">Accuracy</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin: 0;">Zero-tolerance for errors. Every calculation is verified and audited.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; text-align: center; position: relative; overflow: visible; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.2s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.15)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.5rem; margin-bottom: 25px;">⚡</div>
                    <h4 style="color: var(--color-gold); font-size: 1.4rem; margin-bottom: 15px; font-weight: 700;">Speed</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin: 0;">Fast deployment and processing that saves your team time every month.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; text-align: center; position: relative; overflow: visible; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; animation: slideUpCard 0.6s ease-out forwards; animation-delay: 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(212, 175, 55, 0.3), inset 0 0 20px rgba(212, 175, 55, 0.15)'; this.style.borderColor='rgba(212, 175, 55, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='rgba(212, 175, 55, 0.15)';">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3.5rem; margin-bottom: 25px;">🤝</div>
                    <h4 style="color: var(--color-gold); font-size: 1.4rem; margin-bottom: 15px; font-weight: 700;">Support</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.7; margin: 0;">Dedicated experts available around the clock to help you succeed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ WHY CHOOSE US ============================================ -->
<section style="padding: 120px 0;">
    <div class="features-container">
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-size: 3.2rem; color: var(--color-gold); margin-bottom: 15px; font-weight: 700;">Why Choose Gold Berries</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary);">Everything you need for successful payroll management</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
            <!-- Card 1 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(212, 175, 55, 0.1)); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 25px;">💡</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 12px; font-weight: 700;">Easy Integration</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">Connect effortlessly with your existing HR and accounting systems.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(212, 175, 55, 0.1)); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 25px;">📊</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 12px; font-weight: 700;">Real-Time Insights</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">Get actionable payroll analytics and reports instantly.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(212, 175, 55, 0.1)); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 25px;">🌍</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 12px; font-weight: 700;">Global Compliance</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">Always up-to-date with the latest labor laws and tax regulations.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 35px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(30px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.3), rgba(212, 175, 55, 0.1)); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 25px;">🚀</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 12px; font-weight: 700;">Quick Setup</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">Go live in days, not months. Our streamlined process gets you started fast.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CONTACT US SECTION ============================================ -->
<section style="padding: 120px 0; background: rgba(0,0,0,0.15); border-top: 1px solid rgba(212,175,55,0.1); border-bottom: 1px solid rgba(212,175,55,0.1);">
    <div class="features-container">
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-size: 3.2rem; color: var(--color-gold); margin-bottom: 25px; font-weight: 700;">Contact Us</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">
                Have questions? Our team is here to help you succeed.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; margin-bottom: 60px;">
            <!-- Email Card -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 40px; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3rem; margin-bottom: 20px;">📧</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 15px; font-weight: 700;">Email</h4>
                    <a href="mailto:support@goldberries.com" style="color: var(--color-gold); text-decoration: none; font-size: 1rem; font-weight: 600;">support@goldberries.com</a>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-top: 10px; margin-bottom: 0;">Response within 2 hours</p>
                </div>
            </div>

            <!-- Phone Card -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 40px; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3rem; margin-bottom: 20px;">📞</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 15px; font-weight: 700;">Phone</h4>
                    <a href="tel:+6012345678" style="color: var(--color-gold); text-decoration: none; font-size: 1rem; font-weight: 600;">+60 (1) 234-5678</a>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-top: 10px; margin-bottom: 0;">24/7 Enterprise Support</p>
                </div>
            </div>

            <!-- Office Card -->
            <div style="background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02)); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: 16px; padding: 50px 40px; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; filter: blur(40px);"></div>
                <div style="position: relative; z-index: 2;">
                    <div style="font-size: 3rem; margin-bottom: 20px;">🏢</div>
                    <h4 style="color: var(--color-white); font-size: 1.3rem; margin-bottom: 15px; font-weight: 700;">Visit Us</h4>
                    <p style="color: var(--color-gold); font-size: 1rem; margin: 0; font-weight: 600;">Kuala Lumpur, Malaysia</p>
                    <p style="color: var(--text-secondary); font-size: 0.9rem; margin-top: 10px; margin-bottom: 0;">Singapore · Bangkok</p>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <h3 style="font-size: 1.5rem; color: var(--color-white); margin-bottom: 30px; font-weight: 700;">Ready to Schedule a Demo?</h3>
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <a href="{{ route('login') }}" class="btn btn-primary btn-glow">Start Free Trial <span>→</span></a>
                <a href="{{ route('contact') }}" class="btn btn-outline">Request Demo</a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% { transform: translate(0, 0); }
        100% { transform: translate(30px, 60px); }
    }

    @keyframes slideUpCard {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .hero-section {
        background: var(--bg-primary); /* Use home page background */
    }

    body[data-theme="light"] .why-card {
        background: #fff !important;
        border-color: rgba(0,0,0,0.05) !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05) !important;
    }
    
    body[data-theme="light"] .hero-section {
        background: #fff !important;
    }
    
    body[data-theme="light"] .hero-title, 
    body[data-theme="light"] .hero-subtitle {
        color: #1a1a1a !important;
    }
</style>

@endsection
