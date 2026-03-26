@extends('layouts.app')

@section('title', 'Dashboard Preview - Gold Berries Platform')

@section('content')

<!-- ============================================ HERO SECTION ============================================ -->
<section class="dashboard-hero">
    <div class="container">
        <div class="section-header">
            <h1 class="hero-title">Experience Our Dashboard</h1>
            <p class="hero-subtitle">Powerful analytics and intuitive controls in one unified interface</p>
        </div>
    </div>
</section>

<!-- ============================================ DASHBOARD PREVIEW ============================================ -->
<section class="dashboard-preview-section">
    <div class="container">
        <div class="dashboard-container" data-animation="fadeInUp">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <div class="dashboard-title">
                    <h2>Payroll Dashboard</h2>
                    <p>Welcome back, Admin</p>
                </div>
                <div class="dashboard-filters">
                    <select class="filter-select">
                        <option>This Month</option>
                        <option>Last Month</option>
                        <option>Last 3 Months</option>
                    </select>
                </div>
            </div>

            <!-- Key Metrics -->
            <div class="metrics-grid">
                <div class="metric-card">
                    <div class="metric-header">
                        <span class="metric-icon">💰</span>
                        <span class="metric-label">Total Payroll</span>
                    </div>
                    <div class="metric-value">$250,000</div>
                    <div class="metric-change">↑ 12% from last month</div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <span class="metric-icon">👥</span>
                        <span class="metric-label">Active Employees</span>
                    </div>
                    <div class="metric-value">60</div>
                    <div class="metric-change">+3 new this month</div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <span class="metric-icon">✓</span>
                        <span class="metric-label">Processing Status</span>
                    </div>
                    <div class="metric-value">100%</div>
                    <div class="metric-change">All payrolls processed</div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <span class="metric-icon">⏱️</span>
                        <span class="metric-label">Processing Time</span>
                    </div>
                    <div class="metric-value">2h 15m</div>
                    <div class="metric-change">Saved 85% time</div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-grid">
                <!-- Payroll Trend Chart -->
                <div class="chart-card">
                    <h3>Payroll Trend</h3>
                    <div class="chart-area">
                        <svg class="line-chart" viewBox="0 0 400 200">
                            <polyline points="0,150 50,120 100,100 150,110 200,80 250,90 300,60 350,70 400,40" />
                        </svg>
                    </div>
                    <div class="chart-legend">
                        <span>Last 8 weeks</span>
                    </div>
                </div>

                <!-- Department Distribution -->
                <div class="chart-card">
                    <h3>Department Distribution</h3>
                    <div class="chart-area">
                        <div class="pie-chart">
                            <div class="pie-segment" style="--percentage: 35%; --color: #D4AF37;">
                                <span class="segment-label">Sales<br>35%</span>
                            </div>
                            <div class="pie-segment" style="--percentage: 30%; --color: #2196F3;">
                                <span class="segment-label">Engineering<br>30%</span>
                            </div>
                            <div class="pie-segment" style="--percentage: 20%; --color: #4CAF50;">
                                <span class="segment-label">HR<br>20%</span>
                            </div>
                            <div class="pie-segment" style="--percentage: 15%; --color: #FFC107;">
                                <span class="segment-label">Admin<br>15%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attendance Overview -->
                <div class="chart-card">
                    <h3>Attendance This Week</h3>
                    <div class="attendance-chart">
                        <div class="day-bar">
                            <span class="day">Mon</span>
                            <div class="bar-container">
                                <div class="bar" style="height: 95%;"></div>
                            </div>
                            <span class="value">57/60</span>
                        </div>
                        <div class="day-bar">
                            <span class="day">Tue</span>
                            <div class="bar-container">
                                <div class="bar" style="height: 100%;"></div>
                            </div>
                            <span class="value">60/60</span>
                        </div>
                        <div class="day-bar">
                            <span class="day">Wed</span>
                            <div class="bar-container">
                                <div class="bar" style="height: 83%;"></div>
                            </div>
                            <span class="value">50/60</span>
                        </div>
                        <div class="day-bar">
                            <span class="day">Thu</span>
                            <div class="bar-container">
                                <div class="bar" style="height: 100%;"></div>
                            </div>
                            <span class="value">60/60</span>
                        </div>
                        <div class="day-bar">
                            <span class="day">Fri</span>
                            <div class="bar-container">
                                <div class="bar" style="height: 90%;"></div>
                            </div>
                            <span class="value">54/60</span>
                        </div>
                    </div>
                </div>

                <!-- Leave Balance -->
                <div class="chart-card">
                    <h3>Leave Balances</h3>
                    <div class="leave-items">
                        <div class="leave-item">
                            <div class="leave-info">
                                <span class="leave-name">Annual Leave</span>
                                <span class="leave-balance">12/15 days</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="leave-item">
                            <div class="leave-info">
                                <span class="leave-name">Sick Leave</span>
                                <span class="leave-balance">8/10 days</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="leave-item">
                            <div class="leave-info">
                                <span class="leave-name">Personal Leave</span>
                                <span class="leave-balance">3/5 days</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="activities-card">
                <h3>Recent Activities</h3>
                <div class="activities-list">
                    <div class="activity-item">
                        <span class="activity-icon">✓</span>
                        <div class="activity-content">
                            <p class="activity-title">Payroll Processed</p>
                            <p class="activity-time">2024-03-25 at 2:45 PM</p>
                        </div>
                    </div>
                    <div class="activity-item">
                        <span class="activity-icon">👤</span>
                        <div class="activity-content">
                            <p class="activity-title">New Employee Added</p>
                            <p class="activity-time">2024-03-24 at 10:30 AM</p>
                        </div>
                    </div>
                    <div class="activity-item">
                        <span class="activity-icon">📋</span>
                        <div class="activity-content">
                            <p class="activity-title">Report Generated</p>
                            <p class="activity-time">2024-03-23 at 3:15 PM</p>
                        </div>
                    </div>
                    <div class="activity-item">
                        <span class="activity-icon">⚙️</span>
                        <div class="activity-content">
                            <p class="activity-title">Settings Updated</p>
                            <p class="activity-time">2024-03-22 at 11:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ FEATURES CALLOUT ============================================ -->
<section class="dashboard-features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Powerful Dashboard Features</h2>
            <p class="section-subtitle">Everything you need to manage payroll effectively</p>
        </div>

        <div class="features-grid">
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">📊</span>
                <h4>Real-time Analytics</h4>
                <p>Access instant insights into your payroll metrics, costs, and trends</p>
            </div>
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">🎯</span>
                <h4>Custom Reports</h4>
                <p>Generate tailored reports for any time period or department</p>
            </div>
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">🔔</span>
                <h4>Smart Alerts</h4>
                <p>Get instant notifications for important payroll events</p>
            </div>
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">⚡</span>
                <h4>Quick Actions</h4>
                <p>Process common tasks with a single click</p>
            </div>
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">📱</span>
                <h4>Mobile Access</h4>
                <p>Manage payroll on the go with our mobile app</p>
            </div>
            <div class="feature" data-animation="slideInUp">
                <span class="feature-icon">🔒</span>
                <h4>Secure Access</h4>
                <p>Role-based controls ensure data security</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ CTA SECTION ============================================ -->
<section class="dashboard-cta">
    <div class="container">
        <h2>Ready to Transform Your Payroll?</h2>
        <p>Start your free trial and experience the power of Gold Berries</p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get Started</a>
            <a href="{{ route('pricing') }}" class="btn btn-secondary btn-lg">View Pricing</a>
        </div>
    </div>
</section>

<style>
/* Dashboard Page Styles */
.dashboard-hero {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.8), rgba(7, 21, 33, 0.9));
    padding: 100px 0;
    text-align: center;
}

.dashboard-preview-section {
    padding: 100px 0;
}

.dashboard-container {
    background: linear-gradient(135deg, rgba(26, 47, 71, 0.5), rgba(7, 21, 33, 0.7));
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 12px;
    padding: 35px;
    backdrop-filter: blur(10px);
}

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(212, 175, 55, 0.2);
}

.dashboard-title h2 {
    color: #D4AF37;
    font-size: 28px;
    margin-bottom: 5px;
}

.dashboard-title p {
    color: #b0b0b0;
    font-size: 14px;
}

.filter-select {
    padding: 10px 15px;
    background: rgba(7, 21, 33, 0.8);
    color: #D4AF37;
    border: 1px solid rgba(212, 175, 55, 0.3);
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 35px;
}

.metric-card {
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 20px;
    border-radius: 8px;
}

.metric-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
}

.metric-icon {
    font-size: 28px;
}

.metric-label {
    color: #999999;
    font-size: 13px;
}

.metric-value {
    font-size: 32px;
    color: #D4AF37;
    font-weight: 700;
    margin-bottom: 5px;
}

.metric-change {
    color: #4CAF50;
    font-size: 13px;
}

.charts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
    margin-bottom: 35px;
}

.chart-card {
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 20px;
    border-radius: 8px;
}

.chart-card h3 {
    color: #D4AF37;
    font-size: 16px;
    margin-bottom: 15px;
}

.chart-area {
    height: 150px;
    margin-bottom: 10px;
}

.line-chart {
    width: 100%;
    height: 100%;
    fill: none;
    stroke: #D4AF37;
    stroke-width: 2;
    filter: drop-shadow(0 0 4px rgba(212, 175, 55, 0.3));
}

.pie-chart {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 50%;
}

.pie-segment {
    position: absolute;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: var(--color);
    opacity: 0.8;
}

.segment-label {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    color: white;
    font-weight: 600;
    text-align: center;
}

.attendance-chart {
    display: flex;
    justify-content: space-around;
    align-items: flex-end;
    height: 150px;
    gap: 10px;
}

.day-bar {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    flex: 1;
}

.day {
    color: #999999;
    font-size: 12px;
    font-weight: 600;
}

.bar-container {
    width: 30px;
    height: 100px;
    background: rgba(212, 175, 55, 0.1);
    border-radius: 4px;
    overflow: hidden;
}

.bar {
    width: 100%;
    background: linear-gradient(180deg, #D4AF37, #e8c556);
    border-radius: 4px;
}

.value {
    color: #b0b0b0;
    font-size: 11px;
}

.leave-items {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.leave-item {
    background: rgba(212, 175, 55, 0.05);
    padding: 12px;
    border-radius: 6px;
}

.leave-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
}

.leave-name {
    color: #D4AF37;
    font-size: 13px;
    font-weight: 600;
}

.leave-balance {
    color: #b0b0b0;
    font-size: 13px;
}

.progress-bar {
    width: 100%;
    height: 6px;
    background: rgba(212, 175, 55, 0.1);
    border-radius: 3px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #D4AF37, #e8c556);
    transition: width 0.3s ease;
}

.activities-card {
    background: rgba(212, 175, 55, 0.05);
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 20px;
    border-radius: 8px;
}

.activities-card h3 {
    color: #D4AF37;
    font-size: 16px;
    margin-bottom: 15px;
}

.activities-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.activity-item {
    display: flex;
    gap: 12px;
    padding: 12px;
    background: rgba(212, 175, 55, 0.02);
    border-radius: 6px;
}

.activity-icon {
    font-size: 20px;
    flex-shrink: 0;
}

.activity-content {
    flex: 1;
}

.activity-title {
    color: #D4AF37;
    font-size: 14px;
    margin: 0;
    font-weight: 600;
}

.activity-time {
    color: #999999;
    font-size: 12px;
    margin: 0;
}

.dashboard-features {
    padding: 100px 0;
    background: rgba(26, 47, 71, 0.3);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.feature {
    background: linear-gradient(135deg, rgba(11, 28, 44, 0.6), rgba(7, 21, 33, 0.8));
    border: 1px solid rgba(212, 175, 55, 0.2);
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
}

.feature:hover {
    transform: translateY(-8px);
    border-color: rgba(212, 175, 55, 0.5);
}

.feature-icon {
    font-size: 48px;
    display: block;
    margin-bottom: 15px;
}

.feature h4 {
    color: #D4AF37;
    font-size: 18px;
    margin-bottom: 12px;
}

.feature p {
    color: #b0b0b0;
    line-height: 1.6;
}

.dashboard-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(26, 47, 71, 0.3));
    text-align: center;
}

.dashboard-cta h2 {
    font-size: 42px;
    color: #D4AF37;
    margin-bottom: 15px;
}

.dashboard-cta p {
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

/* charts responsive */
@media (max-width: 768px) {
    .dashboard-hero {
        padding: 80px 0;
    }
    
    .dashboard-header {
        flex-direction: column;
        gap: 20px;
    }
    
    .charts-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
}
</style>

@endsection
