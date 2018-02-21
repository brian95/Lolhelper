<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiotHelper
{
    private $lookupSummonerByName = "summoner/v3/summoners/by-name";
    private $lookupLeagueById = "league/v3/positions/by-summoner";
    private $lookupMatchByAccountId = "match/v3/matchlists/by-account";

    public function fetchSummonerData($summonerName)
    {
        $summoner = $this->fetchRiotJsonData($this->lookupSummonerByName, $summonerName);
        return $summoner;
    }

    public function fetchLeagueData($leagueId)
    {
        $league = $this->fetchRiotJsonData($this->lookupLeagueById, $leagueId);
        return $league;
    }

    public function fetchMatchData($accountId)
    {
        $match = $this->fetchRiotJsonData($this->lookupMatchByAccountId);
        return $match;
    }

    private function buildUrl($method, $arg)
    {
        $API_KEY = "RGAPI-393b5e42-2611-46f2-b723-da3e83d26077";
        $devriotgames = "https://na1.api.riotgames.com/lol/";
        $url = $devriotgames . $method . "/" . $arg . "?api_key=" . $API_KEY ;
        return $url;
    }

    private function fetchRiotJsonData($method, $arguments)
    {
        $url = $this->buildUrl($method, $arguments);
        $json = file_get_contents($url);
        $obj = json_decode($json);
        return $obj;
    }
}
