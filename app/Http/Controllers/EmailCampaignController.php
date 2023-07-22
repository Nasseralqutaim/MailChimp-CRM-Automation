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

    // Other methods will go here
}
