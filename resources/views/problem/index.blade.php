<x-app-layout>
    <x-slot:title>Problems List</x-slot:title>

    <div class="container mx-auto mt-10">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Muammolar Ro'yxati</h1>

            <!-- Success Message -->
            @if (session('message'))
                <div class="mb-4">
                    <p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('message') }}
                    </p>
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border-b-2 border-gray-300">#</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300">Muammo Nomi</th>
                            <th class="px-4 py-2 border-b-2 border-gray-300">Muammo haqida to'liq</th>
                            {{-- <th class="px-4 py-2 border-b-2 border-gray-300 text-center">Ovoz berish</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($problems as $problem)
                            <tr onclick="location.href='{{ route('problem.show', $problem->id) }}'"
                                class="hover:bg-blue-50 {{ auth()->user()->problem_id == $problem->id ? 'bg-blue-200 text-blue-800' : 'bg-white' }} text-gray-800">
                                <td class="px-4 py-2 border-b text-center">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border-b font-medium">{{ $problem->name }}</td>
                                <td class="px-4 py-2 border-b">{{ Str::limit($problem->description, 50) }}</td>
                                {{-- @if (!auth()->user()->problem_id)
                                    <td class="px-4 py-2 border-b text-center">
                                        <form action="{{ route('vote', $problem->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-500 hover:to-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                                Ovoz Berish
                                            </button>
                                        </form>
                                    </td>
                            </tr>
                        @else
                            <td class="px-4 py-2 border-b text-center">
                                <button type="button"
                                    class="bg-gradient-to-r from-gray-400 to-gray-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                                    Ovoz Bergansiz
                                </button>
                            </td>
                        @endif --}}
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
