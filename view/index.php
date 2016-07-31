<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>CSV Import </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/uniform.default.min.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="assets/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins-md.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
 <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <!-- 1. Load libraries -->
     <!-- Polyfill(s) for older browsers -->
    <script src="./node_modules/core-js/client/shim.min.js"></script>
    <script src="./node_modules/zone.js/dist/zone.js"></script>
    <script src="./node_modules/reflect-metadata/Reflect.js"></script>
    <script src="./node_modules/systemjs/dist/system.src.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-alpha.46/http.dev.js" type="text/javascript"></script>
    <!-- 2. Configure SystemJS -->
    <script src="./systemjs.config.js"></script>
    <script>
      System.import('app').catch(function(err){ console.error(err); });
    </script>

</head>
<body class="page-md">
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <div class="portlet box grey-salt">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i> Imported CSV Data
                    </div>
                    <div class="tools">
                        <a class="collapse" href="javascript:;" data-original-title="" title="">
                        </a>
                        <a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title="">
                        </a>
                        <a class="reload" href="javascript:;" data-original-title="" title="">
                        </a>
                        <a class="remove" href="javascript:;" data-original-title="" title="">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                         <csv-import> Loading ... </csv-import>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
