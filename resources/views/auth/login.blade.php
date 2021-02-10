<div class="fondo-login font-sans login bg-cover">

    @extends('layouts.app')

    @section('content')

    <div class="container mx-auto h-full justify-center items-center">
        <div class="flex flex-wrap justify-center ">
            <div class=" w-full max-w-lg">
                <div class="flex flex-col break-words bg-gray-400 bg-opacity-80 border-2 shadow-md mt-20">
                    <div class="bg-gray-800 text-gray-100 uppercase text-center py-3  mb-0">
                        {{ __('login')}}
                    </div>
                    <div class="my-3 mx-4">{{ __('Login') }}</div>

                        <form class="py-8 px-5" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-900 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                              
                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="password" class="block text-gray-900 text-sm mb-2">{{ __('Password') }}</label>

                                
                                <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>

                            <div class="flex flex-wrap mb-6">

                                <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="block text-gray-900 text-sm mb-2" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                            </div>

                            <div class="flex flex-wrap">
                               
                                <button type="submit" class="bg-gray-800 p-2 w-full text-white rounded-md hover:bg-gray-900 focus:outline-none focus:shadow-outline uppercase">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-black" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 

@endsection
