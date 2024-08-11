<!-- resources/views/influencer/create.blade.php -->
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
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create Profile</h2>
            </div>

            <div class="mt-10 sm:mx-auto w-full">
                <form class="space-y-6" action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" name="profilePicture" id="profilePicture" class="form-control">
                    </div>


                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="name">Your names</label>
                            <input type="text" name="name" id="name" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        </div>
                    </div>


                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="followers">Instagram Followers</label>
                            <input type="number" name="followers" id="followers" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  >
                        </div>

                        <div class="form-group">
                            <label for="chargeperhour">Charge Per Hour</label>
                            <input type="number" name="chargeperhour" id="chargeperhour" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  >
                        </div>
                    </div>


                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <input type="text" name="languages[]" id="languages"  class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter languages, separated by commas">
                        </div>

                        <div class="form-group">
                            <label for="topics">Topics</label>
                            <input type="text" name="topics[]" id="topics" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  placeholder="Enter topics, separated by commas">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="platforms">Platforms</label>
                        <input type="text" name="platforms[]" id="platforms" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"placeholder="Enter platforms, separated by commas">
                    </div>

                    <div class="mt-2">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About You</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" class="pl-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
