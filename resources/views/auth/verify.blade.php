@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 text-center text-white">
   
         
    <div class="text-xl my-5"><h1>¡{{ __('Verify Your Email Address') }}!</h1></div>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    
    @endif
        <div class="text-sm">
            <p class=" text-gray-500 my-5 font-medium">{{ __('Tu registro esta casi completo...')}}</p>
        
            <p class="leading-6 ">{{ __('Para poder completar el registro debes validar tu direccion de email.
                Deberas recibir en bandeja de entrada un mensaje de DevJobs.')}}</p>
            
            
            <p>{{ __('If you did not receive the email') }}</p>
        </div>
   
    
    
    <form class="d-inline my-5" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button 
            type="submit" 
            class="border bg-gray-500  bg-gray-800 text-white rounded-md px-8 py-4 m-4 transition duration-500 ease select-none hover:bg-yellow-400 focus:outline-none focus:shadow-outline">{{ __('Reenviar Email') }}
        </button>

        <p class="leading-6 my-8  text-sm">{{ __('Gracias por registrate, deseamos que tu expereincia sea la mejor posible')}}</p>
    
    </form>

    <div class=" mx-auto w-4/12 ">
        <img class="rounded-md" src="/afrontar-busqueda-empleo-dure-alarma_2223387695_7653147_1300x731.jpg" alt="">
    </div>
</div>
@endsection
