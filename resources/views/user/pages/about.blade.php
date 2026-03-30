@extends('user.layouts.app')

@section('title', 'About Us - Gold Berries Payroll | Innovation in Employee Management')

@section('content')

<!-- ============================================ ABOUT HERO ============================================ -->
<section class="hero-section" style="padding-top: 80px !important; min-height: 60vh; background: #0B1C2C; position: relative; overflow: hidden;">
    <div class="background-elements">
        <div class="grid-pattern"></div>
        <div class="blob blob-1" style="opacity: 0.1;"></div>
        <div class="blob blob-3" style="position: absolute; bottom: -10%; left: 30%; width: 400px; height: 400px; background: var(--color-gold); filter: blur(120px); opacity: 0.05; animation: float 15s infinite alternate;"></div>
    </div>

    <div class="hero-container">
        <div style="text-align: center; max-width: 950px; margin: 0 auto; position: relative; z-index: 10;">
            <div style="display: inline-block; padding: 6px 20px; background: rgba(212, 175, 55, 0.1); border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 50px; margin-bottom: 30px;">
                <span style="font-size: 0.75rem; letter-spacing: 4px; font-weight: 700; color: var(--color-gold); text-transform: uppercase;">Our Legacy & Vision</span>
            </div>
            
            <h1 class="hero-title" style="font-size: 3.8rem; line-height: 1.1; margin-bottom: 35px; font-weight: 800; color: #fff; letter-spacing: -0.02em;">
                Engineering the Digital <br>Heart of <span class="highlight" style="background: linear-gradient(135deg, var(--color-gold) 0%, #b8860b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Intelligent Autonomy</span>
            </h1>
            
            <p class="hero-subtitle" style="margin: 0 auto; font-size: 1.25rem; line-height: 1.8; max-width: 800px; color: rgba(255,255,255,0.75); font-weight: 300;">
                Experience a paradigm shift in employee management. We blend high-security automation with an uncompromisingly intuitive interface to turn payroll from a back-office function into your most powerful <span style="color: var(--color-gold); font-weight: 500;">strategic asset</span>.
            </p>
        </div>
    </div>
</section>

<!-- ============================================ STATS HUB ============================================ -->
<section style="padding: 120px 0; background: #0B1C2C; position: relative; overflow: hidden;">
    <!-- Ambient Gold Glow -->
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70vw; height: 70vw; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, transparent 60%); pointer-events: none;"></div>
    
    <div class="features-container" style="position: relative; z-index: 2;">
        <div style="background: transparent; border: 1px solid rgba(212, 175, 55, 0.2); border-radius: 30px; padding: 60px 20px; box-shadow: 0 25px 60px rgba(0,0,0,0.4);">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 0;">
                <div style="text-align: center; padding: 0 20px; border-right: 1px solid rgba(212, 175, 55, 0.15);">
                    <div style="font-size: 3.8rem; font-weight: 800; background: linear-gradient(135deg, #f9d976 0%, var(--color-gold) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 15px; line-height: 1; filter: drop-shadow(0 4px 10px rgba(212,175,55,0.2));">10+</div>
                    <div style="color: #fff; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; opacity: 0.9;">Years Heritage</div>
                </div>
                <div style="text-align: center; padding: 0 20px; border-right: 1px solid rgba(212, 175, 55, 0.15);">
                    <div style="font-size: 3.8rem; font-weight: 800; background: linear-gradient(135deg, #f9d976 0%, var(--color-gold) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 15px; line-height: 1; filter: drop-shadow(0 4px 10px rgba(212,175,55,0.2));">500+</div>
                    <div style="color: #fff; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; opacity: 0.9;">Global Partners</div>
                </div>
                <div style="text-align: center; padding: 0 20px; border-right: 1px solid rgba(212, 175, 55, 0.15);">
                    <div style="font-size: 3.8rem; font-weight: 800; background: linear-gradient(135deg, #f9d976 0%, var(--color-gold) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 15px; line-height: 1; filter: drop-shadow(0 4px 10px rgba(212,175,55,0.2));">1M+</div>
                    <div style="color: #fff; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; opacity: 0.9;">Secure Payslips</div>
                </div>
                <div style="text-align: center; padding: 0 20px;">
                    <div style="font-size: 3.8rem; font-weight: 800; background: linear-gradient(135deg, #f9d976 0%, var(--color-gold) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-bottom: 15px; line-height: 1; filter: drop-shadow(0 4px 10px rgba(212,175,55,0.2));">99.9%</div>
                    <div style="color: #fff; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; opacity: 0.9;">System Uptime</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ MISSION & VISION ============================================ -->
<section style="padding: 120px 2rem; background: #0B1C2C;">
    <div class="features-container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">
            <div class="about-mv-card" style="padding: 60px; background: linear-gradient(135deg, rgba(212,175,55,0.08) 0%, rgba(212,175,55,0.01) 100%); border: 1px solid rgba(212,175,55,0.25); border-radius: 30px; display: flex; flex-direction: column; position: relative; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.3); backdrop-filter: blur(10px); transition: transform 0.3s ease;">
                <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(212,175,55,0.15) 0%, transparent 60%);"></div>
                <div style="font-size: 4rem; margin-bottom: 25px; line-height: 1; filter: drop-shadow(0 4px 15px rgba(212,175,55,0.4));">🛡️</div>
                <h3 style="color: #fff; font-size: 2.4rem; margin-bottom: 15px; font-weight: 800; letter-spacing: -0.5px;">Our Mission</h3>
                <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #f9d976, var(--color-gold)); margin-bottom: 25px; border-radius: 5px;"></div>
                <p style="color: rgba(255,255,255,0.75); line-height: 1.8; font-size: 1.15rem; font-weight: 300;">
                    To architect an uncompromisingly secure ecosystem where workforce complexity is transformed into a seamless, automated utility—empowering global enterprises to scale without friction.
                </p>
            </div>
            
            <div class="about-mv-card" style="padding: 60px; background: linear-gradient(135deg, rgba(212,175,55,0.08) 0%, rgba(212,175,55,0.01) 100%); border: 1px solid rgba(212,175,55,0.25); border-radius: 30px; display: flex; flex-direction: column; position: relative; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.3); backdrop-filter: blur(10px); transition: transform 0.3s ease;">
                <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(212,175,55,0.15) 0%, transparent 60%);"></div>
                <div style="font-size: 4rem; margin-bottom: 25px; line-height: 1; filter: drop-shadow(0 4px 15px rgba(212,175,55,0.4));">🚀</div>
                <h3 style="color: #fff; font-size: 2.4rem; margin-bottom: 15px; font-weight: 800; letter-spacing: -0.5px;">Our Vision</h3>
                <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #f9d976, var(--color-gold)); margin-bottom: 25px; border-radius: 5px;"></div>
                <p style="color: rgba(255,255,255,0.75); line-height: 1.8; font-size: 1.15rem; font-weight: 300;">
                    To become the global nervous system of employee management, where autonomous algorithms and real-time intelligence turn payroll into a proactive strategic growth engine.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CORE VALUES ============================================ -->
<section style="padding: 100px 0; background: #0B1C2C; border-top: 1px solid rgba(255, 255, 255, 0.05); border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
    <div class="features-container">
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-size: 3rem; color: #fff; font-weight: 800; margin-bottom: 20px;">The Pillars of Our Ethics</h2>
            <p style="color: rgba(255,255,255,0.5); font-size: 1.1rem;">Principles that define every line of code we write.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px;">
            <div class="value-card" style="padding: 40px 30px; background: rgba(255,255,255,0.01); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div style="font-size: 2.2rem; margin-bottom: 20px;">💎</div>
                <h4 style="color: #fff; font-size: 1.4rem; margin-bottom: 12px; font-weight: 700;">Integrity</h4>
                <p style="color: rgba(255,255,255,0.5); font-size: 0.95rem; line-height: 1.6;">Precision-grade data accuracy and security as our foundational promise.</p>
            </div>
            <div class="value-card" style="padding: 40px 30px; background: rgba(255,255,255,0.01); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div style="font-size: 2.2rem; margin-bottom: 20px;">🤝</div>
                <h4 style="color: #fff; font-size: 1.4rem; margin-bottom: 12px; font-weight: 700;">Client First</h4>
                <p style="color: rgba(255,255,255,0.5); font-size: 0.95rem; line-height: 1.6;">We evolve our architecture based on the real-world scale of our users.</p>
            </div>
            <div class="value-card" style="padding: 40px 30px; background: rgba(255,255,255,0.01); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div style="font-size: 2.2rem; margin-bottom: 20px;">⚡</div>
                <h4 style="color: #fff; font-size: 1.4rem; margin-bottom: 12px; font-weight: 700;">Innovation</h4>
                <p style="color: rgba(255,255,255,0.5); font-size: 0.95rem; line-height: 1.6;">Leading the frontier through continuous R&D and autonomous logic.</p>
            </div>
            <div class="value-card" style="padding: 40px 30px; background: rgba(255,255,255,0.01); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; text-align: center; transition: all 0.3s ease;">
                <div style="font-size: 2.2rem; margin-bottom: 20px;">🌱</div>
                <h4 style="color: #fff; font-size: 1.4rem; margin-bottom: 12px; font-weight: 700;">Simplicity</h4>
                <p style="color: rgba(255,255,255,0.5); font-size: 0.95rem; line-height: 1.6;">Solving heavy calculations through an uncompromisingly beautiful UX.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ FINAL CTA ============================================ -->
<section style="padding: 140px 2rem; text-align: center; position: relative; overflow: hidden; background: #0B1C2C;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 50% 100%, rgba(212, 175, 55, 0.05), transparent 70%); z-index: 1;"></div>
    <div class="features-container" style="position: relative; z-index: 2;">
        <h2 style="font-size: 3.2rem; color: #fff; font-weight: 800; margin-bottom: 25px;">Ready for the Future?</h2>
        <p style="color: rgba(255,255,255,0.6); font-size: 1.2rem; margin-bottom: 45px; max-width: 700px; margin-left: auto; margin-right: auto;">
            Join the forward-thinking enterprises already transforming their workforce management with Gold Berries.
        </p>
        <div style="display: flex; justify-content: center; gap: 20px;">
            <a href="{{ route('login') }}" class="btn btn-primary btn-glow" style="padding: 1.2rem 3.5rem;">Initialize Setup <span>→</span></a>
            <a href="{{ route('contact') }}" class="btn btn-secondary" style="padding: 1.2rem 3.5rem;">Contact Specialist</a>
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% { transform: translate(0, 0); }
        100% { transform: translate(20px, 40px); }
    }
    .pane-visual {
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .pane-visual:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        border-color: var(--color-gold) !important;
    }
    body[data-theme="light"] .pane-visual {
        background: #fff !important;
        border: 1px solid rgba(0,0,0,0.05) !important;
    }
    body[data-theme="light"] .hero-stats-new div div:first-child {
        color: var(--color-dark-blue) !important;
    }
    body[data-theme="light"] .hero-stats-new div div:last-child {
        color: #666 !important;
    }
</style>

@endsection
