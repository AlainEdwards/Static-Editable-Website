$(document).ready(function(){

//Hardcode elements to be changed
var h_title = document.getElementById("h_title");
var h_description = document.getElementById("h_descript");
var para = document.getElementsByTagName("p")[0];

//Customize pannel elements
var tf_htitle = document.getElementById("tf_header");
var tf_hdescription = document.getElementById("tf_descript");
var cp_htitle = document.getElementById("cp_header");
var cp_hdescription = document.getElementById("cp_descript");
var cp_othertext = document.getElementById("cp_othertext");

//Transferring hardcoded settings to the customization panel.
//Text
tf_htitle.value = h_title.innerHTML;
tf_hdescription.value = h_description.innerHTML;

//-------------------------------------------------------------------------
	
	//Display inner settings for that object
	$("#innerH").click(function(){
		$("#settings_header .settingsinner").toggle();
	});
	
	//Display inner settings for that object
	$("#innerHD").click(function(){
		$("#settings_description .settingsinner").toggle();
	});
	
	//Hide the control panel 
	$("#cp_hide").click(function(){
	
		$("#control_panel").hide();
		//centers the container, now that there is no control panel
		$(".container").css("padding-left", "0px");
		//$(".container").css("margin-left", "auto");
		//$(".container").css("margin-right", "auto");
		$("#cp_show").show();  //shows the edit button, so you can reopen the control panel
		$(".toggleme").hide(); //hides the other settings as well
	});
	
	//Show the control panel
	$("#cp_show").click(function(){
		$(this).hide();
		$(".container").css("padding-left", "275px");
		$("#control_panel").show();
		$(".toggleme").show();
	});
	
	//When submitting the changes 
	$("#settingsform").submit(function(event){
	
		//Setting new text values
		h_title.innerHTML = tf_htitle.value;
		h_description.innerHTML = tf_hdescription.value;
	
	
		//Setting new color values
		$("p").css("color", $("#cp_othertext").val());
		$("#mcontainer").css("background-color", $("#bgcolor").val());
		$("#h_title").css("color", $("#cp_header").val() );
		$("#h_descript").css("color", $("#cp_descript").val() );
		

		//Setting new font values
		h_title.style.fontFamily = document.getElementById("select_header_fonts").value;
		h_description.style.fontFamily = document.getElementById("select_descript_fonts").value;
		$("p").css("font-family", $("#select_othertext_fonts").val());
	
		event.preventDefault();
	});
	
	//Adding new top menu options
  	$("#add_submit").click(function(){
	var bt_name = document.getElementById("bt_label");
	var bt_href = document.getElementById("bt_href");         
	
	var newbutton = "<li id=\"draggable\"><a href=\"" + bt_href.value + "\">" + bt_name.value + "</a></li>"
	
	$("#topmenu_sortable").append(newbutton); 
	                                 
	bt_name.value = "";
	bt_href.value = "";
	});	
	
	
	//Adding new paragraph to the main section
	$("#add_p").click(function() {
	
		var newParagraph = document.getElementById("p_textarea");
		
		$("#smain p").last().append("<br><br><p>" + newParagraph.value + "</p>");
		
		newParagraph.value = "";
	
	});
	
  	
  	
});