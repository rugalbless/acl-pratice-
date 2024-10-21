<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="space-y-10 divide-y divide-gray-900/10">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                        <div class="px-4 sm:px-0">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Module {{ $module->name }}</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Everything changed here will be available as soon as it's saved. Make sure to share only what is necessary.</p>
                        </div>

                        <form action="{{ route('module.update', $module->id) }}" method="POST" class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                            @csrf
                            @method('put')
                            <div class="px-4 py-6 sm:p-8">
                                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="name" class="block text-sm font-bold leading-6 text-gray-900">Module name</label>
                                        <div class="mt-2">
                                            <input
                                                type="text"
                                                name="name"
                                                id="name"
                                                value="{{ $module->name }}"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            >
                                                {{--     modeule description--}}
                                            <label for="name" class="mt-2 block text-sm font-bold leading-6 text-gray-900">Module description</label>

                                            <textarea
                                                name="description"
                                                id="description"
                                                class="mt-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                rows="10"
                                            >{{ old('description', $module->description) }}
                                            </textarea>

                                            <label for="module" class="mt-2 block text-sm font-bold leading-6 text-gray-900">Module Image</label>
                                            <div class="mt-1 aspect-w-1 aspect-h-1 w-48 overflow-hidden rounded-md">
                                                @if($module->image)
                                                    <img id="image-preview"
                                                         src="{{ Storage::url($module->image) }}"
                                                         class="object-cover object-center"
                                                         alt="Module Image"
                                                         style="width: 192px; height: 288px;">  <!-- Tamanho fixo -->
                                                @else
                                                    <img id="image-preview"
                                                         src="https://picsum.photos/200/300?random={{ $module->id }}"
                                                         class="object-cover object-center"
                                                         alt="Random Image"
                                                         style="width: 192px; height: 288px;">  <!-- Tamanho fixo -->
                                                @endif

                                                <p id="random-image-message" class="mt-2 text-sm text-orange-600 {{ $module->image ? 'hidden' : '' }}">
                                                    This is a random image. No image has been uploaded for this module yet.
                                                </p>
                                            </div>

                                            <div class="mt-2">
                                                <input type="file"
                                                       name="image"
                                                       id="image"
                                                       class="block w-full text-sm text-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:cursor-pointer file:text-sm file:font-semibold file:text-slate-500 hover:file:text-yellow-50 hover:file:bg-slate-700"
                                                       onchange="previewImage(event)">
                                            </div>

                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                            </div>


                            <div class="px-4 py-6 sm:p-8">
                                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <div class="relative flex gap-x-3">
                                            <div class="flex h-6 items-center">
                                                <input
                                                    :checked="{{ $module->show_home }}"
                                                    value="1"
                                                    id="show_home" name="show_home" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-sky-600 transition-all duration-300 ease-in-out transform checked:bg-sky-600 checked:border-sky-600"
                                                >
                                            </div>

                                            <div class="text-sm leading-6">
                                                <label for="show_home" class="font-bold text-gray-900">Show on Home</label>
                                                <p class="text-gray-500">If marked wil appear on Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                                <button type="button" onclick="history.back()" class="relative inline-flex items-center text-sm font-semibold leading-6 text-red-800 group">
                                    Cancel
                                    <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-red-800 transition-all duration-300 group-hover:w-full"></span>
                                </button>
                                <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: 'textarea#description',
                plugins: 'code table lists',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | code | table',
                menubar: false,
                height: 300,
                statusbar: false,
                branding: false

            });
        });

        function previewImage(event) {
            const fileInput = event.target;
            const previewImage = document.getElementById('image-preview');
            const randomImageMessage = document.getElementById('random-image-message');

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.width = '192px';
                    previewImage.style.height = '288px';
                    randomImageMessage.classList.add('hidden');
                };
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                @if($module->image)
                    previewImage.src = "{{ Storage::url($module->image) }}";
                previewImage.style.width = '192px';
                previewImage.style.height = '288px';
                randomImageMessage.classList.add('hidden');
                @else
                    previewImage.src = "https://picsum.photos/200/300?random={{ $module->id }}";
                previewImage.style.width = '192px';
                previewImage.style.height = '288px';
                randomImageMessage.classList.remove('hidden');
                @endif
            }
        }
    </script>
</x-app-layout>
