@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <div>
        Welcome in the homepage, please click on products to see them
    </div>
    <div class="container">
        <div class="row">
            @foreach($animals as $animal)
                <article>
                    <h1>
                        {{$animal->name}}
                    </h1>
                    <p>
                        {{$animal->species}}
                    </p>
                    <p>
                        {{$animal->weight}}
                    </p>
                    <p>
                        {{$animal->alimentation}}
                    </p>
                    <p>
                        {{$animal->extintion}}
                    </p>
                    <p>
                        {{$animal->colour}}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
@endsection
