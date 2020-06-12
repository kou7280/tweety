<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
  <form method="POST" action="/tweets">
    @csrf
      <textarea 
          name="body" 
          class="w-full p-2"
          placeholder="What's up doc?"
          required
      >

      </textarea>

      <hr class="my-4"> 

      <footer>
          <div class="flex justify-between items-center">
              <img 
                src="{{ auth()->user()->avatar }}" 
                alt="Your avatar"
                class="rounded-full"
                width="50"
                height="50"
              >

                <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white py-4 px-12 rounded-full shadow"
                >
                    Publish
                </button>
          </div>
      </footer>
  </form>
  @error('body')
      <p class="text-red-700 text-sm">{{ $message }}</p>
  @enderror
</div>