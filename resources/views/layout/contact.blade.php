<!-- Start Conatct- Area -->
<section class="contact-area pt-100 pb-100 relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="single-contact col-lg-6 col-md-8">
                <h2 class="text-white">Send Us <span>Message</span></h2>
                <p class="text-white">
                    Most people who work in an office environment, buy computer products.
                </p>
            </div>
        </div>
        <form id="myForm" action="mail.php" method="post" class="contact-form">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required="" type="text">
                </div>
                <div class="col-lg-5">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required="" type="email">
                </div>
                <div class="col-lg-10">
                    <textarea class="common-textarea mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
            </div>
            <div class="col-lg-10 d-flex justify-content-end">
                <button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Send Message</span><span class="lnr lnr-arrow-right"></span></button> <br>
            </div>
            <div class="alert-msg"></div>
            </div>
        </form>
    </div>
</section>
<!-- End Conatct- Area -->