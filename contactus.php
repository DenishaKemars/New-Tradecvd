<?php require_once 'config/init.php';
require_once 'config/apiconfig.php';
$res = $DB->getpagemetadata(2); ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Meta Tag Start -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="<?php echo $res[0]['metakeywords']; ?>" />
        <meta name="author" content="Trade CVD" />
        <meta name="robots" content="Trade CVD" />
        <meta name="description" content="<?php echo $res[0]['metadescription']; ?>" />
        <meta property="og:title" content="<?php echo $res[0]['title']; ?>" />
        <meta property="og:url" content="<?php echo $config->getWeburl(); ?>" />
        <meta property="og:description" content="<?php echo $res[0]['metadescription']; ?>" />
        <meta property="og:image" content="<?php echo $config->getImageurl(); ?>images/ogiseo.png" />
        <link rel="icon" type="image/x-icon" href="<?php echo $config->getImageurl(); ?>images/gems.png" />
        <!-- Meta Tag End -->

        <!--title-->
        <title><?php echo $res[0]['title']; ?></title>

        <!-- CSS Start -->
        <?php include('css.php'); ?>

        <!-- CSS End -->
        <script src="assets/js/vendor/jquery.min.js"></script>
    </head>

    <body class="contactus max-w-2560px">
        <div class="page-wrapper">
            <!-- Header Start -->
            <?php include('header.php'); ?>
            <!-- Header End -->
            <main class="main contact-page page-title mainbg-img mb-5" id="web-content">
                <section class="why-savani-sec section-space contact-hero commonbannerimg" style="">
                    <div class="container contact-container">
                        <nav class="contact-breadcrumb" aria-label="Breadcrumb">
                            <a href="/">Home</a><span>/</span><span>Contact Us</span>
                        </nav>
                        <h1>Let’s Start a Conversation</h1>
                        <p>Questions, partnerships or platform support—our team is ready to help.</p>
                        <span class="contact-hero-note">A BRIGHTER<br />TOMORROW<br />TOGETHER</span>
                    </div>
                </section>
                <section class="contact-content contact-container container">
                    <div class="contact-grid">
                        <aside class="contact-help">
                            <h2 class="text-white">We’re Here to Help</h2>
                            <p class="contact-help-intro">
                                Whether you have a question about our platform, need assistance with a listing, or just
                                want to learn more — our team is ready to support you.
                            </p>                          
                            <div class="contact-detail">
                                <span class="contact-round">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 17V12L10.5 9.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ffffff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
				                    </span>
                                <div><strong>Support Hours</strong><span>Monday – Friday, 9:00 AM – 6:00 PM</span></div>
                            </div>
                            <div class="contact-detail">
                                <span class="contact-round">
                    					<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">					</g><g id="SVGRepo_iconCarrier"> <path d="M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 						13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    				</span>
                                <div><strong>Response Time</strong><span>Usually within one business day</span></div>
                            </div>
                            <div class="contact-detail">
                                    <span class="contact-round">
            					        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22 7C22 9.76142 19.7614 12 17 12C16.2002 12 15.4442 11.8122 14.7738 11.4783C14.5956 11.3895 14.392 11.36 14.1997 11.4114L13.0867 11.7092C12.6035 11.8385 12.1615 11.3965 12.2908 10.9133L12.5886 9.80031C12.64 9.60803 12.6105 9.4044 12.5217 9.22624C12.1878 8.55582 12 7.79984 12 7C12 4.23858 14.2386 2 17 2C19.7614 2 22 4.23858 22 7ZM17 4.8125C17.5178 4.8125 17.9375 5.23223 17.9375 5.75V6.0625H18.25C18.7678 6.0625 19.1875 6.48223 19.1875 7C19.1875 7.51777 18.7678 7.9375 18.25 7.9375H17.9375V8.25C17.9375 8.76777 17.5178 9.1875 17 9.1875C16.4822 9.1875 16.0625 8.76777 16.0625 8.25V7.9375H15.75C15.2322 7.9375 14.8125 7.51777 14.8125 7C14.8125 6.48223 15.2322 6.0625 15.75 6.0625H16.0625V5.75C16.0625 5.23223 16.4822 4.8125 17 4.8125Z" fill="#ffffff"></path> <path opacity="0.5" d="M8.03759 7.31617L8.6866 8.4791C9.2723 9.52858 9.03718 10.9053 8.11471 11.8278C8.11471 11.8278 8.11471 11.8278 8.11471 11.8278C8.11459 11.8279 6.99588 12.9468 9.02451 14.9755C11.0525 17.0035 12.1714 15.8861 12.1722 15.8853C12.1722 15.8853 12.1722 15.8853 12.1722 15.8853C13.0947 14.9628 14.4714 14.7277 15.5209 15.3134L16.6838 15.9624C18.2686 16.8468 18.4557 19.0692 17.0628 20.4622C16.2258 21.2992 15.2004 21.9505 14.0669 21.9934C12.1588 22.0658 8.91828 21.5829 5.6677 18.3323C2.41713 15.0817 1.93421 11.8412 2.00655 9.93309C2.04952 8.7996 2.7008 7.77423 3.53781 6.93723C4.93076 5.54428 7.15317 5.73144 8.03759 7.31617Z" fill="#ffffff"></path> </g></svg>
            				        </span>
                                <div>
                                <strong>Phone Number</strong>
                                <a href="tel: +91 02613671633">+91 02613671633</a>
                            </div>
                            </div>
                             <div class="contact-detail">
                                    <span class="contact-round">
            					            <svg width="20px" height="20px" viewBox="0 -2.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>email [#1573]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -922.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M262,764.291 L254,771.318 L246,764.281 L246,764 L262,764 L262,764.291 Z M246,775 L246,766.945 L254,773.98 L262,766.953 L262,775 L246,775 Z M244,777 L264,777 L264,762 L244,762 L244,777 Z" id="email-[#1573]"> </path> </g> </g> </g> </g></svg>
            				        </span>
                                <div>
                                <strong>Email</strong>
                                <a href="mailto:<?php echo htmlspecialchars($CompanyInfo->getMainEmail() ?: 'info@tradecvd.com', ENT_QUOTES, 'UTF-8'); ?>">info@tradecvd.com</a>
                            </div>
                            </div>
                            <div class="contact-social">
                                <strong>Connect With Us</strong>
                                <div class="contact-social-links">
                                    <a
                                        href="mailto:<?php echo htmlspecialchars($CompanyInfo->getMainEmail() ?: 'info@tradecvd.com', ENT_QUOTES, 'UTF-8'); ?>" aria-label="Email Trade CVD">
                                        <i class="far fa-envelope fa"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="contact-signoff">DIAMONDS CONNECT PEOPLE</div>
                        </aside>
                        <div class="contact-form-card">
                            <h2>Send Us a Message</h2>
                            <p>Tell us how we can help and our team will get back to you shortly.</p>
                            <form class="contact-form needs-validation" method="post" id="contactusForm">
                                <div class="contact-fields">
                                    <div class="contact-field">
                                        <label for="cffname">First Name <span>*</span></label
                                        ><input
                                            id="cffname"
                                            name="cffname"
                                            type="text"
                                            placeholder="Enter your first name"
                                            autocomplete="given-name"
                                            required
                                        />
                                    </div>
                                    <div class="contact-field">
                                        <label for="cflname">Last Name <span>*</span></label
                                        ><input
                                            id="cflname"
                                            name="cflname"
                                            type="text"
                                            placeholder="Enter your last name"
                                            autocomplete="family-name"
                                            required
                                        />
                                    </div>
                                    <div class="contact-field">
                                        <label for="cfcemail">Company Email <span>*</span></label
                                        ><input
                                            id="cfcemail"
                                            name="cfcemail"
                                            type="email"
                                            placeholder="you@company.com"
                                            autocomplete="email"
                                            required
                                        />
                                    </div>
                                    <div class="contact-field">
                                        <label for="cfphone">Phone Number <span>*</span></label>
                                        <div class="contact-phone">
                                            <select
                                                id="phonecodeid"
                                                name="phonecodeid"
                                                aria-label="Country calling code"
                                                required
                                            >
                                                <option value="">Code</option></select
                                            ><input
                                                id="cfphone"
                                                name="cfphone"
                                                type="tel"
                                                placeholder="Enter your phone number"
                                                autocomplete="tel-national"
                                                maxlength="15"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="contact-field">
                                        <label for="cfcompanyname">Company Name</label
                                        ><input
                                            id="cfcompanyname"
                                            name="cfcompanyname"
                                            type="text"
                                            placeholder="Enter your company name"
                                            autocomplete="organization"
                                        />
                                    </div>
                                    <div class="contact-field">
                                        <label for="primarycmptypeid">Primary Company Type</label
                                        ><select id="primarycmptypeid" name="primarycmptypeid">
                                            <option value="">Select Primary Company Type</option>
                                        </select>
                                    </div>
                                    <div class="contact-field contact-wide">
                                        <label for="cfcmpwebsite">Company Website</label
                                        ><input
                                            id="cfcmpwebsite"
                                            name="cfcmpwebsite"
                                            type="url"
                                            placeholder="https://www.yourcompany.com"
                                            autocomplete="url"
                                        />
                                    </div>
                                    <div class="contact-field contact-wide">
                                        <label for="countryid">Country</label
                                        ><select id="countryid" name="countryid">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                    <div class="contact-field contact-wide">
                                        <label for="message">Message <span>*</span></label
                                        ><textarea
                                            id="message"
                                            name="message"
                                            placeholder="Tell us how we can help..."
                                            rows="3"
                                            required
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="contact-form-bottom">
                                    <div class="contact-consent">
                                        <label
                                            ><input type="checkbox" name="privacyconsent" required />
                                            <span
                                                >I agree to the
                                                <a href="/privacypolicy" target="_blank" rel="noopener"
                                                    >Privacy Policy</a
                                                >.</span
                                            ></label
                                        ><small
                                            ><i class="fas fa-lock fa"></i> Your information is secure and never
                                            shared.</small
                                        >
                                    </div>
                                    <button class="contact-submit" type="submit">
                                        Send Message <i class="fas fa-arrow-right fa"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="contact-benefits">
                        <div>
                            <i class="fa-solid fa-headphones fa"></i
                            ><span><strong>Dedicated Support</strong><small>Real people, real help</small></span>
                        </div>
                        <div>
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22V8L3 11V11.9914Z" fill="#669934"></path> <path opacity="0.5" d="M14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914V11L12 8V22C13.0193 22 13.38 21.8424 14.1014 21.5273Z" fill="#669934"></path> <path opacity="0.5" d="M8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11L12 8V2C11.1886 2 10.405 2.26824 8.83772 2.80472Z" fill="#669934"></path> <path d="M15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2V8L21 11V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079Z" fill="#669934"></path> </g></svg>
                            <span><strong>Secure &amp; Private</strong><small>Your information is safe</small></span>
                        </div>
                        <div>
                            <i class="fas fa-globe fa"></i
                            ><span><strong>Global Assistance</strong><small>Support wherever you are</small></span>
                        </div>
                    </div>
                    <section class="contact-faq" aria-labelledby="contact-faq-title">
                       <div class="mb-4">
                         <h2 id="contact-faq-title">Frequently Asked Questions</h2>
                         <p>Quick answers to common questions. Can’t find what you’re looking for? Contact our team.</p>
                       </div>                      
                        <div class="contact-faq-grid">
                            <details>
                                <summary>How quickly will you respond to my inquiry?</summary>
                                <p>We usually respond within one business day, Monday through Friday.</p>
                            </details>
                            <details>
                                <summary>Can I partner with Trade CVD?</summary>
                                <p>
                                    Yes. Send us a message with details about your business and the partnership you have
                                    in mind.
                                </p>
                            </details>
                            <details>
                                <summary>What kind of support do you offer?</summary>
                                <p>
                                    We can help with platform questions, account access, listings, and partnership
                                    inquiries.
                                </p>
                            </details>
                            <details>
                                <summary>Is my information kept private?</summary>
                                <p>
                                    We use your contact details to respond to your inquiry. Please review our Privacy
                                    Policy for details.
                                </p>
                            </details>
                        </div>
                    </section>
                </section>
            </main>
            <!-- Footer Start -->
            <?php include('footer.php'); ?>
            <!-- Footer End -->

            <!-- JS Start -->
            <?php include('js.php'); ?>
            <!-- JS End -->
        </div>
        <script>
            $(document).ready(function () {
                // The reference layout uses its own compact hero; retain the existing content API below.
                fillcontentsetting();
            });
            function fillcontentsetting() {
                var pagename = getpagename();
                var headersdata = {
                    Accept: "application/json",
                    platform: 4,
                    userpagename: pagename,
                    useraction: "",
                    masterlisting: false,
                };

                formdata = new FormData();
                formdata.append("action", "listcontentsetting");
                formdata.append("typeid", 24);

                ajaxrequest(
                    "POST",
                    "<?php echo $config->getEndpointurl(); ?>" + "contentsetting",
                    formdata,
                    headersdata,
                    Onsuccessfillcontentsetting,
                    OnErrorfillcontentsetting
                );
                function Onsuccessfillcontentsetting(content) {
                    var JsonData = JSON.stringify(content);
                    var resultdata = jQuery.parseJSON(JsonData);

                    if (resultdata.status == 0) {
                        /*  htmldata+='<div class="col-exs-12 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 text-center" >';
                     htmldata+='<h3>No Data Found!</h3>';
                     htmldata+='</div>'; */
                    } else if (resultdata.status == 1) {
                    }
                }

                function OnErrorfillcontentsetting(content) {
                    ajaxrequest(
                        "POST",
                        "'<?php echo $config->getPage404url(); ?>'",
                        "",
                        "",
                        OnsuccessRender,
                        OnErrorRender
                    );
                }

                fillphonecode();
            }
            //Fill phone Code
            function fillphonecode() {
                var pagename = getpagename();
                var headersdata = {
                    Accept: "application/json",
                    platform: 4,
                    userpagename: pagename,
                    useraction: "",
                    masterlisting: true,
                    responsetype: "HTML",
                };

                formdata = new FormData();
                formdata.append("action", "listcountrycode");

                ajaxrequest(
                    "POST",
                    "<?php echo $config->getEndpointurl(); ?>" + "master",
                    formdata,
                    headersdata,
                    Onsuccessfillfillphonecode,
                    OnErrorfillfillphonecode
                );
                function Onsuccessfillfillphonecode(content) {
                    var JsonData = JSON.stringify(content);
                    var resultdata = jQuery.parseJSON(JsonData);
                    $("#phonecodeid").html(resultdata.data);
                    // $('#phonecodeid').selectpicker('refresh');
                }

                function OnErrorfillfillphonecode(content) {
                    ajaxrequest(
                        "POST",
                        "'<?php echo $config->getPage404url(); ?>'",
                        "",
                        "",
                        OnsuccessRender,
                        OnErrorRender
                    );
                }

                listcountry();
            }
            //Fill Country
            function listcountry() {
                var pagename = getpagename();
                var headersdata = {
                    Accept: "application/json",
                    platform: 4,
                    userpagename: pagename,
                    useraction: "",
                    masterlisting: true,
                    responsetype: "HTML",
                };

                formdata = new FormData();
                formdata.append("action", "listcountry");

                ajaxrequest(
                    "POST",
                    "<?php echo $config->getEndpointurl(); ?>" + "master",
                    formdata,
                    headersdata,
                    Onsuccesslistcountry,
                    OnErrorlistcountry
                );
                function Onsuccesslistcountry(content) {
                    var JsonData = JSON.stringify(content);
                    var resultdata = jQuery.parseJSON(JsonData);
                    $("#countryid").html(resultdata.data);
                    // $('#countryid').selectpicker('refresh');
                }

                function OnErrorlistcountry(content) {
                    ajaxrequest(
                        "POST",
                        "'<?php echo $config->getPage404url(); ?>'",
                        "",
                        "",
                        OnsuccessRender,
                        OnErrorRender
                    );
                }

                fillprimarycompanytype();
            }
            //Fill Primary Company Type
            function fillprimarycompanytype() {
                var pagename = getpagename();
                var headersdata = {
                    Accept: "application/json",
                    platform: 4,
                    userpagename: pagename,
                    useraction: "",
                    masterlisting: true,
                    responsetype: "HTML",
                };

                formdata = new FormData();
                formdata.append("action", "listprimarycompanytype");

                ajaxrequest(
                    "POST",
                    "<?php echo $config->getEndpointurl(); ?>" + "master",
                    formdata,
                    headersdata,
                    Onsuccesslistprimarycompanytype,
                    OnErrorlistprimarycompanytype
                );
                function Onsuccesslistprimarycompanytype(content) {
                    var JsonData = JSON.stringify(content);
                    var resultdata = jQuery.parseJSON(JsonData);
                    $("#primarycmptypeid").html(resultdata.data);
                    // $('#primarycmptypeid').selectpicker('refresh');
                }

                function OnErrorlistprimarycompanytype(content) {
                    ajaxrequest(
                        "POST",
                        "'<?php echo $config->getPage404url(); ?>'",
                        "",
                        "",
                        OnsuccessRender,
                        OnErrorRender
                    );
                }
            }
            if ($("#contactusForm").length) {
                $("#contactusForm").validate({
                    rules: {
                        cffname: {
                            required: true,
                        },
                        cflname: {
                            required: true,
                        },
                        cfcemail: {
                            required: true,
                            email: true,
                        },
                        cfphone: {
                            required: true,
                            maxlength: 15,
                        },
                        message: {
                            required: true,
                        },
                        privacyconsent: { required: true },
                    },
                    messages: {
                        cffname: {
                            required: "First Name is required",
                        },
                        cflname: {
                            required: "Last Name is required",
                        },
                        cfcemail: {
                            required: "Company Email is required",
                        },
                        cfphone: {
                            required: "Phone No is required",
                        },
                        message: {
                            required: "Message is required",
                        },
                        privacyconsent: { required: "Please agree to the Privacy Policy" },
                    },
                    submitHandler: function (form) {
                        var phonecode = $("#phonecodeid :selected").text();
                        var primarycmptype = "";
                        var country = "";
                        if ($("#primarycmptypeid :selected").val() != "") {
                            var primarycmptype = $("#primarycmptypeid :selected").text();
                        }
                        if ($("#countryid :selected").val() != "") {
                            var country = $("#countryid :selected").text();
                        }
                        var pagename = getpagename();
                        var useraction = "addright";
                        formdata = new FormData(form);
                        formdata.append("action", "insertcontactdata");
                        formdata.append("phonecode", phonecode);
                        formdata.append("primarycmptype", primarycmptype);
                        formdata.append("country", country);
                        var headersdata = {
                            Accept: "application/json",
                            platform: 4,
                            userpagename: pagename,
                            useraction: useraction,
                            masterlisting: false,
                        };
                        ajaxrequest(
                            "POST",
                            "<?php echo $config->getEndpointurl(); ?>" + "contactus",
                            formdata,
                            headersdata,
                            OnsuccesscontactusDataSubmit,
                            OnErrorcontactus
                        );

                        function OnsuccesscontactusDataSubmit(data) {
                            var JsonData = JSON.stringify(data);
                            var resultdata = jQuery.parseJSON(JsonData);
                            // $('.preloader').hide();

                            if (resultdata.status == 0) {
                                // alertify(resultdata.message,0);
                            } else if (resultdata.status == 1) {
                                $("#contactusForm").validate().resetForm();
                                $("#contactusForm").trigger("reset");
                                Notiflix.Notify.Success(resultdata.message);
                            }
                        }

                        function OnErrorcontactus(content) {
                            ajaxrequest(
                                "POST",
                                "'<?php echo $config->getPage404url(); ?>'",
                                "",
                                "",
                                OnsuccessRender,
                                OnErrorRender
                            );
                        }
                    },
                });
            }
        </script>
    </body>
</html>
