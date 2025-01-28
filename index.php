<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Dev</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-[#16181D]">
  <main class="w-screen h-screen">

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

    <section class="mt-30 flex flex-col bg-[#16181D] gap-12">

      <div class="flex justify-center items-center flex-col gap-3">

        <span class="text-red-400">Meu Trabalho</span>

        <h2 class="text-2xl text-gray-300 font-bold">Veja os projetos em destaque</h2>

      </div>

      <div class="w-[1040px] mx-auto grid grid-cols-2 gap-6 justify-evenly">

        <div class="bg-[#292C34] h-[180px] w-[508px] rounded-xl p-3 flex gap-5">

          <img class="w-[224px] h-[156px]" src="./assets/image01.png" alt="">

          <div class="flex justify-between flex-col">
            <div class="flex flex-col gap-1">
              <h4>TravelGram</h4>
              <p>Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
            </div>

            <div>
              <ul class="flex gap-4">
                <li>PHP</li>
                <li>CSS</li>
                <li>HTML</li>
                <li>Javascript</li>
              </ul>
            </div>
          </div>



        </div>

        <div class="bg-rose-200 h-[180px] w-[508px] rounded-xl">



        </div>


      </div>

    </section>
    ajosdasda

  </main>
</body>

</html>