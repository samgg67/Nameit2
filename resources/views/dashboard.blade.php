<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCOLHA SUA FASE!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    dark: '#9400d3',
                },
                fontFamily: {
                    poppins: ['Poppins', 'sans-serif'],
                },
            }
        }
    }
    </script>

    <style type="text/css">
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-dark min-h-screen flex flex-col items-center justify-center p-5 text-white font-poppins">

    <!-- 🔹 Botão de Ajuda - TOPO ESQUERDO -->
    <div class="fixed top-5 left-5 z-50">
        <a href="{{ url('/ajuda') }}" class="bg-yellow-400 text-black px-4 py-2 rounded-full shadow-md hover:bg-yellow-300 transition duration-300 font-semibold">
             Ajuda
        </a>
    </div>

    <!-- 🔹 Botão de Ranking - TOPO DIREITO -->
    <div class="fixed top-5 right-5 z-50">
        <a href="{{ route('ranking') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-full shadow-md hover:bg-indigo-500 transition duration-300 font-semibold">
             Ranking
        </a>
    </div>

    <div class="w-full max-w-6xl text-center">
        
        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold uppercase tracking-wider mb-3 text-white drop-shadow-md">ESCOLHA SUA FASE!</h1>
            <p class="text-xl text-white">Selecione uma das fases abaixo para começar sua aventura</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            
            <div class="bg-[#DA8CCC] bg-opacity-80 rounded-xl  p-8 transition-all duration-300 shadow-xl hover:-translate-y-2 hover:shadow-2xl border-2 border-transparent hover:border-indigo-500 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-green-600"></div>
                <h2 class="text-2xl font-bold uppercase mb-4 text-gray-100 tracking-wide">INICIANTE</h2>
                <p class="text-white mb-6 leading-relaxed">Perfeito para quem está começando. Aprenda os conceitos básicos e prepare-se para desafios maiores.</p>
                <span class="inline-block bg-green-600 text-white text-xs font-semibold px-4 py-1 rounded-full mb-4">Fácil</span>
                <div class="mt-5">
                    <a href="{{ url('/iniciante') }}" class="inline-block bg-indigo-500 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg uppercase tracking-wide">Jogar</a>
                </div>
            </div>
            
            <div class="bg-purple-400 bg-opacity-80 rounded-xl p-8 transition-all duration-300 shadow-xl hover:-translate-y-2 hover:shadow-2xl border-2 border-transparent hover:border-indigo-500 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-yellow-400"></div>
                <h2 class="text-2xl font-bold uppercase mb-4 text-gray-100 tracking-wide">INTERMEDIÁRIO</h2>
                <p class="text-white mb-6 leading-relaxed">Para jogadores que já dominam o básico e estão prontos para um desafio mais significativo.</p>
                <span class="inline-block bg-yellow-400  text-gray-900 text-xs font-semibold px-4 py-1 rounded-full mb-4">Médio</span>
                <div class="mt-5">
                    <a href="{{ url('/intermediario') }}" class="inline-block bg-indigo-500 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg uppercase tracking-wide">Jogar</a>
                </div>
            </div>
            
            <div class="bg-purple-400 bg-opacity-80 rounded-xl p-8 transition-all duration-300 shadow-xl hover:-translate-y-2 hover:shadow-2xl border-2 border-transparent hover:border-indigo-500 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-red-500"></div>
                <h2 class="text-2xl font-bold uppercase mb-4 text-gray-100 tracking-wide">Dificil</h2>
                <p class="text-white mb-6 leading-relaxed">Apenas para os verdadeiros mestres. Esta fase testará todos os seus conhecimentos e habilidades.</p>
                <span class="inline-block bg-red-500 text-white text-xs font-semibold px-4 py-1 rounded-full mb-4">Difícil</span>
                <div class="mt-5">
                    <a href="{{ url('/dificil') }}" class="inline-block bg-indigo-500 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg uppercase tracking-wide">Jogar</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
