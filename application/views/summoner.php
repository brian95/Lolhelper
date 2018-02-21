<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Summoner Search</title>
</head>
    <body>
        <div id="container">
            <header>
                <div class="row">
                    <div class="page-header text-center">
                        <h1><b><?=$summonerName?></b></h1>
                    </div>
                </div>
            </header>
            <main>
                <div class="list-group col-sm-4">
                <?php foreach($league as $data): ?>
                <?php $wins = $data->wins ?>
                <?php $losses = $data->losses ?>
                <?php $totalPlayed = $wins + $losses ?>
                <?php $winLossAvg = $wins / $totalPlayed ?>                    
                    <ul class="list-group list-group-root">
                        <li class="list-group-item text-center"><b><?=$data->queueType?></b></li>
                            <ul class="list-group well">
                                <li class="list-group-item">Rank: <?=$data->tier . " " . $data->rank . " " . $data->leaguePoints . " LP"?></li>
                                <li class="list-group-item">Wins: <?=$data->wins?></li>
                                <li class="list-group-item">Losses: <?=$data->losses?></li>
                                <li class="list-group-item">Win/Loss Average: <?=$winLossAvg?></li>
                                <li class="list-group-item">Total Matches Played: <?=$totalPlayed?></li>
                            </ul>
                    </ul>
                <?php endforeach ?>
                </div>
            </main>
        </div>
    </body>
</html>
