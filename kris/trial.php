<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript">
function mailIt() {
var elms=document.forms[0].elements;


document.forms[0].action='mailto:rohanabk123@gmail.com?cc='+elms.email.value+'&subject=Feedback form&body='+ elms.comment.value;
document.forms[0].submit();
}
</script>

<style type="text/css">
label {display:block;}
</style>

</head>
<body>
<form action="#" method="post" onsubmit="mailIt(); return false;" enctype="text/plain">
<div>
    <label>Your name: <input type="text" name="name"></label>
    <label>Your email: <input type="text" name="email"></label>
    <label>Your comment: <textarea name="comment"></textarea></label>
    <button type="submit">submit</button>
</div>
</form>
</body>
</html>

<a href="mailto:rohanabk123@gmail.com?subject=Big%20News&body=Body-goes-here">Email Us</a>