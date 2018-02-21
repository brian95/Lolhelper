<?php
class Summoner_model extends CI_Model
{
    private $lookupSummonerByName = "summoner/v3/summoners/by-name";
    private $lookupLeagueById = "league/v3/positions/by-summoner";
    public function __construct()
    {
        parent::__construct();
        $this->load->library("riothelper");
    }

    public function lookupSummonerByName($summoner)
    {
        $summoner = $this->riothelper->fetchSummonerData($summoner);
        $leagueData = $this->riothelper->fetchLeagueData($summoner->id);
        return $summoner;
    }

    public function lookupLeagueById($summonerId)
    {
        $leagueData = $this->riothelper->fetchLeagueData($summonerId);
        return $leagueData;
    }
}
