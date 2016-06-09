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

$settings = null;
require_once __DIR__.'/libs/admin_confightmleditor.php';
defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {

    $ADMIN->add('themes', new admin_category('theme_nau', 'nau'));

    $temp = new admin_settingpage('theme_nau_colour', get_string('coloursettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_colour', get_string('coloursettingsheading', 'theme_nau'),
        format_text(get_string('colourdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/linkcolor';
    $title = get_string('linkcolor', 'theme_nau');
    $description = get_string('linkcolordesc', 'theme_nau');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    $name = 'theme_nau/linkhover';
    $title = get_string('linkhover', 'theme_nau');
    $description = get_string('linkhoverdesc', 'theme_nau');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/maincolor';
    $title = get_string('maincolor', 'theme_nau');
    $description = get_string('maincolordesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/backcolor';
    $title = get_string('backcolor', 'theme_nau');
    $description = get_string('backcolordesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/buttoncolour';
    $title = get_string('buttoncolour', 'theme_nau');
    $description = get_string('buttoncolourdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00aeef', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/buttonhovercolour';
    $title = get_string('buttonhovercolour', 'theme_nau');
    $description = get_string('buttonhovercolourdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0084c2', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/rendereroverlaycolour';
    $title = get_string('rendereroverlaycolour', 'theme_nau');
    $description = get_string('rendereroverlaycolourdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/rendereroverlayfontcolour';
    $title = get_string('rendereroverlayfontcolour', 'theme_nau');
    $description = get_string('rendereroverlayfontcolourdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/dividingline';
    $title = get_string('dividingline', 'theme_nau');
    $description = get_string('dividinglinedesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/navbarborder';
    $title = get_string('navbarborder', 'theme_nau');
    $description = get_string('navbarborderdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/navbarhover';
    $title = get_string('navbarhover', 'theme_nau');
    $description = get_string('navbarhoverdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/breadcrumb';
    $title = get_string('breadcrumb', 'theme_nau');
    $description = get_string('breadcrumbdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_nau');
    $description = get_string('activebreadcrumbdesc', 'theme_nau');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_header', get_string('headersettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_header', get_string('headersettingsheading', 'theme_nau'),
        format_text(get_string('headerdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/sitetitle';
    $title = get_string('sitetitle', 'theme_nau');
    $description = get_string('sitetitledesc', 'theme_nau');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/logo';
    $title = get_string('logo', 'theme_nau');
    $description = get_string('logodesc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/pageheader';
    $title = get_string('pageheader', 'theme_nau');
    $description = get_string('pageheaderdesc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pageheader');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    $name = 'theme_nau/alertbox';
    $title = get_string('alertbox', 'theme_nau');
    $description = get_string('alertboxdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_nau_usernav', get_string('usernavheading', 'theme_nau'),
        format_text(get_string('usernavdesc', 'theme_nau'), FORMAT_MARKDOWN)));
    
    // Enable My.
    $name = 'theme_nau/enablemy';
    $title = get_string('enablemy', 'theme_nau');
    $description = get_string('enablemydesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable View Profile.
    $name = 'theme_nau/enableprofile';
    $title = get_string('enableprofile', 'theme_nau');
    $description = get_string('enableprofiledesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_nau/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_nau');
    $description = get_string('enableeditprofiledesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_nau/enablecalendar';
    $title = get_string('enablecalendar', 'theme_nau');
    $description = get_string('enablecalendardesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_nau/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_nau');
    $description = get_string('enableprivatefilesdesc', 'theme_nau');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_nau/enablebadges';
    $title = get_string('enablebadges', 'theme_nau');
    $description = get_string('enablebadgesdesc', 'theme_nau');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $temp->add(new admin_setting_heading('theme_nau_navbar', get_string('navbarsettingsheading', 'theme_nau'),
        format_text(get_string('navbardesc', 'theme_nau'), FORMAT_MARKDOWN)));
    
    $name = 'theme_nau/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_nau', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/enableevents';
    $title = get_string('events', 'theme_nau');
    $description = get_string('enableeventsdesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/enablemysites';
    $title = get_string('mysites', 'theme_nau');
    $description = get_string('enablemysitesdesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_nau/enablethiscourse';
    $title = get_string('thiscourse', 'theme_nau');
    $description = get_string('enablethiscoursedesc', 'theme_nau');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_nau/enablehelp';
    $title = get_string('enablehelp', 'theme_nau');
    $description = get_string('enablehelpdesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/helptarget';
    $title = get_string('helptarget', 'theme_nau');
    $description = get_string('helptargetdesc', 'theme_nau');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_nau'),
        '_self' => get_string('targetsamewindow', 'theme_nau'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);
    $temp->add($setting);

    $name = 'theme_nau/toolsmenu';
    $title = get_string('toolsmenu', 'theme_nau');
    $description = get_string('toolsmenudesc', 'theme_nau');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);
    
    
    
    
     $temp = new admin_settingpage('theme_nau_megamenu', get_string('megamenu', 'theme_nau'));
    
    
    
    $name = 'theme_nau/menu1title';
    $title = get_string('menu1title', 'theme_nau');
    $description = get_string('menu1titledesc', 'theme_nau');
    $default = 'Online Learning';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu1url';
    $title = get_string('menu1url', 'theme_nau');
    $description = get_string('menu1urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu1content';
    $title = get_string('menu1content', 'theme_nau');
    $description = get_string('menu1contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        $name = 'theme_nau/menu2title';
    $title = get_string('menu2title', 'theme_nau');
    $description = get_string('menu2titledesc', 'theme_nau');
    $default = 'Communities';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu2url';
    $title = get_string('menu2url', 'theme_nau');
    $description = get_string('menu2urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu2content';
    $title = get_string('menu2content', 'theme_nau');
    $description = get_string('menu2contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
        $name = 'theme_nau/menu3title';
    $title = get_string('menu3title', 'theme_nau');
    $description = get_string('menu3titledesc', 'theme_nau');
    $default = 'Best Practice';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu3url';
    $title = get_string('menu3url', 'theme_nau');
    $description = get_string('menu3urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu3content';
    $title = get_string('menu3content', 'theme_nau');
    $description = get_string('menu3contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        $name = 'theme_nau/menu4title';
    $title = get_string('menu4title', 'theme_nau');
    $description = get_string('menu4titledesc', 'theme_nau');
    $default = 'Fundamentals';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu4url';
    $title = get_string('menu4url', 'theme_nau');
    $description = get_string('menu4urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu4content';
    $title = get_string('menu4content', 'theme_nau');
    $description = get_string('menu4contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        $name = 'theme_nau/menu5title';
    $title = get_string('menu5title', 'theme_nau');
    $description = get_string('menu5titledesc', 'theme_nau');
    $default = 'About';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu5url';
    $title = get_string('menu5url', 'theme_nau');
    $description = get_string('menu5urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu5content';
    $title = get_string('menu5content', 'theme_nau');
    $description = get_string('menu5contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
        $name = 'theme_nau/menu6title';
    $title = get_string('menu6title', 'theme_nau');
    $description = get_string('menu6titledesc', 'theme_nau');
    $default = 'MyePortfolio';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu6url';
    $title = get_string('menu6url', 'theme_nau');
    $description = get_string('menu6urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu6content';
    $title = get_string('menu6content', 'theme_nau');
    $description = get_string('menu6contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        $name = 'theme_nau/menu7title';
    $title = get_string('menu7title', 'theme_nau');
    $description = get_string('menu7titledesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu7url';
    $title = get_string('menu7url', 'theme_nau');
    $description = get_string('menu7urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu7content';
    $title = get_string('menu7content', 'theme_nau');
    $description = get_string('menu7contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
        $name = 'theme_nau/menu8title';
    $title = get_string('menu8title', 'theme_nau');
    $description = get_string('menu8titledesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu8url';
    $title = get_string('menu8url', 'theme_nau');
    $description = get_string('menu8urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu8content';
    $title = get_string('menu8content', 'theme_nau');
    $description = get_string('menu8contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
        $name = 'theme_nau/menu9title';
    $title = get_string('menu9title', 'theme_nau');
    $description = get_string('menu9titledesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu9url';
    $title = get_string('menu9url', 'theme_nau');
    $description = get_string('menu9urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu9content';
    $title = get_string('menu9content', 'theme_nau');
    $description = get_string('menu9contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
        $name = 'theme_nau/menu10title';
    $title = get_string('menu10title', 'theme_nau');
    $description = get_string('menu10titledesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $name = 'theme_nau/menu10url';
    $title = get_string('menu10url', 'theme_nau');
    $description = get_string('menu10urldesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $name = 'theme_nau/menu10content';
    $title = get_string('menu10content', 'theme_nau');
    $description = get_string('menu10contentdesc', 'theme_nau');
    $default = '<h1>Big Menu Text</h1>Put some text in here.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
     $ADMIN->add('theme_nau', $temp);
    
    
    
    

    $temp = new admin_settingpage('theme_nau_frontpage_blocks', get_string('frontpageblocksettings', 'theme_nau'));

    $name = 'theme_nau/infobox';
    $title = get_string('infobox', 'theme_nau');
    $description = get_string('infoboxdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/infobox2';
    $title = get_string('infobox2', 'theme_nau');
    $description = get_string('infobox2desc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_nau_marketing', get_string('marketingsettingsheading', 'theme_nau'),
        format_text(get_string('marketingdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/market1';
    $title = get_string('market1', 'theme_nau');
    $description = get_string('market1desc', 'theme_nau');
    $default = '';
    $setting = new nau_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/market2';
    $title = get_string('market2', 'theme_nau');
    $description = get_string('market2desc', 'theme_nau');
    $setting = new nau_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/market3';
    $title = get_string('market3', 'theme_nau');
    $description = get_string('market3desc', 'theme_nau');
    $setting = new nau_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/market4';
    $title = get_string('market4', 'theme_nau');
    $description = get_string('market4desc', 'theme_nau');
    $setting = new nau_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_frontpage_slider', get_string('frontpageslidersettings', 'theme_nau'));

    $temp->add(new admin_setting_heading('theme_nau_slideshow', get_string('slideshowsettingsheading', 'theme_nau'),
        format_text(get_string('slideshowdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/p1';
    $title = get_string('p1', 'theme_nau');
    $description = get_string('p1desc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/p1url';
    $title = get_string('p1url', 'theme_nau');
    $description = get_string('p1urldesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/p1cap';
    $title = get_string('p1cap', 'theme_nau');
    $description = get_string('p1capdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/p2';
    $title = get_string('p2', 'theme_nau');
    $description = get_string('p2desc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/p2url';
    $title = get_string('p2url', 'theme_nau');
    $description = get_string('p2urldesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/p2cap';
    $title = get_string('p2cap', 'theme_nau');
    $description = get_string('p2capdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/p3';
    $title = get_string('p3', 'theme_nau');
    $description = get_string('p3desc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/p3url';
    $title = get_string('p3url', 'theme_nau');
    $description = get_string('p3urldesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/p3cap';
    $title = get_string('p3cap', 'theme_nau');
    $description = get_string('p3capdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/p4';
    $title = get_string('p4', 'theme_nau');
    $description = get_string('p4desc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/p4url';
    $title = get_string('p4url', 'theme_nau');
    $description = get_string('p4urldesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/p4cap';
    $title = get_string('p4cap', 'theme_nau');
    $description = get_string('p4capdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/p5';
    $title = get_string('p5', 'theme_nau');
    $description = get_string('p5desc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/p5url';
    $title = get_string('p5url', 'theme_nau');
    $description = get_string('p5urldesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_nau/p5cap';
    $title = get_string('p5cap', 'theme_nau');
    $description = get_string('p5capdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_frontpage_courses', get_string('frontpagecoursesettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_frontpage_courses', get_string('frontpagesettingsheading', 'theme_nau'),
        format_text(get_string('frontpagedesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_nau');
    $description = get_string('frontpagerendererdesc', 'theme_nau');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_nau'),
        2 => get_string('frontpagerendereroption2', 'theme_nau'),
        3 => get_string('frontpagerendereroption3', 'theme_nau'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_nau');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_nau/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_nau');
    $description = get_string('tilesshowcontactsdesc', 'theme_nau');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_nau/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_nau');
    $description = get_string('tilesshowallcontactsdesc', 'theme_nau');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_nau/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_nau');
    $description = get_string('tilescontactstitledesc', 'theme_nau');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_layout', get_string('layoutsettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_layout', get_string('layoutsettingsheading', 'theme_nau'),
        format_text(get_string('layoutdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/blockside';
    $title = get_string('blockside', 'theme_nau');
    $description = get_string('blocksidedesc', 'theme_nau');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_nau'),
            1 => get_string('leftblocks', 'theme_nau'),
        ));
    $temp->add($setting);
    
    
    $name = 'theme_nau/loginbg';
    $title = get_string('loginbg', 'theme_nau');
    $description = get_string('loginbgdesc', 'theme_nau');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_footer', get_string('footersettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_footer', get_string('footersettingsheading', 'theme_nau'),
        format_text(get_string('footerdesc', 'theme_nau'), FORMAT_MARKDOWN)));

    $name = 'theme_nau/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_nau');
    $description = get_string('showfooterblocksdesc', 'theme_nau');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_nau/footer1header';
    $title = get_string('footer1header', 'theme_nau');
    $description = get_string('footer1desc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer1content';
    $title = get_string('footer1content', 'theme_nau');
    $description = get_string('footer1contentdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer2header';
    $title = get_string('footer2header', 'theme_nau');
    $description = get_string('footer2desc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer2content';
    $title = get_string('footer2content', 'theme_nau');
    $description = get_string('footer2contentdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer3header';
    $title = get_string('footer3header', 'theme_nau');
    $description = get_string('footer3desc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer3content';
    $title = get_string('footer3content', 'theme_nau');
    $description = get_string('footer3contentdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer4header';
    $title = get_string('footer4header', 'theme_nau');
    $description = get_string('footer4desc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footer4content';
    $title = get_string('footer4content', 'theme_nau');
    $description = get_string('footer4contentdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/footnote';
    $title = get_string('footnote', 'theme_nau');
    $description = get_string('footnotedesc', 'theme_nau');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);

    $temp = new admin_settingpage('theme_nau_generic', get_string('customcssjssettings', 'theme_nau'));
    $temp->add(new admin_setting_heading('theme_nau_generic', get_string('genericsettingsheading', 'theme_nau'),
        format_text(get_string('genericsettingsdescription', 'theme_nau'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_nau/customcss';
    $title = get_string('customcss', 'theme_nau');
    $description = get_string('customcssdesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_nau/jssection';
    $title = get_string('jssection', 'theme_nau');
    $description = get_string('jssectiondesc', 'theme_nau');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_nau/fsize';
    $title = get_string('fsize', 'theme_nau');
    $description = get_string('fsizedesc', 'theme_nau');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_nau', $temp);
}
