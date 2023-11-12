<style>
    .underlay{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.6);
        position:absolute;
        inset: 0;
    }
    .dialog-box{
        position: absolute;
        top: 50%;
       left: 50%;
        transform: translate(-50%,-50%);
        padding: 1rem;
    }
</style>



@if(session()->has('message'))
<div class="underlay">
    <div class="dialog-box rounded-3 shadow bg-white text-dark text-center fw-bold fs-2 py-4">
        {{ session('message') }}
        <button class="btn btn-success w-100 my-3">OK</button>
    </div>
</div>
@endif

<script>
    let btn = document.querySelector('.btn');
    let box= document.querySelector('.dialog-box');
    let underlay= document.querySelector('.underlay');
    btn.addEventListener('click',()=>{
        box.style.display="none"
        underlay.style.display="none"
    })
</script>