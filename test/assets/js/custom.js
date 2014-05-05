
function customEffects(){
 

  //menu link hover  
  $("li").hover(
    
    function() {
      $(this).transition({
        backgroundColor: 'black',
        color:"#E2B618"
      },500);
    },
  
    function(){
      $(this).transition({
        backgroundColor: 'inherit',
        color:"inherit"
      },400);
    });
  
   $("button").hover(
    
    function() {
      $(this).transition({y: '-5px', backgroundColor:"black"});
    },
  
    function(){
      $(this).transition({y: '0px', backgroundColor:"inherit"});
    });
  
  
  
  
  
  
};
