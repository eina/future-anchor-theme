<?php theme_include('header');?>
    <!--start the blog page-->
    <main>
        <header>
            <h1 class="page-title"><?php echo page_title();?></h1>
        </header>
        <article>
            <div class="wrap">

                <form action="" method="POST">
                    <h2>Send Me a Message</h2>
                    <p>I am currently available for work. A response should be sent within <strong>3 days</strong>.</p>
                    <input type="hidden" name="_subject" value="eina.ca Message" />

                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" />

                    <input type="text" name="_gotcha" style="display:none" />

                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" />

                    <label for="message">Your Message</label>
                    <textarea name="message" id="message"></textarea>

                    <button>Send Message</button>
                </form>

            </div>
        </article>
<?php theme_include('footer');?>