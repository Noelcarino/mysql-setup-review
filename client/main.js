fetch('../api/index.php', {
    method: "GET",
    headers: {
        "Accept":"application/json",
        "Content-Type":"application/json"
    }
})
.then( res => res.json())
.then( response => {
    console.log(JSON.parse(response));
})
.catch(error => console.log(error));

console.log("yes?");