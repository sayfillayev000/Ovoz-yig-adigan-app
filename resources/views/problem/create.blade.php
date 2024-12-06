<x-app-layout>
    <x-slot:title>Yangi Muammolar yaratish</x-slot:title>

    <div class="container mx-auto mt-10">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Yangi Muammolar yaratish</h1>

            @if ($errors->any())
                <div class="mb-4">
                    <ul class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('message'))
                <div class="mb-4">
                    <p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('message') }}
                    </p>
                </div>
            @endif

            <form action="{{ route('problem.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Muammo Nomi </label>
                    <input type="text" id="name" name="name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Yangi muammo nomini kiriting " value="{{ old('name') }}" required>
                </div>

                <!-- Description Field -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">To'liq malumot</label>
                    <textarea id="description" name="description"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        rows="4" placeholder="Muaamo haqida to'liq kiriting" required>{{ old('description') }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Muammo yaratish
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
