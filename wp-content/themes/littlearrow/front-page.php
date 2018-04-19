
<?php get_header(); ?>
        
        <!-- Home-->
        <!-- still needs wordpress form to post values to designated email adress. see if you can post to wordrpess into if there
        is one -->
        <header id="showcase">
        
                <div class="showcase-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block">
                                <h1 class="display-4"><?php echo get_theme_mod('showcase_heading', 'Send your questions to Mufti Dilwar Hussein') ?> </h1>
                                <div class="d-flex flex-row">
                                    <div class="py-4 align-self-end">
                                        <?php echo get_theme_mod('showcase_text_one', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae') ?>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="py-4 align-self-end">
                                        <?php echo get_theme_mod('showcase_text_two', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae') ?>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="py-4 align-self-end">
                                        <?php echo get_theme_mod('showcase_text_three', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae') ?>
                                    </div>
                                </div>
                                <div class=" pt-5 text-left"><a href="<?php echo get_theme_mod('qa_btn_url', '/home.php') ?>" class="btn btn-outline-light"><?php echo get_theme_mod('qa_btn_text', 'Read More') ?></a></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-primary text-center">
                                    <div class="card-body">
                                        <h3>Ask Mufti</h3>
                                        <p>Please fill out this form to send your questions</p>
                                        <form >
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" class="form-control form-control-lg" placeholder="Question...?"></textarea>
                                            </div>
                                            <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        </header>

        <!-- About -->
        <section id="about">
          <div class="container">
            
              <div class="text-center">
                <div class="p-5">
                  <h1 class="display-4"><?php echo get_theme_mod('about_heading', 'About Us') ?></h1>
                  <p class="lead"><?php echo get_theme_mod('about_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.') ?></p>
                  <a href="<?php echo get_theme_mod('about_btn_url', 'page.php') ?>" class="btn btn-outline-light"><?php echo get_theme_mod('about_btn_text', 'Read More') ?></a>
                </div>
              </div>

          </div>
        </section>

        <!-- Qa -->
        <!-- Q & A still needs an archive page, categories and dates etc. -->
        <section id="qa">
            <div class="container py-5">
                <div class="pb-3 text-center">
                    <h1 class="display-4"><?php echo get_theme_mod('qa_heading', 'Questions And Answers') ?></h1>
                    <p class="lead"><?php echo get_theme_mod('qa_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.') ?></p>
                </div>


                 <div class="row">
                    
                        <?php 
                            $the_query = new WP_Query( 'posts_per_page=2' );

                            while ($the_query -> have_posts()) : $the_query -> the_post(); 

                        ?>
                        <div class="post-preview">
                            <a href="<?php the_permalink(); ?>">
                                <h2 style="font-weight:600;">
                                    <?php the_title(); ?>
                                </h2>
                                <h3 class="lead">
                                    <?php the_excerpt(); ?>
                                </h3>
                            </a>
                            <p class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
                            <hr>
                        </div>
                        
                        <?php endwhile;  wp_reset_postdata(); ?>
                            
                 </div>

                <div class=" pt-4 text-center"><a href="<?php echo get_theme_mod('qa_btn_url', '/home.php') ?>" class="btn btn-outline-dark"><?php echo get_theme_mod('qa_btn_text', 'Read More') ?></a></div>
          </div>
        </section>

        <!-- News Letter-->
        <!-- Still needs form to submit email address too subscribe -->
        <section id="news-letter">
          <div class="container py-5">
            <div class="pb-2 text-center">
              <h2><?php echo get_theme_mod('news-letter_heading', 'Subscribe To Our Newsletter') ?></h2>
              <p class="lead"><?php echo get_theme_mod('news-letter_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, optio.') ?></p>
            </div>
            <div class="row justify-content-center text-center">
              <div class="col-lg-7">
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address">
                    </div>
                    <button type="submit" class="btn btn-outline-light"><?php echo get_theme_mod('news-letter_btn_text', 'Subscribe Now') ?></button>
                  </form>
              </div>
            </div>
          </div>
        </section>

        <!-- Classes -->
        <!-- Still needs widgets for class dates and times etc -->
        <section id="classes">
            <div class="container py-5 text-center">
              <h1 class="display-4"><?php echo get_theme_mod('classes_heading', 'Weekly Classes') ?></h1>
              <p class="lead"><?php echo get_theme_mod('classes_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, optio.') ?></p>
              <div class="row py-3">
              
                  <div class="col-lg-4">
                    <div class="box">
                        <div class="box-content p-2">
                            <h2>Quran</h2>
                            <h4 id="class1"></h4>
                            <p>For all inquiries please call <em>555-3344</em></p>
                            <div id="quran"></div>
                        </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="box">
                        <div class="box-content p-2">
                            <h2>Hadeeth</h2>
                            <h4 id="class2"></h4>
                            <p>For all inquiries please call <em>555-3344</em></p>
                            <div id="hadeeth"></div>
                        </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="box">
                        <div class="box-content p-2">
                            <h2>Fiqh</h2>
                            <h4 id="class3"></h4>
                            <p>For all inquiries please call <em>555-3344</em></p>
                            <div id="fiqh"></div>
                        </div>
                    </div> 
                  </div>
                  
               </div>
            </div>
          </section>

        <!-- Qaida -->
        <!-- Make a progressive web app page with the interactive qaida for use on mobile or tablets -->
        <section id="qaida">
            <div class="container py-5 text-center">
                <h1 class="display-4"><?php echo get_theme_mod('qaida_heading', 'Online Qaida') ?></h1>
                <p class="lead"><?php echo get_theme_mod('qaida_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.') ?></p>
                <a href="<?php echo get_theme_mod('qaida_btn_url', '') ?>" class="btn btn-outline-light"><?php echo get_theme_mod('qaida_btn_text', 'Learn Now') ?></a>
            </div>
        </section>

        <!-- Contact -->
        <!-- Fix the logo on map & add social media icons/ also introduce into the them customizer -->
        <section id="contact">
          <div id="map"></div>
          <div class="container pt-2 text-center">
            <h1 class="display-4"><?php echo get_theme_mod('contact_heading', 'Contact Me') ?></h1>
            <p class="lead"><b>on <a href="<?php echo get_theme_mod('contact_number_url', 'tel://+447866817007') ?>"><b style="color:#10a2c7b0;"><?php echo get_theme_mod('contact_number_text', '07866817007') ?></b></a> <?php echo get_theme_mod('contact_time_text', '5.00pm till 8.00pm') ?></b><br><?php echo get_theme_mod('contact_text', 'or click on the logo above to visit me') ?><br></p>
            <div class="pt-3 pb-4"><a class="btn btn-outline-dark" onclick="toTop(); return false;" href="#">Go to Top</a></div>
          </div>            
        </section>

<?php get_footer(); ?>