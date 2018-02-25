
<?php
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $name_error = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)) {
            $phone_error = "Invalid phone number";
        }
    }
    if (empty($_POST["url"])) {
        $url_error = "";
    } else {
        $url = test_input($_POST["url"]);
        if (!preg_match("/\b(?:(?:http?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            $url_error = "Invalid url";
        }
    }
    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST['message']);
    }

    if ($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '') {
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }

        $to = 'shohel.rana@rite.com.bd';
        $subject = 'Contact form Submit';
        if (mail($to, $subject, $message)) {
            $success = "Message sent, thank you for contacting us! ";
            $name = $email = $phone = $message = $url = '';
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<link rel="stylesheet" href="./assets/fornt_end/css/mail.css" type="text/css">
<section id="contact-info">
    <div class="center">                
        <h2>How to Reach Us?</h2>
        <p class="lead"></p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <!--<div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="10" marginwidth="10" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                    </div>-->
                    <div style="width: 100%"><iframe frameborder="0" scrolling="no" width="100%" height="400" src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=400&hl=ru&q=House%2390%20Road%2317%2FA%20Block-E%20Banani%20Dhaka-1213%20%20Bangladesh+(Rite%20Solutions%20Limited)&ie=UTF8&t=&z=16&iwloc=A&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">www.mapsdirections.info</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe></div><br />
                </div>

                <div class="col-sm-2 map-content">
                    <ul class="row">
                        <li class="col-sm-12">
                            <address>
                                <b><h3>RITE Solutions Limited</h3></b>
                                <h5>Head Office</h5>
                                <p class="size1">House-90(2nd Floor)<br>
                                    Road-17/A Block-E, <br>
                                    Banani, Dhaka-1213</p>
                                <p class="size1">Query : <a href="mailTo:info@rite.com.bd">info@rite.com.bd</a><br>
                                    <a href="mailTo:support@rite.com.bd">support@rite.com.bd</a><br>
                                    <a href="http://www.rite.com.bd/">www.rite.com.bd</a><br> Tel : +880 2 8836633<br>
                                    Phone : +880 184 7216924</p>
                            </address>


                        </li>


                        <!-- <li class="col-sm-7">
 
                         </li>-->
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="container container1">
                        <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                            <h3>Quick Contact</h3>
                            <h4>Contact us today, and get reply with in 24 hours!</h4>
                            <fieldset>
                                <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" required autofocus>
                                <span class="error"><?= $name_error ?></span>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2" required>
                                <span class="error"><?= $email_error ?></span>
                            </fieldset>
                            <link rel="stylesheet" href="assets/fornt_end/build/css/intlTelInput.css">
                            <link rel="stylesheet" href="assets/fornt_end/build/css/demo.css">
                            <style type="text/css">
                                .de{
                                    width: 45px;
                                    color: black;
                                    background-color: white;
                                }
                                .ff{
                                    padding-left: 20px;
                                    width: 86%;
                                    background-color: white;
                                }
                            </style>
                            <fieldset><div><input class="de" id="phone" type="tel">&nbsp;<input class="ff" type="" name="phone" value="<?= $phone ?>" required>
                                    <span class="error"><?= $phone_error ?></span>
                                </div></fieldset>
                            
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script src="assets/fornt_end/build/js/intlTelInput.js"></script>
                            <script>
                                $("#phone").intlTelInput({
                                    // allowDropdown: false,
                                    // autoHideDialCode: false,
                                    // autoPlaceholder: "off",
                                    // dropdownContainer: "body",
                                    // excludeCountries: ["us"],
                                    // formatOnDisplay: false,
                                    // geoIpLookup: function(callback) {
                                    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                                    //     var countryCode = (resp && resp.country) ? resp.country : "";
                                    //     callback(countryCode);
                                    //   });
                                    // },
                                    // hiddenInput: "full_number",
                                    // initialCountry: "auto",
                                    // nationalMode: false,
                                    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                                    // placeholderNumberType: "MOBILE",
                                    // preferredCountries: ['cn', 'jp'],
                                    // separateDialCode: true,
                                    utilsScript: "assets/fornt_end/build/js/utils.js"
                                });
                            </script>


                            <!--<fieldset>
                                <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" required>
                                <span class="error"><?= $url_error ?></span>
                            </fieldset>-->
                            <fieldset>
                                <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" required></textarea>
                            </fieldset>
                            <fieldset>
                                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                            </fieldset>
                            <div class="success"><?= $success; ?></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>  <!--/gmap_area -->







<!--<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Drop Your Message</h2>
        </div> 
        <fieldset>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" action="mailto:shohel.rana@rite.com.bd" method="post" enctype="text/plain">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="mail" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div> 
                        <input type="submit" value="Send">
<!--<div class="form-group">
    <button type="submit" value="Send" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
</div>-->
<!--</div>
</form> 
</div>
</fieldset>
</div>
</section>-->







