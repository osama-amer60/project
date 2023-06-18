
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--fa-->
  <link rel="stylesheet" href="./fa/css/all.min.css">
  <!--font awessom e-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/allstyle.css">

  <title>Document</title>
</head>

<body>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"> رسوم الدفع</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          رسوم المستند 50ج
          <br>
          رسوم خدمة إضافية 20ج
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="right: 0;"> التالي</button>
        </div>
      </div>
    </div>
  </div>


  <!--
   <section class="allside">
       
        <div class="theleftside">
            <h3>رسوم الدفع </h3>
            <p>طريقة الدفع</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  دفع فوري 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  دفع إلكتروني 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  دفع عند الإستلام  
                </label>
              </div>
              <p> خدمة إضافية</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  عن طريق مندوب  
                </label>
              </div>
              
        </div>
    </section>
  -->

  <!--start contact us-->
  <div id="contact-us">
    <div class="contact">
      <div class="container">
        <!--<h2>Contact Us</h2> -->
        <img src="images/logo H.png" width="250px" height="100px" id="logo">

        <div class="row">
          <div class="col-12 col-lg-6">
            <img src="images/WhatsApp Image 2023-03-23 at 10.17.00 PM.jpeg" width="80%" height="600px">

          </div>
          <div class="col-12 col-lg-6">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_9wjm14ni.json" background="transparent" speed="1" loop controls autoplay></lottie-player>
          </div>
          <div class="col-12 col-lg-6">


          </div>
        </div>
      </div>
      <!--start copyright-->
      <hr class="hr">
      <div class="copyright text-left">
        <div class="container">



          <!---  <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                           <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                           <a href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>
                           <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                           <a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>
              -->


        </div>
        <!-- Vertically centered modal -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel"> رسوم الدفع</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                رسوم المستند 50ج
                <br>
                رسوم خدمة إضافية 20ج
              </div>



              <div class="modal-footer">
                <button class="btn1 " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"> التالي</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2"> خدمة اضافية:- عن طريق مندوب </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closee"></button>
              </div>

              <div class="moda2-body">
                <p>اذا كنت تريد الخدمة الاضافية عن طريق مندوب ادخل البيانات المطلوية واضغط علي <span> <b> ارسال</b></span>
                  <br>
                  <br>
                  واذا كنت لا تريد الخدمة الاضافية اضغط علي <span> <b> تخطي</b></span>
                </p>

                </b>
                <form action="#" id="form-inside-right">
                  <input type="text" class="input-inside" placeholder="الاسم">
                  <br>
                  <input type="text" class="input-inside" placeholder="رقم الموبيل ">
                  <br>
                  <input type="text" class="input-inside" placeholder="  العنوان">
                  <br>
                  <input type="datetime-local" class="input-inside" placeholder="date and time">
                  <br>
                  <input type="text" class="input-inside" placeholder="رسالة او متطلبات خاصة ">
                </form>
                <br>

                <!--   <button class="btn1 " data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="sentt"> إرسال</button> -->

                <br>
                <br>



              </div>

              <!--
        <div class="modal-body">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              دفع فوري 
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              دفع إلكتروني 
            </label>
          </div>
          
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              دفع عند الإستلام  
            </label>
          </div>
          <br>
          <p> خدمة إضافية</p>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              عن طريق مندوب  
            </label>
          </div>
              </div>  -->

              <!--   <div class="moda2-body">
                 تم التأكيد
                <br>
                   سيصل لك المندوب في اقرب وقت ممكن 
              </div> 
            -->
              <div class="modal-footer">

                <button class="btn1 " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" id="sent"> ارسال </button>
                <button class="btn1 " data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" id="sent"> تخطي </button>

                <!--  <button class="btn1 " data-bs-target="#exampleModalToggle3" data-bs-toggle="moda1">  إرسال </button>  -->
                <div class="modal-main">
                  <button class="btn1 " data-bs-target="#exampleModalToggle" data-bs-toggle="modal" id="sent"> رجوع</button>

                </div>
              </div>



            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-main">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title" id="exampleModalToggleLabel3"> طريقة الدفع</h5>
                <hr>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  دفع فوري
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  دفع إلكتروني
                </label>
              </div>

              <!--    <div class="form-check">
            <div class="المندوب">
              <i> عن طريق مندوب :-</i> <input type="checkbox" id="check" onclick="enable()">
              <br>
              <br>
              <button disabled="true" id="btn" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="sent"> عن طريق مندوب </button>
            </div>
          </div> -->



              <br>

              <div class="modal-footer">
                <!--    <button class="btn1 " data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="sent"> إرسال</button> -->
                <button class="btn1 " data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" id="right"> عند الاستلام </button>
                <button class="btn1 " id="sent"> <a href="pay now.php">التالي</a> </button>

                <div class="modal-main">
                  <button class="btn1 " data-bs-target="#exampleModalToggle" data-bs-toggle="modal" id="sent"> رجوع</button>
                </div>
              </div>


            </div>
          </div>
        </div>


        <a class="btn " data-bs-toggle="modal" href="#exampleModalToggle" role="button"> ادفع الان</a>
      </div>
      <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-main">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h5 class="modal-titlee" id="exampleModalToggleLabel4"> تمت العملية بنجاح</h5>
              <br>
              <br>
            </div>

          </div>
        </div>





        <!--End copyright-->
      </div>

    </div>

    <!--end contact us-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>

      function enable() {
        var check = document.getElementById("check");
        var btn = document.getElementById("btn");
        if (check.checked) {
          btn.removeAttribute("disabled")
        } else {
          btn.disabled = "true";
        }

      }
    </script>
</body>

</html>