<?php
//SIDEBAR SECTION
function four_level_slider_admin_menu_option() {
    add_menu_page('4 Level Slider', '4 Level Slider', 'manage_options', 'fls-admin-menu', 'four_level_slider_fields', 'dashicons-media-code', 200);
}
add_action('admin_menu', 'four_level_slider_admin_menu_option');



//ADMIN SECTION
function four_level_slider_fields( $wp_customize ) {

    if(array_key_exists('submit_scripts_update', $_POST)) {
        update_option('fls_background_color', $_POST['fls_backg_color']);
        update_option('fls_text_color', $_POST['fls_txt_color']);
        update_option('fls_circle_color', $_POST['fls_circ_color']);
        update_option('fls_circle_active_color', $_POST['fls_a_circ_color']);

        update_option('fls_slide_1_title', $_POST['flsslider_one_title']);
        update_option('flsslider_one_1_link', $_POST['flsslider_one_link']);
        update_option('flsslider_one_1_img', $_POST['flsslider_one_img']);

        update_option('fls_slide_2_title', $_POST['flsslider_two_title']);
        update_option('flsslider_one_2_link', $_POST['flsslider_two_link']);
        update_option('flsslider_one_2_img', $_POST['flsslider_two_img']);

        update_option('fls_slide_3_title', $_POST['flsslider_three_title']);
        update_option('flsslider_one_3_link', $_POST['flsslider_three_link']);
        update_option('flsslider_one_3_img', $_POST['flsslider_three_img']);

        update_option('fls_slide_4_title', $_POST['flsslider_four_title']);
        update_option('flsslider_one_4_link', $_POST['flsslider_four_link']);
        update_option('flsslider_one_4_img', $_POST['flsslider_four_img']);

        ?>
            <div id="setting-error-settings-updated" class="updated settings-error notice is-dismissible"><strong>Settings have been saved.</strong></div>
        <?php
    }

    $background_color = get_option('fls_background_color', 'rgba(11, 145, 147,0.8)');
    $text_color = get_option('fls_text_color', '#FFFFFF');
    $circle_color = get_option('fls_circle_color', '#FFFFFF');
    $circle_active_color = get_option('fls_circle_active_color', '#f8931f');


    $flsslider_one_title = get_option('fls_slide_1_title', 'Slide 1');
    $flsslider_one_link = get_option('flsslider_one_1_link', '#');
    $flsslider_one_img = get_option('flsslider_one_1_img', 'http://lab.ascdev.org/example.jpg');

    $flsslider_two_title = get_option('fls_slide_2_title', 'Slide 2');
    $flsslider_two_link = get_option('flsslider_one_2_link', '#');
    $flsslider_two_img = get_option('flsslider_one_2_img', 'http://lab.ascdev.org/example.jpg');

    $flsslider_three_title = get_option('fls_slide_3_title', 'Slide 3');
    $flsslider_three_link = get_option('flsslider_one_3_link', '#');
    $flsslider_three_img = get_option('flsslider_one_3_img', 'http://lab.ascdev.org/example.jpg');

    $flsslider_four_title = get_option('fls_slide_4_title', 'Slide 4');
    $flsslider_four_link = get_option('flsslider_one_4_link', '#');
    $flsslider_four_img = get_option('flsslider_one_4_img', 'http://lab.ascdev.org/example.jpg');
?>
    <div class="fls_slide_wrap">
        <h1 class="fls_title">4 Level Slider</h1>
        <p>This is very simple slider plugin with 4 images. Add Title, Link and Image then hit save changes. Finally copy this shortcode <b>[four_level_slider]</b> and paste it where you want to show this slider.</p>
        <p class="fls_descritpion">For best experience upload images in size 1920px x 1282px</p>

        <form method="post" action="">
            <div class="fls_slide_section_colors">
                <label class="fls_label">Background Color</label>
                <input type="text" name="fls_backg_color" value="<?php echo $background_color; ?>" class="my-color-field" data-default-color="rgba(11, 145, 147,0.8)">
                <label class="fls_label second-row">Text Color</label>
                <input type="text" name="fls_txt_color" value="<?php echo $text_color; ?>" class="my-color-field" data-default-color="#FFFFFF">
                <br><br>
                <label class="fls_label">Circle Color</label>
                <input type="text" name="fls_circ_color" value="<?php echo $circle_color; ?>" class="my-color-field" data-default-color="#FFFFFF">
                <label class="fls_label second-row">Active Circle Color</label>
                <input type="text" name="fls_a_circ_color" value="<?php echo $circle_active_color; ?>" class="my-color-field" data-default-color="#f8931f">
            </div>
            <div class="fls_slide_section fls-first-child">
                <div class="slideimg_wrapper"
                    <?php if (isset($flsslider_one_img) && $flsslider_one_img != "" ) : ?>
                        style="background-image: url(<?php echo esc_url( $flsslider_one_img ); ?>);"
                    <?php endif; ?>
                ></div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Title of Slider 1</label>
                    <input class="fls_input" name="flsslider_one_title" value="<?php echo $flsslider_one_title; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Link of Slider 1</label>
                    <input class="fls_input" name="flsslider_one_link" value="<?php echo $flsslider_one_link; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Image 1</label>
                    <div class="upload_fls_wrapp">
                        <input class="slideImg fls_input" name="flsslider_one_img" value="<?php echo $flsslider_one_img; ?>" />
                        <input class="slideImgBtn" type="button" value="Add" />
                    </div>
                </div>
            </div>
            <div class="fls_slide_section">
            <div class="slideimg_wrapper"
                    <?php if (isset($flsslider_two_img) && $flsslider_two_img != "" ) : ?>
                        style="background-image: url(<?php echo esc_url( $flsslider_two_img ); ?>);"
                    <?php endif; ?>
                ></div>
                <label class="fls_label">Title of Slider 2</label>
                <input class="fls_input" name="flsslider_two_title" value="<?php echo $flsslider_two_title; ?>">
                <div class="fls_input_wrapp">
                    <label class="fls_label">Link of Slider 2</label>
                    <input class="fls_input" name="flsslider_two_link" value="<?php echo $flsslider_two_link; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Image 2</label>
                    <div class="upload_fls_wrapp">
                        <input class="slideImg fls_input" name="flsslider_two_img" value="<?php echo $flsslider_two_img; ?>" />
                        <input class="slideImgBtn" type="button" value="Add" />
                    </div>
                </div>
            </div>
            <div class="fls_slide_section">
                <div class="slideimg_wrapper"
                    <?php if (isset($flsslider_three_img) && $flsslider_three_img != "" ) : ?>
                        style="background-image: url(<?php echo esc_url( $flsslider_three_img ); ?>);"
                    <?php endif; ?>
                ></div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Title of Slider 3</label>
                    <input class="fls_input" name="flsslider_three_title" value="<?php echo $flsslider_three_title; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Link of Slider 3</label>
                    <input class="fls_input" name="flsslider_three_link" value="<?php echo $flsslider_three_link; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Image 3</label>
                    <div class="upload_fls_wrapp">
                        <input class="slideImg fls_input" name="flsslider_three_img" value="<?php echo $flsslider_three_img; ?>" />
                        <input class="slideImgBtn" type="button" value="Add" />
                    </div>
                </div>
            </div>
            <div class="fls_slide_section fls-last-child">
                <div class="slideimg_wrapper"
                    <?php if (isset($flsslider_four_img) && $flsslider_four_img != "" ) : ?>
                        style="background-image: url(<?php echo esc_url( $flsslider_four_img ); ?>);"
                    <?php endif; ?>
                ></div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Title of Slider 4</label>
                    <input class="fls_input" name="flsslider_four_title" value="<?php echo $flsslider_four_title; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Link of Slider 4</label>
                    <input class="fls_input" name="flsslider_four_link" value="<?php echo $flsslider_four_link; ?>">
                </div>
                <div class="fls_input_wrapp">
                    <label class="fls_label">Image 4</label>
                    <div class="upload_fls_wrapp">
                        <input class="slideImg fls_input" name="flsslider_four_img" value="<?php echo $flsslider_four_img; ?>" />
                        <input class="slideImgBtn" type="button" value="Add" />
                    </div>
                </div>
            </div>
            <input type="submit" name="submit_scripts_update" class="fls_btn_save" value="SAVE CHANGES">
        </form>
    </div>
<?php
}