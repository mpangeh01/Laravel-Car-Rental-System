<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models;
use App\Models\province;

class Dropdowns extends Component
{

    public $province;
    public $district;

    public function render()
    {

        if(!empty($this-> province))  {

            $this-> district = province::where('prov_id', $this-> country)->get();
        }
        return view('livewire.dropdowns')
        ->withCountries(province::orderBy('name')->get());
    }
}
