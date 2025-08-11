<!-- Header link in php -->
<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Investor', './', 'investor.php');

?>

 <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="hero-content">
            <h1>Investor Relations</h1>
            <p>Pioneering healthcare innovation with transparent governance and sustainable growth strategies for lasting stakeholder value</p>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="investor-nav">
        <div class="nav-container">
            <div class="nav-item-investor activeInvestorInvestor" onclick="showSection('overview')">Company Overview</div>
            <div class="nav-item-investor" onclick="showSection('financials')">Financial Performance</div>
            <div class="nav-item-investor" onclick="showSection('reports')">Reports & Filings</div>     
            <div class="nav-item-investor" onclick="showSection('governance')">Corporate Governance</div>
            <div class="nav-item-investor" onclick="showSection('contact')">Investor Contact</div>
        </div>
    </nav>

    <!-- Content Sections -->
    
    <!-- Overview Section -->
    <section class="content-section activeInvestor" id="overview">
        <div class="container">
            <h2 class="section-title">Company Overview</h2>
            
            <div class="overview-grid">
                <div class="company-intro">
                    <h2>Investment Proposition</h2>
                    <p>Numina Pharmaceuticals stands as a pioneering force in the pharmaceutical industry, driven by our commitment to advancing healthcare through innovative generic medicines and cutting-edge research. Our science-led approach focuses on four critical therapeutic areas: infectious diseases, HIV, immunology/respiratory, and oncology.</p>
                    <br>
                    <p>With WHO-GMP certified manufacturing facilities and a robust R&D pipeline, we deliver exceptional value to stakeholders while maintaining the highest standards of quality and regulatory compliance across global markets.</p>
                </div>
                
                <div class="ceo-quote">
                    <div class="quote-text">"We are building a sustainable pharmaceutical enterprise that not only delivers exceptional returns to our investors but also contributes meaningfully to global healthcare advancement through innovation and excellence."</div>
                    <div class="quote-author">- CEO, Numina Pharmaceuticals</div>
                </div>
            </div>

            <div class="metrics-showcase">
                <div class="metric-card">
                    <div class="metric-value">₹950+</div>
                    <div class="metric-label">Annual Revenue (Cr)</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">18%</div>
                    <div class="metric-label">EBITDA Margin</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">250+</div>
                    <div class="metric-label">Product Portfolio</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">30+</div>
                    <div class="metric-label">Global Markets</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">600+</div>
                    <div class="metric-label">Team Members</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Financials Section -->
    <section class="content-section" id="financials">
        <div class="container">
            <h2 class="section-title">Financial Performance</h2>
            
            <div class="stock-widget">
                <h3>Stock Performance</h3>
                <div class="stock-price">₹1,245.80</div>
                <div class="stock-change">+2.34% (↑₹28.50)</div>
                <p style="margin-top: 15px; opacity: 0.8;">BSE: NUMINA | NSE: NUMINAPHAR</p>
            </div>

            <div class="metrics-showcase">
                <div class="metric-card">
                    <div class="metric-value">₹950.2</div>
                    <div class="metric-label">Revenue (Cr) FY24</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">₹171.5</div>
                    <div class="metric-label">EBITDA (Cr)</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">₹89.3</div>
                    <div class="metric-label">PAT (Cr)</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">₹45.20</div>
                    <div class="metric-label">EPS (₹)</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">22%</div>
                    <div class="metric-label">ROE (%)</div>
                </div>
                <div class="metric-card">
                    <div class="metric-value">15%</div>
                    <div class="metric-label">Revenue Growth</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="content-section" id="reports">
        <div class="container">
            <h2 class="section-title">Reports & Filings</h2>
            
            <div class="documents-grid">
                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Annual Reports</h3>
                        <p>Comprehensive yearly performance</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">📊</span>
                            <span>Annual Report 2023-24</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📊</span>
                            <span>Annual Report 2022-23</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📊</span>
                            <span>Annual Report 2021-22</span>
                        </div>
                    </div>
                </div>

                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Quarterly Results</h3>
                        <p>Regular financial updates</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">📈</span>
                            <span>Q4 FY24 Results</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📈</span>
                            <span>Q3 FY24 Results</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📈</span>
                            <span>Q2 FY24 Results</span>
                        </div>
                    </div>
                </div>

                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Presentations</h3>
                        <p>Investor briefings</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Investor Presentation Q4 FY24</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Corporate Presentation</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Analyst Meet Presentation</span>
                        </div>
                    </div>
                </div>

                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Regulatory Filings</h3>
                        <p>Compliance documents</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">⚖️</span>
                            <span>Board Meeting Outcomes</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">⚖️</span>
                            <span>Corporate Announcements</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">⚖️</span>
                            <span>Shareholding Pattern</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Governance Section -->
    <section class="content-section" id="governance">
        <div class="container">
            <h2 class="section-title">Corporate Governance</h2>
            
            <div class="overview-grid">
                <div class="company-intro">
                    <h2>Our Commitment</h2>
                    <p>At Numina Pharmaceuticals, corporate governance forms the cornerstone of our business operations. We maintain the highest standards of transparency, accountability, and ethical conduct in all our business dealings.</p>
                    <br>
                    <p>Our governance framework ensures protection of stakeholder interests while promoting sustainable business growth and maintaining regulatory compliance across all operational jurisdictions.</p>
                </div>
                
                <div class="ceo-quote">
                    <div class="quote-text">"Strong governance is not just about compliance - it's about building trust, ensuring sustainability, and creating long-term value for all our stakeholders."</div>
                    <div class="quote-author">- Chairman, Numina Pharmaceuticals</div>
                </div>
            </div>

            <div class="documents-grid">
                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Policies</h3>
                        <p>Governance frameworks</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Code of Conduct</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>CSR Policy</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Risk Management Policy</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">📋</span>
                            <span>Whistle Blower Policy</span>
                        </div>
                    </div>
                </div>

                <div class="doc-category">
                    <div class="doc-header">
                        <h3>Board Information</h3>
                        <p>Leadership structure</p>
                    </div>
                    <div class="doc-list">
                        <div class="doc-item">
                            <span class="doc-icon">👥</span>
                            <span>Board of Directors</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">👥</span>
                            <span>Committee Composition</span>
                        </div>
                        <div class="doc-item">
                            <span class="doc-icon">👥</span>
                            <span>Key Management Personnel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="content-section" id="contact">
        <div class="container">
            <h2 class="section-title">Investor Contact</h2>
            
            <div class="contact-layout">
                <div class="contact-card">
                    <h3>Company Information</h3>
                    <div class="contact-info">
                        <p><strong>Numina Pharmaceuticals Private Limited</strong></p>
                        <p>Corporate Office</p>
                        <p>[Your Complete Address]</p>
                        <p>City, State - PIN Code</p>
                        <br>
                        <p>📞 Phone: +91-XXX-XXXXXXX</p>
                        <p>✉️ Email: investors@numinapharma.com</p>
                        <p>🌐 Website: www.numinapharma.com</p>
                        <br>
                        <p><strong>CIN:</strong> [Company Identification Number]</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>Key Personnel</h3>
                    <div class="contact-info">
                        <p><strong>Chief Financial Officer</strong></p>
                        <p>[CFO Name]</p>
                        <p>✉️ cfo@numinapharma.com</p>
                        <br>
                        <p><strong>Company Secretary</strong></p>
                        <p>[CS Name]</p>
                        <p>✉️ cs@numinapharma.com</p>
                        <br>
                        <p><strong>Investor Relations Officer</strong></p>
                        <p>[IRO Name]</p>
                        <p>✉️ investor.relations@numinapharma.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-layout" style="margin-top: 40px;">
                <div class="contact-card">
                    <h3>Registrar & Transfer Agent</h3>
                    <div class="contact-info">
                        <p><strong>[R&T Agent Name]</strong></p>
                        <p>[Agent Address]</p>
                        <p>City, State - PIN Code</p>
                        <br>
                        <p>📞 Phone: +91-XXX-XXXXXXX</p>
                        <p>✉️ Email: [agent email]</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>Stock Exchange Information</h3>
                    <div class="contact-info">
                        <p><strong>BSE Limited</strong></p>
                        <p>Scrip Code: [BSE Code]</p>
                        <br>
                        <p><strong>National Stock Exchange</strong></p>
                        <p>Symbol: NUMINAPHAR</p>
                        <br>
                        <p><strong>ISIN:</strong> [ISIN Number]</p>
                        <p><strong>Demat:</strong> NSDL & CDSL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- footer link in php -->
<?php include('footer.php'); ?>
   <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('activeInvestor'));

            // Remove activeInvestor class from nav items
            const navItems = document.querySelectorAll('.nav-item-investor');
            navItems.forEach(item => item.classList.remove('activeInvestor'));

            // Show selected section
            document.getElementById(sectionId).classList.add('activeInvestor');

            // Add activeInvestor class to clicked nav item
            event.target.classList.add('activeInvestor');

            // Scroll to top of section
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }

        // Add smooth scrolling and dynamic effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate metric cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Apply animation to metric cards
            const metricCards = document.querySelectorAll('.metric-card');
            metricCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        });
    </script>