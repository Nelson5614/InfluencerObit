<div x-data="{ open: @entangle('showModal').defer }" x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-semibold">Edit {{ $fieldLabel }}</h2>
        <form wire:submit.prevent="save">
            <!-- Modal Content -->
            <div class="mt-4">
                <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $fieldLabel }}</label>
                <input type="text" wire:model.defer="fieldValue" id="{{ $field }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary">
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" wire:click="closeModal" class="px-4 py-2 bg-gray-600 text-white rounded-lg">Cancel</button>
                <button type="submit" class="ml-4 px-4 py-2 bg-primary text-white rounded-lg">Save</button>
            </div>
        </form>
    </div>
</div>
