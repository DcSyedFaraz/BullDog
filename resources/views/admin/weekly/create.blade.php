@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Add Our Weekly</h5>
    <div class="card-body">
      <h2>Create New Weekly</h2>
        <form action="{{ route('weekly.create',$id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">weekly ID</label>
                <input type="text" name="heading" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Heading</label>
                <input type="text" name="heading" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Date Of Birth</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">video</label>
                <input type="file" name="video" accept="video/mp4" class="form-control" required>
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
