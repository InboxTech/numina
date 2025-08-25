<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | career', './', 'career.php');

?>

<main>
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2> Career</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i> Career
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <!-- Why Join Us Section -->
    <section class="why-join">
        <div class="container">
            <h2 class="section-title">Why Choose Numina Pharmaceuticals?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🏥</div>
                    <h3>Healthcare Impact</h3>
                    <p>Contribute to life-saving medicines that improve healthcare outcomes for millions of patients globally.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🚀</div>
                    <h3>Innovation Focus</h3>
                    <p>Work with cutting-edge technology and participate in groundbreaking research across infectious diseases, HIV, immunology, and oncology.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🎓</div>
                    <h3>Growth Opportunities</h3>
                    <p>Advance your career with continuous learning, professional development programs, and leadership opportunities.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🌍</div>
                    <h3>Global Reach</h3>
                    <p>Be part of an international team working with top pharma brands worldwide, expanding your global perspective.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🏆</div>
                    <h3>Quality Excellence</h3>
                    <p>Work in ISO, GMP, and WHO certified facilities with world-class manufacturing and research standards.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">💼</div>
                    <h3>Competitive Benefits</h3>
                    <p>Enjoy comprehensive benefits, competitive compensation, and a supportive work environment that values work-life balance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings Section -->
    <section class="openings">
        <div class="container">
            <h2 class="section-title">Current Openings</h2>
    

            <div class="row">
                <div class="careeerCol col-lg-4">
                    <!-- Quality Assurance Manager -->
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-title">
                            <h3>Quality Assurance Manager</h3>
                            <div class="job-meta">
                                <span>📅 Last Date: 2025-09-30</span>
                                <span>💼 Experience: 8+ years</span>
                                <span>📍 Location: Mumbai</span>
                            </div>
                        </div>
                    </div>
                    <div class="job-description">
                        <p>Lead our quality assurance team to ensure all pharmaceutical products meet international standards. Oversee GMP compliance, manage quality systems, and drive continuous improvement initiatives across manufacturing operations. You'll be responsible for maintaining WHO and ISO certifications while ensuring product safety and efficacy.</p>
                    </div>
                    <div class="skills">
                        <span class="skills-label">Required Skills:</span>
                        <div class="skills-list">
                            <span class="skill-tag">GMP</span>
                            <span class="skill-tag">WHO Guidelines</span>
                            <span class="skill-tag">ISO Standards</span>
                            <span class="skill-tag">Pharmaceutical QA</span>
                            <span class="skill-tag">Regulatory Compliance</span>
                            <span class="skill-tag">CAPA</span>
                            <span class="skill-tag">Validation</span>
                        </div>
                    </div>
                    <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                </div>
                </div>
                <div class="careeerCol col-lg-4">

                <!-- Research Scientist -->
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-title">
                            <h3>Research Scientist - Oncology</h3>
                            <div class="job-meta">
                                <span>📅 Last Date: 2025-09-15</span>
                                <span>💼 Experience: 5-7 years</span>
                                <span>📍 Location: Hyderabad</span>
                            </div>
                        </div>
                    </div>
                    <div class="job-description">
                        <p>Join our cutting-edge oncology research team to develop innovative cancer treatments. Conduct preclinical studies, design experiments, and collaborate with cross-functional teams to advance drug development from concept to clinical trials. You'll work on breakthrough therapies that have the potential to save lives globally.</p>
                    </div>
                    <div class="skills">
                        <span class="skills-label">Required Skills:</span>
                        <div class="skills-list">
                            <span class="skill-tag">Oncology Research</span>
                            <span class="skill-tag">Drug Development</span>
                            <span class="skill-tag">Clinical Trials</span>
                            <span class="skill-tag">Molecular Biology</span>
                            <span class="skill-tag">PhD/MS</span>
                            <span class="skill-tag">Data Analysis</span>
                        </div>
                    </div>
                    <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                </div>
                </div>
                <div class="careeerCol col-lg-4">
                    <!-- Production Manager -->
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-title">
                                <h3>Production Manager</h3>
                                <div class="job-meta">
                                    <span>📅 Last Date: 2025-10-15</span>
                                    <span>💼 Experience: 6-10 years</span>
                                    <span>📍 Location: Ahmedabad</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Oversee pharmaceutical manufacturing operations in our state-of-the-art facility. Manage production schedules, ensure efficient resource utilization, and lead teams to meet quality and safety standards. Drive process improvements and implement lean manufacturing principles to optimize productivity while maintaining GMP compliance.</p>
                        </div>
                        <div class="skills">
                            <span class="skills-label">Required Skills:</span>
                            <div class="skills-list">
                                <span class="skill-tag">Pharmaceutical Manufacturing</span>
                                <span class="skill-tag">Production Planning</span>
                                <span class="skill-tag">Team Management</span>
                                <span class="skill-tag">Lean Manufacturing</span>
                                <span class="skill-tag">GMP</span>
                                <span class="skill-tag">Process Optimization</span>
                            </div>
                        </div>
                        <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                    </div>
                </div>
                <div class="careeerCol col-lg-4">
                    <!-- Regulatory Affairs Specialist -->
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-title">
                                <h3>Regulatory Affairs Specialist</h3>
                                <div class="job-meta">
                                    <span>📅 Last Date: 2025-09-25</span>
                                    <span>💼 Experience: 4-6 years</span>
                                    <span>📍 Location: Delhi</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Navigate complex regulatory landscapes to ensure smooth product approvals and market access. Prepare and submit regulatory dossiers, maintain compliance with CDSCO and international guidelines, and support product lifecycle management. Play a crucial role in bringing life-saving medicines to market faster.</p>
                        </div>
                        <div class="skills">
                            <span class="skills-label">Required Skills:</span>
                            <div class="skills-list">
                                <span class="skill-tag">Drug Registration</span>
                                <span class="skill-tag">CDSCO</span>
                                <span class="skill-tag">FDA Guidelines</span>
                                <span class="skill-tag">Regulatory Submissions</span>
                                <span class="skill-tag">CTD Format</span>
                                <span class="skill-tag">Product Licensing</span>
                            </div>
                        </div>
                        <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                    </div>
                </div>
                <div class="careeerCol col-lg-4">
                    <!-- Business Development Manager -->
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-title">
                                <h3>Business Development Manager</h3>
                                <div class="job-meta">
                                    <span>📅 Last Date: 2025-10-05</span>
                                    <span>💼 Experience: 7-10 years</span>
                                    <span>📍 Location: Mumbai</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Drive strategic partnerships and expand our global footprint in pharmaceutical markets. Identify new business opportunities, negotiate partnerships with international pharma companies, and develop market entry strategies. Build lasting relationships that will fuel our company's growth and impact worldwide.</p>
                        </div>
                        <div class="skills">
                            <span class="skills-label">Required Skills:</span>
                            <div class="skills-list">
                                <span class="skill-tag">Pharma Business Development</span>
                                <span class="skill-tag">Strategic Planning</span>
                                <span class="skill-tag">Client Relationship</span>
                                <span class="skill-tag">Market Analysis</span>
                                <span class="skill-tag">Negotiation</span>
                                <span class="skill-tag">Global Markets</span>
                            </div>
                        </div>
                        <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                    </div>
                </div>
                <div class="careeerCol col-lg-4">
                    <!-- Analytical Chemist -->
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-title">
                                <h3>Analytical Chemist</h3>
                                <div class="job-meta">
                                    <span>📅 Last Date: 2025-09-20</span>
                                    <span>💼 Experience: 3-5 years</span>
                                    <span>📍 Location: Bangalore</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-description">
                            <p>Perform critical analytical testing to ensure drug quality, safety, and efficacy. Develop and validate analytical methods, conduct stability studies, and support product development activities. Work with advanced instrumentation and contribute to regulatory submissions for new drug applications.</p>
                        </div>
                        <div class="skills">
                            <span class="skills-label">Required Skills:</span>
                            <div class="skills-list">
                                <span class="skill-tag">HPLC</span>
                                <span class="skill-tag">LCMS</span>
                                <span class="skill-tag">Method Development</span>
                                <span class="skill-tag">Validation</span>
                                <span class="skill-tag">Stability Studies</span>
                                <span class="skill-tag">USP</span>
                                <span class="skill-tag">Pharmaceutical Analysis</span>
                            </div>
                        </div>
                        <a href="careerDetails.php" class="apply-btn mt-3">Apply Now</a>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Application Modal -->
    <div id="applicationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeApplication()">&times;</span>
            <h2 id="modalJobTitle">Apply for Position</h2>
            <form id="applicationForm" onsubmit="submitApplication(event)">
                <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="experience">Years of Experience *</label>
                    <select id="experience" name="experience" required>
                        <option value="">Select Experience</option>
                        <option value="0-2">0-2 years</option>
                        <option value="3-5">3-5 years</option>
                        <option value="6-8">6-8 years</option>
                        <option value="9-12">9-12 years</option>
                        <option value="12+">12+ years</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="currentLocation">Current Location *</label>
                    <input type="text" id="currentLocation" name="currentLocation" required>
                </div>

                <div class="form-group">
                    <label for="resume">Resume *</label>
                    <div class="file-upload">
                        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                        <div class="file-upload-btn">
                            📁 Click to upload your resume (PDF, DOC, DOCX)
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="coverLetter">Cover Letter</label>
                    <textarea id="coverLetter" name="coverLetter" placeholder="Tell us why you're the perfect fit for this role..."></textarea>
                </div>

                <button type="submit" class="submit-btn">Submit Application</button>
            </form>
        </div>
    </div>


</main>



<?php include('footer.php'); ?>