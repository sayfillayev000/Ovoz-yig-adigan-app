<x-app-layout>
    <div class="container mx-auto mt-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Muammo haqida to'liq ma'lumot</h1>
            <a href="{{ route('problem.index') }}" class="text-blue-500 hover:underline">
                <i class="fas fa-arrow-left"></i> Orqaga qaytish
            </a>
        </div>

        <!-- Problem Details -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $problem->name }}</h2>
            <p class="text-gray-600 mt-4">{{ $problem->description }}</p>

            <!-- Voting Section -->
            @if (!auth()->user()->problem_id)
                <form action="{{ route('vote', $problem->id) }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Ovoz Berish
                    </button>
                </form>
            @else
                <div class="mt-6">
                    <button
                        class="bg-gray-400 text-white font-semibold px-4 py-2 rounded-lg cursor-not-allowed focus:outline-none">
                        Siz allaqachon ovoz bergansiz
                    </button>
                </div>
            @endif
        </div>

        @role('admin')
            <div class="mt-6 flex space-x-4">
                <form action="{{ route('problem.destroy', $problem->id) }}" method="POST"
                    onsubmit="return confirm('Muammoni o‘chirishni tasdiqlaysizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500">
                        <i class="fas fa-trash"></i> O'chirish
                    </button>
                </form>
            </div>
        @endrole
    </div>
</x-app-layout>
