<script type="text/javascript">

$(function(){
    alert('jQuery on Index page');
})

$(function(){
    
     
    $('ul > li').hover(
    function(){ 
        $('ul', this).css({display: "block",
                           width : "150px";,
                           position: "absolute",
                           top: "30px" });
        $('ul', this).stop().slideDown(2000)}, function(){$('ul', this).stop().slideUp(3000)})
})

$(function(){
    alert('Switching image');
    
     
    switchImge();
    setInterval(function(){switchImge()}, 10000); //alert($('img').hasClass('hidden'));
})

var visibleImage;

function switchImge(){
    
        visibleImage = $('.changeImage');
       // alert('First vissible image ' + visibleImage.length);
        var nextImage = visibleImage.next();
        alert('next image : ' + nextImage.length);
        alert('next image : ' + $('img', this).attr('Id'));
        //we have reached the end of the set of images
        //then wrap arround to the first image
        //getAttribute('id'));
        if(nextImage.length == 0)
        {
            //move to the first
            nextImage = $('img').first();
         //  alert(nextImage.attr('is'));
        }
        
        //this is where the change happens
        if(nextImage.hasClass('hidden'))
        {
            //alert('Yes next img has class ' + nextImage.attr('id'));
            //change the class on the visible image to hidden
            visibleImage.removeClass('changeImage').addClass('hidden').fadeOut(100);
            //move the next image with class hidden into position 
            nextImage.removeClass('hidden').addClass('changeImage').fadeIn(100);
             //make the next image visible
          //alert('Yes image changed');
         
            visibleImage = nextImage.next('img');
        
        }
         
         
        
        
       
      //  alert('Visible Image ' + visibleImage.length );
    
     
      
                
    
     
}
</script>