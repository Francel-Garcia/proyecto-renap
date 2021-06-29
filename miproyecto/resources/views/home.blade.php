@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <div>
                        <a href="{{ route('crear-empleado') }}" class="btn btn-primary">REGISTRAR EMPLEADO</a>
                    </div>
                    <div>
                        <a href="{{ url('/empleados') }}" class="btn btn-primary">VER EMPLEADOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
