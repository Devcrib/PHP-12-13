<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/bundles/app/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400|Open+Sans:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu|Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <title><?= $_($this->get('pageTitle', 'Default Page')); ?></title>
    <style>

    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="container">

            <!-- Link to the frontpage -->
            <a class="navbar-brand  mr-auto" href="<?=$this->httpPath('app.welcome')?>">Quickstart</a>
        </div>
    </nav>
</header>

<?php $this->childContent(); ?>


<script src="/bundles/app/js/jquery.min.js"></script>
<script src="/bundles/app/js/app.js"></script>
</body>
</html>
