
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="includes/styles.css">
    <script src="includes/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="includes/main3.js" async></script>
    <meta charset="UTF-8">
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
                <li class="nav-item active">
                    <a class="nav-link" href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/sitArrange.html">סידורי ישיבה<i class="fa fa-list-alt" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/RSVPs.html">שליחת אישורי הגעה<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">סטטוס הגעת אורחים<i class="fa fa-check-square-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/login.html">האירועים שלי<i class="fa fa-calendar-check-o" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <p class="navbar-brand"><b>שלום, שני ויונתן</b></p>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main class="guestList2">
    <h5>רשימת מוזמנים</h5>


    <section class="into">
        חברים של האמא- חברים מהצבא
    </section>
    <table id="table" class="table table-striped">
        <thead>
        <tr>
            <th scope="col">סוג מנה</th>
            <th scope="col">שם מוזמן</th>
        </tr>
        </thead>
        <tbody id="tbody2">
        </tbody>
    </table>
    <button type="button" id="addG" class="btn btn-outline-secondary">הוספת אורח</button>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <p class="breadcrumbs2"><a href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/sitArrange.html">סידורי ישיבה</a><i class="fa fa-caret-left" aria-hidden="true"></i><a href="http://shenkar.html5-book.co.il/2017-2018/web1/dev_203/guestList.html">ניהול רשימת מוזמנים ידנית</a><i class="fa fa-caret-left" aria-hidden="true"></i><b>רשימת מוזמנים</b></p>
</main>

</body>
<div id="popup2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h5>הוספת מוזמן חדש</h5>
        <h6>משפחת כהן</h6>
        <form class="myForm" action="servers/db.php" method="post" id="posts">
            <label>שם מוזמן<input class="form-control" type="text" id="fname" name="fullName"></label><br>
            <button type="button" class="btn btn-info" id="add1">הוספה</button>
            <table id="table3" class="table table-bordere">
                <thead>
                <tr>
                    <th scope="col">שם</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <input type="submit" value="שמור" class="btn btn-info" id="button1" name="submit">
        </form>
    </div>

</div>

</html>
