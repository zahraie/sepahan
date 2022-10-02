<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'comment List successfully show !',
            'data' => $comment
        ], 200);
    }
}
