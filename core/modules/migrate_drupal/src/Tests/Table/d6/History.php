<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d6\History.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d6;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the history table.
 */
class History extends DrupalDumpBase {

  public function load() {
    $this->createTable("history", array(
      'primary key' => array(
        'uid',
        'nid',
      ),
      'fields' => array(
        'uid' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'nid' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'timestamp' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("history")->fields(array(
      'uid',
      'nid',
      'timestamp',
    ))
    ->execute();
  }

}
#67ec5e178454878819a02345fabb68fd
