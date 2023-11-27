@extends('layouts.base')
@section('main_content')
    <!-- This example requires Tailwind CSS v2.0+ -->
        <header>
            <div class="relative bg-white">
                <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                        <div class="pt-5 pb-6 px-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                        alt="Workflow">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <nav class="grid grid-cols-1 gap-7">
                                    <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-600 text-white">
                                            <!-- Heroicon name: outline/inbox -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Inbox</div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-600 text-white">
                                            <!-- Heroicon name: outline/annotation -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Messaging</div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-600 text-white">
                                            <!-- Heroicon name: outline/chat-alt-2 -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Live Chat</div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-600 text-white">
                                            <!-- Heroicon name: outline/question-mark-circle -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Knowledge Base</div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="py-6 px-5">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing
                                </a>

                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                    Partners </a>

                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Company
                                </a>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                    Sign up </a>
                                <p class="mt-6 text-center text-base font-medium text-gray-500">
                                    Existing customer?
                                    <a href="#" class="text-gray-900"> Sign in </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div>
                <!-- Hero card -->
                <div class="relative">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                            <div class="absolute inset-0">
                                <img class="h-full w-full object-cover"
                                    src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100"
                                    alt="People working on laptops">
                                <div class="absolute inset-0 bg-indigo-700 mix-blend-multiply"></div>
                            </div>
                            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                                <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                    <span class="block text-white">Take control of your</span>
                                    <span class="block text-indigo-200">customer support</span>
                                </h1>
                                <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">Anim aute
                                    id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit
                                    sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                                <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                    <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                        <a href="#"
                                            class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                                            Get started </a>
                                        <a href="#"
                                            class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                            Live demo </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo cloud -->
                <div class="bg-gray-100">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">Trusted by over
                            5 very average small businesses</p>
                        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg"
                                    alt="Tuple">
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg"
                                    alt="Mirage">
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg"
                                    alt="StaticKit">
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                                <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg"
                                    alt="Transistor">
                            </div>
                            <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                                <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg"
                                    alt="Workcation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More main page content here... -->
        </main>
@endsection
