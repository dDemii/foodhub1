@extends('layouts.app')
@section('content')
<div class="row">
@foreach($menus as $menu)
    <div class="col-6 col-sm-4 col-md-3 card-menu mx-auto p-0">
       
    <div class="card menu-item2">
    <img src="{{ asset('/assets/'.$menu->assets)}}" class="card-assets-top" alt="...">
            <div class="card-header">
                <h3 class="menu-item3">{{ $menu->name }}</h3>
            </div> 
            <div class="card-body">
                <p>{{ $menu->restaurant }}</p>
                <p>{{ $menu->price }}</p>
                <a href="{{ $menu->video_url }}" target="_blank">Watch video</a>
                <a href="#" class="btn-dark-green text-decoration-none">Buy now</a>
            </div>
        </div>
    </div>

 {{--@if($admin)--}}
    <form method="POST" action="{{ route('menu.destroy', $menu->id) }}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $menu->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
{{--@endif--}}

@endforeach

{{--@if($admin)--}}
<!-- Add the form here -->
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3>Add a new menu</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="restaurant">Restaurant:</label>
                        <input type="text" class="form-control" id="restaurant" name="restaurant" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" step=".01" required>
                    </div>
                    <div class="form-group">
                        <label for="video_url">Video URL:</label>
                        <input type="text" class="form-control" id="video_url" name="video_url" required>
                    </div>

                    <div class="form-group">
                    <label for="assets">Upload Menu Image</label>
                    <div class="row">




                        <div class="col-sm-6 ">
                            <assets id="preview-image-before-upload" src="{{asset('/assets/Upload Image.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('assets') is-invalid @enderror " type="file" name="assets" value="{{ old('assets') }}" id="assets">
                            @error('assets')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button type="submit" class="btn btn-primary">Add menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   {{-- @endif--}}
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#assets').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });


    });
</script>
@endsection
