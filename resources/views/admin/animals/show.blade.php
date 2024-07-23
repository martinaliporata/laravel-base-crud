@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <div>
        Welcome in the homepage, please click on products to see them
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <article class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{$animal->id}}
                            </p>
                            <p class="card-text">
                                {{$animal->name;}}
                            </p>
                            <p class="card-text">
                                {{$animal->species;}}
                            </p>
                            <p class="card-text">
                                {{$animal->weight;}}
                            </p>
                            <p class="card-text">
                                {{$animal->alimentation;}}
                            <p class="card-text">
                                {{$animal->extintion;}}
                            </p>
                            <p class="card-text">
                                {{$animal->colour;}}
                            </p>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
@endsection
