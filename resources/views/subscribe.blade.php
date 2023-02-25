<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Your name">
                        <input type="email" name="email" placeholder="Your email address">
                        <button type="submit">Subscribe</button>
                    </form>

                    @if(session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
