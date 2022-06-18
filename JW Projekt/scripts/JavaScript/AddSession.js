$(document).ready(function(){
    $('#add_button').click(function(){
        $.post($('#add_session_form').attr('action'), $('#add_session_form :input'));
        setTimeout(function(){
            $('.fill_input').each(function(index){
                if(index!=0)
                {
                    $.post('scripts/PHP/addItem.php', {amount: parseInt(this.value), item: parseInt(this.name)},function(response)
                    {
                        console.log(response);
                    } );
                }
            });
        },100);
    });
    $('#add_session_form').submit(function(){
        return false;
    });
});