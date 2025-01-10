<!-- Breadcrumbs -->
<div class="breadcrumbs corporate" style="background: #003152;padding: 5px 0px;">
    <div class="container-fluid pr-5">
        <div class="bread-inner">
            <div class="row">
                <div class="col-2 pt-2">
                    <img src="img/contact-left.gif" alt="image">
                </div>
                <div class="col-8 d-flex flex-column justify-content-center">
                    <h2>Contact Us
                    </h2>
                    <p>Please let us know if you have a question, want to leave
                        a comment, or would like further information about
                        RAPTech Solutions.
                    </p>
                </div>
                <div class="col-2 p-0">
                    <img src="img/contact-right.gif" alt>
                </div>

            </div>
        </div>
    </div>
</div>

<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">

                <div class="col-lg-12">
                    <div class="contact-us-form">
                        <h2>Contact With Us</h2>
                        <!-- <p>If you have any questions please fell free to contact
                            with us.</p> -->
                        <!-- Form -->
                        <form action="" id="emailForm" class="contact-form" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-icon">
                                        <input type="text" name="name" placeholder="Full Name" required />
                                        <div class="input-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class=" input-group input-group-icon ">

                                        <input type="text" name="designation" placeholder="Designation" required>
                                        <div class="input-icon"><i class="icofont-worker"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group input-group input-group-icon ">

                                        <input type="text" name="company" placeholder="Company" required>
                                        <div class="input-icon"><i class="icofont-worker"></i></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group input-group input-group-icon ">

                                        <input type="email" id="email" name="email"
                                            placeholder="Enter your official email" required>
                                        <div class="input-icon"><i class="icofont-email"></i></div>

                                        <span id="emailError" class="error">Please
                                            enter a valid official email

                                            <br><br>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group input-group input-group-icon ">

                                        <input type="text" name="phone" placeholder="Phone" required>
                                        <div class="input-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group input-group input-group-icon ">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                        <div class="input-icon"><i class="icofont-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class=" col-lg-6">
                                    <label for="Product">Product</label>
                                    <div class="input-group">
                                        <select style="padding:10px" name="product">
                                            <option style="color:red;">Not Select</option>
                                            <option value="AI-Powered Educational LMS"> AI-Powered Educational LMS
                                            </option>
                                            <option>AI-Powered Video Creator</option>
                                            <option>Smart Video Tool</option>
                                            <option>Smart Presentations Tool</option>
                                            <option>360 Virtual Reality Tool</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-half col-lg-6">
                                    <label for="Product">Service Type</label>
                                    <div class="input-group">
                                        <select style="padding:10px" name="services">
                                            <option style="color:red;">Not Select</option>
                                            <option>Custom E-learning</option>
                                            <option> Learning App Development</option>
                                            <option>Moodle UI/UX Customization</option>
                                            <option value="">Moodle Plugin Development</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group input-group input-group-icon">

                                        <textarea name="message" placeholder="Your Message" required></textarea>
                                        <div class="input-icon"><i class="icofont-ui-message"></i></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button style="width: 100px; color:#003152; background:#ec9707;" class="btn"
                                            name="send" value="Send">Send</button>
                                    </div>
                                    <!-- <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input
                                                name="news" id="2"
                                                type="checkbox">Do you want to
                                            subscribe our Newsletter ?</label>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-6 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>+917709105351</h3>
                            <p>sales@raptechsolutions.com</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-6 col-12 ">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>Sierra Vista, Veerbhadra Nagar, Lane no. 5,
                                Baner, Pune – 411045</h3>
                            <p>Maharashtra India.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- <script>
    document.getElementById("emailForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form from submitting normally

        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");

        // Regular expression to validate emails except Gmail
        const officialEmailPattern = /^[a-zA-Z0-9._%+-]+@(?!gmail\.)[a-zA-Z0-9-]+\.(com|org|net|edu)$/;
        if (officialEmailPattern.test(emailInput.value)) {
            emailError.style.display = "none";

            // Collect form data
            const formData = new FormData(document.getElementById("emailForm"));

            // Send data to the PHP file using AJAX (fetch)
            fetch("send_email.php", {
                method: "POST",
                body: formData,
            })
                .then(response => response.text())
                .then(data => {
                    alert(data);  // Show the PHP response
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("An error occurred while sending the message.");
                });
        } else {
            emailError.style.display = "inline";
        }
    });

</script> -->