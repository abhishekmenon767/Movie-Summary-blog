<x-layout>
    <div class="row">
        <div class="row tm-row">
            <div class="col-12">
<h3>Edit Post </h3>
    <hr class="tm-hr-primary tm-mb-55">
<div class="form-container">
    <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Change the method to PATCH -->
        <div>
            <label for="title" id="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$post->title}}" required>
        </div>

        <div>
            <label for="slug"id="slug_id">Slug:</label>
            <textarea id="slug" name="slug" rows="3" required>{{$post->slug}}</textarea>
        </div>
        <div>
            <label for="thumbnail" id="thumbnail">Thumbnail:</label>
            <input type="file" id="thumbnail" name="thumbnail"> <!-- Remove the value attribute -->
        </div>
        <div>
            <label for="excerpt"id="excerpt">Excerpt:</label>
            <textarea id="excerpt" name="excerpt" rows="3" required>{{$post->excerpt}}</textarea>
        </div>

        <div>
            <label for="body" id="body">Body:</label>
            <textarea id="body" name="body" rows="10" required>{{$post->body}}</textarea>
        </div>
        <div>
            <label for="category" id="category">Category:</label>

            <select name="category_id" id="category_id">
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        @error('category')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>

</div>
</x-layout>

