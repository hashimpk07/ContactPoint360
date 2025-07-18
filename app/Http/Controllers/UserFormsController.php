<?php

namespace App\Http\Controllers;

use App\Models\FormBuilder;
use App\Models\Forms;
use Illuminate\Http\Request;
use App\Jobs\NewUserMailJob;
use App\Models\User;



class UserFormsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $forms = FormBuilder::all();
        return view('user.index', compact('forms'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function read(Request $request)
    {
        $item = FormBuilder::findOrFail($request->id);
        return $item;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(Request $request)
    {
        $formID = $request->form_id;
        $request->request->remove('_token');
        $request->request->remove('form_id');
        $allData = $request->all();

       
        if ($request->hasFile('*')) {
            foreach ($request->allFiles() as $key => $files) {
                if ($files->isValid()) {
                    $imageName = time() . '_' . $files->getClientOriginalName();
                    $files->move(public_path('images'), $imageName);
                    $allData['files'][] = ['key' => $imageName, 'path' => 'images/' . $imageName];
                }
            }
        }
        
        $users = User::select('email')->first();
        NewUserMailJob::dispatch($users);

        $item = new Forms();
        $item->form_id = $formID;
        $item->form = $allData;
        $item->save();
        return redirect('user')->with('success', 'Form successfully');
        
    }
}
