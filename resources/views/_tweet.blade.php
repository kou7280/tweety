<div class="flex p-4 {{ $loop->last ? "" : "border-b border-b-grey-400 " }} items-center">
  <div class="mr-2 flex-shrink-0">
    <a href="{{ $tweet->user->path() }}">
      <img
        src="{{ $tweet->user->avatar }}" 
        class="rounded-full mr-2"
        width="50px"
        height="50px"
      >
    </a>
  </div>
  <div>
    <h5 class="font-bold mb-2">
        <a href="{{ $tweet->user->path() }}">
          {{ $tweet->user->name }}
        </a>
      </h5>
      <p class="text-sm">{{ $tweet->body }}</p>
  </div>
</div>