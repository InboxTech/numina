<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Terms of use', './', 'terms.php');

?>

<main>
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Terms</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i> Terms
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="terms-content">
            <h1 class="termsMainTitle">Terms of Use</h1>

            <div class="table-of-contents">
                <h3>Table of Contents</h3>
                <ul>
                    <li><a href="#agreement">1. Agreement to Terms</a></li>
                    <li><a href="#license">2. Use License</a></li>
                    <li><a href="#medical">3. Medical and Product Information Disclaimer</a></li>
                    <li><a href="#content">4. Website Content Disclaimer</a></li>
                    <li><a href="#liability">5. Limitation of Liability</a></li>
                    <li><a href="#conduct">6. User Conduct</a></li>
                    <li><a href="#ip">7. Intellectual Property Rights</a></li>
                    <li><a href="#links">8. Third-Party Links</a></li>
                    <li><a href="#privacy">9. Privacy and Data Protection</a></li>
                    <li><a href="#regulatory">10. Regulatory and Compliance Information</a></li>
                    <li><a href="#updates">11. Updates and Modifications</a></li>
                    <li><a href="#contact">12. Contact Information</a></li>
                    <li><a href="#governing">13. Governing Law and Jurisdiction</a></li>
                    <li><a href="#severability">14. Severability</a></li>
                    <li><a href="#entire">15. Entire Agreement</a></li>
                </ul>
            </div>

            <section id="agreement">
                <h2 class="termsTitle">1. Agreement to Terms</h2>
                <p>By accessing and using the Numina Pharmaceuticals website (numinapharma.com), you agree to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this website. The materials contained on this website are protected by applicable copyright and trademark law.</p>
            </section>

            <div class="section-divider"></div>

            <section id="license">
                <h2 class="termsTitle">2. Use License</h2>
                <h3>2.1 Permitted Use</h3>
                <p>Permission is granted to temporarily download one copy of the materials (information or software) on Numina Pharmaceuticals' website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title.</p>

                <h3>2.2 Restrictions</h3>
                <p>Under this license you may not:</p>
                <ul>
                    <li>Modify or copy the materials for commercial purposes</li>
                    <li>Use the materials for any commercial purpose or public display (commercial or non-commercial)</li>
                    <li>Attempt to decompile or reverse engineer any software contained on the website</li>
                    <li>Remove any copyright or other proprietary notations from the materials</li>
                    <li>Transfer the materials to another person or "mirror" the materials on any other server</li>
                    <li>Use any automated systems or software to extract data from the website</li>
                </ul>

                <h3>2.3 License Termination</h3>
                <p>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Numina Pharmaceuticals at any time. Upon termination, you must destroy any downloaded materials in your possession whether in electronic or printed format.</p>
            </section>

            <div class="section-divider"></div>

            <section id="medical">
                <h2 class="termsTitle">3. Medical and Product Information Disclaimer</h2>
                <div class="warning-box">
                    <h3>3.1 No Medical Advice</h3>
                    <p><strong>Important:</strong> The information on this website is for informational purposes only and is not intended to provide medical advice, diagnosis, or treatment recommendations. Always consult with qualified healthcare professionals before making any healthcare decisions or for guidance about a specific medical condition.</p>
                </div>

                <h3>3.2 Product Information</h3>
                <p>Product information provided on this website is for healthcare professionals and informed patients. This information should not replace consultation with healthcare providers. Numina Pharmaceuticals products should only be used under proper medical supervision.</p>

                <h3>3.3 Regulatory Compliance</h3>
                <p>Information about pharmaceutical products on this website may not be applicable in all countries or regions due to different regulatory requirements. Users are responsible for ensuring compliance with local pharmaceutical regulations.</p>
            </section>

            <div class="section-divider"></div>

            <section id="content">
                <h2 class="termsTitle">4. Website Content Disclaimer</h2>
                <h3>4.1 "As Is" Basis</h3>
                <p>Your use of this website is at your own risk. The materials on Numina Pharmaceuticals' website are provided "as is". Numina Pharmaceuticals makes no warranties, expressed or implied, and hereby disclaims all other warranties, including without limitation, implied warranties of merchantability, fitness for a particular purpose, or non-infringement of intellectual property.</p>

                <h3>4.2 Accuracy of Information</h3>
                <p>While we strive to provide accurate and up-to-date information, Numina Pharmaceuticals does not warrant the accuracy, completeness, or reliability of any information on this website. The website may contain technical, typographical, or other errors.</p>

                <h3>4.3 No Liability</h3>
                <div class="warning-box">
                    <p><strong>NUMINA PHARMACEUTICALS SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES ARISING FROM YOUR ACCESS TO OR USE OF THIS WEBSITE, INCLUDING WITHOUT LIMITATION, ANY LOST PROFITS, BUSINESS INTERRUPTION, OR LOSS OF DATA, EVEN IF NUMINA PHARMACEUTICALS HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</strong></p>
                </div>
            </section>

            <div class="section-divider"></div>

            <section id="liability">
                <h2 class="termsTitle">5. Limitation of Liability</h2>
                <p>In no event shall Numina Pharmaceuticals or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on this website, even if Numina Pharmaceuticals has been notified of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties or liability for consequential damages, these limitations may not apply to you.</p>
            </section>

            <div class="section-divider"></div>

            <section id="conduct">
                <h2 class="termsTitle">6. User Conduct</h2>
                <h3>6.1 Prohibited Activities</h3>
                <p>You agree not to:</p>
                <ul>
                    <li>Use the website for any unlawful purpose or in violation of these terms</li>
                    <li>Transmit any harmful, threatening, abusive, or defamatory content</li>
                    <li>Attempt to gain unauthorized access to any portion of the website</li>
                    <li>Interfere with the website's security features</li>
                    <li>Upload or transmit viruses or other malicious code</li>
                </ul>

                <h3>6.2 Content Submission</h3>
                <p>Any content you submit to the website (including comments, suggestions, or feedback) becomes the property of Numina Pharmaceuticals and may be used without restriction.</p>
            </section>

            <div class="section-divider"></div>

            <section id="ip">
                <h2 class="termsTitle">7. Intellectual Property Rights</h2>
                <h3>7.1 Ownership</h3>
                <p>All content, trademarks, logos, and intellectual property on this website are owned by Numina Pharmaceuticals or licensed to us. The Numina Pharmaceuticals name, logo, and all related marks are trademarks of Numina Pharmaceuticals.</p>

                <h3>7.2 Protection</h3>
                <p>Unauthorized use of any intellectual property may violate copyright, trademark, and other applicable laws and could result in criminal or civil penalties.</p>
            </section>

            <div class="section-divider"></div>

            <section id="links">
                <h2 class="termsTitle">8. Third-Party Links</h2>
                <p>Numina Pharmaceuticals has not reviewed all websites linked to our website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Numina Pharmaceuticals. Use of any linked website is at the user's own risk.</p>
            </section>

            <div class="section-divider"></div>

            <section id="privacy">
                <h2 class="termsTitle">9. Privacy and Data Protection</h2>
                <p>Your privacy is important to us. Please review our Privacy Policy, which governs the collection and use of your personal information when using our website. By using this website, you consent to the collection and use of information in accordance with our Privacy Policy.</p>
            </section>

            <div class="section-divider"></div>

            <section id="regulatory">
                <h2 class="termsTitle">10. Regulatory and Compliance Information</h2>
                <div class="highlight-box">
                    <h3>10.1 Pharmaceutical Regulations</h3>
                    <p>Numina Pharmaceuticals operates in compliance with Indian pharmaceutical regulations and international standards including WHO-GMP, ISO certifications, and other applicable regulatory requirements.</p>
                </div>

                <h3>10.2 Geographic Restrictions</h3>
                <p>Certain information on this website may not be appropriate or available for use in all countries. Users accessing this website from jurisdictions where such access or use would be illegal are prohibited from doing so.</p>
            </section>

            <div class="section-divider"></div>

            <section id="updates">
                <h2 class="termsTitle">11. Updates and Modifications</h2>
                <h3>11.1 Content Updates</h3>
                <p>Numina Pharmaceuticals may make changes to the materials and information contained on this website at any time without notice. We do not commit to update materials regularly.</p>

                <h3>11.2 Terms Modifications</h3>
                <p>Numina Pharmaceuticals may revise these Terms of Use at any time without prior notice. By using this website, you agree to be bound by the current version of these Terms of Use. We recommend reviewing these terms periodically.</p>
            </section>

            <div class="section-divider"></div>

            <section id="contact">
                <h2 class="termsTitle">12. Contact Information</h2>
                <div class="contact-info">
                    <p>For questions about these Terms of Use, please contact us at:</p>
                    <p><strong>Numina Pharmaceuticals</strong><br>
                        Email: [Your contact email]<br>
                        Address: [Your company address]<br>
                        Phone: [Your contact number]</p>
                </div>
            </section>

            <div class="section-divider"></div>

            <section id="governing">
                <h2 class="termsTitle">13. Governing Law and Jurisdiction</h2>
                <h3>13.1 Applicable Law</h3>
                <p>These Terms of Use and any claims relating to Numina Pharmaceuticals' website shall be governed by the laws of India without regard to conflict of law provisions.</p>

                <h3>13.2 Jurisdiction</h3>
                <p>Any legal proceedings arising from the use of this website shall be subject to the exclusive jurisdiction of the courts in [Your jurisdiction/city], India.</p>
            </section>

            <div class="section-divider"></div>

            <section id="severability">
                <h2 class="termsTitle">14. Severability</h2>
                <p>If any provision of these Terms of Use is found to be unenforceable or invalid, that provision will be limited or eliminated to the minimum extent necessary so that the remaining terms remain in full force and effect.</p>
            </section>

            <div class="section-divider"></div>

            <section id="entire">
                <h2 class="termsTitle">15. Entire Agreement</h2>
                <p>These Terms of Use constitute the entire agreement between you and Numina Pharmaceuticals regarding the use of this website and supersede all prior agreements and understandings.</p>
            </section>

            <div class="highlight-box" style="margin-top: 40px; text-align: center;">
                <p><strong>By using this website, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use.</strong></p>
            </div>
        </div>


    </div>

</main>



<?php include('footer.php'); ?>