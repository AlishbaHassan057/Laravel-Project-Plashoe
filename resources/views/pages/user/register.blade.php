<x-layout>
    <x-nav/>
    <div class="container mt-5 mx-auto align-items-center shadow">
    <div class="row">
        <div class="col-lg-6">
            <form action="/register" method="POST">
                @csrf
                <h1 class="display-3 fw-bold text-center">Sign Up</h1>

                <label class="mt-2">Username</label>
                <input class="form-control" type="text" name="name" id="">
    
                <label>Email</label>
                <input class="form-control" type="email" name="email" id="">
                <label>Password</label>
                <input class="form-control" type="password" name="password" id="">
                <button class="btn btn-dark w-100 my-3">Sign Up</button>
            </form>
        </div>
        <div class="col-lg-6">
            <img width="100%" src="https://i.pinimg.com/originals/9b/ab/24/9bab24b933cb4c6a56061c48c2598e4b.gif">
        </div>
    </div>
</div>
</x-layout>