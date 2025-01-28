<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Dev</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-[#16181D] overflow-x-hidden">
  <main class="w-screen h-screen flex flex-col gap-30">

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

        <ul class="flex gap-5">
          <li class="bg-[#82BC4F] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">GitHub</li>
          <li class="bg-[#BB72E9] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">PHP</li>
          <li class="bg-[#3996DB] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">CSS</li>
          <li class="bg-[#E3646E] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">HTML</li>
          <li class="bg-[#EABD5F] rounded-full px-3 py-1 text-[#16181D] text-md font-bold">Javascript</li>
        </ul>
      </div>

    </header>

    <section class=" w-screen h-auto flex flex-col bg-[#16181D] gap-10">

      <div class="flex justify-center items-center flex-col gap-3">

        <span class="text-red-400">Meu Trabalho</span>

        <h3 class="text-2xl text-gray-300 font-bold">Veja os projetos em destaque</h3>

      </div>

      <!--PRJ 01-->

      <div class="w-[1040px] mx-auto grid grid-cols-2 gap-6 justify-evenly">

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image01.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">TravelGram</h4>
              <p class="text-gray-400 text-base">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
            </div>



            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>


        <!--PRJ 02-->

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image02.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">Página de receita</h4>
              <p class="text-gray-400 text-base">Página com o passo a passo de uma receita para cupcakes</p>
            </div>

            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>

        <!--PRJ 03-->

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image03.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">Tech News</h4>
              <p class="text-gray-400 text-base">Homepage de um portal de notícias sobre a área de tecnologia</p>
            </div>

            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>

        <!--PRJ 04-->

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image04.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">Refund</h4>
              <p class="text-gray-400 text-base">Um sistema para pedido e acompanhamento de reembolso </p>
            </div>

            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>

        <!--PRJ 05-->

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image05.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">Página de turismo</h4>
              <p class="text-gray-400 text-base">Página com as principais informações para quem quer viajar para Busan</p>
            </div>

            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>

        <!--PRJ 06-->

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5 hover:outline-2 outline-[#878EA1]">

          <img class="w-[224px] h-[156px]" src="./assets/image06.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4 class="text-base font-extrabold text-gray-200 ">Zingen</h4>
              <p class="text-gray-400 text-base">Landing Page completa e responsiva de um aplicativo de Karaokê</p>
            </div>

            <div>
              <ul class="flex gap-3">
                <li class="font-semibold text-xs bg-[#BB72E9] rounded-full px-2 py-1">PHP</li>
                <li class="font-semibold text-xs bg-[#3996DB] rounded-full px-2 py-1">CSS</li>
                <li class="font-semibold text-xs bg-[#E3646E] rounded-full px-2 py-1">HTML</li>
                <li class="font-semibold text-xs bg-[#EABD5F] rounded-full px-2 py-1">Javascript</li>
              </ul>
            </div>
          </div>

        </div>

    </section>


    <!--Contact Section-->
    <div class="bg-[url('./assets/BgIntro.png')] bg-cover bg-center bg-no-repeat h-full flex flex-col items-center justify-between gap-18 ">

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

      <!--Links-->

      <div class="flex flex-col gap-7 mb-30">

        <a href="#" class="flex bg-[#292C34] items-center justify-between min-w-sm p-4 rounded-lg cursor-pointer hover:outline-2 outline-[#3996DB]">

          <div>
            <img src="./assets/LinkedinLogo.png" alt="LinkedIn Logo">
          </div>

          <div class="w-3/4">
            <span class="font-medium text-md text-gray-300">Linkedin</span>
          </div>

          <div>
            <img src="./assets/ArrowUpRight.png" alt="Arrow Icon">
          </div>

        </a>

        <a href="#" class="flex bg-[#292C34]  items-center justify-between min-w-sm p-4 rounded-lg hover:outline-2 outline-[#3996DB]">

          <div>
            <img src="./assets/Instagram.png" alt="LinkedIn Logo">
          </div>

          <div class="w-3/4">
            <span class="font-medium text-md text-gray-300">Instagram</span>
          </div>

          <div>
            <img src="./assets/ArrowUpRight.png" alt="Arrow Icon">
          </div>

        </a>

        <a href="#"  class="flex bg-[#292C34]  items-center justify-between min-w-sm p-4 rounded-lg hover:outline-2 outline-[#3996DB]">

          <div>
            <img src="./assets/GithubLogo.png" alt="LinkedIn Logo">
          </div>

          <div class="w-3/4">
            <span class="font-medium text-md text-gray-300">GitHub</span>
          </div>

          <div>
            <img src="./assets/ArrowUpRight.png" alt="Arrow Icon">
          </div>

        </a>

        <a href="#" class="flex bg-[#292C34] items-center justify-between min-w-sm p-4 rounded-lg cursor-pointer hover:outline-2 outline-[#3996DB]">
          <div>
            <img src="./assets/EnvelopeSimple.png" alt="LinkedIn Logo">
          </div>

          <div class="w-3/4">
            <span class="font-medium text-md text-gray-300">E-mail</span>
          </div>

          <div>
            <img src="./assets/ArrowUpRight.png" alt="Arrow Icon">
          </div>
        </a>

      </div> 

    </div>
  </main>
</body>

</html>
<a href=""></a>