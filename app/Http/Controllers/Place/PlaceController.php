<?php

namespace App\Http\Controllers\Place;

use App\Place;
use JavaScript;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\PlaceRequest;
use App\Http\Controllers\Controller;


class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $modelName="Locations";
    protected $createRoute='places.create';
    protected $indexRoute='places.index';
    protected $formRequestPath='App\Http\Requests\PlaceRequest';

    public function index(Request $request)
    {

        if ($request->ajax()) {

            $places = Place::all();

            return Datatables::of($places)           
                ->addColumn('action', function ($places) {
                    return htmlCellBtnEdit(route('places.edit',$places->id),'xs');
                })
                ->make(true);
        }

        $route=route($this->indexRoute);//route for ajax request

        $datableColumns=[//column names of index-table
            'action',
            'name',

        ];

        $columnMapper=[//'data'=>column name for indicate relationshoip name=>name of column with owner of table 
            ['data'=>'action','name'=>'action','orderable'=>false,'searchable'=>false],
            ['data'=>'name','name'=>'name'],
        ];

        JavaScript::put([//this will convert php vars to js vars in more secure way. thanks jeffory way
            'route'=>$route,
            'columns'=>$columnMapper,
            'filters'=>['name']
        ]);

        return view('models.places.index')
            ->with('columns',$datableColumns)
            ->with('createRoute',$this->createRoute)
            ->with('modelName',$this->modelName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('models.places.create')
            ->with('modelName',$this->modelName)
            ->with('indexRoute',$this->indexRoute)
            ->with('indexRoute',$this->indexRoute)
            ->with('formRequestPath',$this->formRequestPath);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request)
    {
        $place=Place::create($request->only(['name']));
        flash($place->name." saved successfully")->success();
        return redirect(route($this->createRoute));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PLace $place)
    {
    
       return view('models.places.edit')
           ->with('modelName',$this->modelName)
           ->with('place',$place)
           ->with('objectName',$place->name)
           ->with('createRoute',$this->createRoute)
           ->with('indexRoute',$this->indexRoute)
           ->with('formRequestPath',$this->formRequestPath);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceRequest $request, PLace $place)
    {
        $place->fill($request->all());
        $place->save();
        flash($place->name . 'saved success fully')->important();
        return redirect(route($this->indexRoute));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
