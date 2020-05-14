<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\SubGroup;
use App\Group;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::with('group')->paginate(10);
        return view('home', compact('students'));
    }

    public function getSubgroups()
    {
        $subgroups = SubGroup::all();
        return view('subgroups', compact('subgroups'));
    }

    public function getSubgroupStudents(Request $request, $id)
    {
        $groupedStudents = Student::where('group_id',$id)->with('group')->get();
        $students = Student::all();
        $subgroup = SubGroup::find($id);
        $selected = [];
        foreach ($groupedStudents as $key => $value) {
            $selected[] = $value->id;
        }

        return view('subgroup', compact('groupedStudents', 'students', 'selected', 'subgroup'));
    }

    public function postSubgroupStudents(Request $request, $id)
    {
        $this->validate($request, [
                'students.*' => 'required|exists:students,id',
                'id' => 'required|exists:sub_groups,id',
            ]);
        foreach ($request->students as $key => $value) {
            $getStudent = Student::find($value);
            // $getStudent->update(['group_id', $id]);
            $getStudent->group_id = $id;
            $getStudent->save();
        }
        return redirect()->route('subgroup', $id)->with('flash_success', 'Preferences saved successfully!');
    }

    public function getGroups()
    {
        $groups = Group::all();
        return view('groups', compact('groups'));
    }

    public function getGroupSubgroups(Request $request, $id)
    {
        $groupedSubgroups = SubGroup::where('group_id',$id)->with('group')->get();
        $subgroups = SubGroup::all();
        $group = Group::find($id);
        $selected = [];
        foreach ($groupedSubgroups as $key => $value) {
            $selected[] = $value->id;
        }

        return view('group', compact('groupedSubgroups', 'subgroups', 'selected', 'group'));
    }

    public function postGroupSSubgroups(Request $request, $id)
    {
        $this->validate($request, [
                'subgroups.*' => 'required|exists:sub_groups,id',
                'id' => 'required|exists:groups,id',
            ]);
        foreach ($request->subgroups as $key => $value) {
            $getSubgroup = SubGroup::find($value);
            // $getStudent->update(['group_id', $id]);
            $getSubgroup->group_id = $id;
            $getSubgroup->save();
        }
        return redirect()->route('group', $id)->with('flash_success', 'Preferences saved successfully!');
    }
}
