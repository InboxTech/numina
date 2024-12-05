<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Contact Us', './');

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.914297863139!2d73.16496507586686!3d22.31908074221339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8b0ad7c2637%3A0x2a345d8d78456d64!2sInbox%20Infotech!5e0!3m2!1sen!2sin!4v1733310564571!5m2!1sen!2sin"  style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include('footer.php'); ?>