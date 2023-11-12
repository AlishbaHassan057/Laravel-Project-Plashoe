<x-layout>
<x-nav/>
<x-main/>
<div class="container">
    <div class="row">
    <h3 class="mb-4">Our Best Seller</h3>
    @foreach ($products as $item )
    <div class="col-lg-4 text-center">
        <div class="card p-3">
        <img src="{{ asset('storage/' . $item->image) }}">
        <h4 class="text-center">{{ $item->name }}</h4>
        <h5 class="text-secondary text-center">${{ $item->price }}</h5>
        <a href="/single" class="btn btn-info text-dark fw-bold text-center">View Details</a>
    </div>
</div>
    @endforeach
</div>
{{ $products->links("pagination::bootstrap-5") }}
</div>

<div class="container">
    <div class="row">
    @foreach ($categories as $item )
    <div class="col-lg-4 text-center">
        <div class="card p-3">
        <img src="{{ asset('storage/' . $item->image) }}">
        <h4 class="text-center">{{ $item->name }}</h4>
    </div>
</div>
    @endforeach
</div>
{{ $categories->links("pagination::bootstrap-5") }}
</div>



</x-layout>