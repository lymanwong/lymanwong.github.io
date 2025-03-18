    <section id="last" class="bg-primary">
            <div class="formcontainer">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                        <p id="feedback"><?php echo $feedback; ?>
                        <hr class="primary">
                    </div>
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <!-- <form class="contact-form row" name="form1" method="post" action="?"> -->
                        <form id="contactForm">
                            <div class="col-md-4">
                                <label></label>
                                <!-- <input name="name" id="name" type="text" class="form-control" placeholder="Your name" > -->
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-4">
                                <label></label>
                                <!-- <input type="text" name="sender_email" id="sender_email" class="form-control" placeholder="Your Email" > -->
                                <input type="email" id="email" name="email" placeholder="Your Email" required>

                            </div>
                            <div class="col-md-4">
                                <label></label>
                                <!-- <input type="text" id="subject" name="subject" class="form-control" placeholder="The subject" > -->
                                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <label></label>
                                <!-- <textarea name="message" id=" -->
                                <!-- message" class="form-control" rows="9" placeholder="Your message"></textarea> -->
                                <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>

                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                <label></label>
                                <!-- <button title="Click to send" type="submit" name="Submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button> -->
                                <button type="submit">Send Message</button>

                                <!-- <button title="Click to clear the form" type="reset" name="Submit2" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Reset <i class="ion-android-arrow-forward"></i></button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>