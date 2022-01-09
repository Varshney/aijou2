<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Edit extends Component
{
    public Company $company;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->company->save();

        return redirect()->route('admin.companies.index');
    }

    protected function rules(): array
    {
        return [
            'company.name' => [
                'string',
                'required',
            ],
            'company.url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
