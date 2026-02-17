<!-- FOOTER -->
<section class="wed-hom-footer">
    <div class="container">
        <div class="row foot-supp">
            <h2><span>Free support:</span> +91 9960877313 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                hello@masihisathi.com</h2>
        </div>
        <div class="row wed-foot-link wed-foot-link-1">
            <div class="col-md-4">
                <h4>Get In Touch</h4>
                <p>Address: Nagpur, Maharashtra, India</p>
                <p>Phone: <a href="tel:+917904462944">+91 9960877313</a></p>
                <p>Email: <a href="mailto:hello@masihisathi.com">hello@masihisathi.com</a></p>
            </div>
            <div class="col-md-4">
                <h4>HELP &amp; SUPPORT</h4>
                <ul>
                    <?php
                    foreach ($footermenuItems as $title => $url) {
                        echo "<li><a href=\"$url\">$title</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-4 fot-soc">
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="#!"><img src="images/social/1.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/2.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/3.png" alt="" loading="lazy"></a></li>
                    <li><a href="#!"><img src="images/social/5.png" alt="" loading="lazy"></a></li>
                </ul>
            </div>
        </div>
        <div class="row foot-count">
            <p> Trusted by over thousands of Boys & Girls for successfull marriage. <a href="#!"
                    class="btn btn-primary btn-sm">Join us today !</a></p>
        </div>
    </div>
</section>
<!-- END -->

<!-- COPYRIGHTS -->
<section>
    <div class="cr">
        <div class="container">
            <div class="row">
                <p>Copyright © <span ><?php echo date("Y") ?></span> <a href="index.php"
                        target="_blank">MasihiSathi.com</a> All
                    rights reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select-opt.js"></script>
<script src="js/slick.js"></script>
<script src="js/custom.js"></script>

<!-- Consent Modal Script -->

</body>

</html>