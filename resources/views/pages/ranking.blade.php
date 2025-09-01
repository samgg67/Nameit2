<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-[#FCA699] to-[#FDB99B] min-h-screen flex items-center justify-center">
    <div class="container max-w-3xl bg-white shadow-xl rounded-2xl p-6 relative">
        
        <!-- Botão Home -->
        <a href="{{ route('dashboard') }}" 
           class="absolute top-4 left-4 bg-[#ABE4FF] hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-lg shadow flex items-center gap-2 transition">
             <span class="hidden sm:inline">Home</span>
        </a>

        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">🏆 Ranking de Pontuação</h1>

        <div class="overflow-y-auto max-h-[400px] rounded-lg border border-gray-200 shadow-inner">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100 sticky top-0">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Posição</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Pontuação</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($scores as $index => $score)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-800 font-medium">{{ $index + 1 }}</td>
                        <td class="py-3 px-4 text-gray-600">{{ $score->user->email }}</td>
                        <td class="py-3 px-4 text-gray-900 font-semibold">{{ $score->score }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-center text-gray-500 text-sm mt-4">Acompanhe seu progresso e suba no ranking!</p>
    </div>
</body>
</html>
