<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            abort(403, 'No tienes permiso para realizar esta acción.');
        }

        $validated = $request->validate([
            'user_id' => 'required|uuid|exists:users,uuid', 
            'class_id' => 'required|uuid|exists:classes,uuid', 
            'description' => 'required|string|max:255',
        ]);

        $comment = Comments::create([
            'user_id' => $validated['user_id'], 
            'class_id' => $validated['class_id'], 
            'description' => $validated['description'],
        ]);

        return redirect()->back();
    }
}
