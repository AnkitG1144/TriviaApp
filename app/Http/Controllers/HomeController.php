<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function inputName(Request $request){
        $options = ['Sachin Tendulkar','Virat Kolli', 'Adam Gilchirst', 'Jacques Kallis'];
        $name = $request->name;
        return view('singleChoiceQuestion', compact('options', 'name'));
    }

    public function submitSingleChoiceQuestion(Request $request){
        $colors = ['White', 'Yellow', 'Orange', 'Green'];
        $name = $request->name;
        $option = $request->options;
        return view('multipleChoiceQuestion', compact('colors', 'option', 'name'));
    }

    public function submitMultipleChoiceQuestion(Request $request){
        $answer = implode(', ', $request->color);
        $request->answer =  $answer;
        UserData::createUserData($request);
        return redirect('/');
    }

    public function viewResult(){
        $allData = UserData::all();
        return view('result', compact('allData'));
    }
}
