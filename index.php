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

        <!--Header Section-->

        <?php include('./components/header.php'); ?>

        <!--Header Section-->

        <?php include('./components/projects.php'); ?>

        <!--contacts Section-->

        <?php include('./components/contacts.php'); ?>

    </main>
</body>

</html>