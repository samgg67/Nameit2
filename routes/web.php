<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Score;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Páginas principais
Route::get('/iniciante', function () {
    return view('pages.iniciante.iniciante');
});

Route::get('/intermediario', function () {
    return view('pages.intermediario.intermediario');
});

// Redireciona /dificil para a primeira fase
Route::get('/avancado', function () {
    return redirect()->route('pages.avancado.fase1');
});

// 🔹 Fases do iniciante (1 a 25)
for ($i = 1; $i <= 25; $i++) {
    Route::get("/iniciante{$i}", function () use ($i) {
        if ($i === 1) {
            $options = ['DOG', 'CAT', 'FISH', 'BIRD'];
            $correctAnswer = 'FISH';
            $points = 10;

            return view("pages.iniciante.iniciante{$i}", compact('options', 'correctAnswer', 'points'));
        }

        return view("pages.iniciante.iniciante{$i}");
    })->name("iniciante.fase{$i}");
}

// 🔹 Fases do intermediário (1 a 25)
for ($i = 1; $i <= 25; $i++) {
    Route::get("/intermediario{$i}", function () use ($i) {
        if ($i === 1) {
            $options = ['DOG', 'CAT', 'FISH', 'BIRD'];
            $correctAnswer = 'FISH';
            $points = 20;

            return view("pages.intermediario.intermediario{$i}", compact('options', 'correctAnswer', 'points'));
        }

        return view("pages.intermediario.intermediario{$i}");
    })->name("intermediario.fase{$i}");
}

// 🔹 Fases do difícil (1 a 25)
for ($i = 1; $i <= 25; $i++) {
    Route::get("/dificil{$i}", function () use ($i) {
        if ($i === 1) {
            $options = ['DOG', 'CAT', 'FISH', 'BIRD'];
            $correctAnswer = 'FISH';
            $points = 30;

            return view("pages.dificil.dificil{$i}", compact('options', 'correctAnswer', 'points'));
        }

        return view("pages.dificil.dificil{$i}");
    })->name("dificil.fase{$i}");
}


Route::get('/ranking', function () {
    $scores = Score::with('user')->orderBy('score', 'desc')->get();
    return view('pages.ranking', compact('scores'));
})->name('ranking');


Route::post('/quiz/add-points', [QuizController::class, 'addPoints'])->name('quiz.addPoints');


Route::get('/ranking', function () {
    $scores = Score::with('user')->orderBy('score', 'desc')->get();
    return view('pages.ranking', compact('scores'));
})->name('ranking');

require __DIR__.'/auth.php';
