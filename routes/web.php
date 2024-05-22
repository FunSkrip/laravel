<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ViewTestController;
use App\Http\Controllers\EmlpoyeesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id?}', function ($id = null){
    return 'Пользователь '. $id; 
});

Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    $year = (int)$year;
    $month = (int)$month;
    $day = (int)$day;
    $date = "$year-$month-$day";

    $weekDay = date('N', strtotime($date))-1;
    $weekDaysNames = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return "День недели: $weekDaysNames[$weekDay]";
})->where(['year' => '\d{4}', 'month' => '(0?[1-9]|1[0-2])', 'day' => '(0?[1-9]|[1-2][0-9]|3[0-1])']);

Route::get('/user/user_name/{name}', function ($userName) {

    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5'
    ];
    if (array_key_exists($userName, $users))
        return "Город пользователя $userName: $users[$userName]";
    else
        return "Нет такого пользователя!";
});

Route::get('/pages/show/{id?}',[PageController::class, 'showOne']);
Route::get('/pages/all', [PageController::class, 'showAll']);

Route::get('/ViewTest/metod1/', [ViewTestController::class, 'metod1']);
Route::get('/ViewTest/metod2/', [ViewTestController::class, 'metod2']);
Route::get('/ViewTest/metod3/', [ViewTestController::class, 'metod3']);

Route::get('/ViewTest/links/', [ViewTestController::class, 'links']);

Route::get('/ViewTest/users/', [ViewTestController::class, 'users']);

Route::get('/EmployeesTest/employ/Task1', [EmlpoyeesController::class, 'showTask1']);
Route::get('/EmployeesTest/employ/Task3', [EmlpoyeesController::class, 'showTask2']);
Route::get('/EmployeesTest/employ/Task4', [EmlpoyeesController::class, 'showTask3']);
Route::get('/EmployeesTest/employ/Task5', [EmlpoyeesController::class, 'showTask4']);
Route::get('/EmployeesTest/employ/Task6', [EmlpoyeesController::class, 'showTask5']);
Route::get('/EmployeesTest/employ/Task7', [EmlpoyeesController::class, 'showTask6']);
Route::get('/EmployeesTest/employ/Task8', [EmlpoyeesController::class, 'showTask7']);
Route::get('/EmployeesTest/employ/Task9', [EmlpoyeesController::class, 'showTask8']);
Route::get('/EmployeesTest/employ/Task10', [EmlpoyeesController::class, 'showTask9']);
Route::get('/EmployeesTest/employ/Task11', [EmlpoyeesController::class, 'showTask10']);
Route::get('/EmployeesTest/employ/Task12', [EmlpoyeesController::class, 'showTask11']);
Route::get('/EmployeesTest/employ/Task13', [EmlpoyeesController::class, 'showTask12']);
Route::get('/EmployeesTest/employ/Task14', [EmlpoyeesController::class, 'showTask13']);