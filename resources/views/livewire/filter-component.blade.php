<div>
    <form wire:submit.prevent="search">
        <div class="md:flex-row flex-col items-center md:gap-4">

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

            <select wire:model="followers" class="w-32 px-3 mb-6 md:py-2 mx-2 md:my-6  border border-gray-300 rounded-md">
                <option value="">Followers</option>
                <option value="10 000 - 50 000">10 000 - 50 000</option>
                <option value="50 000 - 200 000">50 000 - 200 000</option>
                <option value="200 000 - 500 000">200 000 - 500 000</option>
                <option value="500 000 - 1 000 000">500 000 - 1 000 000</option>
                <option value="1 000 000 - Above">1 000 000 - Above</option>
            </select>

        </div>

        <div class="md:flex-row flex-col items-center justify-between py-2 mx-6 border-t border-gray-200">
            <div>
                <span class="text-sm font-bold text-gray-800">Filters:</span>
                <div class="md:space-x-8 space-x-1">
                    <span>Location: <span class="text-primary">{{ $location }}</span></span>
                    <span>Language: <span class="text-primary">{{ $language }}</span></span>
                    <span>Platform: <span class="text-primary">{{ $platforms }}</span></span>
                    <span>Followers: <span class="text-primary">{{ $followers }}</span></span>
                </div>
            </div>
            <div class="md:flex-row flex-col items-center justify-end gap-3 mt-4 py-4">
                <button type="submit" class="px-4 py-2 text-white rounded-md bg-primary">Search</button>
            </div>
        </div>
    </form>
    <div class="w-full px-2 py-8 mt-6 bg-white">
        <div class="overflow-auto rounded-lg shadow">
            @if ($searchPerformed)
                @if ($results->isNotEmpty())
                    <table class="min-w-full bg-white">
                        <thead class="text-white bg-gray-800">
                            <tr class="border-b-2 border-gray-100">
                                <th class="w-64 px-4 py-3 text-sm font-semibold tracking-wide text-left">Name</th>
                                <th class="w-44 px-4 py-3 text-sm font-semibold tracking-wide text-left">Platform</th>
                                <th class="w-44 px-4 py-3 text-sm font-semibold tracking-wide text-left">Language</th>
                                <th class="w-44 px-4 py-3 text-sm font-semibold tracking-wide text-left">Followers</th>
                                <th class="w-44 px-4 py-3 text-sm font-semibold tracking-wide text-left">Topics</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($results as $influencer)
                                <tr class="clickable-row {{ $loop->index % 2 == 1 ? 'bg-gray-300' : '' }}" data-href="{{ route('register') }}">
                                    <td class="w-1/3 px-4 py-3 text-left whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                            <img class="w-12 h-12 rounded-full" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                                            <div>
                                                <a class="cursor-pointer hover:text-secondary" href="{{ route('influencerprofile.view', $influencer->id) }}">
                                                    <span class="w-64 font-bold">{{ $influencer->name }}</span><br>
                                                    <span>{{ $influencer->location }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-1/3 px-4 py-3 text-left whitespace-nowrap">{{ $influencer->platforms }}</td>
                                    <td class="px-4 py-3 text-left whitespace-nowrap">{{ $influencer->language }}</td>
                                    <td class="px-4 py-3 text-left whitespace-nowrap">{{ $influencer->followers }}</td>
                                    <td class="w-1/3 px-4 py-3 text-left whitespace-nowrap">{{ $influencer->topics }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $results->links() }}
                @else
                    <p class="text-center text-lg font-bold">No influencers match your search yet</p>
                @endif
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        const rows = document.querySelectorAll('.clickable-row');
        rows.forEach(row => {
            row.addEventListener('click', function () {
                window.location.href = this.getAttribute('data-href');
            });
        });
    });
</script>
