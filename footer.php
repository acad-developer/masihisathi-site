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
<script>
(function() {
    'use strict';
    
    // Check if user has already given consent
    function hasConsent() {
        return localStorage.getItem('masihisathi_consent') === 'accepted';
    }
    
    // Show consent modal
    function showConsentModal() {
        var modal = document.getElementById('consentModal');
        if (modal) {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }
    }
    
    // Hide consent modal
    function hideConsentModal() {
        var modal = document.getElementById('consentModal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = ''; // Restore scrolling
        }
    }
    
    // Save consent
    function saveConsent() {
        localStorage.setItem('masihisathi_consent', 'accepted');
        localStorage.setItem('masihisathi_consent_date', new Date().toISOString());
        hideConsentModal();
    }
    
    // Initialize consent modal
    function initConsentModal() {
        // Check if consent has been given
        if (!hasConsent()) {
            // Wait for page to load, then show modal
            setTimeout(function() {
                showConsentModal();
            }, 500); // Small delay for better UX
        }
        
        // Accept button handler
        var acceptBtn = document.getElementById('acceptConsent');
        if (acceptBtn) {
            acceptBtn.addEventListener('click', function() {
                var checkbox = document.getElementById('consentCheckbox');
                if (checkbox && checkbox.checked) {
                    saveConsent();
                } else {
                    alert('Please check the consent checkbox to continue.');
                }
            });
        }
        
        // Decline button handler
        var declineBtn = document.getElementById('declineConsent');
        if (declineBtn) {
            declineBtn.addEventListener('click', function() {
                if (confirm('By declining, you may not be able to access all features of our website. Are you sure you want to decline?')) {
                    localStorage.setItem('masihisathi_consent', 'declined');
                    localStorage.setItem('masihisathi_consent_date', new Date().toISOString());
                    hideConsentModal();
                }
            });
        }
        
        // Enable/disable accept button based on checkbox state
        var checkbox = document.getElementById('consentCheckbox');
        if (checkbox && acceptBtn) {
            checkbox.addEventListener('change', function() {
                acceptBtn.disabled = !this.checked;
            });
            // Initially disable accept button
            acceptBtn.disabled = true;
        }
        
        // Prevent closing modal by clicking overlay (user must make a choice)
        var overlay = document.querySelector('.consent-modal-overlay');
        if (overlay) {
            overlay.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    }
    
    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initConsentModal);
    } else {
        initConsentModal();
    }
})();
</script>

</body>

</html>