
@extends('template')

@section('content')
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <h1>Fiche de restaurant</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nom du restaurant</h3>
                </div>
                <div class="panel-body">
                    {{ $restaurant->name }}
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Heures d'ouverture</h3>
                </div>
                <div class="panel-body">
                    @foreach($jours as $jour)
                        @if($jour->restaurants->count() > 0)
                            <strong>{{ $jour->name }} :</strong>
                            @foreach($jour->restaurants as $restaurant)
                                {{ $restaurant->pivot->horaires }}
                            @endforeach
                            <br>

                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection