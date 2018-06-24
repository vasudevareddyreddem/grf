
<script>
onsubmit="return checkvalidation();"


onchange="get_gournals(this.value);"


function checkvalidation(){
	  var id=$('#journal').val();
	  if(id==''){
		  alert('Please select at least one Journal');
		 return false; 
	  }
  }