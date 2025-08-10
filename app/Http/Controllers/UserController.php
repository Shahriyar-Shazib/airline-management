<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userList() : JsonResponse 
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'No authenticated user found'
            ], 401);
        }

        $currentUserId = $user->id;

        $users = User::where('id', '!=', $currentUserId)->get();

        return response()->json([
            'success' => true,
            'data' => $users,
            'message' => 'User list retrieved successfully'
        ]);
    }
}
