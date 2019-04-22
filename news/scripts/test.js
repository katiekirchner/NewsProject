
var app = document.getElementById('root');


var container = document.createElement('div');
container.setAttribute('class', 'container');

app.appendChild(container);


var request = new XMLHttpRequest();
request.open('GET', 'https://newsapi.org/v2/top-headlines?country=us&apiKey=dda138d75e5741048e1a9902fdee83c0', true);

request.onload = function() {
  var objects = JSON.parse(this.response);


  if (request.status >= 200 && request.status < 400) {

      var data = Object.values(objects)[2];

      data.shift();
      data.shift();

      console.log(data);

        for (var i=0; i<data.length; i++) {

          var image = document.createElement('img');
          image.setAttribute('class', 'card-image');
          image.src = data[i].urlToImage;

          var link = data[i].url;

          var aWrapper = document.createElement('a');
          aWrapper.setAttribute('class', 'a-card');
          aWrapper.setAttribute('href', link);
          aWrapper.addEventListener('click', function() {
              window.open(this.link)
          }, false);



          var card = document.createElement('div');
          card.setAttribute('class', 'card');





          var h1 = document.createElement('h1');
          h1.setAttribute('class', 'card-header');
          h1.textContent = data[i].title;

          var p = document.createElement('p');
          p.setAttribute('class', 'card-p');
          // key.description = key.description.substring(0, 300);
          p.textContent = data[i].description;

          container.appendChild(card);
          card.appendChild(aWrapper);
          card.appendChild(image);
          card.appendChild(h1);
          card.appendChild(p);
     };
  } else {
    var errorMessage = document.createElement('marquee');
    errorMessage.textContent = `Error accessing API`;
    app.appendChild(errorMessage);
  }

};


request.send();
