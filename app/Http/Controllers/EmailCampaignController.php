<?php

namespace App\Http\Controllers;

use App\Models\EmailCampaign;
use App\Http\Resources\EmailCampaignResource;
use Illuminate\Http\Request;

class EmailCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmailCampaignResource::collection(EmailCampaign::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campaign = EmailCampaign::create($request->all());

        return new EmailCampaignResource($campaign);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function show(EmailCampaign $emailCampaign)
    {
        return new EmailCampaignResource($emailCampaign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailCampaign $emailCampaign)
    {
        $emailCampaign->update($request->all());

        return new EmailCampaignResource($emailCampaign);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailCampaign $emailCampaign)
    {
        $emailCampaign->delete();

        return response()->json(null, 204);
    }
}
