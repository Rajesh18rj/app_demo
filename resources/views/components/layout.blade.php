<!DOCTYPE html>
    <html lang="en" class="h-full bg-gray-100">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href= {{ asset('css/style.css') }}>  <!-- Link to external CSS file -->
            <script src="https://cdn.tailwindcss.com"></script>

        </head>

        <body>

            <x-nav-link href="/" :active="request()->is('/')" >Home</x-nav-link>
            <x-nav-link href="/jobs" :active="request()->is('/')">Jobs</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('/')" >Contact</x-nav-link>


	<main>
		<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
			<!-- Your content -->
            {{ $slot }}
		</div>
	</main>
</div>

        <img src = {{ asset('images/img.jpg')  }} alt = "">

        <script src={{ asset('js/script.js') }}></script> <!-- Link to external JavaScript file -->
        </body>
    </html>
