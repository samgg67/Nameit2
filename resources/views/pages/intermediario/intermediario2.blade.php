<body class="bg-[#FFCCCB] flex items-center justify-center min-h-screen">

    <div class="card-container bg-[#967BB6] p-10 md:p-8 rounded-2xl w-2/5 min-h-[50vh] flex flex-col justify-center items-center text-center">

        <h2 class="text-white text-3xl md:text-4xl font-bold mb-4">INTERMEDIÁRIO</h2>

        <p class="text-white text-base md:text-lg mb-6 leading-relaxed">
            Perfeito para quem está começando. Aprenda os conceitos básicos e prepare-se para desafios maiores.
        </p>

        <div class="bg-green-500 text-white font-bold py-1 px-4 rounded-full mb-6 text-sm">
            Fácil
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('iniciante.fase1') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out">
            INICIAR
            </a>
            <a href="{{ url('/dashboard') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out">
            VOLTAR
            </a>
        </div>
    </div>

</body>
