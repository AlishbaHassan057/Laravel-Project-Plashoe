<x-layout>
    <x-flash-top/>
    <x-nav/>
    <div class="container mt-5 mx-auto align-items-center shadow">
    <div class="row">
        <div class="col-lg-6">
            <form action="/login" method="POST">
                @csrf
                <h1 class="display-3 fw-bold text-center">Log in</h1>
                <label class="mt-2">Username</label>
                <input class="form-control" type="text" name="name" id="">
                <p class="text-danger fw-bolder">
                    @error('name')
                    {{ message }}
                        
                    @enderror
                </p>
                <label>Password</label>
                <input class="form-control" type="password" name="password" id="">
                <p class="text-danger fw-bolder">
                    @error('password')
                    {{ message }}
                        
                    @enderror
                </p>
                <button class="btn btn-success w-100 my-3">Sign in</button>
            </form>
        </div>
        <div class="col-lg-6">
            <img width="100%" src="https://designseer.com/wp-content/uploads/animated-login.gif">
        </div>
    </div>
</div>
</x-layout>