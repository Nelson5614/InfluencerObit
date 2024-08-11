<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Influencer;

class InlineEdit extends Component
{
    public $showModal = false;
    public $field;
    public $fieldValue;
    public $fieldLabel;

    public function openModal($field, $fieldLabel, $fieldValue)
    {
        $this->field = $field;
        $this->fieldLabel = $fieldLabel;
        $this->fieldValue = $fieldValue;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function save()
    {
        // Update the influencer's profile
        $influencer = Influencer::find(auth()->user()->id);
        $influencer->update([$this->field => $this->fieldValue]);

        $this->closeModal();

        session()->flash('message', 'updated.');
    }


    public function render()
    {
        return view('livewire.inline-edit');
    }
}
