<html>
<head>
  <title>Krishiyog | Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="http://www.krishiyog.com/images/logo0.jpg" type="image/x-icon" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCXFJ-lc7cHHcEklG2_oIhTnPKTWsLwHEU"></script>
  <!-- <meta name="google-signin-client_id" content="1047018957941-c99a4imf38mmr0cf6d6l3e53kojti2fs.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script> -->
</head>
<link rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
.the-legend {
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
    border: 1px solid rgb(14,146,3);
}
.the-fieldset {
    border: 1px solid rgb(14,146,3);
    padding: 10px;
}
</style>
<body>

  <div class="card container shadow form-bod" >
    <div class="card-body">
      <a href="index.php">
<span style="float:left;color:rgb(14,146,3)"><i class="fa fa-home"></i>Home</span></a>
        <h5 style="text-align:center;color:rgb(14,146,3);margin-right:50px;" class="card-title"><b>Create Account</b></h5>
        <!-- <h6 style="text-align:center;color:rgb(14,146,3);"><b>Let's create your account</b></h6> -->
      <form style="width:100%" class="form" id="form" method="post" action="signupProcess.php">
        <b><div id="headingChange2"></div></b>
        <div  id="headingChange">
          <fieldset class="the-fieldset">
            <legend align="center" style="color:rgb(14,146,3);font-size:15px;;" class="the-legend"><b>Choose your profile:</b></legend>
      <div class="row">


        <div class="col-md-4 col-sm col-xs-1" align="center">
          <div class="form-group"  >
            <div class="col box"><label class="" style="padding:0px;"><img src="producers.jpg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="2" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:-20px;">Farmer/Producer/Processor</label></div>
          </div>
        </div>
        <div class="col-md-4 col-sm col-xs-1" align="center" >
          <div class="form-group">
            <div class="col box" ><label class="" style="padding:0px;"><img src="consumers.jpg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="1" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:-5px;">Buyer/Consumer</label></div>
          </div>
        </div>
        <div class="col-md-4 col-sm col-xs-1" align="center">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="aggregators.jpeg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="aggregator" class="img-thumbnail img-check" height="170" width="170"><input type="radio" name="typeReg" value="5" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:-10px;">Aggregator</label></div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-2"></div>
        <div class="col-md-4 col-sm col-xs-1" align="center">
          <div class="form-group">
            <div class="col box"><label class="" style="padding:0px;"><img src="community supporters.jpeg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="4" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:-10px;">Community</label></div>
          </div>
        </div>


        <div class="col-md-4 col-sm col-xs-1" align="center">
          <div class="form-group" >
            <div class="col box" style="float:center;"><label class=" " ><img src="wellness advisor.jpeg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="200" width="200" ><input type="radio" name="typeReg" value="3" id="typeReg" class="hidden" autocomplete="off"></label><br><label style="font-size:13px;margin-left:10px;">Wellness Advisor</label></div>
          </div>
        </div>
        </div>





    </div>
        <div id="parent">
          <div id="seller">
            <div id="step1">
              <div class="row">
                <div class="col form-group">
                  <label for="name">First Name <span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="First Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Last Name" id="lastName" value="" required>
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="sellMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact" >
                      Please enter a valid contact number
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">WhatsApp Number</label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="WhatsApp" id="contact1" placeholder="Your number">

                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1">Email address(optional)</label>
                  <input type="text" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <div class="Invalid invalidEmail">
                    Please enter a valid Email address!
                  </div>
                </div>
              </div>

              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"  pattern=".{8,}"    title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" >
                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <small id="" class="form-text text-muted">Password should match.</small>
                    <div class="confPassword" style="color:red;">

                    </div>
                  </div>
                  <hr>

                </div>
              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep1" name="button" style="float:right;" onclick="return Validate()">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>


            <div id="step2">

                    <label for="typeSeller">What type of Seller are you?<span class="required">*</span></label>
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="typeSeller">Options</label>
                      </div>
                      <select class="custom-select custom-select-sm" id="typeSeller" name="typeSeller">
                    <option selected value="0">Choose...</option>
                    <option value="ZBNF Farmers">ZBNF Farmers</option>
                    <option value="Natural Farmers">Natural Farmers</option>
                    <option value="Farmer Producer Organisation">Farmer Producer Organisation</option>
                    <option value="PSG Certified Producers">PSG Certified Producers</option>
                    <option value="Khadi Gram Udyog">Khadi Gram Udyog</option>
                    <option value="Self Help Group">Self Help Group</option>
                    <option value="Women Self Help Group">Women Self Help Group</option>
                    <option value="Certified Food Processor">Certified Food Processor</option>
                    <option value="Home Chef">Home Chef</option>
                    <option value="Home Gardner">Home Gardner</option>
                  </select>
                  <div class="Invalid invalidType">

                  </div>
                    </div>

                  <!-- <button type="button" class="btn btn-primary btn-sm" onclick="getLocation()" name="button">Get My Location</button> -->
                    <div class="form-group">
                      <label for="inputAddress">Your Address<span class="required">*</span></label>

                      <input type="text" class="form-control form-control-sm" ondragover=""id="ownPlaces" name="ownPlacesSell" placeholder="(Example-Shri Mahadev Mandir, Ambedkar Nagar, Sadashiv Nagar, Belgaum)">
                      <small id="ownPlaces" class="form-text text-muted">Your address should start with a street name.</small>
                      <div class="Invalid invalidAddress">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCitySell">City/Town/Panchayat/Village<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="ownCitySell" id="ownCity" placeholder="Bangalore" autocomplete="on">
                      <div class="Invalid invalidCity">

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputStateSell">State<span class="required">*</span></label>
                      <input type="text" class="form-control form-control-sm" name="ownStateSell" id="ownState" placeholder="Karnataka">
                      <div class="Invalid invalidState">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDistrictSell">District</label>
                      <input type="text" class="form-control form-control-sm" name="ownDistrictSell" id="ownDistrict" placeholder="Bengalore">
                    </div>
                    <div class="form-group">
                      <label for="ownPinCodeSell">Pincode<span class="required">*</span></label>
                      <input type="number" maxlength="6" size="6" class="form-control form-control-sm" name="ownPinCodeSell" id="ownPinCode" placeholder="530068">
                      <div class="Invalid invalidPincode">
                      </div>
                    </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep2" name="button" style="float:right;">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep2" name="button">Previous</button>
            </div>
              <div id="step3">
                <!-- <div class="card" style="background-color: rgb(206,246,158)">
                  <div class="card-body"> -->
                    <div class="form-group">
                      <label for="sellOrgName">Organisation Name</label>
                      <input type="text" class="form-control form-control-sm" name="sellOrgName" id="sellOrgName" placeholder="Grocery Retailers Pvt Ltd">
                    </div>
                    <div class="form-group">
                      <label for="orgMobNoSell">Organisation Contact Number</label>
                      <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="orgMobNoSell" id="orgMobNoSell" placeholder="Organisation Contact Number">
                    </div>
                    <div class="form-group">
                      <label for="orgAddressSell">Organisation Address</label>
                      <input type="text" class="form-control form-control-sm" name="orgAddressSell" id="orgAddressSell" placeholder="Organisation Address">
                      <small class="form-text text-muted">Your address should start with a street name.</small>
                    </div>
                    <div class="form-group">
                      <label for="inputCity">City/Town/Panchayat/Village</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgCitySell" id="ownOrgCitySell" placeholder="Bangalore">
                    </div>
                    <div class="form-group">
                      <label for="inputState">State</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgStateSell" id="ownOrgStateSell" placeholder="Karnataka">
                    </div>
                    <div class="form-group">
                      <label for="inputDistrict">District</label>
                      <input type="text" class="form-control form-control-sm" name="ownOrgDistrictSell" id="ownOrgDistrictSell" placeholder="Bengalore">
                    </div>
                    <div class="form-group">
                      <label for="inputZip">Pincode</label>
                      <input type="number" maxlength="6" size="6" class="form-control form-control-sm" name="ownOrgPinCodeSell" id="ownOrgPinCodeSell" placeholder="530068">
                    </div>
                    <div class="form-group">
                      <label for="">Web Address</label>
                      <input type="text" class="form-control form-control-sm" name="webAddress" value="" id="webAddress" placeholder="www.example.com">
                    </div>

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="text" class="form-control form-control-sm" name="desc" value="" placeholder="We sell vegetables, fruits etc."></textarea>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="GSTSell">GST Identification Number</label>
                        <input type="text" class="form-control form-control-sm" name="GST" placeholder="15 Digit GSTIN" maxlength="15" size="15">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="PAN">Personal Identification Number(PAN)</label>
                        <input type="text" class="form-control form-control-sm" name="pan" placeholder="10 Digit PAN Number" maxlength="10" size="10">
                      </div>
                    </div>
                    <div class="col-sm">
                      <div class="form-group">
                        <label for="TAN">Tax Deduction and Collection Number (TAN)</label>
                        <input type="text" class="form-control form-control-sm" name="tan" placeholder="10 Digit TAN Number" maxlength="10" size="10">
                      </div>
                    </div>
                  </div>



                  <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
                    <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep3" name="button">Previous</button>
                  </div>
                <!-- </div>
              </div> -->

            </div>



          <!-- </div> -->
          <div id="buyer">
            <div id="step1">
              <div class="row">
                <div class="col-sm">
                  <label for="bName">First Name<span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="Your Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control form-control-sm">
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="BuyMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="BuyMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact">

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">WhatsApp Number</label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="WhatsApp" id="contact1" placeholder="Your number">

                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address(optional)</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <div class="Invalid invalidEmail">

                    </div>
                  </div>
                </div>
              </div>


              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"      class="form-control form-control-sm" id="password" placeholder="Password" >

                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <div class="confPassword" style="color:red;">

                    </div>
                    <small id="" class="form-text text-muted">Password should match.</small>
                  </div>
                </div>

              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep1" name="button" style="float:right;" onclick="return Validate()">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>


            <div id="step2">
              <label for="typeBuyer">What type of Business you hold?<span class="required">*</span></label>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="typeBuyer">Options</label>
                </div>
                <select class="custom-select custom-select-sm" id="typeBuyer" name="typeBuyer">
              <option selected value="0">Choose...</option>
              <optgroup label="Buyer/Consumer">
                <option value="Direct Consumer">Direct Consumer</option>
                <option value="Community Buying Group">Community Buying Group</option>

              </optgroup>

              <optgroup label="Food Provider/Processor">
                <option value="Food Processor">Food Processor</option>
                <option value="Canteen">Canteen</option>
                <option value="Mess">Mess</option>
                <option value="Hotel">Hotel</option>
                <option value="Lunch Home">Lunch Home</option>
                <option value="PG Boarding House">PG Boarding House</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Coffee Shop/Cafe">Coffee Shop/Cafe</option>
                <option value="Caterer">Caterer</option>
                <option value="Food Trucks/Stalls">Food Trucks/Stalls</option>
                <option value="others">Others</option>
              </optgroup>

            </select>
            <div class="Invalid invalidType">

            </div>
              </div>
              <!-- <button type="button" class="btn btn-primary btn-sm" onclick="getLocation()" name="button">Get My Location</button> -->
              <div class="form-group">
                <label for="inputAddress">Your Address<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" ondragover="" id="ownPlaces" name="ownPlacesBuy" placeholder="(Example-Shri Mahadev Mandir, Ambedkar Nagar, Sadashiv Nagar, Belgaum)">
                <small id="ownPlacesBuy" class="form-text text-muted">Your address should start with a street name.</small>
                <div class="Invalid invalidAddress">

                </div>
              </div>
              <div class="form-group">
                <label for="inputCityBuy">City/Town/Panchayat/Village<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="ownCityBuy" id="ownCity" placeholder="Bangalore">
                <div class="Invalid invalidCity">

                </div>
              </div>
              <div class="form-group">
                <label for="inputStateBuy">State<span class="required">*</span></label>
                <input type="text" class="form-control form-control-sm" name="ownStateBuy" id="ownState" placeholder="Karnataka">
                <div class="Invalid invalidState">

                </div>
              </div>
              <div class="form-group">
                <label for="inputDistrictBuy">District</label>
                <input type="text" class="form-control form-control-sm" name="ownDistrictBuy" id="ownDistrict" placeholder="Bengalore">

              </div>
              <div class="form-group">
                <label for="ownPinCodeBuy">Pincode<span class="required">*</span></label>
                <input type="number" class="form-control form-control-sm" name="ownPinCodeBuy" id="ownPinCode" maxlength="6" size="6" placeholder="530068">
                <div class="Invalid invalidPincode">

                </div>
              </div>
              <button type="button" class="btn btn-success btnsize" id="nextstep2" name="button" style="float:right;">Next</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep2" name="button">Previous</button>
            </div>
            <div id="step3">
              <div class="form-group">

                <label for="buyOrgName">Organisation Name</label>
                <input type="text" class="form-control form-control-sm" name="buyOrgName" id="BuyOrgName" placeholder="Grocery Retailers Pvt Ltd">
              </div>
                      <div class="form-group">
                        <label for="orgMobNoBuy">Organisation Contact Number</label>
                        <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="orgMobNoBuy" id="orgMobNoBuy" maxlength="10" size="10" placeholder="Organisation Contact Number">
                      </div>
                      <div class="form-group">
                        <label for="orgAddressBuy">Organisation Address</label>
                        <input type="text" class="form-control form-control-sm" name="orgAddressBuy" id="orgAddressBuy" placeholder="Organisation Address">
                        <small class="form-text text-muted">Your address should start with a street name.</small>
                      </div>
                      <div class="form-group">
                        <label for="inputCity">City/Town/Panchayat/Village</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgCityBuy" id="ownOrgCityBuy" placeholder="Bangalore">
                      </div>
                      <div class="form-group">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgStateBuy" id="ownOrgStateBuy" placeholder="Karnataka">
                      </div>
                      <div class="form-group">
                        <label for="inputDistrict">District</label>
                        <input type="text" class="form-control form-control-sm" name="ownOrgDistrictBuy" id="ownOrgDistrictBuy" placeholder="Bengalore">
                      </div>
                      <div class="form-group">
                        <label for="inputZip">Pincode</label>
                        <input type="text" maxlength="6" size="6" class="form-control form-control-sm" name="ownOrgPinCodeBuy" id="ownOrgPinCodeBuy" placeholder="530068">
                      </div>
                      <div class="form-group">
                        <label for="">Web Address</label>
                        <input type="text" class="form-control form-control-sm" name="webAddress" value="" id="webAddress" placeholder="www.example.com">
                      </div>

                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea type="text" class="form-control form-control-sm" name="desc" value="" placeholder=""></textarea>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="GSTSell">GST Identification Number</label>
                          <input type="text" class="form-control form-control-sm" name="GST" placeholder="15 Digit GSTIN" maxlength="15" size="15">
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="PAN">Personal Identification Number(PAN)</label>
                          <input type="text" class="form-control form-control-sm" name="pan" placeholder="10 Digit PAN Number" maxlength="10" size="10">
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="form-group">
                          <label for="TAN">Tax Deduction and Collection Number (TAN)</label>
                          <input type="text" class="form-control form-control-sm" name="tan" placeholder="10 Digit TAN Number" maxlength="10" size="10">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
                      <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevstep3" name="button">Previous</button>
            </div>


          </div>
          <div id="medicalExp">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="">First Name<span class="required">*</span></label>
                  <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Your name" required />
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="">Last Name<span class="required">*</span></label>
                  <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Your name" required>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="">Area of Specialization<span class="required">*</span></label>
              <input type="text" name="specialization" class="form-control form-control-sm" placeholder="Fitness Expert" value="" required>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">Contact Number<span class="required">*</span></label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="MbNo" id="contact" placeholder="Your number" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">WhatsApp Number</label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="WhatsApp" id="contact" placeholder="Your number" >
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email address" value="">
            </div>
            <div id="passwordParent">
              <div  id="passwordDiv">
                <div class="form-group">
                  <label for="password">Password<span class="required">*</span></label>
                  <input type="password"  name="password"  pattern=".{8,}"    title="Your password should be minimum characters"  class="form-control form-control-sm" id="password" placeholder="Password"  required>
                  <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                </div>

                <div class="form-group">
                  <label for="confPassword">Confirm Password<span class="required">*</span></label>
                  <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" required>
                  <div class="confPassword" style="color:red;">

                  </div>
                  <small id="" class="form-text text-muted">Password should match.</small>
                </div>
              </div>

            </div>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn"  name="button">Previous</button>
            <button type="submit" style="float:right;" class="btn btn-success btnsize" id="submitBtn" onclick="return Validate()" disabled>Continue</button>
          </div>
          <?php include 'aggregator.php'; ?>
          <div id="communOrg">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="">First Name<span class="required">*</span></label>
                  <input type="text" name="firstName" class="form-control form-control-sm" placeholder="Your name" required />
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="">Last Name<span class="required">*</span></label>
                  <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Your name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="">Name of Community Organisation<span class="required">*</span></label>
              <input type="text" name="orgName" class="form-control form-control-sm" placeholder="Eg: Krishi Sampark Kendra" value="" required>
            </div>
            <label for="typeOrg">What type of Community Organisation is it?<span class="required">*</span></label>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="typeSeller">Options</label>
              </div>
              <select class="custom-select custom-select-sm" id="typeOrg" name="typeOrg" required>
            <option disabled selected value>Choose...</option>
            <option value="Krishi Sampark Kendra">Krishi Sampark Kendra</option>
            <option value="Gram Panchayats">Gram Panchayats</option>
            <option value="Agri Business Facilitators">Agri Business Facilitators</option>
            <option value="Agri Development Office">Agri Development Office</option>
            <option value="Local Mandi's">Local Mandi's</option>
            <option value="NGO">NGO</option>
            <option value="Government Agencies/Establishment">Government Agencies/Establishment</option>
            <option value="Private Organisation">Private Organisation</option>
            <option value="Welfare Organisation">Welfare Organisation</option>
            <option value="International Study Group">International Study Group</option>
            <option value="Media">Media</option>
            <option value="Artist or FilmMaker">Artist or FilmMaker</option>
            <option value="Others">Others</option>
          </select>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">Contact Number<span class="required">*</span></label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="MbNo" id="contact" placeholder="Your number" required>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="MbNo">WhatsApp Number</label>
                  <input type="tel" maxlength="10" size="10" pattern=".{10,}"    title="Invalid number entered" class="form-control form-control-sm" name="WhatsApp" id="contact" placeholder="Your number">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email address" value="">
            </div>
            <div id="passwordParent">
              <div  id="passwordDiv">
                <div class="form-group">
                  <label for="password">Password<span class="required">*</span></label>
                  <input type="password"  name="password"  pattern=".{8,}" required   title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" >

                  <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                </div>

                <div class="form-group">
                  <label for="confPassword">Confirm Password<span class="required">*</span></label>
                  <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" required>
                  <div class="confPassword" style="color:red;">

                  </div>
                  <small id="" class="form-text text-muted">Password should match.</small>
                </div>
              </div>

                <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn"  name="button">Previous</button>
<button type="submit" class="btn btn-success btnsize" style="float:right;" id="submitBtn" onclick="return Validate()" disabled>Continue</button>
            </div>
          </div>
        </div>



        <!-- <button type="submit" class="btn btn-success" id="submitBtn" onclick="return Validate()" disabled>Continue</button> -->
      </form>
    </fieldset>

    </div>
</body>

</html>
<script type="text/javascript" src="js/signupJavaScript.js">

</script>

<script type="text/javascript">


</script>
<script type="text/javascript">
$(document).ready(function(e){

    $('.img-check').click(function(e) {
      $('.img-check').not(this).removeClass('check')
      .siblings('input').prop('checked',false);
    $(this).addClass('check')
          .siblings('input').prop('checked',true);
  });

});
</script>
<script type="text/javascript">

// function getLocation() {
//   if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(showPosition);
//   } else {
//       alert("Geolocation is not supported by this browser.");
//   }
// }

// function showPosition(position) {
//
//   $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng="+ position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyBlwmaqHiQlX-HRA-U0-4jPgAhaRkHzTq8",function(data){
//     $("#ownPlaces").val(data.results[0].formatted_address);
//       // alert(data.results[0].formatted_address);
//       $("#ownCity").val(data.results[0].address_components[4].short_name);
//       $("#ownState").val(data.results[0].address_components[5].long_name);
//       $("#ownPinCode").val(data.results[0].address_components[7].long_name);
//       alert(data.results[0].address_components[7].long_name)
//       for(var i in data.results[0].address_components){
//     console.log(data.results[0].address_components[i].short_name);
// }

//   });
//
// }

</script>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confPassword").value;
        if (password != confirmPassword) {
            $(".confPassword").html("Passwords do not match.");
            return false;
        }
        $(".confPassword").html("");
        return true;
    }
// function contact(){
//   contact=$("#contact").val();
//   $.post("duplicationCheck.php",
//   {
//   contact:contact
// },
// function(data, status){
//   if (data!='') {
//     alert("Account already exists");
//     // $(".invalidContact").css('visibility', 'visible');
//     // $(".invalidContact").html("Contact number already Exist");
//     $("#submitBtn").attr("disabled",true);
//     $("#nextstep1").attr("disabled",true);
//
//   }else{
//     // $(".invalidContact").html("");
//     $("#submitBtn").attr("disabled",false);
//     $("#nextstep1").attr("disabled",false);
//
//   }
//
// });
// }

</script>
