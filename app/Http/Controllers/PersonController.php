<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function showPersons() {
        return view('persons.table', [
             'persons' => new Person(),
        ]);
    }

    public function editPerson(int $id = 0) {
        return view('persons.edit', [
            'person' => Person::find($id),
        ]);
    }

    public function updatePerson(Request $request, int $id = 0) {
        $person = null;
        if ($id != 0) {
            $person = Person::find($id);
        } else {
            $person = new Person();
        }
        $person -> fill($request -> input('person'))
            -> save();

        return redirect() -> route('persons');

    }

    public function removePerson(int $id) {
        Person::find($id) -> delete();

        return redirect() -> route('persons');
    }
}
