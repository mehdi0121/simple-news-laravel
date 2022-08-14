@extends("layouts.master")

@section("head")
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section("main")


<div class="container">
    <div class="row">
        <div class="col-lg-9">

<form class="mt-2 mb-3">

    <div class="form-group">
      <label for="inputAddress">title</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="title" name="title" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="ckeditor form-control " id="exampleFormControlTextarea1" ></textarea>
      </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label " for="gridCheck">
          Check me out
        </label>
      </div>
    </div>

    <div class="form-group col-md-4 mb-2">
        <label for="inputState">categories</label>
        <select id="inputState" class="js-example-basic-single form-control" name="categories[]" multiple>
            @foreach (\App\Models\PostCategory::all() as $item)
            <option value="{{ $item->id }}" >{{ $item->title }}</option>

            @endforeach

        </select>
      </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
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