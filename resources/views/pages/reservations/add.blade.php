@extends('layout.app')


@section('content')
    <div class="container">
        <h1>Réservation en ligne</h1>
        <form action="{{route('reservations.store')}}" id="reservationForm" method="POST">
            @csrf
            <div class="form-input">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" value="test">
            </div>
            <div class="form-input">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="test">
            </div>
            <div class="input-group">
                <div class="label">
                    <span>Dates</span>  
                </div>
                <div>
                    <input type="date" name="arrival_time" id="arrival_time" value="2021-12-12" placeholder="Arrivée">
                </div>
                <div>
                    <input type="date" name="departure_time" id="departure_time" value="2021-12-12" placeholder="Départ">
                </div>
            </div>
            <div class="form-input">
                <label for="name">Hôtel</label>
                <select name="hotel" id="hotel">
                    @foreach ($hotels as $hotel)
                        <option value="<?= $hotel;?>"><?= $hotel;?></option>
                    @endforeach
                </select>
            </div>
            <div class="form-input">
                <label for="name">Nombre d'adultes</label>
                <select name="adult_nb" id="adult_nb">
                    @for ($i = 0; $i < 7; $i++)
                        <option value="<?= $i;?>"><?= $i;?></option>
                    @endfor
                </select>
            </div>
            <div class="form-input">
                <label for="child_nb">Nombre d'enfants</label>
                <select name="child_nb" id="child_nb">
                    @for ($i = 0; $i < 10; $i++)
                        <option value="<?= $i;?>"><?= $i;?></option>
                    @endfor
                </select>
            </div>
            <div class="switch">
                <div class="label" style="margin-top: 10px">
                    <span>Petit-dejeuner</span>
                </div>
                <input type="checkbox" name="breakfast" id="breakfast">
                <label for="breakfast"></label>
            </div>
            <div class="form-input">
                <label for="predicted_arrival_time">Heure d'arrivée prévue</label>
                <input type="time" class="form-control" name="predicted_arrival_time" id="predicted_arrival_time" value="08:38">
            </div>
            <div class="form-input">
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" rows="5">test</textarea>
            </div>
            <div class="form-submit">
                <input type="submit" value="Demande de réservation">
            </div>
        </form>
    </div>
@endsection