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
                            <button class="btn btn-outline-danger btn-sm" onclick="handleDelete({{ $category->id }})">
                                Ištrinti
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form action="" method="post" id="deleteCategoryForm">
                @csrf
                @method('delete')
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Ištrinti kategoriją</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-black-50">
                                    Ar tikrai norite ištrinti šią kategoriją ?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ne, Grįžti</button>
                                <button type="submit" class="btn btn-danger">Taip, Ištrinti</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteCategoryForm');
            form.action = '/categories/' + id;
            $('#deleteModal').modal('show')
        }
    </script>

@endsection
