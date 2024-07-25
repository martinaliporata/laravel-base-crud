@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <div>
        Welcome in the homepage, please click on products to see them
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">species</th>
                            <th scope="col">wheight</th>
                            <th scope="col">alimentation</th>
                            <th scope="col">extintion</th>
                            <th scope="col">colour</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <th scope="row">
                                    {{$animal->id}}
                                </th>
                                <td>{{$animal->name}}</td>
                                <td><img src="{{$animal->image_url}}" class="w-100" alt=""></td>
                                <td>{{$animal->species}}</td>
                                <td>{{$animal->weight}}</td>
                                <td>{{$animal->alimentation}}</td>
                                <td>{{$animal->extintion}}</td>
                                <td>{{$animal->colour}}</td>
                                <td>{{$animal->habitat}}</td>
                                <td>{{$animal->life_duration}}</td>
                                <td>
                                    <a href="{{ route('admin.animals.show', $animal->id) }}" class="btn btn-primary">Animal's details</a>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
