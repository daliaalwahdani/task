<?php

class m131126_110800_createtable extends CDbMigration {

    public function up() {
        $this->createtable('tbl_contacts', array(
            'id'            => 'pk',
            'name'          => 'varchar(250) NOT NULL',
            'email'         => 'varchar(250) NOT NULL',
            'number'        => 'int(15) NOT NULL',
            'image'         => 'text DEFAULT NULL',
            'home_address'  => 'text DEFAULT NULL',
            'fax'           => 'int(15)',
            'website'       => 'text DEFAULT NULL',
            'type'          => 'tinyint DEFAULT 1 NOT NULL'
        ), 'ENGINE=InnoDB');
    }

    public function down() {
        echo "m131126_110800_createtable does not support migration down.\n";
        return false;
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}