<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class PostComponent extends Component
{
    use WithPagination;

    public $post_id, $nombre, $telefono;
    public $view = 'create';

    public function render()
    {
        

        return view('livewire.post-component', [
            'posts'=>Post::orderBy('id','desc')->paginate(8)
        ]);
    }

    public function store(){
        $this->validate(['nombre'=>'required', 'telefono'=>'required']);

        Post::create([
            'nombre'=>$this->nombre,
            'telefono'=>$this->telefono,
        ]);
    }

    public function edit($id){
        $post = Post::find($id);
        $this->post_id = $post->id;
        $this->nombre = $post->nombre;
        $this->telefono = $post->telefono;
        $this->view = 'edit';
    }

    public function update(){
        $this->validate(['nombre'=>'required', 'telefono'=>'required']);
        $post=Post::find($this->post_id);

        $post->update([
            'nombre'=>$this->nombre,
            'telefono'=>$this->telefono
        ]);
        $this->default($this->post_id);
    }

    public function destroy($id){
        Post::destroy($id);
    }

    public function default($id){
 
        $this->nombre = ' ';
        $this->telefono = ' ';
        $this->view = 'create';
    }
    
}
