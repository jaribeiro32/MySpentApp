<div>

    <x-slot name="header">
        Criar registro
    </x-slot>

    @if(session()->has('message'))
        <h3>{{ session('message') }}</h3>
    @endif
    <h3>Criar Registro</h3>
    <hr>
    <form action="" wire:submit.prevent="createExpense">

        <p>
            <label>Descrição</label>
            <input type="text" name="description" class="shadow border-t" wire:model="description">
        @error('description')
        <h5>{{ $message }}</h5>
        @enderror
        </p>

        <p>
            <label>Valor</label>
            <input type="text" name="amount" class="shadow border-t" wire:model="amount">
        @error('amount')
        <h5>{{ $message }}</h5>
        @enderror
        </p>

        <p>
            <label>Tipo do Registro</label>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option>Selecione um Tipo</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
        @error('type')
        <h5>{{ $message }}</h5>
        @enderror
        </p>

        <button type="submit">Salvar</button>

    </form>
</div>
