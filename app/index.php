<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"]) && isset($_POST["user_name"])){
        //エスケープしてから表示
        $user_name = htmlspecialchars($_POST["user_name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        print("${user_name} さんのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="index.php">
          <input name="user_name" />
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>
