
    let homes = document.querySelectorAll("#home");
    let regionLanguages = document.querySelectorAll("#region-language");
    let currencys = document.querySelectorAll("#currency");

    // mationality and currency section stert
    let linkStyle1 = document.getElementById("link-style-1");
    let linkStyle2 = document.getElementById("link-style-2");
    // mationality and currency section end

    const currentPath = window.location.pathname;

    // flight hotel and others section 
    let flightLink = document.querySelectorAll("#flight-link");
    let hotelLink = document.querySelectorAll("#hotel-link");
    let clubLink = document.querySelectorAll("#club-link");
    let sportLink = document.querySelectorAll("#sport-link");
    
    
    homes.forEach(home => {
        home.href = "../index.html";
    });
    

// regional language and currency links starts here
    regionLanguages.forEach(regionLanguage => {
        regionLanguage.href = "html/region-language.html";
        if (currentPath.includes(regionLanguage.getAttribute("href"))) {
            linkStyle1.classList.add("active")
        }
    });
    
    
    currencys.forEach(currency => {
        currency.href = "html/currency.html";
        if (currentPath.includes(currency.getAttribute("href"))) {
            linkStyle2.classList.add("active")
        } 
    })
// regional language and currency links ends here

flightLink.forEach(flight => {
    flight.href = "html/flight.html";
})