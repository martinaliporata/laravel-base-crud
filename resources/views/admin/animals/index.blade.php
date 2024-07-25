@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <div>
        Welcome in the homepage, please click on products to see them
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Animals' index
                </h1>
                <div class="row">
                    @foreach ($animals as $animal)
                        <article class="col-4 text-center">
                            <div class="card shadow" style="w-100">
                                <img class="card-img-top" src="{{$animal->image_url}}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$animal->id}} - {{$animal->name}}
                                    </h5>
                                    <p class="card-text">
                                        <br> Species: {{$animal->species}}
                                        <br> Weight: {{$animal->weight}}
                                        <br> Alimentation: {{$animal->alimentation}}
                                        <br> Extintion: {{$animal->extintion}}
                                        <br> Colour: {{$animal->colour}}
                                        <br> Habitat: {{$animal->habitat}}
                                        <br> Life duration: {{$animal->life_duration}}
                                    </p>
                                    <a href="{{route('admin.animals.show', $animal)}}" class="btn btn-primary">Details</a>
                                    <a href="{{route('admin.animals.edit', $animal)}}" class="btn btn-success">Edit</a>
                                    <form action="{{'admin.animals.destroy'}}" method="POST" class="d-inline-block animal-destroyer">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
