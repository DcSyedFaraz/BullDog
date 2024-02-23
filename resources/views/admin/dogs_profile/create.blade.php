
@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Add Our Dogs Profile</h5>
    <div class="card-body">
      <h2>Create New Dogs Profile</h2>
        <form action="{{ route('dogs_profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Main Image</label>
                <input type="file" name="main_image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Main Video</label>
                <input accept='video/mp4' type="file" name="main_video" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 1</label>
                <input type="file" name="other_image1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 2</label>
                <input type="file" name="other_image2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 3</label>
                <input type="file" name="other_image3" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Other Image 4</label>
                <input type="file" name="other_image4" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title"> Pedigree Image</label>
                <input type="file" name="pedigree_image" class="form-control" required>
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

