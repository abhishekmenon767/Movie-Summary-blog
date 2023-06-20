<x-layout>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                            <div class="col-12">
                        <div class="col-sm-8"><h2>All <b>Posts</b></h2></div>
                        <hr class="tm-hr-primary tm-mb-55">

                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="/posts/{{$post->slug}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="/admin/posts/{{$post->id}}/edit/" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <form action="/admin/posts/{{$post->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
</form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>
    </div>
</x-layout>
