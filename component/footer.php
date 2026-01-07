<section id="contact" class="dark_bg section-padding">      
				<div class="contact-form">
					<div class="container">
						<h2 class="section-title wow flipInX" data-wow-delay="0.4s">Contact <span>Us</span></h2>  
						<style>
							.center-div {
							  margin: 0 auto; /* This will center the div horizontally */
							  max-width: 100%; /* Ensures the div doesn't exceed the width of its container */
							  /* Add any additional styling you need */
							}
						  </style>
						<div class="row contact-form-area">   												
							<div class="col-md-12 col-lg-8 col-sm-8 center-div">
								<div class="contact_form wow fadeInLeft">
									<form action="contact.php" method="post" id="main_contact_form">
										<div class="contact_input_area">
											<div id="success_fail_info"></div>
											<div class="row">
												<!-- Form Group -->
												<div class="col-12">
													<div class="form-group">
														<input type="text" name="name" class="form-control" placeholder="Name" required="required">
													</div>
												</div>
												<!-- Form Group -->
												<div class="col-12 col-lg-6">
													<div class="form-group">
														<input type="email" name="email" class="form-control" placeholder="Email" required="required">
													</div>
												</div>
												<!-- Form Group -->
												<div class="col-12 col-lg-6">
													<div class="form-group">
														<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
													</div>
												</div>
												<!-- Form Group -->
												<div class="col-12">
													<div class="form-group">
														<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
													</div>
												</div>
												<!-- Button -->
												<div class="col-12 text-center">
													<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-secondary ct_btn" title="Submit Your Message!">Send Message</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						</div> 
					</div>
				</div>   
			</section>

<!-- Footer Section Start -->
<footer class="footer-area dark_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
                    <!-- Social Icons -->
                    <div class="social-icons">
                        <a href="https://github.com/putrawebdev" target="_blank" class="social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    
                    <p>Copyright © 2026 By PutraWebDev | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->