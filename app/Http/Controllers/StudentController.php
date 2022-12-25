<?php
 
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
  
    public function index()
    {
    //     $students = Student::latest()->paginate(5);
    //   return view ('students.index' ,compact("students"))
    //   ->with('i',(request()->input('page',1)-1)*5);
        return view('students.index');
    }

 
    
    public function create()
    {
        return view('students.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        students::create($input);
        return redirect('students')->with('flash_message', 'students Addedd!');  
    }
 
    
    public function show($id)
    {
        $students = students::find($id);
        return view('students.show')->with('students', $contact);
    }
 
    
    public function edit($id)
    {
        $students = students::find($id);
        return view('students.edit')->with('students', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $students = students::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('students')->with('flash_message', 'students Updated!');  
    }
 
  
    public function destroy($id)
    {
        students::destroy($id);
        return redirect('students')->with('flash_message', 'students deleted!');  
    }
}