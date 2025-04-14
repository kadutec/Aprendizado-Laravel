<x-app-layout>
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-lg" style="width: 40vw;">
            <h2 class="text-2xl font-bold mb-4 text-center">Adicione o título</h2>
            <form action="{{ route('blog.store') }}" method="POST" class="bg-white shadow-lg rounded-2xl p-6 border border-gray-200">
                @csrf
                <label for="titulo" class="block font-semibold">Título:</label>
                <input type="text" id="titulo" name="titulo" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <button type="submit" class="mt-4 bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md w-full" style="background-color: #10B981; color: white; padding: 10px 16px; border-radius: 8px; text-decoration: none; display: inline-block; text-align: center;">Criar</button>
            </form>
            <div class="mt-4">
                <a href="{{ route('blog.index') }}" class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded-md block text-center">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
