
<?php include 'header.php'; ?>
<body>
 
<h1 class="pass-title">Password Generator</h1>
<div class="pass-gen" id="pass-gen">
	<a href="#" class="button" id="refresh">Generate</a>
	<p id="pass-Container"></p>
</div>
  
 <script>
  $(document).ready(function() {
    // add click event to link
    $("#refresh").click(function() {
    // pass the value of the new password
      $("#pass-Container").load("passgen.php");
      return false;
    });
  });
 </script>
</body>
