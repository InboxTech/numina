<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Contact Us', './', 'contact_us.php');

?>

<main>
        <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>  Contact  us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>  Contact  us
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="get-in-touch">
      
        <div class="container mx-auto">
            <div class="row align-items-center coantactRow ">
                <div class="col-6">
                 <div>
                    <img src="public/images/home/banner/contactUs.png" alt="contact" style="width: 100%;">
                 </div>
                </div>
        <div class="col-lg-6">
    <h2 class="display-5 top-title mb-4">Get In Touch</h2>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstname" placeholder="Enter First Name" required>
                <div class="invalid-feedback">
                    Please enter your first name.
                </div>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Enter Last Name" required>
                <div class="invalid-feedback">
                    Please enter your last name.
                </div>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone No" required pattern="[0-9]{10}">
                <div class="invalid-feedback">
                    Please provide a valid 10-digit phone number.
                </div>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="msg" rows="4" placeholder="Write your message..." required></textarea>
                <div class="invalid-feedback">
                    Please enter your message.
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-custom px-4">Submit</button>
            </div>
        </div>
    </form>
</div>

              
            </div>
        </div>
         
    </section>
     <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d118112.52659717874!2d73.0618740730391!3d22.315217386033147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x395fc9f063c9c445%3A0xd4cd501246d5d840!2snear%20Iscon%20Heights%2C%20Gotri%2C%20Vadodara%2C%20Gujarat%20390021!3m2!1d22.3152382!2d73.1442757!5e0!3m2!1sen!2sin!4v1743763550920!5m2!1sen!2sin" style="border:0; width: 100%; height:500px;" allowfullscreen="" width="100%" header="400" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
</main>



<?php include('footer.php'); ?>