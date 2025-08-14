<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | media', './', 'media.php');

?>

<main>

    <!-- Hero Section -->
    <section class="hero-section heroMedia">
        <div class="container">
            <div class="mediaMainDiv">
                <div class="hero-content text-center">
                    <h1 class="display-4 fw-bold mb-3">Media Center</h1>
                    <p class="lead mb-4">Stay updated with Numina Pharmaceuticals' latest news, press releases, and announcements</p>
                    <p class="h5 mb-0">Shaping Healthier Tomorrows, Today</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-5">
        <div class="container">
            <div class="media-filter text-center">
                <h4 class="mb-3">Filter by Category</h4>
                <button class="filter-btn " data-filter="all">All News</button>
                <button class="filter-btn" data-filter="press-releases">Press Releases</button>
                <button class="filter-btn" data-filter="announcements">Announcements</button>
                <button class="filter-btn" data-filter="awards">Awards & Recognition</button>
                <button class="filter-btn" data-filter="research">Research & Development</button>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Latest News & Updates</h2>

            <div class="row g-4">
                <!-- Featured News -->
                <div class="col-lg-8">
                    <div class="media-card">
                        <div class="card-header">
                            <div class="media-date">
                                <i class="fas fa-calendar-alt me-2"></i>August 14, 2025
                            </div>
                            <h3 class="media-title">Numina Pharmaceuticals Expands Manufacturing Capacity with New State-of-the-Art Facility</h3>
                        </div>
                        <div class="card-body p-4">
                            <p class="media-excerpt">Numina Pharmaceuticals announces the inauguration of its new manufacturing facility, increasing production capacity by 40% to meet growing global demand for quality generic medicines. The facility incorporates advanced automated systems and precision tools, reinforcing our commitment to manufacturing excellence.</p>
                            <a href="#" class="btn btn-primary-custom-media mt-3">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Updates -->
                <div class="col-lg-4">
                    <div class="media-card mb-4">
                        <div class="card-body p-3">
                            <div class="media-date mb-2">August 10, 2025</div>
                            <h5 class="media-title">WHO Certification Renewal</h5>
                            <p class="media-excerpt">Successfully renewed WHO certification, maintaining our commitment to international quality standards.</p>
                            <a href="#" class="btn btn-sm btn-primary-custom-media">Details</a>
                        </div>
                    </div>

                    <!-- <div class="media-card">
                        <div class="card-body p-3">
                            <div class="media-date mb-2">August 5, 2025</div>
                            <h5 class="media-title">R&D Breakthrough</h5>
                            <p class="media-excerpt">New oncology research milestone achieved in our advanced research facility.</p>
                            <a href="#" class="btn btn-sm btn-primary-custom-media">Learn More</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Press Releases Archive -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Press Releases Archive</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">July 2025</div>
                            <h5 class="media-title">Partnership with Global Healthcare Leaders</h5>
                            <p class="media-excerpt">Numina Pharmaceuticals announces strategic partnerships to enhance global reach and pharmaceutical innovation.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">Read Full Release</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">June 2025</div>
                            <h5 class="media-title">ISO Certification Achievement</h5>
                            <p class="media-excerpt">Received additional ISO certifications reflecting our unwavering commitment to quality management systems.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">May 2025</div>
                            <h5 class="media-title">Community Health Initiative Launch</h5>
                            <p class="media-excerpt">Launching comprehensive healthcare programs to create positive change in communities across India.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">April 2025</div>
                            <h5 class="media-title">Research Excellence Award</h5>
                            <p class="media-excerpt">Honored with prestigious research excellence award for breakthrough developments in infectious diseases.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">March 2025</div>
                            <h5 class="media-title">New Product Line Launch</h5>
                            <p class="media-excerpt">Introduction of innovative generic medicines focusing on immunology and respiratory care solutions.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">View Products</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media-card">
                        <div class="card-body p-4">
                            <div class="media-date mb-2">February 2025</div>
                            <h5 class="media-title">Expansion into New Markets</h5>
                            <p class="media-excerpt">Strategic expansion into emerging markets to deliver quality healthcare products to millions worldwide.</p>
                            <a href="#" class="btn btn-primary-custom-media btn-sm">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary-custom-media btn-lg">View All Press Releases <i class="fas fa-archive ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Media Highlights</h2>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <span class="stat-number">150+</span>
                        <div class="stat-label">Press Releases</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <span class="stat-number">25+</span>
                        <div class="stat-label">Awards Received</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <span class="stat-number">50+</span>
                        <div class="stat-label">Media Partnerships</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <span class="stat-number">1000+</span>
                        <div class="stat-label">News Mentions</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="download-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <h2 class="mb-3">Media Resources</h2>
                    <p class="lead">Download our latest company materials, logos, and press kits for media use.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="download-card">
                                <i class="fas fa-file-pdf download-icon"></i>
                                <h5>Press Kit</h5>
                                <p class="media-excerpt mb-3">Complete media information package</p>
                                <a href="#" class="btn btn-primary-custom-media">Download PDF</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="download-card">
                                <i class="fas fa-images download-icon"></i>
                                <h5>Logo Package</h5>
                                <p class="media-excerpt mb-3">High-resolution logos and brand assets</p>
                                <a href="#" class="btn btn-primary-custom-media">Download ZIP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Media Section -->
    <section class="contact-media">
        <div class="container">
            <h2 class="section-title text-center mb-5">Media Contacts</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-card">
                        <i class="fas fa-newspaper contact-icon"></i>
                        <h5>Press Inquiries</h5>
                        <p class="media-excerpt" style="color: #fff;">For general media questions and press releases</p>
                        <a href="mailto:press@numinapharma.com" class="btn btn-primary-custom">Contact</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-card">
                        <i class="fas fa-microphone contact-icon"></i>
                        <h5>Interview Requests</h5>
                        <p class="media-excerpt" style="color: #fff;">Schedule interviews with our executives</p>
                        <a href="mailto:media@numinapharma.com" class="btn btn-primary-custom">Request</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-card">
                        <i class="fas fa-camera contact-icon"></i>
                        <h5>Photo/Video</h5>
                        <p class="media-excerpt" style="color: #fff;">High-resolution images and video content</p>
                        <a href="mailto:marketing@numinapharma.com" class="btn btn-primary-custom">Access</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-card">
                        <i class="fas fa-chart-line contact-icon"></i>
                        <h5>Financial Media</h5>
                        <p class="media-excerpt" style="color: #fff;">Investor relations and financial news</p>
                        <a href="mailto:investor@numinapharma.com" class="btn btn-primary-custom">Inquire</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>



<?php include('footer.php'); ?>