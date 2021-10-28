<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Animelists;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $animelists = Animelists::all();

        if (count($animelists) > 0) {
            return response()->json($animelists, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no Anime List in the database'], 404);
        }

    }
}



?>