<?php

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS visitorreport;

CREATE TABLE {$this->getTable('visitorreport')} (
  `id_visitorreport` int(11) unsigned NOT NULL auto_increment,
  `customer_email` varchar(255) NOT NULL default '',
  `customer_ip` varchar(255) NOT NULL default '',
  `visited_time` datetime NULL,
  `visited_url` varchar(255) NOT NULL default '',
  PRIMARY KEY (`id_visitorreport`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 