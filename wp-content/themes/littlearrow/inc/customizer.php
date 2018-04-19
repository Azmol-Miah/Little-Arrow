<?php 

function littlarrow_customize_register($wp_customize){
    //showcase Section.......................
        $wp_customize->add_section('showcase', array(
            'title' => __('Showcase', 'littlearrow'),
            'description' => sprintf(__('Options for showcase', 'littlearrow')),
            'priority' => 130
        ));

        $wp_customize->add_setting('showcase_image', array(
            'default' => get_bloginfo('template_directory').'/img/home.jpg',
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
            'label' => __('Showcase Image', 'littlearrow'),
            'section' => 'showcase',
            'seetings' => 'showcase_image',
            'priority' => 1
        )));

        $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('Send your questions to Mufti Dilwar Hussein', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'showcase',
            'priority' => 2
        ));

        $wp_customize->add_setting('showcase_text_one', array(
            'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text_one', array(
            'label' => __('Text 1', 'littlearrow'),
            'section' => 'showcase',
            'priority' => 3
        ));

        $wp_customize->add_setting('showcase_text_two', array(
            'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text_two', array(
            'label' => __('Text 2', 'littlearrow'),
            'section' => 'showcase',
            'priority' => 4
        ));

        $wp_customize->add_setting('showcase_text_three', array(
            'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia dicta, esse commodi vitae molestiae', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text_three', array(
            'label' => __('Text 3', 'littlearrow'),
            'section' => 'showcase',
            'priority' => 5
        ));
    
    //About Section
        $wp_customize->add_section('about', array(
            'title' => __('About', 'littlearrow'),
            'description' => sprintf(__('Options for about', 'littlearrow')),
            'priority' => 131
        ));

        $wp_customize->add_setting('about_heading', array(
            'default' => _x('About Us', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('about_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'about',
            'priority' => 1
        ));

        $wp_customize->add_setting('about_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('about_text', array(
            'label' => __('Text', 'littlearrow'),
            'section' => 'about',
            'priority' => 2
        ));

        $wp_customize->add_setting('about_btn_url', array(
            'default' => _x('page.php', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('about_btn_url', array(
            'label' => __('Button URL', 'littlearrow'),
            'section' => 'about',
            'priority' => 3
        ));

        $wp_customize->add_setting('about_btn_text', array(
            'default' => _x('Read More', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('about_btn_text', array(
            'label' => __('Button Text', 'littlearrow'),
            'section' => 'about',
            'priority' => 3
        ));

    // q and a section
        $wp_customize->add_section('qa', array(
            'title' => __('Q & A', 'littlearrow'),
            'description' => sprintf(__('Options for q and a', 'littlearrow')),
            'priority' => 132
        ));

        $wp_customize->add_setting('qa_heading', array(
            'default' => _x('Questions And Answers', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qa_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'qa',
            'priority' => 1
        ));

        $wp_customize->add_setting('qa_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qa_text', array(
            'label' => __('Text', 'littlearrow'),
            'section' => 'qa',
            'priority' => 2
        ));

        $wp_customize->add_setting('qa_btn_url', array(
            'default' => _x('page.php', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qa_btn_url', array(
            'label' => __('Button URL', 'littlearrow'),
            'section' => 'qa',
            'priority' => 3
        ));

        $wp_customize->add_setting('qa_btn_text', array(
            'default' => _x('Older Posts', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qa_btn_text', array(
            'label' => __('Button Text', 'littlearrow'),
            'section' => 'qa',
            'priority' => 3
        ));
    
    // News Letter
        $wp_customize->add_section('news-letter', array(
            'title' => __('News Letter', 'littlearrow'),
            'description' => sprintf(__('Options for news-letter ', 'littlearrow')),
            'priority' => 133
        ));

        $wp_customize->add_setting('news-letter_heading', array(
            'default' => _x('Subscribe To Our Newsletter', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('news-letter_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'news-letter',
            'priority' => 1
        ));

        $wp_customize->add_setting('news-letter_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('news-letter_text', array(
            'label' => __('Text', 'littlearrow'),
            'section' => 'news-letter',
            'priority' => 2
        ));

        $wp_customize->add_setting('news-letter_btn_text', array(
            'default' => _x('Subscribe Now', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('news-letter_btn_text', array(
            'label' => __('Button Text', 'littlearrow'),
            'section' => 'news-letter',
            'priority' => 3
        ));
        
    // Weekly Classes   
        $wp_customize->add_section('classes', array(
            'title' => __('Weekly Classes', 'littlearrow'),
            'description' => sprintf(__('Options for classes ', 'littlearrow')),
            'priority' => 134
        ));

        $wp_customize->add_setting('classes_image', array(
            'default' => get_bloginfo('template_directory').'/img/qurantwo.jpg',
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'classes_image', array(
            'label' => __('Classes Image', 'littlearrow'),
            'section' => 'classes',
            'seetings' => 'classes_image',
            'priority' => 1
        )));
        $wp_customize->add_setting('classes_heading', array(
            'default' => _x('Weekly Classes', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('classes_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'classes',
            'priority' => 2
        ));

        $wp_customize->add_setting('classes_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('classes_text', array(
            'label' => __('Text', 'littlearrow'),
            'section' => 'classes',
            'priority' => 3
        ));
    
    // Qaida
        $wp_customize->add_section('qaida', array(
            'title' => __('Qaida', 'littlearrow'),
            'description' => sprintf(__('Options for Qaida', 'littlearrow')),
            'priority' => 135
        ));

        $wp_customize->add_setting('qaida_heading', array(
            'default' => _x('Online Qaida', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qaida_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'qaida',
            'priority' => 1
        ));

        $wp_customize->add_setting('qaida_text', array(
            'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga distinctio quod rerum nemo deleniti enim perspiciatis dolorem beatae, sequi dolores natus hic quidem esse fugit officia veniam obcaecati saepe.', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qaida_text', array(
            'label' => __('Text', 'littlearrow'),
            'section' => 'qaida',
            'priority' => 2
        ));

        $wp_customize->add_setting('qaida_btn_url', array(
            'default' => _x('', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qaida_btn_url', array(
            'label' => __('Button URL', 'littlearrow'),
            'section' => 'qaida',
            'priority' => 3
        ));

        $wp_customize->add_setting('qaida_btn_text', array(
            'default' => _x('Learn Now', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('qa_btn_text', array(
            'label' => __('Button Text', 'littlearrow'),
            'section' => 'qaida',
            'priority' => 4
        ));
    
    // Contact
        $wp_customize->add_section('contact', array(
            'title' => __('Contact', 'littlearrow'),
            'description' => sprintf(__('Options for contact', 'littlearrow')),
            'priority' => 136
        ));

        $wp_customize->add_setting('contact_heading', array(
            'default' => _x('Contact Me', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('contact_heading', array(
            'label' => __('Heading', 'littlearrow'),
            'section' => 'contact',
            'priority' => 1
        ));

        $wp_customize->add_setting('contact_text', array(
            'default' => _x('or click on the logo above to visit me', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('contact_text', array(
            'label' => __('Contact Text', 'littlearrow'),
            'section' => 'contact',
            'priority' => 5
        ));

        $wp_customize->add_setting('contact_time_text', array(
            'default' => _x('5.00pm till 8.00pm', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('contact_time_text', array(
            'label' => __('Contact Time Text', 'littlearrow'),
            'section' => 'contact',
            'priority' => 4
        ));

        $wp_customize->add_setting('contact_number_url', array(
            'default' => _x('tel://+447866817007', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('contact_number_url', array(
            'label' => __('Number URL', 'littlearrow'),
            'section' => 'contact',
            'priority' => 2
        ));

        $wp_customize->add_setting('contact_number_text', array(
            'default' => _x('07866817007', 'littlearrow'),
            'type'    => 'theme_mod'
        ));

        $wp_customize->add_control('contact_number_text', array(
            'label' => __('Contact Number', 'littlearrow'),
            'section' => 'contact',
            'priority' => 3
        ));
        
}

add_action('customize_register', 'littlarrow_customize_register');