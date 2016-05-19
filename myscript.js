function required()  
	{  
		var empt = document.forms["form1"]["login"].value;  
		if (empt == "")  {  
			alert("You must entered login");  
			return false;  
		}else{  
			alert('Ваша заявка принята.Можете приступать к работе');  
			return true;   
			}  
	}  



function required2()  
	{  
		var empt = document.forms["form2"]["login"].value;  
		if (empt == "")  {  
			alert("You must entered login");  
			return false;  
		}else{  
			alert('Добро пожаловать на Make it easy');  
			return true;   
			}  
	}  