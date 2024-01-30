<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <div class="mb-4">
                <input type="text"
                       name="title"
                       placeholder="{{ __('Title goes here') }}"
                       @class(['border-red-500' => $errors->has('title'), 'block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'])
                       value="{{ old('title') }}">
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
            </div>
            <div class="mb-4">
                <textarea
                    name="excerpt"
                    placeholder="{{ __('Excerpt goes here?') }}"
                    @class(['border-red-500' => $errors->has('excerpt'), 'block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'])
>{{ old('excerpt') }}</textarea>
                <x-input-error :messages="$errors->get('excerpt')" class="mt-2"/>
            </div>
            <div class="mb-1">
<textarea
    name="description"
    placeholder="{{ __('Description goes here') }}"
        @class(['border-red-500' => $errors->has('description'), 'block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'])
        >{{ old('description') }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>

            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
