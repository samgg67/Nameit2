<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado por Jogar - Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#D9ABFF] flex items-center justify-center min-h-screen p-4">

    <div class="bg-[#FFDAAB] border-2 border-black rounded-3xl p-8 md:p-8 w-full max-w-screen-md mx-auto shadow-xl flex flex-col items-center text-center">
        
        <h1 class="text-3xl font-bold mb-4">🎉 Obrigado por Jogar! 🎉</h1>
        
        <p class="text-lg mb-6">
            A equipe agradece por você ter participado do nosso quiz! <br>
            Esperamos que tenha se divertido e aprendido algo novo. <br>
            Continue jogando para acumular mais pontos e desafiar seus conhecimentos!
        </p>

        <div class="flex justify-center gap-4 mt-4">
            <a href="{{ url('/dashboard') }}" 
               class="bg-[#ABDDFF] border-2 border-black px-6 py-2 rounded-lg font-bold hover:bg-[#DDFFAB] transition-colors duration-300">
                VOLTAR AO MENU
            </a>
            <a href="{{ route('ranking') }}" 
               class="bg-[#ABDDFF] border-2 border-black px-6 py-2 rounded-lg font-bold hover:bg-[#DDFFAB] transition-colors duration-300">
                VER RANKING
            </a>
        </div>
    </div>

</body>
</html>
