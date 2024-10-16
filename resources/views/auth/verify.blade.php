@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! precisamos apenas que você valide o e-email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail pra você com o link de validação.
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor valide seu e-mail por meio do link de verificação que encaminhamos para seu e-mail.<br>
                    Caso você não tenha recebido o e-mail de verificação, solicite um novo e-mail aqui:
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Reenviar e-mail</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
