<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Influencer;

class FilterByTopic extends Component
{
      // Property to hold the search query
      public $query = '';

      // Property to hold the search results
      public $influencers = [];

      // Method that runs whenever the query property is updated
      public function updatedQuery()
      {
          // If the query length is greater than 2 characters, perform the search
          if (strlen($this->query) > 2) {
              $this->influencers = Influencer::where('topics', 'like', '%' . $this->query . '%')->get();
          } else {
              // Otherwise, clear the search results
              $this->influencers = [];
          }
      }
    public function render()
    {
        return view('livewire.filter-by-topic');
    }
}
