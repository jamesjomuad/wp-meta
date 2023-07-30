<?php

namespace TribeMetaBox\Http\Controllers;

if (! defined('ABSPATH')) {
    exit;
}

use TribeMetaBox\WPBones\Database\Model;

class MetaBox extends Model
{

    protected $table = 'logged_users';
    
}