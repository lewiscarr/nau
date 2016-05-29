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
 // require_once(dirname(__FILE__) . '/includes/megamenu.php'); 

$left = theme_nau_get_block_side();

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));
$hasp1 = (!empty($PAGE->theme->settings->p1));
$hasp2 = (!empty($PAGE->theme->settings->p2));
$hasp3 = (!empty($PAGE->theme->settings->p3));
$hasp4 = (!empty($PAGE->theme->settings->p4));
$hasp5 = (!empty($PAGE->theme->settings->p5));

$haspcap1 = (!empty($PAGE->theme->settings->p1cap));
$haspcap2 = (!empty($PAGE->theme->settings->p2cap));
$haspcap3 = (!empty($PAGE->theme->settings->p3cap));
$haspcap4 = (!empty($PAGE->theme->settings->p4cap));
$haspcap5 = (!empty($PAGE->theme->settings->p5cap));

$hasmarket1 = (!empty($PAGE->theme->settings->market1));
$hasmarket2 = (!empty($PAGE->theme->settings->market2));
$hasmarket3 = (!empty($PAGE->theme->settings->market3));
$hasmarket4 = (!empty($PAGE->theme->settings->market4));

if ($hasp1 || $hasp2 || $hasp3 || $hasp4 || $hasp5) { 

require_once(dirname(__FILE__) . '/includes/slider.php');
?>


<?php } ?>

<?php if (!empty($PAGE->theme->settings->infobox)) { ?>
    <div id="theinfo" class="container">
        <div id="theinfo-internal">
            <div class="row-fluid">
                <?php echo $OUTPUT->get_setting('infobox', 'format_html'); ?>
            </div>
        </div>
    </div>
<?php } ?>

<div id="marketblocks" class="container">
<div class="row-fluid"> 
<?php
$marketclass = " ";
if ($hasmarket1 && !$hasmarket2 && !$hasmarket3 && !$hasmarket4) {
	$marketclass = "span12";
}

if ($hasmarket1 && $hasmarket2 && !$hasmarket3 && !$hasmarket4) {
	$marketclass = "span6";
}

if ($hasmarket1 && $hasmarket2 && $hasmarket3 && !$hasmarket4) {
	$marketclass = "span4";
}

if ($hasmarket1 && $hasmarket2 && $hasmarket3 && $hasmarket4) {
	$marketclass = "span3";
}
?>  
    <?php if ($hasmarket1) { ?> 
    <div class="<?php echo "$marketclass";?> first">
   
	<?php echo $OUTPUT->get_setting('market1', 'format_html');?>
    
    </div>
    <?php } ?>
    
     
     <?php if ($hasmarket2) { ?> 
    <div class="<?php echo "$marketclass";?> first">

	<?php echo $OUTPUT->get_setting('market2', 'format_html');?>

    </div>
     <?php } ?>
  
     
<?php
if ($hasmarket3) {
?> 
    <div class="<?php echo "$marketclass";?> first">
        <?php echo $OUTPUT->get_setting('market3', 'format_html');?>
    </div>
<?php
}
?>

    
<?php
if ($hasmarket4) {
?> 
    <div class="<?php echo "$marketclass";?> first">
	   <?php echo $OUTPUT->get_setting('market4', 'format_html');?>
    </div>
<?php
}
?>
 
    
 </div>      
 </div>
 
<?php
if (!empty($PAGE->theme->settings->infobox2)) {
?>
 <div id="themessage" class="container">
	<div id="themessage-internal"><div class="row-fluid">
	
		<?php echo $OUTPUT->get_setting('infobox2', 'format_html');; ?>
		
	</div></div>
</div>
<?php
}
?>





<div class="container outercont">
    <div id="page-content" class="row-fluid">
     <div id="page-navbar" class="span12">
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
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
            if($left == 0) {
                echo $OUTPUT->blocks('side-post', 'span3');
            }
        ?>
    </div>
    </div>
<?php 
require_once(dirname(__FILE__) . '/includes/footer.php');

