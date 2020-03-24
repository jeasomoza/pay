@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hacer un Pago</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    <form action="{{route('pagos')}}" method="POST" id="paymentForm">
                        @csrf
                        <div class="col-auto">
                            <lable>Cuanto quieres pagar?</lable>
                            <input type="number" min="5" step="0.01" class="form-control" name="value" value={{mt_rand(500,100000)/100}}>
                            <small class="form-text text-muted">Use cantidades de dos decimales y separados por "."</small>
                        </div>
                        <div class="col-auto">
                            <label>Monedas</label>
                            <select class="custom-select" name="currency" required>
                                @foreach ($currencies as $moneda)
                                <option value="{{ $moneda->iso}}">
                                    {{ strtoupper($moneda->iso)}}
                                @endforeach
                            </select>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <lable>Selecciona la plataforma deseada:</lable>
                            
                                <div class="form-group" id="toggler">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach ($plataformas as $pl)
                                            <lable 
                                                class="btn btn-outline-secondary rounded m-2 p-1"
                                                data-target="#{{$pl->name}}Collapse"
                                                data-toggle="collapse"
                                                >
                                                <input type="radio" name="payment_platform" value={{$pl->id}} required>
                                                <img class="img-thumbnail" src="{{asset($pl->image)}}">
                                            </lable>
                                        @endforeach
                                        @foreach ($plataformas as $pl)
                                            <div 
                                            id="{{$pl->name}}Collapse"
                                            class="collapse"
                                            data-parent="#toggler"
                                            >
                                                @includeIf('components.'.strtolower($pl->name).'-collapse')
                                            </div>  
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-lg">Pagar</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
