<?php

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir.'/moodlelib.php');

$translate_preference = get_user_preferences('theme_nau_googletranslate_on', 0, $USER->id);

if ($translate_preference) {
    set_user_preference('theme_nau_googletranslate_on', 0, $USER->id);
} else {
    set_user_preference('theme_nau_googletranslate_on', 1, $USER->id);
}
