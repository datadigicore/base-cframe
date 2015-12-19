<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?=$TITLE?></h3>
                    </div>
                    <div class="panel-body">
                     <form role="form" method="post" action="<?=$url_rewrite?>login">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <input type="hidden" value="1" name="Login"/>
                            <input class="btn btn-lg btn-success btn-block" value="Login" type="Submit"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
