window.addEventListener('DOMcontentLoaded', function (){
    function lectureMessages(){
        var request = new XMLHttpRequest();
        ajax.addEventListener("load", function(event){
            console.log(data.target.reponseText);

        })
        ajax.open("GET", "./ws_ecriture.php");
        ajax.send();
    }
    lectureMessages();
    setInterval(lectureMessages, 10000)
})