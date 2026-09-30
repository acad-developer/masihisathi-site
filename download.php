<?php include("header.php"); ?>
<style>
    body:has(.download-page) .hom-top:before,
    body:has(.download-page) .hom-top:after {
        display: none;
    }

    .download-page {
        padding: 140px 0 90px;
        background: #fff9ed;
    }

    .download-page .download-layout {
        display: grid;
        grid-template-columns: minmax(0, 1.2fr) minmax(260px, 0.8fr);
        align-items: center;
        gap: 56px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .download-page .download-kicker {
        margin-bottom: 16px;
        color: #936018;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .download-page h1 {
        margin-bottom: 20px;
        color: #66451c;
        font-size: 48px;
        line-height: 1.15;
    }

    .download-page .download-lead {
        max-width: 580px;
        margin-bottom: 30px;
        color: #51412d;
        font-size: 18px;
        line-height: 1.7;
    }

    .download-page .download-availability {
        margin: 0 0 24px;
        color: #66451c;
        font-size: 16px;
        font-weight: 600;
    }

    .download-page .download-cta {
        display: inline-block;
        padding: 14px 24px;
        border-radius: 4px;
        background: #a96f13;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
    }

    .download-page .download-cta:hover,
    .download-page .download-cta:focus {
        background: #80520d;
        color: #fff;
    }

    .download-page .download-badges {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 12px;
        margin-top: 22px;
    }

    .download-page .download-badges img {
        display: block;
        width: auto;
        height: 48px;
        object-fit: contain;
    }

    .download-page .download-brand {
        padding: 38px 30px;
        border-left: 3px solid #d9a441;
        text-align: center;
    }

    .download-page .download-brand img {
        width: 190px;
        height: 190px;
        object-fit: contain;
    }

    .download-page .download-brand p {
        margin: 20px 0 0;
        color: #66451c;
        font-family: var(--tit-font);
        font-size: 23px;
        line-height: 1.4;
    }

    @media (max-width: 767px) {
        .download-page {
            padding: 110px 0 56px;
        }

        .download-page .download-layout {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .download-page h1 {
            font-size: 36px;
        }

        .download-page .download-brand {
            padding: 24px 0 0;
            border-top: 1px solid #e4d6be;
            border-left: 0;
        }

        .download-page .download-brand img {
            width: 140px;
            height: 140px;
        }
    }

    @media (min-width: 1101px) and (max-width: 1200px) {
        .download-page {
            padding-top: 164px;
        }
    }
</style>

<main class="download-page">
    <div class="container download-layout">
        <div>
            <p class="download-kicker">MasihiSathi Christian Matrimony. Made Simple.</p>
            <h1>Find. Connect.<br>Begin Your Journey.</h1>
            <p class="download-lead">Download the MasihiSathi App and begin your journey toward a meaningful connection.</p>
            <p class="download-availability">Available on Android &amp; iOS</p>
            <p>Masihisathi Matrimonial App Launched Now. Download Today!</p>
            <a class="download-cta" href="https://onelink.to/djnmqp" target="_blank" rel="noopener noreferrer">Download the MasihiSathi App</a>
            <div class="download-badges" aria-label="Download on Android or iOS">
                <a href="https://onelink.to/djnmqp" target="_blank" rel="noopener noreferrer" aria-label="Download for Android">
                    <img src="images/en_badge_web_generic.png" alt="Get it on Google Play" loading="lazy">
                </a>
                <a href="https://onelink.to/djnmqp" target="_blank" rel="noopener noreferrer" aria-label="Download for iOS">
                    <img src="images/download-on-the-app-store.svg" alt="Download on the App Store" loading="lazy">
                </a>
            </div>
        </div>
        <div class="download-brand" aria-hidden="true">
            <img src="images/MS images/homelogo.png" alt="" loading="lazy">
            <p>Christian Matrimony.<br>Made Simple.</p>
        </div>
    </div>
</main>
<?php include("footer.php"); ?>