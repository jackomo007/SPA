@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header" style="color: #a872c5;">
                    <h2>
                        Gerenciamento de Notas
                    </h2>
                </div>
                <div class="card-body gradient">
                    <notas />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection