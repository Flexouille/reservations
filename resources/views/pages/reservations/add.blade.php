@extends('layout.app')


@section('content')
    <div class="container">
        <h1>Réservation en ligne</h1>
        <form action="{{route('reservations.store')}}" id="reservationForm" method="POST">
            @csrf
            <div class="form-input">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-input">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname">
            </div>
            <div class="input-group">
                <div class="label">
                    <span>Dates</span>  
                </div>
                <div>
                    <input type="date" name="arrival_date" id="arrival_date" placeholder="Arrivée">
                </div>
                <div>
                    <input type="date" name="departure_date" id="departure_date" placeholder="Départ">
                </div>
            </div>
            <div class="form-input">
                <label for="name">Hôtel</label>
                <select name="hotel" id="hotel">
                    @foreach ($hotels as $item)
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
                <label for="arrival_time">Heure d'arrivée prévue</label>
                <input type="time" class="form-control" name="arrival_time" id="arrival_time">
            </div>
            <div class="form-input">
                <label for="comment">Commentaire</label>
                <textarea name="comment" id="comment" rows="5"></textarea>
            </div>
            <div class="form-submit">
                <input type="submit" value="Demande de réservation">
            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
@endsection