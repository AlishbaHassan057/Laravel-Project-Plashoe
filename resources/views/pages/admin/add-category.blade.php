<x-layout>
    <div class="d-flex">
        <x-flash/>
        <x-sidebar/>
        <div class="form w-75 mx-auto">
        <form action="/insert-category"  method="POST" class="w-50 mx-auto rounded-2 px-4 mt-5 shadow" style="border:1px solid #868B8E" enctype="multipart/form-data">
            @csrf
            <h1 class="display-4 fw-bold text-center mt-3">Add New Category</h1>
            <label for="" class="fs-4">Name</label>
                <input class="form-control" type="text" name="name" id="">
                @error('name')
                <p class="text-danger fs-5 fw-bolder">
                    {{ $message }}
                </p>
                    
                @enderror
           
                
                <label for="" class="fs-4">Image </label>
                <input class="form-control" type="file" name="image" id="">
                @error('image')
                <p class="text-danger fs-5 fw-bolder">
                    {{ $message }}
                </p>
                    
                @enderror
                    <button class="btn px-5 mt-3 w-100 fw-bold mb-4"  style="background-color: #868B8E;">
                        Submit
                    </button>
              
               
        </form>
    </div>
    </div>
    </x-layout>