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
                <form class="space-y-6" action="{{ route('profiles.update', $influencer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" name="profilePicture" id="profilePicture" class="form-control">
                        @error('profilePicture')
                            <div class="text-red-600 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="name">Your names</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $influencer->name) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('name')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" value="{{ old('website', $influencer->website) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('website')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $influencer->phone) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('phone')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="location" id="location" value="{{ old('location', $influencer->location) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="">Select Location</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Botswana">Botswana</option>
                                <option value="South Africa">South Africa</option>
                            </select>
                            @error('location')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="followers">Instagram Followers</label>
                            <input type="number" name="followers" id="followers" value="{{ old('followers', $influencer->followers) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('followers')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="chargeperhour">Charge Per Hour</label>
                            <input type="number" name="chargeperhour" id="chargeperhour" value="{{ old('chargeperhour', $influencer->chargeperhour) }}" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('chargeperhour')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <select name="languages[]" id="languages" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" multiple>
                                <option value="Sesotho">Sesotho</option>
                                <option value="English">English</option>
                                <option value="Setswana">Setswana</option>
                            </select>
                            @error('languages')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="topics">Topics</label>
                            <input type="text" name="topics[]" id="topics"  class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter topics, separated by commas">
                            @error('topics')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="platforms">Platforms</label>
                        <input type="text" name="platforms[]" id="platforms" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter platforms, separated by commas">
                        @error('platforms')
                            <div class="text-red-600 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About You</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('about', $influencer->about) }}</textarea>
                            @error('about')
                                <div class="text-red-600 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="bg-primary p-4 text-white rounded-md">Update Profile</button>
                </form>
            </div>

        </div>
    </div>

@endsection
