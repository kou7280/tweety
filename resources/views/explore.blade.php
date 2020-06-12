<x-app>
  <div>
    @foreach ($users as $user)
      <a href="{{ $user->path() }}">
        <div class="flex items-center mb-4">
          <img class="mr-4 rounded-full" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60px">
          <h4 class="font-bold">{{ '@' . $user->username }}</h4>
        </div>
      </a> 
    @endforeach
    {{ $users->links() }}
  </div>
</x-app>