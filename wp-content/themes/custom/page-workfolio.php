<?php get_header(); ?>



<div class='about-container' id='anchor-about'>
    <div class="about">
        <h1>
            Hey I am Gregor
        </h1>
        <p>
            a web developer
        </p>

    </div>
    <div class="fields">
        <p class="wow fadeInDown" data-wow-delay="0.5s>">
            frontend
        </p>
        <p class="wow fadeInDown" data-wow-delay="1s">
            fullstack
        </p>
        <p class="wow fadeInDown" data-wow-delay="1.5s">
            WordPress
        </p>
        <p class="wow fadeInDown" data-wow-delay="2s">
            1C-Bitrix
        </p>
    </div>
</div>


<div class='projects-container' id='anchor-projects'>

    <h2>
        These are some of my projects
    </h2>

    <div class='projects'>

        <div class='tiles-container'>
            <a href="https://mospat.ru/">
                <div class='project wow fadeIn' data-wow-delay="0.3s">
                    <img src="/wp-content/themes/custom/images/mospat-tile-image.jpg" alt="MosPat">
                    <h3>News Website</h3>
                </div>
            </a>
            <a href="https://gregor-eisenhorn.github.io/tea-cozy-project/">
                <div class='project wow fadeIn' data-wow-delay="0.5s"'>
                    <img src="/wp-content/themes/custom/images/tea-cozy-tile.png" alt="Tea Cozy">
                    <h3>Corporate Site</h3>
                </div>
            </a>
            <a href="https://gregor-eisenhorn.github.io/retinorm/">
                <div class='project wow fadeIn' data-wow-delay="0.7s"'>
                    <img src="/wp-content/themes/custom/images/retinorm.png" alt="Retinorm">
                    <h3>Drug Brand</h3>
                </div>
            </a>
            <a href="https://gregor-eisenhorn.github.io/chore-door//">
                <div class='project wow fadeIn' data-wow-delay="0.9s">
                    <img src="/wp-content/themes/custom/images/chore-door.jpg" alt="Tea Cozy">
                    <h3>Really fun game</h3>
                </div>
            </a>
            <a href="https://gregor-eisenhorn.github.io/number-guesser/">
                <div class='project wow fadeIn' data-wow-delay="0.9s">
                    <img src="/wp-content/themes/custom/images/number-guesser.jpg" alt="Number Guesser">
                    <h3>Another fun game!</h3>
                </div>
            </a>
            <a href="<?=home_url( '/gallery/' )?>">
                <div class='project wow fadeIn' data-wow-delay="1.1s"'>
                    <img src="/wp-content/themes/custom/images/gallery.jfif" alt="Gallery">
                    <h3>Image Gallery</h3>
                </div>
            </a>
        </div>

    </div>

</div>


<div class='contact' id='anchor-contact'>

    <h2>
        Let's work together
    </h2>
    <p>
        How do you take your coffee?
    </p>

    <div class='icons'>
        <div class="icon wow fadeIn" data-wow-delay="0.3s">
            <img src="/wp-content/themes/custom/images/social media icons/tg.png" alt="Facebook Icon">
            <a href="https://t.me/sgregor_eisenhorn_ox">Telegram</a>
        </div>
        <div class="icon wow fadeIn" data-wow-delay="0.5s">
            <img src="<?php bloginfo('template_url'); ?>/images/social media icons/git.png" alt="GitHub Icon">
            <a href="https://github.com/Gregor-Eisenhorn">Github</a>
        </div>
        <div class="icon wow fadeIn" data-wow-delay="0.7s">
            <img src="/wp-content/themes/custom/images/social media icons/vk.png" alt="Twitter Icon">
            <a href="https://vk.com/id287583803">vKontakte</a>
        </div>
        <div class="icon wow fadeIn" data-wow-delay="0.9s">
            <img src="<?php bloginfo('template_url'); ?>/images/social media icons/email.png" alt="Mail Icon">
            <a href="mailto:vladimir.arakelyan73@gmail.com">Send a mail</a>
        </div>
        <div class="icon wow fadeIn" data-wow-delay="1.1s">
            <img src="<?php bloginfo('template_url'); ?>/images/social media icons/phone.png" alt="Phone Icon">
            <a href="tel:89170590343">+7 (917) 059-03-43</a>
        </div>
    </div>
</div>


<?php get_footer(); ?>