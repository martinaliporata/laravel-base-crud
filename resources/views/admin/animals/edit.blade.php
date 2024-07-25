@extends('layout.app')

@yield('page-title', 'Edit and update the animal')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="mb-3 text-center">
            Editing {{$animal->name}}
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            {{-- Nel metodo del form posso scrivere solo get o post, quindi, se voglio aggiungere un altro metodo, lo scrivo sotto --}}
            <form action="{{route('admin.animals.update', $animal)}}" method="POST" id="creation-form">
                @method("PUT")
                @csrf
                <label for="name">Name</label>
                <input class="form-control form-control-sm" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name" value="{{$animal->name}}">
                <label for="image">Image_url</label>
                <input class="form-control form-control-sm" type="text" placeholder="Animal image" aria-label="image" id="image" name="image" value="{{$animal->image_url}}">
                <label for="species">Species</label>
                <input class="form-control form-control-sm" type="text" placeholder="species" aria-label="species" id="species" name="species" value="{{$animal->species}}">
                <label for="weight">Weight</label>
                <input class="form-control form-control-sm" type="number" placeholder="weight" aria-label="weight" id="weight" name="weight" value="{{$animal->weight}}">
                <label for="alimentation">Alimentation</label>
                <input class="form-control form-control-sm" type="text" placeholder="alimentation" aria-label="alimentation" id="alimentation" name="alimentation" value="{{$animal->alimentaton}}">
                <label for="extintion">Extintion</label>
                <input class="form-control form-control-sm" type="text" placeholder="extintion" aria-label="extintion" id="extintion" name="extintion" value="{{$animal->extintion}}">
                <label for="colour">Colour</label>
                <input class="form-control form-control-sm" type="text" placeholder="colour" aria-label="colour" id="colour" name="colour" value="{{$animal->colour}}">
                <label for="habitat">Habitat</label>
                <input class="form-control form-control-sm" type="text" placeholder="habitat" aria-label="habitat" id="habitat" name="habitat" value="{{$animal->habitat}}">
                <label for="life duration">Life duration</label>
                <input class="form-control form-control-sm" type="text" placeholder="life duration" aria-label="life duration" id="life duration" name="life duration" value="{{$animal->life_duration}}">
                <div class="d-flex justify-content-between">
                    <input type="submit" value="Update {{$animal->name}}" class="btn btn-primary">
                    <input type="reset" value="Reset fields" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom-scripts')
    @vite('resources/js/creation-confirm.js')
@endsection
