/*
Template Name: Monster Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
      $(".copyimg").click(function(){
           $.toast({
            heading: 'IMAGE COPIED!',
            text: 'Paste in your post image to use',
            position: 'top-right',
            loaderBg:'#fff',
            icon: 'success',
            hideAfter: 1000, 
            stack: 6
          });

     });

});
          
