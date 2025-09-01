<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AJUDA & FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#D9ABFF',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                },
            },
        };
    </script>

    <style>
        * { font-family: 'Poppins', sans-serif; }
        details[open] summary .chev { transform: rotate(180deg); }
    </style>
</head>
<body class="bg-dark min-h-screen flex flex-col items-center justify-start p-5 text-white font-poppins">
    <!-- Ações fixas -->
    <div class="fixed top-10 left-10 z-50">
        <a href="{{ url('/') }}" class="bg-yellow-400 text-black px-12 py-4 rounded-full shadow-md hover:bg-yellow-300 transition duration-300 font-semibold">
            Voltar
        </a>
    </div>

    <div class="fixed top-10 right-10 z-50">
        <a href="{{ route('ranking') }}" class="bg-indigo-600 text-white px-12 py-4 rounded-full shadow-md hover:bg-indigo-500 transition duration-300 font-semibold">
            Ranking
        </a>
    </div>

    <!-- Cabeçalho -->
    <header class="w-full max-w-6xl text-center mt-24">
        <h1 class="text-4xl md:text-5xl font-bold uppercase tracking-wider mb-3 text-black drop-shadow-md">Ajuda & FAQ</h1>
        <p class="text-xl text-black">Tudo que você precisa para jogar sem perrengue ✨</p>

        <!-- Busca rápida -->
        <div class="mt-6 flex items-center justify-center">
            <div class="w-full max-w-2xl bg-white/70 backdrop-blur rounded-full border-2 border-black flex items-center px-5 py-3 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-black/70">
                    <path fill-rule="evenodd" d="M10.5 3a7.5 7.5 0 015.916 12.138l3.723 3.723a.75.75 0 11-1.06 1.06l-3.723-3.722A7.5 7.5 0 1110.5 3zm0 1.5a6 6 0 100 12 6 6 0 000-12z" clip-rule="evenodd" />
                </svg>
                <input id="search" type="text" placeholder="Buscar por dúvida, ex: vidas, pontuação, atalhos..." class="ml-3 flex-1 bg-transparent focus:outline-none text-black placeholder-black/60" />
            </div>
        </div>
    </header>

    <!-- Conteúdo -->
    <main class="w-full max-w-6xl mt-10 mb-20">
        <!-- Cards resumo -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-[#ABE4FF] bg-opacity-80 rounded-xl p-6 shadow-xl border-2 border-transparent hover:border-indigo-500 transition relative overflow-hidden">
                <h2 class="text-2xl font-bold uppercase mb-2 text-black tracking-wide">Como Jogar</h2>
                <p class="text-black/90">Escolha a fase, responda às perguntas e acumule pontos. Errou? Aprenda com a explicação e tente novamente!</p>
            </div>
            <div class="bg-[#ABE4FF] bg-opacity-80 rounded-xl p-6 shadow-xl border-2 border-transparent hover:border-indigo-500 transition relative overflow-hidden">
                <h2 class="text-2xl font-bold uppercase mb-2 text-black tracking-wide">Dificuldades</h2>
                <p class="text-black/90"><span class="bg-yellow-300 px-2 py-0.5 rounded-full">Iniciante</span>, <span class="bg-yellow-300 px-2 py-0.5 rounded-full">Intermediário</span> e <span class="bg-yellow-300 px-2 py-0.5 rounded-full">Difícil</span> — cada uma com desafios e pontuações diferentes.</p>
            </div>
            <div class="bg-[#ABE4FF] bg-opacity-80 rounded-xl p-6 shadow-xl border-2 border-transparent hover:border-indigo-500 transition relative overflow-hidden">>
                <h2 class="text-2xl font-bold uppercase mb-2 text-black tracking-wide">Suporte Rápido</h2>
                <p class="text-black/90">Travou? Veja a seção "Problemas Comuns" abaixo ou fale com a gente.</p>
            </div>
        </section>

        <!-- FAQ com detalhes -->
        <section class="mt-10 space-y-4" id="faq">
            <!-- Bloco: Como jogar -->
            <details class="group bg-white/80 rounded-xl border-2 border-black overflow-hidden shadow">
                <summary class="cursor-pointer select-none list-none">
                    <div class="flex items-center justify-between px-6 py-4">
                        <h3 class="text-xl md:text-2xl font-bold text-black">Como jogar e ganhar pontos?</h3>
                        <svg class="chev w-6 h-6 text-black transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 15.75a.75.75 0 01-.53-.22l-6-6a.75.75 0 111.06-1.06L12 13.94l5.47-5.47a.75.75 0 111.06 1.06l-6 6a.75.75 0 01-.53.22z"/></svg>
                    </div>
                </summary>
                <div class="px-6 pb-6 text-black space-y-3">
                    <ol class="list-decimal ml-6 space-y-1">
                        <li>Vá em <span class="font-semibold">Escolha sua Fase</span> e selecione a dificuldade.</li>
                        <li>Leia a pergunta e escolha a alternativa. Você verá na hora se acertou.</li>
                        <li>Caso tenha errado,responda novamente até acertar a alternativa</li>
                        <li>Complete a fase para registrar sua pontuação no <span class="font-semibold">Ranking</span>.</li>
                    </ol>
                    <p class="text-sm text-black/70">Dica: respostas consecutivas corretas podem dar bônus (se habilitado pelo professor/admin).</p>
                </div>
            </details>

            <!-- Bloco: Dificuldades -->
            <details class="group bg-white/80 rounded-xl border-2 border-black overflow-hidden shadow">
                <summary class="cursor-pointer select-none list-none">
                    <div class="flex items-center justify-between px-6 py-4">
                        <h3 class="text-xl md:text-2xl font-bold text-black">Qual a diferença entre Iniciante, Intermediário e Difícil?</h3>
                        <svg class="chev w-6 h-6 text-black transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 15.75a.75.75 0 01-.53-.22l-6-6a.75.75 0 111.06-1.06L12 13.94l5.47-5.47a.75.75 0 111.06 1.06l-6 6a.75.75 0 01-.53.22z"/></svg>
                    </div>
                </summary>
                <div class="px-6 pb-6 text-black grid md:grid-cols-3 gap-4">
                    <div class="bg-[#DDFFAB] rounded-lg p-4 border border-black/20">
                        <div class="h-1.5 w-full bg-green-600 mb-3"></div>
                        <p class="text-sm text-black/80"><span class="font-semibold">Iniciante:</span> perguntas básicas, mais tempo para pensar, feedback mais guiado.</p>
                    </div>
                    <div class="bg-[#FFDAAB] rounded-lg p-4 border border-black/20">
                        <div class="h-1.5 w-full bg-yellow-400 mb-3"></div>
                        <p class="text-sm text-black/80"><span class="font-semibold">Intermediário:</span> questões com pegadinhas leves, menor tempo e bônus moderado.</p>
                    </div>
                    <div class="bg-[#FFABAB] rounded-lg p-4 border border-black/20">
                        <div class="h-1.5 w-full bg-red-500 mb-3"></div>
                        <p class="text-sm text-black/80"><span class="font-semibold">Difícil:</span> perguntas desafiadoras, tempo reduzido e penalidades por erro.</p>
                    </div>
                </div>
            </details>


            <!-- Bloco: Pontuação -->
            <details class="group bg-white/80 rounded-xl border-2 border-black overflow-hidden shadow">
                <summary class="cursor-pointer select-none list-none">
                    <div class="flex items-center justify-between px-6 py-4">
                        <h3 class="text-xl md:text-2xl font-bold text-black">Como funciona a pontuação?</h3>
                        <svg class="chev w-6 h-6 text-black transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 15.75a.75.75 0 01-.53-.22l-6-6a.75.75 0 111.06-1.06L12 13.94l5.47-5.47a.75.75 0 111.06 1.06l-6 6a.75.75 0 01-.53.22z"/></svg>
                    </div>
                </summary>
                <div class="px-6 pb-6 text-black space-y-2">
                    <p><span class="font-semibold">Acerto:</span> +10 pontos (base) — fases mais difíceis podem ter multiplicadores.</p>
                    <p><span class="font-semibold">Erro:</span> Não haverá penalização ao errar uma pergunta.</p>
                </div>
            </details>

            <!-- Bloco: Problemas comuns -->
            <details class="group bg-white/80 rounded-xl border-2 border-black overflow-hidden shadow">
                <summary class="cursor-pointer select-none list-none">
                    <div class="flex items-center justify-between px-6 py-4">
                        <h3 class="text-xl md:text-2xl font-bold text-black">Problemas comuns e soluções</h3>
                        <svg class="chev w-6 h-6 text-black transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 15.75a.75.75 0 01-.53-.22l-6-6a.75.75 0 111.06-1.06L12 13.94l5.47-5.47a.75.75 0 111.06 1.06l-6 6a.75.75 0 01-.53.22z"/></svg>
                    </div>
                </summary>
                <div class="px-6 pb-6 text-black">
                    <ul class="list-disc ml-6 space-y-2">
                        <li><span class="font-semibold">Botão não funciona:</span> atualize a página e verifique a conexão. Se for SPA, confira o console do navegador.</li>
                        <li><span class="font-semibold">Sem áudio:</span> alguns navegadores bloqueiam som automático. Clique em qualquer lugar para liberar.</li>
                        <li><span class="font-semibold">Página lenta:</span> feche abas pesadas ou limpe o cache. Em celulares, tente outro navegador.</li>
                        <li><span class="font-semibold">Erro 419</span> gere nova sessão (recarregue) e verifique a meta CSRF nos forms.</li>
                    </ul>
                </div>
            </details>

            <!-- Bloco: Contato -->
            <details class="group bg-white/80 rounded-xl border-2 border-black overflow-hidden shadow">
                <summary class="cursor-pointer select-none list-none">
                    <div class="flex items-center justify-between px-6 py-4">
                        <h3 class="text-xl md:text-2xl font-bold text-black">Contato e feedback</h3>
                        <svg class="chev w-6 h-6 text-black transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 15.75a.75.75 0 01-.53-.22l-6-6a.75.75 0 111.06-1.06L12 13.94l5.47-5.47a.75.75 0 111.06 1.06l-6 6a.75.75 0 01-.53.22z"/></svg>
                    </div>
                </summary>
                <div class="px-6 pb-6 text-black space-y-3">
                    <p>Achou um bug? Tem sugestão? Envie uma mensagem para nosso email <span class="bg-yellow-300 px-2 py-0.5 rounded-full">samuelsilva@edu.unifil.br

                    <p class="text-sm text-black/70">Seu feedback ajuda a melhorar as fases e o sistema de pontuação.</p>
                </div>
            </details>
        </section>

        <div class="mt-10 text-center">
            <a href="{{ url('/iniciante') }}" class="inline-block bg-[#ABE4FF] text-black border-2 border-black font-semibold px-10 py-3 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg uppercase tracking-wide">Começar no Iniciante</a>
        </div>
    </main>

    <script>
        
        const input = document.getElementById('search');
        const items = Array.from(document.querySelectorAll('#faq details'));
        input?.addEventListener('input', () => {
            const q = input.value.toLowerCase();
            items.forEach((el) => {
                const text = el.innerText.toLowerCase();
                el.style.display = text.includes(q) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
