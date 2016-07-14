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
    
<?php if (core\session\manager::is_loggedinas()) { ?>
<div class="customalert">
<div class="container">
<?php echo $OUTPUT->login_info(); ?>
</div>
</div>

<?php
} else if (!empty($PAGE->theme->settings->alertbox)) {
?>
<div class="customalert">
<div class="container">
<?php echo $OUTPUT->get_setting('alertbox', 'format_html');; ?>
</div>
</div>
<?php
}
?>

    
    

 
    
    
    
    
    
    
<header id="page-header-wrapper">
   
    <div id="page-header" >
        <?php if ($haslogo) { ?>
            <a href="<?php p($CFG->wwwroot) ?>"><?php echo "<img src='".$PAGE->theme->setting_file_url('logo', 'logo')."' alt='logo' id='logo' />"; echo "</a>";
        } else { ?>
            <a href="<?php p($CFG->wwwroot) ?>"><img src="<?php echo $OUTPUT->pix_url('2xlogo', 'theme')?>" id="logo"></a>
        <?php } ?>
     
   <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
   
     
     
        <div class="searchbox">
        
              <?php if (!isloggedin() || isguestuser()) { 
                echo  '<div class="headerlogin"><a href="'.$CFG->wwwroot.'/login"> <button type="button" class="btn btn-default"> Login </button></a></div>'; } ?>
             <div class="mobhide">
       
            <?php if (isloggedin() || isguestuser()) { ?>
 <?php global $USER,$PAGE, $user ?>

            <ul>
  <li class="first">
    <?php echo $USER->firstname; ?> <?php echo $USER->lastname; ?>
    <ul>
       <?php if (!empty($PAGE->theme->settings->enablemy  )) { ?> <a href="<?php echo $CFG->wwwroot; ?>/my"><li><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</li></a> <?php } ?>
      <?php if (!empty($PAGE->theme->settings->enableprofile  )) { ?> <a href="<?php echo $CFG->wwwroot; ?>/user/profile.php"><li><i class="fa fa-user" aria-hidden="true"></i> View Profile</li></a> <?php } ?>
      <?php if (!empty($PAGE->theme->settings->enableeditprofile  )) { ?> <a href="<?php echo $CFG->wwwroot; ?>/user/edit.php"><li><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</li></a> <?php } ?>
      <?php if (!empty($PAGE->theme->settings->enablebadges  )) { ?> <a href="<?php echo $CFG->wwwroot; ?>/badges/mybadges.php"><li><i class="fa fa-shield" aria-hidden="true"></i> Badges</li></a> <?php } ?>
    <?php if (!empty($PAGE->theme->settings->enablecalendar  )) { ?> <a href="<?php echo $CFG->wwwroot; ?>/calendar/view.php"><li><i class="fa fa-calendar-o" aria-hidden="true"></i> Calendar</li></a> <?php } ?>
         <?php if (!empty($PAGE->theme->settings->enableprivatefiles   )) { ?><a href="<?php echo $CFG->wwwroot; ?>/user/files.php"> <li><i class="fa fa-file-image-o" aria-hidden="true"></i> Private Files</li> </a><?php } ?>
      <a href="<?php echo $CFG->wwwroot; ?>/login/logout.php"><li><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</li></a>
    </ul>
  </li>
 
</ul>
            

        <?php global $USER,$PAGE; $user_picture=new user_picture($USER); $src=$user_picture->get_url($PAGE); echo '
        <a href="'.$CFG->wwwroot.'/user/profile.php "><img src="'.$src.'">
        </a>'; 
                                                      
                                                      
            
          
            
            ?>



        <?php } ?>
                
                 </div>
                </div>
                
                
                
                  
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
                
                
                
                
                
                
    </div>


         <div id="navwrap">
        <div class="container3">
            <div class="navbar">
                <nav role="navigation" class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse ">
                           
                             <nav class="navigation">
                            <ul class="nav shadow clearfix nojs" id="menu">
                              
                                
                                
                               <?php if (!empty($PAGE->theme->settings->menu1title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu1url )) { 
                                echo $PAGE->theme->settings->menu1url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu1title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu1content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu1content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                
   <?php if (!empty($PAGE->theme->settings->menu2title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu2url )) { 
                                echo $PAGE->theme->settings->menu2url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu2title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu2content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu2content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                  <?php if (!empty($PAGE->theme->settings->menu3title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu3url )) { 
                                echo $PAGE->theme->settings->menu3url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu3title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu3content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu3content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                  <?php if (!empty($PAGE->theme->settings->menu4title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu4url )) { 
                                echo $PAGE->theme->settings->menu4url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu4title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu4content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu4content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                
                                  <?php if (!empty($PAGE->theme->settings->menu5title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu5url )) { 
                                echo $PAGE->theme->settings->menu5url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu5title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu5content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu5content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                  <?php if (!empty($PAGE->theme->settings->menu6title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu6url )) { 
                                echo $PAGE->theme->settings->menu6url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu6title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu6content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu6content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                
                                  <?php if (!empty($PAGE->theme->settings->menu7title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu7url )) { 
                                echo $PAGE->theme->settings->menu7url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu7title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu7content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu7content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                
                                  <?php if (!empty($PAGE->theme->settings->menu8title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu8url )) { 
                                echo $PAGE->theme->settings->menu8url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu8title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu8content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu8content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                
                                  <?php if (!empty($PAGE->theme->settings->menu9title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu9url )) { 
                                echo $PAGE->theme->settings->menu9url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu9title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu9content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu9content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                  <?php if (!empty($PAGE->theme->settings->menu10title )) { ?>
                                <li><a href="<?php if (!empty($PAGE->theme->settings->menu10url )) { 
                                echo $PAGE->theme->settings->menu10url; } else { echo    '#'; }  ?>">  <?php echo $PAGE->theme->settings->menu10title; ?></a> 
                                    <?php if (!empty($PAGE->theme->settings->menu10content )) { ?>
                                    <div class="container-2">
                                     <?php echo $PAGE->theme->settings->menu10content; ?>
                                      </div>	<?php } ?>
                                </li>
                                
                                <?php } ?>
                                
                                <li class="nav-right">  <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search Courses</label>
                <div class="nav_search_box">
                    <input placeholder="<?php echo get_string("searchcourses")?>" accesskey="6" type="text" name="search" id="search-1" autocomplete="off">
                    <button type="submit" ><abbr class="fa fa-search"></abbr></button>
               
            </form></li>   
                        </ul>     
            </nav>
        
                     
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
        
   
</header>
    
    
    
    
     