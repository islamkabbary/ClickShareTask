<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllOrderComponent extends Component
{
    use WithPagination;

    public $client_name, $total_amount;

    public function render()
    {
        $query = Order::query();

        if ($this->client_name) {
            $query->where('client_name', "like", "%" . $this->client_name . "%");
        }

        // Like Phone because i dont use phone in table order
        if ($this->total_amount) {
            $query->where('total_amount', "like", "%" . $this->total_amount . "%");
        }

        return view('livewire.show-all-order-component', ['orders' => $query->orderBy('created_at', "desc")->paginate(10)]);
    }

    public function clear()
    {
        $this->total_amount = null;
        $this->client_name = null;
    }
}
