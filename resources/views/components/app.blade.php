<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex justify-between">
                <div class="lg:w-32">
                    @include('_sidebar-links')
                </div>
                <div class="lg:flex-1" style="max-width: 700px">
                    {{ $slot }}
                </div>
                <div class="lg:w-1/6 lg:mx-10 bg-gray-200 border border-gray-300 rounded-lg py-4 px-6 self-start">
                    @include('_friends-list')
                </div>
            </div>
        </main>
    </section>
</x-master>