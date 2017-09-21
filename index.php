<?php

include_once "header.php";

?>
    <body>
    <?php include_once "nav.html";?>

        <div class="jumbotron">
            <div class="container">
                <h1 style="font-family:Megrim; font-size:100px">NMU ACM</h1>
                <p>Association for Computing Machinery</p>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h2>Current Project</h2>
		    <div class="well"><a href="https://gitlab.com/nmuacm">Our Gitlab Page</a></div>
                    <div class="well"><a href="https://gitlab.com/snippets/1662609">More project ideas</a></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h2>Meetings</h2>
                    <div class="well">Meetings are Fridays at 4PM in the CS Lab</div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h2>More Info</h2>
                    <div class="well">Please submit a merge request for this site at the
                    <a href="https://gitlab.com/nmuacm/nmuacm.com">git repo</a></div>
                    <div class="well">Contact <a href="mailto:cmacdona@nmuacm.com">Christian MacDonald</a> for more info</div>
                </div>
            </div>
            <hr>
            <h2>Users</h2>
<?php foreach (array_diff(scandir("/home"), ['.', '..']) as $user) {
    if (!is_dir("/home/$user/acm_pub")) continue;
    echo "<div class=\"list-group\"><a class=\"list-group-item\" href=\"~$user/\"><h4 class=\"list-group-item-heading\">~$user</h4></a></div><br>\n";
}
?>
        </div>
    </body>
<?php include_once "footer.php";
