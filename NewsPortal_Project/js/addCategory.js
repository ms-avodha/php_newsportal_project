// *******************Validation for Add Category Form ********************

$("form[name='addcategory']").validate({
    rules: {
        category_name: "required",
    },

        // *******Specify validation error messages********

    messages: {
        category: "<div class='text-red'>Required Field</div>",
    }
  
  
});