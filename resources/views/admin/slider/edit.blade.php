@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Edit Our slider</h5>
    <div class="card-body">
      <h2>Edit New slider</h2>
        <form method='post' action="{{ route('bulldog_stronger_slider.update', $slider->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title"value="{{$slider->title}}"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" value="{{$slider->heading}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description"value="{{$slider->description}}"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image"  value="{{$slider->image}}" class="form-control-file">
             
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
