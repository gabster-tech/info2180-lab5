window.onload = function (){
    let lookupCtryBtn = document.getElementById("lookup-country");
    let lookupCityBtn = document.getElementById("lookup-city");
    let xmlReq = new XMLHttpRequest();
    let result = document.getElementById("result");
    let country = document.getElementById("country");

    xmlReq.addEventListener("load", () =>{
        let output = xmlReq.responseText;
        result.innerHTML = output;
    });

    lookupCtryBtn.addEventListener('click', () => {

        let lookupQuery = 'world.php?country='+country.value;
        
        fetch(lookupQuery)
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

        lookupCityBtn.addEventListener('click', () => {

            let lookupQuery = 'world.php?country='+ country.value + "&context=cities";
            
            fetch(lookupQuery)
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