
let url = '/api/v1/cars/price';

getData();
async function getData() {

    let res = await fetch(url);

    let data = await res.json();

}

