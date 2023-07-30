<?php

namespace TribeMetaBox\Http\Controllers\Dashboard;

use TribeMetaBox\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function index()
  {
    return TribeMetaBox()->view( 'dashboard.index' );
  }
}