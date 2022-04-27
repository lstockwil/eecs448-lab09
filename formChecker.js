function validate() 
    {
        s = document.body.getElementsByTagName("select")[0];
 
        if(s.value == "none")
        {
            alert("Error: Please select a shipping type!");
            return false;
        }
        else
        {
        	alert("Order succesfully submitted!")
        }
        
    }
