$(document).ready(function(){

  // Delete 
  $('.delete').click(function(){
      var el = this;

      // Delete id
      var id = $(this).data('id');
      console.log(id);
      
      var confirmalert = confirm("Are you sure?");
      if (confirmalert == true) {
          // AJAX Request
          $.ajax({
              url: 'delete.php',
              type: 'POST',
              data: { id:id },
              success: function(response){
                    console.log(id);
                  if(response == 1){
                      // Remove row from HTML Table
                      $(el).closest('tr').css('background','tomato');
                      $(el).closest('tr').fadeOut(800,function(){
                          $(this).remove();
                      });
                  }else {
                      alert('Invalid ID.');
                  }
              }
          });
      }
  });



  $('.odgledao').click(function(){
      console.log(1);
    var el = this;
    console.log("radi");
    var id = $(this).data('id');
    
    $.ajax({

        url: 'update.php',
        type: 'POST',
        data: { id:id },
        success: function(response){
            console.log(id);
            if(response==1){
                $("#crossmark").attr("src","img/tick.png");
            }else{
                alert('Invalid ID.');
            }
        }
    });
 });


});