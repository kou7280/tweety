<x-app>
  <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input type="text" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="username" name="username" value="{{ $user->username }}">
      @error('username')
          <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input type="text" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="name" name="name" value="{{ $user->name }}">
      @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="avatar">
        Avatar
      </label>
      <div class="flex">
        <input type="file" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="avatar" name="avatar">
        <img src="{{ $user->avatar }}" width="40" alt="Your avatar">
      </div>
      @error('avatar')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input type="email" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="email" name="email" value="{{ $user->email }}">
      @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input type="password" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="password" name="password" required>
      @error('password')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
        Password Confirmation
      </label>
      <input type="password" class="text-gray-700 block appearance-none w-full rounded border py-2 px-3 focus:outline-none focus:shadow-outline" id="password_confirmation" name="password_confirmation" required>
      @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>
    <button type="submit" class="bg-blue-500 py-2 px-4 text-white rounded text-sm font-bold focus:outline-none focus:shadow-outline">Submit</button>
  </form>
</x-app>