@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/product" class="btn btn-primary my-3">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="py-4">
                                <p class="text-success">{{ session('message') }}</p>
                            </div>
                        @endif
                        <form method="post" action="/product" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name">
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="slug">Slug</label>
                                    <input id="slug" class="form-control" type="text" name="slug">
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="cate_id">Catagory</label>
                                    <select id="cate_id" class="form-control" name="cate_id"
                                        aria-placeholder="Select Category">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="small_description">Small_description</label>
                                <textarea id="small_description" class="form-control" name="small_description"
                                    rows="5"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="10"></textarea>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="original_price">Original_price</label>
                                    <input id="original_price" class="form-control" type="number" name="original_price">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="selling_price">Selling_price</label>
                                    <input id="selling_price" class="form-control" type="number" name="selling_price">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="qty">Quantity</label>
                                    <input id="qty" class="form-control" type="number" name="qty">
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="tax">Tax</label>
                                    <input id="tax" class="form-control"  type="number" name="tax">
                                </div>
                            </div>

                           <div class="row ms-5 py-4">
                            <div class="form-check col-md-6 mb-3">
                                <input id="status" class="form-check-input" type="checkbox" name="status">
                                <label for="status">Status</label>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="trending">Trending</label>
                                <input id="trending" type="checkbox" name="trending">
                            </div>
                           </div>

                           <div class="form-group">
                               <label for="meta_title">Meta Title</label>
                               <input id="meta_title" class="form-control" type="text" name="meta_title">
                           </div>

                           <div class="form-group">
                               <label for="meta_keywords">Meta Keywords</label>
                               <textarea id="meta_keywords" class="form-control" name="meta_keywords" rows="5"></textarea>
                           </div>

                           <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea id="meta_description" class="form-control" name="meta_description" rows="5"></textarea>
                        </div>

                            <div class="form-group mb-3">
                                <label for="image">Image</label>
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
