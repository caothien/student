<?php

namespace App\Http\Controllers;
use App\Student;
use Excel;
use Mail;
use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function exportExcel() {
		$students = Student::select('id as dfgd','name', 'age')->get();

		return Excel::create('itsolutionstuff_example', function($excel) use ($students) {
			$excel->setTitle('Our new awesome title');
			$excel->sheet('mySheet', function($sheet) use ($students){
				$sheet->fromArray($students, '1');
			});

		})->download('xlsx');
	}

	public function hello(){
		echo 'hello junier';
	}

	public function bye(){
		echo 'you not junier';
	}

	public function demoAjax(){
		$url = 'http://localhost:8000/demo-ajax/populate';

		return view('ajax', ['url' => $url]);
	}

	public function populate() {
		$students = Student::all();
		return response()->json($students);
	}

	public function testAjax() {
		$students = Student::all();
		return view('testAjax', ['students' => $students]);
	}
}
