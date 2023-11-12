<x-layout>
    <div class="d-flex">
        <x-sidebar/>
    
            <div class="w-50">
                {!! $chart->container() !!}
                {!! $chart->script()  !!}
            </div>
        
  
    </div>
</x-layout>