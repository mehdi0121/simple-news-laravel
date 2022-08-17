@extends("layouts.master")


@section("main")
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">created_at
                    </th>
                    <th scope="col">op <a class=" btn btn-success" href="{{ route("admin.blog.create") }}">پست جدید</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a href="{{ route("admin.blog.edit",$post->id) }}" class="btn btn-danger">edit</a>
                            <a href="" class="btn btn-warning">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>


        </div>
    </div>
</div>


@endsection

