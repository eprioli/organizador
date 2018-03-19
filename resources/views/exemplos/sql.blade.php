$produto = Produto::find($id);
$produto = Produto::where('id',$id)->first()->get();
$produto = Produto::where('id','=', $id)->first()->get();
