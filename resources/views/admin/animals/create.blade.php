@extends('layout.app')

@yield('page-title', 'homepage')

@section('main-content')
    <div>
        Welcome in the homepage, please click on products to see them
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('animals.store')}}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" placeholder="Animal name" id="name" name="name">                </form>
            </div>
        </div>
    </div>
@endsection

