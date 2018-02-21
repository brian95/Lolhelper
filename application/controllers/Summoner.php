<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summoner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('search_summoner');
    }

    public function search_summoner()
    {
        $this->load->model('summoner_model');
        $summonerData = $this->summoner_model->lookupSummonerByName($_POST['summonerName']);
        $leagueData = $this->summoner_model->lookupLeagueById($summonerData->id);
        $viewData['summonerName'] = $summonerData->name;
        $viewData['league'] = $leagueData;
        $this->load->view('summoner', $viewData);
    }
}
