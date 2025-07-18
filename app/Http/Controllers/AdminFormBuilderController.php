<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormBuilder;


class AdminFormBuilderController extends Controller
{
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $forms = FormBuilder::all();
        return view('admin.index', compact('forms'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(Request $request)
    {
        $item = new FormBuilder();
        $item->name = $request->name;
        $item->content = $request->form;
        $item->save();

        return response()->json('added successfully');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function editData(Request $request)
    {
        return FormBuilder::where('id', $request->id)->first();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        $item = FormBuilder::findOrFail($request->id);
        $item->name = $request->name;
        $item->content = $request->form;
        $item->update();
        return response()->json('updated successfully');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function destroy($id)
    {
        $form = FormBuilder::findOrFail($id);
        $form->delete();

        return redirect('form-builder')->with('success', 'Form deleted successfully');
    }
}
