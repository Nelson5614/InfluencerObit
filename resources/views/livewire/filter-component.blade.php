

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
    </form>
    <div class="w-full px-2 py-8 mt-6 bg-white rounded-lg shadow-md ">
        <div class="flex items-center gap-2">
            <span class="font-bold">Search Results</span>
            <span>Showing 1 of 1 - 10</span>
        </div>


        <table class="w-full border-t-4 border-gray-200 table-auto my-9">
            <thead class="">
                <tr class="border-b-2 border-gray-100">
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Name</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Social Plartform</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Language</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Followers</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Followers growth</th>
                    <th class="py-3 text-sm font-semibold tracking-wide text-left">Topics</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $influencer )

                    <tr class="mt-5 border-b-2 border-gray-200">
                        <td class="py-3 text-sm text-gray-700 ">
                            <div class="flex items-center gap-3">
                                <img class="w-12 h-12 rounded-full" src="{{ asset('assets/images/creator.jpg') }}" alt="" srcset="">
                                <div>
                                    <span>{{ $influencer->name }}</span> <br>
                                    <span>{{ $influencer->location  }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 text-sm text-gray-700 ">
                            <div class="flex items-center gap-3">

                                <?xml version="1.0" ?><svg class="w-10 h-10" id="Apple" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#00f6ef;}.cls-2{fill:#fff;}.cls-3{fill:#ff004f;}</style></defs><rect height="40" rx="71.15" width="40" x="42.01" y="42.95"/><path class="cls-1" d="M389.39,221.92V164.85c-74.6-3.15-77-70.94-77-77.31v-.48H254.73V309.33h0a45.66,45.66,0,1,1-32.36-43.71V206.76a104.57,104.57,0,0,0-13.32-.85A103.42,103.42,0,1,0,312.47,309.33c0-1.45,0-2.89-.1-4.32V195.56C338.92,219.85,389.39,221.92,389.39,221.92Z"/><path class="cls-2" d="M406.37,236V178.9c-74.61-3.15-77-70.94-77-77.31v-.48H271.71V323.38h0a45.66,45.66,0,1,1-32.36-43.7V220.81A104.57,104.57,0,0,0,226,220,103.42,103.42,0,1,0,329.45,323.38c0-1.45,0-2.89-.1-4.32V209.61C355.9,233.9,406.37,236,406.37,236Z"/><path class="cls-3" d="M313.82,101.11c2.78,15.14,10.9,38.81,34.57,52.66-18.09-21.07-19-48.26-19-52.18v-.48Z"/><path class="cls-3" d="M406.37,236V178.9a106.46,106.46,0,0,1-17-2v44.95s-50.47-2.07-77-26.36V304.91c.06,1.43.1,2.87.1,4.32a103.43,103.43,0,0,1-160.72,86.1,103.41,103.41,0,0,0,177.7-71.95c0-1.45,0-2.89-.1-4.32V209.61C355.9,233.9,406.37,236,406.37,236Z"/><path class="cls-3" d="M222.37,265.53a45.69,45.69,0,0,0-33.19,84.85,45.69,45.69,0,0,1,50.17-70.7V220.81A104.57,104.57,0,0,0,226,220c-1.23,0-2.44,0-3.66.07Z"/></svg>

                                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg  class="w-6 h-6" enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>

                            </div>
                        </td>
                        <td class="py-3 text-sm text-gray-700 ">
                            <span>{{ $influencer->language }}</span> <br>

                        </td>
                        <td>{{ $influencer->followers }}</td>
                        <td class="py-3 text-sm text-gray-700 ">
                            <div class="flex items-center gap-3 text-green-700 p-1.5 bg-green-200 bg-opacity-50 w-24 rounded-lg tracking-wide">

                                <ion-icon class="text-green-700" name="arrow-up-outline"></ion-icon>
                                <span class="">3.24%</span>
                            </div>
                        </td>
                        <td class="py-3 text-sm text-gray-700 ">
                            <div class="flex items-center gap-2">
                                <span class="px-2 py-1 tracking-wider text-teal-600 bg-teal-200 bg-opacity-50 rounded-md">Food</span>
                                <span class="px-2 py-1 tracking-wider text-teal-600 bg-teal-200 bg-opacity-50 rounded-md">Clothing</span>
                                <span class="px-2 py-1 tracking-wider text-teal-600 bg-teal-200 bg-opacity-50 rounded-md">Culture</span>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

{{-- <div>
    <div class="flex items-center gap-4">
        <form wire:submit.prevent="search">
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

            <select wire:model="platform" class="w-32 px-3 py-2 mx-2 my-6 border border-gray-300 rounded-md">
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

            <div class="flex items-center gap-3 py-4 ml-2">
                <button type="submit" class="px-4 py-2 text-white rounded-md bg-primary">Search</button>
            </div>
        </form>
    </div>

    <div class="flex items-center justify-between py-2 mx-6 border-t border-gray-200">
        <div>
            <span class="text-sm font-bold text-gray-800">Filters:</span>
            <span>Location: {{ $location }} Language: {{ $language }} Platform: {{ $platform }} Followers: {{ $followers }}</span>
        </div>
    </div>

    <div class="mt-4">
        @if($filteredInfluencers)
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50">Profile Picture</th>
                        <th class="px-6 py-3 bg-gray-50">Name</th>
                        <th class="px-6 py-3 bg-gray-50">Location</th>
                        <th class="px-6 py-3 bg-gray-50">Followers</th>
                        <th class="px-6 py-3 bg-gray-50">Language</th>
                        <th class="px-6 py-3 bg-gray-50">Platform</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($filteredInfluencers as $influencer)
                        <tr>
                            <td class="px-6 py-4">
                                <img src="{{ $influencer['profile_picture'] }}" alt="{{ $influencer['name'] }}" class="w-10 h-10 rounded-full">
                            </td>
                            <td class="px-6 py-4">{{ $influencer['name'] }}</td>
                            <td class="px-6 py-4">{{ $influencer['location'] }}</td>
                            <td class="px-6 py-4">{{ $influencer['followers'] }}</td>
                            <td class="px-6 py-4">{{ $influencer['language'] }}</td>
                            <td class="px-6 py-4">{{ $influencer['platform'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-600">No influencers found for the selected filters.</p>
        @endif
    </div>
</div> --}}

