<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $roles = Role::pluck('display_name','id');
        $users = User::orderBy('id','ASC')->paginate(10);
        return view('users.index',compact('users', 'roles'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $roles = Role::pluck('display_name','id');
        return view('users.create',compact('roles')); //return the view with the list of roles passed as an array
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|max:6',
            'dob' => 'required|max:10',
            'email_address' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'roles' => 'required'
        ]);
        $input = $request->only('first_name','last_name','gender','dob', 'email_address', 'password');
        $input['password'] = Hash::make($input['password']); //Hash password
        $user = User::create($input); //Create User table entry
        $user->save();
        //Attach the selected Roles
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        return redirect()->route('users.index')->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get(); //get all roles
        $userRoles = $user->roles->pluck('id')->toArray();
        return view('users.edit',compact('user','roles','userRoles'));
    }

    public function update(Request $request)
    {
        $input = $request->only('first_name','last_name', 'gender','dob', 'email_address', 'password');
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']); //update the password
        }else{
            $input = array_except($input,array('password')); //remove password from the input array
        }
        $user = User::find($request->id);
        $user->update($input); //update the user info

        //delete all roles currently linked to this user
        DB::table('role_user')->where('user_id',$request->id)->delete();
        //attach the new roles to the user
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        return redirect()->route('users.index')
            ->with('success','User updated successfully');
    }

    public function destroy(Request $request)
    {
        User::find($request->id)->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}
