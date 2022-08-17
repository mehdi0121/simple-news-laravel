@extends("layouts.master")

@section("head")
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section("main")


<div class="container">
    <div class="row">
      @include("layouts.error")
        <div class="col-lg-9">

<form class="mt-2 mb-3" action="{{ route("admin.blog.update",$post->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method("put")
    <div class="form-group">
      <label for="inputAddress">title</label>
      <input type="text" class="form-control" id="inputAddress" value="{{ $post->title }}" placeholder="title" name="title" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="ckeditor form-control " name="body" id="exampleFormControlTextarea1" >{!! $post->body !!}</textarea>
    </div>

    <div class="form-group m-3">
      <div class="form-input">
          <input type="file" class="form-upload-input" name="file">
      </div>
    </div>

    <div class="form-group col-md-4 mb-2">
        <label for="inputState">categories</label>
        <select id="inputState" class="js-example-basic-single form-control" name="categories[]" multiple>
            @foreach (\App\Models\PostCategory::all() as $item)
            <option    value="{{ $item->id }}" {{ in_array($item->id,$post->categories()->pluck("id")->toArray())?"selected":"" }}  >{{ $item->title }}</option>
            @endforeach

        </select>
    </div>

    <button type="submit" class="btn btn-success">update</button>
  </form>



    </div>
    </div>

</div>

@endsection
@section("scripts")
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="{{ asset("js/ckeditor.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '.ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );


        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
</script>

@endsection