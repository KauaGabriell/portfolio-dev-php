<?php
// Array de contatos com informações das redes sociais
$contatos = [
    // Caminho das imagens dos ícones das redes
    'img' => [
        './assets/LinkedinLogo.png',
        './assets/GithubLogo.png',
        './assets/Instagram.png',
        './assets/EnvelopeSimple.png'
    ],
    // Nomes das redes sociais
    'nome' => [
        'Linkedin',
        'Github',
        'Instagram',
        'Email'
    ],
    // Ícone de seta usado em todos os links
    'arrow' => './assets/ArrowUpRight.png'
];
?>

<!-- Container principal com background -->
<div class="bg-[url('./assets/BgIntro.png')] bg-cover bg-center bg-no-repeat h-full flex flex-col items-center justify-between gap-18">
    
    <!-- Cabeçalho da seção -->
    <header class="flex flex-col items-center justify-between gap-6">
        <span class="text-[#BB72E9] text-xl">
            Contato
        </span>

        <h3 class="text-3xl text-gray-300 font-bold">
            Gostou do meu Trabalho?
        </h3>

        <p class="text-gray-500 text-lg">
            Entre em contato ou acompanhe as minhas redes sociais!
        </p>
    </header>

    <!-- Container dos links de redes sociais -->
    <div class="flex flex-col gap-7 mb-30">
        <?php 
        // Loop através das redes sociais
        foreach ($contatos['img'] as $index => $img): 
        ?>
           
            <a href="#" class="flex bg-[#292C34] items-center justify-between min-w-sm p-4 rounded-lg cursor-pointer hover:outline-2 outline-[#3996DB]">
               
                <div>
                    <img src="<?= $img ?>" alt="<?= $contatos['nome'][$index] ?> Logo">
                </div>
                
                <!-- Nome da rede social -->
                <div class="w-3/4">
                    <span class="font-medium text-md text-gray-300">
                        <?= $contatos['nome'][$index] ?>
                    </span>
                </div>
                
                <!-- Ícone de seta -->
                <div>
                    <img src="<?= $contatos['arrow'] ?>" alt="Arrow Icon">
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
