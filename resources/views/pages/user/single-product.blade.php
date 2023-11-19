<x-layout>
    <x-nav/>
    <style>
        body{
            background: #F1F1EF;
        }
        </style>
        <form action="add-to-cart" method="POST">
    <div class="container bg-white">
    <div class="row mt-5 mx-auto">
        <div class="col-lg-5 m-5">
            <img width="100%" src="{{ asset('storage/' . $item->image) }}">
            <input type="hidden" name="image" value="{{ $item->image }}">
        </div>
        <div class="col-lg-6 mt-5">
            <h2 class="mt-5">{{ $item->name }}   </h2>
            <input type="hidden" name="name" value="{{ $item->name }}">
                <h2 class="text-secondary">${{$item->price  }}</h2>
                <input type="hidden" name="price" value="{{ $item->price }}">
                <p class="text-secondary" style="font-size: 20px; width:85%;">{{ $item->desc }}</p>
         
                <div class="d-flex gap-0">
                <div class="buttons me-5 mt-2">
                <div class="d-flex">
                    <a class="btn btn-danger border rounded-0">-</a>
                    <input class="form-control w-25 rounded-2 text-center" type="number" id="quantity" value="1" name="quantity">
                    <a class="btn btn-success rounded-0">+</a>
                </div>
            </div>
           
            </div>
            <div class="buttons d-flex gap-5 mt-3">
                <button class="btn btn-info rounded-0 border-0 px-5 text-white">BUY NOW</button>
                <button class="btn btn-danger rounded-0 border-0 px-5">ADD TO CART</button>
                
               
        
              
            </div>
        </div>
        
    </div>
</div>

</form>
</x-layout>