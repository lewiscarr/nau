<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage nau
 * @copyright  2016 Titus Learning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

require_once(dirname(__FILE__) . '/includes/header.php');
$left = theme_nau_get_block_side();
?>



 <?php
        global $CFG, $COURSE;
        if (empty($CFG->courseoverviewfileslimit)) {
            return array();
        }
        require_once($CFG->libdir. '/filestorage/file_storage.php');
        require_once($CFG->dirroot. '/course/lib.php');
        $fs = get_file_storage();
        $context = context_course::instance($COURSE->id);
        $files = $fs->get_area_files($context->id, 'course', 'overviewfiles', false, 'filename', false);
        if (count($files)) {
            $overviewfilesoptions = course_overviewfiles_options($COURSE->id);
            $acceptedtypes = $overviewfilesoptions['accepted_types'];
            if ($acceptedtypes !== '*') {
                // Filter only files with allowed extensions.
                require_once($CFG->libdir. '/filelib.php');
                foreach ($files as $key => $file) {
                    if (!file_extension_in_typegroup($file->get_filename(), $acceptedtypes)) {
                        unset($files[$key]);
                    }
                }
            }
            if (count($files) > $CFG->courseoverviewfileslimit) {
                // Return no more than $CFG->courseoverviewfileslimit files.
                $files = array_slice($files, 0, $CFG->courseoverviewfileslimit, true);
            }
        }


        // Display course overview files.
        $contentimages = '';
        $contentfiles = '';
        foreach ($files as $file) {
            $isimage = $file->is_valid_image();
            $url = file_encode_url("$CFG->wwwroot/pluginfile.php",
                    '/'. $file->get_contextid(). '/'. $file->get_component(). '/'.
                    $file->get_filearea(). $file->get_filepath(). $file->get_filename(), !$isimage);
            if ($isimage) {
                    $contentimages .= html_writer::start_tag('div', array('class' => 'courseimage'));
                    $link = new moodle_url('/course/view.php', array('id' => $COURSE->id));
                    $contentimages .= html_writer::link($link, html_writer::empty_tag('img', array('src' => $url)));
                    $contentimages .= html_writer::end_tag('div');
                }
        }


        if (empty($url)) {
    
        $bgimg= $PAGE->theme->setting_file_url('pageheader', 'pageheader');   
        }




        else {
            $bgimg = $url;   
        }
    
    
		?>

        <div class="courseheaderbg" style="background-image:url(<?php echo $bgimg ;?>);"><div class="courseheaderinner"><h1><?php echo $COURSE->fullname;?></h1></div></div>




<div class="container outercont">




    <div id="page-content" class="row-fluid">
    <div id="page-navbar" class="span12">
        <?php echo $OUTPUT->navbar(); ?>
    </div>
        <?php
        if($left == 1) {
            echo $OUTPUT->blocks('side-post', 'span3 desktop-first-column');
        }
        ?>
        
        
         
        
        <section id="region-main" class="span9 <?php if ($left) { echo ' '; } else { echo 'desktop-first-column'; } ?> ">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        if ($left == 0) {
            echo $OUTPUT->blocks('side-post', 'span3');
        }
        ?>
    </div>
    </div>

    <?php
    require_once(dirname(__FILE__) . '/includes/footer.php');
