<?php

namespace App\View\Components;

use Illuminate\View\Component;

class article extends Component
{
    /**publi
     * Create a new component instance.
     *
     * @return void
     */
    public $titre;
    public $url;
    public $prixN;
    public $prixS;
   
    
    
    public function __construct($titre,$url,$prixN,$prixS=0)
    {
        //
        $this->titre=$titre;
        $this->url=$url;
        $this->prixN=$prixN;
        $this->prixS=$prixS;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article');
    }
}
