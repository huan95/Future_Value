<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Inventment_Amount = $_POST["Inventment_Amount"];
    $Yearly_Interest_Rate = $_POST["Yearly_Interest_Rate"];
    $Number_Of_Years = $_POST["Number_Of_Years"];

    $Future_Value = $Inventment_Amount + ($Inventment_Amount * $Yearly_Interest_Rate * 0.1);

}

?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <form>

        <style type="text/css">
            .login {
                height: 200px;
                width: 400px;
                padding: 10px;
                border: 3px red solid;
                border-radius: 15px;
            }

            .login input {
                padding: 5px;
                margin: 5px
            }
        </style>

    </form>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login">
                <h2 style="color: green">Future value Calculator</h2>
                <label style="color: green"><b>Inventment
                        Amount: </b><span><?php echo '$' . $Inventment_Amount ?></span></label><br>
                <label style="color: green"><b>Yearly Interest
                        Rate: </b><span><?php echo $Yearly_Interest_Rate . '%' ?></span></label><br>
                <label style="color: green"><b>Number Of
                        Years: </b><span><?php echo $Number_Of_Years ?></span></label><br>
                <label style="color: green"><b>Future Value: </b><span><?php echo '$' . $Future_Value ?></span></label>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

</body>
</head>
</html>