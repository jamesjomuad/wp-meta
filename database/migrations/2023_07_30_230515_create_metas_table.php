<?php

use AdvanceMeta\WPBones\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE `{$wpdb->base_prefix}tribe_metas` (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, 
            post_id BIGINT(20) UNSIGNED NOT NULL DEFAULT '0', 
            type VARCHAR(100) DEFAULT NULL, 
            tag VARCHAR(100) DEFAULT NULL, 
            name VARCHAR(100) DEFAULT NULL, 
            json JSON DEFAULT NULL, 
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
            PRIMARY KEY(id), 
            KEY post_id(post_id) 
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        
        dbDelta($sql);
    }
  
};