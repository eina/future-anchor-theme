<?php theme_include('header');?>
    <!--start the blog page-->
    <main>
        <header>
            <h1 class="page-title animated slideInDown"><?php echo page_title();?></h1>
        </header>
        <article>
            <div class="wrap">

                <form action="" method="POST">
                    <h2>Let's work together</h2>

                    <p class="form-lead">If you have any projects in mind or would like to talk about web development, send me a message and I should be able to respond within 3 business days.</p>

                    <input type="hidden" name="_subject" value="eina.ca Message" />

                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" />

                    <input type="text" name="_gotcha" style="display: none;" />

                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" />

                    <label for="message">Your Message</label>
                    <textarea name="message" id="message"></textarea>

                    <button>Send Message</button>
                </form>

                <div class="contact-content">
                    <h3 class="section-title">Elsewhere on the internet</h3>
                    <p>The internet is a vast, interesting and distracting place to be so here are some of my links:</p>
                    <ul class="social-list">
                        <li class="twitter"><a href="https://twitter.com/littleblacksmth"><span class="fa fa-twitter"></span><span class="social-handle">@littleblacksmth</span></a></li>
                        <li class="linkedin"><a href="https://ca.linkedin.com/in/einaonting"><span class="fa fa-linkedin"></span><span class="social-handle">/einaonting</span></a></li>
                        <li class="github"><a href="https://github.com/thelittleblacksmith"><span class="fa fa-github"></span><span class="social-handle">/thelittleblacksmith</span></a></li>
                        <li class="instagram"><a href="https://instagram.com/thelittleblacksmith"><span class="fa fa-instagram"></span><span class="social-handle">@thelittleblacksmith</span></a></li>
                    </ul>
                </div>
            </div>
        </article>
<?php theme_include('footer');?>