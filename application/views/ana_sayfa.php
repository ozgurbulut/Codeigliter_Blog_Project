<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    /* Style the header */
    .header {
        background-color: #f1f1f1;
        padding: 20px;
        text-align: center;
    }

    /* Style the top navigation bar */
    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    /* Style the topnav links */
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        padding: 15px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width:600px) {
        .column {
            width: 100%;
        }
    }
</style>
</head>
<body>

<div class="header">
    <h1>Posts</h1>
    <p></p>
</div>


<div class="row"><?php  foreach ($posts as $row){?>

    <div class="column">
        <h2><a href=<?php echo base_url()."welcome/showposts/".$row->url; ?>><?php echo "<center>".$row->title;?></a></h2>
        <p><?php $limit=250;
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp";

            if(strlen($row->content)>250){
        for($i=0;$i<$limit;$i++){            echo $row->content[$i];}
        echo "<br><a href=>Add Favorites</a>"; }?></p>
        <p><?php if(strlen($row->content)<250){
            echo $row->content;
        }?></p>

    </div>
    <?php };?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
