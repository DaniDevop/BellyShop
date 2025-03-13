<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;

class SupplyData extends Component
{
    use WithPagination;

    public string $search = "";
    public $editId = null; // ID du fournisseur en cours d'édition
    public $name, $email, $tel, $entreprise_name, $adresse; // Champs de formulaire

    // Activer le mode édition pour un fournisseur
    public function edit($id)
    {
        $this->editId = $id;
        $supplier = Supplier::find($id);
        $this->name = $supplier->name;
        $this->email = $supplier->email;
        $this->tel = $supplier->tel;
        $this->entreprise_name = $supplier->entreprise_name;
        $this->adresse = $supplier->adresse;
    }

    // Mettre à jour le fournisseur
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string',
            'entreprise_name' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);

        $supplier = Supplier::find($this->editId);
        $supplier->name=$this->name;
        $supplier->email=$this->email;
        $supplier->tel=$this->tel;
        $supplier->adresse=$this->adresse;
        $supplier->entreprise_name=$this->entreprise_name;
        $supplier->update();
        $this->cancelEdit(); // Quitter le mode édition
    }

    public function cancelEdit()
    {
        $this->editId = null;
        $this->reset(['name', 'email', 'tel', 'entreprise_name', 'adresse']);
    }

    public function render()
    {
        $query = Supplier::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('tel', 'like', '%' . $this->search . '%')
                  ->orWhere('entreprise_name', 'like', '%' . $this->search . '%')
                  ->orWhere('adresse', 'like', '%' . $this->search . '%');
        }

        $suppliers = $query->paginate(5);

        return view('livewire.supply-data', [
            'suppliers' => $suppliers,
        ]);
    }
}