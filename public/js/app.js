function updateMap(){
    fetch("api/api-data")
    .then(response => response.json())
    .then(rsp =>{
        tot_length = Object.keys(rsp.data).length;
        console.log(tot_length)
        var total_death = 0;
        var total_rec = 0;
        document.getElementById('infect').innerHTML = tot_length;
        rsp.data.forEach(element => {
            total_death = total_death + element.dead
            total_rec = total_rec + element.recovered
            longitude = element.logitude;
            latitude = element.latitude;

            var marker = new mapboxgl.Marker({
                draggable: false,
                color:'red',

                })
                .setLngLat([longitude, latitude])
                .addTo(map);

        });

        document.getElementById('dead').innerHTML = total_death;
        document.getElementById('rec').innerHTML = total_rec;
    })
}


updateMap()
