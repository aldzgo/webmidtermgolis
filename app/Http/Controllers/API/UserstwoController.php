<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Response;

class UserstwoController extends Controller {

    public $successStatus = 200;

    public function userQuery() {
        $user = User::all();

        if (count($user) > 0) {
            return response()->json($user, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no User in the database'], 404);
        }

    }
}



?>