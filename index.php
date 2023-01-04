<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dog Form</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <div class="bg-img">
      <div class="container">
        <img src="logo.jfif" alt="" />
        <h2>Registration Form</h2>
        <div class="form-container">
          <form
            action="file-upload.php"
            enctype="multipart/form-data"
            method="POST"
          >
            <div class="input-name">
              <!-- <i class="fa fa-user lock"></i> -->
              <i class="fa fa-user-circle-o lock"></i>
              <input
                type="text"
                placeholder="Dog Name"
                name="dogname"
                class="name"
                required
              />
              <span>
                <!-- <i class="fa fa-user lock"></i> -->
                <i class="fa fa-venus lock"></i>
                <input
                  type="text"
                  placeholder="Breed"
                  name="breedname"
                  class="name"
                />
              </span>
            </div>
            <div class="input-name">
              <input
                type="number"
                placeholder="Age"
                name="age"
                class="age"
                required
              />
              <span>
                <input
                  type="radio"
                  class="radio-button"
                  name="gender"
                  value="male"
                  required
                />
                <label>Male</label>
                <input
                  type="radio"
                  class="radio-button"
                  name="gender"
                  value="female"
                  required
                />
                <label>Female</label>
              </span>
            </div>
            <div class="input-name">
              <h4>Owner/Handler Name</h4>
            </div>
            <div class="input-name">
              <i class="fa fa-user lock"></i>
              <input
                type="text"
                placeholder="First Name"
                name="firstname"
                class="name"
                required
              />
              <span>
                <i class="fa fa-user lock"></i>
                <input
                  type="text"
                  placeholder="Last Name"
                  name="lastname"
                  class="name"
                  required
                />
              </span>
            </div>
            <div class="input-name">
              <i class="fa fa-envelope lock"></i>
              <input
                type="email"
                placeholder="Email"
                name="email"
                class="email"
                required
              />
              <span>
                <i class="fa fa-phone lock"></i>
                <input
                  type="number"
                  placeholder="Contact Number"
                  name="number"
                  class="number"
                  required
                />
              </span>
            </div>
            <div class="input-name">
              <h4>Select Image:</h4>
            </div>
            <div class="input-name">
              <label for="img">Left View</label>
              <input
                class="img"
                type="file"
                id="img"
                name="left_view"
                accept="image/*"
                required
              /><br />
              <span>
                <label for="img">Right View</label>
                <input
                  class="img"
                  type="file"
                  id="img"
                  name="right_view"
                  accept="image/*"
                  required
                />
              </span>
            </div>
            <!-- dogreg -->
            <!-- <div class="input-name">
              <h4>Please scan QRCode for Dog Registration</h4>
            </div>
            <div class="input-name">
              <img src="dogregistration.jpeg" alt="" />
            </div>
            <div class="input-name">
              <label for="img">Please attach Screenshot of Payment</label>
              <input
                class="img"
                type="file"
                id="img"
                name="reg_slip"
                accept="image/*"
                required
              />
            </div> -->
            <!-- dogreg -->
            <div class="input-name">
              <h4>Program</h4>
              <ul>
                <li>Puppy Entry -age category - (4months-12months)</li>
                <li>Adult entry-age category - (no age limit)</li>
                <li>Pregnant or on heat bitches arenot allowed in show.</li>
                <li>
                  Diseased or on going treatment dogs & bitches are not allowed.
                </li>
                <li>
                  All the exhibitors/participants should be on leash all the
                  time.
                </li>
                <li>
                  All the participants should be groomed before entry in the
                  show.
                </li>
              </ul>
            </div>

            <div class="input-name">
              <h4>Please scan QRCode to buy Ticket</h4>
            </div>
            <div class="input-name">
              <img src="payment.jpeg" alt="" />
            </div>
            <div class="input-name">
              <label for="img">Please attach Screenshot of Payment</label>
              <input
                class="img"
                type="file"
                id="img"
                name="pay_slip"
                accept="image/*"
                required
              />
            </div>
            <div class="input-name">
              <input type="checkbox" class="check-button" required />
              <label for="check-button" class="check"
                >I agree the terms & conditions of the organiser team.</label
              >
            </div>
            <!-- <div class="input-name">
              <button onclick="myFunction()">Registration Number</button>
              <input id="demo" type="text" name="reg_num" />
            </div> -->
            <div class="input-name">
              <button>Registration Number</button>
            <input type='text' name='reg_num' value='<?php echo $var; ?>'>
            </div>
            <div class="input-name">
              <input
                type="submit"
                name="submit"
                class="button"
                value="submit"
              />
            </div>
            <div class="input-name">
              <h4>Contact Details</h4>
              <p>+977 &nbsp;9851179321<br /></p>
              <p>+977 &nbsp;9808214559<br /></p>
              <p>+977 &nbsp;9851117887</p>
            </div>
            <div class="input-name">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.546105945291!2d85.31596621438443!3d27.700420232404706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19abe576ed91%3A0x9020b0f4c587cd3d!2sBhrikutimandap%20Exhibition%20Hall!5e0!3m2!1sen!2snp!4v1672046487400!5m2!1sen!2snp"
                width="300"
                height="150"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <div class="input-name">
              <p>
                Designed by:
                <a href="https://www.sait.com.np/" target="_blank"
                  >SAIT Solution and Trade Concern
                </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- <script>
        var seq = 0;

        function myFunction() {
          seq += 1;

          var value = "";

          if (seq < 10) {
            value = "000" + seq;
          } else if (seq < 100) {
            value = "00" + seq;
          } else if (seq < 1000) {
            value = "0" + seq;
          } else {
            value = seq;
          }

          document.getElementById("demo").value = value;
        }
      
    </script> -->
  </body>
</html>
