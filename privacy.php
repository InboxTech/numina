<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Privacy notice', './', 'privacy.php');

?>

<main>
        <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Privacy</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>  Privacy
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
   <section class="mainSectionPrivacy">
           <div class="container">
        <div class="privacy-document">
            <div class="header">
                <h1>Privacy Policy</h1>
                <div class="company-name">Numina Pharmaceuticals</div>
                <div class="effective-date">Effective Date: August 2025</div>
            </div>

            <div class="section">
                <h2>1. Introduction</h2>
                <p>This Privacy Policy outlines how Numina Pharmaceuticals ("Numina," "we," "us," or "the Company") collects, uses, protects, and manages personal information and data. This policy applies to all employees, contractors, business partners, customers, website visitors, and stakeholders who interact with our company.</p>
                
                <div class="highlight-box">
                    <p><strong>Our Commitment:</strong> As a leading pharmaceutical manufacturing company in India, we are committed to maintaining the highest standards of data protection and privacy in accordance with applicable laws and regulations.</p>
                </div>
            </div>

            <div class="section">
                <h2>2. Scope of Application</h2>
                <p>This Privacy Policy applies to:</p>
                <ul>
                    <li>All employees, contractors, and temporary staff of Numina Pharmaceuticals</li>
                    <li>Business partners, vendors, and service providers</li>
                    <li>Customers, healthcare professionals, and distributors</li>
                    <li>Website visitors and users of our digital platforms</li>
                    <li>All facilities, subsidiaries, and affiliates of Numina Pharmaceuticals</li>
                </ul>
            </div>

            <div class="section">
                <h2>3. Information We Collect</h2>
                <h3>3.1 Personal Information</h3>
                <p>We may collect various types of personal information, including:</p>
                <ul>
                    <li>Contact information (name, address, phone number, email)</li>
                    <li>Professional information (job title, company, medical license numbers for healthcare professionals)</li>
                    <li>Transaction and business relationship data</li>
                    <li>Website usage data and cookies</li>
                    <li>Communication records and correspondence</li>
                </ul>

                <h3>3.2 Sensitive Data</h3>
                <p>In the course of our pharmaceutical business, we may handle sensitive information including:</p>
                <ul>
                    <li>Medical and health-related information</li>
                    <li>Regulatory and compliance data</li>
                    <li>Research and development information</li>
                    <li>Financial and commercial data</li>
                </ul>
            </div>

            <div class="section">
                <h2>4. How We Use Your Information</h2>
                <p>Numina Pharmaceuticals uses collected information for legitimate business purposes, including:</p>
                <ul>
                    <li>Manufacturing and supplying pharmaceutical products</li>
                    <li>Managing business relationships and communications</li>
                    <li>Ensuring product quality and safety</li>
                    <li>Regulatory compliance and reporting</li>
                    <li>Research and development activities</li>
                    <li>Marketing and promotional activities (where consented)</li>
                    <li>Customer service and technical support</li>
                    <li>Legal and compliance obligations</li>
                </ul>
            </div>

            <div class="section">
                <h2>5. Data Protection and Security Measures</h2>
                <h3>5.1 Technical Safeguards</h3>
                <ul>
                    <li>Advanced encryption for data transmission and storage</li>
                    <li>Multi-factor authentication for system access</li>
                    <li>Regular security audits and vulnerability assessments</li>
                    <li>Firewall protection and intrusion detection systems</li>
                    <li>Secure data centers with access controls</li>
                </ul>

                <h3>5.2 Administrative Safeguards</h3>
                <ul>
                    <li>Role-based access control (RBAC) systems</li>
                    <li>Regular employee training on data protection</li>
                    <li>Incident response and breach notification procedures</li>
                    <li>Data retention and secure disposal policies</li>
                    <li>Third-party vendor security assessments</li>
                </ul>
            </div>

            <div class="section">
                <h2>6. Data Sharing and Disclosure</h2>
                <p>Numina Pharmaceuticals may share information with:</p>
                <ul>
                    <li><strong>Regulatory authorities:</strong> As required for pharmaceutical compliance</li>
                    <li><strong>Business partners:</strong> Distributors, suppliers, and authorized dealers</li>
                    <li><strong>Service providers:</strong> Third-party vendors supporting our operations</li>
                    <li><strong>Healthcare professionals:</strong> For medical and scientific purposes</li>
                    <li><strong>Legal authorities:</strong> When required by law or legal proceedings</li>
                </ul>
                
                <div class="highlight-box">
                    <p><strong>Important:</strong> We do not sell personal information to third parties for commercial purposes. All data sharing is governed by strict contractual agreements and security requirements.</p>
                </div>
            </div>

            <div class="section">
                <h2>7. International Data Transfers</h2>
                <p>As a global pharmaceutical company, we may transfer data across borders for business operations. All international transfers are conducted with appropriate safeguards, including:</p>
                <ul>
                    <li>Standard contractual clauses</li>
                    <li>Adequacy decisions from relevant authorities</li>
                    <li>Binding corporate rules</li>
                    <li>Certification schemes and codes of conduct</li>
                </ul>
            </div>

            <div class="section">
                <h2>8. Data Retention</h2>
                <p>We retain personal information only for as long as necessary to fulfill business purposes and comply with legal obligations. Retention periods vary based on:</p>
                <ul>
                    <li>Regulatory requirements in pharmaceutical industry</li>
                    <li>Business relationship duration</li>
                    <li>Legal and contractual obligations</li>
                    <li>Legitimate business interests</li>
                </ul>
                <p>Data is securely disposed of when no longer required, using industry-standard methods including physical destruction of storage media.</p>
            </div>

            <div class="section">
                <h2>9. Your Rights</h2>
                <p>Depending on applicable laws, you may have rights regarding your personal information, including:</p>
                <ul>
                    <li><strong>Access:</strong> Request information about data we hold about you</li>
                    <li><strong>Correction:</strong> Request correction of inaccurate information</li>
                    <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                    <li><strong>Portability:</strong> Request transfer of your data</li>
                    <li><strong>Objection:</strong> Object to certain processing activities</li>
                    <li><strong>Restriction:</strong> Request limitation of processing</li>
                </ul>
            </div>

            <div class="section">
                <h2>10. Cookies and Website Analytics</h2>
                <p>Our website (numinapharma.com) uses cookies and similar technologies to:</p>
                <ul>
                    <li>Improve website functionality and user experience</li>
                    <li>Analyze website traffic and usage patterns</li>
                    <li>Personalize content and recommendations</li>
                    <li>Support marketing and advertising efforts</li>
                </ul>
                <p>You can manage cookie preferences through your browser settings.</p>
            </div>

            <div class="section">
                <h2>11. Incident Response</h2>
                <p>In case of a data security incident, we have established procedures to:</p>
                <ul>
                    <li>Immediately assess and contain the incident</li>
                    <li>Investigate the scope and impact</li>
                    <li>Notify relevant authorities within required timeframes</li>
                    <li>Inform affected individuals when necessary</li>
                    <li>Implement corrective measures to prevent recurrence</li>
                </ul>
            </div>

            <div class="section">
                <h2>12. Third-Party Links and Services</h2>
                <p>Our website may contain links to third-party websites or services. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies before providing personal information.</p>
            </div>

            <div class="section">
                <h2>13. Updates to This Policy</h2>
                <p>This Privacy Policy may be updated periodically to reflect changes in our practices, technology, legal requirements, or business operations. We will notify stakeholders of material changes through appropriate channels and update the effective date.</p>
            </div>

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Data Protection Officer / Privacy Team</strong></p>
                <p>Numina Pharmaceuticals</p>
                <p>Email: <a href="mailto:privacy@numinapharma.com">privacy@numinapharma.com</a></p>
                <p>Website: <a href="https://numinapharma.com">www.numinapharma.com</a></p>
                <p>Phone: [Your phone number]</p>
                
                <p style="margin-top: 20px;">For any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us using the information above. We are committed to addressing your inquiries promptly and transparently.</p>
            </div>

            
        </div>
    </div>
    </section>
</main>



<?php include('footer.php'); ?>