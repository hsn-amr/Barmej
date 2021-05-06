// liverpool
const liverpool = document.getElementsByClassName('liverpool');

for(let i = 0; i< liverpool.length; i++){
    liverpool[i].addEventListener('click', function(){
        location = 'teams/liverpool.html';
    }, false)
}

// chelsea
const chelsea = document.getElementsByClassName('chelsea');

for(let i = 0; i< chelsea.length; i++){
    chelsea[i].addEventListener('click', function(){
        location = 'teams/chelsea.html';
    }, false)
}

// arsenal
const arsenal = document.getElementsByClassName('arsenal');

for(let i = 0; i< arsenal.length; i++){
    arsenal[i].addEventListener('click', function(){
        location = 'teams/arsenal.html';
    }, false)
}

// man-city
const manCity = document.getElementsByClassName('man-city');

for(let i = 0; i< manCity.length; i++){
    manCity[i].addEventListener('click', function(){
        location = 'teams/man-city.html';
    }, false)
}

// man-united
const manUnited = document.getElementsByClassName('man-united');

for(let i = 0; i< manUnited.length; i++){
    manUnited[i].addEventListener('click', function(){
        location = 'teams/man-united.html';
    }, false)
}