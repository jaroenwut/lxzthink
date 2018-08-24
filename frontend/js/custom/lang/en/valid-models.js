var Script = function () {
    $().ready(function() {
		$("#frm").validate({
			rules: {
				tbxmodelsname:{
							required: true		
					   } 
			},
			messages: {
				tbxmodelsname:{
							required: "Name is required."
					   }				
			}
		});			
    });

}();