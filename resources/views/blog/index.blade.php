<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @foreach ($blogs as $index => $value)
            <div class="bg-white shadow-lg rounded-2xl p-4 border border-gray-200">
                <div class="text-xl font-semibold border-b pb-2">{{ $value->title }}</div>
                <div class="mt-2 text-gray-600">Usuário: {{ $value->user->name }}</div>
                <div class="mt-4 flex justify-between">
                    <a href="{{ route('blog.edit', $value) }}" 
                       style="background-color: #3B82F6; color: white; padding: 6px 12px; border-radius: 8px; text-decoration: none; display: inline-block; text-align: center;">
                        Updatar
                    </a>
                    <form action="{{ route('blog.destroy', $value) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" 
                                style="background-color: #EF4444; color: white; padding: 6px 12px; border-radius: 8px; border: none; cursor: pointer;">
                            Deletar
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="p-4">
        <a href="{{ route('blog.create') }}" 
           style="background-color: #10B981; color: white; padding: 10px 16px; border-radius: 8px; text-decoration: none; display: inline-block; text-align: center;">
            Criar
        </a>
    </div>
</x-app-layout>
