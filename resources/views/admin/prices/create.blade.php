@section('title', 'Create New Post')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('customjsh')
<script src="{!! asset('js/tinymce/tinymce.min.js') !!}"></script>
@stop
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">
          Create Post
        </h5>
        <div class="card-body">
          <a href="/admin/posts" class="btn btn-info">All Prices</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Create New Price</h5>
        <div class="card-body">
          <form action="{{route('prices.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="title" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="slug">Price</label>
                <input type="text" class="form-control" name="price" id="slug" placeholder="Price">
              </div>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('customjs')
<script>
  tinymce.init({
         selector: "textarea",
         plugins: [
             "advlist autolink lists link image charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars code fullscreen",
             "insertdatetime media nonbreaking save table contextmenu directionality",
             "emoticons template paste textcolor colorpicker textpattern"
         ],
         file_browser_callback: function(field_name, url, type, win) {
            // trigger file upload form
            if (type == 'image') $('#formUpload input').click();
        }
       });
</script>
@stop
