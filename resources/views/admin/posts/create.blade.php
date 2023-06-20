
<x-layout>

        <div class="row">
            <div class="row tm-row">
            <div class="col-12">



<h3>Publish New Post</h3>
    <hr class="tm-hr-primary tm-mb-55">
    <div class="form-container">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf <!-- Add CSRF token for Laravel's form protection -->

            <div>
                <label for="title" id="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div>
                <label for="slug"id="slug_id">slug:</label>
                <textarea id="slug" name="slug" rows="3" required></textarea>
            </div>
            <div>
                <label for="thumbnail" id="thumbnail">Thumbnail:</label>
                <input type="file" id="thumbnail" name="thumbnail" required>
            </div>
            <div>
                <label for="excerpt"id="excerpt">Excerpt:</label>
                <textarea id="excerpt" name="excerpt" rows="3" required></textarea>
            </div>

            <div>
                <label for="body" id="body">Body:</label>
                <textarea id="body" name="body" rows="10" required></textarea>
            </div>
            <div>
                <label for="category" id="category">Category:</label>

                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
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


