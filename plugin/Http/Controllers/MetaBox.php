<?php

namespace AdvanceMeta\Http\Controllers;

if (! defined('ABSPATH')) {
    exit;
}

use AdvanceMeta\WPBones\Database\Model;

class MetaBox extends Model
{

    protected $table = 'logged_users';
    
}