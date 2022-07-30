// *******************Validation for Add Sub Category Form ********************

$("form[name='addSubcategory']").validate({
    rules: {
        sub_name: "required",
    },

        // *******Specify validation error messages********

    messages: {
        category: "<div class='text-red'>Required Field</div>",
    }
  
  
});