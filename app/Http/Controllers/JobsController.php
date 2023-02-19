<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Http\Requests\CreateJobsRequest;
use App\Http\Requests\Updatejobrequest;


class JobsController extends Controller
{
    public function index(){
        $data =job::select('*')->orderby('id','ASC')->paginate(10);
        return view('index' ,['data'=>$data]);
        }

    public function create(){
        return view('create');

    } 

    public function store( CreateJobsRequest $request){
        $datatoinsert['name']=$request->job_name;
        $datatoinsert['active']=$request->job_active;
        $datatoinsert['created_at']=$request->date('y-m-d H:i:s');
        job::create($datatoinsert);

        return redirect()->route('jobindex')->with(['success'=>'added successfuly']);

    }

    public function edit ($id) {

            $data=job::select('*')->find($id);
            return view('edit',['data'=>$data]);
    }

    public function update ( $id , Updatejobrequest $request){
        $datatoupdate['name']=$request->job_name;
        $datatoupdate['active']=$request->job_active;
        $datatoupdate['updated_at']=date('y-m-d H:i:s');
        job::where(['id'=>$id])->update($datatoupdate);
        return redirect()->route('jobindex')->with(['success'=>'updated successfuly']);


    }
    public function delete ($id){
        job::where(['id'=>$id])->delete();
        return redirect()->route('jobindex')->with(['success'=>'job deleted successfuly']);


    }

           
}



class car {

        var $model;
        var $color;
        var $doors;

    function __construct($xmodel,$xcolor,$xdoors)
    {
        $this->model=$xmodel;
        $this->color=$xcolor;
        $this->doors=$xdoors;

        
    }
}

 $audi = new car('r8','white',2);
 $bmw  = new car('m8','red',2);