<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function addPoints(Request $request)
    {
        $request->validate([
            'points' => 'required|integer|min:0',
        ]);

        $user = Auth::user();

        // Cria ou pega o score do usuário
        $score = Score::firstOrCreate(
            ['user_id' => $user->id],
            ['score' => 0]
        );

        $score->increment('score', $request->points); // Incrementa
        $score->save();

        return response()->json([
            'success' => true,
            'total_points' => $score->score,
            'email' => $user->email
        ]);
    }
}
