<style>
    .navbar-header {
        top: 0 !important;
        margin-top: 0 !important;
        padding-top: 0 !important;
    }
    .navbar, .navbar-header.scrolled .navbar, .navbar-header .navbar {
        margin-top: 0 !important;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
        width: 100% !important;
        max-width: 100% !important;
    }
</style>
<header class="navbar-header">
    <nav class="navbar" style="border-radius: 0; margin-top: 0; max-width: 100%;">
        <!-- Logo -->
        <div class="navbar-logo">
            <div class="logo-container">
                <img src="/assets/frontend/images/GBtechlogo.jpg" alt="Gold Berries Logo" class="navbar-logo-img" style="height: 50px; width: auto;">
            </div>
        </div>

        <!-- Navigation Menu -->
        <ul class="navbar-menu">
            <li class="nav-item">
                <a href="/" class="menu-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#product" class="menu-link dropdown-toggle">Product</a>
                <div class="dropdown-menu">
                    <a href="#payroll-processing">Payroll Processing</a>
                    <a href="#attendance">Attendance Management</a>
                    <a href="#leave">Leave Management</a>
                    <a href="#dashboard">Employee Dashboard</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#solutions" class="menu-link dropdown-toggle">Solutions</a>
                <div class="dropdown-menu">
                    <a href="#small-business">Small Business</a>
                    <a href="#enterprises">Enterprises</a>
                    <a href="#hr-teams">HR Teams</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#resources" class="menu-link dropdown-toggle">Resources</a>
                <div class="dropdown-menu">
                    <a href="#blog">Blog</a>
                    <a href="#docs">Documentation</a>
                    <a href="#help">Help Center</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="menu-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact') }}" class="menu-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="#why-payroll" class="menu-link dropdown-toggle">Why Payroll</a>
                <div class="dropdown-menu">
                    <a href="#benefits">Benefits</a>
                    <a href="#features">Features</a>
                    <a href="#case-studies">Case Studies</a>
                </div>
            </li>
        </ul>

        <!-- Search Bar -->
        <div class="navbar-search" id="navbar-search">
            <button class="search-toggle-btn" id="search-toggle-btn" title="Search">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>
            <div class="search-input-wrapper" id="search-input-wrapper">
                <svg class="search-input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="search-input" id="search-input" placeholder="Search features, modules..." autocomplete="off" />
                <button class="search-close-btn" id="search-close-btn" title="Close search">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="search-suggestions" id="search-suggestions"></div>
        </div>

        <!-- Theme Toggle Button -->
        <button class="theme-toggle" id="theme-toggle" title="Toggle theme">
            <!-- Solid Sun Icon -->
            <svg class="sun-icon" width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
            </svg>
            <!-- Solid Moon Icon -->
            <svg class="moon-icon" width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- CTA Button -->
        <a href="{{ route('login') }}" class="navbar-btn">Get Started</a>
    </nav>
</header>

<!-- Search Autocomplete Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchData = [
        // Product
        { title: 'Payroll Processing', category: 'Product', link: '#payroll-processing', icon: '💰' },
        { title: 'Attendance Management', category: 'Product', link: '#attendance', icon: '⏰' },
        { title: 'Leave Management', category: 'Product', link: '#leave', icon: '📅' },
        { title: 'Employee Dashboard', category: 'Product', link: '#dashboard', icon: '📊' },
        // Core Modules
        { title: 'Salary Management', category: 'Module', link: '#features', icon: '💵' },
        { title: 'Attendance Tracking', category: 'Module', link: '#features', icon: '🕐' },
        { title: 'Employee Self-Service', category: 'Module', link: '#features', icon: '👤' },
        { title: 'Payslip Generation', category: 'Module', link: '#features', icon: '📄' },
        { title: 'Tax Calculation', category: 'Module', link: '#features', icon: '🧮' },
        // Solutions
        { title: 'Small Business', category: 'Solutions', link: '#small-business', icon: '🏢' },
        { title: 'Enterprises', category: 'Solutions', link: '#enterprises', icon: '🏛️' },
        { title: 'HR Teams', category: 'Solutions', link: '#hr-teams', icon: '👥' },
        // Resources
        { title: 'Blog', category: 'Resources', link: '#blog', icon: '📝' },
        { title: 'Documentation', category: 'Resources', link: '#docs', icon: '📖' },
        { title: 'Help Center', category: 'Resources', link: '#help', icon: '❓' },
        // Integrations
        { title: 'Accounting Tools', category: 'Integrations', link: '#accounting', icon: '📒' },
        { title: 'HR Software', category: 'Integrations', link: '#hr-software', icon: '🖥️' },
        { title: 'APIs', category: 'Integrations', link: '#apis', icon: '🔗' },
        // Sections
        { title: 'Why Choose Payroll Pro', category: 'Section', link: '#why', icon: '⭐' },
        { title: 'Our Platform', category: 'Section', link: '#product', icon: '🚀' },
        { title: 'Testimonials', category: 'Section', link: '#testimonials', icon: '💬' },
        { title: 'FAQ', category: 'Section', link: '#faq', icon: '❔' },
        { title: 'Partners', category: 'Section', link: '#partners', icon: '🤝' },
        // Features
        { title: 'Automation', category: 'Feature', link: '#why', icon: '⚡' },
        { title: 'Accuracy', category: 'Feature', link: '#why', icon: '✅' },
        { title: 'Security', category: 'Feature', link: '#why', icon: '🔒' },
        { title: 'Scalability', category: 'Feature', link: '#why', icon: '📈' },
        { title: 'Bulk Processing', category: 'Feature', link: '#product', icon: '⚙️' },
        { title: 'Multi-currency', category: 'Feature', link: '#product', icon: '🌍' },
        { title: 'Compliance', category: 'Feature', link: '#product', icon: '🛡️' },
        // Actions
        { title: 'Start Free Trial', category: 'Action', link: '{{ route("login") }}', icon: '🎯' },
        { title: 'Get Started', category: 'Action', link: '{{ route("login") }}', icon: '▶️' },
        { title: 'Login', category: 'Action', link: '{{ route("login") }}', icon: '🔑' },
    ];

    const toggleBtn = document.getElementById('search-toggle-btn');
    const inputWrapper = document.getElementById('search-input-wrapper');
    const searchInput = document.getElementById('search-input');
    const suggestionsBox = document.getElementById('search-suggestions');
    const closeBtn = document.getElementById('search-close-btn');
    const navbarSearch = document.getElementById('navbar-search');
    let activeIndex = -1;

    // Toggle search open
    toggleBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        navbarSearch.classList.add('active');
        setTimeout(() => searchInput.focus(), 300);
    });

    // Close search
    function closeSearch() {
        navbarSearch.classList.remove('active');
        searchInput.value = '';
        suggestionsBox.innerHTML = '';
        suggestionsBox.classList.remove('visible');
        activeIndex = -1;
    }

    closeBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        closeSearch();
    });

    // Close on outside click
    document.addEventListener('click', function(e) {
        if (!navbarSearch.contains(e.target)) {
            closeSearch();
        }
    });

    // Close on Escape
    searchInput.addEventListener('keydown', function(e) {
        const items = suggestionsBox.querySelectorAll('.search-suggestion-item');

        if (e.key === 'Escape') {
            closeSearch();
            return;
        }

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            activeIndex = Math.min(activeIndex + 1, items.length - 1);
            updateActiveItem(items);
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            activeIndex = Math.max(activeIndex - 1, 0);
            updateActiveItem(items);
        } else if (e.key === 'Enter' && activeIndex >= 0 && items[activeIndex]) {
            e.preventDefault();
            items[activeIndex].click();
        }
    });

    function updateActiveItem(items) {
        items.forEach((item, i) => {
            item.classList.toggle('active', i === activeIndex);
            if (i === activeIndex) {
                item.scrollIntoView({ block: 'nearest' });
            }
        });
    }

    // Search input handler
    searchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();
        activeIndex = -1;

        if (query.length < 2) {
            suggestionsBox.innerHTML = '';
            suggestionsBox.classList.remove('visible');
            return;
        }

        const matches = searchData.filter(item =>
            item.title.toLowerCase().includes(query) ||
            item.category.toLowerCase().includes(query)
        );

        if (matches.length === 0) {
            suggestionsBox.innerHTML = `
                <div class="search-no-results">
                    <span class="search-no-results-icon">🔍</span>
                    <span>No results for "<strong>${query}</strong>"</span>
                </div>
            `;
            suggestionsBox.classList.add('visible');
            return;
        }

        // Group by category
        const grouped = {};
        matches.forEach(item => {
            if (!grouped[item.category]) grouped[item.category] = [];
            grouped[item.category].push(item);
        });

        let html = '';
        for (const [category, items] of Object.entries(grouped)) {
            html += `<div class="search-category-label">${category}</div>`;
            items.forEach(item => {
                const highlighted = item.title.replace(
                    new RegExp(`(${query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')})`, 'gi'),
                    '<mark>$1</mark>'
                );
                html += `
                    <a href="${item.link}" class="search-suggestion-item" data-link="${item.link}">
                        <span class="suggestion-icon">${item.icon}</span>
                        <div class="suggestion-text">
                            <span class="suggestion-title">${highlighted}</span>
                            <span class="suggestion-category">${item.category}</span>
                        </div>
                        <svg class="suggestion-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                `;
            });
        }

        suggestionsBox.innerHTML = html;
        suggestionsBox.classList.add('visible');

        // Click handler for suggestions
        suggestionsBox.querySelectorAll('.search-suggestion-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const link = this.getAttribute('data-link');
                closeSearch();
                if (link.startsWith('#')) {
                    const el = document.querySelector(link);
                    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    window.location.href = link;
                }
            });
        });
    });
});
</script>
