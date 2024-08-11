<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Influencer;
use Livewire\WithPagination;

class FilterComponent extends Component
{
    use WithPagination;

    public $location;
    public $language;
    public $platforms;
    public $followers;

    public $searchPerformed = false;

    public function search()
    {
        $this->resetPage(); // Reset to the first page on search
        $this->searchPerformed = true;
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
        $results = [];

        if ($this->searchPerformed) {
            $results = Influencer::query()
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
                ->paginate(10);
        }

        return view('livewire.filter-component', [
            'results' => $results
        ]);
    }
}



