<?php

namespace App\Http\Controllers\Device;

use App\Device;
use JavaScript;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeviceRequest;

class DeviceController extends Controller
{
   protected $modelName="Time attendence Machines";
    protected $createRoute='devices.create';
    protected $indexRoute='devices.index';
    protected $formRequestPath='App\Http\Requests\DeviceRequest';


    public function index(Request $request)
    {
           if ($request->ajax()) {

            $devices = (new Device)->newQuery();

            if (!is_null($request->name)) {
                $devices->where('name', 'like', "%{$request->name}%");
            }

            if (!is_null($request->place_id)) {
                $devices->where('place_id',  $request->place_id);
            }

            return Datatables::of($devices->get())
            ->addColumn('action', function ($device) {
               return htmlCellBtnEdit(route('devices.edit',$device->id),'xs');
            })
            ->editColumn('location', function ($device) {
               return $device->place->name;
            })
            ->make(true);
        }

         
     

        $route=route($this->indexRoute);//route for ajax request

        $filters=[//input names of each filter
            'name',
            'place_id',
        ];

        $datableColumns=[//column names of index-table
            'action',
            'machine id',
            'Name',
            'location',
          ];
 
          $columnMapper=[//i dont know why they use this any way I created this abnormal arry
            ['data'=>'action','name'=>'action','orderable'=>false,'searchable'=>false],
            ['data'=>'id','name'=>'id'],
            ['data'=>'name','name'=>'name'],
            ['data'=>'location','name'=>'location'],

          ];
        JavaScript::put([//this will convert php vars to js vars in more secure way. thanks jeffory way
            'route'=>$route,
            'columns'=>$columnMapper,
            'filters'=>$filters
        ]);

        return view('models.devices.index')
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
          return view('models.devices.create')
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
   public function store(DeviceRequest $request)
    {
        $device=Device::create($request->all());
        flash()->overlay("you have added new time attendence machine  <strong>$device->name</strong>  to location <strong>".$device->place->name." </strong> successfully .Please note that you must change the device id to <strong> $device->id </strong>for complete the process", 'new machine')->error();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
