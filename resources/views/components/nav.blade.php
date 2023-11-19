<style>
    nav{
      background: #EEEDE7; !important
    }
    .nav-itemm{
      position: relative;
    }
    .number{
      position: absolute;
      top:50;
     left:50;
      transform: translate(-50%,-50%);
      color: black; !important
  
    }
  </style>
  
  
  <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid mt-2 mb-2 mb-lg-0">
       
        <a class="navbar-brand text-black fw-bolder" href="/">PLASHOE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-secondary  active" aria-current="page" href="/men">MEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary " href="/add">WOMEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary " href="/">COLLECTION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary " href="#">LOOKBOOK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary " href="#">SALE</a>
            </li>
          </div>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2">
                <li class="nav-item">
                  
                  @guest
                    <a class="nav-link text-secondary " href="/register">SignUp</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary " href="login">Login</a>
                  </li>
                  @endguest
                  <li class="nav-item">
                    <a class="nav-link text-secondary " href="/add">Add Product</a>
                  </li>
                  
            <li class="nav-item">
              <a class="nav-link text-secondary " href="#">OUR STORY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary " href="#">CONTACT</a>
            </li>
            <li class="nav-itemm">
              <div class="number">0</div>
              <a class="nav-link text-black fs-5" href="#"> <i class="bi bi-bag-fill"></i></a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-black fs-4" href="#"> <i class="bi bi-person-fill"></i></a>
            </li>
            <li class="nav-item">
              @auth
              <form action="/logout" method="POST">
                @csrf
              <button class="btn btn-danger text-secondary text-white mt-1">Signout</button>
            </form>
              @endauth
            </li>
          </div>
       

      </div>
    </nav>