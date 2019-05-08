@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('categories.create') }}" class="btn btn-info">Pridėti kategoriją</a>
    </div>
    {{--    <div class="card border-success mb-3" style="max-width: 28rem;">--}}
    {{--        <div class="card-header bg-transparent border-success">Categories</div>--}}
    {{--        <div class="card-body text-warning">--}}
    {{--            <table class="table">--}}
    {{--                <thead>--}}
    {{--                <th>Name</th>--}}
    {{--                </thead>--}}

    {{--                <tbody>--}}
    {{--                @foreach($categories as $category)--}}
    {{--                    <tr>--}}
    {{--                        <td>--}}
    {{--                            {{ $category->name }}--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                @endforeach--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="card text-dark border-dark mb-3">
        <div class="card-header bg-info text-white">Kategorijos</div>
        <div class="card-body">
            <h5 class="card-title">Pavadinimas</h5>
            <th></th>
            <table class="table table-bordered table-dark table-hover">
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}"
                               class="btn btn-outline-success btn-sm">Redaguoti</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
