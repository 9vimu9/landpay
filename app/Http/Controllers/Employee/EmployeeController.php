<?php

namespace App\Http\Controllers\Employee;

use JavaScript;
use App\User;
use App\Employee;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all())) {
             // return $request->name;

            $employees = (new Employee)->newQuery();

            if ($request->has('name')) {
                $employees->where('name', 'like', "%{$request->name}%");
            }

            if ($request->has('id')) {
                $employees->where('id', 'like', "%{$request->id}%");
            }

            if ($request->has('address')) {
                $employees->where('address', 'like', "%{$request->address}%");
            }

            if ($request->has('telephone_no')) {
                $employees->where('telephone_no_1', 'like', "{$request->telephone_no}%");
            }

            if ($request->has('nic')) {
                $employees->where('nic', 'like', "{$request->nic}%");
            }


            if ($request->has('dob')) {
                $employees->where('dob', 'like', "{$request->dob}%");
            }


            if ($request->has('date_joined')) {
                $employees->where('date_joined', 'like', "{$request->date_joined}%");
            }

             // return $employees->get();
            return Datatables::of($employees->get())
            ->addColumn('action', function ($employee) {
                return '<a href="#edit-'.$employee->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
        }

         // 
     

        $route=route('employees.index');//route for ajax request

        $filters=[//input names of each filter
            'name',
            'id',
            'address',
            'telephone_no',
            'nic',
            'dob',
            'date_joined'
        ];

        $datableColumns=[//column names of index-table
            'action',
            'FP Id',
            'Name',
            'nic',
            'address',
            'address temporary',
            'tele 1',
            'tele 2',
            'date joined',
            'date of birth'
            // 'action'
          ];
 
          $columnMapper=[//i dont know why they use this any way I created this abnormal arry
            ['data'=>'action','name'=>'action','orderable'=>false,'searchable'=>false],
            ['data'=>'id','name'=>'id'],
            ['data'=>'name','name'=>'name'],
            ['data'=>'nic','name'=>'nic'],
            ['data'=>'address','name'=>'address'],
            ['data'=>'address_temperary','name'=>'address_temperary'],
            ['data'=>'telephone_no_1','name'=>'telephone_no_1'],
            ['data'=>'telephone_no_2','name'=>'telephone_no_2'],
            ['data'=>'date_joined','name'=>'date_joined'],
            ['data'=>'dob','name'=>'dob'],


          ];
        JavaScript::put([//this will convert php vars to js vars in more secure way thanks jeffory way
            'route'=>$route,
            'columns'=>$columnMapper,
            'filters'=>$filters
        ]);

        return view('employees.index')->with('columns',$datableColumns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request->name;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
