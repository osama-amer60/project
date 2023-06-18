  <!-- start footer-->

  <footer>
      <article id="leftarticle">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <img src="images/logo H.png" width="100%"><br>

                  </div>
                  <div class="col">
                      <h3 class=" text-center"> نبذة عنا</h3>
                      <p> في موقع احجزلي تقديم حلول متنوعة عبر موقعنا الإلكتروني وتطبيق الهاتف الخاص بنا، من خدمات حكومية وخدمات
                          بدل فاقد وبدل تالف للبطاقة وخدمات شهادة الميلاد والوفاة وقسيمة الزواج والطلاق وهدفنا منذ اليوم الاول توفير
                          الوقت وسعادة ورضا العميل وتقديم خدمة تفوق التوقعات.
                      </p>
                  </div>
                  <div class="col">
                      <div class="d-grid gap-2">
                          <button class="btn btn-success" type="button">تسجيل الدخول </button>
                          <h4 class="text-center">اتصل بنا 01017283715 </h4>
                          <button class="btn btn-success" type="button">ارسل لنــــــا لمتابعة ماهو جديد </button>
                          <center>
                              <div class="fa">
                                  <a href="https://www.facebook.com/Ehjizly"><i class="fa-brands fa-square-facebook"></i></a>
                                  <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                                  <a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin"></i></a>
                          </center>
                      </div>
                  </div>
              </div>
          </div>
      </article>
  </footer>

  <!-- end footer-->

  <script src="js/jquery.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
      new WOW().init();
  </script>
  <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')
        var Massage = "";
      $(document).ready(function () {
        $.ajax({
            url: "https://localhost:44384/api/Reservations",
            type: "GET",
            success: function(result){
                const Reservations = result;
            }
        });
      });
      // myModal.addEventListener('shown.bs.modal', function () {
      // myInput.focus()
      // })

      /**************************************/
      function goToSignIn(pageName) {
          console.log(pageName);
          localStorage.setItem('pageLink', pageName + '.php')
      }

      /*******/
      // تعريف عدد الحجوزات المسموح بها في اليوم
      var bookingsPerDay = 5;

      // تحديد التاريخ الحالي
      var today = new Date();
      var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();

      // تحديد وقت البدء والنهاية لليوم المحدد
      var startTime = new Date(date + " 00:00:00").getTime();
      var endTime = new Date(date + " 23:59:59").getTime();

      // استعلام قاعدة البيانات لجلب عدد الحجوزات الموجودة في اليوم
      var query = "SELECT COUNT(*) FROM bookings WHERE booking_time BETWEEN " + startTime + " AND " + endTime;

      // التحقق مما إذا كان عدد الحجوزات تجاوز الحد الأقصى المسموح به
      if (4 >= bookingsPerDay) {
          // إغلاق اليوم للحجوزات
          console.log("We're sorry, this day is fully booked.");
      } else {
          // فتح اليوم للحجوزات
          console.log("You can book for this day.");
      }
      
      function PostReservation() {
        var CardMassage = document.getElementById('CardMassage')
        var name = document.getElementById('name').value;
        var CardID = document.getElementById('CardID').value;
        var myIPhoneNumberput = document.getElementById('PhoneNumber').value;
        var NumberopPersons = document.getElementById('NumberopPersons').value;
        var RDate = document.getElementById('RDate').value;
        var Note = document.getElementById('Note').value;
        var Data = {
                    "name": name,
                    "identity_number":Number(CardID),
                    "persons_number": Number(NumberopPersons),
                    "phone_number": myIPhoneNumberput,
                    "date": RDate,
                    "notes": Note
                    };
        $.ajax({
            url: "https://localhost:44384/api/Reservations",
            type: "POST",
            data: JSON.stringify(Data),
            headers : {
                "Content-Type": "application/json",
            },
            success: function(result){
                Massage = result;
                CardMassage.innerHTML = Massage;
            }
        });
    }

  </script>


  </body>

  </html>