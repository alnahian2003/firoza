@extends('layouts.blog')

@section('title', $post->title)

@section('main_content')
    <!-- Main Content -->
    <main class="mx-auto w-full max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl">
            {{-- Back Button --}}
            <a class="mb-6 inline-flex items-center justify-center gap-2 rounded-full px-3 py-1 text-lg font-medium text-zinc-400 ring-1 ring-inset ring-white/10 transition hover:bg-white/5 hover:text-white"
                href="{{ route('blog.index') }}">
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z"
                        clip-rule="evenodd" />
                </svg>

                Back
            </a>
            <article
                class="ring-white/15 w-full space-y-6 rounded-xl bg-zinc-900/20 p-6 text-white shadow-lg ring-1 backdrop-blur-[2px] md:p-10">
                <!-- Main Content -->
                <div>
                    <!-- Article Title -->
                    <h3 class="mb-4 text-center text-xl font-bold !leading-tight sm:text-4xl lg:text-6xl">
                        {{ $post->title }}
                    </h3>

                    <!-- Meta Info -->
                    <div
                        class="my-6 flex flex-row flex-wrap items-center justify-center gap-4 divide-x divide-zinc-700 text-center">
                        <!-- Author Info -->
                        <div class="flex items-center gap-2">
                            <img class="h-8 w-8 rounded-full p-0.5 ring-1 ring-emerald-500"
                                src="https://avatars.githubusercontent.com/u/61485238?v=4" alt="{{ $post->user->name }}" />
                            <h4>{{ $post->user->name }}</h4>
                        </div>


                        <!-- Date -->
                        <p class="pl-4 text-lg font-semibold text-zinc-400 sm:text-base">
                            {{ $post->created_at->diffForHumans() }}
                        </p>

                        <!-- Category Pill -->
                        <div class="pl-4">
                            <a class="inline-flex justify-center gap-0.5 overflow-hidden rounded-full bg-emerald-400/10 px-3 py-1 text-sm font-medium text-emerald-400 ring-1 ring-inset ring-emerald-400/20 transition hover:bg-emerald-400/10 hover:text-emerald-300 hover:ring-emerald-300 sm:text-base"
                                href="{{ route('blog.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                        </div>

                        <!-- View Count Pill -->
                        <div class="px-4">
                            <div
                                class="inline-flex items-center justify-center gap-1 overflow-hidden rounded-full bg-orange-400/10 px-3 py-1 text-sm font-medium text-orange-400 ring-1 ring-inset ring-orange-400/20 transition sm:text-base">
                                <span>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                        <path fill-rule="evenodd"
                                            d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span> {{ number_format($post->views) }} Views
                            </div>
                        </div>

                    </div>

                    <hr class="my-8 h-px border-0 bg-zinc-700">

                    <!-- Post Body -->
                    <p class="text-base font-normal text-zinc-400 md:text-xl">
                        {{ $post->body }}
                    </p>
                </div>
            </article>
        </div>
    </main>
@endsection
