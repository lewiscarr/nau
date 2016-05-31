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
 * @copyright  2014 Birmingham City University <michael.grant@nau.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
// Fixed header is determined by the individual layouts.
if(!ISSET($fixedheader)) {
    $fixedheader = false;
}
theme_nau_initialise_zoom($PAGE);
$setzoom = theme_nau_get_zoom();

theme_nau_initialise_full($PAGE);
$setfull = theme_nau_get_full();

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.

$hasmiddle = $PAGE->blocks->region_has_content('middle', $OUTPUT);
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));

// Get the HTML for the settings bits.
$html = theme_nau_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(array('two-column', $setzoom)); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page" class="container-fluid <?php echo "$setfull"; ?>">
    




<header id="page-header-wrapper" <?php if($fixedheader) { ?> style="position: fixed;" <?php } ?>>
    
    
    
    
    
    <div id="page-header" class="clearfix container">
        <?php if ($haslogo) { ?>
            <a href="<?php p($CFG->wwwroot) ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('logo', 'logo')."' alt='logo' id='logo' />"; echo "</a>";
        } else { ?>
            <a href="<?php p($CFG->wwwroot) ?>"><img src="<?php echo $OUTPUT->pix_url('2xlogo', 'theme')?>" id="logo"></a>
        <?php } ?>
     
   
    <?php
    if (isset($PAGE) && !$PAGE->theme->settings->sitetitle) {
        $header = theme_nau_remove_site_fullname($PAGE->heading);
        $PAGE->set_heading($header);
    }
    ?>
     
           <div id="above-header2">
        <div class="clearfix">
           
            <div class="headermenu row">
                
                <?php if (!isloggedin() || isguestuser()) { ?>
                  <div class="headerlogin"><a href="<?php p($CFG->wwwroot) ?>/login"> <button type="button" class="btn btn-default"> Login </button></a></div>
                <?php } else { ?>
                <div class="headermenucontainer"> 
                <div class="headermenuimg">
                  <?php if (isloggedin() || isguestuser()) { ?>



        <?php global $USER,$PAGE; $user_picture=new user_picture($USER); $src=$user_picture->get_url($PAGE); echo '
        <a href="'.$CFG->wwwroot.'/user/profile.php "><img src="'.$src.'">
        </a>'; ?>



        <?php } ?> </div>
                    <div class="headermenubox">
                <div class="dropdown secondone">
                        <a class="dropdown-toggle usermendrop" data-toggle="dropdown" data-target=".secondone"><span class="fa fa-user"></span><?php echo fullname($USER) ?> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu usermen" role="menu">
                            <?php if (!empty($PAGE->theme->settings->enablemy)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/my" title="My Dashboard"><i class="fa fa-dashboard"></i><?php echo get_string('myhome') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableprofile)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/profile.php" title="View profile"><i class="fa fa-user"></i><?php echo get_string('viewprofile') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableeditprofile)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/edit.php" title="Edit profile"><i class="fa fa-cog"></i><?php echo get_string('editmyprofile') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enableprivatefiles)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/user/files.php" title="private files"><i class="fa fa-file"></i><?php echo get_string('privatefiles', 'block_private_files') ?></a></li>
                            <?php } ?>
                            <?php  if (!empty($PAGE->theme->settings->enablebadges)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/badges/mybadges.php" title="badges"><i class="fa fa-certificate"></i><?php echo get_string('badges') ?></a></li>
                            <?php } ?>
                            <?php if (!empty($PAGE->theme->settings->enablecalendar)) { ?>
                                <li><a href="<?php p($CFG->wwwroot) ?>/calendar/view.php" title="Calendar"><i class="fa fa-calendar"></i><?php echo get_string('pluginname', 'block_calendar_month') ?></a></li>
                            <?php } ?>
                            <li><a href="<?php p($CFG->wwwroot) ?>/login/logout.php" title="Log out"><i class="fa fa-lock"></i><?php echo get_string('logout') ?></a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>  </div>  </div>  
        </div>
    </div>
       
                  
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
            
               <div class="container yambar">
      
    

    
      
      <!-- Misc components -->
      <div class="navbar yamm">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav3">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <a class="brand" href="#"> </a>
            <div class="nav-collapse collapse" id="nav3">
              <ul class="nav">
              
                  <!-- First Drop down  -->
           
                  <?php if (!empty($PAGE->theme->settings->menu1title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu1url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu1url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu1title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu1content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu1content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                  
                  
                <!-- Second Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu2title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu2url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu2url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu2title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu2content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu2content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                  
                  
                <!-- Third Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu3title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu3url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu3url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu3title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu3content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu3content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                   
                  
                  <!-- Fourth Drop down  -->
           
                  <?php if (!empty($PAGE->theme->settings->menu4title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu4url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu4url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu4title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu4content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu4content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                    <!-- Fifth Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu5title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu5url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu5url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu5title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu5content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu5content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                  
                    <!-- Sixth Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu6title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu6url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu6url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu6title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu6content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu6content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                    <!-- Seventh Drop down  -->
           
                  <?php if (!empty($PAGE->theme->settings->menu7title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu7url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu7url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu7title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu7content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu7content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                    <!-- Eighth Drop down  -->
           
                  <?php if (!empty($PAGE->theme->settings->menu8title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu8url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu8url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu8title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu8content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu8content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                  
                    <!-- Ninth Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu9title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu9url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu9url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu9title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu9content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu9content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                    <!-- Tenth Drop down  -->
           
                   <?php if (!empty($PAGE->theme->settings->menu10title )) { ?>
                  <li class="dropdown yamm-fullwidth">
                  <a href="<?php if (empty($PAGE->theme->settings->menu10url )) {
                           echo '#'; } else { echo $PAGE->theme->settings->menu10url;}
                           ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu10title; ?>  </a>
                  
                        <?php if (!empty($PAGE->theme->settings->menu10content )) { ?>
                      <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                       <?php echo $PAGE->theme->settings->menu10content; ?>
                      </div>
                    </li>
                  </ul><?php } ?>
                </li><?php } ?>
                  
                  
                  
                  
                  
                  
                  

              </ul>
              <ul class="nav pull-right">
                <!-- Forms -->
                <li class="dropdown">
                
            <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search Courses</label>
                <div class="nav_search_box">
                    <input placeholder="<?php echo get_string("searchcourses")?>" accesskey="6" type="text" name="search" id="search-1" autocomplete="off">
                    <button type="submit" ><abbr class="fa fa-search"></abbr></button>
               
            </form>
        </div>
                  
                </li>                
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
     

    

    </div>

 
 
            
            
            
            
            
       
            
            
        </div>
    </div>


    
</header>