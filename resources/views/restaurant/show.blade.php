<x-layout>
    <form action="/restaurant/{{ $restaurant->slug }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="flex items-center justify-between">
                    <h2 class="text-base/7 font-semibold">Restaurant details</h2>

                    <div class="flex items-center justify-center gap-x-6 h-10 mt-4">
                        <button onclick="modal_delete.showModal()" type="button" class="btn btn-error">Delete</button>
                    </div>
                </div>

                <div class="col-span-full mt-8">
                    <label for="name" class="block text-sm/6 font-medium">Restaurant name</label>
                    <div class="mt-2">
                        <input type="text" name="restaurant_name" id="name" class="input w-full"
                            value="{{ $restaurant->restaurant_name }}">
                    </div>
                </div>

                <div class="col-span-full mt-8 mb-4">
                    <label for="photo" class="block text-sm/6 font-medium">Photo</label>
                    <div class="mt-2 flex items-center gap-x-3">
                        <img src="{{ $restaurant->logo_url }}" alt="" class="h-20 w-20 rounded-full border" />
                        <input class="input w-full" type="text" name="logo_url" id="photo"
                            value="{{ $restaurant->logo_url }}">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="3"
                            class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $restaurant->description }}</textarea>
                    </div>
                    <p class="mt-1 text-xs/6">Write a friendly description for your restaurant</p>
                </div>

                <div class="flex flex-col md:flex-row gap-4 mt-4">
                    <div class="w-full">
                        <label for="phone" class="text-sm/6 font-medium self-center me-2">Phone</label>
                        <div class="mt-2 w-full">
                            <input type="text" name="phone" id="phone" class="input w-full"
                                value="{{ $restaurant->phone }}">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="whatsapp" class="text-sm/6 font-medium self-center me-2">Whatsapp</label>
                        <div class="mt-2 w-full">
                            <input type="text" name="whatsapp" id="whatsapp" class="input w-full"
                                value="{{ $restaurant->whatsapp }}">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="slug" class="text-sm/6 font-medium self-center me-2">Slug</label>
                        <div class="mt-2 w-full">
                            <input type="text" name="slug" id="slug" class="input w-full"
                                value="{{ $restaurant->slug }}">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-x-6 h-10 mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>

    <dialog id="modal_delete" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you sure?</h3>
            <p class="py-4">You are about to delete <b>{{ $restaurant->restaurant_name }}</b></p>
            <form method="POST" action="/restaurant/{{ $restaurant->slug }}">
                @csrf
                @method('DELETE')
                <div class="modal-action">
                    <button type="button" class="btn">Cancel</button>
                    <button type="submit" class="btn btn-error">Delete</button>
                </div>
            </form>
        </div>
    </dialog>
</x-layout>
