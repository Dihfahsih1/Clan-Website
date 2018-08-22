
<html>
<head>
<metahttp-equiv="Content-Type"content="text/html; charset=utf-8"/>

<title>Comment </title>

</head>

<body>

<center>
 	
<div  style=" width: 44%; float:right; background: #ecdede; margin-right: 4px;" >
	<i><b>Please leave us a comment now</b></i>
 <form action="commentindex.php"method="POST" id="book" onsubmit="myFunction()">

  <div class="w3-row w3-section">
    <input class="w3-input w3-border" name="name" id="lname" type="text" placeholder="Your full name"  style="width:60%; ";required><br>
    <textarea id="subject" name="comment" placeholder="Type Your Comment Here.." style="height:90px; width:60%; " required></textarea><br>
    <button  style="width:13%; float: right; margin-right: 20%; padding-top: 2px" name="submit" type="submit" value="submit">comment</button>
  </div>
 </form>
</div>
      <script>
function myFunction() {
    alert("YOUR MESSAGE WAS SENT");
}
</script>
</body>
</html>