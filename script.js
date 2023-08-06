
const searchBox = document.querySelector(".search");
const searchBtn = document.querySelector(".submit");
const weatherIcon = document.querySelector(".weather-icon");

//fetches open weather api
const apikey = "8688fbd3554cfb647615d7f9735403dd";
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=";

async function checkWeather(city){
    const response = await fetch(apiUrl + city + ` &appid=${apikey}`);

    var data = await response.json();

    document.querySelector(".city").innerHTML = data.name;
    document.querySelector(".temp").innerHTML = Math.round(data.main.temp);
    document.querySelector(".humidity").innerHTML = Math.round(data.main.humidity);
    document.querySelector(".wind").innerHTML = Math.round(data.wind.speed);

    //toggles weather icon

    if (data.weather[0].main == "Clouds") {
        weatherIcon.src = "img/clouds.png";
    } 
    else if(data.weather[0].main == "Clear"){
        weatherIcon.src = "img/clear.png";
    }
    else if(data.weather[0].main == "Sunny"){
        weatherIcon.src = "img/sunny.png";
    }
    else if(data.weather[0].main == "Rain"){
        weatherIcon.src = "img/rain.png";
    }
    else if(data.weather[0].main == "Drizzle"){
        weatherIcon.src = "img/drizzle.png";
    }
    else if(data.weather[0].main == "Mist"){
        weatherIcon.src = "img/mist.png";
    }
    else if(data.weather[0].main == "Snow"){
        weatherIcon.src = "img/snow.png";
    }



    //toggles weather information
    document.querySelector(".weather").style.display = "block";

}

searchBtn.addEventListener('click',()=>{
checkWeather(searchBox.value);

    searchBox.value = ""; //clears search box

})
