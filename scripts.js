//Задание 1

function getFirstSentence() {
    var firstNews = $('div.image_block').first();
    var firstNewsText = firstNews.find("p:eq(4) span").text();
    return firstNewsText.split(".")[0];
}

//Задание 2

function currentTime() {
    var date = new Date();
    var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();

    $("div.kart-phone span").html("&nbsp;" + time);
}

function clock() {
    $("div.kart-phone h2").append('<span></span>');
    setInterval("currentTime()", 1000);
}

$(document).ready(function () {
    clock();
    console.log(getFirstSentence());
});
