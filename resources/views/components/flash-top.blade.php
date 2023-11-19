
<style>
    .cont{
        z-index: 2222222222222222222222222 !important;
        left: 45%;
        top:30%; 
  

    }
</style>



@if (session() ->has('success'))
<div class="cont position-fixed p-4 mt-5 bg-warning fw-bold border text-black text-center">
    {{ session('success') }}
</div>

    
@endif


<script>
    let cont = document.querySelector('.cont');
    setTimeout(()=> {
        cont.style.display='none'
    },2000);
</script>