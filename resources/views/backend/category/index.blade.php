@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <h3 class=" mx-4 my-1">category</h3>
                            <a href="/category/create" class="btn btn-primary m-1">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>

                               @foreach ($category as $item)
                               <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src=" {{ asset($item->image) }} " width="32" alt=""></td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->slug }} </td>
                                <td> {!! Str::limit($item->description,50)!!} </td>
                                <td>
                                    <a href="category/{{ $item->id }}/edit" class="badge bg-primary">Edit</a>
                                   <form action="" method="post">
                                       @csrf
                                       @method('DELETE')
                                    <a href="category/{{ $item->id }}" class="badge bg-danger">Delete</a>
                                   </form>
                                </td>
                            </tr>
                               @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
