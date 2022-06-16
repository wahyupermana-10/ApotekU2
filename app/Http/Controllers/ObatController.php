<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = Obat::all();
        
        return view('obat.index', compact('listdata'));
    }

    public function front_index(){
        $listdata = Obat::all();
        return view('frontend.product', compact('listdata'));
    }

    public function addToCart($id){
        $obat = Obat::find($id);
        if(!$obat){
            abort('404');
        }

        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id] = [
                    "name" => $obat->generic_name,
                    "quantity" => 1,
                    "price" => $obat->price,
                    "photo" => $obat->image
                ];
        }
        else{
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function cart(){
        return view('frontend.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listdata = Kategori::all();
        return view('Obat.create', compact('listdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Obat;
        $data->genericname = $request->genericname;
        $data->form = $request->form;
        $data->restrictionformula = $request->restrictionformula;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->categoryid = $request->categoryid;
        $data->faskes1 = $request->faskes1;
        $data->faskes2 = $request->faskes2;
        $data->faskes3 = $request->faskes3;
        // $data->image = $request->image;
        
        $file = $request->file('image');
        
        $imgFolder = 'img';
        $imgFile = time()."_".$file;
        $file->move($imgFolder, $imgFile);
        $data->image = $imgFile;

        $data->save();
        return redirect('obat')->with('status', 'Obat is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function show($obat)
    {
        $res = Obat::find($obat);
        $msg = "";
        if($res){
            $msg = $res;
        }
        else{
            $msg = null;
        }
        return view('obat.show', compact('msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function edit($obat)
    {
        $data = Obat::find($obat);

        $obatKategori = $data->kategori;
        $kategori = Kategori::all();
        return view('obat.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        $obat->genericname=$request->get('genericname');
        $obat->form=$request->get('form');
        $obat->restrictionformula=$request->get('restrictionformula');
        $obat->price=$request->get('price');
        $obat->description=$request->get('description');
        $obat->categoryid=$request->get('categoryid');
        $obat->faskes1=$request->get('faskes1');
        $obat->faskes2=$request->get('faskes2');
        $obat->faskes3=$request->get('faskes3');

        $file = $request->file('image');
        $imgFolder = 'img';
        $imgFile = time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $obat->image = $imgFile;

        $obat->save();
        return redirect()->route('obat.index')->with('status', 'obat data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat  $Obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        $this->authorize('delete-permission', $obat);
        try{
            $obat->delete();
            return redirect()->route('obat.index')->with('status', 'obat successfully deleted!');
        }catch(\Exception $e){
            return redirect()->route('obat.index')->with('error', 'obat can not be deleted!');
        }
    }

    public function listObat()
    {
        $listdata = Obat::select('genericname', 'form', 'price', 'image')->get();
        return view('obat.list', compact('listdata'));
    }

    public function saveDataFieldObat(Request $request)
    {
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $Obat = Obat::find($id);
        $Obat->$fname = $value;
        $Obat->save();
        return response()->json(array(
            'status'=>'ok',
            'msg'=>'Obat data updated'
        ),200);
    }

    public function changeImageObat(Request $request)
    {
        $id = $request->get('id');
        $file = $request->file('image');
        $imgFolder = 'img';
        $imgFile = time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $imgFile);
        $Obat = Obat::find($id);
        $Obat->image = $imgFile;
        $Obat->save();
        return redirect('Obat')->with('status', 'Obat image is changed');
    }
}
