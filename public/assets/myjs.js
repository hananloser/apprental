console.log('tes')


let url = '/api/v1/cars' ; 


async function  getData(){

    let res = await fetch(url) ;
    
    let data = await res.json(); 

    console.log( data.forEach(element => {
        console.log(element)  
    }));
    
    
} 
getData(); 
