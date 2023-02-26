
<x-guest-layout>

    <html class="h-full bg-gray-300">
        <body class="h-full">

            <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8">
                    <!-- AiMeta Header -->
                    <div>
                        <img class="mx-auto h-12 w-auto" src="{{ asset ('aifx/img/logo/aifx-branding.png') }}" alt="aiMeta">
                        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Subscribe to aiMeta Awesomeness</h2>
                        <p class="mt-2 text-center text-sm text-gray-600">
                            Only when we have something of value to share. <br>
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View us on Github</a>
                        </p>
                    </div>
                    <form class="mt-8 space-y-6" action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <div class="-space-y-px rounded-md shadow-sm">
                            <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    required class="relative block w-full appearance-none rounded-none rounded-t-md
                                                    border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500
                                                    focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Your Email Address">
                            </div>
                            <div>
                            <label for="name" class="sr-only">Name</label>
                            <input id="name"
                                    name="name"
                                    type="name"
                                    required class="relative block w-full appearance-none rounded-none rounded-b-md
                                                    border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500
                                                    focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Your Name">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me"
                                        name="remember-me"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="remember-me"
                                        class="ml-2 block text-sm text-gray-900">
                                        send me your portfolio
                                </label>
                            </div>

                            <div class="text-sm">
                            <a href="/" class="font-medium text-indigo-600 hover:text-indigo-500">Go Back Home</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600
                                            py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700
                                            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Subscribe Now
                            </button>
                        </div>
                    </form>

                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                </div>
            </div>

        </body>
    </html>

</x-guest-layout>


