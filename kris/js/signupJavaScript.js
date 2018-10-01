seller = $("#seller").detach();
buyer = $("#buyer").detach();
aggregator = $("#aggregator").detach();

medicalExp = $("#medicalExp").detach();
communOrg = $("#communOrg").detach();
passwordDiv = $("#passwordDiv").detach();
$("input[type=radio][name=typeReg]").on("click", function() {
  if ($(this).val() == 0) {
    $("#seller").detach();
    $("#buyer").detach();
    $("#medicalExp").detach();
    $("#communOrg").detach();
    // $("#passwordDiv").detach();
    $("#submitBtn").attr("disabled", true);
  }
  if ($(this).val() == 1) {

    $("#headingChange").hide();
    $("#headingChange2").html("Buyer Details");
    $("#parent").html(buyer);
    $("#step2").hide();
    $("#step3").hide();
    $("#submitBtn").attr("disabled",true);
    $("#contact").on("change",function(){
      contact=$("#contact").val();
      $.post("duplicationCheck.php",
      {
      contact:contact
    },
    function(data, status){

      if (data!='') {
        alert("Account already exists");
        // $(".invalidContact").css('visibility', 'visible');
        // $(".invalidContact").html("Contact number already Exist");
        $("#submitBtn").attr("disabled",true);
        $("#nextstep1").attr("disabled",true);

      }else{
        // $(".invalidContact").html("");
        $("#submitBtn").attr("disabled",false);
        $("#nextstep1").attr("disabled",false);

      }

    });
    });
    $("#prevbtn").on("click",function(){
      window.location.replace("signup2.php");
    });
    $("#nextstep1").on("click",function () {

      if($("#firstName").val()==''){
        $(".invalidFirstName").css('visibility', 'visible');
      }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
        $(".invalidContact").css('visibility', 'visible');
        $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

      }else if($("#lastName").val()==''){
        $(".invalidLastName").css('visibility', 'visible');
      }else if (!Validate()) {

      }else if($("#password").val()=='' || $("#password").val().length<8 ){
        $(".invalidPassword").css('visibility', 'visible');
        $(".invalidPassword").html("Enter a valid password using above rules");
      }
      else{
        $("#step1").hide();
        $("#step2").show();
      }
    });
    $("#prevbtn").on("click",function () {
      $("#step1").show();
      $("#step2").hide();
    });
    $("#nextstep2").on("click",function () {
      if ($("#typeBuyer").val()==0) {
        $(".invalidType").css('visibility', 'visible');
        $(".invalidType").html("Choose a seller type");
      }else if ($("#ownPlaces").val()=='') {
        $(".invalidAddress").css('visibility', 'visible');
        $(".invalidAddress").html("Please enter your address");
      }else if ($("#ownCity").val()=='') {
        $(".invalidCity").css('visibility', 'visible');
        $(".invalidCity").html("Your city is required");
      }else if ($("#ownState").val()=='') {
        $(".invalidState").css('visibility', 'visible');
        $(".invalidState").html("Your state is required");
      }else if ($("#ownPinCode").val()=='') {
        $(".invalidPincode").css('visibility', 'visible');
        $(".invalidPincode").html("Your Pincode is required");
      }else {
        $("#submitBtn").attr("disabled",false);

        $("#step2").hide();
        $("#step3").show();
      }
    });
    $("#prevstep2").on("click",function(){
      $("#step2").hide();
      $("#step1").show();
    });
    $("#prevstep3").on("click",function(){
      $("#step3").hide();
      $("#step2").show();
    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);
    $.getScript("js/signup.js",function () {
      var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));


    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);
  }
  if ($(this).val() == 5) {

    $("#headingChange").hide();
    $("#headingChange2").html("Aggregator details");
    $("#parent").html(aggregator);
    $("#step2").hide();
    $("#step3").hide();
    $("#submitBtn").attr("disabled",true);

    $("#contact").on("change",function(){
      contact=$("#contact").val();
      $.post("duplicationCheck.php",
      {
      contact:contact
    },
    function(data, status){

      if (data!='') {
        alert("Account already exists");
        // $(".invalidContact").css('visibility', 'visible');
        // $(".invalidContact").html("Contact number already Exist");
        $("#submitBtn").attr("disabled",true);
        $("#nextstep1").attr("disabled",true);

      }else{
        // $(".invalidContact").html("");
        $("#submitBtn").attr("disabled",false);
        $("#nextstep1").attr("disabled",false);

      }

    });
    });
    $("#prevbtn").on("click",function(){
      window.location.replace("signup2.php");
    });
    $("#nextstep1").on("click",function () {
      if($("#firstName").val()==''){
        $(".invalidFirstName").css('visibility', 'visible');
      }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
        $(".invalidContact").css('visibility', 'visible');
        $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

      }else if($("#lastName").val()==''){
        $(".invalidLastName").css('visibility', 'visible');
      }else if (!Validate()) {

      }else if($("#password").val()=='' || $("#password").val().length<8 ){
        $(".invalidPassword").css('visibility', 'visible');
        $(".invalidPassword").html("Enter a valid password using above rules");
      }
      else{
        $("#step1").hide();
        $("#step2").show();
      }
    });
    $("#prevbtn").on("click",function () {
      $("#step1").show();
      $("#step2").hide();
    });
    $("#nextstep2").on("click",function () {
      if ($("#typeBuyer").val()==0) {
        $(".invalidType").css('visibility', 'visible');
        $(".invalidType").html("Choose a Business type");
      }else if ($("#ownPlaces").val()=='') {
        $(".invalidAddress").css('visibility', 'visible');
        $(".invalidAddress").html("Please enter your address");
      }else if ($("#ownCity").val()=='') {
        $(".invalidCity").css('visibility', 'visible');
        $(".invalidCity").html("Your city is required");
      }else if ($("#ownState").val()=='') {
        $(".invalidState").css('visibility', 'visible');
        $(".invalidState").html("Your state is required");
      }else if ($("#ownPinCode").val()=='') {
        $(".invalidPincode").css('visibility', 'visible');
        $(".invalidPincode").html("Your Pincode is required");
      }else {
        $("#submitBtn").attr("disabled",false);

        $("#step2").hide();
        $("#step3").show();
      }
    });
    $("#prevstep2").on("click",function(){
      $("#step2").hide();
      $("#step1").show();
    });
    $("#prevstep3").on("click",function(){
      $("#step3").hide();
      $("#step2").show();
    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);
    $.getScript("js/signup.js",function () {
      var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));

    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);
  }
  if ($(this).val() == 2) {

    $("#headingChange").hide();
    $("#headingChange2").html("Seller Details");
    $("#parent").html(seller);
    $("#step2").hide();
    $("#step3").hide();
    $("#submitBtn").attr("disabled",true);

    $("#contact").on("change",function(){
      contact=$("#contact").val();
      $.post("duplicationCheck.php",
      {
      contact:contact
    },
    function(data, status){
      if (data!='') {
        alert("Account already exists");
        // $(".invalidContact").css('visibility', 'visible');
        // $(".invalidContact").html("Contact number already Exist");
        $("#submitBtn").attr("disabled",true);
        $("#nextstep1").attr("disabled",true);

      }else{
        // $(".invalidContact").html("");
        $("#submitBtn").attr("disabled",false);
        $("#nextstep1").attr("disabled",false);

      }

    });
    });
    $("#prevbtn").on("click",function(){
      window.location.replace("signup2.php");
    });
    $("#nextstep1").on("click",function () {


      if($("#firstName").val()==''){
        $(".invalidFirstName").css('visibility', 'visible');
      }else if ($("#contact").val()=='' || $("#contact").val().length<10 || $("#contact").val().length>10) {
        $(".invalidContact").css('visibility', 'visible');
        $(".invalidContact").html("Enter 10 Digit Contact number("+$("#contact").val().length+" provided)");

      }else if($("#lastName").val()==''){
        $(".invalidLastName").css('visibility', 'visible');
      }else if (!Validate()) {

      }else if($("#password").val()=='' || $("#password").val().length<8 ){
        $(".invalidPassword").css('visibility', 'visible');
        $(".invalidPassword").html("Enter a valid password using above rules");
      }
      else{
        $("#step1").hide();
        $("#step2").show();
      }
    });

    $("#nextstep2").on("click",function () {
      if ($("#typeSeller").val()==0) {
        $(".invalidType").css('visibility', 'visible');
        $(".invalidType").html("Choose a seller type");
      }else if ($("#ownPlaces").val()=='') {
        $(".invalidAddress").css('visibility', 'visible');
        $(".invalidAddress").html("Please enter your address");
      }else if ($("#ownCity").val()=='') {
        $(".invalidCity").css('visibility', 'visible');
        $(".invalidCity").html("Your city is required");
      }else if ($("#ownState").val()=='') {
        $(".invalidState").css('visibility', 'visible');
        $(".invalidState").html("Your state is required");
      }else if ($("#ownPinCode").val()=='') {
        $(".invalidPincode").css('visibility', 'visible');
        $(".invalidPincode").html("Your Pincode is required");
      }else {
        $("#submitBtn").attr("disabled",false);

        $("#step2").hide();
        $("#step3").show();
      }
    });

    $("#prevbtn").on("click",function () {
      $("#step1").show();
      $("#step2").hide();
    });

    $("#prevstep2").on("click",function(){
      $("#step2").hide();
      $("#step1").show();
    });
    $("#prevstep3").on("click",function(){
      $("#step3").hide();
      $("#step2").show();
    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);
    $.getScript("js/signup.js",function () {
      var places = new google.maps.places.Autocomplete(document.getElementById('ownPlaces'));

    });
  }
  if ($(this).val() == 3) {
    $("#headingChange").hide();
    $("#headingChange2").html("Wellness Advisor details");
    $("#parent").html(medicalExp);
    $("#prevbtn").on("click",function(){
      window.location.replace("signup2.php");
    });
    $("#contact").on("change",function(){
      contact=$("#contact").val();
      $.post("duplicationCheck.php",
      {
      contact:contact
    },
    function(data, status){
      if (data!='') {
        alert("Account already exists");
        // $(".invalidContact").css('visibility', 'visible');
        // $(".invalidContact").html("Contact number already Exist");
        $("#submitBtn").attr("disabled",true);
        $("#nextstep1").attr("disabled",true);

      }else{
        // $(".invalidContact").html("");
        $("#submitBtn").attr("disabled",false);
        $("#nextstep1").attr("disabled",false);

      }

    });
    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);

  }
  if ($(this).val() == 4) {
    $("#headingChange").hide();
    $("#headingChange2").html("Community Details");
    $("#parent").html(communOrg);
    $("#prevbtn").on("click",function(){
      window.location.replace("signup2.php");
    });
    $("#contact").on("change",function(){
      contact=$("#contact").val();
      $.post("duplicationCheck.php",
      {
      contact:contact
    },
    function(data, status){
      if (data!='') {
        alert("Account already exists");
        // $(".invalidContact").css('visibility', 'visible');
        // $(".invalidContact").html("Contact number already Exist");
        $("#submitBtn").attr("disabled",true);
        $("#nextstep1").attr("disabled",true);

      }else{
        // $(".invalidContact").html("");
        $("#submitBtn").attr("disabled",false);
        $("#nextstep1").attr("disabled",false);

      }

    });
    });
    // $("#passwordParent").html(passwordDiv);
    $("#submitBtn").attr("disabled", false);

  }
});
