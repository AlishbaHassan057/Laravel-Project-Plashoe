<x-layout>
    <x-nav/>
    <style>
        body{
            background: #F1F1EF;
        }
    </style>
    <div class="container bg-white">
    <div class="row mt-5 mx-auto">
        <div class="col-lg-5 m-5">
            <img width="100%" src="{{ asset('storage/' . $item->image) }}">
        </div>
        <div class="col-lg-6 mt-5">
            <h2 class="mt-5">{{ $item->name }}
                <h2 class="text-secondary">${{$item->price  }}</h2>
                <p class="text-secondary" style="font-size: 20px; width:85%;">{{ $item->desc }}</p>
            </h2>
            <form action="">
                <div class="d-flex gap-0">
                <div class="buttons me-5">
                <div class="d-flex">
                    <button class="btn btn-white border rounded-0">-</button>
                    <input class="form-control w-25 rounded-0 text-center" type="number" id="quantity" value="1" name="">
                    <button class="btn btn-white border rounded-0">+</button>
                </div>
            </div>
            <div class="add">
                <button class="text-white rounder-0 border-0 py-2 px-5" style="background: #6e7051;">ADD TO CART</button>
            </div>
            </div>
            </form>
        </div>

    </div>
</div>
</x-layout>