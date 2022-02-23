@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="py-4">
                               <p class="text-success">{{ session('message') }}</p>
                            </div>
                        @endif
                       <form method="post" action="/category" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
 
                            <div class="form-group col-md-6">
                             <label for="slug">Slug</label>
                             <input id="slug" class="form-control" type="text" name="slug">
                         </div>
                           </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control" name="description" rows="6"></textarea>
                        </div>

                        <div class="row py-5">
                            <div class="form-check col-md-6">
                                <input id="popular"  type="checkbox" name="popular">
                                <label for="popular" class="form-check-label">Popular</label>
                            </div>
    
                            <div class="form-check col-md-6">
                                <input id="status"  type="checkbox" name="status">
                                <label for="status" class="form-check-label">Status</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <textarea id="meta_title" class="form-control" name="meta_title" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="meta_descrip">Meta Keywords</label>
                            <textarea id="meta_descrip" class="form-control" name="meta_descrip" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image (optional)</label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection