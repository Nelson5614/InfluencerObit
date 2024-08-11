<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use App\Models\Topic;
use App\Models\Language;
use App\Models\Platform;
use App\Models\Influencer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('influencer.createprofile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'languages' => 'nullable|array',
            'topics' => 'nullable|array',
            'platforms' => 'nullable|array',
            'website' => 'nullable|string',
            'location' => 'required|string',
            'phone' => 'nullable|string|max:15',
            'chargeperhour' => 'nullable|string',
            'followers' => 'required|integer',
            'name' => 'required|string',
            'about' => 'required|string'
        ]);




        // Handle profile picture upload
        $profilePicturePath = $request->hasFile('photo')
            ? $request->file('profilePicture')->store('photos', 'public')
            : 'assets/images/default.png';

        $influencer = Influencer::create([

            'profilePicture' => $profilePicturePath,
            'website' => $validated['website'],
            'location' => $validated['location'],
            'phone' => $validated['phone'],
            'chargeperhour' => $validated['chargeperhour'],
            'followers'=>$validated['followers'],
            'about'=>$validated['about'],
            'name'=>$validated['name']
        ]);

        $influencer->user_id = $request->user()->id;

        // Process and sync topics, languages, and platforms
        $influencer->topics()->sync($this->processTags($validated['topics'], Topic::class));
        $influencer->languages()->sync($this->processTags($validated['languages'], Language::class));
        $influencer->platforms()->sync($this->processTags($validated['platforms'], Platform::class));

        $influencer->save();


        return redirect()->route('influencer.profile', $influencer->id)->with('success', 'Profile created succesffuly');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function showMyProfile()
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Get the related influencer profile
        $influencer = $user->influencer;
         // Check if the user has an influencer profile
        $hasProfile = $influencer ? true : false;



        // Pass the influencer profile to the view
        return view('influencer.profile', compact('influencer','hasProfile'));
    }

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allLanguages = Language::all();
        $influencer = Influencer::findOrFail($id);
        return view('influencer.profileedit', compact('influencer', 'allLanguages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $influencer = Influencer::findOrFail($id);

        // Validate the inputs
        $validated = $request->validate([
            'profilePicture' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'languages' => 'nullable|array',
            'topics' => 'nullable|array',
            'platforms' => 'nullable|array',
            'website' => 'nullable|string',
            'location' => 'required|string',
            'phone' => 'nullable|string|max:15',
            'chargeperhour' => 'nullable|string',
            'followers' => 'required|integer|min:10000',
            'name' => 'required|string',
            'about' => 'required|string'
        ]);

        // Handle profile picture upload
        $profilePicturePath = $request->hasFile('profilePicture')
            ? $request->file('profilePicture')->store('photos', 'public')
            : $influencer->profilePicture;

        // Update the influencer record
        $influencer->update([
            'name' => $validated['name'],
            'website' => $validated['website'],
            'about' => $validated['about'],
            'location' => $validated['location'],
            'followers' => $validated['followers'],
            'profilePicture' => $profilePicturePath,
            'phone' => $validated['phone'],
            'chargeperhour' => $validated['chargeperhour']
        ]);

        // Process and sync topics, languages, and platforms
        $influencer->topics()->sync($this->processTags($validated['topics'] ?? [], Topic::class));
        $influencer->languages()->sync($this->processTags($validated['languages'] ?? [], Language::class));
        $influencer->platforms()->sync($this->processTags($validated['platforms'] ?? [], Platform::class));

        return redirect()->route('influencer.profile')->with('success', 'Profile updated successfully!');
    }


protected function processTags(array $tags, string $modelClass): array
{
    $modelIds = [];

    foreach ($tags as $tagName) {
        $tag = $modelClass::firstOrCreate(['name' => trim($tagName)]);
        $modelIds[] = $tag->id;
    }

    return $modelIds;
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
