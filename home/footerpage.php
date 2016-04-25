<div id="footer_div">
    <div id="content1" class="content">
        <h4>Recruitment</h4>
        <p style="text-align: left; padding: 10px;">
            <a href="#"><img src="../images/hr4.jpg"/></a>
        </p>

    </div>
    <div id="content2" class="content">
        <h4>Staff Dicipline</h4>
        <p style="text-align: left; padding: 10px;">
            <a href="#" ><img src="../images/hr3.jpg"/></a>
        </p>


    </div>
    <div id="content3" class="content">
        <h4>Performance Management</h4>
        <p style="text-align: left; padding: 10px;">
            <a href="#"><img src="../images/hr7.jpg"/></a>
        </p>


    </div>
    <div id="content4" class="content">
        <h4>Reports</h4>
        <p style="text-align: left;">
            <a href="#"><img src="../images/hr6.jpg"/></a>
        </p>

    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../jQuery/jquery-1.11.0.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script type="text/javascript">
    $(function(){
    alert('Front footer');
        $('div.content').hover(function(){
            // alert($(this).find('h4').text());
            var text = $(this).find('h4').text();

           if(text == 'Performance Management')
                $('<div id="menu"><ul>' +
                '<li><a href="../admin/newappraisal.php">New Performance Review</a></li>' +
                '<li><a href="#">Existing Performance Review</a></li></ul></div>').appendTo(this);

            //get the position of the container div
            var parentPos = $(this).position();
            var toP = parentPos.top;
            var lefT = parentPos.left;

            var widthParent = $(this).css('width');
            var heightParent = $(this).css('height');

            var y = $(this).offset();

            //  alert('Parent Div height '+ heightParent + ' and width '+widthParent);
            //  alert('Parent offSet()' + ' top '+ y.top + ' Left ' + y.left );
            //position the popup menu
            //$('div#menu').offset({top: toP + 60, left: lefT + 80});
            //arrange the links horozontally
            $('div#menu ul li').css('display', 'block');

            //set up the pop up menu
            $('div#menu', this).css({
                'display': 'block',
                'color': 'white',
                'width': 150,
                'height': 'auto',
                'backgroundColor': 'red',
                position: 'absolute',
                /* top : toP + 10,
                 left : lefT + 10,*/
                'zIndex': 10}).offset({top: toP + 60, left: lefT + 80});
        }, function(){
            // var x = $('div#menu').position();
            var parentPos = $(this).position();
            var toP = parentPos.top;
            var lefT = parentPos.left;

            var y = $('div#menu').offset();
            // alert('Using Position()' + ' top '+ toP + ' Left ' + lefT );
            // alert('Target offSet()' + ' top '+ y.top + ' Left ' + y.left );
            //set offset based on parents

            // var z = $('div#menu').offset();
            // alert('New Target Offset '+ ' top '+ z.top + ' Left ' + z.left);
            // $(this).css('border', 'none');
            $('div#menu').fadeOut(200).remove();

        });

    });

    moveImage();
    moveLeft();
    moveRight();

</script>

    <div style="text-align: center; clear: both;">
<h6>&copy  GSLInc &nbsp;&nbsp;
    <?php
      echo	date("D d M  Y : h : m: s");
    ?>
    <?php
        echo 'Designed By Globetek Services International Ltd';
    ?>
 </h6>
    </div>
</div>
</body>
</html>