<div class="max-w-7xl mx-auto py-15 px-4">

    <x-slot name="header">
        Meus Registros
    </x-slot>

    <div class="w-full mx-auto text-right mb-4">
        <a href="{{route('expenses.create')}}"
           class="flex-shrink-0 bg-green-700 hover:bg-green-900 border-green-700 hover:border-green-900 text-sm border-4 text-white py-2 px-6 rounded">Criar
            Registro</a>
    </div>

    @include('_includes.message')

    <table class="table-auto w-full mx-auto">
        <thead>
        <tr class="text-left">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Descrição</th>
            <th class="px-4 py-2">Valor</th>
            <th class="px-4 py-2">Data Registro</th>
            <th class="px-4 py-2">Ações</th>
        </tr>
        </thead>

        <tbody>
        @foreach($expenses as $expense)
            <tr>
                <td class="px-4 py-2 border">{{$expense->id}}</td>
                <td class="px-4 py-2 border">{{$expense->description}}</td>
                <td class="px-4 py-2 border">
                    <span class="@if($expense->type == 1) text-green-700 @else text-red-500 @endif">R$ {{number_format($expense->amount, 2, ',', '.')}}</span>
                </td>
                <td class="px-4 py-2 border">{{$expense->created_at->format('d/m/Y H:i:s')}}</td>
                <td class="px-4 py-4 border">
                    <a href="{{route('expenses.edit', $expense->id)}}"
                       class="px-4 py-2 border rounded bg-teal-700 text-white">Editar</a>
                    <a href="#" wire:click.prevent="remove({{$expense->id}})"
                       class="px-4 py-2 border rounded bg-red-500 text-white">Remover</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="w-full mx-auto mt-10">
        {{$expenses->links()}}
    </div>
</div>
