<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 border border-gray-300 bg-gray-200 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-grey-700">
                            Email
                        </label>
                        <input class="border border-gray-300 w-full p-2" type="text" name="email" id="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-red-500 text-xs" >{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-grey-700">
                            Password
                        </label>
                        <input class="border border-gray-300 w-full p-2" type="text" name="password" id="password" value="{{ old('password') }}" required>
                        @error('password')
                            <span class="text-red-500 text-xs" >{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-500 font-bold" for="remember">
                          <input class="mr-2 leading-tight" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                          <span class="text-sm">
                            Remember me
                          </span>
                        </label>
                      </div>
                    <div>
                        <button type="submit" class="py-2 px-6 bg-blue-600 text-white rounded uppercase text-sm">
                            Login
                        </button>
                        <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
