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

$hasmarket5 = (!empty($PAGE->theme->settings->market5));
$hasmarket6 = (!empty($PAGE->theme->settings->market6));
$hasmarket7 = (!empty($PAGE->theme->settings->market7));
$hasmarket8 = (!empty($PAGE->theme->settings->market8));

$hasmarket9 = (!empty($PAGE->theme->settings->market9));
$hasmarket10 = (!empty($PAGE->theme->settings->market10));
$hasmarket11 = (!empty($PAGE->theme->settings->market11));
$hasmarket12 = (!empty($PAGE->theme->settings->market12));

if ($hasp1 || $hasp2 || $hasp3 || $hasp4 || $hasp5) { 

require_once(dirname(__FILE__) . '/includes/slider.php');
?>


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
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market1url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market1bg', 'market1bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market1', 'format_html');?></div>
    
        <div id="tilesummary"><?php echo $OUTPUT->get_setting('market1content', 'format_html');?> </div></div></div>
    <?php } ?>
    
     
  <?php if ($hasmarket2) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market2url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market2bg', 'market2bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market2', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market2content', 'format_html');?> </div></div></div>
    <?php } ?>
  
     
   <?php if ($hasmarket3) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market3url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market3bg', 'market3bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market3', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market3content', 'format_html');?> </div></div></div>
    <?php } ?>

    
  <?php if ($hasmarket4) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market4url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market4bg', 'market4bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market4', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market4content', 'format_html');?> </div></div></div>
    <?php } ?>
 
    
 </div>      
 </div>
 








<div id="marketblocks" class="container">
<div class="row-fluid"> 
<?php
$marketclass = " ";
if ($hasmarket5 && !$hasmarket6 && !$hasmarket7 && !$hasmarket8) {
	$marketclass = "span12";
}

if ($hasmarket5 && $hasmarket6 && !$hasmarket7 && !$hasmarket8) {
	$marketclass = "span6";
}

if ($hasmarket5 && $hasmarket6 && $hasmarket7 && !$hasmarket8) {
	$marketclass = "span4";
}

if ($hasmarket5 && $hasmarket6 && $hasmarket7 && $hasmarket8) {
	$marketclass = "span3";
}
?>  
   
    <?php if ($hasmarket5) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market5url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market5bg', 'market5bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market5', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market5content', 'format_html');?> </div></div></div>
    <?php } ?>
    
     
  <?php if ($hasmarket6) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market6url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market6bg', 'market6bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market6', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market6content', 'format_html');?> </div></div></div>
    <?php } ?>
  
     
   <?php if ($hasmarket7) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market7url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market7bg', 'market7bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market7', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market7content', 'format_html');?> </div></div></div>
    <?php } ?>

    
  <?php if ($hasmarket8) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market8url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market8bg', 'market8bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 250px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market8', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market8content', 'format_html');?> </div></div></div>
    <?php } ?>
 
    
 </div>      
 </div>
 
<?php
if ($hasmarket9 || $hasmarket10 || $hasmarket11 || $hasmarket12) {
?>
<div id="marketblocks" class="container">
<div class="row-fluid"> 
<?php
$marketclass = " ";
if ($hasmarket9 && !$hasmarket10 && !$hasmarket11 && !$hasmarket12) {
	$marketclass = "span12";
}

if ($hasmarket9 && $hasmarket10 && !$hasmarket11 && !$hasmarket12) {
	$marketclass = "span10";
}

if ($hasmarket9 && $hasmarket10 && $hasmarket11 && !$hasmarket12) {
	$marketclass = "span4";
}

if ($hasmarket9 && $hasmarket10 && $hasmarket11 && $hasmarket12) {
	$marketclass = "span3";
}
?>  
   
    <?php if ($hasmarket9) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market9url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market9bg', 'market9bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 290px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market9', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market9content', 'format_html');?> </div></div></div>
    <?php } ?>
    
     
  <?php if ($hasmarket10) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market10url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market10bg', 'market10bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 290px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market10', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market10content', 'format_html');?> </div></div></div>
    <?php } ?>
  
     
   <?php if ($hasmarket11) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market11url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market11bg', 'market11bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 290px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market11', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market11content', 'format_html');?> </div></div></div>
    <?php } ?>

    
  <?php if ($hasmarket12) { ?> 
  
    <div onclick="location.href='<?php echo $PAGE->theme->settings->market12url;?>'" style="cursor:pointer;" class="<?php echo "$marketclass";?> first" >
    <div id="tilewrap" style="background: url('<?php echo $PAGE->theme->setting_file_url('market12bg', 'market12bg'); ?>'); width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center center;max-height: 290px;">
    <div class="tileheader"><?php echo $OUTPUT->get_setting('market12', 'format_html');?></div>
    <div id="tilesummary"><?php echo $OUTPUT->get_setting('market12content', 'format_html');?> </div></div></div>
    <?php } ?>
 
    
 </div>      
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
            echo $OUTPUT->blocks('middle');
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

<?php if($PAGE->theme->settings->frontpage_announcement) { ?>

<script>
//$(function(document.ready) {
$(document).ready(function() {
    if (document.cookie.indexOf("ModalShown=true")<0) {
        $('#myModal').modal('show');
        document.cookie = "ModalShown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    }
});
</script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Announcement</h4>
      </div>
      <div class="modal-body">
        <?php echo $OUTPUT->get_setting('frontpage_announcement', 'format_html'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>

<?php 
require_once(dirname(__FILE__) . '/includes/footer.php');
