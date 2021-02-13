@extends('layouts.app')

@section('content')
<div class="fondo-login font-sans login bg-cover min-h-pantalla">
    <div class="container mx-auto h-full">
        <div class="row justify-content-center justify-center">
            <div class="flex flex-wrap justify-center">
                <div class="w-full max-w-lg">
                    
                    <div class="flex flex-col break-words bg-gray-400 bg-opacity-80 border-2 shadow-md mt-20">
    
                        <div 
                            class="bg-gray-800 text-gray-100 uppercase text-center py-3  mb-0   ">{{ __('Reset Password') }}
                        </div>

                        
                        <form class="py-8 px-5" method="POST" action="{{ route('password.email') }}" novalidate >
                            
                            @if (session('status'))
                                <span class="bg-yellow-400 border-l-4 border-red-500 text-white p-4 w-full my-5 block text-sm " role="alert">
                                    <strong>{{ session('status') }}</strong>
                                </span>
                            @endif
                            
                            
                            @csrf

                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-900 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                                
                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') border-red-500 border @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="flex flex-wrap">
                            
                                <button type="submit" class="bg-gray-800 p-2 w-full text-white rounded-md hover:bg-gray-900 focus:outline-none focus:shadow-outline uppercase">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
