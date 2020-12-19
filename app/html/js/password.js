function copyTextToClipboard(ps_id) {
    var str = document.getElementById(ps_id).innerHTML;
    console.log(str);

    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);

    changeIcon(2);
}

function changeIcon(sec = 2){
    var count = 0;
    var countup = function(){
      console.log(count++);
    } 

    var id = setInterval(function(){
        countup();
        if(count > sec){　
        clearInterval(id);　//idをclearIntervalで指定している
    }}, 1000);
}