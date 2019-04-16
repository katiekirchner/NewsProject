/*global document: false */

var app = document.getElementById('root');

var container = document.createElement('div');
container.setAttribute('class', 'container');

var card = document.createElement('div');
var h1 = document.createElement('h1');
var p = document.createElement('p');


app.appendChild(container);

var url = 'https://newsapi.org/v2/top-headlines?' +
          'country=us&' +
          'apiKey=dda138d75e5741048e1a9902fdee83c0';
var req = new Request(url);
fetch(req)
    .then(function (response) {
      if (response.status >= 200 && response.status < 400) {

            response.json().then(function (data) {

              for(var i = 0; i < data.msg.length; i++){
                  card.setAttribute('class', 'card');

                  h1.textContent = data.title;

                  p.textContent = data.description;

                  container.appendChild(card);
                  card.appendChild(h1);
                  card.appendChild(p);

                  console.log(data);
              };

            });

        } else {
        // var errorMessage = document.createElement('marquee');
        // errorMessage.textContent = `Gah, it's not working!`;
        // app.appendChild(errorMessage);
        }
    });

request.send();
