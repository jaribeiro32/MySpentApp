<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseCreate extends Component
{
    public $amount;
    public $type;
    public $description;

    protected $rules = [
        'description' => 'required',
        'amount' => 'required',
        'type' => 'required',
    ];

    public function createExpense()
    {
        $this->validate();

        auth()->user()->expenses()->create([
            'description' => $this->description,
            'amount' => $this->amount,
            'type' => $this->type,
            'user_id' => 1,
        ]);

        session()->flash('message', 'Registro criado com sucesso!');

        $this->description = null;
        $this->amount = null;
        $this->type=null;
    }

    public function render()
    {
        return view('livewire.expense.expense-create');
    }
}
