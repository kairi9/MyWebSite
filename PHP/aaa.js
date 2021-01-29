const dClock = ()=>{
    let today = new Date();
    let hour = today.getHours();
    let minute = today.getMinutes();
    let sec = today.getSeconds();
    if(hour < 10) hour = "0" + hour;
    if(minute < 10) minute = "0" + minute;
    $('#hour').attr('value',hour);
    $('#minute').attr('value',minute);
    $('.sec').each(function(i,o){
        let a = Number($(o).text());
        if($(o).hasClass("onTime")){
            $(o).removeClass("onTime");
        }
        if(a == sec){
            $(o).addClass("onTime");
        }
    });
    setTimeout('dClock()',1000);
}

const xAndY = (a)=>{
    const r = ($('#clock').height()/5*2);
    const x = ($('#clock').width()/2);
    const y = ($('#clock').height()/2);
    let x1 = x + r * Math.cos((a *6-90)* Math.PI / 180);
    let y1 = y + r * Math.sin((a *6-90)* Math.PI / 180);
    return [x1,y1]
}

$(document).ready(function(){
    $('#hour-min').fadeIn(3000,dClock());
    $('.sec').each(function(i,o){
        let a = Number($(o).text());
        let xY = xAndY(a);
        let x1 = xY[0];
        let y1 = xY[1];
        $(o).css({
            'top':y1,
            'left':x1
        })
    });
})