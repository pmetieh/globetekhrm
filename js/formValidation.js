/**
 * Created by Paul on 11/11/2014.
 */
$(function(){

    $('input#county').bind('blur', function(){
        // alert('County code must be numeric and not more than two dgits');
        var regEx = /\d\d/;
        //get the text in the text box

        var text = $('#county').val();
       // alert('text : '+text);
        //alert(regEx.test(text));
        /* */if(!regEx.test(text))
        {
            //alert('text : '+text);
            alert('County code must be numeric and be exactly two digits');
            $('#county').css('backgroundColor', 'red');
            $('#county').focus();

        }
    })
});

$(function(){

    $('input#zone').bind('blur', function(){
        // alert('County code must be numeric and not more than two dgits');
        var regEx = /\d\d/;
        //get the text in the text box

        var text = $('#zone').val();
        // alert('text : '+text);
        //alert(regEx.test(text));
        /* */if(!regEx.test(text))
        {
            //alert('text : '+text);
            alert('Zone code must be numeric and be exactly two digits');
            $('#zone').css('backgroundColor', 'red');
            $('#zone').focus();

        }
    })
});

$(function(){

    $('input#community').bind('blur', function(){
        // alert('County code must be numeric and not more than two digits');
        var regEx = /\d\d/;
        //get the text in the text box

        var text = $('#community').val();
        // alert('text : '+text);
        //alert(regEx.test(text));
        /* */if(!regEx.test(text))
        {
            //alert('text : '+text);
            alert('Community code must be numeric and be exactly two digits');
            $('#community').css('backgroundColor', 'red');
            $('#community').focus();

        }
    })
});

$(function(){

    $('input#block').bind('blur', function(){
        // alert('County code must be numeric and not more than two digits');
        var regEx = /[A-Z]/;
        //get the text in the text box

        var text = $('#block').val();
        // alert('text : '+text);
        //alert(regEx.test(text));
        /* */if(!regEx.test(text))
        {
            //alert('text : '+text);
            alert('Block code must be a capitalized alphabet');
            $('#block').css('backgroundColor', 'red');
            $('#block').focus();

        }
    })
});


$(function(){

    $('input#houseNo').bind('blur', function(){
        // alert('County code must be numeric and not more than two digits');
        var regEx = /(\d\d){2,3}/;
        //get the text in the text box

        var text = $('#houseNo').val();
        if(Number(text) > 100)
        {
            alert('A block cannot have a house number greater than 100');
            $('#houseNo').css('backgroundColor', 'red');
            exit();
        }
        //alert(regEx.test(text));
        /* */if(!regEx.test(text))
        {
            //alert('text : '+text);
            alert('House Number must be numeric and cannot three digits');
            $('#houseNo').css('backgroundColor', 'red');
            $('#houseNo').focus();
            exit();

        }
    })
});