<x-layout>
    <x-flash/>
    <div class="d-flex">
    <x-sidebar/>
    <div class="form w-75 mx-auto mb-5">
        <form action="/insert-category" method="POST" class="w-50 mx-auto rounded-2 px-4 mt-5 shadow"
        style="border:1px solid #868B8E" enctype="multipart/form-data">
        @csrf
        <h1 class="display-4 fw-bold text-center mt-3">Add New Category</h1>
            <label>Name</label>
            <input class="form-control" type="text" name="name" id="">
            @error('name')
            <p class="text-danger fw-bolder">
                {{ $message }}
            </p> 
            @enderror

            <label>Image</label>
            <input class="form-control mb-4" type="file" name="image" id="">
            @error('image')
            <p class="text-danger fw-bolder">
                {{ $message }}
            </p>

                
            @enderror
            <button class="btn px-5 w-100 fw-bold mb-4" style="background-color: #868B8E;">
                Submit
            </button>
        </form>
    </div>
</div>
</x-layout>