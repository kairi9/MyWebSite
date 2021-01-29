from bs4 import BeautifulSoup
import urllib.request as req
from urllib.parse import urljoin

url = "http://www.htmq.com/html5/"
soup = BeautifulSoup(req.urlopen(url),"html.parser")

datas = soup.select('#content_left > div.items > div:nth-child(37) > div > a')

with open('SQL/a.txt','w',encoding='utf-8') as b:
  for i in datas:
    b.write(f'{urljoin(url,i.get("href"))}\n')