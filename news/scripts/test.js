
const app = document.getElementById('root')

const container = document.createElement('div')
container.setAttribute('class', 'container')

app.appendChild(container)

var request = new XMLHttpRequest()
request.open('GET', 'https://newsapi.org/v2/top-headlines?country=us&apiKey=dda138d75e5741048e1a9902fdee83c0', true)

request.onload = function() {
  // Begin accessing JSON data here
  var data = JSON.parse(data);

  if (request.status >= 200 && request.status < 400) {
    data.forEach(article => {
      const card = document.createElement('div')
      card.setAttribute('class', 'card')

      const h1 = document.createElement('h1')
      h1.textContent = article.title

      const p = document.createElement('p')
      article.description = article.description.substring(0, 300)
      p.textContent = `${article.description}...`

      container.appendChild(card)
      card.appendChild(h1)
      card.appendChild(p)
    })
  } else {
    const errorMessage = document.createElement('marquee')
    errorMessage.textContent = `Gah, it's not working!`
    app.appendChild(errorMessage)
  }
}

request.send()
