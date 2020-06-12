<x-app>
    <header class="mb-6">
        <div class="relative">
            <img 
                src="/images/default-profile-banner.jpg" 
                alt="Top banner" 
                class="mb-2"
            >
            <img 
                src="{{ $user->avatar }}" 
                class="rounded-full mr-2 w-32 absolute"
                style="top: 200px; transform: translate(-50%, -50%); left: 50%;"   
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="py-2 px-5 bg-white rounded-full border border-grey-400 mr-2">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque praesentium necessitatibus provident a nostrum ab deleniti quisquam sapiente facilis laudantium. Ducimus modi corrupti illo nulla dolorum incidunt officiis et magnam. </p>
    </header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>