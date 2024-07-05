$('#user').click(function () {  
    $('.popup').toggle();
    
})

$('#sem').click(function () {  
    $('.sem').show();
    $('.sem').css({'display': 'flex', 'align-items': 'center'})
    
})

$('#close').click(function () {  
    $('.sem').hide();
    // $('.misc').hide();
})

$('#misc').click(function () {  
    $('.misc').show();
    $('.misc').css({'display': 'flex', 'align-items': 'center'})
    
})

$('#close2').click(function () {  
    $('.misc').hide();
    // $('.misc').hide();
})