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
                    <div class="col-sm-12">
                        <h1 class="jumbotron text-center">Lolhelper</h1>
                    </div>
                </div>
            </header>
            <main>
                <div class="row">
                    <form action="summoner/search_summoner" method="post">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <!-- white space -->
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="summonerName" placeholder="Summoner Name">
                            </div>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-primary" name="search_button" value="search">
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>
