const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhYzI3NmEyZTlhMmI1OTQxZjE2MWQ2ZmRlNTRkZTk3MCIsInN1YiI6IjY2NDhiNDhlOGVlN2Y4MWUyZDkyNjdiMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lm2YyOVJxgEHJvEglj9p01T4lCPJzyRf5z_FYOxK1Ok'
    }
};

fetch('https://api.themoviedb.org/3/account/21276154/favorite/movies?language=en-US&page=1&sort_by=created_at.asc', options)
    .then(response => response.json())
    .then(response => {
        createElements(response.results)
        console.log(response.results)
    })
    .catch(err => console.error(err));

function createElements(response) {
    const blok = document.getElementById("filmler")
    response.forEach(element => {
        const blokDiv = document.createElement("div");
        blokDiv.className = "col-12 col-md-6 col-lg-2 mb-4";  // Bootstrap grid sistemini kullanarak sütunlar oluşturun
        blokDiv.innerHTML = `
            <div class="card h-100">
                <img src="https://image.tmdb.org/t/p/w200${element.poster_path}" class="card-img-top" alt="${element.title} poster">
                <div class="card-body">
                    <h5 class="card-title">${element.title}</h5>
                    <p class="card-text"><strong>Çıktığı Tarih:${element.release_date.substring(0, 4)}</p>
                </div>
            </div>
        `;
        blok.appendChild(blokDiv);
    });

}

