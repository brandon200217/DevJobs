@extends('layouts.app')

@section('content')
<div class="container mx-auto w-full">
    <div class="flex flex-wrap justify-center">
        <div class=" w-full max-w-lg">
            <div class="flex flex-col break-words bg-gray-400 bg-opacity-80 border-2 shadow-md mt-20">
                <div class="bg-gray-800 text-gray-100 uppercase text-center py-3  mb-0">
                    {{ __('Reset Password') }}
                </div>

            
                <form class="py-8 px-5" method="POST" action="{{ route('password.update') }}" novalidate>
                    @csrf

                    <input class="p-3 bg-gray-200 rounded form-input w-full" type="hidden" name="token" value="{{ $token }}">

                    <div class="flex flex-wrap mb-6" >
                        <label for="email" class="block text-gray-900 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                        <input class="p-3 bg-gray-200 rounded form-input w-full" id="email" type="email" class="form-control @error('email') border-red-500 border @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-900 text-sm mb-2">{{ __('Password') }}</label>

                            
                        <input class="p-3 bg-gray-200 rounded form-input w-full" id="password" type="password" class="form-control @error('password') border-red-500 border @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                         
                    </div>

                    <div class="flex flex-wrap mb-6">
                            
                        <label for="password-confirm" class="block text-gray-900 text-sm mb-2">{{ __('Confirm Password') }}</label>
                        <input class="p-3 bg-gray-200 rounded form-input w-full" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  
                    </div>

                    <div class="flex flex-wrap mb-6">
                       
                        <button type="submit" class="bg-gray-800 p-2 w-full text-white rounded-md hover:bg-gray-900 focus:outline-none focus:shadow-outline uppercase">
                            {{ __('Reset Password') }}
                        </button>
                   
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
