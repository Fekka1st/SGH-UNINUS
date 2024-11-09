const g1 = document.querySelector('.g1');
const g2 = document.querySelector('.g2');
const d1 = document.querySelector('.d1');
const d2 = document.querySelector('.d2');
const d3 = document.querySelector('.d3');
const d4 = document.querySelector('.d4');
const time = document.querySelector('time');

const rotation = [
    { x:   0, y:   0 }, // 0
    { x:   0, y: 270 }, // 1
    { x:   0, y: 180 }, // 2    
    { x:   0, y:  90 }, // 3        
    { x:   0, y:  90 }, // 4
    { x: 270, y:   0 }, // 5
    { x:  90, y:   0 }, // 6        
    { x:  90, y:   0 }, // 7    
    { x: 270, y:   0 }, // 8   
    { x:  90, y: 180 }  // 9   
]


let count = 0;

setInterval(()=>{
    //  current date + increment
    const now = new Date();
    now.setDate(now.getDate() + count);
    const month = now.getMonth() + 1;
    const date  = now.getDate();    
     
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    time.textContent = now.toLocaleDateString('en', options);
    
    count++;
    
    
    //  face values
    const n1 = month < 10 ? 0 : (month - month % 10)/10 ;
    const n2 = month < 10 ? month : month % 10;    
    const n3 = date < 10 ? 0 : (date - date % 10)/10;
    const n4 = date < 10 ? date : date % 10;    
    
    //  console.log(n1, n2, n3, n4)    
    
    //  flip dice 
    const flip1 = n2 % 2 === 0 || n2 === 9 || n1 === 3;
    const flip2 = n4 % 2 === 0 || n4 === 9 || n3 === 3;          
    
    
    //  rotation 
    let r1, r2, r3, r4;
    
    if(flip1){
        g1.style.transform = `rotateY(180deg) rotateX(-30deg)`;            
        r1 = rotation[n2];
        r2 = rotation[n1];        
    } else {
        g1.style.transform = `rotateX(30deg)`;            
        r1 = rotation[n1];
        r2 = rotation[n2];        
    }
    
    if(flip2){
        g2.style.transform = `rotateY(180deg) rotateX(-30deg)`;            
        r3 = rotation[n4];
        r4 = rotation[n3];        
    } else {
        g2.style.transform = `rotateX(30deg)`;            
        r3 = rotation[n3];
        r4 = rotation[n4];        
    }    
    
    d1.style.transform = `rotateX(${r1.x}deg) rotateY(${r1.y}deg) rotateY(${flip1?-180:0}deg)`;
    d2.style.transform = `rotateX(${r2.x}deg) rotateY(${r2.y}deg) rotateY(${flip1?-180:0}deg)`;
    d3.style.transform = `rotateX(${r3.x}deg) rotateY(${r3.y}deg) rotateY(${flip2?-180:0}deg)`;
    d4.style.transform = `rotateX(${r4.x}deg) rotateY(${r4.y}deg) rotateY(${flip2?-180:0}deg)`;    
    
    
},2000);