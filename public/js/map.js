function pageScroll(){
    $('html, body').animate({
        scrollTop: $("#scroll-test").offset().top - 60
    }, 600);
}

function showStory(country) {

    $.getJSON('/stories/json?country=' + country, function (result) {
        $.each(result, function (i, field) {
            console.log(field.country.name);
            var country = field.country.name,
                category = field.category.name,
                region = field.region.name,
                author = field.user.name,
                issue = field.issue,
                image = field.image,
                title = field.title,
                href = "/stories/"+field.name;
            if(category == "Arts and Culture") {
                cls = "arts-culture";
            }
            else {
                cls='';
            }

            $("#content-holder").html("&nbsp;");
            $("#content-holder").append("<div class='col-md-4'><div class='featured-article featured-3'><a href=" + href + "><div class='image' style=\"background-image: url('" + image + "')\"></div><h4 class='issue'>" + issue + "<span class='fa fa-circle gray circle'></span><span class='region'>" + region + "</span></h4 ><h3>" + title + "</h3><h4>By "+author+"</h4></a></div></div>")
        });
    });
}

var svg = d3.select("#map-holder");

var projection = d3.geoMercator().scale(100);
var pathGenerator = d3.geoPath().projection(projection);

var rawData;
var countries;

d3.json("world-50m.json", function (error, data) {
    rawData = data;
    countries = topojson.feature(rawData, rawData.objects.countries);
    showMap();
    showPins();
});

// function to parse CSV file
// longitude x coord, latitude y coords
function parseLine(line) {
    return {
        countryCode: line["country"],
        x: Number(line["longitude"]),
        y: Number(line["latitude"]),
        name: line["name"],
        lang: line["language"],
        capital: line["capital"]
    };
}

// array of country objects
var allCountries = [];
function countryObject(code, x, y, name, lang, capital) {
    this.countryCode = code;
    this.coord = [x, y];
    this.name = name;
    this.language = lang;
    this.capital = capital;
}
var chosenCountries = ["TZ", "IT", "ID", "MA", "AR", "NO", "CN", "BT"];
var countryArray = []; // array of chosen country objects

d3.csv("countries.csv", parseLine, function (error, data) {

    console.log("data loaded");

    data.forEach(function (d) {
        var country = new countryObject(d.countryCode, d.x, d.y, d.name, d.lang, d.capital)
        //allCountries.push(country); // array of all country objects
        if (chosenCountries.indexOf(country.countryCode) > -1) {
            countryArray.push(country);
        }
    });

});

// draw the world map
function showMap() {
    projection.fitExtent([[-120, -400], [1270, 1300]], countries);
    pathGenerator = d3.geoPath().projection(projection);

    // draw borders
    var paths = svg.selectAll("path.country").data(countries.features);
    paths.enter().append("path").attr("class", "country")
        .merge(paths)
        .attr("fill", "#e4e4e4")
        .attr("stroke", "#fafafa")
        .attr("stroke-width", "1")
        .attr("d", function (country) {
            return pathGenerator(country);
        });
}

// function to add pins to svg
var xmlns = "http://www.w3.org/2000/svg",
    xlinkns = "http://www.w3.org/1999/xlink";
var usePins = document.getElementById("usePins");
var useRects = document.getElementById("useRects");

function addPin(a, b, country) {
    var x = a - 13; // offset pins
    var y = b - 31;
    var g = document.createElementNS(xmlns, "g"),
        use = document.createElementNS(xmlns, "use"),
        t = 'translate(' + x + ',' + y + ') ' +
            'scale(0.5)';

    use.setAttributeNS(null, "class", "pin");
    use.setAttributeNS(xlinkns, "xlink:href", "#pin");
    g.setAttributeNS(null, "transform", t);
    g.setAttributeNS(null, "id", country);
    g.appendChild(use);
    usePins.appendChild(g);
}

function addRect(x, y, country) {
    var xPos = x + 15;
    var yPos = y - 100;
    var id = 'textbox' + country;
    var g = document.createElementNS(xmlns, "g"),
        use = document.createElementNS(xmlns, "use"),
        t = 'translate(' + xPos + ',' + yPos + ') ';

    use.setAttributeNS(null, "class", "textbox");
    use.setAttributeNS(xlinkns, "xlink:href", "#textbox");
    g.setAttributeNS(null, "transform", t);
    g.setAttributeNS(null, "id", id);
    g.setAttributeNS(null, "visibility", "hidden");
    g.appendChild(use);
    useRects.appendChild(g);
}

function showPins() {

    countryArray.forEach(function (d) {

        var tooltipID = "tooltip" + d.countryCode;
        var textboxID = "textbox" + d.countryCode;
        var xPos = projection(d.coord)[0];
        var yPos = projection(d.coord)[1];

        addPin(xPos, yPos, d.countryCode);
        addRect(xPos, yPos, d.countryCode);

        var textbox = d3.select('#' + textboxID);

        // pin hover function
        d3.select("g#" + d.countryCode)
            .on("click", function () {
                showStory(d.countryCode);

                pageScroll();
            })
            .on("mouseover", function () {
                // d3.select("#"+tooltipID)
                // .attr("visibility", "visible");
                textbox.attr("visibility", "visible");
            })
            .on("mouseout", function () {
                // d3.select("#"+tooltipID)
                // .attr("visibility", "hidden");
                textbox.attr("visibility", "hidden");
            });

        // add country labels
        svg.append("text")
            .attr("id", d.countryCode)
            .attr("x", xPos)
            .attr("y", yPos + 8)
            .attr("font-size", 10)
            .attr("alignment-baseline", "central")
            .attr("text-anchor", "middle")
            .attr("fill", "#555")
            .on("click", function () {
                showStory(d.countryCode);
            })
            .on("mouseover", function () {
                // d3.select("#"+tooltipID)
                // .attr("visibility", "visible");
                textbox.attr("visibility", "visible");
            })
            .on("mouseout", function () {
                // d3.select("#"+tooltipID)
                // .attr("visibility", "hidden");
                textbox.attr("visibility", "hidden");
            })
            .text(d.name);

        // tool tips text
        textbox.append("text")
            .attr("font-size", 20)
            .attr("x", 20)
            .attr("y", 32)
            .attr("alignment-baseline", "central")
            .attr("text-anchor", "left")
            .attr("fill", "#222")
            .text(d.name);

        textbox.append("text")
            .attr("font-size", 12)
            .attr("x", 20)
            .attr("y", 60)
            .attr("alignment-baseline", "central")
            .attr("text-anchor", "left")
            .attr("fill", "#222")
            .text('Language: ' + d.language);

        textbox.append("text")
            .attr("font-size", 12)
            .attr("x", 20)
            .attr("y", 82)
            .attr("alignment-baseline", "central")
            .attr("text-anchor", "left")
            .attr("fill", "#222")
            .text('Capital City: ' + d.capital);

    });

}