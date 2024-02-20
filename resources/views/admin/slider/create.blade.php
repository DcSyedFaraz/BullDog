@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Add Our Slider</h5>
    <div class="card-body">
      <h2>Create New Slider</h2>
        <form action="{{ route('bulldog_stronger_slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Heading</label>
                <input type="text" name="heading" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" name="image" class="form-control" required>
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
