<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include('layouts.partials.head-script')

    <title>@yield('title', 'Firoza Blog') | {{ env('APP_NAME', 'Firoza') }}</title>
</head>

<body class="bg-zinc-900 antialiased">
    <!-- BG Gradient  -->
    <div class="absolute inset-0 -z-10 mx-0 max-w-none overflow-hidden">
        <div
            class="absolute left-1/2 top-0 z-[-100] ml-[-38rem] h-[25rem] w-[81.25rem] overflow-visible [mask-image:linear-gradient(white,transparent)]">
            <div
                class="absolute inset-0 bg-gradient-to-r from-[#36b49f]/30 to-[#DBFF75]/30 opacity-100 [mask-image:radial-gradient(farthest-side_at_top,white,transparent)]">
                <svg class="absolute inset-x-0 inset-y-[-50%] h-[200%] w-full skew-y-[-18deg] fill-black/40 stroke-black/50 stroke-white/5 mix-blend-overlay"
                    aria-hidden="true">
                    <defs>
                        <pattern id=":S1:" width="72" height="56" patternUnits="userSpaceOnUse" x="-12"
                            y="4">
                            <path d="M.5 56V.5H72" fill="none"></path>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#:S1:)"></rect>
                    <svg class="overflow-visible" x="-12" y="4">
                        <rect stroke-width="0" width="73" height="57" x="288" y="168"></rect>
                        <rect stroke-width="0" width="73" height="57" x="144" y="56"></rect>
                        <rect stroke-width="0" width="73" height="57" x="504" y="168"></rect>
                        <rect stroke-width="0" width="73" height="57" x="720" y="336"></rect>
                    </svg>
                </svg>
            </div>
        </div>
    </div>

    @include('layouts.partials.navbar')

    @yield('main_content')
</body>

</html>
