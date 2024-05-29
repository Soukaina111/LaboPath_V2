<x-layout> 
<style>
</style>
<x-flash-message />
@include('partials._search')
 <div id="main"> 
        <x-patients-card :patients="$patients" /> 
 </div>
<div class="pagination" style="padding-right:20%;padding-left:30%;padding-top:23%; position :relative;" >
  {{ $patients->links('pagination::bootstrap-5') }}
</div>
</x-layout>



