<?php
include_once('service/DbConnect.php');
include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Career Details', './', 'career-details.php');
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
    <section class="job-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <!-- Job Header -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="mb-3 " style="color: #74649c;">SAP Consultant (Treasury & Fico)</h3>
                            <ul class="list-inline text-muted mb-2">
                                <li class="list-inline-item"><strong>Last Date to Apply:</strong> 31 July 2025</li>
                                <li class="list-inline-item"><strong>Number of Openings:</strong> 4</li>
                                <li class="list-inline-item"><strong>Experience Required:</strong> 10+ years</li>
                                <li class="list-inline-item"><strong>Join In:</strong> 30 Days</li>
                                <li class="list-inline-item"><strong>Salary:</strong> No bar for Right candidate</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Required Skills -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Required Skills</h5>
                        </div>
                        <div class="card-body">
                            <p>SAP Treasury (TRM), SAP FICO (Financial Accounting & Controlling), Indian GST processes, 
                               SAP Cash Management, Liquidity Management, Bank Account Management, Risk Management, 
                               SAP S/4HANA, Problem-solving</p>
                        </div>
                    </div>

                    <!-- Job Summary -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Job Summary</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                We are seeking 10+ years experienced SAP Consultant with a strong background in Treasury, 
                                FICO (Financial Accounting and Controlling), and Indian GST processes. This role requires 
                                hands-on experience in implementing, configuring, and optimizing SAP solutions for Treasury 
                                management, FICO integration, and compliance with Indian GST regulations. The ideal candidate 
                                will possess a deep understanding of financial processes and be able to deliver robust solutions 
                                that meet business requirements while ensuring smooth integration and compliance.
                            </p>
                        </div>
                    </div>

                    <!-- Key Responsibilities -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Key Responsibilities</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Implement and configure SAP Treasury and Risk Management (TRM) solutions, including Cash Management, Liquidity Management, Hedge Management, and Risk Management.</li>
                                <li>Provide hands-on support for SAP FICO modules (Financial Accounting and Controlling), including integration with other SAP modules and third-party applications.</li>
                                <li>Work closely with clients to understand business requirements and deliver tailored SAP solutions in Treasury, FICO, and GST areas.</li>
                                <li>Ensure compliance with Indian GST regulations and optimize processes for efficiency and accuracy.</li>
                                <li>Troubleshoot issues, provide ongoing support, and deliver enhancements as per client requirements.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Apply Button -->
                    <div class="text-center mt-4">
                        <a href="javascript:void(0)" onclick="openApplication('SAP Consultant (Treasury & FICO)')"  class="btn apply-btn btn-lg">Apply Now</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
      <div id="applicationModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeApplication()">&times;</span>
            <h3 class="applytitle" id="modalJobTitle">Apply for Position</h3>
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
                        <div class="file-upload-btn" onclick="document.getElementById('resume').click()">
                            📁 Click to upload your resume (PDF, DOC, DOCX)
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="coverLetter">Cover Letter</label>
                    <textarea id="coverLetter" name="coverLetter" placeholder="Tell us why you're the perfect fit for this role..."></textarea>
                </div>

                <button type="submit"  class="submit-btn">Submit Application</button>
            </form>
        </div>
    </div>

</main>
 <script>
function openApplication(jobTitle) {
    document.getElementById("applicationModal").style.display = "block";
    document.getElementById("modalJobTitle").innerText = "Apply for " + jobTitle;
}

function closeApplication() {
    document.getElementById("applicationModal").style.display = "none";
}

// Close modal when clicking outside
window.onclick = function(event) {
    let modal = document.getElementById("applicationModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

function submitApplication(event) {
    event.preventDefault();
    alert("Application submitted successfully ✅");
    closeApplication();
}
</script>


<?php
include_once('footer.php');
?>
