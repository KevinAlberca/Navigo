/**
 * Created by awh on 10/12/2016.
 */

$('div#verify_card button[type="button"]').click(function(){
    var card_number = $('div#verify_card input#card_id').val(),
        token = $('input[name=_token]').val();

    $.ajax({
        url: window.location.href,
        type: 'POST',
        headers: {'X-CSRF-TOKEN': token},
        data: {
            'card_id': card_number
        },
        datatype: 'JSON',
        success: function (data) {
            $('div.result ul').css({
                'display': 'block',
            });

            var today = new Date(),
                msg = data.card_id.subscription_end < today ? 'La carte n\'est plus active' : 'La carte est encore active';

            $('div.result h2').text('Carte : ' + data.card_id.id);
            $('div.result ul li.subscription_start').text('Debut d\'abonnement : '+ data.card_id.subscription_start)
            $('div.result ul li.subscription_end').text('Fin d\'abonnement : '+ data.card_id.subscription_end)
            $('div.result ul li.is_active').text(msg)
            // <li class="user"></li>
        },
        error: function(e){
            console.log(e.statusText);
        }
    });

});
