<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News Feed | Sawang</title>

    <link href="inspina/css/bootstrap.min.css" rel="stylesheet">
    <link href="inspina/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="inspina/css/animate.css" rel="stylesheet">
    <link href="inspina/css/style.css" rel="stylesheet">
    <link href="inspina/css/plugins/slick/slick.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <i class="fa fa-reorder"></i>
                            </button>
                            <a href="#" class="navbar-brand">Sawang</a>
                            <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="Search around you" class="form-control" name="top-search" id="top-search">
                                </div>
                            </form>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                        <img alt="image" class="avatar" src="inspina/img/a2.jpg"> 
                                        User Name
                                        <span class="caret"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="">Profile</a></li>
                                        <li><a href="">Message</a></li>
                                        <li><a href="">Setting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="login"><i class="fa fa-sign-out"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="social-feed-box">
                           <div class="feed-element" style="margin-top:5px">
                            <a href="" class="pull-left">
                                <img alt="image" class="img-circle" src="inspina/img/a3.jpg">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" rows="3" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs nav-justified">
                          <li class="active"><a href="#hometab" role="tab" data-toggle="tab">Nearby</a></li>
                          <li><a href="#javatab" role="tab" data-toggle="tab">Circle</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="hometab">
                            <div class="social-feed-box">
                                <div class="social-avatar">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="inspina/img/a1.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                    </div>
                                </div>
                                <div class="social-body">
                                    <p>
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                        default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                        in their infancy. Packages and web page editors now use Lorem Ipsum as their
                                        default model text.
                                    </p>

                                    <div class="btn-group">
                                        <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                                        <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                                        <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                                    </div>
                                </div>
                                <div class="social-footer">
                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="inspina/img/a1.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                Andrew Williams
                                            </a>
                                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                            <br/>
                                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                            <small class="text-muted">12.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="inspina/img/a2.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                Andrew Williams
                                            </a>
                                            Making this the first true generator on the Internet. It uses a dictionary of.
                                            <br/>
                                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                            <small class="text-muted">10.07.2014</small>
                                        </div>
                                    </div>

                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="inspina/img/a3.jpg">
                                        </a>
                                        <div class="media-body">
                                            <textarea class="form-control" placeholder="Write comment..."></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="javatab">
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Popular News </div>
                        <div class="panel-body">
                           <div class="feed-element">
                            <a href="" class="pull-left">
                                <img alt="image" class="img-circle" src="inspina/img/a2.jpg">
                            </a>

                            <div class="media-body">
                                <small class="pull-right">2h ago</small>
                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    .
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                <div class="panel panel-danger">
                        <div class="panel-heading">Popular Location </div>
                        <div class="panel-body">
                           <div class="feed-element">
                            <a href="" class="pull-left">
                                <img alt="image" class="img-circle" src="inspina/img/a2.jpg">
                            </a>

                            <div class="media-body">
                                <small class="pull-right">2h ago</small>
                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    .
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <div class="panel panel-danger">
                        <div class="panel-heading">Popular Writer </div>
                        <div class="panel-body">
                           <div class="feed-element">
                            <a href="" class="pull-left">
                                <img alt="image" class="img-circle" src="inspina/img/a2.jpg">
                            </a>

                            <div class="media-body">
                                <small class="pull-right">2h ago</small>
                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                <div class="well">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    .
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
 
</div>
</div>
<div class="footer">
    <div>
        <strong>Copyright</strong> Sawang Project &copy; {{date('Y')}}
    </div>
</div>

</div>
</div>



<!-- Mainly scripts -->
<script src="inspina/js/jquery-2.1.1.js"></script>
<script src="inspina/js/jquery-ui-1.10.4.min.js"></script>
<script src="inspina/js/jquery-ui.custom.min.js"></script>

<script src="inspina/js/bootstrap.min.js"></script>
<script src="inspina/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="inspina/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="inspina/js/inspinia.js"></script>
<script src="inspina/js/plugins/pace/pace.min.js"></script>
<script src="inspina/js/plugins/jquery-ui/jquery-ui.js"></script>
<script src="inspina/js/plugins/slick/slick.min.js"></script>
<!-- Flot -->
<script src="inspina/js/plugins/flot/jquery.flot.js"></script>
<script src="inspina/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="inspina/js/plugins/flot/jquery.flot.resize.js"></script>

<!-- ChartJS-->
<script src="inspina/js/plugins/chartJs/Chart.min.js"></script>

<!-- Peity -->
<script src="inspina/js/plugins/peity/jquery.peity.min.js"></script>
<!-- Peity demo -->
<script src="inspina/js/demo/peity-demo.js"></script>
<!-- Angular -->
<script src="inspina/js/angular/angular.min.js"></script>
<script src="inspina/js/angular/angular-sanitize.js"></script>
<script src="inspina/js/plugins/oclazyload/dist/ocLazyLoad.min.js"></script>
<script src="inspina/js/angular-translate/angular-translate.min.js"></script>
<script src="inspina/js/ui-router/angular-ui-router.min.js"></script>
<script src="inspina/js/bootstrap/ui-bootstrap-tpls-1.1.2.min.js"></script>
<script src="inspina/js/plugins/angular-idle/angular-idle.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>

<!-- Anglar App Script -->
<script src="inspina/js/app.js"></script>
<script src="inspina/js/config.js"></script>
<script src="inspina/js/translations.js"></script>
<script src="inspina/js/directives.js"></script>
<script src="inspina/js/controllers.js"></script>
<script>
    $(document).ready(function() {


        var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
        var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

        var data1 = [
        { label: "Data 1", data: d1, color: '#17a084'},
        { label: "Data 2", data: d2, color: '#127e68' }
        ];
        $.plot($("#flot-chart1"), data1, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
            {
                label: "Example dataset",
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 40, 51, 36, 25, 40]
            },
            {
                label: "Example dataset",
                fillColor: "rgba(26,179,148,0.5)",
                strokeColor: "rgba(26,179,148,0.7)",
                pointColor: "rgba(26,179,148,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(26,179,148,1)",
                data: [48, 48, 60, 39, 56, 37, 30]
            }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    });
</script>

</body>

</html>
