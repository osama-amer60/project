
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay now</title>
    <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!--font awessom e-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body {
            background-color: #DBDBB0;
            margin: 110px 60px;
            align-items: center;
        }


        /* start main*/
        img {
            margin: outo;
            padding-bottom: 0px;
            margin-bottom: 0px;
            padding: 0px 15px;
        }

        h2 {
            color: #0652DD;
            font-size: 35px;
            text-align: left;
            padding: 30px 30px;
        }


        form {
            border: 4px solid #3B9D37;
            box-shadow: 3px 3px #3B9D37;
            align-self: center;
            width: 400px;
            height: 600px;
            padding: 20px;
            margin: -70px;
            border-radius: 12px;
            text-align: left;

        }

        input {
            width: 330px;
            height: 40px;
            padding: 5px;
            margin: 5px;
            float: left;
            border-radius: 12px;
            font-size: 20px;
        }

        a {
            font-size: 15px;
        }

        button {
            background-color: #E8E8CC;
            border-radius: 12px;
            font-size: 15px;
            padding: 5px;
            margin: 10px;
            width: 120px;
            height: 48px;
            border-radius: 50px;
            margin-left: 0px;
            float: left;


        }

        #click {
            background-color: #3B9D37;
            font-size: 17px;
            padding: 5px;

        }

        #visa {
            float: right;
        }

        .btn-close {
            margin-right: 290px;
            margin-top: -15px;
            margin-bottom: 10px;

        }

        .btn:focus {
            box-shadow: unset !important;
        }

        .modalfade {
            height: 100px;
            border: 4px solid #3B9D37;
            box-shadow: 4px 4px #3B9D37;
            align-self: center;
            width: 400px;
            padding: 10px;
            border-radius: 12px;
            text-align: left;
        }

        .modal-header {
            height: 100px;
            border: 4px solid #3B9D37;
            box-shadow: 4px 4px #3B9D37;
            align-self: center;
            width: 400px;
            padding: 10px;
            margin: 10px;
            border-radius: 12px;
            text-align: left;

        }

        .modal-dialog {
            max-width: 348px;
            margin: -0.25rem auto;

        }

        .modal-dialog {
            border: 2px solid #3B9D37;
            box-shadow: 2px 2px #3B9D37;
            background-color: #E8E8CC;
            color: black;
            align-self: center;
            width: 400px;
            padding: 20px;
            border-radius: 12px;
            text-align: left;

        }

        .modal-dialog-centered {
            min-height: calc(100% - 35.5rem);
            margin: 200px auto;
        }
    </style>
</head>

<body>
    <!-- start navbar-->


    <!-- end navbar-->


    <center>
        <form>
            <div id="tabale">
                <center>
                    <!-- <img src="images/IMG_20221214_183520_112.png" width="50%" height="70px"> -->
                    <h3><b>بيانات الدفع</b> </h3>
                    <img src="images/Meeza_Egyptian_company_logo.png" height="30px">
                    <img src="images/MasterCard_Logo.svg.webp" height="30px">
                    <img src="images/Visa_Inc._logo.svg.webp" height="20px">

                </center>

                <hr>
                <input type="text" placeholder="اسم حامل البطاقة " width="50%" height="20px">
                <input type="password" placeholder=" رقم البطاقة" width="50%" height="20px">
                <input type="text" placeholder=" شهر الانتهاء " width="50%" height="20px">
                <input type="text" placeholder="  سنة الانتهاء " width="50%" height="20px">
                <input type="text" placeholder="  الرقم السري " width="50%" height="20px">

                <img src="images/Viseca_MasterCard_Visa-Gold_2.png" height="150px" width="80%" id="visa">



                <!--  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="سيصل لك المندوب في اقرب وقت ممكن  ">
            Popover on bottom
          </button> -->

                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <center>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h4 class="modal-titlee" id="exampleModalToggleLabel4"> تمت العملية بنجاح </h4>
                            <br>
                            <br>

                        </center>

                    </div>
                </div>
            </div>
            <button id="click"> <a class="btn " data-bs-toggle="modal" href="#exampleModalToggle" role="button"> ادفع الان !</a></button>

    </center>
    </div>


    </form>










    <script src="./bootstrap/js/bootstrap.bundle.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>






</body>

</html>