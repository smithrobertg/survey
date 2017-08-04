<?php

namespace App\Http\Controllers;

use App\Demographics;
use App\Survey;
use Illuminate\Http\Request;

class DemographicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($survey_id)
    {
        //
        $survey = Survey::find($survey_id);
        //dd($survey);

        return view('survey.demographics', compact('survey'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Survey $survey)
    {
        //
        //$survey = Survey::first();

        $demographics = new Demographics;

        $demographics->gender = request('gender');
        $demographics->gender_self_describe = request('gender-self-describe');
        $demographics->state_residence = request('current-state-of-residence');
        $demographics->race_ethnicity = request('race-ethnicity');
        $demographics->race_other = request('race-other');
        $demographics->born_in_us = request('bornInUnitedStates');
        $demographics->born_where = request('bornWhere');
        $demographics->how_long_lived_in_us = request('howLongInUS');
        $demographics->brought_to_us_by_trafficker = request('broughtToUsByTrafficker');
        $demographics->indentify_as = implode(", ", request('identifyAs'));
        $demographics->describe_becoming_legal_adult = request('describeBecomingLegalAdult');

        $survey->demographics()->save($demographics);

        return redirect('/timeline-description');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demographics  $demographics
     * @return \Illuminate\Http\Response
     */
    public function show(Demographics $demographics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demographics  $demographics
     * @return \Illuminate\Http\Response
     */
    public function edit(Demographics $demographics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demographics  $demographics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demographics $demographics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demographics  $demographics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demographics $demographics)
    {
        //
    }
}
