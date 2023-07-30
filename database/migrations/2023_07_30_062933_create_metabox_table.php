<?php

use TribeMetaBox\WPBones\Database\Migrations\Migration;

return new class extends Migration {

    public function up()
    {
  
        $this->create(
            'tribe_meta', "(
                id bigint(20) unsigned NOT NULL auto_increment,
                post_id bigint(20) unsigned NOT NULL default '0',
                object_type varchar(20) NOT NULL default 'post',
                data varchar(20) NOT NULL default 'updated',
                created datetime NOT NULL default '0000-00-00 00:00:00',
                PRIMARY KEY  (id),
                KEY post_id (post_id)
            ) {$this->charsetCollate};"
        );

    }
};