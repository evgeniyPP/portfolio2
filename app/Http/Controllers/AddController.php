<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Project;
use App\Link;
use App\Skill;
use Illuminate\Http\Request;

class AddController extends Controller
{
    /**
     * Store a newly created project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function project(Request $request, Project $project)
    {
        $data = $request->except(['_token']);
        $project->create($data);
        return redirect(route('admin.add'));
    }

    /**
     * Store a newly created link in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function link(Request $request, Link $link)
    {
        $data = $request->except(['_token']);
        $link->create($data);
        return redirect(route('admin.add'));
    }

    /**
     * Store a newly created skill in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function skill(Request $request, Skill $skill)
    {
        $data = $request->except(['_token']);
        $skill->create($data);
        return redirect(route('admin.add'));
    }

    /**
     * Store a newly created contact in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request, Contact $contact)
    {
        $data = $request->except(['_token']);
        $contact->create($data);
        return redirect(route('admin.add'));
    }
}
