<?php

namespace App\Http\Controllers;

use App\Refugee;
use Illuminate\Http\Request;

class RefugeeController extends Controller
{
    public function addToList(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            //Verifications
            $data['nbAdult'] = intval($data['nbAdult']);
            $data['nbChild'] = intval($data['nbChild']);
            if (array_key_exists('accommodation', $data)) {
                $data['accommodation'] = true;
            } else {
                $data['accommodation'] = false;
            }

            $this->validate($request, [
                'contactName' => 'required',
                'nbAdult' => 'required|integer',
                'nbChild' => 'required|integer',
            ]);

            Refugee::create($data);
            return redirect('/dashboard');

        } else {
            if (session('isAdmin')) {
                return view('refugees.add');
            }
            return redirect('/');
        }
    }

    public function removeFromList($id)
    {
        $refugee = Refugee::find($id);
        $refugee->delete();
        return redirect("/dashboard");
    }

    public function editInfos(Request $request, Refugee $refugeeGet)
    {
        if ($request->isMethod('post')) {
            $host = Refugee::where('id', $request->refId);
            $host->update($request->except('_token', 'refId'));
            return redirect("dashboard");
        } elseif ($request->isMethod('get')) {
            return view('refugees.editRef', ['ref' => $refugeeGet]);
        }
    }


}
