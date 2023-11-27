@foreach ($laptop as $item)
    <dialog id="edit_product{{ $item->id }}" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-2xl">Edit Product</h3>
            <form action="/dashboard/laptop/edit/{{ $item->id }}" method="post" class="mt-5"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Product</label>
                    <input type="text" id="nama" name="nama" value="{{ $item->nama }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        Product</label>
                    <input type="number" id="harga" name="harga" value="{{ $item->harga }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="jenis"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                    <select id="jenis" name="jenis"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="rog-flow" @if ($item->jenis == 'rog-flow') selected @endif>ROG FLOW</option>
                        <option value="rog-zephyrus" @if ($item->jenis == 'rog-zephyrus') selected @endif>ROG ZEPHYRUS
                        </option>
                        <option value="rog-strix" @if ($item->jenis == 'rog-strix') selected @endif>ROG STRIX</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto
                        Product</label>
                    <input type="file" id="foto" name="foto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                </div>
                <div class="mb-4">
                    <label for="spesifikasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spesifikasi</label>
                    <textarea id="spesifikasi" rows="4" name="spesifikasi"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $item->spesifikasi }}</textarea>
                </div>
                <button type="submit" class="w-full bg-red-600 py-2 rounded-md text-white">Edit</button>
            </form>
        </div>
    </dialog>
@endforeach
