  <?php include('header.php');?>
  <!-- Clients -->
    <div id="contact-us" class="iq-our-from gray-bg overview-block-pt">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8 text-center">
                    <h2>Get in Touch</h2>
                    <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries.</p>
                </div>
            </div>
            <div class="row iq-mt-50">
                <div class="col-lg-8 col-sm-12">
                    <div class="iq-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.3156680513907!2d144.85161781492556!3d-37.852903679745246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66141a83c002f%3A0x863b0e5c65c57b42!2sUnit+1%2F239+Kororoit+Creek+Rd%2C+Williamstown+VIC+3016%2C+Australia!5e0!3m2!1sen!2sin!4v1552459269512" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <form id="contact-01" method="post">
                        <div class="contact-form">
                            <div class="section-field iq-mt-10">
                                <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                            </div>
                            <div class="section-field iq-mt-10">
                                <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                            </div>
                            <div class="section-field iq-mt-10">
                                <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                            </div>
                            <div class="section-field textarea iq-mt-10">
                                <textarea id="contact_message" class="input-message require" placeholder="Comment*"
                                    rows="5" name="message"></textarea>
                            </div>
                            <button id="submit" name="submit" type="submit" value="Send" class="button pull-right iq-mt-20">Send
                                Message</button>
                            <p role="alert"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients END -->
    <?php include('footer.php');?>