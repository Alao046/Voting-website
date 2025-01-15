var tvote = document.getElementById('tvote');
var avote = document.getElementById('avote');
var pvote = document.getElementById('pvote');
var tcount = document.getElementById('tcount');
var acount = document.getElementById('acount');
var pcount = document.getElementById('pcount');
var back = document.getElementById('back');




back.onclick = function(){
tvote.value="VOTED";
avote.value="VOTED";
pvote.value="VOTED";
    // tcount.innerText= this.innerText + 1;
    tvote.style.backgroundColor="red";
    avote.style.backgroundColor="red";
    pvote.style.backgroundColor="red";
    tvote.style.pointerEvents="none";
    avote.style.pointerEvents="none";
    pvote.style.pointerEvents="none";
    // alert ("voted successfully,thank you.");
}

// tvote.onclick = function(){
// tvote.value="VOTED";
//     tcount.innerText= this.innerText + 1;
//     tvote.style.backgroundColor="red";
//     tvote.style.pointerEvents="none";
//     avote.style.pointerEvents="none";
//     pvote.style.pointerEvents="none";
//     alert ("voted successfully,thank you.");
// }

// avote.onclick = function(){
//     avote.value="VOTED";
//         acount.innerText= this.innerText + 1;
//         avote.style.backgroundColor="red";
//         tvote.style.pointerEvents="none";
//         avote.style.pointerEvents="none";
//         pvote.style.pointerEvents="none";
//         alert ("voted successfully,thank you");
//     }    

//     pvote.onclick = function(){
//         pvote.value="VOTED";
//             pcount.innerText= this.innerText + 1;
//             pvote.style.backgroundColor="red";
//             tvote.style.pointerEvents="none";
//             avote.style.pointerEvents="none";
//             pvote.style.pointerEvents="none";
//             alert ("voted successfully,thank you");
//         }