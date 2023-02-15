<?php
namespace Createpackage\Inspire\Controllers;
use Illuminate\Http\Request;
use Createpackage\Inspire\Inspire;
class InspirationController
{
  public function __invoke(Inspire $inspire)
  {
    $quote = $inspire->justDoIt();
    return view('inspire::index', compact('quote'));
  }
}
