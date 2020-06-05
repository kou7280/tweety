<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
  <form method="POST" action="/tweets">
    @csrf
      <textarea 
          name="body" 
          class="w-full p-2"
          placeholder="What's up doc?"
      >

      </textarea>

      <hr class="my-4"> 

      <footer>
          <div class="flex justify-between">
              <img 
                src="{{ auth()->user()->avatar }}" 
                alt="Your avatar"
                class="rounded-full">

                <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-lg shadow"
                >
                    Tweet-a-roo!
                </button>
          </div>
      </footer>
  </form>
  @error('body')
      <p class="text-red-700 text-sm">{{ $message }}</p>
  @enderror
</div>