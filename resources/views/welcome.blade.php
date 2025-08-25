<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name It</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-[#DB7580]">
    <div class="bg-[#FFE4AA] w-[920px] h-[712px] rounded-2xl flex flex-col items-center justify-center shadow-md relative border-2 border-black">

        <!-- Botão de ajuda -->
        <a href="#" class="absolute top-4 right-4 w-10 h-10 border-2 border-black rounded-full flex items-center justify-center text-xl font-bold">
            ?
        </a>

        <!-- Logo -->
        <div class="flex flex-col items-center mb-6">
            <h1 class="text-5xl font-extrabold">
                <span class="text-purple-800 italic">N</span>
                <span class="text-yellow-600 font-bold">a</span>
                <span class="text-red-600 font-bold">m</span>
                <span class="text-purple-600 font-bold">e</span>
                <span class="text-green-700 font-bold"> I</span>
                <span class="text-yellow-700 font-bold">T</span>
                <span class="text-red-600 font-extrabold">!</span>
            </h1>
            <p class="mt-2 text-sm tracking-wide text-gray-700">PARA APRENDER FALANDO</p>
        </div>

        <!-- Botões -->
        <div class="flex gap-6">
            <a href="{{ route('login') }}" 
               class="px-8 py-4 bg-[#DB7580] text-white font-bold rounded-xl shadow hover:scale-105 transition">
               LOGIN
            </a>
            <a href="{{ route('register') }}" 
               class="px-8 py-4 bg-[#DB7580] text-white font-bold rounded-xl shadow hover:scale-105 transition">
               CADASTRO
            </a>
        </div>
    </div>
</body>
</html>
