@extends('user.layouts.app')

@section('title', 'Contact Us - Get In Touch')

@section('styles')
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    :root {
      --gold: #C9A84C;
      --gold-light: #E2C77A;
      --gold-dark: #A07830;
      --navy: #1A2340;
      --navy-light: #2C3A5C;
      --cream: #FAF8F3;
      --text-muted: #8A8F9E;
      --border: #DDD8CC;
      --white: #FFFFFF;
      --radius: 10px;
      --shadow: 0 4px 32px rgba(26,35,64,0.09);
    }

    .contact-container {
      background: #F0EDE6;
      min-height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
    }

    .contact-wrapper {
      width: 100%;
      max-width: 1160px;
      background: var(--white);
      border-radius: 18px;
      box-shadow: var(--shadow);
      overflow: hidden;
      display: grid;
      grid-template-columns: 320px 1fr;
    }

    /* LEFT PANEL */
    .contact-sidebar {
      background: var(--navy);
      padding: 52px 40px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      gap: 30px;
      position: relative;
      overflow: hidden;
    }

    .sidebar-top h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2rem;
      font-weight: 700;
      color: var(--white);
      line-height: 1.2;
      margin-bottom: 14px;
    }

    .sidebar-top h2 span {
      color: var(--gold);
    }

    .sidebar-top p {
      font-size: 0.9rem;
      color: rgba(255,255,255,0.55);
      line-height: 1.7;
    }

    .divider {
      width: 40px;
      height: 2px;
      background: var(--gold);
      margin: 28px 0;
    }

    .contact-info-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    .contact-info-list li {
      display: flex;
      align-items: center;
      gap: 14px;
      color: rgba(255,255,255,0.7);
      font-size: 0.875rem;
    }

    .info-icon-box {
      width: 36px;
      height: 36px;
      background: rgba(201,168,76,0.15);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--gold);
      font-size: 1rem;
    }

    .sidebar-note {
      font-size: 0.78rem;
      color: rgba(255,255,255,0.35);
      line-height: 1.6;
      margin-top: 10px;
    }

    .sidebar-map {
      width: 100%;
      height: 200px;
      border-radius: 12px;
      overflow: hidden;
      margin-top: auto;
      border: 1px solid rgba(255,255,255,0.1);
    }

    /* RIGHT PANEL */
    .contact-form-panel {
      padding: 52px 52px 44px;
    }

    .form-header {
      margin-bottom: 36px;
    }

    .form-header h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.6rem;
      font-weight: 600;
      color: var(--navy);
      margin-bottom: 6px;
    }

    .form-header p {
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px 28px;
    }

    .field-group {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }

    .field-group.full-width {
      grid-column: 1 / -1;
    }

    .contact-label {
      font-size: 0.78rem;
      font-weight: 500;
      color: var(--navy);
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    .input-wrap {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-icon {
      position: absolute;
      left: 14px;
      color: var(--gold);
      font-size: 0.95rem;
      pointer-events: none;
    }

    .contact-input, .contact-select, .contact-textarea {
      width: 100%;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      color: var(--navy);
      background: var(--cream);
      border: 1.5px solid var(--border);
      border-radius: var(--radius);
      padding: 12px 14px 12px 40px;
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
      appearance: none;
    }

    .contact-input::placeholder, .contact-textarea::placeholder {
      color: #B0ABA0;
    }

    .contact-input:focus, .contact-select:focus, .contact-textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201,168,76,0.13);
      background: #FFFDF7;
    }

    .contact-textarea {
      resize: vertical;
      min-height: 110px;
      padding-top: 14px;
    }

    .select-wrap {
      position: relative;
    }

    .select-wrap::after {
      content: '▾';
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold);
      pointer-events: none;
      font-size: 0.85rem;
    }

    .form-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 28px;
      gap: 20px;
    }

    .footer-note {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .btn-send {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--gold);
      color: #fff;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      border: none;
      border-radius: var(--radius);
      padding: 14px 36px;
      cursor: pointer;
      letter-spacing: 0.02em;
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
      white-space: nowrap;
    }

    .btn-send:hover {
      background: var(--gold-dark);
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(160,120,48,0.28);
    }

    @media (max-width: 900px) {
      .contact-wrapper { grid-template-columns: 1fr; }
      .contact-sidebar { padding: 36px 32px; }
      .contact-form-panel { padding: 36px 32px; }
    }

    @media (max-width: 560px) {
      .form-grid { grid-template-columns: 1fr; }
      .form-footer { flex-direction: column; align-items: stretch; }
      .btn-send { justify-content: center; }
    }
  </style>
@endsection

@section('content')
<div class="contact-container">
  <div class="contact-wrapper">

    <!-- SIDEBAR -->
    <aside class="contact-sidebar">
      <div class="sidebar-top">
        <h2>Get in <span>Touch</span></h2>
        <p>We'd love to hear from you. Fill in the form and our team will get back to you shortly.</p>
        <div class="divider"></div>
        <ul class="contact-info-list">
          <li>
            <span class="info-icon-box">✉</span>
            hello@company.com
          </li>
          <li>
            <span class="info-icon-box">☎</span>
            +91 98765 43210
          </li>
          <li>
            <span class="info-icon-box">⊙</span>
            Mumbai, India
          </li>
        </ul>
      </div>
      
      <div class="sidebar-map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995166016!3d19.0821978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1711880000000!5m2!1sen!2sin" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </aside>

    <!-- FORM PANEL -->
    <main class="contact-form-panel">
      <div class="form-header">
        <h3>Send Us a Message</h3>
        <p>All fields marked are required unless noted as optional.</p>
      </div>

      <div class="form-grid">

        <div class="field-group">
          <label class="contact-label" for="name">Full Name</label>
          <div class="input-wrap">
            <span class="input-icon">👤</span>
            <input type="text" id="name" class="contact-input" placeholder="John Doe" />
          </div>
        </div>

        <div class="field-group">
          <label class="contact-label" for="email">Email Address</label>
          <div class="input-wrap">
            <span class="input-icon">✉</span>
            <input type="email" id="email" class="contact-input" placeholder="john@company.com" />
          </div>
        </div>

        <div class="field-group">
          <label class="contact-label" for="phone">Phone Number</label>
          <div class="input-wrap">
            <span class="input-icon">📞</span>
            <input type="tel" id="phone" class="contact-input" placeholder="+91 98765 43210" />
          </div>
        </div>

        <div class="field-group">
          <label class="contact-label" for="company">Company Name <span style="font-weight:300;text-transform:none;letter-spacing:0">(Optional)</span></label>
          <div class="input-wrap">
            <span class="input-icon">🏢</span>
            <input type="text" id="company" class="contact-input" placeholder="Your Company Pvt. Ltd." />
          </div>
        </div>

        <div class="field-group full-width">
          <label class="contact-label" for="subject">Subject</label>
          <div class="input-wrap select-wrap">
            <span class="input-icon">📋</span>
            <select id="subject" class="contact-select">
              <option value="" disabled selected>Select a subject</option>
              <option>General Inquiry</option>
              <option>Sales</option>
              <option>Support</option>
              <option>Partnership</option>
              <option>Other</option>
            </select>
          </div>
        </div>

        <div class="field-group full-width">
          <label class="contact-label" for="message">Message</label>
          <div class="input-wrap">
            <span class="input-icon" style="top:14px;align-self:flex-start;">💬</span>
            <textarea id="message" class="contact-textarea" placeholder="How can we help you?"></textarea>
          </div>
        </div>

      </div>

      <div class="form-footer">
        <p class="footer-note">Your information is safe and never shared.</p>
        <button class="btn-send">
          Send Message <span class="btn-arrow">→</span>
        </button>
      </div>
    </main>

  </div>
</div>
@endsection