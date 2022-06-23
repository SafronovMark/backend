<?php
header('Content-Type: text/html; charset=UTF-8');


session_start();


if (!empty($_SESSION['login'])) {
    header('Location: ./');
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['logout'])) {
        session_destroy();
        $_SESSION['login'] = '';
        header('Location: ./');
    }
    if (!empty($_GET['error'])) {
        print('<div>Не верный пароль/логин проверьте корректность введенных данных</div>');
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <title>Авторизация</title>
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .login-block {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
        </style>
    </head>

    <body>
        <form action="" method="POST" class="login-block">
            <div class="input-block">
                <span>Логин:</span>
                <input name="login" class="input-item" />
            </div>
            <div class="input-block">
                <span>Пароль:</span>
                <input name="pass" class="input-item" />
            </div>
            <input type="submit" value="Войти" />
        </form>
        </div>
    </body>

    </html>

<?php
} else {
    $user = 'u47712';
    $pass = '7690736';
    $db = new PDO('mysql:host=localhost;dbname=u47712', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

    $member = $_POST['login'];
    $member_pass_hash = md5($_POST['pass']);

    try {
        $stmt = $db->prepare("SELECT * FROM members WHERE login = ?");
        $stmt->execute(array($member));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print('Error : ' . $e->getMessage());
        exit();
    }
    if ($result['pass'] == $member_pass_hash) {

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['uid'] = $result['id'];

        header('Location: ./');
    } else {
        header('Location: ?error=1');
    }
}
