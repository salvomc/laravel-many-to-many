@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                    <h1>I nostri progetti</h1>
                    <div class="btn-container">
                        <a href="{{ Route('admin.posts.create') }}"><button class="btn btn-secondary">Crea
                                progetto</button></a>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titolo</th>
                                <th>Slug</th>
                                <th>Strumenti</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <a href="{{ Route('admin.posts.show', $item->id) }}"
                                            class="btn btn-sm btn-primary">Show</a>
                                        <a href="{{ Route('admin.posts.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ Route('admin.posts.destroy', $item) }}"
                                            class="d-inline-block project-delete-button"
                                            data-project-title="{{ $item->title }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger " data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Delete
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials.modal_delete');
@endsection
