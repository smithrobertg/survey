<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function getPartialTest()
    {
      $eventCategories = [
          "Family Background",
          "Education",
          "Work Housing",
          "SocialRelationships",
          "CriminalJustice",
          "Exploitation",
          "Services"
        ];

      return view('test.partial', [ 'categories' => $eventCategories ]);
    }
}
