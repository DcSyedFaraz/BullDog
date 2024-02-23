@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Edit Our Dogs </h5>
    <div class="card-body">
      <h2>New Dogs Edit</h2>
        <form method='post' action="{{ route('dogs_profile.update', $dogs->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$dogs->title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" name="description"  value="{{$dogs->description}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Main Image</label>
                <input type="file" name="main_image"   value="{{$dogs->main_image}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Main Video</label>
                <input accept='video/mp4' type="file"  value="{{$dogs->main_video}}" name="main_video" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 1</label>
                <input type="file" name="other_image1" value="{{$dogs->other_image1}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 2</label>
                <input type="file" name="other_image2" value="{{$dogs->other_image2}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 3</label>
                <input type="file" name="other_image3" value="{{$dogs->other_image3}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 4</label>
                <input type="file" name="other_image4" value="{{$dogs->other_image4}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title"> Pedigree Image</label>
                <input type="file" name="pedigree_image" value="{{$dogs->pedigree_image}}" class="form-control" required>
        </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush
