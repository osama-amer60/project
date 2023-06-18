
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        }

        h2 {
            color: #0652DD;
            font-size: 35px;
            text-align: left;
            padding: 30px 30px;
        }

        div {
            border: 4px solid #3b9d37;
            box-shadow: 4px 4px #3b9d37;
            align-self: center;
            width: 400px;
            height: 550px;
            padding: 20px;
            margin: 20px;
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
            background-color: whitesmoke;

        }

        a {
            font-size: 20px;
            color: #3b9d37;
        }

        button {
            background-color: #E8E8CC;
            border-radius: 12px;
            font-size: 18px;
            padding: 5px;
            margin: 10px;
            width: 330px;
            height: 50px;
            border-radius: 50px;


        }

        #click {
            background-color: #3b9d37;
            font-size: 25px;
            padding: 3px;
            height: 45px;

        }

        #click a {
            text-decoration: none;
            color: #E8E8CC;
        }

        .icons {
            padding: 20px 30px;
            margin: 0px 80px;


        }

        .icons a {

            padding: 10px 3px;
            margin: 0px 4px;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
            text-align: right;
            text-transform: capitalize;
            color: #3b9d37;
            text-decoration: none;
            text-align: center;
            word-spacing: 40px;
        }

        .icons a:hover {
            color: #3b9d37;
            background-color: whitesmoke;
            /* padding: 5px 5px;
    margin: 5px 5px;*/
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
                    <img src="images/logo H.png" width="100%" height="120px">
                    <p><b id="CardMassage">ادخل البيانات المطلوبة </b> </p>
                </center>

                <input id="Name" type="text" placeholder="الإسم " width="50%" height="20px">
                <br>
                <i class="fa-solid fa-image-user"></i>
                <br>
                <input id="CardID" type="password" placeholder="الرقم القومي" width="50%" height="20px">
                <br>
                <input id="PhoneNumber" type="password" placeholder="الرقم السري" width="50%" height="20px">
                <!-- <a href="#">forgot password? </a> -->
                <br>
                <button class="btn-sent " type="button" 
                        onclick="PostServise()">
                        تسجيل الدخول
                        </button>
 
                <br>
                <hr>
                <section class="icons">
                    <a href="https://www.facebook.com/Hogozati"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a>

                    <!--
      <a href="https://www.facebook.com/" class="left"><i class="fa-brands fa-facebook"></i> </a>
        <a href="https://www.instagram.com/" class="left"><i class="fa-brands fa-instagram"></i> </a>
        <a href="https://www.linkedin.com/" class="left"><i class="fa-brands fa-linkedin"></i> </a>
        <a href="https://mail.google.com/mail/u/0/#inbox" class="left"><i class="fa-solid fa-envelope"></i></a>
    -->
                </section>
        </form>
    </center>
    </div>
    <center>
        <p><b>لا تملك حساب <a href="#"> إنشاء حساب </b></a></p>
    </center>
    <!-- Scrollable modal -->
    <script src="js/jquery-3.6.1.min.js"></script>

<script>
    // <a href="birth certificate.html">تسجيل الدخول </a> 
    function PostServise() {
        var CardMassage = document.getElementById('CardMassage');
        var PhoneNumber = document.getElementById('PhoneNumber').value;
        var CardID = document.getElementById('CardID').value
        var Name = document.getElementById('Name').value;
        var pag = {
                    "name": Name,
                    "phoneNumber":PhoneNumber,
                    "id": Number(CardID),
                    };
            $.ajax({
            url: "https://localhost:44384/api/Serves",
            type: "POST",
            data: JSON.stringify(pag),
            headers : {
                "Content-Type": "application/json",
            },
            success: function(result){
                if(typeof result == "object"){
                    localStorage.setItem("ImgName",result.bi_ce)

                  var pagename = localStorage.getItem('pageLink');
          //      window.location.href = "http://localhost/" + pagename;
                  window.location.href = " http://localhost/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC%20%D8%A7%D9%84%D9%86%D9%87%D8%A7%D8%A6%D9%8A/"+ pagename ;

              //   window.location.href = "http://localhost/%d9%85%d8%b4%d8%b1%d9%88%d8%b9%20%d8%a7%d9%84%d8%aa%d8%ae%d8%b1%d8%ac%20%d8%a7%d9%84%d9%86%d9%87%d8%a7%d8%a6%d9%8a/birthcertificate.php";
              //  var pagename = localStorage.setItem('pageLink');
              //  window.location.href = "http://localhost:8000/" +pagename +"";




                    
                }else{
                Massage = result;
                CardMassage.innerHTML = Massage;
                };
            }
        });
    }

</script>


</body>
</html>