<?php
$projetos = [
    'img' => [
        './assets/image01.png',
        './assets/image02.png',
        './assets/image03.png',
        './assets/image04.png',
        './assets/image05.png',
        './assets/image06.png'
    ],
    'nome' => [
        'TravelGram',
        'Página de Receita',
        'Tech News',
        'Refund',
        'Página de Turismo',
        'Zingen'
    ],
    'description' => [
        'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
        'Página com o passo a passo de uma receita para cupcakes',
        'Homepage de um portal de notícias sobre a área de tecnologia',
        'Um sistema para pedido e acompanhamento de reembolso',
        'Página com as principais informações para quem quer viajar para Busan',
        'Landing Page completa e responsiva de um aplicativo de Karaokê'
    ],
    'stack' => ['PHP', 'CSS', 'HTML', 'JavaScript']
];



// Array de cores para as stacks
$colors = ['#BB72E9', '#3996DB', '#E3646E', '#EABD5F'];
?>

<!-- Seção Principal de Projetos -->
<section class="w-screen h-auto flex flex-col bg-[#16181D] gap-10">
    <!-- Cabeçalho da Seção -->
    <div class="flex justify-center items-center flex-col gap-3">
        <span class="text-red-400">Meu Trabalho</span>
        <h3 class="text-2xl text-gray-300 font-bold">Veja os projetos em destaque</h3>
    </div>

    <!-- Grid de Projetos -->
    <div class="w-[1040px] mx-auto grid grid-cols-2 gap-6 justify-evenly">
        <?php foreach ($projetos['img'] as $index => $img): ?>
            <!-- Card do Projeto -->
            <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">
                <!-- Imagem do Projeto -->
                <img
                    class="w-[224px] h-[156px]"
                    src="<?= $img ?>"
                    alt="Imagem do projeto <?= $projetos['nome'][$index] ?>">

                <!-- Conteúdo do Projeto -->
                <div class="flex justify-between flex-col">
                    <!-- Informações do Projeto -->
                    <div class="flex flex-col gap-1">
                        <h4 class="text-base font-extrabold text-gray-200">
                            <?= $projetos['nome'][$index] ?>
                        </h4>
                        <p class="text-gray-400 text-base">
                            <?= $projetos['description'][$index] ?>
                        </p>
                    </div>

                    <!-- Stack de Tecnologias -->
                    <div>
                        <ul class="flex gap-3">
                            <?php foreach ($projetos['stack'] as $stackIndex => $language): ?>
                                <li class="font-semibold text-xs bg-[<?= $colors[$stackIndex] ?>] rounded-full px-2 py-1">
                                    <?= $language ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>