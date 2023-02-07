<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Facility;
use App\Models\Image;
use App\Models\Property;
use App\Models\PropertyDetalis;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catogery = Catogery::all();
        $property = Property::all();
        return view('realest.property_view', ['propertydata' => $property,'catogery'=>$catogery]);
    }

    public function indexinsert()
    {
        $dataCatogery = Catogery::all();
        return view('realest.property_insert_view',['catogery' => $dataCatogery]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
                 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'catogerie_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'space' => 'required|numeric',
            'numbeer_room' => 'required|integer',
            'property_direction' => 'required|string',
            'numbeer_toilet' => 'required|integer',
            'classification' => 'required|string',
            // 'seller_phone' => 'string',
            "Rental_term"=> 'required|string',
            'address' =>'required|string',
          //  "classification"=> "volvo",
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ],[
            'name.required' =>'يرجي ادخال اسم العقار',
            'image.required' =>'يرجي ادخال الصوره',
            'images.required' =>'يرجي ادخال الصوره',
            'country' => 'يرجي ادخال المدينه',
            'catogerie_id' => 'يرجي ادخال نوع العقار',
            'price' => 'يرجي ادخال السعر',
            'description' => 'يرجي ادخال الوصف',
            'space' => 'يرجي ادحال المساحه',
            'numbeer_room' => 'يرجي ادخال عدد الغرف',
            'property_direction' => 'يرجي ادحال الاتجاه',
            'numbeer_toilet' => 'يرجي ادخال عدد الحمامات',
            'classification' => 'يرجي ادحال تصنيف العقار',         
            'address' =>'يرجي ادخال العنوان',
            'Rental_term' =>'يرجي ادخال المده',
           // 'images.required' =>'يرجي ادخال الصوره',
           'space.numeric' =>'يرجي ادخال المساحه عدد وليس اي شئ اخر',
           'price.numeric' =>'يرجي ادخال السعر عدد وليس اي شئ اخر',

        ]);
        $imagessss = $request->file('images');
      
        $filename = time().'.'.$imagessss[0]->getClientOriginalExtension();
        $path = $imagessss[0]->storeAs('catogeryimage', $filename,'Taha');//اسم الفولدر /اسم الملف /disksال 

        $property = new Property(); 
        $property->name = $request->name; 
        $property->country = $request->country; 
        $property->catogerie_id = $request->catogerie_id; 
        $property->user_id = Getuserid();  
        $property->picture =$path;
        $property->save();


        $propertyDetalis = new PropertyDetalis(); 
        $propertyDetalis->price = $request->price; 
        $propertyDetalis->description = $request->description; 
        $propertyDetalis->space = $request->space; 
        $propertyDetalis->numbeer_toilet = $request->name; 
        $propertyDetalis->numbeer_room = $request->numbeer_room; 
        $propertyDetalis->property_direction = $request->property_direction; 
        $propertyDetalis->numbeer_toilet = $request->numbeer_toilet; 
        $propertyDetalis->longitude = "35.89999"; 
        $propertyDetalis->latitude = "37.8888"; 
        $propertyDetalis->classification = $request->classification; 
        $propertyDetalis->seller_phone = $request->country; 
        $propertyDetalis->property_id = $property->id;
        $propertyDetalis->Rental_term = "1.55"; 
      //  $propertyDetalis->picture = 'catogeryimage/'.$filename;
        $propertyDetalis->building_type = 'سكني';
        $propertyDetalis->save();

        
       
        foreach($imagessss as $image) {
        $randomNumber = mt_rand();
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', "$randomNumber".$filename,'Taha');
        $image = new Image(); 
        $image->image_path = $path;
        $image->property_id = $property->id;
        $image->save();
        }


        foreach ($request->future as $fut) {
            $model = new Facility();
            $model->facility = $fut;
            $model->property_id = $property->id;
            $model->save();
        }





        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        // $dataCatogery = Catogery::all();
        // return redirect('realest.property_insert_view',['catogery' => $dataCatogery]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $property = Property::findOrFail($request->pro_id);
        $property->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
