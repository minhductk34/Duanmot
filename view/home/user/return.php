<?php
require_once('view/home/user/page/header.php');

?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="./src/assets/img/breadcumb/breadcumb-img-1.jpg">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu-style1 mx-auto">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
      Contact Form Area
    ==============================-->
<section class="vs-contact-wrapper vs-contact-layout1 space-top space-md-bottom">
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-lg-6 ">
                <div class="section-title mb-25">
                    <h2 class="sec-title1">Return Successfuly</h2>
                    
                   
                    
                </div>
                
            </div>

                <form action="mail.php" method="POST" class="contact-form contact-form1 mb-30">
                    <div class="row g-4">
                        <div class="col-12 form-group mb-0">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6 form-group mb-0">
                            <input type="text" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6 form-group mb-0">
                            <input type="text" name="subject" class="form-control" placeholder="Your Subject">
                        </div>
                        <div class="col-12 form-group mb-0">
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <button type="submit" class="vs-btn ">Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messages mt-20 mb-0"></p>
            </div>
            <div class="col-12 my-30">
                <div class="ratio ratio-21x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.454672857642!2d105.7472546!3d21.0381403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1sen!2s!4v1700466585989!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
			Footer Area
	==============================-->
<?php
require_once('view/home/user/page/footer.php');
?>
</body>

</html>