// Function to select all the checkbox.
function fnSelectAll(tblCompany,chkAll)
	{
		var chkAllID = document.getElementById(chkAll);
		var tblID = document.getElementById(tblCompany);		
		var arrInputTags = tblID.getElementsByTagName('input');
		for(var intCounter = 0;intCounter < arrInputTags.length; intCounter++)
		{
			if(arrInputTags[intCounter].type == "checkbox")
				arrInputTags[intCounter].checked = chkAllID.checked;
		}
	}

//Function to validate check box is selected or not for Deletion.	
function fnValidateDeleteCheck(tblCompany)
{ 

	var blnStatus = false;
	var tblID = document.getElementById(tblCompany);		
	var arrInputTags = tblID.getElementsByTagName('input');
	for(var intCounter = 0;intCounter < arrInputTags.length; intCounter++)
	{
		if(arrInputTags[intCounter].type == "checkbox" && arrInputTags[intCounter].checked)
		{
			blnStatus = true;
			break;
		}	
	}
	
	if(!blnStatus)
	{
		alert('Please select at least one checkbox.');
		return false;
	}
	else if(confirm('Are you sure to delete the record(s)') == true)
	{
		return true;
	}
	return false;
}
