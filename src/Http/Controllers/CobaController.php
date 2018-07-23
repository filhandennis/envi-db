<?php
namespace Laravolt\Envi\Http\Controllers;


use Dotenv\Dotenv;
use Illuminate\Routing\Controller;
use Laravolt\Envi\Model\Setting;


class CobaController extends Controller
{
    public function index()
    {
        return view('envi::test');
    }

    public function edit(){
        $env = new Dotenv(base_path(), '.env');
        $env->load();
        $vars = $env->getEnvironmentVariableNames();
//        dd($vars);
        return view('envi::edit', compact(['vars']));
    }

    public function update(){
        $vars = request()->except('_token');
        foreach ($vars as $key=>$val){
            Setting::updateOrCreate(['key'=>$key,'value'=>$val]);
        }
        return redirect()->back()->withSuccess("Edit .env Success");
    }

}
