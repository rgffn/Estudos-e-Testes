import webbrowser

import requests
from bs4 import BeautifulSoup


input_func = None
try:
    input_func = raw_input('Digite a musica que sera tocada: ')
except NameError:
    input_func = input('Digite a musica que sera tocada: ')

query = input_func.replace(' ', '+')

url = 'https://www.youtube.com/results?search_query=' + query
source_code = requests.get(url, timeout=15)
plain_text = source_code.text
soup = BeautifulSoup(plain_text, "html.parser")

songs = soup.findAll('div', {'class': 'yt-lockup-video'})
song = songs[0].contents[0].contents[0].contents[0]


try:
    link = song['href']
    webbrowser.open('https://www.youtube.com' + link)
except KeyError:
    print("não foi possivel achar, verifique a sua internet ou tente outra palavra")
