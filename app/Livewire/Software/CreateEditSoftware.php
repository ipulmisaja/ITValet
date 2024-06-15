<?php

namespace App\Livewire\Software;

use App\Livewire\Forms\SoftwareForm;
use App\Models\Software;
use App\Traits\HasRenderOption;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CreateEditSoftware extends Component
{
    use HasRenderOption;

    #[Locked]
    public string $pageTitle;

    public ?string $routeName;

    public Software $software;

    public SoftwareForm $form;

    #[Computed]
    public function categories()
    {
        $result = Software::get('category');

        if ($result->isEmpty()) {
            return null;
        } else {
            return $this->renderOption(
                $this->getOptionForRender(app(Software::class), ['category as id', 'category'])
            );
        }
    }

    public function mount(Software $software)
    {
        $this->routeName = Route::currentRouteName();

        if ($this->routeName === 'software.edit') {
            $this->pageTitle = "Edit Informasi Software";

            $this->software       = $software;
            $this->form->name     = $software->name;
            $this->form->category = $software->category;
            $this->form->url      = $software->url;
            $this->form->note     = $software->note;
        } else {
            $this->pageTitle = "Tambah Informasi Software";
        }
    }

    public function render(): View
    {
        return view('livewire.software.create-edit-software')->title($this->pageTitle);
    }

    public function submitData()
    {
        $this->dispatch('validate');

        $result = $this->routeName === 'software.edit'
            ? $this->form->update($this->software)
            : $this->form->save();

        session()->flash('messages', $result);

        $this->redirect(route('software'));
    }
}
