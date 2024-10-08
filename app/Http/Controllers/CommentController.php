<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller{
    //

    public function storeapi(Request $request){  
        
        $data = "bangladesh_india";
        
        $responseData = [
            'status' => 'success',
            'message' => 'Data saved successfully!',
            'data' => $request->name
        ];
        return response()->json($responseData, 200);
    }
}
