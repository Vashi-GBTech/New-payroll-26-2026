<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Berries - Sign In</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styled CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/login.css') }}">
</head>
<body>
    <!-- Premium Background Effects -->
    <div class="bg-gradient"></div>
    <div class="bg-grid"></div>

    <main class="login-wrapper">
        <div class="login-card">
            <!-- Logo Section -->
            <div class="logo-container">
                <img src="{{ asset('assets/frontend/images/GBtechlogo.jpg') }}" alt="Gold Berries Logo" class="logo-img">
            </div>

            <!-- Login Header Area -->
            <div class="login-header">
                <h1>Sign In to Your Account</h1>
            </div>

            <!-- Decorative Rule -->
            <div class="rule">
                <div class="rule-line"></div>
                <div class="rule-dot"></div>
                <div class="rule-line"></div>
            </div>

            <!-- Login Form -->
            <form action="{{ route('admin.auth') }}" method="POST" class="form">
                @csrf
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </span>
                        <input type="email" id="email" name="email" placeholder="you@company.com" required autocomplete="email">
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-container">
                        <span class="input-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </span>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
                        <button type="button" class="show-password" onclick="togglePasswordVisibility()">
                            <svg id="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="{{ route('forget.password') }}" class="forgot-password">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-login">Sign In</button>
            </form>
        </div>
    </main>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                `;
            }
        }
    </script>
 
<div class="bg" aria-hidden="true">
  <div class="grid"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>
</div>
 
<main class="page">
  <div class="card">
 
    <div class="logo-wrap">
      <div class="logo-emblem">
        <img src="assets/frontend/images/GBtechlogo.jpg" alt="gbtech logo" width="100" height="60" />
      </div>
    </div>
 
    <div class="heading-wrap">
      <h1 class="card-title">Sign In to Your Account</h1>
    </div>
 
    <div class="rule">
      <div class="rule-line"></div>
      <div class="rule-dot"></div>
      <div class="rule-line"></div>
    </div>
 
    <form class="form" novalidate onsubmit="handleLogin(event)">
 
      <div class="field">
        <label for="email">Email Address</label>
        <div class="input-wrap">
          <input type="email" id="email" name="email" placeholder="you@company.com" autocomplete="email" />
          <span class="ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="4" width="20" height="16" rx="2"/>
              <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
            </svg>
          </span>
        </div>
      </div>
 
      <div class="field">
        <label for="password">Password</label>
        <div class="input-wrap">
          <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password" />
          <span class="ico">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="11" width="18" height="11" rx="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </span>
          <button type="button" class="toggle-pw" aria-label="Toggle password" onclick="togglePw()">
            <svg id="eye-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </button>
        </div>
      </div>
 
      <div class="row-meta">
        <label class="check-wrap">
          <input type="checkbox" name="remember" id="remember" />
          <span>Remember me</span>
        </label>
        <a href="#" class="forgot" onclick="openForgotModal(event)">Forgot password?</a>
      </div>
 
      <button type="submit" class="btn-login" onclick="rippleEffect(event)">
        Sign In
      </button>

 
    </form>
  </div>

  <div id="forgotModal" class="modal-overlay">
    <div class="modal-card">
      <div class="logo-wrap">
        <div class="logo-emblem">
          <img src="assets/frontend/images/GBtechlogo.jpg" alt="gbtech logo" width="100" height="60" />
        </div>
      </div>

      <div class="heading-wrap">
        <h1 class="card-title">Reset Your Password</h1>
      </div>

      <div class="rule">
        <div class="rule-line"></div>
        <div class="rule-dot"></div>
        <div class="rule-line"></div>
      </div>

      <form class="form" novalidate onsubmit="handlePasswordReset(event)">

        <div class="field">
          <label for="forgot-email">Email Address</label>
          <div class="input-wrap">
            <input type="email" id="forgot-email" name="email" placeholder="you@company.com" autocomplete="email" required />
            <span class="ico">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="2"/>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
              </svg>
            </span>
          </div>
        </div>

        <div class="field">
          <label for="forgot-password">New Password</label>
          <div class="input-wrap">
            <input type="password" id="forgot-password" name="password" placeholder="Enter new password" autocomplete="new-password" required />
            <span class="ico">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
              </svg>
            </span>
            <button type="button" class="toggle-pw" aria-label="Toggle password" onclick="toggleForgotPw()">
              <svg id="eye-icon-forgot" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            </button>
          </div>
        </div>

        <div class="field">
          <label for="forgot-confirm">Confirm Password</label>
          <div class="input-wrap">
            <input type="password" id="forgot-confirm" name="confirm_password" placeholder="Confirm new password" autocomplete="new-password" required />
            <span class="ico">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
              </svg>
            </span>
            <button type="button" class="toggle-pw" aria-label="Toggle password" onclick="toggleConfirmPw()">
              <svg id="eye-icon-confirm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            </button>
          </div>
        </div>

        <div class="modal-buttons">
          <button type="submit" class="btn-login" onclick="rippleEffect(event)">
            Reset Password
          </button>
          <button type="button" class="btn-cancel" onclick="closeForgotModal()">
            Cancel
          </button>
        </div>

      </form>
    </div>
  </div>
 
  <div id="errorModal" class="modal-overlay">
    <div class="modal-card">
      <div style="text-align: center; padding: 40px 0;">
        <div style="font-size: 60px; color: #e74c3c; margin-bottom: 20px;">⊗</div>
        <h2 style="font-size: 28px; color: #A89878; margin-bottom: 12px; font-family: 'Cormorant Garamond', serif;">Oops...</h2>
        <p id="errorMessage" style="font-size: 18px; color: #A89878; margin-bottom: 30px; font-weight: 400; line-height: 1.6;">Please enter the email and password</p>
      </div>

      <div class="modal-buttons" style="display: flex; justify-content: center;">
        <button type="button" class="btn-cancel" onclick="closeErrorModal()">
          Cancel
        </button>
      </div>
    </div>
  </div>
 
</main>
 
<script>
  function togglePw() {
    const pw = document.getElementById('password');
    const icon = document.getElementById('eye-icon');
    const isText = pw.type === 'text';
    pw.type = isText ? 'password' : 'text';
    icon.innerHTML = isText
      ? `<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-10-8-10-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 10 8 10 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }
 
  function rippleEffect(e) {
    const btn = e.currentTarget;
    const r = document.createElement('span');
    r.classList.add('ripple');
    const rect = btn.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    r.style.cssText = `width:${size}px;height:${size}px;left:${e.clientX-rect.left-size/2}px;top:${e.clientY-rect.top-size/2}px`;
    btn.appendChild(r);
    setTimeout(() => r.remove(), 600);
  }
 
  function handleLogin(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validation: Check if fields are empty
    if (!email && !password) {
      openErrorModal('Please enter the email');
      return;
    }

    if (!email) {
      openErrorModal('Please enter the email');
      return;
    }

    if (!password) {
      openErrorModal('Please enter the password');
      return;
    }

    const btn = e.target.querySelector('.btn-login');
    const orig = btn.textContent;
    btn.textContent = 'Authenticating…';
    btn.disabled = true;
    btn.style.opacity = '0.8';
    setTimeout(() => {
      btn.textContent = orig;
      btn.disabled = false;
      btn.style.opacity = '1';
    }, 2000);
  }

  function openForgotModal(e) {
    e.preventDefault();
    const modal = document.getElementById('forgotModal');
    modal.classList.add('active');
  }

  function closeForgotModal() {
    const modal = document.getElementById('forgotModal');
    modal.classList.remove('active');
    // Reset form
    document.querySelector('#forgotModal .form').reset();
  }

  function openErrorModal(message = 'Please enter the email and password') {
    const modal = document.getElementById('errorModal');
    const errorMessage = document.getElementById('errorMessage');
    errorMessage.textContent = message;
    modal.classList.add('active');
  }

  function closeErrorModal() {
    const modal = document.getElementById('errorModal');
    modal.classList.remove('active');
  }

  function toggleForgotPw() {
    const pw = document.getElementById('forgot-password');
    const icon = document.getElementById('eye-icon-forgot');
    const isText = pw.type === 'text';
    pw.type = isText ? 'password' : 'text';
    icon.innerHTML = isText
      ? `<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-10-8-10-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 10 8 10 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }

  function toggleConfirmPw() {
    const pw = document.getElementById('forgot-confirm');
    const icon = document.getElementById('eye-icon-confirm');
    const isText = pw.type === 'text';
    pw.type = isText ? 'password' : 'text';
    icon.innerHTML = isText
      ? `<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-10-8-10-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 10 8 10 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }

  function handlePasswordReset(e) {
    e.preventDefault();
    const email = document.getElementById('forgot-email').value.trim();
    const password = document.getElementById('forgot-password').value.trim();
    const confirmPassword = document.getElementById('forgot-confirm').value.trim();

    // Validation: Check if all fields are empty
    if (!email && !password && !confirmPassword) {
      openErrorModal('Please enter the email');
      return;
    }

    // Validation: Check if password and confirm password are empty or don't match
    if (!password || !confirmPassword || password !== confirmPassword) {
      openErrorModal('new password is not match with confirm password');
      return;
    }

    const btn = e.target.querySelector('.btn-login');
    const orig = btn.textContent;
    btn.textContent = 'Resetting…';
    btn.disabled = true;
    btn.style.opacity = '0.8';
    setTimeout(() => {
      btn.textContent = orig;
      btn.disabled = false;
      btn.style.opacity = '1';
      closeForgotModal();
    }, 2000);
  }

  // Close modal when clicking outside
  document.addEventListener('DOMContentLoaded', function() {
    const forgotModal = document.getElementById('forgotModal');
    const errorModal = document.getElementById('errorModal');
    
    forgotModal.addEventListener('click', function(e) {
      if (e.target === forgotModal) {
        closeForgotModal();
      }
    });

    errorModal.addEventListener('click', function(e) {
      if (e.target === errorModal) {
        closeErrorModal();
      }
    });
  });
</script>
</body>
</html>