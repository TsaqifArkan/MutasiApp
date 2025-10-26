<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>{{ $titles }}</title>
</head>

<body class="min-h-screen flex flex-col">

    <div class="min-h-full">
        <x-navbar></x-navbar>
        {{-- <x-header>{{ $titles }}</x-header> --}}
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam debitis voluptates. Aspernatur
        aliquid dolores, voluptatum sed quod dolorem totam quisquam! Sint at possimus id quos sapiente natus iste ea!
        Deserunt voluptates laboriosam aliquid dicta excepturi nam. Aperiam voluptatibus sit facere dolorem nam dolores
        delectus. In quia dignissimos eum temporibus. Consequatur, error. Veritatis quis repudiandae dolorem expedita
        non ea eaque?
        Quod consequatur accusamus quis? Assumenda, dolorum molestias modi neque veritatis sunt doloremque quae, debitis
        maxime repellendus temporibus? Odio placeat eligendi saepe pariatur voluptates dolores modi corporis! Alias
        minima reprehenderit laboriosam.
        Atque fugit doloremque debitis maxime nulla aut tempora suscipit libero, dicta quo eos consequatur quod, qui
        aperiam iusto quibusdam. Doloremque fugiat voluptatum voluptatibus fuga similique tempora deleniti consequuntur
        natus officiis.
        Qui obcaecati veritatis labore dicta ipsa impedit accusamus vel, quam praesentium et quidem deleniti fugiat quo,
        commodi voluptates molestias natus architecto voluptate, possimus aliquam eligendi doloribus? Voluptates quaerat
        fugit rem?
        <div class="p-8">
            <button class="btn btn-info">Hello DaisyUI 🌸</button>
        </div>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
