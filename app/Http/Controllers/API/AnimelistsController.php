<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Controllers\Controller;
use App\Models\Animelists;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;

class AnimelistsController extends Controller {
    public $successStatus = 200;

    public function getAllAnimelists(Request $request) {
        $token = $request['t'];
        $userid = $request['u'];

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user !=null) {
            $animelist = Animelists::all();

        return response()->json($animelist, $this->successStatus);

        } else {
            
        return response()->json(['response' => 'Bad Call'], 501);

        }
    }

    public function getAnimelists(Request $request) {
        $id = $request['alid']; // alid = animelists id
        $token = $request['t'];
        $userid = $request['u'];

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user !=null) {
            $animelist = Animelists::where('id', $id)->first();

            if ($animelist != null) {
                return response()->json($animelist, $this->successStatus);
            } else {
                return response()->json(['response' => 'Animelist not found!'], 404);
            }
        } else {
            
        return response()->json(['response' => 'Bad Call'], 501);
        }
    }

    public function searchAnimelists(Request $request) {
        $params = $request['p']; 
        $token = $request['t'];
        $userid = $request['u'];

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user !=null) {
            $animelist = Animelists::where('Description', 'LIKE', '%' . $params . '%')
             ->orWhere('AnimeTitle', 'LIKE', '%' . $params . '%')
             ->get();

            if ($animelist != null) {
                return response()->json($animelist, $this->successStatus);
            } else {
                return response()->json(['response' => 'Animelist not found!'], 404);
            }
        } else {
            
        return response()->json(['response' => 'Bad Call'], 501);
        }
    }
}