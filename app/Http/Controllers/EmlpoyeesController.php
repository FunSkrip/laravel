<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmlpoyeesController extends Controller
{
    public function showTask1(){

        $employees = DB::table('employees')->orderBy('salary')->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 1, 'Num_2' => 2]);

        // $employees_2 = DB::table('employees')->where('salary', '=', 400)->orWhere('id', '>', 4);
        // return view('viewTest.employees', ['employees' => $employees_2]);

    }

    public function showTask2(){

        $employees = DB::table('employees')->where('salary', '=', 400)->orWhere('id', '>', 4)->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 3]);

    }

    public function showTask3(){

        $employees = DB::table('employees')->where('id', '=', 3)->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 4]);

    }

    public function showTask4(){

        $employees = DB::table('employees')->select('id','name')->where('id', '=', 5)->get();
        return view('viewTest.employees', ['employees_2' => $employees, 'Num' => 5]);

    }

    public function showTask5(){

        $employees = DB::table('employees')->whereBetween('salary', [400, 800])->orWhere('position', '=', 'программист')->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 6]);

    }

    public function showTask6(){

        $salar = 0;
        $employees = DB::table('employees')->pluck('salary');
        foreach ($employees as $salary){
            $salar += $salary;
        }
        $employees = DB::table('employees')->get();
        return view('viewTest.employees', ['employees' => $employees, 'salaryes' => $salar, 'Num' => 7]);

    }

    public function showTask7(){

        $employeesDiz = DB::table('employees')->whereIn('position',['дизайнер'])->pluck('salary');
        $employeesProg = DB::table('employees')->whereIn('position',['программист'])->pluck('salary');
        $employeesVerst = DB::table('employees')->whereIn('position',['верстальщик'])->pluck('salary');
        
        function sumPlease($employees, $salar = null){
            foreach ($employees as $salary){
                $salar += $salary;
            }
            return $salar;
        }
        
        $sum1 = sumPlease($employeesDiz);
        $sum2 = sumPlease($employeesVerst);
        $sum3 = sumPlease($employeesProg);
        
        $employees = DB::table('employees')->get();
        return view('viewTest.employees', ['employees' => $employees, 'sum1' => $sum1, 'sum2' => $sum2, 'sum3' => $sum3, 'Num' => 8]);

    }

    public function showTask8(){
        
        $employees = DB::table('employees')->whereDay('birthday', '=', 25)->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 9]);

    }

    public function showTask9(){
        
        $employees = DB::table('employees')->whereYear('birthday', '=', 1990)->get();
        return view('viewTest.employees', ['employees' => $employees, 'Num' => 9]);

    }
}
