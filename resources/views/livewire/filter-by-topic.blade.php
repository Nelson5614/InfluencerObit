<div>
    <form >
        <ion-icon class="absolute px-2 mt-3 ml-2 font-bold border-r stroke-gray-500 peer-focus:border-secondary" name="search-outline"></ion-icon>
        <input wire:model.debounce.300ms="query" class="h-10 pl-12 border-4 w-96 rounded-xl focus:border-secondary " type="search" placeholder="Search influencer by topics...">
    </form>

    @if(!empty($query) && strlen($query) > 2)
        <div class="mt-44">
            @if($influencers->isEmpty())
                <!-- Display message if no results are found -->
                <p>No results found</p>
            @else
                <!-- Display a list of found influencers -->
                <ul>
                    @foreach($influencers as $influencer)
                        <li><a href="#">{{ $influencer->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif
</div>
