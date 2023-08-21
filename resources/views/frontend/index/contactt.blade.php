@extends('frontend.index.admin')
@section('content')

<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Contact Us</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area start -->
    <section class="contact-area pt-120 pb-90" data-background="assets/img/bg/bg-map.png" style="background-image: url(&quot;assets/img/bg/bg-map.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p style="text-transform:initial!important;"> amitbansal786@yahoo.com</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Visit</h3>
                        <p>Address : Jagdish Metal Works,<br>
                            I/s Hathi Gate,<br>
                            Kalyan Singh Road,<br>
                            Amritsar-143001.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-4 ">
                    <div class="contact text-center mb-30">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p>+91-9417258138,</p>
                        <p>+91-9356002077,</p>
                        <p>+91-7340762258</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area end -->

    <!-- contact-form-area start -->
    <section class="contact-form-area grey-bg pt-100 pb-100">
        <div class="container">
            <div class="form-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title mb-55">
                            <h1 style="font-weight:300;">CONTACT US</h1>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-none d-xl-block ">
                        <div class="section-link mb-80 text-right">
                            <a class="btn theme-btn" href="#"><i class="fas fa-phone"></i>Call Us</a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">

                    <form method="POST" action="contactdb">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box user-icon mb-30">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box email-icon mb-30">
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box phone-icon mb-30">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box subject-icon mb-30">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box message-icon mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="contact-btn text-center">
                                    <button class="btn theme-btn" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- <p class="ajax-response text-center"></p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-area end -->
</main>
@endsection