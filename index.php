<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Future Value Calculator</title>
</head>
<style type="text/css">

    .login {
        height: 300px;
        width: 400px;
        margin: 0;
        padding: 10px;
        border: 3px red solid;
        border-radius: 15px;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }

</style>
<body>

<form method="post" action="Future_Value.php">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="login" align="center" style="margin-top: 50px">
                    <h2 style="color: green">Future value Calculator</h2>
                    <p style="color: green" align="left"><b>Inventment Amount</b><input type="text"
                                                                                        name="Inventment Amount">
                    </p>
                    <p style="color: green" align="left"><b>Yearly Interest Rate</b><input type="text"
                                                                                           name="Yearly Interest Rate"
                                                                                           style=" margin-left: 10px">
                    </p>
                    <p style="color: green" align="left"><b>Number of Years</b><input type="text"
                                                                                      name="Number of Years"
                                                                                      style=" margin-left: 30px">
                    </p>
                    <input type="submit" value="Future Value">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</form>

</body>
</html>