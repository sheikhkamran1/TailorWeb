@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/setting" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="py-4">
                               <p class="text-success">{{ session('message') }}</p>
                            </div>
                        @endif
                       <form method="post" action="/setting/{{$setting->id}}" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="form-group">
                               <label for="name">Name</label>
                               <input id="name" class="form-control" type="text" name="name" value="{{$setting->name}}">
                           </div>

                           <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{$setting->address}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{$setting->email}}">
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input id="contact" class="form-control" type="text" name="contact" value="{{$setting->contact}}">
                        </div>

                        <div class="form-group">
                            <label for="regno">Regno</label>
                            <input id="regno" class="form-control" type="text" name="regno" value="{{$setting->regno}}">
                        </div>

                        <div class="form-group">
                            <label for="bio">Your Bio</label>
                            <textarea id="logo" class="form-control" name="bio" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="logo">Upload Company Logo (optional)</label>
                            <input id="logo" class="form-control-file" type="file" name="logo" value="{{$setting->logo}}">
                        </div>

                        <div class="py-4">
                            <img src="{{ $setting->logo }}" alt="" width="120">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection