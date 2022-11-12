window.onload = function (){
    let lookupBtn = document.getElementById("lookup");
    let xmlReq = new XMLHttpRequest();
    let result = document.getElementById("result");
    let country = document.getElementById("country");

    xmlReq.addEventListener("load", () =>{
        let output = xmlReq.responseText;
        result.innerHTML = output;
    });

    lookupBtn.addEventListener('click', () => {

        let lookupQuery = 'world.php?country='+country.value;
        
        fetch(searchQuery)
            .then(response => {
                if (response.ok) {
                    xmlReq.open('GET',lookupQuery);
                    xmlReq.send();
                    return response.text()   
                } 
                else {
                    let error = Promise.reject('An error has occured')
                    console.log(error)
                    return error
                }
            })
        })
}