@extends('frontend.main')
@section('main-sec')
    <!-- Body Content -->
    <div id="page-content">
        <!-- Page Title -->
        <div class="page section-header text-center mb-0">
            <div class="page-title">
                <div class="wrapper">
                    <h1 class="page-width">Contact Us </h1>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Breadcrumbs -->
        <div class="bredcrumbWrap bredcrumbWrapPage bredcrumb-style2 text-center mb-0">
            <div class="container breadcrumbs">
                <a href="{{ route('frontend.index') }}" title="Back to the home page">Home</a><span
                    aria-hidden="true">|</span><span class="title-bold">Contact Us </span>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <div class="container-fluid px-0">
            <div class="row g-0">

                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 justify-content-center align-items-center flex-wrap px-3 px-sm-5 pt-4 pb-2 mb-md-5 mb-lg-0 mb-sm-5 mb-5">
                    <h2 class="text-center">DROP US A LINE</h2>
                    <p class="text-center pb-2">We value your feedback and are eager to hear from you. Drop us a line to
                        share
                        your thoughts, inquiries, or suggestions, and let us ensure your experience with us is nothing short
                        of exceptional. Your input is invaluable in helping us serve you better.</p>

                    <!-- Contact Form -->
                    <div class="formFeilds contact-form form-vertical">
                        <form method="post" id="con-form"
                            onsubmit="uploadData1('con-form','{{ route('frontend.contact-save') }}', 'alert-box','btn-box', event)">
                            @csrf
                            <div class="row">
                                <div class="col-12" id="alert-box"></div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="ContactFormName" name="name" class="form-control"
                                            placeholder="Name" required />
                                        <span class="form-feedback invalid-feedback" data-name="name"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" id="ContactFormEmail" name="email" class="form-control"
                                            placeholder="Email" required />
                                        <span class="form-feedback invalid-feedback" data-name="email"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" id="ContactFormPhone" name="phone_number"
                                            pattern="[0-9\-]*" placeholder="Phone Number" required />
                                        <span class="form-feedback invalid-feedback" data-name="phone_number"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="ContactSubject" name="msg_subject" class="form-control"
                                            placeholder="Subject" required />
                                        <span class="form-feedback invalid-feedback" data-name="msg_subject"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="ContactFormMessage" name="message" class="form-control" rows="4" placeholder="Your Message..."
                                            required></textarea>
                                        <span class="form-feedback invalid-feedback" data-name="message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mailsendbtn mb-0" id="btn-box">
                                        <button type="submit" class="btn btn-primary"> Send Message</button>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- End Contact Form -->

                    <div class="contact-details">
                        <hr />
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <ul class="addressFooter" style="list-style: none">
                                    <li><i class="icon an an-map-marker"></i>
                                        <p>1,Aman Enclave Baby Martin School Raod, Dubagga Lucknow, Uttar Pradesh</p>
                                    </li>
                                    <li class="phone"><i class="icon an an-phone"></i>
                                        <p><a href="tel:+917753982139">+917753982139</a></p>
                                    </li>
                                    <li class="email"><i class="icon an an-envelope"></i>
                                        <p><a href="mailto:info@adabkari.com">Info@adabkari.com</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="open-hours">
                                    <strong class="pb-1 d-inline-block">Opening Hours</strong><br>
                                    Mon - Sat : 9am - 11pm<br>
                                    Sunday: 11am - 5pm
                                </div>
                            </div>
                        </div>
                        <ul class="list--inline site-footer__social-icons social-icons mt-lg-0 mt-md-0 mt-3">
                            <li><a class="social-icons__link d-inline-block"
                                    href="https://www.facebook.com/Adabkarichikankari/" target="_blank"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i
                                        class="icon an an-facebook" style="color:#1877F2"></i></a></li>


                            <li><a class="social-icons__link d-inline-block"
                                    href="https://instagram.com/adabkari_?igshid=MzRlODBiNWFlZA==" target="_blank"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i
                                        class="icon an an-instagram" style="color:#E4405F"></i> <span
                                        class="icon__fallback-text">Instagram</span></a></li>
                            <li><a class="social-icons__link d-inline-block" href="https://www.youtube.com/@Adabkarichikankari/" target="_blank"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="YouTube"><i
                                        class="icon an an-youtube" style="color:#CD201F"></i> <span
                                        class="icon__fallback-text">YouTube</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                    <div class="map-section map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d676.2491697954268!2d80.85199878615259!3d26.872670316560868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bffd4fa13ec3b%3A0x5c69e718a7c51af1!2sBaby%20Martin%20International%20School!5e0!3m2!1sen!2sin!4v1690272432225!5m2!1sen!2sin"
                            width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
@endsection
