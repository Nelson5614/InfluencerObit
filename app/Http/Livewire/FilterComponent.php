<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Influencer;

class FilterComponent extends Component
{
    public $location;
    public $language;
    public $platforms;
    public $followers;

    public $results = [];

    public function search()
    {
        // Your search logic here
        $this->results = Influencer::query()
            ->when($this->location, function ($query) {
                $query->where('location', $this->location);
            })
            ->when($this->language, function ($query) {
                $query->where('language', $this->language);
            })
            ->when($this->platforms, function ($query) {
                $query->where('platforms', $this->platforms);
            })
            ->when($this->followers, function ($query) {
                $query->whereBetween('followers', $this->parseFollowers($this->followers));
            })
            ->get();
    }

    private function parseFollowers($range)
    {
        switch ($range) {
            case '10 000 - 50 000':
                return [10000, 50000];
            case '50 000 - 200 000':
                return [50000, 200000];
            case '200 000 - 500 000':
                return [200000, 500000];
            case '500 000 - 1 000 000':
                return [500000, 1000000];
            case '1 000 000 - Above':
                return [1000000, PHP_INT_MAX];
            default:
                return [0, PHP_INT_MAX];
        }

    }

    public function render()
    {
        return view('livewire.filter-component', [
            'results' => collect($this->results) // Ensure $results is a collection
        ]);
    }
}



