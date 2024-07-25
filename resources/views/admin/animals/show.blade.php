@extends('layout.app')

@yield('page-title', 'Animal\'s details')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <article class="col-12 p-3 text-center">
            <div class="card" style="w-100">
                <img class="card-img-top" src="{{$animal->image_url}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        Name:{{$animal->name}}
                        <p class="card-text">
                            <br> Species: {{$animal->species}}
                        </p>
                    </h5>
                </div>
                <ul>
                    <li>
                        Weight: {{$animal->weight}}
                    </li>
                    <li>
                        Alimentation: {{$animal->alimentation}}
                    </li>
                    <li>
                        Extintion: {{$animal->extintion}}
                    </li>
                    <li>
                        Colour: {{$animal->colour}}
                    </li>
                    <li>
                        Habitat: {{$animal->habitat}}
                    </li>
                    <li>
                        Life duration: {{$animal->life_duration}}
                    </li>
                </ul>
                <div class="card-footer">
                    <a href="{{route('admin.animals.index')}}" class="btn btn-primary">Back to see all animals</a>
                    <a href="{{route('admin.animals.edit', $animal)}}" class="btn btn-success">Edit animal</a>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection
