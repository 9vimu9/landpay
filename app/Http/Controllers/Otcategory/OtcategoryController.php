<?php

namespace App\Http\Controllers\Otcategory;

use JavaScript;
use App\Otcategory;
use App\Otcategorystatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Http\Requests\OtcategoryRequest;

class OtcategoryController extends Controller
{

    protected $modelName="OT Category";
    protected $createRoute='otcategories.create';
    protected $indexRoute='otcategories.index';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
           if ($request->ajax()) {
            $lastStatusOfOtcategories = Otcategorystatus::whereRaw('id IN (select MAX(id) FROM otcategorystatuses GROUP BY otcategory_id)')->get();


            return Datatables::of($lastStatusOfOtcategories)
                ->editColumn('name', function ($lastStatusOfOtcategories) {
                    return $lastStatusOfOtcategories->otcategory->name;
                })
                  ->addColumn('action', function ($lastStatusOfOtcategories) {
               return htmlCellBtnEdit(route('otcategories.edit',$lastStatusOfOtcategories->otcategory->id),'xs');
            })
                ->make(true);
        }

        $route=route($this->indexRoute);//route for ajax request

        $datableColumns=[//column names of index-table
            'action',
            'name',
            'allow OT weekday',
            'allow OT saturday',
            'allow OT sunday',
            'allow OT holiday',
            'allow D OT saturday',
            'allow D OT sunday',
            'allow D OT holiday',          
            'allow OT before clock in',
            'allow OT after clock in',
            'duration of minimum OT (m)',
            'interval morning OT',
            'time of interval',
            'interval night OT',
            'time of interval',
            'rates fixed ?',
            'OT fix rate',
            'D OT fix rate'

        ];

 
          $columnMapper=[//'data'=>column name for indicate relationshoip name=>name of column with owner of table 
            ['data'=>'action','name'=>'action','orderable'=>false,'searchable'=>false],
            ['data'=>'name','name'=>'name'],
            ['data'=>'allow_ot_weekday','name'=>'allow_ot_weekday'],
            ['data'=>'allow_ot_saturday','name'=>'allow_ot_saturday'],
            ['data'=>'allow_ot_sunday','name'=>'allow_ot_sunday'],
            ['data'=>'allow_ot_holiday','name'=>'allow_ot_holiday'],
            ['data'=>'allow_double_ot_saturday','name'=>'allow_double_ot_saturday'],
            ['data'=>'allow_double_ot_sunday','name'=>'allow_double_ot_sunday'],
            ['data'=>'allow_double_ot_holiday','name'=>'allow_double_ot_holiday'],
            ['data'=>'allow_clockin_ot','name'=>'allow_clockin_ot'],
            ['data'=>'allow_clockout_ot','name'=>'allow_clockout_ot'],
            ['data'=>'threshold','name'=>'threshold'],
            ['data'=>'interval_deduction_clockin_ot','name'=>'interval_deduction_clockin_ot'],
            ['data'=>'interval_deduction_clockin_time','name'=>'interval_deduction_clockin_time'],
            ['data'=>'interval_deduction_clockout_ot','name'=>'interval_deduction_clockout_ot'],
            ['data'=>'interval_deduction_clockout_time','name'=>'interval_deduction_clockout_time'],
            ['data'=>'allow_fix_rate','name'=>'allow_fix_rate'],
            ['data'=>'ot_fix_rate','name'=>'ot_fix_rate'],
            ['data'=>'double_ot_fix_rate','name'=>'double_ot_fix_rate'],
 
          ];
        JavaScript::put([//this will convert php vars to js vars in more secure way. thanks jeffory way
            'route'=>$route,
            'columns'=>$columnMapper,
            'filters'=>['name']
        ]);

        return view('models.otcategories.index')
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
         $formRequestPath='App\Http\Requests\OtcategoryRequest';
       
       return view('models.otcategories.create')
            ->with('modelName',$this->modelName)
            ->with('indexRoute',$this->indexRoute)
           ->with('indexRoute',$this->indexRoute)

            ->with('formRequestPath',$formRequestPath);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtcategoryRequest $request)
    {
            // return $request->all();
        
        $otcategory=Otcategory::create($request->only(['name']));
        $request->merge(['otcategory_id'=>$otcategory->id]);
        Otcategorystatus::create($request->except(['name']));
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
    public function edit(Otcategory $otcategory )
    {
         $formRequestPath='App\Http\Requests\OtcategoryRequest';
        $otcategorystatus= $otcategory->getLatestOtcategoryStatus();//get last otcategorystatus of seloectd otcategory
        // return ($otcategorystatus);
       
       return view('models.otcategories.edit')
           ->with('modelName',$this->modelName)
           ->with('otcategorystatus',$otcategorystatus)
           ->with('objectName',$otcategory->name)
           ->with('createRoute',$this->createRoute)
           ->with('indexRoute',$this->indexRoute)
           ->with('formRequestPath',$formRequestPath);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $otcategorystatus=Otcategorystatus::findOrFail($id);

        $otcategorystatus->fill($request->all());

        if ($otcategorystatus->isDirty()) {
            // return 'd';
            $request->merge(['otcategory_id'=>$otcategorystatus->otcategory_id]);

            Otcategorystatus::create($request->all());
        }

        return redirect(route($this->createRoute));   
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
