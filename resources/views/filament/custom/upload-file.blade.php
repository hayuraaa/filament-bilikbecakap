<div>
    <x-filament::breadcrumbs :breadcrumbs="[
    '/admin/kamuses' => 'kamuses',
    '' => 'List',
]" />
    <div class="flex justify-between mt-1">
        <div class="font-bold text-3xl"> Kamuses</div>
        <div>
            {{ $data }}
        </div>
    </div>
    <div>
        <form wire:submit="save" class="w-full max-w-sm flex mt-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for='fileinput'>
                    Pilih Berkas 
                </label>
                <input 
                class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leading-light
                focus:outline-none focus:shadow-outline" id=fileinput type="file" wire:model='file'>
            </div>
            <div class="flex items-center justify-between mt-3">
                <button class="text-black font-bold py-2
                px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Unggah
                </button>
            </div>
        </form>
    </div>
</div>