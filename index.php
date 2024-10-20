<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
<head>
  <title>Signature Generator</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.js"></script>
	<script src="js/global.js"></script>
</head>
<body>
  <div id="container">
    <h1>Email Signature Generator</h1>
    <form method="get" action="sig.php">
      <fieldset>
        <div class="row">
          <label for="e_topper">Your Topper</label>
          <select name="e_topper" id="e_topper">
            <option value="ariel">Ariel/Princess</option>
            <option value="babyshark">Baby Shark</option>
            <option value="batman">Batman</option>
            <option value="belle">Belle/Princess</option>
			<option value="blackpanther">Black Panther</option>
			<option value="bluey">Bluey</option>
            <option value="bobbear">Bob Minion with Bear</option>
            <option value="buzz">Buzz Lightyear</option>
            <option value="captainam">Captain America</option>
            <option value="chase">Chase/PAW Patrol</option>
            <option value="cheerbear">Cheer Bear/Care Bear</option>
            <option value="curiousgeorge">Curious George</option>
            <option value="danieltiger">Daniel Tiger</option>
            <option value="djcatnip">DJ Catnip</option>
            <option value="elsa">Elsa/Frozen</option>
            <option value="hulk">Incredible Hulk</option>
            <option value="ironman">Iron Man</option>
			<option value="isabella">Isabella/Encanto</option>
            <option value="jessie">Jessie/Toy Story</option>
            <option value="mcqueen">Lightning McQueen</option>
            <option value="mickey">Mickey Mouse</option>
            <option value="minnie">Minnie Mouse</option>
			<option value="mirabel">Mirabel/Encanto</option>
            <option value="moana">Moana</option>
            <option value="peppa">Peppa Pig</option>
            <option value="rainbowdash">Rainbow Dash/MLP</option>
            <option value="scooby">Scooby-Doo</option>
            <option value="skye">Skye/PAW Patrol</option>
            <option value="sonic">Sonic the Hedgehog</option>
            <option value="spiderman">Spider-Man</option>
            <option value="spongebob">SpongeBob</option>
            <option value="sulley">Sulley/Monsters Inc.</option>
            <option value="sunny">Sunny/MLP</option>
            <option value="superman">Superman</option>
            <option value="tiana">Tiana/Princess</option>batman_om
            <option value="trex">T.Rex/Jurassic World</option>
            <option value="woody">Woody</option>
             
          </select>
        </div>
        <div class="row">
          <label for="e_name">Full Name</label>
          <input type="text" name="e_name" id="e_name" placeholder="Your Name" />
        </div>
        <div class="row">
          <label for="e_title">Title</label>
          <input type="text" name="e_title" id="e_title" placeholder="Your Title" />
        </div>
        <div class="row">
          <label for="e_phone">Direct Number</label>
          <input type="text" name="e_phone" id="e_phone" placeholder="(xxx) xxx.xxxx" />
        </div>
<!--
        <div class="row">
          <label for="e_cell">Cell Number (optional)</label>
          <input type="text" name="e_cell" id="e_cell" placeholder="(xxx) xxx.xxxx" />
        </div>
-->
        <div class="row">
          <label for="e_email">Email</label>
          <input type="text" name="e_email" id="e_email" placeholder="you@good2grow.com" />
        </div>
        <button type="submit">Submit</button>
      </fieldset>
    </form>
    <h2>Design: click into iframe and select all + copy</h2>
    <iframe id="iframe_holder"></iframe>
    <h2>Code</h2>
    <div id="code_holder"></div>
  </div>
</body>
</html>