<?php

// xmldb_field:
// name, type, precision, unsigned, notnull, sequence, default, previous

function xmldb_theme_nau_upgrade($oldversion) {
  global $CFG, $DB;
  $dbman = $DB->get_manager();

  if ($oldversion < 2016101900) {
    $table = new xmldb_table('nau_forum_views');
    $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
    $table->add_field('discussion_id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
    $table->add_field('views', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
    $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
    $table->add_index('discussion', XMLDB_INDEX_UNIQUE, array('discussion_id'));

    if (!$dbman->table_exists($table)) {
      $dbman->create_table($table);
    }

    upgrade_plugin_savepoint(true, 2016101900, 'theme', 'nau');
  }
  return true;
}
