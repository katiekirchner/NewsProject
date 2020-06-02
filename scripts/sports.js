var app = document.getElementById('root');

var container = document.createElement('div');
container.setAttribute('class', 'side-div');

app.appendChild(container);

var request = new XMLHttpRequest();
request.open('GET', 'https://newsapi.org/v2/top-headlines?country=us&category=sports&apiKey=d6ee6ef184744adc9bd26544c8fa51ac', true);

request.send();

request.onload = function() {
  var objects = JSON.parse(this.response);

  if (request.status >= 200 && request.status < 400) {
      var data = Object.values(objects)[2];

      data.shift();
      data.shift();

      console.log(data);

      for (var i=0; i<data.length; i++) {
        var valid = false;
        if (data[i].urlToImage != null){
          var https = data[i].urlToImage.substring(0,5);
        }

        if (data[i].content != null && (data[i].urlToImage != null && https == "https")){
          valid = true;
        };

        if (valid){
          var image = document.createElement('img');
          image.setAttribute('class', 'card-image');
          image.src = data[i].urlToImage;

          var link = data[i].url;
          var bracket = data[i].content.indexOf('[');
          var elipsis = data[i].content.indexOf(' ... ');
          var dash = data[i].title.indexOf(' - ');

          var aWrapper = document.createElement('a');
          aWrapper.setAttribute('class', 'a-card');
          aWrapper.setAttribute('href', link);
          aWrapper.setAttribute('target', "_blank")


          var card = document.createElement('div');
          card.setAttribute('class', 'card');


          var h1 = document.createElement('h1');
          h1.setAttribute('class', 'card-header');
          h1.textContent = data[i].title.substring(0, dash);

          var description = document.createElement('p');
          description.setAttribute('class', 'card-desc');
          description.textContent = data[i].description;

          var p = document.createElement('p');
          p.setAttribute('class', 'card-p');
          p.textContent = data[i].content.substring(0, 261);

          var hr = document.createElement('hr');
          hr.setAttribute('class', 'card-hr');

          var cont = document.createElement('p');
          cont.setAttribute('class', 'cont-reading');
          cont.textContent = "Click to view full article.";

          // var button = document.createElement('button');
          // button.setAttribute('class', 'card-button');
          // button.setAttribute('onclick', 'addArticle()');
          // button.textContent = "Add to My Articles";

          container.appendChild(card);
          card.appendChild(aWrapper);
          card.appendChild(image);
          card.appendChild(h1);
          card.appendChild(description);
          card.appendChild(hr);
          card.appendChild(p);
          card.appendChild(cont);
          // card.appendChild(button);
        };
   };
} else {
  var errorMessage = document.createElement('marquee');
  errorMessage.textContent = `Error accessing API`;
  app.appendChild(errorMessage);
}

};

