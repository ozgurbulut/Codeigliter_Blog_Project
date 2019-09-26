
<style>

    body{ margin-top:50px;}
    .nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
    .tab-pane .list-group-item:first-child {
        border-top-right-radius: 0px;border-top-left-radius: 0px;}
    .tab-pane .list-group-item:last-child {
        border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
    .tab-pane .list-group .checkbox { display: inline-block;margin: 0px; }
    .tab-pane .list-group input[type="checkbox"]{ margin-top: 2px; }
    .tab-pane .list-group .glyphicon { margin-right:5px; }
    .tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
    a.list-group-item.read { color: #222;background-color: #F3F3F3; }
    hr { margin-top: 5px;margin-bottom: 10px; }
    .nav-pills>li>a {padding: 5px 10px;}

    .ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;
        border: 1px solid #E5E5E5; }
    .ad a.title {color: #15C;text-decoration: none;
        font-weight: bold;font-size: 110%;}
    .ad a.url {color: #093;text-decoration: none;}
</style>


<html lang="en">
<head>



   <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="css/tab.css" rel="stylesheet" id="bootstrap-css">

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage( iframe_height, 'https://coderglass.com');
        });
    </script>
</head>
<body>

	<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2">

        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">


                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>




                </ul>
            </div>

            <div class="btn-group">

                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mark all as read</a></li>
                    <li class="divider"></li>
                    <li class="text-center">
					<small class="text-muted">Select messages to see more actions</small>
					</li>
                </ul>
            </div>
            <div class="pull-right">

                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button">No new Messages</a>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"></span> Inbox </a>
                </li>
                <li><a style='color:black;' href="https://www.coderglass.com">

            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
				<span class="glyphicon glyphicon-inbox">
                </span>Primary</a></li>


            </ul>
            <!-- Tab panes -->
            <?php
          /*  //print_r($_SESSION);
            $membername = $_SESSION['username'];
            //echo $membername."<br>";
            //print_r($records);
            foreach ($records as $message){
                if($message->reciver==$membername){
                    echo "Sender : --".$message->sender."<br>";
                    echo "Title : --".$message->title."<br>";
                    echo "Content --".$message->content."<br>";
                    echo "Date --".$message->date."<br>";
                }
            }*/
            ?>
            <?php
            $membername = $_SESSION['username'];
            foreach ($records as $message){
                if($message->reciver==$membername){
            ?>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">

                    <a href="#" class="list-group-item">
                    <div class="checkbox">
                       <label>
                        <input type="checkbox">
                       </label>
                    </div>
                    <span class="glyphicon glyphicon-star-empty"></span>
					<span class="name" style="min-width: 120px; display: inline-block;"><?php echo $message->sender ?></span>
					<span class=""><?php echo $message->title ?></span><br>
                    <span class="text-muted" style="font-size: 20px;">
					<?php echo $message->content?>
					</span>


<?php } } ?>


					</a>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>



