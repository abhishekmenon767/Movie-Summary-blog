<x-layout>
    <div class="row">
        <div class="row tm-row">
            <div class="col-12">

    <h3>Publish New Category</h3>
    <hr class="tm-hr-primary tm-mb-55">
    <div class="form-container">
        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="title" id="title">Category:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="title" id="title">Slug:</label>
                <input type="text" id="slug" name="slug" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>


</x-layout>

