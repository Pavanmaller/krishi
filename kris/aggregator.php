<div id="aggregator">
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
    <button type="button" class="btn btn-success" id="nextstep1" name="button" style="float:right;" onclick="return Validate()">Next</button>
    <button type="button" style="float:left;" class="btn btn-success" id="prevbtn" name="button">Previous</button>
  </div>


  <div id="step2">
    <label for="typeBuyer">What type of Business you hold?<span class="required">*</span></label>
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="typeBuyer">Options</label>
      </div>
      <select class="custom-select custom-select-sm" id="typeBuyer" name="typeBuyer">
    <option selected value="0">Choose...</option>

      <option value="Retailers">Retailers</option>
      <option value="Wholesaler">Wholesaler</option>
      <option value="Expoter">Expoter</option>


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
      <input type="number" class="form-control form-control-sm" name="ownPinCodeBuy" id="ownPinCode" maxlength="6" size="6" placeholder="560003">
      <div class="Invalid invalidPincode">

      </div>
    </div>
    <button type="button" class="btn btn-success" id="nextstep2" name="button" style="float:right;">Next</button>
    <button type="button" style="float:left;" class="btn btn-success" id="prevstep2" name="button">Previous</button>
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
              <input type="text" maxlength="6" size="6" class="form-control form-control-sm" name="ownOrgPinCodeBuy" id="ownOrgPinCodeBuy" placeholder="560003">
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

          <button type="submit" class="btn btn-success" id="submitBtn" style="float:right;"  disabled>Continue</button>
            <button type="button" style="float:left;" class="btn btn-success" id="prevstep3" name="button">Previous</button>
  </div>


</div>
