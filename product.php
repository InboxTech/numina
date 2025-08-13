<!-- Header link in php -->
<?php
include_once('service/DbConnect.php');

include_once('header.php');
$header = new Header();
$header->includeHeader('Numina | Product', './', 'product.php');

?>

<!-- Product -->
<main class="product-us">
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Products</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i> Products
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="px-lg-5 px-md-3 mt-5 pe-0">
        <div class="container row justify-content-evenly flex-lg-row flex-column-reverse align-items-center">

            <div class="col-lg-6 pe-lg-5 my-2" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <h2 class="display-4 top-title"> Our Pharma Products </h2>

                <p class=" fw-normal">
                    Expert Care, Quality Medicines for Health Needs…. Because You Deserve The Best!!
                </p>
                <p class="productDescription">
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                    Text will be comming soon...Text will be comming soon...Text will be comming soon...
                </p>

                <div>
                    <button class="btn btn-lg btn-custom my-3"> Let’s explore our range!
                    </button>
                </div>
            </div>
            <div class="col-lg-6 my-2" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div class="pro-img">
                    <img src="public/images/product/pharma_product.jpg" alt="our product image">
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container mx-auto p-3 my-5" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <div class="pro-img">
                        <img src="public/images/product/globalHealthImage.jpg" alt="our product image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class=" top-title" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> Addressing Global
                        Health Challenges </h1>
                    <p class="productDescription fw-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> In an era marked by
                        major global health challenges and fast technological
                        advancements in medical science, we have a unique opportunity to make a meaningful difference for
                        patients and society. We are focusing on improving our efforts in therapeutic areas with the highest
                        unmet needs, maximizing our impact on those who require it most.
                    </p>
                </div>
            </div>


        </div>
    </section>
 <section class="pharmaceutical-showcase">
        <div class="container-fluid px-4">
            <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="section-heading display-4">
                    Our Dosage Forms - Formulated For You
                </h1>
            </div>

            <div class="container">
                <div class="row g-4 justify-content-center">
                    <!-- Tablets Card -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="medication-card">
                            <div class="card-content">
                                <div class="product-image-wrapper">
                                    <img src="public/images/product/tablet.jpg" 
                                         class="product-image" alt="Tablet medications">
                                    <div class="icon-overlay">
                                        <i class="fas fa-pills"></i>
                                    </div>
                                </div>
                                <h2 class="medicine-title">Tablets</h2>
                                <p class="product-description">
                                    Easy to take pills for various health conditions, designed for optimal absorption and patient convenience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Capsules Card -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="medication-card">
                            <div class="card-content">
                                <div class="product-image-wrapper">
                                    <img src="public/images/product/capsule.jpg" 
                                         class="product-image" alt="Capsule medications">
                                    <div class="icon-overlay">
                                        <i class="fas fa-capsules"></i>
                                    </div>
                                </div>
                                <h2 class="medicine-title">Capsules</h2>
                                <p class="product-description">
                                    Fast-working capsules for effective treatment, ensuring precise dosage and improved bioavailability.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Syrups Card -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="medication-card">
                            <div class="card-content">
                                <div class="product-image-wrapper">
                                    <img src="public/images/product/syrup.jpg" 
                                         class="product-image" alt="Syrup medications">
                                    <div class="icon-overlay">
                                        <i class="fas fa-prescription-bottle-alt"></i>
                                    </div>
                                </div>
                                <h2 class="medicine-title">Syrups</h2>
                                <p class="product-description">
                                    Liquid medicine ideal for children and the elderly, with pleasant taste and easy administration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>

    <section class="productMainDiv">
        <div class="our-products container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h1 class="fs-1 top-title text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom"> Our
                Therapeutic Products </h1>
            <p class=" description fw-light text-center my-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                Numina Pharmaceuticals offers a diverse portfolio comprised of
                therapeutic drugs specially used for chronic and severe ailments. We are producing generics, OTC
                (Over-The-Counter), specialty products, ARVs and APIs for Indian as well as global markets. Our
                products are approved by local regulatory authorities in various countries for specific medical
                uses. As an emerging player in the pharmaceutical industry, we are working to strengthen our global
                footprint by delivering a broad range of healthcare products to greatly benefit local communities.
            </p>

            <div class="products row justify-content-center" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">

                <div class="swiper myProductSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center"> Antacid </h5>
                                <div>
                                    <p>Antacid provides relief from digestive comfort. These agents neutralize
                                        stomach acid and
                                        raise the pH level of gastric fluid. As antacids raise the pH, they decrease
                                        peptic
                                        activity. When the pH rises above 4, pepsin (a stomach enzyme) becomes
                                        inactive.
                                    </p>

                                    <p>Antacid preparations don’t reduce acid production, instead, they activate the
                                        release of
                                        more acid (acid rebound) in patients experiencing hyperacidity or duodenal
                                        ulcers.
                                        Antacid drugs can react with some medications such as tetracycline
                                        antibiotics, iron
                                        supplements, and heart medications.
                                    </p>

                                    <p>Ranitidine, Aluminum Hydroxide, Magnesium Hydroxide, Calcium Carbonate, etc.
                                        are some
                                        popularly used Antacids.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center"> Antibiotics </h5>
                                <div>
                                    <p>Antibiotics are the drugs that treat different types of bacterial infections.
                                        These drugs
                                        work by killing harmful pathogens or hindering the formation of bacterial
                                        cell walls
                                        which makes it difficult for them to multiply.
                                    </p>
                                    <p>We are manufacturing a broad-spectrum antibiotic that is specifically used to
                                        treat
                                        different types of bacteria. Certain infections such as strep throat,
                                        urinary tract,
                                        dental, many skin and ear and sinus infections are treated using
                                        antibiotics.
                                    </p>
                                    <p>There may be interactions between antibiotics and blood thinners, birth
                                        control pills,
                                        and other drugs like antacids.
                                    </p>
                                    <p>Amoxicillin, Azithromycin, Ciprofloxacin and Doxycycline are some common
                                        Antibiotics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class="product-categories">
                                <h5 class="top-title text-center"> Analgesic </h5>
                                <div>
                                    <p>Analgesics are drugs that provide fast relief from different types of pain.
                                        These drugs
                                        work well for headaches, toothaches, body discomfort, muscle soreness, and
                                        arthritis-related pain.</p>
                                    <p>Analgesic formulations lower inflammation at the source or affect how the
                                        brain processes
                                        pain signals.
                                    </p>
                                    <p>Some analgesic preparations like acetaminophen might react with blood
                                        thinners and
                                        alcohol, and also increase the chances of liver damage.
                                    </p>
                                    <p>Paracetamol, Ibuprofen and Aspirin are commonly used Analgesics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center"> Analgesic, Antipyretic and Anti-emetic </h5>
                                <div>
                                    <p>Analgesic, antipyretic, and anti-emetic combined to provide relief from
                                        multiple
                                        symptoms. These drugs are used to treat pain, fever, and nausea. </p>
                                    <p>Analgesics obstruct prostaglandin synthesis through the cyclooxygenase (COX)
                                        pathway.
                                        They block pain signals and control inflammation. Antipyretics lowers the
                                        body
                                        temperature by modulating the hypothalamic set point and enhancing heat
                                        loss.
                                        Anti-emetics obstruct serotonin (5-HT3) and dopamine receptors in the
                                        central nervous
                                        system that control nausea and vomiting.
                                    </p>
                                    <p>These medications are useful in managing infections, postoperative care, and
                                        motion
                                        sickness
                                    </p>
                                    <p>Antipyretics might react with anticoagulants, anti-emetics with
                                        antidepressants or drugs
                                        that affect dopamine levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">Analgesic & Anti-inflammatory
                                </h5>
                                <div>
                                    <p>Analgesic and anti-inflammatory combined effectively to reduce pain. They
                                        actively
                                        control inflammation in the body.
                                    </p>
                                    <p>These drugs provide quick relief from pain caused due to conditions like
                                        arthritis,
                                        injuries, post-surgical pain and more.
                                    </p>
                                    <p>NSAIDs like ibuprofen may react with blood pressure pills, diuretics, and
                                        blood thinners.
                                        This could increase the chances of bleeding.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">Anti-allergic
                                </h5>
                                <div>
                                    <p>Our anti-allergic medications block certain cells in the body from receiving
                                        histamine (a
                                        chemical released by the immune system that causes the symptoms of an
                                        allergic
                                        reaction).
                                    </p>
                                    <p>These drugs are effective for seasonal, food-related allergies. </p>
                                    <p>Anti-allergic medicines react with sedatives, alcohol, and certain
                                        antidepressants (MAO
                                        inhibitors). It might cause drowsiness.
                                    </p>
                                    <p>Cetirizine, Loratadine, Diphenhydramine, etc are the most popular
                                        anti-allergic drugs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">Multivitamins and Supplements
                                </h5>
                                <div>
                                    <p>Multivitamins and supplements contain essential nutrients that help to fill
                                        nutritional
                                        gaps. These preparations improve immunity and energy levels.
                                    </p>
                                    <p>Certain supplements like vitamin K should not be consumed with blood
                                        thinners.
                                    </p>
                                    <p>Vitamin C & Zinc, Vitamin D3, and multivitamins with Folic Acid are the most
                                        commonly
                                        used supplements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">
                                    Anti-diabetics
                                </h5>
                                <div>
                                    <p>We are also manufacturing antidiabetic medications that help maintain blood
                                        sugar levels
                                        in your body. These medicines lower the risk of complications caused by
                                        diabetes.
                                    </p>
                                    <p>Certain antidiabetic drugs interact with diuretics, which may affect blood
                                        sugar levels.
                                    </p>
                                    <p>Metformin, Glipizide, and Sitagliptin are some common anti-diabetic drugs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">

                            <div class="product-categories">
                                <h5 class="top-title text-center">Cardiovascular Drugs
                                </h5>
                                <div>
                                    <p>Cardiovascular medications are helpful in improving and maintaining heart
                                        health and
                                        managing blood pressure. These therapies regulate abnormal rhythm, lower the
                                        risk of
                                        heart disease and improve cardiovascular wellness.
                                    </p>
                                    <p>These drugs may interact with NSAIDs and affect blood pressure management.
                                        Some common
                                        examples of these drugs include Amlodipine, Atorvastatin, Lisinopril, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">Antimicrobials
                                </h5>
                                <div>
                                    <p>Our antimicrobial drugs help fight different infections. These drugs contain
                                        a group of
                                        agents that kill microorganisms or stop their growth to restore health and
                                        prevent the
                                        spread of illness.
                                    </p>
                                    <p>Some drugs like ciprofloxacin can interact with antacids and reduce their
                                        efficacy.
                                        Amoxicillin, Metronidazole, Ciprofloxacin, and are often used
                                        antimicrobials.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-categories">
                                <h5 class="top-title text-center">Antiretrovirals (ARVs)
                                </h5>
                                <div>
                                    <p>Our range of antiretroviral medications helps to manage HIV. If consumed
                                        properly,
                                        individuals lead healthier lives. These drugs also suppress the virus load,
                                        combat
                                        infection and improve immune function. ARVs also minimize the risk of
                                        transmission.
                                    </p>
                                    <p>There is a chance that antiretrovirals react with certain antibiotics and
                                        antifungals and
                                        reduce their efficacy. Some common ARVs are Efavirenz, Tenofovir and
                                        Rilpivirine.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>
     
</main>
<!-- Product end -->
<!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Partner With Us</h2>
            <p class="cta-text">Join us in our mission to create positive change in global healthcare and build a healthier tomorrow for communities worldwide.</p>
            <a href="contact_us.php" class="cta-button">Get In Touch</a>
        </div>
    </section>
<!-- footer link in php -->
<?php include('footer.php'); ?>