
   var swiper = new Swiper('.blog-slider', {
       spaceBetween: 30,
       effect: 'fade',
       loop: true,
       mousewheel:false,
       // autoHeight: true,
       pagination: {
           el: '.blog-slider__pagination',
           clickable: true,
       }
   });
   
   $('.tab-links li').on('click', function () {
       var swiper = new Swiper('.blog-slider', {
           spaceBetween: 30,
           effect: 'fade',
           loop: true,
           mousewheel:false,
           
           // autoHeight: true,
           pagination: {
               el: '.blog-slider__pagination',
               clickable: true,
           }
       });
   
   });

   jQuery('.tabs.animated-slide-2 .tab-links a').on('click', function(e) {
       
   var currentAttrValue = jQuery(this).attr('href');
   
   // Show/Hide Tabs
   jQuery('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);
   
   // Change/remove current tab to active
   jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
   
   e.preventDefault();
   });

   //TAB ANIMATAION SLIDE
   
   jQuery('.nav.nav-tabs a').on('click', function(e) {
       var currentAttrValue = jQuery(this).attr('href');
   
       // Show/Hide Tabs
       jQuery('.beefup' + currentAttrValue).slideDown(400).siblings().slideUp(400);
   
       // Change/remove current tab to active
       jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
   
       e.preventDefault();
   });
       

   AOS.init({ once: 'true'
   	});



   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
   (function(){
   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
   s1.async=true;
   s1.src='https://embed.tawk.to/62daa91154f06e12d88ad200/1g8j28s44';
   s1.charset='UTF-8';
   s1.setAttribute('crossorigin','*');
   s0.parentNode.insertBefore(s1,s0);
   })();



// career Form
$(document).ready(function(){
   $("#applyForm").on('submit', function(e) {
      e.preventDefault();

 var applyName = $('#apply-name').val();
  var applyPhone =$('#apply-phone').val();
  var applyEmail =$('#apply-email').val();
  var subject =$('#apply-subject').val();
  var formFile =$('#formFile').val();

   var formData = new FormData();
   formData.append('applyName', applyName);
   formData.append('applyPhone', applyPhone);
   formData.append('applyEmail', applyEmail);
   formData.append('subject', subject);

   formData.append('careerForm', "careerForm");
   // Attach file
   formData.append('formFile', $('#formFile')[0].files[0]); 
   var formURL = 'https://horsetechanalytics.com/function.php';

   var regex = new RegExp(/^[0][1-9]\d{9}$|^[1-9]\d{9}$/);

  if(applyName === '' || applyName === null){
      $("#apply-name-error").html("Name is required !")
      $("#apply-email-error").html("")
      $("#apply-phone-error").html("");
      $("#apply-Designation-error").html("");
      return false;
  } 
  else if(applyEmail===''|| applyEmail===null){
     $("#apply-name-error").html("")
      $("#apply-phone-error").html("");
      $("#apply-Designation-error").html("");
     $("#apply-email-error").html("Email is required !")

     return false;
   }
   else if(applyPhone ==='' || applyPhone===null)
   {
      $("#apply-name-error").html("")
      $("#apply-email-error").html("")
      $("#apply-Designation-error").html("");
      $("#apply-phone-error").html("Phone number is required !")
      return false;
   }
   else if( applyPhone && applyPhone.length > 10) {
      $("#apply-name-error").html("")
      $("#apply-email-error").html("")
      $("#apply-Designation-error").html("");
      $("#apply-phone-error").html("only 10 digits !!")
      return false;
   }
     else if( subject ==='' || subject===null) {
      $("#apply-name-error").html("")
      $("#apply-email-error").html("")
      $("#apply-phone-error").html("")
      $("#apply-Designation-error").html("Designation is required !");
      return false;
   }
   else{
     $.ajax({
         type: "POST",
         enctype: 'multipart/form-data',
         processData: false,  // Important!
         contentType: false,
         cache: false,
         url : formURL,
         data : formData,
         dataType: "json",
         beforeSend:function(){
          $('#applysubmit').css('opacity', '.5');
          $("#applysubmit"). prop('disabled', true);
         },
         success:function(data){
            console.log("data", data)
            if(data==0){
               alert(data)
               // console.log(data)
               $("#applysubmit"). prop('disabled', false);
               $('#applysubmit').css('opacity', '1');
            }
            else{
               alert(data)
               // console.log(data)
               $("#applysubmit"). prop('disabled', false);
               $('#applysubmit').css('opacity', '1');
            }
         },
         error: function(e){
            console.log("e", e)
            $("#applysubmit"). prop('disabled', false);
            $('#applysubmit').css('opacity', '1');
         }
     });
     e.preventDefault();
   }
    });
 });




// Footer Form

$(document).ready(function(){
   $("#contactForm").on('submit', function(e) {
      e.preventDefault();

   var contactName = $('#contact-name').val();
   var contactEmail =$('#contact-email').val();
   var contactPhone =$('#contact-phone').val();

   var formData = new FormData();
   formData.append('contactName', contactName);
   formData.append('contactEmail', contactEmail);
   formData.append('contactPhone', contactPhone);

   formData.append('footerForm', "footerForm");
   var formURL = 'https://horsetechanalytics.com/function.php';
   var regex = new RegExp(/^[0][1-9]\d{9}$|^[1-9]\d{9}$/);

  if(contactName === '' || contactName === null) {
      $("#contact-name-error").html("Name is required !")
      $("#contact-email-error").html("")
      $("#contact-phone-error").html("");
      return false;
  } 
  else if(contactEmail===''|| contactEmail===null) {
      $("#contact-name-error").html("")
      $("#contact-phone-error").html("");
      $("#contact-email-error").html("Email is required !")
     return false;
   }
   else if(contactPhone ==='' || contactPhone===null) {
      $("#contact-name-error").html("")
      $("#contact-email-error").html("")
      $("#contact-phone-error").html("Phone number is required !")
      return false;
   }
   else if( contactPhone && contactPhone.length > 10) {
      $("#contact-name-error").html("")
      $("#contact-email-error").html("")
      $("#contact-phone-error").html("only 10 digits !!")
      return false;
   }
   else{
     $.ajax({
         type: "POST",
         processData: false,  // Important!
         contentType: false,
         cache: false,
         url : formURL,
         data : formData,
         beforeSend:function(){
            $('#contactsubmit').css('opacity', '.5');
            $("#contactsubmit"). prop('disabled', true);
         },
         success:function(data){
            console.log("data", data)
            if(data==0){
               alert(data)
               // console.log(data)
               $("#contactsubmit"). prop('disabled', false);
               $('#contactsubmit').css('opacity', '1');
            }
            else{
               alert(data)
               // console.log(data)
               $("#contactsubmit"). prop('disabled', false);
               $('#contactsubmit').css('opacity', '1');
            }
         },
         error: function(e){
            console.log("e", e)
            $("#contactsubmit"). prop('disabled', false);
            $('#contactsubmit').css('opacity', '1');
         }
     });
     e.preventDefault();
   }
    });
 });


