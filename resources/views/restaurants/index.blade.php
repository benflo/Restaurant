@extends('template')

@section('content')
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <h1>Restaurants</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des restaurants</h3>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($restaurants as $restaurant)
                        <tr>
                            <td><a href="{{ route('restaurants.show', ['id'=> $restaurant->id]) }}">{{$restaurant->name}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection