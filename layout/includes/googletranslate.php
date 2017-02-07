<?php $translate_preference = get_user_preferences('theme_nau_googletranslate_on', 0, $USER->id); ?>
<div id="google_translate_element"<?php if ($translate_preference) echo ' style="display: none";' ?>></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>