<!DOCTYPE html>
<html>
<head>
<title>Editing</title>

<!--Independent-->
<link rel="stylesheet" href="css/main.css">

<!--Bootstrap-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<!--Loading Jquery lib-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!--Bootstrap Javascript-->
<script src="bootstrap/js/bootstrap.js"></script>

<!--custom java script-->
<script src="js/customize.js"></script>

<!--Google Translator-->
<meta name="google-translate-customization" content="d88253d9dfabef73-b01da06bdf4204fa-g0f518b626a166579-1f"></meta>


</head>

<body>


<!---Cutomization settings-->
<nav id="control_panel">
<h3>Control Panel</h3>
<form action="" method="" onsumbit="" id="settingsform">
<div class="settings">

<!--Header Text & Color-->
<div id="settings_header">

<h4 class="moreenabled"><u> Header Settings</u></h4><span class="moreicon"><i class="icon-search icon-plus" id="innerH"></i>(more)</span>
<br><br><input id="tf_header" type="text">

<!--Inner Settings-->
<div class="settingsinner">
<p> - Header Font</p>
<select id ="select_header_fonts">
	<option selected>Times New Roman</option>
	<option> Serif </option>
    <option> Arial </option>
    <option> Sans-Serif </option>                                  
    <option> Tahoma </option>
    <option> Verdana </option>
    <option> Lucida Sans Unicode </option>   
</select>

<p> - Header Color</p>
<input type="color" value="#000000" id="cp_header">
</div>
<!--/--->
</div>

<hr>

<!--Description Text & Color-->
<div id="settings_description">

<h4 class="moreenabled"><u>Description Settings</u></h4><span class="moreicon"><i class="icon-search icon-plus" id="innerHD"></i>(more)</span>
<br><br><input id="tf_descript" type="text">

<!--Inner Settings-->
<div class="settingsinner">
<p> - Description Font</p>
<select id ="select_descript_fonts">
	<option selected> Serif </option>
	<option>Times New Roman</option>
    <option> Arial </option>
    <option> Sans-Serif </option>                                  
    <option> Tahoma </option>
    <option> Verdana </option>
    <option> Lucida Sans Unicode </option>   
</select>

<p> - Description Color</p>
<input type="color" value="#CCCCCC" id="cp_descript">
</div>
<!--/--->
</div>

<hr>

<!--Other Text & Color-->
<div id="other">
<h4><u>Other Settings</u></h4>
<p>Background Color</p>
<input id="bgcolor" type="color" value="#FFFFFF">

<p>Text Color</p>
<input id="cp_othertext" type="color" value="#000000">

<p>Text Font</p>
<select id ="select_othertext_fonts">
	<option selected> Serif </option>
	<option>Times New Roman</option>
    <option> Arial </option>
    <option> Sans-Serif </option>                                  
    <option> Tahoma </option>
    <option> Verdana </option>
    <option> Lucida Sans Unicode </option>
</select>
</div>
<!--/-->
</div>

<!--Submit above changes-->
<br><input type="submit" value="Submit All" name="submit">
<hr>
</form>

<!-- Add a new menu item -->
<h4><u>Add Top Menu Button</u></h4>
<p>Name <br>
<input type="text" name="" id="bt_label" placeholder="Home"></p>
<p>href <br>
<input type="text" name="" id="bt_href" placeholder="http://localhost"></p>
<input type="button" id="add_submit" value="Add">
<!--/-->

<hr>

<!-- Select a language -->
<h4><u>Language</u></h4>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--/-->

<hr>



<!-- Button to hide the control panel -->
<input type="button" id="cp_hide" value="Hide Control Pannel">
<!--/-->

</nav>




<div class="container" id="mcontainer">
<header>
	<div id="top">
  			<div id="tlogo">
    			<h1 id="h_title">Directive Unknown Productions</h1>
    			<h4 id="h_descript">This is a description</h4>
    		</div>
    		<div class="navbar-wrapper">
      			<div class="containerx">
        			<div class="navbar navbar-inverse">
          				<div class="navbar-inner">
            				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              					<span class="icon-bar"></span>
              					<span class="icon-bar"></span>
              					<span class="icon-bar"></span>
            				</button>
            				<div class="nav-collapse collapse">
              					<ul class="nav" id="topmenu_sortable">
                					<li class="active" id="draggable"><a href="index.php">Home</a></li>
                					<li id="draggable"><a href="#">About</a></li>
                					<li id="draggable"><a href="#">Contact</a></li>
                					<li class="dropdown" id="draggable">
                  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                  					<ul class="dropdown-menu">
                    					<li><a href="#">Login</a></li>
                    					<li><a href="#">Register</a></li>
                    					<?php if(!empty($_SESSION['LoggedIn']) && ($_SESSION['LoggedIn']) == 1){echo "<li><a href=\"#\">Logout</a></li>";} ?>
                  					</ul>
                				</li>
              				</ul>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
    	</div>
</header>


<section id="smain">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vestibulum felis. Quisque convallis, felis sit amet adipiscing viverra, mi erat adipiscing augue, vel ultrices magna nulla eget ipsum. Etiam eros magna, egestas ac augue ac, rhoncus rutrum nibh. Curabitur a iaculis lectus. Maecenas interdum laoreet dapibus. Suspendisse scelerisque gravida ultrices. Integer imperdiet ultricies consequat. Maecenas eu justo aliquam, tristique velit vitae, pharetra justo.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vestibulum felis. Quisque convallis, felis sit amet adipiscing viverra, mi erat adipiscing augue, vel ultrices magna nulla eget ipsum. Etiam eros magna, egestas ac augue ac, rhoncus rutrum nibh. Curabitur a iaculis lectus. Maecenas interdum laoreet dapibus. Suspendisse scelerisque gravida ultrices. Integer imperdiet ultricies consequat. Maecenas eu justo aliquam, tristique velit vitae, pharetra justo.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vestibulum felis. Quisque convallis, felis sit amet adipiscing viverra, mi erat adipiscing augue, vel ultrices magna nulla eget ipsum. Etiam eros magna, egestas ac augue ac, rhoncus rutrum nibh. Curabitur a iaculis lectus. Maecenas interdum laoreet dapibus. Suspendisse scelerisque gravida ultrices. Integer imperdiet ultricies consequat. Maecenas eu justo aliquam, tristique velit vitae, pharetra justo.</p>

<div class="toggleme">
<textarea id="p_textarea" placeholder="Lorem ipsum dolor sit amet... You can also add html code inside this box">
</textarea>
<input type="button" id="add_p" value="Add">
</div>

</section>
<footer><p> &copy 2013 by Alain Edwards.</p></footer>
<input type="button" value="edit" id="cp_show">

</div>

</body>

</html>