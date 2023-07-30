<?php

namespace AdvanceMeta\Http\Controllers\Dashboard;

use AdvanceMeta\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function index()
  {
    return AdvanceMeta()->view( 'dashboard.index' );
  }
}