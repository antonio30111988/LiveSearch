<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()
	{
		return view('search');
	}
	
	public function search(Request $request)
	{
		if($request->ajax())
		{
			$res="";
			$users=DB::table('users')->where('name','LIKE',$request->search.'%')
									 ->orWhere('email','LIKE',$request->search.'%')->get();
			
			if($users)
			{
				foreach($users as $key=>$user)
				{
					$res.='<tr>'.
						'<td>'.$user->id.'</td>'.
						'<td>'.$user->name.'</td>'.
						'<td>'.$user->email.'</td>'.
						'</tr>';
				}
				
				return Response($res);
			}
		}
	}
}
