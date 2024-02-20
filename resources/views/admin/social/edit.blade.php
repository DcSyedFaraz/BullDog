@extends('admin.layouts.app')

@section('content')

<div class="card">
    <h5 class="card-header">Edit Our Social</h5>
    <div class="card-body">
      <h2>Edit New Social</h2>
        <form method='post' action="{{ route('social.update', $social->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Link</label>
                <input type="text" value="{{$social->social_link}}" name="social_link" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image"  value="{{$social->image}}" class="form-control-file">
             
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
