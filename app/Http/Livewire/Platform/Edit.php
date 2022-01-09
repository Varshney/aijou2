<?php

namespace App\Http\Livewire\Platform;

use App\Models\Platform;
use Livewire\Component;

class Edit extends Component
{
    public Platform $platform;

    public function mount(Platform $platform)
    {
        $this->platform = $platform;
    }

    public function render()
    {
        return view('livewire.platform.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->platform->save();

        return redirect()->route('admin.platforms.index');
    }

    protected function rules(): array
    {
        return [
            'platform.name' => [
                'string',
                'required',
            ],
        ];
    }
}
