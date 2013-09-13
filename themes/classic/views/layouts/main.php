<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" ng-app="Baseapp">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="language" content="en"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="/themes/classic/css/bootstrap.min.css">
    </head>
    <body>
        <?=$content?>
        <script src="/js/vendors/angular.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>