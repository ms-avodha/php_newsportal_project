// *******************Validation for Add News Form ********************

$("form[name='addnews']").validate({
    rules: {
        topic: "required",
        content: "required",
        date: "required",
    },

        // *******Specify validation error messages********

    messages: {
        topic: "<div class='text-red'>Required Field</div>",
        content: "<div class='text-red'>Required Field</div>",
        date: "<div class='text-red'>Required Field</div>",   
    }
  
  
});

