<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class ContactController extends Controller
{
    public function index()
    {
        $list = Contact::where('status', '!=',0)->orderBy('created_at','desc')->get();
        $htmllparenid="";
        $htmllsortorder="";
        foreach($list as $item){
            $htmllparenid .="<option value= '" .$item->id . "'>".$item->name . "'</option>";
            $htmllsortorder .="<option value= '" .($item->sort_order+1) . "'>Sau ".$item->name . "'</option>";
        }
        return view('backend.contact.index', compact('list', 'htmllparenid', 'htmllsortorder'));
    }
    public function create()
    {

        return view('backend.contact.create');
    }
    public function store(StoreContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->title = $request->title;
        $contact->content = $request->content;
        $contact->created_at = date('Y-m-d H:i:s');
        $contact->status = $request->status;
        $contact->save();
        return redirect()->route('admin.contact.index');
    }
    public function show(string $id)
    {
        return view('backend.contact.show');
    }
    public function edit(string $id)
    {
        return view('backend.contact.edit');
    }
    public function update(Request $request, string $id)
    {
        return view('backend.contact.update');
    }
    public function destroy(string $id)
    {
        return view('backend.contact.destroy');
    }
    public function restore(string $id)
    {
        return view('backend.contact.restore');
    }
    public function delete(string $id)
    {
        return view('backend.contact.delete');
    }
    public function trash(string $id)
    {
        return view('backend.contact.trash');
    }
}
