<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @fluxAppearance
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand href="{{ route('inicio.index') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Americo SEO." class="px-2" />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="{{ route('inicio.index') }}" :current="request()->routeIs('inicio.index')">
                    Inicio
                </flux:navlist.item>
                <flux:navlist.item icon="rectangle-stack" href="{{ route('task.index') }}" :current="request()->routeIs('task.index')">
                    Tareas
                </flux:navlist.item>
                {{-- <flux:navlist.group :expandable="true" heading="Favorites" class="hidden lg:grid">
                    <flux:navlist.item href="#" current>Marketing site</flux:navlist.item>
                    <flux:navlist.item icon="inbox" href="#">Android app</flux:navlist.item>
                    <flux:navlist.item href="#" badge="24">Brand guidelines</flux:navlist.item>
                </flux:navlist.group> --}}
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="cog-6-tooth" href="#">
                    Configuración
                </flux:navlist.item>
            </flux:navlist>

            <div class="max-lg:hidden grid gap-2">
                <div class="flex items-center justify-between p-2 bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-lg">
                    <div class="flex items-center gap-2">
                        <img src="https://fluxui.dev/img/demo/user.png" class="w-8 h-8 rounded-sm" />
                        <div class="flex flex-col gap-1">
                            <span class="text-sm font-medium text-zinc-700 dark:text-zinc-200">Jamt Mendoza</span>
                            <span class="text-xs text-zinc-500 dark:text-zinc-400">Administrador</span>
                        </div>
                    </div>
                    <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" size="sm" />
                </div>

                <flux:button variant="filled" class="w-full cursor-pointer" icon="arrow-right-start-on-rectangle">
                    Cerrar Sesión
                </flux:button>
            </div>
        </flux:sidebar>

        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" class="lg:mr-0 mr-2" />

            <livewire:components.dropdown-perfil.index position="bottom" align="end" />
        </flux:header>

        <flux:main>

            {{ $slot }}

        </flux:main>

        @livewire('notifications')

        @fluxScripts
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
