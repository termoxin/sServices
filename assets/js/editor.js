var files;

$('input[type=file]').change(function(){
    files = this.files;
});

$('.submit.button').click(function(event){
   event.stopPropagation();
   event.preventDefault();

   var data = new FormData();

   $.ajax({
       url: '/dashboard/editor',
       type: 'POST',
       data: data,
       cache: false,
       proccessData: false,
       contentType: false,
       success: function() {
           console.log('good');
       }
   })
});