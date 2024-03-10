//DOM Selection part 1
//getElementById
const judul = document.getElementById('judul');
judul.style.color ='red';
judul.style.backgroundColor = 'grey';
judul.innerHTML = 'Ingrid Angel';


//document.getElementsByTagName

const p = document.getElementsByTagName('p');
for (int i = 0; i < p.length; i++){
    p[i].style.backgroundColor = 'lightblue'
}