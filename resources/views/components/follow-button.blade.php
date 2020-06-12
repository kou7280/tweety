@unless (current_user()->is($user))
  <form action="{{ route('follow', $user) }}" method="POST">
    @csrf
    <button 
        type="submit"   
        class="py-2 px-5 bg-blue-400 rounded-full text-white shadow"
    >
    {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
  </form>
@endunless