<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">実践Webアプリケーション</h1>
                <p class="lead">暇すぎるから授業のページをカスタムする用</p>
            </div>
        </div>

        <form action="base.php" method="post">
            <p><label>名前：<input type="text" name="name" size="40"></label></p>
            <p><label>血液型：
                    <select name="blood">
                        <option value="A">sample</option>
                    </select>
                </label>
            </p>
            <fieldset>
                <legend>性別</legend>
                <p><label><input type="radio" name="sex" value="male">男</label></p>
                <p><label><input type="radio" name="sex" value="female">女</label></p>
            </fieldset>
            <fieldset>
                <legend>sample-hobby</legend>
                <p><label><input type="checkbox" name="hobby" value="sports">スポーツ</label></p>
            </fieldset>
            <p><label>コメント：<br><textarea name="comments" rows="2" cols="40"></textarea></label></p>
            <p><input type="submit" value="送信"><input type="reset" value="リセット"></p>
                <div class="form-group">
                    <label for="formGroupExampleInput">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>

        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: nobu
 * Date: 2018/10/22
 * Time: 21:17
 */

?>