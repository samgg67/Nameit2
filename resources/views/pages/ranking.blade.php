<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Ranking de Pontuação</h1>

        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="py-2 px-4">Posição</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Pontuação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scores as $index => $score)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $index + 1 }}</td>
                    <td class="py-2 px-4">{{ $score->user->email }}</td>
                    <td class="py-2 px-4">{{ $score->score }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
