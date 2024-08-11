@extends('layouts.influencerdashboard')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="min-h-screen container mx-auto py-8 px-20 w-full">
        <div class="min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Edit Profile</h2>
            </div>

            <div class="mt-10 sm:mx-auto w-full">
                <form class="space-y-6" action="{{ route('profiles.update', $influencer->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="charge_per_hour" class="block text-sm font-medium leading-6 text-gray-900">Your Names</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" value="{{ old('name', $influencer->name) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="languages">Location</label>
                            <div class="mt-2">
                                <input id="location" name="location" type="text" value="{{ old('location', $influencer->location) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="charge_per_hour" class="block text-sm font-medium leading-6 text-gray-900">Charge Per Hour</label>
                            <div class="mt-2">
                                <input id="chargeperhour" name="chargeperhour" type="text" value="{{ old('chargeperhour', $influencer->chargeperhour) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="languages">Languages</label>
                            <textarea name="languages" id="languages" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus">{{ implode(',', $influencer->languages->pluck('name')->toArray()) }}</textarea>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                            <div class="mt-2">
                                <input id="website" name="website" type="text" value="{{ old('website', $influencer->website) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                            <div class="mt-2">
                                <input id="phone" name="phone" type="text" value="{{ old('phone', $influencer->phone) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="mt-2">
                            <label for="topics">Topics</label>
                            <textarea name="topics" id="topics" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus">{{ implode(',', $influencer->topics->pluck('name')->toArray()) }}</textarea>
                        </div>

                        <div class="mt-2">
                            <label for="platforms">Platforms</label>
                            <textarea name="platforms" id="platforms" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus">{{ implode(',', $influencer->platforms->pluck('name')->toArray()) }}</textarea>
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About You</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('about', $influencer->about) }}</textarea>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
