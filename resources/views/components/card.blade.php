<a href="#" class="flex" id="card">
    <img src="{{$thumbnail}}" alt="{{$title}}" srcset="">
    <div class="">
        <h2 class="ml-2 text-sm truncate">{{$title}}</h2>
    </div>
    <div class="" id="overlay">
        <span class="bg-orange-600 mt-1 ml-2 rounded px-1">Episode: {{$episode}}</span>
        <p class="bg-orange-600 mt-2 ml-2 rounded px-1" id="type">{{$type}}</p>
    </div>
</a>
<style>
    #card {
        width: 160px;
        flex-direction: column;
        height: 300px;
        box-shadow: 0 0 0 0.5 black;
        overflow: hidden;
        border: 1px solid black;
    }
    #card img {
        object-fit: cover;
        width: 100%;
        height: 200px;
    }
    #overlay {
        width: auto;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
    }
    #overlay span {
        width: fit-content
    }
    #type {
        width: fit-content;
        opacity: 0.6;
    }
</style>
