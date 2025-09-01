<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Avançado</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card-container {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="bg-[#D9ABFF] flex items-center justify-center min-h-screen">

    <div class="card-container bg-[#FFABAB] border-2 border-black p-10 md:p-8 rounded-2xl w-2/5 min-h-[50vh] flex flex-col justify-center items-center text-center">

        <h2 class="text-black text-3xl md:text-4xl font-bold mb-4">Avançado</h2>

        <p class="text-black text-base md:text-lg mb-6 leading-relaxed text-center">
            Esta fase é ideal para quem já domina os conceitos básicos e deseja avançar com mais segurança. Aqui, você vai fortalecer seus conhecimentos, encarar novos desafios e construir uma base sólida para subir de nível com confiança.
        </p>

        <div class="bg-red-500 border-2 border-black text-white font-bold py-1 px-6 rounded-full mb-8 text-sm">
            Dificil
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('dificil.fase1') }}" class="bg-[#ABE4FF] border-2 border-black hover:bg-[#D9ABFF] text-black font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out">
            INICIAR
            </a>
            <a href="{{ url('/dashboard') }}" class="bg-[#ABE4FF] border-2 border-black hover:bg-[#D9ABFF] text-black  font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out">
            VOLTAR
            </a>
        </div>
    </div>

</body>

</html>
