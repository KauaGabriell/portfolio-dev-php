<?php
$itens = [
    "text" => ["GitHub", "PHP", "CSS", "HTML", "JavaScript"]

];
$cores = ['#82BC4F', '#BB72E9', '#3996DB', '#E3646E', '#EABD5F',];

?>


<header class="bg-[url('./assets/BgIntro.png')] h-[200] bg-cover bg-center bg-no-repeat flex items-center justify-center">

    <div class="flex items-center flex-col gap-20 min-h-[460px] max-w-2xl my-10">
        <div class="flex flex-col items-end">

            <img src="./assets/User.png" alt="">
            <img class="size-7 -translate-y-7" src="./assets/Code.png" alt="">
        </div>

        <div class="flex items-center justify-between flex-col w-680px gap-5">

            <h2 class="font-serif text-gray-300 text-lg">Hello Word! Meu nome é <span class="text-red-400">Martina Santos</span></h2>

            <h1 class="text-5xl font-bold text-gray-200 font-sans">Desenvolvedora PHP</h1>

            <p class="text-sm text-center text-gray-500 font-sans">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>
        </div>

        <!--Lista de Especialidades dinâmica-->

        <ul class="flex gap-5">
            <?php foreach ($itens['text'] as $index => $item): ?>
                <li class="bg-[<?= $cores[$index] ?>] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">
                    <?= $item?>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</header>