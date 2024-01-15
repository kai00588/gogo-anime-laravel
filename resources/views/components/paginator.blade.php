<div class="flex justify-center mt-1 gap-x-1" id="paginator">
    @if ($page <= 1)
        <a href="#" class="bg-orange-400 rounded px-2 cursor-not-allowed">...</a>
    @else
        <a href="?page={{$page-1}}" class="bg-orange-400 rounded px-2 cursor-pointer">{{$page - 1}}</a>
    @endif

    <a href="#" class="bg-orange-400 rounded px-2 cursor-pointer text-white">{{$page}}</a>
    <a href="?page={{$page+1}}" class="bg-orange-400 rounded px-2 cursor-pointer">{{$page + 1}}</a>
</div>
<style>
</style>
