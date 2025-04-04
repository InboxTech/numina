<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Contact Us', './', 'contact_us.php');

?>

<main>
    <section class="get-in-touch">
        <div class="container mx-auto">
            <div class="row ">
                <div class="col-6">
                    <h2 class="display-5 top-title"> Get In Touch </h2>
                    <form class="formValidate">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone No">
                                </div>
                            </div>

                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="msg" row="100" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea" style="opacity: 0.7;">Comments</label>
                        </div>
                            <label id="floatingTextarea-error" class="error" for="floatingTextarea"> </label> <br>
                            <button type="submit" class="btn btn-custom">Submit</button>
                    </form>
                </div>
                <div class="col-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d118112.52659717874!2d73.0618740730391!3d22.315217386033147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x395fc9f063c9c445%3A0xd4cd501246d5d840!2snear%20Iscon%20Heights%2C%20Gotri%2C%20Vadodara%2C%20Gujarat%20390021!3m2!1d22.3152382!2d73.1442757!5e0!3m2!1sen!2sin!4v1743763550920!5m2!1sen!2sin" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include('footer.php'); ?>