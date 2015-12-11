<?php
   $installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('weblog/essai')}` (
      `essai_id` int(11) NOT NULL auto_increment,
      `title` text,
      `post` text,
      `date` datetime default NULL,
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      PRIMARY KEY  (`essai_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('weblog/essai')}` VALUES (1,'My New Title','This is a blog post','2009-07-01 00:00:00','2009-07-02 23:12:30');
");
$installer->endSetup();  
    