<div>
    <form wire:submit.prevent="search">
        <div class="flex items-center gap-4">

                <select wire:model="location" class="w-32 px-3 py-2 mx-2 my-6 border border-gray-300 rounded-md">
                    <option value="">Location</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Botswana">Botswana</option>
                    <option value="South Africa">South Africa</option>
                </select>

                <select wire:model="language" class="w-32 px-3 py-2 mx-2 my-6 border border-gray-300 rounded-md">
                    <option value="">Language</option>
                    <option value="Sesotho">Sesotho</option>
                    <option value="Setswana">Setswana</option>
                    <option value="English">English</option>
                </select>

                <select wire:model="platforms" class="w-32 px-3 py-2 mx-2 my-6 border border-gray-300 rounded-md">
                    <option value="">Platform</option>
                    <option value="TikTok">TikTok</option>
                    <option value="Instagram">Instagram</option>
                </select>

                <select wire:model="followers" class="w-32 px-3 py-2 mx-2 my-6 border border-gray-300 rounded-md">
                    <option value="">Followers</option>
                    <option value="10 000 - 50 000">10 000 - 50 000</option>
                    <option value="50 000 - 200 000">50 000 - 200 000</option>
                    <option value="200 000 - 500 000">200 000 - 500 000</option>
                    <option value="500 000 - 1 000 000">500 000 - 1 000 000</option>
                    <option value="1 000 000 - Above">1 000 000 - Above</option>
                </select>

        </div>

        <div class="flex items-center justify-between py-2 mx-6 border-t border-gray-200">
            <div>
                <span class="text-sm font-bold text-gray-800">Filters:</span>
                <div class="space-x-8">
                    <span >Location: <span class="text-primary">{{ $location }}</span> </span>
                    <span>Language: <span class="text-primary">{{ $language }}</span></span>
                    <span>Platform: <span class="text-primary">{{ $platforms }}</span></span>
                     <span> Followers: <span class="text-primary">{{ $followers }}</span></span>
                </div>
            </div>
            <div class="flex items-center gap-3 py-4 ml-2">
                <button class="text-primary">Save Filter</button>
                <button type="submit" class="px-4 py-2 text-white rounded-md bg-primary">Search</button>
            </div>
        </div>


        <!-- New topic search input -->
        <div class="relative">
            <ion-icon class="absolute px-2 mt-3 ml-2 font-bold border-r stroke-gray-500 peer-focus:border-secondary" name="search-outline"></ion-icon>
            <input wire:model="topic" class="h-10 pl-12 border-4 w-96 rounded-xl focus:border-secondary" type="search" placeholder="Search influencer by topics...">
        </div>
    </form>

    <!-- Search results -->
    <div class="w-full px-2 py-8 mt-6 bg-white rounded-lg shadow-md ">
        <div class="flex items-center gap-2">
            <span class="font-bold">Search Results</span>

        </div>
        @if(collect($results)->isNotEmpty())
        <table class="w-full border-t-4 border-gray-200 table-auto my-9">
            <thead>
                <tr class="border-b-2 border-gray-100">
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Name</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Social Platform</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Language</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Followers</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Followers growth</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Topics</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $influencer)
                <tr class="mt-5 border-b-2 border-gray-200">
                    <td class="py-3 text-sm text-gray-700 ">
                        <div class="flex items-center gap-3">
                            <img class="w-12 h-12 rounded-full" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                            <div>
                                <span>{{ $influencer->name }}</span> <br>
                                <span>{{ $influencer->location }}</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 text-sm text-gray-700 ">
                        <div class="flex items-center gap-3">
                            <!-- SVG for social platforms -->
                        </div>
                    </td>
                    <td class="py-3 text-sm text-gray-700 ">
                        <span>{{ $influencer->language }}</span>
                    </td>
                    <td>{{ $influencer->followers }}</td>
                    <td class="py-3 text-sm text-gray-700 ">
                        <div class="flex items-center gap-3 text-green-700 p-1.5 bg-green-200 bg-opacity-50 w-24 rounded-lg tracking-wide">
                            <ion-icon class="text-green-700" name="arrow-up-outline"></ion-icon>
                            <span>3.24%</span>
                        </div>
                    </td>
                    <td class="py-3 text-sm text-gray-700 ">
                        <div class="flex items-center gap-2">
                            @foreach(explode(',', $influencer->topics) as $topic)
                            <span class="px-2 py-1 tracking-wider text-teal-600 bg-teal-200 bg-opacity-50 rounded-md">{{ $topic }}</span>
                            @endforeach
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h2 class="text-center text-gray-900 text-md">No results found</h2>
        @endif
    </div>
</div>
