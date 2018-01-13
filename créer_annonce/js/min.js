var select= document.getElementById("menu_sel");
var myp= document.getElementById("myp");
var choix;

//créer tableau de sous catègorie mobile
var s_categorie_mobile = ["Smartphone","Tablette"];

var bout_mobile = document.getElementById("mobile");

bout_mobile.addEventListener('click', function() {
    choix=1;
    select.setAttribute("style", "visibility:visible;");
    myp.setAttribute("style", "visibility:visible;");

     if(select.length>0)
    {
    	
    	 while(select.length>0)
         {
          
    	  select.remove(select.length-1);
         }
    }
   
    
	for (var i=0;i<2;i++)
     {
		var option=document.createElement("OPTION");
        option.text=s_categorie_mobile[i];
        option.setAttribute("id","option"+i);
        option.style.color="rgba(60, 62, 60, 0.79)";
        option.style.fontSize="15px";
        select.appendChild(option); 
     }


})

//le cas pour voiture //

var bout_voiture = document.getElementById("voiture");
var s_categorie_voiture = ["Automobile","Fourgon"];

bout_voiture.addEventListener('click', function() {
choix=2;
    select.setAttribute("style", "visibility:visible;");
    if(select.length>0)
    {
    	
    	 while(select.length>0)
         {
          
    	  select.remove(select.length-1);
         }
    }
   
    myp.setAttribute("style", "visibility:visible;");
    
	for (var i=0;i<2;i++)
     {
		var option=document.createElement("OPTION");
        option.text=s_categorie_voiture[i];
        option.setAttribute("id","option"+i);
        option.style.color="rgba(60, 62, 60, 0.79)";
        option.style.fontSize="15px";
        select.appendChild(option); 
     }


})

//le cas pour vétement //

var bout_vetement = document.getElementById("vetement");
var s_categorie_vetement = ["Mariage","Prét à porter homme"];

bout_vetement.addEventListener('click', function() {
   choix=3;
    select.setAttribute("style", "visibility:visible;");
    if(select.length>0)
    {
    	
    	 while(select.length>0)
         {
          
    	  select.remove(select.length-1);
         }
    }
   
    myp.setAttribute("style", "visibility:visible;");
    
	for (var i=0;i<2;i++)
     {
		var option=document.createElement("OPTION");
        option.text=s_categorie_vetement[i];
        option.setAttribute("id","option"+i);
        select.appendChild(option); 
     }


})

// bouton suivant //
var bout_suivant = document.getElementById("bouton_suivant");


bout_suivant.addEventListener('click', function() {

var selected = select.options[select.selectedIndex].text;
var test=1;
console.log(test++);
console.log(test);
switch (choix) {
	case 1:
	window.location = "page2-2.php?categorie=mobile&s_categorie="+selected;
	break;

	case 2:
	window.location = "page2-2.php?categorie=voiture&s_categorie="+selected;
	break;

	case 3:
	window.location = "page2-2.php?categorie=vetement&s_categorie="+selected;
	break;

    default:
	window.location = "page2-2.php?categorie=mobile&s_categorie="+selected;
	break;
}



})









