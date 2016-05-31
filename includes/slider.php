<div class="container slidewrap">
<div id="main-slider" class="flexslider">
<ul class="slides">
<?php
    if ($hasp1) {
 ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p1url)) { echo $PAGE->theme->settings->p1url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('p1', 'p1')."' alt='p1'/>";?>
<?php if ($haspcap1) { ?>
<div class="flex-caption">
<?php echo $OUTPUT->get_setting('p1cap', 'format_html');?>
</div></a>
<?php } ?>
</a></li>
<?php } ?>

<?php if ($hasp2) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p2url)) {echo $PAGE->theme->settings->p2url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('p2', 'p2')."' alt='p2' />";?>
<?php if ($haspcap2) { ?>
<div class="flex-caption">
<?php echo $OUTPUT->get_setting('p2cap', 'format_html');?>
</div></a>
<?php } ?>
</a></li>
<?php } ?>


<?php if ($hasp3) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p3url)) {echo $PAGE->theme->settings->p3url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('p3', 'p3')."' alt='p3' />";?>
<?php if ($haspcap3) { ?>
<div class="flex-caption">
<?php echo $OUTPUT->get_setting('p3cap', 'format_html');?>
</div></a>
<?php } ?>
</a></li>
<?php } ?>

<?php if ($hasp4) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p4url)) {echo $PAGE->theme->settings->p4url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('p4', 'p4')."' alt='p4' />";?>
<?php if ($haspcap4) { ?>
<div class="flex-caption">
<?php echo $OUTPUT->get_setting('p4cap', 'format_html');?>
</div></a>
<?php } ?>
</a></li>
<?php } ?>

<?php if ($hasp5) { ?>
<li>
<a href="<?php if (!empty($PAGE->theme->settings->p5url)) {echo $PAGE->theme->settings->p5url; } else { echo "#";} ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('p5', 'p5')."' alt='p5' />";?>
<?php if ($haspcap5) { ?>
<div class="flex-caption">
<?php echo $OUTPUT->get_setting('p5cap', 'format_html');?>
</div></a>
<?php } ?>
</a></li>
<?php } ?>
	</ul>
</div>
</div>