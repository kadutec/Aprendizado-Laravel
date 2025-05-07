<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-96 p-6 bg-white shadow-lg rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-semibold text-center border-b pb-2">Trocar Título</h2>
            <form action="{{ route('blog.update', $blog) }}" method="POST" class="mt-4">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="titulo" class="block text-gray-700 font-medium">Título:</label>
                    <input type="text" id="titulo" name="titulo" value="{{ $blog->title }}" required
                           class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" 
                        class="w-full bg-blue-500 text-white py-2 rounded-lg text-center hover:bg-blue-600 transition"
                        style="background-color: #10B981; color: white; padding: 10px 16px; border-radius: 8px; text-decoration: none; display: inline-block; text-align: center;">
                    Updatar
                </button>
            </form>
            <div class="mt-4 text-center">
                <a href="{{ route('blog.index') }}" 
                   class="text-blue-500 hover:underline">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>