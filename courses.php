<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/
css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">
    <script src="includes/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="includes/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="includes/main2.js" async></script>
    <title>W.E.D.D</title>
</head>
<body>

<header id="Login">
    <a id="logo" href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/login.html"></a>
    <p class="Slogan"><b>W</b>e <b>E</b>asly <b>D</b>esign Your <b>D</b>reams <img class="cham" src="images/cham.png"></p>
    <a class="logout" href="#">התנתקות</a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <form class="form-inline my-2 my-lg-0" action="" method="post">
                <input class="form-control ml-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">דרכי הגעה<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">צפייה במיקום הישיבה<i class="fa fa-list-alt" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">אישורי הגעה<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">בחירת סוג מנה<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/guestLogin.html">האירועים שלי<i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <p class="navbar-brand"><b>שלום, דור</b></p>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class="myEvents">
    <button type="button" class="btn btn-outline-danger" id="check">אישור</button>
    <form class="was-validated">
        <div class="custom-control custom-checkbox mb-3" id="checkbox1">
            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
            <label class="custom-control-label" for="customControlValidation1"><p>שם: הבר מצווה של דוד<br>
                תאריך:17.07.2018<br>
                סוג מנה:רגילה<br>
                סטטוס הגעה:מגיע/ה</p></label>
        </div>
        <div class="custom-control custom-checkbox mb-3" id="checkbox2">
            <input type="checkbox" class="custom-control-input" id="customControlValidation2" required>
            <label class="custom-control-label" for="customControlValidation2"><p id="text">שם: הברית של יואב<br>
                תאריך:18.8.2018<br>
                סוג מנה:בתהליך<br>
                סטטוס הגעה:בתהליך</p></label>
        </div>
    </form>
    <h5>האירועים שלי</h5>
    <div class="clear"></div>
</main>
<div id="popup3" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h5>הברית של יואב</h5>
        <form target="hiddenFrame" class="myForm" action="servers/db.php" method="post" autocomplete="on" id="course">
        <select name="choice" class="custom-select" multiple>
            <option selected>בתהליך</option>
            <option value="טבעונית">טבעונית</option>
            <option value="צמחונית">צמחונית</option>
            <option value="כשר למהדרין">כשר למהדרין</option>
            <option value="רגילה">רגילה</option>
            <option value="מנת ילדים">מנת ילדים</option>
            <option value="ללא גלוטן">ללא גלוטן</option>
        </select>
            <input type="submit" value="שמור" class="btn btn-info" id="button2" name="submit">
        </form>
    </div>

</div>
<div><iframe name="hiddenFrame" class="hide"></iframe></div>
</body>
</html>