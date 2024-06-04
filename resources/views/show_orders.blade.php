<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Click Share Task</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="p-0 m-0 bg-[#2B658A]">
    <header class="container p-10">
        <nav class="flex justify-between items-center mt-8">
            <div id="logo"><img src="http://www.clickshare.store/logo/white_logo.png" class="h-6 sm:h-9"></div>
            <ul class="flex gap-5">
                <li class="list-none capitalize text-white text-xl">home</li>
                <li class="list-none capitalize text-white text-xl">about us</li>
                <li class="list-none capitalize text-white text-xl">contacy us</li>
            </ul>
        </nav>
    </header>
    @livewire('show-all-order-component')
    @livewireScripts
</body>

</html>
