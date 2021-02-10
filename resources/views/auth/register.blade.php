@extends('layouts.app')

@section('content')
    <div class="fondo-register font-sans login bg-cover"> 
   
        <div class="container mx-auto my-auto  justify-center items-center">
            <div class="flex flex-wrap justify-center">
                <div class="w-full max-w-lg">
                    <div class="flex flex-col break-words bg-gray-400 bg-opacity-80 border-2 shadow-md mt-20">
                        <div class="bg-gray-800 text-gray-100 uppercase text-center py-3  mb-0">
                            {{ __('Register') }}
                        </div>
                        
                        <div class="my-3 mx-4">{{ __('Login') }}</div>
                        
                        <form class="py-8 px-5" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="block text-gray-900 text-sm mb-2">{{ __('Name') }}</label>

                                
                                    <input id="name" type="text" class="p-3 bg-gray-200 rounded form-input w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-900 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                                
                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="password" class="block text-gray-900 text-sm mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="password-confirm" class="block text-gray-900 text-sm mb-2">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full" name="password_confirmation" required autocomplete="new-password">
                                
                            </div>

                            <div class="flex flex-wrap mb-6">
                                
                                <button type="submit" class="bg-gray-800 p-2 w-full text-white rounded-md hover:bg-gray-900 focus:outline-none focus:shadow-outline uppercase">
                                    {{ __('Register') }}
                                </button>
                                    
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
 
    </div>
@endsection