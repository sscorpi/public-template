<?php
function Footer($props = [])
{
    return <<<HTML
    <div class="cookie-container flex-display justify-between">
        <p>
            This is a sample cookie message. You can change it from the <a class="link blue-text">/components/Footer/Footer.php</a>.
        </p>
        <button class="cookie-btn">Got it</button>
    </div>
    <footer data-type="fraud-component" class="flex-display justify-between align-center">
        <div class="footer-copyright flex-display gap-5 light-text width-100 justify-between">
            <ul class="no-list-style flex-display gap-10">
                <li><a class="no-decoration link blue-text" href="/help-center/about-us">About Us</a></li>
                <li><a class="no-decoration link blue-text" href="/help-center/contact-us">Contact Us</a></li>
                <li><a class="no-decoration link blue-text" href="/help-center/terms-of-use">Terms of Use</a></li>
                <li><a class="no-decoration link blue-text" href="/help-center/privacy-policy">Privacy Policy</a></li>
            </ul>
            <p>© 2023 Fraud
                <span class="blue-text bold-text">PHP</span> All Rights Reserved. <span class="blue-text bold-text">v2.1.3</span>
            </p>
        </div>
    </footer>
    <script src="/src/js/cookie.js"></script>
    <script type="module" src="/.fraud/js/main.js"></script>
    </body>
    </html>
HTML;
}
