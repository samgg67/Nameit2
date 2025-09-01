<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase Iniciante - Animal Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .correct {
            background-color: #4ade80 !important; /* Verde para acerto */
        }
        .incorrect {
            background-color: #ef4444 !important; /* Vermelho para erro */
        }
        .correct-highlight {
            background-color: #22c55e !important;
        }
    </style>
</head>
<body class="bg-[#D9ABFF] flex items-center justify-center min-h-screen p-4">

    <div class="bg-white border-2 border-black  rounded-3xl p-8 md:p-8 w-full max-w-screen-md mx-auto shadow-xl flex flex-col h-full">

        <div class="flex justify-between items-center mb-6 md:mb-8">
            <a href="{{ url('/dashboard') }}" class="text-black hover:text-gray-800 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </a>
        </div>

       <div class="bg-[#FFABAB] border-2 border-black rounded-2xl overflow-hidden shadow-md mb-6 md:mb-8 flex-grow">
        <img src="{{ asset('images/cherry.avif') }}" 
         alt="Peixe" 
         class="w-full h-64 md:h-80 object-cover">
        </div>


        <div class="space-y-4">
            @php
                $options = ['APRICOT', 'PASSION FRUIT', 'MANGO', 'CHERRY'];
                $correctAnswer = 'CHERRY';
                $points = 20; 
            @endphp
            @foreach ($options as $option)
            <button class="quiz-option w-full bg-[#ABE4FF] border-2 border-black hover:bg-[#DDFFAB] text-back font-bold py-4 px-6 rounded-xl transition-colors duration-300 flex justify-between items-center" data-option="{{ $option }}">
                <span>{{ $option }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                </svg>
            </button>
            @endforeach
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const correctAnswer = '{{ $correctAnswer }}';
        const points = {{ $points }};
        const buttons = document.querySelectorAll('.quiz-option');

        buttons.forEach(button => {
            button.addEventListener('click', async (event) => {
                const selectedOption = event.currentTarget.dataset.option;
                

                buttons.forEach(btn => btn.disabled = true);

                if (selectedOption === correctAnswer) {
                    event.currentTarget.classList.add('correct');

                    try {
                        const response = await fetch("{{ route('quiz.addPoints') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({ points })
                        });

                        const data = await response.json();

                        if (data.success) {
                            alert(`Correto! ${points} pontos adicionados. Total: ${data.total_points}`);
                            
                            window.location.replace("{{ url('/intermediario19') }}");
                        }

                    } catch (error) {
                        console.error('Erro ao adicionar pontos:', error);

                        window.location.replace("{{ url('/intermediario19') }}");
                    }

                } else {
                    event.currentTarget.classList.add('incorrect');

                    setTimeout(() => {
                        buttons.forEach(btn => btn.disabled = false);
                        buttons.forEach(btn => btn.classList.remove('correct', 'incorrect', 'correct-highlight'));
                    }, 1500);
                }
            });
        });

        history.replaceState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    });
    </script>

</body>
</html>
