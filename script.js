var arr = [];

window.onload = function(){
    setInterval(function(){
        $.ajax({
            type: 'GET',
            url: 'server/refresh.php',
            dataType: 'json',
            success: function(data){
                document.getElementById('result').innerHTML = '';
                for (let i = 0; i < data.length; i++) {
                    document.getElementById('result').innerHTML += `<br>${data[i]['mess']}`;    
                }
            }
        });
    },1000)
}

function send(){
    let cur_mess = document.getElementById('chat-input').value;
    $.ajax({
        type: 'POST',
        url: 'server/send.php',
        dataType: 'json',
        data: {mess: cur_mess},
        success: function(data){
            console.log(data);
        }
    });
}